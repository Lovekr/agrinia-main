<?php

namespace App\Http\Controllers\Web;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Cart;
use App\Models\Order;
use App\Models\OrderItems;
use App\Models\PaymentDetails;
use Razorpay\Api\Api;
use App\Models\BillingAddress;
use Session;
use Illuminate\Support\Arr;
use Illuminate\Support\Facades\Http;

class OrderController extends Controller
{
    /**
     * Checkout page
     *
     * @param  int  $id
     * @return \Illuminate\View\View
     */
    public function checkout(Request $request)
    {
        if($request->get('update_cart')) {
            
            $productId = $request->get('product_id');
            $quantityId = $request->get('quantity');
            $weightQuantity = $request->get('weight_quantity');
            
            if(auth()->user()) {
                foreach($productId as $k => $product) {
                    if(isset($quantityId[$k]['quantity'])) {
                        $quantity = $quantityId[$k]['quantity'];
                    } else {
                        $quantity = $quantityId[$k]['weight'];
                    }
                   Cart::where(['user_id' => auth()->user()->id, 'product_id' => $product])->update(['quantity' => $quantity]);
                }
            } else {
                foreach($productId as $k => $product) {
                    $cartItem[] = [
                        'product_id' => $product,
                        'quantity' => isset($quantityId[$k]['quantity']) ? $quantityId[$k]['quantity'] : $quantityId[$k]['weight'],
                        'quantity_type' => array_keys($quantityId[$k])[0],
                        'weight_quantity' => $request->weight_quantity,
                    ];
                    Session::put('user_temp_id',$cartItem);
                }
               
            }
            return redirect('/cart');
        }
        if(auth()->user()) {
            $cartItems  = Cart::with('products')->where('user_id', auth()->user()->id)->get();
            $billingAddress = BillingAddress::where(['user_id' => auth()->user()->id, 'type' => 'billing'])->first();
            return view('checkout.checkout')->with(['cart_items' => $cartItems, 'billing_address' => $billingAddress]);
        } else {
            return redirect('/login');
        }
    }

    public function placeOrder(Request $request) {

        
        $request->validate([
            'first_name' => 'required',
            'last_name' => 'required',
            'country' => 'required',
            'address_street_name' => 'required',
            'address_appartment' => 'required',
            'billing_city' => 'required',
            'zip_code' => 'required',
            'mobile' => 'required',
            'email' => 'required'
        ]);
        
        $apiUrl = env('ITHINK_LOGISTIC_PIN_CODE');
        $postInput['data'] = [
            'pincode' => $request->get('zip_code'),
            'access_token' => env('ITHINK_LOGISTIC_ACCESS'),
            'secret_key' => env('ITHINK_LOGISTIC_SCERET')
        ];

        
        $response = Http::withoutVerifying()->post($apiUrl, $postInput)->getBody();
        $pincodeArray = json_decode($response, true);
        $filterString = 'pickup';
        if($request->get('payment_mode') == 'cod') {
            $filterString = 'cod';
        }
        
        if($pincodeArray['status_code'] == 200 && !empty($pincodeArray['data'])) {
            $filter = array_filter($pincodeArray['data'][$request->get('zip_code')], function($v, $k) use ($filterString) {
                return $v[$filterString] == 'Y';
            }, ARRAY_FILTER_USE_BOTH);
        }

        

        if(count($filter) == 0) {
            return redirect('/checkout')
                ->withErrors(['message' => 'Pin code is not valid'])
                ->withInput();
        } else {
           $deliveryVendor =  array_key_first($filter);
        }
        

        DB::beginTransaction();
        try {
            $orderArray = Arr::only($request->all(), ['user_id','total', 'sub_total','tax','shipping_charge','payment_mode']);
            $orderArray['delivery_vendor'] = $deliveryVendor;
            $order = Order::create($orderArray);
            $orderItemArray = [];
            foreach($request->product_id as $key => $value) {
                $orderItemArray[$key]['product_id'] = $value;
                $orderItemArray[$key]['order_id'] = $order->id;
                $orderItemArray[$key]['quantity'] = $request->product_quantity[$key];
            }

            $orderItems = OrderItems::insert($orderItemArray);
            
            $billingDetailsArray = Arr::only($request->all(), ['first_name','last_name',
             'company_name',
             'country',
             'address_street_name',
             'address_appartment',
             'billing_city',
             'city',
             'zip_code',
             'mobile',
             'email',
             'special_notes',
             'user_id'
            ]);

            $billingDetailsArray['order_id'] = $order->id;

            $billingAddress = BillingAddress::create($billingDetailsArray);

            if($request->get('payment_mode') === 'cheque' || $request->get('payment_mode') === 'bank_transfer') {

                $api = new Api(env('RAZORPAY_KEY'), env('RAZORPAY_SECRET'));

                $orderData = [
                    'receipt'         => 'agrinia_!',
                    'amount'          => $request->get('total') * 100,
                    'currency'        => 'INR',
                    'partial_payment' => true
                ];

                $payment = $api->order->create($orderData);
                
                $paymentData = [
                    'order_id' => $order->id,
                    'provider_payment_id' => $payment['id'],
                    'amount' => $request->get('total'),
                    'provider' => 'Razor pay',
                    'status' => 'pending'
                ];
    
                $paymentDetails = PaymentDetails::create($paymentData);
                Order::where('id', $order->id)->update(['payment_id' => $paymentDetails['id']]);

                DB::commit();
                return view('checkout.razor-payment')->with('paymentDetails', [
                 'order_id'=> $payment['id'],
                 'total' => $request->get('total'),
                ]);
            }

            if($request->get('payment_mode') === 'cod') {
                return redirect('/order_success?id='.$order->id);
            } else {
                return redirect('/razorpay-payment');
            }
            // all good
        } catch (\Exception $e) {
            DB::rollback();
            dd($e);
            // something went wrong
        }
    }

    public function orderSuccesPage(Request $request) {
        $order = null;
        if($request->get('id')) {
            $order = Order::with('orderItems.products')->where('id', $request->get('id'))->first();
        }
        return view('orders.order_success')->with('order', $order);
    }

    public function paymentPage() {
        dd('payment page');
    }
}
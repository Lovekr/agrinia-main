<?php
  
namespace App\Http\Controllers\Web;

use App\Http\Controllers\Controller;

use Illuminate\Http\Request;
use Razorpay\Api\Api;
use App\Models\PaymentDetails;
use Session;
use Exception;
use App\Jobs\ShippingOrderCreate;
use App\Models\Cart;

class RazorpayPaymentController extends Controller
{
    /**
     * Write code on Method
     *
     * @return response()
     */
    public function index()
    {
        return view('razorpayView');
    }

    /**
     * Write code on Method
     *
     * @return response()
     */
    public function store(Request $request)
    {
        $input = $request->all();
        
        $api = new Api(env('RAZORPAY_KEY'), env('RAZORPAY_SECRET'));

        $payment = $api->payment->fetch($input['razorpay_payment_id']);
        
        if(count($input)  && !empty($input['razorpay_payment_id'])) {
            try {
                $response = $api->payment->fetch($input['razorpay_payment_id']);
                $paymentDetails = PaymentDetails::where('provider_payment_id', $response['order_id'])->update(['status' => 'success']);
                $payment = PaymentDetails::where('provider_payment_id', $response['order_id'])->first();
                ShippingOrderCreate::dispatch($payment->order_id)->onQueue('shipping_order');
                Cart::where('user_id', auth()->user()->id)->delete();
                return redirect('/order_success?id='.$payment->order_id);
            } catch (Exception $e) {
                return  $e->getMessage();
                Session::put('error',$e->getMessage());
                return redirect()->back();
            }
        }

        Session::put('success', 'Payment successful');
        return redirect()->back();
    }
}
<?php

namespace App\Jobs;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldBeUnique;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Bus\Dispatchable;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Queue\SerializesModels;
use App\Models\Order;
use App\Models\BillingAddress;
use App\Models\User;
use Illuminate\Support\Facades\Http;

class ShippingOrderCreate implements ShouldQueue
{
    use Dispatchable, InteractsWithQueue, Queueable, SerializesModels;

    /**
     * Create a new job instance.
     *
     * @return void
     */

    private $order;

    public function __construct($order)
    {
       $this->order = $order;
    }

    /**
     * Execute the job.
     *
     * @return void
     */
    public function handle()
    {
        $order = Order::with('orderItems.products')->where('id', $this->order)->first();
        $user = User::where('id', $order->user_id)->first();
        $address = BillingAddress::where(['user_id' => $order->user_id, 'order_id' => $order->id])->first();
        $data = [];
        $products = [];

        if(!empty($order->orderItems)) {
            foreach($order->orderItems as $k => $product) {
                $products[$k]['product_name'] = (string)$product->products->name;
                $products[$k]['product_quantity'] = (string)$product->quantity;
                $products[$k]['product_price'] = (string)$product->products->offer_price;
                $products[$k]['product_tax_rate'] = 5;
            }
        }

        $paymentMode = $order->payment_mode  === 'cod' ? 'COD': 'Prepaid';

        $data['data']['shipments'] = [
            [
                "waybill" => "",
                "order" => (string)$order->id,
                "sub_order" => "A",
                "order_date" =>  $order->created_at,
                "total_amount" => (string)$order->total,
                "name" => $address->first_name,
                "company_name" => $address->company_name,
                "add" => $address->address_street_name,
                "add2" => $address->address_appartment,
                "add3" => "",
                "pin" => $address->zip_code,
                "city" => $address->city, 
                "state" => $address->city, 
                "country" => $address->country, 
                "phone" => $address->mobile, 
                "alt_phone" => "", 
                "email" => $user->email, 
                "is_billing_same_as_shipping" => "yes", 
                "billing_name" => $address->first_name,
                "billing_company_name" => $address->company_name,
                "billing_add" => $address->address_street_name, 
                "billing_add2" => $address->address_appartment,
                "billing_add3" => "",  
                "billing_pin"  => $address->zip_code,
                "billing_city" => $address->city, 
                "billing_state" => $address->city, 
                "billing_country" => $address->mobile, 
                "billing_phone" => $address->mobile, 
                "billing_alt_phone" => $address->mobile, 
                "billing_email" =>$user->email,
                "products" => $products,
                "shipment_length" => "1",    #in cm
                "shipment_width" => "1",    #in cm
                "shipment_height" => "1",    #in cm
                "weight" => "1",    #in Kg
                "shipping_charges" => "0",
                "giftwrap_charges" => "0",
                "transaction_charges" => "0",
                "total_discount" => "0",
                "first_attemp_discount" => "0",
                "cod_charges" => "0",
                "advance_amount" => "0",
                "cod_amount" => "300",
                "payment_mode" => $paymentMode,    #For reverse Shipments=> Prepaid Only
                "reseller_name" => "agrinia",
                "eway_bill_number" => "",
                "gst_number" => "",
                "return_address_id" => env('ITHINK_LOGISCTIC_PICKUP_ID'),
                "api_source" => "0",
                "store_id" => "1" ,
            ],
        ];

        $data['data']['pickup_address_id'] = env('ITHINK_LOGISCTIC_PICKUP_ID');
        $data['data']['logistics'] = env('APP_ENV') == 'local' ? 'Delhivery' : $order->delivery_vendor;
        $data['data']['s_type'] = "";
        $data['data']['order_type'] = "";

        $data['data']['access_token'] = env('ITHINK_LOGISTIC_ACCESS');
        $data['data']['secret_key'] = env('ITHINK_LOGISTIC_SCERET');

        $curl = curl_init();
        curl_setopt_array($curl, array(
        CURLOPT_URL             => env('ITHNIK_LOGISTIC_URL'),
        CURLOPT_RETURNTRANSFER  => true,
        CURLOPT_ENCODING        => "",
        CURLOPT_MAXREDIRS       => 10,
        CURLOPT_TIMEOUT         => 30,
        CURLOPT_HTTP_VERSION    => CURL_HTTP_VERSION_1_1,
        CURLOPT_CUSTOMREQUEST   => "POST",
        CURLOPT_POSTFIELDS      => json_encode($data),
        CURLOPT_HTTPHEADER      => array(
            "cache-control: no-cache",
            "content-type: application/json"
        ),
        CURLOPT_SSL_VERIFYPEER =>  false
        ));

        $response = curl_exec($curl);
        $err      = curl_error($curl);
        curl_close($curl);
        if ($err)
        {
        echo "cURL Error #:" . $err;
        }
        else
        {
        echo $response;
        }
    }
}

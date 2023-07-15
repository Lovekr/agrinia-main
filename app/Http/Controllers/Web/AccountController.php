<?php

namespace App\Http\Controllers\Web;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Cart;
use App\Models\Order;
use App\Models\User;
use App\Models\BillingAddress;
use Mail;

class AccountController extends Controller
{

    /**
     * Show the Account page.
     *
     * @param  int  $id
     * @return \Illuminate\View\View
     */
    public function account(Request $request)
    {
        return view('my-account.dashboard');
    }

    /**
     * Show the Recent orders page.
     *
     * @param  int  $id
     * @return \Illuminate\View\View
     */
    public function recentOrder(Request $request)
    {
        $orders = collect([]);
        if(auth()->user()) {
            $orders = Order::where('user_id', auth()->user()->id)->get();
        }
        return view('my-account.orders')->with('orders', $orders);
    }

    /**
     * Show the addressess page.
     *
     * @param  int  $id
     * @return \Illuminate\View\View
     */
    public function addressess(Request $request)
    {
        // dd($request->all());
        $address = collect([]);
        $shipping = collect([]);
        if(auth()->user()) {
            $address = BillingAddress::where(['user_id' => auth()->user()->id, 'type' => 'billing'])->first();
            $shipping = BillingAddress::where(['user_id' => auth()->user()->id, 'type' => 'shipping'])->first();
        }
        
        return view('my-account.addresses')->with(['address' => $address, 'shipping' => $shipping]);
    }


    /**
     * Show the addressess page.
     *
     * @param  int  $id
     * @return \Illuminate\View\View
     */
    public function accountDetails(Request $request)
    {
        $user = collect([]);
        if(auth()->user()) {
            $user = User::where('id', auth()->user()->id)->first();
        }
        
        return view('my-account.account-details')->with('user', $user);
    }

    public function addBillingAddress(Request $request)
    {
        $address = BillingAddress::where(['user_id' => auth()->user()->id, 'type' => $request->get('type')])->first();
        return view('my-account.add_address')->with('address', $address);
    }

    public function storeAddress(Request $request)
    {
        $request->validate([
            'first_name' => 'required',
            'last_name' => 'required',
            'country' => 'required',
            'address_street_name' => 'required',
            'city' => 'required',
            'zip_code' => 'required',
            'mobile' => 'required',
            'email' => 'required',
            'type'=> 'required'
        ]);
        $request->merge(['user_id' => auth()->user()->id]);
        $matchThese = ['email'=> $request->get('email'), 'mobile'=> $request->get('mobile'), 'type'=> $request->get('type')];
        $success = BillingAddress::updateOrCreate($matchThese,$request->toArray());
        if($success) {
            return redirect('addressess')->withSuccess(['message' => 'Address added successfully']);
        }
    }

    public function subscribe(Request $request) {
        $request->validate([
            'email' => 'required'
        ]);

        $users = \DB::table('subscribers')->where('email', $request->email)->first();
        if(!empty($users)) {
            return response()->json(['success'=>'201']);
            // return redirect()->route($request->get('type'))->with('error', 'You are already subscribed.');
        }

        $insert = \DB::table('subscribers')->insert(
            array('email'   =>   $request->email, 'created_at' => date('Y-m-d H:i:s'))
        );

        if($insert) {
            $data = array('name'=> $request->email);
            Mail::send('emails.subscribe', $data, function($message) use ($request) {
                $message->to($request->email, 'Agrinia')->subject('You have Subscribed to Agrinia');
                $message->from(env('MAIL_USERNAME'),'Agrinia');
            });
            return response()->json(['success'=>'200']);
        } else {
            return response()->json(['success'=>'400']);
        }
    }

}
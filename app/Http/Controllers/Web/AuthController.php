<?php

namespace App\Http\Controllers\Web;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Auth;
use App\Mail\SendMail as SendOtp;
use Session;
use App\Models\Cart;

class AuthController extends Controller
{

    /**
     * Show the login form.
     *
     * @param  int  $id
     * @return \Illuminate\View\View
     */
    public function loginForm()
    {
        return view('login.login');
    }

    public function verifyForm()
    {
        return view('login.verify');
    }

    public function requestOtp(Request $request)
    {
        $request->validate([
            'email' => 'required',
        ]);

        $otp = rand(1000,9999);
        \Log::info("otp = ".$otp);
        $user = User::where('email','=',$request->email)->first();

        if($user) {
            $user->otp = $otp;
            $user->save();
        } else {
            
            if($request->get('action') == 'login') {
                return redirect('/login')
                ->withErrors(['message' => 'User not registered'])
                ->withInput();
            } else {
                $user = User::create(['otp'=> $otp, 'email' => $request->email]);
            }
        }

        if($user) {
        $mail_details = [
            'subject' => 'Agrinia Login OTP',
            'body' => 'Your OTP is : '. $otp
        ];

        Mail::to($request->email)->send(new SendOtp($mail_details));
        
        session()->put('email', $request->email);
         return redirect()->route('auth.verifyForm');
        }
        else{
            return view('login.login')->withErrors(['error'=> 'Something Went wrong']);
        }
    }

    public function verifyOtp(Request $request)
    {
        $email = session()->get('email');
        $user = User::where([['email','=',$email],['otp','=',$request->otp]])->first();
        if($user) {
            Auth::login($user, $remember = true);
            $cartItems = session()->get('user_temp_id');
            
            if(!empty($cartItems)) {
                foreach($cartItems as $cart) {
                    $cartObject = [
                        'user_id' => auth()->user()->id,
                        'product_id' => $cart['product_id'],
                        'quantity' => $cart['quantity'],
                        'quantity_type' => $cart['quantity_type'],
                        'weight_quantity' => $cart['quantity']
                    ];
                    $addToCart = Cart::create($cartObject);
                }
                session()->forget('user_temp_id');
            }

            
            User::where('email','=',$request->email)->update(['otp' => null]);
            return redirect('/account_details');
        }
        else{
            return redirect('/verify_form')
                ->withErrors(['message' => 'Otp is not matched'])
                ->withInput();
        }
    }

    public function logout() {
        Auth::logout();
        return redirect('/');
    }

    public function accountUpdate(Request $request) {

        $request->validate([
            'first_name' => 'required',
            'last_name' => 'required',
            'display_name' => 'required',
        ]);

        $user = User::where('id', auth()->user()->id)->first();
        $user->first_name = $request->get('first_name');
        $user->last_name = $request->get('last_name');
        $user->display_name = $request->get('display_name');
        $user->save();

        \Session::put('success','Account details changed successfully');
        return redirect()->route('account-details')->with('message', 'Account details changed successfully');

    }

}
<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Web\IndexController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::group(['namespace' => 'App\Http\Controllers\Web'], function()
{
    Route::get('/', 'IndexController@index')->name('home.index');
    Route::get('/agricultural', 'IndexController@agriculatural')->name('agricultural');
    Route::get('/gardening', 'IndexController@gardening')->name('gardening');
    Route::get('/login', 'AuthController@loginForm')->name('auth.loginForm');
    Route::get('/logout', 'AuthController@logout')->name('auth.logout');
    Route::any('request_otp', 'AuthController@requestOtp')->name('auth.requestOtp');
    Route::any('verify_form', 'AuthController@verifyForm')->name('auth.verifyForm');
    Route::post('verify_otp', 'AuthController@verifyOtp')->name('auth.verifyOtp');

    Route::get('products', 'ProductController@index')->name('product.index');
    Route::get('product_details/{id}', 'ProductController@productDetails')->name('product.productDetails');

    Route::post('add_to_cart', 'CartController@addToCart')->name('auth.addToCart');
    Route::get('cart', 'CartController@getCartItems')->name('auth.getCartItems');
    Route::get('remove_from_cart/{id}', 'CartController@removeFromCart')->name('cart.removeFromCart');

    Route::get('contact', 'IndexController@contactForm')->name('contact');
    Route::get('about_us', 'IndexController@aboutUs')->name('auth.aboutUs');

    Route::get('services', 'IndexController@services')->name('auth.services');

    Route::get('checkout', 'OrderController@checkout')->name('checkout');
    Route::post('place_order', 'OrderController@placeOrder')->name('placeOrder');
    Route::get('order_success', 'OrderController@orderSuccesPage')->name('orderSuccesPage');
    Route::get('payment_page', 'OrderController@paymentPage')->name('paymentPage');

    Route::get('razorpay-payment', 'RazorpayPaymentController@index');
    Route::post('razorpay-payment', 'RazorpayPaymentController@store')->name('razorpay.payment.store');

    Route::get('account', 'AccountController@account')->name('account');
    Route::get('recent_orders', 'AccountController@recentOrder')->name('orders');
    Route::get('order_details', 'OrderController@orderSuccesPage')->name('orderSuccesPage');
    Route::get('addressess', 'AccountController@addressess')->name('addressess');
    Route::get('account_details', 'AccountController@accountDetails')->name('account-details');
    Route::get('add_billing_address', 'AccountController@addBillingAddress')->name('add_billing_address');
    Route::get('add_shipping_address', 'AccountController@addShippingAddress')->name('add_shipping_address');
    Route::post('store_address', 'AccountController@storeAddress')->name('store_address');

    Route::post('account_update', 'AuthController@accountUpdate')->name('account_update');
    Route::get('zohocrmauth', 'ZohoController@auth')->name('zohocrmauth');
    Route::get('zohocrm', 'ZohoController@store')->name('zohocrm');

    Route::get('generateRefreshtoken', 'ZohoController@generateRefreshToken')->name('generateRefreshToken');

    Route::post('subscribe', 'AccountController@subscribe')->name('subscribe');
    Route::get('privacy-policy', 'IndexController@privacyPolicy')->name('privacy-policy');
    Route::get('term-and-condition', 'IndexController@termAndCondition')->name('term-and-condition');
    Route::get('return-policy', 'IndexController@retrunPolicy')->name('return-policy');
    Route::get('shipping-delivery', 'IndexController@shippingDelivery')->name('shipping-delivery');

    Route::get('instagram/auth/callback', 'AccountController@instagramFeed')->name('instagram-feed');

});
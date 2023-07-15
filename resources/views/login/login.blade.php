
@extends('layouts.master')

@section('content')

@include('partials.breadcrumb', ['details'=> 'Login', 'url' => 'login'])
@if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif
 <!-- Login Section Starts -->
<section class="page_section">
<div class="container largeContainer">
    <div class="row">
        <div class="col-lg-12">
            <div class="sic_the_content clearfix">
            <div class="woocommerce">
                <div class="woocommerce-notices-wrapper"></div>
                <div class="row justify-content-center">
                    <div class="col--md-12">
                        <ul class="nav loginTab" id="loginTab" role="tablist">
                        <li role="presentation">
                            <a class="active" data-toggle="tab" href="#login" role="tab" aria-selected="true">Login</a>
                        </li>
                        <li role="presentation">
                            <a class="" data-toggle="tab" href="#register" role="tab" aria-selected="false">Register</a>
                        </li>
                        </ul>
                    </div>
                </div>
                <div class="row justify-content-center" id="customer_login">
                    <div class="col-xl-8 col-lg-10 col-md-12">
                        <div class="tab-content anim-right">
                        <div class="tab-pane fade active show" id="login" role="tabpanel">
                            <div class="authWrap authLogin">
                                <form class="woocommerce-form woocommerce-form-login login" action="{{url('request_otp')}}" method="post">
                                    @csrf
                                    <div class="row">
                                        <input type="hidden" name="action" value="login">
                                    <div class="col-md-12">
                                        <input placeholder="Enter Your Email address*" type="text" class="woocommerce-Input woocommerce-Input--text input-text" name="email" id="email" autocomplete="email" value=""> 
                                        <p class="woocommerce-LostPassword lost_password text-center">
                                        <a href="#">OTP will be sent to the entered email address</a>
                                        </p>
                                    </div>
                                    <!-- <div class="col-md-12">
                                        <input type="hidden" id="woocommerce-login-nonce" name="woocommerce-login-nonce" value="2f70a5dfaf">
                                        <input type="hidden" name="_wp_http_referer" value="/wp/organia/main/my-account/"> 
                                    </div> -->
                                    <div class="col-md-12">
                                        <div class="loginMetaActions" style="justify-content: center;">
                                            <button type="submit" class="woocommerce-button button woocommerce-form-login__submit" name="login" value="Log in">SEND OTP</button>
                                        </div>
                                    </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="register" role="tabpanel">
                            <div class="authWrap authRegister">
                                <form class="woocommerce-form woocommerce-form-login login" action="{{url('request_otp')}}" method="post">
                                    @csrf
                                    <div class="row">
                                    <input type="hidden" name="action" value="register">
                                    <div class="col-md-12">
                                        <input placeholder="Enter Your Email address*" type="text" class="woocommerce-Input woocommerce-Input--text input-text" name="email" id="email" autocomplete="email" value=""> 
                                        <p class="woocommerce-LostPassword lost_password text-center">
                                        <a href="#">OTP will be sent to the entered email address</a>
                                        </p>
                                    </div>
                                    <!-- <div class="col-md-12">
                                        <input type="hidden" id="woocommerce-login-nonce" name="woocommerce-login-nonce" value="2f70a5dfaf">
                                        <input type="hidden" name="_wp_http_referer" value="/wp/organia/main/my-account/"> 
                                    </div> -->
                                    <div class="col-md-12">
                                        <div class="loginMetaActions" style="justify-content: center;">
                                            <button type="submit" class="woocommerce-button button woocommerce-form-login__submit" name="login" value="Log in">SEND OTP</button>
                                        </div>
                                    </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="clearfix"></div>
            <div class="clearfix"></div>
            </div>
        </div>
    </div>
</div>
</section>
<!-- Login Section Ends -->

@endsection
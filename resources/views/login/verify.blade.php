
@extends('layouts.master')

@section('content')

@include('partials.breadcrumb')
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
                        <!-- <li role="presentation">
                            <a class="active" data-toggle="tab" href="#login" role="tab" aria-selected="true">Login</a>
                        </li>
                         -->
                        </ul>
                    </div>
                </div>
                <div class="row justify-content-center" id="customer_login">
                    <div class="col-xl-8 col-lg-10 col-md-12">
                        <div class="tab-content anim-right">
                        <div class="tab-pane fade active show" id="login" role="tabpanel">
                            <div class="authWrap authLogin">
                                <form class="woocommerce-form woocommerce-form-login login" action="{{url('verify_otp')}}" method="post">
                                    @csrf
                                    <div class="row">
                                    <div class="col-md-12">
                                        <input placeholder="Enter Your OTP" type="text" class="woocommerce-Input woocommerce-Input--text input-text" name="otp" id="otp" autocomplete="otp" value=""> 
                                        <p class="woocommerce-LostPassword lost_password text-center">
                                        </p>
                                    </div>
                                    <!-- <div class="col-md-12">
                                        <input type="hidden" id="woocommerce-login-nonce" name="woocommerce-login-nonce" value="2f70a5dfaf">
                                        <input type="hidden" name="_wp_http_referer" value="/wp/organia/main/my-account/"> 
                                    </div> -->
                                    <div class="col-md-12">
                                        <div class="loginMetaActions" style="justify-content: center;">
                                            <button type="submit" class="woocommerce-button button woocommerce-form-login__submit" name="login" value="Log in">Verify OTP</button>
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
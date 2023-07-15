
@extends('layouts.master')

@section('content')

@include('partials.breadcrumb', ['details'=> 'My account', 'url' => 'Account details'])




      <!-- Checkout Order Page Started -->
<section class="page_section">
    <div class="container largeContainer">
    @if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
    @endif

    @if(session()->has('message'))
        <div class="alert alert-success" style="text-align: center;">
            {{ session()->get('message') }}
        </div>
    @endif
    <div class="row">
        <div class="col-lg-12">
        <div class="sic_the_content clearfix">
            <div class="woocommerce woocommerce-account" id="my-accountWocommnerce">
            <nav class="woocommerce-MyAccount-navigation">
                <ul>
                    <li class="woocommerce-MyAccount-navigation-link woocommerce-MyAccount-navigation-link--dashboard">
                        <a href="{{url('account')}}">Dashboard</a>
                    </li>
                    <li class="woocommerce-MyAccount-navigation-link woocommerce-MyAccount-navigation-link--orders">
                        <a href="{{url('recent_orders')}}">Orders</a>
                    </li>
                    <li class="woocommerce-MyAccount-navigation-link woocommerce-MyAccount-navigation-link--edit-address">
                        <a href="{{url('addressess')}}">Addresses</a>
                    </li>
                    <li class="woocommerce-MyAccount-navigation-link woocommerce-MyAccount-navigation-link--edit-account is-active">
                        <a href="{{url('account_details')}}">Account details</a>
                    </li>
                    @if(auth()->user())
                    <li class="woocommerce-MyAccount-navigation-link woocommerce-MyAccount-navigation-link--customer-logout">
                        <a href="{{url('logout')}}">Logout</a>
                    </li>
                    @endif
                </ul>
            </nav>
            <div class="woocommerce-MyAccount-content">
            <div class="woocommerce-notices-wrapper"></div>
            @if(auth()->user())
                <form action="{{route('account_update')}}" class="woocommerce-EditAccountForm edit-account"  method="post" >
                    @csrf
                    <p class="woocommerce-form-row woocommerce-form-row--first form-row form-row-first">
                        <label for="account_first_name">First name&nbsp;<span class="required">*</span></label>
                        <input type="text" class="woocommerce-Input woocommerce-Input--text input-text" name="first_name" id="first_name" autocomplete="given-name" value="{{$user->first_name ?? ''}}">
                    </p>
                    <p class="woocommerce-form-row woocommerce-form-row--last form-row form-row-last">
                        <label for="account_last_name">Last name&nbsp;<span class="required">*</span></label>
                        <input type="text" class="woocommerce-Input woocommerce-Input--text input-text" name="last_name" id="last_name" autocomplete="family-name" value="{{$user->last_name ?? ''}}">
                    </p>
                    <div class="clear"></div>
                    <p class="woocommerce-form-row woocommerce-form-row--wide form-row form-row-wide">
                        <label for="account_display_name">Display name&nbsp;<span class="required">*</span></label>
                        <input type="text" class="woocommerce-Input woocommerce-Input--text input-text" name="display_name" id="display_name" value="{{$user->display_name ?? ''}}"> <span><em>This will be how your name will be displayed in the account section and in reviews</em></span>
                    </p>
                    <div class="clear"></div>
                    <p class="woocommerce-form-row woocommerce-form-row--wide form-row form-row-wide">
                        <label for="account_email">Email address&nbsp;<span class="required">*</span></label>
                        <input type="email" class="woocommerce-Input woocommerce-Input--email input-text" readonly name="email" id="email" autocomplete="email" value="{{$user->email ?? ''}}">
                    </p>
                    <!-- <fieldset>
                        <legend>Password change</legend>
                        <p class="woocommerce-form-row woocommerce-form-row--wide form-row form-row-wide">
                            <label for="password_current">Current password (leave blank to leave unchanged)</label>
                            <span class="password-input"><input type="password" class="woocommerce-Input woocommerce-Input--password input-text" name="password_current" id="password_current" autocomplete="off"><span class="show-password-input"></span></span>
                        </p>
                        <p class="woocommerce-form-row woocommerce-form-row--wide form-row form-row-wide">
                            <label for="password_1">New password (leave blank to leave unchanged)</label>
                            <span class="password-input"><input type="password" class="woocommerce-Input woocommerce-Input--password input-text" name="password_1" id="password_1" autocomplete="off"><span class="show-password-input"></span></span>
                        </p>
                        <p class="woocommerce-form-row woocommerce-form-row--wide form-row form-row-wide">
                            <label for="password_2">Confirm new password</label>
                            <span class="password-input"><input type="password" class="woocommerce-Input woocommerce-Input--password input-text" name="password_2" id="password_2" autocomplete="off"><span class="show-password-input"></span></span>
                        </p>
                    </fieldset> -->
                    <div class="clear"></div>
                    <p>
                        <input type="hidden" id="save-account-details-nonce" name="save-account-details-nonce" value="ab0d10204a"><input type="hidden" name="_wp_http_referer" value="/wp/organia/main/my-account/edit-account/"> <button type="submit" class="woocommerce-Button button" name="save_account_details" value="Save changes">Save changes</button>
                        <input type="hidden" name="action" value="save_account_details">
                    </p>
                </form>
            @else
                <p>Plesae login to see details</p>
            @endif
            </div>
            </div>
            <div class="clearfix"></div>
            <div class="clearfix"></div>
        </div>
        </div>
    </div>
    </div>
</section>
@endsection
      <!-- Checkout Order Page Ended -->
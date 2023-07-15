
@extends('layouts.master')

@section('content')

@include('partials.breadcrumb', ['details'=> 'My account', 'url' => 'Orders'])

<!-- Checkout Order Page Started -->
<section class="page_section">
    <div class="container largeContainer">
    <div class="row">
        <div class="col-lg-12">
        <div class="sic_the_content clearfix">
            <div class="woocommerce woocommerce-account" id="my-accountWocommnerce">
            <nav class="woocommerce-MyAccount-navigation">
                <ul>
                    <li class="woocommerce-MyAccount-navigation-link woocommerce-MyAccount-navigation-link--dashboard ">
                        <a href="{{url('account')}}">Dashboard</a>
                    </li>
                    <li class="woocommerce-MyAccount-navigation-link woocommerce-MyAccount-navigation-link--orders">
                        <a href="{{url('recent_orders')}}">Orders</a>
                    </li>
                    <li class="woocommerce-MyAccount-navigation-link woocommerce-MyAccount-navigation-link--edit-address is-active">
                        <a href="{{url('addressess')}}">Addresses</a>
                    </li>
                    <li class="woocommerce-MyAccount-navigation-link woocommerce-MyAccount-navigation-link--edit-account">
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
            <p>
                The following addresses will be used on the checkout page by default.
            </p>
            @if(auth()->user())
            <div class="row woocommerce-Addresses addresses row-eq-height">
                <div class="col-md-6 woocommerce-Address">
                    <div class="addressHolder">
                        <header class="woocommerce-Address-title title">
                        <h3 class="addressTitle">Billing address</h3>
                        <a href="{{route('add_billing_address')}}?type=billing" class="edit">{{!empty($address) ? 'Edit': 'Add'}}</a>
                        </header>
                        <address>
                        <br>{{$address->first_name ?? ''}}<br>{{$address->last_name ?? ''}}<br>{{$address->address_street_name ?? ''}}<br>{{$address->city ?? ''}} {{$address->zip_code ?? ''}}<br>{{$address->country ?? ''}} 
                        </address>
                    </div>
                </div>
                <div class="col-md-6 woocommerce-Address">
                    <div class="addressHolder">
                        <header class="woocommerce-Address-title title">
                        <h3 class="addressTitle">Shipping address</h3>
                        <a href="{{route('add_billing_address')}}?type=shipping" class="edit">{{!empty($shipping) ? 'Edit': 'Add'}}</a>
                        </header>
                        <address>
                        <br>{{$shipping->first_name ?? ''}}<br>{{$shipping->last_name ?? ''}}<br>{{$shipping->address_street_name ?? ''}}<br>{{$shipping->city ?? ''}} {{$shipping->zip_code ?? ''}}<br>{{$shipping->country ?? ''}} 
                        </address>
                    </div>
                </div>
            </div>
            @else
                <p>Please login to see details</p>
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

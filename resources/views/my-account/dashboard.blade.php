<!-- Checkout Order Page Started -->
@extends('layouts.master')

@section('content')

@include('partials.breadcrumb', ['details'=> 'My account', 'url' => 'My account'])
<section class="page_section">
         <div class="container largeContainer">
           <div class="row">
             <div class="col-lg-12">
               <div class="sic_the_content clearfix">
                 <div class="woocommerce woocommerce-account" id="my-accountWocommnerce">
                  <nav class="woocommerce-MyAccount-navigation">
                     <ul>
                       <li class="woocommerce-MyAccount-navigation-link woocommerce-MyAccount-navigation-link--dashboard is-active">
                         <a href="{{url('account')}}">Dashboard</a>
                       </li>
                       <li class="woocommerce-MyAccount-navigation-link woocommerce-MyAccount-navigation-link--orders">
                         <a href="{{url('recent_orders')}}">Orders</a>
                       </li>
                       <li class="woocommerce-MyAccount-navigation-link woocommerce-MyAccount-navigation-link--edit-address">
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
                   @if(auth()->user())
                   <div class="woocommerce-MyAccount-content">
                     <div class="woocommerce-notices-wrapper"></div>
                     <p> Hello <strong>{{auth()->user()->name ? auth()->user()->name : auth()->user()->email}}</strong> (not <strong>{{auth()->user()->name ? auth()->user()->name : auth()->user()->email}}</strong>? <a href="{{url('logout')}}">Log out</a>) </p>
                     <p> From your account dashboard you can view your <a href="{{url('recent_orders')}}">recent orders</a>, manage your <a href="{{url('address')}}">shipping and billing addresses</a>, and <a href="{{url('')}}">edit your password and account details</a>. </p>
                   </div>
                   @else
                   <div class="woocommerce-MyAccount-content">
                     <div class="woocommerce-notices-wrapper"></div>
                     <p>Please login to view account details</p>   
                   </div>
                   @endif
                 </div>
                 <div class="clearfix"></div>
                 <div class="clearfix"></div>
               </div>
             </div>
           </div>
         </div>
       </section>
       @endsection
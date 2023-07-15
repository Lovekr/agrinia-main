<!-- Checkout Order Page Started -->
@extends('layouts.master')

@section('content')

@include('partials.breadcrumb', ['details'=> 'My account', 'url' => 'Orders'])
<section class="page_section">
    <div class="container largeContainer">
    <div class="row">
        <div class="col-lg-12">
        <div class="sic_the_content clearfix">
            <div class="woocommerce woocommerce-account" id="my-accountWocommnerce">
            <nav class="woocommerce-MyAccount-navigation">
                    <ul>
                       <li class="woocommerce-MyAccount-navigation-link woocommerce-MyAccount-navigation-link--dashboard">
                         <a href="{{url('account')}}">Dashboard</a>
                       </li>
                       <li class="woocommerce-MyAccount-navigation-link woocommerce-MyAccount-navigation-link--orders is-active">
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
            <div class="woocommerce-MyAccount-content">
                <div class="woocommerce-notices-wrapper"></div>
                <!-- <div class="woocommerce-message woocommerce-message--info woocommerce-Message woocommerce-Message--info woocommerce-info">
                <a class="woocommerce-Button button" href="https://themewar.com/wp/organia/main/shop/">Browse products</a>
                No order has been made yet.	</div>
            </div> -->
            <table class="woocommerce-orders-table woocommerce-MyAccount-orders shop_table shop_table_responsive my_account_orders account-orders-table">
                <thead>
                    <tr>
                        <th class="woocommerce-orders-table__header woocommerce-orders-table__header-order-number"><span class="nobr">Order</span></th>
                        <th class="woocommerce-orders-table__header woocommerce-orders-table__header-order-date"><span class="nobr">Date</span></th>
                        <th class="woocommerce-orders-table__header woocommerce-orders-table__header-order-status"><span class="nobr">Status</span></th>
                        <th class="woocommerce-orders-table__header woocommerce-orders-table__header-order-total"><span class="nobr">Total</span></th>
                        <th class="woocommerce-orders-table__header woocommerce-orders-table__header-order-actions"><span class="nobr">Actions</span></th>
                    </tr>
                </thead>
                <tbody>
                    @if(!$orders->isEmpty())
                        @foreach($orders as $order)
                            <tr class="woocommerce-orders-table__row woocommerce-orders-table__row--status-on-hold order">
                                <td class="woocommerce-orders-table__cell woocommerce-orders-table__cell-order-number" data-title="Order">
                                    <a href="{{url('order_details?id='.$order->id.'&order=view')}}">
                                    #{{$order->id ?? ''}} </a>
                                </td>
                                <td class="woocommerce-orders-table__cell woocommerce-orders-table__cell-order-date" data-title="Date">
                                    <time datetime="2022-09-16T16:09:01+00:00">{{date_format($order->created_at, 'M d Y')}}</time>
                                </td>
                                <td class="woocommerce-orders-table__cell woocommerce-orders-table__cell-order-status" data-title="Status">
                                    {{$order->order_status ?? ''}}
                                </td>
                                <td class="woocommerce-orders-table__cell woocommerce-orders-table__cell-order-total" data-title="Total">
                                    <span class="woocommerce-Price-amount amount"><span class="woocommerce-Price-currencySymbol">$</span>{{$order->total ?? ''}}</span>
                                </td>
                                <td class="woocommerce-orders-table__cell woocommerce-orders-table__cell-order-actions" data-title="Actions">
                                    <a href="{{url('order_details?id='.$order->id.'&order=view')}}" class="woocommerce-button button view">View</a>
                                </td>
                            </tr>
                        @endforeach
                    @else
                            <tr>
                                <td>No order found</td>
                            </tr>
                    @endif
                </tbody>
                </table>
            </div>
            <div class="clearfix"></div>
            <div class="clearfix"></div>
        </div>
        </div>
    </div>
    </div>
</section>
 @endsection
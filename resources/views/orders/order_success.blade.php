
@extends('layouts.master')

@section('content')

@include('partials.breadcrumb', ['details'=> 'Order', 'url' => app('request')->input('order') === 'view' ? 'Order Details': 'Order Success'])
    <!-- Checkout Order Page Started -->
    
      <section class="page_section">
         <div class="container largeContainer">
            <div class="row">
               <div class="col-lg-12">
                  <div class="sic_the_content clearfix">
                     <div class="woocommerce">
                        <div class="woocommerce-order">
                           @if( !Request::has('order') )<p class="woocommerce-notice woocommerce-notice--success woocommerce-thankyou-order-received">Thank you. Your order has been received.</p> @endif
                           <ul class="woocommerce-order-overview woocommerce-thankyou-order-details order_details" id="order_details">
                              <li class="woocommerce-order-overview__order order">
                                 Order number: <strong>{{$order->id ?? ''}}</strong>
                              </li>
                              <li class="woocommerce-order-overview__date date">
                                 Date: <strong>{{date_format($order->created_at, 'M, d, Y') ?? ''}} </strong>
                              </li>
                              <li class="woocommerce-order-overview__total total">
                                 Total: <strong><span class="woocommerce-Price-amount amount"><bdi><span class="woocommerce-Price-currencySymbol">$</span>{{$order->total ?? ''}}</bdi></span></strong>
                              </li>
                              <li class="woocommerce-order-overview__payment-method method">
                                 Payment method: <strong>{{$order->payment_mode === 'cod' ? 'Cash on delivery' : 'RozorPay'}}</strong>
                              </li>
                           </ul>
                           <p>Pay with cash upon delivery.</p>
                           <section class="woocommerce-order-details">
                              <h2 class="woocommerce-order-details__title">Order details</h2>
                              <table class="woocommerce-table woocommerce-table--order-details shop_table order_details">
                                 <thead>
                                    <tr>
                                       <th class="woocommerce-table__product-name product-name">Product</th>
                                       <th class="woocommerce-table__product-table product-total">Total</th>
                                    </tr>
                                 </thead>
                                 <tbody>
                                    @foreach($order->orderItems as $items)
                                    <tr class="woocommerce-table__line-item order_item">
                                       <td class="woocommerce-table__product-name product-name">
                                          <a href="#">{{$items->products->name}}</a> <strong class="product-quantity">×&nbsp;{{$items->quantity}}</strong> 
                                       </td>
                                       <td class="woocommerce-table__product-total product-total">
                                          <span class="woocommerce-Price-amount amount"><bdi><span class="woocommerce-Price-currencySymbol">$</span>{{$items->products->offer_price}}</bdi></span> 
                                       </td>
                                    </tr>
                                    @endforeach
                                 </tbody>
                                 
                                 <tfoot>
                                    <tr>
                                       <th scope="row">Subtotal:</th>
                                       <td><span class="woocommerce-Price-amount amount"><span class="woocommerce-Price-currencySymbol">$</span>{{$order->sub_total ?? ''}}</span></td>
                                    </tr>
                                    <!-- <tr>
                                       <th scope="row">Shipping:</th>
                                       <td><span class="woocommerce-Price-amount amount"><span class="woocommerce-Price-currencySymbol">$</span>10.00</span>&nbsp;via Flat rate</td>
                                    </tr> -->
                                    <tr>
                                       <th scope="row">Payment method:</th>
                                       <td>{{$order->payment_mode === 'cod' ? 'Cash on delivery' : 'RozorPay'}}</td>
                                    </tr>
                                    <tr>
                                       <th scope="row">Total:</th>
                                       <td><span class="woocommerce-Price-amount amount"><span class="woocommerce-Price-currencySymbol">$</span>{{$order->total ?? ''}}</span></td>
                                    </tr>
                                 </tfoot>
                              </table>
                           </section>
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
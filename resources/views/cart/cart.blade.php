

@extends('layouts.master')

@section('content')

@include('partials.breadcrumb', ['details'=> 'Cart page', 'url' => 'Cart page'])
<!-- Begin:: Cart Section -->

@if(!$cart_items->isEmpty())
    <section class="cartPage">
            <div class="container largeContainer">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="woocommerce">
                            <form action="{{url('checkout')}}" method="get" class="woocommerce-cart-form">
                                @csrf
                                <table class="shop_table">
                                    <thead>
                                        <tr>
                                            <th class="product-remove">&nbsp;</th>
                                            <th class="product-photo">Photo</th>
                                            <th class="product-name">Product Name</th>
                                            <th class="product-price">Price</th>
                                            <th class="product-quantity">Quantity</th>
                                            <th class="product-subtotal">Total</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @if(auth()->user())
                                            <?php $total=0; ?>
                                            @if(!empty($cart_items))
                                            @foreach($cart_items as $items)
                                            <?php $total += ($items->products->offer_price * $items->quantity); ?>
                                                <tr class="cart_item">
                                                    <td class="product-remove">
                                                        <a href="{{url('remove_from_cart',['id' => $items->id])}}" class="remove"><i class="twi-times1"></i></a>
                                                    </td>
                                                    <td class="product-photo" data-title="Product">
                                                        <a class="p-img" href="{{url('product_details')}}/{{$items->id}}"><img height="150px" src="{{asset('assets/images/product/'.explode(',',$items->images)[0])}}" alt=""></a>
                                                    </td>
                                                    <td class="product-name" data-title="Product"> 
                                                        <a href="{{url('product_details')}}/{{$items->id}}">{{$items->products->name}}</a>
                                                    </td>
                                                    <td class="product-price" data-title="Price">
                                                        <span class="woocommerce-Price-amount amount"><bdi><span class="woocommerce-Price-currencySymbol">₹</span>{{$items->products->offer_price}}</bdi></span>
                                                    </td>
                                                    @if($items->quantity_type == 'quantity')
                                                        <td class="product-quantity" data-title="Quantity">
                                                            <div class="quantity quantityd clearfix">
                                                                <button type="button" class="minus qtyBtn btnMinus">-</button>
                                                                <input type="number" class="carqty input-text qty text" name="quantity[][quantity]" value="{{$items->quantity}}">
                                                                <button type="button" class="plus qtyBtn btnPlus">+</button>
                                                                <input type="hidden" name="product_id[]" value="{{$items->product_id}}" >
                                                            </div>
                                                        </td>
                                                    @else
                                                        <td class="product-quantity" data-title="Quantity">
                                                            <div class="weight_quantity clearfix">
                                                            <select name="quantity[][weight]" id="quantity" class="product_weight">
                                                                <option value="0">select</option>
                                                                <option value="1" <?php if (isset($items->quantity) && $items->quantity == '1') echo 'selected="selected"'; ?>>1KG</option>
                                                                <option value="2" <?php if (isset($items->quantity) && $items->quantity == '2') echo 'selected="selected"'; ?>>2KG</option>
                                                                <option value="3" <?php if (isset($items->quantity) && $items->quantity == '3') echo 'selected="selected"'; ?>>3KG</option>
                                                                <option value="4" <?php if (isset($items->quantity) && $items->quantity == '4') echo 'selected="selected"'; ?>>4KG</option>
                                                                <option value="5" <?php if (isset($items->quantity) && $items->quantity == '5') echo 'selected="selected"'; ?>>5KG</option>
                                                            </select>
                                                            </div>
                                                            <input type="hidden" name="product_id[]" value="{{$items->product_id}}" >
                                                        </td>
                                                    @endif
                                                    <td class="product-subtotal" data-title="Subtotal">
                                                        <span class="woocommerce-Price-amount amount"><bdi><span class="woocommerce-Price-currencySymbol">₹</span>{{$items->products->offer_price * $items->quantity}}</bdi></span> 
                                                    </td>
                                                </tr>
                                            @endforeach
                                            @else
                                                <p>No item in cart</p>
                                            @endif
                                        @else
                                        <?php $total=0; ?>
                                         @if(!empty($cart_items))
                                            @foreach($cart_items as $k => $items)
                                            <?php
                                                $productList = session()->get('user_temp_id');
                                                
                                                if(isset($productList[$k]['quantity_type']) && $productList[$k]['quantity_type'] == 'weight') {
                                                    $total += ($items->offer_price * $productList[$k]['weight_quantity']);
                                                } else {
                                                    $total += ($items->offer_price * $productList[$k]['quantity']);
                                                }
                                             ?>
                                                <tr class="cart_item">
                                                    <td class="product-remove">
                                                        <a href="{{url('remove_from_cart',['id' => $k])}}" class="remove"><i class="twi-times1"></i></a>
                                                    </td>
                                                    <td class="product-photo" data-title="Product">
                                                        <a class="p-img" href="{{url('product_details')}}/{{$items->id}}"><img height="150px" src="{{asset('assets/images/product/'.explode(',',$items->images)[0])}}" alt=""></a>
                                                    </td>
                                                    <td class="product-name" data-title="Product"> 
                                                        <a href="{{url('product_details')}}/{{$items->id}}">{{$items->name}}</a>
                                                    </td>
                                                    <td class="product-price" data-title="Price">
                                                        <span class="woocommerce-Price-amount amount"><bdi><span class="woocommerce-Price-currencySymbol">₹</span>{{$items->offer_price}}</bdi></span>
                                                    </td>
                                                    @if(isset($productList[$k]['quantity_type']) && $productList[$k]['quantity_type'] == 'quantity')
                                                    <td class="product-quantity" data-title="Quantity">
                                                        <div class="quantity quantityd clearfix">
                                                            <button type="button" class="minus qtyBtn btnMinus">-</button>
                                                            <input type="number" class="carqty input-text qty text" name="quantity[][quantity]" value="{{$productList[$k]['quantity']}}">
                                                            <button type="button" class="plus qtyBtn btnPlus">+</button>
                                                            <input type="hidden" name="product_id[]" value="{{$items->id}}" >
                                                        </div>
                                                    </td>
                                                    @else
                                                    <td class="product-quantity" data-title="Quantity">
                                                        <div class="weight_quantity clearfix">
                                                        <select name="quantity[][weight]" id="quantity" class="product_weight">
                                                            <option value="0">select</option>
                                                            <option value="1" <?php if (isset($productList[$k]['quantity']) && $productList[$k]['quantity'] == '1') echo 'selected="selected"'; ?>>1KG</option>
                                                            <option value="2" <?php if (isset($productList[$k]['quantity']) && $productList[$k]['quantity'] == '2') echo 'selected="selected"'; ?>>2KG</option>
                                                            <option value="3" <?php if (isset($productList[$k]['quantity']) && $productList[$k]['quantity'] == '3') echo 'selected="selected"'; ?>>3KG</option>
                                                            <option value="4" <?php if (isset($productList[$k]['quantity']) && $productList[$k]['quantity'] == '4') echo 'selected="selected"'; ?>>4KG</option>
                                                            <option value="5" <?php if (isset($productList[$k]['quantity']) && $productList[$k]['quantity'] == '5') echo 'selected="selected"'; ?>>5KG</option>
                                                        </select>
                                                        </div>
                                                        <input type="hidden" name="product_id[]" value="{{$items->id}}" >
                                                    </td>
                                                    @endif
                                                    @if(isset($productList[$k]['quantity_type']) && $productList[$k]['quantity_type'] == 'weight')
                                                        <td class="product-subtotal" data-title="Subtotal">
                                                            <span class="woocommerce-Price-amount amount"><bdi><span class="woocommerce-Price-currencySymbol">₹</span>{{$items->offer_price * $productList[$k]['quantity']}}</bdi></span> 
                                                        </td>
                                                    @else
                                                        <td class="product-subtotal" data-title="Subtotal">
                                                            <span class="woocommerce-Price-amount amount"><bdi><span class="woocommerce-Price-currencySymbol">₹</span>{{$items->offer_price * $productList[$k]['quantity']}}</bdi></span> 
                                                        </td>
                                                    @endif
                                                </tr>
                                            @endforeach
                                        @else

                                            <p>No items in cart</p>
                                        @endif
                                        @endif
                                            <tr>
                                                <!-- <td colspan="6" class="actions">
                                                    <div class="coupon">
                                                        <label for="coupon_code">Coupon:</label> 
                                                        <input type="text" name="coupon_code" class="input-text" id="coupon_code" value="" placeholder="Coupon code"> 
                                                        <button type="submit" class="button" name="apply_coupon" value="Apply coupon">Apply coupon</button>
                                                    </div>
                                                    <button type="submit" class="button update" name="update_cart" value="Update cart">Update cart</button>         
                                                </td> -->
                                            </tr>
                                            <tr>
                                                <td colspan="6" class="actions">
                                                    <!-- <div class="coupon">
                                                        <label for="coupon_code">Coupon:</label> 
                                                        <input type="text" name="coupon_code" class="input-text" id="coupon_code" value="" placeholder="Coupon code"> 
                                                        <button type="submit" class="button" name="apply_coupon" value="Apply coupon">Apply coupon</button>
                                                    </div> -->
                                                    <button type="submit" class="button update" name="update_cart" value="Update cart">Update cart</button>         
                                                </td>
                                            </tr>

                                    </tbody>
                                </table>
                            
                            <div class="row">
                                <div class="col-lg-6 col-md-4"></div>
                                <div class="col-lg-6 col-md-8">
                                    <div class="cart-collaterals">
                                        <div class="cart_totals">
                                            <h2>Cart Totals</h2>
                                            <table class="shop_table shop_table_responsive">
                                                <tbody>
                                                    <tr class="cart-subtotal">
                                                        <th>Subtotal</th>
                                                        <td data-title="Subtotal"><span class="amount">₹{{$total}}</span></td>
                                                    </tr>
                                                    <tr class="order-total">
                                                        <th>Total</th>
                                                        <td data-title="Total"><strong><span class="amount">₹{{$total}}</span></strong></td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                            <div class="wc-proceed-to-checkout">
                                                <button type="submit" class="checkout-button alt wc-forward">Proceed to Checkout</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        </form>
                    </div>
                </div>
            </div>
        </section>
        @endsection
@else
<div class="container largeContainer">
    <div class="row">
        <div class="col-lg-12">
            <div>No items in cart.</div>
        </div>
    </div>
</div>
@endif
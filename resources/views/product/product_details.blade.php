@extends('layouts.master')
@section('content')
<meta property="og:title" content="{{$product_details->name}}"/>
@foreach(explode(',',$product_details->images) as $image)
<meta property="og:image" content="{{ asset('assets/images/product/'.$image)}}"/>
@endforeach
<meta property="og:url" content="{{Request::url()}}"/>
<meta property="og:description" content="{{$product_details->product_details}}"/>

<section class="page_banner shop_banner" style="background-image: url(assets/images/bg/b3.jpg);">
         <div class="container largeContainer">
            <div class="row">
               <div class="col-lg-12 text-left">
                  <p class="breadcrumbs">
                     <a href="{{url('/')}}"><i class="twi-home"></i>Home</a><i class="twi-angle-right"></i><a href="{{url('products')}}">Products</a><i class="twi-angle-right"></i>{{$product_details->name}}
                  </p>
               </div>
            </div>
         </div>
      </section>
<!-- Begin:: Single Products Section -->
<section class="singleProduct">
<div class="container largeContainer">
<div class="row">
    <div class="col-lg-6">
        <div class="productSlide">
            @foreach(explode(',',$product_details->images) as $image)
                <div class="sp_img">
                    <img src="{{ asset('assets/images/product/'.$image)}}" alt="">
                </div>
            @endforeach

        </div>
        <ul class="indicator-slider">
        @foreach(explode(',',$product_details->images) as $image)
            <li role="presentation">
                <div class="idItem">
                    <img src="{{ asset('assets/images/product/'.$image)}}" alt="">
                </div>
            </li>
            @endforeach
        </ul>
    </div>
    <div class="col-lg-6">
        <div class="product_details">
            <!-- @if($product_details->product_quantity > 0)
                <div class="stock">Availability:<span>In stock</span></div>
            @else
                <div class="stock">Availability:<span>Out Of stock</span></div>
            @endif -->
            <h3>{{$product_details->name}}</h3>
            <!-- <div class="woocommerce-product-rating">
            <div class="ratings">
                <i class="twi-star"></i>
                <i class="twi-star"></i>
                <i class="twi-star"></i>
                <i class="twi-star"></i>
                <i class="twi-star"></i>
            </div>
            <a href="#reviews" class="woocommerce-review-link" rel="nofollow">({{$product_details->ratings}} reviews)</a>
            </div> -->
            <div class="pi01Price clearfix">
            <span class="price"><span class="woocommerce-Price-amount amount"><bdi><span class="woocommerce-Price-currencySymbol">₹</span>{{$product_details->offer_price}}</bdi></span></span>
            </div>
            <div class="pd_excrpt">
            <p>
                {{$product_details->product_details}}
            </p>
            </div>
            <form action="{{url('add_to_cart')}}" method="POST">
                <div class="qty_weight">
                <div class="cart_quantity clearfix">
                    <label>Quantity:</label>
                    <div class="quantity quantityd clearfix">
                        <button type="button" class="minus qtyBtn btnMinus">-</button>
                        <input type="number" class="carqty input-text qty product_details_quantity text" name="quantity" value="1">
                        <button type="button" class="plus qtyBtn btnPlus">+</button>
                    </div>
                </div>
                <div class="weight_quantity clearfix">
                    <label>Weight</label>
                    <select name="weight_quantity" id="weight_quantity" class="product_weight">
                        <option value="0">select</option>
                        <option value="1">1KG</option>
                        <option value="2">2KG</option>
                        <option value="3">3KG</option>
                        <option value="4">4KG</option>
                        <option value="5">5KG</option>
                    </select>
                </div>
                </div>
                <input type="hidden" value="quantity" name="quantity_type" class="quantity_type" />
                <div class="colorCart">
                @csrf
                <input type="hidden" value="{{$product_details->id}}" name="product_id"/> 
                <button type="submit" class="organ_btn"><i class="icon-Add-to-cart-icon"></i>Buy Now</button>
            </form>
            </div>
            <div class="pro_meta clearfix">
            <div class="mtItem mtsocial">
                <h5>Share:</h5>
                <a target="_blank" href="http://www.facebook.com/sharer.php?u={{Request::url()}}&title={{$product_details->product_details}}"><i class="twi-facebook-f"></i></a>
                <a target="_blank" href="https://twitter.com/share?url={{Request::url()}}&text={{$product_details->product_details}}"><i class="twi-twitter"></i></a>
                <a target="_blank" href="http://pinterest.com/pin/create/button/?url={{Request::url()}}&description={{$product_details->product_details}}"><i class="twi-pinterest-p"></i></a>
                <!-- <a target="_blank" href="javascript:void((function()%7Bvar%20e=document.createElement('script');e.setAttribute('type','text/javascript');e.setAttribute('charset','UTF-8');e.setAttribute('src','http://assets.pinterest.com/js/pinmarklet.js?r='+Math.random()*99999999);document.body.appendChild(e)%7D)());"><i class="twi-pinterest-p"></a> -->
                <!-- <a target="_blank" href="https://dribbble.com/"><i class="twi-dribbble"></i></a> -->
            </div>
            </div>
        </div>
    </div>
</div>
<div class="row">
    <div class="col-lg-12">
        <div class="product_tabarea">
            <ul class="nav nav-tabs productTabs" id="productTabs" role="tablist">
            <li class="nav-item" role="presentation">
                <a class="active" id="description-tab" data-toggle="tab" href="#description" role="tab" aria-controls="description" aria-selected="true">Description</a>
            </li>
            <li class="nav-item" role="presentation">
                <a id="additionalinfo-tab" data-toggle="tab" href="#additionalinfo" role="tab" aria-controls="additionalinfo" aria-selected="false">Additional Information</a>
            </li>
            
            </ul>
            <div class="tab-content">
            <div class="tab-pane fade show active" id="description" role="tabpanel" aria-labelledby="description-tab">
                <div class="pdtci_content">
                    @php
                        $productDesc = explode('==', $product_details->product_description);
                        
                    @endphp
                    <ul>
                    @foreach($productDesc as $de)
                    <li>
                        {{$de}}
                    </li>
                    @endforeach
                    <ul>
                </div>
                </div>
                @php 
                    $product_description = json_decode($product_details->product_information, true);
                @endphp
                <div class="tab-pane fade" id="additionalinfo" role="tabpanel" aria-labelledby="additionalinfo-tab">
                    <div class="adinfo">
                        <table>
                            <tbody>
                                @if(!empty($product_description))
                                    @foreach($product_description as $k => $desc)
                                        <tr>
                                            <th>{{$k}}:</th>
                                            <td>{{$desc}}</td>
                                        </tr>
                                    @endforeach    
                                @endif
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
</section>
@endsection

<!-- NEEM ARMOR (Natural Neem Manure) is composed of high quality neem seeds. The product helps to increase the nitrogen and phosphorous content in the soil. It is also rich in sulphur, potassium, calcium, etc. == It nourishes the soil and plants by providing all the major macro (Nitrogen-Phosphorus-Potassium) and micro-nutrients. It releases the nutrients slowly and uniformly. This ensures constant growth of the crops or plants during the growing cycle. == It inhibits denitrification of soil by neutralizing the responsible bacteria. == It has anti-feedant properties that help to control the number and growth of insects, nematodes and other pests/pathogens. == It is an excellent soil conditioner and increases the water holding capability of the soil. == It is bio-degradable and eco-friendly.  -->
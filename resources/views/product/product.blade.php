

@extends('layouts.master')

@section('content')

@include('partials.breadcrumb',['details'=> 'Products', 'url' => 'products'])
 <!-- End:: Popup Menu -->
<!-- Shop Section Start -->
<section class="shopPage">
    
    @if(!$products->isEmpty())
    <div class="container largeContainer">
        <div class="row">
            <div class="col-md-12">
                <div class="shopController">
                   
                    <div class="sorting">
                        <h5>Sort by:</h5>
                        <select name="orderby" class="orderby product_order_by">
                            <option value="menu_order" selected="selected">Default Sorting</option>
                            <option value="new">Newest Products</option>
                            <!-- <option value="popular">Popular Products</option>
                            <option value="rating">Average Rating</option> -->
                            <option value="price">Price: Low to High</option>
                            <option value="price-desc">Price: High to Low</option>
                        </select>
                    </div>
                    <ul class="nav producView" role="tablist">
                        <li role="presentation">
                            <a class="active" data-toggle="tab" href="#grid" role="tab" aria-selected="true"><i class="icon-grid"></i></a>
                        </li>
                        <li role="presentation">
                            <a data-toggle="tab" href="#list" role="tab" aria-selected="false"><i class="icon-list"></i></a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="tab-content">
            <div class="tab-pane fade show active" id="grid" role="tabpanel">
                <div class="row custome">
                    @foreach($products as $product)
                    <div class="col-xl-3 col-lg-4 col-md-6">
                        <div class="productItem01 ptborder">
                            <div class="proThumb">
                                <img src="assets/images/product/{{explode(',',$product->images)[0]}}" alt="">
                            </div>
                            <a class="hover" href="single-product.html"><img src="assets/images/product/{{explode(',',$product->images)[0]}}" alt=""></a>
                            <div class="product_content">
                                <div class="ratings">
                                    <i class="twi-star"></i>
                                    <i class="twi-star"></i>
                                    <i class="twi-star"></i>
                                    <i class="twi-star"></i>
                                    <i class="twi-star1"></i>
                                    <span>({{$product->ratings}})</span>
                                </div>
                                <div class="pitem">{{$product->category}}</div>
                                <h3><a href="single-product.html">{{$product->name}}</a></h3>
                                <div class="pi01Price">
                                    <span class="price"><del>₹{{$product->price}}</del><ins>₹{{$product->offer_price}}</ins></span>
                                </div>
                            </div>
                            <div class="piActionBtns">
                             
                                <!-- <a class="quickview" href="single-product.html"><i class="icon-magnifying-glass"></i></a> -->
                                <!-- <a class="cart" href="cart.html"><i class="icon-shopping-cart"></i></a> -->
                                <form action="{{url('add_to_cart')}}" method="POST">
                                    @csrf
                                    <input type="hidden" value="{{$product->id}}" name="product_id"/> 
                                    <input type="hidden" value="1" name="quantity"/> 
                                    <input type="hidden" value="quantity" name="quantity_type"/> 
                                    <input type="hidden" value="0" name="weight_quantity"/> 
                                    <button class="cart bag-icon" href="javscript();" type="submit"><i class="icon-shopping-cart"></i></button></a>
                                </form>
                                <a class="compare" href="{{url('product_details'.'/'.$product->id)}}"><i class="icon-move"></i></a>
                            </div>
                            <div class="prLabels">
                                <p class="justin">Fresh</p>
                            </div>
                            <!-- <a class="wishlist" href="wishlist.html"><i class="twi-heart1"></i></a> -->
                        </div>
                        <!-- <div class="productItem01 ptborder">
                            <div class="proThumb">
                                <img src="assets/images/product/{{explode(',',$product->images)[0]}}" alt="">
                            </div>
                            <a class="hover" href="single-product.html"><img src="assets/images/product/{{explode(',',$product->images)[0]}}" alt=""></a>
                            <div class="product_content">
                                <div class="ratings">
                                    <i class="twi-star"></i>
                                    <i class="twi-star"></i>
                                    <i class="twi-star"></i>
                                    <i class="twi-star"></i>
                                    <i class="twi-star1"></i>
                                    <span>({{$product->ratings}})</span>
                                </div>
                                <div class="pitem">{{$product->category}}</div>
                                <h3><a href="single-product.html">{{$product->name}}</a></h3>
                                <div class="pi01Price">
                                    <span class="price"><del>₹{{$product->price}}</del><ins>₹{{$product->offer_price}}</ins></span>
                                </div>
                            </div>
                            <div class="piActionBtns">
                                <a class="compare" href="{{url('product_details'.'/'.$product->id)}}"><i class="icon-move"></i></a>
                            </div>
                            <div class="prLabels">
                                <p class="justin">Fresh</p>
                            </div>                
                        </div> -->
                    </div>
                    @endforeach
                    
                </div>
            </div>
            <div class="tab-pane fade" id="list" role="tabpanel">
                <div class="row">
                @foreach($products as $product)
                    <div class="col-xl-6 col-md-12">
                        <div class="productItemlist">
                            <div class="listproThumb">
                                <img src="assets/images/product/{{explode(', ',$product->images)[0]}}" alt="">
                                <div class="prLabels">
                                    <p class="justin">Fresh</p>
                                </div>
                                <!-- <a class="wishlist" href="wishlist.html"><i class="twi-heart1"></i></a> -->
                            </div>
                            <div class="list_pro_content">
                                <div class="lptop">
                                    <div class="pitem">{{$product->name}}</div>
                                    <div class="ratings">
                                        <i class="twi-star"></i>
                                        <i class="twi-star"></i>
                                        <i class="twi-star"></i>
                                        <i class="twi-star"></i>
                                        <i class="twi-star1"></i>
                                        <span>({{$product->ratings}})</span>
                                    </div>
                                </div>
                                <h3><a href="single-product.html">Vegan Egg Replacer</a></h3>
                                <div class="pi01Price">
                                    <span class="price"><del>${{$product->price}}</del><ins>${{$product->offer_price}}</ins></span>
                                </div>
                                <ul>
                                    <li><i class="twi-check-circle1"></i>100% Natural</li>
                                    <li><i class="twi-check-circle1"></i>Increases resistance</li>
                                    <li><i class="twi-check-circle1"></i>No growth hormones are used</li>
                                </ul>
                                <div class="listActionBtns">
                                    <!-- <a class="cart" href="cart.html"><i class="twi-shopping-basket"></i></a> -->
                                    <a class="quickview" href="single-product.html"><i class="twi-search"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach    
                </div>
            </div>
        </div>
        
        @if ($products->lastPage() > 1)
        <div class="row">
            <div class="col-lg-12">
                <div class="organ_pagination text-center">
                    <a class="prev {{ ($products->currentPage() == 1) ? 'disabled' : '' }}" href="{{ $products->url(1)}}"><i class="twi-arrow-left"></i></a>
                        @for ($i = 1; $i <= $products->lastPage(); $i++)
                            <!-- <span class="{{ ($products->currentPage() == $i) ? ' current' : '' }}" >1</span> -->
                            <a class="{{ ($products->currentPage() == $i) ? ' current' : '' }}" href="{{ $products->url($i) }}">{{$i}}</a>
                        @endfor
                    <a class="next {{ ($products->currentPage() == $products->lastPage()) ? 'disabled' : '' }}" href="{{ $products->url($products->currentPage()+1) }}"><i class="twi-arrow-right"></i></a>
                </div>
                <div class="show-results">
                    <h5>Item {{$products->currentPage()}} to 8 of {{$products->count()}} Total</h5>
                </div>
            </div>
        </div>
        @endif
    </div>
    @else
        <p class="noProdcutFound">No product found</p>
    @endif
</section>
<!-- Shop Section End -->

@endsection

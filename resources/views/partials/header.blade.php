        <!-- Preloading -->
        <div class="preloader clock text-center">
            <div class="organiaLoader">
                <div class="loaderO">
                    <img src="{{asset('assets/logo-loader.png')}}">
                </div>
            </div>
        </div>
        <!-- Preloading -->

        <!-- Header Topbar -->
        <section class="topbar02">
            <div class="container largeContainer">
                <div class="row">
                    <div class="col-md-6">
                        <p>Welcome to AGRINIA!</p>
                    </div>
                    <div class="col-md-6">
                        <div class="tbaccess">
                            <div class="tosocial">
                                <a href="javascript:void(0);" class="social-share" data-id="facebook"><img src="{{asset('assets/images/social/facebook.svg')}}"></a>
                                <a href="javascript:void(0);" class="social-share" data-id="youtube"><img src="assets/images/social/youtube.svg"></a>
                                <a href="https://www.instagram.com/?url={{env('APP_URL')}}"  target="_blank" class="social-share" data-id="instagram"><img src="assets/images/social/instagram.svg"></a>
                                <a href="javascript:void(0);" class="social-share" data-id="linkedin"><img src="{{asset('assets/images/social/linkedin.svg')}}"></a>
                                <a href="javascript:void(0);" class="social-share" data-id="twitter"><img src="{{asset('assets/images/social/twitter.svg')}}"></i></a>
                                <a href="whatsapp://send?text=Hello&phone=+919916320202" class="social-share" data-id="whatsapp"><img src="{{asset('assets/images/social/whatsapp.svg')}}"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
<!-- Header Topbar -->

<!-- Header Start -->
<header class="header01 isSticky">
    <div class="container largeContainer">
        <div class="row">
            <div class="col-lg-12">
                <div class="navBar01">
                    <div class="logo">
                        <a href="{{url('/')}}"><img src="{{asset('assets/images/logo.svg')}}" alt="Dgita"></a>
                    </div>
                    <nav class="mainMenu">
                        <ul>
                            <li class="menu-item">
                                <a href="{{url('/').'/'.Session::get('product')}}">Home</a>
                            </li>
                            <li class="menu-item">
                                <a href="{{url('about_us')}}">About Us</a>
                            </li>
                            @if(!session()->get('product') == 'gardening')
                            <li class="menu-item">
                                <a href="{{url('services')}}">Services</a>
                            </li>
                            @endif
                            @if(session()->get('product') == 'gardening')
                            <li class="menu-item">
                                    <a href="{{url('products')}}">Products</a>
                            </li>
                            @endif
                            <li class="menu-item-has-children">
                                <a href="javascript:void(0);">Media</a>
                                <ul class="sub-menu">
                                    <li class="">
                                        <a href="{{env('BLOG_URL')}}">Blogs</a>
                                    </li>
                                    <li><a href="{{env('GALLARY_URL')}}">Gallary</a></li>
                                </ul>
                            </li>
                            <li class="menu-item">
                                <a href="{{url('contact')}}">Contact</a>
                            </li>
                        </ul>
                    </nav>

                    <?php
                        $total = 0;
                    ?>

                    @if(auth()->user())

                        <div class="accessNav">
                            <a href="javascript:void(0);" class="menuToggler"><i class="twi-bars1"></i></a>
                            <a class="searchBtn" onclick="searchView()" href="javascript:void(0);"><i class="twi-search1"></i></a>
                            @if(auth()->user())
                                <a class="wishlistBtn" href="{{url('account')}}"><i class="twi-user1"></i></a>
                            @else
                                <a class="wishlistBtn" href="{{url('login')}}"><i class="twi-user1"></i></a>
                            @endif
                            <!-- <a class="wishlistBtn" href="wishlist.html"><i class="twi-heart1"></i></a> -->
                            @if(cartItems())
                                <div class="shoping_cart">
                                <a class="cartBtn organia_aj_cart" ><i class="twi-shopping-bag1"></i>@if(!empty(cartItems())) <span>{{count(cartItems())}}</span> @endif</a>
                                    <div class="show_cart_area">
                                        <ul class="woocommerce-mini-cart cart_list product_list_widget">
                                            @foreach(cartItems() as $item)
                                            <?php $total += ($item->offer_price * $item->quantity); ?>
                                                <li class="woocommerce-mini-cart-item mini_cart_item">
                                                    <div class="mc_item">
                                                        <div class="mc_thumb">
                                                            <img src="{{asset('assets/images/product/'.explode(',',$item->images)[0])}}" alt="cart">
                                                        </div>
                                                        <h4><a href="single-product.html">{{$item->name ?? ''}}</a></h4>
                                                        <div class="pi01Price clearfix">{{$item->quantity ?? ''}} x {{$item->offer_price ?? ''}}</div>
                                                        <a href="" class="remove"><i class="twi-times2"></i></a>
                                                    </div>
                                                </li>
                                            @endforeach
                                        </ul>
                                        <p class="woocommerce-mini-cart__total total">
                                            <strong>Subtotal:</strong>
                                            <span class="woocommerce-Price-amount amount"><bdi><span class="woocommerce-Price-currencySymbol">₹</span>{{$total}}</bdi></span>
                                        </p>
                                        <p class="woocommerce-mini-cart__buttons buttons">
                                            <a href="{{url('cart')}}" class="button wc-forward">View cart</a>
                                            <a href="{{url('checkout')}}" class="button checkout wc-forward">Checkout</a>
                                        </p>
                                    </div>
                                </div>
                            @endif
                        </div>
                    @else
                    <?php
                     $productList = session()->get('user_temp_id');
                    ?>
                    <div class="accessNav">
                        <a href="javascript:void(0);" class="menuToggler"><i class="twi-bars1"></i></a>
                        <a class="searchBtn" onclick="searchView()" href="javascript:void(0);"><i class="twi-search1"></i></a>
                        <!-- <a class="wishlistBtn" href="wishlist.html"><i class="twi-heart1"></i></a> -->
                        <a class="wishlistBtn" href="{{url('login')}}"><i class="twi-user1"></i></a>
                        <div class="shoping_cart">
                        <a class="cartBtn organia_aj_cart" ><i class="twi-shopping-bag1"></i>@if(!empty(cartItems())) <span>{{count(cartItems())}}</span> @else <span>0</span> @endif </a>
                            <!-- <a class="cartBtn" href="{{url('cart')}}"><i style="padding-left: 3px" class="twi-shopping-bag1"></i></a> -->
                            <div class="show_cart_area">
                                <ul class="woocommerce-mini-cart cart_list product_list_widget">
                                    @if(!empty(cartItems()))
                                        @foreach(cartItems() as $k =>  $item)
                                        <?php $total += ($item->offer_price * $productList[$k]['quantity']); ?>
                                            <li class="woocommerce-mini-cart-item mini_cart_item">
                                                <div class="mc_item">
                                                    <div class="mc_thumb">
                                                        <img src="{{asset('assets/images/product/'.explode(',',$item->images)[0])}}" alt="cart">
                                                    </div>
                                                    <h4><a href="single-product.html">{{$item->name ?? ''}}</a></h4>
                                                    <div class="pi01Price clearfix">{{$productList[$k]['quantity'] ?? ''}} x {{$item->offer_price ?? ''}}</div>
                                                    <a href="" class="remove"><i class="twi-times2"></i></a>
                                                </div>
                                            </li>
                                        @endforeach
                                    @else
                                        <p>No item in cart</p>
                                    @endif
                                </ul>
                                <p class="woocommerce-mini-cart__total total">
                                    <strong>Subtotal:</strong>
                                    <span class="woocommerce-Price-amount amount"><bdi><span class="woocommerce-Price-currencySymbol">$</span>{{$total}}</bdi></span>
                                </p>
                                <p class="woocommerce-mini-cart__buttons buttons">
                                    <a href="{{url('cart')}}" class="button wc-forward">View cart</a>
                                    <a href="{{url('checkout')}}" class="button checkout wc-forward">Checkout</a>
                                </p>
                            </div>
                        </div>
                    </div>
                    @endif

                    <div class="header01SearchBar">
                        <form class="d-flex" method="get" action="{{url('products')}}">
                            <input type="search" name="s" placeholder="Products Search. Hit enter...">
                            <div class="search-category select-area">
                                <select style="display: none;">
                                    <option value="0">Select a Categories</option>
                                    <option value="12">Vegetable</option>
                                    <option value="19">Tomato</option>
                                    <option value="20">Caabage</option>
                                    <option value="20">Brooklyn</option>
                                    <option value="20">Onion</option>
                                    <option value="12">Fruits</option>
                                    <option value="12">Juice</option>
                                    <option value="12">Spices</option>
                                    <option value="12">Jam Jelly</option>
                                </select><div class="nice-select" tabindex="0"><span class="current">Select a Categories</span><ul class="list"><li data-value="0" class="option selected">Select a Categories</li><li data-value="12" class="option">Vegetable</li><li data-value="19" class="option">Tomato</li><li data-value="20" class="option">Caabage</li><li data-value="20" class="option">Brooklyn</li><li data-value="20" class="option">Onion</li><li data-value="12" class="option">Fruits</li><li data-value="12" class="option">Juice</li><li data-value="12" class="option">Spices</li><li data-value="12" class="option">Jam Jelly</li></ul></div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</header>

<!-- Begin:: Popup Menu -->

<!-- Begin:: Popup Menu -->
<section class="sidebarMenu">
    <div class="sidebarMenuOverlay"></div>
    <div class="SMArea">
        <div class="SMAHeader">
            <h3>
                <i class="twi-bars1"></i> Menu
            </h3>
            <a href="javascript:void(0);" class="SMACloser"><i class="twi-times2"></i></a>
        </div>
        <div class="SMABody">
            <ul>
                <li class="menu-item">
                    <a href="javascript:void(0);">Home</a>
                </li>
                <li class="menu-item">
                    <a href="{{url('about_us')}}">About Us</a>
                </li>
                @if(session()->get('product') == 'agricultural')
                <li class="menu-item">
                        <a href="{{url('products')}}">Products</a>
                </li>
                @endif

                @if(session()->get('product') == 'gardening')
                <li class="menu-item">
                        <a href="{{url('products')}}">Products</a>
                </li>
                @endif
                <li class="menu-item-has-children">
                    <a href="javascript:void(0);">Media</a>
                    <ul class="sub-menu">
                        <li class="">
                            <a href="{{env('BLOG_URL')}}">Blogs</a>
                        </li>
                        <li><a href="{{env('GALLARY_URL')}}">Gallary</a></li>
                    </ul>
                </li>  
                <li class="menu-item">
                    <a href="{{url('contact')}}">Contact</a>
                </li>
            </ul>
        </div>
    </div>
</section>
<!-- End:: Popup Menu -->
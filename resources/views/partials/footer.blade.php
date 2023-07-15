<!-- Footer Section -->
<footer class="footer_01 footer_white">
    <div class="container largeContainer">
        <div class="row">
          <div class="col-md-12">
             <div class="fdivider"></div>
          </div>
       </div>
        <div class="row">
            <div class="col-md-6 col-lg-4 fborder">
                <div class="widget">
                    <div class="aboutWidget">
                        <a href="index.html"><img src="{{asset('assets/images/logo.svg')}}" alt=""/></a>
                        <p>We at Agrinia, aspire and stride to become an oranisation that revolutionize agricultural
                                sector
                                in india and the world. We intend to helps and facilitate the Farmers grow nutritious..
                        </p>
                        <div class="abSocial">
                            <a href="javascript:void(0);" class="social-share" data-id="facebook"><i class="twi-facebook-f"></i></a>
                            <a href="javascript:void(0);" class="social-share" data-id="youtube"><i class="twi-youtube"></i></a>
                            <a target="_blank" href="https://www.instagram.com/?url={{env('APP_URL')}}" class="social-share" data-id="instagram"><i class="twi-instagram"></i></a>
                            <!-- <a href="javascript:void(0);" class="social-share" data-id="linkedin"><i class="twi-linkedin"></i></a>
                            <a href="javascript:void(0);" class="social-share" data-id="twitter"><i class="twi-twitter"></i></a> -->
                            <a href="whatsapp://send?text=Hello&phone=+919916320202" class="social-share" data-id="whatsapp"><i class="twi-whatsapp"></i></a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-lg-2 fborder">
                <div class="widget widget_nav_menu">
                    <h3 class="widget_title">Informartion</h3>
                    <ul>
                        <li><a href="{{url('about_us')}}">About Us</a></li>
                        <li><a href="{{url('services')}}">Services</a></li>
                         @if(session()->get('product') == 'agricultural')
                        <li>
                            <a href="{{url('products')}}">Products</a>
                        </li>
                        @endif
                        @if(session()->get('product') == 'gardening')
                        <li><a href="{{url('products')}}">Products</a></li>
                        @endif
                        <li><a href="{{url('contact')}}">Contact Us</a></li>
                    </ul>
                </div>
            </div>
            <div class="col-md-6 col-lg-2 fborder">
                <div class="widget widget_nav_menu">
                    <h3 class="widget_title">My Account</h3>
                    <ul>
                        <li><a href="{{url('account')}}">My Account</a></li>
                        <li><a href="{{url('cart')}}">Shopping Cart</a></li>
                        @if(auth()->user())
                            <li><a href="{{url('recent_orders')}}">Order History</a></li>
                        @endif
                    </ul>
                </div>
            </div>
            <div class="col-md-6 col-lg-3">
                <div class="widget contact_widget">
                        <h3 class="widget_title">Contact Us</h3>
                        <div class="infoItem"><span>Address:</span> Level 14-15, Concorde Tower,
                            UB City, 1 Vittal Mallya Road
                            Bengaluru-560001.
                            Karnataka, India.</div>
                        <div class="infoItem"><span>Email:</span> <a href="mailto:info@agrinia.com">info@agrinia.com</a>
                        </div>
                        <div class="infoItem"><span>Phone:</span> <a href="tel:1800-120-4282">1800-120-4282</a></div>
                    <!-- <div class="paymentMethod">
                        <h5>Payment Accepted</h5>
                        <img src="{{asset('assets/images/payment2.png')}}" alt="">
                    </div> -->
                </div>
            </div>
        </div>
        <div class="row"><div class="col-md-12"><div class="fdivider"></div></div></div>
        <div class="row">
            <div class="col-md-12">
                <div class="copyright">
                    <p>Copyright © 2022 <a href="#">AGRINIA</a> Inc. All rights reserved.</p>
                    <ul>
                        <li><a href="{{url('privacy-policy')}}">Privacy Policy</a></li>
                        <li><a href="{{url('term-and-condition')}}">Terms of Use</a></li>
                        <li><a href="{{url('return-policy')}}">Return Policy</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</footer>
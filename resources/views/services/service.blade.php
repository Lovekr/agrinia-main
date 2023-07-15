
@extends('layouts.master')

@section('content')

@include('partials.breadcrumb',['details'=> 'Agricultural Services', 'url' => 'Services'])
<!-- Begin:: Banner Section -->
        <!-- <section class="page_banner" style="background-image: url(assets/images/bg/b2.jpg);">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12 text-center">
                        <h2 class="banner-title">Agricultural Services</h2>
                        <p class="breadcrumbs">
                            <a href="{{url('/').'/'.Session::get('product')}}"><i class="twi-home"></i>Home</a><i class="twi-angle-right"></i>Agricultural Services
                        </p>
                    </div>
                </div>
            </div>
        </section> -->
        <!-- End:: Banner Section -->
         <!-- Single Service Start -->
         <section class="singleService">
            <div class="container largeContainer">
                <div class="row">
                    <div class="col-lg-4">
                        <div class="servicePost">
                            <div class="spItem active">
                                <span>Farm your Land</span>
                                <h5><a href="service-single.html">Agricultural Services</a></h5>
                            </div>
                           
                        </div>
                    </div>
                    <div class="col-lg-8">
                        <div class="service_area">
                            <h5>We farm your land</h5>
                            <h2>Organic Store Services</h2>
                            <p class="fontBold">
                                Claritas est etiam processus dynamicus, qui sequitur consuetudium lectorum est usus legentis in iis qui facit eorum claritatem facer possim assum exerci te feugait nulla facilisi.
                            </p>
                            <p>
                                Investigationes demonstraverunt lectores legere me lius quod ii legunt saepius. Claritas est etiam processus dynamicus, qui sequitur mutationem consuetudium lectorum. Est notare quam littera gothica, quam nunc 
                                putamus parum claram, anteposuerit formas humanitatis per seacula quarta decima et quinta decima.
                            </p>
                            <div class="row srimg">
                                <div class="col-md-6">
                                    <img src="assets/images/single-service/1.jpg" alt="">
                                    <h4>Project Management</h4>
                                    <p>
                                        Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit lobortis nisl ut aliquip
                                    </p>
                                    <p>
                                        commodo consequat. Duis autem vel eum iriure dolor in hendrerit in vulputate velit esse molestie consequat, vel illum dolore eu feugiat nulla facilisis at vero eros et accumsan et iusto odio.
                                    </p>
                                    <p>Qui blandit praesent luptatum zzril delenit augue duis dolore te.</p>
                                    <a href="javascript:void(0);" class="organ_btn ob02"><i class="twi-arrow-alt-to-bottom"></i>Service Brochure</a>
                                </div>
                                <div class="col-md-6">
                                    <img src="assets/images/single-service/2.jpg" alt="">
                                    <h4>Reporting & Cost Control</h4>
                                    <p>
                                        Duis autem vel eum iriure dolor in hendrerit in vulputate velit esse molestie consequat, vel illum dolore eu feugiat nulla.
                                    </p>
                                    <div class="row">
                                        <div class="col-md-6">
                                            <ul class="listItem">
                                                <li><i class="twi-check"></i>Best quality support</li>
                                                <li><i class="twi-check"></i>Money guarantee</li>
                                                <li><i class="twi-check"></i>Cheap price provide</li>
                                                <li><i class="twi-check"></i>Speciality Produce</li>
                                            </ul>
                                        </div>
                                        <div class="col-md-6">
                                            <img src="assets/images/single-service/3.jpg" alt="">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- Single Service End -->
@endsection
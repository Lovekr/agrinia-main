<!-- Begin:: Banner Section -->
<section class="page_banner" style="background-image: url(assets/images/bg/b2.jpg);">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 text-center">
                <h2 class="banner-title">{{$details ?? 'Login/Verify'}}</h2>
                <p class="breadcrumbs">
                    <a href="{{url('/').'/'.Session::get('product')}}"><i class="twi-home"></i>Home</a><i class="twi-angle-right"></i>{{$details ?? 'Login/Verify'}}
                </p>
            </div>
        </div>
    </div>
</section>
<!-- End:: Banner Section -->
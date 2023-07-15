<!-- Contact Info Start -->

@extends('layouts.master')

@section('content')

@include('partials.breadcrumb', ['details'=> 'Contact Us', 'url' => 'Contact Us'])

@if ($errors->any())
<div class="alert alert-danger">
    <ul>
        @foreach ($errors->all() as $error)
            <li>{{ $error }}</li>
        @endforeach
    </ul>
</div>
@endif

@if(session()->has('message'))
    <div class="alert alert-success">
        {{ session()->get('message') }}
    </div>
@endif

<section class="contactInfoSec contactInfoSec2">
    <div class="container largeContainer">
        <div class="row">
            <div class="col-lg-5">
                <h2 class="secTitle">Get In Touch</h2>
                <p> We are here to help and answer any query you might have. We look forward to hearing from you.</p>
                <div class="contactbox">
                    <i class="twi-envelope"></i>
                    <h5><a href="mailto:info@agrinia.com">info@agrinia.com</a></h5>
                </div>
                <div class="contactbox">
                    <i class="twi-phone"></i>
                    <h5><a href="tel:1800-120-4282">1800-120-4282 <span>- Central Office</span></a></h5>
                </div>
                <div class="contactbox last">
                    <i class="twi-map-marker-alt"></i>
                    <h5><a href="https://www.google.com/maps">Level 14-15, Concorde Tower,
                                UB City, 1 Vittal Mallya Road
                                Bengaluru-560001.
                                Karnataka, India.</a></h5>
                </div>
                <div class="conSocial">
                    <a class="social-share" data-id="facebook" href="javascript:void(0);"><i class="twi-facebook-f"></i></a>
                    <a class="social-share" target="_blank" data-id="instargram" href="https://www.instagram.com/?url={{env('APP_URL')}}"><i class="twi-instagram"></i></a>
                    <a class="social-share" data-id="linkedin" href="javascript:void(0);"><i class="twi-linkedin-in"></i></a>
                </div>
            </div>
            <div class="col-lg-7">
                <div class="contact_form_2">
                    <h2 class="secTitle">Drop Us a Line</h2>
                    <form action="{{url('zohocrmauth')}}" method="get" class="row">
                        @csrf
                        <div class="col-lg-6">
                            <input class="required" type="text" name="name" placeholder="Full Name *">
                        </div>
                        <div class="col-lg-6">
                            <input class="required" type="email" name="email" placeholder="Email Address *">
                        </div>
                        <div class="col-md-12">
                            <input type="text" name="subject" placeholder="Subject">
                            <textarea class="required" name="message" placeholder="Your Message here"></textarea>
                            <button type="submit" class="organ_btn">Get In Touch<i class="twi-arrow-right1"></i></button>
                            <div class="con_message"></div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    </section>
    <!-- Contact Info End -->

    <!-- Contact Map Start -->
    <section class="mapSection">
    <div class="container largeContainer">
        <div class="googleMap" id="googleMap"></div>
    </div>
    </section>
@endsection
        <!-- Contact Map End -->
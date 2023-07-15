<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Agrinia</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width">

        <!-- Start Include All CSS -->
        <link rel="stylesheet" href="{{asset('assets/css/bootstrap.css')}}"/>
        <link rel="stylesheet" href="{{asset('assets/css/animate.css')}}"/>
        <link rel="stylesheet" href="{{asset('assets/css/themewar-font.css')}}"/>
        <link rel="stylesheet" href="{{asset('assets/css/organio-icon.css')}}"/>
        <link rel="stylesheet" href="{{asset('assets/css/owl.carousel.min.css')}}">
        <link rel="stylesheet" href="{{asset('assets/css/owl.theme.default.min.css')}}">
        <link rel="stylesheet" href="{{asset('assets/css/nice-select.css')}}">
        <link rel="stylesheet" href="{{asset('assets/css/slick.css')}}">
        <link rel="stylesheet" href="{{asset('assets/css/lightcase.css')}}">

        <!-- Revolution Slider Setting CSS -->
        <link rel="stylesheet" type="text/css" href="{{asset('assets/css/settings.css')}}">

        <link rel="stylesheet" href="{{asset('assets/css/preset.css')}}"/>
        <link rel="stylesheet" href="{{asset('assets/css/ignore_for_wp.css')}}"/>
        <link rel="stylesheet" href="{{asset('assets/css/theme.css')}}"/>
        <link rel="stylesheet" href="{{asset('assets/css/responsive.css')}}"/>
        <link rel="stylesheet" href="{{asset('assets/css/landing-page.css')}}">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <!-- End Include All CSS -->

        <!-- Favicon Icon -->
        <link rel="icon"  type="image/png" href="{{asset('assets/images/favicon.png')}}">
        <!-- Favicon Icon -->
        <style>
             @media only screen and (min-width : 768px) {
                #successMsg {
                    width: 50%;margin-left: 49%; padding-top: 23px;text-align: center;
                }
            }
        </style>
    </head>
    <body>
    <section class="headerMiddle">
            <div class="container largeContainer">
                <div class="row">
                    <div class="col-xl-3 col-lg-3 col-md-4">
                        <div class="logo">
                            <a href="{{url('index')}}"><img src="{{asset('landingimg/image 85.png')}}" alt="Agrinia"></a>
                        </div>
                    </div>
                    <div class="col-xl-9 col-lg-6 col-md-8 m-auto text-center">
                        <div class="title-section">
                            <h1>Welcome to <span>AGRINIA</span></h1>
                            <p>We at AGRINIA, intent to provide smart & natural real-time solutions for plant nurishment & protection. We provide services utilising the latest smart technologies & natural input products that help the plants to have a healthy, optimal & natural growth & development. Our services and products are safe and eco-frendly to the environment.</p>    
                        </div>
                       </div>
                    <div class="col-xl-2 col-lg-3 col-md-4 cusmm">
                        
                    </div>
                </div>
            </div>
        </section>
        <!-- CTA Start -->
        <section class="d-lg-block d-none d-md-block">
            <div class="">
                <div class="row" id="res">
                    <div class="col-xl-6 col-lg-12 box">
                        <div class="column ">
                          
                        </div>
                        <div class="box-div">
                            <div class="text-center">
                                <a href="{{url('agricultural')}}"><img src="{{asset('/assets/AGRICULTURAL.png')}}"></a>
                            </div>
                            <!-- <img class="rtlayer" src="landingimg/icons.png" alt=""> -->
                            <p>For Agricultural services and products, please <br>click on the above button</p>
                        </div>
                    </div>
                    <div class="col-xl-6 col-lg-12 box2">
                        <div class="column ">
                            
                        </div>
                        <div class="box-div1">
                            <a href="{{url('gardening')}}"><img src="{{asset('/assets/GARDENING.png')}}"></a>
                            <!-- <img class="rtlayer" src="landingimg/icons.png" alt=""> -->
                            <p>For Gardening services and products, please <br>click on the above button</p>
                        </div>
                    </div>
                    </div>
                </div>
            </div>
        </section>

        <section class="d-lg-none d-block d-md-none">
            <div class="row" id="res">
                <div class="col-xl-6 col-lg-12 mb-5">
                    <div class="text-center">
                        <img src="{{asset('/landingimg/mobileViewAgricultural.png')}}" class="img-responsive">
                    </div>
                   <div class="landingagri text-center mt-2">
                     <a href="{{url('agricultural')}}"><img src="{{asset('/assets/AGRICULTURAL.png')}}" class="img-responsive"></a>
                     <p>For Agricultural services and products, please <br>click on the above button</p>
                    </div>
                </div>
                <div class="col-xl-6 col-lg-12 mt-5 mb-5">
                    <div class="text-center">
                        <img src="{{asset('/landingimg/mobileViewGardening.png')}}" class="img-responsive">
                    </div>
                    <div class="landingagri text-center">
                        <a href="{{url('gardening')}}"><img src="{{asset('/assets/GARDENING.png')}}"
                         class="img-responsive"></a>
                        <p>For Gardening services and products, please <br>click on the above button</p>
                    </div>
                </div>
                </div>
            </div>
        </section>

        <section>
            <div class="container" id="containerSocail">
                <div class="row">
                    <div class="abSocial text-center m-auto">
                            <a href="javascript:void(0);" class="social-share" data-id="facebook"><i class="twi-facebook-f"></i></a>
                            <a href="javascript:void(0);" class="social-share" data-id="youtube"><i class="twi-youtube"></i></a>
                            <a href="https://www.instagram.com/?url={{env('APP_URL')}}" class="social-share" data-id="instagram"><i class="twi-instagram"></i></a>
                            <a href="javascript:void(0);" class="social-share" data-id="linkedin"><i class="twi-linkedin-in"></i></a>
                            <a href="javascript:void(0);" class="social-share" data-id="twitter"><i class="twi-twitter"></i></a>
                            <a href="whatsapp://send?text=Hello&phone=+919916320202" data-id="whatsapp"><i class="twi-whatsapp"></i></a>
                    </div>
                </div>
            </div>
        </section>
        <a href="javascript:void(0);" id="backtotop"><i class="twi-arrow-to-top1"></i></a>
        <!-- Bact To Top -->

        <!-- Start Include All JS -->
        <script src="{{asset('assets/js/jquery.js')}}"></script>
        <script src="{{asset('assets/js/jquery-ui.js')}}"></script>
        <script src="{{asset('assets/js/bootstrap.min.js')}}"></script>
        <script src="{{asset('assets/js/jquery.plugin.min.js')}}"></script>
        <script src="{{asset('assets/js/jquery.countdown.min.js')}}"></script>
        <script src="{{asset('assets/js/jquery.appear.js')}}"></script>
        <script src="{{asset('assets/js/owl.carousel.min.js')}}"></script>
        <script src="{{asset('assets/js/owl.carousel.filter.js')}}"></script>
        <script src="{{asset('assets/js/shuffle.min.js')}}"></script>
        <script src="{{asset('assets/js/masonry.js')}}"></script>
        <script src="{{asset('assets/js/nice-select.js')}}"></script>
        <script src="{{asset('assets/js/slick.js')}}"></script>
        <script src="{{asset('assets/js/lightcase.js')}}"></script>
        <script src="{{asset('assets/js/gmaps.js')}}"></script>
        <script src="https://maps.google.com/maps/api/js?key=AIzaSyBJtPMZ_LWZKuHTLq5o08KSncQufIhPU3o"></script>

        <!-- Slider Revolution Main Files -->
        <script src="{{asset('assets/js/jquery.themepunch.tools.min.js')}}"></script>
        <script src="{{asset('assets/js/jquery.themepunch.revolution.min.js')}}"></script>

        <!-- Slider Revolution Extension -->    
        <script src="{{asset('assets/js/extensions/revolution.extension.actions.min.js')}}"></script>
        <script src="{{asset('assets/js/extensions/revolution.extension.carousel.min.js')}}"></script>
        <script src="{{asset('assets/js/extensions/revolution.extension.kenburn.min.js')}}"></script>
        <script src="{{asset('assets/js/extensions/revolution.extension.layeranimation.min.js')}}"></script>
        <script src="{{asset('assets/js/extensions/revolution.extension.migration.min.js')}}"></script>
        <script src="{{asset('assets/js/extensions/revolution.extension.navigation.min.js')}}"></script>
        <script src="{{asset('assets/js/extensions/revolution.extension.parallax.min.js')}}"></script>
        <script src="{{asset('assets/js/extensions/revolution.extension.slideanims.min.js')}}"></script>
        <script src="{{asset('assets/js/extensions/revolution.extension.video.min.js')}}"></script>

        <script src="{{asset('assets/js/theme.js')}}"></script>
        <!-- End Include All JS -->
    </body>
</html>

<script>

$(document).ready(function (e) {

function updateQueryStringParameter(uri, key, value) {
  var re = new RegExp("([?&])" + key + "=.*?(&|$)", "i");
  var separator = uri.indexOf('?') !== -1 ? "&" : "?";
  if (uri.match(re)) {
    return uri.replace(re, '$1' + key + "=" + value + '$2');
  }
  else {
    return uri + separator + key + "=" + value;
  }
}

$(document).on("click",".social-share",function() {

  if($(this).attr('data-id') == 'facebook') {
    shareOnFacebook("{{env('APP_URL')}}");
  }

  if($(this).attr('data-id') == 'twitter') {
    shareOnTwitter("{{env('APP_URL')}}");
  }


  if($(this).attr('data-id') == 'linkedin') {
    shareOnLinkedIn("{{env('APP_URL')}}");
  }
  
});

function shareOnFacebook(url) {
  const navUrl = 'https://www.facebook.com/sharer/sharer.php?u=' + url;
  window.open(navUrl , '_blank');
}

function shareOnTwitter(url) {
  const navUrl =
    'https://twitter.com/intent/tweet?text=' +
    url;
  window.open(navUrl, '_blank');
}

function shareOnLinkedIn(url) {
  const navUrl =
    'https://www.linkedin.com/shareArticle?mini=true&url=' +
    url;
  window.open(navUrl, '_blank');
}


});

</script>
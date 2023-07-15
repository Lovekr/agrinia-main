
@extends('layouts.master')

@section('content')
<section class="sidebarMenu">
            <div class="sidebarMenuOverlay"></div>
            <div class="SMArea">
                <div class="SMAHeader">
                    <!-- <h3>
                        <i class="twi-bars1"></i> Menu
                    </h3> -->
                    <a href="javascript:void(0);" class="SMACloser"><i class="twi-times2"></i></a>
                </div>
                <div class="SMABody">
                    <ul>
                        <li class="menu-item">
                            <a href="{{url('agricultural')}}">Home</a>
                        </li>
                        <li class="menu-item">
                            <a href="{{url('about_us')}}">About Us</a>
                        </li>
                        <li class="menu-item">
                            <a href="{{url('products')}}">Products</a>
                        </li>
                        <li class="menu-item-has-children">
                            <a href="javascript:void(0);">Media</a>
                            <ul class="sub-menu">
                                <li class="menu-item">
                                    <a href="https://www.agrinia.com/new-blogs">Blogs</a>
                                </li>
                                <li class="menu-item">
                                    <a href="https://www.agrinia.com/new-blogs/gallery/">Gallery</a>
                                </li>
                            </ul>
                        </li>  
                        <li class="menu-item">
                            <a href="contact.html">Contact </a>
                        </li>
                    </ul>
                </div>
            </div>
        </section>
        <!-- End:: Popup Menu -->
   <!-- Begin:: Slider Section -->
   <section class="slider_05">
            <div class="container largeContainer">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="rev_slider_wrapper">
                            <div id="rev_slider_5" class="rev_slider" style="display:none;" data-version="5.4.1">
                            <ul>
                                    <li data-index="rs-3055" data-transition="random-premium" data-slotamount="default" data-hideafterloop="0" data-hideslideonmobile="off"  data-easein="Power3.easeInOut" data-easeout="Power3.easeInOut" data-masterspeed="1000"  data-thumb=""  data-rotate="0"  data-saveperformance="off"  data-title="" data-param1="" data-param2="" data-param3="" data-param4="" data-param5="" data-param6="" data-param7="" data-param8="" data-param9="" data-param10="" data-description="">
                                        <img src="{{asset('assets/Agrinia-slider1.jpg')}}"  alt="Organia"  data-bgposition="center center" data-bgfit="contain" data-bgrepeat="no-repeat" data-bgparallax="0" class="rev-slidebg" data-no-retina>
                                        <div class="tp-caption SterlingFont ws_nowrap text-upppercase"
                                             data-x="['left', 'left', 'center', 'center']" 
                                             data-hoffset="['-35','0','0','0']" 

                                             data-y="['middle']" 
                                             data-voffset="['-120','-120','-145','-135']" 

                                             data-fontsize="['18','18','18','18']"
                                             data-fontweight="500"
                                             data-lineheight="['30']"
                                             data-letterspacing="0"
                                             data-width="['500','500','100%', '100%']"
                                             data-height="['auto']"
                                             data-whitesapce="normal"
                                             data-color="['#62a403']"

                                             data-type="text" 
                                             data-responsive_offset="off" 

                                             data-frames='[{"delay":1500,"speed":300,"frame":"0","from":"x:-50px;opacity:0;","to":"o:1;","ease":"power3.inOut"},{"delay":"wait","speed":300,"frame":"999","to":"auto:auto;","ease":"power3.inOut"}]'

                                             data-textAlign="['left', 'left', 'center', 'center']"
                                             data-paddingtop="[0,0,0,0]"
                                             data-paddingright="[0,0,25,20]"
                                             data-paddingbottom="[0,0,0,0]"
                                             data-paddingleft="[0,20,25,20]"

                                             >100% Organic Foods
                                        </div>
                                        <div class="tp-caption headFont ws_nowrap"
                                             data-x="['left', 'left', 'center', 'center']" 
                                             data-hoffset="['-40','0','0','0']" 

                                             data-y="['middle']" 
                                             data-voffset="['-22','-22','-30','-45']" 

                                             data-fontsize="['58','50','50','38']"
                                             data-fontweight="['800']"
                                             data-lineheight="['75','68','65','52']"
                                             data-letterspacing="['-3','-2','-1.4','-1']"
                                             data-width="['580','580','100%','100%']"
                                             data-height="['auto']"
                                             data-whitesapce="['normal']"
                                             data-color="['#232424']"

                                             data-type="text" 
                                             data-responsive_offset="off" 

                                             data-frames='[{"delay":1800,"speed":300,"frame":"0","from":"x:-50px;opacity:0;","to":"o:1;","ease":"power3.inOut"},{"delay":"wait","speed":300,"frame":"999","to":"auto:auto;","ease":"power3.inOut"}]'

                                             data-textAlign="['left', 'left', 'center', 'center']"
                                             data-paddingtop="[0,0,0,0]"
                                             data-paddingright="[0,0,80,20]"
                                             data-paddingbottom="[0,0,0,0]"
                                             data-paddingleft="[0,20,80,20]"

                                             >Organic Veggies Coock <span class="prcolor">Healthy</span>
                                        </div>
                                        <div class="tp-caption headFont tp-resizeme"
                                             data-x="['left', 'left', 'center', 'center']" 
                                             data-hoffset="['-35','0','0','0']" 

                                             data-y="['middle']" 
                                             data-voffset="['105','105','100','70']" 

                                             data-fontsize="['17']" 
                                             data-fontweight="800"
                                             data-lineheight=".8"
                                             data-width="['100%']"
                                             data-height="['auto']"
                                             data-whitesapce="['normal']"
                                             data-color="['#fff']"

                                             data-type="text" 
                                             data-responsive_offset="off" 

                                            data-frames='[{"delay":2400,"speed":300,"frame":"0","from":"x:-50px;opacity:0;","to":"o:1;","ease":"power3.inOut"},{"delay":"wait","speed":300,"frame":"999","to":"auto:auto;","ease":"power3.inOut"}]'

                                             data-textAlign="['left', 'left', 'center', 'center']"
                                             data-paddingtop="[0,0,0,0]"
                                             data-paddingright="[0,0,0,0]"
                                             data-paddingbottom="[0,0,0,0]"
                                             data-paddingleft="[0,20,0,0]"

                                             ><a href="{{url('services')}}" class="organ_btn">Know More<i class="twi-arrow-right1"></i></a>
                                        </div>
                                        <div class="tp-caption rs-parallaxlevel-1 layerImg"

                                            data-frames='[{"delay":2600,"speed":850,"frame":"0","from":"z:0;rX:0;rY:0;rZ:0;sX:0.9;sY:0.9;skX:0;skY:0;opacity:0;","to":"o:1;","ease":"power3.inOut"},{"delay":"wait","speed":300,"frame":"999","to":"auto:auto;","ease":"power3.inOut"}]'

                                            data-type="image"
                                            data-x="right"
                                            data-y="center"
                                            data-hoffset="['-65','0','0','0']"
                                            data-voffset="['2','0','0','0']"
                                            data-width="['auto', '450']"
                                            data-height="['auto']"
                                            
                                            data-visibility="['on', 'on', 'on', 'on']"

                                        ></div>
                                    </li>
                                    <li data-index="rs-3056" data-transition="random-premium" data-slotamount="default" data-hideafterloop="0" data-hideslideonmobile="off"  data-easein="Power3.easeInOut" data-easeout="Power3.easeInOut" data-masterspeed="1000"  data-thumb=""  data-rotate="0"  data-saveperformance="off"  data-title="" data-param1="" data-param2="" data-param3="" data-param4="" data-param5="" data-param6="" data-param7="" data-param8="" data-param9="" data-param10="" data-description="">
                                        <img src="{{asset('assets/Agrinia-slider2.jpg')}}"  alt="Organia"  data-bgposition="center center" data-bgfit="contain" data-bgrepeat="no-repeat" data-bgparallax="0" class="rev-slidebg" data-no-retina>
                                        <div class="tp-caption SterlingFont ws_nowrap text-upppercase"
                                             data-x="['left', 'left', 'center', 'center']" 
                                             data-hoffset="['-35','0','0','0']" 

                                             data-y="['middle']" 
                                             data-voffset="['-120','-120','-145','-135']" 

                                             data-fontsize="['18','18','18','18']"
                                             data-fontweight="500"
                                             data-lineheight="['30']"
                                             data-letterspacing="0"
                                             data-width="['500','500','100%', '100%']"
                                             data-height="['auto']"
                                             data-whitesapce="normal"
                                             data-color="['#62a403']"

                                             data-type="text" 
                                             data-responsive_offset="off" 

                                             data-frames='[{"delay":1500,"speed":300,"frame":"0","from":"x:-50px;opacity:0;","to":"o:1;","ease":"power3.inOut"},{"delay":"wait","speed":300,"frame":"999","to":"auto:auto;","ease":"power3.inOut"}]'

                                             data-textAlign="['left', 'left', 'center', 'center']"
                                             data-paddingtop="[0,0,0,0]"
                                             data-paddingright="[0,0,25,20]"
                                             data-paddingbottom="[0,0,0,0]"
                                             data-paddingleft="[0,20,25,20]"

                                             >100% Organic Foods
                                        </div>
                                        <div class="tp-caption headFont ws_nowrap"
                                             data-x="['left', 'left', 'center', 'center']" 
                                             data-hoffset="['-40','0','0','0']" 

                                             data-y="['middle']" 
                                             data-voffset="['-22','-22','-30','-45']" 

                                             data-fontsize="['58','50','50','38']"
                                             data-fontweight="['800']"
                                             data-lineheight="['75','68','65','52']"
                                             data-letterspacing="['-3','-2','-1.4','-1']"
                                             data-width="['580','580','100%','100%']"
                                             data-height="['auto']"
                                             data-whitesapce="['normal']"
                                             data-color="['#232424']"

                                             data-type="text" 
                                             data-responsive_offset="off" 

                                             data-frames='[{"delay":1800,"speed":300,"frame":"0","from":"x:-50px;opacity:0;","to":"o:1;","ease":"power3.inOut"},{"delay":"wait","speed":300,"frame":"999","to":"auto:auto;","ease":"power3.inOut"}]'

                                             data-textAlign="['left', 'left', 'center', 'center']"
                                             data-paddingtop="[0,0,0,0]"
                                             data-paddingright="[0,0,80,20]"
                                             data-paddingbottom="[0,0,0,0]"
                                             data-paddingleft="[0,20,80,20]"

                                             >Organic Veggies Coock <span class="prcolor">Healthy</span>
                                        </div>
                                        <div class="tp-caption headFont tp-resizeme"
                                             data-x="['left', 'left', 'center', 'center']" 
                                             data-hoffset="['-35','0','0','0']" 

                                             data-y="['middle']" 
                                             data-voffset="['105','105','100','70']" 

                                             data-fontsize="['17']" 
                                             data-fontweight="800"
                                             data-lineheight=".8"
                                             data-width="['100%']"
                                             data-height="['auto']"
                                             data-whitesapce="['normal']"
                                             data-color="['#fff']"

                                             data-type="text" 
                                             data-responsive_offset="off" 

                                            data-frames='[{"delay":2400,"speed":300,"frame":"0","from":"x:-50px;opacity:0;","to":"o:1;","ease":"power3.inOut"},{"delay":"wait","speed":300,"frame":"999","to":"auto:auto;","ease":"power3.inOut"}]'

                                             data-textAlign="['left', 'left', 'center', 'center']"
                                             data-paddingtop="[0,0,0,0]"
                                             data-paddingright="[0,0,0,0]"
                                             data-paddingbottom="[0,0,0,0]"
                                             data-paddingleft="[0,20,0,0]"

                                             ><a href="{{url('services')}}" class="organ_btn">Know More<i class="twi-arrow-right1"></i></a>
                                        </div>
                                        <div class="tp-caption rs-parallaxlevel-1 layerImg"

                                            data-frames='[{"delay":2600,"speed":850,"frame":"0","from":"z:0;rX:0;rY:0;rZ:0;sX:0.9;sY:0.9;skX:0;skY:0;opacity:0;","to":"o:1;","ease":"power3.inOut"},{"delay":"wait","speed":300,"frame":"999","to":"auto:auto;","ease":"power3.inOut"}]'

                                            data-type="image"
                                            data-x="right"
                                            data-y="center"
                                            data-hoffset="['-65','0','0','0']"
                                            data-voffset="['2','0','0','0']"
                                            data-width="['auto', '450']"
                                            data-height="['auto']"
                                            
                                            data-visibility="['on', 'on', 'on', 'on']"

                                        ></div>
                                    </li>
                                    <li data-index="rs-3057" data-transition="random-premium" data-slotamount="default" data-hideafterloop="0" data-hideslideonmobile="off"  data-easein="Power3.easeInOut" data-easeout="Power3.easeInOut" data-masterspeed="1000"  data-thumb=""  data-rotate="0"  data-saveperformance="off"  data-title="" data-param1="" data-param2="" data-param3="" data-param4="" data-param5="" data-param6="" data-param7="" data-param8="" data-param9="" data-param10="" data-description="">
                                        <img src="{{asset('assets/Agrinia-slider3.jpg')}}"  alt="Organia"  data-bgposition="center center" data-bgfit="contain" data-bgrepeat="no-repeat" data-bgparallax="0" class="rev-slidebg" data-no-retina>
                                        <div class="tp-caption SterlingFont ws_nowrap text-upppercase"
                                             data-x="['left', 'left', 'center', 'center']" 
                                             data-hoffset="['-35','0','0','0']" 

                                             data-y="['middle']" 
                                             data-voffset="['-120','-120','-145','-135']" 

                                             data-fontsize="['18','18','18','18']"
                                             data-fontweight="500"
                                             data-lineheight="['30']"
                                             data-letterspacing="0"
                                             data-width="['500','500','100%', '100%']"
                                             data-height="['auto']"
                                             data-whitesapce="normal"
                                             data-color="['#62a403']"

                                             data-type="text" 
                                             data-responsive_offset="off" 

                                             data-frames='[{"delay":1500,"speed":300,"frame":"0","from":"x:-50px;opacity:0;","to":"o:1;","ease":"power3.inOut"},{"delay":"wait","speed":300,"frame":"999","to":"auto:auto;","ease":"power3.inOut"}]'

                                             data-textAlign="['left', 'left', 'center', 'center']"
                                             data-paddingtop="[0,0,0,0]"
                                             data-paddingright="[0,0,25,20]"
                                             data-paddingbottom="[0,0,0,0]"
                                             data-paddingleft="[0,20,25,20]"

                                             >100% Organic Foods
                                        </div>
                                        <div class="tp-caption headFont ws_nowrap"
                                             data-x="['left', 'left', 'center', 'center']" 
                                             data-hoffset="['-40','0','0','0']" 

                                             data-y="['middle']" 
                                             data-voffset="['-22','-22','-30','-45']" 

                                             data-fontsize="['58','50','50','38']"
                                             data-fontweight="['800']"
                                             data-lineheight="['75','68','65','52']"
                                             data-letterspacing="['-3','-2','-1.4','-1']"
                                             data-width="['580','580','100%','100%']"
                                             data-height="['auto']"
                                             data-whitesapce="['normal']"
                                             data-color="['#232424']"

                                             data-type="text" 
                                             data-responsive_offset="off" 

                                             data-frames='[{"delay":1800,"speed":300,"frame":"0","from":"x:-50px;opacity:0;","to":"o:1;","ease":"power3.inOut"},{"delay":"wait","speed":300,"frame":"999","to":"auto:auto;","ease":"power3.inOut"}]'

                                             data-textAlign="['left', 'left', 'center', 'center']"
                                             data-paddingtop="[0,0,0,0]"
                                             data-paddingright="[0,0,80,20]"
                                             data-paddingbottom="[0,0,0,0]"
                                             data-paddingleft="[0,20,80,20]"

                                             >Organic Veggies Coock <span class="prcolor">Healthy</span>
                                        </div>
                                        <div class="tp-caption headFont tp-resizeme"
                                             data-x="['left', 'left', 'center', 'center']" 
                                             data-hoffset="['-35','0','0','0']" 

                                             data-y="['middle']" 
                                             data-voffset="['105','105','100','70']" 

                                             data-fontsize="['17']" 
                                             data-fontweight="800"
                                             data-lineheight=".8"
                                             data-width="['100%']"
                                             data-height="['auto']"
                                             data-whitesapce="['normal']"
                                             data-color="['#fff']"

                                             data-type="text" 
                                             data-responsive_offset="off" 

                                            data-frames='[{"delay":2400,"speed":300,"frame":"0","from":"x:-50px;opacity:0;","to":"o:1;","ease":"power3.inOut"},{"delay":"wait","speed":300,"frame":"999","to":"auto:auto;","ease":"power3.inOut"}]'

                                             data-textAlign="['left', 'left', 'center', 'center']"
                                             data-paddingtop="[0,0,0,0]"
                                             data-paddingright="[0,0,0,0]"
                                             data-paddingbottom="[0,0,0,0]"
                                             data-paddingleft="[0,20,0,0]"

                                             ><a href="{{url('services')}}" class="organ_btn">Know More<i class="twi-arrow-right1"></i></a>
                                        </div>
                                        <div class="tp-caption rs-parallaxlevel-1 layerImg"

                                            data-frames='[{"delay":2600,"speed":850,"frame":"0","from":"z:0;rX:0;rY:0;rZ:0;sX:0.9;sY:0.9;skX:0;skY:0;opacity:0;","to":"o:1;","ease":"power3.inOut"},{"delay":"wait","speed":300,"frame":"999","to":"auto:auto;","ease":"power3.inOut"}]'

                                            data-type="image"
                                            data-x="right"
                                            data-y="center"
                                            data-hoffset="['-65','0','0','0']"
                                            data-voffset="['2','0','0','0']"
                                            data-width="['auto', '450']"
                                            data-height="['auto']"
                                            
                                            data-visibility="['on', 'on', 'on', 'on']"

                                        ></div>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- End:: Slider Section -->

        <!-- Begin:: About Us Section -->
        <section class="aboutSection01">
            <div class="sec">
                
            </div>
            <div class="container largeContainer">
                <div class="row">
                    <div class="col-lg-6 col-md-6">
                        <div class="abThumb move_anim">
                            <img class="abbg" src="{{asset('assets/images/bg/7.png')}}" alt="">
                            <img src="{{asset('assets/images/about-us-center.png')}}" alt="">
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-6">
                        <div class="ab_content_01">
                            <div class="subTitle">About us</div>
                            <h2 class="secTitle">We Believe in Working Accredited Farmers</h2>
                            <p class="secDesc">
                                Apparently we had reached a great height in the atmosphere, for the sky was a dead black, and the stars had ceased to twinkle. By the same illusion which lifts the horizon of the sea to the level.
                            </p>
                            <div class="icon_box_02">
                                <div class="ibImg"><img src="{{asset('assets/images/home1/i1.png')}}" alt=""></div>
                                <h3>Organic Foods and Café</h3>
                                <p>Organic Foods and Café is a family run company<br> that runs organic</p>
                            </div>
                            <div class="icon_box_02">
                                <div class="ibImg"><img src="{{asset('assets/images/home1/i2.png')}}" alt=""></div>
                                <h3>Biodynamic Food</h3>
                                <p>Organic Foods and Café is a family run company<br> that runs organic</p>
                            </div>
                            <a href="{{url('services')}}" class="organ_btn">Know More<i class="twi-arrow-right1"></i></a>
                        </div>
                    </div>
                    <!-- <div class="SecLayerimg move_anim right_tops clearfix">
                        <img src="https://themewar.com/wp/organia/main/wp-content/uploads/2021/11/s1-1.png')}}" alt="Organia">
                    </div> -->
                </div>
            </div>
            <div id="images-about">
                
            </div>
        </section>
        <!-- End:: About Us Section -->
        
        <!-- CTA Start -->
        <section class="ctaSection01">
            <div class="container largeContainer">
                <div class="row">
                    <div class="col-xl-4 col-lg-12">
                        <ul class="nav organTab" id="organTab" role="tablist">
                            <li role="presentation">
                                <a class="" data-toggle="tab" href="#healthy_food" role="tab" aria-selected="false"><img src="{{asset('assets/images/home1/i3.png')}}" alt="">Healthy Food</a>
                            </li>
                            <li role="presentation">
                                <a class="active" data-toggle="tab" href="#fresh_products" role="tab" aria-selected="true"><img src="{{asset('assets/images/home1/i4.png')}}" alt="">Fresh Products</a>
                            </li>
                            <li role="presentation">
                                <a class="" data-toggle="tab" href="#local_growth" role="tab" aria-selected="false"><img src="{{asset('assets/images/home1/i5.png')}}" alt="">Local Growth</a>
                            </li>
                        </ul>
                    </div>
                    <div class="col-xl-8 col-lg-12">
                        <div class="tab-content anim-right">
                            <div class="tab-pane fade" id="healthy_food" role="tabpanel">
                                <div class="organTabContent">
                                    <div class="row">
                                        <div class="col-md-6">
                                            <img src="{{asset('assets/images/what_we_do_image.svg')}}" alt="">
                                        </div>
                                        <div class="col-md-6 clLeft">
                                            <div class="subTitle">Nature Only</div>
                                            <h2 class="secTitle">Econis is a Friendly Organic Store</h2>
                                            <p>
                                                Apparently we had reached a great height in the 
                                                atmosphere, for the sky was a dead black, and the stars had ceased to twinkle.
                                            </p>
                                            <a href="{{url('services')}}" class="organ_btn">Know More<i class="twi-arrow-right1"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="tab-pane fade show active" id="fresh_products" role="tabpanel">
                                <div class="organTabContent">
                                    <div class="row">
                                        <div class="col-md-6">
                                            <img src="{{asset('assets/images/what_we_do_image.svg')}}" alt="">
                                        </div>
                                        <div class="col-md-6 clLeft">
                                            <div class="subTitle">Nature Only</div>
                                            <h2 class="secTitle">Econis is a Friendly Organic Store</h2>
                                            <p>
                                                Apparently we had reached a great height in the 
                                                atmosphere, for the sky was a dead black, and the stars had ceased to twinkle.
                                            </p>
                                            <a href="{{url('services')}}" class="organ_btn">Know More<i class="twi-arrow-right1"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="tab-pane fade" id="local_growth" role="tabpanel">
                                <div class="organTabContent">
                                    <div class="row">
                                        <div class="col-md-6">
                                            <img src="{{asset('assets/images/what_we_do_image.svg')}}" alt="">
                                        </div>
                                        <div class="col-md-6 clLeft">
                                            <div class="subTitle">Nature Only</div>
                                            <h2 class="secTitle">Econis is a Friendly Organic Store</h2>
                                            <p>
                                                Apparently we had reached a great height in the 
                                                atmosphere, for the sky was a dead black, and the stars had ceased to twinkle.
                                            </p>
                                            <a href="{{url('services')}}" class="organ_btn">Know More<i class="twi-arrow-right1"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- CTA End -->

        <!-- Begin:: Product Section -->
        <!-- <section class="proTabSection01">
            <div class="container largeContainer">
                <div class="row">
                    <div class="col-lg-12 text-center">
                        <div class="subTitle sbsm">Our</div>
                        <h2 class="secTitle">Products</h2>
                    </div>
                </div>
            </div>
            <div class="container largeContainer">
                <div class="row">
                    <div class="col-lg-12">
                        <ul class="nav org_pro_tab orgoTab05" role="tablist">
                            @foreach($products as $k => $product)
                            <li role="presentation">
                                <a id="prtab0{{$k + 1}}-tab" data-toggle="tab" href="#prtab0{{$k + 1}}" role="tab" aria-controls="prtab0{{$k + 1}}" aria-selected="false"><span>0{{$k + 1}}.</span>Beverages</a>
                            </li>
                            @endforeach
                        </ul>
                        <div class="tab-content">
                            @foreach($products as $k => $product)
                                <div class="tab-pane fade {{($k === 0) ? 'show active' : ''}}" id="prtab0{{$k + 1}}" role="tabpanel">
                                    <div class="proGalSLiderWrap">
                                        <div class="progallerySLider" id="prtab0{{$k + 1}}-slider">
                                            @foreach($products as $pro)
                                                <div class="productItem09">
                                                    <div class="row">
                                                        <div class="col-lg-5">
                                                            <div class="product_content04">
                                                                <div class="pi01Price">
                                                                    <span class="price">${{$pro->offer_price}}</span>
                                                                </div>
                                                                <h3><a href="single-product.html">{{$pro->name}}</a></h3>
                                                                <p>{{$pro->product_details}}</p>
                                                                <a href="{{url('product_details')}}/{{$pro->id}}" class="organ_btn gradinBtn">Add To Cart<i class="twi-arrow-right1"></i></a>
                                                            </div>
                                                        </div>
                                                        <div class="col-lg-7">
                                                            <div class="proThumb04">
                                                                <img src="{{asset('assets/images/product/')}}/{{$pro->images}}" alt="">
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            @endforeach
                                        </div>
                                        <div class="proGallerySliderThumb" id="prtab0{{$k + 1}}-thumb">
                                        @foreach($products as $pro)
                                            <div class="gsThumbItem">
                                                <img src="{{asset('assets/images/product/')}}/{{$pro->images}}" alt=""/>
                                                <svg xmlns="http://www.w3.org/2000/svg" width="300.000000pt" height="300.000000pt" viewBox="0 0 300.000000 300.000000" preserveAspectRatio="xMidYMid meet">
                                                    <g transform="translate(0.000000,300.000000) scale(0.100000,-0.100000)" stroke="none">
                                                    <path d="M1328 2979 c-14 -14 -32 -19 -75 -19 -35 -1 -66 -6 -77 -15 -11 -8 -27 -15 -35 -15 -28 0 -151 -68 -228 -126 -106 -79 -398 -372 -522 -524 -30 -36 -57 -67 -60 -70 -12 -9 -131 -169 -131 -175 0 -4 -13 -24 -30 -45 -17 -21 -30 -45 -30 -53 0 -8 -7 -20 -15 -27 -8 -7 -15 -18 -15 -25 0 -7 -7 -18 -15 -25 -8 -7 -15 -23 -15 -35 0 -12 -7 -28 -15 -35 -8 -7 -15 -21 -15 -32 0 -11 -5 -29 -12 -41 -20 -37 -31 -116 -31 -227 0 -120 10 -196 29 -225 8 -11 14 -29 14 -41 0 -12 7 -27 15 -34 8 -7 15 -20 15 -30 0 -10 7 -23 15 -30 8 -7 15 -17 15 -23 0 -44 225 -329 419 -531 293 -303 460 -452 566 -501 136 -62 171 -68 410 -68 182 0 322 12 368 31 16 7 45 12 65 12 20 0 46 7 56 15 11 8 34 15 50 15 17 0 40 7 50 15 11 8 30 15 42 15 12 0 36 7 53 15 17 8 45 22 62 30 17 8 39 15 49 15 9 0 23 7 30 15 7 8 20 15 30 15 10 0 23 7 30 15 7 8 18 15 25 15 6 0 31 14 53 30 23 17 44 30 48 30 13 0 123 91 169 141 103 110 185 234 185 279 0 10 7 23 15 30 8 7 15 25 15 39 0 15 7 36 15 47 8 10 15 38 15 60 0 23 7 61 15 84 8 24 15 81 16 129 2 128 12 206 27 203 9 -1 12 43 12 194 0 165 -2 199 -15 208 -12 8 -17 40 -21 131 -3 66 -12 137 -20 158 -8 20 -14 54 -14 75 -1 20 -7 48 -15 62 -8 14 -14 35 -15 47 0 12 -7 34 -15 50 -7 15 -24 48 -35 73 -12 25 -30 59 -41 75 -10 17 -23 39 -28 50 -19 42 -252 265 -277 265 -4 0 -15 7 -24 15 -18 17 -84 54 -150 85 -25 11 -58 28 -73 35 -16 8 -37 15 -47 15 -9 0 -23 7 -30 15 -7 8 -25 15 -39 15 -15 0 -36 7 -47 15 -10 8 -32 15 -49 15 -16 0 -41 7 -55 15 -14 8 -40 14 -58 15 -18 0 -49 7 -69 15 -19 8 -59 15 -88 15 -72 0 -115 10 -115 26 0 11 -30 14 -157 13 -142 -1 -160 -3 -175 -20z"/>
                                                    </g>
                                                </svg>
                                            </div>
                                        @endforeach    
                                           
                                        </div>
                                        <div class="rmBtn">
                                            <img src="{{asset('assets/images/1.png')}}" alt="">
                                            <a href="{{url('products')}}">View More</a>
                                        </div>
                                    </div>
                                </div>
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>
        </section> -->

                <!-- Begin:: Product Section -->
                <!-- <section class="proTabSection01">
            <div class="container largeContainer">
                <div class="row">
                    <div class="col-lg-12 text-center">
                        <div class="subTitle sbsm">Our</div>
                        <h2 class="secTitle">Products</h2>
                    </div>
                </div>
            </div>
            <div class="container largeContainer"> -->
                <!-- <div class="row">
                    <div class="col-lg-12">
                        <ul class="nav org_pro_tab orgoTab05" role="tablist">
                       
                            <li role="presentation">
                                <a id="prtab01-tab" data-toggle="tab" href="#prtab01" role="tab" aria-controls="prtab01" aria-selected="false"><span>01.</span>{{$product->name}}</a>
                            </li>
                        
                            <li role="presentation">
                                <a class="active" id="prtab02-tab" data-toggle="tab" href="#prtab02" role="tab" aria-controls="prtab02" aria-selected="true"><span>02.</span>Superfoods & Greens</a>
                            </li>
                            <li role="presentation">
                                <a id="prtab03-tab" data-toggle="tab" href="#prtab03" role="tab" aria-controls="prtab03" aria-selected="false"><span>03.</span>Vegetables & Spices</a>
                            </li>
                            <li role="presentation">
                                <a id="prtab04-tab" data-toggle="tab" href="#prtab04" role="tab" aria-controls="prtab04" aria-selected="false"><span>04.</span>Fresh Organic</a>
                            </li>
                        </ul>
                        <div class="tab-content">
                            @foreach($products as $k =>  $product)
                            <div class="tab-pane fade" id="prtab0{{$k + 1}}" role="tabpanel">
                                <div class="proGalSLiderWrap">
                                    <div class="progallerySLider" id="prtab0{{$k + 1}}-slider">
                                    @foreach($products as $k => $product)

                                        <div class="productItem09">
                                            <div class="row">
                                                <div class="col-lg-5">
                                                    <div class="product_content04">
                                                        <div class="pi01Price">
                                                            <span class="price">₹{{$product->offer_price}}</span>
                                                        </div>
                                                        <h3><a href="single-product.html">{{$product->name}} <span></span></a></h3>
                                                        <p>{{$product->product_details}} </p>
                                                        <a href="{{url('products')}}" class="organ_btn gradinBtn">Buy Now<i class="twi-arrow-right1"></i></a>
                                                    </div>
                                                </div>
                                                <div class="col-lg-7">
                                                    <div class="proThumb04">
                                                        <img src="assets/images/product/{{explode(',', $product->images)[0]}}" alt="">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                    @endforeach    
                                    </div>
                                    <div class="proGallerySliderThumb" id="prtab0{{$k + 1}}-thumb">
                                         @foreach($products as $k => $product)
                                            <div class="gsThumbItem">
                                                <img src="assets/images/product/{{explode(',', $product->images)[0]}}" alt=""/>
                                                <svg xmlns="http://www.w3.org/2000/svg" width="300.000000pt" height="300.000000pt" viewBox="0 0 300.000000 300.000000" preserveAspectRatio="xMidYMid meet">
                                                    <g transform="translate(0.000000,300.000000) scale(0.100000,-0.100000)" stroke="none">
                                                    <path d="M1328 2979 c-14 -14 -32 -19 -75 -19 -35 -1 -66 -6 -77 -15 -11 -8 -27 -15 -35 -15 -28 0 -151 -68 -228 -126 -106 -79 -398 -372 -522 -524 -30 -36 -57 -67 -60 -70 -12 -9 -131 -169 -131 -175 0 -4 -13 -24 -30 -45 -17 -21 -30 -45 -30 -53 0 -8 -7 -20 -15 -27 -8 -7 -15 -18 -15 -25 0 -7 -7 -18 -15 -25 -8 -7 -15 -23 -15 -35 0 -12 -7 -28 -15 -35 -8 -7 -15 -21 -15 -32 0 -11 -5 -29 -12 -41 -20 -37 -31 -116 -31 -227 0 -120 10 -196 29 -225 8 -11 14 -29 14 -41 0 -12 7 -27 15 -34 8 -7 15 -20 15 -30 0 -10 7 -23 15 -30 8 -7 15 -17 15 -23 0 -44 225 -329 419 -531 293 -303 460 -452 566 -501 136 -62 171 -68 410 -68 182 0 322 12 368 31 16 7 45 12 65 12 20 0 46 7 56 15 11 8 34 15 50 15 17 0 40 7 50 15 11 8 30 15 42 15 12 0 36 7 53 15 17 8 45 22 62 30 17 8 39 15 49 15 9 0 23 7 30 15 7 8 20 15 30 15 10 0 23 7 30 15 7 8 18 15 25 15 6 0 31 14 53 30 23 17 44 30 48 30 13 0 123 91 169 141 103 110 185 234 185 279 0 10 7 23 15 30 8 7 15 25 15 39 0 15 7 36 15 47 8 10 15 38 15 60 0 23 7 61 15 84 8 24 15 81 16 129 2 128 12 206 27 203 9 -1 12 43 12 194 0 165 -2 199 -15 208 -12 8 -17 40 -21 131 -3 66 -12 137 -20 158 -8 20 -14 54 -14 75 -1 20 -7 48 -15 62 -8 14 -14 35 -15 47 0 12 -7 34 -15 50 -7 15 -24 48 -35 73 -12 25 -30 59 -41 75 -10 17 -23 39 -28 50 -19 42 -252 265 -277 265 -4 0 -15 7 -24 15 -18 17 -84 54 -150 85 -25 11 -58 28 -73 35 -16 8 -37 15 -47 15 -9 0 -23 7 -30 15 -7 8 -25 15 -39 15 -15 0 -36 7 -47 15 -10 8 -32 15 -49 15 -16 0 -41 7 -55 15 -14 8 -40 14 -58 15 -18 0 -49 7 -69 15 -19 8 -59 15 -88 15 -72 0 -115 10 -115 26 0 11 -30 14 -157 13 -142 -1 -160 -3 -175 -20z"/>
                                                    </g>
                                                </svg>
                                            </div>
                                        @endforeach
                                        
                                    </div>
                                    <div class="rmBtn">
                                        <img src="assets/images/1.png" alt="">
                                        <a href="{{url('products')}}">View More</a>
                                    </div>
                                </div>
                            </div>

                            @endforeach
                        </div>
                    </div>
                </div> -->
            <!-- </div>
        </section> -->
        <!-- End:: Product Section -->

        <!--Gallery Section Starts -->
        <section class="categpruSection03" id="categoryGallery">
            <div class="container largeContainer">
                <div class="row">
                    <div class="col-lg-12 text-center">
                        <div class="subTitle sbsm">Our</div>
                        <h2 class="secTitle">Gallery</h2>
                    </div>
                </div>
                <div class="row">
                    <div class="col-xl-12">
                        <ul class="filter_menu02 shaff_filter text-center clearfix">
                            <li class="active" data-group="all">All</li>
                            <li data-group="beverages" class="">Photos</li>
                            <li data-group="butter_egg">Animation</li>
                        </ul>
                    </div>
                </div>
                <div class="row shaff_grid">
                    <div class="col-xl-4 col-lg-4 col-md-6 shaff_item" data-groups='["all", "butter_egg", "food"]'>
                        <div class="productItem07">
                            <div class="proThumb07">
                                <img src="{{asset('assets/images/product/26.png')}}" alt="">
                            </div>
                            <div class="gallery-item-caption-wrap caption-style-hoverer eael-slide-up">
                                <div class="gallery-item-hoverer-bg"></div>
                                <div class="gallery-item-caption-over">
                                   <h5 class="fg-item-title">Nature Only</h5>
                                   <div class="fg-item-content">
                                      <p>Title of the Image</p>
                                   </div>
                                   <div class="gallery-item-buttons"><a href="https://www.agrinia.com/new-blogs/wp-content/uploads/2022/11/Rectangle-19.png" class="eael-magnific-link active" data-elementor-open-lightbox="no"><span class="fg-item-icon-inner"><img decoding="async" src="https://www.agrinia.com/new-blogs/wp-content/uploads/2022/11/zoom.svg" alt=""></span>
                                      </a>
                                   </div>
                                </div>
                             </div>
                        </div>
                    </div>
                    <div class="col-xl-4 col-lg-4 col-md-6 shaff_item" data-groups='["all", "beverages", "dried"]'>
                        <div class="productItem07">
                            <div class="proThumb07">
                                <img src="{{asset('assets/images/product/27.png')}}" alt="">
                            </div>
                            <div class="gallery-item-caption-wrap caption-style-hoverer eael-slide-up">
                                <div class="gallery-item-hoverer-bg"></div>
                                <div class="gallery-item-caption-over">
                                   <h5 class="fg-item-title">Nature Only</h5>
                                   <div class="fg-item-content">
                                      <p>Title of the Image</p>
                                   </div>
                                   <div class="gallery-item-buttons"><a href="https://www.agrinia.com/new-blogs/wp-content/uploads/2022/11/Rectangle-19.png" class="eael-magnific-link active" data-elementor-open-lightbox="no"><span class="fg-item-icon-inner"><img decoding="async" src="https://www.agrinia.com/new-blogs/wp-content/uploads/2022/11/zoom.svg" alt=""></span>
                                      </a>
                                   </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-4 col-lg-4 col-md-6 shaff_item" data-groups='["all", "butter_egg", "food"]'>
                        <div class="productItem07">
                            <div class="proThumb07">
                                <img src="{{asset('assets/images/product/27.png')}}" alt="">
                            </div>
                            <div class="gallery-item-caption-wrap caption-style-hoverer eael-slide-up">
                                <div class="gallery-item-hoverer-bg"></div>
                                <div class="gallery-item-caption-over">
                                   <h5 class="fg-item-title">Nature Only</h5>
                                   <div class="fg-item-content">
                                      <p>Title of the Image</p>
                                   </div>
                                   <div class="gallery-item-buttons"><a href="https://www.agrinia.com/new-blogs/wp-content/uploads/2022/11/Rectangle-19.png" class="eael-magnific-link active" data-elementor-open-lightbox="no"><span class="fg-item-icon-inner"><img decoding="async" src="https://www.agrinia.com/new-blogs/wp-content/uploads/2022/11/zoom.svg" alt=""></span>
                                      </a>
                                   </div>
                                </div>
                             </div>
                        </div>
                    </div>
                    <div class="col-xl-4 col-lg-4 col-md-6 shaff_item" data-groups='["all", "beverages", "dried"]'>
                        <div class="productItem07">
                            <div class="proThumb07">
                                <img src="{{asset('assets/images/product/29.png')}}" alt="">
                            </div>
                            <div class="gallery-item-caption-wrap caption-style-hoverer eael-slide-up">
                                <div class="gallery-item-hoverer-bg"></div>
                                <div class="gallery-item-caption-over">
                                   <h5 class="fg-item-title">Nature Only</h5>
                                   <div class="fg-item-content">
                                      <p>Title of the Image</p>
                                   </div>
                                   <div class="gallery-item-buttons"><a href="https://www.agrinia.com/new-blogs/wp-content/uploads/2022/11/Rectangle-19.png" class="eael-magnific-link active" data-elementor-open-lightbox="no"><span class="fg-item-icon-inner"><img decoding="async" src="https://www.agrinia.com/new-blogs/wp-content/uploads/2022/11/zoom.svg" alt=""></span>
                                      </a>
                                   </div>
                                </div>
                             </div>
                        </div>
                    </div>
                    <div class="col-xl-4 col-lg-4 col-md-6 shaff_item" data-groups='["all", "butter_egg", "food"]'>
                        <div class="productItem07">
                            <div class="proThumb07">
                                <img src="{{asset('assets/images/product/30.png')}}" alt="">
                            </div>
                            <div class="gallery-item-caption-wrap caption-style-hoverer eael-slide-up">
                                <div class="gallery-item-hoverer-bg"></div>
                                <div class="gallery-item-caption-over">
                                   <h5 class="fg-item-title">Nature Only</h5>
                                   <div class="fg-item-content">
                                      <p>Title of the Image</p>
                                   </div>
                                   <div class="gallery-item-buttons"><a href="https://www.agrinia.com/new-blogs/wp-content/uploads/2022/11/Rectangle-19.png" class="eael-magnific-link active" data-elementor-open-lightbox="no"><span class="fg-item-icon-inner"><img decoding="async" src="https://www.agrinia.com/new-blogs/wp-content/uploads/2022/11/zoom.svg" alt=""></span>
                                      </a>
                                   </div>
                                </div>
                             </div>
                        </div>
                    </div>
                    <div class="col-xl-4 col-lg-4 col-md-6 shaff_item" data-groups='["all", "beverages", "dried"]'>
                        <div class="productItem07">
                            <div class="proThumb07">
                                <img src="{{asset('assets/images/product/31.png')}}" alt="">
                            </div>
                            <div class="gallery-item-caption-wrap caption-style-hoverer eael-slide-up">
                                <div class="gallery-item-hoverer-bg"></div>
                                <div class="gallery-item-caption-over">
                                   <h5 class="fg-item-title">Nature Only</h5>
                                   <div class="fg-item-content">
                                      <p>Title of the Image</p>
                                   </div>
                                   <div class="gallery-item-buttons"><a href="https://www.agrinia.com/new-blogs/wp-content/uploads/2022/11/Rectangle-19.png" class="eael-magnific-link active" data-elementor-open-lightbox="no"><span class="fg-item-icon-inner"><img decoding="async" src="https://www.agrinia.com/new-blogs/wp-content/uploads/2022/11/zoom.svg" alt=""></span>
                                      </a>
                                   </div>
                                </div>
                             </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- Gallery Section Ends -->
        <!-- Blog Start -->
        <section class="blogSectiont03 pt-0">
            <div class="container largeContainer">
                <div class="row">
                    <div class="col-xl-6">
                        <div class="bl_ctconten">
                            <img src="{{asset('assets/images/bg/angle.png')}}" alt="">
                            <div class="subTitle sbsm">OUR BLOGS & ARTICLES</div>
                            <h2 class="secTitle">Read Inspirational From our update Blog Every Week</h2>
                            <p>
                                Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. it enim ad minim veniam, quis nostrud exercitation ullamco boris nisi ut aliquip ex ea commodo consequat.
                            </p>
                            <a href="https://www.agrinia.com/new-blogs/" class="organ_btn ob02">View All<i class="twi-arrow-right1"></i></a>
                        </div>
                    </div>
                    <div class="col-xl-6">
                        <div class="leaf6pos">
                            <img src="{{asset('assets/Leaf-3.svg')}}" alt="">
                        </div>
                        <div class="row grid">
                            <div class="col-lg-6 col-md-6 grid-item">
                                <div class="blogItem02">
                                    <div class="blogThumb">
                                        <img src="{{asset('assets/images/blog/4.jpg')}}" alt="">
                                    </div>
                                    <div class="blogContent">
                                        <div class="bmeta"><i class="twi-clock2"></i>20 Febuary 2021</div>
                                        <h3><a href="single-blog.html">Strategy for Norway’s Peion Fund Global.</a></h3>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6 col-md-6 grid-item shaff_empty_item d-none d-md-block"></div>
                            <div class="col-lg-6 col-md-6 grid-item">
                                <div class="blogItem02">
                                    <div class="blogThumb">
                                        <img src="{{asset('assets/images/blog/5.jpg')}}" alt="">
                                    </div>
                                    <div class="blogContent">
                                        <div class="bmeta"><i class="twi-clock2"></i>20 Febuary 2021</div>
                                        <h3><a href="single-blog.html">Zechsal Magnesium flakes especially made.</a></h3>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6 col-md-6 grid-item">
                                <div class="blogItem02">
                                    <div class="blogThumb">
                                        <img src="{{asset('assets/images/blog/6.jpg')}}" alt="">
                                    </div>
                                    <div class="blogContent">
                                        <div class="bmeta"><i class="twi-clock2"></i>20 Febuary 2021</div>
                                        <h3><a href="single-blog.html">Best guide to shopping for organic products.</a></h3>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6 col-md-6 grid-item">
                                <div class="blogItem02">
                                    <div class="blogThumb">
                                        <img src="{{asset('assets/images/blog/7.jpg')}}" alt="">
                                    </div>
                                    <div class="blogContent">
                                        <div class="bmeta"><i class="twi-clock2"></i>20 Febuary 2021</div>
                                        <h3><a href="single-blog.html">Our 6 of the Best Organic Grapes to Buy.</a></h3>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- Blog End -->
        
        <!-- Testimonial Start -->
        <section class="testimonialSec02">
            <div class="container largeContainer">
                <div class="row">
                    <div class="col-xl-6">
                        <div class="subTitle sbsm">Nature Only</div>
                        <h2 class="secTitle">Whats our Clients says.</h2>
                        <div class="testimonial02 owl-carousel">
                            <div class="testmonialItem">
                                <div class="quote">
                                    ‘‘ Suspendisse faucibus sed dolor eget posuere sed id interdum urna. Nam ac elit a ante commodo tristique. consectetur adipiscing ‘‘ 
                                </div>
                                <p>
                                    Eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur.
                                </p>
                                <div class="tsauthor"><span>Wow lIon</span><i>/</i>CEO Organia</div>
                            </div>
                            <div class="testmonialItem">
                                <div class="quote">
                                    ‘‘ Suspendisse faucibus sed dolor eget posuere sed id interdum urna. Nam ac elit a ante commodo tristique. consectetur adipiscing ‘‘ 
                                </div>
                                <p>
                                    Eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur.
                                </p>
                                <div class="tsauthor"><span>Mira Peterson</span><i>/</i>Director Organia</div>
                            </div>
                            <div class="testmonialItem">
                                <div class="quote">
                                    ‘‘ Suspendisse faucibus sed dolor eget posuere sed id interdum urna. Nam ac elit a ante commodo tristique. consectetur adipiscing ‘‘ 
                                </div>
                                <p>
                                    Eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur.
                                </p>
                                <div class="tsauthor"><span>lIon Wow</span><i>/</i>CTO Organia</div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-6 pdLeft">
                        <h2 class="insTitle">@instagram</h2>
                        
                        @if(!empty($instagram))
                        <div class="instagram clearfix">
                            @foreach($instagram as $img)
                                <a target="_blank" href="{{$img['permalink']}}"><img src="{{$img['media_url']}}" alt=""></a>
                            @endforeach    
                        </div>
                        @endif
                    </div>
                </div>
            </div>
        </section>
        <!-- Testimonial End -->

        <section class="mailSection noBG">
            <div class="container largeContainer">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="mailSectionInner" id="mailSectionInner">
                            <!-- Mailchimp Start -->
                            <!-- @if(session()->has('error')) -->
                            <!-- <div id="messageErrorMsg" style="display: none" class="alert alert-danger" style="width: 50%;margin-left: 49%; padding-top: 23px;text-align: center;">
                                You are already subscribed with agrinia.
                            </div> -->
                            <!-- @endif -->

                            <!-- @if(session()->has('message'))
                                <div class="alert alert-success" style="width: 50%;margin-left: 49%;">
                                    {{ session()->get('message') }}
                                </div>
                            @endif -->

                            <div class="alert alert-success" id="successMsg" style="display: none;">
                                Thank you for subscribing. Check your email for the confirmation message.
                            </div>

                            <div class="alert alert-danger" id="messageErrorMsg"  style="width: 50%;margin-left: 49%; display: none; text-align: center;">
                                You are already subscribed with agrinia.
                            </div>

                            <div class="row">
                                <div class="col-lg-6">
                                    <div class="icon_box_01">
                                        <div class="ibImg"><img src="{{asset('assets/images/home3/mail.png')}}" alt=""></div>
                                        <h3>Subscribe</h3>
                                        <p>To get latest information & updates.</p>
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="SubsrcribeForm">
                                        <form id="subscribe">
                                            @csrf
                                            <input type="hidden" name="type" id="type" value="agricultural">
                                            <input type="email" name="email" id="email" placeholder="Your email address" required>
                                            <button type="submit"> <span id="subscribe-button">Subscribe </span> <img id="loader-icon" src="{{asset('assets/Spinner-1s-200px.gif')}}" style="font-size:44px; height: 50px; width: 50px;display: none"></img></button>
                                            <!-- <button id="loader-icon" ><i class="fa fa-spinner" aria-hidden="true"></i></button> -->
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
            </div>
        </section>

@endsection
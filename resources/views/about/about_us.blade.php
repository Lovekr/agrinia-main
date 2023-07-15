<!-- Contact Info Start -->

@extends('layouts.master')

@section('content')

@include('partials.breadcrumb', ['details'=> 'About Us', 'url' => 'About Us'])
<section class="aboutSection02">
         <div class="container largeContainer">
            <div class="row">
               <div class="col-md-7">
                  <div class="abThumb02 text-center">
                     <img src="{{asset('assets/images/about/1.png')}}" alt="">
                  </div>
               </div>
               <div class="col-md-5">
                  <div class="subTitle sbsm">Only Organic</div>
                  <h2 class="secTitle">The Best Choice For your Business.</h2>
                  <p>
                     Sumptuous, filling, and temptingly healthy, our Biona Organic 
                     Granola with Wild Berries is just the thing to get you out of bed.
                  </p>
                  <ul class="listItem withbg">
                     <li><span><i class="twi-check-circle"></i>100% Natural</span></li>
                     <li><span><i class="twi-check-circle"></i>Increases resistance</span></li>
                     <li><span><i class="twi-check-circle"></i>No growth hormones are used</span></li>
                  </ul>
                  <a href="{{url('products')}}" class="organ_btn ob02">Shop Now</a>
               </div>
            </div>
         </div>
      </section>
      <!-- About End -->
      <!-- Mission, Vision Section Starts -->
      <section class="ctaSection02 mb-2" id="ctaSection2">
         <div class="container">
            <div class="row">
               <div class="col-lg-12 text-center">
                  <div class="row fixed_services">
                     <div class="col-lg-4 col-md-6">
                        <div class="cateItem02 text-center">
                           <a href="#"><img src="assets/images/vision.png" alt="Vision"></a>
                           <div class="cate_content">
                              <a class="cate text-white" id="vision" href="#">VISION</a>
                              <div class="card">
                                 <div class="slide slide2">
                                    <div class="content">
                                       <h3> VISION </h3>
                                       <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem
                                          Ipsum has been the industry's standard dummy text</p>
                                    </div>
                                 </div>
                              </div>
                           </div>
                        </div>
                     </div>
                     <div class="col-lg-4 col-md-6">
                        <div class="cateItem02 text-center">
                           <a href="#"><img src="assets/images/mission.png" alt="Mission"></a>
                           <div class="cate_content">
                              <a class="cate text-white" href="#">MISSION</a>
                              <div class="card">
                                 <div class="slide slide2">
                                    <div class="content">
                                       <h3> MISSION </h3>
                                       <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem
                                          Ipsum has been the industry's standard dummy text</p>
                                    </div>
                                 </div>
                              </div>
                           </div>
                        </div>
                     </div>
                     <div class="col-lg-4 col-md-6">
                        <div class="cateItem02 text-center">
                           <a href="#"><img src="assets/images/core-values.png" alt="Core Values"></a>
                           <div class="cate_content">
                              <a class="cate text-white" href="#">CORE VALUES</a>
                              <div class="card">
                                 <div class="slide slide2">
                                    <div class="content">
                                       <h3> CORE VALUES </h3>
                                       <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem
                                          Ipsum has been the industry's standard dummy text</p>
                                    </div>
                                 </div>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </section>
      <!-- Mission, Vision Section Ends -->
         <!-- About Agrinia Starts -->
   <section class="ctaSection02 mt-5 mb-3" id="ctaSection3">
      <div class="container">
         <div class="row">
            <div class="col-lg-12">
               <div class="col-md-12">
                  <div class="contact_form" id="contact_forms">
                     <div class="row">
                        <div class="col-lg-6">
                           <div class="subTitle">Startup </div>
                           <h2 class="secTitle" id="secTitle"> Revolutionizing Agriculture</h2>
                           <p>
                              Most of our farmers still follow traditional farming methods utilising outdated processes,
                              products and equipments, which often lead to disappointment and eventually lead to giving
                              up agriculture. <br> <br>
                              The potential for green, organic, natural farming is huge. We need modern, scientific and
                              smart farming technologies to use existing resources without causing environmental impact.
                              With a range of quality products and services, we can help farmers expand their organic
                              produce by establishing reliable processes and removing obstacles.
                           </p>
                        </div>
                        <div class="col-lg-6">
                           <p>
                              We have been recognised as Startup by Department for Promotion of Industry and Internal
                              Trade, Ministry of Commerce and Industry, Government of India.
                              <br> <br>
                              We intend to energize natural and organic farming by introducing our farmers to better
                              agricultural practices, including natural high quality input products, state of art IOT
                              (Internet of Things) devices likes bio-sensors, drones and predictative agricultural
                              analytics tools.
                              <br> <br>
                              Our main focus are our farmers especially the small and medium farmers. Our products and
                              services can be easily adapted to customer needs and used in various agricultural
                              scenarios, such as poly-house and green-house cultivations, vertical farming, hydroponics,
                              etc.
                           </p>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>
   </section>
   <!-- About Agrinia Ends -->
   <!-- Team Start -->
   <section class="teamSection02 mt-5">
      <div class="SecLayerimg move_anim">
         <img src="assets/images/bg/s4.png" alt="">
      </div>
      <div class="container largeContainer pt-5">
         <div class="row">
            <div class="col-lg-12 text-center">
               <div class="subTitle sbsm">organic Fresh Vegetables</div>
               <h2 class="secTitle">We Are Brilliant Farmers</h2>
            </div>
         </div>
         <div class="row">
            <div class="col-lg-3 col-md-6">
               <div class="teamItem02">
                  <div class="tmThumb02">
                     <img src="assets/images/team/1.jpg" alt="">
                     <div class="tm_socail02">
                        <a href="javascript:void(0);"><i class="twi-instagram"></i></a>
                        <a href="javascript:void(0);"><i class="twi-facebook-f"></i></a>
                        <a href="javascript:void(0);"><i class="twi-linkedin-in"></i></a>
                     </div>
                  </div>
                  <div class="tmContent">
                     <h5><a href="javascript:void(0);">Kevin Sullivan</a></h5>
                     <p>Farmar</p>
                  </div>
               </div>
            </div>
            <div class="col-lg-3 col-md-6">
               <div class="teamItem02">
                  <div class="tmThumb02">
                     <img src="assets/images/team/2.jpg" alt="">
                     <div class="tm_socail02">
                        <a href="javascript:void(0);"><i class="twi-instagram"></i></a>
                        <a href="javascript:void(0);"><i class="twi-facebook-f"></i></a>
                        <a href="javascript:void(0);"><i class="twi-linkedin-in"></i></a>
                     </div>
                  </div>
                  <div class="tmContent">
                     <h5><a href="javascript:void(0);">Nora Bell</a></h5>
                     <p>Sales Executive</p>
                  </div>
               </div>
            </div>
            <div class="col-lg-3 col-md-6">
               <div class="teamItem02">
                  <div class="tmThumb02">
                     <img src="assets/images/team/3.jpg" alt="">
                     <div class="tm_socail02">
                        <a href="javascript:void(0);"><i class="twi-instagram"></i></a>
                        <a href="javascript:void(0);"><i class="twi-facebook-f"></i></a>
                        <a href="javascript:void(0);"><i class="twi-linkedin-in"></i></a>
                     </div>
                  </div>
                  <div class="tmContent">
                     <h5><a href="javascript:void(0);">Berniy Smith</a></h5>
                     <p>Shop Keeper</p>
                  </div>
               </div>
            </div>
            <div class="col-lg-3 col-md-6">
               <div class="teamItem02">
                  <div class="tmThumb02">
                     <img src="assets/images/team/4.jpg" alt="">
                     <div class="tm_socail02">
                        <a href="javascript:void(0);"><i class="twi-instagram"></i></a>
                        <a href="javascript:void(0);"><i class="twi-facebook-f"></i></a>
                        <a href="javascript:void(0);"><i class="twi-linkedin-in"></i></a>
                     </div>
                  </div>
                  <div class="tmContent">
                     <h5><a href="javascript:void(0);">Eiliyah Gould</a></h5>
                     <p>Worker</p>
                  </div>
               </div>
            </div>
         </div>
      </div>
      <div class="SecLayerimg2 move_anim">
         <img src="assets/images/bg/s5.png" alt="">
      </div>
   </section>
   <!-- Team End -->
      <!-- Mailchimp Start -->
      <section class="mailSection noBG">
         <div class="container largeContainer">
            <div class="row">
               <div class="col-lg-12">
                  <div class="mailSectionInner">
                     <div class="row">
                        <div class="col-lg-6">
                           <div class="icon_box_01">
                              <div class="ibImg"><img src="assets/images/home3/mail.png" alt=""></div>
                              <h3>Subscribe</h3>
                              <p>To get latest information & updates.</p>
                           </div>
                        </div>
                        <div class="col-lg-6">
                           <div class="SubsrcribeForm">
                              <form action="#" method="post">
                                 <input type="email" name="EMAIL" placeholder="Your Phone Number">
                                 <button type="submit">Subsrcribe</button>
                              </form>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </section>
      <!-- Mailchimp End -->
      <!-- Footer Section -->
@endsection
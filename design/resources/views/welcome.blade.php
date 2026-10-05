@extends('layouts.guest.master')
@section('page_level_style')
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@tabler/icons-webfont@latest/dist/tabler-icons.min.css" />
<style>
    .pbb-30{
        margin-bottom:30px !important;
    }
    .service-card__content {
    padding-left: 20px;
    padding-right: 20px;
    padding-top: 40px;
    padding-bottom: 35px;
    height: 250px !important;
}





@media (max-width: 768px) {
  .mobile-d-none{
      display: none;
  }
  .main-slider-two__title{
      font-size: 30px;
  }
  .main-slider-two__wrap{
          padding-top: 160px;
    padding-bottom: 110px;
  }
}

@media (min-width: 768px) {
  .lg-d-none{
      display: none;
  }
}

</style>
@endsection
@section('content')








 <section class="main-slider-two lg-d-none ">
            <div class="main-slider-two__carousel altermed-owl__carousel owl-carousel" data-owl-options='{
		"loop": true,
		"animateOut": "fadeOut",
		"animateIn": "fadeIn",
		"items": 1,
		"autoplay": true,
		"autoplayTimeout": 7000,
		"smartSpeed": 1000,
		"nav": true,
        "navText": ["<span class=\"icon-left-arrow\"></span>","<span class=\"icon-right-arrow\"></span>"],
		"dots": false,
		"margin": 0
	    }'>
                <div class="item">
                    <div class="main-slider-two__item">
                        <div class="main-slider-one__bg" style="background-image: url('{{ asset('guest/assets/images/backgrounds/slider-1-5.jpg') }}');"></div>
                        <div class="container">
                            <div class="row">
                                <div class="col-xl-7">
                                    <div class="main-slider-two__wrap">
                                        <div class="main-slider-two__content">
                                            <!-- slider-sub-title -->
                                            <h2 class="main-slider-two__title">Billing Services
                              with the Aim to<br> Maximize 
                              Your Revenue</h2><!-- slider-title -->
                                            <p class="main-slider-two__info">
                                                 Altermed RCM assists healthcare providers reduce denials and stay compliant with our HIPAA-compliant billing, coding, & credentialing solutions.
                                            </p>
                                            <div class="main-slider-two__btn">
                                                <a href="services.html" class="altermed-btn altermed-btn--base"><span>Let’s Get
                                                        Started</span> <em></em></a><!-- slider-btn -->
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="item">
                    <div class="main-slider-two__item">
                        <div class="main-slider-one__bg" style="background-image: url('{{ asset('guest/assets/images/backgrounds/slider-7.jpg') }}');"></div>
                        <div class="container">
                            <div class="row">
                                <div class="col-xl-7">
                                    <div class="main-slider-two__wrap">
                                        <div class="main-slider-two__content">
                                            <!-- slider-sub-title -->
                                            <h2 class="main-slider-two__title">Smarter Medical Billing<br>
                              & coding for Stronger<br>
                              Revenue Growth</h2><!-- slider-title -->
                                            <p class="main-slider-two__info">
                                               Our team is ready to take the complexity out of your revenue cycle. From claims to credentialing, you can rely on our team of professionals.
                                            </p>
                                            <div class="main-slider-two__btn">
                                                <a href="services.html" class="altermed-btn altermed-btn--base"><span>Let’s Get
                                                        Started</span> <em></em></a><!-- slider-btn -->
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







<section class="main-slider-one mobile-d-none">
   <div class="main-slider-one__carousel altermed-owl__carousel owl-carousel" data-owl-options='{
      "loop": true,
      "animateOut": "fadeOut",
      "animateIn": "fadeIn",
      "items": 1,
      "autoplay": true,
      "autoplayTimeout": 7000,
      "smartSpeed": 1000,
      "nav": true,
      "navText": ["<span class=\"icon-left-arrow\"></span>","<span class=\"icon-right-arrow\"></span>"],
      "dots": false,
      "margin": 0
      }'>
      <div class="item">
         <div class="main-slider-one__item">
            <div class="main-slider-one__bg" style="background-image: url('{{ asset('guest/assets/images/backgrounds/slider-5-1.jpg') }}');"></div>
            <div class="main-slider-one__shape">
               <img src="{{ asset('guest/assets/images/shapes/main-slder-shape-1.png') }}" alt="shape">
            </div>
            <div class="container">
               <div class="row">
                  <div class="col-xl-7">
                     <div class="main-slider-one__wrap">
                        <div class="main-slider-one__content">
                           <div class="shape-1">
                              <img src="{{ asset('guest/assets/images/shapes/arrow-shape.png') }}" alt="">
                           </div>
                           <!-- slider-sub-title -->
                           <h1 class="main-slider-one__title">Billing Services
                              with the<br> Aim to Maximize <br>
                              Your Revenue
                           </h1>
                           <!-- slider-title -->
                           <p class="main-slider-one__info">
                              Altermed RCM assists healthcare providers reduce denials and stay compliant with our HIPAA-compliant billing, coding, & credentialing solutions.
                           </p>
                           <div class="main-slider-one__btn">
                              <a href="#" class="altermed-btn altermed-btn--base"><span>Schedule a Consultation! </span> <em></em></a><!-- slider-btn -->
                           </div>
                        </div>
                        <div class="main-slider-one__social">
                           <span><i class="fas fa-notes-medical"></i></span> <!-- Medical records / billing -->
                           <span><i class="fas fa-user-shield"></i></span> <!-- HIPAA compliance / secure data -->
                           <span><i class="fas fa-stethoscope"></i></span> <!-- Healthcare provider / practice -->
                        </div>

                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>
      <div class="item">
         <div class="main-slider-one__item">
            <div class="main-slider-one__bg" style="background-image: url('{{ asset('guest/assets/images/backgrounds/slider-5-2.jpg') }}');"></div>
            <div class="main-slider-one__shape">
               <img src="{{ asset('guest/assets/images/shapes/main-slder-shape-1.png') }}" alt="shape">
            </div>
            <div class="container">
               <div class="row">
                  <div class="col-xl-7">
                     <div class="main-slider-one__wrap">
                        <div class="main-slider-one__content">
                           <div class="shape-1">
                              <img src="{{ asset('guest/assets/images/shapes/arrow-shape.png') }}" alt="">
                           </div>
                           <!-- slider-sub-title -->
                           <h2 class="main-slider-one__title">Smarter Medical Billing<br>
                              & Coding for Stronger<br>
                              Revenue Growth
                           </h2>
                           <!-- slider-title -->
                           <p class="main-slider-one__info">
                              Our team is ready to take the complexity out of your revenue cycle. From claims to credentialing, you can rely on our team of professionals.
                           </p>
                           <div class="main-slider-one__btn">
                              <a href="#" class="altermed-btn altermed-btn--base"><span>Let’s Talk! </span> <em></em></a><!-- slider-btn -->
                           </div>
                        </div>
                        <div class="main-slider-one__social">
                           <span><i class="fas fa-file-invoice-dollar"></i></span> <!-- For billing -->
                           <span><i class="fas fa-user-md"></i></span> <!-- For healthcare professionals -->
                           <span><i class="fas fa-chart-line"></i></span> <!-- For revenue growth -->
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>
   </div>
</section>









<!-- main-slider-end -->
<section class="about-one-home">
   <div class="about-one-home__shape">
      <img src="{{ asset('guest/assets/images/shapes/about-shape-1-3.png') }}" alt="">
   </div>
   <!-- Feature Start -->
   <section class="feature-one pb-remove">
      <div class="container-fluid ">
         <div class="row gutter-y-30">
            <div class="sec-title text-center">
               <h3 class="sec-title__title">Our Services</h3>
               <!-- /.sec-title__tagline -->
               <p class="feature-one__item__text">Comprehensive Billing & Coding Solutions
               </p>
               <!-- /.sec-title__title -->
            </div>
<!-- Medical Billing Services -->
<div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="100ms">
   <div class="feature-one__item">
      <!-- Icon for desktop -->
      <div class="feature-one__item__icon d-none d-md-block">
         <span><i class="ti ti-file-dollar"></i></span> <!-- More relevant for billing -->
      </div>
      <!-- Image for mobile -->
      <div class="feature-one__item__icon d-block d-md-none">
         <img src="{{ asset('guest/assets/images/service/icon-1.png') }}" alt="Invoice Icon">
      </div>

      <div class="feature-one__item__content hgt-400px">
         <h3 class="feature-one__item__title">Medical Billing Services</h3>
         <p class="feature-one__item__text">
            Clean claim submission, diligent follow-ups, and strategic AR recovery that ensures faster payouts.
         </p>
      </div>
   </div>
</div>

<!-- Denial Management Services -->
<div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="100ms">
   <div class="feature-one__item">
      <!-- Icon for desktop -->
      <div class="feature-one__item__icon d-none d-md-block">
         <span><i class="ti ti-ban"></i></span> <!-- Represents denial/rejection -->
      </div>
      <!-- Image for mobile -->
      <div class="feature-one__item__icon d-block d-md-none">
         <img src="{{ asset('guest/assets/images/service/icon-2.png') }}" alt="Denial Icon">
      </div>

      <div class="feature-one__item__content hgt-400px">
         <h3 class="feature-one__item__title">Denial Management Services</h3>
         <p class="feature-one__item__text">
            We identify root causes, handle rejections, and prevent future denials for better financial posture.
         </p>
      </div>
   </div>
</div>

<!-- Provider Credentialing Services -->
<div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="100ms">
   <div class="feature-one__item">
      <!-- Icon for desktop -->
      <div class="feature-one__item__icon d-none d-md-block">
         <span><i class="ti ti-id-badge"></i></span> <!-- Credentialing, ID badge is suitable -->
      </div>
      <!-- Image for mobile -->
      <div class="feature-one__item__icon d-block d-md-none">
         <img src="{{ asset('guest/assets/images/service/icon-3.png') }}" alt="Credentialing Icon">
      </div>

      <div class="feature-one__item__content hgt-400px">
         <h3 class="feature-one__item__title">Provider Credentialing Services</h3>
         <p class="feature-one__item__text">
            Speed up onboarding and avoid revenue delays with our professional credential services.
         </p>
      </div>
   </div>
</div>

         </div>
      </div>
   </section>
   <!-- Feature End -->
   <div class="container p-40">
      <div class="row">
         <div class="col-lg-6">
            <div class="about-one-home__image wow fadeInLeft mob-hide" data-wow-delay="300ms">
               <div class="about-one-home__double-image">
                  <div class="img-1">
                     <img src="{{ asset('guest/assets/images/resources/about-1-1.png') }}" alt="altermed">
                  </div>
                  <div class="img-2">
                     <img src="{{ asset('guest/assets/images/resources/about-1-2.png') }}" alt="altermed">
                  </div>
                  <div class="about-one-home__image__arrow"><img src="{{ asset('guest/assets/images/shapes/about-shape-1-2.png') }}" alt="altermed">
                  </div>
                  <div class="about-one-home__image__counter count-box">
                     <h3 class="about-one-home__image__count count-text" data-stop="7" data-speed="1500"></h3>
                     <p class="about-one-home__image__text">Years <br>
                        of experience
                     </p>
                  </div>
               </div>
            </div>
            <!-- /.why-choose-two__image -->
         </div>
         <!-- /.col-lg-6 -->
         <div class="col-lg-6 wow fadeInRight" data-wow-delay="300ms">
            <div class="about-one-home__content pad-top-20">
               <div class="sec-title">
                  <h6 class="sec-title__tagline">Results That Speak!</h6>
                  <!-- /.sec-title__tagline -->
                  <h3 class="sec-title__title">
                     Client Success Metrics:
                  </h3>
                  <!-- /.sec-title__title -->
               </div>
               <!-- /.sec-title -->
               <p class="about-one-home__content__text-two">
                  We are a specialized service provider that helps healthcare providers manage their revenue cycle by handling the billing and coding processes.
               </p>
               <div class="about-one-home__content__wrapper">
                  <div>
                     <ul class="about-one-home__content__list">
                        <li><span class="fas fa-check-circle"></span>Our Clean Claim Rate - 98%
                        </li>
                        <li><span class="fas fa-check-circle"></span>Average Revenue Rise - 25%
                        </li>
                        <li><span class="fas fa-check-circle"></span>Fast Reimbursements - 30%
                        </li>
                        <li><span class="fas fa-check-circle"></span>Client Retention Rate - 97% </li>
                     </ul>
                     <a href="#" class="altermed-btn altermed-btn--base"><span>Read More Case Studies</span>
                        <em></em></a>
                  </div>
                  <!-- <div class="about-one-home__content__counter-wrapper">
                     <div class="about-one-home__content__counter">
                        <div class="shape-1">
                           <img src="{{ asset('guest/assets/images/shapes/about-shape-1.png') }}" alt="">
                        </div>
                        <div class="about-one-home__content__icon count-box">
                           <i class="icon-guarantee"></i>
                           <div class="about-one-home__content__couter__head">
                              <span>+</span><span class="about-one-home__content__count count-text" data-stop="38" data-speed="1500"></span>
                           </div>
                        </div>
                        <p class="about-one-home__content__text">Wonderful awards</p>
                     </div>
                  </div> -->
               </div>
            </div>
            <!-- /.why-choose-two__content -->
         </div>
         <!-- /.col-lg-6 -->
      </div>
      <!-- /.row -->
   </div>
   <!-- /.container -->
</section>
<!-- /.about-one-home -->
<section class="service-one service-home-one pt-90 pb-90" style="background-image: url('{{ asset('guest/assets/images/backgrounds/insurace-bg-1.jpg') }}');">
   <div class="container">
      <div class="sec-title">
         <h6 class="sec-title__tagline">Our Services</h6>
         <!-- /.sec-title__tagline -->
         <h2 class="sec-title__title pbb-30">Why Choose Altermed RCM – <br> Trusted Medical Billing Company </h2>
         <!-- /.sec-title__title -->
      </div>
      <!-- /.sec-title -->
      <div class="row gutter-y-30">

         <!-- Specialty-Specific Billing Expertise -->
         <div class="col-md-6 col-lg-3">
            <div class="service-card wow fadeInUp hgt-400" data-wow-duration='1500ms' data-wow-delay='5ms'>
               <div class="service-card__image">
                  <img src="{{ asset('guest/assets/images/service/service-5.webp') }}" alt="Medical Coding & Billing">
                  <div class="service-card__icon">
                     <i class="ti ti-stethoscope"></i>
                  </div>
               </div>
               <div class="service-card__content">
                  <h3 class="service-card__title">
                     <a href="@@link">Specialty-Specific Billing Expertise</a>
                  </h3>
                  <p class="service-card__info">From family medicine to DME billing services, we offer tailored solutions for your specialty.</p>
               </div>
            </div>
         </div>

         <!-- HIPAA-Compliant Systems -->
         <div class="col-md-6 col-lg-3">
            <div class="service-card wow fadeInUp hgt-400" data-wow-duration='1500ms' data-wow-delay='6ms'>
               <div class="service-card__image">
                  <img src="{{ asset('guest/assets/images/service/service-6.webp') }}" alt="HIPAA-Compliant Systems">
                  <div class="service-card__icon">
                     <i class="ti ti-shield-lock"></i>
                  </div>
               </div>
               <div class="service-card__content">
                  <h3 class="service-card__title">
                     <a href="@@link">HIPAA-Compliant Systems</a>
                  </h3>
                  <p class="service-card__info">Your data security is our top priority—we ensure full regulatory compliance.</p>
               </div>
            </div>
         </div>

         <!-- Real-Time Reporting & Analytics -->
         <div class="col-md-6 col-lg-3">
            <div class="service-card wow fadeInUp hgt-400" data-wow-duration='1500ms' data-wow-delay='7ms'>
               <div class="service-card__image">
                  <img src="{{ asset('guest/assets/images/service/service-7.webp') }}" alt="Real-Time Reporting & Analytics">
                  <div class="service-card__icon">
                     <i class="ti ti-chart-infographic"></i>
                  </div>
               </div>
               <div class="service-card__content">
                  <h3 class="service-card__title">
                     <a href="@@link">Real-Time Reporting & Analytics</a>
                  </h3>
                  <p class="service-card__info">Make informed decisions with access to clean, accurate financial reports.</p>
               </div>
            </div>
         </div>

         <!-- Certified Medical Coders -->
         <div class="col-md-6 col-lg-3">
            <div class="service-card wow fadeInUp hgt-400" data-wow-duration='1500ms' data-wow-delay='7ms'>
               <div class="service-card__image">
                  <img src="{{ asset('guest/assets/images/service/service-8.webp') }}" alt="Certified Medical Coders">
                  <div class="service-card__icon">
                     <i class="ti ti-code-dots"></i>
                  </div>
               </div>
               <div class="service-card__content">
                  <h3 class="service-card__title">
                     <a href="@@link">Certified Medical Coders</a>
                  </h3>
                  <p class="service-card__info">Reduce errors and ensure proper reimbursements with expert ICD-10, CPT, and HCPCS coding.</p>
               </div>
            </div>
         </div>

      </div>

      <!-- /.row -->
   </div>
   <!-- /.container -->
</section>
<div class="client-carousel client-carousel-one ">
   <div class="client-carousel__shape-1 mob-hide">
      <img src="{{ asset('guest/assets/images/shapes/line-shape-1.png') }}" alt="shape-1">
   </div>
   <div class="client-carousel__shape-2 mob-hide">
      <img src="{{ asset('guest/assets/images/shapes/line-shape-2.png') }}" alt="shape-2">
   </div>

   <div class="container">
      <div class="sec-title text-center">

         <h3 class="sec-title__title ">Clients we proudly Serve</h3><!-- /.sec-title__title -->
      </div><!-- /.sec-title -->
      <div class="client-carousel__one altermed-owl__carousel owl-theme owl-carousel" data-owl-options='{
            "items": 5,
            "margin":10,
            "smartSpeed": 700,
            "loop":true,
            "autoplay": 6000,
            "nav":false,
            "dots":false,
            "navText": ["<span class=\"fa fa-angle-left\"></span>","<span class=\"fa fa-angle-right\"></span>"],
            "responsive":{
                "0":{
                    "items":1,
                    "margin": 0
                },
                "360":{
                    "items":2,
                    "margin": 0
                },
                "575":{
                    "items":3,
                    "margin": 30
                },
                "768":{
                    "items":3,
                    "margin": 30
                },
                "992":{
                    "items": 4,
                    "margin": 30
                },
                "1200":{
                    "items": 5
                }
            }
            }'>
         <div class="client-carousel__one__item">
            <img src="{{ asset('guest/assets/images/resources/logo1.png') }}" alt="altermed">
         </div><!-- /.owl-slide-item-->
         <div class="client-carousel__one__item">
            <img src="{{ asset('guest/assets/images/resources/logo2.png') }}" alt="altermed">
         </div><!-- /.owl-slide-item-->
         <div class="client-carousel__one__item">
            <img src="{{ asset('guest/assets/images/resources/logo3.png') }}" alt="altermed">
         </div><!-- /.owl-slide-item-->
         <div class="client-carousel__one__item">
            <img src="{{ asset('guest/assets/images/resources/logo4.png') }}" alt="altermed">
         </div><!-- /.owl-slide-item-->
         <div class="client-carousel__one__item">
            <img src="{{ asset('guest/assets/images/resources/logo5.png') }}" alt="altermed">
         </div><!-- /.owl-slide-item-->
         <div class="client-carousel__one__item">
            <img src="{{ asset('guest/assets/images/resources/logo6.png') }}" alt="altermed">
         </div><!-- /.owl-slide-item-->
         <div class="client-carousel__one__item">
            <img src="{{ asset('guest/assets/images/resources/logo7.png') }}" alt="altermed">
         </div><!-- /.owl-slide-item-->
         <div class="client-carousel__one__item">
            <img src="{{ asset('guest/assets/images/resources/logo1.png') }}" alt="altermed">
         </div><!-- /.owl-slide-item-->
         <div class="client-carousel__one__item">
            <img src="{{ asset('guest/assets/images/resources/logo2.png') }}" alt="altermed">
         </div><!-- /.owl-slide-item-->
         <div class="client-carousel__one__item">
            <img src="{{ asset('guest/assets/images/resources/logo3.png') }}" alt="altermed">
         </div><!-- /.owl-slide-item-->
      </div><!-- /.thm-owl__slider -->
   </div><!-- /.container -->
</div><!-- /.client-carousel -->

<div class="about-two  pad-top-10 about-two--home" id="about">
   <div class="about-two__bg">
   </div>
   <div class="container">
      <div class="row">
         <div class="col-lg-6 mob-hide">
            <div class="about-two__left wow animated" style="visibility: visible;">
               <div class="about-two__text">
                  altermed
               </div>
               <div class="about-two__img-1">
                  <img src="{{ asset('guest/assets/images/resources/about-2-1.jpg') }}" alt="about">
               </div>
               <div class="about-two__img-2">
                  <img src="{{ asset('guest/assets/images/resources/about-2-2.jpg') }}" alt="about">
               </div>
            </div>
         </div>
         <div class="col-lg-6">
            <div class="about-two__right">
               <div class="sec-title mb-20btm">

                  <h6 class="sec-title__tagline">Welcome to altermed RCM</h6><!-- /.sec-title__tagline -->

                  <h3 class="sec-title__title">Our Commitment <br> in Excellence is Clear</h3><!-- /.sec-title__title -->
               </div><!-- /.sec-title -->

               <p class="about-two__info"> We, at Altermed RCM, are committed to being a genuine partner for healthcare individuals and providers. We look into more than just numbers. We handle every claim, settle them without compromising attention and accuracy on each level. We approach your revenue cycle management with openness and the vision to generate trust.

                  With us, you get more than medical coding and billing services. You'll be getting a proactive team that cares about your revenue flow. </p>
               <div class="about-two__progress">
                  <h4 class="about-two__progress--title">Our Rcm Popularity</h4>
                  <div class="about-two__progress--bar">
                     <div class="about-two__progress--inner count-bar counted" data-percent="78%" style="width: 78%;">
                        <div class="about-two__progress--number count-text">78%</div>
                     </div>
                  </div>
               </div>
               <!-- <div class="about-two__author">
                  <div class="about-two__author__wrapper">
                     <div class="about-two__author__img">
                        <img src="{{ asset('guest/assets/images/resources/about-2-3.jpg') }}" alt="">
                     </div>
                     <div class="about-two__author__info">
                        <h3 class="about-two__author__name">Aleesha brown</h3>
                        <span class="about-two__author__bio">CEO &amp; CO Founder</span>
                     </div>
                  </div>
                  <div class="about-two__author__link">
                     <a href="#" class="altermed RCM-btn">Discover More <em></em></a>
                  </div>
               </div> -->
            </div>
         </div>
      </div>
   </div>
</div>
<section class="service-one service-page service-pad-remove">
   <div class="container">
      <div class="sec-title text-center">

         <!-- <h6 class="sec-title__tagline">Welcome to altermed</h6> -->

         <h3 class="sec-title__title pbb-30">What Makes Us Different? </h3><!-- /.sec-title__title -->
      </div><!-- /.sec-title -->
      <div class="service-one__carousel altermed-owl__carousel altermed-owl__carousel--with-shadow altermed-owl__carousel--basic-nav owl-carousel owl-theme" data-owl-options='{
        "items": 1,
        "margin": 0,
        "loop": false,
        "smartSpeed": 700,
        "nav": false,
        "navText": ["<span class=\"fa fa-angle-left\"></span>","<span class=\"fa fa-angle-right\"></span>"],
        "dots": true,
        "autoplay": false,
        "responsive": {
            "0": {
                "items": 1
            },
            "576": {
                "items": 2,
                "margin": 30
            },
            "992": {
                "items": 3,
                "margin": 30
            },
            "1200": {
                "items": 4,
                "margin": 30
            }
        }
    }'>
         <div class="item">
            <div class="service-card wow fadeInUp" data-wow-duration="1500ms" data-wow-delay="0ms">
               <div class="service-card__image">
                  <img src="{{ asset('guest/assets/images/service/service-1.png') }}" alt="Tailored Solutions">
                  <div class="service-card__icon">
                     <i class="ti ti-award"></i> <!-- Replaced ti-user-cog -->
                  </div>
               </div>
               <div class="service-card__content">
                  <h3 class="service-card__title"><a href="#">Tailored Solutions</a></h3>
                  <p class="service-card__info">We don’t believe in a one-size-fits-all approach. Every medical practice is unique, and so is our approach. It is designed to meet your specialty, size, and goals. </p>
               </div>
            </div>
         </div>

         <div class="item">
            <div class="service-card wow fadeInUp" data-wow-duration="1500ms" data-wow-delay="1ms">
               <div class="service-card__image">
                  <img src="{{ asset('guest/assets/images/service/service-2.png') }}" alt="Proactive Denial Prevention ">
                  <div class="service-card__icon">
                     <i class="ti ti-shield-check"></i> <!-- This one already works -->
                  </div>
               </div>
               <div class="service-card__content">
                  <h3 class="service-card__title"><a href="#">Proactive Denial Prevention </a></h3>
                  <p class="service-card__info">Beyond denial management services, we focus on denial prevention. It means identifying and fixing the gaps before they cost you revenue. </p>
               </div>
            </div>
         </div>

         <div class="item">
            <div class="service-card wow fadeInUp" data-wow-duration="1500ms" data-wow-delay="3ms">
               <div class="service-card__image">
                  <img src="{{ asset('guest/assets/images/service/service-3.png') }}" alt="Transparency ">
                  <div class="service-card__icon">
                     <i class="ti ti-atom"></i> <!-- Replaced ti-cpu -->
                  </div>
               </div>
               <div class="service-card__content">
                  <h3 class="service-card__title"><a href="#">Transparency </a></h3>
                  <p class="service-card__info">Stay in control with full visibility into claim status, AR trends, and payer behavior through real-time, actionable reports. </p>
               </div>
            </div>
         </div>

         <div class="item">
            <div class="service-card wow fadeInUp" data-wow-duration="1500ms" data-wow-delay="4ms">
               <div class="service-card__image">
                  <img src="{{ asset('guest/assets/images/service/service-4.png') }}" alt="Credentialing with a Competitive Edge ">
                  <div class="service-card__icon">
                     <i class="ti ti-puzzle"></i> <!-- Replaced ti-adjustments-horizontal -->
                  </div>
               </div>
               <div class="service-card__content">
                  <h3 class="service-card__title"><a href="#">Credentialing with a Competitive Edge </a></h3>
                  <p class="service-card__info">Our professional credential services are fast, accurate, and insurer-aligned, helping you avoid missed revenue. </p>
               </div>
            </div>
         </div>


      </div><!-- /.row -->
   </div><!-- /.container -->
</section><!-- /.service-page -->
<div class="banner-one">
   <div class="container">
      <div class="banner-one__inner">
         <div class="banner-one__bg" style="background-image: url('{{ asset('guest/assets/images/backgrounds/banner-one-bg.jpg') }}')">
         </div>
         <div class="shape-1">
            <img src="{{ asset('guest/assets/images/shapes/banner-one-shape.png') }}" alt="shape-1">

         </div>
         <h3 class="banner-one__title">Find a local insurance agent</h3>
         <a class="altermed-btn banner-one-btn" href="#">Contact us<em></em></a>
      </div>
   </div>
</div>

@endsection
@section('page_level_script')
@endsection
@extends('layouts.guest.master')
@section('page_level_style')
@endsection
@section('content')
<section class="main-slider-one">
   <div class="main-slider-one__carousel altermed RCM-owl__carousel owl-carousel" data-owl-options='{
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
            <div class="main-slider-one__bg" style="background-image: url('{{ asset('guest/assets/images/backgrounds/slider-1-1.jpg') }}');"></div>
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
                           <h2 class="main-slider-one__title">Emerging <br>
                              Medical billing <br>
                              Service Provider
                           </h2>
                           <!-- slider-title -->
                           <p class="main-slider-one__info">
                              We plays a crucial role in the healthcare industry by handling the complex process of billing and reimbursement for healthcare providers.
                           </p>
                           <div class="main-slider-one__btn">
                              <a href="services.html" class="altermed RCM-btn altermed RCM-btn--base"><span>Let’s Get
                                    Started</span> <em></em></a><!-- slider-btn -->
                           </div>
                        </div>
                        <div class="main-slider-one__social">
                           <span><i class="icon-family-1"></i></span>
                           <span><i class="icon-car"></i></span>
                           <span><i class="icon-home-insurance"></i></span>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>
      <div class="item">
         <div class="main-slider-one__item">
            <div class="main-slider-one__bg" style="background-image: url('{{ asset('guest/assets/images/backgrounds/slider-1-2.jpg') }}');"></div>
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
                           <h2 class="main-slider-one__title">Skilled Professionalls <br>
                              For Quality Services <br>
                              At Affordable prices
                           </h2>
                           <!-- slider-title -->
                           <p class="main-slider-one__info">
                              We are dedicated to optimizing the revenue cycle,ensurinng accuracy in coding and billing,providing exceptional customr service
                           </p>
                           <div class="main-slider-one__btn">
                              <a href="services.html" class="altermed RCM-btn altermed RCM-btn--base"><span>Let’s Get
                                    Started</span> <em></em></a><!-- slider-btn -->
                           </div>
                        </div>
                        <div class="main-slider-one__social">
                           <span><i class="icon-family-1"></i></span>
                           <span><i class="icon-car"></i></span>
                           <span><i class="icon-home-insurance"></i></span>
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
   <section class="feature-one">
      <div class="container-fluid ">
         <div class="row gutter-y-30">
            <div class="sec-title text-center">
               <h3 class="sec-title__title">Why Choose altermed RCM</h3>
               <!-- /.sec-title__tagline -->
               <p class="feature-one__item__text">We are specialize in handling billing and coding tasks
                  on the basis of latest industry regulations, coding changes, and compliance requirements
               </p>
               <!-- /.sec-title__title -->
            </div>
            <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="100ms">
               <div class="feature-one__item">
                  <div class="feature-one__item__icon"><span class="icon-save-money"></span></div>
                  <div class="feature-one__item__content">
                     <h3 class="feature-one__item__title">Precision in Coding and Billing</h3>
                     <p class="feature-one__item__text">Unleash the power of accurate ICD-10 and CPT coding coupled with timely claim submissions. We optimize your revenue cycle, ensuring every service is accounted for, minimizing denials, and maximizing reimbursement.
                     </p>
                  </div>
               </div>
               <!-- feature-item -->
            </div>
            <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="100ms">
               <div class="feature-one__item">
                  <div class="feature-one__item__icon"><span class="icon-online-registration"></span></div>
                  <div class="feature-one__item__content">
                     <h3 class="feature-one__item__title">Seamless Provider Credentialing</h3>
                     <p class="feature-one__item__text">Navigating the intricate landscape of provider credentialing can be arduous. With altermed RCM, experience a streamlined process that accelerates credentialing, minimizes delays, and ensures your providers are ready to deliver exceptional patient care.
                     </p>
                  </div>
               </div>
               <!-- feature-item -->
            </div>
            <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="100ms">
               <div class="feature-one__item">
                  <div class="feature-one__item__icon"><span class="icon-guarantee"></span></div>
                  <div class="feature-one__item__content">
                     <h3 class="feature-one__item__title">Expert Medical Billing Consulting</h3>
                     <p class="feature-one__item__text">In a dynamic healthcare landscape, staying ahead is imperative. Our consulting services are designed to propel your practice forward, offering insights, strategies, and tailored solutions to optimize revenue performance and navigate evolving industry challenges.
                     </p>
                  </div>
               </div>
               <!-- feature-item -->
            </div>
         </div>
      </div>
   </section>
   <!-- Feature End -->
   <div class="container">
      <div class="row">
         <div class="col-lg-6">
            <div class="about-one-home__image wow fadeInLeft" data-wow-delay="300ms">
               <div class="about-one-home__double-image">
                  <div class="img-1">
                     <img src="{{ asset('guest/assets/images/resources/about-1-1.png') }}" alt="altermed RCM">
                  </div>
                  <div class="img-2">
                     <img src="{{ asset('guest/assets/images/resources/about-1-2.png') }}" alt="altermed RCM">
                  </div>
                  <div class="about-one-home__image__arrow"><img src="{{ asset('guest/assets/images/shapes/about-shape-1-2.png') }}" alt="altermed RCM">
                  </div>
                  <div class="about-one-home__image__counter count-box">
                     <h3 class="about-one-home__image__count count-text" data-stop="30" data-speed="1500"></h3>
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
            <div class="about-one-home__content">
               <div class="sec-title">
                  <h6 class="sec-title__tagline">About company</h6>
                  <!-- /.sec-title__tagline -->
                  <h3 class="sec-title__title">
                     Our Core Value
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
                        <li><span class="fas fa-check-circle"></span>Expertise: Proven billing pros
                        </li>
                        <li><span class="fas fa-check-circle"></span>Tech: Fast, smart systems
                        </li>
                        <li><span class="fas fa-check-circle"></span>Compliance: Always up-to-date
                        </li>
                        <li><span class="fas fa-check-circle"></span>Custom: Tailored for you</li>
                     </ul>
                     <a href="about.html" class="altermed RCM-btn altermed RCM-btn--base"><span>Discover more</span>
                        <em></em></a>
                  </div>
                  <div class="about-one-home__content__counter-wrapper">
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
                  </div>
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
<section class="service-one service-home-one pt-60 pb-160" style="background-image: url('{{ asset('guest/assets/images/backgrounds/insurace-bg-1.jpg') }}');">
   <div class="container">
      <div class="sec-title">
         <h6 class="sec-title__tagline">Our Services</h6>
         <!-- /.sec-title__tagline -->
         <h2 class="sec-title__title">Streamlined Healthcare Revenue Solutions <br> by altermed RCM</h2>
         <!-- /.sec-title__title -->
      </div>
      <!-- /.sec-title -->
      <div class="row gutter-y-30">

         <!-- /.col-md-6 col-lg-3 -->
         <div class="col-md-6 col-lg-3">
            <div class="service-card wow fadeInUp hgt-400" data-wow-duration='1500ms' data-wow-delay='5ms'>
               <div class="service-card__image">
                  <img src="{{ asset('guest/assets/images/service/service-5.webp') }}" alt="Medical Coding & Billing">
                  <div class="service-card__icon">
                     <i class="icon-suitcase"></i>
                  </div>
               </div>
               <!-- /.service-card__image -->
               <div class="service-card__content">
                  <h3 class="service-card__title">
                     <a href="@@link">Medical Coding & Billing</a>
                  </h3>
                  <!-- /.service-card__title -->
                  <p class="service-card__info">At altermed RCM, we understand the critical role accurate medical coding and billing play in the financial success of healthcare providers.</p>
               </div>
               <!-- /.service-card__content -->
            </div>
            <!-- /.service-card -->
         </div>
         <!-- /.col-md-6 col-lg-3 -->
         <div class="col-md-6 col-lg-3">
            <div class="service-card wow fadeInUp hgt-400" data-wow-duration='1500ms' data-wow-delay='6ms'>
               <div class="service-card__image">
                  <img src="{{ asset('guest/assets/images/service/service-6.webp') }}" alt="Provider Credentialing">
                  <div class="service-card__icon">
                     <i class="icon-fire"></i>
                  </div>
               </div>
               <!-- /.service-card__image -->
               <div class="service-card__content">
                  <h3 class="service-card__title">
                     <a href="@@link">Provider Credentialing</a>
                  </h3>
                  <!-- /.service-card__title -->
                  <p class="service-card__info">Navigating the intricate process of provider credentialing can be a time-consuming and complex task.</p>
               </div>
               <!-- /.service-card__content -->
            </div>
            <!-- /.service-card -->
         </div>
         <!-- /.col-md-6 col-lg-3 -->
         <div class="col-md-6 col-lg-3">
            <div class="service-card wow fadeInUp hgt-400" data-wow-duration='1500ms' data-wow-delay='7ms'>
               <div class="service-card__image">
                  <img src="{{ asset('guest/assets/images/service/service-7.webp') }}" alt="Medical Billing Consulting">
                  <div class="service-card__icon">
                     <i class="icon-wedding-rings"></i>
                  </div>
               </div>
               <!-- /.service-card__image -->
               <div class="service-card__content">
                  <h3 class="service-card__title">
                     <a href="@@link">Medical Billing Consulting</a>
                  </h3>
                  <!-- /.service-card__title -->
                  <p class="service-card__info">In the dynamic landscape of healthcare, staying abreast of regulatory changes, industry trends, and best practices is crucial for financial success.</p>
               </div>
               <!-- /.service-card__content -->
            </div>
            <!-- /.service-card -->
         </div>
         <!-- /.col-md-6 col-lg-3 -->
         <div class="col-md-6 col-lg-3">
            <div class="service-card service-featured wow fadeInUp hgt-400" data-wow-duration="1500ms" data-wow-delay="8ms">
               <div class="service-card__bg" style="background-image: url('{{ asset('guest/assets/images/resources/service-featured.jpg') }}');"></div>
               <div class="service-card__content">
                  <h3 class="service-card__title">
                     Comprehensive RCM Services<br>for Healthcare Providers
                  </h3>
                  <!-- /.service-card__title -->
                  <p class="service-card__info">altermed RCM simplifies your revenue cycle with precise coding, expert credentialing, and strategic consulting—ensuring compliance, efficiency, and growth.</p>
                  <a href="contact.html" class="altermed RCM-btn">Get a Quote <em></em></a>
               </div>
               <!-- /.service-card__content -->
            </div>
         </div>
         <!-- /.col-md-6 col-lg-3 -->
      </div>
      <!-- /.row -->
   </div>
   <!-- /.container -->
</section>
<div class="about-two pad-60 about-two--home" id="about">
   <div class="about-two__bg">
   </div>
   <div class="container">
      <div class="row">
         <div class="col-lg-6">
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
               <div class="sec-title">

                  <h6 class="sec-title__tagline">Welcome to altermed RCM</h6><!-- /.sec-title__tagline -->

                  <h3 class="sec-title__title">Your Success,<br>Our Commitment</h3><!-- /.sec-title__title -->
               </div><!-- /.sec-title -->
               <p class="about-two__highlight">Partnering with altermed RCM isn’t just about managing revenue</p>
               <p class="about-two__info"> It’s about optimizing it. Your financial success is at the heart of everything we do. Join us on a transformative journey where precision, innovation, and partnership converge to elevate your healthcare revenue management.

                  Discover the altermed RCM advantage – Where Your Revenue Management is our Expertise!</p>
               <div class="about-two__progress">
                  <h4 class="about-two__progress--title">Our Rcm Popularity</h4>
                  <div class="about-two__progress--bar">
                     <div class="about-two__progress--inner count-bar counted" data-percent="78%" style="width: 78%;">
                        <div class="about-two__progress--number count-text">78%</div>
                     </div>
                  </div>
               </div>
               <div class="about-two__author">
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
                     <a href="about.html" class="altermed RCM-btn">Discover More <em></em></a>
                  </div>
               </div>
            </div>
         </div>
      </div>
   </div>
</div>

<section class="service-one service-page">
   <div class="container">
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
            <div class="service-card wow fadeInUp" data-wow-duration='1500ms' data-wow-delay='0ms'>
               <div class="service-card__image">
                  <img src="{{ asset('guest/assets/images/service/service-1.png') }}" alt="Car insurance">
                  <div class="service-card__icon">
                     <i class="icon-car-1"></i>
                  </div>
               </div><!-- /.service-card__image -->
               <div class="service-card__content">
                  <h3 class="service-card__title">
                     <a href="car-insurance.html">Car insurance</a>
                  </h3><!-- /.service-card__title -->
                  <p class="service-card__info">Lorem ipsum dolor sit amet, sed consectetur adipiscing elit.</p>
               </div><!-- /.service-card__content -->
            </div><!-- /.service-card -->
         </div><!-- /.item -->
         <div class="item">
            <div class="service-card wow fadeInUp" data-wow-duration='1500ms' data-wow-delay='1ms'>
               <div class="service-card__image">
                  <img src="{{ asset('guest/assets/images/service/service-2.png') }}" alt="Life insurance">
                  <div class="service-card__icon">
                     <i class="icon-cardiogram"></i>
                  </div>
               </div><!-- /.service-card__image -->
               <div class="service-card__content">
                  <h3 class="service-card__title">
                     <a href="life-insurance.html">Life insurance</a>
                  </h3><!-- /.service-card__title -->
                  <p class="service-card__info">Lorem ipsum dolor sit amet, sed consectetur adipiscing elit.</p>
               </div><!-- /.service-card__content -->
            </div><!-- /.service-card -->
         </div><!-- /.item -->
         <div class="item">
            <div class="service-card wow fadeInUp" data-wow-duration='1500ms' data-wow-delay='3ms'>
               <div class="service-card__image">
                  <img src="{{ asset('guest/assets/images/service/service-3.png') }}" alt="Home insurance">
                  <div class="service-card__icon">
                     <i class="icon-home"></i>
                  </div>
               </div><!-- /.service-card__image -->
               <div class="service-card__content">
                  <h3 class="service-card__title">
                     <a href="home-insurance.html">Home insurance</a>
                  </h3><!-- /.service-card__title -->
                  <p class="service-card__info">Lorem ipsum dolor sit amet, sed consectetur adipiscing elit.</p>
               </div><!-- /.service-card__content -->
            </div><!-- /.service-card -->
         </div><!-- /.item -->
         <div class="item">
            <div class="service-card wow fadeInUp" data-wow-duration='1500ms' data-wow-delay='4ms'>
               <div class="service-card__image">
                  <img src="{{ asset('guest/assets/images/service/service-4.png') }}" alt="Health insurance">
                  <div class="service-card__icon">
                     <i class="icon-cross"></i>
                  </div>
               </div><!-- /.service-card__image -->
               <div class="service-card__content">
                  <h3 class="service-card__title">
                     <a href="health-insurance.html">Health insurance</a>
                  </h3><!-- /.service-card__title -->
                  <p class="service-card__info">Lorem ipsum dolor sit amet, sed consectetur adipiscing elit.</p>
               </div><!-- /.service-card__content -->
            </div><!-- /.service-card -->
         </div><!-- /.item -->
         <div class="item">
            <div class="service-card wow fadeInUp" data-wow-duration='1500ms' data-wow-delay='5ms'>
               <div class="service-card__image">
                  <img src="{{ asset('guest/assets/images/service/service-5.png') }}" alt="Business insurance">
                  <div class="service-card__icon">
                     <i class="icon-suitcase"></i>
                  </div>
               </div><!-- /.service-card__image -->
               <div class="service-card__content">
                  <h3 class="service-card__title">
                     <a href="business-insurance.html">Business insurance</a>
                  </h3><!-- /.service-card__title -->
                  <p class="service-card__info">Lorem ipsum dolor sit amet, sed consectetur adipiscing elit.</p>
               </div><!-- /.service-card__content -->
            </div><!-- /.service-card -->
         </div><!-- /.item -->
         <div class="item">
            <div class="service-card wow fadeInUp" data-wow-duration='1500ms' data-wow-delay='6ms'>
               <div class="service-card__image">
                  <img src="{{ asset('guest/assets/images/service/service-6.png') }}" alt="Fire insurance">
                  <div class="service-card__icon">
                     <i class="icon-fire"></i>
                  </div>
               </div><!-- /.service-card__image -->
               <div class="service-card__content">
                  <h3 class="service-card__title">
                     <a href="fire-insurance.html">Fire insurance</a>
                  </h3><!-- /.service-card__title -->
                  <p class="service-card__info">Lorem ipsum dolor sit amet, sed consectetur adipiscing elit.</p>
               </div><!-- /.service-card__content -->
            </div><!-- /.service-card -->
         </div><!-- /.item -->
         <div class="item">
            <div class="service-card wow fadeInUp" data-wow-duration='1500ms' data-wow-delay='7ms'>
               <div class="service-card__image">
                  <img src="{{ asset('guest/assets/images/service/service-7.png') }}" alt="Marriage insurance">
                  <div class="service-card__icon">
                     <i class="icon-wedding-rings"></i>
                  </div>
               </div><!-- /.service-card__image -->
               <div class="service-card__content">
                  <h3 class="service-card__title">
                     <a href="marriage-insurance.html">Marriage insurance</a>
                  </h3><!-- /.service-card__title -->
                  <p class="service-card__info">Lorem ipsum dolor sit amet, sed consectetur adipiscing elit.</p>
               </div><!-- /.service-card__content -->
            </div><!-- /.service-card -->
         </div><!-- /.item -->
         <div class="item">
            <div class="service-card wow fadeInUp" data-wow-duration='1500ms' data-wow-delay='8ms'>
               <div class="service-card__image">
                  <img src="{{ asset('guest/assets/images/service/service-8.png') }}" alt="Travel insurance">
                  <div class="service-card__icon">
                     <i class="icon-plane"></i>
                  </div>
               </div><!-- /.service-card__image -->
               <div class="service-card__content">
                  <h3 class="service-card__title">
                     <a href="travel-insurance.html">Travel insurance</a>
                  </h3><!-- /.service-card__title -->
                  <p class="service-card__info">Lorem ipsum dolor sit amet, sed consectetur adipiscing elit.</p>
               </div><!-- /.service-card__content -->
            </div><!-- /.service-card -->
         </div><!-- /.item -->
      </div><!-- /.row -->
   </div><!-- /.container -->
</section><!-- /.service-page -->
@endsection
@section('page_level_script')
@endsection
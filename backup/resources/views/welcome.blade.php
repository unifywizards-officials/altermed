@extends('layouts.guest.master')

@section('title',$homeManageContent->home_meta_title)
@section('description',$homeManageContent->home_meta_description)
@section('og_image', asset('storage/'.$slider['0']->image_path))


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

/* Clients Section Styles */
.client-card {
    background: white;
    padding: 30px 20px;
    border-radius: 10px;
    box-shadow: 0 5px 15px rgba(0,0,0,0.1);
    transition: all 0.3s ease;
    height: 100%;
    display: flex;
    flex-direction: column;
    justify-content: center;
}

.client-card:hover {
    transform: translateY(-5px);
    box-shadow: 0 10px 25px rgba(0,0,0,0.15);
}

.client-card__title {
    font-size: 18px;
    font-weight: 600;
    color: #333;
    margin-bottom: 10px;
}

.client-card__description {
    font-size: 14px;
    color: #666;
    line-height: 1.5;
    margin-bottom: 15px;
}

.client-card__link {
    color: #007bff;
    text-decoration: none;
    font-size: 14px;
    font-weight: 500;
    transition: color 0.3s ease;
}

.client-card__link:hover {
    color: #0056b3;
}

.clients-section {
    position: relative;
}

.clients-section::before {
    content: '';
    position: absolute;
    top: 0;
    left: 0;
    right: 0;
    bottom: 0;
    background: linear-gradient(135deg, rgba(0,123,255,0.05) 0%, rgba(0,123,255,0.02) 100%);
    pointer-events: none;
}

.align-item-center {
     align-items: center;
}

</style>
@endsection
@section('content')




<!--<section class="main-slider-one  ">-->
<!--   <div class="main-slider-one__carousel altermed-owl__carousel owl-carousel" data-owl-options='{-->
<!--      "loop": true,-->
<!--      "animateOut": "fadeOut",-->
<!--      "animateIn": "fadeIn",-->
<!--      "items": 1,-->
<!--      "autoplay": true,-->
<!--      "autoplayTimeout": 7000,-->
<!--      "smartSpeed": 1000,-->
<!--      "nav": true,-->
<!--      "navText": ["<span class=\"icon-left-arrow\"></span>","<span class=\"icon-right-arrow\"></span>"],-->
<!--      "dots": false,-->
<!--      "margin": 0-->
<!--      }'>-->
<!--      @foreach($slider as $slide)-->
<!--      <div class="item">-->
<!--         <div class="main-slider-one__item">-->
<!--            <div class="main-slider-one__bg" style="background-image: url('{{ asset('storage/' .$slide->image_path) }}');"></div>-->
<!--            <div class="main-slider-one__shape">-->
<!--               <img src="{{ asset('guest/assets/images/shapes/main-slder-shape-1.png') }}" alt="shape">-->
<!--            </div>-->
<!--            <div class="container">-->
<!--               <div class="row">-->
<!--                  <div class="col-xl-7">-->
<!--                     <div class="main-slider-one__wrap">-->
<!--                        <div class="main-slider-one__content">-->
                           <!--<div class="shape-1">-->
                           <!--   <img src="{{ asset('guest/assets/images/shapes/arrow-shape.png') }}" alt="">-->
                           <!--</div>-->
<!--                           <h1 class="main-slider-one__title">{{ $slide->title }}</h1>-->
<!--                           <p class="main-slider-one__info">{{ $slide->description }}</p>-->
<!--                           @if($slide->button_text)-->
<!--                           <div class="main-slider-one__btn">-->
<!--                              <a href="{{ $slide->button_url }}" class="altermed-btn altermed-btn--base"><span>{{ $slide->button_text }}</span> <em></em></a>-->
<!--                           </div>-->
<!--                           @endif-->
<!--                        </div>-->
                       
<!--                     </div>-->
<!--                  </div>-->
<!--               </div>-->
<!--            </div>-->
<!--         </div>-->
<!--      </div>-->
<!--      @endforeach-->
<!--   </div>-->
<!--</section>-->















 
 <section data-bgcolor="#fff" class="hero" data-hero="">
  <div class="hero--video">
    <video
      width="100%"
      height="100%"
      preload="none"
      autoplay=""
      playsinline=""
      muted="unmuted"
      loop="loop"
      class=""
      src="https://thefinch.design/wp-content/themes/gp-starter/assets/video/masthead-pattern.mp4"
    ></video>
  </div>
  <div class="container">
    <div class="row">
      <div class="col-12">
        <h1>
          Medical Billing & <br class="d-none-lg"/>Credentialing Services to <br /><span class="hero-h1-style"
            >Maximize Your Practice’s Revenue </span
          >
        </h1>
        <p>
         Altermed RCM assists healthcare providers in achieving fast and accurate credentialing with insurance providers along with comprehensive billing solutions that boost reimbursement. 
        </p>
        <ul>
          <li>
            <div class="icons-wrp">
              <span class="icons" data-value="10" data-unit="+">3+</span>
              <span class="icons-svg">
                <svg
                  width="24"
                  height="24"
                  viewBox="0 0 24 24"
                  fill="none"
                  xmlns="http://www.w3.org/2000/svg"
                >
                  <g clip-path="url(#clip0_4328_14017)">
                    <path
                      d="M11.9998 17.75L5.82784 20.995L7.00684 14.122L2.00684 9.25495L8.90684 8.25495L11.9928 2.00195L15.0788 8.25495L21.9788 9.25495L16.9788 14.122L18.1578 20.995L11.9998 17.75Z"
                      fill="#005BFF"
                    ></path>
                  </g>
                  <defs>
                    <clipPath id="clip0_4328_14017">
                      <rect width="24" height="24" fill="white"></rect>
                    </clipPath>
                  </defs>
                </svg>
              </span>
            </div>
            <p>
              Years of<br />
              Excellence
            </p>
          </li>
          <li>
            <div class="icons-wrp">
              <span class="icons" data-value="92" data-unit="%">92%</span>
              <span class="icons-svg">
                <svg
                  width="24"
                  height="24"
                  viewBox="0 0 24 24"
                  fill="none"
                  xmlns="http://www.w3.org/2000/svg"
                >
                  <g clip-path="url(#clip0_4328_14022)">
                    <path
                      d="M12 12C14 9.04 12 5 11 4C11 7.038 9.227 8.741 8 10C6.774 11.26 6 13.24 6 15C6 16.5913 6.63214 18.1174 7.75736 19.2426C8.88258 20.3679 10.4087 21 12 21C13.5913 21 15.1174 20.3679 16.2426 19.2426C17.3679 18.1174 18 16.5913 18 15C18 13.468 16.944 11.06 16 10C14.214 13 13.209 13 12 12Z"
                      fill="#005BFF"
                    ></path>
                  </g>
                  <defs>
                    <clipPath id="clip0_4328_14022">
                      <rect width="24" height="24" fill="white"></rect>
                    </clipPath>
                  </defs>
                </svg>
              </span>
            </div>
            <p>
              Success<br />
              Rate
            </p>
          </li>
          <li>
            <div class="icons-wrp">
              <span class="icons" data-value="100" data-unit="+">100+</span>
              <span class="icons-svg">
                <svg
                  width="24"
                  height="24"
                  viewBox="0 0 24 24"
                  fill="none"
                  xmlns="http://www.w3.org/2000/svg"
                >
                  <g clip-path="url(#clip0_4328_14032)">
                    <path
                      d="M12 21C16.9706 21 21 16.9706 21 12C21 7.02944 16.9706 3 12 3C7.02944 3 3 7.02944 3 12C3 16.9706 7.02944 21 12 21Z"
                      fill="#005BFF"
                    ></path>
                    <path
                      d="M9 12L11 14L15 10"
                      stroke="white"
                      stroke-width="2"
                      stroke-linecap="round"
                      stroke-linejoin="round"
                    ></path>
                  </g>
                  <defs>
                    <clipPath id="clip0_4328_14032">
                      <rect width="24" height="24" fill="white"></rect>
                    </clipPath>
                  </defs>
                </svg>
              </span>
            </div>
            <p>
              Thriving<br />
              Projects
            </p>
          </li>
          <li>
            <div class="d-flex justify-content-end align-items-center">
        
        <button class="btn unique-btn px-4 fw-medium">
        Know More
        </button>
      </div>
          </li>
        </ul>
      </div>
    </div>
  </div>
  <div class="container">
      <!-- /.sec-title -->
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
                },
                "1600":{
                    "items": 6
                }
            }
            }'>
         @foreach($clients as $client)
         <div class="client-carousel__one__item d-flex justify-content-center">
            <img src="{{ asset('storage/' .$client->image_path) }}" alt="{{ $client->name }}" class="img-100px">
         </div>
         @endforeach
      </div>
   </div>
</section>
 

<section>
       <div class="feature-two__shape">
                <img src="       {{ asset('guest/assets/images/shapes/feature-shape-2.png') }}" alt="">
            </div>
   <div class="container p-40 pt-90  pb-90 ">
       
      <div class="row align-item-center">
         <div class="col-lg-6">
            <div class="about-one-home__image wow fadeInLeft mob-hide" data-wow-delay="300ms">
               <div class="about-one-home__double-image">
                  <div class="img-1">
                      
                     <img src="{{ $aboutsection ? asset('storage/' .$aboutsection->image_one) : asset('guest/assets/images/resources/about-1-1.png') }}" alt="altermed">
                  </div>
                  <div class="img-2">
                     <img src="{{ $aboutsection ? asset('storage/' .$aboutsection->image_two) : asset('guest/assets/images/resources/about-1-2.png') }}" alt="altermed">
                  </div>
               
                  <div class="about-one-home__image__counter count-box">
                     <h3 class="about-one-home__image__count count-text" data-stop="{{ $aboutsection ? $aboutsection->experience_years : 7 }}" data-speed="1500"></h3>
                     <p class="about-one-home__image__text">{{ $aboutsection ? $aboutsection->experience_text : 'Years of experience' }}</p>
                  </div>
               </div>
            </div>
         </div>
         <!-- /.col-lg-6 -->
         <div class="col-lg-6 wow fadeInRight" data-wow-delay="100ms">
            <div class="about-one-home__content pad-top-20">
               <div class="sec-title">
                  <h6 class="sec-title__tagline">Certified Billing Excellence </h6>
                  <h3 class="sec-title__title ">{{ $aboutsection->title ?? 'Client Success Metrics:' }}</h3>
               </div>
               <p class="about-one-home__content__text-two">{{ $aboutsection->description ?? 'We are a specialized service provider...' }}</p>
               <div class="about-one-home__content__wrapper">
                  <div>
                     <!--<ul class="about-one-home__content__list">-->
                     <!--   @if($aboutsection && $aboutsection->list_items)-->
                     <!--   @foreach($aboutsection->list_items as $item)-->
                     <!--   <li><span class="fas fa-check-circle"></span>{{ $item }}</li>-->
                     <!--   @endforeach-->
                     <!--    @endif-->
                     <!--</ul>-->
                     
                      <div class="row align-item-center mb-3">
                           <div class="col-4 wow fadeInRight" data-wow-delay="200ms">
                               <img src="{{ asset('guest/assets/images/aicpa.png') }}" class="w-100">
                          </div>
                              <div class="col-4 wow fadeInRight" data-wow-delay="200ms">
                               <img src="{{ asset('guest/assets/images/hipaa.png') }}" class="w-100">
                          </div>
                          
                        
                           <div class="col-4 wow fadeInRight" data-wow-delay="200ms">
                               <img src="{{ asset('guest/assets/images/iso.png') }}" class="w-100">
                          </div>
                          
                          
                      </div>
                        
                       
                     
                     
                     
                     
                     
                     
                     
                     @if($aboutsection && $aboutsection->button_text)
                     <a href="{{ $aboutsection->button_link }}" class="altermed-btn altermed-btn--base"><span>{{ $aboutsection->button_text }}</span><em></em></a>
                     @else
                     <a href="#" class="altermed-btn altermed-btn--base"><span>Read More Case Studies</span><em></em></a>
                     @endif
                  </div>
               </div>
            </div>
         </div>
         <!-- /.col-lg-6 -->
      </div>
      <!-- /.row -->
   </div>
   <!-- /.container -->
</section>
 





















<!-- main-slider-end -->

   
        
        
        
        
        
        <!-- <section class="funfact-one" style="background-image: url(assets/images/shapes/funfact-shape.png);">-->
        <!--    <div class="container">-->
        <!--        <div class="list-unstyled funfact-one__list">-->
        <!--            <div class="row gutter-y-40">-->
        <!--                @forelse($businesscounter as $data)-->
        <!--                <div class="col-md-6 col-lg-3">-->
        <!--                    <div class="funfact-one__item count-box">-->
        <!--                        {!! $data->icon !!} -->
        <!--                        <div class="funfact-one__content">-->
        <!--                            <div class="funfact-one__wrap">-->
        <!--                                <h3 class="funfact-one__count count-text" data-stop="{!! $data->counter !!}" data-speed="1500"></h3>-->
        <!--                                <h3 class="funfact-one__count count-before">{!! $data->counter_text !!}</h3>-->
        <!--                            </div>-->
                                    
        <!--                            <p class="funfact-one__text">{!! $data->name !!}</p> -->
        <!--                        </div> -->
        <!--                    </div> -->
        <!--                </div>-->
        <!--                @empty-->
        <!--                not found data-->
        <!--                @endforelse-->
                      
        <!--            </div>-->

        <!--        </div> -->
        <!--    </div> -->
        <!--</section>-->
        
        
        
        
        
        
        
        
        
        
        
        <section   class="about"  >
  <div class="container">
    <div class="row">
      <div class="col-12">
        <div class="about--content">
          <div class="about--content-title">
            <h2  class="counter-heading">Smarter Medical Billing to   <br /><span class="counter-heading-style"> Get Paid Faster    </span></h2>
          </div>
          <div class="about--content-card">
            <div class="about--content-card-item">
              <img
                decoding="async"
                src="https://thefinch.design/wp-content/uploads/2025/04/about-1.png.webp"
                alt="about-1"
              />
              <div class="about--content-card-item-title">
                <h3>
                  <strong><i>98%</i></strong>
                </h3>
                <p class="body">Clean Claim Rate</p>
              </div>
              <p class="small">
               Your claims get processed right the first time with us.
              </p>
            </div>
          </div>
          <div class="about--content-card">
            <div class="about--content-card-item">
              <img
                decoding="async"
                src="https://thefinch.design/wp-content/uploads/2025/04/about-2.png.webp"
                alt="about-2"
              />
              <div class="about--content-card-item-title">
                <h3>
                  <strong><i>4.9K</i></strong>
                </h3>
                <p class="body"> Satisfied Customers</p>
              </div>
              <p class="small">
                Thousands trust us because we deliver reliable results consistently.
              </p>
            </div>
          </div>
          <div class="about--content-card">
            <div class="about--content-card-item">
              <img
                decoding="async"
                src="https://thefinch.design/wp-content/uploads/2025/04/about-3.png.webp"
                alt="about-3"
              />
              <div class="about--content-card-item-title">
                <h3>
                  <strong><i>25%</i></strong>
                </h3>
                <p class="body">Average Revenue Rise</p>
              </div>
              <p class="small">
                We help practices increase revenue and grow steadily.
              </p>
            </div>
          </div>
          <div class="about--content-card">
            <div class="about--content-card-item">
              <img
                decoding="async"
                src="https://thefinch.design/wp-content/uploads/2025/04/about-4.png.webp"
                alt="about-4"
              />
              <div class="about--content-card-item-title">
                <h3>
                  <strong><i>30%</i></strong>
                </h3>
                <p class="body">Fast Reimbursements</p>
              </div>
              <p class="small">
                We speed up reimbursements so you get paid faster.
              </p>
            </div>
          </div>
          <div class="about--content-card">
            <div class="about--content-card-item">
              <img
                decoding="async"
                src="https://thefinch.design/wp-content/uploads/2025/04/about-5.png.webp"
                alt="about-5"
              />
              <div class="about--content-card-item-title">
                <h3>
                  <strong><i>1,500+</i></strong>
                </h3>
                <p class="body">Providers Credentialed</p>
              </div>
              <p class="small">
               Fast credentialing services to get your providers in the field quickly.
              </p>
            </div>
          </div>
          <div class="about--content-card">
            <div class="about--content-card-item">
              <img
                decoding="async"
                src="https://thefinch.design/wp-content/uploads/2025/04/about-6.png.webp"
                alt="about-6"
              />
              <div class="about--content-card-item-title">
                <h3>
                  <strong><i>97%</i></strong>
                </h3>
                <p class="body">Client <br />Retention Rate</p>
              </div>
              <p class="small">
               Clients stay with us because we support their ongoing success.
              </p>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="row about--bottom-row">
      <div class="col-12">
        <div class="about--bottom">
          <div class="about--bottom--left">
            <div class="about--bottom-text">
              <h3>
                <strong><i>500+ </i></strong>
              </h3>
              <p class="sub-heading">Dedicated Employees</p>
              <div class="about--bottom-img">
                <img
                  decoding="async"
                  src="{{ asset('guest/assets/images/employe/1.jpg') }} "
                  alt="Profile icon"
                />
                <img
                  decoding="async"
                  src="{{ asset('guest/assets/images/employe/2.jpg') }}"
                  alt="Profile icon"
                />
                <img
                  decoding="async"
                  src="{{ asset('guest/assets/images/employe/3.jpg') }}"
                  alt="Profile icon"
                />
                <img
                  decoding="async"
                  src="{{ asset('guest/assets/images/employe/4.jpg') }}"
                  alt="Profile icon"
                />
                <img
                  decoding="async"
                  src="{{ asset('guest/assets/images/employe/5.jpg') }}"
                  alt="Profile icon"
                />
                <img
                  decoding="async"
                  src="{{ asset('guest/assets/images/employe/6.jpg') }}"
                  alt="Profile icon"
                />
              </div>
            </div>
            <p>An expert-driven team focused on delivering real results.</p>
          </div>
          <div class="about--bottom-content">
            <p>
             Every medical practice is unique, and so is our approach. It is designed to meet your specialty, size, and goals. Our ongoing support includes re-credentialing, compliance monitoring, and seamless integration with billing to optimize your revenue cycle. 
            </p>
            <div class="wp-block-button is-style-outline-alt-v2">
              <a
                href="https://thefinch.design/about/"
                class="wp-block-button__link"
              >
                <span class="btn-text">about us</span>
                <span class="gp-arrow"
                  ><svg
                    width="20"
                    height="20"
                    viewBox="0 0 20 20"
                    fill="none"
                    xmlns="http://www.w3.org/2000/svg"
                  >
                    <g clip-path="url(#clip0_5975_1168)">
                      <path
                        d="M14.1668 5.83398L5.8335 14.1673"
                        stroke="CurrentColor"
                        stroke-width="2"
                        stroke-linecap="round"
                        stroke-linejoin="round"
                      />
                      <path
                        d="M6.6665 5.83398H14.1665V13.334"
                        stroke="CurrentColor"
                        stroke-width="2"
                        stroke-linecap="round"
                        stroke-linejoin="round"
                      />
                    </g>
                    <defs>
                      <clipPath id="clip0_5975_1168">
                        <rect width="20" height="20" fill="CurrentColor" />
                      </clipPath>
                    </defs></svg></span>
              </a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        <div class="home-top-features module  module--filled  ">
                        <div class="container">
                           <h2 class="home-top-features__heading sec-title__title" data-animate-type="fadeInUp">
                              Our Services – Comprehensive Billing & Coding Solutions 			
                           </h2>
                           <div class="row  ">
                              <div class="col col-md-6 col-xs-12 flex flex-col mb-0">
                                 <div class="home-top-features__card active  image-position-right home-top-features__card--default"
                                    data-animate-type="fadeInUp">
                                    <div class="home-top-features__card-body">
                                       <h3 class="home-top-features__card-title"> Denial Management Services <span
                                          class="icon-plus"></span><span class="icon-minus"></span></h3>
                                       <div class="home-top-features__card-text-wrapper">
                                          <div class="home-top-features__card-text entry-content">
                                            
                                            We Identify root causes, handle rejections, and prevent future denials for better financial posture. 	
                                          </div>
                                          <a href="/unified-solution/payroll/" >Learn More</a>
                                           
                                       </div>
                                    </div>
                                    <div class="home-top-features__card-image">
                                       <img  class="service-card-payroll-image" loading="lazy" src="https://apspayroll.com/wp-content/uploads/2025/07/Graphic.svg"  />
                                    </div>
                                 </div>
                                 <div class="home-top-features__card   image-position-bottom home-top-features__card--default"
                                    data-animate-type="fadeInUp">
                                    <div class="home-top-features__card-body">
                                       <h3 class="home-top-features__card-title">Medical Billing Services  <span
                                          class="icon-plus"></span><span class="icon-minus"></span></h3>
                                       <div class="home-top-features__card-text-wrapper">
                                          <div class="home-top-features__card-text entry-content">
                                             Clean claim submission, follow-ups, and AR recovery that ensures faster payouts. 					
                                          </div>
                                           <a href="/unified-solution/workforce-planning/"  >Learn More</a>
                                       </div>
                                    </div>
                                    <div class="home-top-features__card-image">
                                       <img  class="service-card-payroll-image" loading="lazy" src="https://apspayroll.com/wp-content/uploads/2025/08/Homepage-Product-1.png"   />
                                    </div>
                                 </div>
                              </div>
                              <div class="col col-md-6 col-xs-12 flex flex-col mb-0">
                                 <div class="home-top-features__card   image-position-bottom home-top-features__card--default"
                                    data-animate-type="fadeInUp">
                                    <div class="home-top-features__card-body">
                                       <h3 class="home-top-features__card-title">Provider Credentialing Services  <span
                                          class="icon-plus"></span><span class="icon-minus"></span></h3>
                                       <div class="home-top-features__card-text-wrapper">
                                          <div class="home-top-features__card-text entry-content">
                                            Speed up onboarding and avoid revenue delays with our professional credential services. 					
                                          </div>
                                           <a href="/unified-solution/workforce-planning/"  >Learn More</a>
                                       </div>
                                    </div>
                                    <div class="home-top-features__card-image">
                                       <img  class="service-card-payroll-image" loading="lazy" src="https://apspayroll.com/wp-content/uploads/2021/10/Attendance.png"  />
                                    </div>
                                 </div>
                                 <div class="home-top-features__card   image-position-right home-top-features__card--default"
                                    data-animate-type="fadeInUp">
                                    <div class="home-top-features__card-body">
                                       <h3 class="home-top-features__card-title">Medical   Billing   Consulting </h3>
                                       <div class="home-top-features__card-text-wrapper">
                                          <div class="home-top-features__card-text entry-content">
                                            				Streamline your billing processes and compliance with expert insights. 	
                                          </div>
                                          <a href="/unified-solution/workforce-planning/"  >Learn More</a>
                                           
                                       </div>
                                    </div>
                                    <div class="home-top-features__card-image">
                                       <img  class="service-card-payroll-image" loading="lazy" src="https://apspayroll.com/wp-content/uploads/2025/07/Graphic.svg"   />
                                    </div>
                                 </div>
                              </div>
                           </div>
                            
                        </div>
                     </div>

        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        <!--<section class="service-three" style=" background-image: url('{{ asset('guest/assets/images/backgrounds/insurace-bg-1.jpg') }}'); background-size: cover;">-->
        <!--    <div class="container">-->
        <!--        <div class="row gutter-y-30">-->
        <!--            <div class="sec-title text-center">-->
        <!--       <h3 class="sec-title__title">{{$homeManageContent->home_service_heading ?? ''}}</h3>-->
               
        <!--       <p class="feature-one__item__text">{{$homeManageContent->home_service_description ?? ''}}-->
        <!--       </p>-->
             
        <!--    </div>-->
        <!--    <div class=" altermed-owl__carousel owl-theme owl-carousel" data-owl-options='{-->
        <!--    "items": 3,-->
        <!--    "margin":10,-->
        <!--    "smartSpeed": 700,-->
        <!--    "loop":true,-->
        <!--    "autoplay": 6000,-->
        <!--    "nav":false,-->
        <!--    "dots":false,-->
        <!--    "navText": ["<span class=\"fa fa-angle-left\"></span>","<span class=\"fa fa-angle-right\"></span>"],-->
        <!--    "responsive":{-->
        <!--        "0":{-->
        <!--            "items":1,-->
        <!--            "margin": 0-->
        <!--        },-->
        <!--        "360":{-->
        <!--            "items":1,-->
        <!--            "margin": 0-->
        <!--        },-->
        <!--        "575":{-->
        <!--            "items":2,-->
        <!--            "margin": 30-->
        <!--        },-->
        <!--        "768":{-->
        <!--            "items":2,-->
        <!--            "margin": 30-->
        <!--        },-->
        <!--        "992":{-->
        <!--            "items": 3,-->
        <!--            "margin": 30-->
        <!--        },-->
        <!--        "1200":{-->
        <!--            "items": 3-->
        <!--        }-->
        <!--    }-->
        <!--    }'>-->
        <!--    @foreach($service as $index => $item)-->
                     
        <!--                <div class="service-three-card wow fadeInUp" data-wow-duration='1500ms' data-wow-delay='0ms'>-->
        <!--                    <div class="service-three-card__inner">-->
        <!--                        <div class="service-three-card__icon">-->
        <!--                            {!! $item->icon ?? '' !!}-->
        <!--                        </div>-->
        <!--                        <div class="service-three-card__content">-->
        <!--                            <div class="service-three-card__img" style="background-image: url('assets/images/service/service-3-bg.jpg');">-->
        <!--                            </div>-->
        <!--                            <h3 class="service-three-card__title">-->
        <!--                                <a href="car-insurance.html">{{ $item->title }}</a>-->
        <!--                            </h3> -->
        <!--                            <p class="service-three-card__info">{{ $item->details }}</p>-->
                                    
        <!--                        </div> -->
        <!--                    </div>-->
        <!--                </div> -->
                    
        <!--            @endforeach-->
        <!--        </div>-->
        <!--        </div> -->
        <!--    </div>  -->
        <!--</section>-->
        
        
  
        
        
<!--        <section class="about-one-home">-->
<!--     <div class="container">       -->
<!--   <div class="about-one-home__shape">-->
<!--      <img src="{{ asset('guest/assets/images/shapes/about-shape-1-3.png') }}" alt="">-->
<!--   </div>-->
   <!-- Feature Start -->
<!--   <section class="feature-one pb-remove">-->
<!--      <div class="container-fluid ">-->
<!--         <div class="row gutter-y-30">-->
<!--            <div class="sec-title text-center">-->
<!--               <h3 class="sec-title__title">{{$homeManageContent->home_service_heading ?? ''}}</h3>-->
               <!-- /.sec-title__tagline -->
<!--               <p class="feature-one__item__text">{{$homeManageContent->home_service_description ?? ''}}-->
<!--               </p>-->
               <!-- /.sec-title__title -->
<!--            </div>-->
<!--@foreach($service as $index => $item)-->
<!--<div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="{{ 100 + ($index * 100) }}ms">-->
<!--   <div class="feature-one__item">-->
      <!-- Icon for desktop -->
<!--      <div class="feature-one__item__icon d-none d-md-block">-->
<!--        <span>-->
<!--    {!! $item->icon ?? '' !!}-->
<!--    </span>-->
<!--      </div>-->
      <!-- Image for mobile -->
<!--     <div class="feature-one__item__icon d-block d-md-none">-->
<!--        <img src="{{ $item->image_path ? asset('storage/'.$item->image_path) : asset('guest/assets/images/service/icon-' . ($index + 1) . '.png') }}" alt="{{ $item->title }}">-->
<!--     </div>-->

<!--      <div class="feature-one__item__content hgt-400px">-->
<!--         <h3 class="feature-one__item__title">{{ $item->title }}</h3>-->
<!--         <p class="feature-one__item__text">{{ $item->details }}</p>-->
<!--      </div>-->
<!--   </div>-->
<!--</div>-->
<!--@endforeach-->

<!--         </div></div>-->
<!--      </div>-->
<!--   </section>-->

  <!-- /.funfact-one -->
   
    
        </section>
         <div class="banner-one mb-5">
            <div class="container">
                <div class="banner-one__inner">
                    <div class="banner-one__bg" style="background-image:url({{ asset('guest/assets/images/backgrounds/banner-one-bg.jpg')}})">
                    </div>
                    <div class="shape-1">
                        <img src="  {{ asset('guest/assets/images/shapes/banner-one-shape.png')}}" alt="shape-1">
                    </div>
                    <h3 class="banner-one__title">Start reporting or tracking your claims</h3>
                    <a class="altermed-btn banner-one-btn" href="contact.html">Contact us<em></em></a>
                </div>
            </div>
        </div>
   <!-- Feature End -->
   
   
   <div class="about-two  pad-top-10 about-two--home" id="about">
    <div class="testimonials-one__bg">
                <img src="     {{ asset('guest/assets/images/shapes/testimonai-one-bg.png') }}" alt="shape">
            </div>
 
   <div class="container">
      <div class="row">
         <div class="col-lg-6 mob-hide">
            <div class="about-two__left wow animated" style="visibility: visible;">
               <div class="about-two__text">
                  altermed
               </div>
               <div class="about-two__img-1">
                  <img src="{{ $about_section_commitment ? asset('storage/' .$about_section_commitment->image_one) : asset('guest/assets/images/resources/about-2-1.jpg') }}" alt="about">
               </div>
               <div class="about-two__img-2">
                  <img src="{{ $about_section_commitment ? asset('storage/' .$about_section_commitment->image_two) : asset('guest/assets/images/resources/about-2-2.jpg') }}" alt="about">
               </div>
            </div>
         </div>
         <div class="col-lg-6">
            <div class="about-two__right">
               <div class="sec-title mb-20btm">

                  <h6 class="sec-title__tagline">AlterMed RCM - Trusted Billing Expert</h6><!-- /.sec-title__tagline -->

                  <h3 class="sec-title__title">{!! $about_section_commitment->title !!}</h3><!-- /.sec-title__title -->
               </div><!-- /.sec-title -->

               <p class="about-two__info">{{ $about_section_commitment->description ?? 'We are a specialized service provider...' }} </p>
              
              
              @if($about_section_commitment && $about_section_commitment->list_items)
    @foreach($about_section_commitment->list_items as $item)
        @php
            // Percentage extract
            preg_match('/(\d+)%/', $item, $matches);
            $percent = $matches[1] ?? 0;

            // Title cleanup (percentage remove kar diya)
            $title = trim(preg_replace('/\s*[-–]?\s*\d+%/', '', $item));
        @endphp

        <div class="about-two__progress">
            <h4 class="about-two__progress--title">{{ $title }}</h4>
            <div class="about-two__progress--bar">
                <div class="about-two__progress--inner count-bar counted" 
                     data-percent="{{ $percent }}%" 
                     style="width: {{ $percent }}%;">
                    <div class="about-two__progress--number count-text">{{ $percent }}%</div>
                </div>
            </div>
        </div>
    @endforeach
@else
    {{-- Default Items --}}
    @php
        $defaultItems = [
            "Our Clean Claim Rate - 98%",
            "Average Revenue Rise - 25%",
            "Fast Reimbursements - 30%",
            "Client Retention Rate - 97%",
        ];
    @endphp

    @foreach($defaultItems as $item)
        @php
            preg_match('/(\d+)%/', $item, $matches);
            $percent = $matches[1] ?? 0;
            $title = trim(preg_replace('/\s*[-–]?\s*\d+%/', '', $item));
        @endphp

        <div class="about-two__progress">
            <h4 class="about-two__progress--title">{{ $title }}</h4>
            <div class="about-two__progress--bar">
                <div class="about-two__progress--inner count-bar counted" 
                     data-percent="{{ $percent }}%" 
                     style="width: {{ $percent }}%;">
                    <div class="about-two__progress--number count-text">{{ $percent }}%</div>
                </div>
            </div>
        </div>
    @endforeach
@endif
             
            </div>
         </div>
      </div>
   </div>
</div>
 


   
   
   
   
   
   
   




<!-- /.about-one-home -->
<section class="service-one service-home-one pt-90 pb-90" style="background-image: url('{{ asset('guest/assets/images/backgrounds/insurace-bg-10.jpg') }}');">
   <div class="container">
      <div class="sec-title">
        
         <!-- /.sec-title__tagline -->
         <h2 class="sec-title__title pbb-30 title-white">{{$homeManageContent->home_why_choose_h1 ?? ''}}  <br> {{$homeManageContent->home_why_choose_h2 ?? ''}} </h2>
         <!-- /.sec-title__title -->
      </div>
      <!-- /.sec-title -->
      <div class="row gutter-y-30">
         @foreach($why_choose as $index => $item)
         <div class="col-md-6 col-lg-3">
            <div class="service-card wow fadeInUp hgt-400" data-wow-duration='1500ms' data-wow-delay='{{ 5 + $index }}ms'>
               <div class="service-card__image">
                  <img src="{{ asset('storage/' .$item->image_path) }}" alt="{{ $item->title }}">
                  <div class="service-card__icon">
                    {!! $item->icon !!}
                  </div>
               </div>
               <div class="service-card__content">
                  <h3 class="service-card__title">
                     {{ $item->title }}
                  </h3>
                  <p class="service-card__info">{{ $item->details }}</p>
               </div>
            </div>
         </div>
         @endforeach
      </div>

      <!-- /.row -->
   </div>
   <!-- /.container -->
</section>
 <div class="about-three pt-90 pb-90" id="about">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6">
                        <div class="about-three__left">
                            <div class="about-one__content">
                                <div class="sec-title">

                                    <h6 class="sec-title__tagline">Simplifying Billing & Credentialing </h6><!-- /.sec-title__tagline -->

                                    <h3 class="sec-title__title">{!! $about_section_simplify->title !!}</h3><!-- /.sec-title__title -->
                                </div><!-- /.sec-title -->
                                <p class="about-one__text">{!! $about_section_simplify->description !!}</p>
                             
                                
                                @foreach($about_section_simplify->list_items as $item)
                                <div class="about-one__feature">
                                    <div class="about-one__feature__icon">
                                        {{-- ✅ Agar pura <i> tag JSON me save hai --}}
                                        {!! is_array($item) ? ($item['icon'] ?? '<i class="icon-employees"></i>') : '<i
                                            class="icon-employees"></i>' !!}
                                    </div>
                                    <div class="about-one__feature__content">
                                        <h4 class="about-one__feature__title">
                                            {{ is_array($item) ? ($item['title'] ?? $item) : $item }}
                                        </h4>
                                        <p class="about-one__feature__info">
                                            {{ is_array($item) ? ($item['description'] ?? 'We’re here to support you from start to finish.') : 'We’re here to support you from start to finish.' }}
                                        </p>
                                    </div>
                                </div>
                                @endforeach


                                <div class="about-one__btns">
                                    <a href="{!! $about_section_simplify->button_link !!}" class="altermed-btn">{!! $about_section_simplify->button_text !!}<em style="top: 63.6333px; left: 49px;"></em></a>
                                    <a href="tel:{{ $globalContactDetails['phone2'] ?? '' }}" class="about-one__call">
                                        <i class="icon-calling"></i>
                                        <span>Call experts <br>
                                            <b>{{ $globalContactDetails['phone2'] ?? '' }}</b></span>
                                    </a>
                                </div>
                            </div><!-- /.why-choose-two__content -->
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="about-three__right w-100">
                            <div class="about-three__img-1 w-100">
                                <div class="img ">
                                    <img class="w-100" src="{{ $about_section_simplify->image_one ? asset('storage/'.$about_section_simplify->image_one) : asset('guest/assets/images/resources/about-3-10.png') }}" alt="">
                                    
                                    <!-- {{ $about_section_simplify->image_one ? asset('storage/'.$about_section_simplify->image_one) : asset('guest/assets/images/resources/about-3-10.png') }} -->
                                </div>
                                <div class="about-three__counter">
                                    <div class="about-three__counter__map">
                                        <img src="{{asset('guest/assets/images/shapes/map-shape.png ')}}" alt="">
                                    </div>
                                    <div class="count-box">
                                        <span class="about-three__count count-text" data-stop="{!! $about_section_simplify->experience_years !!}" data-speed="1500"> </span>
                                    </div>
                                    <h3 class="about-three__counter__title">{!! $about_section_simplify->experience_text !!}</h3>
                                </div>
                            </div>
                            <div class="about-three__img-2 w-100">
                                <img src="{{ $about_section_simplify->image_two ? asset('storage/'.$about_section_simplify->image_two) : asset('guest/assets/images/resources/about-3-2.png') }}" alt="">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
 

 

<!--@if(!empty($homeCta))-->
<!--    @foreach($homeCta as $cta)-->
<!--        <div class="banner-one">-->
<!--            <div class="container">-->
<!--                <div class="banner-one__inner">-->
<!--                    <div class="banner-one__bg" -->
<!--                         style="background-image: url('{{ asset('guest/assets/images/backgrounds/banner-one-bg.jpg') }}')">-->
<!--                    </div>-->
<!--                    <div class="shape-1">-->
<!--                        <img src="{{ asset('guest/assets/images/shapes/banner-one-shape.png') }}" alt="shape-1">-->
<!--                    </div>-->

<!--                    <h3 class="banner-one__title">{{ $cta['title'] }}</h3>-->
<!--                    <a class="altermed-btn banner-one-btn" href="{{ $cta['button_url'] }}">-->
<!--                        {{ $cta['button_text'] }}<em></em>-->
<!--                    </a>-->
<!--                </div>-->
<!--            </div>-->
<!--        </div>-->
<!--    @endforeach-->
<!--@endif-->



@endsection
@section('page_level_script')
@endsection
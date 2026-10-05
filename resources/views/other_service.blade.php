@extends('layouts.guest.master')


@section('page_level_style')

<style>
body { scroll-behavior: smooth; }

  .list-group-item.active {
    background: #007bff;
    color: #fff;
    border-color: #007bff;
  }

  .content-block {
    padding: 40px 0;
    border-bottom: 1px solid #eee;
  }
    .page-wrapper {
        overflow: visible;
    }

    .sticky-top {
        z-index: 2;
    }

    .service-sidebar__nav li.active a {
        color: #fff;
        background: var(--altermed-primary, #2b2b5e);
        font-weight: bold;
    }

    .service-banner {
        padding-bottom: 46px;
    }
</style>


@section('content')

  <div id="smooth-content">

<section data-bgcolor="#fff" class="inner-masthead service-detail-inner-masthead" data-inner-masthead style="background-image:url('{{ asset('guest/assets/images/backgrounds/pattern-bg.webp')}}'); background-size:cover;">

    <div class="container">

        <div class="row ">
            <div class="col-lg-8  ">

                <h1> {!! $licensingIntro ? $licensingIntro->heading : 'Simplify Your <br /><strong>Medical Licensing Process</strong>' !!} </h1>
                <p>{{ $licensingIntro ? $licensingIntro->description : 'We make licensing simple and efficient for healthcare providers and practices across the US. AlterMed RCM reduces your administrative burden by getting you licensed faster.' }}</p>
                <div class="d-flex justify-content-start align-items-center mt-3">
                    <button class="btn unique-btn px-4 fw-medium">
                        {{ $licensingIntro ? $licensingIntro->button_text : 'Know More' }}
                    </button>
                </div>


            </div>
            <div class="col-lg-4  ">

               <form class="login100-form validate-form" action="{{ route('other-service.quote.store') }}" method="POST">
     @csrf
     <span class="login100-form-title p-b-49">
      Get a Quote
     </span>

					<div class="wrap-input100 validate-input m-b-23" data-validate = "Name is reauired" required>
						<span class="label-input100">Name</span>
						<input class="input100" type="text" name="Name" placeholder="Type your Name">
						<span class="focus-input100" data-symbol="&#xf206;"></span>
					</div>

					<div class="wrap-input100 validate-input" data-validate="Mobile Number is required">
						<span class="label-input100">Mobile Number</span>
						<input class="input100" type="text" name="Mobile Number" placeholder="Type your Mobile Number">
						<span class="focus-input100" data-symbol="&#xf190;"></span>
					</div>
					<div class="wrap-input100 validate-input" data-validate="Email ID is required">
						<span class="label-input100">Email ID</span>
						<input class="input100" type="email" name="Email ID" placeholder="Type your Email ID">
						<span class="focus-input100" data-symbol="&#xf190;"></span>
					</div>
					 <div class="wrap-input100 validate-input" data-validate="Requirement is required">
						<span class="label-input100">Requirement</span>
						<input class="input100" type="text-area" name="Requirement" placeholder="Type your Requirement">
						<span class="focus-input100" data-symbol="&#xf190;"></span>
					</div>
					
					<div class="container-login100-form-btn">
						<div class="wrap-login100-form-btn">
							<div class="login100-form-bgbtn"></div>
							<button class="login100-form-btn">
								Submit
							</button>
						</div>
					</div>
				</form>
            </div>
        </div>


    </div>
</section>






<section data-bgcolor="linear-gradient(108.07deg, #005bff -21.16%, #003189 99.18%)" class="service-listing lightblue"
    data-service-listing>
    <div class="container">
        <div class="row">
            <div class="col-lg-10 col-12">
                <div class="service-listing--heading">
                    <h2 data-title> {!! $licensingWhyChoose ? $licensingWhyChoose->heading : 'Why Choose AlterMed RCM <br><span>for Licensing?</span>' !!} </h2>
                    <p data-title>{{ $licensingWhyChoose ? $licensingWhyChoose->description : 'AlterMed RCM makes the complex licensing process effortless and handles the paperwork seamlessly. We ensure accuracy and compliance in every step of the process. Even after the licensing process is complete, our team stays on top of renewals and regulatory requirements.' }}</p>
                </div>

                <div class="service-listing--wrapper">

                    @if($licensingWhyChoose && $licensingWhyChoose->items)
                        @foreach($licensingWhyChoose->items as $item)
                            <div class="service-listing--wrapper-card">
                                <h3 class="h6-size headline">{{ $item->name }}</h3>
                                <p class="caption-1">{{ $item->short_description }}</p>
                            </div>
                        @endforeach
                    @else
                        <div class="service-listing--wrapper-card">
                            <h3 class="h6-size headline">Expert Team</h3>
                            <p class="caption-1">We have years of experience in handling state and federal licensing requirements and meeting your requirements proficiently.</p>
                        </div>
                        <div class="service-listing--wrapper-card">
                            <h3 class="h6-size headline">Fast Processing</h3>
                            <p class="caption-1">Our services are focused towards minimizing errors during the licensing process and reducing processing delays.</p>
                        </div>
                        <div class="service-listing--wrapper-card">
                            <h3 class="h6-size headline">Comprehensive Support</h3>
                            <p class="caption-1">We offer complete support in terms of making hassle-free renewals available and keeping your licenses current.</p>
                        </div>
                        <div class="service-listing--wrapper-card">
                            <h3 class="h6-size headline">Tailored Approach</h3>
                            <p class="caption-1">We understand that every licensing requirement is different and offer specialized support to healthcare providers, practices, and facilities.</p>
                        </div>
                        <div class="service-listing--wrapper-card">
                            <h3 class="h6-size headline">Regulatory Compliance</h3>
                            <p class="caption-1">We ensure that all applications, renewals, and multi-state filings are fully compliant with federal and state regulations.</p>
                        </div>
                        <div class="service-listing--wrapper-card">
                            <h3 class="h6-size headline">Tracking & Visibility</h3>
                            <p class="caption-1">Our team monitors all licenses and certifications nearing expiration to maintain complete visibility. License renewals are also part of this step.</p>
                        </div>
                    @endif


                     

                </div>

            </div>
        </div>
    </div>
</section>






  <section data-bgcolor="#fff" class="tech-stack" data-tech-stack>
<div class="container py-5">
  <div class="row">
<div class="col-12 "> <div class="tech-stack--heading">
              <h2 data-title> {!! $licensingService ? $licensingService->heading : 'Our <br><span>Licensing Services</span>' !!} </h2>
              <p data-title>{{ $licensingService ? $licensingService->description : 'AlterMed RCM offers a range of licensing services covering the needs of individual practitioners and medical facilities. Our services are comprehensive, fast, and end-to-end designed to accelerate your operational process. Here’s the list of our services:' }}</p>
            </div></div>
    <!-- LEFT SIDE NAV -->
    <div class="col-md-4">
      <div class="list-group main-heading-lists sticky-top" id="leftNav" style="top:150px;">
        @if($licensingService && $licensingService->categories)
          @foreach($licensingService->categories as $index => $category)
            <a href="#block{{ $index + 1 }}" class="list-group-item">{{ $category->name }} <div class="inner"></div></a>
          @endforeach
        @else
          <a href="#block1" class="list-group-item">Medical & Allied Health Licensing <div class="inner"></div></a>
          <a href="#block2" class="list-group-item">Facility & Organizational Licensing<div class="inner"></div></a>
          <a href="#block3" class="list-group-item">DEA & Controlled Substance (CDS) Licensing <div class="inner"></div></a>
          <a href="#block4" class="list-group-item">Multi-State & Compact Licensing<div class="inner"></div></a>
          <a href="#block5" class="list-group-item">License Renewals, Maintenance & Tracking <div class="inner"></div></a>
          <a href="#block6" class="list-group-item">International & Out-of-State Provider Support <div class="inner"></div></a>
        @endif
      </div>
    </div>

    <!-- RIGHT SIDE CONTENT -->
    <div class="col-md-8 ">
      @if($licensingService && $licensingService->categories)
        @foreach($licensingService->categories as $index => $category)
          <div class="content-block tech-stack--wrapper-outter-card" id="block{{ $index + 1 }}">
            <h6>{{ $category->name }}</h6>
            @if($category->short_description)
              <p class="caption-1">{{ $category->short_description }}</p>
            @endif
            <div class="tech-stack--wrapper-outter-card-languages">
              <div class="tech-stack--wrapper-outter-card-languages-container">
                @foreach($category->items as $item)
                  <div class="tech-stack--wrapper-outter-card-languages-container-box">
                    <div class="tech-stack--wrapper-outter-card-languages-container-box-logo">
                      <img src="{{ $item->image ? asset('storage/' . $item->image) : asset('guest/assets/images/icons/default.webp') }}" alt="{{ $item->heading }}">
                    </div>
                    <div class="tech-stack--wrapper-outter-card-languages-container-box-content">
                      <h6 class="sub-headline">{{ $item->heading }}</h6>
                      @if($item->short_description)
                        <p class="caption-1">{{ $item->short_description }}</p>
                      @endif
                    </div>
                  </div>
                @endforeach
              </div>
            </div>
          </div>
        @endforeach
      @else
        <div class="content-block tech-stack--wrapper-outter-card" id="block1">
          <h6>Medical & Allied Health Licensing</h6>
          <div class="tech-stack--wrapper-outter-card-languages">
            <div class="tech-stack--wrapper-outter-card-languages-container">
              <div class="tech-stack--wrapper-outter-card-languages-container-box">
                <div class="tech-stack--wrapper-outter-card-languages-container-box-logo">
                  <img src="{{ asset('guest/assets/images/icons/physician.webp') }}">
                </div>
                <div class="tech-stack--wrapper-outter-card-languages-container-box-content">
                  <h6 class="sub-headline">Physicians (MD, DO)</h6>
                </div>
              </div>
              <!-- Add more static items as needed -->
            </div>
          </div>
        </div>
        <!-- Add other static blocks -->
      @endif
    </div>

  </div>
</div>

</section>



 

    










 

     







  </div>






@endsection




@endsection
 
@section('page_level_script')
 
 <script>
const blocks = document.querySelectorAll(".content-block");
const navLinks = document.querySelectorAll("#leftNav a");

const observer = new IntersectionObserver(entries => {
  entries.forEach(entry => {
    if (entry.isIntersecting) {
      navLinks.forEach(link => link.classList.remove("active"));
      document
        .querySelector(`#leftNav a[href="#${entry.target.id}"]`)
        .classList.add("active");
    }
  });
}, { threshold: 0.4 });

blocks.forEach(block => observer.observe(block));
</script>
  
 
@endsection
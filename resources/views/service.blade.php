@extends('layouts.guest.master')
  @section('title',$servicePage->meta_title)
@section('description',$servicePage->meta_description)
  
@section('page_level_style')

<style>
    .page-wrapper{
        overflow: visible;
    }
    .sticky-top{
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


<section class="page-header">
    <div class="page-header__bg"
         style="background-image: url('{{ $servicePage->service_banner_image
             ? asset('storage/'.$servicePage->service_banner_image)
             : asset('images/backgrounds/page-header-bg-1-1.jpg') }}');">
    </div>

    <div class="container">
        <h2 class="page-header__title">{{ $servicePage->service_banner_title ?? '' }}</h2>
        <ul class="modins-breadcrumb list-unstyled">
            <li>{{ $servicePage->service_banner_details ?? '' }}</li>
        </ul>
    </div>
</section>


 <!--<section class="page-header">-->
 <!--           <div class="page-header__bg"></div>-->
          
 <!--           <div class="container">-->
 <!--               <h2 class="page-header__title">{{ $servicePage->service_banner_title ?? '' }}</h2>-->
 <!--               <ul class="modins-breadcrumb list-unstyled">-->
 <!--                   <li>{{ $servicePage->service_banner_details ?? '' }}</li>-->

 <!--               </ul>-->
 <!--           </div>-->
 <!--       </section>-->

        <!-- Flash Messages -->
        <!-- @if(session('success'))
            <div class="alert alert-success alert-dismissible fade show" role="alert" style="margin: 20px;">
                <i class="fas fa-check-circle"></i> {{ session('success') }}
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
        @endif -->
<!-- 
        @if(session('error'))
            <div class="alert alert-danger alert-dismissible fade show" role="alert" style="margin: 20px;">
                <i class="fas fa-exclamation-triangle"></i> {{ session('error') }}
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
        @endif -->

        <section class="service-details">
            <div class="container" id="active">
                <div class="row gutter-y-30">
                    <div class="col-md-12 col-lg-4">
                        <div class="service-sidebar sticky-top">
                            <div class="service-sidebar__single">
                               <ul class="list-unstyled service-sidebar__nav">
    @foreach($servicePages as $page)
        <li class="{{ request()->is('service/'.$page->slug) ? 'active' : '' }}">
            <a href="{{ route('service.show', $page->slug) }}#active">
                {{ $page->service_banner_title ?? $page->service_title ?? 'Service' }}
            </a>
        </li>
    @endforeach
</ul><!-- /.list-unstyled service-sidebar__nav -->

                            </div><!-- /.service-sidebar__single -->

                            <div class="service-sidebar__single ">
                                <div class="service-sidebar__contact background-base text-center" style="background-image: url(assets/images/service/sidebar-service-bg.jpg);">
                                    <div class="service-sidebar__contact__icon">
                                        <i class="icon-phone-call"></i>
                                    </div><!-- /.service-sidebar__contact__icon -->
                                    <h3 class="service-sidebar__contact__title">Quick billing
                                        proccess</h3><!-- /.service-sidebar__contact__title -->
                                    <p class="service-sidebar__contact__number">
                                        <span>Talk to an expert</span> <br>
                                        <a href="tel:{{$contactDetails['phone2']}}">{{ $contactDetails['phone2'] ?? '' }}</a>
                                    </p><!-- /.service-sidebar__contact__number -->
                                </div><!-- /.service-sidebar__contact -->
                            </div>

                            <div class="service-sidebar__single">
                                <div class="service-sidebar__discount background-gray">
                                    <div class="service-sidebar__discount__content">
                                          
                                        <!-- /.service-sidebar__contact__icon -->
                                        <h3 class="service-sidebar__discount__title">
                                           <i class="icon-placeholder"></i>  {{ $contactDetails['office_address'] ?? '' }}
                                        </h3><!-- /.service-sidebar__discount__title -->
                                        
                                    </div><!-- /.service-sidebar__discount__content -->
                                </div><!-- /.service-sidebar__discount -->
                             
                            </div><!-- /.service-sidebar__single -->
                        </div><!-- /.sidebar -->
                    </div><!-- /.col-md-12 col-lg-4 -->
                    <div class="col-md-12 col-lg-8">
                        <div class="service-details__content">
                            <div class="service-details__thumbnail">
                                <img src="{{ $servicePage->service_image ? asset('storage/' . $servicePage->service_image) : asset('guest/assets/images/shapes/service-1.jpg') }}" alt="Service" class="w-100">
                            </div><!-- /.service-details__thumbnail -->
                            <h3 class="service-details__title">{{ $servicePage->service_title ?? 'Redefine Your Internal RCM Workflow' }}</h3><!-- /.service-details__title -->
                            <p class="service-details__text">{!! $servicePage->service_description ?? 'Don’t let the complexity of medical coding and billing stop your healthcare practice from achieving positive cash flow...' !!}</p>
                          
<!-- /.service-details__text -->
                            <h3 class="service-details-list__title">{{ $servicePage->acquire_heading ?? 'Acquire Coding and Billing Accuracy' }}</h3><!-- /.service-details__title -->
                            <ul class="list-unstyled service-details__list">
                                @if($servicePage->acquire_title && is_array($servicePage->acquire_title))
                                    @foreach($servicePage->acquire_title as $item)
                                        <li>
                                            <i class="fa fa-check-circle"></i>
                                           {{ $item }}
                                        </li>
                                    @endforeach
                                @else
                                    <li>
                                        <i class="fa fa-check-circle"></i>
                                       Get certified coding expertise in the latest coding standards for CPT, ICD-10 & HCPCS
                                    </li>
                                    <li>
                                        <i class="fa fa-check-circle"></i>
                                       Say bye to coding errors & issues with our thorough code review & audit services

                                    </li>
                                    <li>
                                        <i class="fa fa-check-circle"></i>
                                        Achieve accurate translation of medical services with our code mapping technique
                                    </li>
                                @endif
                            </ul><!-- /.list-unstyled team-details__list -->
                            <ul class="list-unstyled service-details__process">
                                @if($servicePage->icon && is_array($servicePage->icon) && count($servicePage->icon) > 0)
                                    @foreach($servicePage->icon as $index => $icon)
                                        <li>
                                            <div class="service-details__process__top">
                                              @if(!empty($icon))
                                                <img src="{{ asset('storage/' . $icon) }}" alt="Icon" width="40" height="40">
                                            @endif
                                                <h4 class="service-details__process__title">{{ $servicePage->icon_title[$index] ?? 'Title' }}</h4><!-- /.service-details__process__title -->
                                            </div><!-- /.service-details__process__top -->
                                            <p class="service-details__process__text">{{ $servicePage->icon_heading[$index] ?? 'Description' }}
</p>
                                            <!-- /.service-details__process__text -->
                                        </li>
                                    @endforeach
                                @else
                                    <li>
                                        <div class="service-details__process__top">
                                            <i class="service-details__process__icon icon-team"></i>
                                            <h4 class="service-details__process__title">Coding Expertise</h4><!-- /.service-details__process__title -->
                                        </div><!-- /.service-details__process__top -->
                                        <p class="service-details__process__text">Experience coding expertise that decodes essential details of rendered services without complications.
</p>
                                        <!-- /.service-details__process__text -->
                                    </li>
                                    <li>
                                        <div class="service-details__process__top">
                                            <i class="service-details__process__icon icon-art"></i>
                                            <h4 class="service-details__process__title">Billing Precision  </h4><!-- /.service-details__process__title -->
                                        </div><!-- /.service-details__process__top -->
                                        <p class="service-details__process__text">Get Professionals to identify billing obstacles, reduce manual errors, streamline claim submission, and prevent denials.
</p>
                                        <!-- /.service-details__process__text -->
                                    </li>
                                @endif
                            </ul><!-- /.list-unstyled service-details__process -->
                            <p class="service-details__text">{{ $servicePage->description ?? 'AlterMed RCM is your reliable medical billing company...' }} </p>
                        </div><!-- /.service-details__content -->

                        <div class="service-details__faq" id="faq">
                            <div class="faq-page__accordion modins-accrodion" data-grp-name="modins-accrodion">
                                @if($servicePage->faq_title && is_array($servicePage->faq_title) && count($servicePage->faq_title) > 0)
                                    @foreach($servicePage->faq_title as $index => $title)
                                        <div class="accrodion {{ $index == 1 ? 'active' : '' }}">
                                            <div class="accrodion-title">
                                                <h4>
                                                    {{ $title }}
                                                    <span class="accrodion-title__icon"></span><!-- /.accrodion-title__icon -->
                                                </h4>
                                            </div><!-- /.accordian-title -->
                                            <div class="accrodion-content">
                                                <div class="inner">
                                                    <p>{{ $servicePage->faq_heading[$index] ?? 'Description' }}</p>
                                                </div><!-- /.accordian-content -->
                                            </div>
                                        </div><!-- /.accordian-item -->
                                    @endforeach
                                @else
                                    <div class="accrodion">
                                        <div class="accrodion-title">
                                            <h4>
                                                The Role of Timely Claim Submission Along with Proper Coding
                                                <span class="accrodion-title__icon"></span><!-- /.accrodion-title__icon -->
                                            </h4>
                                        </div><!-- /.accordian-title -->
                                        <div class="accrodion-content">
                                            <div class="inner">
                                                <p>At AlterMed RCM, we work on all aspects of medical coding and billing, including timely submission of claims to reduce the scope of denials. Our team always stays proactive and alert in terms of maintaining a reasonable timeline of claims.
</p>
                                            </div><!-- /.accordian-content -->
                                        </div>
                                    </div><!-- /.accordian-item -->
                                    <div class="accrodion active">
                                        <div class="accrodion-title">
                                            <h4>Following Industry Regulations to Make Coding & Billing Better

                                                <span class="accrodion-title__icon"></span><!-- /.accrodion-title__icon -->
                                            </h4>
                                        </div><!-- /.accordian-title -->
                                        <div class="accrodion-content">
                                            <div class="inner">
                                                <p>We add the billing safety net throughout your administrative process by following necessary industry regulations. This helps prevent persistent coding inaccuracies and protect patient data from misuse. </p>
                                            </div><!-- /.accordian-content -->
                                        </div>
                                    </div><!-- /.accordian-item -->
                                    <div class="accrodion">
                                        <div class="accrodion-title">
                                            <h4>
                                               Medical Billing Transparency and Patient Satisfaction
                                                <span class="accrodion-title__icon"></span><!-- /.accrodion-title__icon -->
                                            </h4>
                                        </div><!-- /.accordian-title -->
                                        <div class="accrodion-content">
                                            <div class="inner">
                                                <p>Once we partner, your healthcare practice will experience complete transparency and promptness in communication. We also guarantee more patient satisfaction with easy-to-understand statements and invoicing.
</p>
                                            </div><!-- /.accordian-content -->
                                        </div>
                                    </div><!-- /.accordian-item -->
                                @endif
                            </div>
                        </div>
                    </div><!-- /.col-md-12 col-lg-8 -->
                </div><!-- /.row -->
            </div><!-- /.container -->
        </section><!-- /.service-details -->
 <section class="service-banner">
            <div class="container">
                <div class="row justify-content-end">
                    <div class="service-banner__inner">
                        <div class="service-banner__img">
                            <img src="{{ $servicePage->image_why_choose ? asset('storage/' . $servicePage->image_why_choose) : asset('guest/assets/images/service/service-banner.jpg') }}" alt="banner">
                        </div>
                    </div>
                    <div class="col-lg-7">
                        <div class="service-banner__content">
                            <div class="shape-1">
                                <img src="      {{ asset('guest/assets/images/shapes/servvice-baner-1.png') }}" alt="banner">
                            </div>
                            <h3 class="service-banner__title">{{ $servicePage->why_choose_title ?? 'Why choose us?' }}</h3>
                            <p class="service-banner__info">{{ $servicePage->why_choose_heading ?? 'At Altermed RCM, we go beyond billing...' }}</p>
                            <ul class="service-banner__list">
                                @if($servicePage->whychoos_name && is_array($servicePage->whychoos_name))
                                    @foreach($servicePage->whychoos_name as $item)
                                        <li><i class="fas fa-check-circle"></i>{{ $item }}</li>
                                    @endforeach
                                @else
                                    <li><i class="fas fa-check-circle"></i>Specialty-Specific Expertise – Tailored billing and coding solutions </li>
                                    <li><i class="fas fa-check-circle"></i>HIPAA-Compliant Systems – Your data is secure with our compliant processes</li>
                                    <li><i class="fas fa-check-circle"></i>Proactive Denial Management – Prevent revenue loss with denial prevention strategies</li>
                                @endif
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </section>



@endsection




@endsection
@section('page_level_script')
@endsection
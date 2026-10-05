@extends('layouts.guest.master')

@section('title',$about_page->meta_title)
@section('description',$about_page->meta_description)
@section('og_image', asset($about_page->about_banner_image))

@section('page_level_style')
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@tabler/icons-webfont@latest/dist/tabler-icons.min.css" />
@endsection

@section('content')

<section class="page-header">
    <div class="page-header__bg"></div>
    <div class="container">
        <h2 class="page-header__title">{{ $about_page->about_title ?? 'About Us' }}</h2>
        <ul class="altermed-breadcrumb list-unstyled">
            <li><a href="{{('/')}}">Home</a></li>
            <li><span>About</span></li>
        </ul><!-- /.thm-breadcrumb list-unstyled -->
    </div>
</section>

<section class="about-one">
    <div class="container">
        <div class="row">
            <!-- left image -->
            <div class="col-lg-6">
                <div class="about-one__left">
                    <div class="about-one__img">
                        <img src="{{ $about_page->image_one ? asset('storage/'.$about_page->image_one) : asset('guest/assets/images/resources/about-1-1.png') }}"
                            alt="">
                        <div class="about-one__shape-1">
                            <img src="{{ asset('guest/assets/images/shapes/about-one-shape.png') }}" alt="">
                        </div>
                        <div class="about-one__shape-2">
                            <img src="{{ asset('guest/assets/images/icon/logo-icon.png') }}" alt="logo-icon">
                        </div>
                    </div>
                </div>
            </div>
            <!-- right content -->
            <div class="col-lg-6">
                <div class="about-one__content">
                    <div class="sec-title">
                        <h6 class="sec-title__tagline">About company</h6>
                        <h3 class="sec-title__title">
                            {{ $about_page->title ?? 'Providing the best insurance policy to customers' }}</h3>
                    </div>
                    <p class="about-one__text">
                        {{ $about_page->description ?? 'We are dedicated to providing the most reliable and affordable insurance policies for individuals, families, and businesses. Our team ensures quality service, trust, and long-term customer satisfaction.' }}
                    </p>

                    @if(!empty($about_page->list_items))
                    @foreach($about_page->list_items as $item)
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
                    @else
                    <div class="about-one__feature">
                        <div class="about-one__feature__icon">
                            <i class="icon-employees"></i>
                        </div>
                        <div class="about-one__feature__content">
                            <h4 class="about-one__feature__title">Protect your life</h4>
                            <p class="about-one__feature__info">We’re here to support you from start to finish.</p>
                        </div>
                    </div>
                    @endif

                    <div class="about-one__btns">
                        <a href="{{ $about_page->button_link ?? url('services') }}"
                            class="altermed-btn altermed-btn--base">{{ $about_page->button_text ?? 'Discover More' }}<em></em></a>
                        <!--<a href="tel:+92(003)68-0900" class="about-one__call">-->
                        <!--    <i class="icon-calling"></i>-->
                        <!--    <span>Call experts <br>-->
                        <!--        <b>+92 (003) 68-0900</b></span>-->
                        <!--</a>-->
                    </div>


                </div>
            </div>
        </div>
    </div>
</section>


@if(!empty($about_page->about_page_cta))
@foreach($about_page->about_page_cta as $cta)
<div class="banner-one">
    <div class="container">
        <div class="banner-one__inner">
            <div class="banner-one__bg"
                style="background-image:url('{{ asset('guest/assets/images/backgrounds/banner-one-bg.jpg')}}')">
            </div>
            <div class="shape-1">
                <img src="{{ asset('guest/assets/images/shapes/banner-one-shape.png')}}" alt="shape-1">
            </div>
            <h3 class="banner-one__title">{{ $cta['heading'] ?? 'CTA Heading' }}</h3>
            <a class="altermed-btn banner-one-btn" href="{{$cta['button_link']}}">{{ $cta['button_text'] ?? 'Learn More' }}<em
                    style="top: 50.625px; left: 75.125px;"></em></a>
        </div>
    </div>
</div>
@endforeach
@endif


<!-- Testimonials Section -->

<section class="testimonials-one">
    <div class="testimonials-one__bg"
        style="background-image: url('{{ asset('guest/assets/images/backgrounds/testimonail-one-bg.jpg')}}');"></div>
    <div class="container-fluid">
        <div class="testimonials-one__heading">
            <div class="sec-title">

                <h6 class="sec-title__tagline">Our testimonials</h6><!-- /.sec-title__tagline -->

                <h3 class="sec-title__title">{{ $testimonial->heading ?? '' }}</h3><!-- /.sec-title__title -->
            </div><!-- /.sec-title -->
            <p class="testimonials-one__info">{{ $testimonial->description ?? '' }}</p>
        </div>
        <div class="testimonials-one__carousel modins-owl__carousel modins-owl__carousel--with-shadow modins-owl__carousel--basic-nav owl-carousel owl-loaded owl-drag"
            data-owl-options="{
			&quot;items&quot;: 1,
			&quot;margin&quot;: 0,
			&quot;loop&quot;: false,
			&quot;smartSpeed&quot;: 700,
			&quot;nav&quot;: false,
			&quot;navText&quot;: [&quot;&lt;span class=\&quot;fa fa-angle-left\&quot;&gt;&lt;/span&gt;&quot;,&quot;&lt;span class=\&quot;fa fa-angle-right\&quot;&gt;&lt;/span&gt;&quot;],
			&quot;dots&quot;: true,
			&quot;autoplay&quot;: false,
			&quot;responsive&quot;: {
				&quot;0&quot;: {
					&quot;items&quot;: 1
				},
				&quot;576&quot;: {
					&quot;items&quot;: 2,
					&quot;margin&quot;:30
				},
				&quot;992&quot;: {
					&quot;items&quot;: 2,
					&quot;margin&quot;: 30
				}
			}
		}">
            <!-- /.item -->
            <!-- /.item -->
            <!-- /.item -->
            <!-- /.item -->
            <!-- /.item -->
            <!-- /.item -->
            <div class="owl-stage-outer">
                <div class="owl-stage"
                    style="transform: translate3d(-3170px, 0px, 0px); transition: 0.7s; width: 4755px;">
                    
                    @foreach($testimonial->items as $item)

                    <div class="owl-item" style="width: 762.5px; margin-right: 30px;">
                        <div class="item">
                            <div class="testimonials-card wow fadeInUp animated" data-wow-duration="1500ms"
                                data-wow-delay="100ms"
                                style="visibility: visible; animation-duration: 1500ms; animation-delay: 100ms; animation-name: fadeInUp;">
                                <div class="testimonials-card__inner">
                                    <div class="shape-one"><img src="{{ asset('guest/assets/images/shapes/testi-shape-one.png')}}"
                                            alt="shape"></div>
                                    <div class="testimonials-card__top">
                                        <div class="testimonials-card__image">
                                            <img src="{{ asset('storage/' . ($item['image'] ?? '')) }}" 
     alt="{{ $item['name'] ?? '' }}">

                                        </div><!-- /.testimonials-card__image -->
                                        <div class="testimonials-card__top__left">
                                            <div class="testimonials-card__rating">
                                                @php
                                                    $rating = isset($item['rating']) ? (int)$item['rating'] : 5;
                                                    $rating = max(0, min(5, $rating)); // Ensure rating is between 0-5
                                                @endphp
                                                @for($i = 1; $i <= 5; $i++)
                                                    @if($i <= $rating)
                                                        <i class="fa fa-star text-warning"></i>
                                                    @else
                                                        <i class="fa fa-star text-muted"></i>
                                                    @endif
                                                @endfor
                                                @if($rating > 0 && $rating < 5)
                                                    <span class="ms-1 text-muted small">({{ $rating }}/5)</span>
                                                @endif
                                            </div><!-- /.testimonials-card__rating -->
                                            <h3 class="testimonials-card__name">
                                                {{ $item['name'] ??  '' }}
                                            </h3><!-- /.testimonials-card__name -->
                                            <p class="testimonials-card__designation">{{ $item['designation'] ?? ''  }}</p>
                                            <!-- /.testimonials-card__designation -->
                                        </div><!-- /.testimonials-card__top__left -->
                                    </div><!-- /.testimonials-card__top -->
                                    <div class="testimonials-card__content">
                                        {{ $item['message'] ?? '' }}
                                    </div><!-- /.testimonials-card__content -->
                                </div><!-- /.testimonials-card__inner -->
                            </div><!-- /.testimonials-card -->
                        </div>
                    </div>

                    @endforeach


                </div>
            </div>
            <div class="owl-nav disabled">
                <button type="button" role="presentation" class="owl-prev" aria-label="carousel button"><span
                        class="fa fa-angle-left"></span></button><button type="button" role="presentation"
                    class="owl-next" aria-label="carousel button"><span class="fa fa-angle-right"></span></button>
            </div>
            <div class="owl-dots"><button role="button" class="owl-dot"
                    aria-label="carousel button"><span></span></button>
                <bu tton role="button" class="owl-dot" aria-label="carousel button"><span></span></button><button
                        role="button" class="owl-dot active" aria-label="carousel button"><span></span></button>
            </div>
        </div><!-- /.testimonials-one__carousel -->

    </div><!-- /.container -->
</section>


<!-- Clients Section -->
<div class="client-carousel client-carousel-one ">
    <div class="client-carousel__shape-1">
        <img src="{{ asset('guest/assets/images/shapes/line-shape-1.png')}}" alt="shape-1">
    </div>
    <div class="client-carousel__shape-2">
        <img src="{{ asset('guest/assets/images/shapes/line-shape-2.png')}}" alt="shape-2">
    </div>

    <div class="container">
        <div class="client-carousel__one modins-owl__carousel owl-theme owl-carousel" data-owl-options='{
                "items": 5,
                "margin":10,
                "smartSpeed": 700,
                "loop":true,
                "autoplay": 6000,
                "nav":false,
                "dots":false,
                "responsive":{
                    "0":{"items":1,"margin":0},
                    "360":{"items":2,"margin":0},
                    "575":{"items":3,"margin":30},
                    "768":{"items":3,"margin":30},
                    "992":{"items":4,"margin":30},
                    "1200":{"items":5}
                }
            }'>

            @foreach($client_logo as $client)
            <div class="client-carousel__one__item">
                <img src="{{ asset('storage/'.$client->image_path) }}" alt="client logo">
            </div>
            @endforeach

        </div><!-- /.client-carousel__one -->
    </div><!-- /.container -->
</div>


@endsection

@section('page_level_script')
<script>
$(document).ready(function() {
    $(".modins-owl__carousel").owlCarousel();
});
</script>
@endsection
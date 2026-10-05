@extends('layouts.guest.master')

@section('title','')
@section('description','')
@section('og_image','')

@section('page_level_style')
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@tabler/icons-webfont@latest/dist/tabler-icons.min.css" />
@endsection

@section('content')

<section class="page-header">
    <div class="page-header__bg"></div>
    <div class="container">
        <h2 class="page-header__title">Blogs</h2>
        <ul class="altermed-breadcrumb list-unstyled">
            <li><a href="{{('/')}}">Home</a></li>
            <li><span>Blogs</span></li>
        </ul><!-- /.thm-breadcrumb list-unstyled -->
    </div>
</section>

 
<section class="blog-one blog-one--page">
            <div class="container">
                <div class="row gutter-y-40">
                 @foreach($blogs as $blog)
                   <div class="col-md-6 col-lg-4">
                        <div class="blog-card wow fadeInUp animated" data-wow-duration="1500ms" data-wow-delay="500ms" style="visibility: visible; animation-duration: 1500ms; animation-delay: 500ms; animation-name: fadeInUp;">
                            <div class="blog-card__image-wrap">
                                <div class="blog-card__image">
                                   <img src="{{ asset('storage/' . $blog->image) }}" alt="">


                                   <img src="{{ asset('storage/' . $blog->image) }}" alt="">


                                    <a href="{{route('front.blog-detail',$blog->slug)}}" class="blog-card__image__link"><span class="sr-only">{{$blog->title}}</span>
                                        <!-- /.sr-only --></a>
                                </div>
                               <div class="blog-card__date">
                                <span>{{ $blog->published_at->format('d') }}</span>
                                {{ $blog->published_at->format('M') }}
                            </div>
                            </div><!-- /.blog-card__image -->
                            <div class="blog-card__content">
                                <ul class="list-unstyled blog-card__meta">
                                    <li><a href="{{route('front.blog-detail',$blog->slug)}}">
                                            <i class="fas fa-user-circle"></i>
                                             {{$blog->name}}</a></li>
                                     
                                </ul><!-- /.list-unstyled blog-card__meta -->
                                <h3 class="blog-card__title"><a href="{{route('front.blog-detail',$blog->slug)}}">{{$blog->title}}</a></h3><!-- /.blog-card__title -->
                                <a href="{{route('front.blog-detail',$blog->slug)}}" class="blog-card__link">
                                    <span>Read more</span>
                                    <i class="icon-right-arrow"></i>
                                </a><!-- /.blog-card__link -->
                            </div><!-- /.blog-card__content -->
                        </div><!-- /.blog-card -->
                    </div><!-- /.col-md-6 col-lg-4 -->
                    @endforeach
                    
                </div><!-- /.row -->
            </div><!-- /.container -->
        </section>

@endsection

@section('page_level_script')
<script>
$(document).ready(function() {
    $(".modins-owl__carousel").owlCarousel();
});
</script>
@endsection
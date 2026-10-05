@extends('layouts.guest.master')

@section('title', $blogs->meta_title)
@section('description', $blogs->meta_description)
@section('og_image', asset('storage/' . $blogs->image))

@section('page_level_style')
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@tabler/icons-webfont@latest/dist/tabler-icons.min.css" />
@endsection

@section('content')

<section class="page-header">
    <div class="page-header__bg"></div>
    <div class="container">
        <h2 class="page-header__title">{{$blogs->title}}</h2>
        <ul class="altermed-breadcrumb list-unstyled">
            <li><a href="{{('/')}}">Home</a></li>
            <li><span>Blogs</span></li>
        </ul><!-- /.thm-breadcrumb list-unstyled -->
    </div>
</section>

  <section class="blog-one blog-one--page">
            <div class="container">
                <div class="row gutter-y-60">
                    <div class="col-lg-8">
                        <div class="blog-details">
                            <div class="blog-card blog-card-two @@extraClassName" @@extraattr="">
                                <div class="blog-card__image-wrap">
                                    <div class="blog-card__image">
                                        <img src="{{ asset('storage/' . $blogs->image) }}" alt="">
                                    </div>
                                   <span>{{ $blogs->published_at->format('d') }}</span>
                                {{ $blogs->published_at->format('M Y') }}
                                </div><!-- /.blog-card__image -->
                                <div class=" blog-card-two__content">
                                    <ul class="list-unstyled blog-card__meta">
                                        <li><a href="#">
                                                <i class="fas fa-user-circle"></i>
                                                {{$blogs->name}}</a></li>
                                      
                                    </ul><!-- /.list-unstyled blog-card__meta -->
                                    <h3 class="blog-card__title">{{$blogs->heading}}</h3>
                                    <!-- /.blog-card__title -->
                                 {!! $blogs->long_description !!}
                                </div><!-- /.blog-card-two__content -->
                            </div><!-- /.blog-card -->
                            <div class="blog-details__meta">
                                 
                                <div class="blog-details__social">
                                 <!-- AddToAny BEGIN -->
<div class="a2a_kit a2a_kit_size_32 a2a_default_style">
<a class="a2a_dd" href="https://www.addtoany.com/share"></a>
<a class="a2a_button_facebook"></a>
<a class="a2a_button_whatsapp"></a>
<a class="a2a_button_linkedin"></a>
<a class="a2a_button_x"></a>
</div>
<script defer src="https://static.addtoany.com/menu/page.js"></script>
<!-- AddToAny END -->
                                </div><!-- /.blog-details__social -->
                            </div><!-- /.blog-details__meta -->

                           
                        </div><!-- /.blog-details -->

                        

                         
                    </div><!-- /.col-lg-8 -->
                    <div class="col-lg-4">
                        <div class="sidebar">
                            <aside class="widget-area">
                             
                                <div class="sidebar__single">
                                    <h4 class="sidebar__title">Latest posts</h4><!-- /.sidebar__title -->
                                    <ul class="sidebar__posts list-unstyled">
                                        @foreach($latestPosts as $latestPost)
                                        <li class="sidebar__posts__item">
                                            <div class="sidebar__posts__image">
                                                 <img src="{{ asset('storage/' . $latestPost->image) }}" alt="{{ $latestPost->title }}" style="height: 50px;">
                                            </div><!-- /.sidebar__posts__image -->
                                            <div class="sidebar__posts__content">
                                                 <h4 class="sidebar__posts__title"><a href="{{route('front.blog-detail',$latestPost->slug)}}">{{ $latestPost->title }}</a></h4><!-- /.sidebar__posts__title -->
                                            </div><!-- /.sidebar__posts__content -->
                                        </li>
                                        @endforeach
                                         
                                       
                                    </ul><!-- /.sidebar__posts list-unstyled -->
                                </div><!-- /.sidebar__single -->
                            <div class="sidebar__single">
                            <h4 class="sidebar__title">Categories</h4>
                            <ul class="sidebar__categories list-unstyled">
                                <li>
                                    <a href="{{ route('front.blogs') }}" class="{{ request('category') ? '' : 'active' }}">
                                        All Categories
                                    </a>
                                </li>
                                @foreach($categories as $category)
                                    <li>
                                        <a href="{{ route('front.blogs', ['category' => $category->id]) }}"
                                           class="{{ request('category') == $category->id ? 'active' : '' }}">
                                            {{ $category->name }}
                                        </a>
                                    </li>
                                @endforeach
                            </ul>
                        </div>

                                 
                            </aside><!-- /.widget-area -->
                        </div><!-- /.sidebar -->
                    </div><!-- /.col-lg-4 -->
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
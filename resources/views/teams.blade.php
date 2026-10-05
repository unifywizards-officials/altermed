@extends('layouts.guest.master')
@section('title',' Teams | Altermed RCM')
@section('description',' Explore Altermed RCM’s state-by-state licensing and credentialing services across the US — fast, compliant, and tailored to your region’s requirements')
@section('og_image','')
@section('page_level_style')
<style>
    .team-details__big-text {
        font-size: 80px;
        line-height: 80px;
        text-transform: uppercase;
        color: var(--insur-extra);
        letter-spacing: 0.35em;
        position: absolute;
        transform: rotate(-90deg);
        top: 209px;
        left: -319px;
    }
 
    .team-details__top-name {
        font-size: 18px;
        font-weight: 700;
        line-height: 0px;
        letter-spacing: -0.02em;
 
    }
 
    .team-details__top-text-1 {
        font-size: 24px;
        color: #cf623a;
        font-weight: 600;
        letter-spacing: -0.02em;
        line-height: 24px;
    }
 
    p {
        font-size: 15px;
        font-weight: 500;
    }
</style>
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@tabler/icons-webfont@latest/dist/tabler-icons.min.css" />
@endsection
@section('content')
<section class="page-header">
    <div class="page-header__bg"></div>
    <div class="container">
        <h2 class="page-header__title">Teams</h2>
        <ul class="altermed-breadcrumb list-unstyled">
            <li><a href="{{('/')}}">Home</a></li>
            <li><span>Teams</span></li>
        </ul>
        <!-- /.thm-breadcrumb list-unstyled -->
    </div>
</section>
 
<section class="team-details">
    <div class="container">
        <div class="team-details__top">
            <div class="row">
 
                <!-- PERSON 1 -->
 
 
                @forelse($teams as $data)
 
                <div class="row mb-4" style="box-shadow: 0 0 10px rgba(0, 0, 0, 0.2);    padding:  20px">
                    <div class="col-3">
                        <div class="team-details__top-left">
                            <div class="team-details__top-img">
                                <img src="{{ $data->image }}" alt="{{ $data->name }}">
                               
                            </div>
                            <div class="team-details__top-right text-center">
                                <p class="team-details__top-title mb-2">{!! $data->title !!}</p>
                                <h3 class="team-details__top-name ">{!! $data->name !!}</h3>
                            </div>
                        </div>
                    </div>
 
                    <div class="col-1"></div>
 
                    <div class="col-8">
                        <div class="team-details__top-right">
 
                            <p class="team-details__top-text-1">{!! $data->quote !!}</p>
                            <p class="team-details__top-text-2">{!! $data->description !!}
                        </div>
                    </div>
                </div>
                @empty

                data not found

                @endforelse
 
     
</section>
 
@endsection
@section('page_level_script')
<script>
    $(document).ready(function() {
        $(".modins-owl__carousel").owlCarousel();
    });
</script>
 
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
 
<script>
    let page = 2; // start from page 2
    let loading = false;
 
    window.addEventListener('scroll', function() {
 
        if (loading) return;
 
        let scrollTop = window.scrollY;
        let windowHeight = window.innerHeight;
        let documentHeight = document.body.offsetHeight;
 
        // Trigger when reaching middle of the page
        if (scrollTop + windowHeight >= (documentHeight / 2)) {
 
            loading = true;
 
            $.ajax({
                url: "",
                method: "GET",
                data: {
                    page: page
                },
 
                success: function(response) {
                    if ($.trim(response) === "") {
                        return; // No more data
                    }
 
                    $("#states-wrapper").append(response);
                    page++;
                    loading = false;
                }
            });
        }
    });
</script>
 
@endsection
 
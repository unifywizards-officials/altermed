@extends('layouts.guest.master')

@section('title', $securityPolicy->meta_title ?? 'Security Policy')
@section('description', $securityPolicy->meta_description ?? 'Security Policy description')

@section('page_level_style')
<!-- Summernote CSS -->
<link href="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote-bs4.min.css" rel="stylesheet">
@endsection

@section('content')

<section class="page-header">
    <div class="page-header__bg"></div>
    <div class="container">
        <h2 class="page-header__title">{{ $securityPolicy->title  }}</h2>
        <ul class="altermed-breadcrumb list-unstyled">
            <li><a href="{{('/')}}">Home</a></li>
            <li><span>Security Policy</span></li>
        </ul><!-- /.thm-breadcrumb list-unstyled -->
    </div>
</section>

<section class="security-section py-5">
    <div class="container-fluid">
        <div class="row">
            <div class="col-12">
                <div class="security-content-card shadow-lg rounded-4 p-4 p-md-5 bg-white mx-3 mx-md-5">
                    <div class="security-content">
                        {!! $securityPolicy->content !!}
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

@endsection

@section('page_level_script')
<!-- Summernote JS -->
<script src="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote-bs4.min.js"></script>
@endsection
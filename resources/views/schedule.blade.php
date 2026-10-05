@extends('layouts.guest.master')

@section('title', $termsOfUse->meta_title ?? 'Terms Policy')
@section('description', $termsOfUse->meta_description ?? 'Terms Policy description')

@section('page_level_style')
<!-- Summernote CSS -->
<link href="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote-bs4.min.css" rel="stylesheet">

<style>
    .wrap-input100{
        padding-top:10px;
    }
    .page-wrapper{
        overflow: visible;
    }
    .z-10{
        z-index: 10;
    }
    @media (width >= 1699px) {
    .inner-masthead.service-detail-inner-masthead .row {
        padding: 10rem 0 7rem;
    }
}
</style>



@endsection

@section('content')

<!-- @if(session('success'))
    <div class="alert alert-success alert-dismissible fade show" role="alert">
        {{ session('success') }}
        <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
    </div>
@endif -->

@if($errors->any())
    <div class="alert alert-danger alert-dismissible fade show" role="alert">
        <ul class="mb-0">
            @foreach($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
        <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
    </div>
@endif

<section data-bgcolor="#fff" class="inner-masthead service-detail-inner-masthead" data-inner-masthead style="background-image:url('{{ asset('guest/assets/images/backgrounds/schedule-bgg.webp')}}'); background-size:cover;">

    <div class="container">

        <div class="row ">
            <div class="col-lg-5  ">
                 <div class="sticky-top  z-10" style="top:100px">

                <h1> {{ $scheduleContent->heading ?? 'Schedule a Demo' }} </h1>
                <p>{{ $scheduleContent->description ?? 'Our professional credential services are fast, accurate, and insurer-aligned, helping you avoid missed revenue.' }}</p>
                <div class="d-flex justify-content-start align-items-center mt-3">

                  
                </div>
</div>

            </div>
            <div class="col-lg-7  ">

               <form class="login100-form validate-form" action="{{ route('schedule.demo.store') }}" method="POST">
                   @csrf
    <span class="login100-form-title p-b-49 text-start">
        {{ $scheduleContent->form_title ?? 'Fill the Form to Get a Call Back from Us' }}
    </span>

    <div class="row p-0 mt-1">

        <div class="col-md-6">
            <div class="wrap-input100 validate-input m-b-23" data-validate="Name is required">
                <span class="label-input100">Name</span>
                <input class="input100" type="text" name="Name" placeholder="Type your Name">
                <span class="focus-input100" data-symbol="&#xf206;"></span>
            </div>
        </div>

        <div class="col-md-6">
            <div class="wrap-input100 validate-input" data-validate="Mobile Number is required">
                <span class="label-input100">Mobile Number</span>
                <input class="input100" type="text" name="Mobile_Number" placeholder="Type your Mobile Number">
                <span class="focus-input100" data-symbol="&#xf190;"></span>
            </div>
        </div>

        <div class="col-md-6">
            <div class="wrap-input100 validate-input" data-validate="Email ID is required">
                <span class="label-input100">Email ID</span>
                <input class="input100" type="email" name="Email_ID" placeholder="Type your Email ID">
                <span class="focus-input100" data-symbol="&#xf190;"></span>
            </div>
        </div>

        <div class="col-md-6">
            <div class="wrap-input100 validate-input" data-validate="Company Name is required">
                <span class="label-input100">Company Name</span>
                <input class="input100" type="text" name="Company_Name" placeholder="Type your Company Name">
                <span class="focus-input100" data-symbol="&#xf190;"></span>
            </div>
        </div>

        <!-- NEW FIELD — Number of Providers -->
        <div class="col-md-6">
            <div class="wrap-input100 validate-input" data-validate="Number of Providers is required">
                <span class="label-input100">Number of Providers</span>
                <select class="input100" name="Number_of_Providers">
                    <option value="">Select</option>
                    <option>0–20</option>
                    <option>21–49</option>
                    <option>50–100</option>
                    <option>101–499</option>
                    <option>500+</option>
                </select>
                <span class="focus-input100" data-symbol="&#xf190;"></span>
            </div>
        </div>

        <!-- NEW FIELD — Type of Practice -->
        <div class="col-md-6">
            <div class="wrap-input100 validate-input" data-validate="Type of Practice is required">
                <span class="label-input100">Type of Practice</span>
                <select class="input100" name="Type_of_Practice">
                    <option value="">Select</option>
                    <option>Private Practice</option>
                    <option>ASC</option>
                    <option>Biller</option>
                    <option>FQHC</option>
                    <option>CAH</option>
                    <option>Health System</option>
                    <option>Pharmacy</option>
                    <option>Other</option>
                </select>
                <span class="focus-input100" data-symbol="&#xf190;"></span>
            </div>
        </div>

        <div class="col-12">
            <div class="wrap-input100 validate-input" data-validate="Requirement is required">
                <span class="label-input100">Requirement</span>
                <input class="input100" type="text" name="Requirement" placeholder="Type your Requirement">
                <span class="focus-input100" data-symbol="&#xf190;"></span>
            </div>
        </div>

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


 

@endsection

@section('page_level_script')
<!-- Summernote JS -->
<script src="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote-bs4.min.js"></script>
@endsection
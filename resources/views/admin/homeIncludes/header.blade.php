<!DOCTYPE html>
<html lang="en">
   <head>
      <meta charset="UTF-8">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <title>Document</title>
      <link rel="icon" type="image/x-icon" href="/images/favicon.ico">
      <!---------------------------[css]--------------------------->
			<link rel="stylesheet" href="{{ asset('home_assets/css/bootstrap.min.css') }}">
			<link rel="stylesheet" href="{{ asset('home_assets/css/main.css') }}">
			<link rel="stylesheet" href="{{ asset('home_assets/css/home.css') }}">
      <!-- Link Swiper's CSS -->
      <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />
      <!---------------------------[js]--------------------------->
      <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
   </head>
   <body>
      <!---------------------------[header start]--------------------------->
      <div class="d-flex align-items-end headerSectionMain justify-content-between">
         <div class="flex-grow-1">
            <div class="d-flex justify-content-end">
               <img src="{{ asset('home_assets/images/const-1.png') }}" class="header-feature-side-image img-fluid header-feature-side-image-1" alt="header feature side image">
            </div>
         </div>
         <header class="headerSection">
            <div class="h-100">
               <div class="d-flex justify-content-between align-items-center flex-column flex-sm-row">
                  <div class="logo_box pe-4 ps-2 pt-2">
                     <img src="{{ asset('home_assets/images/logo.png') }}" class="img-fluid" alt="logo">
                  </div>
                  <div class="border-dark border-end border-start feature_box flex-grow-1 py-2 px-3 text-center">
                     <img src="{{ asset('home_assets/images/header-img1.jpg') }}" class="img-fluid" alt="header-feature">
                  </div>
               </div>
            </div>
         </header>
         <div class="flex-grow-1">
            <div class="d-flex justify-content-start">
               <img src="{{ asset('home_assets/images/const-2.png') }}" class="header-feature-side-image img-fluid header-feature-side-image-2" alt="header feature side image">
            </div>
         </div>
      </div>




      <nav class="nav-container">
         <div class="container block-1">
         <!-- <div class="row-box d-flex align-items-center justify-content-center position-relative"> -->


         <div class="row-box">
            <div class="row position-relative">
               <div class="col-sm-6 col-md-2 ps-0 d-lg-block d-none">
                  <div class="header-dropdown-box ">
                     <ul class="list-unstyled">
                        <li><a href="#">BUILDERS</a></li>
                        <li><a href="#">SUPPLIERS</a></li>
                        <!-- <li><a href="#">SERVICES</a></li> -->
                        <!-- <li class="border-0"><a href="#"></a></li> -->
                     </ul>
                  </div>
               </div>
               <div class="col-8 col-sm-8 col-md-7 pe-lg-4">
                  <div class="search-box my-auto ms-lg-4 me-0 my-md-5">
                     <input type="text" name="" id="" class="px-2" placeholder="Search ...">
                     <select name="" id="">
                        <option value="all">All</option>
                     </select>
                     <button><img src="{{ asset('home_assets/images/search.png') }}" alt="search"></button>
                  </div>
               </div>
               <div class="col-4 col-sm-4 col-md-3">
                  <div class="d-flex justify-content-end">
                     <a class="main_nav_clients_login" href="#">
                        <img src="{{ asset('home_assets/images/main_nav_login.png') }}" class="img-fluid" alt="login">
                     </a>
                  </div>
               </div>
            </div>
         </div>
         <!-- <div class="row">
            <ul class="list-unstyled navlink-list">
                <li class="navlink-item">
                    <a href="#">Home</a></li>
            <li class="navlink-item"><a href="#">News</a></li>
            <li class="navlink-item"><a href="#">FREE Listing
            <li class="navlink-item"><a href="#">UK Tenders	</a></li>
            <li class="navlink-item"><a href="#">£ Advertise</a></li>
            <li class="navlink-item"><a href="#">Contact Us</a></li>
            </ul>
            </div> -->
      </nav>

      <nav class="nav-container nav-container-sec px-sm-auto px-0 ">
         <div class="container  block-2 ">
            <div class="row ">
               <div class="col-sm-6 col-md-0 col-lg-2 d-lg-block d-none">
               </div>
               <div class="col-sm-6 col-md-12 col-lg-10 d-md-block d-none">
                  <ul class="list-unstyled navlink-list my-auto">
                     <li class=" my-auto navlink-item">
                        <a href="#">Home</a>
                     </li>
                     <li class=" my-auto navlink-item"><a href="#">News</a></li>
                     <li class=" my-auto navlink-item">
                        <a href="#" class="text-yellow">
                           FREE Listing
                     <li class=" my-auto navlink-item"><a href="#">UK Tenders	</a></li>
                     <li class=" my-auto navlink-item"><a href="#" class="text-yellow">£ Advertise</a></li>
                     <li class=" my-auto navlink-item"><a href="#">Contact Us</a></li>
                  </ul>
               </div>
            </div>

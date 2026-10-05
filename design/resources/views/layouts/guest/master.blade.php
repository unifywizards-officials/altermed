<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta name="robots" content="noindex, nofollow">

    <title>altermedrcm</title>
    <!-- favicons Icons -->
    <link rel="apple-touch-icon" sizes="180x180" href="assets/images/favicons/apple-touch-icon.png') }}" />
    <link rel="icon" type="image/png" sizes="32x32" href="assets/images/favicons/favicon-32x32.png') }}" />
    <link rel="icon" type="image/png" sizes="16x16" href="assets/images/favicons/favicon-16x16.png') }}" />
    <link rel="manifest" href="assets/images/favicons/site.webmanifest" />
    <meta name="description" content="Sollox is a modern HTML Template for Beauty, Spa Centers, Hair, Nail, Spa Salons & Cosmetic shops. The template perfectly fits Beauty Spa, Salon, and Wellness Treatments websites and businesses." />
    <!------------Css------------------->
    @include('layouts.guest.css')
    <!------------End Css------------------->

    <!------------Page level Style or Css------------------->
    @yield('page_level_style')
    <!------------End Page level Style or Css------------------->
</head>

<body class="custom-cursor">
    <div class="custom-cursor__cursor"></div>
    <div class="custom-cursor__cursor-two"></div>
    <div class="page-wrapper">

        <!-- End Google Tag Manager (noscript) -->
        <!------------Header------------------>
        @include('layouts.guest.header')

        <!------------Body Content------------------->
        @yield('content')


        <!------------Footer------------------->
        @include('layouts.guest.footer')
            </div>
                @include('layouts.guest.mob-sidebar')
        <!------------EndFooter------------------->
        <!------------Scripts------------------->
        @include('layouts.guest.scripts')
        <!------------EndScripts------------------->


        <!------------Page level Scripts------------------->
        @yield('page_level_script')
        <!------------End Page level Scripts------------------->

  
</body>

</html>


<!------------Page level Scripts------------------->
@yield('page_level_script')
<!------------End Page level Scripts------------------->
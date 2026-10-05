<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta name="robots" content="noindex, nofollow">
      <title>@yield('title')</title>
      <meta name="description" content="@yield('description')"/>
      <meta property="og:title" content="@yield('title')"/>
    <meta property="og:type" content="website" />
    <meta property="og:URL" content="{{ url()->current() }}"/>
    <meta property="og:image" content="@yield('og_image')"/>
    <meta property="og:description" content="@yield('description')"/>


    <!-- favicons Icons -->
  <link rel="icon" type="image/png" href="https://altermed.unifysocialcraft.com/images/logo-altermed.png" />
 
    
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
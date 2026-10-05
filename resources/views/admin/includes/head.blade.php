<meta charset="utf-8" />
<title>Altermed Admin | @yield('title')</title>
<meta content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" name="viewport" />
<meta content="" name="@yield('description')" />
<meta content="" name="author" />
<meta name="csrf-token" content="{{ csrf_token() }}">

    <link rel="canonical" href="https://www.myjackpot777.net">


<!-- Favicon -->
<link rel="icon" type="image/png" href="{{ asset('images/logo-altermed.png') }}" />

<!-- ================== BEGIN BASE CSS STYLE ================== -->
<link href="/assets/css/vendor.min.css" rel="stylesheet" />
<link href="/assets/css/default/app.min.css" rel="stylesheet" />
<!-- ================== END BASE CSS STYLE ================== -->

@stack('css')
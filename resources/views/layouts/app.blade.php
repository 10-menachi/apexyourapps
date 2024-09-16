<!DOCTYPE html>
<html lang="en" data-bs-theme="light" data-pwa="true">

<head>
    @csrf
    <meta charset="utf-8">

    <!-- Viewport -->
    <meta name="viewport"
        content="width=device-width, initial-scale=1, minimum-scale=1, maximum-scale=1, viewport-fit=cover">

    <!-- SEO Meta Tags -->
    <title>Apex | @yield('title')</title>
    <meta name="description" content="Apex Your Apps Ltd -  E-Commerce">
    <meta name="keywords"
        content="online shop, e-commerce, online store, market, 
    multipurpose, product, mobile, pwa">
    <meta name="author" content="Apex Your Apps Ltd">

    <!-- Webmanifest + Favicon / App icons -->
    <meta name="apex-Your-Apps-Ltd" content="yes">
    <meta name="apple-mobile-web-app-status-bar-style" content="black">
    <link rel="manifest" href="{{ asset('manifest.json') }}">
    <link rel="icon" type="image/png" href="{{ asset('assets/app-icons/icon-32x32.png') }}" sizes="32x32">
    <link rel="apple-touch-icon" href="{{ asset('assets/app-icons/icon-180x180.png') }}">

    <!-- Theme switcher (color modes) -->
    <script src="{{ asset('assets/js/theme-switcher.js') }}"></script>

    <!-- Preloaded local web font (Inter) -->
    <link rel="preload" href="{{ asset('assets/fonts/inter-variable-latin.woff2') }}" as="font" type="font/woff2"
        crossorigin="">

    <!-- Font icons -->
    <link rel="preload" href="{{ asset('assets/icons/Apex-icons.woff2') }}" as="font" type="font/woff2"
        crossorigin="">
    <link rel="stylesheet" href="{{ asset('assets/icons/Apex-icons.min.css') }}">

    <!-- Vendor styles -->
    <link rel="stylesheet" href="{{ asset('assets/vendor/swiper/swiper-bundle.min.css') }}">

    <!-- Bootstrap + Theme styles -->
    <link rel="preload" href="{{ asset('assets/css/theme.min.css') }}" as="style">
    <link rel="preload" href="{{ asset('assets/css/theme.rtl.min.css') }}" as="style">
    <link rel="stylesheet" href="{{ asset('assets/css/theme.min.css') }}" id="theme-styles">

    <!-- Customizer -->
    <script src="{{ asset('assets/js/customizer.min.js') }}"></script>
</head>



<!-- Body -->

<body>
    @include('components.customizer-offcanvas-and-shopping-cart-offcanvas')


    @include('components.header')

    <!-- Page content -->
    <main class="content-wrapper">

        @yield('content')

    </main>


    @include('components.footer')

    @include('components.back-to-top-button')



    <!-- Vendor scripts -->
    <script src="{{ asset('assets/vendor/swiper/swiper-bundle.min.js') }}"></script>
    <script src="{{ asset('assets/vendor/timezz/timezz.js') }}"></script>

    <!-- Bootstrap + Theme scripts -->
    <script src="{{ asset('assets/js/theme.min.js') }}"></script>


</body>

</html>

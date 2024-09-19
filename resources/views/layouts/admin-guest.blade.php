<!DOCTYPE html>
<html lang="en" class="scroll-smooth group" data-sidebar="brand" dir="ltr">

<head>
    <meta charset="utf-8" />
     <title>Apex | @yield('title')</title>
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta content="Apex Admin E-commerce" name="description" />
    <meta content="" name="Apex E-commerce Your Apps Ltd" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <!-- App favicon -->
    <link rel="shortcut icon" href="{{ asset('admin-assets/images/favicon.ico') }}" />

    <!-- Css -->
    <!-- Main Css -->
    <link rel="stylesheet" href="{{ asset('admin-assets/libs/icofont/icofont.min.css ') }}">
    <link href="{{ asset('admin-assets/libs/flatpickr/flatpickr.min.css') }}" type="text/css" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('admin-assets/css/tailwind.min.css') }}">

</head>

<body data-layout-mode="light" data-sidebar-size="default" data-theme-layout="vertical"
    class="bg-[#EEF0FC] dark:bg-gray-900">

     @yield('content')


    <!-- JAVASCRIPTS -->
    <!-- <div class="menu-overlay"></div> -->
    <script src="{{ asset('admin-assets/libs/lucide/umd/lucide.min.js') }}"></script>
    <script src="{{ asset('admin-assets/libs/simplebar/simplebar.min.js') }}"></script>
    <script src="{{ asset('admin-assets/libs/flatpickr/flatpickr.min.js') }}"></script>
    <script src="{{ asset('admin-assets/libs/@frostui/tailwindcss/frostui.js ') }}"></script>

    <script src="{{ asset('admin-assets/js/app.js') }}"></script>
    <!-- JAVASCRIPTS -->
</body>

</html>
<!DOCTYPE html>
<html lang="en" class="scroll-smooth group" data-sidebar="brand" dir="ltr">

<head>
    <meta charset="utf-8" />
    <title>Apex | @yield('title')</title>
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta content="Apex Admin E-commerce" name="description" />
    <meta content="" name="Apex E-commerce Your Apps Ltd" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <link rel="stylesheet" href="{{ asset('admin-assets/libs/mobius1-selectr/selectr.min.css') }}">
    <link rel="shortcut icon" href="{{ asset('admin-assets/images/favicon.ico') }}" />
    <link rel="stylesheet" href="{{ asset('admin-assets/libs/icofont/icofont.min.css') }}">
    <link href="{{ asset('admin-assets/libs/flatpickr/flatpickr.min.css') }}" type="text/css" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('admin-assets/css/tailwind.min.css') }}">
</head>

<body>
    @include('components.admin.sidebar')
    @include('components.admin.nav-bar')

    @yield('content')

    @include('components.admin.footer')


    <script src="{{ asset('admin-assets/libs/lucide/umd/lucide.min.js') }}"></script>
    <script src="{{ asset('admin-assets/libs/simplebar/simplebar.min.js') }}"></script>
    <script src="{{ asset('admin-assets/libs/flatpickr/flatpickr.min.js') }}"></script>
    <script src="{{ asset('admin-assets/libs/@frostui/tailwindcss/frostui.js') }}"></script>
    <script src="{{ asset('admin-assets/libs/apexcharts/apexcharts.min.js') }}"></script>
    <script src="{{ asset('admin-assets/js/pages/analytics-index.init.js') }}"></script>
    <script src="{{ asset('admin-assets/js/app.js') }}"></script>


    <script>
        // Initialize FilePond after script inclusion
        FilePond.registerPlugin(FilePondPluginImagePreview);
        const inputElements = document.querySelectorAll('input[type="file"]');

        inputElements.forEach(element => {
            FilePond.create(element);
        });

        document.addEventListener('DOMContentLoaded', () => {
            var elem = document.querySelector('input[name="foo"]');
            if (elem) new Datepicker(elem, {});

            var selectElem = document.querySelector('#sizing');
            if (selectElem) new Selectr(selectElem, {
                taggable: true,
                tagSeperators: [",", "|"]
            });
        });
    </script>
</body>

</html>

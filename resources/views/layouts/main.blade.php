<!DOCTYPE html>
<html lang="{{ $page->language ?? 'en' }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <meta name="referrer" content="always">

    <title>@yield('title')</title>

    @vite(['resources/css/app.css', 'resources/js/app.js'])

</head>

<body>
    <div x-data="{ cartOpen: false, isOpen: false }">
        @include('components.navbar')

        @include('components.cart')

        <main class="my-8">
            @yield('body')
        </main>

        @include('components.footer')
    </div>
</body>

</html>

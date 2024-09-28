@include('components.admin.header')
<!-- Sidebar -->
@include('components.admin.sidebar')
<!-- End Sidebar -->

<div class="main-panel">
    <div class="main-header">
        @include('components.admin.logoheader')
        <!-- Navbar Header -->
        @include('components.admin.sidebar')
        <!-- End Navbar -->
    </div>
    @yield('content')

    @include('components.admin.footer')

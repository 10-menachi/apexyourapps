@include('components.admin.header')
<!-- Sidebar -->
@include('components.admin.sidebar')
<!-- End Sidebar -->

<div class="main-panel">

    <div class="toast-container">
        @if (session('success'))
            <div class="toast show">
                <div class="toast-header">
                    <strong class="me-auto">Success</strong>
                    <button type="button" class="btn-close" data-bs-dismiss="toast"></button>
                </div>
                <div class="toast-body">
                    {{ session('success') }}
                </div>
            </div>
        @elseif ($errors->any())
            <div class="toast show">
                <div class="toast-header">
                    <strong class="me-auto">Something went wrong</strong>
                    <button type="button" class="btn-close" data-bs-dismiss="toast"></button>
                </div>
                <div class="toast-body">
                    {{ $errors->first() }}
                </div>
            </div>
        @endif
    </div>

    <div class="main-header">
        @include('components.admin.logoheader')
        <!-- Navbar Header -->
        @include('components.admin.sidebar')
        <!-- End Navbar -->
    </div>
    @yield('content')

    @include('components.admin.footer')

</div>

<style>
    .toast-container {
        position: fixed;
        top: 20px;
        /* Adjust as needed */
        right: 20px;
        /* Adjust as needed */
        z-index: 1050;
        /* Ensure it's above other elements */
    }
</style>

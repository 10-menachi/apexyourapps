@extends('layouts.guest')

@section('title', 'Login')
@section('content')
    <main class="px-3 mx-auto content-wrapper w-100 ps-lg-5 pe-lg-4" style="max-width: 1920px">
        <div class="d-lg-flex">
            <div class="py-4 mx-auto d-flex flex-column min-vh-100 w-100 me-lg-5" style="max-width: 416px">
                <header class="px-0 pb-4 mb-2 navbar mt-n2 mt-sm-0 mb-md-3 mb-lg-4">
                    <a class="navbar-brand" href="{{ route('homepage.view') }}">
                        <img src="{{ asset('logo.png') }}" alt="Logo" class="w-75">
                    </a>
                </header>

                <h1 class="mt-auto h2">Welcome back</h1>
                <div class="mb-4 nav fs-sm">
                    Don't have an account?
                    <a class="p-0 nav-link text-decoration-underline ms-2" href="{{ route('register') }}">Create an
                        account</a>
                </div>

                <form class="needs-validation" action="{{ route('login') }}" method="POST">
                    @csrf
                    <div class="mb-4 position-relative">
                        <input type="email" name="email"
                            class="form-control form-control-lg @error('email') is-invalid @enderror"
                            value="{{ old('email') }}" placeholder="Email" required>
                        @error('email')
                            <div class="py-0 bg-transparent invalid-tooltip">{{ $message }}</div>
                        @enderror
                    </div>

                    <div class="mb-4">
                        <div class="password-toggle">
                            <input type="password" name="password"
                                class="form-control form-control-lg @error('password') is-invalid @enderror"
                                placeholder="Password" required>
                            @error('password')
                                <div class="py-0 bg-transparent invalid-tooltip">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>


                    <div class="mb-4 d-flex align-items-center justify-content-end">
                        <div class="nav">
                            <a class="p-0 nav-link animate-underline" href="{{ route('password.request') }}">
                                <span class="animate-target">Forgot password?</span>
                            </a>
                        </div>
                    </div>
                    <button type="submit" class="btn btn-lg btn-primary w-100">Sign In</button>
                </form>

                <!-- Divider -->
                <div class="my-4 d-flex align-items-center">
                    <hr class="m-0 w-100">
                    <span class="mx-4 text-body-emphasis fw-medium text-nowrap">or continue with</span>
                    <hr class="m-0 w-100">
                </div>

                <!-- Social login -->
                <div class="gap-3 pb-4 mb-3 d-flex flex-column flex-sm-row mb-lg-4">
                    <button type="button" class="px-2 btn btn-lg btn-outline-secondary w-100">
                        <i class="ci-google ms-1 me-1"></i>
                        Google
                    </button>
                    <button type="button" class="px-2 btn btn-lg btn-outline-secondary w-100">
                        <i class="ci-facebook ms-1 me-1"></i>
                        Facebook
                    </button>
                    <button type="button" class="px-2 btn btn-lg btn-outline-secondary w-100">
                        <i class="ci-apple ms-1 me-1"></i>
                        Apple
                    </button>
                </div>

                <!-- Footer -->
                <footer class="mt-auto">
                    <div class="mb-4 nav">
                        <a class="p-0 nav-link text-decoration-underline" href="help-topics-v1.html">Need help?</a>
                    </div>
                    <p class="mb-0 fs-xs">
                        © All rights reserved.<span class="animate-underline"><a
                                class="animate-target text-dark-emphasis text-decoration-none" href="https://yourapps.co.ke"
                                target="_blank" rel="noreferrer">YourApps</a></span>
                    </p>
                </footer>
            </div>


            <!-- Cover image visible on screens > 992px wide (lg breakpoint) -->
            <div class="py-4 d-none d-lg-block w-100 ms-auto" style="max-width: 1034px">
                <div class="overflow-hidden d-flex flex-column justify-content-end h-100 rounded-5">
                    <span class="top-0 position-absolute start-0 w-100 h-100 d-none-dark"
                        style="background: linear-gradient(-90deg, #accbee 0%, #e7f0fd 100%)"></span>
                    <span class="top-0 position-absolute start-0 w-100 h-100 d-none d-block-dark"
                        style="background: linear-gradient(-90deg, #1b273a 0%, #1f2632 100%)"></span>
                    <div class="ratio position-relative z-2" style="--cz-aspect-ratio: calc(1030 / 1032 * 100%)">
                        <img src="assets/img/account-cover.png" alt="Girl">
                    </div>
                </div>
            </div>
        </div>
    </main>
    <script src="assets/js/theme.min.js"></script>
@endsection

@extends('layouts.guest')

@section('title', 'Forgot Password')

@section('content')
    <main class="px-3 mx-auto content-wrapper w-100 ps-lg-5 pe-lg-4" style="max-width: 1920px">
        <div class="d-lg-flex">
            <div class="py-4 mx-auto d-flex flex-column min-vh-100 w-100 me-lg-5" style="max-width: 416px">
                <header class="px-0 pb-4 mb-2 navbar align-items-center mt-n2 mt-sm-0 mb-md-3 mb-lg-4">
                    <a href="index.html" class="pt-0 navbar-brand">
                        <img src="{{ asset('logo.png') }}" class="flex-shrink-0 d-flex text-primary" width="225"
                            alt="Logo">
                    </a>
                    <div class="nav">
                        <a class="p-0 nav-link fs-base animate-underline" href="account-signin.html">
                            <i class="ci-chevron-left fs-lg ms-n1 me-1"></i>
                            <span class="animate-target">Back to Sign In</span>
                        </a>
                    </div>
                </header>

                <h1 class="mt-auto h2">Forgot password?</h1>
                <p class="pb-2 pb-md-3">Enter the email address you used when you joined and we’ll send you instructions
                    to reset your password</p>

                {{-- Display Success Message --}}
                @if (session('status'))
                    <div class="alert alert-success" role="alert">
                        {{ session('status') }}
                    </div>
                @endif

                {{-- Forgot Password Form --}}
                <form class="pb-4 mb-3 needs-validation mb-lg-4" action="{{ route('password.email') }}" method="POST">
                    @csrf
                    <div class="mb-4 input-group">
                        <span class="input-group-text @error('email') text-danger border-danger @enderror">
                            <i class="ci-mail fs-lg"></i>
                        </span>
                        <input type="email" name="email" id="email"
                            class="form-control form-control-lg @error('email') is-invalid @enderror"
                            placeholder="Email address" required>
                        @error('email')
                            <div class="invalid-feedback d-block">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>
                    <button type="submit" class="btn btn-lg btn-primary w-100">Reset password</button>
                </form>

                <footer class="mt-auto">
                    <div class="mb-4 nav">
                        <a class="p-0 nav-link text-decoration-underline" href="help-topics-v1.html">Need help?</a>
                    </div>
                    <p class="mb-0 fs-xs">
                        © All rights reserved. <span class="animate-underline"><a
                                class="animate-target text-dark-emphasis text-decoration-none"
                                href="https://createx.studio/" target="_blank" rel="noreferrer">Your Apps Ltd
                                Studio</a></span>
                    </p>
                </footer>
            </div>

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
@endsection

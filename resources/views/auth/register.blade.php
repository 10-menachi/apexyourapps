@extends('layouts.guest')

@section('title', 'Register')
<main class="px-3 mx-auto content-wrapper w-100 ps-lg-5 pe-lg-4" style="max-width: 1920px">
    <div class="d-lg-flex">
        <div class="py-4 mx-auto d-flex flex-column min-vh-100 w-100 me-lg-5" style="max-width: 416px">
            <header class="px-0 pb-4 mb-2 navbar mt-n2 mt-sm-0 mb-md-3 mb-lg-4">
                <img src="{{ asset('logo.png') }}" alt="Logo" class="w-75">
            </header>
            <h1 class="mt-auto h2">Create Account</h1>
            <div class="mb-3 nav fs-sm mb-lg-4">
                I already have an account
                <a class="p-0 nav-link text-decoration-underline ms-2" href="{{ route('login') }}">Sign in</a>
            </div>
            <div class="mb-4 nav fs-sm d-lg-none">
                <span class="me-2">Uncertain about creating an account?</span>
                <a class="p-0 nav-link text-decoration-underline" href="#benefits" data-bs-toggle="offcanvas"
                    aria-controls="benefits">Explore the Benefits</a>
            </div>
            <form class="needs-validation" action="{{ route('register') }}" method="POST">
                @csrf
                <div class="mb-4 position-relative">
                    <input type="text" name="name"
                        class="form-control form-control-lg @error('name') is-invalid @enderror"
                        value="{{ old('name') }}" placeholder="Name" required>
                    @error('name')
                        <div class="py-0 bg-transparent invalid-tooltip">{{ $message }}</div>
                    @enderror
                </div>
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
                <div class="mb-4">
                    <input type="password" name="password_confirmation"
                        class="form-control form-control-lg @error('password') is-invalid @enderror"
                        placeholder="Confirm Password" required>
                    @error('password')
                        <div class="py-0 bg-transparent invalid-tooltip">{{ $message }}</div>
                    @enderror
                </div>
                <div class="gap-2 mb-4 d-flex flex-column">
                    <div class="form-check">
                        <input type="checkbox" class="form-check-input" id="privacy" required>
                        <label for="privacy" class="form-check-label">
                            I accept the Company's
                            <a class="text-dark-emphasis" href="{{ route('privacy-policy') }}">Privacy Policy</a>
                        </label>
                    </div>
                </div>
                <button type="submit" class="btn btn-lg btn-primary w-100">
                    Create an account
                    <i class="ci-chevron-right fs-lg ms-1 me-n1"></i>
                </button>
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
                <p class="mb-0 fs-xs">
                    © All rights reserve
                    <span class="animate-underline">
                        <a class="animate-target text-dark-emphasis text-decoration-none" href="https://yourapps.co.ke"
                            target="_blank" rel="noreferrer">Your Apps
                        </a>
                    </span>
                </p>
            </footer>
        </div>


        <div class="offcanvas-lg offcanvas-end w-100 py-lg-4 ms-auto" id="benefits" style="max-width: 1034px">
            <div class="p-3 offcanvas-header justify-content-end position-relative z-2">
                <button type="button"
                    class="bg-transparent btn btn-icon btn-outline-dark text-dark border-dark rounded-circle d-none-dark"
                    data-bs-dismiss="offcanvas" data-bs-target="#benefits" aria-label="Close">
                    <i class="ci-close fs-lg"></i>
                </button>
                <button type="button"
                    class="bg-transparent btn btn-icon btn-outline-dark text-light border-light rounded-circle d-none d-inline-flex-dark"
                    data-bs-dismiss="offcanvas" data-bs-target="#benefits" aria-label="Close">
                    <i class="ci-close fs-lg"></i>
                </button>
            </div>
            <div class="top-0 position-absolute start-0 w-100 h-100 d-lg-none">
                <span class="top-0 position-absolute start-0 w-100 h-100 d-none-dark"
                    style="background: linear-gradient(-90deg, #accbee 0%, #e7f0fd 100%)"></span>
                <span class="top-0 position-absolute start-0 w-100 h-100 d-none d-block-dark"
                    style="background: linear-gradient(-90deg, #1b273a 0%, #1f2632 100%)"></span>
            </div>
            <div
                class="px-3 pt-2 offcanvas-body position-relative z-2 d-lg-flex flex-column align-items-center justify-content-center h-100 p-lg-0">
                <div class="top-0 position-absolute start-0 w-100 h-100 d-none d-lg-block">
                    <span class="top-0 position-absolute start-0 w-100 h-100 rounded-5 d-none-dark"
                        style="background: linear-gradient(-90deg, #accbee 0%, #e7f0fd 100%)"></span>
                    <span class="top-0 position-absolute start-0 w-100 h-100 rounded-5 d-none d-block-dark"
                        style="background: linear-gradient(-90deg, #1b273a 0%, #1f2632 100%)"></span>
                </div>
                <div class="text-center position-relative z-2 w-100 px-md-2 p-lg-5">
                    <h2 class="pb-3 h4">YourApps Account benefits</h2>
                    <div class="mx-auto" style="max-width: 790px">
                        <div class="row row-cols-1 row-cols-sm-2 g-3 g-md-4 g-lg-3 g-xl-4">
                            <div class="col">
                                <div class="bg-transparent border-0 card h-100">
                                    <span
                                        class="top-0 bg-white bg-opacity-25 border border-white border-opacity-50 position-absolute start-0 w-100 h-100 rounded-4 d-none-dark"></span>
                                    <span
                                        class="top-0 bg-white border position-absolute start-0 w-100 h-100 rounded-4 d-none d-block-dark"
                                        style="--cz-bg-opacity: .05"></span>
                                    <div class="card-body position-relative z-2">
                                        <div class="p-3 d-inline-flex position-relative text-info">
                                            <span
                                                class="top-0 bg-white position-absolute start-0 w-100 h-100 rounded-pill d-none-dark"></span>
                                            <span
                                                class="top-0 position-absolute start-0 w-100 h-100 bg-body-secondary rounded-pill d-none d-block-dark"></span>
                                            <i class="m-1 ci-mail position-relative z-2 fs-4"></i>
                                        </div>
                                        <h3 class="pt-2 my-2 h6">Subscribe to your favorite products</h3>
                                    </div>
                                </div>
                            </div>
                            <div class="col">
                                <div class="bg-transparent border-0 card h-100">
                                    <span
                                        class="top-0 bg-white bg-opacity-25 border border-white border-opacity-50 position-absolute start-0 w-100 h-100 rounded-4 d-none-dark"></span>
                                    <span
                                        class="top-0 bg-white border position-absolute start-0 w-100 h-100 rounded-4 d-none d-block-dark"
                                        style="--cz-bg-opacity: .05"></span>
                                    <div class="card-body position-relative z-2">
                                        <div class="p-3 d-inline-flex position-relative text-info">
                                            <span
                                                class="top-0 bg-white position-absolute start-0 w-100 h-100 rounded-pill d-none-dark"></span>
                                            <span
                                                class="top-0 position-absolute start-0 w-100 h-100 bg-body-secondary rounded-pill d-none d-block-dark"></span>
                                            <i class="m-1 ci-settings position-relative z-2 fs-4"></i>
                                        </div>
                                        <h3 class="pt-2 my-2 h6">View and manage your orders and wishlist</h3>
                                    </div>
                                </div>
                            </div>
                            <div class="col">
                                <div class="bg-transparent border-0 card h-100">
                                    <span
                                        class="top-0 bg-white bg-opacity-25 border border-white border-opacity-50 position-absolute start-0 w-100 h-100 rounded-4 d-none-dark"></span>
                                    <span
                                        class="top-0 bg-white border position-absolute start-0 w-100 h-100 rounded-4 d-none d-block-dark"
                                        style="--cz-bg-opacity: .05"></span>
                                    <div class="card-body position-relative z-2">
                                        <div class="p-3 d-inline-flex position-relative text-info">
                                            <span
                                                class="top-0 bg-white position-absolute start-0 w-100 h-100 rounded-pill d-none-dark"></span>
                                            <span
                                                class="top-0 position-absolute start-0 w-100 h-100 bg-body-secondary rounded-pill d-none d-block-dark"></span>
                                            <i class="m-1 ci-gift position-relative z-2 fs-4"></i>
                                        </div>
                                        <h3 class="pt-2 my-2 h6">Earn rewards for future purchases</h3>
                                    </div>
                                </div>
                            </div>
                            <div class="col">
                                <div class="bg-transparent border-0 card h-100">
                                    <span
                                        class="top-0 bg-white bg-opacity-25 border border-white border-opacity-50 position-absolute start-0 w-100 h-100 rounded-4 d-none-dark"></span>
                                    <span
                                        class="top-0 bg-white border position-absolute start-0 w-100 h-100 rounded-4 d-none d-block-dark"
                                        style="--cz-bg-opacity: .05"></span>
                                    <div class="card-body position-relative z-2">
                                        <div class="p-3 d-inline-flex position-relative text-info">
                                            <span
                                                class="top-0 bg-white position-absolute start-0 w-100 h-100 rounded-pill d-none-dark"></span>
                                            <span
                                                class="top-0 position-absolute start-0 w-100 h-100 bg-body-secondary rounded-pill d-none d-block-dark"></span>
                                            <i class="m-1 ci-percent position-relative z-2 fs-4"></i>
                                        </div>
                                        <h3 class="pt-2 my-2 h6">Receive exclusive offers and discounts</h3>
                                    </div>
                                </div>
                            </div>
                            <div class="col">
                                <div class="bg-transparent border-0 card h-100">
                                    <span
                                        class="top-0 bg-white bg-opacity-25 border border-white border-opacity-50 position-absolute start-0 w-100 h-100 rounded-4 d-none-dark"></span>
                                    <span
                                        class="top-0 bg-white border position-absolute start-0 w-100 h-100 rounded-4 d-none d-block-dark"
                                        style="--cz-bg-opacity: .05"></span>
                                    <div class="card-body position-relative z-2">
                                        <div class="p-3 d-inline-flex position-relative text-info">
                                            <span
                                                class="top-0 bg-white position-absolute start-0 w-100 h-100 rounded-pill d-none-dark"></span>
                                            <span
                                                class="top-0 position-absolute start-0 w-100 h-100 bg-body-secondary rounded-pill d-none d-block-dark"></span>
                                            <i class="m-1 ci-heart position-relative z-2 fs-4"></i>
                                        </div>
                                        <h3 class="pt-2 my-2 h6">Create multiple wishlists</h3>
                                    </div>
                                </div>
                            </div>
                            <div class="col">
                                <div class="bg-transparent border-0 card h-100">
                                    <span
                                        class="top-0 bg-white bg-opacity-25 border border-white border-opacity-50 position-absolute start-0 w-100 h-100 rounded-4 d-none-dark"></span>
                                    <span
                                        class="top-0 bg-white border position-absolute start-0 w-100 h-100 rounded-4 d-none d-block-dark"
                                        style="--cz-bg-opacity: .05"></span>
                                    <div class="card-body position-relative z-2">
                                        <div class="p-3 d-inline-flex position-relative text-info">
                                            <span
                                                class="top-0 bg-white position-absolute start-0 w-100 h-100 rounded-pill d-none-dark"></span>
                                            <span
                                                class="top-0 position-absolute start-0 w-100 h-100 bg-body-secondary rounded-pill d-none d-block-dark"></span>
                                            <i class="m-1 ci-pie-chart position-relative z-2 fs-4"></i>
                                        </div>
                                        <h3 class="pt-2 my-2 h6">Pay for purchases by installments</h3>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</main>
@section('content')
@endsection

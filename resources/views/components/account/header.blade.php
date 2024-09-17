<header class="p-0 navbar navbar-expand-lg navbar-dark bg-dark d-block z-fixed"
    data-sticky-navbar="{&quot;offset&quot;: 200}">
    <div class="container py-1 d-block py-lg-3" data-bs-theme="dark">
        <div class="pt-1 navbar-stuck-hide"></div>
        <div class="row flex-nowrap align-items-center g-0">
            <div class="col col-lg-3 d-flex align-items-center">
                <button type="button" class="navbar-toggler me-4 me-lg-0" data-bs-toggle="offcanvas"
                    data-bs-target="#navbarNav" aria-controls="navbarNav" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <a href="{{ route('homepage.view') }}" class="navbar-brand me-0">
                    <img src="{{ asset('logo.png') }}" alt="Logo" class="w-75">
                </a>
            </div>
            <div class="col col-lg-9 d-flex align-items-center justify-content-end">

                <!-- Search visible on screens > 991px wide (lg breakpoint) -->
                <div class="position-relative flex-fill d-none d-lg-block pe-4 pe-xl-5">
                    <i class="text-white ci-search position-absolute top-50 translate-middle-y d-flex fs-lg ms-3"></i>
                    <input type="search" class="border-white form-control form-control-lg form-icon-start rounded-pill"
                        placeholder="Search the products">
                </div>

                <!-- Sale link visible on screens > 1200px wide (xl breakpoint) -->
                <a class="d-none d-xl-flex align-items-center text-decoration-none animate-shake navbar-stuck-hide me-3 me-xl-4 me-xxl-5"
                    href="#">
                    <div
                        class="bg-opacity-75 btn btn-icon btn-lg fs-lg text-primary bg-body-secondary pe-none rounded-circle">
                        <i class="ci-percent animate-target"></i>
                    </div>
                    <div class="ps-2 text-nowrap">
                        <div class="fs-xs text-body">Only this month</div>
                        <div class="text-white fw-medium">Super Sale 20%</div>
                    </div>
                </a>

                <!-- Button group -->
                <div class="d-flex align-items-center">

                    <!-- Navbar stuck nav toggler -->
                    <button type="button" class="navbar-toggler d-none navbar-stuck-show me-3"
                        data-bs-toggle="collapse" data-bs-target="#stuckNav" aria-controls="stuckNav"
                        aria-expanded="false" aria-label="Toggle navigation in navbar stuck state">
                        <span class="navbar-toggler-icon"></span>
                    </button>

                    <!-- Theme switcher (light/dark/auto) -->
                    <div class="dropdown">
                        <button type="button"
                            class="border-0 theme-switcher btn btn-icon btn-lg btn-outline-secondary fs-lg rounded-circle animate-scale"
                            data-bs-toggle="dropdown" aria-expanded="false" aria-label="Toggle theme (light)">
                            <span class="theme-icon-active d-flex animate-target">
                                <i class="ci-sun"></i>
                            </span>
                        </button>
                        <ul class="dropdown-menu" style="--cz-dropdown-min-width: 9rem">
                            <li>
                                <button type="button" class="dropdown-item active" data-bs-theme-value="light"
                                    aria-pressed="true">
                                    <span class="theme-icon d-flex fs-base me-2">
                                        <i class="ci-sun"></i>
                                    </span>
                                    <span class="theme-label">Light</span>
                                    <i class="item-active-indicator ci-check ms-auto"></i>
                                </button>
                            </li>
                            <li>
                                <button type="button" class="dropdown-item" data-bs-theme-value="dark"
                                    aria-pressed="false">
                                    <span class="theme-icon d-flex fs-base me-2">
                                        <i class="ci-moon"></i>
                                    </span>
                                    <span class="theme-label">Dark</span>
                                    <i class="item-active-indicator ci-check ms-auto"></i>
                                </button>
                            </li>
                            <li>
                                <button type="button" class="dropdown-item" data-bs-theme-value="auto"
                                    aria-pressed="false">
                                    <span class="theme-icon d-flex fs-base me-2">
                                        <i class="ci-auto"></i>
                                    </span>
                                    <span class="theme-label">Auto</span>
                                    <i class="item-active-indicator ci-check ms-auto"></i>
                                </button>
                            </li>
                        </ul>
                    </div>

                    <!-- Search toggle button visible on screens < 992px wide (lg breakpoint) -->
                    <button type="button"
                        class="border-0 btn btn-icon btn-lg fs-xl btn-outline-secondary rounded-circle animate-shake d-lg-none"
                        data-bs-toggle="collapse" data-bs-target="#searchBar" aria-controls="searchBar"
                        aria-expanded="false" aria-label="Toggle search bar">
                        <i class="ci-search animate-target"></i>
                    </button>

                    <!-- Account button logged in state visible on screens > 768px wide (md breakpoint) -->
                    <div class="position-relative" id="accountBtn">
                        @if (Auth::check())
                            <a class="btn btn-icon btn-lg btn-secondary animate-scale fs-5 fw-normal position-relative rounded-circle ms-2 d-none d-md-inline-flex"
                                href="{{ route('orders') }}" data-bs-toggle="tooltip" data-bs-placement="bottom"
                                data-bs-custom-class="tooltip-sm text-nowrap" data-bs-container="#accountBtn"
                                title="{{ Auth::user()->name }}">
                                <span class="animate-target">{{ Auth::user()->name[0] }}</span>
                            </a>
                        @else
                            <a class="btn btn-icon btn-lg btn-secondary animate-scale fs-5 fw-normal position-relative rounded-circle ms-2 d-none d-md-inline-flex"
                                href="{{ route('login') }}" data-bs-toggle="tooltip" data-bs-placement="bottom"
                                data-bs-custom-class="tooltip-sm text-nowrap" data-bs-container="#accountBtn"
                                title="Login">
                                <span class="animate-target">
                                    <i class="ci-login"></i>
                                </span>
                            </a>
                        @endif
                    </div>

                    <!-- Cart button -->
                    <button type="button"
                        class="btn btn-icon btn-lg btn-secondary position-relative rounded-circle ms-2"
                        data-bs-toggle="offcanvas" data-bs-target="#shoppingCart" aria-controls="shoppingCart"
                        aria-label="Shopping cart">
                        <span
                            class="top-0 border position-absolute start-100 mt-n1 ms-n3 badge text-bg-success border-3 border-dark rounded-pill"
                            style="--cz-badge-padding-y: .25em; --cz-badge-padding-x: .42em">3</span>
                        <span
                            class="top-0 position-absolute start-0 d-flex align-items-center justify-content-center w-100 h-100 rounded-circle animate-slide-end fs-lg">
                            <i class="ci-shopping-cart animate-target ms-n1"></i>
                        </span>
                    </button>
                </div>
            </div>
        </div>
        <div class="pb-1 navbar-stuck-hide"></div>
    </div>

    <!-- Search visible on screens < 992px wide (lg breakpoint). It is hidden inside collapse by default -->
    <div class="collapse position-absolute top-100 z-2 w-100 bg-dark d-lg-none" id="searchBar">
        <div class="container my-3 position-relative" data-bs-theme="dark">
            <i class="text-white ci-search position-absolute top-50 translate-middle-y d-flex fs-lg ms-3"></i>
            <input type="search" class="border-white form-control form-icon-start rounded-pill"
                placeholder="Search the products" data-autofocus="collapse">
        </div>
    </div>

    <!-- Main navigation that turns into offcanvas on screens < 992px wide (lg breakpoint) -->
    <div class="collapse navbar-stuck-hide" id="stuckNav">
        <nav class="offcanvas offcanvas-start" id="navbarNav" tabindex="-1" aria-labelledby="navbarNavLabel">
            <div class="py-3 offcanvas-header">
                <h5 class="offcanvas-title" id="navbarNavLabel">Browse Cartzilla</h5>
                <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
            </div>
            <div class="py-3 offcanvas-body py-lg-0">
                <div class="container px-0 px-lg-3">
                    <div class="row">

                        @include('components.account.mega-menu')

                        @include('components.navbar')
                    </div>
                </div>
            </div>
            <div class="py-3 mt-3 offcanvas-header border-top d-md-none">
                <a class="d-flex align-items-center text-decoration-none" href="#accountSidebar"
                    data-bs-toggle="offcanvas" aria-controls="accountSidebar">
                    <div class="flex-shrink-0 mb-0 h5 d-flex justify-content-center align-items-center text-primary bg-primary-subtle lh-1 rounded-circle"
                        style="width: 3rem; height: 3rem">S</div>
                    <div class="ps-3">
                        <h5 class="mb-1 h6">Susan Gardner</h5>
                        <div class="d-flex flex-nowrap fs-sm text-body">
                            <svg class="flex-shrink-0 text-warning me-2" xmlns="http://www.w3.org/2000/svg"
                                width="16" height="16" fill="currentColor">
                                <path
                                    d="M1.333 9.667H7.5V16h-5c-.64 0-1.167-.527-1.167-1.167V9.667zm13.334 0v5.167c0 .64-.527 1.167-1.167 1.167h-5V9.667h6.167zM0 5.833V7.5c0 .64.527 1.167 1.167 1.167h.167H7.5v-1-3H1.167C.527 4.667 0 5.193 0 5.833zm14.833-1.166H8.5v3 1h6.167.167C15.473 8.667 16 8.14 16 7.5V5.833c0-.64-.527-1.167-1.167-1.167z">
                                </path>
                                <path
                                    d="M8 5.363a.5.5 0 0 1-.495-.573C7.752 3.123 9.054-.03 12.219-.03c1.807.001 2.447.977 2.447 1.813 0 1.486-2.069 3.58-6.667 3.58zM12.219.971c-2.388 0-3.295 2.27-3.595 3.377 1.884-.088 3.072-.565 3.756-.971.949-.563 1.287-1.193 1.287-1.595 0-.599-.747-.811-1.447-.811z">
                                </path>
                                <path
                                    d="M8.001 5.363c-4.598 0-6.667-2.094-6.667-3.58 0-.836.641-1.812 2.448-1.812 3.165 0 4.467 3.153 4.713 4.819a.5.5 0 0 1-.495.573zM3.782.971c-.7 0-1.448.213-1.448.812 0 .851 1.489 2.403 5.042 2.566C7.076 3.241 6.169.971 3.782.971z">
                                </path>
                            </svg> 100 bonuses available
                        </div>
                    </div>
                </a>
            </div>
        </nav>
    </div>
</header>

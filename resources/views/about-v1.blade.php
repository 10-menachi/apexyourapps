<!DOCTYPE html>
<html lang="en" data-bs-theme="light" data-pwa="true">

<head>
    <meta charset="utf-8">

    <!-- Viewport -->
    <meta name="viewport"
        content="width=device-width, initial-scale=1, minimum-scale=1, maximum-scale=1, viewport-fit=cover">

    <!-- SEO Meta Tags -->
    <title>Apex | About v.1</title>
    <meta name="description" content="Apex - Multipurpose Bootstrap E-Commerce HTML Template">
    <meta name="keywords"
        content="online shop, e-commerce, online store, market, multipurpose, product landing, cart, checkout, ui kit, light and dark mode, bootstrap, html5, css3, javascript, gallery, slider, mobile, pwa">
    <meta name="author" content="Createx Studio">

    <!-- Webmanifest + Favicon / App icons -->
    <meta name="apple-mobile-web-app-capable" content="yes">
    <meta name="apple-mobile-web-app-status-bar-style" content="black">
    <link rel="manifest" href="/manifest.json">
    <link rel="icon" type="image/png" href="assets/app-icons/icon-32x32.png" sizes="32x32">
    <link rel="apple-touch-icon" href="assets/app-icons/icon-180x180.png">

    <!-- Theme switcher (color modes) -->
    <script src="assets/js/theme-switcher.js"></script>

    <!-- Preloaded local web font (Inter) -->
    <link rel="preload" href="assets/fonts/inter-variable-latin.woff2" as="font" type="font/woff2" crossorigin="">

    <!-- Font icons -->
    <link rel="preload" href="assets/icons/Apex-icons.woff2" as="font" type="font/woff2" crossorigin="">
    <link rel="stylesheet" href="assets/icons/Apex-icons.min.css">

    <!-- Vendor styles -->
    <link rel="stylesheet" href="assets/vendor/swiper/swiper-bundle.min.css">
    <link rel="stylesheet" href="assets/vendor/glightbox/glightbox.min.css">

    <!-- Bootstrap + Theme styles -->
    <link rel="preload" href="assets/css/theme.min.css" as="style">
    <link rel="preload" href="assets/css/theme.rtl.min.css" as="style">
    <link rel="stylesheet" href="assets/css/theme.min.css" id="theme-styles">

    <!-- Customizer -->
    <script src="assets/js/customizer.min.js"></script>
</head>


<!-- Body -->

<body>
    <!-- Shopping cart offcanvas -->
    <div class="offcanvas offcanvas-end pb-sm-2 px-sm-2" id="shoppingCart" tabindex="-1"
        aria-labelledby="shoppingCartLabel" style="width: 500px">

        <!-- Header -->
        <div class="offcanvas-header flex-column align-items-start py-3 pt-lg-4">
            <div class="d-flex align-items-center justify-content-between w-100 mb-3 mb-lg-4">
                <h4 class="offcanvas-title" id="shoppingCartLabel">Shopping cart</h4>
                <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
            </div>
            <p class="fs-sm">Buy <span class="text-dark-emphasis fw-semibold">$183</span> more to get <span
                    class="text-dark-emphasis fw-semibold">Free Shipping</span></p>
            <div class="progress w-100" role="progressbar" aria-label="Free shipping progress" aria-valuenow="75"
                aria-valuemin="0" aria-valuemax="100" style="height: 4px">
                <div class="progress-bar bg-warning rounded-pill" style="width: 75%"></div>
            </div>
        </div>

        <!-- Items -->
        <div class="offcanvas-body d-flex flex-column gap-4 pt-2">

            <!-- Item -->
            <div class="d-flex align-items-center">
                <a class="flex-shrink-0" href="shop-product-general-electronics.html">
                    <img src="assets/img/shop/electronics/thumbs/08.png" width="110" alt="iPhone 14">
                </a>
                <div class="w-100 min-w-0 ps-2 ps-sm-3">
                    <h5 class="d-flex animate-underline mb-2">
                        <a class="d-block fs-sm fw-medium text-truncate animate-target"
                            href="shop-product-general-electronics.html">Apple iPhone 14 128GB White</a>
                    </h5>
                    <div class="h6 pb-1 mb-2">$899.00</div>
                    <div class="d-flex align-items-center justify-content-between">
                        <div class="count-input rounded-2">
                            <button type="button" class="btn btn-icon btn-sm" data-decrement=""
                                aria-label="Decrement quantity">
                                <i class="ci-minus"></i>
                            </button>
                            <input type="number" class="form-control form-control-sm" value="1" readonly="">
                            <button type="button" class="btn btn-icon btn-sm" data-increment=""
                                aria-label="Increment quantity">
                                <i class="ci-plus"></i>
                            </button>
                        </div>
                        <button type="button" class="btn-close fs-sm" data-bs-toggle="tooltip"
                            data-bs-custom-class="tooltip-sm" data-bs-title="Remove"
                            aria-label="Remove from cart"></button>
                    </div>
                </div>
            </div>

            <!-- Item -->
            <div class="d-flex align-items-center">
                <a class="position-relative flex-shrink-0" href="shop-product-general-electronics.html">
                    <span class="badge text-bg-danger position-absolute top-0 start-0">-10%</span>
                    <img src="assets/img/shop/electronics/thumbs/09.png" width="110" alt="iPad Pro">
                </a>
                <div class="w-100 min-w-0 ps-2 ps-sm-3">
                    <h5 class="d-flex animate-underline mb-2">
                        <a class="d-block fs-sm fw-medium text-truncate animate-target"
                            href="shop-product-general-electronics.html">Tablet Apple iPad Pro M2</a>
                    </h5>
                    <div class="h6 pb-1 mb-2">$989.00 <del class="text-body-tertiary fs-xs fw-normal">$1,099.00</del>
                    </div>
                    <div class="d-flex align-items-center justify-content-between">
                        <div class="count-input rounded-2">
                            <button type="button" class="btn btn-icon btn-sm" data-decrement=""
                                aria-label="Decrement quantity">
                                <i class="ci-minus"></i>
                            </button>
                            <input type="number" class="form-control form-control-sm" value="1"
                                readonly="">
                            <button type="button" class="btn btn-icon btn-sm" data-increment=""
                                aria-label="Increment quantity">
                                <i class="ci-plus"></i>
                            </button>
                        </div>
                        <button type="button" class="btn-close fs-sm" data-bs-toggle="tooltip"
                            data-bs-custom-class="tooltip-sm" data-bs-title="Remove"
                            aria-label="Remove from cart"></button>
                    </div>
                </div>
            </div>

            <!-- Item -->
            <div class="d-flex align-items-center">
                <a class="flex-shrink-0" href="shop-product-general-electronics.html">
                    <img src="assets/img/shop/electronics/thumbs/01.png" width="110" alt="Smart Watch">
                </a>
                <div class="w-100 min-w-0 ps-2 ps-sm-3">
                    <h5 class="d-flex animate-underline mb-2">
                        <a class="d-block fs-sm fw-medium text-truncate animate-target"
                            href="shop-product-general-electronics.html">Smart Watch Series 7, White</a>
                    </h5>
                    <div class="h6 pb-1 mb-2">$429.00</div>
                    <div class="d-flex align-items-center justify-content-between">
                        <div class="count-input rounded-2">
                            <button type="button" class="btn btn-icon btn-sm" data-decrement=""
                                aria-label="Decrement quantity">
                                <i class="ci-minus"></i>
                            </button>
                            <input type="number" class="form-control form-control-sm" value="1"
                                readonly="">
                            <button type="button" class="btn btn-icon btn-sm" data-increment=""
                                aria-label="Increment quantity">
                                <i class="ci-plus"></i>
                            </button>
                        </div>
                        <button type="button" class="btn-close fs-sm" data-bs-toggle="tooltip"
                            data-bs-custom-class="tooltip-sm" data-bs-title="Remove"
                            aria-label="Remove from cart"></button>
                    </div>
                </div>
            </div>
        </div>

        <!-- Footer -->
        <div class="offcanvas-header flex-column align-items-start">
            <div class="d-flex align-items-center justify-content-between w-100 mb-3 mb-md-4">
                <span class="text-light-emphasis">Subtotal:</span>
                <span class="h6 mb-0">$2,317.00</span>
            </div>
            <div class="d-flex w-100 gap-3">
                <a class="btn btn-lg btn-secondary w-100" href="checkout-v1-cart.html">View cart</a>
                <a class="btn btn-lg btn-primary w-100" href="checkout-v1-delivery-1.html">Checkout</a>
            </div>
        </div>
    </div>


    <!-- Navigation bar (Page header) -->
    <header class="navbar navbar-expand-lg navbar-dark bg-dark d-block z-fixed p-0"
        data-sticky-navbar="{&quot;offset&quot;: 200}">
        <div class="container d-block py-1 py-lg-3" data-bs-theme="dark">
            <div class="navbar-stuck-hide pt-1"></div>
            <div class="row flex-nowrap align-items-center g-0">
                <div class="col col-lg-3 d-flex align-items-center">

                    <!-- Mobile offcanvas menu toggler (Hamburger) -->
                    <button type="button" class="navbar-toggler me-4 me-lg-0" data-bs-toggle="offcanvas"
                        data-bs-target="#navbarNav" aria-controls="navbarNav" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>

                    <!-- Navbar brand (Logo) -->
                    <a href="home-electronics.html" class="navbar-brand me-0">
                        <span class="d-none d-sm-flex flex-shrink-0 text-primary me-2">
                            <svg xmlns="http://www.w3.org/2000/svg" width="36" height="36">
                                <path
                                    d="M36 18.01c0 8.097-5.355 14.949-12.705 17.2a18.12 18.12 0 0 1-5.315.79C9.622 36 2.608 30.313.573 22.611.257 21.407.059 20.162 0 18.879v-1.758c.02-.395.059-.79.099-1.185.099-.908.277-1.817.514-2.686C2.687 5.628 9.682 0 18 0c5.572 0 10.551 2.528 13.871 6.517 1.502 1.797 2.648 3.91 3.359 6.201.494 1.659.771 3.436.771 5.292z"
                                    fill="currentColor"></path>
                                <g fill="#fff">
                                    <path
                                        d="M17.466 21.624c-.514 0-.988-.316-1.146-.829-.198-.632.138-1.303.771-1.501l7.666-2.469-1.205-8.254-13.317 4.621a1.19 1.19 0 0 1-1.521-.75 1.19 1.19 0 0 1 .751-1.521l13.89-4.818c.553-.197 1.166-.138 1.64.158a1.82 1.82 0 0 1 .85 1.284l1.344 9.183c.138.987-.494 1.994-1.482 2.33l-7.864 2.528-.375.04zm7.31.138c-.178-.632-.85-1.007-1.482-.81l-5.177 1.58c-2.331.79-3.28.02-3.418-.099l-6.56-8.412a4.25 4.25 0 0 0-4.406-1.758l-3.122.987c-.237.889-.415 1.777-.514 2.686l4.228-1.363a1.84 1.84 0 0 1 1.857.81l6.659 8.551c.751.948 2.015 1.323 3.359 1.323.909 0 1.857-.178 2.687-.474l5.078-1.54c.632-.178 1.008-.829.81-1.481z">
                                    </path>
                                    <use href="#czlogo"></use>
                                    <use href="#czlogo" x="8.516" y="-2.172"></use>
                                </g>
                                <defs>
                                    <path id="czlogo"
                                        d="M18.689 28.654a1.94 1.94 0 0 1-1.936 1.935 1.94 1.94 0 0 1-1.936-1.935 1.94 1.94 0 0 1 1.936-1.935 1.94 1.94 0 0 1 1.936 1.935z">
                                    </path>
                                </defs>
                            </svg>
                        </span>
                        Apex
                    </a>
                </div>
                <div class="col col-lg-9 d-flex align-items-center justify-content-end">

                    <!-- Search visible on screens > 991px wide (lg breakpoint) -->
                    <div class="position-relative flex-fill d-none d-lg-block pe-4 pe-xl-5">
                        <i
                            class="ci-search position-absolute top-50 translate-middle-y d-flex fs-lg text-white ms-3"></i>
                        <input type="search"
                            class="form-control form-control-lg form-icon-start border-white rounded-pill"
                            placeholder="Search the products">
                    </div>

                    <!-- Sale link visible on screens > 1200px wide (xl breakpoint) -->
                    <a class="d-none d-xl-flex align-items-center text-decoration-none animate-shake navbar-stuck-hide me-3 me-xl-4 me-xxl-5"
                        href="shop-catalog-electronics.html">
                        <div
                            class="btn btn-icon btn-lg fs-lg text-primary bg-body-secondary bg-opacity-75 pe-none rounded-circle">
                            <i class="ci-percent animate-target"></i>
                        </div>
                        <div class="ps-2 text-nowrap">
                            <div class="fs-xs text-body">Only this month</div>
                            <div class="fw-medium text-white">Super Sale 20%</div>
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
                                class="theme-switcher btn btn-icon btn-lg btn-outline-secondary fs-lg border-0 rounded-circle animate-scale"
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
                            class="btn btn-icon btn-lg fs-xl btn-outline-secondary border-0 rounded-circle animate-shake d-lg-none"
                            data-bs-toggle="collapse" data-bs-target="#searchBar" aria-expanded="false"
                            aria-controls="searchBar" aria-label="Toggle search bar">
                            <i class="ci-search animate-target"></i>
                        </button>

                        <!-- Account button visible on screens > 768px wide (md breakpoint) -->
                        <a class="btn btn-icon btn-lg fs-lg btn-outline-secondary border-0 rounded-circle animate-shake d-none d-md-inline-flex"
                            href="account-signin.html">
                            <i class="ci-user animate-target"></i>
                            <span class="visually-hidden">Account</span>
                        </a>

                        <!-- Wishlist button visible on screens > 768px wide (md breakpoint) -->
                        <a class="btn btn-icon btn-lg fs-lg btn-outline-secondary border-0 rounded-circle animate-pulse d-none d-md-inline-flex"
                            href="account-wishlist.html">
                            <i class="ci-heart animate-target"></i>
                            <span class="visually-hidden">Wishlist</span>
                        </a>

                        <!-- Cart button -->
                        <button type="button"
                            class="btn btn-icon btn-lg btn-secondary position-relative rounded-circle ms-2"
                            data-bs-toggle="offcanvas" data-bs-target="#shoppingCart" aria-controls="shoppingCart"
                            aria-label="Shopping cart">
                            <span
                                class="position-absolute top-0 start-100 mt-n1 ms-n3 badge text-bg-success border border-3 border-dark rounded-pill"
                                style="--cz-badge-padding-y: .25em; --cz-badge-padding-x: .42em">3</span>
                            <span
                                class="position-absolute top-0 start-0 d-flex align-items-center justify-content-center w-100 h-100 rounded-circle animate-slide-end fs-lg">
                                <i class="ci-shopping-cart animate-target ms-n1"></i>
                            </span>
                        </button>
                    </div>
                </div>
            </div>
            <div class="navbar-stuck-hide pb-1"></div>
        </div>

        <!-- Search visible on screens < 992px wide (lg breakpoint). It is hidden inside collapse by default -->
        <div class="collapse position-absolute top-100 z-2 w-100 bg-dark d-lg-none" id="searchBar">
            <div class="container position-relative my-3" data-bs-theme="dark">
                <i class="ci-search position-absolute top-50 translate-middle-y d-flex fs-lg text-white ms-3"></i>
                <input type="search" class="form-control form-icon-start border-white rounded-pill"
                    placeholder="Search the products" data-autofocus="collapse">
            </div>
        </div>

        <!-- Main navigation that turns into offcanvas on screens < 992px wide (lg breakpoint) -->
        <div class="collapse navbar-stuck-hide" id="stuckNav">
            <nav class="offcanvas offcanvas-start" id="navbarNav" tabindex="-1" aria-labelledby="navbarNavLabel">
                <div class="offcanvas-header py-3">
                    <h5 class="offcanvas-title" id="navbarNavLabel">Browse Apex</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="offcanvas"
                        aria-label="Close"></button>
                </div>
                <div class="offcanvas-body py-3 py-lg-0">
                    <div class="container px-0 px-lg-3">
                        <div class="row">

                            <!-- Categories mega menu -->
                            <div class="col-lg-3">
                                <div class="navbar-nav">
                                    <div class="dropdown w-100">

                                        <!-- Buttton visible on screens > 991px wide (lg breakpoint) -->
                                        <div class="cursor-pointer d-none d-lg-block" data-bs-toggle="dropdown"
                                            data-bs-trigger="hover" data-bs-theme="dark">
                                            <a class="position-absolute top-0 start-0 w-100 h-100"
                                                href="shop-categories-electronics.html">
                                                <span class="visually-hidden">Categories</span>
                                            </a>
                                            <button type="button"
                                                class="btn btn-lg btn-secondary dropdown-toggle w-100 rounded-bottom-0 justify-content-start pe-none">
                                                <i class="ci-grid fs-lg"></i>
                                                <span class="ms-2 me-auto">Categories</span>
                                            </button>
                                        </div>

                                        <!-- Buttton visible on screens < 992px wide (lg breakpoint) -->
                                        <button type="button"
                                            class="btn btn-lg btn-secondary dropdown-toggle w-100 justify-content-start d-lg-none mb-2"
                                            data-bs-toggle="dropdown" data-bs-auto-close="outside">
                                            <i class="ci-grid fs-lg"></i>
                                            <span class="ms-2 me-auto">Categories</span>
                                        </button>

                                        <!-- Mega menu -->
                                        <ul class="dropdown-menu w-100 rounded-top-0 rounded-bottom-4 py-1 p-lg-1"
                                            style="--cz-dropdown-spacer: 0; --cz-dropdown-item-padding-y: .625rem; --cz-dropdown-item-spacer: 0">
                                            <li class="d-lg-none pt-2">
                                                <a class="dropdown-item fw-medium"
                                                    href="shop-categories-electronics.html">
                                                    <i class="ci-grid fs-xl opacity-60 pe-1 me-2"></i>
                                                    All Categories
                                                    <i class="ci-chevron-right fs-base ms-auto me-n1"></i>
                                                </a>
                                            </li>
                                            <li class="dropend position-static">
                                                <div class="position-relative rounded pt-2 pb-1 px-lg-2"
                                                    data-bs-toggle="dropdown" data-bs-trigger="hover">
                                                    <a class="dropdown-item fw-medium stretched-link d-none d-lg-flex"
                                                        href="shop-catalog-electronics.html">
                                                        <i class="ci-computer fs-xl opacity-60 pe-1 me-2"></i>
                                                        <span class="text-truncate">Computers &amp; Accessories</span>
                                                        <i class="ci-chevron-right fs-base ms-auto me-n1"></i>
                                                    </a>
                                                    <div
                                                        class="dropdown-item fw-medium text-wrap stretched-link d-lg-none">
                                                        <i class="ci-computer fs-xl opacity-60 pe-1 me-2"></i>
                                                        Computers &amp; Accessories
                                                        <i class="ci-chevron-down fs-base ms-auto me-n1"></i>
                                                    </div>
                                                </div>
                                                <div class="dropdown-menu rounded-4 p-4"
                                                    style="top: 1rem; height: calc(100% - .1875rem); --cz-dropdown-spacer: .3125rem; animation: none;">
                                                    <div class="d-flex flex-column flex-lg-row h-100 gap-4">
                                                        <div style="min-width: 194px">
                                                            <div class="d-flex w-100">
                                                                <a class="animate-underline animate-target d-inline h6 text-dark-emphasis text-decoration-none text-truncate"
                                                                    href="shop-catalog-electronics.html">Computers</a>
                                                            </div>
                                                            <ul class="nav flex-column gap-2 mt-n2">
                                                                <li class="d-flex w-100 pt-1">
                                                                    <a class="nav-link animate-underline animate-target d-inline fw-normal text-truncate p-0"
                                                                        href="shop-catalog-electronics.html">Laptops
                                                                        &amp; Tablets</a>
                                                                </li>
                                                                <li class="d-flex w-100 pt-1">
                                                                    <a class="nav-link animate-underline animate-target d-inline fw-normal text-truncate p-0"
                                                                        href="shop-catalog-electronics.html">Desktop
                                                                        Computers</a>
                                                                </li>
                                                                <li class="d-flex w-100 pt-1">
                                                                    <a class="nav-link animate-underline animate-target d-inline fw-normal text-truncate p-0"
                                                                        href="shop-catalog-electronics.html">External
                                                                        Components</a>
                                                                </li>
                                                                <li class="d-flex w-100 pt-1">
                                                                    <a class="nav-link animate-underline animate-target d-inline fw-normal text-truncate p-0"
                                                                        href="shop-catalog-electronics.html">Interal
                                                                        Components</a>
                                                                </li>
                                                                <li class="d-flex w-100 pt-1">
                                                                    <a class="nav-link animate-underline animate-target d-inline fw-normal text-truncate p-0"
                                                                        href="shop-catalog-electronics.html">Networking
                                                                        Products (NAS)</a>
                                                                </li>
                                                                <li class="d-flex w-100 pt-1">
                                                                    <a class="nav-link animate-underline animate-target d-inline fw-normal text-truncate p-0"
                                                                        href="shop-catalog-electronics.html">Single
                                                                        Board Computers</a>
                                                                </li>
                                                                <li class="d-flex w-100 pt-1">
                                                                    <a class="nav-link animate-underline animate-target d-inline fw-normal text-truncate p-0"
                                                                        href="shop-catalog-electronics.html">Desktop
                                                                        Barebones</a>
                                                                </li>
                                                            </ul>
                                                        </div>
                                                        <div style="min-width: 194px">
                                                            <div class="d-flex w-100">
                                                                <a class="animate-underline animate-target d-inline h6 text-dark-emphasis text-decoration-none text-truncate"
                                                                    href="shop-catalog-electronics.html">Accessories</a>
                                                            </div>
                                                            <ul class="nav flex-column gap-2 mt-n2">
                                                                <li class="d-flex w-100 pt-1">
                                                                    <a class="nav-link animate-underline animate-target d-inline fw-normal text-truncate p-0"
                                                                        href="shop-catalog-electronics.html">Monitors</a>
                                                                </li>
                                                                <li class="d-flex w-100 pt-1">
                                                                    <a class="nav-link animate-underline animate-target d-inline fw-normal text-truncate p-0"
                                                                        href="shop-catalog-electronics.html">Bags,
                                                                        Cases &amp; Sleeves</a>
                                                                </li>
                                                                <li class="d-flex w-100 pt-1">
                                                                    <a class="nav-link animate-underline animate-target d-inline fw-normal text-truncate p-0"
                                                                        href="shop-catalog-electronics.html">Batteries</a>
                                                                </li>
                                                                <li class="d-flex w-100 pt-1">
                                                                    <a class="nav-link animate-underline animate-target d-inline fw-normal text-truncate p-0"
                                                                        href="shop-catalog-electronics.html">Charges
                                                                        &amp; Adapters</a>
                                                                </li>
                                                                <li class="d-flex w-100 pt-1">
                                                                    <a class="nav-link animate-underline animate-target d-inline fw-normal text-truncate p-0"
                                                                        href="shop-catalog-electronics.html">Cooling
                                                                        Pads</a>
                                                                </li>
                                                                <li class="d-flex w-100 pt-1">
                                                                    <a class="nav-link animate-underline animate-target d-inline fw-normal text-truncate p-0"
                                                                        href="shop-catalog-electronics.html">Mounts</a>
                                                                </li>
                                                                <li class="d-flex w-100 pt-1">
                                                                    <a class="nav-link animate-underline animate-target d-inline fw-normal text-truncate p-0"
                                                                        href="shop-catalog-electronics.html">Replacement
                                                                        Screens</a>
                                                                </li>
                                                                <li class="d-flex w-100 pt-1">
                                                                    <a class="nav-link animate-underline animate-target d-inline fw-normal text-truncate p-0"
                                                                        href="shop-catalog-electronics.html">Security
                                                                        Locks</a>
                                                                </li>
                                                                <li class="d-flex w-100 pt-1">
                                                                    <a class="nav-link animate-underline animate-target d-inline fw-normal text-truncate p-0"
                                                                        href="shop-catalog-electronics.html">Stands</a>
                                                                </li>
                                                            </ul>
                                                        </div>
                                                        <div class="d-none d-lg-block">
                                                            <div class="d-none d-xl-block" style="width: 284px"></div>
                                                            <div class="d-xl-none" style="width: 240px"></div>
                                                            <div
                                                                class="position-relative d-flex flex-column justify-content-center h-100 bg-body-secondary rounded-5 py-4 px-3">
                                                                <div class="text-center px-2">
                                                                    <span
                                                                        class="badge bg-danger bg-opacity-10 text-danger fs-sm rounded-pill mb-2">Save
                                                                        up to $400</span>
                                                                    <div class="fs-sm text-light-emphasis mb-2">Starts
                                                                        from <del>$1,599.00</del> $1,399.00</div>
                                                                    <div class="h2 mb-4">Surface Laptop Studio</div>
                                                                </div>
                                                                <img src="assets/img/mega-menu/electronics/01.png"
                                                                    width="252" alt="Surface Laptop Studio">
                                                                <div class="text-center mt-4">
                                                                    <a class="btn btn-sm btn-primary stretched-link"
                                                                        href="shop-catalog-electronics.html">Shop
                                                                        now</a>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </li>
                                            <li class="dropend position-static">
                                                <div class="position-relative rounded pb-1 px-lg-2" tabindex="0"
                                                    data-bs-toggle="dropdown" data-bs-trigger="hover">
                                                    <a class="dropdown-item fw-medium stretched-link d-none d-lg-flex"
                                                        href="shop-catalog-electronics.html">
                                                        <i class="ci-smartphone-2 fs-xl opacity-60 pe-1 me-2"></i>
                                                        <span class="text-truncate">Smartphones &amp; Tablets</span>
                                                        <i class="ci-chevron-right fs-base ms-auto me-n1"></i>
                                                    </a>
                                                    <div class="dropdown-item fw-medium stretched-link d-lg-none">
                                                        <i class="ci-smartphone-2 fs-xl opacity-60 pe-1 me-2"></i>
                                                        Smartphones &amp; Tablets
                                                        <i class="ci-chevron-down fs-base ms-auto me-n1"></i>
                                                    </div>
                                                </div>
                                                <div class="dropdown-menu rounded-4 p-4"
                                                    style="top: 1rem; height: calc(100% - .1875rem); --cz-dropdown-spacer: .3125rem; animation: none;">
                                                    <div class="d-flex flex-column flex-lg-row h-100 gap-4">
                                                        <div style="min-width: 194px">
                                                            <div class="d-flex w-100">
                                                                <a class="animate-underline animate-target d-inline h6 text-dark-emphasis text-decoration-none text-truncate"
                                                                    href="shop-catalog-electronics.html">Smartphones</a>
                                                            </div>
                                                            <ul class="nav flex-column gap-2 mt-n2">
                                                                <li class="d-flex w-100 pt-1">
                                                                    <a class="nav-link animate-underline animate-target d-inline fw-normal text-truncate p-0"
                                                                        href="shop-catalog-electronics.html">Apple
                                                                        iPhone</a>
                                                                </li>
                                                                <li class="d-flex w-100 pt-1">
                                                                    <a class="nav-link animate-underline animate-target d-inline fw-normal text-truncate p-0"
                                                                        href="shop-catalog-electronics.html">Google
                                                                        Pixel</a>
                                                                </li>
                                                                <li class="d-flex w-100 pt-1">
                                                                    <a class="nav-link animate-underline animate-target d-inline fw-normal text-truncate p-0"
                                                                        href="shop-catalog-electronics.html">Android
                                                                        Smartphones</a>
                                                                </li>
                                                                <li class="d-flex w-100 pt-1">
                                                                    <a class="nav-link animate-underline animate-target d-inline fw-normal text-truncate p-0"
                                                                        href="shop-catalog-electronics.html">Phablets</a>
                                                                </li>
                                                            </ul>
                                                            <div class="d-flex w-100 pt-4">
                                                                <a class="animate-underline animate-target d-inline h6 text-dark-emphasis text-decoration-none text-truncate"
                                                                    href="shop-catalog-electronics.html">Tablets</a>
                                                            </div>
                                                            <ul class="nav flex-column gap-2 mt-n2">
                                                                <li class="d-flex w-100 pt-1">
                                                                    <a class="nav-link animate-underline animate-target d-inline fw-normal text-truncate p-0"
                                                                        href="shop-catalog-electronics.html">Apple
                                                                        iPad</a>
                                                                </li>
                                                                <li class="d-flex w-100 pt-1">
                                                                    <a class="nav-link animate-underline animate-target d-inline fw-normal text-truncate p-0"
                                                                        href="shop-catalog-electronics.html">Android
                                                                        Tablets</a>
                                                                </li>
                                                                <li class="d-flex w-100 pt-1">
                                                                    <a class="nav-link animate-underline animate-target d-inline fw-normal text-truncate p-0"
                                                                        href="shop-catalog-electronics.html">Tablets
                                                                        with Keyboard</a>
                                                                </li>
                                                            </ul>
                                                        </div>
                                                        <div style="min-width: 194px">
                                                            <div class="d-flex w-100">
                                                                <a class="animate-underline animate-target d-inline h6 text-dark-emphasis text-decoration-none text-truncate"
                                                                    href="shop-catalog-electronics.html">Accessories</a>
                                                            </div>
                                                            <ul class="nav flex-column gap-2 mt-n2">
                                                                <li class="d-flex w-100 pt-1">
                                                                    <a class="nav-link animate-underline animate-target d-inline fw-normal text-truncate p-0"
                                                                        href="shop-catalog-electronics.html">Accessory
                                                                        Kits</a>
                                                                </li>
                                                                <li class="d-flex w-100 pt-1">
                                                                    <a class="nav-link animate-underline animate-target d-inline fw-normal text-truncate p-0"
                                                                        href="shop-catalog-electronics.html">Batteries
                                                                        &amp; Battery Packs</a>
                                                                </li>
                                                                <li class="d-flex w-100 pt-1">
                                                                    <a class="nav-link animate-underline animate-target d-inline fw-normal text-truncate p-0"
                                                                        href="shop-catalog-electronics.html">Bags &amp;
                                                                        Cases</a>
                                                                </li>
                                                                <li class="d-flex w-100 pt-1">
                                                                    <a class="nav-link animate-underline animate-target d-inline fw-normal text-truncate p-0"
                                                                        href="shop-catalog-electronics.html">Cables</a>
                                                                </li>
                                                                <li class="d-flex w-100 pt-1">
                                                                    <a class="nav-link animate-underline animate-target d-inline fw-normal text-truncate p-0"
                                                                        href="shop-catalog-electronics.html">Car
                                                                        Accessories</a>
                                                                </li>
                                                                <li class="d-flex w-100 pt-1">
                                                                    <a class="nav-link animate-underline animate-target d-inline fw-normal text-truncate p-0"
                                                                        href="shop-catalog-electronics.html">Charges
                                                                        &amp; Power Adapters</a>
                                                                </li>
                                                                <li class="d-flex w-100 pt-1">
                                                                    <a class="nav-link animate-underline animate-target d-inline fw-normal text-truncate p-0"
                                                                        href="shop-catalog-electronics.html">FM
                                                                        Transmitters</a>
                                                                </li>
                                                                <li class="d-flex w-100 pt-1">
                                                                    <a class="nav-link animate-underline animate-target d-inline fw-normal text-truncate p-0"
                                                                        href="shop-catalog-electronics.html">Lens
                                                                        Attachments</a>
                                                                </li>
                                                                <li class="d-flex w-100 pt-1">
                                                                    <a class="nav-link animate-underline animate-target d-inline fw-normal text-truncate p-0"
                                                                        href="shop-catalog-electronics.html">Mounts
                                                                        &amp; Standsv</a>
                                                                </li>
                                                                <li class="d-flex w-100 pt-1">
                                                                    <a class="nav-link animate-underline animate-target d-inline fw-normal text-truncate p-0"
                                                                        href="shop-catalog-electronics.html">Repair
                                                                        Kits</a>
                                                                </li>
                                                                <li class="d-flex w-100 pt-1">
                                                                    <a class="nav-link animate-underline animate-target d-inline fw-normal text-truncate p-0"
                                                                        href="shop-catalog-electronics.html">Replacement
                                                                        Parts</a>
                                                                </li>
                                                                <li class="d-flex w-100 pt-1">
                                                                    <a class="nav-link animate-underline animate-target d-inline fw-normal text-truncate p-0"
                                                                        href="shop-catalog-electronics.html">Styluses</a>
                                                                </li>
                                                            </ul>
                                                        </div>
                                                        <div class="d-none d-lg-block">
                                                            <div class="d-none d-xl-block" style="width: 284px"></div>
                                                            <div class="d-xl-none" style="width: 240px"></div>
                                                            <div
                                                                class="position-relative d-flex flex-column justify-content-center h-100 bg-body-secondary rounded-5 py-4 px-3">
                                                                <div class="text-center px-2">
                                                                    <i
                                                                        class="ci-apple fs-1 text-dark-emphasis mb-2"></i>
                                                                    <div class="fs-sm text-light-emphasis mb-2">Deal of
                                                                        the week</div>
                                                                    <div class="h2 mb-4">iPad Pro M1</div>
                                                                </div>
                                                                <img src="assets/img/mega-menu/electronics/02.png"
                                                                    width="252" alt="iPad Pro">
                                                                <div class="text-center mt-4">
                                                                    <a class="btn btn-sm btn-primary stretched-link"
                                                                        href="shop-catalog-electronics.html">Shop
                                                                        now</a>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </li>
                                            <li class="dropend position-static">
                                                <div class="position-relative rounded pb-1 px-lg-2" tabindex="0"
                                                    data-bs-toggle="dropdown" data-bs-trigger="hover">
                                                    <a class="dropdown-item fw-medium stretched-link d-none d-lg-flex"
                                                        href="shop-catalog-electronics.html">
                                                        <i class="ci-monitor-2 fs-xl opacity-60 pe-1 me-2"></i>
                                                        <span class="text-truncate">TV, Video &amp; Audio</span>
                                                        <i class="ci-chevron-right fs-base ms-auto me-n1"></i>
                                                    </a>
                                                    <div class="dropdown-item fw-medium stretched-link d-lg-none">
                                                        <i class="ci-monitor-2 fs-xl opacity-60 pe-1 me-2"></i> TV,
                                                        Video &amp; Audio
                                                        <i class="ci-chevron-down fs-base ms-auto me-n1"></i>
                                                    </div>
                                                </div>
                                                <div class="dropdown-menu rounded-4 p-4"
                                                    style="top: 1rem; height: calc(100% - .1875rem); --cz-dropdown-spacer: .3125rem; animation: none;">
                                                    <div class="d-flex flex-column flex-lg-row h-100 gap-lg-4">
                                                        <div style="min-width: 194px">
                                                            <div class="d-flex w-100">
                                                                <a class="animate-underline animate-target d-inline h6 text-dark-emphasis text-decoration-none text-truncate"
                                                                    href="shop-catalog-electronics.html">TV, Video
                                                                    &amp; Audio</a>
                                                            </div>
                                                            <ul class="nav flex-column gap-2 mt-n2">
                                                                <li class="d-flex w-100 pt-1">
                                                                    <a class="nav-link animate-underline animate-target d-inline fw-normal text-truncate p-0"
                                                                        href="shop-catalog-electronics.html">TV
                                                                        Stes</a>
                                                                </li>
                                                                <li class="d-flex w-100 pt-1">
                                                                    <a class="nav-link animate-underline animate-target d-inline fw-normal text-truncate p-0"
                                                                        href="shop-catalog-electronics.html">Home
                                                                        Theater Systems</a>
                                                                </li>
                                                                <li class="d-flex w-100 pt-1">
                                                                    <a class="nav-link animate-underline animate-target d-inline fw-normal text-truncate p-0"
                                                                        href="shop-catalog-electronics.html">DVD
                                                                        Players &amp; Recorders</a>
                                                                </li>
                                                                <li class="d-flex w-100 pt-1">
                                                                    <a class="nav-link animate-underline animate-target d-inline fw-normal text-truncate p-0"
                                                                        href="shop-catalog-electronics.html">Blue-ray
                                                                        Players &amp; Recorders</a>
                                                                </li>
                                                                <li class="d-flex w-100 pt-1">
                                                                    <a class="nav-link animate-underline animate-target d-inline fw-normal text-truncate p-0"
                                                                        href="shop-catalog-electronics.html">HD DVD
                                                                        Players &amp; Recorders</a>
                                                                </li>
                                                                <li class="d-flex w-100 pt-1">
                                                                    <a class="nav-link animate-underline animate-target d-inline fw-normal text-truncate p-0"
                                                                        href="shop-catalog-electronics.html">DVD-VCR
                                                                        Combos</a>
                                                                </li>
                                                                <li class="d-flex w-100 pt-1">
                                                                    <a class="nav-link animate-underline animate-target d-inline fw-normal text-truncate p-0"
                                                                        href="shop-catalog-electronics.html">DTV
                                                                        Converters</a>
                                                                </li>
                                                                <li class="d-flex w-100 pt-1">
                                                                    <a class="nav-link animate-underline animate-target d-inline fw-normal text-truncate p-0"
                                                                        href="shop-catalog-electronics.html">AV
                                                                        Receivers</a>
                                                                </li>
                                                                <li class="d-flex w-100 pt-1">
                                                                    <a class="nav-link animate-underline animate-target d-inline fw-normal text-truncate p-0"
                                                                        href="shop-catalog-electronics.html">AV
                                                                        Amplifiers</a>
                                                                </li>
                                                                <li class="d-flex w-100 pt-1">
                                                                    <a class="nav-link animate-underline animate-target d-inline fw-normal text-truncate p-0"
                                                                        href="shop-catalog-electronics.html">Projectors</a>
                                                                </li>
                                                                <li class="d-flex w-100 pt-1">
                                                                    <a class="nav-link animate-underline animate-target d-inline fw-normal text-truncate p-0"
                                                                        href="shop-catalog-electronics.html">Projection
                                                                        Screens</a>
                                                                </li>
                                                                <li class="d-flex w-100 pt-1">
                                                                    <a class="nav-link animate-underline animate-target d-inline fw-normal text-truncate p-0"
                                                                        href="shop-catalog-electronics.html">Satelite
                                                                        Television</a>
                                                                </li>
                                                                <li class="d-flex w-100 pt-1">
                                                                    <a class="nav-link animate-underline animate-target d-inline fw-normal text-truncate p-0"
                                                                        href="shop-catalog-electronics.html">TV-DTD
                                                                        Combos</a>
                                                                </li>
                                                                <li class="d-flex w-100 pt-1">
                                                                    <a class="nav-link animate-underline animate-target d-inline fw-normal text-truncate p-0"
                                                                        href="shop-catalog-electronics.html">Sound
                                                                        Systems</a>
                                                                </li>
                                                            </ul>
                                                        </div>
                                                        <div style="min-width: 194px">
                                                            <ul class="nav flex-column gap-2 mt-2 mt-lg-0">
                                                                <li class="d-flex w-100 pt-1">
                                                                    <a class="nav-link animate-underline animate-target d-inline fw-normal text-truncate p-0"
                                                                        href="shop-catalog-electronics.html">Home
                                                                        Cinema Systems</a>
                                                                </li>
                                                                <li class="d-flex w-100 pt-1">
                                                                    <a class="nav-link animate-underline animate-target d-inline fw-normal text-truncate p-0"
                                                                        href="shop-catalog-electronics.html">Streaming
                                                                        Media Players</a>
                                                                </li>
                                                                <li class="d-flex w-100 pt-1">
                                                                    <a class="nav-link animate-underline animate-target d-inline fw-normal text-truncate p-0"
                                                                        href="shop-catalog-electronics.html">VCRs</a>
                                                                </li>
                                                                <li class="d-flex w-100 pt-1">
                                                                    <a class="nav-link animate-underline animate-target d-inline fw-normal text-truncate p-0"
                                                                        href="shop-catalog-electronics.html">Video
                                                                        Glasses</a>
                                                                </li>
                                                                <li class="d-flex w-100 pt-1">
                                                                    <a class="nav-link animate-underline animate-target d-inline fw-normal text-truncate p-0"
                                                                        href="shop-catalog-electronics.html">Lens
                                                                        Attachments</a>
                                                                </li>
                                                                <li class="d-flex w-100 pt-1">
                                                                    <a class="nav-link animate-underline animate-target d-inline fw-normal text-truncate p-0"
                                                                        href="shop-catalog-electronics.html">Subwoofers</a>
                                                                </li>
                                                                <li class="d-flex w-100 pt-1">
                                                                    <a class="nav-link animate-underline animate-target d-inline fw-normal text-truncate p-0"
                                                                        href="shop-catalog-electronics.html">Sound
                                                                        Boosters</a>
                                                                </li>
                                                            </ul>
                                                        </div>
                                                        <div class="d-none d-lg-block">
                                                            <div class="d-none d-xl-block" style="width: 284px"></div>
                                                            <div class="d-xl-none" style="width: 240px"></div>
                                                            <div
                                                                class="position-relative d-flex flex-column justify-content-center h-100 bg-body-secondary rounded-5 py-4 px-3">
                                                                <div class="text-center px-2">
                                                                    <div class="fs-sm text-light-emphasis mb-2">Best
                                                                        deal! Save up to <span
                                                                            class="fw-semibold">$500</span></div>
                                                                    <div class="h2 mb-4">LG OLED 4K Smart TV</div>
                                                                </div>
                                                                <img src="assets/img/mega-menu/electronics/03.png"
                                                                    width="252" alt="Smart TV">
                                                                <div class="text-center mt-4">
                                                                    <a class="btn btn-sm btn-primary stretched-link"
                                                                        href="shop-catalog-electronics.html">Shop
                                                                        now</a>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </li>
                                            <li class="dropend position-static">
                                                <div class="position-relative rounded pb-1 px-lg-2" tabindex="0"
                                                    data-bs-toggle="dropdown" data-bs-trigger="hover">
                                                    <a class="dropdown-item fw-medium stretched-link d-none d-lg-flex"
                                                        href="shop-catalog-electronics.html">
                                                        <i class="ci-speaker-2 fs-xl opacity-60 pe-1 me-2"></i>
                                                        <span class="text-truncate">Speakers &amp; Home Music</span>
                                                        <i class="ci-chevron-right fs-base ms-auto me-n1"></i>
                                                    </a>
                                                    <div class="dropdown-item fw-medium stretched-link d-lg-none">
                                                        <i class="ci-speaker-2 fs-xl opacity-60 pe-1 me-2"></i>
                                                        Speakers &amp; Home Music
                                                        <i class="ci-chevron-down fs-base ms-auto me-n1"></i>
                                                    </div>
                                                </div>
                                                <div class="dropdown-menu rounded-4 p-4"
                                                    style="top: 1rem; height: calc(100% - .1875rem); --cz-dropdown-spacer: .3125rem; animation: none;">
                                                    <div class="d-flex flex-column flex-lg-row h-100 gap-4">
                                                        <div style="min-width: 194px">
                                                            <div class="d-flex w-100">
                                                                <a class="animate-underline animate-target d-inline h6 text-dark-emphasis text-decoration-none text-truncate"
                                                                    href="shop-catalog-electronics.html">Speakers</a>
                                                            </div>
                                                            <ul class="nav flex-column gap-2 mt-n2">
                                                                <li class="d-flex w-100 pt-1">
                                                                    <a class="nav-link animate-underline animate-target d-inline fw-normal text-truncate p-0"
                                                                        href="shop-catalog-electronics.html">Smart
                                                                        Speakers</a>
                                                                </li>
                                                                <li class="d-flex w-100 pt-1">
                                                                    <a class="nav-link animate-underline animate-target d-inline fw-normal text-truncate p-0"
                                                                        href="shop-catalog-electronics.html">Bluetooth
                                                                        Speakers</a>
                                                                </li>
                                                                <li class="d-flex w-100 pt-1">
                                                                    <a class="nav-link animate-underline animate-target d-inline fw-normal text-truncate p-0"
                                                                        href="shop-catalog-electronics.html">Bookshelf
                                                                        Speakers</a>
                                                                </li>
                                                                <li class="d-flex w-100 pt-1">
                                                                    <a class="nav-link animate-underline animate-target d-inline fw-normal text-truncate p-0"
                                                                        href="shop-catalog-electronics.html">Ceiling
                                                                        &amp; In-Wall Speakers</a>
                                                                </li>
                                                                <li class="d-flex w-100 pt-1">
                                                                    <a class="nav-link animate-underline animate-target d-inline fw-normal text-truncate p-0"
                                                                        href="shop-catalog-electronics.html">Center-Channel
                                                                        Speakers</a>
                                                                </li>
                                                                <li class="d-flex w-100 pt-1">
                                                                    <a class="nav-link animate-underline animate-target d-inline fw-normal text-truncate p-0"
                                                                        href="shop-catalog-electronics.html">Floorstanding
                                                                        Speakers</a>
                                                                </li>
                                                                <li class="d-flex w-100 pt-1">
                                                                    <a class="nav-link animate-underline animate-target d-inline fw-normal text-truncate p-0"
                                                                        href="shop-catalog-electronics.html">Outdoor
                                                                        Speakers</a>
                                                                </li>
                                                                <li class="d-flex w-100 pt-1">
                                                                    <a class="nav-link animate-underline animate-target d-inline fw-normal text-truncate p-0"
                                                                        href="shop-catalog-electronics.html">Satellite
                                                                        Speakers</a>
                                                                </li>
                                                                <li class="d-flex w-100 pt-1">
                                                                    <a class="nav-link animate-underline animate-target d-inline fw-normal text-truncate p-0"
                                                                        href="shop-catalog-electronics.html">Sound
                                                                        Bars</a>
                                                                </li>
                                                                <li class="d-flex w-100 pt-1">
                                                                    <a class="nav-link animate-underline animate-target d-inline fw-normal text-truncate p-0"
                                                                        href="shop-catalog-electronics.html">Surround
                                                                        Sound Systems</a>
                                                                </li>
                                                            </ul>
                                                        </div>
                                                        <div style="min-width: 194px">
                                                            <div class="d-flex w-100">
                                                                <a class="animate-underline animate-target d-inline h6 text-dark-emphasis text-decoration-none text-truncate"
                                                                    href="shop-catalog-electronics.html">Home Audio</a>
                                                            </div>
                                                            <ul class="nav flex-column gap-2 mt-n2">
                                                                <li class="d-flex w-100 pt-1">
                                                                    <a class="nav-link animate-underline animate-target d-inline fw-normal text-truncate p-0"
                                                                        href="shop-catalog-electronics.html">Home
                                                                        Theater</a>
                                                                </li>
                                                                <li class="d-flex w-100 pt-1">
                                                                    <a class="nav-link animate-underline animate-target d-inline fw-normal text-truncate p-0"
                                                                        href="shop-catalog-electronics.html">Wireless
                                                                        &amp; Streaming Audio</a>
                                                                </li>
                                                                <li class="d-flex w-100 pt-1">
                                                                    <a class="nav-link animate-underline animate-target d-inline fw-normal text-truncate p-0"
                                                                        href="shop-catalog-electronics.html">Stereo
                                                                        System Components</a>
                                                                </li>
                                                                <li class="d-flex w-100 pt-1">
                                                                    <a class="nav-link animate-underline animate-target d-inline fw-normal text-truncate p-0"
                                                                        href="shop-catalog-electronics.html">Compact
                                                                        Radios &amp; Stereos</a>
                                                                </li>
                                                                <li class="d-flex w-100 pt-1">
                                                                    <a class="nav-link animate-underline animate-target d-inline fw-normal text-truncate p-0"
                                                                        href="shop-catalog-electronics.html">Home Audio
                                                                        Accessories</a>
                                                                </li>
                                                                <li class="d-flex w-100 pt-1">
                                                                    <a class="nav-link animate-underline animate-target d-inline fw-normal text-truncate p-0"
                                                                        href="shop-catalog-electronics.html">Subwoofers</a>
                                                                </li>
                                                            </ul>
                                                        </div>
                                                        <div class="d-none d-lg-block">
                                                            <div class="d-none d-xl-block" style="width: 284px"></div>
                                                            <div class="d-xl-none" style="width: 240px"></div>
                                                            <div
                                                                class="position-relative d-flex flex-column justify-content-center h-100 bg-body-secondary rounded-5 py-4 px-3">
                                                                <div class="text-center px-2">
                                                                    <i
                                                                        class="ci-google fs-2 text-dark-emphasis mb-3"></i>
                                                                    <div class="fs-sm text-light-emphasis mb-2">Deal of
                                                                        the week</div>
                                                                    <div class="h2 mb-4">Nest Audio</div>
                                                                </div>
                                                                <img src="assets/img/mega-menu/electronics/04.png"
                                                                    width="252" alt="Nest Audio">
                                                                <div class="text-center mt-4">
                                                                    <a class="btn btn-sm btn-primary stretched-link"
                                                                        href="shop-catalog-electronics.html">Shop
                                                                        now</a>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </li>
                                            <li class="dropend position-static">
                                                <div class="position-relative rounded pb-1 px-lg-2" tabindex="0"
                                                    data-bs-toggle="dropdown" data-bs-trigger="hover">
                                                    <a class="dropdown-item fw-medium stretched-link d-none d-lg-flex"
                                                        href="shop-catalog-electronics.html">
                                                        <i class="ci-camera-2 fs-xl opacity-60 pe-1 me-2"></i>
                                                        <span class="text-truncate">Cameras, Photo &amp; Video</span>
                                                        <i class="ci-chevron-right fs-base ms-auto me-n1"></i>
                                                    </a>
                                                    <div class="dropdown-item fw-medium stretched-link d-lg-none">
                                                        <i class="ci-camera-2 fs-xl opacity-60 pe-1 me-2"></i> Cameras,
                                                        Photo &amp; Video
                                                        <i class="ci-chevron-down fs-base ms-auto me-n1"></i>
                                                    </div>
                                                </div>
                                                <div class="dropdown-menu rounded-4 p-4"
                                                    style="top: 1rem; height: calc(100% - .1875rem); --cz-dropdown-spacer: .3125rem; animation: none;">
                                                    <div class="d-flex flex-column flex-lg-row h-100 gap-4">
                                                        <div style="min-width: 194px">
                                                            <div class="d-flex w-100">
                                                                <a class="animate-underline animate-target d-inline h6 text-dark-emphasis text-decoration-none text-truncate"
                                                                    href="shop-catalog-electronics.html">Cameras &amp;
                                                                    Lenses</a>
                                                            </div>
                                                            <ul class="nav flex-column gap-2 mt-n2">
                                                                <li class="d-flex w-100 pt-1">
                                                                    <a class="nav-link animate-underline animate-target d-inline fw-normal text-truncate p-0"
                                                                        href="shop-catalog-electronics.html">Point
                                                                        &amp; Shoot Cameras</a>
                                                                </li>
                                                                <li class="d-flex w-100 pt-1">
                                                                    <a class="nav-link animate-underline animate-target d-inline fw-normal text-truncate p-0"
                                                                        href="shop-catalog-electronics.html">DSLR
                                                                        Cameras</a>
                                                                </li>
                                                                <li class="d-flex w-100 pt-1">
                                                                    <a class="nav-link animate-underline animate-target d-inline fw-normal text-truncate p-0"
                                                                        href="shop-catalog-electronics.html">Mirrorless
                                                                        Cameras</a>
                                                                </li>
                                                                <li class="d-flex w-100 pt-1">
                                                                    <a class="nav-link animate-underline animate-target d-inline fw-normal text-truncate p-0"
                                                                        href="shop-catalog-electronics.html">Body
                                                                        Mounted Cameras</a>
                                                                </li>
                                                                <li class="d-flex w-100 pt-1">
                                                                    <a class="nav-link animate-underline animate-target d-inline fw-normal text-truncate p-0"
                                                                        href="shop-catalog-electronics.html">Camcorders</a>
                                                                </li>
                                                                <li class="d-flex w-100 pt-1">
                                                                    <a class="nav-link animate-underline animate-target d-inline fw-normal text-truncate p-0"
                                                                        href="shop-catalog-electronics.html">Camcorder
                                                                        Lenses</a>
                                                                </li>
                                                                <li class="d-flex w-100 pt-1">
                                                                    <a class="nav-link animate-underline animate-target d-inline fw-normal text-truncate p-0"
                                                                        href="shop-catalog-electronics.html">Camera
                                                                        Lenses</a>
                                                                </li>
                                                                <li class="d-flex w-100 pt-1">
                                                                    <a class="nav-link animate-underline animate-target d-inline fw-normal text-truncate p-0"
                                                                        href="shop-catalog-electronics.html">Macro
                                                                        &amp; Ringlight Flashes</a>
                                                                </li>
                                                                <li class="d-flex w-100 pt-1">
                                                                    <a class="nav-link animate-underline animate-target d-inline fw-normal text-truncate p-0"
                                                                        href="shop-catalog-electronics.html">Shoe Mount
                                                                        Flashes</a>
                                                                </li>
                                                                <li class="d-flex w-100 pt-1">
                                                                    <a class="nav-link animate-underline animate-target d-inline fw-normal text-truncate p-0"
                                                                        href="shop-catalog-electronics.html">Tripods
                                                                        &amp; Monopods</a>
                                                                </li>
                                                                <li class="d-flex w-100 pt-1">
                                                                    <a class="nav-link animate-underline animate-target d-inline fw-normal text-truncate p-0"
                                                                        href="shop-catalog-electronics.html">Video
                                                                        Studio</a>
                                                                </li>
                                                            </ul>
                                                        </div>
                                                        <div style="min-width: 194px">
                                                            <div class="d-flex w-100">
                                                                <a class="animate-underline animate-target d-inline h6 text-dark-emphasis text-decoration-none text-truncate"
                                                                    href="shop-catalog-electronics.html">Accessories</a>
                                                            </div>
                                                            <ul class="nav flex-column gap-2 mt-n2">
                                                                <li class="d-flex w-100 pt-1">
                                                                    <a class="nav-link animate-underline animate-target d-inline fw-normal text-truncate p-0"
                                                                        href="shop-catalog-electronics.html">Bags &amp;
                                                                        Cases</a>
                                                                </li>
                                                                <li class="d-flex w-100 pt-1">
                                                                    <a class="nav-link animate-underline animate-target d-inline fw-normal text-truncate p-0"
                                                                        href="shop-catalog-electronics.html">Binoculars
                                                                        &amp; Scopes</a>
                                                                </li>
                                                                <li class="d-flex w-100 pt-1">
                                                                    <a class="nav-link animate-underline animate-target d-inline fw-normal text-truncate p-0"
                                                                        href="shop-catalog-electronics.html">Batteries
                                                                        &amp; Chargers</a>
                                                                </li>
                                                                <li class="d-flex w-100 pt-1">
                                                                    <a class="nav-link animate-underline animate-target d-inline fw-normal text-truncate p-0"
                                                                        href="shop-catalog-electronics.html">Cables
                                                                        &amp; Cords</a>
                                                                </li>
                                                                <li class="d-flex w-100 pt-1">
                                                                    <a class="nav-link animate-underline animate-target d-inline fw-normal text-truncate p-0"
                                                                        href="shop-catalog-electronics.html">Camcorder
                                                                        Accessories</a>
                                                                </li>
                                                                <li class="d-flex w-100 pt-1">
                                                                    <a class="nav-link animate-underline animate-target d-inline fw-normal text-truncate p-0"
                                                                        href="shop-catalog-electronics.html">Cleaning
                                                                        Equipment</a>
                                                                </li>
                                                                <li class="d-flex w-100 pt-1">
                                                                    <a class="nav-link animate-underline animate-target d-inline fw-normal text-truncate p-0"
                                                                        href="shop-catalog-electronics.html">Protector
                                                                        Foils</a>
                                                                </li>
                                                                <li class="d-flex w-100 pt-1">
                                                                    <a class="nav-link animate-underline animate-target d-inline fw-normal text-truncate p-0"
                                                                        href="shop-catalog-electronics.html">Filters
                                                                        &amp; Accessories</a>
                                                                </li>
                                                                <li class="d-flex w-100 pt-1">
                                                                    <a class="nav-link animate-underline animate-target d-inline fw-normal text-truncate p-0"
                                                                        href="shop-catalog-electronics.html">Remote
                                                                        Controls</a>
                                                                </li>
                                                                <li class="d-flex w-100 pt-1">
                                                                    <a class="nav-link animate-underline animate-target d-inline fw-normal text-truncate p-0"
                                                                        href="shop-catalog-electronics.html">Rain
                                                                        Covers</a>
                                                                </li>
                                                                <li class="d-flex w-100 pt-1">
                                                                    <a class="nav-link animate-underline animate-target d-inline fw-normal text-truncate p-0"
                                                                        href="shop-catalog-electronics.html">Viewfinders</a>
                                                                </li>
                                                            </ul>
                                                        </div>
                                                        <div class="d-none d-lg-block">
                                                            <div class="d-none d-xl-block" style="width: 284px"></div>
                                                            <div class="d-xl-none" style="width: 240px"></div>
                                                            <div
                                                                class="position-relative d-flex flex-column justify-content-center h-100 bg-body-secondary rounded-5 py-4 px-3">
                                                                <div class="text-center px-2">
                                                                    <span
                                                                        class="badge bg-danger bg-opacity-10 text-danger fs-sm rounded-pill mb-2">Save
                                                                        up to $300</span>
                                                                    <div class="fs-sm text-light-emphasis mb-2">Starts
                                                                        from <del>$1,100.00</del> 899.00</div>
                                                                    <div class="h2 mb-4">Canon Digital Cameras</div>
                                                                </div>
                                                                <img src="assets/img/mega-menu/electronics/05.png"
                                                                    width="252" alt="Canon Camera">
                                                                <div class="text-center mt-4">
                                                                    <a class="btn btn-sm btn-primary stretched-link"
                                                                        href="shop-catalog-electronics.html">Shop
                                                                        now</a>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </li>
                                            <li class="dropend position-static">
                                                <div class="position-relative rounded pb-1 px-lg-2" tabindex="0"
                                                    data-bs-toggle="dropdown" data-bs-trigger="hover">
                                                    <a class="dropdown-item fw-medium stretched-link d-none d-lg-flex"
                                                        href="shop-catalog-electronics.html">
                                                        <i class="ci-printer-2 fs-xl opacity-60 pe-1 me-2"></i>
                                                        <span class="text-truncate">Printers &amp; Ink</span>
                                                        <i class="ci-chevron-right fs-base ms-auto me-n1"></i>
                                                    </a>
                                                    <div class="dropdown-item fw-medium stretched-link d-lg-none">
                                                        <i class="ci-printer-2 fs-xl opacity-60 pe-1 me-2"></i>
                                                        Printers &amp; Ink
                                                        <i class="ci-chevron-down fs-base ms-auto me-n1"></i>
                                                    </div>
                                                </div>
                                                <div class="dropdown-menu rounded-4 p-4"
                                                    style="top: 1rem; height: calc(100% - .1875rem); --cz-dropdown-spacer: .3125rem; animation: none;">
                                                    <div class="d-flex flex-column flex-lg-row h-100 gap-4">
                                                        <div style="min-width: 194px">
                                                            <div class="d-flex w-100">
                                                                <a class="animate-underline animate-target d-inline h6 text-dark-emphasis text-decoration-none text-truncate"
                                                                    href="shop-catalog-electronics.html">By type</a>
                                                            </div>
                                                            <ul class="nav flex-column gap-2 mt-n2">
                                                                <li class="d-flex w-100 pt-1">
                                                                    <a class="nav-link animate-underline animate-target d-inline fw-normal text-truncate p-0"
                                                                        href="shop-catalog-electronics.html">All-in-One</a>
                                                                </li>
                                                                <li class="d-flex w-100 pt-1">
                                                                    <a class="nav-link animate-underline animate-target d-inline fw-normal text-truncate p-0"
                                                                        href="shop-catalog-electronics.html">Copying</a>
                                                                </li>
                                                                <li class="d-flex w-100 pt-1">
                                                                    <a class="nav-link animate-underline animate-target d-inline fw-normal text-truncate p-0"
                                                                        href="shop-catalog-electronics.html">Faxing</a>
                                                                </li>
                                                                <li class="d-flex w-100 pt-1">
                                                                    <a class="nav-link animate-underline animate-target d-inline fw-normal text-truncate p-0"
                                                                        href="shop-catalog-electronics.html">Photo
                                                                        Printing</a>
                                                                </li>
                                                                <li class="d-flex w-100 pt-1">
                                                                    <a class="nav-link animate-underline animate-target d-inline fw-normal text-truncate p-0"
                                                                        href="shop-catalog-electronics.html">Printing
                                                                        Only</a>
                                                                </li>
                                                                <li class="d-flex w-100 pt-1">
                                                                    <a class="nav-link animate-underline animate-target d-inline fw-normal text-truncate p-0"
                                                                        href="shop-catalog-electronics.html">Scanning</a>
                                                                </li>
                                                            </ul>
                                                            <div class="d-flex w-100 pt-4">
                                                                <a class="animate-underline animate-target d-inline h6 text-dark-emphasis text-decoration-none text-truncate"
                                                                    href="shop-catalog-electronics.html">Scanners</a>
                                                            </div>
                                                            <ul class="nav flex-column gap-2 mt-n2">
                                                                <li class="d-flex w-100 pt-1">
                                                                    <a class="nav-link animate-underline animate-target d-inline fw-normal text-truncate p-0"
                                                                        href="shop-catalog-electronics.html">Business
                                                                        Card Scanners</a>
                                                                </li>
                                                                <li class="d-flex w-100 pt-1">
                                                                    <a class="nav-link animate-underline animate-target d-inline fw-normal text-truncate p-0"
                                                                        href="shop-catalog-electronics.html">Document
                                                                        Scanners</a>
                                                                </li>
                                                                <li class="d-flex w-100 pt-1">
                                                                    <a class="nav-link animate-underline animate-target d-inline fw-normal text-truncate p-0"
                                                                        href="shop-catalog-electronics.html">Flatbed
                                                                        &amp; Photo Scanners</a>
                                                                </li>
                                                                <li class="d-flex w-100 pt-1">
                                                                    <a class="nav-link animate-underline animate-target d-inline fw-normal text-truncate p-0"
                                                                        href="shop-catalog-electronics.html">Slide
                                                                        &amp; Negative Scanners</a>
                                                                </li>
                                                            </ul>
                                                        </div>
                                                        <div style="min-width: 194px">
                                                            <div class="d-flex w-100">
                                                                <a class="animate-underline animate-target d-inline h6 text-dark-emphasis text-decoration-none text-truncate"
                                                                    href="shop-catalog-electronics.html">Printers</a>
                                                            </div>
                                                            <ul class="nav flex-column gap-2 mt-n2">
                                                                <li class="d-flex w-100 pt-1">
                                                                    <a class="nav-link animate-underline animate-target d-inline fw-normal text-truncate p-0"
                                                                        href="shop-catalog-electronics.html">Dot Matrix
                                                                        Printers</a>
                                                                </li>
                                                                <li class="d-flex w-100 pt-1">
                                                                    <a class="nav-link animate-underline animate-target d-inline fw-normal text-truncate p-0"
                                                                        href="shop-catalog-electronics.html">Inkjet
                                                                        Printers</a>
                                                                </li>
                                                                <li class="d-flex w-100 pt-1">
                                                                    <a class="nav-link animate-underline animate-target d-inline fw-normal text-truncate p-0"
                                                                        href="shop-catalog-electronics.html">Label
                                                                        Printers</a>
                                                                </li>
                                                                <li class="d-flex w-100 pt-1">
                                                                    <a class="nav-link animate-underline animate-target d-inline fw-normal text-truncate p-0"
                                                                        href="shop-catalog-electronics.html">Laser
                                                                        Printers</a>
                                                                </li>
                                                                <li class="d-flex w-100 pt-1">
                                                                    <a class="nav-link animate-underline animate-target d-inline fw-normal text-truncate p-0"
                                                                        href="shop-catalog-electronics.html">Photo
                                                                        Printers</a>
                                                                </li>
                                                                <li class="d-flex w-100 pt-1">
                                                                    <a class="nav-link animate-underline animate-target d-inline fw-normal text-truncate p-0"
                                                                        href="shop-catalog-electronics.html">Wide
                                                                        Format Printers</a>
                                                                </li>
                                                                <li class="d-flex w-100 pt-1">
                                                                    <a class="nav-link animate-underline animate-target d-inline fw-normal text-truncate p-0"
                                                                        href="shop-catalog-electronics.html">Plotter
                                                                        Printers</a>
                                                                </li>
                                                            </ul>
                                                        </div>
                                                        <div class="d-none d-lg-block">
                                                            <div class="d-none d-xl-block" style="width: 284px"></div>
                                                            <div class="d-xl-none" style="width: 240px"></div>
                                                            <div
                                                                class="position-relative d-flex flex-column justify-content-center h-100 bg-body-secondary rounded-5 py-4 px-3">
                                                                <div class="text-center px-2">
                                                                    <div class="fs-sm text-light-emphasis mb-2">Best
                                                                        deal! Save up to <span
                                                                            class="fw-semibold">$200</span></div>
                                                                    <div class="h2 mb-4">Epson Color Printers</div>
                                                                </div>
                                                                <img src="assets/img/mega-menu/electronics/06.png"
                                                                    width="252" alt="Epson Printer">
                                                                <div class="text-center mt-4">
                                                                    <a class="btn btn-sm btn-primary stretched-link"
                                                                        href="shop-catalog-electronics.html">Shop
                                                                        now</a>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </li>
                                            <li class="dropend position-static">
                                                <div class="position-relative rounded pb-1 px-lg-2" tabindex="0"
                                                    data-bs-toggle="dropdown" data-bs-trigger="hover">
                                                    <a class="dropdown-item fw-medium stretched-link d-none d-lg-flex"
                                                        href="shop-catalog-electronics.html">
                                                        <i class="ci-battery-2 fs-xl opacity-60 pe-1 me-2"></i>
                                                        <span class="text-truncate">Charging Stations</span>
                                                        <i class="ci-chevron-right fs-base ms-auto me-n1"></i>
                                                    </a>
                                                    <div class="dropdown-item fw-medium stretched-link d-lg-none">
                                                        <i class="ci-battery-2 fs-xl opacity-60 pe-1 me-2"></i>
                                                        Charging Stations
                                                        <i class="ci-chevron-down fs-base ms-auto me-n1"></i>
                                                    </div>
                                                </div>
                                                <div class="dropdown-menu rounded-4 p-4"
                                                    style="top: 1rem; height: calc(100% - .1875rem); --cz-dropdown-spacer: .3125rem; animation: none;">
                                                    <div class="d-flex flex-column flex-lg-row h-100 gap-4">
                                                        <div style="min-width: 194px">
                                                            <div class="d-flex w-100">
                                                                <a class="animate-underline animate-target d-inline h6 text-dark-emphasis text-decoration-none text-truncate"
                                                                    href="shop-catalog-electronics.html">Charging
                                                                    Stations</a>
                                                            </div>
                                                            <ul class="nav flex-column gap-2 mt-n2">
                                                                <li class="d-flex w-100 pt-1">
                                                                    <a class="nav-link animate-underline animate-target d-inline fw-normal text-truncate p-0"
                                                                        href="shop-catalog-electronics.html">Portable
                                                                        Power Stations</a>
                                                                </li>
                                                                <li class="d-flex w-100 pt-1">
                                                                    <a class="nav-link animate-underline animate-target d-inline fw-normal text-truncate p-0"
                                                                        href="shop-catalog-electronics.html">Inverter
                                                                        Power Stations</a>
                                                                </li>
                                                                <li class="d-flex w-100 pt-1">
                                                                    <a class="nav-link animate-underline animate-target d-inline fw-normal text-truncate p-0"
                                                                        href="shop-catalog-electronics.html">Outdoor
                                                                        Generators</a>
                                                                </li>
                                                                <li class="d-flex w-100 pt-1">
                                                                    <a class="nav-link animate-underline animate-target d-inline fw-normal text-truncate p-0"
                                                                        href="shop-catalog-electronics.html">Gasoline
                                                                        Generators</a>
                                                                </li>
                                                                <li class="d-flex w-100 pt-1">
                                                                    <a class="nav-link animate-underline animate-target d-inline fw-normal text-truncate p-0"
                                                                        href="shop-catalog-electronics.html">Cell Phone
                                                                        Chargers</a>
                                                                </li>
                                                                <li class="d-flex w-100 pt-1">
                                                                    <a class="nav-link animate-underline animate-target d-inline fw-normal text-truncate p-0"
                                                                        href="shop-catalog-electronics.html">Power
                                                                        Strips</a>
                                                                </li>
                                                                <li class="d-flex w-100 pt-1">
                                                                    <a class="nav-link animate-underline animate-target d-inline fw-normal text-truncate p-0"
                                                                        href="shop-catalog-electronics.html">Wall
                                                                        Charges</a>
                                                                </li>
                                                            </ul>
                                                        </div>
                                                        <div class="d-none d-lg-block">
                                                            <div class="d-none d-xl-block" style="width: 284px"></div>
                                                            <div class="d-xl-none" style="width: 240px"></div>
                                                            <div
                                                                class="position-relative d-flex flex-column justify-content-center h-100 bg-body-secondary rounded-5 py-4 px-3">
                                                                <div class="text-center px-2">
                                                                    <span
                                                                        class="badge bg-danger bg-opacity-10 text-danger fs-sm rounded-pill mb-2">Huge
                                                                        sale!</span>
                                                                    <div class="fs-sm text-light-emphasis mb-2">Save up
                                                                        to <span class="fw-semibold">$350</span></div>
                                                                    <div class="h2 mb-4">Portable Power Stations</div>
                                                                </div>
                                                                <img src="assets/img/mega-menu/electronics/07.png"
                                                                    width="252" alt="Epson Printer">
                                                                <div class="text-center mt-4">
                                                                    <a class="btn btn-sm btn-primary stretched-link"
                                                                        href="shop-catalog-electronics.html">Shop
                                                                        now</a>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </li>
                                            <li class="dropend position-static">
                                                <div class="position-relative rounded pb-1 px-lg-2" tabindex="0"
                                                    data-bs-toggle="dropdown" data-bs-trigger="hover">
                                                    <a class="dropdown-item fw-medium stretched-link d-none d-lg-flex"
                                                        href="shop-catalog-electronics.html">
                                                        <i class="ci-headphones-2 fs-xl opacity-60 pe-1 me-2"></i>
                                                        <span class="text-truncate">Headphones</span>
                                                        <i class="ci-chevron-right fs-base ms-auto me-n1"></i>
                                                    </a>
                                                    <div class="dropdown-item fw-medium stretched-link d-lg-none">
                                                        <i class="ci-headphones-2 fs-xl opacity-60 pe-1 me-2"></i>
                                                        Headphones
                                                        <i class="ci-chevron-down fs-base ms-auto me-n1"></i>
                                                    </div>
                                                </div>
                                                <div class="dropdown-menu rounded-4 p-4"
                                                    style="top: 1rem; height: calc(100% - .1875rem); --cz-dropdown-spacer: .3125rem; animation: none;">
                                                    <div class="d-flex flex-column flex-lg-row h-100 gap-4">
                                                        <div style="min-width: 194px">
                                                            <div class="d-flex w-100">
                                                                <a class="animate-underline animate-target d-inline h6 text-dark-emphasis text-decoration-none text-truncate"
                                                                    href="shop-catalog-electronics.html">Headphones</a>
                                                            </div>
                                                            <ul class="nav flex-column gap-2 mt-n2">
                                                                <li class="d-flex w-100 pt-1">
                                                                    <a class="nav-link animate-underline animate-target d-inline fw-normal text-truncate p-0"
                                                                        href="shop-catalog-electronics.html">Earbud
                                                                        Headphones</a>
                                                                </li>
                                                                <li class="d-flex w-100 pt-1">
                                                                    <a class="nav-link animate-underline animate-target d-inline fw-normal text-truncate p-0"
                                                                        href="shop-catalog-electronics.html">Over-Ear
                                                                        Headphones</a>
                                                                </li>
                                                                <li class="d-flex w-100 pt-1">
                                                                    <a class="nav-link animate-underline animate-target d-inline fw-normal text-truncate p-0"
                                                                        href="shop-catalog-electronics.html">On-Ear
                                                                        Headphones</a>
                                                                </li>
                                                                <li class="d-flex w-100 pt-1">
                                                                    <a class="nav-link animate-underline animate-target d-inline fw-normal text-truncate p-0"
                                                                        href="shop-catalog-electronics.html">Bluetooth
                                                                        Headphones</a>
                                                                </li>
                                                                <li class="d-flex w-100 pt-1">
                                                                    <a class="nav-link animate-underline animate-target d-inline fw-normal text-truncate p-0"
                                                                        href="shop-catalog-electronics.html">Sports
                                                                        &amp; Fitness</a>
                                                                </li>
                                                                <li class="d-flex w-100 pt-1">
                                                                    <a class="nav-link animate-underline animate-target d-inline fw-normal text-truncate p-0"
                                                                        href="shop-catalog-electronics.html">Noise-Cancelling</a>
                                                                </li>
                                                            </ul>
                                                            <div class="d-flex w-100 pt-4">
                                                                <a class="animate-underline animate-target d-inline h6 text-dark-emphasis text-decoration-none text-truncate"
                                                                    href="shop-catalog-electronics.html">Accessories</a>
                                                            </div>
                                                            <ul class="nav flex-column gap-2 mt-n2">
                                                                <li class="d-flex w-100 pt-1">
                                                                    <a class="nav-link animate-underline animate-target d-inline fw-normal text-truncate p-0"
                                                                        href="shop-catalog-electronics.html">Cases
                                                                        &amp; Sleeves</a>
                                                                </li>
                                                                <li class="d-flex w-100 pt-1">
                                                                    <a class="nav-link animate-underline animate-target d-inline fw-normal text-truncate p-0"
                                                                        href="shop-catalog-electronics.html">Cables
                                                                        &amp; Cords</a>
                                                                </li>
                                                                <li class="d-flex w-100 pt-1">
                                                                    <a class="nav-link animate-underline animate-target d-inline fw-normal text-truncate p-0"
                                                                        href="shop-catalog-electronics.html">Ear
                                                                        Pads</a>
                                                                </li>
                                                                <li class="d-flex w-100 pt-1">
                                                                    <a class="nav-link animate-underline animate-target d-inline fw-normal text-truncate p-0"
                                                                        href="shop-catalog-electronics.html">Repair
                                                                        Kits</a>
                                                                </li>
                                                                <li class="d-flex w-100 pt-1">
                                                                    <a class="nav-link animate-underline animate-target d-inline fw-normal text-truncate p-0"
                                                                        href="shop-catalog-electronics.html">Cleaning
                                                                        Equipment</a>
                                                                </li>
                                                            </ul>
                                                        </div>
                                                        <div class="d-none d-lg-block">
                                                            <div class="d-none d-xl-block" style="width: 284px">
                                                            </div>
                                                            <div class="d-xl-none" style="width: 240px"></div>
                                                            <div
                                                                class="position-relative d-flex flex-column justify-content-center h-100 bg-body-secondary rounded-5 py-4 px-3">
                                                                <div class="text-center px-2">
                                                                    <span
                                                                        class="badge bg-danger bg-opacity-10 text-danger fs-sm rounded-pill mb-2">Save
                                                                        up to $200</span>
                                                                    <div class="fs-sm text-light-emphasis mb-2">Starts
                                                                        from $119.99</div>
                                                                    <div class="h2 mb-4">Wireless Headphones</div>
                                                                </div>
                                                                <img src="assets/img/mega-menu/electronics/08.png"
                                                                    width="252" alt="Wireless Headphones">
                                                                <div class="text-center mt-4">
                                                                    <a class="btn btn-sm btn-primary stretched-link"
                                                                        href="shop-catalog-electronics.html">Shop
                                                                        now</a>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </li>
                                            <li class="dropend position-static">
                                                <div class="position-relative rounded pb-1 px-lg-2" tabindex="0"
                                                    data-bs-toggle="dropdown" data-bs-trigger="hover">
                                                    <a class="dropdown-item fw-medium stretched-link d-none d-lg-flex"
                                                        href="shop-catalog-electronics.html">
                                                        <i class="ci-watch-2 fs-xl opacity-60 pe-1 me-2"></i>
                                                        <span class="text-truncate">Wearable Electronics</span>
                                                        <i class="ci-chevron-right fs-base ms-auto me-n1"></i>
                                                    </a>
                                                    <div class="dropdown-item fw-medium stretched-link d-lg-none">
                                                        <i class="ci-watch-2 fs-xl opacity-60 pe-1 me-2"></i> Wearable
                                                        Electronics
                                                        <i class="ci-chevron-down fs-base ms-auto me-n1"></i>
                                                    </div>
                                                </div>
                                                <div class="dropdown-menu rounded-4 p-4"
                                                    style="top: 1rem; height: calc(100% - .1875rem); --cz-dropdown-spacer: .3125rem; animation: none;">
                                                    <div class="d-flex flex-column flex-lg-row h-100 gap-4">
                                                        <div style="min-width: 194px">
                                                            <div class="d-flex w-100">
                                                                <a class="animate-underline animate-target d-inline h6 text-dark-emphasis text-decoration-none text-truncate"
                                                                    href="shop-catalog-electronics.html">Wearable
                                                                    Gadgets</a>
                                                            </div>
                                                            <ul class="nav flex-column gap-2 mt-n2">
                                                                <li class="d-flex w-100 pt-1">
                                                                    <a class="nav-link animate-underline animate-target d-inline fw-normal text-truncate p-0"
                                                                        href="shop-catalog-electronics.html">Smartwatches</a>
                                                                </li>
                                                                <li class="d-flex w-100 pt-1">
                                                                    <a class="nav-link animate-underline animate-target d-inline fw-normal text-truncate p-0"
                                                                        href="shop-catalog-electronics.html">Fitness
                                                                        Trackers</a>
                                                                </li>
                                                                <li class="d-flex w-100 pt-1">
                                                                    <a class="nav-link animate-underline animate-target d-inline fw-normal text-truncate p-0"
                                                                        href="shop-catalog-electronics.html">Smart
                                                                        Glasses</a>
                                                                </li>
                                                                <li class="d-flex w-100 pt-1">
                                                                    <a class="nav-link animate-underline animate-target d-inline fw-normal text-truncate p-0"
                                                                        href="shop-catalog-electronics.html">Rings</a>
                                                                </li>
                                                                <li class="d-flex w-100 pt-1">
                                                                    <a class="nav-link animate-underline animate-target d-inline fw-normal text-truncate p-0"
                                                                        href="shop-catalog-electronics.html">Virtual
                                                                        Reality</a>
                                                                </li>
                                                                <li class="d-flex w-100 pt-1">
                                                                    <a class="nav-link animate-underline animate-target d-inline fw-normal text-truncate p-0"
                                                                        href="shop-catalog-electronics.html">Clips,
                                                                        Arm &amp; Wristbands</a>
                                                                </li>
                                                                <li class="d-flex w-100 pt-1">
                                                                    <a class="nav-link animate-underline animate-target d-inline fw-normal text-truncate p-0"
                                                                        href="shop-catalog-electronics.html">Accessories</a>
                                                                </li>
                                                            </ul>
                                                        </div>
                                                        <div class="d-none d-lg-block">
                                                            <div class="d-none d-xl-block" style="width: 284px">
                                                            </div>
                                                            <div class="d-xl-none" style="width: 240px"></div>
                                                            <div
                                                                class="position-relative d-flex flex-column justify-content-center h-100 bg-body-secondary rounded-5 py-4 px-3">
                                                                <div class="text-center px-2">
                                                                    <i
                                                                        class="ci-google fs-2 text-dark-emphasis mb-3"></i>
                                                                    <div class="fs-sm text-light-emphasis mb-2">Deal
                                                                        of the week</div>
                                                                    <div class="h2 mb-4">Pixel Watch</div>
                                                                </div>
                                                                <img src="assets/img/mega-menu/electronics/09.png"
                                                                    width="252" alt="Pixel Watch">
                                                                <div class="text-center mt-4">
                                                                    <a class="btn btn-sm btn-primary stretched-link"
                                                                        href="shop-catalog-electronics.html">Shop
                                                                        now</a>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </li>
                                            <li class="dropend position-static">
                                                <div class="position-relative rounded pb-1 px-lg-2" tabindex="0"
                                                    data-bs-toggle="dropdown" data-bs-trigger="hover">
                                                    <a class="dropdown-item fw-medium stretched-link d-none d-lg-flex"
                                                        href="shop-catalog-electronics.html">
                                                        <i class="ci-powerbank fs-xl opacity-60 pe-1 me-2"></i>
                                                        <span class="text-truncate">Powerbanks</span>
                                                        <i class="ci-chevron-right fs-base ms-auto me-n1"></i>
                                                    </a>
                                                    <div class="dropdown-item fw-medium stretched-link d-lg-none">
                                                        <i class="ci-powerbank fs-xl opacity-60 pe-1 me-2"></i>
                                                        Powerbanks
                                                        <i class="ci-chevron-down fs-base ms-auto me-n1"></i>
                                                    </div>
                                                </div>
                                                <div class="dropdown-menu rounded-4 p-4"
                                                    style="top: 1rem; height: calc(100% - .1875rem); --cz-dropdown-spacer: .3125rem; animation: none;">
                                                    <div class="d-flex flex-column flex-lg-row h-100 gap-4">
                                                        <div style="min-width: 194px">
                                                            <div class="d-flex w-100">
                                                                <a class="animate-underline animate-target d-inline h6 text-dark-emphasis text-decoration-none text-truncate"
                                                                    href="shop-catalog-electronics.html">Powerbanks</a>
                                                            </div>
                                                            <ul class="nav flex-column gap-2 mt-n2">
                                                                <li class="d-flex w-100 pt-1">
                                                                    <a class="nav-link animate-underline animate-target d-inline fw-normal text-truncate p-0"
                                                                        href="shop-catalog-electronics.html">Fast
                                                                        Charging</a>
                                                                </li>
                                                                <li class="d-flex w-100 pt-1">
                                                                    <a class="nav-link animate-underline animate-target d-inline fw-normal text-truncate p-0"
                                                                        href="shop-catalog-electronics.html">Built In
                                                                        Cable</a>
                                                                </li>
                                                                <li class="d-flex w-100 pt-1">
                                                                    <a class="nav-link animate-underline animate-target d-inline fw-normal text-truncate p-0"
                                                                        href="shop-catalog-electronics.html">Built In
                                                                        Wall Plug</a>
                                                                </li>
                                                                <li class="d-flex w-100 pt-1">
                                                                    <a class="nav-link animate-underline animate-target d-inline fw-normal text-truncate p-0"
                                                                        href="shop-catalog-electronics.html">LED
                                                                        Indicator Lights</a>
                                                                </li>
                                                                <li class="d-flex w-100 pt-1">
                                                                    <a class="nav-link animate-underline animate-target d-inline fw-normal text-truncate p-0"
                                                                        href="shop-catalog-electronics.html">Pocket
                                                                        Size</a>
                                                                </li>
                                                                <li class="d-flex w-100 pt-1">
                                                                    <a class="nav-link animate-underline animate-target d-inline fw-normal text-truncate p-0"
                                                                        href="shop-catalog-electronics.html">Wireless
                                                                        Charging</a>
                                                                </li>
                                                                <li class="d-flex w-100 pt-1">
                                                                    <a class="nav-link animate-underline animate-target d-inline fw-normal text-truncate p-0"
                                                                        href="shop-catalog-electronics.html">Short
                                                                        Circuit Protection</a>
                                                                </li>
                                                                <li class="d-flex w-100 pt-1">
                                                                    <a class="nav-link animate-underline animate-target d-inline fw-normal text-truncate p-0"
                                                                        href="shop-catalog-electronics.html">Scratch
                                                                        Resistant</a>
                                                                </li>
                                                                <li class="d-flex w-100 pt-1">
                                                                    <a class="nav-link animate-underline animate-target d-inline fw-normal text-truncate p-0"
                                                                        href="shop-catalog-electronics.html">Flashlight</a>
                                                                </li>
                                                                <li class="d-flex w-100 pt-1">
                                                                    <a class="nav-link animate-underline animate-target d-inline fw-normal text-truncate p-0"
                                                                        href="shop-catalog-electronics.html">Lightweight</a>
                                                                </li>
                                                            </ul>
                                                        </div>
                                                        <div class="d-none d-lg-block">
                                                            <div class="d-none d-xl-block" style="width: 284px">
                                                            </div>
                                                            <div class="d-xl-none" style="width: 240px"></div>
                                                            <div
                                                                class="position-relative d-flex flex-column justify-content-center h-100 bg-body-secondary rounded-5 py-4 px-3">
                                                                <div class="text-center px-2">
                                                                    <div class="fs-sm text-light-emphasis mb-2">Save
                                                                        up to <span class="fw-semibold">$50</span> on
                                                                        our</div>
                                                                    <div class="h2 mb-4">Powerbanks Deals</div>
                                                                </div>
                                                                <img src="assets/img/mega-menu/electronics/10.png"
                                                                    width="252" alt="Powerbank">
                                                                <div class="text-center mt-4">
                                                                    <a class="btn btn-sm btn-primary stretched-link"
                                                                        href="shop-catalog-electronics.html">Shop
                                                                        now</a>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </li>
                                            <li class="dropend position-static">
                                                <div class="position-relative rounded pb-1 px-lg-2" tabindex="0"
                                                    data-bs-toggle="dropdown" data-bs-trigger="hover">
                                                    <a class="dropdown-item fw-medium stretched-link d-none d-lg-flex"
                                                        href="shop-catalog-electronics.html">
                                                        <i class="ci-hard-drive-2 fs-xl opacity-60 pe-1 me-2"></i>
                                                        <span class="text-truncate">HDD/SSD Data Storage</span>
                                                        <i class="ci-chevron-right fs-base ms-auto me-n1"></i>
                                                    </a>
                                                    <div class="dropdown-item fw-medium stretched-link d-lg-none">
                                                        <i class="ci-hard-drive-2 fs-xl opacity-60 pe-1 me-2"></i>
                                                        HDD/SSD Data Storage
                                                        <i class="ci-chevron-down fs-base ms-auto me-n1"></i>
                                                    </div>
                                                </div>
                                                <div class="dropdown-menu rounded-4 p-4"
                                                    style="top: 1rem; height: calc(100% - .1875rem); --cz-dropdown-spacer: .3125rem; animation: none;">
                                                    <div class="d-flex flex-column flex-lg-row h-100 gap-4">
                                                        <div style="min-width: 194px">
                                                            <div class="d-flex w-100">
                                                                <a class="animate-underline animate-target d-inline h6 text-dark-emphasis text-decoration-none text-truncate"
                                                                    href="shop-catalog-electronics.html">Data
                                                                    Storage</a>
                                                            </div>
                                                            <ul class="nav flex-column gap-2 mt-n2">
                                                                <li class="d-flex w-100 pt-1">
                                                                    <a class="nav-link animate-underline animate-target d-inline fw-normal text-truncate p-0"
                                                                        href="shop-catalog-electronics.html">External
                                                                        Hard Drives</a>
                                                                </li>
                                                                <li class="d-flex w-100 pt-1">
                                                                    <a class="nav-link animate-underline animate-target d-inline fw-normal text-truncate p-0"
                                                                        href="shop-catalog-electronics.html">External
                                                                        SSD</a>
                                                                </li>
                                                                <li class="d-flex w-100 pt-1">
                                                                    <a class="nav-link animate-underline animate-target d-inline fw-normal text-truncate p-0"
                                                                        href="shop-catalog-electronics.html">External
                                                                        Zip Drives</a>
                                                                </li>
                                                                <li class="d-flex w-100 pt-1">
                                                                    <a class="nav-link animate-underline animate-target d-inline fw-normal text-truncate p-0"
                                                                        href="shop-catalog-electronics.html">Floppy
                                                                        &amp; Tape Drives</a>
                                                                </li>
                                                                <li class="d-flex w-100 pt-1">
                                                                    <a class="nav-link animate-underline animate-target d-inline fw-normal text-truncate p-0"
                                                                        href="shop-catalog-electronics.html">Internal
                                                                        Hard Drives</a>
                                                                </li>
                                                                <li class="d-flex w-100 pt-1">
                                                                    <a class="nav-link animate-underline animate-target d-inline fw-normal text-truncate p-0"
                                                                        href="shop-catalog-electronics.html">Internal
                                                                        SSD</a>
                                                                </li>
                                                                <li class="d-flex w-100 pt-1">
                                                                    <a class="nav-link animate-underline animate-target d-inline fw-normal text-truncate p-0"
                                                                        href="shop-catalog-electronics.html">Network
                                                                        Attached Storage</a>
                                                                </li>
                                                                <li class="d-flex w-100 pt-1">
                                                                    <a class="nav-link animate-underline animate-target d-inline fw-normal text-truncate p-0"
                                                                        href="shop-catalog-electronics.html">USB Flash
                                                                        Drives</a>
                                                                </li>
                                                            </ul>
                                                        </div>
                                                        <div class="d-none d-lg-block">
                                                            <div class="d-none d-xl-block" style="width: 284px">
                                                            </div>
                                                            <div class="d-xl-none" style="width: 240px"></div>
                                                            <div
                                                                class="position-relative d-flex flex-column justify-content-center h-100 bg-body-secondary rounded-5 py-4 px-3">
                                                                <div class="text-center px-2">
                                                                    <span
                                                                        class="badge bg-danger bg-opacity-10 text-danger fs-sm rounded-pill mb-2">Save
                                                                        up to $100</span>
                                                                    <div class="fs-sm text-light-emphasis mb-2">Starts
                                                                        from $89.99</div>
                                                                    <div class="h2 mb-4">Samsung SSD Deals</div>
                                                                </div>
                                                                <img src="assets/img/mega-menu/electronics/11.png"
                                                                    width="252" alt="SSD">
                                                                <div class="text-center mt-4">
                                                                    <a class="btn btn-sm btn-primary stretched-link"
                                                                        href="shop-catalog-electronics.html">Shop
                                                                        now</a>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </li>
                                            <li class="dropend position-static">
                                                <div class="position-relative rounded pb-2 px-lg-2" tabindex="0"
                                                    data-bs-toggle="dropdown" data-bs-trigger="hover">
                                                    <a class="dropdown-item fw-medium stretched-link d-none d-lg-flex"
                                                        href="shop-catalog-electronics.html">
                                                        <i class="ci-game fs-xl opacity-60 pe-1 me-2"></i>
                                                        <span class="text-truncate">Video Games</span>
                                                        <i class="ci-chevron-right fs-base ms-auto me-n1"></i>
                                                    </a>
                                                    <div class="dropdown-item fw-medium stretched-link d-lg-none">
                                                        <i class="ci-game fs-xl opacity-60 pe-1 me-2"></i> Video Games
                                                        <i class="ci-chevron-down fs-base ms-auto me-n1"></i>
                                                    </div>
                                                </div>
                                                <div class="dropdown-menu rounded-4 p-4"
                                                    style="top: 1rem; height: calc(100% - .1875rem); --cz-dropdown-spacer: .3125rem; animation: none;">
                                                    <div class="d-flex flex-column flex-lg-row h-100 gap-lg-4">
                                                        <div style="min-width: 194px">
                                                            <div class="d-flex w-100">
                                                                <a class="animate-underline animate-target d-inline h6 text-dark-emphasis text-decoration-none text-truncate"
                                                                    href="shop-catalog-electronics.html">Games &amp;
                                                                    Hardware</a>
                                                            </div>
                                                            <ul class="nav flex-column gap-2 mt-n2">
                                                                <li class="d-flex w-100 pt-1">
                                                                    <a class="nav-link animate-underline animate-target d-inline fw-normal text-truncate p-0"
                                                                        href="shop-catalog-electronics.html">Video
                                                                        Games</a>
                                                                </li>
                                                                <li class="d-flex w-100 pt-1">
                                                                    <a class="nav-link animate-underline animate-target d-inline fw-normal text-truncate p-0"
                                                                        href="shop-catalog-electronics.html">PlayStation
                                                                        5</a>
                                                                </li>
                                                                <li class="d-flex w-100 pt-1">
                                                                    <a class="nav-link animate-underline animate-target d-inline fw-normal text-truncate p-0"
                                                                        href="shop-catalog-electronics.html">PlayStation
                                                                        4</a>
                                                                </li>
                                                                <li class="d-flex w-100 pt-1">
                                                                    <a class="nav-link animate-underline animate-target d-inline fw-normal text-truncate p-0"
                                                                        href="shop-catalog-electronics.html">Xbox
                                                                        Series X</a>
                                                                </li>
                                                                <li class="d-flex w-100 pt-1">
                                                                    <a class="nav-link animate-underline animate-target d-inline fw-normal text-truncate p-0"
                                                                        href="shop-catalog-electronics.html">Xbox
                                                                        Series S</a>
                                                                </li>
                                                                <li class="d-flex w-100 pt-1">
                                                                    <a class="nav-link animate-underline animate-target d-inline fw-normal text-truncate p-0"
                                                                        href="shop-catalog-electronics.html">Nintendo
                                                                        Switch</a>
                                                                </li>
                                                                <li class="d-flex w-100 pt-1">
                                                                    <a class="nav-link animate-underline animate-target d-inline fw-normal text-truncate p-0"
                                                                        href="shop-catalog-electronics.html">Gaming
                                                                        PC</a>
                                                                </li>
                                                                <li class="d-flex w-100 pt-1">
                                                                    <a class="nav-link animate-underline animate-target d-inline fw-normal text-truncate p-0"
                                                                        href="shop-catalog-electronics.html">Gaming
                                                                        Laptops</a>
                                                                </li>
                                                                <li class="d-flex w-100 pt-1">
                                                                    <a class="nav-link animate-underline animate-target d-inline fw-normal text-truncate p-0"
                                                                        href="shop-catalog-electronics.html">Wii U</a>
                                                                </li>
                                                                <li class="d-flex w-100 pt-1">
                                                                    <a class="nav-link animate-underline animate-target d-inline fw-normal text-truncate p-0"
                                                                        href="shop-catalog-electronics.html">Wii</a>
                                                                </li>
                                                                <li class="d-flex w-100 pt-1">
                                                                    <a class="nav-link animate-underline animate-target d-inline fw-normal text-truncate p-0"
                                                                        href="shop-catalog-electronics.html">Nintendo
                                                                        3DS</a>
                                                                </li>
                                                                <li class="d-flex w-100 pt-1">
                                                                    <a class="nav-link animate-underline animate-target d-inline fw-normal text-truncate p-0"
                                                                        href="shop-catalog-electronics.html">Nintendo
                                                                        2DS</a>
                                                                </li>
                                                                <li class="d-flex w-100 pt-1">
                                                                    <a class="nav-link animate-underline animate-target d-inline fw-normal text-truncate p-0"
                                                                        href="shop-catalog-electronics.html">Nintendo
                                                                        DS</a>
                                                                </li>
                                                                <li class="d-flex w-100 pt-1">
                                                                    <a class="nav-link animate-underline animate-target d-inline fw-normal text-truncate p-0"
                                                                        href="shop-catalog-electronics.html">Wii</a>
                                                                </li>
                                                            </ul>
                                                        </div>
                                                        <div style="min-width: 194px">
                                                            <ul class="nav flex-column gap-2 mt-2 mt-lg-0">
                                                                <li class="d-flex w-100 pt-1">
                                                                    <a class="nav-link animate-underline animate-target d-inline fw-normal text-truncate p-0"
                                                                        href="shop-catalog-electronics.html">Mac</a>
                                                                </li>
                                                                <li class="d-flex w-100 pt-1">
                                                                    <a class="nav-link animate-underline animate-target d-inline fw-normal text-truncate p-0"
                                                                        href="shop-catalog-electronics.html">PlayStation
                                                                        Vita</a>
                                                                </li>
                                                                <li class="d-flex w-100 pt-1">
                                                                    <a class="nav-link animate-underline animate-target d-inline fw-normal text-truncate p-0"
                                                                        href="shop-catalog-electronics.html">Sony
                                                                        PSP</a>
                                                                </li>
                                                                <li class="d-flex w-100 pt-1">
                                                                    <a class="nav-link animate-underline animate-target d-inline fw-normal text-truncate p-0"
                                                                        href="shop-catalog-electronics.html">Retro
                                                                        Gaming</a>
                                                                </li>
                                                                <li class="d-flex w-100 pt-1">
                                                                    <a class="nav-link animate-underline animate-target d-inline fw-normal text-truncate p-0"
                                                                        href="shop-catalog-electronics.html">Microconsoles</a>
                                                                </li>
                                                                <li class="d-flex w-100 pt-1">
                                                                    <a class="nav-link animate-underline animate-target d-inline fw-normal text-truncate p-0"
                                                                        href="shop-catalog-electronics.html">Controllers</a>
                                                                </li>
                                                                <li class="d-flex w-100 pt-1">
                                                                    <a class="nav-link animate-underline animate-target d-inline fw-normal text-truncate p-0"
                                                                        href="shop-catalog-electronics.html">Accessories</a>
                                                                </li>
                                                                <li class="d-flex w-100 pt-1">
                                                                    <a class="nav-link animate-underline animate-target d-inline fw-normal text-truncate p-0"
                                                                        href="shop-catalog-electronics.html">Digital
                                                                        Games Screens</a>
                                                                </li>
                                                                <li class="d-flex w-100 pt-1">
                                                                    <a class="nav-link animate-underline animate-target d-inline fw-normal text-truncate p-0"
                                                                        href="shop-catalog-electronics.html">Game
                                                                        Pass</a>
                                                                </li>
                                                                <li class="d-flex w-100 pt-1">
                                                                    <a class="nav-link animate-underline animate-target d-inline fw-normal text-truncate p-0"
                                                                        href="shop-catalog-electronics.html">PlayStation
                                                                        Plus</a>
                                                                </li>
                                                            </ul>
                                                        </div>
                                                        <div class="d-none d-lg-block">
                                                            <div class="d-none d-xl-block" style="width: 284px">
                                                            </div>
                                                            <div class="d-xl-none" style="width: 240px"></div>
                                                            <div
                                                                class="position-relative d-flex flex-column justify-content-center h-100 bg-body-secondary rounded-5 py-4 px-3">
                                                                <div class="text-center px-2">
                                                                    <span
                                                                        class="badge bg-danger bg-opacity-10 text-danger fs-sm rounded-pill mb-2">Save
                                                                        $100</span>
                                                                    <div class="fs-sm text-light-emphasis mb-2">Starts
                                                                        from <del>$599.00</del> $499.00</div>
                                                                    <div class="h2 mb-4">Xbox Series X</div>
                                                                </div>
                                                                <img src="assets/img/mega-menu/electronics/12.png"
                                                                    width="252" alt="Xbox">
                                                                <div class="text-center mt-4">
                                                                    <a class="btn btn-sm btn-primary stretched-link"
                                                                        href="shop-catalog-electronics.html">Shop
                                                                        now</a>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>

                            <!-- Navbar nav -->
                            <div class="col-lg-9 d-lg-flex pt-3 pt-lg-0 ps-lg-0">
                                <ul class="navbar-nav position-relative">
                                    <li class="nav-item dropdown me-lg-n1 me-xl-0">
                                        <a class="nav-link dropdown-toggle" href="#" role="button"
                                            data-bs-toggle="dropdown" data-bs-trigger="hover"
                                            aria-expanded="false">Home</a>
                                        <ul class="dropdown-menu">
                                            <li class="hover-effect-opacity px-2 mx-n2">
                                                <a class="dropdown-item d-block mb-0" href="home-electronics.html">
                                                    <span class="fw-medium">Electronics Store</span>
                                                    <span class="d-block fs-xs text-body-secondary">Megamenu + Hero
                                                        slider</span>
                                                    <div class="d-none d-lg-block hover-effect-target position-absolute top-0 start-100 bg-body border border-light-subtle rounded rounded-start-0 transition-none invisible opacity-0 pt-2 px-2 ms-n2"
                                                        style="width: 212px; height: calc(100% + 2px); margin-top: -1px">
                                                        <img class="position-relative z-2 d-none-dark"
                                                            src="assets/img/mega-menu/demo-preview/electronics-light.jpg"
                                                            alt="Electronics Store">
                                                        <img class="position-relative z-2 d-none d-block-dark"
                                                            src="assets/img/mega-menu/demo-preview/electronics-dark.jpg"
                                                            alt="Electronics Store">
                                                        <span
                                                            class="position-absolute top-0 start-0 w-100 h-100 rounded rounded-start-0 d-none-dark"
                                                            style="box-shadow: .875rem .5rem 2rem -.5rem #676f7b; opacity: .1"></span>
                                                        <span
                                                            class="position-absolute top-0 start-0 w-100 h-100 rounded rounded-start-0 d-none d-block-dark"
                                                            style="box-shadow: .875rem .5rem 1.875rem -.5rem #080b12; opacity: .25"></span>
                                                    </div>
                                                </a>
                                            </li>
                                            <li class="hover-effect-opacity px-2 mx-n2">
                                                <a class="dropdown-item d-block mb-0" href="home-fashion-v1.html">
                                                    <span class="fw-medium">Fashion Store v.1</span>
                                                    <span class="d-block fs-xs text-body-secondary">Hero promo
                                                        slider</span>
                                                    <div class="d-none d-lg-block hover-effect-target position-absolute top-0 start-100 bg-body border border-light-subtle rounded rounded-start-0 transition-none invisible opacity-0 pt-2 px-2 ms-n2"
                                                        style="width: 212px; height: calc(100% + 2px); margin-top: -1px">
                                                        <img class="position-relative z-2 d-none-dark"
                                                            src="assets/img/mega-menu/demo-preview/fashion-1-light.jpg"
                                                            alt="Fashion Store v.1">
                                                        <img class="position-relative z-2 d-none d-block-dark"
                                                            src="assets/img/mega-menu/demo-preview/fashion-1-dark.jpg"
                                                            alt="Fashion Store v.1">
                                                        <span
                                                            class="position-absolute top-0 start-0 w-100 h-100 rounded rounded-start-0 d-none-dark"
                                                            style="box-shadow: .875rem .5rem 2rem -.5rem #676f7b; opacity: .1"></span>
                                                        <span
                                                            class="position-absolute top-0 start-0 w-100 h-100 rounded rounded-start-0 d-none d-block-dark"
                                                            style="box-shadow: .875rem .5rem 1.875rem -.5rem #080b12; opacity: .25"></span>
                                                    </div>
                                                </a>
                                            </li>
                                            <li class="hover-effect-opacity px-2 mx-n2">
                                                <a class="dropdown-item d-block mb-0" href="home-fashion-v2.html">
                                                    <span class="fw-medium">Fashion Store v.2</span>
                                                    <span class="d-block fs-xs text-body-secondary">Hero banner with
                                                        hotspots</span>
                                                    <div class="d-none d-lg-block hover-effect-target position-absolute top-0 start-100 bg-body border border-light-subtle rounded rounded-start-0 transition-none invisible opacity-0 pt-2 px-2 ms-n2"
                                                        style="width: 212px; height: calc(100% + 2px); margin-top: -1px">
                                                        <img class="position-relative z-2 d-none-dark"
                                                            src="assets/img/mega-menu/demo-preview/fashion-2-light.jpg"
                                                            alt="Fashion Store v.2">
                                                        <img class="position-relative z-2 d-none d-block-dark"
                                                            src="assets/img/mega-menu/demo-preview/fashion-2-dark.jpg"
                                                            alt="Fashion Store v.2">
                                                        <span
                                                            class="position-absolute top-0 start-0 w-100 h-100 rounded rounded-start-0 d-none-dark"
                                                            style="box-shadow: .875rem .5rem 2rem -.5rem #676f7b; opacity: .1"></span>
                                                        <span
                                                            class="position-absolute top-0 start-0 w-100 h-100 rounded rounded-start-0 d-none d-block-dark"
                                                            style="box-shadow: .875rem .5rem 1.875rem -.5rem #080b12; opacity: .25"></span>
                                                    </div>
                                                </a>
                                            </li>
                                            <li class="hover-effect-opacity px-2 mx-n2">
                                                <a class="dropdown-item d-block mb-0" href="home-furniture.html">
                                                    <span class="fw-medium">Furniture Store</span>
                                                    <span class="d-block fs-xs text-body-secondary">Fancy product
                                                        carousel</span>
                                                    <div class="d-none d-lg-block hover-effect-target position-absolute top-0 start-100 bg-body border border-light-subtle rounded rounded-start-0 transition-none invisible opacity-0 pt-2 px-2 ms-n2"
                                                        style="width: 212px; height: calc(100% + 2px); margin-top: -1px">
                                                        <img class="position-relative z-2 d-none-dark"
                                                            src="assets/img/mega-menu/demo-preview/furniture-light.jpg"
                                                            alt="Furniture Store">
                                                        <img class="position-relative z-2 d-none d-block-dark"
                                                            src="assets/img/mega-menu/demo-preview/furniture-dark.jpg"
                                                            alt="Furniture Store">
                                                        <span
                                                            class="position-absolute top-0 start-0 w-100 h-100 rounded rounded-start-0 d-none-dark"
                                                            style="box-shadow: .875rem .5rem 2rem -.5rem #676f7b; opacity: .1"></span>
                                                        <span
                                                            class="position-absolute top-0 start-0 w-100 h-100 rounded rounded-start-0 d-none d-block-dark"
                                                            style="box-shadow: .875rem .5rem 1.875rem -.5rem #080b12; opacity: .25"></span>
                                                    </div>
                                                </a>
                                            </li>
                                            <li class="hover-effect-opacity px-2 mx-n2">
                                                <a class="dropdown-item d-block mb-0" href="home-grocery.html">
                                                    <span class="fw-medium">Grocery Store</span>
                                                    <span class="d-block fs-xs text-body-secondary">Hero slider +
                                                        Category cards</span>
                                                    <div class="d-none d-lg-block hover-effect-target position-absolute top-0 start-100 bg-body border border-light-subtle rounded rounded-start-0 transition-none invisible opacity-0 pt-2 px-2 ms-n2"
                                                        style="width: 212px; height: calc(100% + 2px); margin-top: -1px">
                                                        <img class="position-relative z-2 d-none-dark"
                                                            src="assets/img/mega-menu/demo-preview/grocery-light.jpg"
                                                            alt="Grocery Store">
                                                        <img class="position-relative z-2 d-none d-block-dark"
                                                            src="assets/img/mega-menu/demo-preview/grocery-dark.jpg"
                                                            alt="Grocery Store">
                                                        <span
                                                            class="position-absolute top-0 start-0 w-100 h-100 rounded rounded-start-0 d-none-dark"
                                                            style="box-shadow: .875rem .5rem 2rem -.5rem #676f7b; opacity: .1"></span>
                                                        <span
                                                            class="position-absolute top-0 start-0 w-100 h-100 rounded rounded-start-0 d-none d-block-dark"
                                                            style="box-shadow: .875rem .5rem 1.875rem -.5rem #080b12; opacity: .25"></span>
                                                    </div>
                                                </a>
                                            </li>
                                        </ul>
                                    </li>
                                    <li class="nav-item dropdown position-static me-lg-n1 me-xl-0">
                                        <a class="nav-link dropdown-toggle" href="#" role="button"
                                            data-bs-toggle="dropdown" data-bs-trigger="hover"
                                            aria-expanded="false">Shop</a>
                                        <div class="dropdown-menu rounded-4 p-4">
                                            <div class="d-flex flex-column flex-lg-row gap-4">
                                                <div style="min-width: 190px">
                                                    <div class="h6 mb-2">Electronics Store</div>
                                                    <ul class="nav flex-column gap-2 mt-0">
                                                        <li class="d-flex w-100 pt-1">
                                                            <a class="nav-link animate-underline animate-target d-inline fw-normal text-truncate p-0"
                                                                href="shop-categories-electronics.html">Categories
                                                                Page</a>
                                                        </li>
                                                        <li class="d-flex w-100 pt-1">
                                                            <a class="nav-link animate-underline animate-target d-inline fw-normal text-truncate p-0"
                                                                href="shop-catalog-electronics.html">Catalog with Side
                                                                Filters</a>
                                                        </li>
                                                        <li class="d-flex w-100 pt-1">
                                                            <a class="nav-link animate-underline animate-target d-inline fw-normal text-truncate p-0"
                                                                href="shop-product-general-electronics.html">Product
                                                                General Info</a>
                                                        </li>
                                                        <li class="d-flex w-100 pt-1">
                                                            <a class="nav-link animate-underline animate-target d-inline fw-normal text-truncate p-0"
                                                                href="shop-product-details-electronics.html">Product
                                                                Details</a>
                                                        </li>
                                                        <li class="d-flex w-100 pt-1">
                                                            <a class="nav-link animate-underline animate-target d-inline fw-normal text-truncate p-0"
                                                                href="shop-product-reviews-electronics.html">Product
                                                                Reviews</a>
                                                        </li>
                                                    </ul>
                                                    <div class="h6 pt-4 mb-2">Fashion Store</div>
                                                    <ul class="nav flex-column gap-2 mt-0">
                                                        <li class="d-flex w-100 pt-1">
                                                            <a class="nav-link animate-underline animate-target d-inline fw-normal text-truncate p-0"
                                                                href="shop-catalog-fashion.html">Catalog with Side
                                                                Filters</a>
                                                        </li>
                                                        <li class="d-flex w-100 pt-1">
                                                            <a class="nav-link animate-underline animate-target d-inline fw-normal text-truncate p-0"
                                                                href="shop-product-fashion.html">Product Page</a>
                                                        </li>
                                                    </ul>
                                                    <div class="h6 pt-4 mb-2">Furniture Store</div>
                                                    <ul class="nav flex-column gap-2 mt-0">
                                                        <li class="d-flex w-100 pt-1">
                                                            <a class="nav-link animate-underline animate-target d-inline fw-normal text-truncate p-0"
                                                                href="shop-catalog-furniture.html">Catalog with Top
                                                                Filters</a>
                                                        </li>
                                                        <li class="d-flex w-100 pt-1">
                                                            <a class="nav-link animate-underline animate-target d-inline fw-normal text-truncate p-0"
                                                                href="shop-product-furniture.html">Product Page</a>
                                                        </li>
                                                    </ul>
                                                </div>
                                                <div style="min-width: 190px">
                                                    <div class="h6 mb-2">Grocery Store</div>
                                                    <ul class="nav flex-column gap-2 mt-0">
                                                        <li class="d-flex w-100 pt-1">
                                                            <a class="nav-link animate-underline animate-target d-inline fw-normal text-truncate p-0"
                                                                href="shop-catalog-grocery.html">Catalog with Side
                                                                Filters</a>
                                                        </li>
                                                        <li class="d-flex w-100 pt-1">
                                                            <a class="nav-link animate-underline animate-target d-inline fw-normal text-truncate p-0"
                                                                href="shop-product-grocery.html">Product Page</a>
                                                        </li>
                                                    </ul>
                                                    <div class="h6 pt-4 mb-2">Checkout v.1</div>
                                                    <ul class="nav flex-column gap-2 mt-0">
                                                        <li class="d-flex w-100 pt-1">
                                                            <a class="nav-link animate-underline animate-target d-inline fw-normal text-truncate p-0"
                                                                href="checkout-v1-cart.html">Shopping Cart</a>
                                                        </li>
                                                        <li class="d-flex w-100 pt-1">
                                                            <a class="nav-link animate-underline animate-target d-inline fw-normal text-truncate p-0"
                                                                href="checkout-v1-delivery-1.html">Delivery Info (Step
                                                                1)</a>
                                                        </li>
                                                        <li class="d-flex w-100 pt-1">
                                                            <a class="nav-link animate-underline animate-target d-inline fw-normal text-truncate p-0"
                                                                href="checkout-v1-delivery-2.html">Delivery Info (Step
                                                                2)</a>
                                                        </li>
                                                        <li class="d-flex w-100 pt-1">
                                                            <a class="nav-link animate-underline animate-target d-inline fw-normal text-truncate p-0"
                                                                href="checkout-v1-shipping.html">Shipping Address</a>
                                                        </li>
                                                        <li class="d-flex w-100 pt-1">
                                                            <a class="nav-link animate-underline animate-target d-inline fw-normal text-truncate p-0"
                                                                href="checkout-v1-payment.html">Payment</a>
                                                        </li>
                                                        <li class="d-flex w-100 pt-1">
                                                            <a class="nav-link animate-underline animate-target d-inline fw-normal text-truncate p-0"
                                                                href="checkout-v1-thankyou.html">Thank You Page</a>
                                                        </li>
                                                    </ul>
                                                </div>
                                                <div style="min-width: 190px">
                                                    <div class="h6 mb-2">Checkout v.2</div>
                                                    <ul class="nav flex-column gap-2 mt-0">
                                                        <li class="d-flex w-100 pt-1">
                                                            <a class="nav-link animate-underline animate-target d-inline fw-normal text-truncate p-0"
                                                                href="checkout-v2-cart.html">Shopping Cart</a>
                                                        </li>
                                                        <li class="d-flex w-100 pt-1">
                                                            <a class="nav-link animate-underline animate-target d-inline fw-normal text-truncate p-0"
                                                                href="checkout-v2-delivery.html">Delivery Info</a>
                                                        </li>
                                                        <li class="d-flex w-100 pt-1">
                                                            <a class="nav-link animate-underline animate-target d-inline fw-normal text-truncate p-0"
                                                                href="checkout-v2-pickup.html">Pickup from Store</a>
                                                        </li>
                                                        <li class="d-flex w-100 pt-1">
                                                            <a class="nav-link animate-underline animate-target d-inline fw-normal text-truncate p-0"
                                                                href="checkout-v2-thankyou.html">Thank You Page</a>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </li>
                                    <li class="nav-item dropdown me-lg-n1 me-xl-0">
                                        <a class="nav-link dropdown-toggle" href="#" role="button"
                                            data-bs-toggle="dropdown" data-bs-trigger="hover"
                                            data-bs-auto-close="outside" aria-expanded="false">Account</a>
                                        <ul class="dropdown-menu">
                                            <li class="dropend">
                                                <a class="dropdown-item dropdown-toggle" href="#!"
                                                    role="button" data-bs-toggle="dropdown"
                                                    data-bs-trigger="hover" aria-expanded="false">Auth Pages</a>
                                                <ul class="dropdown-menu">
                                                    <li><a class="dropdown-item" href="account-signin.html">Sign
                                                            In</a></li>
                                                    <li><a class="dropdown-item" href="account-signup.html">Sign
                                                            Up</a></li>
                                                    <li><a class="dropdown-item"
                                                            href="account-password-recovery.html">Password
                                                            Recovery</a></li>
                                                </ul>
                                            </li>
                                            <li><a class="dropdown-item" href="account-orders.html">Orders
                                                    History</a></li>
                                            <li><a class="dropdown-item" href="account-wishlist.html">Wishlist</a>
                                            </li>
                                            <li><a class="dropdown-item" href="account-payment.html">Payment
                                                    Methods</a></li>
                                            <li><a class="dropdown-item" href="account-reviews.html">My Reviews</a>
                                            </li>
                                            <li><a class="dropdown-item" href="account-info.html">Personal Info</a>
                                            </li>
                                            <li><a class="dropdown-item" href="account-addresses.html">Addresses</a>
                                            </li>
                                            <li><a class="dropdown-item"
                                                    href="account-notifications.html">Notifications</a></li>
                                        </ul>
                                    </li>
                                    <li class="nav-item dropdown me-lg-n1 me-xl-0">
                                        <a class="nav-link dropdown-toggle active" aria-current="page"
                                            href="#" role="button" data-bs-toggle="dropdown"
                                            data-bs-trigger="hover" data-bs-auto-close="outside"
                                            aria-expanded="false">Pages</a>
                                        <ul class="dropdown-menu">
                                            <li class="dropend">
                                                <a class="dropdown-item dropdown-toggle" href="#!"
                                                    role="button" data-bs-toggle="dropdown"
                                                    data-bs-trigger="hover" aria-expanded="false">About</a>
                                                <ul class="dropdown-menu">
                                                    <li><a class="dropdown-item" href="about-v1.html">About v.1</a>
                                                    </li>
                                                    <li><a class="dropdown-item" href="about-v2.html">About v.2</a>
                                                    </li>
                                                </ul>
                                            </li>
                                            <li class="dropend">
                                                <a class="dropdown-item dropdown-toggle" href="#!"
                                                    role="button" data-bs-toggle="dropdown"
                                                    data-bs-trigger="hover" aria-expanded="false">Blog</a>
                                                <ul class="dropdown-menu">
                                                    <li><a class="dropdown-item" href="blog-grid-v1.html">Grid View
                                                            v.1</a></li>
                                                    <li><a class="dropdown-item" href="blog-grid-v2.html">Grid View
                                                            v.2</a></li>
                                                    <li><a class="dropdown-item" href="blog-list.html">List View</a>
                                                    </li>
                                                    <li><a class="dropdown-item" href="blog-single-v1.html">Single
                                                            Post v.1</a></li>
                                                    <li><a class="dropdown-item" href="blog-single-v2.html">Single
                                                            Post v.2</a></li>
                                                </ul>
                                            </li>
                                            <li class="dropend">
                                                <a class="dropdown-item dropdown-toggle" href="#!"
                                                    role="button" data-bs-toggle="dropdown"
                                                    data-bs-trigger="hover" aria-expanded="false">Contact</a>
                                                <ul class="dropdown-menu">
                                                    <li><a class="dropdown-item" href="contact-v1.html">Contact
                                                            v.1</a></li>
                                                    <li><a class="dropdown-item" href="contact-v2.html">Contact
                                                            v.2</a></li>
                                                    <li><a class="dropdown-item" href="contact-v3.html">Contact
                                                            v.3</a></li>
                                                </ul>
                                            </li>
                                            <li class="dropend">
                                                <a class="dropdown-item dropdown-toggle" href="#!"
                                                    role="button" data-bs-toggle="dropdown"
                                                    data-bs-trigger="hover" aria-expanded="false">Help Center</a>
                                                <ul class="dropdown-menu">
                                                    <li><a class="dropdown-item" href="help-topics-v1.html">Help
                                                            Topics v.1</a></li>
                                                    <li><a class="dropdown-item" href="help-topics-v2.html">Help
                                                            Topics v.2</a></li>
                                                    <li><a class="dropdown-item"
                                                            href="help-single-article-v1.html">Help Single Article
                                                            v.1</a></li>
                                                    <li><a class="dropdown-item"
                                                            href="help-single-article-v2.html">Help Single Article
                                                            v.2</a></li>
                                                </ul>
                                            </li>
                                            <li class="dropend">
                                                <a class="dropdown-item dropdown-toggle" href="#!"
                                                    role="button" data-bs-toggle="dropdown"
                                                    data-bs-trigger="hover" aria-expanded="false">404 Error</a>
                                                <ul class="dropdown-menu">
                                                    <li><a class="dropdown-item" href="404-electronics.html">404
                                                            Electronics</a></li>
                                                    <li><a class="dropdown-item" href="404-fashion.html">404
                                                            Fashion</a></li>
                                                    <li><a class="dropdown-item" href="404-furniture.html">404
                                                            Furniture</a></li>
                                                    <li><a class="dropdown-item" href="404-grocery.html">404
                                                            Grocery</a></li>
                                                </ul>
                                            </li>
                                            <li><a class="dropdown-item" href="terms-and-conditions.html">Terms
                                                    &amp; Conditions</a></li>
                                        </ul>
                                    </li>
                                    <li class="nav-item me-lg-n2 me-xl-0">
                                        <a class="nav-link" href="docs/installation.html">Docs</a>
                                    </li>
                                    <li class="nav-item me-lg-n2 me-xl-0">
                                        <a class="nav-link" href="docs/typography.html">Components</a>
                                    </li>
                                </ul>
                                <hr class="d-lg-none my-3">
                                <ul class="navbar-nav ms-auto">
                                    <li class="nav-item dropdown me-lg-n2 me-xl-n1">
                                        <a class="nav-link dropdown-toggle fs-sm px-3" href="#!"
                                            role="button" data-bs-toggle="dropdown" data-bs-trigger="hover"
                                            aria-expanded="false">Eng</a>
                                        <ul class="dropdown-menu fs-sm"
                                            style="--cz-dropdown-min-width: 7.5rem; --cz-dropdown-spacer: .25rem">
                                            <li><a class="dropdown-item" href="#!">Français</a></li>
                                            <li><a class="dropdown-item" href="#!">Deutsch</a></li>
                                            <li><a class="dropdown-item" href="#!">Italiano</a></li>
                                        </ul>
                                    </li>
                                    <li class="nav-item dropdown me-lg-n1">
                                        <a class="nav-link dropdown-toggle fs-sm px-3" href="#!"
                                            role="button" data-bs-toggle="dropdown" data-bs-trigger="hover"
                                            aria-expanded="false">USD ($)</a>
                                        <ul class="dropdown-menu dropdown-menu-end fs-sm"
                                            style="--cz-dropdown-min-width: 7rem; --cz-dropdown-spacer: .25rem">
                                            <li><a class="dropdown-item" href="#!">€ EUR</a></li>
                                            <li><a class="dropdown-item" href="#!">£ UKP</a></li>
                                            <li><a class="dropdown-item" href="#!">¥ JPY</a></li>
                                        </ul>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="offcanvas-header border-top px-0 py-3 mt-3 d-md-none">
                    <div class="nav nav-justified w-100">
                        <a class="nav-link border-end" href="account-signin.html">
                            <i class="ci-user fs-lg opacity-60 me-2"></i>
                            Account
                        </a>
                        <a class="nav-link" href="account-wishlist.html">
                            <i class="ci-heart fs-lg opacity-60 me-2"></i>
                            Wishlist
                        </a>
                    </div>
                </div>
            </nav>
        </div>
    </header>


    <!-- Page content -->
    <main class="content-wrapper">

        <!-- Breadcrumb -->
        <nav class="container pt-3 my-3 my-md-4" aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="home-electronics.html">Home</a></li>
                <li class="breadcrumb-item active" aria-current="page">About</li>
            </ol>
        </nav>


        <!-- Hero -->
        <section class="container">
            <div class="row">

                <!-- Cover image -->
                <div class="col-md-7 order-md-2 mb-4 mb-md-0">
                    <div class="position-relative h-100">
                        <div class="ratio ratio-16x9"></div>
                        <img src="assets/img/about/v1/hero.jpg"
                            class="position-absolute top-0 start-0 w-100 h-100 object-fit-cover rounded-5"
                            alt="Image">
                    </div>
                </div>

                <!-- Text + button -->
                <div class="col-md-5 order-md-1">
                    <div class="position-relative py-5 px-4 px-sm-5">
                        <span class="position-absolute top-0 start-0 w-100 h-100 rounded-5 d-none-dark rtl-flip"
                            style="background: linear-gradient(-90deg, #accbee 0%, #e7f0fd 100%)"></span>
                        <span
                            class="position-absolute top-0 start-0 w-100 h-100 rounded-5 d-none d-block-dark rtl-flip"
                            style="background: linear-gradient(-90deg, #1b273a 0%, #1f2632 100%)"></span>
                        <div class="position-relative z-1 py-md-2 py-lg-4 py-xl-5 px-xl-2 px-xxl-4 my-xxl-3">
                            <h1 class="pb-1 pb-md-2 pb-lg-3">Apex - More than a retailer</h1>
                            <p class="text-dark-emphasis pb-sm-2 pb-lg-0 mb-4 mb-lg-5">Since 2015, we have been
                                fulfilling the small dreams and big plans of millions of people. You can find literally
                                everything here.</p>
                            <a class="btn btn-lg btn-outline-dark animate-slide-down" href="#mission">
                                Learn more
                                <i class="ci-arrow-down fs-lg animate-target ms-2 me-n1"></i>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </section>


        <!-- Stats -->
        <section class="container py-5 mt-md-2 mt-lg-4">
            <div class="row row-cols-2 row-cols-md-4 g-4">
                <div class="col text-center">
                    <div class="display-4 text-dark-emphasis mb-2">14k</div>
                    <p class="fs-sm mb-0">products available for purchase</p>
                </div>
                <div class="col text-center">
                    <div class="display-4 text-dark-emphasis mb-2">120m</div>
                    <p class="fs-sm mb-0">users visited site from 2015</p>
                </div>
                <div class="col text-center">
                    <div class="display-4 text-dark-emphasis mb-2">800+</div>
                    <p class="fs-sm mb-0">employees around the world </p>
                </div>
                <div class="col text-center">
                    <div class="display-4 text-dark-emphasis mb-2">92%</div>
                    <p class="fs-sm mb-0">of our customers return</p>
                </div>
            </div>
        </section>


        <!-- CEO quotation (Mission) -->
        <section class="container pt-3 pt-sm-4 pt-lg-5 mt-lg-2 mt-xl-4 mt-xxl-5" id="mission"
            style="scroll-margin-top: 60px">
            <div class="text-center mx-auto" style="max-width: 690px">
                <h2 class="text-body fs-sm fw-normal">Mission</h2>
                <h3 class="h1 pb-2 pb-md-3 mx-auto" style="max-width: 400px">The best products at fair prices</h3>
                <p class="fs-xl pb-2 pb-md-3 pb-lg-4">"We believe that things exist to make life easier, more pleasant
                    and kinder. That's why the search for the right thing should be quick, convenient and enjoyable. We
                    do not just sell household appliances and electronics, but comfort and
                    accessibility."</p>
                <img src="assets/img/about/v1/avatar.jpg" width="64"
                    class="d-block rounded-circle mx-auto mb-3" alt="Avatar">
                <h6 class="mb-0">William Lacker, Apex CEO</h6>
            </div>
        </section>


        <!-- Principles -->
        <section class="container pt-5">
            <div class="row pt-2 pt-sm-3 pt-md-4 pt-lg-5">
                <div class="col-md-5 col-lg-6 pb-1 pb-sm-2 pb-md-0 mb-4 mb-md-0">
                    <div class="ratio ratio-1x1">
                        <img src="assets/img/about/v1/delivery.jpg" class="rounded-5" alt="Image">
                    </div>
                </div>
                <div class="col-md-7 col-lg-6 pt-md-3 pt-xl-4 pt-xxl-5">
                    <div class="ps-md-3 ps-lg-4 ps-xl-5 ms-xxl-4">
                        <h2 class="text-body fs-sm fw-normal">Principles</h2>
                        <h3 class="h1 pb-1 pb-sm-2 pb-lg-3">The main principles that will allow us to grow</h3>
                        <p class="pb-xl-3">Apex is a comprehensive solution to fulfill any customer's needs, serving
                            as both the starting point and end destination of their search. It operates as a reliable
                            assistant, dedicated to eliminating the need for any unpleasant
                            compromises, making their dreams a reality, and empowering them to think big.</p>

                        <!-- Accordion -->
                        <div class="accordion accordion-alt-icon" id="principles">

                            <!-- Item (expanded) -->
                            <div class="accordion-item">
                                <h3 class="accordion-header" id="headingFocus">
                                    <button type="button" class="accordion-button animate-underline collapsed"
                                        data-bs-toggle="collapse" data-bs-target="#focus" aria-expanded="false"
                                        aria-controls="focus">
                                        <span class="animate-target me-2">Customer focus</span>
                                    </button>
                                </h3>
                                <div class="accordion-collapse collapse" id="focus"
                                    aria-labelledby="headingFocus" data-bs-parent="#principles">
                                    <div class="accordion-body">We prioritize understanding and anticipating our
                                        customers' needs, delivering an exceptional and personalized experience from
                                        start to finish.</div>
                                </div>
                            </div>

                            <!-- Item -->
                            <div class="accordion-item">
                                <h3 class="accordion-header" id="headingReputation">
                                    <button type="button" class="accordion-button animate-underline collapsed"
                                        data-bs-toggle="collapse" data-bs-target="#reputation"
                                        aria-expanded="false" aria-controls="reputation">
                                        <span class="animate-target me-2">Betting on reputation</span>
                                    </button>
                                </h3>
                                <div class="accordion-collapse collapse" id="reputation"
                                    aria-labelledby="headingReputation" data-bs-parent="#principles">
                                    <div class="accordion-body">We value a solid reputation built on integrity,
                                        transparency, and quality - ensuring our customers trust and rely on our brand.
                                    </div>
                                </div>
                            </div>

                            <!-- Item -->
                            <div class="accordion-item">
                                <h3 class="accordion-header" id="headingFast">
                                    <button type="button" class="accordion-button animate-underline collapsed"
                                        data-bs-toggle="collapse" data-bs-target="#fast" aria-expanded="false"
                                        aria-controls="fast">
                                        <span class="animate-target me-2">Fast, convenient and enjoyable</span>
                                    </button>
                                </h3>
                                <div class="accordion-collapse collapse" id="fast"
                                    aria-labelledby="headingFast" data-bs-parent="#principles">
                                    <div class="accordion-body">We've streamlined our process for speed, convenience,
                                        and an enjoyable shopping experience, redefining online standards for our
                                        delighted customers.</div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>


        <!-- Values (Carousel of icon boxes) -->
        <section class="container-start pt-5">
            <div class="row align-items-center g-0 pt-2 pt-sm-3 pt-md-4 pt-lg-5">
                <div class="col-md-4 col-lg-3 pb-1 pb-md-0 pe-3 ps-md-0 mb-4 mb-md-0">
                    <div class="d-flex flex-md-column align-items-end align-items-md-start">
                        <div class="mb-md-5 me-3 me-md-0">
                            <h2 class="text-body fs-sm fw-normal">Values</h2>
                            <h3 class="h1 mb-0">Simple values to achieve goals</h3>
                        </div>

                        <!-- External slider prev/next buttons -->
                        <div class="d-flex gap-2">
                            <button type="button" id="prev-values"
                                class="btn btn-icon btn-outline-secondary rounded-circle animate-slide-start me-1"
                                aria-label="Prev">
                                <i class="ci-chevron-left fs-xl animate-target"></i>
                            </button>
                            <button type="button" id="next-values"
                                class="btn btn-icon btn-outline-secondary rounded-circle animate-slide-end"
                                aria-label="Next">
                                <i class="ci-chevron-right fs-xl animate-target"></i>
                            </button>
                        </div>
                    </div>
                </div>

                <div class="col-md-8 col-lg-9">
                    <div class="ps-md-4 ps-lg-5">
                        <div class="swiper"
                            data-swiper="{
                &quot;slidesPerView&quot;: &quot;auto&quot;,
                &quot;spaceBetween&quot;: 24,
                &quot;loop&quot;: true,
                &quot;navigation&quot;: {
                  &quot;prevEl&quot;: &quot;#prev-values&quot;,
                  &quot;nextEl&quot;: &quot;#next-values&quot;
                }
              }">
                            <div class="swiper-wrapper">

                                <!-- Item -->
                                <div class="swiper-slide w-auto h-auto">
                                    <div class="card h-100 rounded-4 px-3" style="max-width: 306px">
                                        <div class="card-body py-5 px-3">
                                            <div class="h4 h5 d-flex align-items-center">
                                                <i class="ci-user-plus fs-4 me-3"></i> People
                                            </div>
                                            <p class="mb-0">The most important value of the Company is people
                                                (employees, partners, clients). Behind any success there is, first and
                                                foremost, a specific person. It is he who creates the product,
                                                technology, and innovation.</p>
                                        </div>
                                    </div>
                                </div>

                                <!-- Item -->
                                <div class="swiper-slide w-auto h-auto">
                                    <div class="card h-100 rounded-4 px-3" style="max-width: 306px">
                                        <div class="card-body py-5 px-3">
                                            <div class="h4 h5 d-flex align-items-center">
                                                <i class="ci-shopping-bag fs-4 me-3"></i> Service
                                            </div>
                                            <p class="mb-0">Care, attention, desire and ability to be helpful (to a
                                                colleague in his department, other departments, clients, customers and
                                                all other people who surround us).</p>
                                        </div>
                                    </div>
                                </div>

                                <!-- Item -->
                                <div class="swiper-slide w-auto h-auto">
                                    <div class="card h-100 rounded-4 px-3" style="max-width: 306px">
                                        <div class="card-body py-5 px-3">
                                            <div class="h4 h5 d-flex align-items-center">
                                                <i class="ci-trending-up fs-4 me-3"></i> Responsibility
                                            </div>
                                            <p class="mb-0">Responsibility is our key quality. We don't shift it to
                                                external circumstances or other people. If we see something that could
                                                be improved, we don't just criticize, but offer our own options.</p>
                                        </div>
                                    </div>
                                </div>

                                <!-- Item -->
                                <div class="swiper-slide w-auto h-auto">
                                    <div class="card h-100 rounded-4 px-3" style="max-width: 306px">
                                        <div class="card-body py-5 px-3">
                                            <div class="h4 h5 d-flex align-items-center">
                                                <i class="ci-rocket fs-4 me-3"></i> Innovation
                                            </div>
                                            <p class="mb-0">We foster a culture of continuous improvement and
                                                innovation. Embracing change and staying ahead of the curve are
                                                essential for our success. We encourage creative thinking,
                                                experimentation, and the pursuit of
                                                new ideas.</p>
                                        </div>
                                    </div>
                                </div>

                                <!-- Item -->
                                <div class="swiper-slide w-auto h-auto">
                                    <div class="card h-100 rounded-4 px-3" style="max-width: 306px">
                                        <div class="card-body py-5 px-3">
                                            <div class="h4 h5 d-flex align-items-center">
                                                <i class="ci-star fs-4 me-3"></i> Leadership
                                            </div>
                                            <p class="mb-0">Apex people are young, ambitious and energetic
                                                individuals. With identified leadership qualities, with a desire to be
                                                the best at what they do.</p>
                                        </div>
                                    </div>
                                </div>

                                <!-- Item -->
                                <div class="swiper-slide w-auto h-auto">
                                    <div class="card h-100 rounded-4 px-3" style="max-width: 306px">
                                        <div class="card-body py-5 px-3">
                                            <div class="h4 h5 d-flex align-items-center">
                                                <i class="ci-leaf fs-4 me-3"></i> Sustainability
                                            </div>
                                            <p class="mb-0">We are committed to minimizing our environmental impact
                                                and promoting sustainable practices. From responsible sourcing to
                                                eco-friendly packaging, we aim to make a positive contribution to the
                                                well-being of our
                                                planet.</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>


        <!-- Video + Blog post -->
        <section class="container pt-5 mt-2 mt-sm-3 mt-md-4 mt-lg-5">
            <div class="row row-cols-1 row-cols-md-2 g-4">
                <div class="col">
                    <div class="position-relative h-100">
                        <div class="ratio ratio-16x9"></div>
                        <img src="assets/img/about/v1/video-cover.jpg"
                            class="position-absolute top-0 start-0 w-100 h-100 object-fit-cover rounded-5"
                            alt="Image">
                        <div class="position-absolute start-0 bottom-0 d-flex align-items-end w-100 h-100 z-2 p-4">
                            <a class="btn btn-lg btn-light rounded-pill m-md-2"
                                href="https://www.youtube.com/watch?v=Sqqj_14wBxU" data-glightbox="">
                                <i class="ci-play fs-lg ms-n1 me-2"></i>
                                Play
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="bg-body-tertiary rounded-5 py-5 px-4 px-sm-5">
                        <div class="py-md-3 py-lg-4 py-xl-5 px-lg-4 px-xl-5 my-lg-2 my-xl-4 my-xxl-5">
                            <h2 class="h3 pb-sm-1 pb-lg-2">The role of philanthropy in building a better world</h2>
                            <p class="pb-sm-2 pb-lg-0 mb-4 mb-lg-5">Charitable contributions are a vital aspect of
                                building a better world. These contributions come in various forms, including monetary
                                donations...</p>
                            <a class="btn btn-lg btn-outline-dark" href="#!">Learn more</a>
                        </div>
                    </div>
                </div>
            </div>
        </section>


        <!-- Open positions (Carousel of cards) -->
        <section class="container py-5 mt-2 mb-1 my-sm-3 my-md-4 my-lg-5">
            <div class="d-flex align-items-end justify-content-between pb-3 mb-1 mb-md-3">
                <div class="me-4">
                    <h2 class="text-body fs-sm fw-normal">Career</h2>
                    <h3 class="h1 mb-0">Open positions</h3>
                </div>

                <!-- External slider prev/next buttons -->
                <div class="d-flex justify-content-center justify-content-md-start gap-2">
                    <button type="button" id="prev-positions"
                        class="btn btn-icon btn-outline-secondary rounded-circle animate-slide-start me-1"
                        aria-label="Prev">
                        <i class="ci-chevron-left fs-xl animate-target"></i>
                    </button>
                    <button type="button" id="next-positions"
                        class="btn btn-icon btn-outline-secondary rounded-circle animate-slide-end"
                        aria-label="Next">
                        <i class="ci-chevron-right fs-xl animate-target"></i>
                    </button>
                </div>
            </div>

            <!-- Slider -->
            <div class="swiper"
                data-swiper="{
          &quot;slidesPerView&quot;: 1,
          &quot;spaceBetween&quot;: 24,
          &quot;loop&quot;: true,
          &quot;navigation&quot;: {
            &quot;prevEl&quot;: &quot;#prev-positions&quot;,
            &quot;nextEl&quot;: &quot;#next-positions&quot;
          },
          &quot;breakpoints&quot;: {
            &quot;500&quot;: {
              &quot;slidesPerView&quot;: 2
            },
            &quot;800&quot;: {
              &quot;slidesPerView&quot;: 3
            },
            &quot;1080&quot;: {
              &quot;slidesPerView&quot;: 4
            }
          }
        }">
                <div class="swiper-wrapper py-2">

                    <!-- Item -->
                    <div class="swiper-slide h-auto">
                        <a class="card btn btn-outline-secondary w-100 h-100 align-items-start text-wrap text-start rounded-4 px-0 px-xl-2 py-4 py-xl-5"
                            href="#!">
                            <div class="card-body pb-0 pt-3 pt-xl-0">
                                <span class="badge bg-info fs-xs rounded-pill">Full time</span>
                                <h4 class="h5 py-3 my-2 my-xl-3">Supply Chain and Logistics Coordinator</h4>
                            </div>
                            <div
                                class="card-footer w-100 bg-transparent border-0 text-body fs-sm fw-normal pt-0 pb-3 pb-xl-0">
                                New York</div>
                        </a>
                    </div>

                    <!-- Item -->
                    <div class="swiper-slide h-auto">
                        <a class="card btn btn-outline-secondary w-100 h-100 align-items-start text-wrap text-start rounded-4 px-0 px-xl-2 py-4 py-xl-5"
                            href="#!">
                            <div class="card-body pb-0 pt-3 pt-xl-0">
                                <span class="badge bg-success fs-xs rounded-pill">Part time</span>
                                <h4 class="h5 py-3 my-2 my-xl-3">Content Manager for Social Networks</h4>
                            </div>
                            <div
                                class="card-footer w-100 bg-transparent border-0 text-body fs-sm fw-normal pt-0 pb-3 pb-xl-0">
                                Remote</div>
                        </a>
                    </div>

                    <!-- Item -->
                    <div class="swiper-slide h-auto">
                        <a class="card btn btn-outline-secondary w-100 h-100 align-items-start text-wrap text-start rounded-4 px-0 px-xl-2 py-4 py-xl-5"
                            href="#!">
                            <div class="card-body pb-0 pt-3 pt-xl-0">
                                <span class="badge bg-info fs-xs rounded-pill">Full time</span>
                                <h4 class="h5 py-3 my-2 my-xl-3">Customer Service Representative</h4>
                            </div>
                            <div
                                class="card-footer w-100 bg-transparent border-0 text-body fs-sm fw-normal pt-0 pb-3 pb-xl-0">
                                London</div>
                        </a>
                    </div>

                    <!-- Item -->
                    <div class="swiper-slide h-auto">
                        <a class="card btn btn-outline-secondary w-100 h-100 align-items-start text-wrap text-start rounded-4 px-0 px-xl-2 py-4 py-xl-5"
                            href="#!">
                            <div class="card-body pb-0 pt-3 pt-xl-0">
                                <span class="badge bg-warning fs-xs rounded-pill">Freelance</span>
                                <h4 class="h5 py-3 my-2 my-xl-3">Data Analyst/Analytics Specialist</h4>
                            </div>
                            <div
                                class="card-footer w-100 bg-transparent border-0 text-body fs-sm fw-normal pt-0 pb-3 pb-xl-0">
                                Remote</div>
                        </a>
                    </div>

                    <!-- Item -->
                    <div class="swiper-slide h-auto">
                        <a class="card btn btn-outline-secondary w-100 h-100 align-items-start text-wrap text-start rounded-4 px-0 px-xl-2 py-4 py-xl-5"
                            href="#!">
                            <div class="card-body pb-0 pt-3 pt-xl-0">
                                <span class="badge bg-info fs-xs rounded-pill">Full time</span>
                                <h4 class="h5 py-3 my-2 my-xl-3">E-commerce Manager/Director</h4>
                            </div>
                            <div
                                class="card-footer w-100 bg-transparent border-0 text-body fs-sm fw-normal pt-0 pb-3 pb-xl-0">
                                In house</div>
                        </a>
                    </div>
                </div>
            </div>
        </section>


        <!-- Subscription form + Vlog -->
        <section class="bg-body-tertiary py-5">
            <div class="container pt-sm-2 pt-md-3 pt-lg-4 pt-xl-5">
                <div class="row">
                    <div class="col-md-6 col-lg-5 mb-5 mb-md-0">
                        <h2 class="h4 mb-2">Sign up to our newsletter</h2>
                        <p class="text-body pb-2 pb-ms-3">Receive our latest updates about our products &amp;
                            promotions</p>
                        <form class="d-flex needs-validation pb-1 pb-sm-2 pb-md-3 pb-lg-0 mb-4 mb-lg-5"
                            novalidate="">
                            <div class="position-relative w-100 me-2">
                                <input type="email" class="form-control form-control-lg"
                                    placeholder="Your email" required="">
                            </div>
                            <button type="submit" class="btn btn-lg btn-primary">Subscribe</button>
                        </form>
                        <div class="d-flex gap-3">
                            <a class="btn btn-icon btn-secondary rounded-circle" href="#!"
                                aria-label="Instagram">
                                <i class="ci-instagram fs-base"></i>
                            </a>
                            <a class="btn btn-icon btn-secondary rounded-circle" href="#!"
                                aria-label="Facebook">
                                <i class="ci-facebook fs-base"></i>
                            </a>
                            <a class="btn btn-icon btn-secondary rounded-circle" href="#!"
                                aria-label="YouTube">
                                <i class="ci-youtube fs-base"></i>
                            </a>
                            <a class="btn btn-icon btn-secondary rounded-circle" href="#!"
                                aria-label="Telegram">
                                <i class="ci-telegram fs-base"></i>
                            </a>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-5 col-xl-4 offset-lg-1 offset-xl-2">
                        <ul class="list-unstyled d-flex flex-column gap-4 ps-md-4 ps-lg-0 mb-3">
                            <li class="nav flex-nowrap align-items-center position-relative">
                                <img src="assets/img/home/electronics/vlog/01.jpg" class="rounded" width="140"
                                    alt="Video cover">
                                <div class="ps-3">
                                    <div class="fs-xs text-body-secondary lh-sm mb-2">6:16</div>
                                    <a class="nav-link fs-sm hover-effect-underline stretched-link p-0"
                                        href="#!">5 New Cool Gadgets You Must See on Apex - Cheap Budget</a>
                                </div>
                            </li>
                            <li class="nav flex-nowrap align-items-center position-relative">
                                <img src="assets/img/home/electronics/vlog/02.jpg" class="rounded" width="140"
                                    alt="Video cover">
                                <div class="ps-3">
                                    <div class="fs-xs text-body-secondary lh-sm mb-2">10:20</div>
                                    <a class="nav-link fs-sm hover-effect-underline stretched-link p-0"
                                        href="#!">5 Super Useful Gadgets on Apex You Must Have in 2023</a>
                                </div>
                            </li>
                            <li class="nav flex-nowrap align-items-center position-relative">
                                <img src="assets/img/home/electronics/vlog/03.jpg" class="rounded" width="140"
                                    alt="Video cover">
                                <div class="ps-3">
                                    <div class="fs-xs text-body-secondary lh-sm mb-2">8:40</div>
                                    <a class="nav-link fs-sm hover-effect-underline stretched-link p-0"
                                        href="#!">Top 5 New Amazing Gadgets on Apex You Must See</a>
                                </div>
                            </li>
                        </ul>
                        <div class="nav ps-md-4 ps-lg-0">
                            <a class="btn nav-link animate-underline text-decoration-none px-0" href="#!">
                                <span class="animate-target">View all</span>
                                <i class="ci-chevron-right fs-base ms-1"></i>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </main>


    <!-- Page footer -->
    <footer class="footer position-relative bg-dark">
        <span class="position-absolute top-0 start-0 w-100 h-100 bg-body d-none d-block-dark"></span>
        <div class="container position-relative z-1 pt-sm-2 pt-md-3 pt-lg-4" data-bs-theme="dark">

            <!-- Columns with links that are turned into accordion on screens < 500px wide (sm breakpoint) -->
            <div class="accordion py-5" id="footerLinks">
                <div class="row">
                    <div
                        class="col-md-4 d-sm-flex flex-md-column align-items-center align-items-md-start pb-3 mb-sm-4">
                        <h4 class="mb-sm-0 mb-md-4 me-4">
                            <a class="text-dark-emphasis text-decoration-none" href="home-electronics.html">Apex</a>
                        </h4>
                        <p
                            class="text-body fs-sm text-sm-end text-md-start mb-sm-0 mb-md-3 ms-0 ms-sm-auto ms-md-0 me-4">
                            Got questions? Contact us 24/7</p>
                        <div class="dropdown" style="max-width: 250px">
                            <button type="button"
                                class="btn btn-light dropdown-toggle justify-content-between w-100 d-none-dark"
                                data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                Help and consultation
                            </button>
                            <button type="button"
                                class="btn btn-secondary dropdown-toggle justify-content-between w-100 d-none d-flex-dark"
                                data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                Help and consultation
                            </button>
                            <ul class="dropdown-menu">
                                <li><a class="dropdown-item" href="#!">Help center &amp; FAQ</a></li>
                                <li><a class="dropdown-item" href="#!">Support chat</a></li>
                                <li><a class="dropdown-item" href="#!">Open support ticket</a></li>
                                <li><a class="dropdown-item" href="#!">Call center</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-md-8">
                        <div class="row row-cols-1 row-cols-sm-3 gx-3 gx-md-4">
                            <div class="accordion-item col border-0">
                                <h6 class="accordion-header" id="companyHeading">
                                    <span class="text-dark-emphasis d-none d-sm-block">Company</span>
                                    <button type="button" class="accordion-button collapsed py-3 d-sm-none"
                                        data-bs-toggle="collapse" data-bs-target="#companyLinks"
                                        aria-expanded="false" aria-controls="companyLinks">Company</button>
                                </h6>
                                <div class="accordion-collapse collapse d-sm-block" id="companyLinks"
                                    aria-labelledby="companyHeading" data-bs-parent="#footerLinks">
                                    <ul class="nav flex-column gap-2 pt-sm-3 pb-3 mt-n1 mb-1">
                                        <li class="d-flex w-100 pt-1">
                                            <a class="nav-link animate-underline animate-target d-inline fw-normal text-truncate p-0"
                                                href="#!">About company</a>
                                        </li>
                                        <li class="d-flex w-100 pt-1">
                                            <a class="nav-link animate-underline animate-target d-inline fw-normal text-truncate p-0"
                                                href="#!">Our team</a>
                                        </li>
                                        <li class="d-flex w-100 pt-1">
                                            <a class="nav-link animate-underline animate-target d-inline fw-normal text-truncate p-0"
                                                href="#!">Careers</a>
                                        </li>
                                        <li class="d-flex w-100 pt-1">
                                            <a class="nav-link animate-underline animate-target d-inline fw-normal text-truncate p-0"
                                                href="#!">Contact us</a>
                                        </li>
                                        <li class="d-flex w-100 pt-1">
                                            <a class="nav-link animate-underline animate-target d-inline fw-normal text-truncate p-0"
                                                href="#!">News</a>
                                        </li>
                                    </ul>
                                </div>
                                <hr class="d-sm-none my-0">
                            </div>
                            <div class="accordion-item col border-0">
                                <h6 class="accordion-header" id="accountHeading">
                                    <span class="text-dark-emphasis d-none d-sm-block">Account</span>
                                    <button type="button" class="accordion-button collapsed py-3 d-sm-none"
                                        data-bs-toggle="collapse" data-bs-target="#accountLinks"
                                        aria-expanded="false" aria-controls="accountLinks">Account</button>
                                </h6>
                                <div class="accordion-collapse collapse d-sm-block" id="accountLinks"
                                    aria-labelledby="accountHeading" data-bs-parent="#footerLinks">
                                    <ul class="nav flex-column gap-2 pt-sm-3 pb-3 mt-n1 mb-1">
                                        <li class="d-flex w-100 pt-1">
                                            <a class="nav-link animate-underline animate-target d-inline fw-normal text-truncate p-0"
                                                href="#!">Your account</a>
                                        </li>
                                        <li class="d-flex w-100 pt-1">
                                            <a class="nav-link animate-underline animate-target d-inline fw-normal text-truncate p-0"
                                                href="#!">Shipping rates &amp; policies</a>
                                        </li>
                                        <li class="d-flex w-100 pt-1">
                                            <a class="nav-link animate-underline animate-target d-inline fw-normal text-truncate p-0"
                                                href="#!">Refunds &amp; replacements</a>
                                        </li>
                                        <li class="d-flex w-100 pt-1">
                                            <a class="nav-link animate-underline animate-target d-inline fw-normal text-truncate p-0"
                                                href="#!">Delivery info</a>
                                        </li>
                                        <li class="d-flex w-100 pt-1">
                                            <a class="nav-link animate-underline animate-target d-inline fw-normal text-truncate p-0"
                                                href="#!">Order tracking</a>
                                        </li>
                                        <li class="d-flex w-100 pt-1">
                                            <a class="nav-link animate-underline animate-target d-inline fw-normal text-truncate p-0"
                                                href="#!">Taxes &amp; fees</a>
                                        </li>
                                    </ul>
                                </div>
                                <hr class="d-sm-none my-0">
                            </div>
                            <div class="accordion-item col border-0">
                                <h6 class="accordion-header" id="customerHeading">
                                    <span class="text-dark-emphasis d-none d-sm-block">Customer service</span>
                                    <button type="button" class="accordion-button collapsed py-3 d-sm-none"
                                        data-bs-toggle="collapse" data-bs-target="#customerLinks"
                                        aria-expanded="false" aria-controls="customerLinks">Customer
                                        service</button>
                                </h6>
                                <div class="accordion-collapse collapse d-sm-block" id="customerLinks"
                                    aria-labelledby="customerHeading" data-bs-parent="#footerLinks">
                                    <ul class="nav flex-column gap-2 pt-sm-3 pb-3 mt-n1 mb-1">
                                        <li class="d-flex w-100 pt-1">
                                            <a class="nav-link animate-underline animate-target d-inline fw-normal text-truncate p-0"
                                                href="#!">Payment methods</a>
                                        </li>
                                        <li class="d-flex w-100 pt-1">
                                            <a class="nav-link animate-underline animate-target d-inline fw-normal text-truncate p-0"
                                                href="#!">Money back guarantee</a>
                                        </li>
                                        <li class="d-flex w-100 pt-1">
                                            <a class="nav-link animate-underline animate-target d-inline fw-normal text-truncate p-0"
                                                href="#!">Product returns</a>
                                        </li>
                                        <li class="d-flex w-100 pt-1">
                                            <a class="nav-link animate-underline animate-target d-inline fw-normal text-truncate p-0"
                                                href="#!">Support center</a>
                                        </li>
                                        <li class="d-flex w-100 pt-1">
                                            <a class="nav-link animate-underline animate-target d-inline fw-normal text-truncate p-0"
                                                href="#!">Shipping</a>
                                        </li>
                                        <li class="d-flex w-100 pt-1">
                                            <a class="nav-link animate-underline animate-target d-inline fw-normal text-truncate p-0"
                                                href="#!">Terms &amp; conditions</a>
                                        </li>
                                    </ul>
                                </div>
                                <hr class="d-sm-none my-0">
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Category / tag links -->
            <div class="d-flex flex-column gap-3 pb-3 pb-md-4 pb-lg-5 mt-n2 mt-sm-n4 mt-lg-0 mb-4">
                <ul class="nav align-items-center text-body-tertiary gap-2">
                    <li class="animate-underline">
                        <a class="nav-link fw-normal p-0 animate-target" href="#!">Computers</a>
                    </li>
                    <li class="px-1">/</li>
                    <li class="animate-underline">
                        <a class="nav-link fw-normal p-0 animate-target" href="#!">Smartphones</a>
                    </li>
                    <li class="px-1">/</li>
                    <li class="animate-underline">
                        <a class="nav-link fw-normal p-0 animate-target" href="#!">TV, Video</a>
                    </li>
                    <li class="px-1">/</li>
                    <li class="animate-underline">
                        <a class="nav-link fw-normal p-0 animate-target" href="#!">Speakers</a>
                    </li>
                    <li class="px-1">/</li>
                    <li class="animate-underline">
                        <a class="nav-link fw-normal p-0 animate-target" href="#!">Cameras</a>
                    </li>
                    <li class="px-1">/</li>
                    <li class="animate-underline">
                        <a class="nav-link fw-normal p-0 animate-target" href="#!">Printers</a>
                    </li>
                    <li class="px-1">/</li>
                    <li class="animate-underline">
                        <a class="nav-link fw-normal p-0 animate-target" href="#!">Video Games</a>
                    </li>
                    <li class="px-1">/</li>
                    <li class="animate-underline">
                        <a class="nav-link fw-normal p-0 animate-target" href="#!">Headphones</a>
                    </li>
                    <li class="px-1">/</li>
                    <li class="animate-underline">
                        <a class="nav-link fw-normal p-0 animate-target" href="#!">Wearable</a>
                    </li>
                    <li class="px-1">/</li>
                    <li class="animate-underline">
                        <a class="nav-link fw-normal p-0 animate-target" href="#!">HDD/SSD</a>
                    </li>
                    <li class="px-1">/</li>
                    <li class="animate-underline">
                        <a class="nav-link fw-normal p-0 animate-target" href="#!">Smart Home</a>
                    </li>
                    <li class="px-1">/</li>
                    <li class="animate-underline">
                        <a class="nav-link fw-normal p-0 animate-target" href="#!">Apple Devices</a>
                    </li>
                    <li class="px-1">/</li>
                    <li class="animate-underline">
                        <a class="nav-link fw-normal p-0 animate-target" href="#!">Tablets</a>
                    </li>
                </ul>
                <ul class="nav align-items-center text-body-tertiary gap-2">
                    <li class="animate-underline">
                        <a class="nav-link fw-normal p-0 animate-target" href="#!">Monitors</a>
                    </li>
                    <li class="px-1">/</li>
                    <li class="animate-underline">
                        <a class="nav-link fw-normal p-0 animate-target" href="#!">Scanners</a>
                    </li>
                    <li class="px-1">/</li>
                    <li class="animate-underline">
                        <a class="nav-link fw-normal p-0 animate-target" href="#!">Servers</a>
                    </li>
                    <li class="px-1">/</li>
                    <li class="animate-underline">
                        <a class="nav-link fw-normal p-0 animate-target" href="#!">Heating and Cooling</a>
                    </li>
                    <li class="px-1">/</li>
                    <li class="animate-underline">
                        <a class="nav-link fw-normal p-0 animate-target" href="#!">E-readers</a>
                    </li>
                    <li class="px-1">/</li>
                    <li class="animate-underline">
                        <a class="nav-link fw-normal p-0 animate-target" href="#!">Data Storage</a>
                    </li>
                    <li class="px-1">/</li>
                    <li class="animate-underline">
                        <a class="nav-link fw-normal p-0 animate-target" href="#!">Networking</a>
                    </li>
                    <li class="px-1">/</li>
                    <li class="animate-underline">
                        <a class="nav-link fw-normal p-0 animate-target" href="#!">Power Strips</a>
                    </li>
                    <li class="px-1">/</li>
                    <li class="animate-underline">
                        <a class="nav-link fw-normal p-0 animate-target" href="#!">Plugs and Outlets</a>
                    </li>
                    <li class="px-1">/</li>
                    <li class="animate-underline">
                        <a class="nav-link fw-normal p-0 animate-target" href="#!">Detectors and Sensors</a>
                    </li>
                    <li class="px-1">/</li>
                    <li class="animate-underline">
                        <a class="nav-link fw-normal p-0 animate-target" href="#!">Accessories</a>
                    </li>
                </ul>
            </div>

            <!-- Copyright + Payment methods -->
            <div class="d-md-flex align-items-center border-top py-4">
                <div class="d-flex gap-2 gap-sm-3 justify-content-center ms-md-auto mb-4 mb-md-0 order-md-2">
                    <div>
                        <img src="assets/img/payment-methods/visa-dark-mode.svg" alt="Visa">
                    </div>
                    <div>
                        <img src="assets/img/payment-methods/mastercard.svg" alt="Mastercard">
                    </div>
                    <div>
                        <img src="assets/img/payment-methods/paypal-dark-mode.svg" alt="PayPal">
                    </div>
                    <div>
                        <img src="assets/img/payment-methods/google-pay-dark-mode.svg" alt="Google Pay">
                    </div>
                    <div>
                        <img src="assets/img/payment-methods/apple-pay-dark-mode.svg" alt="Apple Pay">
                    </div>
                </div>
                <p class="text-body fs-xs text-center text-md-start mb-0 me-4 order-md-1">© All rights reserved. Made
                    by <span class="animate-underline"><a
                            class="animate-target text-dark-emphasis fw-medium text-decoration-none"
                            href="https://createx.studio/" target="_blank" rel="noreferrer">Createx
                            Studio</a></span></p>
            </div>
        </div>
    </footer>


    <!-- Back to top button -->
    <div class="floating-buttons position-fixed top-50 end-0 z-sticky me-3 me-xl-4 pb-4">
        <a class="btn-scroll-top btn btn-sm bg-body border-0 rounded-pill shadow animate-slide-end" href="#top">
            Top
            <i class="ci-arrow-right fs-base ms-1 me-n1 animate-target"></i>
            <span class="position-absolute top-0 start-0 w-100 h-100 border rounded-pill z-0"></span>
            <svg class="position-absolute top-0 start-0 w-100 h-100 z-1" viewBox="0 0 62 32" fill="none"
                xmlns="http://www.w3.org/2000/svg">
                <rect x=".75" y=".75" width="60.5" height="30.5" rx="15.25" stroke="currentColor"
                    stroke-width="1.5" stroke-miterlimit="10"></rect>
            </svg>
        </a>
    </div>


    <!-- Vendor scripts -->
    <script src="assets/vendor/swiper/swiper-bundle.min.js"></script>
    <script src="assets/vendor/glightbox/glightbox.min.js"></script>

    <!-- Bootstrap + Theme scripts -->
    <script src="assets/js/theme.min.js"></script>


</body>

</html>

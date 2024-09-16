<!DOCTYPE html>
<html lang="en" data-bs-theme="light" data-pwa="true">

<head>
    <meta charset="utf-8">

    <!-- Viewport -->
    <meta name="viewport"
        content="width=device-width, initial-scale=1, minimum-scale=1, maximum-scale=1, viewport-fit=cover">

    <!-- SEO Meta Tags -->
    <title>Apex | Electronics Store - Catalog</title>
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
    <link rel="stylesheet" href="assets/vendor/choices.js/choices.min.css">
    <link rel="stylesheet" href="assets/vendor/nouislider/nouislider.min.css">

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
        <div class="py-3 offcanvas-header flex-column align-items-start pt-lg-4">
            <div class="mb-3 d-flex align-items-center justify-content-between w-100 mb-lg-4">
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
        <div class="gap-4 pt-2 offcanvas-body d-flex flex-column">

            <!-- Item -->
            <div class="d-flex align-items-center">
                <a class="flex-shrink-0" href="shop-product-general-electronics.html">
                    <img src="assets/img/shop/electronics/thumbs/08.png" width="110" alt="iPhone 14">
                </a>
                <div class="min-w-0 w-100 ps-2 ps-sm-3">
                    <h5 class="mb-2 d-flex animate-underline">
                        <a class="d-block fs-sm fw-medium text-truncate animate-target"
                            href="shop-product-general-electronics.html">Apple iPhone 14 128GB White</a>
                    </h5>
                    <div class="pb-1 mb-2 h6">$899.00</div>
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
                <a class="flex-shrink-0 position-relative" href="shop-product-general-electronics.html">
                    <span class="top-0 badge text-bg-danger position-absolute start-0">-10%</span>
                    <img src="assets/img/shop/electronics/thumbs/09.png" width="110" alt="iPad Pro">
                </a>
                <div class="min-w-0 w-100 ps-2 ps-sm-3">
                    <h5 class="mb-2 d-flex animate-underline">
                        <a class="d-block fs-sm fw-medium text-truncate animate-target"
                            href="shop-product-general-electronics.html">Tablet Apple iPad Pro M2</a>
                    </h5>
                    <div class="pb-1 mb-2 h6">$989.00 <del class="text-body-tertiary fs-xs fw-normal">$1,099.00</del>
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
                <div class="min-w-0 w-100 ps-2 ps-sm-3">
                    <h5 class="mb-2 d-flex animate-underline">
                        <a class="d-block fs-sm fw-medium text-truncate animate-target"
                            href="shop-product-general-electronics.html">Smart Watch Series 7, White</a>
                    </h5>
                    <div class="pb-1 mb-2 h6">$429.00</div>
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
            <div class="mb-3 d-flex align-items-center justify-content-between w-100 mb-md-4">
                <span class="text-light-emphasis">Subtotal:</span>
                <span class="mb-0 h6">$2,317.00</span>
            </div>
            <div class="gap-3 d-flex w-100">
                <a class="btn btn-lg btn-secondary w-100" href="checkout-v1-cart.html">View cart</a>
                <a class="btn btn-lg btn-primary w-100" href="checkout-v1-delivery-1.html">Checkout</a>
            </div>
        </div>
    </div>


    <!-- Navigation bar (Page header) -->
    <header class="p-0 navbar navbar-expand-lg navbar-dark bg-dark d-block z-fixed"
        data-sticky-navbar="{&quot;offset&quot;: 500}">
        <div class="container py-1 d-block py-lg-3" data-bs-theme="dark">
            <div class="pt-1 navbar-stuck-hide"></div>
            <div class="row flex-nowrap align-items-center g-0">
                <div class="col col-lg-3 d-flex align-items-center">

                    <!-- Mobile offcanvas menu toggler (Hamburger) -->
                    <button type="button" class="navbar-toggler me-4 me-lg-0" data-bs-toggle="offcanvas"
                        data-bs-target="#navbarNav" aria-controls="navbarNav" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>

                    <!-- Navbar brand (Logo) -->
                    <a href="home-electronics.html" class="navbar-brand me-0">
                        <span class="flex-shrink-0 d-none d-sm-flex text-primary me-2">
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
                            class="text-white ci-search position-absolute top-50 translate-middle-y d-flex fs-lg ms-3"></i>
                        <input type="search"
                            class="border-white form-control form-control-lg form-icon-start rounded-pill"
                            placeholder="Search the products">
                    </div>

                    <!-- Sale link visible on screens > 1200px wide (xl breakpoint) -->
                    <a class="d-none d-xl-flex align-items-center text-decoration-none animate-shake navbar-stuck-hide me-3 me-xl-4 me-xxl-5"
                        href="shop-catalog-electronics.html">
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
                            data-bs-toggle="collapse" data-bs-target="#searchBar" aria-expanded="false"
                            aria-controls="searchBar" aria-label="Toggle search bar">
                            <i class="ci-search animate-target"></i>
                        </button>

                        <!-- Account button visible on screens > 768px wide (md breakpoint) -->
                        <a class="border-0 btn btn-icon btn-lg fs-lg btn-outline-secondary rounded-circle animate-shake d-none d-md-inline-flex"
                            href="account-signin.html">
                            <i class="ci-user animate-target"></i>
                            <span class="visually-hidden">Account</span>
                        </a>

                        <!-- Wishlist button visible on screens > 768px wide (md breakpoint) -->
                        <a class="border-0 btn btn-icon btn-lg fs-lg btn-outline-secondary rounded-circle animate-pulse d-none d-md-inline-flex"
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
                    <h5 class="offcanvas-title" id="navbarNavLabel">Browse Apex</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="offcanvas"
                        aria-label="Close"></button>
                </div>
                <div class="py-3 offcanvas-body py-lg-0">
                    <div class="container px-0 px-lg-3">
                        <div class="row">

                            <!-- Categories mega menu -->
                            <div class="col-lg-3">
                                <div class="navbar-nav">
                                    <div class="dropdown w-100">

                                        <!-- Buttton visible on screens > 991px wide (lg breakpoint) -->
                                        <div class="cursor-pointer d-none d-lg-block" data-bs-toggle="dropdown"
                                            data-bs-trigger="hover" data-bs-theme="dark">
                                            <a class="top-0 position-absolute start-0 w-100 h-100"
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
                                            class="mb-2 btn btn-lg btn-secondary dropdown-toggle w-100 justify-content-start d-lg-none"
                                            data-bs-toggle="dropdown" data-bs-auto-close="outside">
                                            <i class="ci-grid fs-lg"></i>
                                            <span class="ms-2 me-auto">Categories</span>
                                        </button>

                                        <!-- Mega menu -->
                                        <ul class="py-1 dropdown-menu w-100 rounded-top-0 rounded-bottom-4 p-lg-1"
                                            style="--cz-dropdown-spacer: 0; --cz-dropdown-item-padding-y: .625rem; --cz-dropdown-item-spacer: 0">
                                            <li class="pt-2 d-lg-none">
                                                <a class="dropdown-item fw-medium"
                                                    href="shop-categories-electronics.html">
                                                    <i class="ci-grid fs-xl opacity-60 pe-1 me-2"></i>
                                                    All Categories
                                                    <i class="ci-chevron-right fs-base ms-auto me-n1"></i>
                                                </a>
                                            </li>
                                            <li class="dropend position-static">
                                                <div class="pt-2 pb-1 rounded position-relative px-lg-2"
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
                                                <div class="p-4 dropdown-menu rounded-4"
                                                    style="top: 1rem; height: calc(100% - .1875rem); --cz-dropdown-spacer: .3125rem; animation: none;">
                                                    <div class="gap-4 d-flex flex-column flex-lg-row h-100">
                                                        <div style="min-width: 194px">
                                                            <div class="d-flex w-100">
                                                                <a class="animate-underline animate-target d-inline h6 text-dark-emphasis text-decoration-none text-truncate"
                                                                    href="shop-catalog-electronics.html">Computers</a>
                                                            </div>
                                                            <ul class="gap-2 nav flex-column mt-n2">
                                                                <li class="pt-1 d-flex w-100">
                                                                    <a class="p-0 nav-link animate-underline animate-target d-inline fw-normal text-truncate"
                                                                        href="shop-catalog-electronics.html">Laptops
                                                                        &amp; Tablets</a>
                                                                </li>
                                                                <li class="pt-1 d-flex w-100">
                                                                    <a class="p-0 nav-link animate-underline animate-target d-inline fw-normal text-truncate"
                                                                        href="shop-catalog-electronics.html">Desktop
                                                                        Computers</a>
                                                                </li>
                                                                <li class="pt-1 d-flex w-100">
                                                                    <a class="p-0 nav-link animate-underline animate-target d-inline fw-normal text-truncate"
                                                                        href="shop-catalog-electronics.html">External
                                                                        Components</a>
                                                                </li>
                                                                <li class="pt-1 d-flex w-100">
                                                                    <a class="p-0 nav-link animate-underline animate-target d-inline fw-normal text-truncate"
                                                                        href="shop-catalog-electronics.html">Interal
                                                                        Components</a>
                                                                </li>
                                                                <li class="pt-1 d-flex w-100">
                                                                    <a class="p-0 nav-link animate-underline animate-target d-inline fw-normal text-truncate"
                                                                        href="shop-catalog-electronics.html">Networking
                                                                        Products (NAS)</a>
                                                                </li>
                                                                <li class="pt-1 d-flex w-100">
                                                                    <a class="p-0 nav-link animate-underline animate-target d-inline fw-normal text-truncate"
                                                                        href="shop-catalog-electronics.html">Single
                                                                        Board Computers</a>
                                                                </li>
                                                                <li class="pt-1 d-flex w-100">
                                                                    <a class="p-0 nav-link animate-underline animate-target d-inline fw-normal text-truncate"
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
                                                            <ul class="gap-2 nav flex-column mt-n2">
                                                                <li class="pt-1 d-flex w-100">
                                                                    <a class="p-0 nav-link animate-underline animate-target d-inline fw-normal text-truncate"
                                                                        href="shop-catalog-electronics.html">Monitors</a>
                                                                </li>
                                                                <li class="pt-1 d-flex w-100">
                                                                    <a class="p-0 nav-link animate-underline animate-target d-inline fw-normal text-truncate"
                                                                        href="shop-catalog-electronics.html">Bags,
                                                                        Cases &amp; Sleeves</a>
                                                                </li>
                                                                <li class="pt-1 d-flex w-100">
                                                                    <a class="p-0 nav-link animate-underline animate-target d-inline fw-normal text-truncate"
                                                                        href="shop-catalog-electronics.html">Batteries</a>
                                                                </li>
                                                                <li class="pt-1 d-flex w-100">
                                                                    <a class="p-0 nav-link animate-underline animate-target d-inline fw-normal text-truncate"
                                                                        href="shop-catalog-electronics.html">Charges
                                                                        &amp; Adapters</a>
                                                                </li>
                                                                <li class="pt-1 d-flex w-100">
                                                                    <a class="p-0 nav-link animate-underline animate-target d-inline fw-normal text-truncate"
                                                                        href="shop-catalog-electronics.html">Cooling
                                                                        Pads</a>
                                                                </li>
                                                                <li class="pt-1 d-flex w-100">
                                                                    <a class="p-0 nav-link animate-underline animate-target d-inline fw-normal text-truncate"
                                                                        href="shop-catalog-electronics.html">Mounts</a>
                                                                </li>
                                                                <li class="pt-1 d-flex w-100">
                                                                    <a class="p-0 nav-link animate-underline animate-target d-inline fw-normal text-truncate"
                                                                        href="shop-catalog-electronics.html">Replacement
                                                                        Screens</a>
                                                                </li>
                                                                <li class="pt-1 d-flex w-100">
                                                                    <a class="p-0 nav-link animate-underline animate-target d-inline fw-normal text-truncate"
                                                                        href="shop-catalog-electronics.html">Security
                                                                        Locks</a>
                                                                </li>
                                                                <li class="pt-1 d-flex w-100">
                                                                    <a class="p-0 nav-link animate-underline animate-target d-inline fw-normal text-truncate"
                                                                        href="shop-catalog-electronics.html">Stands</a>
                                                                </li>
                                                            </ul>
                                                        </div>
                                                        <div class="d-none d-lg-block">
                                                            <div class="d-none d-xl-block" style="width: 284px"></div>
                                                            <div class="d-xl-none" style="width: 240px"></div>
                                                            <div
                                                                class="px-3 py-4 position-relative d-flex flex-column justify-content-center h-100 bg-body-secondary rounded-5">
                                                                <div class="px-2 text-center">
                                                                    <span
                                                                        class="mb-2 badge bg-danger bg-opacity-10 text-danger fs-sm rounded-pill">Save
                                                                        up to $400</span>
                                                                    <div class="mb-2 fs-sm text-light-emphasis">Starts
                                                                        from <del>$1,599.00</del> $1,399.00</div>
                                                                    <div class="mb-4 h2">Surface Laptop Studio</div>
                                                                </div>
                                                                <img src="assets/img/mega-menu/electronics/01.png"
                                                                    width="252" alt="Surface Laptop Studio">
                                                                <div class="mt-4 text-center">
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
                                                <div class="pb-1 rounded position-relative px-lg-2" tabindex="0"
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
                                                <div class="p-4 dropdown-menu rounded-4"
                                                    style="top: 1rem; height: calc(100% - .1875rem); --cz-dropdown-spacer: .3125rem; animation: none;">
                                                    <div class="gap-4 d-flex flex-column flex-lg-row h-100">
                                                        <div style="min-width: 194px">
                                                            <div class="d-flex w-100">
                                                                <a class="animate-underline animate-target d-inline h6 text-dark-emphasis text-decoration-none text-truncate"
                                                                    href="shop-catalog-electronics.html">Smartphones</a>
                                                            </div>
                                                            <ul class="gap-2 nav flex-column mt-n2">
                                                                <li class="pt-1 d-flex w-100">
                                                                    <a class="p-0 nav-link animate-underline animate-target d-inline fw-normal text-truncate"
                                                                        href="shop-catalog-electronics.html">Apple
                                                                        iPhone</a>
                                                                </li>
                                                                <li class="pt-1 d-flex w-100">
                                                                    <a class="p-0 nav-link animate-underline animate-target d-inline fw-normal text-truncate"
                                                                        href="shop-catalog-electronics.html">Google
                                                                        Pixel</a>
                                                                </li>
                                                                <li class="pt-1 d-flex w-100">
                                                                    <a class="p-0 nav-link animate-underline animate-target d-inline fw-normal text-truncate"
                                                                        href="shop-catalog-electronics.html">Android
                                                                        Smartphones</a>
                                                                </li>
                                                                <li class="pt-1 d-flex w-100">
                                                                    <a class="p-0 nav-link animate-underline animate-target d-inline fw-normal text-truncate"
                                                                        href="shop-catalog-electronics.html">Phablets</a>
                                                                </li>
                                                            </ul>
                                                            <div class="pt-4 d-flex w-100">
                                                                <a class="animate-underline animate-target d-inline h6 text-dark-emphasis text-decoration-none text-truncate"
                                                                    href="shop-catalog-electronics.html">Tablets</a>
                                                            </div>
                                                            <ul class="gap-2 nav flex-column mt-n2">
                                                                <li class="pt-1 d-flex w-100">
                                                                    <a class="p-0 nav-link animate-underline animate-target d-inline fw-normal text-truncate"
                                                                        href="shop-catalog-electronics.html">Apple
                                                                        iPad</a>
                                                                </li>
                                                                <li class="pt-1 d-flex w-100">
                                                                    <a class="p-0 nav-link animate-underline animate-target d-inline fw-normal text-truncate"
                                                                        href="shop-catalog-electronics.html">Android
                                                                        Tablets</a>
                                                                </li>
                                                                <li class="pt-1 d-flex w-100">
                                                                    <a class="p-0 nav-link animate-underline animate-target d-inline fw-normal text-truncate"
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
                                                            <ul class="gap-2 nav flex-column mt-n2">
                                                                <li class="pt-1 d-flex w-100">
                                                                    <a class="p-0 nav-link animate-underline animate-target d-inline fw-normal text-truncate"
                                                                        href="shop-catalog-electronics.html">Accessory
                                                                        Kits</a>
                                                                </li>
                                                                <li class="pt-1 d-flex w-100">
                                                                    <a class="p-0 nav-link animate-underline animate-target d-inline fw-normal text-truncate"
                                                                        href="shop-catalog-electronics.html">Batteries
                                                                        &amp; Battery Packs</a>
                                                                </li>
                                                                <li class="pt-1 d-flex w-100">
                                                                    <a class="p-0 nav-link animate-underline animate-target d-inline fw-normal text-truncate"
                                                                        href="shop-catalog-electronics.html">Bags &amp;
                                                                        Cases</a>
                                                                </li>
                                                                <li class="pt-1 d-flex w-100">
                                                                    <a class="p-0 nav-link animate-underline animate-target d-inline fw-normal text-truncate"
                                                                        href="shop-catalog-electronics.html">Cables</a>
                                                                </li>
                                                                <li class="pt-1 d-flex w-100">
                                                                    <a class="p-0 nav-link animate-underline animate-target d-inline fw-normal text-truncate"
                                                                        href="shop-catalog-electronics.html">Car
                                                                        Accessories</a>
                                                                </li>
                                                                <li class="pt-1 d-flex w-100">
                                                                    <a class="p-0 nav-link animate-underline animate-target d-inline fw-normal text-truncate"
                                                                        href="shop-catalog-electronics.html">Charges
                                                                        &amp; Power Adapters</a>
                                                                </li>
                                                                <li class="pt-1 d-flex w-100">
                                                                    <a class="p-0 nav-link animate-underline animate-target d-inline fw-normal text-truncate"
                                                                        href="shop-catalog-electronics.html">FM
                                                                        Transmitters</a>
                                                                </li>
                                                                <li class="pt-1 d-flex w-100">
                                                                    <a class="p-0 nav-link animate-underline animate-target d-inline fw-normal text-truncate"
                                                                        href="shop-catalog-electronics.html">Lens
                                                                        Attachments</a>
                                                                </li>
                                                                <li class="pt-1 d-flex w-100">
                                                                    <a class="p-0 nav-link animate-underline animate-target d-inline fw-normal text-truncate"
                                                                        href="shop-catalog-electronics.html">Mounts
                                                                        &amp; Standsv</a>
                                                                </li>
                                                                <li class="pt-1 d-flex w-100">
                                                                    <a class="p-0 nav-link animate-underline animate-target d-inline fw-normal text-truncate"
                                                                        href="shop-catalog-electronics.html">Repair
                                                                        Kits</a>
                                                                </li>
                                                                <li class="pt-1 d-flex w-100">
                                                                    <a class="p-0 nav-link animate-underline animate-target d-inline fw-normal text-truncate"
                                                                        href="shop-catalog-electronics.html">Replacement
                                                                        Parts</a>
                                                                </li>
                                                                <li class="pt-1 d-flex w-100">
                                                                    <a class="p-0 nav-link animate-underline animate-target d-inline fw-normal text-truncate"
                                                                        href="shop-catalog-electronics.html">Styluses</a>
                                                                </li>
                                                            </ul>
                                                        </div>
                                                        <div class="d-none d-lg-block">
                                                            <div class="d-none d-xl-block" style="width: 284px"></div>
                                                            <div class="d-xl-none" style="width: 240px"></div>
                                                            <div
                                                                class="px-3 py-4 position-relative d-flex flex-column justify-content-center h-100 bg-body-secondary rounded-5">
                                                                <div class="px-2 text-center">
                                                                    <i
                                                                        class="mb-2 ci-apple fs-1 text-dark-emphasis"></i>
                                                                    <div class="mb-2 fs-sm text-light-emphasis">Deal of
                                                                        the week</div>
                                                                    <div class="mb-4 h2">iPad Pro M1</div>
                                                                </div>
                                                                <img src="assets/img/mega-menu/electronics/02.png"
                                                                    width="252" alt="iPad Pro">
                                                                <div class="mt-4 text-center">
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
                                                <div class="pb-1 rounded position-relative px-lg-2" tabindex="0"
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
                                                <div class="p-4 dropdown-menu rounded-4"
                                                    style="top: 1rem; height: calc(100% - .1875rem); --cz-dropdown-spacer: .3125rem; animation: none;">
                                                    <div class="d-flex flex-column flex-lg-row h-100 gap-lg-4">
                                                        <div style="min-width: 194px">
                                                            <div class="d-flex w-100">
                                                                <a class="animate-underline animate-target d-inline h6 text-dark-emphasis text-decoration-none text-truncate"
                                                                    href="shop-catalog-electronics.html">TV, Video
                                                                    &amp; Audio</a>
                                                            </div>
                                                            <ul class="gap-2 nav flex-column mt-n2">
                                                                <li class="pt-1 d-flex w-100">
                                                                    <a class="p-0 nav-link animate-underline animate-target d-inline fw-normal text-truncate"
                                                                        href="shop-catalog-electronics.html">TV
                                                                        Stes</a>
                                                                </li>
                                                                <li class="pt-1 d-flex w-100">
                                                                    <a class="p-0 nav-link animate-underline animate-target d-inline fw-normal text-truncate"
                                                                        href="shop-catalog-electronics.html">Home
                                                                        Theater Systems</a>
                                                                </li>
                                                                <li class="pt-1 d-flex w-100">
                                                                    <a class="p-0 nav-link animate-underline animate-target d-inline fw-normal text-truncate"
                                                                        href="shop-catalog-electronics.html">DVD
                                                                        Players &amp; Recorders</a>
                                                                </li>
                                                                <li class="pt-1 d-flex w-100">
                                                                    <a class="p-0 nav-link animate-underline animate-target d-inline fw-normal text-truncate"
                                                                        href="shop-catalog-electronics.html">Blue-ray
                                                                        Players &amp; Recorders</a>
                                                                </li>
                                                                <li class="pt-1 d-flex w-100">
                                                                    <a class="p-0 nav-link animate-underline animate-target d-inline fw-normal text-truncate"
                                                                        href="shop-catalog-electronics.html">HD DVD
                                                                        Players &amp; Recorders</a>
                                                                </li>
                                                                <li class="pt-1 d-flex w-100">
                                                                    <a class="p-0 nav-link animate-underline animate-target d-inline fw-normal text-truncate"
                                                                        href="shop-catalog-electronics.html">DVD-VCR
                                                                        Combos</a>
                                                                </li>
                                                                <li class="pt-1 d-flex w-100">
                                                                    <a class="p-0 nav-link animate-underline animate-target d-inline fw-normal text-truncate"
                                                                        href="shop-catalog-electronics.html">DTV
                                                                        Converters</a>
                                                                </li>
                                                                <li class="pt-1 d-flex w-100">
                                                                    <a class="p-0 nav-link animate-underline animate-target d-inline fw-normal text-truncate"
                                                                        href="shop-catalog-electronics.html">AV
                                                                        Receivers</a>
                                                                </li>
                                                                <li class="pt-1 d-flex w-100">
                                                                    <a class="p-0 nav-link animate-underline animate-target d-inline fw-normal text-truncate"
                                                                        href="shop-catalog-electronics.html">AV
                                                                        Amplifiers</a>
                                                                </li>
                                                                <li class="pt-1 d-flex w-100">
                                                                    <a class="p-0 nav-link animate-underline animate-target d-inline fw-normal text-truncate"
                                                                        href="shop-catalog-electronics.html">Projectors</a>
                                                                </li>
                                                                <li class="pt-1 d-flex w-100">
                                                                    <a class="p-0 nav-link animate-underline animate-target d-inline fw-normal text-truncate"
                                                                        href="shop-catalog-electronics.html">Projection
                                                                        Screens</a>
                                                                </li>
                                                                <li class="pt-1 d-flex w-100">
                                                                    <a class="p-0 nav-link animate-underline animate-target d-inline fw-normal text-truncate"
                                                                        href="shop-catalog-electronics.html">Satelite
                                                                        Television</a>
                                                                </li>
                                                                <li class="pt-1 d-flex w-100">
                                                                    <a class="p-0 nav-link animate-underline animate-target d-inline fw-normal text-truncate"
                                                                        href="shop-catalog-electronics.html">TV-DTD
                                                                        Combos</a>
                                                                </li>
                                                                <li class="pt-1 d-flex w-100">
                                                                    <a class="p-0 nav-link animate-underline animate-target d-inline fw-normal text-truncate"
                                                                        href="shop-catalog-electronics.html">Sound
                                                                        Systems</a>
                                                                </li>
                                                            </ul>
                                                        </div>
                                                        <div style="min-width: 194px">
                                                            <ul class="gap-2 mt-2 nav flex-column mt-lg-0">
                                                                <li class="pt-1 d-flex w-100">
                                                                    <a class="p-0 nav-link animate-underline animate-target d-inline fw-normal text-truncate"
                                                                        href="shop-catalog-electronics.html">Home
                                                                        Cinema Systems</a>
                                                                </li>
                                                                <li class="pt-1 d-flex w-100">
                                                                    <a class="p-0 nav-link animate-underline animate-target d-inline fw-normal text-truncate"
                                                                        href="shop-catalog-electronics.html">Streaming
                                                                        Media Players</a>
                                                                </li>
                                                                <li class="pt-1 d-flex w-100">
                                                                    <a class="p-0 nav-link animate-underline animate-target d-inline fw-normal text-truncate"
                                                                        href="shop-catalog-electronics.html">VCRs</a>
                                                                </li>
                                                                <li class="pt-1 d-flex w-100">
                                                                    <a class="p-0 nav-link animate-underline animate-target d-inline fw-normal text-truncate"
                                                                        href="shop-catalog-electronics.html">Video
                                                                        Glasses</a>
                                                                </li>
                                                                <li class="pt-1 d-flex w-100">
                                                                    <a class="p-0 nav-link animate-underline animate-target d-inline fw-normal text-truncate"
                                                                        href="shop-catalog-electronics.html">Lens
                                                                        Attachments</a>
                                                                </li>
                                                                <li class="pt-1 d-flex w-100">
                                                                    <a class="p-0 nav-link animate-underline animate-target d-inline fw-normal text-truncate"
                                                                        href="shop-catalog-electronics.html">Subwoofers</a>
                                                                </li>
                                                                <li class="pt-1 d-flex w-100">
                                                                    <a class="p-0 nav-link animate-underline animate-target d-inline fw-normal text-truncate"
                                                                        href="shop-catalog-electronics.html">Sound
                                                                        Boosters</a>
                                                                </li>
                                                            </ul>
                                                        </div>
                                                        <div class="d-none d-lg-block">
                                                            <div class="d-none d-xl-block" style="width: 284px"></div>
                                                            <div class="d-xl-none" style="width: 240px"></div>
                                                            <div
                                                                class="px-3 py-4 position-relative d-flex flex-column justify-content-center h-100 bg-body-secondary rounded-5">
                                                                <div class="px-2 text-center">
                                                                    <div class="mb-2 fs-sm text-light-emphasis">Best
                                                                        deal! Save up to <span
                                                                            class="fw-semibold">$500</span></div>
                                                                    <div class="mb-4 h2">LG OLED 4K Smart TV</div>
                                                                </div>
                                                                <img src="assets/img/mega-menu/electronics/03.png"
                                                                    width="252" alt="Smart TV">
                                                                <div class="mt-4 text-center">
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
                                                <div class="pb-1 rounded position-relative px-lg-2" tabindex="0"
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
                                                <div class="p-4 dropdown-menu rounded-4"
                                                    style="top: 1rem; height: calc(100% - .1875rem); --cz-dropdown-spacer: .3125rem; animation: none;">
                                                    <div class="gap-4 d-flex flex-column flex-lg-row h-100">
                                                        <div style="min-width: 194px">
                                                            <div class="d-flex w-100">
                                                                <a class="animate-underline animate-target d-inline h6 text-dark-emphasis text-decoration-none text-truncate"
                                                                    href="shop-catalog-electronics.html">Speakers</a>
                                                            </div>
                                                            <ul class="gap-2 nav flex-column mt-n2">
                                                                <li class="pt-1 d-flex w-100">
                                                                    <a class="p-0 nav-link animate-underline animate-target d-inline fw-normal text-truncate"
                                                                        href="shop-catalog-electronics.html">Smart
                                                                        Speakers</a>
                                                                </li>
                                                                <li class="pt-1 d-flex w-100">
                                                                    <a class="p-0 nav-link animate-underline animate-target d-inline fw-normal text-truncate"
                                                                        href="shop-catalog-electronics.html">Bluetooth
                                                                        Speakers</a>
                                                                </li>
                                                                <li class="pt-1 d-flex w-100">
                                                                    <a class="p-0 nav-link animate-underline animate-target d-inline fw-normal text-truncate"
                                                                        href="shop-catalog-electronics.html">Bookshelf
                                                                        Speakers</a>
                                                                </li>
                                                                <li class="pt-1 d-flex w-100">
                                                                    <a class="p-0 nav-link animate-underline animate-target d-inline fw-normal text-truncate"
                                                                        href="shop-catalog-electronics.html">Ceiling
                                                                        &amp; In-Wall Speakers</a>
                                                                </li>
                                                                <li class="pt-1 d-flex w-100">
                                                                    <a class="p-0 nav-link animate-underline animate-target d-inline fw-normal text-truncate"
                                                                        href="shop-catalog-electronics.html">Center-Channel
                                                                        Speakers</a>
                                                                </li>
                                                                <li class="pt-1 d-flex w-100">
                                                                    <a class="p-0 nav-link animate-underline animate-target d-inline fw-normal text-truncate"
                                                                        href="shop-catalog-electronics.html">Floorstanding
                                                                        Speakers</a>
                                                                </li>
                                                                <li class="pt-1 d-flex w-100">
                                                                    <a class="p-0 nav-link animate-underline animate-target d-inline fw-normal text-truncate"
                                                                        href="shop-catalog-electronics.html">Outdoor
                                                                        Speakers</a>
                                                                </li>
                                                                <li class="pt-1 d-flex w-100">
                                                                    <a class="p-0 nav-link animate-underline animate-target d-inline fw-normal text-truncate"
                                                                        href="shop-catalog-electronics.html">Satellite
                                                                        Speakers</a>
                                                                </li>
                                                                <li class="pt-1 d-flex w-100">
                                                                    <a class="p-0 nav-link animate-underline animate-target d-inline fw-normal text-truncate"
                                                                        href="shop-catalog-electronics.html">Sound
                                                                        Bars</a>
                                                                </li>
                                                                <li class="pt-1 d-flex w-100">
                                                                    <a class="p-0 nav-link animate-underline animate-target d-inline fw-normal text-truncate"
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
                                                            <ul class="gap-2 nav flex-column mt-n2">
                                                                <li class="pt-1 d-flex w-100">
                                                                    <a class="p-0 nav-link animate-underline animate-target d-inline fw-normal text-truncate"
                                                                        href="shop-catalog-electronics.html">Home
                                                                        Theater</a>
                                                                </li>
                                                                <li class="pt-1 d-flex w-100">
                                                                    <a class="p-0 nav-link animate-underline animate-target d-inline fw-normal text-truncate"
                                                                        href="shop-catalog-electronics.html">Wireless
                                                                        &amp; Streaming Audio</a>
                                                                </li>
                                                                <li class="pt-1 d-flex w-100">
                                                                    <a class="p-0 nav-link animate-underline animate-target d-inline fw-normal text-truncate"
                                                                        href="shop-catalog-electronics.html">Stereo
                                                                        System Components</a>
                                                                </li>
                                                                <li class="pt-1 d-flex w-100">
                                                                    <a class="p-0 nav-link animate-underline animate-target d-inline fw-normal text-truncate"
                                                                        href="shop-catalog-electronics.html">Compact
                                                                        Radios &amp; Stereos</a>
                                                                </li>
                                                                <li class="pt-1 d-flex w-100">
                                                                    <a class="p-0 nav-link animate-underline animate-target d-inline fw-normal text-truncate"
                                                                        href="shop-catalog-electronics.html">Home Audio
                                                                        Accessories</a>
                                                                </li>
                                                                <li class="pt-1 d-flex w-100">
                                                                    <a class="p-0 nav-link animate-underline animate-target d-inline fw-normal text-truncate"
                                                                        href="shop-catalog-electronics.html">Subwoofers</a>
                                                                </li>
                                                            </ul>
                                                        </div>
                                                        <div class="d-none d-lg-block">
                                                            <div class="d-none d-xl-block" style="width: 284px"></div>
                                                            <div class="d-xl-none" style="width: 240px"></div>
                                                            <div
                                                                class="px-3 py-4 position-relative d-flex flex-column justify-content-center h-100 bg-body-secondary rounded-5">
                                                                <div class="px-2 text-center">
                                                                    <i
                                                                        class="mb-3 ci-google fs-2 text-dark-emphasis"></i>
                                                                    <div class="mb-2 fs-sm text-light-emphasis">Deal of
                                                                        the week</div>
                                                                    <div class="mb-4 h2">Nest Audio</div>
                                                                </div>
                                                                <img src="assets/img/mega-menu/electronics/04.png"
                                                                    width="252" alt="Nest Audio">
                                                                <div class="mt-4 text-center">
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
                                                <div class="pb-1 rounded position-relative px-lg-2" tabindex="0"
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
                                                <div class="p-4 dropdown-menu rounded-4"
                                                    style="top: 1rem; height: calc(100% - .1875rem); --cz-dropdown-spacer: .3125rem; animation: none;">
                                                    <div class="gap-4 d-flex flex-column flex-lg-row h-100">
                                                        <div style="min-width: 194px">
                                                            <div class="d-flex w-100">
                                                                <a class="animate-underline animate-target d-inline h6 text-dark-emphasis text-decoration-none text-truncate"
                                                                    href="shop-catalog-electronics.html">Cameras &amp;
                                                                    Lenses</a>
                                                            </div>
                                                            <ul class="gap-2 nav flex-column mt-n2">
                                                                <li class="pt-1 d-flex w-100">
                                                                    <a class="p-0 nav-link animate-underline animate-target d-inline fw-normal text-truncate"
                                                                        href="shop-catalog-electronics.html">Point
                                                                        &amp; Shoot Cameras</a>
                                                                </li>
                                                                <li class="pt-1 d-flex w-100">
                                                                    <a class="p-0 nav-link animate-underline animate-target d-inline fw-normal text-truncate"
                                                                        href="shop-catalog-electronics.html">DSLR
                                                                        Cameras</a>
                                                                </li>
                                                                <li class="pt-1 d-flex w-100">
                                                                    <a class="p-0 nav-link animate-underline animate-target d-inline fw-normal text-truncate"
                                                                        href="shop-catalog-electronics.html">Mirrorless
                                                                        Cameras</a>
                                                                </li>
                                                                <li class="pt-1 d-flex w-100">
                                                                    <a class="p-0 nav-link animate-underline animate-target d-inline fw-normal text-truncate"
                                                                        href="shop-catalog-electronics.html">Body
                                                                        Mounted Cameras</a>
                                                                </li>
                                                                <li class="pt-1 d-flex w-100">
                                                                    <a class="p-0 nav-link animate-underline animate-target d-inline fw-normal text-truncate"
                                                                        href="shop-catalog-electronics.html">Camcorders</a>
                                                                </li>
                                                                <li class="pt-1 d-flex w-100">
                                                                    <a class="p-0 nav-link animate-underline animate-target d-inline fw-normal text-truncate"
                                                                        href="shop-catalog-electronics.html">Camcorder
                                                                        Lenses</a>
                                                                </li>
                                                                <li class="pt-1 d-flex w-100">
                                                                    <a class="p-0 nav-link animate-underline animate-target d-inline fw-normal text-truncate"
                                                                        href="shop-catalog-electronics.html">Camera
                                                                        Lenses</a>
                                                                </li>
                                                                <li class="pt-1 d-flex w-100">
                                                                    <a class="p-0 nav-link animate-underline animate-target d-inline fw-normal text-truncate"
                                                                        href="shop-catalog-electronics.html">Macro
                                                                        &amp; Ringlight Flashes</a>
                                                                </li>
                                                                <li class="pt-1 d-flex w-100">
                                                                    <a class="p-0 nav-link animate-underline animate-target d-inline fw-normal text-truncate"
                                                                        href="shop-catalog-electronics.html">Shoe Mount
                                                                        Flashes</a>
                                                                </li>
                                                                <li class="pt-1 d-flex w-100">
                                                                    <a class="p-0 nav-link animate-underline animate-target d-inline fw-normal text-truncate"
                                                                        href="shop-catalog-electronics.html">Tripods
                                                                        &amp; Monopods</a>
                                                                </li>
                                                                <li class="pt-1 d-flex w-100">
                                                                    <a class="p-0 nav-link animate-underline animate-target d-inline fw-normal text-truncate"
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
                                                            <ul class="gap-2 nav flex-column mt-n2">
                                                                <li class="pt-1 d-flex w-100">
                                                                    <a class="p-0 nav-link animate-underline animate-target d-inline fw-normal text-truncate"
                                                                        href="shop-catalog-electronics.html">Bags &amp;
                                                                        Cases</a>
                                                                </li>
                                                                <li class="pt-1 d-flex w-100">
                                                                    <a class="p-0 nav-link animate-underline animate-target d-inline fw-normal text-truncate"
                                                                        href="shop-catalog-electronics.html">Binoculars
                                                                        &amp; Scopes</a>
                                                                </li>
                                                                <li class="pt-1 d-flex w-100">
                                                                    <a class="p-0 nav-link animate-underline animate-target d-inline fw-normal text-truncate"
                                                                        href="shop-catalog-electronics.html">Batteries
                                                                        &amp; Chargers</a>
                                                                </li>
                                                                <li class="pt-1 d-flex w-100">
                                                                    <a class="p-0 nav-link animate-underline animate-target d-inline fw-normal text-truncate"
                                                                        href="shop-catalog-electronics.html">Cables
                                                                        &amp; Cords</a>
                                                                </li>
                                                                <li class="pt-1 d-flex w-100">
                                                                    <a class="p-0 nav-link animate-underline animate-target d-inline fw-normal text-truncate"
                                                                        href="shop-catalog-electronics.html">Camcorder
                                                                        Accessories</a>
                                                                </li>
                                                                <li class="pt-1 d-flex w-100">
                                                                    <a class="p-0 nav-link animate-underline animate-target d-inline fw-normal text-truncate"
                                                                        href="shop-catalog-electronics.html">Cleaning
                                                                        Equipment</a>
                                                                </li>
                                                                <li class="pt-1 d-flex w-100">
                                                                    <a class="p-0 nav-link animate-underline animate-target d-inline fw-normal text-truncate"
                                                                        href="shop-catalog-electronics.html">Protector
                                                                        Foils</a>
                                                                </li>
                                                                <li class="pt-1 d-flex w-100">
                                                                    <a class="p-0 nav-link animate-underline animate-target d-inline fw-normal text-truncate"
                                                                        href="shop-catalog-electronics.html">Filters
                                                                        &amp; Accessories</a>
                                                                </li>
                                                                <li class="pt-1 d-flex w-100">
                                                                    <a class="p-0 nav-link animate-underline animate-target d-inline fw-normal text-truncate"
                                                                        href="shop-catalog-electronics.html">Remote
                                                                        Controls</a>
                                                                </li>
                                                                <li class="pt-1 d-flex w-100">
                                                                    <a class="p-0 nav-link animate-underline animate-target d-inline fw-normal text-truncate"
                                                                        href="shop-catalog-electronics.html">Rain
                                                                        Covers</a>
                                                                </li>
                                                                <li class="pt-1 d-flex w-100">
                                                                    <a class="p-0 nav-link animate-underline animate-target d-inline fw-normal text-truncate"
                                                                        href="shop-catalog-electronics.html">Viewfinders</a>
                                                                </li>
                                                            </ul>
                                                        </div>
                                                        <div class="d-none d-lg-block">
                                                            <div class="d-none d-xl-block" style="width: 284px"></div>
                                                            <div class="d-xl-none" style="width: 240px"></div>
                                                            <div
                                                                class="px-3 py-4 position-relative d-flex flex-column justify-content-center h-100 bg-body-secondary rounded-5">
                                                                <div class="px-2 text-center">
                                                                    <span
                                                                        class="mb-2 badge bg-danger bg-opacity-10 text-danger fs-sm rounded-pill">Save
                                                                        up to $300</span>
                                                                    <div class="mb-2 fs-sm text-light-emphasis">Starts
                                                                        from <del>$1,100.00</del> 899.00</div>
                                                                    <div class="mb-4 h2">Canon Digital Cameras</div>
                                                                </div>
                                                                <img src="assets/img/mega-menu/electronics/05.png"
                                                                    width="252" alt="Canon Camera">
                                                                <div class="mt-4 text-center">
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
                                                <div class="pb-1 rounded position-relative px-lg-2" tabindex="0"
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
                                                <div class="p-4 dropdown-menu rounded-4"
                                                    style="top: 1rem; height: calc(100% - .1875rem); --cz-dropdown-spacer: .3125rem; animation: none;">
                                                    <div class="gap-4 d-flex flex-column flex-lg-row h-100">
                                                        <div style="min-width: 194px">
                                                            <div class="d-flex w-100">
                                                                <a class="animate-underline animate-target d-inline h6 text-dark-emphasis text-decoration-none text-truncate"
                                                                    href="shop-catalog-electronics.html">By type</a>
                                                            </div>
                                                            <ul class="gap-2 nav flex-column mt-n2">
                                                                <li class="pt-1 d-flex w-100">
                                                                    <a class="p-0 nav-link animate-underline animate-target d-inline fw-normal text-truncate"
                                                                        href="shop-catalog-electronics.html">All-in-One</a>
                                                                </li>
                                                                <li class="pt-1 d-flex w-100">
                                                                    <a class="p-0 nav-link animate-underline animate-target d-inline fw-normal text-truncate"
                                                                        href="shop-catalog-electronics.html">Copying</a>
                                                                </li>
                                                                <li class="pt-1 d-flex w-100">
                                                                    <a class="p-0 nav-link animate-underline animate-target d-inline fw-normal text-truncate"
                                                                        href="shop-catalog-electronics.html">Faxing</a>
                                                                </li>
                                                                <li class="pt-1 d-flex w-100">
                                                                    <a class="p-0 nav-link animate-underline animate-target d-inline fw-normal text-truncate"
                                                                        href="shop-catalog-electronics.html">Photo
                                                                        Printing</a>
                                                                </li>
                                                                <li class="pt-1 d-flex w-100">
                                                                    <a class="p-0 nav-link animate-underline animate-target d-inline fw-normal text-truncate"
                                                                        href="shop-catalog-electronics.html">Printing
                                                                        Only</a>
                                                                </li>
                                                                <li class="pt-1 d-flex w-100">
                                                                    <a class="p-0 nav-link animate-underline animate-target d-inline fw-normal text-truncate"
                                                                        href="shop-catalog-electronics.html">Scanning</a>
                                                                </li>
                                                            </ul>
                                                            <div class="pt-4 d-flex w-100">
                                                                <a class="animate-underline animate-target d-inline h6 text-dark-emphasis text-decoration-none text-truncate"
                                                                    href="shop-catalog-electronics.html">Scanners</a>
                                                            </div>
                                                            <ul class="gap-2 nav flex-column mt-n2">
                                                                <li class="pt-1 d-flex w-100">
                                                                    <a class="p-0 nav-link animate-underline animate-target d-inline fw-normal text-truncate"
                                                                        href="shop-catalog-electronics.html">Business
                                                                        Card Scanners</a>
                                                                </li>
                                                                <li class="pt-1 d-flex w-100">
                                                                    <a class="p-0 nav-link animate-underline animate-target d-inline fw-normal text-truncate"
                                                                        href="shop-catalog-electronics.html">Document
                                                                        Scanners</a>
                                                                </li>
                                                                <li class="pt-1 d-flex w-100">
                                                                    <a class="p-0 nav-link animate-underline animate-target d-inline fw-normal text-truncate"
                                                                        href="shop-catalog-electronics.html">Flatbed
                                                                        &amp; Photo Scanners</a>
                                                                </li>
                                                                <li class="pt-1 d-flex w-100">
                                                                    <a class="p-0 nav-link animate-underline animate-target d-inline fw-normal text-truncate"
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
                                                            <ul class="gap-2 nav flex-column mt-n2">
                                                                <li class="pt-1 d-flex w-100">
                                                                    <a class="p-0 nav-link animate-underline animate-target d-inline fw-normal text-truncate"
                                                                        href="shop-catalog-electronics.html">Dot Matrix
                                                                        Printers</a>
                                                                </li>
                                                                <li class="pt-1 d-flex w-100">
                                                                    <a class="p-0 nav-link animate-underline animate-target d-inline fw-normal text-truncate"
                                                                        href="shop-catalog-electronics.html">Inkjet
                                                                        Printers</a>
                                                                </li>
                                                                <li class="pt-1 d-flex w-100">
                                                                    <a class="p-0 nav-link animate-underline animate-target d-inline fw-normal text-truncate"
                                                                        href="shop-catalog-electronics.html">Label
                                                                        Printers</a>
                                                                </li>
                                                                <li class="pt-1 d-flex w-100">
                                                                    <a class="p-0 nav-link animate-underline animate-target d-inline fw-normal text-truncate"
                                                                        href="shop-catalog-electronics.html">Laser
                                                                        Printers</a>
                                                                </li>
                                                                <li class="pt-1 d-flex w-100">
                                                                    <a class="p-0 nav-link animate-underline animate-target d-inline fw-normal text-truncate"
                                                                        href="shop-catalog-electronics.html">Photo
                                                                        Printers</a>
                                                                </li>
                                                                <li class="pt-1 d-flex w-100">
                                                                    <a class="p-0 nav-link animate-underline animate-target d-inline fw-normal text-truncate"
                                                                        href="shop-catalog-electronics.html">Wide
                                                                        Format Printers</a>
                                                                </li>
                                                                <li class="pt-1 d-flex w-100">
                                                                    <a class="p-0 nav-link animate-underline animate-target d-inline fw-normal text-truncate"
                                                                        href="shop-catalog-electronics.html">Plotter
                                                                        Printers</a>
                                                                </li>
                                                            </ul>
                                                        </div>
                                                        <div class="d-none d-lg-block">
                                                            <div class="d-none d-xl-block" style="width: 284px"></div>
                                                            <div class="d-xl-none" style="width: 240px"></div>
                                                            <div
                                                                class="px-3 py-4 position-relative d-flex flex-column justify-content-center h-100 bg-body-secondary rounded-5">
                                                                <div class="px-2 text-center">
                                                                    <div class="mb-2 fs-sm text-light-emphasis">Best
                                                                        deal! Save up to <span
                                                                            class="fw-semibold">$200</span></div>
                                                                    <div class="mb-4 h2">Epson Color Printers</div>
                                                                </div>
                                                                <img src="assets/img/mega-menu/electronics/06.png"
                                                                    width="252" alt="Epson Printer">
                                                                <div class="mt-4 text-center">
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
                                                <div class="pb-1 rounded position-relative px-lg-2" tabindex="0"
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
                                                <div class="p-4 dropdown-menu rounded-4"
                                                    style="top: 1rem; height: calc(100% - .1875rem); --cz-dropdown-spacer: .3125rem; animation: none;">
                                                    <div class="gap-4 d-flex flex-column flex-lg-row h-100">
                                                        <div style="min-width: 194px">
                                                            <div class="d-flex w-100">
                                                                <a class="animate-underline animate-target d-inline h6 text-dark-emphasis text-decoration-none text-truncate"
                                                                    href="shop-catalog-electronics.html">Charging
                                                                    Stations</a>
                                                            </div>
                                                            <ul class="gap-2 nav flex-column mt-n2">
                                                                <li class="pt-1 d-flex w-100">
                                                                    <a class="p-0 nav-link animate-underline animate-target d-inline fw-normal text-truncate"
                                                                        href="shop-catalog-electronics.html">Portable
                                                                        Power Stations</a>
                                                                </li>
                                                                <li class="pt-1 d-flex w-100">
                                                                    <a class="p-0 nav-link animate-underline animate-target d-inline fw-normal text-truncate"
                                                                        href="shop-catalog-electronics.html">Inverter
                                                                        Power Stations</a>
                                                                </li>
                                                                <li class="pt-1 d-flex w-100">
                                                                    <a class="p-0 nav-link animate-underline animate-target d-inline fw-normal text-truncate"
                                                                        href="shop-catalog-electronics.html">Outdoor
                                                                        Generators</a>
                                                                </li>
                                                                <li class="pt-1 d-flex w-100">
                                                                    <a class="p-0 nav-link animate-underline animate-target d-inline fw-normal text-truncate"
                                                                        href="shop-catalog-electronics.html">Gasoline
                                                                        Generators</a>
                                                                </li>
                                                                <li class="pt-1 d-flex w-100">
                                                                    <a class="p-0 nav-link animate-underline animate-target d-inline fw-normal text-truncate"
                                                                        href="shop-catalog-electronics.html">Cell Phone
                                                                        Chargers</a>
                                                                </li>
                                                                <li class="pt-1 d-flex w-100">
                                                                    <a class="p-0 nav-link animate-underline animate-target d-inline fw-normal text-truncate"
                                                                        href="shop-catalog-electronics.html">Power
                                                                        Strips</a>
                                                                </li>
                                                                <li class="pt-1 d-flex w-100">
                                                                    <a class="p-0 nav-link animate-underline animate-target d-inline fw-normal text-truncate"
                                                                        href="shop-catalog-electronics.html">Wall
                                                                        Charges</a>
                                                                </li>
                                                            </ul>
                                                        </div>
                                                        <div class="d-none d-lg-block">
                                                            <div class="d-none d-xl-block" style="width: 284px"></div>
                                                            <div class="d-xl-none" style="width: 240px"></div>
                                                            <div
                                                                class="px-3 py-4 position-relative d-flex flex-column justify-content-center h-100 bg-body-secondary rounded-5">
                                                                <div class="px-2 text-center">
                                                                    <span
                                                                        class="mb-2 badge bg-danger bg-opacity-10 text-danger fs-sm rounded-pill">Huge
                                                                        sale!</span>
                                                                    <div class="mb-2 fs-sm text-light-emphasis">Save up
                                                                        to <span class="fw-semibold">$350</span></div>
                                                                    <div class="mb-4 h2">Portable Power Stations</div>
                                                                </div>
                                                                <img src="assets/img/mega-menu/electronics/07.png"
                                                                    width="252" alt="Epson Printer">
                                                                <div class="mt-4 text-center">
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
                                                <div class="pb-1 rounded position-relative px-lg-2" tabindex="0"
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
                                                <div class="p-4 dropdown-menu rounded-4"
                                                    style="top: 1rem; height: calc(100% - .1875rem); --cz-dropdown-spacer: .3125rem; animation: none;">
                                                    <div class="gap-4 d-flex flex-column flex-lg-row h-100">
                                                        <div style="min-width: 194px">
                                                            <div class="d-flex w-100">
                                                                <a class="animate-underline animate-target d-inline h6 text-dark-emphasis text-decoration-none text-truncate"
                                                                    href="shop-catalog-electronics.html">Headphones</a>
                                                            </div>
                                                            <ul class="gap-2 nav flex-column mt-n2">
                                                                <li class="pt-1 d-flex w-100">
                                                                    <a class="p-0 nav-link animate-underline animate-target d-inline fw-normal text-truncate"
                                                                        href="shop-catalog-electronics.html">Earbud
                                                                        Headphones</a>
                                                                </li>
                                                                <li class="pt-1 d-flex w-100">
                                                                    <a class="p-0 nav-link animate-underline animate-target d-inline fw-normal text-truncate"
                                                                        href="shop-catalog-electronics.html">Over-Ear
                                                                        Headphones</a>
                                                                </li>
                                                                <li class="pt-1 d-flex w-100">
                                                                    <a class="p-0 nav-link animate-underline animate-target d-inline fw-normal text-truncate"
                                                                        href="shop-catalog-electronics.html">On-Ear
                                                                        Headphones</a>
                                                                </li>
                                                                <li class="pt-1 d-flex w-100">
                                                                    <a class="p-0 nav-link animate-underline animate-target d-inline fw-normal text-truncate"
                                                                        href="shop-catalog-electronics.html">Bluetooth
                                                                        Headphones</a>
                                                                </li>
                                                                <li class="pt-1 d-flex w-100">
                                                                    <a class="p-0 nav-link animate-underline animate-target d-inline fw-normal text-truncate"
                                                                        href="shop-catalog-electronics.html">Sports
                                                                        &amp; Fitness</a>
                                                                </li>
                                                                <li class="pt-1 d-flex w-100">
                                                                    <a class="p-0 nav-link animate-underline animate-target d-inline fw-normal text-truncate"
                                                                        href="shop-catalog-electronics.html">Noise-Cancelling</a>
                                                                </li>
                                                            </ul>
                                                            <div class="pt-4 d-flex w-100">
                                                                <a class="animate-underline animate-target d-inline h6 text-dark-emphasis text-decoration-none text-truncate"
                                                                    href="shop-catalog-electronics.html">Accessories</a>
                                                            </div>
                                                            <ul class="gap-2 nav flex-column mt-n2">
                                                                <li class="pt-1 d-flex w-100">
                                                                    <a class="p-0 nav-link animate-underline animate-target d-inline fw-normal text-truncate"
                                                                        href="shop-catalog-electronics.html">Cases
                                                                        &amp; Sleeves</a>
                                                                </li>
                                                                <li class="pt-1 d-flex w-100">
                                                                    <a class="p-0 nav-link animate-underline animate-target d-inline fw-normal text-truncate"
                                                                        href="shop-catalog-electronics.html">Cables
                                                                        &amp; Cords</a>
                                                                </li>
                                                                <li class="pt-1 d-flex w-100">
                                                                    <a class="p-0 nav-link animate-underline animate-target d-inline fw-normal text-truncate"
                                                                        href="shop-catalog-electronics.html">Ear
                                                                        Pads</a>
                                                                </li>
                                                                <li class="pt-1 d-flex w-100">
                                                                    <a class="p-0 nav-link animate-underline animate-target d-inline fw-normal text-truncate"
                                                                        href="shop-catalog-electronics.html">Repair
                                                                        Kits</a>
                                                                </li>
                                                                <li class="pt-1 d-flex w-100">
                                                                    <a class="p-0 nav-link animate-underline animate-target d-inline fw-normal text-truncate"
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
                                                                class="px-3 py-4 position-relative d-flex flex-column justify-content-center h-100 bg-body-secondary rounded-5">
                                                                <div class="px-2 text-center">
                                                                    <span
                                                                        class="mb-2 badge bg-danger bg-opacity-10 text-danger fs-sm rounded-pill">Save
                                                                        up to $200</span>
                                                                    <div class="mb-2 fs-sm text-light-emphasis">Starts
                                                                        from $119.99</div>
                                                                    <div class="mb-4 h2">Wireless Headphones</div>
                                                                </div>
                                                                <img src="assets/img/mega-menu/electronics/08.png"
                                                                    width="252" alt="Wireless Headphones">
                                                                <div class="mt-4 text-center">
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
                                                <div class="pb-1 rounded position-relative px-lg-2" tabindex="0"
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
                                                <div class="p-4 dropdown-menu rounded-4"
                                                    style="top: 1rem; height: calc(100% - .1875rem); --cz-dropdown-spacer: .3125rem; animation: none;">
                                                    <div class="gap-4 d-flex flex-column flex-lg-row h-100">
                                                        <div style="min-width: 194px">
                                                            <div class="d-flex w-100">
                                                                <a class="animate-underline animate-target d-inline h6 text-dark-emphasis text-decoration-none text-truncate"
                                                                    href="shop-catalog-electronics.html">Wearable
                                                                    Gadgets</a>
                                                            </div>
                                                            <ul class="gap-2 nav flex-column mt-n2">
                                                                <li class="pt-1 d-flex w-100">
                                                                    <a class="p-0 nav-link animate-underline animate-target d-inline fw-normal text-truncate"
                                                                        href="shop-catalog-electronics.html">Smartwatches</a>
                                                                </li>
                                                                <li class="pt-1 d-flex w-100">
                                                                    <a class="p-0 nav-link animate-underline animate-target d-inline fw-normal text-truncate"
                                                                        href="shop-catalog-electronics.html">Fitness
                                                                        Trackers</a>
                                                                </li>
                                                                <li class="pt-1 d-flex w-100">
                                                                    <a class="p-0 nav-link animate-underline animate-target d-inline fw-normal text-truncate"
                                                                        href="shop-catalog-electronics.html">Smart
                                                                        Glasses</a>
                                                                </li>
                                                                <li class="pt-1 d-flex w-100">
                                                                    <a class="p-0 nav-link animate-underline animate-target d-inline fw-normal text-truncate"
                                                                        href="shop-catalog-electronics.html">Rings</a>
                                                                </li>
                                                                <li class="pt-1 d-flex w-100">
                                                                    <a class="p-0 nav-link animate-underline animate-target d-inline fw-normal text-truncate"
                                                                        href="shop-catalog-electronics.html">Virtual
                                                                        Reality</a>
                                                                </li>
                                                                <li class="pt-1 d-flex w-100">
                                                                    <a class="p-0 nav-link animate-underline animate-target d-inline fw-normal text-truncate"
                                                                        href="shop-catalog-electronics.html">Clips,
                                                                        Arm &amp; Wristbands</a>
                                                                </li>
                                                                <li class="pt-1 d-flex w-100">
                                                                    <a class="p-0 nav-link animate-underline animate-target d-inline fw-normal text-truncate"
                                                                        href="shop-catalog-electronics.html">Accessories</a>
                                                                </li>
                                                            </ul>
                                                        </div>
                                                        <div class="d-none d-lg-block">
                                                            <div class="d-none d-xl-block" style="width: 284px">
                                                            </div>
                                                            <div class="d-xl-none" style="width: 240px"></div>
                                                            <div
                                                                class="px-3 py-4 position-relative d-flex flex-column justify-content-center h-100 bg-body-secondary rounded-5">
                                                                <div class="px-2 text-center">
                                                                    <i
                                                                        class="mb-3 ci-google fs-2 text-dark-emphasis"></i>
                                                                    <div class="mb-2 fs-sm text-light-emphasis">Deal
                                                                        of the week</div>
                                                                    <div class="mb-4 h2">Pixel Watch</div>
                                                                </div>
                                                                <img src="assets/img/mega-menu/electronics/09.png"
                                                                    width="252" alt="Pixel Watch">
                                                                <div class="mt-4 text-center">
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
                                                <div class="pb-1 rounded position-relative px-lg-2" tabindex="0"
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
                                                <div class="p-4 dropdown-menu rounded-4"
                                                    style="top: 1rem; height: calc(100% - .1875rem); --cz-dropdown-spacer: .3125rem; animation: none;">
                                                    <div class="gap-4 d-flex flex-column flex-lg-row h-100">
                                                        <div style="min-width: 194px">
                                                            <div class="d-flex w-100">
                                                                <a class="animate-underline animate-target d-inline h6 text-dark-emphasis text-decoration-none text-truncate"
                                                                    href="shop-catalog-electronics.html">Powerbanks</a>
                                                            </div>
                                                            <ul class="gap-2 nav flex-column mt-n2">
                                                                <li class="pt-1 d-flex w-100">
                                                                    <a class="p-0 nav-link animate-underline animate-target d-inline fw-normal text-truncate"
                                                                        href="shop-catalog-electronics.html">Fast
                                                                        Charging</a>
                                                                </li>
                                                                <li class="pt-1 d-flex w-100">
                                                                    <a class="p-0 nav-link animate-underline animate-target d-inline fw-normal text-truncate"
                                                                        href="shop-catalog-electronics.html">Built In
                                                                        Cable</a>
                                                                </li>
                                                                <li class="pt-1 d-flex w-100">
                                                                    <a class="p-0 nav-link animate-underline animate-target d-inline fw-normal text-truncate"
                                                                        href="shop-catalog-electronics.html">Built In
                                                                        Wall Plug</a>
                                                                </li>
                                                                <li class="pt-1 d-flex w-100">
                                                                    <a class="p-0 nav-link animate-underline animate-target d-inline fw-normal text-truncate"
                                                                        href="shop-catalog-electronics.html">LED
                                                                        Indicator Lights</a>
                                                                </li>
                                                                <li class="pt-1 d-flex w-100">
                                                                    <a class="p-0 nav-link animate-underline animate-target d-inline fw-normal text-truncate"
                                                                        href="shop-catalog-electronics.html">Pocket
                                                                        Size</a>
                                                                </li>
                                                                <li class="pt-1 d-flex w-100">
                                                                    <a class="p-0 nav-link animate-underline animate-target d-inline fw-normal text-truncate"
                                                                        href="shop-catalog-electronics.html">Wireless
                                                                        Charging</a>
                                                                </li>
                                                                <li class="pt-1 d-flex w-100">
                                                                    <a class="p-0 nav-link animate-underline animate-target d-inline fw-normal text-truncate"
                                                                        href="shop-catalog-electronics.html">Short
                                                                        Circuit Protection</a>
                                                                </li>
                                                                <li class="pt-1 d-flex w-100">
                                                                    <a class="p-0 nav-link animate-underline animate-target d-inline fw-normal text-truncate"
                                                                        href="shop-catalog-electronics.html">Scratch
                                                                        Resistant</a>
                                                                </li>
                                                                <li class="pt-1 d-flex w-100">
                                                                    <a class="p-0 nav-link animate-underline animate-target d-inline fw-normal text-truncate"
                                                                        href="shop-catalog-electronics.html">Flashlight</a>
                                                                </li>
                                                                <li class="pt-1 d-flex w-100">
                                                                    <a class="p-0 nav-link animate-underline animate-target d-inline fw-normal text-truncate"
                                                                        href="shop-catalog-electronics.html">Lightweight</a>
                                                                </li>
                                                            </ul>
                                                        </div>
                                                        <div class="d-none d-lg-block">
                                                            <div class="d-none d-xl-block" style="width: 284px">
                                                            </div>
                                                            <div class="d-xl-none" style="width: 240px"></div>
                                                            <div
                                                                class="px-3 py-4 position-relative d-flex flex-column justify-content-center h-100 bg-body-secondary rounded-5">
                                                                <div class="px-2 text-center">
                                                                    <div class="mb-2 fs-sm text-light-emphasis">Save
                                                                        up to <span class="fw-semibold">$50</span> on
                                                                        our</div>
                                                                    <div class="mb-4 h2">Powerbanks Deals</div>
                                                                </div>
                                                                <img src="assets/img/mega-menu/electronics/10.png"
                                                                    width="252" alt="Powerbank">
                                                                <div class="mt-4 text-center">
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
                                                <div class="pb-1 rounded position-relative px-lg-2" tabindex="0"
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
                                                <div class="p-4 dropdown-menu rounded-4"
                                                    style="top: 1rem; height: calc(100% - .1875rem); --cz-dropdown-spacer: .3125rem; animation: none;">
                                                    <div class="gap-4 d-flex flex-column flex-lg-row h-100">
                                                        <div style="min-width: 194px">
                                                            <div class="d-flex w-100">
                                                                <a class="animate-underline animate-target d-inline h6 text-dark-emphasis text-decoration-none text-truncate"
                                                                    href="shop-catalog-electronics.html">Data
                                                                    Storage</a>
                                                            </div>
                                                            <ul class="gap-2 nav flex-column mt-n2">
                                                                <li class="pt-1 d-flex w-100">
                                                                    <a class="p-0 nav-link animate-underline animate-target d-inline fw-normal text-truncate"
                                                                        href="shop-catalog-electronics.html">External
                                                                        Hard Drives</a>
                                                                </li>
                                                                <li class="pt-1 d-flex w-100">
                                                                    <a class="p-0 nav-link animate-underline animate-target d-inline fw-normal text-truncate"
                                                                        href="shop-catalog-electronics.html">External
                                                                        SSD</a>
                                                                </li>
                                                                <li class="pt-1 d-flex w-100">
                                                                    <a class="p-0 nav-link animate-underline animate-target d-inline fw-normal text-truncate"
                                                                        href="shop-catalog-electronics.html">External
                                                                        Zip Drives</a>
                                                                </li>
                                                                <li class="pt-1 d-flex w-100">
                                                                    <a class="p-0 nav-link animate-underline animate-target d-inline fw-normal text-truncate"
                                                                        href="shop-catalog-electronics.html">Floppy
                                                                        &amp; Tape Drives</a>
                                                                </li>
                                                                <li class="pt-1 d-flex w-100">
                                                                    <a class="p-0 nav-link animate-underline animate-target d-inline fw-normal text-truncate"
                                                                        href="shop-catalog-electronics.html">Internal
                                                                        Hard Drives</a>
                                                                </li>
                                                                <li class="pt-1 d-flex w-100">
                                                                    <a class="p-0 nav-link animate-underline animate-target d-inline fw-normal text-truncate"
                                                                        href="shop-catalog-electronics.html">Internal
                                                                        SSD</a>
                                                                </li>
                                                                <li class="pt-1 d-flex w-100">
                                                                    <a class="p-0 nav-link animate-underline animate-target d-inline fw-normal text-truncate"
                                                                        href="shop-catalog-electronics.html">Network
                                                                        Attached Storage</a>
                                                                </li>
                                                                <li class="pt-1 d-flex w-100">
                                                                    <a class="p-0 nav-link animate-underline animate-target d-inline fw-normal text-truncate"
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
                                                                class="px-3 py-4 position-relative d-flex flex-column justify-content-center h-100 bg-body-secondary rounded-5">
                                                                <div class="px-2 text-center">
                                                                    <span
                                                                        class="mb-2 badge bg-danger bg-opacity-10 text-danger fs-sm rounded-pill">Save
                                                                        up to $100</span>
                                                                    <div class="mb-2 fs-sm text-light-emphasis">Starts
                                                                        from $89.99</div>
                                                                    <div class="mb-4 h2">Samsung SSD Deals</div>
                                                                </div>
                                                                <img src="assets/img/mega-menu/electronics/11.png"
                                                                    width="252" alt="SSD">
                                                                <div class="mt-4 text-center">
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
                                                <div class="pb-2 rounded position-relative px-lg-2" tabindex="0"
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
                                                <div class="p-4 dropdown-menu rounded-4"
                                                    style="top: 1rem; height: calc(100% - .1875rem); --cz-dropdown-spacer: .3125rem; animation: none;">
                                                    <div class="d-flex flex-column flex-lg-row h-100 gap-lg-4">
                                                        <div style="min-width: 194px">
                                                            <div class="d-flex w-100">
                                                                <a class="animate-underline animate-target d-inline h6 text-dark-emphasis text-decoration-none text-truncate"
                                                                    href="shop-catalog-electronics.html">Games &amp;
                                                                    Hardware</a>
                                                            </div>
                                                            <ul class="gap-2 nav flex-column mt-n2">
                                                                <li class="pt-1 d-flex w-100">
                                                                    <a class="p-0 nav-link animate-underline animate-target d-inline fw-normal text-truncate"
                                                                        href="shop-catalog-electronics.html">Video
                                                                        Games</a>
                                                                </li>
                                                                <li class="pt-1 d-flex w-100">
                                                                    <a class="p-0 nav-link animate-underline animate-target d-inline fw-normal text-truncate"
                                                                        href="shop-catalog-electronics.html">PlayStation
                                                                        5</a>
                                                                </li>
                                                                <li class="pt-1 d-flex w-100">
                                                                    <a class="p-0 nav-link animate-underline animate-target d-inline fw-normal text-truncate"
                                                                        href="shop-catalog-electronics.html">PlayStation
                                                                        4</a>
                                                                </li>
                                                                <li class="pt-1 d-flex w-100">
                                                                    <a class="p-0 nav-link animate-underline animate-target d-inline fw-normal text-truncate"
                                                                        href="shop-catalog-electronics.html">Xbox
                                                                        Series X</a>
                                                                </li>
                                                                <li class="pt-1 d-flex w-100">
                                                                    <a class="p-0 nav-link animate-underline animate-target d-inline fw-normal text-truncate"
                                                                        href="shop-catalog-electronics.html">Xbox
                                                                        Series S</a>
                                                                </li>
                                                                <li class="pt-1 d-flex w-100">
                                                                    <a class="p-0 nav-link animate-underline animate-target d-inline fw-normal text-truncate"
                                                                        href="shop-catalog-electronics.html">Nintendo
                                                                        Switch</a>
                                                                </li>
                                                                <li class="pt-1 d-flex w-100">
                                                                    <a class="p-0 nav-link animate-underline animate-target d-inline fw-normal text-truncate"
                                                                        href="shop-catalog-electronics.html">Gaming
                                                                        PC</a>
                                                                </li>
                                                                <li class="pt-1 d-flex w-100">
                                                                    <a class="p-0 nav-link animate-underline animate-target d-inline fw-normal text-truncate"
                                                                        href="shop-catalog-electronics.html">Gaming
                                                                        Laptops</a>
                                                                </li>
                                                                <li class="pt-1 d-flex w-100">
                                                                    <a class="p-0 nav-link animate-underline animate-target d-inline fw-normal text-truncate"
                                                                        href="shop-catalog-electronics.html">Wii U</a>
                                                                </li>
                                                                <li class="pt-1 d-flex w-100">
                                                                    <a class="p-0 nav-link animate-underline animate-target d-inline fw-normal text-truncate"
                                                                        href="shop-catalog-electronics.html">Wii</a>
                                                                </li>
                                                                <li class="pt-1 d-flex w-100">
                                                                    <a class="p-0 nav-link animate-underline animate-target d-inline fw-normal text-truncate"
                                                                        href="shop-catalog-electronics.html">Nintendo
                                                                        3DS</a>
                                                                </li>
                                                                <li class="pt-1 d-flex w-100">
                                                                    <a class="p-0 nav-link animate-underline animate-target d-inline fw-normal text-truncate"
                                                                        href="shop-catalog-electronics.html">Nintendo
                                                                        2DS</a>
                                                                </li>
                                                                <li class="pt-1 d-flex w-100">
                                                                    <a class="p-0 nav-link animate-underline animate-target d-inline fw-normal text-truncate"
                                                                        href="shop-catalog-electronics.html">Nintendo
                                                                        DS</a>
                                                                </li>
                                                                <li class="pt-1 d-flex w-100">
                                                                    <a class="p-0 nav-link animate-underline animate-target d-inline fw-normal text-truncate"
                                                                        href="shop-catalog-electronics.html">Wii</a>
                                                                </li>
                                                            </ul>
                                                        </div>
                                                        <div style="min-width: 194px">
                                                            <ul class="gap-2 mt-2 nav flex-column mt-lg-0">
                                                                <li class="pt-1 d-flex w-100">
                                                                    <a class="p-0 nav-link animate-underline animate-target d-inline fw-normal text-truncate"
                                                                        href="shop-catalog-electronics.html">Mac</a>
                                                                </li>
                                                                <li class="pt-1 d-flex w-100">
                                                                    <a class="p-0 nav-link animate-underline animate-target d-inline fw-normal text-truncate"
                                                                        href="shop-catalog-electronics.html">PlayStation
                                                                        Vita</a>
                                                                </li>
                                                                <li class="pt-1 d-flex w-100">
                                                                    <a class="p-0 nav-link animate-underline animate-target d-inline fw-normal text-truncate"
                                                                        href="shop-catalog-electronics.html">Sony
                                                                        PSP</a>
                                                                </li>
                                                                <li class="pt-1 d-flex w-100">
                                                                    <a class="p-0 nav-link animate-underline animate-target d-inline fw-normal text-truncate"
                                                                        href="shop-catalog-electronics.html">Retro
                                                                        Gaming</a>
                                                                </li>
                                                                <li class="pt-1 d-flex w-100">
                                                                    <a class="p-0 nav-link animate-underline animate-target d-inline fw-normal text-truncate"
                                                                        href="shop-catalog-electronics.html">Microconsoles</a>
                                                                </li>
                                                                <li class="pt-1 d-flex w-100">
                                                                    <a class="p-0 nav-link animate-underline animate-target d-inline fw-normal text-truncate"
                                                                        href="shop-catalog-electronics.html">Controllers</a>
                                                                </li>
                                                                <li class="pt-1 d-flex w-100">
                                                                    <a class="p-0 nav-link animate-underline animate-target d-inline fw-normal text-truncate"
                                                                        href="shop-catalog-electronics.html">Accessories</a>
                                                                </li>
                                                                <li class="pt-1 d-flex w-100">
                                                                    <a class="p-0 nav-link animate-underline animate-target d-inline fw-normal text-truncate"
                                                                        href="shop-catalog-electronics.html">Digital
                                                                        Games Screens</a>
                                                                </li>
                                                                <li class="pt-1 d-flex w-100">
                                                                    <a class="p-0 nav-link animate-underline animate-target d-inline fw-normal text-truncate"
                                                                        href="shop-catalog-electronics.html">Game
                                                                        Pass</a>
                                                                </li>
                                                                <li class="pt-1 d-flex w-100">
                                                                    <a class="p-0 nav-link animate-underline animate-target d-inline fw-normal text-truncate"
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
                                                                class="px-3 py-4 position-relative d-flex flex-column justify-content-center h-100 bg-body-secondary rounded-5">
                                                                <div class="px-2 text-center">
                                                                    <span
                                                                        class="mb-2 badge bg-danger bg-opacity-10 text-danger fs-sm rounded-pill">Save
                                                                        $100</span>
                                                                    <div class="mb-2 fs-sm text-light-emphasis">Starts
                                                                        from <del>$599.00</del> $499.00</div>
                                                                    <div class="mb-4 h2">Xbox Series X</div>
                                                                </div>
                                                                <img src="assets/img/mega-menu/electronics/12.png"
                                                                    width="252" alt="Xbox">
                                                                <div class="mt-4 text-center">
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
                            <div class="pt-3 col-lg-9 d-lg-flex pt-lg-0 ps-lg-0">
                                <ul class="navbar-nav position-relative">
                                    <li class="nav-item dropdown me-lg-n1 me-xl-0">
                                        <a class="nav-link dropdown-toggle" href="#" role="button"
                                            data-bs-toggle="dropdown" data-bs-trigger="hover"
                                            aria-expanded="false">Home</a>
                                        <ul class="dropdown-menu">
                                            <li class="px-2 hover-effect-opacity mx-n2">
                                                <a class="mb-0 dropdown-item d-block" href="home-electronics.html">
                                                    <span class="fw-medium">Electronics Store</span>
                                                    <span class="d-block fs-xs text-body-secondary">Megamenu + Hero
                                                        slider</span>
                                                    <div class="top-0 invisible px-2 pt-2 transition-none border rounded opacity-0 d-none d-lg-block hover-effect-target position-absolute start-100 bg-body border-light-subtle rounded-start-0 ms-n2"
                                                        style="width: 212px; height: calc(100% + 2px); margin-top: -1px">
                                                        <img class="position-relative z-2 d-none-dark"
                                                            src="assets/img/mega-menu/demo-preview/electronics-light.jpg"
                                                            alt="Electronics Store">
                                                        <img class="position-relative z-2 d-none d-block-dark"
                                                            src="assets/img/mega-menu/demo-preview/electronics-dark.jpg"
                                                            alt="Electronics Store">
                                                        <span
                                                            class="top-0 rounded position-absolute start-0 w-100 h-100 rounded-start-0 d-none-dark"
                                                            style="box-shadow: .875rem .5rem 2rem -.5rem #676f7b; opacity: .1"></span>
                                                        <span
                                                            class="top-0 rounded position-absolute start-0 w-100 h-100 rounded-start-0 d-none d-block-dark"
                                                            style="box-shadow: .875rem .5rem 1.875rem -.5rem #080b12; opacity: .25"></span>
                                                    </div>
                                                </a>
                                            </li>
                                            <li class="px-2 hover-effect-opacity mx-n2">
                                                <a class="mb-0 dropdown-item d-block" href="home-fashion-v1.html">
                                                    <span class="fw-medium">Fashion Store v.1</span>
                                                    <span class="d-block fs-xs text-body-secondary">Hero promo
                                                        slider</span>
                                                    <div class="top-0 invisible px-2 pt-2 transition-none border rounded opacity-0 d-none d-lg-block hover-effect-target position-absolute start-100 bg-body border-light-subtle rounded-start-0 ms-n2"
                                                        style="width: 212px; height: calc(100% + 2px); margin-top: -1px">
                                                        <img class="position-relative z-2 d-none-dark"
                                                            src="assets/img/mega-menu/demo-preview/fashion-1-light.jpg"
                                                            alt="Fashion Store v.1">
                                                        <img class="position-relative z-2 d-none d-block-dark"
                                                            src="assets/img/mega-menu/demo-preview/fashion-1-dark.jpg"
                                                            alt="Fashion Store v.1">
                                                        <span
                                                            class="top-0 rounded position-absolute start-0 w-100 h-100 rounded-start-0 d-none-dark"
                                                            style="box-shadow: .875rem .5rem 2rem -.5rem #676f7b; opacity: .1"></span>
                                                        <span
                                                            class="top-0 rounded position-absolute start-0 w-100 h-100 rounded-start-0 d-none d-block-dark"
                                                            style="box-shadow: .875rem .5rem 1.875rem -.5rem #080b12; opacity: .25"></span>
                                                    </div>
                                                </a>
                                            </li>
                                            <li class="px-2 hover-effect-opacity mx-n2">
                                                <a class="mb-0 dropdown-item d-block" href="home-fashion-v2.html">
                                                    <span class="fw-medium">Fashion Store v.2</span>
                                                    <span class="d-block fs-xs text-body-secondary">Hero banner with
                                                        hotspots</span>
                                                    <div class="top-0 invisible px-2 pt-2 transition-none border rounded opacity-0 d-none d-lg-block hover-effect-target position-absolute start-100 bg-body border-light-subtle rounded-start-0 ms-n2"
                                                        style="width: 212px; height: calc(100% + 2px); margin-top: -1px">
                                                        <img class="position-relative z-2 d-none-dark"
                                                            src="assets/img/mega-menu/demo-preview/fashion-2-light.jpg"
                                                            alt="Fashion Store v.2">
                                                        <img class="position-relative z-2 d-none d-block-dark"
                                                            src="assets/img/mega-menu/demo-preview/fashion-2-dark.jpg"
                                                            alt="Fashion Store v.2">
                                                        <span
                                                            class="top-0 rounded position-absolute start-0 w-100 h-100 rounded-start-0 d-none-dark"
                                                            style="box-shadow: .875rem .5rem 2rem -.5rem #676f7b; opacity: .1"></span>
                                                        <span
                                                            class="top-0 rounded position-absolute start-0 w-100 h-100 rounded-start-0 d-none d-block-dark"
                                                            style="box-shadow: .875rem .5rem 1.875rem -.5rem #080b12; opacity: .25"></span>
                                                    </div>
                                                </a>
                                            </li>
                                            <li class="px-2 hover-effect-opacity mx-n2">
                                                <a class="mb-0 dropdown-item d-block" href="home-furniture.html">
                                                    <span class="fw-medium">Furniture Store</span>
                                                    <span class="d-block fs-xs text-body-secondary">Fancy product
                                                        carousel</span>
                                                    <div class="top-0 invisible px-2 pt-2 transition-none border rounded opacity-0 d-none d-lg-block hover-effect-target position-absolute start-100 bg-body border-light-subtle rounded-start-0 ms-n2"
                                                        style="width: 212px; height: calc(100% + 2px); margin-top: -1px">
                                                        <img class="position-relative z-2 d-none-dark"
                                                            src="assets/img/mega-menu/demo-preview/furniture-light.jpg"
                                                            alt="Furniture Store">
                                                        <img class="position-relative z-2 d-none d-block-dark"
                                                            src="assets/img/mega-menu/demo-preview/furniture-dark.jpg"
                                                            alt="Furniture Store">
                                                        <span
                                                            class="top-0 rounded position-absolute start-0 w-100 h-100 rounded-start-0 d-none-dark"
                                                            style="box-shadow: .875rem .5rem 2rem -.5rem #676f7b; opacity: .1"></span>
                                                        <span
                                                            class="top-0 rounded position-absolute start-0 w-100 h-100 rounded-start-0 d-none d-block-dark"
                                                            style="box-shadow: .875rem .5rem 1.875rem -.5rem #080b12; opacity: .25"></span>
                                                    </div>
                                                </a>
                                            </li>
                                            <li class="px-2 hover-effect-opacity mx-n2">
                                                <a class="mb-0 dropdown-item d-block" href="home-grocery.html">
                                                    <span class="fw-medium">Grocery Store</span>
                                                    <span class="d-block fs-xs text-body-secondary">Hero slider +
                                                        Category cards</span>
                                                    <div class="top-0 invisible px-2 pt-2 transition-none border rounded opacity-0 d-none d-lg-block hover-effect-target position-absolute start-100 bg-body border-light-subtle rounded-start-0 ms-n2"
                                                        style="width: 212px; height: calc(100% + 2px); margin-top: -1px">
                                                        <img class="position-relative z-2 d-none-dark"
                                                            src="assets/img/mega-menu/demo-preview/grocery-light.jpg"
                                                            alt="Grocery Store">
                                                        <img class="position-relative z-2 d-none d-block-dark"
                                                            src="assets/img/mega-menu/demo-preview/grocery-dark.jpg"
                                                            alt="Grocery Store">
                                                        <span
                                                            class="top-0 rounded position-absolute start-0 w-100 h-100 rounded-start-0 d-none-dark"
                                                            style="box-shadow: .875rem .5rem 2rem -.5rem #676f7b; opacity: .1"></span>
                                                        <span
                                                            class="top-0 rounded position-absolute start-0 w-100 h-100 rounded-start-0 d-none d-block-dark"
                                                            style="box-shadow: .875rem .5rem 1.875rem -.5rem #080b12; opacity: .25"></span>
                                                    </div>
                                                </a>
                                            </li>
                                        </ul>
                                    </li>
                                    <li class="nav-item dropdown position-static me-lg-n1 me-xl-0">
                                        <a class="nav-link dropdown-toggle active" aria-current="page"
                                            href="#" role="button" data-bs-toggle="dropdown"
                                            data-bs-trigger="hover" aria-expanded="false">Shop</a>
                                        <div class="p-4 dropdown-menu rounded-4">
                                            <div class="gap-4 d-flex flex-column flex-lg-row">
                                                <div style="min-width: 190px">
                                                    <div class="mb-2 h6">Electronics Store</div>
                                                    <ul class="gap-2 mt-0 nav flex-column">
                                                        <li class="pt-1 d-flex w-100">
                                                            <a class="p-0 nav-link animate-underline animate-target d-inline fw-normal text-truncate"
                                                                href="shop-categories-electronics.html">Categories
                                                                Page</a>
                                                        </li>
                                                        <li class="pt-1 d-flex w-100">
                                                            <a class="p-0 nav-link animate-underline animate-target d-inline fw-normal text-truncate"
                                                                href="shop-catalog-electronics.html">Catalog with Side
                                                                Filters</a>
                                                        </li>
                                                        <li class="pt-1 d-flex w-100">
                                                            <a class="p-0 nav-link animate-underline animate-target d-inline fw-normal text-truncate"
                                                                href="shop-product-general-electronics.html">Product
                                                                General Info</a>
                                                        </li>
                                                        <li class="pt-1 d-flex w-100">
                                                            <a class="p-0 nav-link animate-underline animate-target d-inline fw-normal text-truncate"
                                                                href="shop-product-details-electronics.html">Product
                                                                Details</a>
                                                        </li>
                                                        <li class="pt-1 d-flex w-100">
                                                            <a class="p-0 nav-link animate-underline animate-target d-inline fw-normal text-truncate"
                                                                href="shop-product-reviews-electronics.html">Product
                                                                Reviews</a>
                                                        </li>
                                                    </ul>
                                                    <div class="pt-4 mb-2 h6">Fashion Store</div>
                                                    <ul class="gap-2 mt-0 nav flex-column">
                                                        <li class="pt-1 d-flex w-100">
                                                            <a class="p-0 nav-link animate-underline animate-target d-inline fw-normal text-truncate"
                                                                href="shop-catalog-fashion.html">Catalog with Side
                                                                Filters</a>
                                                        </li>
                                                        <li class="pt-1 d-flex w-100">
                                                            <a class="p-0 nav-link animate-underline animate-target d-inline fw-normal text-truncate"
                                                                href="shop-product-fashion.html">Product Page</a>
                                                        </li>
                                                    </ul>
                                                    <div class="pt-4 mb-2 h6">Furniture Store</div>
                                                    <ul class="gap-2 mt-0 nav flex-column">
                                                        <li class="pt-1 d-flex w-100">
                                                            <a class="p-0 nav-link animate-underline animate-target d-inline fw-normal text-truncate"
                                                                href="shop-catalog-furniture.html">Catalog with Top
                                                                Filters</a>
                                                        </li>
                                                        <li class="pt-1 d-flex w-100">
                                                            <a class="p-0 nav-link animate-underline animate-target d-inline fw-normal text-truncate"
                                                                href="shop-product-furniture.html">Product Page</a>
                                                        </li>
                                                    </ul>
                                                </div>
                                                <div style="min-width: 190px">
                                                    <div class="mb-2 h6">Grocery Store</div>
                                                    <ul class="gap-2 mt-0 nav flex-column">
                                                        <li class="pt-1 d-flex w-100">
                                                            <a class="p-0 nav-link animate-underline animate-target d-inline fw-normal text-truncate"
                                                                href="shop-catalog-grocery.html">Catalog with Side
                                                                Filters</a>
                                                        </li>
                                                        <li class="pt-1 d-flex w-100">
                                                            <a class="p-0 nav-link animate-underline animate-target d-inline fw-normal text-truncate"
                                                                href="shop-product-grocery.html">Product Page</a>
                                                        </li>
                                                    </ul>
                                                    <div class="pt-4 mb-2 h6">Checkout v.1</div>
                                                    <ul class="gap-2 mt-0 nav flex-column">
                                                        <li class="pt-1 d-flex w-100">
                                                            <a class="p-0 nav-link animate-underline animate-target d-inline fw-normal text-truncate"
                                                                href="checkout-v1-cart.html">Shopping Cart</a>
                                                        </li>
                                                        <li class="pt-1 d-flex w-100">
                                                            <a class="p-0 nav-link animate-underline animate-target d-inline fw-normal text-truncate"
                                                                href="checkout-v1-delivery-1.html">Delivery Info (Step
                                                                1)</a>
                                                        </li>
                                                        <li class="pt-1 d-flex w-100">
                                                            <a class="p-0 nav-link animate-underline animate-target d-inline fw-normal text-truncate"
                                                                href="checkout-v1-delivery-2.html">Delivery Info (Step
                                                                2)</a>
                                                        </li>
                                                        <li class="pt-1 d-flex w-100">
                                                            <a class="p-0 nav-link animate-underline animate-target d-inline fw-normal text-truncate"
                                                                href="checkout-v1-shipping.html">Shipping Address</a>
                                                        </li>
                                                        <li class="pt-1 d-flex w-100">
                                                            <a class="p-0 nav-link animate-underline animate-target d-inline fw-normal text-truncate"
                                                                href="checkout-v1-payment.html">Payment</a>
                                                        </li>
                                                        <li class="pt-1 d-flex w-100">
                                                            <a class="p-0 nav-link animate-underline animate-target d-inline fw-normal text-truncate"
                                                                href="checkout-v1-thankyou.html">Thank You Page</a>
                                                        </li>
                                                    </ul>
                                                </div>
                                                <div style="min-width: 190px">
                                                    <div class="mb-2 h6">Checkout v.2</div>
                                                    <ul class="gap-2 mt-0 nav flex-column">
                                                        <li class="pt-1 d-flex w-100">
                                                            <a class="p-0 nav-link animate-underline animate-target d-inline fw-normal text-truncate"
                                                                href="checkout-v2-cart.html">Shopping Cart</a>
                                                        </li>
                                                        <li class="pt-1 d-flex w-100">
                                                            <a class="p-0 nav-link animate-underline animate-target d-inline fw-normal text-truncate"
                                                                href="checkout-v2-delivery.html">Delivery Info</a>
                                                        </li>
                                                        <li class="pt-1 d-flex w-100">
                                                            <a class="p-0 nav-link animate-underline animate-target d-inline fw-normal text-truncate"
                                                                href="checkout-v2-pickup.html">Pickup from Store</a>
                                                        </li>
                                                        <li class="pt-1 d-flex w-100">
                                                            <a class="p-0 nav-link animate-underline animate-target d-inline fw-normal text-truncate"
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
                                        <a class="nav-link dropdown-toggle" href="#" role="button"
                                            data-bs-toggle="dropdown" data-bs-trigger="hover"
                                            data-bs-auto-close="outside" aria-expanded="false">Pages</a>
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
                                <hr class="my-3 d-lg-none">
                                <ul class="navbar-nav ms-auto">
                                    <li class="nav-item dropdown me-lg-n2 me-xl-n1">
                                        <a class="px-3 nav-link dropdown-toggle fs-sm" href="#!"
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
                                        <a class="px-3 nav-link dropdown-toggle fs-sm" href="#!"
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
                <div class="px-0 py-3 mt-3 offcanvas-header border-top d-md-none">
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
                <li class="breadcrumb-item active" aria-current="page">Catalog with sidebar filters</li>
            </ol>
        </nav>


        <!-- Page title -->
        <h1 class="container mb-4 h3">Shop catalog</h1>


        <!-- Banners that are turned into collaspse on screens < 768px wide (sm breakpoint) -->
        <section class="container pb-4 accordion pb-md-5 mb-xl-3">
            <div class="border-0 accordion-item">
                <div class="accordion-header d-md-none" id="offersHeading">
                    <button type="button"
                        class="w-auto px-3 py-2 border border-opacity-50 border-dashed rounded accordion-button fw-medium collapsed border-danger"
                        data-bs-toggle="collapse" data-bs-target="#offers" aria-expanded="false"
                        aria-controls="offers">
                        <span class="d-inline-flex ci-percent fs-lg text-danger rounded-circle me-2"></span>
                        <span class="me-2">See latest offers</span>
                    </button>
                </div>
                <div class="accordion-collapse collapse d-md-block" id="offers"
                    aria-labelledby="offersHeading">
                    <div class="pt-3 row g-3 g-lg-4 pt-md-0">
                        <div class="col-md-7">
                            <div
                                class="px-5 overflow-hidden position-relative d-flex flex-column flex-sm-row align-items-center h-100 rounded-5 px-sm-0 pe-sm-4">
                                <span class="top-0 position-absolute start-0 w-100 h-100 d-none-dark rtl-flip"
                                    style="background: linear-gradient(90deg, #accbee 0%, #e7f0fd 100%)"></span>
                                <span class="top-0 position-absolute start-0 w-100 h-100 d-none d-block-dark rtl-flip"
                                    style="background: linear-gradient(90deg, #1b273a 0%, #1f2632 100%)"></span>
                                <div
                                    class="pt-4 mt-2 text-center position-relative z-1 text-sm-start pt-sm-0 ps-xl-4 mt-sm-0 order-sm-2">
                                    <h2 class="mb-2 h3">iPhone 14</h2>
                                    <p class="fs-sm text-light-emphasis mb-sm-4">Apple iPhone 14 128GB Blue</p>
                                    <a class="btn btn-primary" href="shop-product-general-electronics.html">
                                        From $899
                                        <i class="ci-arrow-up-right fs-base ms-1 me-n1"></i>
                                    </a>
                                </div>
                                <div class="position-relative z-1 w-100 align-self-end order-sm-1"
                                    style="max-width: 416px">
                                    <div class="ratio rtl-flip" style="--cz-aspect-ratio: calc(320 / 416 * 100%)">
                                        <img src="assets/img/shop/electronics/banners/iphone-1.png" alt="iPhone 14">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-5">
                            <div
                                class="pt-3 overflow-hidden position-relative d-flex flex-column align-items-center justify-content-between h-100 rounded-5">
                                <span class="top-0 position-absolute start-0 w-100 h-100 d-none-dark rtl-flip"
                                    style="background: linear-gradient(90deg, #fdcbf1 0%, #fdcbf1 1%, #ffecfa 100%)"></span>
                                <span class="top-0 position-absolute start-0 w-100 h-100 d-none d-block-dark rtl-flip"
                                    style="background: linear-gradient(90deg, #362131 0%, #322730 100%)"></span>
                                <div class="pt-3 mx-4 text-center position-relative z-1">
                                    <i class="mb-3 ci-apple text-body-emphasis fs-3"></i>
                                    <p class="mb-1 fs-sm text-light-emphasis">Deal of the week</p>
                                    <h2 class="mb-4 h3">iPad Pro M1</h2>
                                </div>
                                <a class="position-relative z-1 d-block w-100"
                                    href="shop-product-general-electronics.html">
                                    <div class="ratio" style="--cz-aspect-ratio: calc(159 / 525 * 100%)">
                                        <img src="assets/img/shop/electronics/banners/ipad.png" width="525"
                                            alt="iPad">
                                    </div>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>


        <!-- Selected filters + Sorting -->
        <section class="container mb-4">
            <div class="row">
                <div class="col-lg-9">
                    <div class="d-md-flex align-items-start">
                        <div class="mt-3 mb-0 h6 fs-sm fw-normal text-nowrap translate-middle-y me-4">Found <span
                                class="fw-semibold">732</span> items</div>
                        <div class="flex-wrap gap-2 d-flex">
                            <button type="button" class="btn btn-sm btn-secondary">
                                <i class="ci-close fs-sm ms-n1 me-1"></i>
                                Sale
                            </button>
                            <button type="button" class="btn btn-sm btn-secondary">
                                <i class="ci-close fs-sm ms-n1 me-1"></i>
                                Asus
                            </button>
                            <button type="button" class="btn btn-sm btn-secondary">
                                <i class="ci-close fs-sm ms-n1 me-1"></i>
                                1 TB
                            </button>
                            <button type="button" class="btn btn-sm btn-secondary">
                                <i class="ci-close fs-sm ms-n1 me-1"></i>
                                $340 - $1,250
                            </button>
                            <button type="button"
                                class="px-0 bg-transparent border-0 btn btn-sm btn-secondary text-decoration-underline ms-2">
                                Clear all
                            </button>
                        </div>
                    </div>
                </div>
                <div class="mt-3 col-lg-3 mt-lg-0">
                    <div class="d-flex align-items-center justify-content-lg-end text-nowrap">
                        <label class="mb-0 form-label fw-semibold me-2">Sort by:</label>
                        <div style="width: 190px">
                            <select class="px-1 border-0 form-select rounded-0"
                                data-select="{
                  &quot;removeItemButton&quot;: false,
                  &quot;classNames&quot;: {
                    &quot;containerInner&quot;: &quot;form-select border-0 rounded-0 px-1&quot;
                  }
                }">
                                <option value="Relevance">Relevance</option>
                                <option value="Popularity">Popularity</option>
                                <option value="Price: Low to High">Price: Low to High</option>
                                <option value="Price: High to Low">Price: High to Low</option>
                                <option value="Newest Arrivals">Newest Arrivals</option>
                            </select>
                        </div>
                    </div>
                </div>
            </div>
            <hr class="my-3 d-lg-none">
        </section>


        <!-- Products grid + Sidebar with filters -->
        <section class="container pb-5 mb-sm-2 mb-md-3 mb-lg-4 mb-xl-5">
            <div class="row">

                <!-- Filter sidebar that turns into offcanvas on screens < 992px wide (lg breakpoint) -->
                <aside class="col-lg-3">
                    <div class="offcanvas-lg offcanvas-start" id="filterSidebar">
                        <div class="py-3 offcanvas-header">
                            <h5 class="offcanvas-title">Filter and sort</h5>
                            <button type="button" class="btn-close" data-bs-dismiss="offcanvas"
                                data-bs-target="#filterSidebar" aria-label="Close"></button>
                        </div>
                        <div class="pt-2 offcanvas-body flex-column py-lg-0">

                            <!-- Status -->
                            <div class="p-3 mb-3 border rounded w-100 p-xl-4 mb-xl-4">
                                <h4 class="h6">Status</h4>
                                <div class="flex-wrap gap-2 d-flex">
                                    <button type="button" class="btn btn-sm btn-outline-secondary">
                                        <i class="ci-percent fs-sm me-1 ms-n1"></i>
                                        Sale
                                    </button>
                                    <button type="button" class="btn btn-sm btn-outline-secondary">Same Day
                                        Delivery</button>
                                    <button type="button" class="btn btn-sm btn-outline-secondary">Available to
                                        Order</button>
                                </div>
                            </div>

                            <!-- Categories -->
                            <div class="p-3 mb-3 border rounded w-100 p-xl-4 mb-xl-4">
                                <h4 class="mb-2 h6">Categories</h4>
                                <ul class="m-0 list-unstyled d-block">
                                    <li class="pt-2 mt-1 nav d-block">
                                        <a class="p-0 nav-link animate-underline fw-normal" href="#!">
                                            <span class="animate-target text-truncate me-3">Smartphones</span>
                                            <span class="text-body-secondary fs-xs ms-auto">218</span>
                                        </a>
                                    </li>
                                    <li class="pt-2 mt-1 nav d-block">
                                        <a class="p-0 nav-link animate-underline fw-normal" href="#!">
                                            <span class="animate-target text-truncate me-3">Accessories</span>
                                            <span class="text-body-secondary fs-xs ms-auto">372</span>
                                        </a>
                                    </li>
                                    <li class="pt-2 mt-1 nav d-block">
                                        <a class="p-0 nav-link animate-underline fw-normal" href="#!">
                                            <span class="animate-target text-truncate me-3">Tablets</span>
                                            <span class="text-body-secondary fs-xs ms-auto">110</span>
                                        </a>
                                    </li>
                                    <li class="pt-2 mt-1 nav d-block">
                                        <a class="p-0 nav-link animate-underline fw-normal" href="#!">
                                            <span class="animate-target text-truncate me-3">Wearable
                                                Electronics</span>
                                            <span class="text-body-secondary fs-xs ms-auto">142</span>
                                        </a>
                                    </li>
                                    <li class="pt-2 mt-1 nav d-block">
                                        <a class="p-0 nav-link animate-underline fw-normal" href="#!">
                                            <span class="animate-target text-truncate me-3">Computers &amp;
                                                Laptops</span>
                                            <span class="text-body-secondary fs-xs ms-auto">205</span>
                                        </a>
                                    </li>
                                    <li class="pt-2 mt-1 nav d-block">
                                        <a class="p-0 nav-link animate-underline fw-normal" href="#!">
                                            <span class="animate-target text-truncate me-3">Cameras, Photo &amp;
                                                Video</span>
                                            <span class="text-body-secondary fs-xs ms-auto">78</span>
                                        </a>
                                    </li>
                                    <li class="pt-2 mt-1 nav d-block">
                                        <a class="p-0 nav-link animate-underline fw-normal" href="#!">
                                            <span class="animate-target text-truncate me-3">Headphones</span>
                                            <span class="text-body-secondary fs-xs ms-auto">121</span>
                                        </a>
                                    </li>
                                    <li class="pt-2 mt-1 nav d-block">
                                        <a class="p-0 nav-link animate-underline fw-normal" href="#!">
                                            <span class="animate-target text-truncate me-3">Video Games</span>
                                            <span class="text-body-secondary fs-xs ms-auto">89</span>
                                        </a>
                                    </li>
                                </ul>
                            </div>

                            <!-- Price range -->
                            <div class="p-3 mb-3 border rounded w-100 p-xl-4 mb-xl-4">
                                <h4 class="mb-2 h6" id="slider-label">Price</h4>
                                <div class="range-slider"
                                    data-range-slider="{&quot;startMin&quot;: 340, &quot;startMax&quot;: 1250, &quot;min&quot;: 0, &quot;max&quot;: 1600, &quot;step&quot;: 1, &quot;tooltipPrefix&quot;: &quot;$&quot;}"
                                    aria-labelledby="slider-label">
                                    <div class="range-slider-ui"></div>
                                    <div class="d-flex align-items-center">
                                        <div class="position-relative w-50">
                                            <i
                                                class="ci-dollar-sign position-absolute top-50 start-0 translate-middle-y ms-3"></i>
                                            <input type="number" class="form-control form-icon-start"
                                                min="0" data-range-slider-min="">
                                        </div>
                                        <i class="mx-2 ci-minus text-body-emphasis"></i>
                                        <div class="position-relative w-50">
                                            <i
                                                class="ci-dollar-sign position-absolute top-50 start-0 translate-middle-y ms-3"></i>
                                            <input type="number" class="form-control form-icon-start"
                                                min="0" data-range-slider-max="">
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!-- Brand (checkboxes) -->
                            <div class="p-3 mb-3 border rounded w-100 p-xl-4 mb-xl-4">
                                <h4 class="h6">Brand</h4>
                                <div class="gap-1 d-flex flex-column">
                                    <div class="d-flex align-items-center justify-content-between">
                                        <div class="form-check">
                                            <input type="checkbox" class="form-check-input" id="apple"
                                                checked="">
                                            <label for="apple"
                                                class="form-check-label text-body-emphasis">Apple</label>
                                        </div>
                                        <span class="text-body-secondary fs-xs">64</span>
                                    </div>
                                    <div class="d-flex align-items-center justify-content-between">
                                        <div class="form-check">
                                            <input type="checkbox" class="form-check-input" id="asus">
                                            <label for="asus"
                                                class="form-check-label text-body-emphasis">Asus</label>
                                        </div>
                                        <span class="text-body-secondary fs-xs">310</span>
                                    </div>
                                    <div class="d-flex align-items-center justify-content-between">
                                        <div class="form-check">
                                            <input type="checkbox" class="form-check-input" id="bao">
                                            <label for="bao" class="form-check-label text-body-emphasis">Bang
                                                &amp; Olufsen</label>
                                        </div>
                                        <span class="text-body-secondary fs-xs">47</span>
                                    </div>
                                    <div class="d-flex align-items-center justify-content-between">
                                        <div class="form-check">
                                            <input type="checkbox" class="form-check-input" id="bosh">
                                            <label for="bosh"
                                                class="form-check-label text-body-emphasis">Bosh</label>
                                        </div>
                                        <span class="text-body-secondary fs-xs">112</span>
                                    </div>
                                    <div class="d-flex align-items-center justify-content-between">
                                        <div class="form-check">
                                            <input type="checkbox" class="form-check-input" id="cobra">
                                            <label for="cobra"
                                                class="form-check-label text-body-emphasis">Cobra</label>
                                        </div>
                                        <span class="text-body-secondary fs-xs">96</span>
                                    </div>
                                    <div class="d-flex align-items-center justify-content-between">
                                        <div class="form-check">
                                            <input type="checkbox" class="form-check-input" id="dell">
                                            <label for="dell"
                                                class="form-check-label text-body-emphasis">Dell</label>
                                        </div>
                                        <span class="text-body-secondary fs-xs">178</span>
                                    </div>
                                    <div class="d-flex align-items-center justify-content-between">
                                        <div class="form-check">
                                            <input type="checkbox" class="form-check-input" id="foxconn">
                                            <label for="foxconn"
                                                class="form-check-label text-body-emphasis">Foxconn</label>
                                        </div>
                                        <span class="text-body-secondary fs-xs">95</span>
                                    </div>
                                    <div class="accordion mb-n2">
                                        <div class="border-0 accordion-item">
                                            <div class="accordion-collapse collapse" id="more-brands">
                                                <div class="gap-1 d-flex flex-column">
                                                    <div class="d-flex align-items-center justify-content-between">
                                                        <div class="form-check">
                                                            <input type="checkbox" class="form-check-input"
                                                                id="hp">
                                                            <label for="hp"
                                                                class="form-check-label text-body-emphasis">Hewlett
                                                                Packard</label>
                                                        </div>
                                                        <span class="text-body-secondary fs-xs">61</span>
                                                    </div>
                                                    <div class="d-flex align-items-center justify-content-between">
                                                        <div class="form-check">
                                                            <input type="checkbox" class="form-check-input"
                                                                id="huawei">
                                                            <label for="huawei"
                                                                class="form-check-label text-body-emphasis">Huawei</label>
                                                        </div>
                                                        <span class="text-body-secondary fs-xs">417</span>
                                                    </div>
                                                    <div class="d-flex align-items-center justify-content-between">
                                                        <div class="form-check">
                                                            <input type="checkbox" class="form-check-input"
                                                                id="panasonic">
                                                            <label for="panasonic"
                                                                class="form-check-label text-body-emphasis">Panasonic</label>
                                                        </div>
                                                        <span class="text-body-secondary fs-xs">123</span>
                                                    </div>
                                                    <div class="d-flex align-items-center justify-content-between">
                                                        <div class="form-check">
                                                            <input type="checkbox" class="form-check-input"
                                                                id="samsung">
                                                            <label for="samsung"
                                                                class="form-check-label text-body-emphasis">Samsung</label>
                                                        </div>
                                                        <span class="text-body-secondary fs-xs">284</span>
                                                    </div>
                                                    <div class="d-flex align-items-center justify-content-between">
                                                        <div class="form-check">
                                                            <input type="checkbox" class="form-check-input"
                                                                id="sony">
                                                            <label for="sony"
                                                                class="form-check-label text-body-emphasis">Sony</label>
                                                        </div>
                                                        <span class="text-body-secondary fs-xs">133</span>
                                                    </div>
                                                    <div class="d-flex align-items-center justify-content-between">
                                                        <div class="form-check">
                                                            <input type="checkbox" class="form-check-input"
                                                                id="toshiba">
                                                            <label for="toshiba"
                                                                class="form-check-label text-body-emphasis">Toshiba</label>
                                                        </div>
                                                        <span class="text-body-secondary fs-xs">39</span>
                                                    </div>
                                                    <div class="d-flex align-items-center justify-content-between">
                                                        <div class="form-check">
                                                            <input type="checkbox" class="form-check-input"
                                                                id="xiaomi">
                                                            <label for="xiaomi"
                                                                class="form-check-label text-body-emphasis">Xiaomi</label>
                                                        </div>
                                                        <span class="text-body-secondary fs-xs">421</span>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="accordion-header">
                                                <button type="button"
                                                    class="w-auto py-2 accordion-button fs-sm fw-medium collapsed animate-underline"
                                                    data-bs-toggle="collapse" data-bs-target="#more-brands"
                                                    aria-expanded="false" aria-controls="more-brands"
                                                    aria-label="Show/hide more brands">
                                                    <span class="animate-target me-2"
                                                        data-label-collapsed="Show all"
                                                        data-label-expanded="Show less"></span>
                                                </button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!-- SSD size (checkboxes) -->
                            <div class="p-3 mb-3 border rounded w-100 p-xl-4 mb-xl-4">
                                <h4 class="h6">SSD size</h4>
                                <div class="gap-1 d-flex flex-column">
                                    <div class="d-flex align-items-center justify-content-between">
                                        <div class="form-check">
                                            <input type="checkbox" class="form-check-input" id="tb-2">
                                            <label for="tb-2" class="form-check-label text-body-emphasis">2
                                                TB</label>
                                        </div>
                                        <span class="text-body-secondary fs-xs">13</span>
                                    </div>
                                    <div class="d-flex align-items-center justify-content-between">
                                        <div class="form-check">
                                            <input type="checkbox" class="form-check-input" id="tb-1">
                                            <label for="tb-1" class="form-check-label text-body-emphasis">1
                                                TB</label>
                                        </div>
                                        <span class="text-body-secondary fs-xs">28</span>
                                    </div>
                                    <div class="d-flex align-items-center justify-content-between">
                                        <div class="form-check">
                                            <input type="checkbox" class="form-check-input" id="gb-512"
                                                checked="">
                                            <label for="gb-512" class="form-check-label text-body-emphasis">512
                                                GB</label>
                                        </div>
                                        <span class="text-body-secondary fs-xs">47</span>
                                    </div>
                                    <div class="d-flex align-items-center justify-content-between">
                                        <div class="form-check">
                                            <input type="checkbox" class="form-check-input" id="gb-256">
                                            <label for="gb-256" class="form-check-label text-body-emphasis">256
                                                GB</label>
                                        </div>
                                        <span class="text-body-secondary fs-xs">56</span>
                                    </div>
                                    <div class="d-flex align-items-center justify-content-between">
                                        <div class="form-check">
                                            <input type="checkbox" class="form-check-input" id="gb-128">
                                            <label for="gb-128" class="form-check-label text-body-emphasis">128
                                                GB</label>
                                        </div>
                                        <span class="text-body-secondary fs-xs">69</span>
                                    </div>
                                    <div class="d-flex align-items-center justify-content-between">
                                        <div class="form-check">
                                            <input type="checkbox" class="form-check-input" id="gb-64">
                                            <label for="gb-64" class="form-check-label text-body-emphasis">64 GB
                                                or less</label>
                                        </div>
                                        <span class="text-body-secondary fs-xs">141</span>
                                    </div>
                                </div>
                            </div>

                            <!-- Color -->
                            <div class="p-3 border rounded w-100 p-xl-4">
                                <h4 class="h6">Color</h4>
                                <div class="nav d-block mt-n2">
                                    <button type="button"
                                        class="w-auto px-0 pt-2 pb-0 nav-link animate-underline fw-normal">
                                        <span class="rounded-circle me-2"
                                            style="width: .875rem; height: .875rem; margin-top: .125rem; background-color: #8bc4ab"></span>
                                        <span class="animate-target">Green</span>
                                    </button>
                                    <button type="button"
                                        class="w-auto px-0 pt-2 pb-0 mt-1 nav-link animate-underline fw-normal">
                                        <span class="rounded-circle me-2"
                                            style="width: .875rem; height: .875rem; margin-top: .125rem; background-color: #ee7976"></span>
                                        <span class="animate-target">Coral red</span>
                                    </button>
                                    <button type="button"
                                        class="w-auto px-0 pt-2 pb-0 mt-1 nav-link animate-underline fw-normal">
                                        <span class="rounded-circle me-2"
                                            style="width: .875rem; height: .875rem; margin-top: .125rem; background-color: #df8fbf"></span>
                                        <span class="animate-target">Light pink</span>
                                    </button>
                                    <button type="button"
                                        class="w-auto px-0 pt-2 pb-0 mt-1 nav-link animate-underline fw-normal">
                                        <span class="rounded-circle me-2"
                                            style="width: .875rem; height: .875rem; margin-top: .125rem; background-color: #9acbf1"></span>
                                        <span class="animate-target">Sky blue</span>
                                    </button>
                                    <button type="button"
                                        class="w-auto px-0 pt-2 pb-0 mt-1 nav-link animate-underline fw-normal">
                                        <span class="rounded-circle me-2"
                                            style="width: .875rem; height: .875rem; margin-top: .125rem; background-color: #364254"></span>
                                        <span class="animate-target">Black</span>
                                    </button>
                                    <button type="button"
                                        class="w-auto px-0 pt-2 pb-0 mt-1 nav-link animate-underline fw-normal">
                                        <span class="border rounded-circle me-2"
                                            style="width: .875rem; height: .875rem; margin-top: .125rem; background-color: #ffffff"></span>
                                        <span class="animate-target">White</span>
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                </aside>


                <!-- Product grid -->
                <div class="col-lg-9">
                    <div class="pb-3 mb-3 row row-cols-2 row-cols-md-3 g-4">

                        <!-- Item -->
                        <div class="col">
                            <div class="rounded product-card animate-underline hover-effect-opacity bg-body">
                                <div class="position-relative">
                                    <div
                                        class="top-0 mt-3 opacity-0 position-absolute end-0 z-2 hover-effect-target me-3">
                                        <div class="gap-2 d-flex flex-column">
                                            <button type="button"
                                                class="btn btn-icon btn-secondary animate-pulse d-none d-lg-inline-flex"
                                                aria-label="Add to Wishlist">
                                                <i class="ci-heart fs-base animate-target"></i>
                                            </button>
                                            <button type="button"
                                                class="btn btn-icon btn-secondary animate-rotate d-none d-lg-inline-flex"
                                                aria-label="Compare">
                                                <i class="ci-refresh-cw fs-base animate-target"></i>
                                            </button>
                                        </div>
                                    </div>
                                    <div class="top-0 mt-2 dropdown d-lg-none position-absolute end-0 z-2 me-2">
                                        <button type="button" class="btn btn-icon btn-sm btn-secondary bg-body"
                                            data-bs-toggle="dropdown" aria-expanded="false"
                                            aria-label="More actions">
                                            <i class="ci-more-vertical fs-lg"></i>
                                        </button>
                                        <ul class="p-2 dropdown-menu dropdown-menu-end fs-xs"
                                            style="min-width: auto">
                                            <li>
                                                <a class="dropdown-item" href="#!">
                                                    <i class="ci-heart fs-sm ms-n1 me-2"></i>
                                                    Add to Wishlist
                                                </a>
                                            </li>
                                            <li>
                                                <a class="dropdown-item" href="#!">
                                                    <i class="ci-refresh-cw fs-sm ms-n1 me-2"></i>
                                                    Compare
                                                </a>
                                            </li>
                                        </ul>
                                    </div>
                                    <a class="p-3 overflow-hidden d-block rounded-top p-sm-4"
                                        href="shop-product-general-electronics.html">
                                        <span
                                            class="top-0 mt-2 badge bg-danger position-absolute start-0 ms-2 mt-lg-3 ms-lg-3">-21%</span>
                                        <div class="ratio" style="--cz-aspect-ratio: calc(240 / 258 * 100%)">
                                            <img src="assets/img/shop/electronics/01.png" alt="VR Glasses">
                                        </div>
                                    </a>
                                </div>
                                <div class="min-w-0 px-1 pb-2 w-100 px-sm-3 pb-sm-3">
                                    <div class="gap-2 mb-2 d-flex align-items-center">
                                        <div class="gap-1 d-flex fs-xs">
                                            <i class="ci-star-filled text-warning"></i>
                                            <i class="ci-star-filled text-warning"></i>
                                            <i class="ci-star-filled text-warning"></i>
                                            <i class="ci-star-filled text-warning"></i>
                                            <i class="opacity-75 ci-star text-body-tertiary"></i>
                                        </div>
                                        <span class="text-body-tertiary fs-xs">(123)</span>
                                    </div>
                                    <h3 class="pb-1 mb-2">
                                        <a class="d-block fs-sm fw-medium text-truncate"
                                            href="shop-product-general-electronics.html">
                                            <span class="animate-target">VRB01 Virtual Reality Glasses</span>
                                        </a>
                                    </h3>
                                    <div class="d-flex align-items-center justify-content-between">
                                        <div class="mb-0 h5 lh-1">$340.99 <del
                                                class="text-body-tertiary fs-sm fw-normal">$430.00</del></div>
                                        <button type="button"
                                            class="product-card-button btn btn-icon btn-secondary animate-slide-end ms-2"
                                            aria-label="Add to Cart">
                                            <i class="ci-shopping-cart fs-base animate-target"></i>
                                        </button>
                                    </div>
                                </div>
                                <div
                                    class="p-3 pt-1 shadow product-card-details position-absolute top-100 start-0 w-100 bg-body rounded-bottom mt-n2">
                                    <span class="top-0 py-2 position-absolute start-0 w-100 bg-body mt-n2"></span>
                                    <ul class="gap-2 m-0 list-unstyled d-flex flex-column">
                                        <li class="d-flex align-items-center">
                                            <span class="fs-xs">Display:</span>
                                            <span
                                                class="px-1 mx-2 mt-2 border-dashed d-block flex-grow-1 border-bottom"></span>
                                            <span class="text-dark-emphasis fs-xs fw-medium text-end">OLED
                                                1440x1600</span>
                                        </li>
                                        <li class="d-flex align-items-center">
                                            <span class="fs-xs">Graphics:</span>
                                            <span
                                                class="px-1 mx-2 mt-2 border-dashed d-block flex-grow-1 border-bottom"></span>
                                            <span class="text-dark-emphasis fs-xs fw-medium text-end">Adreno
                                                540</span>
                                        </li>
                                        <li class="d-flex align-items-center">
                                            <span class="fs-xs">Sound:</span>
                                            <span
                                                class="px-1 mx-2 mt-2 border-dashed d-block flex-grow-1 border-bottom"></span>
                                            <span class="text-dark-emphasis fs-xs fw-medium text-end">2x3.5mm
                                                jack</span>
                                        </li>
                                        <li class="d-flex align-items-center">
                                            <span class="fs-xs">Input:</span>
                                            <span
                                                class="px-1 mx-2 mt-2 border-dashed d-block flex-grow-1 border-bottom"></span>
                                            <span class="text-dark-emphasis fs-xs fw-medium text-end">4 built-in
                                                cameras</span>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>

                        <!-- Item -->
                        <div class="col">
                            <div class="rounded product-card animate-underline hover-effect-opacity bg-body">
                                <div class="position-relative">
                                    <div
                                        class="top-0 mt-3 opacity-0 position-absolute end-0 z-2 hover-effect-target me-3">
                                        <div class="gap-2 d-flex flex-column">
                                            <button type="button"
                                                class="btn btn-icon btn-secondary animate-pulse d-none d-lg-inline-flex"
                                                aria-label="Add to Wishlist">
                                                <i class="ci-heart fs-base animate-target"></i>
                                            </button>
                                            <button type="button"
                                                class="btn btn-icon btn-secondary animate-rotate d-none d-lg-inline-flex"
                                                aria-label="Compare">
                                                <i class="ci-refresh-cw fs-base animate-target"></i>
                                            </button>
                                        </div>
                                    </div>
                                    <div class="top-0 mt-2 dropdown d-lg-none position-absolute end-0 z-2 me-2">
                                        <button type="button" class="btn btn-icon btn-sm btn-secondary bg-body"
                                            data-bs-toggle="dropdown" aria-expanded="false"
                                            aria-label="More actions">
                                            <i class="ci-more-vertical fs-lg"></i>
                                        </button>
                                        <ul class="p-2 dropdown-menu dropdown-menu-end fs-xs"
                                            style="min-width: auto">
                                            <li>
                                                <a class="dropdown-item" href="#!">
                                                    <i class="ci-heart fs-sm ms-n1 me-2"></i>
                                                    Add to Wishlist
                                                </a>
                                            </li>
                                            <li>
                                                <a class="dropdown-item" href="#!">
                                                    <i class="ci-refresh-cw fs-sm ms-n1 me-2"></i>
                                                    Compare
                                                </a>
                                            </li>
                                        </ul>
                                    </div>
                                    <a class="p-3 overflow-hidden d-block rounded-top p-sm-4"
                                        href="shop-product-general-electronics.html">
                                        <div class="ratio" style="--cz-aspect-ratio: calc(240 / 258 * 100%)">
                                            <img src="assets/img/shop/electronics/02.png" alt="iPhone 14">
                                        </div>
                                    </a>
                                </div>
                                <div class="min-w-0 px-1 pb-2 w-100 px-sm-3 pb-sm-3">
                                    <div class="gap-2 mb-2 d-flex align-items-center">
                                        <div class="gap-1 d-flex fs-xs">
                                            <i class="ci-star-filled text-warning"></i>
                                            <i class="ci-star-filled text-warning"></i>
                                            <i class="ci-star-filled text-warning"></i>
                                            <i class="ci-star-filled text-warning"></i>
                                            <i class="ci-star-half text-warning"></i>
                                        </div>
                                        <span class="text-body-tertiary fs-xs">(142)</span>
                                    </div>
                                    <h3 class="pb-1 mb-2">
                                        <a class="d-block fs-sm fw-medium text-truncate"
                                            href="shop-product-general-electronics.html">
                                            <span class="animate-target">Apple iPhone 14 128GB White</span>
                                        </a>
                                    </h3>
                                    <div class="d-flex align-items-center justify-content-between">
                                        <div class="mb-0 h5 lh-1">$899.00</div>
                                        <button type="button"
                                            class="product-card-button btn btn-icon btn-secondary animate-slide-end ms-2"
                                            aria-label="Add to Cart">
                                            <i class="ci-shopping-cart fs-base animate-target"></i>
                                        </button>
                                    </div>
                                </div>
                                <div
                                    class="p-3 pt-1 shadow product-card-details position-absolute top-100 start-0 w-100 bg-body rounded-bottom mt-n2">
                                    <span class="top-0 py-2 position-absolute start-0 w-100 bg-body mt-n2"></span>
                                    <ul class="gap-2 m-0 list-unstyled d-flex flex-column">
                                        <li class="d-flex align-items-center">
                                            <span class="fs-xs">Display:</span>
                                            <span
                                                class="px-1 mx-2 mt-2 border-dashed d-block flex-grow-1 border-bottom"></span>
                                            <span class="text-dark-emphasis fs-xs fw-medium text-end">6.1" XDR</span>
                                        </li>
                                        <li class="d-flex align-items-center">
                                            <span class="fs-xs">Capacity:</span>
                                            <span
                                                class="px-1 mx-2 mt-2 border-dashed d-block flex-grow-1 border-bottom"></span>
                                            <span class="text-dark-emphasis fs-xs fw-medium text-end">128 GB</span>
                                        </li>
                                        <li class="d-flex align-items-center">
                                            <span class="fs-xs">Chip:</span>
                                            <span
                                                class="px-1 mx-2 mt-2 border-dashed d-block flex-grow-1 border-bottom"></span>
                                            <span class="text-dark-emphasis fs-xs fw-medium text-end">A15
                                                Bionic</span>
                                        </li>
                                        <li class="d-flex align-items-center">
                                            <span class="fs-xs">Camera:</span>
                                            <span
                                                class="px-1 mx-2 mt-2 border-dashed d-block flex-grow-1 border-bottom"></span>
                                            <span class="text-dark-emphasis fs-xs fw-medium text-end">12 + 12
                                                MP</span>
                                        </li>
                                        <li class="d-flex align-items-center">
                                            <span class="fs-xs">Weight:</span>
                                            <span
                                                class="px-1 mx-2 mt-2 border-dashed d-block flex-grow-1 border-bottom"></span>
                                            <span class="text-dark-emphasis fs-xs fw-medium text-end">172 grams</span>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>

                        <!-- Item -->
                        <div class="col">
                            <div class="rounded product-card animate-underline hover-effect-opacity bg-body">
                                <div class="position-relative">
                                    <div
                                        class="top-0 mt-3 opacity-0 position-absolute end-0 z-2 hover-effect-target me-3">
                                        <div class="gap-2 d-flex flex-column">
                                            <button type="button"
                                                class="btn btn-icon btn-secondary animate-pulse d-none d-lg-inline-flex"
                                                aria-label="Add to Wishlist">
                                                <i class="ci-heart fs-base animate-target"></i>
                                            </button>
                                            <button type="button"
                                                class="btn btn-icon btn-secondary animate-rotate d-none d-lg-inline-flex"
                                                aria-label="Compare">
                                                <i class="ci-refresh-cw fs-base animate-target"></i>
                                            </button>
                                        </div>
                                    </div>
                                    <div class="top-0 mt-2 dropdown d-lg-none position-absolute end-0 z-2 me-2">
                                        <button type="button" class="btn btn-icon btn-sm btn-secondary bg-body"
                                            data-bs-toggle="dropdown" aria-expanded="false"
                                            aria-label="More actions">
                                            <i class="ci-more-vertical fs-lg"></i>
                                        </button>
                                        <ul class="p-2 dropdown-menu dropdown-menu-end fs-xs"
                                            style="min-width: auto">
                                            <li>
                                                <a class="dropdown-item" href="#!">
                                                    <i class="ci-heart fs-sm ms-n1 me-2"></i>
                                                    Add to Wishlist
                                                </a>
                                            </li>
                                            <li>
                                                <a class="dropdown-item" href="#!">
                                                    <i class="ci-refresh-cw fs-sm ms-n1 me-2"></i>
                                                    Compare
                                                </a>
                                            </li>
                                        </ul>
                                    </div>
                                    <a class="p-3 overflow-hidden d-block rounded-top p-sm-4"
                                        href="shop-product-general-electronics.html">
                                        <div class="ratio" style="--cz-aspect-ratio: calc(240 / 258 * 100%)">
                                            <img src="assets/img/shop/electronics/03.png" alt="Smart Watch">
                                        </div>
                                    </a>
                                </div>
                                <div class="min-w-0 px-1 pb-2 w-100 px-sm-3 pb-sm-3">
                                    <div class="gap-2 mb-2 d-flex align-items-center">
                                        <div class="gap-1 d-flex fs-xs">
                                            <i class="ci-star-filled text-warning"></i>
                                            <i class="ci-star-filled text-warning"></i>
                                            <i class="ci-star-filled text-warning"></i>
                                            <i class="ci-star-filled text-warning"></i>
                                            <i class="ci-star-filled text-warning"></i>
                                        </div>
                                        <span class="text-body-tertiary fs-xs">(67)</span>
                                    </div>
                                    <h3 class="pb-1 mb-2">
                                        <a class="d-block fs-sm fw-medium text-truncate"
                                            href="shop-product-general-electronics.html">
                                            <span class="animate-target">Smart Watch Series 7, White</span>
                                        </a>
                                    </h3>
                                    <div class="d-flex align-items-center justify-content-between">
                                        <div class="mb-0 h5 lh-1">$429.00</div>
                                        <button type="button"
                                            class="product-card-button btn btn-icon btn-secondary animate-slide-end ms-2"
                                            aria-label="Add to Cart">
                                            <i class="ci-shopping-cart fs-base animate-target"></i>
                                        </button>
                                    </div>
                                </div>
                                <div
                                    class="p-3 pt-1 shadow product-card-details position-absolute top-100 start-0 w-100 bg-body rounded-bottom mt-n2">
                                    <span class="top-0 py-2 position-absolute start-0 w-100 bg-body mt-n2"></span>
                                    <ul class="gap-2 m-0 list-unstyled d-flex flex-column">
                                        <li class="d-flex align-items-center">
                                            <span class="fs-xs">Display:</span>
                                            <span
                                                class="px-1 mx-2 mt-2 border-dashed d-block flex-grow-1 border-bottom"></span>
                                            <span class="text-dark-emphasis fs-xs fw-medium text-end">45mm OLED</span>
                                        </li>
                                        <li class="d-flex align-items-center">
                                            <span class="fs-xs">Chip:</span>
                                            <span
                                                class="px-1 mx-2 mt-2 border-dashed d-block flex-grow-1 border-bottom"></span>
                                            <span class="text-dark-emphasis fs-xs fw-medium text-end">64-bit
                                                Dual-core</span>
                                        </li>
                                        <li class="d-flex align-items-center">
                                            <span class="fs-xs">Connectivity:</span>
                                            <span
                                                class="px-1 mx-2 mt-2 border-dashed d-block flex-grow-1 border-bottom"></span>
                                            <span class="text-dark-emphasis fs-xs fw-medium text-end">Wi-Fi,
                                                Bluetooth</span>
                                        </li>
                                        <li class="d-flex align-items-center">
                                            <span class="fs-xs">Power:</span>
                                            <span
                                                class="px-1 mx-2 mt-2 border-dashed d-block flex-grow-1 border-bottom"></span>
                                            <span class="text-dark-emphasis fs-xs fw-medium text-end">Lithium-ion
                                                battery</span>
                                        </li>
                                        <li class="d-flex align-items-center">
                                            <span class="fs-xs">Weight:</span>
                                            <span
                                                class="px-1 mx-2 mt-2 border-dashed d-block flex-grow-1 border-bottom"></span>
                                            <span class="text-dark-emphasis fs-xs fw-medium text-end">37.0
                                                grams</span>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>

                        <!-- Item -->
                        <div class="col">
                            <div class="rounded product-card animate-underline hover-effect-opacity bg-body">
                                <div class="posittion-relative">
                                    <div
                                        class="top-0 mt-3 opacity-0 position-absolute end-0 z-2 hover-effect-target me-3">
                                        <div class="gap-2 d-flex flex-column">
                                            <button type="button"
                                                class="btn btn-icon btn-secondary animate-pulse d-none d-lg-inline-flex"
                                                aria-label="Add to Wishlist">
                                                <i class="ci-heart fs-base animate-target"></i>
                                            </button>
                                            <button type="button"
                                                class="btn btn-icon btn-secondary animate-rotate d-none d-lg-inline-flex"
                                                aria-label="Compare">
                                                <i class="ci-refresh-cw fs-base animate-target"></i>
                                            </button>
                                        </div>
                                    </div>
                                    <div class="top-0 mt-2 dropdown d-lg-none position-absolute end-0 z-2 me-2">
                                        <button type="button" class="btn btn-icon btn-sm btn-secondary bg-body"
                                            data-bs-toggle="dropdown" aria-expanded="false"
                                            aria-label="More actions">
                                            <i class="ci-more-vertical fs-lg"></i>
                                        </button>
                                        <ul class="p-2 dropdown-menu dropdown-menu-end fs-xs"
                                            style="min-width: auto">
                                            <li>
                                                <a class="dropdown-item" href="#!">
                                                    <i class="ci-heart fs-sm ms-n1 me-2"></i>
                                                    Add to Wishlist
                                                </a>
                                            </li>
                                            <li>
                                                <a class="dropdown-item" href="#!">
                                                    <i class="ci-refresh-cw fs-sm ms-n1 me-2"></i>
                                                    Compare
                                                </a>
                                            </li>
                                        </ul>
                                    </div>
                                    <a class="p-3 overflow-hidden d-block rounded-top p-sm-4"
                                        href="shop-product-general-electronics.html">
                                        <div class="ratio" style="--cz-aspect-ratio: calc(240 / 258 * 100%)">
                                            <img src="assets/img/shop/electronics/05.png" alt="iPad Air">
                                        </div>
                                    </a>
                                </div>
                                <div class="min-w-0 px-1 pb-2 w-100 px-sm-3 pb-sm-3">
                                    <div class="gap-2 mb-2 d-flex align-items-center">
                                        <div class="gap-1 d-flex fs-xs">
                                            <i class="ci-star-filled text-warning"></i>
                                            <i class="ci-star-filled text-warning"></i>
                                            <i class="ci-star-filled text-warning"></i>
                                            <i class="ci-star-filled text-warning"></i>
                                            <i class="ci-star-filled text-warning"></i>
                                        </div>
                                        <span class="text-body-tertiary fs-xs">(12)</span>
                                    </div>
                                    <h3 class="pb-1 mb-2">
                                        <a class="d-block fs-sm fw-medium text-truncate"
                                            href="shop-product-general-electronics.html">
                                            <span class="animate-target">Tablet Apple iPad Air M1</span>
                                        </a>
                                    </h3>
                                    <div class="d-flex align-items-center justify-content-between">
                                        <div class="mb-0 h5 lh-1">$540.00</div>
                                        <button type="button"
                                            class="product-card-button btn btn-icon btn-secondary animate-slide-end ms-2"
                                            aria-label="Add to Cart">
                                            <i class="ci-shopping-cart fs-base animate-target"></i>
                                        </button>
                                    </div>
                                </div>
                                <div
                                    class="p-3 pt-1 shadow product-card-details position-absolute top-100 start-0 w-100 bg-body rounded-bottom mt-n2">
                                    <span class="top-0 py-2 position-absolute start-0 w-100 bg-body mt-n2"></span>
                                    <ul class="gap-2 m-0 list-unstyled d-flex flex-column">
                                        <li class="d-flex align-items-center">
                                            <span class="fs-xs">Display:</span>
                                            <span
                                                class="px-1 mx-2 mt-2 border-dashed d-block flex-grow-1 border-bottom"></span>
                                            <span class="text-dark-emphasis fs-xs fw-medium text-end">10.9" LED</span>
                                        </li>
                                        <li class="d-flex align-items-center">
                                            <span class="fs-xs">Capacity:</span>
                                            <span
                                                class="px-1 mx-2 mt-2 border-dashed d-block flex-grow-1 border-bottom"></span>
                                            <span class="text-dark-emphasis fs-xs fw-medium text-end">64 GB</span>
                                        </li>
                                        <li class="d-flex align-items-center">
                                            <span class="fs-xs">Chip:</span>
                                            <span
                                                class="px-1 mx-2 mt-2 border-dashed d-block flex-grow-1 border-bottom"></span>
                                            <span class="text-dark-emphasis fs-xs fw-medium text-end">Apple M1</span>
                                        </li>
                                        <li class="d-flex align-items-center">
                                            <span class="fs-xs">Camera:</span>
                                            <span
                                                class="px-1 mx-2 mt-2 border-dashed d-block flex-grow-1 border-bottom"></span>
                                            <span class="text-dark-emphasis fs-xs fw-medium text-end">12 MP
                                                Wide</span>
                                        </li>
                                        <li class="d-flex align-items-center">
                                            <span class="fs-xs">Weight:</span>
                                            <span
                                                class="px-1 mx-2 mt-2 border-dashed d-block flex-grow-1 border-bottom"></span>
                                            <span class="text-dark-emphasis fs-xs fw-medium text-end">462 grams</span>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>

                        <!-- Item -->
                        <div class="col">
                            <div class="rounded product-card animate-underline hover-effect-opacity bg-body">
                                <div class="position-relative">
                                    <div
                                        class="top-0 mt-3 opacity-0 position-absolute end-0 z-2 hover-effect-target me-3">
                                        <div class="gap-2 d-flex flex-column">
                                            <button type="button"
                                                class="btn btn-icon btn-secondary animate-pulse d-none d-lg-inline-flex"
                                                aria-label="Add to Wishlist">
                                                <i class="ci-heart fs-base animate-target"></i>
                                            </button>
                                            <button type="button"
                                                class="btn btn-icon btn-secondary animate-rotate d-none d-lg-inline-flex"
                                                aria-label="Compare">
                                                <i class="ci-refresh-cw fs-base animate-target"></i>
                                            </button>
                                        </div>
                                    </div>
                                    <div class="top-0 mt-2 dropdown d-lg-none position-absolute end-0 z-2 me-2">
                                        <button type="button" class="btn btn-icon btn-sm btn-secondary bg-body"
                                            data-bs-toggle="dropdown" aria-expanded="false"
                                            aria-label="More actions">
                                            <i class="ci-more-vertical fs-lg"></i>
                                        </button>
                                        <ul class="p-2 dropdown-menu dropdown-menu-end fs-xs"
                                            style="min-width: auto">
                                            <li>
                                                <a class="dropdown-item" href="#!">
                                                    <i class="ci-heart fs-sm ms-n1 me-2"></i>
                                                    Add to Wishlist
                                                </a>
                                            </li>
                                            <li>
                                                <a class="dropdown-item" href="#!">
                                                    <i class="ci-refresh-cw fs-sm ms-n1 me-2"></i>
                                                    Compare
                                                </a>
                                            </li>
                                        </ul>
                                    </div>
                                    <a class="p-3 overflow-hidden d-block rounded-top p-sm-4"
                                        href="shop-product-general-electronics.html">
                                        <div class="ratio" style="--cz-aspect-ratio: calc(240 / 258 * 100%)">
                                            <img src="assets/img/shop/electronics/06.png" alt="AirPods 2">
                                        </div>
                                    </a>
                                </div>
                                <div class="min-w-0 px-1 pb-2 w-100 px-sm-3 pb-sm-3">
                                    <div class="gap-2 mb-2 d-flex align-items-center">
                                        <div class="gap-1 d-flex fs-xs">
                                            <i class="ci-star-filled text-warning"></i>
                                            <i class="ci-star-filled text-warning"></i>
                                            <i class="ci-star-filled text-warning"></i>
                                            <i class="ci-star-filled text-warning"></i>
                                            <i class="opacity-75 ci-star text-body-tertiary"></i>
                                        </div>
                                        <span class="text-body-tertiary fs-xs">(78)</span>
                                    </div>
                                    <h3 class="pb-1 mb-2">
                                        <a class="d-block fs-sm fw-medium text-truncate"
                                            href="shop-product-general-electronics.html">
                                            <span class="animate-target">Headphones Apple AirPods 2 Pro</span>
                                        </a>
                                    </h3>
                                    <div class="d-flex align-items-center justify-content-between">
                                        <div class="mb-0 h5 lh-1">$224.00</div>
                                        <button type="button"
                                            class="product-card-button btn btn-icon btn-secondary animate-slide-end ms-2"
                                            aria-label="Add to Cart">
                                            <i class="ci-shopping-cart fs-base animate-target"></i>
                                        </button>
                                    </div>
                                </div>
                                <div
                                    class="p-3 pt-1 shadow product-card-details position-absolute top-100 start-0 w-100 bg-body rounded-bottom mt-n2">
                                    <span class="top-0 py-2 position-absolute start-0 w-100 bg-body mt-n2"></span>
                                    <ul class="gap-2 m-0 list-unstyled d-flex flex-column">
                                        <li class="d-flex align-items-center">
                                            <span class="fs-xs">Audio:</span>
                                            <span
                                                class="px-1 mx-2 mt-2 border-dashed d-block flex-grow-1 border-bottom"></span>
                                            <span class="text-dark-emphasis fs-xs fw-medium text-end">Noise
                                                Cancellation</span>
                                        </li>
                                        <li class="d-flex align-items-center">
                                            <span class="fs-xs">Sensors:</span>
                                            <span
                                                class="px-1 mx-2 mt-2 border-dashed d-block flex-grow-1 border-bottom"></span>
                                            <span class="text-dark-emphasis fs-xs fw-medium text-end">Touch
                                                control</span>
                                        </li>
                                        <li class="d-flex align-items-center">
                                            <span class="fs-xs">Chip:</span>
                                            <span
                                                class="px-1 mx-2 mt-2 border-dashed d-block flex-grow-1 border-bottom"></span>
                                            <span class="text-dark-emphasis fs-xs fw-medium text-end">Apple H2</span>
                                        </li>
                                        <li class="d-flex align-items-center">
                                            <span class="fs-xs">Weight:</span>
                                            <span
                                                class="px-1 mx-2 mt-2 border-dashed d-block flex-grow-1 border-bottom"></span>
                                            <span class="text-dark-emphasis fs-xs fw-medium text-end">50.8
                                                grams</span>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>

                        <!-- Item -->
                        <div class="col">
                            <div class="rounded product-card animate-underline hover-effect-opacity bg-body">
                                <div class="position-relative">
                                    <div
                                        class="top-0 mt-3 opacity-0 position-absolute end-0 z-2 hover-effect-target me-3">
                                        <div class="gap-2 d-flex flex-column">
                                            <button type="button"
                                                class="btn btn-icon btn-secondary animate-pulse d-none d-lg-inline-flex"
                                                aria-label="Add to Wishlist">
                                                <i class="ci-heart fs-base animate-target"></i>
                                            </button>
                                            <button type="button"
                                                class="btn btn-icon btn-secondary animate-rotate d-none d-lg-inline-flex"
                                                aria-label="Compare">
                                                <i class="ci-refresh-cw fs-base animate-target"></i>
                                            </button>
                                        </div>
                                    </div>
                                    <div class="top-0 mt-2 dropdown d-lg-none position-absolute end-0 z-2 me-2">
                                        <button type="button" class="btn btn-icon btn-sm btn-secondary bg-body"
                                            data-bs-toggle="dropdown" aria-expanded="false"
                                            aria-label="More actions">
                                            <i class="ci-more-vertical fs-lg"></i>
                                        </button>
                                        <ul class="p-2 dropdown-menu dropdown-menu-end fs-xs"
                                            style="min-width: auto">
                                            <li>
                                                <a class="dropdown-item" href="#!">
                                                    <i class="ci-heart fs-sm ms-n1 me-2"></i>
                                                    Add to Wishlist
                                                </a>
                                            </li>
                                            <li>
                                                <a class="dropdown-item" href="#!">
                                                    <i class="ci-refresh-cw fs-sm ms-n1 me-2"></i>
                                                    Compare
                                                </a>
                                            </li>
                                        </ul>
                                    </div>
                                    <a class="p-3 overflow-hidden d-block rounded-top p-sm-4"
                                        href="shop-product-general-electronics.html">
                                        <span
                                            class="top-0 mt-2 badge bg-info position-absolute start-0 ms-2 mt-lg-3 ms-lg-3">New</span>
                                        <div class="ratio" style="--cz-aspect-ratio: calc(240 / 258 * 100%)">
                                            <img src="assets/img/shop/electronics/04.png" alt="MacBook">
                                        </div>
                                    </a>
                                </div>
                                <div class="min-w-0 px-1 pb-2 w-100 px-sm-3 pb-sm-3">
                                    <div class="gap-2 mb-2 d-flex align-items-center">
                                        <div class="gap-1 d-flex fs-xs">
                                            <i class="ci-star-filled text-warning"></i>
                                            <i class="ci-star-filled text-warning"></i>
                                            <i class="ci-star-filled text-warning"></i>
                                            <i class="ci-star-filled text-warning"></i>
                                            <i class="ci-star-half text-warning"></i>
                                        </div>
                                        <span class="text-body-tertiary fs-xs">(51)</span>
                                    </div>
                                    <h3 class="pb-1 mb-2">
                                        <a class="d-block fs-sm fw-medium text-truncate"
                                            href="shop-product-general-electronics.html">
                                            <span class="animate-target">Laptop Apple MacBook Pro 13 M2</span>
                                        </a>
                                    </h3>
                                    <div class="d-flex align-items-center justify-content-between">
                                        <div class="mb-0 h5 lh-1">$1,200.00</div>
                                        <button type="button"
                                            class="product-card-button btn btn-icon btn-secondary animate-slide-end ms-2"
                                            aria-label="Add to Cart">
                                            <i class="ci-shopping-cart fs-base animate-target"></i>
                                        </button>
                                    </div>
                                </div>
                                <div
                                    class="p-3 pt-1 shadow product-card-details position-absolute top-100 start-0 w-100 bg-body rounded-bottom mt-n2">
                                    <span class="top-0 py-2 position-absolute start-0 w-100 bg-body mt-n2"></span>
                                    <ul class="gap-2 m-0 list-unstyled d-flex flex-column">
                                        <li class="d-flex align-items-center">
                                            <span class="fs-xs">Chip:</span>
                                            <span
                                                class="px-1 mx-2 mt-2 border-dashed d-block flex-grow-1 border-bottom"></span>
                                            <span class="text-dark-emphasis fs-xs fw-medium text-end">Apple M2</span>
                                        </li>
                                        <li class="d-flex align-items-center">
                                            <span class="fs-xs">Memory:</span>
                                            <span
                                                class="px-1 mx-2 mt-2 border-dashed d-block flex-grow-1 border-bottom"></span>
                                            <span class="text-dark-emphasis fs-xs fw-medium text-end">8 GB
                                                unified</span>
                                        </li>
                                        <li class="d-flex align-items-center">
                                            <span class="fs-xs">Storage:</span>
                                            <span
                                                class="px-1 mx-2 mt-2 border-dashed d-block flex-grow-1 border-bottom"></span>
                                            <span class="text-dark-emphasis fs-xs fw-medium text-end">256 GB
                                                SSD</span>
                                        </li>
                                        <li class="d-flex align-items-center">
                                            <span class="fs-xs">Display:</span>
                                            <span
                                                class="px-1 mx-2 mt-2 border-dashed d-block flex-grow-1 border-bottom"></span>
                                            <span class="text-dark-emphasis fs-xs fw-medium text-end">13.3-inch
                                                Retina</span>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Banner -->
                    <div class="mb-4 overflow-hidden position-relative rounded-5">
                        <span class="top-0 position-absolute start-0 w-100 h-100 d-none-dark rtl-flip"
                            style="background: linear-gradient(-90deg, #accbee 0%, #e7f0fd 100%)"></span>
                        <span class="top-0 position-absolute start-0 w-100 h-100 d-none d-block-dark rtl-flip"
                            style="background: linear-gradient(-90deg, #1b273a 0%, #1f2632 100%)"></span>
                        <div class="row align-items-center position-relative z-1">
                            <div class="pt-5 mb-2 col-md-6 pt-md-0 mb-md-0">
                                <div class="px-4 text-center text-md-start py-md-5 ps-md-5 pe-md-0 me-md-n5">
                                    <h3 class="pb-2 mb-1 text-uppercase fw-bold ps-xxl-3">Seasonal weekly sale 2024
                                    </h3>
                                    <p class="mb-0 text-body-emphasis ps-xxl-3">Use code <span
                                            class="px-2 py-1 bg-white d-inline-block fw-semibold text-dark rounded-pill">Sale
                                            2024</span> to get best offer</p>
                                </div>
                            </div>
                            <div class="col-md-6 d-flex justify-content-center justify-content-md-end">
                                <div class="me-3 me-lg-4 me-xxl-5">
                                    <img src="assets/img/shop/electronics/banners/iphone-2.png"
                                        class="d-block rtl-flip" width="335" alt="Camera">
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="row row-cols-2 row-cols-md-3 g-4">

                        <!-- Item -->
                        <div class="col">
                            <div class="rounded product-card animate-underline hover-effect-opacity bg-body">
                                <div class="position-relative">
                                    <div
                                        class="top-0 mt-3 opacity-0 position-absolute end-0 z-2 hover-effect-target me-3">
                                        <div class="gap-2 d-flex flex-column">
                                            <button type="button"
                                                class="btn btn-icon btn-secondary animate-pulse d-none d-lg-inline-flex"
                                                aria-label="Add to Wishlist">
                                                <i class="ci-heart fs-base animate-target"></i>
                                            </button>
                                            <button type="button"
                                                class="btn btn-icon btn-secondary animate-rotate d-none d-lg-inline-flex"
                                                aria-label="Compare">
                                                <i class="ci-refresh-cw fs-base animate-target"></i>
                                            </button>
                                        </div>
                                    </div>
                                    <div class="top-0 mt-2 dropdown d-lg-none position-absolute end-0 z-2 me-2">
                                        <button type="button" class="btn btn-icon btn-sm btn-secondary bg-body"
                                            data-bs-toggle="dropdown" aria-expanded="false"
                                            aria-label="More actions">
                                            <i class="ci-more-vertical fs-lg"></i>
                                        </button>
                                        <ul class="p-2 dropdown-menu dropdown-menu-end fs-xs"
                                            style="min-width: auto">
                                            <li>
                                                <a class="dropdown-item" href="#!">
                                                    <i class="ci-heart fs-sm ms-n1 me-2"></i>
                                                    Add to Wishlist
                                                </a>
                                            </li>
                                            <li>
                                                <a class="dropdown-item" href="#!">
                                                    <i class="ci-refresh-cw fs-sm ms-n1 me-2"></i>
                                                    Compare
                                                </a>
                                            </li>
                                        </ul>
                                    </div>
                                    <a class="p-3 overflow-hidden d-block rounded-top p-sm-4"
                                        href="shop-product-general-electronics.html">
                                        <div class="ratio" style="--cz-aspect-ratio: calc(240 / 258 * 100%)">
                                            <img src="assets/img/shop/electronics/13.png" alt="Dualsense Edge">
                                        </div>
                                    </a>
                                </div>
                                <div class="min-w-0 px-1 pb-2 w-100 px-sm-3 pb-sm-3">
                                    <div class="gap-2 mb-2 d-flex align-items-center">
                                        <div class="gap-1 d-flex fs-xs">
                                            <i class="ci-star-filled text-warning"></i>
                                            <i class="ci-star-filled text-warning"></i>
                                            <i class="ci-star-filled text-warning"></i>
                                            <i class="ci-star-filled text-warning"></i>
                                            <i class="ci-star-filled text-warning"></i>
                                        </div>
                                        <span class="text-body-tertiary fs-xs">(187)</span>
                                    </div>
                                    <h3 class="pb-1 mb-2">
                                        <a class="d-block fs-sm fw-medium text-truncate"
                                            href="shop-product-general-electronics.html">
                                            <span class="animate-target">Sony Dualsense Edge Controller</span>
                                        </a>
                                    </h3>
                                    <div class="d-flex align-items-center justify-content-between">
                                        <div class="mb-0 h5 lh-1">$200.00</div>
                                        <button type="button"
                                            class="product-card-button btn btn-icon btn-secondary animate-slide-end ms-2"
                                            aria-label="Add to Cart">
                                            <i class="ci-shopping-cart fs-base animate-target"></i>
                                        </button>
                                    </div>
                                </div>
                                <div
                                    class="p-3 pt-1 shadow product-card-details position-absolute top-100 start-0 w-100 bg-body rounded-bottom mt-n2">
                                    <span class="top-0 py-2 position-absolute start-0 w-100 bg-body mt-n2"></span>
                                    <ul class="gap-2 m-0 list-unstyled d-flex flex-column">
                                        <li class="d-flex align-items-center">
                                            <span class="fs-xs">Controls:</span>
                                            <span
                                                class="px-1 mx-2 mt-2 border-dashed d-block flex-grow-1 border-bottom"></span>
                                            <span class="text-dark-emphasis fs-xs fw-medium text-end">Adjustable
                                                triggers</span>
                                        </li>
                                        <li class="d-flex align-items-center">
                                            <span class="fs-xs">Connectivity:</span>
                                            <span
                                                class="px-1 mx-2 mt-2 border-dashed d-block flex-grow-1 border-bottom"></span>
                                            <span class="text-dark-emphasis fs-xs fw-medium text-end">Bluetooth</span>
                                        </li>
                                        <li class="d-flex align-items-center">
                                            <span class="fs-xs">Audio:</span>
                                            <span
                                                class="px-1 mx-2 mt-2 border-dashed d-block flex-grow-1 border-bottom"></span>
                                            <span class="text-dark-emphasis fs-xs fw-medium text-end">3.5mm, built-in
                                                speaker</span>
                                        </li>
                                        <li class="d-flex align-items-center">
                                            <span class="fs-xs">Weight:</span>
                                            <span
                                                class="px-1 mx-2 mt-2 border-dashed d-block flex-grow-1 border-bottom"></span>
                                            <span class="text-dark-emphasis fs-xs fw-medium text-end">325 grams</span>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>

                        <!-- Item -->
                        <div class="col">
                            <div class="rounded product-card animate-underline hover-effect-opacity bg-body">
                                <div class="posittion-relative">
                                    <div
                                        class="top-0 mt-3 opacity-0 position-absolute end-0 z-2 hover-effect-target me-3">
                                        <div class="gap-2 d-flex flex-column">
                                            <button type="button"
                                                class="btn btn-icon btn-secondary animate-pulse d-none d-lg-inline-flex"
                                                aria-label="Add to Wishlist">
                                                <i class="ci-heart fs-base animate-target"></i>
                                            </button>
                                            <button type="button"
                                                class="btn btn-icon btn-secondary animate-rotate d-none d-lg-inline-flex"
                                                aria-label="Compare">
                                                <i class="ci-refresh-cw fs-base animate-target"></i>
                                            </button>
                                        </div>
                                    </div>
                                    <div class="top-0 mt-2 dropdown d-lg-none position-absolute end-0 z-2 me-2">
                                        <button type="button" class="btn btn-icon btn-sm btn-secondary bg-body"
                                            data-bs-toggle="dropdown" aria-expanded="false"
                                            aria-label="More actions">
                                            <i class="ci-more-vertical fs-lg"></i>
                                        </button>
                                        <ul class="p-2 dropdown-menu dropdown-menu-end fs-xs"
                                            style="min-width: auto">
                                            <li>
                                                <a class="dropdown-item" href="#!">
                                                    <i class="ci-heart fs-sm ms-n1 me-2"></i>
                                                    Add to Wishlist
                                                </a>
                                            </li>
                                            <li>
                                                <a class="dropdown-item" href="#!">
                                                    <i class="ci-refresh-cw fs-sm ms-n1 me-2"></i>
                                                    Compare
                                                </a>
                                            </li>
                                        </ul>
                                    </div>
                                    <a class="p-3 overflow-hidden d-block rounded-top p-sm-4"
                                        href="shop-product-general-electronics.html">
                                        <div class="ratio" style="--cz-aspect-ratio: calc(240 / 258 * 100%)">
                                            <img src="assets/img/shop/electronics/07.png" alt="iPad Pro">
                                        </div>
                                    </a>
                                </div>
                                <div class="min-w-0 px-1 pb-2 w-100 px-sm-3 pb-sm-3">
                                    <div class="gap-2 mb-2 d-flex align-items-center">
                                        <div class="gap-1 d-flex fs-xs">
                                            <i class="ci-star-filled text-warning"></i>
                                            <i class="ci-star-filled text-warning"></i>
                                            <i class="ci-star-filled text-warning"></i>
                                            <i class="ci-star-filled text-warning"></i>
                                            <i class="ci-star-half text-warning"></i>
                                        </div>
                                        <span class="text-body-tertiary fs-xs">(49)</span>
                                    </div>
                                    <h3 class="pb-1 mb-2">
                                        <a class="d-block fs-sm fw-medium text-truncate"
                                            href="shop-product-general-electronics.html">
                                            <span class="animate-target">Tablet Apple iPad Pro M1</span>
                                        </a>
                                    </h3>
                                    <div class="d-flex align-items-center justify-content-between">
                                        <div class="mb-0 h5 lh-1">$739.00</div>
                                        <button type="button"
                                            class="product-card-button btn btn-icon btn-secondary animate-slide-end ms-2"
                                            aria-label="Add to Cart">
                                            <i class="ci-shopping-cart fs-base animate-target"></i>
                                        </button>
                                    </div>
                                </div>
                                <div
                                    class="p-3 pt-1 shadow product-card-details position-absolute top-100 start-0 w-100 bg-body rounded-bottom mt-n2">
                                    <span class="top-0 py-2 position-absolute start-0 w-100 bg-body mt-n2"></span>
                                    <ul class="gap-2 m-0 list-unstyled d-flex flex-column">
                                        <li class="d-flex align-items-center">
                                            <span class="fs-xs">Display:</span>
                                            <span
                                                class="px-1 mx-2 mt-2 border-dashed d-block flex-grow-1 border-bottom"></span>
                                            <span class="text-dark-emphasis fs-xs fw-medium text-end">11" LED</span>
                                        </li>
                                        <li class="d-flex align-items-center">
                                            <span class="fs-xs">Capacity:</span>
                                            <span
                                                class="px-1 mx-2 mt-2 border-dashed d-block flex-grow-1 border-bottom"></span>
                                            <span class="text-dark-emphasis fs-xs fw-medium text-end">128 GB</span>
                                        </li>
                                        <li class="d-flex align-items-center">
                                            <span class="fs-xs">Chip:</span>
                                            <span
                                                class="px-1 mx-2 mt-2 border-dashed d-block flex-grow-1 border-bottom"></span>
                                            <span class="text-dark-emphasis fs-xs fw-medium text-end">Apple M1</span>
                                        </li>
                                        <li class="d-flex align-items-center">
                                            <span class="fs-xs">Camera:</span>
                                            <span
                                                class="px-1 mx-2 mt-2 border-dashed d-block flex-grow-1 border-bottom"></span>
                                            <span class="text-dark-emphasis fs-xs fw-medium text-end">12 MP
                                                Wide</span>
                                        </li>
                                        <li class="d-flex align-items-center">
                                            <span class="fs-xs">Weight:</span>
                                            <span
                                                class="px-1 mx-2 mt-2 border-dashed d-block flex-grow-1 border-bottom"></span>
                                            <span class="text-dark-emphasis fs-xs fw-medium text-end">470 grams</span>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>

                        <!-- Item -->
                        <div class="col">
                            <div class="rounded product-card animate-underline hover-effect-opacity bg-body">
                                <div class="posittion-relative">
                                    <div
                                        class="top-0 mt-3 opacity-0 position-absolute end-0 z-2 hover-effect-target me-3">
                                        <div class="gap-2 d-flex flex-column">
                                            <button type="button"
                                                class="btn btn-icon btn-secondary animate-pulse d-none d-lg-inline-flex"
                                                aria-label="Add to Wishlist">
                                                <i class="ci-heart fs-base animate-target"></i>
                                            </button>
                                            <button type="button"
                                                class="btn btn-icon btn-secondary animate-rotate d-none d-lg-inline-flex"
                                                aria-label="Compare">
                                                <i class="ci-refresh-cw fs-base animate-target"></i>
                                            </button>
                                        </div>
                                    </div>
                                    <div class="top-0 mt-2 dropdown d-lg-none position-absolute end-0 z-2 me-2">
                                        <button type="button" class="btn btn-icon btn-sm btn-secondary bg-body"
                                            data-bs-toggle="dropdown" aria-expanded="false"
                                            aria-label="More actions">
                                            <i class="ci-more-vertical fs-lg"></i>
                                        </button>
                                        <ul class="p-2 dropdown-menu dropdown-menu-end fs-xs"
                                            style="min-width: auto">
                                            <li>
                                                <a class="dropdown-item" href="#!">
                                                    <i class="ci-heart fs-sm ms-n1 me-2"></i>
                                                    Add to Wishlist
                                                </a>
                                            </li>
                                            <li>
                                                <a class="dropdown-item" href="#!">
                                                    <i class="ci-refresh-cw fs-sm ms-n1 me-2"></i>
                                                    Compare
                                                </a>
                                            </li>
                                        </ul>
                                    </div>
                                    <a class="p-3 overflow-hidden d-block rounded-top p-sm-4"
                                        href="shop-product-general-electronics.html">
                                        <div class="ratio" style="--cz-aspect-ratio: calc(240 / 258 * 100%)">
                                            <img src="assets/img/shop/electronics/09.png" alt="Wireless Buds">
                                        </div>
                                    </a>
                                </div>
                                <div class="min-w-0 px-1 pb-2 w-100 px-sm-3 pb-sm-3">
                                    <div class="gap-2 mb-2 d-flex align-items-center">
                                        <div class="gap-1 d-flex fs-xs">
                                            <i class="ci-star-filled text-warning"></i>
                                            <i class="ci-star-filled text-warning"></i>
                                            <i class="ci-star-filled text-warning"></i>
                                            <i class="ci-star-filled text-warning"></i>
                                            <i class="ci-star-filled text-warning"></i>
                                        </div>
                                        <span class="text-body-tertiary fs-xs">(142)</span>
                                    </div>
                                    <h3 class="pb-1 mb-2">
                                        <a class="d-block fs-sm fw-medium text-truncate"
                                            href="shop-product-general-electronics.html">
                                            <span class="animate-target">Xiaomi Wireless Buds Pro</span>
                                        </a>
                                    </h3>
                                    <div class="d-flex align-items-center justify-content-between">
                                        <div class="mb-0 h5 lh-1">$156.00</div>
                                        <button type="button"
                                            class="product-card-button btn btn-icon btn-secondary animate-slide-end ms-2"
                                            aria-label="Add to Cart">
                                            <i class="ci-shopping-cart fs-base animate-target"></i>
                                        </button>
                                    </div>
                                </div>
                                <div
                                    class="p-3 pt-1 shadow product-card-details position-absolute top-100 start-0 w-100 bg-body rounded-bottom mt-n2">
                                    <span class="top-0 py-2 position-absolute start-0 w-100 bg-body mt-n2"></span>
                                    <ul class="gap-2 m-0 list-unstyled d-flex flex-column">
                                        <li class="d-flex align-items-center">
                                            <span class="fs-xs">Audio:</span>
                                            <span
                                                class="px-1 mx-2 mt-2 border-dashed d-block flex-grow-1 border-bottom"></span>
                                            <span class="text-dark-emphasis fs-xs fw-medium text-end">Noise
                                                Cancellation</span>
                                        </li>
                                        <li class="d-flex align-items-center">
                                            <span class="fs-xs">Connectivity:</span>
                                            <span
                                                class="px-1 mx-2 mt-2 border-dashed d-block flex-grow-1 border-bottom"></span>
                                            <span class="text-dark-emphasis fs-xs fw-medium text-end">Bluetooth</span>
                                        </li>
                                        <li class="d-flex align-items-center">
                                            <span class="fs-xs">Material:</span>
                                            <span
                                                class="px-1 mx-2 mt-2 border-dashed d-block flex-grow-1 border-bottom"></span>
                                            <span class="text-dark-emphasis fs-xs fw-medium text-end">Plastic</span>
                                        </li>
                                        <li class="d-flex align-items-center">
                                            <span class="fs-xs">Weight:</span>
                                            <span
                                                class="px-1 mx-2 mt-2 border-dashed d-block flex-grow-1 border-bottom"></span>
                                            <span class="text-dark-emphasis fs-xs fw-medium text-end">98 grams</span>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>

                        <!-- Item -->
                        <div class="col">
                            <div class="rounded product-card animate-underline hover-effect-opacity bg-body">
                                <div class="position-relative">
                                    <div
                                        class="top-0 mt-3 opacity-0 position-absolute end-0 z-2 hover-effect-target me-3">
                                        <div class="gap-2 d-flex flex-column">
                                            <button type="button"
                                                class="btn btn-icon btn-secondary animate-pulse d-none d-lg-inline-flex"
                                                aria-label="Add to Wishlist">
                                                <i class="ci-heart fs-base animate-target"></i>
                                            </button>
                                            <button type="button"
                                                class="btn btn-icon btn-secondary animate-rotate d-none d-lg-inline-flex"
                                                aria-label="Compare">
                                                <i class="ci-refresh-cw fs-base animate-target"></i>
                                            </button>
                                        </div>
                                    </div>
                                    <div class="top-0 mt-2 dropdown d-lg-none position-absolute end-0 z-2 me-2">
                                        <button type="button" class="btn btn-icon btn-sm btn-secondary bg-body"
                                            data-bs-toggle="dropdown" aria-expanded="false"
                                            aria-label="More actions">
                                            <i class="ci-more-vertical fs-lg"></i>
                                        </button>
                                        <ul class="p-2 dropdown-menu dropdown-menu-end fs-xs"
                                            style="min-width: auto">
                                            <li>
                                                <a class="dropdown-item" href="#!">
                                                    <i class="ci-heart fs-sm ms-n1 me-2"></i>
                                                    Add to Wishlist
                                                </a>
                                            </li>
                                            <li>
                                                <a class="dropdown-item" href="#!">
                                                    <i class="ci-refresh-cw fs-sm ms-n1 me-2"></i>
                                                    Compare
                                                </a>
                                            </li>
                                        </ul>
                                    </div>
                                    <a class="p-3 overflow-hidden d-block rounded-top p-sm-4"
                                        href="shop-product-general-electronics.html">
                                        <div class="ratio" style="--cz-aspect-ratio: calc(240 / 258 * 100%)">
                                            <img src="assets/img/shop/electronics/10.png" alt="iPhone 14">
                                        </div>
                                    </a>
                                </div>
                                <div class="min-w-0 px-1 pb-2 w-100 px-sm-3 pb-sm-3">
                                    <div class="gap-2 mb-2 d-flex align-items-center">
                                        <div class="gap-1 d-flex fs-xs">
                                            <i class="ci-star-filled text-warning"></i>
                                            <i class="ci-star-filled text-warning"></i>
                                            <i class="ci-star-filled text-warning"></i>
                                            <i class="ci-star-filled text-warning"></i>
                                            <i class="ci-star-half text-warning"></i>
                                        </div>
                                        <span class="text-body-tertiary fs-xs">(335)</span>
                                    </div>
                                    <h3 class="pb-1 mb-2">
                                        <a class="d-block fs-sm fw-medium text-truncate"
                                            href="shop-product-general-electronics.html">
                                            <span class="animate-target">Apple iPhone 14 128GB Blue</span>
                                        </a>
                                    </h3>
                                    <div class="d-flex align-items-center justify-content-between">
                                        <div class="mb-0 h5 lh-1">$899.00</div>
                                        <button type="button"
                                            class="product-card-button btn btn-icon btn-secondary animate-slide-end ms-2"
                                            aria-label="Add to Cart">
                                            <i class="ci-shopping-cart fs-base animate-target"></i>
                                        </button>
                                    </div>
                                </div>
                                <div
                                    class="p-3 pt-1 shadow product-card-details position-absolute top-100 start-0 w-100 bg-body rounded-bottom mt-n2">
                                    <span class="top-0 py-2 position-absolute start-0 w-100 bg-body mt-n2"></span>
                                    <ul class="gap-2 m-0 list-unstyled d-flex flex-column">
                                        <li class="d-flex align-items-center">
                                            <span class="fs-xs">Display:</span>
                                            <span
                                                class="px-1 mx-2 mt-2 border-dashed d-block flex-grow-1 border-bottom"></span>
                                            <span class="text-dark-emphasis fs-xs fw-medium text-end">6.1" XDR</span>
                                        </li>
                                        <li class="d-flex align-items-center">
                                            <span class="fs-xs">Capacity:</span>
                                            <span
                                                class="px-1 mx-2 mt-2 border-dashed d-block flex-grow-1 border-bottom"></span>
                                            <span class="text-dark-emphasis fs-xs fw-medium text-end">128 GB</span>
                                        </li>
                                        <li class="d-flex align-items-center">
                                            <span class="fs-xs">Chip:</span>
                                            <span
                                                class="px-1 mx-2 mt-2 border-dashed d-block flex-grow-1 border-bottom"></span>
                                            <span class="text-dark-emphasis fs-xs fw-medium text-end">A15
                                                Bionic</span>
                                        </li>
                                        <li class="d-flex align-items-center">
                                            <span class="fs-xs">Camera:</span>
                                            <span
                                                class="px-1 mx-2 mt-2 border-dashed d-block flex-grow-1 border-bottom"></span>
                                            <span class="text-dark-emphasis fs-xs fw-medium text-end">12 + 12
                                                MP</span>
                                        </li>
                                        <li class="d-flex align-items-center">
                                            <span class="fs-xs">Weight:</span>
                                            <span
                                                class="px-1 mx-2 mt-2 border-dashed d-block flex-grow-1 border-bottom"></span>
                                            <span class="text-dark-emphasis fs-xs fw-medium text-end">172 grams</span>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>

                        <!-- Item -->
                        <div class="col">
                            <div class="rounded product-card animate-underline hover-effect-opacity bg-body">
                                <div class="posittion-relative">
                                    <div
                                        class="top-0 mt-3 opacity-0 position-absolute end-0 z-2 hover-effect-target me-3">
                                        <div class="gap-2 d-flex flex-column">
                                            <button type="button"
                                                class="btn btn-icon btn-secondary animate-pulse d-none d-lg-inline-flex"
                                                aria-label="Add to Wishlist">
                                                <i class="ci-heart fs-base animate-target"></i>
                                            </button>
                                            <button type="button"
                                                class="btn btn-icon btn-secondary animate-rotate d-none d-lg-inline-flex"
                                                aria-label="Compare">
                                                <i class="ci-refresh-cw fs-base animate-target"></i>
                                            </button>
                                        </div>
                                    </div>
                                    <div class="top-0 mt-2 dropdown d-lg-none position-absolute end-0 z-2 me-2">
                                        <button type="button" class="btn btn-icon btn-sm btn-secondary bg-body"
                                            data-bs-toggle="dropdown" aria-expanded="false"
                                            aria-label="More actions">
                                            <i class="ci-more-vertical fs-lg"></i>
                                        </button>
                                        <ul class="p-2 dropdown-menu dropdown-menu-end fs-xs"
                                            style="min-width: auto">
                                            <li>
                                                <a class="dropdown-item" href="#!">
                                                    <i class="ci-heart fs-sm ms-n1 me-2"></i>
                                                    Add to Wishlist
                                                </a>
                                            </li>
                                            <li>
                                                <a class="dropdown-item" href="#!">
                                                    <i class="ci-refresh-cw fs-sm ms-n1 me-2"></i>
                                                    Compare
                                                </a>
                                            </li>
                                        </ul>
                                    </div>
                                    <a class="p-3 overflow-hidden d-block rounded-top p-sm-4"
                                        href="shop-product-general-electronics.html">
                                        <div class="ratio" style="--cz-aspect-ratio: calc(240 / 258 * 100%)">
                                            <img src="assets/img/shop/electronics/08.png"
                                                alt="Bluetooth Headphones">
                                        </div>
                                    </a>
                                </div>
                                <div class="min-w-0 px-1 pb-2 w-100 px-sm-3 pb-sm-3">
                                    <div class="gap-2 mb-2 d-flex align-items-center">
                                        <div class="gap-1 d-flex fs-xs">
                                            <i class="ci-star-filled text-warning"></i>
                                            <i class="ci-star-filled text-warning"></i>
                                            <i class="ci-star-filled text-warning"></i>
                                            <i class="ci-star-half text-warning"></i>
                                            <i class="opacity-75 ci-star text-body-tertiary"></i>
                                        </div>
                                        <span class="text-body-tertiary fs-xs">(136)</span>
                                    </div>
                                    <h3 class="pb-1 mb-2">
                                        <a class="d-block fs-sm fw-medium text-truncate"
                                            href="shop-product-general-electronics.html">
                                            <span class="animate-target">Wireless Bluetooth Headphones Sony</span>
                                        </a>
                                    </h3>
                                    <div class="d-flex align-items-center justify-content-between">
                                        <div class="mb-0 h5 lh-1">$299.00</div>
                                        <button type="button"
                                            class="product-card-button btn btn-icon btn-secondary animate-slide-end ms-2"
                                            aria-label="Add to Cart">
                                            <i class="ci-shopping-cart fs-base animate-target"></i>
                                        </button>
                                    </div>
                                </div>
                                <div
                                    class="p-3 pt-1 shadow product-card-details position-absolute top-100 start-0 w-100 bg-body rounded-bottom mt-n2">
                                    <span class="top-0 py-2 position-absolute start-0 w-100 bg-body mt-n2"></span>
                                    <ul class="gap-2 m-0 list-unstyled d-flex flex-column">
                                        <li class="d-flex align-items-center">
                                            <span class="fs-xs">Audio:</span>
                                            <span
                                                class="px-1 mx-2 mt-2 border-dashed d-block flex-grow-1 border-bottom"></span>
                                            <span class="text-dark-emphasis fs-xs fw-medium text-end">Noise
                                                Cancellation</span>
                                        </li>
                                        <li class="d-flex align-items-center">
                                            <span class="fs-xs">Connectivity:</span>
                                            <span
                                                class="px-1 mx-2 mt-2 border-dashed d-block flex-grow-1 border-bottom"></span>
                                            <span class="text-dark-emphasis fs-xs fw-medium text-end">Bluetooth, 3.5mm
                                                jack</span>
                                        </li>
                                        <li class="d-flex align-items-center">
                                            <span class="fs-xs">Material:</span>
                                            <span
                                                class="px-1 mx-2 mt-2 border-dashed d-block flex-grow-1 border-bottom"></span>
                                            <span class="text-dark-emphasis fs-xs fw-medium text-end">Leather,
                                                Plastic</span>
                                        </li>
                                        <li class="d-flex align-items-center">
                                            <span class="fs-xs">Weight:</span>
                                            <span
                                                class="px-1 mx-2 mt-2 border-dashed d-block flex-grow-1 border-bottom"></span>
                                            <span class="text-dark-emphasis fs-xs fw-medium text-end">185 grams</span>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>

                        <!-- Banner -->
                        <div class="col" data-bs-theme="dark">
                            <div class="px-4 pt-4 pb-4 overflow-hidden text-center d-flex flex-column align-items-center justify-content-end h-100 rounded-5 px-lg-3"
                                style="background: #1d2c41 url(assets/img/shop/electronics/banners/background.jpg) center/cover no-repeat">
                                <div class="ratio animate-up-down position-relative z-2 me-lg-4"
                                    style="max-width: 320px; margin-bottom: -22%; --cz-aspect-ratio: calc(256 / 260 * 100%)">
                                    <img src="assets/img/shop/electronics/banners/laptop.png" alt="Laptop">
                                </div>
                                <h3 class="mb-2 display-5">MacBook</h3>
                                <p class="mb-3 text-body fs-sm fw-medium">Be Pro Anywhere</p>
                                <a class="mb-2 btn btn-sm btn-primary" href="#!">
                                    From $1,199
                                    <i class="ci-arrow-up-right fs-base ms-1 me-n1"></i>
                                </a>
                            </div>
                        </div>

                        <!-- Item -->
                        <div class="col">
                            <div class="rounded product-card animate-underline hover-effect-opacity bg-body">
                                <div class="position-relative">
                                    <div
                                        class="top-0 mt-3 opacity-0 position-absolute end-0 z-2 hover-effect-target me-3">
                                        <div class="gap-2 d-flex flex-column">
                                            <button type="button"
                                                class="btn btn-icon btn-secondary animate-pulse d-none d-lg-inline-flex"
                                                aria-label="Add to Wishlist">
                                                <i class="ci-heart fs-base animate-target"></i>
                                            </button>
                                            <button type="button"
                                                class="btn btn-icon btn-secondary animate-rotate d-none d-lg-inline-flex"
                                                aria-label="Compare">
                                                <i class="ci-refresh-cw fs-base animate-target"></i>
                                            </button>
                                        </div>
                                    </div>
                                    <div class="top-0 mt-2 dropdown d-lg-none position-absolute end-0 z-2 me-2">
                                        <button type="button" class="btn btn-icon btn-sm btn-secondary bg-body"
                                            data-bs-toggle="dropdown" aria-expanded="false"
                                            aria-label="More actions">
                                            <i class="ci-more-vertical fs-lg"></i>
                                        </button>
                                        <ul class="p-2 dropdown-menu dropdown-menu-end fs-xs"
                                            style="min-width: auto">
                                            <li>
                                                <a class="dropdown-item" href="#!">
                                                    <i class="ci-heart fs-sm ms-n1 me-2"></i>
                                                    Add to Wishlist
                                                </a>
                                            </li>
                                            <li>
                                                <a class="dropdown-item" href="#!">
                                                    <i class="ci-refresh-cw fs-sm ms-n1 me-2"></i>
                                                    Compare
                                                </a>
                                            </li>
                                        </ul>
                                    </div>
                                    <a class="p-3 overflow-hidden d-block rounded-top p-sm-4"
                                        href="shop-product-general-electronics.html">
                                        <span
                                            class="top-0 mt-2 badge bg-danger position-absolute start-0 ms-2 mt-lg-3 ms-lg-3">-17%</span>
                                        <div class="ratio" style="--cz-aspect-ratio: calc(240 / 258 * 100%)">
                                            <img src="assets/img/shop/electronics/11.png" alt="Nikon Camera">
                                        </div>
                                    </a>
                                </div>
                                <div class="min-w-0 px-1 pb-2 w-100 px-sm-3 pb-sm-3">
                                    <div class="gap-2 mb-2 d-flex align-items-center">
                                        <div class="gap-1 d-flex fs-xs">
                                            <i class="ci-star-filled text-warning"></i>
                                            <i class="ci-star-filled text-warning"></i>
                                            <i class="ci-star-filled text-warning"></i>
                                            <i class="ci-star-filled text-warning"></i>
                                            <i class="ci-star-filled text-warning"></i>
                                        </div>
                                        <span class="text-body-tertiary fs-xs">(14)</span>
                                    </div>
                                    <h3 class="pb-1 mb-2">
                                        <a class="d-block fs-sm fw-medium text-truncate"
                                            href="shop-product-general-electronics.html">
                                            <span class="animate-target">VRB01 Camera Nikon Max</span>
                                        </a>
                                    </h3>
                                    <div class="d-flex align-items-center justify-content-between">
                                        <div class="mb-0 h5 lh-1">$652.00 <del
                                                class="text-body-tertiary fs-sm fw-normal">$785.00</del></div>
                                        <button type="button"
                                            class="product-card-button btn btn-icon btn-secondary animate-slide-end ms-2"
                                            aria-label="Add to Cart">
                                            <i class="ci-shopping-cart fs-base animate-target"></i>
                                        </button>
                                    </div>
                                </div>
                                <div
                                    class="p-3 pt-1 shadow product-card-details position-absolute top-100 start-0 w-100 bg-body rounded-bottom mt-n2">
                                    <span class="top-0 py-2 position-absolute start-0 w-100 bg-body mt-n2"></span>
                                    <ul class="gap-2 m-0 list-unstyled d-flex flex-column">
                                        <li class="d-flex align-items-center">
                                            <span class="fs-xs">Resolution:</span>
                                            <span
                                                class="px-1 mx-2 mt-2 border-dashed d-block flex-grow-1 border-bottom"></span>
                                            <span class="text-dark-emphasis fs-xs fw-medium text-end">45.7 MP</span>
                                        </li>
                                        <li class="d-flex align-items-center">
                                            <span class="fs-xs">Sensor:</span>
                                            <span
                                                class="px-1 mx-2 mt-2 border-dashed d-block flex-grow-1 border-bottom"></span>
                                            <span class="text-dark-emphasis fs-xs fw-medium text-end">35.9mm x
                                                23.9mm</span>
                                        </li>
                                        <li class="d-flex align-items-center">
                                            <span class="fs-xs">Storage:</span>
                                            <span
                                                class="px-1 mx-2 mt-2 border-dashed d-block flex-grow-1 border-bottom"></span>
                                            <span class="text-dark-emphasis fs-xs fw-medium text-end">SD card</span>
                                        </li>
                                        <li class="d-flex align-items-center">
                                            <span class="fs-xs">Movie:</span>
                                            <span
                                                class="px-1 mx-2 mt-2 border-dashed d-block flex-grow-1 border-bottom"></span>
                                            <span class="text-dark-emphasis fs-xs fw-medium text-end">4K UHD</span>
                                        </li>
                                        <li class="d-flex align-items-center">
                                            <span class="fs-xs">Weight:</span>
                                            <span
                                                class="px-1 mx-2 mt-2 border-dashed d-block flex-grow-1 border-bottom"></span>
                                            <span class="text-dark-emphasis fs-xs fw-medium text-end">216 grams</span>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>

                        <!-- Item -->
                        <div class="col">
                            <div class="rounded product-card animate-underline hover-effect-opacity bg-body">
                                <div class="position-relative">
                                    <div
                                        class="top-0 mt-3 opacity-0 position-absolute end-0 z-2 hover-effect-target me-3">
                                        <div class="gap-2 d-flex flex-column">
                                            <button type="button"
                                                class="btn btn-icon btn-secondary animate-pulse d-none d-lg-inline-flex"
                                                aria-label="Add to Wishlist">
                                                <i class="ci-heart fs-base animate-target"></i>
                                            </button>
                                            <button type="button"
                                                class="btn btn-icon btn-secondary animate-rotate d-none d-lg-inline-flex"
                                                aria-label="Compare">
                                                <i class="ci-refresh-cw fs-base animate-target"></i>
                                            </button>
                                        </div>
                                    </div>
                                    <div class="top-0 mt-2 dropdown d-lg-none position-absolute end-0 z-2 me-2">
                                        <button type="button" class="btn btn-icon btn-sm btn-secondary bg-body"
                                            data-bs-toggle="dropdown" aria-expanded="false"
                                            aria-label="More actions">
                                            <i class="ci-more-vertical fs-lg"></i>
                                        </button>
                                        <ul class="p-2 dropdown-menu dropdown-menu-end fs-xs"
                                            style="min-width: auto">
                                            <li>
                                                <a class="dropdown-item" href="#!">
                                                    <i class="ci-heart fs-sm ms-n1 me-2"></i>
                                                    Add to Wishlist
                                                </a>
                                            </li>
                                            <li>
                                                <a class="dropdown-item" href="#!">
                                                    <i class="ci-refresh-cw fs-sm ms-n1 me-2"></i>
                                                    Compare
                                                </a>
                                            </li>
                                        </ul>
                                    </div>
                                    <a class="p-3 overflow-hidden d-block rounded-top p-sm-4"
                                        href="shop-product-general-electronics.html">
                                        <div class="ratio" style="--cz-aspect-ratio: calc(240 / 258 * 100%)">
                                            <img src="assets/img/shop/electronics/12.png" alt="Power Bank">
                                        </div>
                                    </a>
                                </div>
                                <div class="min-w-0 px-1 pb-2 w-100 px-sm-3 pb-sm-3">
                                    <div class="gap-2 mb-2 d-flex align-items-center">
                                        <div class="gap-1 d-flex fs-xs">
                                            <i class="ci-star-filled text-warning"></i>
                                            <i class="ci-star-filled text-warning"></i>
                                            <i class="ci-star-filled text-warning"></i>
                                            <i class="ci-star-filled text-warning"></i>
                                            <i class="opacity-75 ci-star text-body-tertiary"></i>
                                        </div>
                                        <span class="text-body-tertiary fs-xs">(125)</span>
                                    </div>
                                    <h3 class="pb-1 mb-2">
                                        <a class="d-block fs-sm fw-medium text-truncate"
                                            href="shop-product-general-electronics.html">
                                            <span class="animate-target">Power Bank PBS 10000 mAh Black</span>
                                        </a>
                                    </h3>
                                    <div class="d-flex align-items-center justify-content-between">
                                        <div class="mb-0 h5 lh-1">$45.00</div>
                                        <button type="button"
                                            class="product-card-button btn btn-icon btn-secondary animate-slide-end ms-2"
                                            aria-label="Add to Cart">
                                            <i class="ci-shopping-cart fs-base animate-target"></i>
                                        </button>
                                    </div>
                                </div>
                                <div
                                    class="p-3 pt-1 shadow product-card-details position-absolute top-100 start-0 w-100 bg-body rounded-bottom mt-n2">
                                    <span class="top-0 py-2 position-absolute start-0 w-100 bg-body mt-n2"></span>
                                    <ul class="gap-2 m-0 list-unstyled d-flex flex-column">
                                        <li class="d-flex align-items-center">
                                            <span class="fs-xs">Capacity:</span>
                                            <span
                                                class="px-1 mx-2 mt-2 border-dashed d-block flex-grow-1 border-bottom"></span>
                                            <span class="text-dark-emphasis fs-xs fw-medium text-end">10000 mAh</span>
                                        </li>
                                        <li class="d-flex align-items-center">
                                            <span class="fs-xs">Indcators:</span>
                                            <span
                                                class="px-1 mx-2 mt-2 border-dashed d-block flex-grow-1 border-bottom"></span>
                                            <span class="text-dark-emphasis fs-xs fw-medium text-end">LED light</span>
                                        </li>
                                        <li class="d-flex align-items-center">
                                            <span class="fs-xs">Color:</span>
                                            <span
                                                class="px-1 mx-2 mt-2 border-dashed d-block flex-grow-1 border-bottom"></span>
                                            <span class="text-dark-emphasis fs-xs fw-medium text-end">Black</span>
                                        </li>
                                        <li class="d-flex align-items-center">
                                            <span class="fs-xs">Movie:</span>
                                            <span
                                                class="px-1 mx-2 mt-2 border-dashed d-block flex-grow-1 border-bottom"></span>
                                            <span class="text-dark-emphasis fs-xs fw-medium text-end">4K UHD</span>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>

                        <!-- Item -->
                        <div class="col">
                            <div class="rounded product-card animate-underline hover-effect-opacity bg-body">
                                <div class="position-relative">
                                    <div
                                        class="top-0 mt-3 opacity-0 position-absolute end-0 z-2 hover-effect-target me-3">
                                        <div class="gap-2 d-flex flex-column">
                                            <button type="button"
                                                class="btn btn-icon btn-secondary animate-pulse d-none d-lg-inline-flex"
                                                aria-label="Add to Wishlist">
                                                <i class="ci-heart fs-base animate-target"></i>
                                            </button>
                                            <button type="button"
                                                class="btn btn-icon btn-secondary animate-rotate d-none d-lg-inline-flex"
                                                aria-label="Compare">
                                                <i class="ci-refresh-cw fs-base animate-target"></i>
                                            </button>
                                        </div>
                                    </div>
                                    <div class="top-0 mt-2 dropdown d-lg-none position-absolute end-0 z-2 me-2">
                                        <button type="button" class="btn btn-icon btn-sm btn-secondary bg-body"
                                            data-bs-toggle="dropdown" aria-expanded="false"
                                            aria-label="More actions">
                                            <i class="ci-more-vertical fs-lg"></i>
                                        </button>
                                        <ul class="p-2 dropdown-menu dropdown-menu-end fs-xs"
                                            style="min-width: auto">
                                            <li>
                                                <a class="dropdown-item" href="#!">
                                                    <i class="ci-heart fs-sm ms-n1 me-2"></i>
                                                    Add to Wishlist
                                                </a>
                                            </li>
                                            <li>
                                                <a class="dropdown-item" href="#!">
                                                    <i class="ci-refresh-cw fs-sm ms-n1 me-2"></i>
                                                    Compare
                                                </a>
                                            </li>
                                        </ul>
                                    </div>
                                    <a class="p-3 overflow-hidden d-block rounded-top p-sm-4"
                                        href="shop-product-general-electronics.html">
                                        <div class="ratio" style="--cz-aspect-ratio: calc(240 / 258 * 100%)">
                                            <img src="assets/img/shop/electronics/03.png" alt="Smart Watch">
                                        </div>
                                    </a>
                                </div>
                                <div class="min-w-0 px-1 pb-2 w-100 px-sm-3 pb-sm-3">
                                    <div class="gap-2 mb-2 d-flex align-items-center">
                                        <div class="gap-1 d-flex fs-xs">
                                            <i class="ci-star-filled text-warning"></i>
                                            <i class="ci-star-filled text-warning"></i>
                                            <i class="ci-star-filled text-warning"></i>
                                            <i class="ci-star-filled text-warning"></i>
                                            <i class="ci-star-filled text-warning"></i>
                                        </div>
                                        <span class="text-body-tertiary fs-xs">(67)</span>
                                    </div>
                                    <h3 class="pb-1 mb-2">
                                        <a class="d-block fs-sm fw-medium text-truncate"
                                            href="shop-product-general-electronics.html">
                                            <span class="animate-target">Smart Watch Series 7, White</span>
                                        </a>
                                    </h3>
                                    <div class="d-flex align-items-center justify-content-between">
                                        <div class="mb-0 h5 lh-1">$429.00</div>
                                        <button type="button"
                                            class="product-card-button btn btn-icon btn-secondary animate-slide-end ms-2"
                                            aria-label="Add to Cart">
                                            <i class="ci-shopping-cart fs-base animate-target"></i>
                                        </button>
                                    </div>
                                </div>
                                <div
                                    class="p-3 pt-1 shadow product-card-details position-absolute top-100 start-0 w-100 bg-body rounded-bottom mt-n2">
                                    <span class="top-0 py-2 position-absolute start-0 w-100 bg-body mt-n2"></span>
                                    <ul class="gap-2 m-0 list-unstyled d-flex flex-column">
                                        <li class="d-flex align-items-center">
                                            <span class="fs-xs">Display:</span>
                                            <span
                                                class="px-1 mx-2 mt-2 border-dashed d-block flex-grow-1 border-bottom"></span>
                                            <span class="text-dark-emphasis fs-xs fw-medium text-end">45mm OLED</span>
                                        </li>
                                        <li class="d-flex align-items-center">
                                            <span class="fs-xs">Chip:</span>
                                            <span
                                                class="px-1 mx-2 mt-2 border-dashed d-block flex-grow-1 border-bottom"></span>
                                            <span class="text-dark-emphasis fs-xs fw-medium text-end">64-bit
                                                Dual-core</span>
                                        </li>
                                        <li class="d-flex align-items-center">
                                            <span class="fs-xs">Connectivity:</span>
                                            <span
                                                class="px-1 mx-2 mt-2 border-dashed d-block flex-grow-1 border-bottom"></span>
                                            <span class="text-dark-emphasis fs-xs fw-medium text-end">Wi-Fi,
                                                Bluetooth</span>
                                        </li>
                                        <li class="d-flex align-items-center">
                                            <span class="fs-xs">Power:</span>
                                            <span
                                                class="px-1 mx-2 mt-2 border-dashed d-block flex-grow-1 border-bottom"></span>
                                            <span class="text-dark-emphasis fs-xs fw-medium text-end">Lithium-ion
                                                battery</span>
                                        </li>
                                        <li class="d-flex align-items-center">
                                            <span class="fs-xs">Weight:</span>
                                            <span
                                                class="px-1 mx-2 mt-2 border-dashed d-block flex-grow-1 border-bottom"></span>
                                            <span class="text-dark-emphasis fs-xs fw-medium text-end">37.0
                                                grams</span>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Pagination -->
                    <nav class="pt-3 mt-4 border-top" aria-label="Catalog pagination">
                        <ul class="pt-2 pagination pagination-lg pt-md-3">
                            <li class="page-item disabled me-auto">
                                <a class="px-2 page-link d-flex align-items-center h-100 fs-lg" href="#!"
                                    aria-label="Previous page">
                                    <i class="mx-1 ci-chevron-left"></i>
                                </a>
                            </li>
                            <li class="page-item active" aria-current="page">
                                <span class="page-link">
                                    1
                                    <span class="visually-hidden">(current)</span>
                                </span>
                            </li>
                            <li class="page-item">
                                <a class="page-link" href="#!">2</a>
                            </li>
                            <li class="page-item">
                                <a class="page-link" href="#!">3</a>
                            </li>
                            <li class="page-item">
                                <span class="page-link pe-none">...</span>
                            </li>
                            <li class="page-item">
                                <a class="page-link" href="#!">16</a>
                            </li>
                            <li class="page-item ms-auto">
                                <a class="px-2 page-link d-flex align-items-center h-100 fs-lg" href="#!"
                                    aria-label="Next page">
                                    <i class="mx-1 ci-chevron-right"></i>
                                </a>
                            </li>
                        </ul>
                    </nav>
                </div>
            </div>


        </section>


        <!-- Subscription form + Vlog -->
        <section class="py-5 bg-body-tertiary">
            <div class="container pt-sm-2 pt-md-3 pt-lg-4 pt-xl-5">
                <div class="row">
                    <div class="mb-5 col-md-6 col-lg-5 mb-md-0">
                        <h2 class="mb-2 h4">Sign up to our newsletter</h2>
                        <p class="pb-2 text-body pb-ms-3">Receive our latest updates about our products &amp;
                            promotions</p>
                        <form class="pb-1 mb-4 d-flex needs-validation pb-sm-2 pb-md-3 pb-lg-0 mb-lg-5"
                            novalidate="">
                            <div class="position-relative w-100 me-2">
                                <input type="email" class="form-control form-control-lg"
                                    placeholder="Your email" required="">
                            </div>
                            <button type="submit" class="btn btn-lg btn-primary">Subscribe</button>
                        </form>
                        <div class="gap-3 d-flex">
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
                        <ul class="gap-4 mb-3 list-unstyled d-flex flex-column ps-md-4 ps-lg-0">
                            <li class="nav flex-nowrap align-items-center position-relative">
                                <img src="assets/img/home/electronics/vlog/01.jpg" class="rounded" width="140"
                                    alt="Video cover">
                                <div class="ps-3">
                                    <div class="mb-2 fs-xs text-body-secondary lh-sm">6:16</div>
                                    <a class="p-0 nav-link fs-sm hover-effect-underline stretched-link"
                                        href="#!">5 New Cool Gadgets You Must See on Apex - Cheap Budget</a>
                                </div>
                            </li>
                            <li class="nav flex-nowrap align-items-center position-relative">
                                <img src="assets/img/home/electronics/vlog/02.jpg" class="rounded" width="140"
                                    alt="Video cover">
                                <div class="ps-3">
                                    <div class="mb-2 fs-xs text-body-secondary lh-sm">10:20</div>
                                    <a class="p-0 nav-link fs-sm hover-effect-underline stretched-link"
                                        href="#!">5 Super Useful Gadgets on Apex You Must Have in 2023</a>
                                </div>
                            </li>
                            <li class="nav flex-nowrap align-items-center position-relative">
                                <img src="assets/img/home/electronics/vlog/03.jpg" class="rounded" width="140"
                                    alt="Video cover">
                                <div class="ps-3">
                                    <div class="mb-2 fs-xs text-body-secondary lh-sm">8:40</div>
                                    <a class="p-0 nav-link fs-sm hover-effect-underline stretched-link"
                                        href="#!">Top 5 New Amazing Gadgets on Apex You Must See</a>
                                </div>
                            </li>
                        </ul>
                        <div class="nav ps-md-4 ps-lg-0">
                            <a class="px-0 btn nav-link animate-underline text-decoration-none" href="#!">
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
        <span class="top-0 position-absolute start-0 w-100 h-100 bg-body d-none d-block-dark"></span>
        <div class="container position-relative z-1 pt-sm-2 pt-md-3 pt-lg-4" data-bs-theme="dark">

            <!-- Columns with links that are turned into accordion on screens < 500px wide (sm breakpoint) -->
            <div class="py-5 accordion" id="footerLinks">
                <div class="row">
                    <div
                        class="pb-3 col-md-4 d-sm-flex flex-md-column align-items-center align-items-md-start mb-sm-4">
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
                            <div class="border-0 accordion-item col">
                                <h6 class="accordion-header" id="companyHeading">
                                    <span class="text-dark-emphasis d-none d-sm-block">Company</span>
                                    <button type="button" class="py-3 accordion-button collapsed d-sm-none"
                                        data-bs-toggle="collapse" data-bs-target="#companyLinks"
                                        aria-expanded="false" aria-controls="companyLinks">Company</button>
                                </h6>
                                <div class="accordion-collapse collapse d-sm-block" id="companyLinks"
                                    aria-labelledby="companyHeading" data-bs-parent="#footerLinks">
                                    <ul class="gap-2 pb-3 mb-1 nav flex-column pt-sm-3 mt-n1">
                                        <li class="pt-1 d-flex w-100">
                                            <a class="p-0 nav-link animate-underline animate-target d-inline fw-normal text-truncate"
                                                href="#!">About company</a>
                                        </li>
                                        <li class="pt-1 d-flex w-100">
                                            <a class="p-0 nav-link animate-underline animate-target d-inline fw-normal text-truncate"
                                                href="#!">Our team</a>
                                        </li>
                                        <li class="pt-1 d-flex w-100">
                                            <a class="p-0 nav-link animate-underline animate-target d-inline fw-normal text-truncate"
                                                href="#!">Careers</a>
                                        </li>
                                        <li class="pt-1 d-flex w-100">
                                            <a class="p-0 nav-link animate-underline animate-target d-inline fw-normal text-truncate"
                                                href="#!">Contact us</a>
                                        </li>
                                        <li class="pt-1 d-flex w-100">
                                            <a class="p-0 nav-link animate-underline animate-target d-inline fw-normal text-truncate"
                                                href="#!">News</a>
                                        </li>
                                    </ul>
                                </div>
                                <hr class="my-0 d-sm-none">
                            </div>
                            <div class="border-0 accordion-item col">
                                <h6 class="accordion-header" id="accountHeading">
                                    <span class="text-dark-emphasis d-none d-sm-block">Account</span>
                                    <button type="button" class="py-3 accordion-button collapsed d-sm-none"
                                        data-bs-toggle="collapse" data-bs-target="#accountLinks"
                                        aria-expanded="false" aria-controls="accountLinks">Account</button>
                                </h6>
                                <div class="accordion-collapse collapse d-sm-block" id="accountLinks"
                                    aria-labelledby="accountHeading" data-bs-parent="#footerLinks">
                                    <ul class="gap-2 pb-3 mb-1 nav flex-column pt-sm-3 mt-n1">
                                        <li class="pt-1 d-flex w-100">
                                            <a class="p-0 nav-link animate-underline animate-target d-inline fw-normal text-truncate"
                                                href="#!">Your account</a>
                                        </li>
                                        <li class="pt-1 d-flex w-100">
                                            <a class="p-0 nav-link animate-underline animate-target d-inline fw-normal text-truncate"
                                                href="#!">Shipping rates &amp; policies</a>
                                        </li>
                                        <li class="pt-1 d-flex w-100">
                                            <a class="p-0 nav-link animate-underline animate-target d-inline fw-normal text-truncate"
                                                href="#!">Refunds &amp; replacements</a>
                                        </li>
                                        <li class="pt-1 d-flex w-100">
                                            <a class="p-0 nav-link animate-underline animate-target d-inline fw-normal text-truncate"
                                                href="#!">Delivery info</a>
                                        </li>
                                        <li class="pt-1 d-flex w-100">
                                            <a class="p-0 nav-link animate-underline animate-target d-inline fw-normal text-truncate"
                                                href="#!">Order tracking</a>
                                        </li>
                                        <li class="pt-1 d-flex w-100">
                                            <a class="p-0 nav-link animate-underline animate-target d-inline fw-normal text-truncate"
                                                href="#!">Taxes &amp; fees</a>
                                        </li>
                                    </ul>
                                </div>
                                <hr class="my-0 d-sm-none">
                            </div>
                            <div class="border-0 accordion-item col">
                                <h6 class="accordion-header" id="customerHeading">
                                    <span class="text-dark-emphasis d-none d-sm-block">Customer service</span>
                                    <button type="button" class="py-3 accordion-button collapsed d-sm-none"
                                        data-bs-toggle="collapse" data-bs-target="#customerLinks"
                                        aria-expanded="false" aria-controls="customerLinks">Customer
                                        service</button>
                                </h6>
                                <div class="accordion-collapse collapse d-sm-block" id="customerLinks"
                                    aria-labelledby="customerHeading" data-bs-parent="#footerLinks">
                                    <ul class="gap-2 pb-3 mb-1 nav flex-column pt-sm-3 mt-n1">
                                        <li class="pt-1 d-flex w-100">
                                            <a class="p-0 nav-link animate-underline animate-target d-inline fw-normal text-truncate"
                                                href="#!">Payment methods</a>
                                        </li>
                                        <li class="pt-1 d-flex w-100">
                                            <a class="p-0 nav-link animate-underline animate-target d-inline fw-normal text-truncate"
                                                href="#!">Money back guarantee</a>
                                        </li>
                                        <li class="pt-1 d-flex w-100">
                                            <a class="p-0 nav-link animate-underline animate-target d-inline fw-normal text-truncate"
                                                href="#!">Product returns</a>
                                        </li>
                                        <li class="pt-1 d-flex w-100">
                                            <a class="p-0 nav-link animate-underline animate-target d-inline fw-normal text-truncate"
                                                href="#!">Support center</a>
                                        </li>
                                        <li class="pt-1 d-flex w-100">
                                            <a class="p-0 nav-link animate-underline animate-target d-inline fw-normal text-truncate"
                                                href="#!">Shipping</a>
                                        </li>
                                        <li class="pt-1 d-flex w-100">
                                            <a class="p-0 nav-link animate-underline animate-target d-inline fw-normal text-truncate"
                                                href="#!">Terms &amp; conditions</a>
                                        </li>
                                    </ul>
                                </div>
                                <hr class="my-0 d-sm-none">
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Category / tag links -->
            <div class="gap-3 pb-3 mb-4 d-flex flex-column pb-md-4 pb-lg-5 mt-n2 mt-sm-n4 mt-lg-0">
                <ul class="gap-2 nav align-items-center text-body-tertiary">
                    <li class="animate-underline">
                        <a class="p-0 nav-link fw-normal animate-target" href="#!">Computers</a>
                    </li>
                    <li class="px-1">/</li>
                    <li class="animate-underline">
                        <a class="p-0 nav-link fw-normal animate-target" href="#!">Smartphones</a>
                    </li>
                    <li class="px-1">/</li>
                    <li class="animate-underline">
                        <a class="p-0 nav-link fw-normal animate-target" href="#!">TV, Video</a>
                    </li>
                    <li class="px-1">/</li>
                    <li class="animate-underline">
                        <a class="p-0 nav-link fw-normal animate-target" href="#!">Speakers</a>
                    </li>
                    <li class="px-1">/</li>
                    <li class="animate-underline">
                        <a class="p-0 nav-link fw-normal animate-target" href="#!">Cameras</a>
                    </li>
                    <li class="px-1">/</li>
                    <li class="animate-underline">
                        <a class="p-0 nav-link fw-normal animate-target" href="#!">Printers</a>
                    </li>
                    <li class="px-1">/</li>
                    <li class="animate-underline">
                        <a class="p-0 nav-link fw-normal animate-target" href="#!">Video Games</a>
                    </li>
                    <li class="px-1">/</li>
                    <li class="animate-underline">
                        <a class="p-0 nav-link fw-normal animate-target" href="#!">Headphones</a>
                    </li>
                    <li class="px-1">/</li>
                    <li class="animate-underline">
                        <a class="p-0 nav-link fw-normal animate-target" href="#!">Wearable</a>
                    </li>
                    <li class="px-1">/</li>
                    <li class="animate-underline">
                        <a class="p-0 nav-link fw-normal animate-target" href="#!">HDD/SSD</a>
                    </li>
                    <li class="px-1">/</li>
                    <li class="animate-underline">
                        <a class="p-0 nav-link fw-normal animate-target" href="#!">Smart Home</a>
                    </li>
                    <li class="px-1">/</li>
                    <li class="animate-underline">
                        <a class="p-0 nav-link fw-normal animate-target" href="#!">Apple Devices</a>
                    </li>
                    <li class="px-1">/</li>
                    <li class="animate-underline">
                        <a class="p-0 nav-link fw-normal animate-target" href="#!">Tablets</a>
                    </li>
                </ul>
                <ul class="gap-2 nav align-items-center text-body-tertiary">
                    <li class="animate-underline">
                        <a class="p-0 nav-link fw-normal animate-target" href="#!">Monitors</a>
                    </li>
                    <li class="px-1">/</li>
                    <li class="animate-underline">
                        <a class="p-0 nav-link fw-normal animate-target" href="#!">Scanners</a>
                    </li>
                    <li class="px-1">/</li>
                    <li class="animate-underline">
                        <a class="p-0 nav-link fw-normal animate-target" href="#!">Servers</a>
                    </li>
                    <li class="px-1">/</li>
                    <li class="animate-underline">
                        <a class="p-0 nav-link fw-normal animate-target" href="#!">Heating and Cooling</a>
                    </li>
                    <li class="px-1">/</li>
                    <li class="animate-underline">
                        <a class="p-0 nav-link fw-normal animate-target" href="#!">E-readers</a>
                    </li>
                    <li class="px-1">/</li>
                    <li class="animate-underline">
                        <a class="p-0 nav-link fw-normal animate-target" href="#!">Data Storage</a>
                    </li>
                    <li class="px-1">/</li>
                    <li class="animate-underline">
                        <a class="p-0 nav-link fw-normal animate-target" href="#!">Networking</a>
                    </li>
                    <li class="px-1">/</li>
                    <li class="animate-underline">
                        <a class="p-0 nav-link fw-normal animate-target" href="#!">Power Strips</a>
                    </li>
                    <li class="px-1">/</li>
                    <li class="animate-underline">
                        <a class="p-0 nav-link fw-normal animate-target" href="#!">Plugs and Outlets</a>
                    </li>
                    <li class="px-1">/</li>
                    <li class="animate-underline">
                        <a class="p-0 nav-link fw-normal animate-target" href="#!">Detectors and Sensors</a>
                    </li>
                    <li class="px-1">/</li>
                    <li class="animate-underline">
                        <a class="p-0 nav-link fw-normal animate-target" href="#!">Accessories</a>
                    </li>
                </ul>
            </div>

            <!-- Copyright + Payment methods -->
            <div class="py-4 d-md-flex align-items-center border-top">
                <div class="gap-2 mb-4 d-flex gap-sm-3 justify-content-center ms-md-auto mb-md-0 order-md-2">
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
                <p class="mb-0 text-center text-body fs-xs text-md-start me-4 order-md-1">© All rights reserved. Made
                    by <span class="animate-underline"><a
                            class="animate-target text-dark-emphasis fw-medium text-decoration-none"
                            href="https://createx.studio/" target="_blank" rel="noreferrer">Createx
                            Studio</a></span></p>
            </div>
        </div>

        <!-- Additional spacing to accommodate the sticky offcanvas toggle button -->
        <div class="d-lg-none" style="height: 3.75rem"></div>
    </footer>


    <!-- Filter offcanvas toggle that is visible on screens < 992px wide (lg breakpoint) -->
    <button type="button"
        class="pb-4 border-0 fixed-bottom z-sticky w-100 btn btn-lg btn-dark border-top border-light border-opacity-10 rounded-0 d-lg-none"
        data-bs-toggle="offcanvas" data-bs-target="#filterSidebar" aria-controls="filterSidebar"
        data-bs-theme="light">
        <i class="ci-filter fs-base me-2"></i>
        Filters
    </button>


    <!-- Back to top button -->
    <div class="pb-4 floating-buttons position-fixed top-50 end-0 z-sticky me-3 me-xl-4">
        <a class="border-0 shadow btn-scroll-top btn btn-sm bg-body rounded-pill animate-slide-end" href="#top">
            Top
            <i class="ci-arrow-right fs-base ms-1 me-n1 animate-target"></i>
            <span class="top-0 z-0 border position-absolute start-0 w-100 h-100 rounded-pill"></span>
            <svg class="top-0 position-absolute start-0 w-100 h-100 z-1" viewBox="0 0 62 32" fill="none"
                xmlns="http://www.w3.org/2000/svg">
                <rect x=".75" y=".75" width="60.5" height="30.5" rx="15.25" stroke="currentColor"
                    stroke-width="1.5" stroke-miterlimit="10"></rect>
            </svg>
        </a>
    </div>


    <!-- Vendor scripts -->
    <script src="assets/vendor/choices.js/choices.min.js"></script>
    <script src="assets/vendor/nouislider/nouislider.min.js"></script>

    <!-- Bootstrap + Theme scripts -->
    <script src="assets/js/theme.min.js"></script>


</body>

</html>

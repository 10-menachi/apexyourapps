<!DOCTYPE html>
<html lang="en" data-bs-theme="light" data-pwa="true">

<head>
    <meta charset="utf-8">

    <!-- Viewport -->
    <meta name="viewport"
        content="width=device-width, initial-scale=1, minimum-scale=1, maximum-scale=1, viewport-fit=cover">

    <!-- SEO Meta Tags -->
    <title>Apex | Checkout v.1 - Shipping Address</title>
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

    <!-- Bootstrap + Theme styles -->
    <link rel="preload" href="assets/css/theme.min.css" as="style">
    <link rel="preload" href="assets/css/theme.rtl.min.css" as="style">
    <link rel="stylesheet" href="assets/css/theme.min.css" id="theme-styles">

    <!-- Customizer -->
    <script src="assets/js/customizer.min.js"></script>
</head>


<!-- Body -->

<body>
    <!-- Order preview offcanvas -->
    <div class="offcanvas offcanvas-end pb-sm-2 px-sm-2" id="orderPreview" tabindex="-1"
        aria-labelledby="orderPreviewLabel" style="width: 500px">
        <div class="py-3 offcanvas-header pt-lg-4">
            <h4 class="offcanvas-title" id="orderPreviewLabel">Your order</h4>
            <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
        </div>
        <div class="gap-3 py-2 offcanvas-body d-flex flex-column">

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
                    <div class="mb-0 h6">$899.00</div>
                    <div class="pt-2 fs-xs">Qty: 1</div>
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
                    <div class="mb-0 h6">$989.00 <del class="text-body-tertiary fs-xs fw-normal">$1,099.00</del></div>
                    <div class="pt-2 fs-xs">Qty: 1</div>
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
                    <div class="mb-0 h6">$429.00</div>
                    <div class="pt-2 fs-xs">Qty: 1</div>
                </div>
            </div>
        </div>

        <div class="offcanvas-header">
            <a class="btn btn-lg btn-outline-secondary w-100" href="checkout-v1-cart.html">Edit cart</a>
        </div>
    </div>


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
        data-sticky-navbar="{&quot;offset&quot;: 200}">
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
                                                                        href="shop-catalog-electronics.html">Cell
                                                                        Phone Chargers</a>
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
                                                            <div class="d-none d-xl-block" style="width: 284px">
                                                            </div>
                                                            <div class="d-xl-none" style="width: 240px"></div>
                                                            <div
                                                                class="px-3 py-4 position-relative d-flex flex-column justify-content-center h-100 bg-body-secondary rounded-5">
                                                                <div class="px-2 text-center">
                                                                    <span
                                                                        class="mb-2 badge bg-danger bg-opacity-10 text-danger fs-sm rounded-pill">Huge
                                                                        sale!</span>
                                                                    <div class="mb-2 fs-sm text-light-emphasis">Save
                                                                        up to <span class="fw-semibold">$350</span>
                                                                    </div>
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
        <div class="container py-5">
            <div class="pt-1 pb-2 row pt-sm-3 pt-lg-4 pb-md-3 pb-lg-4 pb-xl-5">
                <div class="mb-5 col-lg-8 col-xl-7 position-relative z-2 mb-lg-0">
                    <div class="gap-5 accordion d-flex flex-column pe-lg-4 pe-xl-0" id="checkout">

                        <!-- Delivery info overview + Edit button -->
                        <div class="border-0 accordion-item d-flex align-items-start">
                            <div class="flex-shrink-0 d-flex align-items-center justify-content-center bg-body-secondary text-dark-emphasis rounded-circle"
                                style="width: 2rem; height: 2rem; margin-top: -.125rem">
                                <i class="ci-check fs-base"></i>
                            </div>
                            <div class="w-100 ps-3 ps-md-4">
                                <div class="d-flex align-items-center">
                                    <h2 class="mb-0 accordion-header h5 me-3" id="deliveryInfoHeading">
                                        <span class="d-none d-lg-inline">Delivery information</span>
                                        <button type="button"
                                            class="py-1 accordion-button collapsed fs-5 d-lg-none"
                                            data-bs-toggle="collapse" data-bs-target="#deliveryInfo"
                                            aria-expanded="false" aria-controls="deliveryInfo">
                                            <span class="me-2">Delivery information</span>
                                        </button>
                                    </h2>
                                    <div class="nav ms-auto">
                                        <a class="p-0 nav-link text-decoration-underline"
                                            href="checkout-v1-delivery-2.html">Edit</a>
                                    </div>
                                </div>
                                <div class="accordion-collapse collapse d-lg-block" id="deliveryInfo"
                                    aria-labelledby="deliveryInfoHeading" data-bs-parent="#checkout">
                                    <div class="p-0 pt-3 accordion-body pt-md-4">
                                        <h3 class="mb-2 fs-sm">Postcode</h3>
                                        <p class="fs-sm">15006</p>
                                        <h3 class="mb-2 fs-sm">Estimated delivery date</h3>
                                        <div class="d-flex align-items-center fs-sm">
                                            Monday, 13
                                            <span class="mx-2 opacity-40">|</span> 12:00 - 16:00
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>


                        <!-- Shipping address overview + Edit button -->
                        <div class="border-0 accordion-item d-flex align-items-start">
                            <div class="flex-shrink-0 d-flex align-items-center justify-content-center bg-body-secondary text-dark-emphasis rounded-circle"
                                style="width: 2rem; height: 2rem; margin-top: -.125rem">
                                <i class="ci-check fs-base"></i>
                            </div>
                            <div class="w-100 ps-3 ps-md-4">
                                <div class="d-flex align-items-center">
                                    <h2 class="mb-0 accordion-header h5 me-3" id="shippingAddressHeading">
                                        <span class="d-none d-lg-inline">Shipping address</span>
                                        <button type="button"
                                            class="py-1 accordion-button collapsed fs-5 d-lg-none"
                                            data-bs-toggle="collapse" data-bs-target="#shippingAddress"
                                            aria-expanded="false" aria-controls="shippingAddress">
                                            <span class="me-2">Shipping address</span>
                                        </button>
                                    </h2>
                                    <div class="nav ms-auto">
                                        <a class="p-0 nav-link text-decoration-underline"
                                            href="checkout-v1-shipping.html">Edit</a>
                                    </div>
                                </div>
                                <div class="accordion-collapse collapse d-lg-block" id="shippingAddress"
                                    aria-labelledby="shippingAddressHeading" data-bs-parent="#checkout">
                                    <ul class="p-0 pt-3 mb-0 accordion-body list-unstyled fs-sm pt-md-4">
                                        <li>Jane Cooper</li>
                                        <li>jane.cooper@email.com</li>
                                        <li>(215) 555-1234</li>
                                        <li>Pennsylvania 15006</li>
                                        <li>567 Cherry Lane Apt B12 Harrisburg</li>
                                    </ul>
                                </div>
                            </div>
                        </div>


                        <!-- Payment method -->
                        <div class="d-flex align-items-start">
                            <div class="flex-shrink-0 text-white d-flex align-items-center justify-content-center bg-primary rounded-circle fs-sm fw-semibold lh-1"
                                style="width: 2rem; height: 2rem; margin-top: -.125rem">3</div>
                            <div class="w-100 ps-3 ps-md-4">
                                <h2 class="mb-0 h5">Payment</h2>
                                <div class="mb-4" id="paymentMethod" role="list">

                                    <!-- Cash on delivery -->
                                    <div class="mt-4">
                                        <div class="mb-0 form-check" role="listitem" data-bs-toggle="collapse"
                                            data-bs-target="#cash" aria-expanded="false" aria-controls="cash">
                                            <label class="form-check-label w-100 text-dark-emphasis fw-semibold">
                                                <input type="radio" class="form-check-input fs-base me-2 me-sm-3"
                                                    name="payment-method">
                                                Cash on delivery
                                            </label>
                                        </div>
                                        <div class="collapse" id="cash" data-bs-parent="#paymentMethod">
                                            <div
                                                class="pt-3 pb-2 d-sm-flex align-items-center pt-sm-4 ps-3 ms-2 ms-sm-3">
                                                <span class="fs-sm me-3">I would require a change from:</span>
                                                <div class="mt-2 input-group mt-sm-0" style="max-width: 150px">
                                                    <span class="input-group-text">
                                                        <i class="ci-dollar-sign"></i>
                                                    </span>
                                                    <input type="number" class="form-control"
                                                        aria-label="Amount (to the nearest dollar)">
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <!-- Credit card -->
                                    <div class="mt-4">
                                        <div class="mb-0 form-check" role="listitem" data-bs-toggle="collapse"
                                            data-bs-target="#card" aria-expanded="true" aria-controls="card">
                                            <label
                                                class="form-check-label d-flex align-items-center text-dark-emphasis fw-semibold">
                                                <input type="radio" class="form-check-input fs-base me-2 me-sm-3"
                                                    name="payment-method" checked="">
                                                Credit or debit card
                                                <span class="gap-2 d-none d-sm-flex ms-3">
                                                    <img src="assets/img/payment-methods/amex.svg"
                                                        class="d-block bg-info rounded-1" width="36"
                                                        alt="Amex">
                                                    <img src="assets/img/payment-methods/visa-light-mode.svg"
                                                        class="d-none-dark" width="36" alt="Visa">
                                                    <img src="assets/img/payment-methods/visa-dark-mode.svg"
                                                        class="d-none d-block-dark" width="36" alt="Visa">
                                                    <img src="assets/img/payment-methods/mastercard.svg"
                                                        width="36" alt="Mastercard">
                                                    <img src="assets/img/payment-methods/maestro.svg" width="36"
                                                        alt="Maestro">
                                                </span>
                                            </label>
                                        </div>
                                        <div class="collapse show" id="card" data-bs-parent="#paymentMethod">
                                            <form class="pt-4 pb-2 needs-validation ps-3 ms-2 ms-sm-3"
                                                novalidate="">
                                                <div class="mb-3 position-relative mb-sm-4"
                                                    data-input-format="{&quot;creditCard&quot;: true}">
                                                    <input type="text"
                                                        class="form-control form-control-lg form-icon-end"
                                                        placeholder="Card number" required="">
                                                    <span
                                                        class="position-absolute d-flex top-50 end-0 translate-middle-y fs-5 text-body-tertiary me-3"
                                                        data-card-icon=""></span>
                                                </div>
                                                <div class="row row-cols-1 row-cols-sm-2 g-3 g-sm-4">
                                                    <div class="col">
                                                        <input type="text" class="form-control form-control-lg"
                                                            data-input-format="{&quot;date&quot;: true, &quot;datePattern&quot;: [&quot;m&quot;, &quot;y&quot;]}"
                                                            placeholder="MM/YY">
                                                    </div>
                                                    <div class="col">
                                                        <input type="text" class="form-control form-control-lg"
                                                            maxlength="4"
                                                            data-input-format="{&quot;numeral&quot;: true, &quot;numeralPositiveOnly&quot;: true, &quot;numeralThousandsGroupStyle&quot;: &quot;none&quot;}"
                                                            placeholder="CVC">
                                                    </div>
                                                </div>
                                            </form>
                                        </div>
                                    </div>

                                    <!-- PayPal -->
                                    <div class="mt-4">
                                        <div class="mb-0 form-check" role="listitem" data-bs-toggle="collapse"
                                            data-bs-target="#paypal" aria-expanded="false" aria-controls="paypal">
                                            <label
                                                class="form-check-label d-flex align-items-center text-dark-emphasis fw-semibold">
                                                <input type="radio" class="form-check-input fs-base me-2 me-sm-3"
                                                    name="payment-method">
                                                PayPal
                                                <img src="assets/img/payment-methods/paypal-icon.svg" class="ms-3"
                                                    width="16" alt="PayPal">
                                            </label>
                                        </div>
                                        <div class="collapse" id="paypal" data-bs-parent="#paymentMethod">
                                        </div>
                                    </div>

                                    <!-- Google Pay -->
                                    <div class="mt-4">
                                        <div class="mb-0 form-check" role="listitem" data-bs-toggle="collapse"
                                            data-bs-target="#googlepay" aria-expanded="false"
                                            aria-controls="googlepay">
                                            <label
                                                class="form-check-label d-flex align-items-center text-dark-emphasis fw-semibold">
                                                <input type="radio" class="form-check-input fs-base me-2 me-sm-3"
                                                    name="payment-method">
                                                Google Pay
                                                <img src="assets/img/payment-methods/google-icon.svg" class="ms-3"
                                                    width="20" alt="Google Pay">
                                            </label>
                                        </div>
                                        <div class="collapse" id="googlepay" data-bs-parent="#paymentMethod">
                                        </div>
                                    </div>
                                </div>

                                <!-- Add promo code button -->
                                <div class="pb-3 mb-2 nav mb-sm-3">
                                    <a class="p-0 nav-link animate-underline" href="#!">
                                        <i class="ci-plus-circle fs-xl ms-a me-2"></i>
                                        <span class="animate-target">Add a promo code or a gift card</span>
                                    </a>
                                </div>

                                <!-- Additional comments -->
                                <textarea class="mb-4 form-control form-control-lg" rows="3" placeholder="Additional comments"></textarea>

                                <div class="form-check mb-lg-4">
                                    <input type="checkbox" class="form-check-input" id="accept-terms">
                                    <label for="accept-terms" class="form-check-label nav align-items-center">
                                        I accept the
                                        <a class="p-0 nav-link text-decoration-underline fw-normal ms-1"
                                            href="terms-and-conditions.html">Terms and Conditions</a>
                                    </label>
                                </div>

                                <!-- Pay button visible on screens > 991px wide (lg breakpoint) -->
                                <a class="btn btn-lg btn-primary w-100 d-none d-lg-flex"
                                    href="checkout-v1-thankyou.html">Pay $2,406.90</a>
                            </div>
                        </div>
                    </div>
                </div>


                <!-- Order summary (sticky sidebar) -->
                <aside class="col-lg-4 offset-xl-1" style="margin-top: -100px">
                    <div class="top-0 position-sticky" style="padding-top: 100px">
                        <div class="p-4 mb-3 bg-body-tertiary rounded-5">
                            <div class="p-sm-2 p-lg-0 p-xl-2">
                                <div class="pb-4 mb-4 border-bottom">
                                    <div class="mb-4 d-flex align-items-center justify-content-between">
                                        <h5 class="mb-0">Order summary</h5>
                                        <div class="nav">
                                            <a class="p-0 nav-link text-decoration-underline"
                                                href="checkout-v1-cart.html">Edit</a>
                                        </div>
                                    </div>
                                    <a class="gap-2 d-flex align-items-center text-decoration-none"
                                        href="#orderPreview" data-bs-toggle="offcanvas">
                                        <div class="ratio ratio-1x1" style="max-width: 64px">
                                            <img src="assets/img/shop/electronics/thumbs/08.png" class="p-1 d-block"
                                                alt="iPhone">
                                        </div>
                                        <div class="ratio ratio-1x1" style="max-width: 64px">
                                            <img src="assets/img/shop/electronics/thumbs/09.png" class="p-1 d-block"
                                                alt="iPad Pro">
                                        </div>
                                        <div class="ratio ratio-1x1" style="max-width: 64px">
                                            <img src="assets/img/shop/electronics/thumbs/01.png" class="p-1 d-block"
                                                alt="Smart Watch">
                                        </div>
                                        <i class="p-0 ci-chevron-right text-body fs-xl ms-auto"></i>
                                    </a>
                                </div>
                                <ul class="gap-3 mb-0 list-unstyled fs-sm">
                                    <li class="d-flex justify-content-between">
                                        Subtotal (3 items):
                                        <span class="text-dark-emphasis fw-medium">$2,427.00</span>
                                    </li>
                                    <li class="d-flex justify-content-between">
                                        Saving:
                                        <span class="text-danger fw-medium">-$110.00</span>
                                    </li>
                                    <li class="d-flex justify-content-between">
                                        Tax collected:
                                        <span class="text-dark-emphasis fw-medium">$73.40</span>
                                    </li>
                                    <li class="d-flex justify-content-between">
                                        Shipping:
                                        <span class="text-dark-emphasis fw-medium">$16.50</span>
                                    </li>
                                </ul>
                                <div class="pt-4 mt-4 border-top">
                                    <div class="mb-3 d-flex justify-content-between">
                                        <span class="fs-sm">Estimated total:</span>
                                        <span class="mb-0 h5">$2,406.90</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="p-4 bg-body-tertiary rounded-5">
                            <div class="d-flex align-items-center px-sm-2 px-lg-0 px-xl-2">
                                <svg class="flex-shrink-0 text-warning" xmlns="http://www.w3.org/2000/svg"
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
                                </svg>
                                <div class="text-dark-emphasis fs-sm ps-2 ms-1">Congratulations! You have earned <span
                                        class="fw-semibold">240 bonuses</span></div>
                            </div>
                        </div>
                    </div>
                </aside>
            </div>
        </div>
    </main>


    <!-- Page footer -->
    <footer class="footer position-relative bg-dark border-top">
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

        <!-- Additional spacing to accommodate the fixed button -->
        <div class="d-lg-none" style="height: 4rem"></div>
    </footer>


    <!-- Fixed positioned pay button that is visible on screens < 992px wide (lg breakpoint) -->
    <div class="px-3 py-2 shadow fixed-bottom z-sticky w-100 bg-body border-top d-lg-none">
        <a class="btn btn-lg btn-primary w-100" href="checkout-v1-thankyou.html">Pay $2,406.90</a>
    </div>


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
    <script src="assets/vendor/cleave.js/cleave.min.js"></script>

    <!-- Bootstrap + Theme scripts -->
    <script src="assets/js/theme.min.js"></script>


</body>

</html>

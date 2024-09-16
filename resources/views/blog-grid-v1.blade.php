<!DOCTYPE html>
<html lang="en" data-bs-theme="light" data-pwa="true">

<head>
    <meta charset="utf-8">

    <!-- Viewport -->
    <meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1, maximum-scale=1, viewport-fit=cover">

    <!-- SEO Meta Tags -->
    <title>Cartzilla | Blog Grid View v.1</title>
    <meta name="description" content="Cartzilla - Multipurpose Bootstrap E-Commerce HTML Template">
    <meta name="keywords" content="online shop, e-commerce, online store, market, multipurpose, product landing, cart, checkout, ui kit, light and dark mode, bootstrap, html5, css3, javascript, gallery, slider, mobile, pwa">
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
    <link rel="preload" href="assets/icons/cartzilla-icons.woff2" as="font" type="font/woff2" crossorigin="">
    <link rel="stylesheet" href="assets/icons/cartzilla-icons.min.css">

    <!-- Vendor styles -->
    <link rel="stylesheet" href="assets/vendor/swiper/swiper-bundle.min.css">

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
    <div class="offcanvas offcanvas-end pb-sm-2 px-sm-2" id="shoppingCart" tabindex="-1" aria-labelledby="shoppingCartLabel" style="width: 500px">

        <!-- Header -->
        <div class="py-3 offcanvas-header flex-column align-items-start pt-lg-4">
            <div class="mb-3 d-flex align-items-center justify-content-between w-100 mb-lg-4">
                <h4 class="offcanvas-title" id="shoppingCartLabel">Shopping cart</h4>
                <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
            </div>
            <p class="fs-sm">Buy <span class="text-dark-emphasis fw-semibold">$183</span> more to get <span class="text-dark-emphasis fw-semibold">Free Shipping</span></p>
            <div class="progress w-100" role="progressbar" aria-label="Free shipping progress" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100" style="height: 4px">
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
                        <a class="d-block fs-sm fw-medium text-truncate animate-target" href="shop-product-general-electronics.html">Apple iPhone 14 128GB White</a>
                    </h5>
                    <div class="pb-1 mb-2 h6">$899.00</div>
                    <div class="d-flex align-items-center justify-content-between">
                        <div class="count-input rounded-2">
                            <button type="button" class="btn btn-icon btn-sm" data-decrement="" aria-label="Decrement quantity">
                  <i class="ci-minus"></i>
                </button>
                            <input type="number" class="form-control form-control-sm" value="1" readonly="">
                            <button type="button" class="btn btn-icon btn-sm" data-increment="" aria-label="Increment quantity">
                  <i class="ci-plus"></i>
                </button>
                        </div>
                        <button type="button" class="btn-close fs-sm" data-bs-toggle="tooltip" data-bs-custom-class="tooltip-sm" data-bs-title="Remove" aria-label="Remove from cart"></button>
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
                        <a class="d-block fs-sm fw-medium text-truncate animate-target" href="shop-product-general-electronics.html">Tablet Apple iPad Pro M2</a>
                    </h5>
                    <div class="pb-1 mb-2 h6">$989.00 <del class="text-body-tertiary fs-xs fw-normal">$1,099.00</del></div>
                    <div class="d-flex align-items-center justify-content-between">
                        <div class="count-input rounded-2">
                            <button type="button" class="btn btn-icon btn-sm" data-decrement="" aria-label="Decrement quantity">
                  <i class="ci-minus"></i>
                </button>
                            <input type="number" class="form-control form-control-sm" value="1" readonly="">
                            <button type="button" class="btn btn-icon btn-sm" data-increment="" aria-label="Increment quantity">
                  <i class="ci-plus"></i>
                </button>
                        </div>
                        <button type="button" class="btn-close fs-sm" data-bs-toggle="tooltip" data-bs-custom-class="tooltip-sm" data-bs-title="Remove" aria-label="Remove from cart"></button>
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
                        <a class="d-block fs-sm fw-medium text-truncate animate-target" href="shop-product-general-electronics.html">Smart Watch Series 7, White</a>
                    </h5>
                    <div class="pb-1 mb-2 h6">$429.00</div>
                    <div class="d-flex align-items-center justify-content-between">
                        <div class="count-input rounded-2">
                            <button type="button" class="btn btn-icon btn-sm" data-decrement="" aria-label="Decrement quantity">
                  <i class="ci-minus"></i>
                </button>
                            <input type="number" class="form-control form-control-sm" value="1" readonly="">
                            <button type="button" class="btn btn-icon btn-sm" data-increment="" aria-label="Increment quantity">
                  <i class="ci-plus"></i>
                </button>
                        </div>
                        <button type="button" class="btn-close fs-sm" data-bs-toggle="tooltip" data-bs-custom-class="tooltip-sm" data-bs-title="Remove" aria-label="Remove from cart"></button>
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
    <header class="p-0 navbar navbar-expand-lg navbar-dark bg-dark d-block z-fixed" data-sticky-navbar="{&quot;offset&quot;: 200}">
        <div class="container py-1 d-block py-lg-3" data-bs-theme="dark">
            <div class="pt-1 navbar-stuck-hide"></div>
            <div class="row flex-nowrap align-items-center g-0">
                <div class="col col-lg-3 d-flex align-items-center">

                    <!-- Mobile offcanvas menu toggler (Hamburger) -->
                    <button type="button" class="navbar-toggler me-4 me-lg-0" data-bs-toggle="offcanvas" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-label="Toggle navigation">
              <span class="navbar-toggler-icon"></span>
            </button>

                    <!-- Navbar brand (Logo) -->
                    <a href="home-electronics.html" class="navbar-brand me-0">
              <span class="flex-shrink-0 d-none d-sm-flex text-primary me-2">
                <svg xmlns="http://www.w3.org/2000/svg" width="36" height="36"><path d="M36 18.01c0 8.097-5.355 14.949-12.705 17.2a18.12 18.12 0 0 1-5.315.79C9.622 36 2.608 30.313.573 22.611.257 21.407.059 20.162 0 18.879v-1.758c.02-.395.059-.79.099-1.185.099-.908.277-1.817.514-2.686C2.687 5.628 9.682 0 18 0c5.572 0 10.551 2.528 13.871 6.517 1.502 1.797 2.648 3.91 3.359 6.201.494 1.659.771 3.436.771 5.292z" fill="currentColor"></path><g fill="#fff"><path d="M17.466 21.624c-.514 0-.988-.316-1.146-.829-.198-.632.138-1.303.771-1.501l7.666-2.469-1.205-8.254-13.317 4.621a1.19 1.19 0 0 1-1.521-.75 1.19 1.19 0 0 1 .751-1.521l13.89-4.818c.553-.197 1.166-.138 1.64.158a1.82 1.82 0 0 1 .85 1.284l1.344 9.183c.138.987-.494 1.994-1.482 2.33l-7.864 2.528-.375.04zm7.31.138c-.178-.632-.85-1.007-1.482-.81l-5.177 1.58c-2.331.79-3.28.02-3.418-.099l-6.56-8.412a4.25 4.25 0 0 0-4.406-1.758l-3.122.987c-.237.889-.415 1.777-.514 2.686l4.228-1.363a1.84 1.84 0 0 1 1.857.81l6.659 8.551c.751.948 2.015 1.323 3.359 1.323.909 0 1.857-.178 2.687-.474l5.078-1.54c.632-.178 1.008-.829.81-1.481z"></path><use href="#czlogo"></use><use href="#czlogo" x="8.516" y="-2.172"></use></g><defs><path id="czlogo" d="M18.689 28.654a1.94 1.94 0 0 1-1.936 1.935 1.94 1.94 0 0 1-1.936-1.935 1.94 1.94 0 0 1 1.936-1.935 1.94 1.94 0 0 1 1.936 1.935z"></path></defs></svg>
              </span>
              Cartzilla
            </a>
                </div>
                <div class="col col-lg-9 d-flex align-items-center justify-content-end">

                    <!-- Search visible on screens > 991px wide (lg breakpoint) -->
                    <div class="position-relative flex-fill d-none d-lg-block pe-4 pe-xl-5">
                        <i class="text-white ci-search position-absolute top-50 translate-middle-y d-flex fs-lg ms-3"></i>
                        <input type="search" class="border-white form-control form-control-lg form-icon-start rounded-pill" placeholder="Search the products">
                    </div>

                    <!-- Sale link visible on screens > 1200px wide (xl breakpoint) -->
                    <a class="d-none d-xl-flex align-items-center text-decoration-none animate-shake navbar-stuck-hide me-3 me-xl-4 me-xxl-5" href="shop-catalog-electronics.html">
                        <div class="bg-opacity-75 btn btn-icon btn-lg fs-lg text-primary bg-body-secondary pe-none rounded-circle">
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
                        <button type="button" class="navbar-toggler d-none navbar-stuck-show me-3" data-bs-toggle="collapse" data-bs-target="#stuckNav" aria-controls="stuckNav" aria-expanded="false" aria-label="Toggle navigation in navbar stuck state">
                <span class="navbar-toggler-icon"></span>
              </button>

                        <!-- Theme switcher (light/dark/auto) -->
                        <div class="dropdown">
                            <button type="button" class="border-0 theme-switcher btn btn-icon btn-lg btn-outline-secondary fs-lg rounded-circle animate-scale" data-bs-toggle="dropdown" aria-expanded="false" aria-label="Toggle theme (light)">
                  <span class="theme-icon-active d-flex animate-target">
                    <i class="ci-sun"></i>
                  </span>
                </button>
                            <ul class="dropdown-menu" style="--cz-dropdown-min-width: 9rem">
                                <li>
                                    <button type="button" class="dropdown-item active" data-bs-theme-value="light" aria-pressed="true">
                      <span class="theme-icon d-flex fs-base me-2">
                        <i class="ci-sun"></i>
                      </span>
                      <span class="theme-label">Light</span>
                      <i class="item-active-indicator ci-check ms-auto"></i>
                    </button>
                                </li>
                                <li>
                                    <button type="button" class="dropdown-item" data-bs-theme-value="dark" aria-pressed="false">
                      <span class="theme-icon d-flex fs-base me-2">
                        <i class="ci-moon"></i>
                      </span>
                      <span class="theme-label">Dark</span>
                      <i class="item-active-indicator ci-check ms-auto"></i>
                    </button>
                                </li>
                                <li>
                                    <button type="button" class="dropdown-item" data-bs-theme-value="auto" aria-pressed="false">
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
                        <button type="button" class="border-0 btn btn-icon btn-lg fs-xl btn-outline-secondary rounded-circle animate-shake d-lg-none" data-bs-toggle="collapse" data-bs-target="#searchBar" aria-expanded="false" aria-controls="searchBar" aria-label="Toggle search bar">
                <i class="ci-search animate-target"></i>
              </button>

                        <!-- Account button visible on screens > 768px wide (md breakpoint) -->
                        <a class="border-0 btn btn-icon btn-lg fs-lg btn-outline-secondary rounded-circle animate-shake d-none d-md-inline-flex" href="account-signin.html">
                <i class="ci-user animate-target"></i>
                <span class="visually-hidden">Account</span>
              </a>

                        <!-- Wishlist button visible on screens > 768px wide (md breakpoint) -->
                        <a class="border-0 btn btn-icon btn-lg fs-lg btn-outline-secondary rounded-circle animate-pulse d-none d-md-inline-flex" href="account-wishlist.html">
                <i class="ci-heart animate-target"></i>
                <span class="visually-hidden">Wishlist</span>
              </a>

                        <!-- Cart button -->
                        <button type="button" class="btn btn-icon btn-lg btn-secondary position-relative rounded-circle ms-2" data-bs-toggle="offcanvas" data-bs-target="#shoppingCart" aria-controls="shoppingCart" aria-label="Shopping cart">
                <span class="top-0 border position-absolute start-100 mt-n1 ms-n3 badge text-bg-success border-3 border-dark rounded-pill" style="--cz-badge-padding-y: .25em; --cz-badge-padding-x: .42em">3</span>
                <span class="top-0 position-absolute start-0 d-flex align-items-center justify-content-center w-100 h-100 rounded-circle animate-slide-end fs-lg">
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
                <input type="search" class="border-white form-control form-icon-start rounded-pill" placeholder="Search the products" data-autofocus="collapse">
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

                            <!-- Categories mega menu -->
                            <div class="col-lg-3">
                                <div class="navbar-nav">
                                    <div class="dropdown w-100">

                                        <!-- Buttton visible on screens > 991px wide (lg breakpoint) -->
                                        <div class="cursor-pointer d-none d-lg-block" data-bs-toggle="dropdown" data-bs-trigger="hover" data-bs-theme="dark">
                                            <a class="top-0 position-absolute start-0 w-100 h-100" href="shop-categories-electronics.html">
                          <span class="visually-hidden">Categories</span>
                        </a>
                                            <button type="button" class="btn btn-lg btn-secondary dropdown-toggle w-100 rounded-bottom-0 justify-content-start pe-none">
                          <i class="ci-grid fs-lg"></i>
                          <span class="ms-2 me-auto">Categories</span>
                        </button>
                                        </div>

                                        <!-- Buttton visible on screens < 992px wide (lg breakpoint) -->
                                        <button type="button" class="mb-2 btn btn-lg btn-secondary dropdown-toggle w-100 justify-content-start d-lg-none" data-bs-toggle="dropdown" data-bs-auto-close="outside">
                        <i class="ci-grid fs-lg"></i>
                        <span class="ms-2 me-auto">Categories</span>
                      </button>

                                        <!-- Mega menu -->
                                        <ul class="py-1 dropdown-menu w-100 rounded-top-0 rounded-bottom-4 p-lg-1" style="--cz-dropdown-spacer: 0; --cz-dropdown-item-padding-y: .625rem; --cz-dropdown-item-spacer: 0">
                                            <li class="pt-2 d-lg-none">
                                                <a class="dropdown-item fw-medium" href="shop-categories-electronics.html">
                            <i class="ci-grid fs-xl opacity-60 pe-1 me-2"></i>
                            All Categories
                            <i class="ci-chevron-right fs-base ms-auto me-n1"></i>
                          </a>
                                            </li>
                                            <li class="dropend position-static">
                                                <div class="pt-2 pb-1 rounded position-relative px-lg-2" data-bs-toggle="dropdown" data-bs-trigger="hover">
                                                    <a class="dropdown-item fw-medium stretched-link d-none d-lg-flex" href="shop-catalog-electronics.html">
                              <i class="ci-computer fs-xl opacity-60 pe-1 me-2"></i>
                              <span class="text-truncate">Computers &amp; Accessories</span>
                              <i class="ci-chevron-right fs-base ms-auto me-n1"></i>
                            </a>
                                                    <div class="dropdown-item fw-medium text-wrap stretched-link d-lg-none">
                                                        <i class="ci-computer fs-xl opacity-60 pe-1 me-2"></i> Computers &amp; Accessories
                                                        <i class="ci-chevron-down fs-base ms-auto me-n1"></i>
                                                    </div>
                                                </div>
                                                <div class="p-4 dropdown-menu rounded-4" style="top: 1rem; height: calc(100% - .1875rem); --cz-dropdown-spacer: .3125rem; animation: none;">
                                                    <div class="gap-4 d-flex flex-column flex-lg-row h-100">
                                                        <div style="min-width: 194px">
                                                            <div class="d-flex w-100">
                                                                <a class="animate-underline animate-target d-inline h6 text-dark-emphasis text-decoration-none text-truncate" href="shop-catalog-electronics.html">Computers</a>
                                                            </div>
                                                            <ul class="gap-2 nav flex-column mt-n2">
                                                                <li class="pt-1 d-flex w-100">
                                                                    <a class="p-0 nav-link animate-underline animate-target d-inline fw-normal text-truncate" href="shop-catalog-electronics.html">Laptops &amp; Tablets</a>
                                                                </li>
                                                                <li class="pt-1 d-flex w-100">
                                                                    <a class="p-0 nav-link animate-underline animate-target d-inline fw-normal text-truncate" href="shop-catalog-electronics.html">Desktop Computers</a>
                                                                </li>
                                                                <li class="pt-1 d-flex w-100">
                                                                    <a class="p-0 nav-link animate-underline animate-target d-inline fw-normal text-truncate" href="shop-catalog-electronics.html">External Components</a>
                                                                </li>
                                                                <li class="pt-1 d-flex w-100">
                                                                    <a class="p-0 nav-link animate-underline animate-target d-inline fw-normal text-truncate" href="shop-catalog-electronics.html">Interal Components</a>
                                                                </li>
                                                                <li class="pt-1 d-flex w-100">
                                                                    <a class="p-0 nav-link animate-underline animate-target d-inline fw-normal text-truncate" href="shop-catalog-electronics.html">Networking Products (NAS)</a>
                                                                </li>
                                                                <li class="pt-1 d-flex w-100">
                                                                    <a class="p-0 nav-link animate-underline animate-target d-inline fw-normal text-truncate" href="shop-catalog-electronics.html">Single Board Computers</a>
                                                                </li>
                                                                <li class="pt-1 d-flex w-100">
                                                                    <a class="p-0 nav-link animate-underline animate-target d-inline fw-normal text-truncate" href="shop-catalog-electronics.html">Desktop Barebones</a>
                                                                </li>
                                                            </ul>
                                                        </div>
                                                        <div style="min-width: 194px">
                                                            <div class="d-flex w-100">
                                                                <a class="animate-underline animate-target d-inline h6 text-dark-emphasis text-decoration-none text-truncate" href="shop-catalog-electronics.html">Accessories</a>
                                                            </div>
                                                            <ul class="gap-2 nav flex-column mt-n2">
                                                                <li class="pt-1 d-flex w-100">
                                                                    <a class="p-0 nav-link animate-underline animate-target d-inline fw-normal text-truncate" href="shop-catalog-electronics.html">Monitors</a>
                                                                </li>
                                                                <li class="pt-1 d-flex w-100">
                                                                    <a class="p-0 nav-link animate-underline animate-target d-inline fw-normal text-truncate" href="shop-catalog-electronics.html">Bags, Cases &amp; Sleeves</a>
                                                                </li>
                                                                <li class="pt-1 d-flex w-100">
                                                                    <a class="p-0 nav-link animate-underline animate-target d-inline fw-normal text-truncate" href="shop-catalog-electronics.html">Batteries</a>
                                                                </li>
                                                                <li class="pt-1 d-flex w-100">
                                                                    <a class="p-0 nav-link animate-underline animate-target d-inline fw-normal text-truncate" href="shop-catalog-electronics.html">Charges &amp; Adapters</a>
                                                                </li>
                                                                <li class="pt-1 d-flex w-100">
                                                                    <a class="p-0 nav-link animate-underline animate-target d-inline fw-normal text-truncate" href="shop-catalog-electronics.html">Cooling Pads</a>
                                                                </li>
                                                                <li class="pt-1 d-flex w-100">
                                                                    <a class="p-0 nav-link animate-underline animate-target d-inline fw-normal text-truncate" href="shop-catalog-electronics.html">Mounts</a>
                                                                </li>
                                                                <li class="pt-1 d-flex w-100">
                                                                    <a class="p-0 nav-link animate-underline animate-target d-inline fw-normal text-truncate" href="shop-catalog-electronics.html">Replacement Screens</a>
                                                                </li>
                                                                <li class="pt-1 d-flex w-100">
                                                                    <a class="p-0 nav-link animate-underline animate-target d-inline fw-normal text-truncate" href="shop-catalog-electronics.html">Security Locks</a>
                                                                </li>
                                                                <li class="pt-1 d-flex w-100">
                                                                    <a class="p-0 nav-link animate-underline animate-target d-inline fw-normal text-truncate" href="shop-catalog-electronics.html">Stands</a>
                                                                </li>
                                                            </ul>
                                                        </div>
                                                        <div class="d-none d-lg-block">
                                                            <div class="d-none d-xl-block" style="width: 284px"></div>
                                                            <div class="d-xl-none" style="width: 240px"></div>
                                                            <div class="px-3 py-4 position-relative d-flex flex-column justify-content-center h-100 bg-body-secondary rounded-5">
                                                                <div class="px-2 text-center">
                                                                    <span class="mb-2 badge bg-danger bg-opacity-10 text-danger fs-sm rounded-pill">Save up to $400</span>
                                                                    <div class="mb-2 fs-sm text-light-emphasis">Starts from <del>$1,599.00</del> $1,399.00</div>
                                                                    <div class="mb-4 h2">Surface Laptop Studio</div>
                                                                </div>
                                                                <img src="assets/img/mega-menu/electronics/01.png" width="252" alt="Surface Laptop Studio">
                                                                <div class="mt-4 text-center">
                                                                    <a class="btn btn-sm btn-primary stretched-link" href="shop-catalog-electronics.html">Shop now</a>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </li>
                                            <li class="dropend position-static">
                                                <div class="pb-1 rounded position-relative px-lg-2" tabindex="0" data-bs-toggle="dropdown" data-bs-trigger="hover">
                                                    <a class="dropdown-item fw-medium stretched-link d-none d-lg-flex" href="shop-catalog-electronics.html">
                              <i class="ci-smartphone-2 fs-xl opacity-60 pe-1 me-2"></i>
                              <span class="text-truncate">Smartphones &amp; Tablets</span>
                              <i class="ci-chevron-right fs-base ms-auto me-n1"></i>
                            </a>
                                                    <div class="dropdown-item fw-medium stretched-link d-lg-none">
                                                        <i class="ci-smartphone-2 fs-xl opacity-60 pe-1 me-2"></i> Smartphones &amp; Tablets
                                                        <i class="ci-chevron-down fs-base ms-auto me-n1"></i>
                                                    </div>
                                                </div>
                                                <div class="p-4 dropdown-menu rounded-4" style="top: 1rem; height: calc(100% - .1875rem); --cz-dropdown-spacer: .3125rem; animation: none;">
                                                    <div class="gap-4 d-flex flex-column flex-lg-row h-100">
                                                        <div style="min-width: 194px">
                                                            <div class="d-flex w-100">
                                                                <a class="animate-underline animate-target d-inline h6 text-dark-emphasis text-decoration-none text-truncate" href="shop-catalog-electronics.html">Smartphones</a>
                                                            </div>
                                                            <ul class="gap-2 nav flex-column mt-n2">
                                                                <li class="pt-1 d-flex w-100">
                                                                    <a class="p-0 nav-link animate-underline animate-target d-inline fw-normal text-truncate" href="shop-catalog-electronics.html">Apple iPhone</a>
                                                                </li>
                                                                <li class="pt-1 d-flex w-100">
                                                                    <a class="p-0 nav-link animate-underline animate-target d-inline fw-normal text-truncate" href="shop-catalog-electronics.html">Google Pixel</a>
                                                                </li>
                                                                <li class="pt-1 d-flex w-100">
                                                                    <a class="p-0 nav-link animate-underline animate-target d-inline fw-normal text-truncate" href="shop-catalog-electronics.html">Android Smartphones</a>
                                                                </li>
                                                                <li class="pt-1 d-flex w-100">
                                                                    <a class="p-0 nav-link animate-underline animate-target d-inline fw-normal text-truncate" href="shop-catalog-electronics.html">Phablets</a>
                                                                </li>
                                                            </ul>
                                                            <div class="pt-4 d-flex w-100">
                                                                <a class="animate-underline animate-target d-inline h6 text-dark-emphasis text-decoration-none text-truncate" href="shop-catalog-electronics.html">Tablets</a>
                                                            </div>
                                                            <ul class="gap-2 nav flex-column mt-n2">
                                                                <li class="pt-1 d-flex w-100">
                                                                    <a class="p-0 nav-link animate-underline animate-target d-inline fw-normal text-truncate" href="shop-catalog-electronics.html">Apple iPad</a>
                                                                </li>
                                                                <li class="pt-1 d-flex w-100">
                                                                    <a class="p-0 nav-link animate-underline animate-target d-inline fw-normal text-truncate" href="shop-catalog-electronics.html">Android Tablets</a>
                                                                </li>
                                                                <li class="pt-1 d-flex w-100">
                                                                    <a class="p-0 nav-link animate-underline animate-target d-inline fw-normal text-truncate" href="shop-catalog-electronics.html">Tablets with Keyboard</a>
                                                                </li>
                                                            </ul>
                                                        </div>
                                                        <div style="min-width: 194px">
                                                            <div class="d-flex w-100">
                                                                <a class="animate-underline animate-target d-inline h6 text-dark-emphasis text-decoration-none text-truncate" href="shop-catalog-electronics.html">Accessories</a>
                                                            </div>
                                                            <ul class="gap-2 nav flex-column mt-n2">
                                                                <li class="pt-1 d-flex w-100">
                                                                    <a class="p-0 nav-link animate-underline animate-target d-inline fw-normal text-truncate" href="shop-catalog-electronics.html">Accessory Kits</a>
                                                                </li>
                                                                <li class="pt-1 d-flex w-100">
                                                                    <a class="p-0 nav-link animate-underline animate-target d-inline fw-normal text-truncate" href="shop-catalog-electronics.html">Batteries &amp; Battery Packs</a>
                                                                </li>
                                                                <li class="pt-1 d-flex w-100">
                                                                    <a class="p-0 nav-link animate-underline animate-target d-inline fw-normal text-truncate" href="shop-catalog-electronics.html">Bags &amp; Cases</a>
                                                                </li>
                                                                <li class="pt-1 d-flex w-100">
                                                                    <a class="p-0 nav-link animate-underline animate-target d-inline fw-normal text-truncate" href="shop-catalog-electronics.html">Cables</a>
                                                                </li>
                                                                <li class="pt-1 d-flex w-100">
                                                                    <a class="p-0 nav-link animate-underline animate-target d-inline fw-normal text-truncate" href="shop-catalog-electronics.html">Car Accessories</a>
                                                                </li>
                                                                <li class="pt-1 d-flex w-100">
                                                                    <a class="p-0 nav-link animate-underline animate-target d-inline fw-normal text-truncate" href="shop-catalog-electronics.html">Charges &amp; Power Adapters</a>
                                                                </li>
                                                                <li class="pt-1 d-flex w-100">
                                                                    <a class="p-0 nav-link animate-underline animate-target d-inline fw-normal text-truncate" href="shop-catalog-electronics.html">FM Transmitters</a>
                                                                </li>
                                                                <li class="pt-1 d-flex w-100">
                                                                    <a class="p-0 nav-link animate-underline animate-target d-inline fw-normal text-truncate" href="shop-catalog-electronics.html">Lens Attachments</a>
                                                                </li>
                                                                <li class="pt-1 d-flex w-100">
                                                                    <a class="p-0 nav-link animate-underline animate-target d-inline fw-normal text-truncate" href="shop-catalog-electronics.html">Mounts &amp; Standsv</a>
                                                                </li>
                                                                <li class="pt-1 d-flex w-100">
                                                                    <a class="p-0 nav-link animate-underline animate-target d-inline fw-normal text-truncate" href="shop-catalog-electronics.html">Repair Kits</a>
                                                                </li>
                                                                <li class="pt-1 d-flex w-100">
                                                                    <a class="p-0 nav-link animate-underline animate-target d-inline fw-normal text-truncate" href="shop-catalog-electronics.html">Replacement Parts</a>
                                                                </li>
                                                                <li class="pt-1 d-flex w-100">
                                                                    <a class="p-0 nav-link animate-underline animate-target d-inline fw-normal text-truncate" href="shop-catalog-electronics.html">Styluses</a>
                                                                </li>
                                                            </ul>
                                                        </div>
                                                        <div class="d-none d-lg-block">
                                                            <div class="d-none d-xl-block" style="width: 284px"></div>
                                                            <div class="d-xl-none" style="width: 240px"></div>
                                                            <div class="px-3 py-4 position-relative d-flex flex-column justify-content-center h-100 bg-body-secondary rounded-5">
                                                                <div class="px-2 text-center">
                                                                    <i class="mb-2 ci-apple fs-1 text-dark-emphasis"></i>
                                                                    <div class="mb-2 fs-sm text-light-emphasis">Deal of the week</div>
                                                                    <div class="mb-4 h2">iPad Pro M1</div>
                                                                </div>
                                                                <img src="assets/img/mega-menu/electronics/02.png" width="252" alt="iPad Pro">
                                                                <div class="mt-4 text-center">
                                                                    <a class="btn btn-sm btn-primary stretched-link" href="shop-catalog-electronics.html">Shop now</a>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </li>
                                            <li class="dropend position-static">
                                                <div class="pb-1 rounded position-relative px-lg-2" tabindex="0" data-bs-toggle="dropdown" data-bs-trigger="hover">
                                                    <a class="dropdown-item fw-medium stretched-link d-none d-lg-flex" href="shop-catalog-electronics.html">
                              <i class="ci-monitor-2 fs-xl opacity-60 pe-1 me-2"></i>
                              <span class="text-truncate">TV, Video &amp; Audio</span>
                              <i class="ci-chevron-right fs-base ms-auto me-n1"></i>
                            </a>
                                                    <div class="dropdown-item fw-medium stretched-link d-lg-none">
                                                        <i class="ci-monitor-2 fs-xl opacity-60 pe-1 me-2"></i> TV, Video &amp; Audio
                                                        <i class="ci-chevron-down fs-base ms-auto me-n1"></i>
                                                    </div>
                                                </div>
                                                <div class="p-4 dropdown-menu rounded-4" style="top: 1rem; height: calc(100% - .1875rem); --cz-dropdown-spacer: .3125rem; animation: none;">
                                                    <div class="d-flex flex-column flex-lg-row h-100 gap-lg-4">
                                                        <div style="min-width: 194px">
                                                            <div class="d-flex w-100">
                                                                <a class="animate-underline animate-target d-inline h6 text-dark-emphasis text-decoration-none text-truncate" href="shop-catalog-electronics.html">TV, Video &amp; Audio</a>
                                                            </div>
                                                            <ul class="gap-2 nav flex-column mt-n2">
                                                                <li class="pt-1 d-flex w-100">
                                                                    <a class="p-0 nav-link animate-underline animate-target d-inline fw-normal text-truncate" href="shop-catalog-electronics.html">TV Stes</a>
                                                                </li>
                                                                <li class="pt-1 d-flex w-100">
                                                                    <a class="p-0 nav-link animate-underline animate-target d-inline fw-normal text-truncate" href="shop-catalog-electronics.html">Home Theater Systems</a>
                                                                </li>
                                                                <li class="pt-1 d-flex w-100">
                                                                    <a class="p-0 nav-link animate-underline animate-target d-inline fw-normal text-truncate" href="shop-catalog-electronics.html">DVD Players &amp; Recorders</a>
                                                                </li>
                                                                <li class="pt-1 d-flex w-100">
                                                                    <a class="p-0 nav-link animate-underline animate-target d-inline fw-normal text-truncate" href="shop-catalog-electronics.html">Blue-ray Players &amp; Recorders</a>
                                                                </li>
                                                                <li class="pt-1 d-flex w-100">
                                                                    <a class="p-0 nav-link animate-underline animate-target d-inline fw-normal text-truncate" href="shop-catalog-electronics.html">HD DVD Players &amp; Recorders</a>
                                                                </li>
                                                                <li class="pt-1 d-flex w-100">
                                                                    <a class="p-0 nav-link animate-underline animate-target d-inline fw-normal text-truncate" href="shop-catalog-electronics.html">DVD-VCR Combos</a>
                                                                </li>
                                                                <li class="pt-1 d-flex w-100">
                                                                    <a class="p-0 nav-link animate-underline animate-target d-inline fw-normal text-truncate" href="shop-catalog-electronics.html">DTV Converters</a>
                                                                </li>
                                                                <li class="pt-1 d-flex w-100">
                                                                    <a class="p-0 nav-link animate-underline animate-target d-inline fw-normal text-truncate" href="shop-catalog-electronics.html">AV Receivers</a>
                                                                </li>
                                                                <li class="pt-1 d-flex w-100">
                                                                    <a class="p-0 nav-link animate-underline animate-target d-inline fw-normal text-truncate" href="shop-catalog-electronics.html">AV Amplifiers</a>
                                                                </li>
                                                                <li class="pt-1 d-flex w-100">
                                                                    <a class="p-0 nav-link animate-underline animate-target d-inline fw-normal text-truncate" href="shop-catalog-electronics.html">Projectors</a>
                                                                </li>
                                                                <li class="pt-1 d-flex w-100">
                                                                    <a class="p-0 nav-link animate-underline animate-target d-inline fw-normal text-truncate" href="shop-catalog-electronics.html">Projection Screens</a>
                                                                </li>
                                                                <li class="pt-1 d-flex w-100">
                                                                    <a class="p-0 nav-link animate-underline animate-target d-inline fw-normal text-truncate" href="shop-catalog-electronics.html">Satelite Television</a>
                                                                </li>
                                                                <li class="pt-1 d-flex w-100">
                                                                    <a class="p-0 nav-link animate-underline animate-target d-inline fw-normal text-truncate" href="shop-catalog-electronics.html">TV-DTD Combos</a>
                                                                </li>
                                                                <li class="pt-1 d-flex w-100">
                                                                    <a class="p-0 nav-link animate-underline animate-target d-inline fw-normal text-truncate" href="shop-catalog-electronics.html">Sound Systems</a>
                                                                </li>
                                                            </ul>
                                                        </div>
                                                        <div style="min-width: 194px">
                                                            <ul class="gap-2 mt-2 nav flex-column mt-lg-0">
                                                                <li class="pt-1 d-flex w-100">
                                                                    <a class="p-0 nav-link animate-underline animate-target d-inline fw-normal text-truncate" href="shop-catalog-electronics.html">Home Cinema Systems</a>
                                                                </li>
                                                                <li class="pt-1 d-flex w-100">
                                                                    <a class="p-0 nav-link animate-underline animate-target d-inline fw-normal text-truncate" href="shop-catalog-electronics.html">Streaming Media Players</a>
                                                                </li>
                                                                <li class="pt-1 d-flex w-100">
                                                                    <a class="p-0 nav-link animate-underline animate-target d-inline fw-normal text-truncate" href="shop-catalog-electronics.html">VCRs</a>
                                                                </li>
                                                                <li class="pt-1 d-flex w-100">
                                                                    <a class="p-0 nav-link animate-underline animate-target d-inline fw-normal text-truncate" href="shop-catalog-electronics.html">Video Glasses</a>
                                                                </li>
                                                                <li class="pt-1 d-flex w-100">
                                                                    <a class="p-0 nav-link animate-underline animate-target d-inline fw-normal text-truncate" href="shop-catalog-electronics.html">Lens Attachments</a>
                                                                </li>
                                                                <li class="pt-1 d-flex w-100">
                                                                    <a class="p-0 nav-link animate-underline animate-target d-inline fw-normal text-truncate" href="shop-catalog-electronics.html">Subwoofers</a>
                                                                </li>
                                                                <li class="pt-1 d-flex w-100">
                                                                    <a class="p-0 nav-link animate-underline animate-target d-inline fw-normal text-truncate" href="shop-catalog-electronics.html">Sound Boosters</a>
                                                                </li>
                                                            </ul>
                                                        </div>
                                                        <div class="d-none d-lg-block">
                                                            <div class="d-none d-xl-block" style="width: 284px"></div>
                                                            <div class="d-xl-none" style="width: 240px"></div>
                                                            <div class="px-3 py-4 position-relative d-flex flex-column justify-content-center h-100 bg-body-secondary rounded-5">
                                                                <div class="px-2 text-center">
                                                                    <div class="mb-2 fs-sm text-light-emphasis">Best deal! Save up to <span class="fw-semibold">$500</span></div>
                                                                    <div class="mb-4 h2">LG OLED 4K Smart TV</div>
                                                                </div>
                                                                <img src="assets/img/mega-menu/electronics/03.png" width="252" alt="Smart TV">
                                                                <div class="mt-4 text-center">
                                                                    <a class="btn btn-sm btn-primary stretched-link" href="shop-catalog-electronics.html">Shop now</a>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </li>
                                            <li class="dropend position-static">
                                                <div class="pb-1 rounded position-relative px-lg-2" tabindex="0" data-bs-toggle="dropdown" data-bs-trigger="hover">
                                                    <a class="dropdown-item fw-medium stretched-link d-none d-lg-flex" href="shop-catalog-electronics.html">
                              <i class="ci-speaker-2 fs-xl opacity-60 pe-1 me-2"></i>
                              <span class="text-truncate">Speakers &amp; Home Music</span>
                              <i class="ci-chevron-right fs-base ms-auto me-n1"></i>
                            </a>
                                                    <div class="dropdown-item fw-medium stretched-link d-lg-none">
                                                        <i class="ci-speaker-2 fs-xl opacity-60 pe-1 me-2"></i> Speakers &amp; Home Music
                                                        <i class="ci-chevron-down fs-base ms-auto me-n1"></i>
                                                    </div>
                                                </div>
                                                <div class="p-4 dropdown-menu rounded-4" style="top: 1rem; height: calc(100% - .1875rem); --cz-dropdown-spacer: .3125rem; animation: none;">
                                                    <div class="gap-4 d-flex flex-column flex-lg-row h-100">
                                                        <div style="min-width: 194px">
                                                            <div class="d-flex w-100">
                                                                <a class="animate-underline animate-target d-inline h6 text-dark-emphasis text-decoration-none text-truncate" href="shop-catalog-electronics.html">Speakers</a>
                                                            </div>
                                                            <ul class="gap-2 nav flex-column mt-n2">
                                                                <li class="pt-1 d-flex w-100">
                                                                    <a class="p-0 nav-link animate-underline animate-target d-inline fw-normal text-truncate" href="shop-catalog-electronics.html">Smart Speakers</a>
                                                                </li>
                                                                <li class="pt-1 d-flex w-100">
                                                                    <a class="p-0 nav-link animate-underline animate-target d-inline fw-normal text-truncate" href="shop-catalog-electronics.html">Bluetooth Speakers</a>
                                                                </li>
                                                                <li class="pt-1 d-flex w-100">
                                                                    <a class="p-0 nav-link animate-underline animate-target d-inline fw-normal text-truncate" href="shop-catalog-electronics.html">Bookshelf Speakers</a>
                                                                </li>
                                                                <li class="pt-1 d-flex w-100">
                                                                    <a class="p-0 nav-link animate-underline animate-target d-inline fw-normal text-truncate" href="shop-catalog-electronics.html">Ceiling &amp; In-Wall Speakers</a>
                                                                </li>
                                                                <li class="pt-1 d-flex w-100">
                                                                    <a class="p-0 nav-link animate-underline animate-target d-inline fw-normal text-truncate" href="shop-catalog-electronics.html">Center-Channel Speakers</a>
                                                                </li>
                                                                <li class="pt-1 d-flex w-100">
                                                                    <a class="p-0 nav-link animate-underline animate-target d-inline fw-normal text-truncate" href="shop-catalog-electronics.html">Floorstanding Speakers</a>
                                                                </li>
                                                                <li class="pt-1 d-flex w-100">
                                                                    <a class="p-0 nav-link animate-underline animate-target d-inline fw-normal text-truncate" href="shop-catalog-electronics.html">Outdoor Speakers</a>
                                                                </li>
                                                                <li class="pt-1 d-flex w-100">
                                                                    <a class="p-0 nav-link animate-underline animate-target d-inline fw-normal text-truncate" href="shop-catalog-electronics.html">Satellite Speakers</a>
                                                                </li>
                                                                <li class="pt-1 d-flex w-100">
                                                                    <a class="p-0 nav-link animate-underline animate-target d-inline fw-normal text-truncate" href="shop-catalog-electronics.html">Sound Bars</a>
                                                                </li>
                                                                <li class="pt-1 d-flex w-100">
                                                                    <a class="p-0 nav-link animate-underline animate-target d-inline fw-normal text-truncate" href="shop-catalog-electronics.html">Surround Sound Systems</a>
                                                                </li>
                                                            </ul>
                                                        </div>
                                                        <div style="min-width: 194px">
                                                            <div class="d-flex w-100">
                                                                <a class="animate-underline animate-target d-inline h6 text-dark-emphasis text-decoration-none text-truncate" href="shop-catalog-electronics.html">Home Audio</a>
                                                            </div>
                                                            <ul class="gap-2 nav flex-column mt-n2">
                                                                <li class="pt-1 d-flex w-100">
                                                                    <a class="p-0 nav-link animate-underline animate-target d-inline fw-normal text-truncate" href="shop-catalog-electronics.html">Home Theater</a>
                                                                </li>
                                                                <li class="pt-1 d-flex w-100">
                                                                    <a class="p-0 nav-link animate-underline animate-target d-inline fw-normal text-truncate" href="shop-catalog-electronics.html">Wireless &amp; Streaming Audio</a>
                                                                </li>
                                                                <li class="pt-1 d-flex w-100">
                                                                    <a class="p-0 nav-link animate-underline animate-target d-inline fw-normal text-truncate" href="shop-catalog-electronics.html">Stereo System Components</a>
                                                                </li>
                                                                <li class="pt-1 d-flex w-100">
                                                                    <a class="p-0 nav-link animate-underline animate-target d-inline fw-normal text-truncate" href="shop-catalog-electronics.html">Compact Radios &amp; Stereos</a>
                                                                </li>
                                                                <li class="pt-1 d-flex w-100">
                                                                    <a class="p-0 nav-link animate-underline animate-target d-inline fw-normal text-truncate" href="shop-catalog-electronics.html">Home Audio Accessories</a>
                                                                </li>
                                                                <li class="pt-1 d-flex w-100">
                                                                    <a class="p-0 nav-link animate-underline animate-target d-inline fw-normal text-truncate" href="shop-catalog-electronics.html">Subwoofers</a>
                                                                </li>
                                                            </ul>
                                                        </div>
                                                        <div class="d-none d-lg-block">
                                                            <div class="d-none d-xl-block" style="width: 284px"></div>
                                                            <div class="d-xl-none" style="width: 240px"></div>
                                                            <div class="px-3 py-4 position-relative d-flex flex-column justify-content-center h-100 bg-body-secondary rounded-5">
                                                                <div class="px-2 text-center">
                                                                    <i class="mb-3 ci-google fs-2 text-dark-emphasis"></i>
                                                                    <div class="mb-2 fs-sm text-light-emphasis">Deal of the week</div>
                                                                    <div class="mb-4 h2">Nest Audio</div>
                                                                </div>
                                                                <img src="assets/img/mega-menu/electronics/04.png" width="252" alt="Nest Audio">
                                                                <div class="mt-4 text-center">
                                                                    <a class="btn btn-sm btn-primary stretched-link" href="shop-catalog-electronics.html">Shop now</a>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </li>
                                            <li class="dropend position-static">
                                                <div class="pb-1 rounded position-relative px-lg-2" tabindex="0" data-bs-toggle="dropdown" data-bs-trigger="hover">
                                                    <a class="dropdown-item fw-medium stretched-link d-none d-lg-flex" href="shop-catalog-electronics.html">
                              <i class="ci-camera-2 fs-xl opacity-60 pe-1 me-2"></i>
                              <span class="text-truncate">Cameras, Photo &amp; Video</span>
                              <i class="ci-chevron-right fs-base ms-auto me-n1"></i>
                            </a>
                                                    <div class="dropdown-item fw-medium stretched-link d-lg-none">
                                                        <i class="ci-camera-2 fs-xl opacity-60 pe-1 me-2"></i> Cameras, Photo &amp; Video
                                                        <i class="ci-chevron-down fs-base ms-auto me-n1"></i>
                                                    </div>
                                                </div>
                                                <div class="p-4 dropdown-menu rounded-4" style="top: 1rem; height: calc(100% - .1875rem); --cz-dropdown-spacer: .3125rem; animation: none;">
                                                    <div class="gap-4 d-flex flex-column flex-lg-row h-100">
                                                        <div style="min-width: 194px">
                                                            <div class="d-flex w-100">
                                                                <a class="animate-underline animate-target d-inline h6 text-dark-emphasis text-decoration-none text-truncate" href="shop-catalog-electronics.html">Cameras &amp; Lenses</a>
                                                            </div>
                                                            <ul class="gap-2 nav flex-column mt-n2">
                                                                <li class="pt-1 d-flex w-100">
                                                                    <a class="p-0 nav-link animate-underline animate-target d-inline fw-normal text-truncate" href="shop-catalog-electronics.html">Point &amp; Shoot Cameras</a>
                                                                </li>
                                                                <li class="pt-1 d-flex w-100">
                                                                    <a class="p-0 nav-link animate-underline animate-target d-inline fw-normal text-truncate" href="shop-catalog-electronics.html">DSLR Cameras</a>
                                                                </li>
                                                                <li class="pt-1 d-flex w-100">
                                                                    <a class="p-0 nav-link animate-underline animate-target d-inline fw-normal text-truncate" href="shop-catalog-electronics.html">Mirrorless Cameras</a>
                                                                </li>
                                                                <li class="pt-1 d-flex w-100">
                                                                    <a class="p-0 nav-link animate-underline animate-target d-inline fw-normal text-truncate" href="shop-catalog-electronics.html">Body Mounted Cameras</a>
                                                                </li>
                                                                <li class="pt-1 d-flex w-100">
                                                                    <a class="p-0 nav-link animate-underline animate-target d-inline fw-normal text-truncate" href="shop-catalog-electronics.html">Camcorders</a>
                                                                </li>
                                                                <li class="pt-1 d-flex w-100">
                                                                    <a class="p-0 nav-link animate-underline animate-target d-inline fw-normal text-truncate" href="shop-catalog-electronics.html">Camcorder Lenses</a>
                                                                </li>
                                                                <li class="pt-1 d-flex w-100">
                                                                    <a class="p-0 nav-link animate-underline animate-target d-inline fw-normal text-truncate" href="shop-catalog-electronics.html">Camera Lenses</a>
                                                                </li>
                                                                <li class="pt-1 d-flex w-100">
                                                                    <a class="p-0 nav-link animate-underline animate-target d-inline fw-normal text-truncate" href="shop-catalog-electronics.html">Macro &amp; Ringlight Flashes</a>
                                                                </li>
                                                                <li class="pt-1 d-flex w-100">
                                                                    <a class="p-0 nav-link animate-underline animate-target d-inline fw-normal text-truncate" href="shop-catalog-electronics.html">Shoe Mount Flashes</a>
                                                                </li>
                                                                <li class="pt-1 d-flex w-100">
                                                                    <a class="p-0 nav-link animate-underline animate-target d-inline fw-normal text-truncate" href="shop-catalog-electronics.html">Tripods &amp; Monopods</a>
                                                                </li>
                                                                <li class="pt-1 d-flex w-100">
                                                                    <a class="p-0 nav-link animate-underline animate-target d-inline fw-normal text-truncate" href="shop-catalog-electronics.html">Video Studio</a>
                                                                </li>
                                                            </ul>
                                                        </div>
                                                        <div style="min-width: 194px">
                                                            <div class="d-flex w-100">
                                                                <a class="animate-underline animate-target d-inline h6 text-dark-emphasis text-decoration-none text-truncate" href="shop-catalog-electronics.html">Accessories</a>
                                                            </div>
                                                            <ul class="gap-2 nav flex-column mt-n2">
                                                                <li class="pt-1 d-flex w-100">
                                                                    <a class="p-0 nav-link animate-underline animate-target d-inline fw-normal text-truncate" href="shop-catalog-electronics.html">Bags &amp; Cases</a>
                                                                </li>
                                                                <li class="pt-1 d-flex w-100">
                                                                    <a class="p-0 nav-link animate-underline animate-target d-inline fw-normal text-truncate" href="shop-catalog-electronics.html">Binoculars &amp; Scopes</a>
                                                                </li>
                                                                <li class="pt-1 d-flex w-100">
                                                                    <a class="p-0 nav-link animate-underline animate-target d-inline fw-normal text-truncate" href="shop-catalog-electronics.html">Batteries &amp; Chargers</a>
                                                                </li>
                                                                <li class="pt-1 d-flex w-100">
                                                                    <a class="p-0 nav-link animate-underline animate-target d-inline fw-normal text-truncate" href="shop-catalog-electronics.html">Cables &amp; Cords</a>
                                                                </li>
                                                                <li class="pt-1 d-flex w-100">
                                                                    <a class="p-0 nav-link animate-underline animate-target d-inline fw-normal text-truncate" href="shop-catalog-electronics.html">Camcorder Accessories</a>
                                                                </li>
                                                                <li class="pt-1 d-flex w-100">
                                                                    <a class="p-0 nav-link animate-underline animate-target d-inline fw-normal text-truncate" href="shop-catalog-electronics.html">Cleaning Equipment</a>
                                                                </li>
                                                                <li class="pt-1 d-flex w-100">
                                                                    <a class="p-0 nav-link animate-underline animate-target d-inline fw-normal text-truncate" href="shop-catalog-electronics.html">Protector Foils</a>
                                                                </li>
                                                                <li class="pt-1 d-flex w-100">
                                                                    <a class="p-0 nav-link animate-underline animate-target d-inline fw-normal text-truncate" href="shop-catalog-electronics.html">Filters &amp; Accessories</a>
                                                                </li>
                                                                <li class="pt-1 d-flex w-100">
                                                                    <a class="p-0 nav-link animate-underline animate-target d-inline fw-normal text-truncate" href="shop-catalog-electronics.html">Remote Controls</a>
                                                                </li>
                                                                <li class="pt-1 d-flex w-100">
                                                                    <a class="p-0 nav-link animate-underline animate-target d-inline fw-normal text-truncate" href="shop-catalog-electronics.html">Rain Covers</a>
                                                                </li>
                                                                <li class="pt-1 d-flex w-100">
                                                                    <a class="p-0 nav-link animate-underline animate-target d-inline fw-normal text-truncate" href="shop-catalog-electronics.html">Viewfinders</a>
                                                                </li>
                                                            </ul>
                                                        </div>
                                                        <div class="d-none d-lg-block">
                                                            <div class="d-none d-xl-block" style="width: 284px"></div>
                                                            <div class="d-xl-none" style="width: 240px"></div>
                                                            <div class="px-3 py-4 position-relative d-flex flex-column justify-content-center h-100 bg-body-secondary rounded-5">
                                                                <div class="px-2 text-center">
                                                                    <span class="mb-2 badge bg-danger bg-opacity-10 text-danger fs-sm rounded-pill">Save up to $300</span>
                                                                    <div class="mb-2 fs-sm text-light-emphasis">Starts from <del>$1,100.00</del> 899.00</div>
                                                                    <div class="mb-4 h2">Canon Digital Cameras</div>
                                                                </div>
                                                                <img src="assets/img/mega-menu/electronics/05.png" width="252" alt="Canon Camera">
                                                                <div class="mt-4 text-center">
                                                                    <a class="btn btn-sm btn-primary stretched-link" href="shop-catalog-electronics.html">Shop now</a>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </li>
                                            <li class="dropend position-static">
                                                <div class="pb-1 rounded position-relative px-lg-2" tabindex="0" data-bs-toggle="dropdown" data-bs-trigger="hover">
                                                    <a class="dropdown-item fw-medium stretched-link d-none d-lg-flex" href="shop-catalog-electronics.html">
                              <i class="ci-printer-2 fs-xl opacity-60 pe-1 me-2"></i>
                              <span class="text-truncate">Printers &amp; Ink</span>
                              <i class="ci-chevron-right fs-base ms-auto me-n1"></i>
                            </a>
                                                    <div class="dropdown-item fw-medium stretched-link d-lg-none">
                                                        <i class="ci-printer-2 fs-xl opacity-60 pe-1 me-2"></i> Printers &amp; Ink
                                                        <i class="ci-chevron-down fs-base ms-auto me-n1"></i>
                                                    </div>
                                                </div>
                                                <div class="p-4 dropdown-menu rounded-4" style="top: 1rem; height: calc(100% - .1875rem); --cz-dropdown-spacer: .3125rem; animation: none;">
                                                    <div class="gap-4 d-flex flex-column flex-lg-row h-100">
                                                        <div style="min-width: 194px">
                                                            <div class="d-flex w-100">
                                                                <a class="animate-underline animate-target d-inline h6 text-dark-emphasis text-decoration-none text-truncate" href="shop-catalog-electronics.html">By type</a>
                                                            </div>
                                                            <ul class="gap-2 nav flex-column mt-n2">
                                                                <li class="pt-1 d-flex w-100">
                                                                    <a class="p-0 nav-link animate-underline animate-target d-inline fw-normal text-truncate" href="shop-catalog-electronics.html">All-in-One</a>
                                                                </li>
                                                                <li class="pt-1 d-flex w-100">
                                                                    <a class="p-0 nav-link animate-underline animate-target d-inline fw-normal text-truncate" href="shop-catalog-electronics.html">Copying</a>
                                                                </li>
                                                                <li class="pt-1 d-flex w-100">
                                                                    <a class="p-0 nav-link animate-underline animate-target d-inline fw-normal text-truncate" href="shop-catalog-electronics.html">Faxing</a>
                                                                </li>
                                                                <li class="pt-1 d-flex w-100">
                                                                    <a class="p-0 nav-link animate-underline animate-target d-inline fw-normal text-truncate" href="shop-catalog-electronics.html">Photo Printing</a>
                                                                </li>
                                                                <li class="pt-1 d-flex w-100">
                                                                    <a class="p-0 nav-link animate-underline animate-target d-inline fw-normal text-truncate" href="shop-catalog-electronics.html">Printing Only</a>
                                                                </li>
                                                                <li class="pt-1 d-flex w-100">
                                                                    <a class="p-0 nav-link animate-underline animate-target d-inline fw-normal text-truncate" href="shop-catalog-electronics.html">Scanning</a>
                                                                </li>
                                                            </ul>
                                                            <div class="pt-4 d-flex w-100">
                                                                <a class="animate-underline animate-target d-inline h6 text-dark-emphasis text-decoration-none text-truncate" href="shop-catalog-electronics.html">Scanners</a>
                                                            </div>
                                                            <ul class="gap-2 nav flex-column mt-n2">
                                                                <li class="pt-1 d-flex w-100">
                                                                    <a class="p-0 nav-link animate-underline animate-target d-inline fw-normal text-truncate" href="shop-catalog-electronics.html">Business Card Scanners</a>
                                                                </li>
                                                                <li class="pt-1 d-flex w-100">
                                                                    <a class="p-0 nav-link animate-underline animate-target d-inline fw-normal text-truncate" href="shop-catalog-electronics.html">Document Scanners</a>
                                                                </li>
                                                                <li class="pt-1 d-flex w-100">
                                                                    <a class="p-0 nav-link animate-underline animate-target d-inline fw-normal text-truncate" href="shop-catalog-electronics.html">Flatbed &amp; Photo Scanners</a>
                                                                </li>
                                                                <li class="pt-1 d-flex w-100">
                                                                    <a class="p-0 nav-link animate-underline animate-target d-inline fw-normal text-truncate" href="shop-catalog-electronics.html">Slide &amp; Negative Scanners</a>
                                                                </li>
                                                            </ul>
                                                        </div>
                                                        <div style="min-width: 194px">
                                                            <div class="d-flex w-100">
                                                                <a class="animate-underline animate-target d-inline h6 text-dark-emphasis text-decoration-none text-truncate" href="shop-catalog-electronics.html">Printers</a>
                                                            </div>
                                                            <ul class="gap-2 nav flex-column mt-n2">
                                                                <li class="pt-1 d-flex w-100">
                                                                    <a class="p-0 nav-link animate-underline animate-target d-inline fw-normal text-truncate" href="shop-catalog-electronics.html">Dot Matrix Printers</a>
                                                                </li>
                                                                <li class="pt-1 d-flex w-100">
                                                                    <a class="p-0 nav-link animate-underline animate-target d-inline fw-normal text-truncate" href="shop-catalog-electronics.html">Inkjet Printers</a>
                                                                </li>
                                                                <li class="pt-1 d-flex w-100">
                                                                    <a class="p-0 nav-link animate-underline animate-target d-inline fw-normal text-truncate" href="shop-catalog-electronics.html">Label Printers</a>
                                                                </li>
                                                                <li class="pt-1 d-flex w-100">
                                                                    <a class="p-0 nav-link animate-underline animate-target d-inline fw-normal text-truncate" href="shop-catalog-electronics.html">Laser Printers</a>
                                                                </li>
                                                                <li class="pt-1 d-flex w-100">
                                                                    <a class="p-0 nav-link animate-underline animate-target d-inline fw-normal text-truncate" href="shop-catalog-electronics.html">Photo Printers</a>
                                                                </li>
                                                                <li class="pt-1 d-flex w-100">
                                                                    <a class="p-0 nav-link animate-underline animate-target d-inline fw-normal text-truncate" href="shop-catalog-electronics.html">Wide Format Printers</a>
                                                                </li>
                                                                <li class="pt-1 d-flex w-100">
                                                                    <a class="p-0 nav-link animate-underline animate-target d-inline fw-normal text-truncate" href="shop-catalog-electronics.html">Plotter Printers</a>
                                                                </li>
                                                            </ul>
                                                        </div>
                                                        <div class="d-none d-lg-block">
                                                            <div class="d-none d-xl-block" style="width: 284px"></div>
                                                            <div class="d-xl-none" style="width: 240px"></div>
                                                            <div class="px-3 py-4 position-relative d-flex flex-column justify-content-center h-100 bg-body-secondary rounded-5">
                                                                <div class="px-2 text-center">
                                                                    <div class="mb-2 fs-sm text-light-emphasis">Best deal! Save up to <span class="fw-semibold">$200</span></div>
                                                                    <div class="mb-4 h2">Epson Color Printers</div>
                                                                </div>
                                                                <img src="assets/img/mega-menu/electronics/06.png" width="252" alt="Epson Printer">
                                                                <div class="mt-4 text-center">
                                                                    <a class="btn btn-sm btn-primary stretched-link" href="shop-catalog-electronics.html">Shop now</a>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </li>
                                            <li class="dropend position-static">
                                                <div class="pb-1 rounded position-relative px-lg-2" tabindex="0" data-bs-toggle="dropdown" data-bs-trigger="hover">
                                                    <a class="dropdown-item fw-medium stretched-link d-none d-lg-flex" href="shop-catalog-electronics.html">
                              <i class="ci-battery-2 fs-xl opacity-60 pe-1 me-2"></i>
                              <span class="text-truncate">Charging Stations</span>
                              <i class="ci-chevron-right fs-base ms-auto me-n1"></i>
                            </a>
                                                    <div class="dropdown-item fw-medium stretched-link d-lg-none">
                                                        <i class="ci-battery-2 fs-xl opacity-60 pe-1 me-2"></i> Charging Stations
                                                        <i class="ci-chevron-down fs-base ms-auto me-n1"></i>
                                                    </div>
                                                </div>
                                                <div class="p-4 dropdown-menu rounded-4" style="top: 1rem; height: calc(100% - .1875rem); --cz-dropdown-spacer: .3125rem; animation: none;">
                                                    <div class="gap-4 d-flex flex-column flex-lg-row h-100">
                                                        <div style="min-width: 194px">
                                                            <div class="d-flex w-100">
                                                                <a class="animate-underline animate-target d-inline h6 text-dark-emphasis text-decoration-none text-truncate" href="shop-catalog-electronics.html">Charging Stations</a>
                                                            </div>
                                                            <ul class="gap-2 nav flex-column mt-n2">
                                                                <li class="pt-1 d-flex w-100">
                                                                    <a class="p-0 nav-link animate-underline animate-target d-inline fw-normal text-truncate" href="shop-catalog-electronics.html">Portable Power Stations</a>
                                                                </li>
                                                                <li class="pt-1 d-flex w-100">
                                                                    <a class="p-0 nav-link animate-underline animate-target d-inline fw-normal text-truncate" href="shop-catalog-electronics.html">Inverter Power Stations</a>
                                                                </li>
                                                                <li class="pt-1 d-flex w-100">
                                                                    <a class="p-0 nav-link animate-underline animate-target d-inline fw-normal text-truncate" href="shop-catalog-electronics.html">Outdoor Generators</a>
                                                                </li>
                                                                <li class="pt-1 d-flex w-100">
                                                                    <a class="p-0 nav-link animate-underline animate-target d-inline fw-normal text-truncate" href="shop-catalog-electronics.html">Gasoline Generators</a>
                                                                </li>
                                                                <li class="pt-1 d-flex w-100">
                                                                    <a class="p-0 nav-link animate-underline animate-target d-inline fw-normal text-truncate" href="shop-catalog-electronics.html">Cell Phone Chargers</a>
                                                                </li>
                                                                <li class="pt-1 d-flex w-100">
                                                                    <a class="p-0 nav-link animate-underline animate-target d-inline fw-normal text-truncate" href="shop-catalog-electronics.html">Power Strips</a>
                                                                </li>
                                                                <li class="pt-1 d-flex w-100">
                                                                    <a class="p-0 nav-link animate-underline animate-target d-inline fw-normal text-truncate" href="shop-catalog-electronics.html">Wall Charges</a>
                                                                </li>
                                                            </ul>
                                                        </div>
                                                        <div class="d-none d-lg-block">
                                                            <div class="d-none d-xl-block" style="width: 284px"></div>
                                                            <div class="d-xl-none" style="width: 240px"></div>
                                                            <div class="px-3 py-4 position-relative d-flex flex-column justify-content-center h-100 bg-body-secondary rounded-5">
                                                                <div class="px-2 text-center">
                                                                    <span class="mb-2 badge bg-danger bg-opacity-10 text-danger fs-sm rounded-pill">Huge sale!</span>
                                                                    <div class="mb-2 fs-sm text-light-emphasis">Save up to <span class="fw-semibold">$350</span></div>
                                                                    <div class="mb-4 h2">Portable Power Stations</div>
                                                                </div>
                                                                <img src="assets/img/mega-menu/electronics/07.png" width="252" alt="Epson Printer">
                                                                <div class="mt-4 text-center">
                                                                    <a class="btn btn-sm btn-primary stretched-link" href="shop-catalog-electronics.html">Shop now</a>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </li>
                                            <li class="dropend position-static">
                                                <div class="pb-1 rounded position-relative px-lg-2" tabindex="0" data-bs-toggle="dropdown" data-bs-trigger="hover">
                                                    <a class="dropdown-item fw-medium stretched-link d-none d-lg-flex" href="shop-catalog-electronics.html">
                              <i class="ci-headphones-2 fs-xl opacity-60 pe-1 me-2"></i>
                              <span class="text-truncate">Headphones</span>
                              <i class="ci-chevron-right fs-base ms-auto me-n1"></i>
                            </a>
                                                    <div class="dropdown-item fw-medium stretched-link d-lg-none">
                                                        <i class="ci-headphones-2 fs-xl opacity-60 pe-1 me-2"></i> Headphones
                                                        <i class="ci-chevron-down fs-base ms-auto me-n1"></i>
                                                    </div>
                                                </div>
                                                <div class="p-4 dropdown-menu rounded-4" style="top: 1rem; height: calc(100% - .1875rem); --cz-dropdown-spacer: .3125rem; animation: none;">
                                                    <div class="gap-4 d-flex flex-column flex-lg-row h-100">
                                                        <div style="min-width: 194px">
                                                            <div class="d-flex w-100">
                                                                <a class="animate-underline animate-target d-inline h6 text-dark-emphasis text-decoration-none text-truncate" href="shop-catalog-electronics.html">Headphones</a>
                                                            </div>
                                                            <ul class="gap-2 nav flex-column mt-n2">
                                                                <li class="pt-1 d-flex w-100">
                                                                    <a class="p-0 nav-link animate-underline animate-target d-inline fw-normal text-truncate" href="shop-catalog-electronics.html">Earbud Headphones</a>
                                                                </li>
                                                                <li class="pt-1 d-flex w-100">
                                                                    <a class="p-0 nav-link animate-underline animate-target d-inline fw-normal text-truncate" href="shop-catalog-electronics.html">Over-Ear Headphones</a>
                                                                </li>
                                                                <li class="pt-1 d-flex w-100">
                                                                    <a class="p-0 nav-link animate-underline animate-target d-inline fw-normal text-truncate" href="shop-catalog-electronics.html">On-Ear Headphones</a>
                                                                </li>
                                                                <li class="pt-1 d-flex w-100">
                                                                    <a class="p-0 nav-link animate-underline animate-target d-inline fw-normal text-truncate" href="shop-catalog-electronics.html">Bluetooth Headphones</a>
                                                                </li>
                                                                <li class="pt-1 d-flex w-100">
                                                                    <a class="p-0 nav-link animate-underline animate-target d-inline fw-normal text-truncate" href="shop-catalog-electronics.html">Sports &amp; Fitness</a>
                                                                </li>
                                                                <li class="pt-1 d-flex w-100">
                                                                    <a class="p-0 nav-link animate-underline animate-target d-inline fw-normal text-truncate" href="shop-catalog-electronics.html">Noise-Cancelling</a>
                                                                </li>
                                                            </ul>
                                                            <div class="pt-4 d-flex w-100">
                                                                <a class="animate-underline animate-target d-inline h6 text-dark-emphasis text-decoration-none text-truncate" href="shop-catalog-electronics.html">Accessories</a>
                                                            </div>
                                                            <ul class="gap-2 nav flex-column mt-n2">
                                                                <li class="pt-1 d-flex w-100">
                                                                    <a class="p-0 nav-link animate-underline animate-target d-inline fw-normal text-truncate" href="shop-catalog-electronics.html">Cases &amp; Sleeves</a>
                                                                </li>
                                                                <li class="pt-1 d-flex w-100">
                                                                    <a class="p-0 nav-link animate-underline animate-target d-inline fw-normal text-truncate" href="shop-catalog-electronics.html">Cables &amp; Cords</a>
                                                                </li>
                                                                <li class="pt-1 d-flex w-100">
                                                                    <a class="p-0 nav-link animate-underline animate-target d-inline fw-normal text-truncate" href="shop-catalog-electronics.html">Ear Pads</a>
                                                                </li>
                                                                <li class="pt-1 d-flex w-100">
                                                                    <a class="p-0 nav-link animate-underline animate-target d-inline fw-normal text-truncate" href="shop-catalog-electronics.html">Repair Kits</a>
                                                                </li>
                                                                <li class="pt-1 d-flex w-100">
                                                                    <a class="p-0 nav-link animate-underline animate-target d-inline fw-normal text-truncate" href="shop-catalog-electronics.html">Cleaning Equipment</a>
                                                                </li>
                                                            </ul>
                                                        </div>
                                                        <div class="d-none d-lg-block">
                                                            <div class="d-none d-xl-block" style="width: 284px"></div>
                                                            <div class="d-xl-none" style="width: 240px"></div>
                                                            <div class="px-3 py-4 position-relative d-flex flex-column justify-content-center h-100 bg-body-secondary rounded-5">
                                                                <div class="px-2 text-center">
                                                                    <span class="mb-2 badge bg-danger bg-opacity-10 text-danger fs-sm rounded-pill">Save up to $200</span>
                                                                    <div class="mb-2 fs-sm text-light-emphasis">Starts from $119.99</div>
                                                                    <div class="mb-4 h2">Wireless Headphones</div>
                                                                </div>
                                                                <img src="assets/img/mega-menu/electronics/08.png" width="252" alt="Wireless Headphones">
                                                                <div class="mt-4 text-center">
                                                                    <a class="btn btn-sm btn-primary stretched-link" href="shop-catalog-electronics.html">Shop now</a>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </li>
                                            <li class="dropend position-static">
                                                <div class="pb-1 rounded position-relative px-lg-2" tabindex="0" data-bs-toggle="dropdown" data-bs-trigger="hover">
                                                    <a class="dropdown-item fw-medium stretched-link d-none d-lg-flex" href="shop-catalog-electronics.html">
                              <i class="ci-watch-2 fs-xl opacity-60 pe-1 me-2"></i>
                              <span class="text-truncate">Wearable Electronics</span>
                              <i class="ci-chevron-right fs-base ms-auto me-n1"></i>
                            </a>
                                                    <div class="dropdown-item fw-medium stretched-link d-lg-none">
                                                        <i class="ci-watch-2 fs-xl opacity-60 pe-1 me-2"></i> Wearable Electronics
                                                        <i class="ci-chevron-down fs-base ms-auto me-n1"></i>
                                                    </div>
                                                </div>
                                                <div class="p-4 dropdown-menu rounded-4" style="top: 1rem; height: calc(100% - .1875rem); --cz-dropdown-spacer: .3125rem; animation: none;">
                                                    <div class="gap-4 d-flex flex-column flex-lg-row h-100">
                                                        <div style="min-width: 194px">
                                                            <div class="d-flex w-100">
                                                                <a class="animate-underline animate-target d-inline h6 text-dark-emphasis text-decoration-none text-truncate" href="shop-catalog-electronics.html">Wearable Gadgets</a>
                                                            </div>
                                                            <ul class="gap-2 nav flex-column mt-n2">
                                                                <li class="pt-1 d-flex w-100">
                                                                    <a class="p-0 nav-link animate-underline animate-target d-inline fw-normal text-truncate" href="shop-catalog-electronics.html">Smartwatches</a>
                                                                </li>
                                                                <li class="pt-1 d-flex w-100">
                                                                    <a class="p-0 nav-link animate-underline animate-target d-inline fw-normal text-truncate" href="shop-catalog-electronics.html">Fitness Trackers</a>
                                                                </li>
                                                                <li class="pt-1 d-flex w-100">
                                                                    <a class="p-0 nav-link animate-underline animate-target d-inline fw-normal text-truncate" href="shop-catalog-electronics.html">Smart Glasses</a>
                                                                </li>
                                                                <li class="pt-1 d-flex w-100">
                                                                    <a class="p-0 nav-link animate-underline animate-target d-inline fw-normal text-truncate" href="shop-catalog-electronics.html">Rings</a>
                                                                </li>
                                                                <li class="pt-1 d-flex w-100">
                                                                    <a class="p-0 nav-link animate-underline animate-target d-inline fw-normal text-truncate" href="shop-catalog-electronics.html">Virtual Reality</a>
                                                                </li>
                                                                <li class="pt-1 d-flex w-100">
                                                                    <a class="p-0 nav-link animate-underline animate-target d-inline fw-normal text-truncate" href="shop-catalog-electronics.html">Clips, Arm &amp; Wristbands</a>
                                                                </li>
                                                                <li class="pt-1 d-flex w-100">
                                                                    <a class="p-0 nav-link animate-underline animate-target d-inline fw-normal text-truncate" href="shop-catalog-electronics.html">Accessories</a>
                                                                </li>
                                                            </ul>
                                                        </div>
                                                        <div class="d-none d-lg-block">
                                                            <div class="d-none d-xl-block" style="width: 284px"></div>
                                                            <div class="d-xl-none" style="width: 240px"></div>
                                                            <div class="px-3 py-4 position-relative d-flex flex-column justify-content-center h-100 bg-body-secondary rounded-5">
                                                                <div class="px-2 text-center">
                                                                    <i class="mb-3 ci-google fs-2 text-dark-emphasis"></i>
                                                                    <div class="mb-2 fs-sm text-light-emphasis">Deal of the week</div>
                                                                    <div class="mb-4 h2">Pixel Watch</div>
                                                                </div>
                                                                <img src="assets/img/mega-menu/electronics/09.png" width="252" alt="Pixel Watch">
                                                                <div class="mt-4 text-center">
                                                                    <a class="btn btn-sm btn-primary stretched-link" href="shop-catalog-electronics.html">Shop now</a>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </li>
                                            <li class="dropend position-static">
                                                <div class="pb-1 rounded position-relative px-lg-2" tabindex="0" data-bs-toggle="dropdown" data-bs-trigger="hover">
                                                    <a class="dropdown-item fw-medium stretched-link d-none d-lg-flex" href="shop-catalog-electronics.html">
                              <i class="ci-powerbank fs-xl opacity-60 pe-1 me-2"></i>
                              <span class="text-truncate">Powerbanks</span>
                              <i class="ci-chevron-right fs-base ms-auto me-n1"></i>
                            </a>
                                                    <div class="dropdown-item fw-medium stretched-link d-lg-none">
                                                        <i class="ci-powerbank fs-xl opacity-60 pe-1 me-2"></i> Powerbanks
                                                        <i class="ci-chevron-down fs-base ms-auto me-n1"></i>
                                                    </div>
                                                </div>
                                                <div class="p-4 dropdown-menu rounded-4" style="top: 1rem; height: calc(100% - .1875rem); --cz-dropdown-spacer: .3125rem; animation: none;">
                                                    <div class="gap-4 d-flex flex-column flex-lg-row h-100">
                                                        <div style="min-width: 194px">
                                                            <div class="d-flex w-100">
                                                                <a class="animate-underline animate-target d-inline h6 text-dark-emphasis text-decoration-none text-truncate" href="shop-catalog-electronics.html">Powerbanks</a>
                                                            </div>
                                                            <ul class="gap-2 nav flex-column mt-n2">
                                                                <li class="pt-1 d-flex w-100">
                                                                    <a class="p-0 nav-link animate-underline animate-target d-inline fw-normal text-truncate" href="shop-catalog-electronics.html">Fast Charging</a>
                                                                </li>
                                                                <li class="pt-1 d-flex w-100">
                                                                    <a class="p-0 nav-link animate-underline animate-target d-inline fw-normal text-truncate" href="shop-catalog-electronics.html">Built In Cable</a>
                                                                </li>
                                                                <li class="pt-1 d-flex w-100">
                                                                    <a class="p-0 nav-link animate-underline animate-target d-inline fw-normal text-truncate" href="shop-catalog-electronics.html">Built In Wall Plug</a>
                                                                </li>
                                                                <li class="pt-1 d-flex w-100">
                                                                    <a class="p-0 nav-link animate-underline animate-target d-inline fw-normal text-truncate" href="shop-catalog-electronics.html">LED Indicator Lights</a>
                                                                </li>
                                                                <li class="pt-1 d-flex w-100">
                                                                    <a class="p-0 nav-link animate-underline animate-target d-inline fw-normal text-truncate" href="shop-catalog-electronics.html">Pocket Size</a>
                                                                </li>
                                                                <li class="pt-1 d-flex w-100">
                                                                    <a class="p-0 nav-link animate-underline animate-target d-inline fw-normal text-truncate" href="shop-catalog-electronics.html">Wireless Charging</a>
                                                                </li>
                                                                <li class="pt-1 d-flex w-100">
                                                                    <a class="p-0 nav-link animate-underline animate-target d-inline fw-normal text-truncate" href="shop-catalog-electronics.html">Short Circuit Protection</a>
                                                                </li>
                                                                <li class="pt-1 d-flex w-100">
                                                                    <a class="p-0 nav-link animate-underline animate-target d-inline fw-normal text-truncate" href="shop-catalog-electronics.html">Scratch Resistant</a>
                                                                </li>
                                                                <li class="pt-1 d-flex w-100">
                                                                    <a class="p-0 nav-link animate-underline animate-target d-inline fw-normal text-truncate" href="shop-catalog-electronics.html">Flashlight</a>
                                                                </li>
                                                                <li class="pt-1 d-flex w-100">
                                                                    <a class="p-0 nav-link animate-underline animate-target d-inline fw-normal text-truncate" href="shop-catalog-electronics.html">Lightweight</a>
                                                                </li>
                                                            </ul>
                                                        </div>
                                                        <div class="d-none d-lg-block">
                                                            <div class="d-none d-xl-block" style="width: 284px"></div>
                                                            <div class="d-xl-none" style="width: 240px"></div>
                                                            <div class="px-3 py-4 position-relative d-flex flex-column justify-content-center h-100 bg-body-secondary rounded-5">
                                                                <div class="px-2 text-center">
                                                                    <div class="mb-2 fs-sm text-light-emphasis">Save up to <span class="fw-semibold">$50</span> on our</div>
                                                                    <div class="mb-4 h2">Powerbanks Deals</div>
                                                                </div>
                                                                <img src="assets/img/mega-menu/electronics/10.png" width="252" alt="Powerbank">
                                                                <div class="mt-4 text-center">
                                                                    <a class="btn btn-sm btn-primary stretched-link" href="shop-catalog-electronics.html">Shop now</a>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </li>
                                            <li class="dropend position-static">
                                                <div class="pb-1 rounded position-relative px-lg-2" tabindex="0" data-bs-toggle="dropdown" data-bs-trigger="hover">
                                                    <a class="dropdown-item fw-medium stretched-link d-none d-lg-flex" href="shop-catalog-electronics.html">
                              <i class="ci-hard-drive-2 fs-xl opacity-60 pe-1 me-2"></i>
                              <span class="text-truncate">HDD/SSD Data Storage</span>
                              <i class="ci-chevron-right fs-base ms-auto me-n1"></i>
                            </a>
                                                    <div class="dropdown-item fw-medium stretched-link d-lg-none">
                                                        <i class="ci-hard-drive-2 fs-xl opacity-60 pe-1 me-2"></i> HDD/SSD Data Storage
                                                        <i class="ci-chevron-down fs-base ms-auto me-n1"></i>
                                                    </div>
                                                </div>
                                                <div class="p-4 dropdown-menu rounded-4" style="top: 1rem; height: calc(100% - .1875rem); --cz-dropdown-spacer: .3125rem; animation: none;">
                                                    <div class="gap-4 d-flex flex-column flex-lg-row h-100">
                                                        <div style="min-width: 194px">
                                                            <div class="d-flex w-100">
                                                                <a class="animate-underline animate-target d-inline h6 text-dark-emphasis text-decoration-none text-truncate" href="shop-catalog-electronics.html">Data Storage</a>
                                                            </div>
                                                            <ul class="gap-2 nav flex-column mt-n2">
                                                                <li class="pt-1 d-flex w-100">
                                                                    <a class="p-0 nav-link animate-underline animate-target d-inline fw-normal text-truncate" href="shop-catalog-electronics.html">External Hard Drives</a>
                                                                </li>
                                                                <li class="pt-1 d-flex w-100">
                                                                    <a class="p-0 nav-link animate-underline animate-target d-inline fw-normal text-truncate" href="shop-catalog-electronics.html">External SSD</a>
                                                                </li>
                                                                <li class="pt-1 d-flex w-100">
                                                                    <a class="p-0 nav-link animate-underline animate-target d-inline fw-normal text-truncate" href="shop-catalog-electronics.html">External Zip Drives</a>
                                                                </li>
                                                                <li class="pt-1 d-flex w-100">
                                                                    <a class="p-0 nav-link animate-underline animate-target d-inline fw-normal text-truncate" href="shop-catalog-electronics.html">Floppy &amp; Tape Drives</a>
                                                                </li>
                                                                <li class="pt-1 d-flex w-100">
                                                                    <a class="p-0 nav-link animate-underline animate-target d-inline fw-normal text-truncate" href="shop-catalog-electronics.html">Internal Hard Drives</a>
                                                                </li>
                                                                <li class="pt-1 d-flex w-100">
                                                                    <a class="p-0 nav-link animate-underline animate-target d-inline fw-normal text-truncate" href="shop-catalog-electronics.html">Internal SSD</a>
                                                                </li>
                                                                <li class="pt-1 d-flex w-100">
                                                                    <a class="p-0 nav-link animate-underline animate-target d-inline fw-normal text-truncate" href="shop-catalog-electronics.html">Network Attached Storage</a>
                                                                </li>
                                                                <li class="pt-1 d-flex w-100">
                                                                    <a class="p-0 nav-link animate-underline animate-target d-inline fw-normal text-truncate" href="shop-catalog-electronics.html">USB Flash Drives</a>
                                                                </li>
                                                            </ul>
                                                        </div>
                                                        <div class="d-none d-lg-block">
                                                            <div class="d-none d-xl-block" style="width: 284px"></div>
                                                            <div class="d-xl-none" style="width: 240px"></div>
                                                            <div class="px-3 py-4 position-relative d-flex flex-column justify-content-center h-100 bg-body-secondary rounded-5">
                                                                <div class="px-2 text-center">
                                                                    <span class="mb-2 badge bg-danger bg-opacity-10 text-danger fs-sm rounded-pill">Save up to $100</span>
                                                                    <div class="mb-2 fs-sm text-light-emphasis">Starts from $89.99</div>
                                                                    <div class="mb-4 h2">Samsung SSD Deals</div>
                                                                </div>
                                                                <img src="assets/img/mega-menu/electronics/11.png" width="252" alt="SSD">
                                                                <div class="mt-4 text-center">
                                                                    <a class="btn btn-sm btn-primary stretched-link" href="shop-catalog-electronics.html">Shop now</a>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </li>
                                            <li class="dropend position-static">
                                                <div class="pb-2 rounded position-relative px-lg-2" tabindex="0" data-bs-toggle="dropdown" data-bs-trigger="hover">
                                                    <a class="dropdown-item fw-medium stretched-link d-none d-lg-flex" href="shop-catalog-electronics.html">
                              <i class="ci-game fs-xl opacity-60 pe-1 me-2"></i>
                              <span class="text-truncate">Video Games</span>
                              <i class="ci-chevron-right fs-base ms-auto me-n1"></i>
                            </a>
                                                    <div class="dropdown-item fw-medium stretched-link d-lg-none">
                                                        <i class="ci-game fs-xl opacity-60 pe-1 me-2"></i> Video Games
                                                        <i class="ci-chevron-down fs-base ms-auto me-n1"></i>
                                                    </div>
                                                </div>
                                                <div class="p-4 dropdown-menu rounded-4" style="top: 1rem; height: calc(100% - .1875rem); --cz-dropdown-spacer: .3125rem; animation: none;">
                                                    <div class="d-flex flex-column flex-lg-row h-100 gap-lg-4">
                                                        <div style="min-width: 194px">
                                                            <div class="d-flex w-100">
                                                                <a class="animate-underline animate-target d-inline h6 text-dark-emphasis text-decoration-none text-truncate" href="shop-catalog-electronics.html">Games &amp; Hardware</a>
                                                            </div>
                                                            <ul class="gap-2 nav flex-column mt-n2">
                                                                <li class="pt-1 d-flex w-100">
                                                                    <a class="p-0 nav-link animate-underline animate-target d-inline fw-normal text-truncate" href="shop-catalog-electronics.html">Video Games</a>
                                                                </li>
                                                                <li class="pt-1 d-flex w-100">
                                                                    <a class="p-0 nav-link animate-underline animate-target d-inline fw-normal text-truncate" href="shop-catalog-electronics.html">PlayStation 5</a>
                                                                </li>
                                                                <li class="pt-1 d-flex w-100">
                                                                    <a class="p-0 nav-link animate-underline animate-target d-inline fw-normal text-truncate" href="shop-catalog-electronics.html">PlayStation 4</a>
                                                                </li>
                                                                <li class="pt-1 d-flex w-100">
                                                                    <a class="p-0 nav-link animate-underline animate-target d-inline fw-normal text-truncate" href="shop-catalog-electronics.html">Xbox Series X</a>
                                                                </li>
                                                                <li class="pt-1 d-flex w-100">
                                                                    <a class="p-0 nav-link animate-underline animate-target d-inline fw-normal text-truncate" href="shop-catalog-electronics.html">Xbox Series S</a>
                                                                </li>
                                                                <li class="pt-1 d-flex w-100">
                                                                    <a class="p-0 nav-link animate-underline animate-target d-inline fw-normal text-truncate" href="shop-catalog-electronics.html">Nintendo Switch</a>
                                                                </li>
                                                                <li class="pt-1 d-flex w-100">
                                                                    <a class="p-0 nav-link animate-underline animate-target d-inline fw-normal text-truncate" href="shop-catalog-electronics.html">Gaming PC</a>
                                                                </li>
                                                                <li class="pt-1 d-flex w-100">
                                                                    <a class="p-0 nav-link animate-underline animate-target d-inline fw-normal text-truncate" href="shop-catalog-electronics.html">Gaming Laptops</a>
                                                                </li>
                                                                <li class="pt-1 d-flex w-100">
                                                                    <a class="p-0 nav-link animate-underline animate-target d-inline fw-normal text-truncate" href="shop-catalog-electronics.html">Wii U</a>
                                                                </li>
                                                                <li class="pt-1 d-flex w-100">
                                                                    <a class="p-0 nav-link animate-underline animate-target d-inline fw-normal text-truncate" href="shop-catalog-electronics.html">Wii</a>
                                                                </li>
                                                                <li class="pt-1 d-flex w-100">
                                                                    <a class="p-0 nav-link animate-underline animate-target d-inline fw-normal text-truncate" href="shop-catalog-electronics.html">Nintendo 3DS</a>
                                                                </li>
                                                                <li class="pt-1 d-flex w-100">
                                                                    <a class="p-0 nav-link animate-underline animate-target d-inline fw-normal text-truncate" href="shop-catalog-electronics.html">Nintendo 2DS</a>
                                                                </li>
                                                                <li class="pt-1 d-flex w-100">
                                                                    <a class="p-0 nav-link animate-underline animate-target d-inline fw-normal text-truncate" href="shop-catalog-electronics.html">Nintendo DS</a>
                                                                </li>
                                                                <li class="pt-1 d-flex w-100">
                                                                    <a class="p-0 nav-link animate-underline animate-target d-inline fw-normal text-truncate" href="shop-catalog-electronics.html">Wii</a>
                                                                </li>
                                                            </ul>
                                                        </div>
                                                        <div style="min-width: 194px">
                                                            <ul class="gap-2 mt-2 nav flex-column mt-lg-0">
                                                                <li class="pt-1 d-flex w-100">
                                                                    <a class="p-0 nav-link animate-underline animate-target d-inline fw-normal text-truncate" href="shop-catalog-electronics.html">Mac</a>
                                                                </li>
                                                                <li class="pt-1 d-flex w-100">
                                                                    <a class="p-0 nav-link animate-underline animate-target d-inline fw-normal text-truncate" href="shop-catalog-electronics.html">PlayStation Vita</a>
                                                                </li>
                                                                <li class="pt-1 d-flex w-100">
                                                                    <a class="p-0 nav-link animate-underline animate-target d-inline fw-normal text-truncate" href="shop-catalog-electronics.html">Sony PSP</a>
                                                                </li>
                                                                <li class="pt-1 d-flex w-100">
                                                                    <a class="p-0 nav-link animate-underline animate-target d-inline fw-normal text-truncate" href="shop-catalog-electronics.html">Retro Gaming</a>
                                                                </li>
                                                                <li class="pt-1 d-flex w-100">
                                                                    <a class="p-0 nav-link animate-underline animate-target d-inline fw-normal text-truncate" href="shop-catalog-electronics.html">Microconsoles</a>
                                                                </li>
                                                                <li class="pt-1 d-flex w-100">
                                                                    <a class="p-0 nav-link animate-underline animate-target d-inline fw-normal text-truncate" href="shop-catalog-electronics.html">Controllers</a>
                                                                </li>
                                                                <li class="pt-1 d-flex w-100">
                                                                    <a class="p-0 nav-link animate-underline animate-target d-inline fw-normal text-truncate" href="shop-catalog-electronics.html">Accessories</a>
                                                                </li>
                                                                <li class="pt-1 d-flex w-100">
                                                                    <a class="p-0 nav-link animate-underline animate-target d-inline fw-normal text-truncate" href="shop-catalog-electronics.html">Digital Games Screens</a>
                                                                </li>
                                                                <li class="pt-1 d-flex w-100">
                                                                    <a class="p-0 nav-link animate-underline animate-target d-inline fw-normal text-truncate" href="shop-catalog-electronics.html">Game Pass</a>
                                                                </li>
                                                                <li class="pt-1 d-flex w-100">
                                                                    <a class="p-0 nav-link animate-underline animate-target d-inline fw-normal text-truncate" href="shop-catalog-electronics.html">PlayStation Plus</a>
                                                                </li>
                                                            </ul>
                                                        </div>
                                                        <div class="d-none d-lg-block">
                                                            <div class="d-none d-xl-block" style="width: 284px"></div>
                                                            <div class="d-xl-none" style="width: 240px"></div>
                                                            <div class="px-3 py-4 position-relative d-flex flex-column justify-content-center h-100 bg-body-secondary rounded-5">
                                                                <div class="px-2 text-center">
                                                                    <span class="mb-2 badge bg-danger bg-opacity-10 text-danger fs-sm rounded-pill">Save $100</span>
                                                                    <div class="mb-2 fs-sm text-light-emphasis">Starts from <del>$599.00</del> $499.00</div>
                                                                    <div class="mb-4 h2">Xbox Series X</div>
                                                                </div>
                                                                <img src="assets/img/mega-menu/electronics/12.png" width="252" alt="Xbox">
                                                                <div class="mt-4 text-center">
                                                                    <a class="btn btn-sm btn-primary stretched-link" href="shop-catalog-electronics.html">Shop now</a>
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
                                        <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" data-bs-trigger="hover" aria-expanded="false">Home</a>
                                        <ul class="dropdown-menu">
                                            <li class="px-2 hover-effect-opacity mx-n2">
                                                <a class="mb-0 dropdown-item d-block" href="home-electronics.html">
                            <span class="fw-medium">Electronics Store</span>
                            <span class="d-block fs-xs text-body-secondary">Megamenu + Hero slider</span>
                            <div class="top-0 invisible px-2 pt-2 transition-none border rounded opacity-0 d-none d-lg-block hover-effect-target position-absolute start-100 bg-body border-light-subtle rounded-start-0 ms-n2" style="width: 212px; height: calc(100% + 2px); margin-top: -1px">
                              <img class="position-relative z-2 d-none-dark" src="assets/img/mega-menu/demo-preview/electronics-light.jpg" alt="Electronics Store">
                              <img class="position-relative z-2 d-none d-block-dark" src="assets/img/mega-menu/demo-preview/electronics-dark.jpg" alt="Electronics Store">
                              <span class="top-0 rounded position-absolute start-0 w-100 h-100 rounded-start-0 d-none-dark" style="box-shadow: .875rem .5rem 2rem -.5rem #676f7b; opacity: .1"></span>
                              <span class="top-0 rounded position-absolute start-0 w-100 h-100 rounded-start-0 d-none d-block-dark" style="box-shadow: .875rem .5rem 1.875rem -.5rem #080b12; opacity: .25"></span>
                            </div>
                          </a>
                                            </li>
                                            <li class="px-2 hover-effect-opacity mx-n2">
                                                <a class="mb-0 dropdown-item d-block" href="home-fashion-v1.html">
                            <span class="fw-medium">Fashion Store v.1</span>
                            <span class="d-block fs-xs text-body-secondary">Hero promo slider</span>
                            <div class="top-0 invisible px-2 pt-2 transition-none border rounded opacity-0 d-none d-lg-block hover-effect-target position-absolute start-100 bg-body border-light-subtle rounded-start-0 ms-n2" style="width: 212px; height: calc(100% + 2px); margin-top: -1px">
                              <img class="position-relative z-2 d-none-dark" src="assets/img/mega-menu/demo-preview/fashion-1-light.jpg" alt="Fashion Store v.1">
                              <img class="position-relative z-2 d-none d-block-dark" src="assets/img/mega-menu/demo-preview/fashion-1-dark.jpg" alt="Fashion Store v.1">
                              <span class="top-0 rounded position-absolute start-0 w-100 h-100 rounded-start-0 d-none-dark" style="box-shadow: .875rem .5rem 2rem -.5rem #676f7b; opacity: .1"></span>
                              <span class="top-0 rounded position-absolute start-0 w-100 h-100 rounded-start-0 d-none d-block-dark" style="box-shadow: .875rem .5rem 1.875rem -.5rem #080b12; opacity: .25"></span>
                            </div>
                          </a>
                                            </li>
                                            <li class="px-2 hover-effect-opacity mx-n2">
                                                <a class="mb-0 dropdown-item d-block" href="home-fashion-v2.html">
                            <span class="fw-medium">Fashion Store v.2</span>
                            <span class="d-block fs-xs text-body-secondary">Hero banner with hotspots</span>
                            <div class="top-0 invisible px-2 pt-2 transition-none border rounded opacity-0 d-none d-lg-block hover-effect-target position-absolute start-100 bg-body border-light-subtle rounded-start-0 ms-n2" style="width: 212px; height: calc(100% + 2px); margin-top: -1px">
                              <img class="position-relative z-2 d-none-dark" src="assets/img/mega-menu/demo-preview/fashion-2-light.jpg" alt="Fashion Store v.2">
                              <img class="position-relative z-2 d-none d-block-dark" src="assets/img/mega-menu/demo-preview/fashion-2-dark.jpg" alt="Fashion Store v.2">
                              <span class="top-0 rounded position-absolute start-0 w-100 h-100 rounded-start-0 d-none-dark" style="box-shadow: .875rem .5rem 2rem -.5rem #676f7b; opacity: .1"></span>
                              <span class="top-0 rounded position-absolute start-0 w-100 h-100 rounded-start-0 d-none d-block-dark" style="box-shadow: .875rem .5rem 1.875rem -.5rem #080b12; opacity: .25"></span>
                            </div>
                          </a>
                                            </li>
                                            <li class="px-2 hover-effect-opacity mx-n2">
                                                <a class="mb-0 dropdown-item d-block" href="home-furniture.html">
                            <span class="fw-medium">Furniture Store</span>
                            <span class="d-block fs-xs text-body-secondary">Fancy product carousel</span>
                            <div class="top-0 invisible px-2 pt-2 transition-none border rounded opacity-0 d-none d-lg-block hover-effect-target position-absolute start-100 bg-body border-light-subtle rounded-start-0 ms-n2" style="width: 212px; height: calc(100% + 2px); margin-top: -1px">
                              <img class="position-relative z-2 d-none-dark" src="assets/img/mega-menu/demo-preview/furniture-light.jpg" alt="Furniture Store">
                              <img class="position-relative z-2 d-none d-block-dark" src="assets/img/mega-menu/demo-preview/furniture-dark.jpg" alt="Furniture Store">
                              <span class="top-0 rounded position-absolute start-0 w-100 h-100 rounded-start-0 d-none-dark" style="box-shadow: .875rem .5rem 2rem -.5rem #676f7b; opacity: .1"></span>
                              <span class="top-0 rounded position-absolute start-0 w-100 h-100 rounded-start-0 d-none d-block-dark" style="box-shadow: .875rem .5rem 1.875rem -.5rem #080b12; opacity: .25"></span>
                            </div>
                          </a>
                                            </li>
                                            <li class="px-2 hover-effect-opacity mx-n2">
                                                <a class="mb-0 dropdown-item d-block" href="home-grocery.html">
                            <span class="fw-medium">Grocery Store</span>
                            <span class="d-block fs-xs text-body-secondary">Hero slider + Category cards</span>
                            <div class="top-0 invisible px-2 pt-2 transition-none border rounded opacity-0 d-none d-lg-block hover-effect-target position-absolute start-100 bg-body border-light-subtle rounded-start-0 ms-n2" style="width: 212px; height: calc(100% + 2px); margin-top: -1px">
                              <img class="position-relative z-2 d-none-dark" src="assets/img/mega-menu/demo-preview/grocery-light.jpg" alt="Grocery Store">
                              <img class="position-relative z-2 d-none d-block-dark" src="assets/img/mega-menu/demo-preview/grocery-dark.jpg" alt="Grocery Store">
                              <span class="top-0 rounded position-absolute start-0 w-100 h-100 rounded-start-0 d-none-dark" style="box-shadow: .875rem .5rem 2rem -.5rem #676f7b; opacity: .1"></span>
                              <span class="top-0 rounded position-absolute start-0 w-100 h-100 rounded-start-0 d-none d-block-dark" style="box-shadow: .875rem .5rem 1.875rem -.5rem #080b12; opacity: .25"></span>
                            </div>
                          </a>
                                            </li>
                                        </ul>
                                    </li>
                                    <li class="nav-item dropdown position-static me-lg-n1 me-xl-0">
                                        <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" data-bs-trigger="hover" aria-expanded="false">Shop</a>
                                        <div class="p-4 dropdown-menu rounded-4">
                                            <div class="gap-4 d-flex flex-column flex-lg-row">
                                                <div style="min-width: 190px">
                                                    <div class="mb-2 h6">Electronics Store</div>
                                                    <ul class="gap-2 mt-0 nav flex-column">
                                                        <li class="pt-1 d-flex w-100">
                                                            <a class="p-0 nav-link animate-underline animate-target d-inline fw-normal text-truncate" href="shop-categories-electronics.html">Categories Page</a>
                                                        </li>
                                                        <li class="pt-1 d-flex w-100">
                                                            <a class="p-0 nav-link animate-underline animate-target d-inline fw-normal text-truncate" href="shop-catalog-electronics.html">Catalog with Side Filters</a>
                                                        </li>
                                                        <li class="pt-1 d-flex w-100">
                                                            <a class="p-0 nav-link animate-underline animate-target d-inline fw-normal text-truncate" href="shop-product-general-electronics.html">Product General Info</a>
                                                        </li>
                                                        <li class="pt-1 d-flex w-100">
                                                            <a class="p-0 nav-link animate-underline animate-target d-inline fw-normal text-truncate" href="shop-product-details-electronics.html">Product Details</a>
                                                        </li>
                                                        <li class="pt-1 d-flex w-100">
                                                            <a class="p-0 nav-link animate-underline animate-target d-inline fw-normal text-truncate" href="shop-product-reviews-electronics.html">Product Reviews</a>
                                                        </li>
                                                    </ul>
                                                    <div class="pt-4 mb-2 h6">Fashion Store</div>
                                                    <ul class="gap-2 mt-0 nav flex-column">
                                                        <li class="pt-1 d-flex w-100">
                                                            <a class="p-0 nav-link animate-underline animate-target d-inline fw-normal text-truncate" href="shop-catalog-fashion.html">Catalog with Side Filters</a>
                                                        </li>
                                                        <li class="pt-1 d-flex w-100">
                                                            <a class="p-0 nav-link animate-underline animate-target d-inline fw-normal text-truncate" href="shop-product-fashion.html">Product Page</a>
                                                        </li>
                                                    </ul>
                                                    <div class="pt-4 mb-2 h6">Furniture Store</div>
                                                    <ul class="gap-2 mt-0 nav flex-column">
                                                        <li class="pt-1 d-flex w-100">
                                                            <a class="p-0 nav-link animate-underline animate-target d-inline fw-normal text-truncate" href="shop-catalog-furniture.html">Catalog with Top Filters</a>
                                                        </li>
                                                        <li class="pt-1 d-flex w-100">
                                                            <a class="p-0 nav-link animate-underline animate-target d-inline fw-normal text-truncate" href="shop-product-furniture.html">Product Page</a>
                                                        </li>
                                                    </ul>
                                                </div>
                                                <div style="min-width: 190px">
                                                    <div class="mb-2 h6">Grocery Store</div>
                                                    <ul class="gap-2 mt-0 nav flex-column">
                                                        <li class="pt-1 d-flex w-100">
                                                            <a class="p-0 nav-link animate-underline animate-target d-inline fw-normal text-truncate" href="shop-catalog-grocery.html">Catalog with Side Filters</a>
                                                        </li>
                                                        <li class="pt-1 d-flex w-100">
                                                            <a class="p-0 nav-link animate-underline animate-target d-inline fw-normal text-truncate" href="shop-product-grocery.html">Product Page</a>
                                                        </li>
                                                    </ul>
                                                    <div class="pt-4 mb-2 h6">Checkout v.1</div>
                                                    <ul class="gap-2 mt-0 nav flex-column">
                                                        <li class="pt-1 d-flex w-100">
                                                            <a class="p-0 nav-link animate-underline animate-target d-inline fw-normal text-truncate" href="checkout-v1-cart.html">Shopping Cart</a>
                                                        </li>
                                                        <li class="pt-1 d-flex w-100">
                                                            <a class="p-0 nav-link animate-underline animate-target d-inline fw-normal text-truncate" href="checkout-v1-delivery-1.html">Delivery Info (Step 1)</a>
                                                        </li>
                                                        <li class="pt-1 d-flex w-100">
                                                            <a class="p-0 nav-link animate-underline animate-target d-inline fw-normal text-truncate" href="checkout-v1-delivery-2.html">Delivery Info (Step 2)</a>
                                                        </li>
                                                        <li class="pt-1 d-flex w-100">
                                                            <a class="p-0 nav-link animate-underline animate-target d-inline fw-normal text-truncate" href="checkout-v1-shipping.html">Shipping Address</a>
                                                        </li>
                                                        <li class="pt-1 d-flex w-100">
                                                            <a class="p-0 nav-link animate-underline animate-target d-inline fw-normal text-truncate" href="checkout-v1-payment.html">Payment</a>
                                                        </li>
                                                        <li class="pt-1 d-flex w-100">
                                                            <a class="p-0 nav-link animate-underline animate-target d-inline fw-normal text-truncate" href="checkout-v1-thankyou.html">Thank You Page</a>
                                                        </li>
                                                    </ul>
                                                </div>
                                                <div style="min-width: 190px">
                                                    <div class="mb-2 h6">Checkout v.2</div>
                                                    <ul class="gap-2 mt-0 nav flex-column">
                                                        <li class="pt-1 d-flex w-100">
                                                            <a class="p-0 nav-link animate-underline animate-target d-inline fw-normal text-truncate" href="checkout-v2-cart.html">Shopping Cart</a>
                                                        </li>
                                                        <li class="pt-1 d-flex w-100">
                                                            <a class="p-0 nav-link animate-underline animate-target d-inline fw-normal text-truncate" href="checkout-v2-delivery.html">Delivery Info</a>
                                                        </li>
                                                        <li class="pt-1 d-flex w-100">
                                                            <a class="p-0 nav-link animate-underline animate-target d-inline fw-normal text-truncate" href="checkout-v2-pickup.html">Pickup from Store</a>
                                                        </li>
                                                        <li class="pt-1 d-flex w-100">
                                                            <a class="p-0 nav-link animate-underline animate-target d-inline fw-normal text-truncate" href="checkout-v2-thankyou.html">Thank You Page</a>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </li>
                                    <li class="nav-item dropdown me-lg-n1 me-xl-0">
                                        <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" data-bs-trigger="hover" data-bs-auto-close="outside" aria-expanded="false">Account</a>
                                        <ul class="dropdown-menu">
                                            <li class="dropend">
                                                <a class="dropdown-item dropdown-toggle" href="#!" role="button" data-bs-toggle="dropdown" data-bs-trigger="hover" aria-expanded="false">Auth Pages</a>
                                                <ul class="dropdown-menu">
                                                    <li><a class="dropdown-item" href="account-signin.html">Sign In</a></li>
                                                    <li><a class="dropdown-item" href="account-signup.html">Sign Up</a></li>
                                                    <li><a class="dropdown-item" href="account-password-recovery.html">Password Recovery</a></li>
                                                </ul>
                                            </li>
                                            <li><a class="dropdown-item" href="account-orders.html">Orders History</a></li>
                                            <li><a class="dropdown-item" href="account-wishlist.html">Wishlist</a></li>
                                            <li><a class="dropdown-item" href="account-payment.html">Payment Methods</a></li>
                                            <li><a class="dropdown-item" href="account-reviews.html">My Reviews</a></li>
                                            <li><a class="dropdown-item" href="account-info.html">Personal Info</a></li>
                                            <li><a class="dropdown-item" href="account-addresses.html">Addresses</a></li>
                                            <li><a class="dropdown-item" href="account-notifications.html">Notifications</a></li>
                                        </ul>
                                    </li>
                                    <li class="nav-item dropdown me-lg-n1 me-xl-0">
                                        <a class="nav-link dropdown-toggle active" aria-current="page" href="#" role="button" data-bs-toggle="dropdown" data-bs-trigger="hover" data-bs-auto-close="outside" aria-expanded="false">Pages</a>
                                        <ul class="dropdown-menu">
                                            <li class="dropend">
                                                <a class="dropdown-item dropdown-toggle" href="#!" role="button" data-bs-toggle="dropdown" data-bs-trigger="hover" aria-expanded="false">About</a>
                                                <ul class="dropdown-menu">
                                                    <li><a class="dropdown-item" href="about-v1.html">About v.1</a></li>
                                                    <li><a class="dropdown-item" href="about-v2.html">About v.2</a></li>
                                                </ul>
                                            </li>
                                            <li class="dropend">
                                                <a class="dropdown-item dropdown-toggle" href="#!" role="button" data-bs-toggle="dropdown" data-bs-trigger="hover" aria-expanded="false">Blog</a>
                                                <ul class="dropdown-menu">
                                                    <li><a class="dropdown-item" href="blog-grid-v1.html">Grid View v.1</a></li>
                                                    <li><a class="dropdown-item" href="blog-grid-v2.html">Grid View v.2</a></li>
                                                    <li><a class="dropdown-item" href="blog-list.html">List View</a></li>
                                                    <li><a class="dropdown-item" href="blog-single-v1.html">Single Post v.1</a></li>
                                                    <li><a class="dropdown-item" href="blog-single-v2.html">Single Post v.2</a></li>
                                                </ul>
                                            </li>
                                            <li class="dropend">
                                                <a class="dropdown-item dropdown-toggle" href="#!" role="button" data-bs-toggle="dropdown" data-bs-trigger="hover" aria-expanded="false">Contact</a>
                                                <ul class="dropdown-menu">
                                                    <li><a class="dropdown-item" href="contact-v1.html">Contact v.1</a></li>
                                                    <li><a class="dropdown-item" href="contact-v2.html">Contact v.2</a></li>
                                                    <li><a class="dropdown-item" href="contact-v3.html">Contact v.3</a></li>
                                                </ul>
                                            </li>
                                            <li class="dropend">
                                                <a class="dropdown-item dropdown-toggle" href="#!" role="button" data-bs-toggle="dropdown" data-bs-trigger="hover" aria-expanded="false">Help Center</a>
                                                <ul class="dropdown-menu">
                                                    <li><a class="dropdown-item" href="help-topics-v1.html">Help Topics v.1</a></li>
                                                    <li><a class="dropdown-item" href="help-topics-v2.html">Help Topics v.2</a></li>
                                                    <li><a class="dropdown-item" href="help-single-article-v1.html">Help Single Article v.1</a></li>
                                                    <li><a class="dropdown-item" href="help-single-article-v2.html">Help Single Article v.2</a></li>
                                                </ul>
                                            </li>
                                            <li class="dropend">
                                                <a class="dropdown-item dropdown-toggle" href="#!" role="button" data-bs-toggle="dropdown" data-bs-trigger="hover" aria-expanded="false">404 Error</a>
                                                <ul class="dropdown-menu">
                                                    <li><a class="dropdown-item" href="404-electronics.html">404 Electronics</a></li>
                                                    <li><a class="dropdown-item" href="404-fashion.html">404 Fashion</a></li>
                                                    <li><a class="dropdown-item" href="404-furniture.html">404 Furniture</a></li>
                                                    <li><a class="dropdown-item" href="404-grocery.html">404 Grocery</a></li>
                                                </ul>
                                            </li>
                                            <li><a class="dropdown-item" href="terms-and-conditions.html">Terms &amp; Conditions</a></li>
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
                                        <a class="px-3 nav-link dropdown-toggle fs-sm" href="#!" role="button" data-bs-toggle="dropdown" data-bs-trigger="hover" aria-expanded="false">Eng</a>
                                        <ul class="dropdown-menu fs-sm" style="--cz-dropdown-min-width: 7.5rem; --cz-dropdown-spacer: .25rem">
                                            <li><a class="dropdown-item" href="#!">Français</a></li>
                                            <li><a class="dropdown-item" href="#!">Deutsch</a></li>
                                            <li><a class="dropdown-item" href="#!">Italiano</a></li>
                                        </ul>
                                    </li>
                                    <li class="nav-item dropdown me-lg-n1">
                                        <a class="px-3 nav-link dropdown-toggle fs-sm" href="#!" role="button" data-bs-toggle="dropdown" data-bs-trigger="hover" aria-expanded="false">USD ($)</a>
                                        <ul class="dropdown-menu dropdown-menu-end fs-sm" style="--cz-dropdown-min-width: 7rem; --cz-dropdown-spacer: .25rem">
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
                <li class="breadcrumb-item active" aria-current="page">Blog</li>
            </ol>
        </nav>


        <!-- Page title -->
        <h1 class="container mb-4 h3">Our blog</h1>


        <!-- Featured posts -->
        <section class="container pb-5">
            <div class="pb-5 row gy-5">

                <!-- Article -->
                <article class="col-md-6 col-lg-7">
                    <a class="overflow-hidden ratio d-flex hover-effect-scale rounded-4" href="blog-single-v1.html" style="--cz-aspect-ratio: calc(484 / 746 * 100%)">
              <img src="assets/img/blog/grid/v1/01.jpg" class="hover-effect-target" alt="Image">
            </a>
                    <div class="pt-4">
                        <div class="gap-2 pb-2 mb-1 nav align-items-center mt-n1">
                            <a class="p-0 nav-link text-body fs-xs text-uppercase" href="#!">Gadget reviews</a>
                            <hr class="mx-1 my-1 vr">
                            <span class="text-body-tertiary fs-xs">October 13, 2024</span>
                        </div>
                        <h3 class="mb-0 h5">
                            <a class="hover-effect-underline" href="blog-single-v1.html">Discover how to maximize your productivity with these essential tech gadgets designed for the modern home office</a>
                        </h3>
                    </div>
                </article>

                <!-- Side list -->
                <div class="gap-4 col-md-6 col-lg-5 d-flex flex-column align-content-between">

                    <!-- Article -->
                    <article class="hover-effect-scale position-relative d-flex align-items-center ps-xl-4 mb-xl-1">
                        <div class="w-100 pe-3 pe-sm-4 pe-lg-3 pe-xl-4">
                            <div class="pb-2 mb-1 text-body-tertiary fs-xs">October 10, 2024</div>
                            <h3 class="mb-2 h6">
                                <a class="hover-effect-underline stretched-link" href="blog-single-v1.html">Digital digest: News and views on the latest electronic products</a>
                            </h3>
                        </div>
                        <div class="overflow-hidden rounded ratio w-100" style="max-width: 196px; --cz-aspect-ratio: calc(140 / 196 * 100%)">
                            <img src="assets/img/blog/grid/v1/02.jpg" class="hover-effect-target" alt="Image">
                        </div>
                    </article>

                    <!-- Article -->
                    <article class="hover-effect-scale position-relative d-flex align-items-center ps-xl-4 mb-xl-1">
                        <div class="w-100 pe-3 pe-sm-4 pe-lg-3 pe-xl-4">
                            <div class="pb-2 mb-1 text-body-tertiary fs-xs">September 29, 2024</div>
                            <h3 class="mb-2 h6">
                                <a class="hover-effect-underline stretched-link" href="blog-single-v1.html">Embracing connections: How modern technology bridges gaps and builds communities</a>
                            </h3>
                        </div>
                        <div class="overflow-hidden rounded ratio w-100" style="max-width: 196px; --cz-aspect-ratio: calc(140 / 196 * 100%)">
                            <img src="assets/img/blog/grid/v1/03.jpg" class="hover-effect-target" alt="Image">
                        </div>
                    </article>

                    <!-- Article -->
                    <article class="hover-effect-scale position-relative d-flex align-items-center ps-xl-4 mb-xl-1">
                        <div class="w-100 pe-3 pe-sm-4 pe-lg-3 pe-xl-4">
                            <div class="pb-2 mb-1 text-body-tertiary fs-xs">September 17, 2024</div>
                            <h3 class="mb-2 h6">
                                <a class="hover-effect-underline stretched-link" href="blog-single-v1.html">Transform your home into a smart hub with the latest IoT</a>
                            </h3>
                        </div>
                        <div class="overflow-hidden rounded ratio w-100" style="max-width: 196px; --cz-aspect-ratio: calc(140 / 196 * 100%)">
                            <img src="assets/img/blog/grid/v1/04.jpg" class="hover-effect-target" alt="Image">
                        </div>
                    </article>
                </div>
            </div>
            <hr class="my-0 my-md-2 my-lg-4">
        </section>


        <!-- Posts grid + Sidebar -->
        <section class="container pb-5 mb-2 mb-md-3 mb-lg-4 mb-xl-5">
            <div class="row">

                <!-- Posts grid -->
                <div class="col-lg-8">
                    <div class="row row-cols-1 row-cols-sm-2 gy-5">

                        <!-- Article -->
                        <article class="col">
                            <a class="overflow-hidden rounded ratio d-flex hover-effect-scale" href="blog-single-v1.html" style="--cz-aspect-ratio: calc(305 / 416 * 100%)">
                  <img src="assets/img/blog/grid/v1/05.jpg" class="hover-effect-target" alt="Image">
                </a>
                            <div class="pt-4">
                                <div class="gap-2 pb-2 mb-1 nav align-items-center mt-n1">
                                    <a class="p-0 nav-link text-body fs-xs text-uppercase" href="#!">Tech tips</a>
                                    <hr class="mx-1 my-1 vr">
                                    <span class="text-body-tertiary fs-xs">September 11, 2024</span>
                                </div>
                                <h3 class="mb-0 h5">
                                    <a class="hover-effect-underline" href="blog-single-v1.html">Optimizing your workspace: The guide to an efficient and minimalist desk setup</a>
                                </h3>
                            </div>
                        </article>

                        <!-- Article -->
                        <article class="col">
                            <a class="overflow-hidden rounded ratio d-flex hover-effect-scale" href="blog-single-v1.html" style="--cz-aspect-ratio: calc(305 / 416 * 100%)">
                  <img src="assets/img/blog/grid/v1/06.jpg" class="hover-effect-target" alt="Image">
                </a>
                            <div class="pt-4">
                                <div class="gap-2 pb-2 mb-1 nav align-items-center mt-n1">
                                    <a class="p-0 nav-link text-body fs-xs text-uppercase" href="#!">Industry trends</a>
                                    <hr class="mx-1 my-1 vr">
                                    <span class="text-body-tertiary fs-xs">September 5, 2024</span>
                                </div>
                                <h3 class="mb-0 h5">
                                    <a class="hover-effect-underline" href="blog-single-v1.html">Exploring the skies: The rise of drone photography and videography</a>
                                </h3>
                            </div>
                        </article>

                        <!-- Article -->
                        <article class="col">
                            <a class="overflow-hidden rounded ratio d-flex hover-effect-scale" href="blog-single-v1.html" style="--cz-aspect-ratio: calc(305 / 416 * 100%)">
                  <img src="assets/img/blog/grid/v1/07.jpg" class="hover-effect-target" alt="Image">
                </a>
                            <div class="pt-4">
                                <div class="gap-2 pb-2 mb-1 nav align-items-center mt-n1">
                                    <a class="p-0 nav-link text-body fs-xs text-uppercase" href="#!">IoT</a>
                                    <hr class="mx-1 my-1 vr">
                                    <span class="text-body-tertiary fs-xs">August 23, 2024</span>
                                </div>
                                <h3 class="mb-0 h5">
                                    <a class="hover-effect-underline" href="blog-single-v1.html">Connecting the dots: How IoT technology is transforming everyday life</a>
                                </h3>
                            </div>
                        </article>

                        <!-- Article -->
                        <article class="col">
                            <a class="overflow-hidden rounded ratio d-flex hover-effect-scale" href="blog-single-v1.html" style="--cz-aspect-ratio: calc(305 / 416 * 100%)">
                  <img src="assets/img/blog/grid/v1/08.jpg" class="hover-effect-target" alt="Image">
                </a>
                            <div class="pt-4">
                                <div class="gap-2 pb-2 mb-1 nav align-items-center mt-n1">
                                    <a class="p-0 nav-link text-body fs-xs text-uppercase" href="#!">Buying guides</a>
                                    <hr class="mx-1 my-1 vr">
                                    <span class="text-body-tertiary fs-xs">August 18, 2024</span>
                                </div>
                                <h3 class="mb-0 h5">
                                    <a class="hover-effect-underline" href="blog-single-v1.html">How to find the best deals and make secure transactions online</a>
                                </h3>
                            </div>
                        </article>

                        <!-- Article -->
                        <article class="col">
                            <a class="overflow-hidden rounded ratio d-flex hover-effect-scale" href="blog-single-v1.html" style="--cz-aspect-ratio: calc(305 / 416 * 100%)">
                  <img src="assets/img/blog/grid/v1/09.jpg" class="hover-effect-target" alt="Image">
                </a>
                            <div class="pt-4">
                                <div class="gap-2 pb-2 mb-1 nav align-items-center mt-n1">
                                    <a class="p-0 nav-link text-body fs-xs text-uppercase" href="#!">Gadget reviews</a>
                                    <hr class="mx-1 my-1 vr">
                                    <span class="text-body-tertiary fs-xs">August 9, 2024</span>
                                </div>
                                <h3 class="mb-0 h5">
                                    <a class="hover-effect-underline" href="blog-single-v1.html">Top 10 electric kitchen appliances for modern homes</a>
                                </h3>
                            </div>
                        </article>

                        <!-- Article -->
                        <article class="col">
                            <a class="overflow-hidden rounded ratio d-flex hover-effect-scale" href="blog-single-v1.html" style="--cz-aspect-ratio: calc(305 / 416 * 100%)">
                  <img src="assets/img/blog/grid/v1/10.jpg" class="hover-effect-target" alt="Image">
                </a>
                            <div class="pt-4">
                                <div class="gap-2 pb-2 mb-1 nav align-items-center mt-n1">
                                    <a class="p-0 nav-link text-body fs-xs text-uppercase" href="#!">Gaming</a>
                                    <hr class="mx-1 my-1 vr">
                                    <span class="text-body-tertiary fs-xs">July 27, 2024</span>
                                </div>
                                <h3 class="mb-0 h5">
                                    <a class="hover-effect-underline" href="blog-single-v1.html">Immersive worlds: A dive into the latest VR gear and experiences</a>
                                </h3>
                            </div>
                        </article>
                    </div>


                    <!-- Contributors' posts slider -->
                    <div class="py-5 my-1 my-sm-2 my-md-3 my-lg-4 my-xl-5">
                        <div class="mb-4 d-flex align-items-center justify-content-between">
                            <h2 class="mb-0 h3">Charitable contributions</h2>
                            <div class="gap-2 d-flex">
                                <button type="button" id="prev-post" class="btn btn-prev btn-icon btn-outline-secondary rounded-circle animate-slide-start me-1" aria-label="Prev">
                    <i class="ci-chevron-left fs-lg animate-target"></i>
                  </button>
                                <button type="button" id="next-post" class="btn btn-next btn-icon btn-outline-secondary rounded-circle animate-slide-end" aria-label="Next">
                    <i class="ci-chevron-right fs-lg animate-target"></i>
                  </button>
                            </div>
                        </div>
                        <div class="overflow-hidden row row-cols-1 row-cols-md-2 g-0 rounded-5">

                            <!-- Binded images (controlled slider) -->
                            <div class="col order-md-2 user-select-none">
                                <div class="swiper h-100" id="images" data-swiper="{
                    &quot;allowTouchMove&quot;: false,
                    &quot;loop&quot;: true,
                    &quot;effect&quot;: &quot;fade&quot;
                  }">
                                    <div class="swiper-wrapper">
                                        <div class="swiper-slide">
                                            <div class="ratio ratio-16x9"></div>
                                            <img src="assets/img/blog/grid/v1/slider01.jpg" class="top-0 position-absolute start-0 w-100 h-100 object-fit-cover" alt="Image">
                                        </div>
                                        <div class="swiper-slide">
                                            <div class="ratio ratio-16x9"></div>
                                            <img src="assets/img/blog/grid/v1/slider02.jpg" class="top-0 position-absolute start-0 w-100 h-100 object-fit-cover" alt="Image">
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!-- Text slider -->
                            <div class="px-4 py-5 col bg-dark order-md-1 px-sm-5" data-bs-theme="dark">
                                <div class="swiper py-sm-2 py-md-3 my-xl-2 my-xxl-3" data-swiper="{
                    &quot;spaceBetween&quot;: 40,
                    &quot;loop&quot;: true,
                    &quot;speed&quot;: 400,
                    &quot;controlSlider&quot;: &quot;#images&quot;,
                    &quot;navigation&quot;: {
                      &quot;prevEl&quot;: &quot;#prev-post&quot;,
                      &quot;nextEl&quot;: &quot;#next-post&quot;
                    }
                  }">
                                    <div class="swiper-wrapper">
                                        <div class="swiper-slide">
                                            <h3 class="h5">The role of philanthropy in building a better world</h3>
                                            <p class="pb-4 text-body fs-sm">Charitable contributions are a vital aspect of building a better world. These contributions come in various forms, including monetary donations, volunteering time, providing expertise...</p>
                                            <a class="btn btn-outline-light" href="blog-single-v1.html">Read more</a>
                                        </div>
                                        <div class="swiper-slide">
                                            <h3 class="h5">Supporting communities through charitable giving</h3>
                                            <p class="pb-4 text-body fs-sm">Join us on a journey of generosity as we spotlight the transformative power of charitable contributions. In this section, we celebrate the stories of impact made possible by your...</p>
                                            <a class="btn btn-outline-light" href="blog-single-v1.html">Read more</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>


                    <!-- Posts grid -->
                    <div class="pb-2 row row-cols-1 row-cols-sm-2 gy-5 pb-sm-0">

                        <!-- Article -->
                        <article class="col">
                            <a class="overflow-hidden rounded ratio d-flex hover-effect-scale" href="blog-single-v1.html" style="--cz-aspect-ratio: calc(305 / 416 * 100%)">
                  <img src="assets/img/blog/grid/v1/11.jpg" class="hover-effect-target" alt="Image">
                </a>
                            <div class="pt-4">
                                <div class="gap-2 pb-2 mb-1 nav align-items-center mt-n1">
                                    <a class="p-0 nav-link text-body fs-xs text-uppercase" href="#!">Tech news</a>
                                    <hr class="mx-1 my-1 vr">
                                    <span class="text-body-tertiary fs-xs">July 16, 2024</span>
                                </div>
                                <h3 class="mb-0 h5">
                                    <a class="hover-effect-underline" href="blog-single-v1.html">Tap, pay, and go: Simplifying transactions with mobile payment solutions</a>
                                </h3>
                            </div>
                        </article>

                        <!-- Article -->
                        <article class="col">
                            <a class="overflow-hidden rounded ratio d-flex hover-effect-scale" href="blog-single-v1.html" style="--cz-aspect-ratio: calc(305 / 416 * 100%)">
                  <img src="assets/img/blog/grid/v1/12.jpg" class="hover-effect-target" alt="Image">
                </a>
                            <div class="pt-4">
                                <div class="gap-2 pb-2 mb-1 nav align-items-center mt-n1">
                                    <a class="p-0 nav-link text-body fs-xs text-uppercase" href="#!">Industry trends</a>
                                    <hr class="mx-1 my-1 vr">
                                    <span class="text-body-tertiary fs-xs">July 8, 2024</span>
                                </div>
                                <h3 class="mb-0 h5">
                                    <a class="hover-effect-underline" href="blog-single-v1.html">The biggest prospects for the smartphone electronics industry</a>
                                </h3>
                            </div>
                        </article>

                        <!-- Article -->
                        <article class="col">
                            <a class="overflow-hidden rounded ratio d-flex hover-effect-scale" href="blog-single-v1.html" style="--cz-aspect-ratio: calc(305 / 416 * 100%)">
                  <img src="assets/img/blog/grid/v1/13.jpg" class="hover-effect-target" alt="Image">
                </a>
                            <div class="pt-4">
                                <div class="gap-2 pb-2 mb-1 nav align-items-center mt-n1">
                                    <a class="p-0 nav-link text-body fs-xs text-uppercase" href="#!">Product reviews</a>
                                    <hr class="mx-1 my-1 vr">
                                    <span class="text-body-tertiary fs-xs">June 27, 2024</span>
                                </div>
                                <h3 class="mb-0 h5">
                                    <a class="hover-effect-underline" href="blog-single-v1.html">Future engineers start young: A review of the latest robotic kit for kids</a>
                                </h3>
                            </div>
                        </article>

                        <!-- Article -->
                        <article class="col">
                            <a class="overflow-hidden rounded ratio d-flex hover-effect-scale" href="blog-single-v1.html" style="--cz-aspect-ratio: calc(305 / 416 * 100%)">
                  <img src="assets/img/blog/grid/v1/14.jpg" class="hover-effect-target" alt="Image">
                </a>
                            <div class="pt-4">
                                <div class="gap-2 pb-2 mb-1 nav align-items-center mt-n1">
                                    <a class="p-0 nav-link text-body fs-xs text-uppercase" href="#!">Buying guides</a>
                                    <hr class="mx-1 my-1 vr">
                                    <span class="text-body-tertiary fs-xs">June 19, 2024</span>
                                </div>
                                <h3 class="mb-0 h5">
                                    <a class="hover-effect-underline" href="blog-single-v1.html">A detailed guide to the latest smartphones on the market</a>
                                </h3>
                            </div>
                        </article>
                    </div>
                    <hr class="mt-4 mt-sm-5">

                    <!-- Pagination -->
                    <nav aria-label="Blog pages">
                        <ul class="pagination pagination-lg">
                            <li class="page-item active" aria-current="page">
                                <span class="page-link">
                    1
                    <span class="visually-hidden">(current)</span>
                                </span>
                            </li>
                            <li class="page-item">
                                <a class="page-link" href="#">2</a>
                            </li>
                            <li class="page-item">
                                <a class="page-link" href="#">3</a>
                            </li>
                            <li class="page-item">
                                <a class="page-link" href="#">4</a>
                            </li>
                            <li class="page-item">
                                <a class="page-link" href="#">5</a>
                            </li>
                        </ul>
                    </nav>
                </div>


                <!-- Sticky sidebar that turns into offcanvas on screens < 992px wide (lg breakpoint) -->
                <aside class="col-lg-4 col-xl-3 offset-xl-1" style="margin-top: -115px">
                    <div class="offcanvas-lg offcanvas-end sticky-lg-top ps-lg-4 ps-xl-0" id="blogSidebar">
                        <div class="d-none d-lg-block" style="height: 115px"></div>
                        <div class="py-3 offcanvas-header">
                            <h5 class="offcanvas-title">Sidebar</h5>
                            <button type="button" class="btn-close" data-bs-dismiss="offcanvas" data-bs-target="#blogSidebar" aria-label="Close"></button>
                        </div>
                        <div class="pt-2 offcanvas-body d-block py-lg-0">
                            <h4 class="mb-4 h6">Blog categories</h4>
                            <div class="flex-wrap gap-3 d-flex">
                                <a class="px-3 btn btn-outline-secondary" href="#!">Gadget reviews</a>
                                <a class="px-3 btn btn-outline-secondary" href="#!">Tech news</a>
                                <a class="px-3 btn btn-outline-secondary" href="#!">Industry trends</a>
                                <a class="px-3 btn btn-outline-secondary" href="#!">Buying guides</a>
                                <a class="px-3 btn btn-outline-secondary" href="#!">Tech tips</a>
                                <a class="px-3 btn btn-outline-secondary" href="#!">Gaming</a>
                                <a class="px-3 btn btn-outline-secondary" href="#!">IoT</a>
                            </div>
                            <h4 class="pt-5 mb-0 h6">Trending posts</h4>
                            <article class="py-4 hover-effect-scale position-relative d-flex align-items-center border-bottom">
                                <div class="w-100 pe-3">
                                    <h3 class="mb-0 h6 lh-base fs-sm">
                                        <a class="hover-effect-underline stretched-link" href="blog-single-v1.html">The role of philanthropy in building a better world</a>
                                    </h3>
                                </div>
                                <div class="ratio w-100" style="max-width: 86px; --cz-aspect-ratio: calc(64 / 86 * 100%)">
                                    <img src="assets/img/blog/grid/v1/th01.jpg" class="rounded-2" alt="Image">
                                </div>
                            </article>
                            <article class="py-4 hover-effect-scale position-relative d-flex align-items-center border-bottom">
                                <div class="w-100 pe-3">
                                    <h3 class="mb-0 h6 lh-base fs-sm">
                                        <a class="hover-effect-underline stretched-link" href="blog-single-v1.html">The biggest prospects for the smart home electronics industry</a>
                                    </h3>
                                </div>
                                <div class="ratio w-100" style="max-width: 86px; --cz-aspect-ratio: calc(64 / 86 * 100%)">
                                    <img src="assets/img/blog/grid/v1/th02.jpg" class="rounded-2" alt="Image">
                                </div>
                            </article>
                            <article class="py-4 hover-effect-scale position-relative d-flex align-items-center">
                                <div class="w-100 pe-3">
                                    <h3 class="mb-0 h6 lh-base fs-sm">
                                        <a class="hover-effect-underline stretched-link" href="blog-single-v1.html">Behind-the-scenes stories from the world of iPhones</a>
                                    </h3>
                                </div>
                                <div class="ratio w-100" style="max-width: 86px; --cz-aspect-ratio: calc(64 / 86 * 100%)">
                                    <img src="assets/img/blog/grid/v1/th03.jpg" class="rounded-2" alt="Image">
                                </div>
                            </article>
                            <h4 class="pt-4 h6">Follow us</h4>
                            <div class="gap-2 pb-2 d-flex">
                                <a class="border-0 btn btn-icon fs-base btn-outline-secondary" href="#!" data-bs-toggle="tooltip" data-bs-template="<div class=&quot;tooltip fs-xs mb-n2&quot; role=&quot;tooltip&quot;><div class=&quot;tooltip-inner bg-transparent text-body p-0&quot;></div></div>"
                                    title="Instagram" aria-label="Follow us on Instagram">
                    <i class="ci-instagram"></i>
                  </a>
                                <a class="border-0 btn btn-icon fs-base btn-outline-secondary" href="#!" data-bs-toggle="tooltip" data-bs-template="<div class=&quot;tooltip fs-xs mb-n2&quot; role=&quot;tooltip&quot;><div class=&quot;tooltip-inner bg-transparent text-body p-0&quot;></div></div>"
                                    title="X (Twitter)" aria-label="Follow us on X">
                    <i class="ci-x"></i>
                  </a>
                                <a class="border-0 btn btn-icon fs-base btn-outline-secondary" href="#!" data-bs-toggle="tooltip" data-bs-template="<div class=&quot;tooltip fs-xs mb-n2&quot; role=&quot;tooltip&quot;><div class=&quot;tooltip-inner bg-transparent text-body p-0&quot;></div></div>"
                                    title="Facebook" aria-label="Follow us on Facebook">
                    <i class="ci-facebook"></i>
                  </a>
                                <a class="border-0 btn btn-icon fs-base btn-outline-secondary" href="#!" data-bs-toggle="tooltip" data-bs-template="<div class=&quot;tooltip fs-xs mb-n2&quot; role=&quot;tooltip&quot;><div class=&quot;tooltip-inner bg-transparent text-body p-0&quot;></div></div>"
                                    title="Telegram" aria-label="Follow us on Telegram">
                    <i class="ci-telegram"></i>
                  </a>
                            </div>
                        </div>
                    </div>
                </aside>
            </div>
        </section>


        <!-- Video reviews -->
        <section class="container pb-5 mb-1 mb-sm-2 mb-md-3 mb-lg-4 mb-xl-5">

            <!-- Heading -->
            <div class="pb-2 mb-3 d-flex align-items-center justify-content-between pb-sm-3">
                <h2 class="mb-0 h3">Video reviews</h2>
                <div class="nav ms-3">
                    <a class="px-0 py-2 nav-link animate-underline" href="#!">
              <span class="animate-target">View all</span>
              <i class="ci-chevron-right fs-base ms-1"></i>
            </a>
                </div>
            </div>

            <!-- Video cards that turn into slider on screens < 992px wide (lg breakpoint) -->
            <div class="swiper" data-swiper="{
          &quot;slidesPerView&quot;: 1,
          &quot;spaceBetween&quot;: 24,
          &quot;pagination&quot;: {
            &quot;el&quot;: &quot;.swiper-pagination&quot;,
            &quot;clickable&quot;: true
          },
          &quot;breakpoints&quot;: {
            &quot;500&quot;: {
              &quot;slidesPerView&quot;: 2
            },
            &quot;768&quot;: {
              &quot;slidesPerView&quot;: 3
            },
            &quot;992&quot;: {
              &quot;slidesPerView&quot;: 4
            }
          }
        }">
                <div class="swiper-wrapper">

                    <!-- Article -->
                    <article class="swiper-slide hover-effect-scale">
                        <div class="overflow-hidden rounded ratio" style="--cz-aspect-ratio: calc(200 / 306 * 100%)">
                            <div class="btn btn-icon btn-light position-absolute top-50 start-50 translate-middle z-2 rounded-circle pe-none">
                                <i class="ci-play fs-base"></i>
                            </div>
                            <img src="assets/img/blog/grid/v1/video01.jpg" class="hover-effect-target" alt="Image">
                        </div>
                        <div class="pt-3 mt-1">
                            <div class="mb-2 text-body-tertiary fs-xs">06:12</div>
                            <h3 class="mb-0 h6">
                                <a class="hover-effect-underline stretched-link" href="#!">A comprehensive review of the latest kitchen blenders on the market</a>
                            </h3>
                        </div>
                    </article>

                    <!-- Article -->
                    <article class="swiper-slide hover-effect-scale">
                        <div class="overflow-hidden rounded ratio" style="--cz-aspect-ratio: calc(200 / 306 * 100%)">
                            <div class="btn btn-icon btn-light position-absolute top-50 start-50 translate-middle z-2 rounded-circle pe-none">
                                <i class="ci-play fs-base"></i>
                            </div>
                            <img src="assets/img/blog/grid/v1/video04.jpg" class="hover-effect-target" alt="Image">
                        </div>
                        <div class="pt-3 mt-1">
                            <div class="mb-2 text-body-tertiary fs-xs">10:08</div>
                            <h3 class="mb-0 h6">
                                <a class="hover-effect-underline stretched-link" href="#!">Behind-the-scenes stories from the world of iPhones</a>
                            </h3>
                        </div>
                    </article>

                    <!-- Article -->
                    <article class="swiper-slide hover-effect-scale">
                        <div class="overflow-hidden rounded ratio" style="--cz-aspect-ratio: calc(200 / 306 * 100%)">
                            <div class="btn btn-icon btn-light position-absolute top-50 start-50 translate-middle z-2 rounded-circle pe-none">
                                <i class="ci-play fs-base"></i>
                            </div>
                            <img src="assets/img/blog/grid/v1/video02.jpg" class="hover-effect-target" alt="Image">
                        </div>
                        <div class="pt-3 mt-1">
                            <div class="mb-2 text-body-tertiary fs-xs">04:56</div>
                            <h3 class="mb-0 h6">
                                <a class="hover-effect-underline stretched-link" href="#!">Exploring the latest best smartwatch features for busy professionals</a>
                            </h3>
                        </div>
                    </article>

                    <!-- Article -->
                    <article class="swiper-slide hover-effect-scale">
                        <div class="overflow-hidden rounded ratio" style="--cz-aspect-ratio: calc(200 / 306 * 100%)">
                            <div class="btn btn-icon btn-light position-absolute top-50 start-50 translate-middle z-2 rounded-circle pe-none">
                                <i class="ci-play fs-base"></i>
                            </div>
                            <img src="assets/img/blog/grid/v1/video03.jpg" class="hover-effect-target" alt="Image">
                        </div>
                        <div class="pt-3 mt-1">
                            <div class="mb-2 text-body-tertiary fs-xs">03:27</div>
                            <h3 class="mb-0 h6">
                                <a class="hover-effect-underline stretched-link" href="#!">Taking to the skies with the latest compact drone technology</a>
                            </h3>
                        </div>
                    </article>
                </div>

                <!-- Pagination (Bullets) -->
                <div class="mt-4 swiper-pagination position-static"></div>
            </div>
        </section>
    </main>


    <!-- Page footer -->
    <footer class="footer position-relative bg-dark border-top">
        <span class="top-0 position-absolute start-0 w-100 h-100 bg-body d-none d-block-dark"></span>
        <div class="container position-relative z-1 pt-sm-2 pt-md-3 pt-lg-4" data-bs-theme="dark">

            <!-- Columns with links that are turned into accordion on screens < 500px wide (sm breakpoint) -->
            <div class="py-5 accordion" id="footerLinks">
                <div class="row">
                    <div class="pb-3 col-md-4 d-sm-flex flex-md-column align-items-center align-items-md-start mb-sm-4">
                        <h4 class="mb-sm-0 mb-md-4 me-4">
                            <a class="text-dark-emphasis text-decoration-none" href="home-electronics.html">Cartzilla</a>
                        </h4>
                        <p class="text-body fs-sm text-sm-end text-md-start mb-sm-0 mb-md-3 ms-0 ms-sm-auto ms-md-0 me-4">Got questions? Contact us 24/7</p>
                        <div class="dropdown" style="max-width: 250px">
                            <button type="button" class="btn btn-light dropdown-toggle justify-content-between w-100 d-none-dark" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                  Help and consultation
                </button>
                            <button type="button" class="btn btn-secondary dropdown-toggle justify-content-between w-100 d-none d-flex-dark" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
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
                                    <button type="button" class="py-3 accordion-button collapsed d-sm-none" data-bs-toggle="collapse" data-bs-target="#companyLinks" aria-expanded="false" aria-controls="companyLinks">Company</button>
                                </h6>
                                <div class="accordion-collapse collapse d-sm-block" id="companyLinks" aria-labelledby="companyHeading" data-bs-parent="#footerLinks">
                                    <ul class="gap-2 pb-3 mb-1 nav flex-column pt-sm-3 mt-n1">
                                        <li class="pt-1 d-flex w-100">
                                            <a class="p-0 nav-link animate-underline animate-target d-inline fw-normal text-truncate" href="#!">About company</a>
                                        </li>
                                        <li class="pt-1 d-flex w-100">
                                            <a class="p-0 nav-link animate-underline animate-target d-inline fw-normal text-truncate" href="#!">Our team</a>
                                        </li>
                                        <li class="pt-1 d-flex w-100">
                                            <a class="p-0 nav-link animate-underline animate-target d-inline fw-normal text-truncate" href="#!">Careers</a>
                                        </li>
                                        <li class="pt-1 d-flex w-100">
                                            <a class="p-0 nav-link animate-underline animate-target d-inline fw-normal text-truncate" href="#!">Contact us</a>
                                        </li>
                                        <li class="pt-1 d-flex w-100">
                                            <a class="p-0 nav-link animate-underline animate-target d-inline fw-normal text-truncate" href="#!">News</a>
                                        </li>
                                    </ul>
                                </div>
                                <hr class="my-0 d-sm-none">
                            </div>
                            <div class="border-0 accordion-item col">
                                <h6 class="accordion-header" id="accountHeading">
                                    <span class="text-dark-emphasis d-none d-sm-block">Account</span>
                                    <button type="button" class="py-3 accordion-button collapsed d-sm-none" data-bs-toggle="collapse" data-bs-target="#accountLinks" aria-expanded="false" aria-controls="accountLinks">Account</button>
                                </h6>
                                <div class="accordion-collapse collapse d-sm-block" id="accountLinks" aria-labelledby="accountHeading" data-bs-parent="#footerLinks">
                                    <ul class="gap-2 pb-3 mb-1 nav flex-column pt-sm-3 mt-n1">
                                        <li class="pt-1 d-flex w-100">
                                            <a class="p-0 nav-link animate-underline animate-target d-inline fw-normal text-truncate" href="#!">Your account</a>
                                        </li>
                                        <li class="pt-1 d-flex w-100">
                                            <a class="p-0 nav-link animate-underline animate-target d-inline fw-normal text-truncate" href="#!">Shipping rates &amp; policies</a>
                                        </li>
                                        <li class="pt-1 d-flex w-100">
                                            <a class="p-0 nav-link animate-underline animate-target d-inline fw-normal text-truncate" href="#!">Refunds &amp; replacements</a>
                                        </li>
                                        <li class="pt-1 d-flex w-100">
                                            <a class="p-0 nav-link animate-underline animate-target d-inline fw-normal text-truncate" href="#!">Delivery info</a>
                                        </li>
                                        <li class="pt-1 d-flex w-100">
                                            <a class="p-0 nav-link animate-underline animate-target d-inline fw-normal text-truncate" href="#!">Order tracking</a>
                                        </li>
                                        <li class="pt-1 d-flex w-100">
                                            <a class="p-0 nav-link animate-underline animate-target d-inline fw-normal text-truncate" href="#!">Taxes &amp; fees</a>
                                        </li>
                                    </ul>
                                </div>
                                <hr class="my-0 d-sm-none">
                            </div>
                            <div class="border-0 accordion-item col">
                                <h6 class="accordion-header" id="customerHeading">
                                    <span class="text-dark-emphasis d-none d-sm-block">Customer service</span>
                                    <button type="button" class="py-3 accordion-button collapsed d-sm-none" data-bs-toggle="collapse" data-bs-target="#customerLinks" aria-expanded="false" aria-controls="customerLinks">Customer service</button>
                                </h6>
                                <div class="accordion-collapse collapse d-sm-block" id="customerLinks" aria-labelledby="customerHeading" data-bs-parent="#footerLinks">
                                    <ul class="gap-2 pb-3 mb-1 nav flex-column pt-sm-3 mt-n1">
                                        <li class="pt-1 d-flex w-100">
                                            <a class="p-0 nav-link animate-underline animate-target d-inline fw-normal text-truncate" href="#!">Payment methods</a>
                                        </li>
                                        <li class="pt-1 d-flex w-100">
                                            <a class="p-0 nav-link animate-underline animate-target d-inline fw-normal text-truncate" href="#!">Money back guarantee</a>
                                        </li>
                                        <li class="pt-1 d-flex w-100">
                                            <a class="p-0 nav-link animate-underline animate-target d-inline fw-normal text-truncate" href="#!">Product returns</a>
                                        </li>
                                        <li class="pt-1 d-flex w-100">
                                            <a class="p-0 nav-link animate-underline animate-target d-inline fw-normal text-truncate" href="#!">Support center</a>
                                        </li>
                                        <li class="pt-1 d-flex w-100">
                                            <a class="p-0 nav-link animate-underline animate-target d-inline fw-normal text-truncate" href="#!">Shipping</a>
                                        </li>
                                        <li class="pt-1 d-flex w-100">
                                            <a class="p-0 nav-link animate-underline animate-target d-inline fw-normal text-truncate" href="#!">Terms &amp; conditions</a>
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
                <p class="mb-0 text-center text-body fs-xs text-md-start me-4 order-md-1">© All rights reserved. Made by <span class="animate-underline"><a class="animate-target text-dark-emphasis fw-medium text-decoration-none" href="https://createx.studio/" target="_blank" rel="noreferrer">Createx Studio</a></span></p>
            </div>
        </div>

        <!-- Additional spacing to accommodate the sticky offcanvas toggle button -->
        <div class="d-lg-none" style="height: 3.75rem"></div>
    </footer>


    <!-- Blog sidebar offcanvas toggle that is visible on screens < 992px wide (lg breakpoint) -->
    <button type="button" class="pb-4 border-0 fixed-bottom z-sticky w-100 btn btn-lg btn-dark border-top border-light border-opacity-10 rounded-0 d-lg-none" data-bs-toggle="offcanvas" data-bs-target="#blogSidebar" aria-controls="blogSidebar" data-bs-theme="light">
      <i class="ci-sidebar fs-base me-2"></i>
      Sidebar
    </button>


    <!-- Back to top button -->
    <div class="pb-4 floating-buttons position-fixed top-50 end-0 z-sticky me-3 me-xl-4">
        <a class="border-0 shadow btn-scroll-top btn btn-sm bg-body rounded-pill animate-slide-end" href="#top">
        Top
        <i class="ci-arrow-right fs-base ms-1 me-n1 animate-target"></i>
        <span class="top-0 z-0 border position-absolute start-0 w-100 h-100 rounded-pill"></span>
        <svg class="top-0 position-absolute start-0 w-100 h-100 z-1" viewBox="0 0 62 32" fill="none" xmlns="http://www.w3.org/2000/svg">
          <rect x=".75" y=".75" width="60.5" height="30.5" rx="15.25" stroke="currentColor" stroke-width="1.5" stroke-miterlimit="10"></rect>
        </svg>
      </a>
    </div>


    <!-- Vendor scripts -->
    <script src="assets/vendor/swiper/swiper-bundle.min.js"></script>

    <!-- Bootstrap + Theme scripts -->
    <script src="assets/js/theme.min.js"></script>


</body>

</html>
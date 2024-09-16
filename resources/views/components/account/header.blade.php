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
                <div class="position-relative flex-fill d-none d-lg-block pe-4 pe-xl-5">
                    <i class="text-white ci-search position-absolute top-50 translate-middle-y d-flex fs-lg ms-3"></i>
                    <input type="search" class="border-white form-control form-control-lg form-icon-start rounded-pill"
                        placeholder="Search the products">
                </div>
                <a class="d-none d-xl-flex align-items-center text-decoration-none animate-shake navbar-stuck-hide me-3 me-xl-4 me-xxl-5"
                    href="{{ route('shop') }}">
                    <div
                        class="bg-opacity-75 btn btn-icon btn-lg fs-lg text-primary bg-body-secondary pe-none rounded-circle">
                        <i class="ci-percent animate-target"></i>
                    </div>
                    <div class="ps-2 text-nowrap">
                        <div class="fs-xs text-body">Only this month</div>
                        <div class="text-white fw-medium">Super Sale 20%</div>
                    </div>
                </a>
                <div class="d-flex align-items-center">
                    <button type="button" class="navbar-toggler d-none navbar-stuck-show me-3"
                        data-bs-toggle="collapse" data-bs-target="#stuckNav" aria-controls="stuckNav"
                        aria-expanded="false" aria-label="Toggle navigation in navbar stuck state">
                        <span class="navbar-toggler-icon"></span>
                    </button>
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
                    <button type="button"
                        class="border-0 btn btn-icon btn-lg fs-xl btn-outline-secondary rounded-circle animate-shake d-lg-none"
                        data-bs-toggle="collapse" data-bs-target="#searchBar" aria-controls="searchBar"
                        aria-expanded="false" aria-label="Toggle search bar">
                        <i class="ci-search animate-target"></i>
                    </button>
                    <div class="position-relative" id="accountBtn">
                        <a class="btn btn-icon btn-lg btn-secondary animate-scale fs-5 fw-normal position-relative rounded-circle ms-2 d-none d-md-inline-flex"
                            href="{{ route('profile.edit') }}" data-bs-toggle="tooltip" data-bs-placement="bottom"
                            data-bs-custom-class="tooltip-sm text-nowrap" data-bs-container="#accountBtn"
                            title="{{ Auth::user()->name }}">
                            <span class="animate-target">{{ Auth::user()->name[0] }}</span>
                        </a>
                    </div>
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
    <div class="collapse position-absolute top-100 z-2 w-100 bg-dark d-lg-none" id="searchBar">
        <div class="container my-3 position-relative" data-bs-theme="dark">
            <i class="text-white ci-search position-absolute top-50 translate-middle-y d-flex fs-lg ms-3"></i>
            <input type="search" class="border-white form-control form-icon-start rounded-pill"
                placeholder="Search the products" data-autofocus="collapse">
        </div>
    </div>
    <div class="collapse navbar-stuck-hide" id="stuckNav">
        <nav class="offcanvas offcanvas-start" id="navbarNav" tabindex="-1" aria-labelledby="navbarNavLabel">
            <div class="py-3 offcanvas-header">
                <h5 class="offcanvas-title" id="navbarNavLabel">Browse</h5>
                <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
            </div>
            <div class="py-3 offcanvas-body py-lg-0">
                <div class="container px-0 px-lg-3">
                    <div class="row">
                        <div class="col-lg-3">
                            <div class="navbar-nav">
                                <div class="dropdown w-100">
                                    <div class="cursor-pointer d-none d-lg-block" data-bs-toggle="dropdown"
                                        data-bs-trigger="hover" data-bs-theme="dark">
                                        <a class="top-0 position-absolute start-0 w-100 h-100"
                                            href="{{ route('categories') }}">
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

                                    @include('components.mega-menu')
                                </div>
                            </div>
                        </div>
                        <div class="pt-3 col-lg-9 d-lg-flex pt-lg-0 ps-lg-0">
                            <ul class="navbar-nav position-relative">
                                <li class="nav-item dropdown me-lg-n1 me-xl-0">
                                    <a class="nav-link dropdown-toggle" href="#" role="button"
                                        data-bs-toggle="dropdown" data-bs-trigger="hover"
                                        aria-expanded="false">Home</a>
                                    <ul class="dropdown-menu">
                                        <li class="px-2 hover-effect-opacity mx-n2">
                                            <a class="mb-0 dropdown-item d-block" href="{{ route('homepage.view') }}">
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
                                    <a class="nav-link dropdown-toggle" href="#" role="button"
                                        data-bs-toggle="dropdown" data-bs-trigger="hover"
                                        aria-expanded="false">Shop</a>
                                    <div class="p-4 dropdown-menu rounded-4">
                                        <div class="gap-4 d-flex flex-column flex-lg-row">
                                            <div style="min-width: 190px">
                                                <div class="mb-2 h6">Electronics Store</div>
                                                <ul class="gap-2 mt-0 nav flex-column">
                                                    <li class="pt-1 d-flex w-100">
                                                        <a class="p-0 nav-link animate-underline animate-target d-inline fw-normal text-truncate"
                                                            href="{{ route('categories') }}">Categories
                                                            Page</a>
                                                    </li>
                                                    <li class="pt-1 d-flex w-100">
                                                        <a class="p-0 nav-link animate-underline animate-target d-inline fw-normal text-truncate"
                                                            href="{{ route('categories') }}">Catalog with Side
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
                                    <a class="nav-link dropdown-toggle active" aria-current="page" href="#"
                                        role="button" data-bs-toggle="dropdown" data-bs-trigger="hover"
                                        data-bs-auto-close="outside" aria-expanded="false">Account</a>
                                    <ul class="dropdown-menu">
                                        <li class="dropend">
                                            <a class="dropdown-item dropdown-toggle" href="#!" role="button"
                                                data-bs-toggle="dropdown" data-bs-trigger="hover"
                                                aria-expanded="false">Auth Pages</a>
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
                                        <li><a class="dropdown-item" href="{{ route('favorites') }}">Wishlist</a>
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
                                            <a class="dropdown-item dropdown-toggle" href="#!" role="button"
                                                data-bs-toggle="dropdown" data-bs-trigger="hover"
                                                aria-expanded="false">About</a>
                                            <ul class="dropdown-menu">
                                                <li><a class="dropdown-item" href="about-v1.html">About v.1</a>
                                                </li>
                                                <li><a class="dropdown-item" href="about-v2.html">About v.2</a>
                                                </li>
                                            </ul>
                                        </li>
                                        <li class="dropend">
                                            <a class="dropdown-item dropdown-toggle" href="#!" role="button"
                                                data-bs-toggle="dropdown" data-bs-trigger="hover"
                                                aria-expanded="false">Blog</a>
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
                                            <a class="dropdown-item dropdown-toggle" href="#!" role="button"
                                                data-bs-toggle="dropdown" data-bs-trigger="hover"
                                                aria-expanded="false">Contact</a>
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
                                            <a class="dropdown-item dropdown-toggle" href="#!" role="button"
                                                data-bs-toggle="dropdown" data-bs-trigger="hover"
                                                aria-expanded="false">Help Center</a>
                                            <ul class="dropdown-menu">
                                                <li><a class="dropdown-item" href="help-topics-v1.html">Help
                                                        Topics v.1</a></li>
                                                <li><a class="dropdown-item" href="help-topics-v2.html">Help
                                                        Topics v.2</a></li>
                                                <li><a class="dropdown-item" href="help-single-article-v1.html">Help
                                                        Single Article
                                                        v.1</a></li>
                                                <li><a class="dropdown-item" href="help-single-article-v2.html">Help
                                                        Single Article
                                                        v.2</a></li>
                                            </ul>
                                        </li>
                                        <li class="dropend">
                                            <a class="dropdown-item dropdown-toggle" href="#!" role="button"
                                                data-bs-toggle="dropdown" data-bs-trigger="hover"
                                                aria-expanded="false">404 Error</a>
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
                                    <a class="px-3 nav-link dropdown-toggle fs-sm" href="#!" role="button"
                                        data-bs-toggle="dropdown" data-bs-trigger="hover"
                                        aria-expanded="false">Eng</a>
                                    <ul class="dropdown-menu fs-sm"
                                        style="--cz-dropdown-min-width: 7.5rem; --cz-dropdown-spacer: .25rem">
                                        <li><a class="dropdown-item" href="#!">Français</a></li>
                                        <li><a class="dropdown-item" href="#!">Deutsch</a></li>
                                        <li><a class="dropdown-item" href="#!">Italiano</a></li>
                                    </ul>
                                </li>
                                <li class="nav-item dropdown me-lg-n1">
                                    <a class="px-3 nav-link dropdown-toggle fs-sm" href="#!" role="button"
                                        data-bs-toggle="dropdown" data-bs-trigger="hover" aria-expanded="false">USD
                                        ($)</a>
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
            <div class="py-3 mt-3 offcanvas-header border-top d-md-none">
                <a class="d-flex align-items-center text-decoration-none" href="#accountSidebar"
                    data-bs-toggle="offcanvas" aria-controls="accountSidebar">
                    @if (Auth::user()->avatar)
                        <img class="flex-shrink-0 rounded-circle me-2"
                            src="{{ asset('storage/' . Auth::user()->avatar) }}" width="48" alt="Avatar">
                    @else
                        <div class="flex-shrink-0 mb-0 h5 d-flex justify-content-center align-items-center text-primary bg-primary-subtle lh-1 rounded-circle"
                            style="width: 3rem; height: 3rem">
                            <span>{{ Auth::user()->name[0] }}</span>
                        </div>
                    @endif
                    <div class="ps-3">
                        <h5 class="mb-1 h6">{{ Auth::user()->name }}</h5>
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

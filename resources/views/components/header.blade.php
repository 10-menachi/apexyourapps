  <!-- Navigation bar (Page header) -->
  <header class="p-0 navbar navbar-expand-lg navbar-dark bg-dark d-block z-fixed"
      data-sticky-navbar="{&quot;offset&quot;: 500}">
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
                      <input type="search"
                          class="border-white form-control form-control-lg form-icon-start rounded-pill"
                          placeholder="Search the products">
                  </div>

                  <!-- Sale link visible on screens > 1200px wide (xl breakpoint) -->
                  <a class="d-none d-xl-flex align-items-center text-decoration-none animate-shake navbar-stuck-hide me-3 me-xl-4 me-xxl-5"
                      href="{{ route('categories.index') }}">
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

                      @if (Auth::check())
                          <a class="border-0 btn btn-icon btn-lg fs-lg btn-outline-secondary rounded-circle animate-shake d-none d-md-inline-flex"
                              href="{{ route('profile.edit') }}">
                              <i class="ci-user animate-target"></i>
                              <span class="visually-hidden">Account</span>
                          </a>
                      @else
                          <a class="border-0 btn btn-icon btn-lg fs-lg btn-outline-secondary rounded-circle animate-shake d-none d-md-inline-flex"
                              href="{{ route('login') }}">
                              <i class="ci-arrow-right"></i>
                              <span class="visually-hidden">Account</span>
                          </a>
                      @endif

                      <!-- Wishlist button visible on screens > 768px wide (md breakpoint) -->
                      <a class="border-0 btn btn-icon btn-lg fs-lg btn-outline-secondary rounded-circle animate-pulse d-none d-md-inline-flex"
                          href="{{ route('favorites') }}">
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
                  <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
              </div>
              <div class="py-3 offcanvas-body py-lg-0">
                  <div class="container px-0 px-lg-3">
                      <div class="row">

                          <!-- Categories mega menu -->
                          @include('components.mega-menu')

                          <!-- Navbar nav -->
                          <div class="pt-3 col-lg-9 d-lg-flex pt-lg-0 ps-lg-0">
                              <ul class="navbar-nav position-relative">
                                  <li class="nav-item dropdown me-lg-n1 me-xl-0">
                                      <a class="nav-link dropdown-toggle active" aria-current="page" href="#"
                                          role="button" data-bs-toggle="dropdown" data-bs-trigger="hover"
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
                                                              href="{{ route('categories.index') }}">Categories
                                                              Page</a>
                                                      </li>
                                                      <li class="pt-1 d-flex w-100">
                                                          <a class="p-0 nav-link animate-underline animate-target d-inline fw-normal text-truncate"
                                                              href="{{ route('categories.index') }}">Catalog with
                                                              Side
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
              <div class="px-0 py-3 mt-3 offcanvas-header border-top d-md-none">
                  <div class="nav nav-justified w-100">
                      <a class="nav-link border-end" href="account-signin.html">
                          <i class="ci-user fs-lg opacity-60 me-2"></i>
                          Account
                      </a>
                      <a class="nav-link" href="{{ route('favorites') }}">
                          <i class="ci-heart fs-lg opacity-60 me-2"></i>
                          Wishlist
                      </a>
                  </div>
              </div>
          </nav>
      </div>
  </header>

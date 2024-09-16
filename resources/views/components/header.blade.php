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
                  <a href="{{ route('homepage.view') }}" class="navbar-brand me-0">
                      <img src="{{ asset('logo.png') }}" alt="Logo" class="w-75">
                  </a>
              </div>
              <div class="col col-lg-9 d-flex align-items-center justify-content-end">

                  <!-- Search visible on screens > 991px wide (lg breakpoint) -->
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
                                      <div class="cursor-pointer d-none d-lg-block" data-bs-toggle="dropdown"
                                          data-bs-trigger="hover" data-bs-theme="dark">
                                          <a class="top-0 position-absolute start-0 w-100 h-100"
                                              href="{{ route('categories.index') }}">
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
                                      <ul class="py-1 dropdown-menu dropdown-menu-static w-100 rounded-top-0 rounded-bottom-4 p-lg-1"
                                          style="--cz-dropdown-spacer: 0; --cz-dropdown-item-padding-y: .625rem; --cz-dropdown-item-spacer: 0">
                                          <li class="pt-2 d-lg-none">
                                              <a class="dropdown-item fw-medium"
                                                  href="{{ route('categories.index') }}">
                                                  <i class="ci-grid fs-xl opacity-60 pe-1 me-2"></i>
                                                  All Categories
                                                  <i class="ci-chevron-right fs-base ms-auto me-n1"></i>
                                              </a>
                                          </li>
                                          <li class="dropend position-static">
                                              <div class="pt-2 pb-1 rounded position-relative px-lg-2"
                                                  data-bs-toggle="dropdown" data-bs-trigger="hover">
                                                  <a class="dropdown-item fw-medium stretched-link d-none d-lg-flex"
                                                      href="{{ route('categories.index') }}">
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
                                                                  href="{{ route('categories.index') }}">Computers</a>
                                                          </div>
                                                          <ul class="gap-2 nav flex-column mt-n2">
                                                              <li class="pt-1 d-flex w-100">
                                                                  <a class="p-0 nav-link animate-underline animate-target d-inline fw-normal text-truncate"
                                                                      href="{{ route('categories.index') }}">Laptops
                                                                      &amp; Tablets</a>
                                                              </li>
                                                              <li class="pt-1 d-flex w-100">
                                                                  <a class="p-0 nav-link animate-underline animate-target d-inline fw-normal text-truncate"
                                                                      href="{{ route('categories.index') }}">Desktop
                                                                      Computers</a>
                                                              </li>
                                                              <li class="pt-1 d-flex w-100">
                                                                  <a class="p-0 nav-link animate-underline animate-target d-inline fw-normal text-truncate"
                                                                      href="{{ route('categories.index') }}">External
                                                                      Components</a>
                                                              </li>
                                                              <li class="pt-1 d-flex w-100">
                                                                  <a class="p-0 nav-link animate-underline animate-target d-inline fw-normal text-truncate"
                                                                      href="{{ route('categories.index') }}">Interal
                                                                      Components</a>
                                                              </li>
                                                              <li class="pt-1 d-flex w-100">
                                                                  <a class="p-0 nav-link animate-underline animate-target d-inline fw-normal text-truncate"
                                                                      href="{{ route('categories.index') }}">Networking
                                                                      Products (NAS)</a>
                                                              </li>
                                                              <li class="pt-1 d-flex w-100">
                                                                  <a class="p-0 nav-link animate-underline animate-target d-inline fw-normal text-truncate"
                                                                      href="{{ route('categories.index') }}">Single
                                                                      Board Computers</a>
                                                              </li>
                                                              <li class="pt-1 d-flex w-100">
                                                                  <a class="p-0 nav-link animate-underline animate-target d-inline fw-normal text-truncate"
                                                                      href="{{ route('categories.index') }}">Desktop
                                                                      Barebones</a>
                                                              </li>
                                                          </ul>
                                                      </div>
                                                      <div style="min-width: 194px">
                                                          <div class="d-flex w-100">
                                                              <a class="animate-underline animate-target d-inline h6 text-dark-emphasis text-decoration-none text-truncate"
                                                                  href="{{ route('categories.index') }}">Accessories</a>
                                                          </div>
                                                          <ul class="gap-2 nav flex-column mt-n2">
                                                              <li class="pt-1 d-flex w-100">
                                                                  <a class="p-0 nav-link animate-underline animate-target d-inline fw-normal text-truncate"
                                                                      href="{{ route('categories.index') }}">Monitors</a>
                                                              </li>
                                                              <li class="pt-1 d-flex w-100">
                                                                  <a class="p-0 nav-link animate-underline animate-target d-inline fw-normal text-truncate"
                                                                      href="{{ route('categories.index') }}">Bags,
                                                                      Cases &amp; Sleeves</a>
                                                              </li>
                                                              <li class="pt-1 d-flex w-100">
                                                                  <a class="p-0 nav-link animate-underline animate-target d-inline fw-normal text-truncate"
                                                                      href="{{ route('categories.index') }}">Batteries</a>
                                                              </li>
                                                              <li class="pt-1 d-flex w-100">
                                                                  <a class="p-0 nav-link animate-underline animate-target d-inline fw-normal text-truncate"
                                                                      href="{{ route('categories.index') }}">Charges
                                                                      &amp; Adapters</a>
                                                              </li>
                                                              <li class="pt-1 d-flex w-100">
                                                                  <a class="p-0 nav-link animate-underline animate-target d-inline fw-normal text-truncate"
                                                                      href="{{ route('categories.index') }}">Cooling
                                                                      Pads</a>
                                                              </li>
                                                              <li class="pt-1 d-flex w-100">
                                                                  <a class="p-0 nav-link animate-underline animate-target d-inline fw-normal text-truncate"
                                                                      href="{{ route('categories.index') }}">Mounts</a>
                                                              </li>
                                                              <li class="pt-1 d-flex w-100">
                                                                  <a class="p-0 nav-link animate-underline animate-target d-inline fw-normal text-truncate"
                                                                      href="{{ route('categories.index') }}">Replacement
                                                                      Screens</a>
                                                              </li>
                                                              <li class="pt-1 d-flex w-100">
                                                                  <a class="p-0 nav-link animate-underline animate-target d-inline fw-normal text-truncate"
                                                                      href="{{ route('categories.index') }}">Security
                                                                      Locks</a>
                                                              </li>
                                                              <li class="pt-1 d-flex w-100">
                                                                  <a class="p-0 nav-link animate-underline animate-target d-inline fw-normal text-truncate"
                                                                      href="{{ route('categories.index') }}">Stands</a>
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
                                                                      href="{{ route('categories.index') }}">Shop
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
                                                      href="{{ route('categories.index') }}">
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
                                                                  href="{{ route('categories.index') }}">Smartphones</a>
                                                          </div>
                                                          <ul class="gap-2 nav flex-column mt-n2">
                                                              <li class="pt-1 d-flex w-100">
                                                                  <a class="p-0 nav-link animate-underline animate-target d-inline fw-normal text-truncate"
                                                                      href="{{ route('categories.index') }}">Apple
                                                                      iPhone</a>
                                                              </li>
                                                              <li class="pt-1 d-flex w-100">
                                                                  <a class="p-0 nav-link animate-underline animate-target d-inline fw-normal text-truncate"
                                                                      href="{{ route('categories.index') }}">Google
                                                                      Pixel</a>
                                                              </li>
                                                              <li class="pt-1 d-flex w-100">
                                                                  <a class="p-0 nav-link animate-underline animate-target d-inline fw-normal text-truncate"
                                                                      href="{{ route('categories.index') }}">Android
                                                                      Smartphones</a>
                                                              </li>
                                                              <li class="pt-1 d-flex w-100">
                                                                  <a class="p-0 nav-link animate-underline animate-target d-inline fw-normal text-truncate"
                                                                      href="{{ route('categories.index') }}">Phablets</a>
                                                              </li>
                                                          </ul>
                                                          <div class="pt-4 d-flex w-100">
                                                              <a class="animate-underline animate-target d-inline h6 text-dark-emphasis text-decoration-none text-truncate"
                                                                  href="{{ route('categories.index') }}">Tablets</a>
                                                          </div>
                                                          <ul class="gap-2 nav flex-column mt-n2">
                                                              <li class="pt-1 d-flex w-100">
                                                                  <a class="p-0 nav-link animate-underline animate-target d-inline fw-normal text-truncate"
                                                                      href="{{ route('categories.index') }}">Apple
                                                                      iPad</a>
                                                              </li>
                                                              <li class="pt-1 d-flex w-100">
                                                                  <a class="p-0 nav-link animate-underline animate-target d-inline fw-normal text-truncate"
                                                                      href="{{ route('categories.index') }}">Android
                                                                      Tablets</a>
                                                              </li>
                                                              <li class="pt-1 d-flex w-100">
                                                                  <a class="p-0 nav-link animate-underline animate-target d-inline fw-normal text-truncate"
                                                                      href="{{ route('categories.index') }}">Tablets
                                                                      with Keyboard</a>
                                                              </li>
                                                          </ul>
                                                      </div>
                                                      <div style="min-width: 194px">
                                                          <div class="d-flex w-100">
                                                              <a class="animate-underline animate-target d-inline h6 text-dark-emphasis text-decoration-none text-truncate"
                                                                  href="{{ route('categories.index') }}">Accessories</a>
                                                          </div>
                                                          <ul class="gap-2 nav flex-column mt-n2">
                                                              <li class="pt-1 d-flex w-100">
                                                                  <a class="p-0 nav-link animate-underline animate-target d-inline fw-normal text-truncate"
                                                                      href="{{ route('categories.index') }}">Accessory
                                                                      Kits</a>
                                                              </li>
                                                              <li class="pt-1 d-flex w-100">
                                                                  <a class="p-0 nav-link animate-underline animate-target d-inline fw-normal text-truncate"
                                                                      href="{{ route('categories.index') }}">Batteries
                                                                      &amp; Battery Packs</a>
                                                              </li>
                                                              <li class="pt-1 d-flex w-100">
                                                                  <a class="p-0 nav-link animate-underline animate-target d-inline fw-normal text-truncate"
                                                                      href="{{ route('categories.index') }}">Bags
                                                                      &amp;
                                                                      Cases</a>
                                                              </li>
                                                              <li class="pt-1 d-flex w-100">
                                                                  <a class="p-0 nav-link animate-underline animate-target d-inline fw-normal text-truncate"
                                                                      href="{{ route('categories.index') }}">Cables</a>
                                                              </li>
                                                              <li class="pt-1 d-flex w-100">
                                                                  <a class="p-0 nav-link animate-underline animate-target d-inline fw-normal text-truncate"
                                                                      href="{{ route('categories.index') }}">Car
                                                                      Accessories</a>
                                                              </li>
                                                              <li class="pt-1 d-flex w-100">
                                                                  <a class="p-0 nav-link animate-underline animate-target d-inline fw-normal text-truncate"
                                                                      href="{{ route('categories.index') }}">Charges
                                                                      &amp; Power Adapters</a>
                                                              </li>
                                                              <li class="pt-1 d-flex w-100">
                                                                  <a class="p-0 nav-link animate-underline animate-target d-inline fw-normal text-truncate"
                                                                      href="{{ route('categories.index') }}">FM
                                                                      Transmitters</a>
                                                              </li>
                                                              <li class="pt-1 d-flex w-100">
                                                                  <a class="p-0 nav-link animate-underline animate-target d-inline fw-normal text-truncate"
                                                                      href="{{ route('categories.index') }}">Lens
                                                                      Attachments</a>
                                                              </li>
                                                              <li class="pt-1 d-flex w-100">
                                                                  <a class="p-0 nav-link animate-underline animate-target d-inline fw-normal text-truncate"
                                                                      href="{{ route('categories.index') }}">Mounts
                                                                      &amp; Standsv</a>
                                                              </li>
                                                              <li class="pt-1 d-flex w-100">
                                                                  <a class="p-0 nav-link animate-underline animate-target d-inline fw-normal text-truncate"
                                                                      href="{{ route('categories.index') }}">Repair
                                                                      Kits</a>
                                                              </li>
                                                              <li class="pt-1 d-flex w-100">
                                                                  <a class="p-0 nav-link animate-underline animate-target d-inline fw-normal text-truncate"
                                                                      href="{{ route('categories.index') }}">Replacement
                                                                      Parts</a>
                                                              </li>
                                                              <li class="pt-1 d-flex w-100">
                                                                  <a class="p-0 nav-link animate-underline animate-target d-inline fw-normal text-truncate"
                                                                      href="{{ route('categories.index') }}">Styluses</a>
                                                              </li>
                                                          </ul>
                                                      </div>
                                                      <div class="d-none d-lg-block">
                                                          <div class="d-none d-xl-block" style="width: 284px"></div>
                                                          <div class="d-xl-none" style="width: 240px"></div>
                                                          <div
                                                              class="px-3 py-4 position-relative d-flex flex-column justify-content-center h-100 bg-body-secondary rounded-5">
                                                              <div class="px-2 text-center">
                                                                  <i class="mb-2 ci-apple fs-1 text-dark-emphasis"></i>
                                                                  <div class="mb-2 fs-sm text-light-emphasis">Deal of
                                                                      the week</div>
                                                                  <div class="mb-4 h2">iPad Pro M1</div>
                                                              </div>
                                                              <img src="assets/img/mega-menu/electronics/02.png"
                                                                  width="252" alt="iPad Pro">
                                                              <div class="mt-4 text-center">
                                                                  <a class="btn btn-sm btn-primary stretched-link"
                                                                      href="{{ route('categories.index') }}">Shop
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
                                                      href="{{ route('categories.index') }}">
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
                                                                  href="{{ route('categories.index') }}">TV, Video
                                                                  &amp; Audio</a>
                                                          </div>
                                                          <ul class="gap-2 nav flex-column mt-n2">
                                                              <li class="pt-1 d-flex w-100">
                                                                  <a class="p-0 nav-link animate-underline animate-target d-inline fw-normal text-truncate"
                                                                      href="{{ route('categories.index') }}">TV
                                                                      Stes</a>
                                                              </li>
                                                              <li class="pt-1 d-flex w-100">
                                                                  <a class="p-0 nav-link animate-underline animate-target d-inline fw-normal text-truncate"
                                                                      href="{{ route('categories.index') }}">Home
                                                                      Theater Systems</a>
                                                              </li>
                                                              <li class="pt-1 d-flex w-100">
                                                                  <a class="p-0 nav-link animate-underline animate-target d-inline fw-normal text-truncate"
                                                                      href="{{ route('categories.index') }}">DVD
                                                                      Players &amp; Recorders</a>
                                                              </li>
                                                              <li class="pt-1 d-flex w-100">
                                                                  <a class="p-0 nav-link animate-underline animate-target d-inline fw-normal text-truncate"
                                                                      href="{{ route('categories.index') }}">Blue-ray
                                                                      Players &amp; Recorders</a>
                                                              </li>
                                                              <li class="pt-1 d-flex w-100">
                                                                  <a class="p-0 nav-link animate-underline animate-target d-inline fw-normal text-truncate"
                                                                      href="{{ route('categories.index') }}">HD DVD
                                                                      Players &amp; Recorders</a>
                                                              </li>
                                                              <li class="pt-1 d-flex w-100">
                                                                  <a class="p-0 nav-link animate-underline animate-target d-inline fw-normal text-truncate"
                                                                      href="{{ route('categories.index') }}">DVD-VCR
                                                                      Combos</a>
                                                              </li>
                                                              <li class="pt-1 d-flex w-100">
                                                                  <a class="p-0 nav-link animate-underline animate-target d-inline fw-normal text-truncate"
                                                                      href="{{ route('categories.index') }}">DTV
                                                                      Converters</a>
                                                              </li>
                                                              <li class="pt-1 d-flex w-100">
                                                                  <a class="p-0 nav-link animate-underline animate-target d-inline fw-normal text-truncate"
                                                                      href="{{ route('categories.index') }}">AV
                                                                      Receivers</a>
                                                              </li>
                                                              <li class="pt-1 d-flex w-100">
                                                                  <a class="p-0 nav-link animate-underline animate-target d-inline fw-normal text-truncate"
                                                                      href="{{ route('categories.index') }}">AV
                                                                      Amplifiers</a>
                                                              </li>
                                                              <li class="pt-1 d-flex w-100">
                                                                  <a class="p-0 nav-link animate-underline animate-target d-inline fw-normal text-truncate"
                                                                      href="{{ route('categories.index') }}">Projectors</a>
                                                              </li>
                                                              <li class="pt-1 d-flex w-100">
                                                                  <a class="p-0 nav-link animate-underline animate-target d-inline fw-normal text-truncate"
                                                                      href="{{ route('categories.index') }}">Projection
                                                                      Screens</a>
                                                              </li>
                                                              <li class="pt-1 d-flex w-100">
                                                                  <a class="p-0 nav-link animate-underline animate-target d-inline fw-normal text-truncate"
                                                                      href="{{ route('categories.index') }}">Satelite
                                                                      Television</a>
                                                              </li>
                                                              <li class="pt-1 d-flex w-100">
                                                                  <a class="p-0 nav-link animate-underline animate-target d-inline fw-normal text-truncate"
                                                                      href="{{ route('categories.index') }}">TV-DTD
                                                                      Combos</a>
                                                              </li>
                                                              <li class="pt-1 d-flex w-100">
                                                                  <a class="p-0 nav-link animate-underline animate-target d-inline fw-normal text-truncate"
                                                                      href="{{ route('categories.index') }}">Sound
                                                                      Systems</a>
                                                              </li>
                                                          </ul>
                                                      </div>
                                                      <div style="min-width: 194px">
                                                          <ul class="gap-2 mt-2 nav flex-column mt-lg-0">
                                                              <li class="pt-1 d-flex w-100">
                                                                  <a class="p-0 nav-link animate-underline animate-target d-inline fw-normal text-truncate"
                                                                      href="{{ route('categories.index') }}">Home
                                                                      Cinema Systems</a>
                                                              </li>
                                                              <li class="pt-1 d-flex w-100">
                                                                  <a class="p-0 nav-link animate-underline animate-target d-inline fw-normal text-truncate"
                                                                      href="{{ route('categories.index') }}">Streaming
                                                                      Media Players</a>
                                                              </li>
                                                              <li class="pt-1 d-flex w-100">
                                                                  <a class="p-0 nav-link animate-underline animate-target d-inline fw-normal text-truncate"
                                                                      href="{{ route('categories.index') }}">VCRs</a>
                                                              </li>
                                                              <li class="pt-1 d-flex w-100">
                                                                  <a class="p-0 nav-link animate-underline animate-target d-inline fw-normal text-truncate"
                                                                      href="{{ route('categories.index') }}">Video
                                                                      Glasses</a>
                                                              </li>
                                                              <li class="pt-1 d-flex w-100">
                                                                  <a class="p-0 nav-link animate-underline animate-target d-inline fw-normal text-truncate"
                                                                      href="{{ route('categories.index') }}">Lens
                                                                      Attachments</a>
                                                              </li>
                                                              <li class="pt-1 d-flex w-100">
                                                                  <a class="p-0 nav-link animate-underline animate-target d-inline fw-normal text-truncate"
                                                                      href="{{ route('categories.index') }}">Subwoofers</a>
                                                              </li>
                                                              <li class="pt-1 d-flex w-100">
                                                                  <a class="p-0 nav-link animate-underline animate-target d-inline fw-normal text-truncate"
                                                                      href="{{ route('categories.index') }}">Sound
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
                                                                      href="{{ route('categories.index') }}">Shop
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
                                                      href="{{ route('categories.index') }}">
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
                                                                  href="{{ route('categories.index') }}">Speakers</a>
                                                          </div>
                                                          <ul class="gap-2 nav flex-column mt-n2">
                                                              <li class="pt-1 d-flex w-100">
                                                                  <a class="p-0 nav-link animate-underline animate-target d-inline fw-normal text-truncate"
                                                                      href="{{ route('categories.index') }}">Smart
                                                                      Speakers</a>
                                                              </li>
                                                              <li class="pt-1 d-flex w-100">
                                                                  <a class="p-0 nav-link animate-underline animate-target d-inline fw-normal text-truncate"
                                                                      href="{{ route('categories.index') }}">Bluetooth
                                                                      Speakers</a>
                                                              </li>
                                                              <li class="pt-1 d-flex w-100">
                                                                  <a class="p-0 nav-link animate-underline animate-target d-inline fw-normal text-truncate"
                                                                      href="{{ route('categories.index') }}">Bookshelf
                                                                      Speakers</a>
                                                              </li>
                                                              <li class="pt-1 d-flex w-100">
                                                                  <a class="p-0 nav-link animate-underline animate-target d-inline fw-normal text-truncate"
                                                                      href="{{ route('categories.index') }}">Ceiling
                                                                      &amp; In-Wall Speakers</a>
                                                              </li>
                                                              <li class="pt-1 d-flex w-100">
                                                                  <a class="p-0 nav-link animate-underline animate-target d-inline fw-normal text-truncate"
                                                                      href="{{ route('categories.index') }}">Center-Channel
                                                                      Speakers</a>
                                                              </li>
                                                              <li class="pt-1 d-flex w-100">
                                                                  <a class="p-0 nav-link animate-underline animate-target d-inline fw-normal text-truncate"
                                                                      href="{{ route('categories.index') }}">Floorstanding
                                                                      Speakers</a>
                                                              </li>
                                                              <li class="pt-1 d-flex w-100">
                                                                  <a class="p-0 nav-link animate-underline animate-target d-inline fw-normal text-truncate"
                                                                      href="{{ route('categories.index') }}">Outdoor
                                                                      Speakers</a>
                                                              </li>
                                                              <li class="pt-1 d-flex w-100">
                                                                  <a class="p-0 nav-link animate-underline animate-target d-inline fw-normal text-truncate"
                                                                      href="{{ route('categories.index') }}">Satellite
                                                                      Speakers</a>
                                                              </li>
                                                              <li class="pt-1 d-flex w-100">
                                                                  <a class="p-0 nav-link animate-underline animate-target d-inline fw-normal text-truncate"
                                                                      href="{{ route('categories.index') }}">Sound
                                                                      Bars</a>
                                                              </li>
                                                              <li class="pt-1 d-flex w-100">
                                                                  <a class="p-0 nav-link animate-underline animate-target d-inline fw-normal text-truncate"
                                                                      href="{{ route('categories.index') }}">Surround
                                                                      Sound Systems</a>
                                                              </li>
                                                          </ul>
                                                      </div>
                                                      <div style="min-width: 194px">
                                                          <div class="d-flex w-100">
                                                              <a class="animate-underline animate-target d-inline h6 text-dark-emphasis text-decoration-none text-truncate"
                                                                  href="{{ route('categories.index') }}">Home
                                                                  Audio</a>
                                                          </div>
                                                          <ul class="gap-2 nav flex-column mt-n2">
                                                              <li class="pt-1 d-flex w-100">
                                                                  <a class="p-0 nav-link animate-underline animate-target d-inline fw-normal text-truncate"
                                                                      href="{{ route('categories.index') }}">Home
                                                                      Theater</a>
                                                              </li>
                                                              <li class="pt-1 d-flex w-100">
                                                                  <a class="p-0 nav-link animate-underline animate-target d-inline fw-normal text-truncate"
                                                                      href="{{ route('categories.index') }}">Wireless
                                                                      &amp; Streaming Audio</a>
                                                              </li>
                                                              <li class="pt-1 d-flex w-100">
                                                                  <a class="p-0 nav-link animate-underline animate-target d-inline fw-normal text-truncate"
                                                                      href="{{ route('categories.index') }}">Stereo
                                                                      System Components</a>
                                                              </li>
                                                              <li class="pt-1 d-flex w-100">
                                                                  <a class="p-0 nav-link animate-underline animate-target d-inline fw-normal text-truncate"
                                                                      href="{{ route('categories.index') }}">Compact
                                                                      Radios &amp; Stereos</a>
                                                              </li>
                                                              <li class="pt-1 d-flex w-100">
                                                                  <a class="p-0 nav-link animate-underline animate-target d-inline fw-normal text-truncate"
                                                                      href="{{ route('categories.index') }}">Home
                                                                      Audio
                                                                      Accessories</a>
                                                              </li>
                                                              <li class="pt-1 d-flex w-100">
                                                                  <a class="p-0 nav-link animate-underline animate-target d-inline fw-normal text-truncate"
                                                                      href="{{ route('categories.index') }}">Subwoofers</a>
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
                                                                      href="{{ route('categories.index') }}">Shop
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
                                                      href="{{ route('categories.index') }}">
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
                                                                  href="{{ route('categories.index') }}">Cameras &amp;
                                                                  Lenses</a>
                                                          </div>
                                                          <ul class="gap-2 nav flex-column mt-n2">
                                                              <li class="pt-1 d-flex w-100">
                                                                  <a class="p-0 nav-link animate-underline animate-target d-inline fw-normal text-truncate"
                                                                      href="{{ route('categories.index') }}">Point
                                                                      &amp; Shoot Cameras</a>
                                                              </li>
                                                              <li class="pt-1 d-flex w-100">
                                                                  <a class="p-0 nav-link animate-underline animate-target d-inline fw-normal text-truncate"
                                                                      href="{{ route('categories.index') }}">DSLR
                                                                      Cameras</a>
                                                              </li>
                                                              <li class="pt-1 d-flex w-100">
                                                                  <a class="p-0 nav-link animate-underline animate-target d-inline fw-normal text-truncate"
                                                                      href="{{ route('categories.index') }}">Mirrorless
                                                                      Cameras</a>
                                                              </li>
                                                              <li class="pt-1 d-flex w-100">
                                                                  <a class="p-0 nav-link animate-underline animate-target d-inline fw-normal text-truncate"
                                                                      href="{{ route('categories.index') }}">Body
                                                                      Mounted Cameras</a>
                                                              </li>
                                                              <li class="pt-1 d-flex w-100">
                                                                  <a class="p-0 nav-link animate-underline animate-target d-inline fw-normal text-truncate"
                                                                      href="{{ route('categories.index') }}">Camcorders</a>
                                                              </li>
                                                              <li class="pt-1 d-flex w-100">
                                                                  <a class="p-0 nav-link animate-underline animate-target d-inline fw-normal text-truncate"
                                                                      href="{{ route('categories.index') }}">Camcorder
                                                                      Lenses</a>
                                                              </li>
                                                              <li class="pt-1 d-flex w-100">
                                                                  <a class="p-0 nav-link animate-underline animate-target d-inline fw-normal text-truncate"
                                                                      href="{{ route('categories.index') }}">Camera
                                                                      Lenses</a>
                                                              </li>
                                                              <li class="pt-1 d-flex w-100">
                                                                  <a class="p-0 nav-link animate-underline animate-target d-inline fw-normal text-truncate"
                                                                      href="{{ route('categories.index') }}">Macro
                                                                      &amp; Ringlight Flashes</a>
                                                              </li>
                                                              <li class="pt-1 d-flex w-100">
                                                                  <a class="p-0 nav-link animate-underline animate-target d-inline fw-normal text-truncate"
                                                                      href="{{ route('categories.index') }}">Shoe
                                                                      Mount
                                                                      Flashes</a>
                                                              </li>
                                                              <li class="pt-1 d-flex w-100">
                                                                  <a class="p-0 nav-link animate-underline animate-target d-inline fw-normal text-truncate"
                                                                      href="{{ route('categories.index') }}">Tripods
                                                                      &amp; Monopods</a>
                                                              </li>
                                                              <li class="pt-1 d-flex w-100">
                                                                  <a class="p-0 nav-link animate-underline animate-target d-inline fw-normal text-truncate"
                                                                      href="{{ route('categories.index') }}">Video
                                                                      Studio</a>
                                                              </li>
                                                          </ul>
                                                      </div>
                                                      <div style="min-width: 194px">
                                                          <div class="d-flex w-100">
                                                              <a class="animate-underline animate-target d-inline h6 text-dark-emphasis text-decoration-none text-truncate"
                                                                  href="{{ route('categories.index') }}">Accessories</a>
                                                          </div>
                                                          <ul class="gap-2 nav flex-column mt-n2">
                                                              <li class="pt-1 d-flex w-100">
                                                                  <a class="p-0 nav-link animate-underline animate-target d-inline fw-normal text-truncate"
                                                                      href="{{ route('categories.index') }}">Bags
                                                                      &amp;
                                                                      Cases</a>
                                                              </li>
                                                              <li class="pt-1 d-flex w-100">
                                                                  <a class="p-0 nav-link animate-underline animate-target d-inline fw-normal text-truncate"
                                                                      href="{{ route('categories.index') }}">Binoculars
                                                                      &amp; Scopes</a>
                                                              </li>
                                                              <li class="pt-1 d-flex w-100">
                                                                  <a class="p-0 nav-link animate-underline animate-target d-inline fw-normal text-truncate"
                                                                      href="{{ route('categories.index') }}">Batteries
                                                                      &amp; Chargers</a>
                                                              </li>
                                                              <li class="pt-1 d-flex w-100">
                                                                  <a class="p-0 nav-link animate-underline animate-target d-inline fw-normal text-truncate"
                                                                      href="{{ route('categories.index') }}">Cables
                                                                      &amp; Cords</a>
                                                              </li>
                                                              <li class="pt-1 d-flex w-100">
                                                                  <a class="p-0 nav-link animate-underline animate-target d-inline fw-normal text-truncate"
                                                                      href="{{ route('categories.index') }}">Camcorder
                                                                      Accessories</a>
                                                              </li>
                                                              <li class="pt-1 d-flex w-100">
                                                                  <a class="p-0 nav-link animate-underline animate-target d-inline fw-normal text-truncate"
                                                                      href="{{ route('categories.index') }}">Cleaning
                                                                      Equipment</a>
                                                              </li>
                                                              <li class="pt-1 d-flex w-100">
                                                                  <a class="p-0 nav-link animate-underline animate-target d-inline fw-normal text-truncate"
                                                                      href="{{ route('categories.index') }}">Protector
                                                                      Foils</a>
                                                              </li>
                                                              <li class="pt-1 d-flex w-100">
                                                                  <a class="p-0 nav-link animate-underline animate-target d-inline fw-normal text-truncate"
                                                                      href="{{ route('categories.index') }}">Filters
                                                                      &amp; Accessories</a>
                                                              </li>
                                                              <li class="pt-1 d-flex w-100">
                                                                  <a class="p-0 nav-link animate-underline animate-target d-inline fw-normal text-truncate"
                                                                      href="{{ route('categories.index') }}">Remote
                                                                      Controls</a>
                                                              </li>
                                                              <li class="pt-1 d-flex w-100">
                                                                  <a class="p-0 nav-link animate-underline animate-target d-inline fw-normal text-truncate"
                                                                      href="{{ route('categories.index') }}">Rain
                                                                      Covers</a>
                                                              </li>
                                                              <li class="pt-1 d-flex w-100">
                                                                  <a class="p-0 nav-link animate-underline animate-target d-inline fw-normal text-truncate"
                                                                      href="{{ route('categories.index') }}">Viewfinders</a>
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
                                                                      up to $300</span>
                                                                  <div class="mb-2 fs-sm text-light-emphasis">Starts
                                                                      from <del>$1,100.00</del> 899.00</div>
                                                                  <div class="mb-4 h2">Canon Digital Cameras</div>
                                                              </div>
                                                              <img src="assets/img/mega-menu/electronics/05.png"
                                                                  width="252" alt="Canon Camera">
                                                              <div class="mt-4 text-center">
                                                                  <a class="btn btn-sm btn-primary stretched-link"
                                                                      href="{{ route('categories.index') }}">Shop
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
                                                      href="{{ route('categories.index') }}">
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
                                                                  href="{{ route('categories.index') }}">By type</a>
                                                          </div>
                                                          <ul class="gap-2 nav flex-column mt-n2">
                                                              <li class="pt-1 d-flex w-100">
                                                                  <a class="p-0 nav-link animate-underline animate-target d-inline fw-normal text-truncate"
                                                                      href="{{ route('categories.index') }}">All-in-One</a>
                                                              </li>
                                                              <li class="pt-1 d-flex w-100">
                                                                  <a class="p-0 nav-link animate-underline animate-target d-inline fw-normal text-truncate"
                                                                      href="{{ route('categories.index') }}">Copying</a>
                                                              </li>
                                                              <li class="pt-1 d-flex w-100">
                                                                  <a class="p-0 nav-link animate-underline animate-target d-inline fw-normal text-truncate"
                                                                      href="{{ route('categories.index') }}">Faxing</a>
                                                              </li>
                                                              <li class="pt-1 d-flex w-100">
                                                                  <a class="p-0 nav-link animate-underline animate-target d-inline fw-normal text-truncate"
                                                                      href="{{ route('categories.index') }}">Photo
                                                                      Printing</a>
                                                              </li>
                                                              <li class="pt-1 d-flex w-100">
                                                                  <a class="p-0 nav-link animate-underline animate-target d-inline fw-normal text-truncate"
                                                                      href="{{ route('categories.index') }}">Printing
                                                                      Only</a>
                                                              </li>
                                                              <li class="pt-1 d-flex w-100">
                                                                  <a class="p-0 nav-link animate-underline animate-target d-inline fw-normal text-truncate"
                                                                      href="{{ route('categories.index') }}">Scanning</a>
                                                              </li>
                                                          </ul>
                                                          <div class="pt-4 d-flex w-100">
                                                              <a class="animate-underline animate-target d-inline h6 text-dark-emphasis text-decoration-none text-truncate"
                                                                  href="{{ route('categories.index') }}">Scanners</a>
                                                          </div>
                                                          <ul class="gap-2 nav flex-column mt-n2">
                                                              <li class="pt-1 d-flex w-100">
                                                                  <a class="p-0 nav-link animate-underline animate-target d-inline fw-normal text-truncate"
                                                                      href="{{ route('categories.index') }}">Business
                                                                      Card Scanners</a>
                                                              </li>
                                                              <li class="pt-1 d-flex w-100">
                                                                  <a class="p-0 nav-link animate-underline animate-target d-inline fw-normal text-truncate"
                                                                      href="{{ route('categories.index') }}">Document
                                                                      Scanners</a>
                                                              </li>
                                                              <li class="pt-1 d-flex w-100">
                                                                  <a class="p-0 nav-link animate-underline animate-target d-inline fw-normal text-truncate"
                                                                      href="{{ route('categories.index') }}">Flatbed
                                                                      &amp; Photo Scanners</a>
                                                              </li>
                                                              <li class="pt-1 d-flex w-100">
                                                                  <a class="p-0 nav-link animate-underline animate-target d-inline fw-normal text-truncate"
                                                                      href="{{ route('categories.index') }}">Slide
                                                                      &amp; Negative Scanners</a>
                                                              </li>
                                                          </ul>
                                                      </div>
                                                      <div style="min-width: 194px">
                                                          <div class="d-flex w-100">
                                                              <a class="animate-underline animate-target d-inline h6 text-dark-emphasis text-decoration-none text-truncate"
                                                                  href="{{ route('categories.index') }}">Printers</a>
                                                          </div>
                                                          <ul class="gap-2 nav flex-column mt-n2">
                                                              <li class="pt-1 d-flex w-100">
                                                                  <a class="p-0 nav-link animate-underline animate-target d-inline fw-normal text-truncate"
                                                                      href="{{ route('categories.index') }}">Dot
                                                                      Matrix Printers</a>
                                                              </li>
                                                              <li class="pt-1 d-flex w-100">
                                                                  <a class="p-0 nav-link animate-underline animate-target d-inline fw-normal text-truncate"
                                                                      href="{{ route('categories.index') }}">Inkjet
                                                                      Printers</a>
                                                              </li>
                                                              <li class="pt-1 d-flex w-100">
                                                                  <a class="p-0 nav-link animate-underline animate-target d-inline fw-normal text-truncate"
                                                                      href="{{ route('categories.index') }}">Label
                                                                      Printers</a>
                                                              </li>
                                                              <li class="pt-1 d-flex w-100">
                                                                  <a class="p-0 nav-link animate-underline animate-target d-inline fw-normal text-truncate"
                                                                      href="{{ route('categories.index') }}">Laser
                                                                      Printers</a>
                                                              </li>
                                                              <li class="pt-1 d-flex w-100">
                                                                  <a class="p-0 nav-link animate-underline animate-target d-inline fw-normal text-truncate"
                                                                      href="{{ route('categories.index') }}">Photo
                                                                      Printers</a>
                                                              </li>
                                                              <li class="pt-1 d-flex w-100">
                                                                  <a class="p-0 nav-link animate-underline animate-target d-inline fw-normal text-truncate"
                                                                      href="{{ route('categories.index') }}">Wide
                                                                      Format Printers</a>
                                                              </li>
                                                              <li class="pt-1 d-flex w-100">
                                                                  <a class="p-0 nav-link animate-underline animate-target d-inline fw-normal text-truncate"
                                                                      href="{{ route('categories.index') }}">Plotter
                                                                      Printers</a>
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
                                                                  <div class="mb-2 fs-sm text-light-emphasis">Best
                                                                      deal! Save up to <span
                                                                          class="fw-semibold">$200</span></div>
                                                                  <div class="mb-4 h2">Epson Color Printers</div>
                                                              </div>
                                                              <img src="assets/img/mega-menu/electronics/06.png"
                                                                  width="252" alt="Epson Printer">
                                                              <div class="mt-4 text-center">
                                                                  <a class="btn btn-sm btn-primary stretched-link"
                                                                      href="{{ route('categories.index') }}">Shop
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
                                                      href="{{ route('categories.index') }}">
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
                                                                  href="{{ route('categories.index') }}">Charging
                                                                  Stations</a>
                                                          </div>
                                                          <ul class="gap-2 nav flex-column mt-n2">
                                                              <li class="pt-1 d-flex w-100">
                                                                  <a class="p-0 nav-link animate-underline animate-target d-inline fw-normal text-truncate"
                                                                      href="{{ route('categories.index') }}">Portable
                                                                      Power Stations</a>
                                                              </li>
                                                              <li class="pt-1 d-flex w-100">
                                                                  <a class="p-0 nav-link animate-underline animate-target d-inline fw-normal text-truncate"
                                                                      href="{{ route('categories.index') }}">Inverter
                                                                      Power Stations</a>
                                                              </li>
                                                              <li class="pt-1 d-flex w-100">
                                                                  <a class="p-0 nav-link animate-underline animate-target d-inline fw-normal text-truncate"
                                                                      href="{{ route('categories.index') }}">Outdoor
                                                                      Generators</a>
                                                              </li>
                                                              <li class="pt-1 d-flex w-100">
                                                                  <a class="p-0 nav-link animate-underline animate-target d-inline fw-normal text-truncate"
                                                                      href="{{ route('categories.index') }}">Gasoline
                                                                      Generators</a>
                                                              </li>
                                                              <li class="pt-1 d-flex w-100">
                                                                  <a class="p-0 nav-link animate-underline animate-target d-inline fw-normal text-truncate"
                                                                      href="{{ route('categories.index') }}">Cell
                                                                      Phone Chargers</a>
                                                              </li>
                                                              <li class="pt-1 d-flex w-100">
                                                                  <a class="p-0 nav-link animate-underline animate-target d-inline fw-normal text-truncate"
                                                                      href="{{ route('categories.index') }}">Power
                                                                      Strips</a>
                                                              </li>
                                                              <li class="pt-1 d-flex w-100">
                                                                  <a class="p-0 nav-link animate-underline animate-target d-inline fw-normal text-truncate"
                                                                      href="{{ route('categories.index') }}">Wall
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
                                                                      href="{{ route('categories.index') }}">Shop
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
                                                      href="{{ route('categories.index') }}">
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
                                                                  href="{{ route('categories.index') }}">Headphones</a>
                                                          </div>
                                                          <ul class="gap-2 nav flex-column mt-n2">
                                                              <li class="pt-1 d-flex w-100">
                                                                  <a class="p-0 nav-link animate-underline animate-target d-inline fw-normal text-truncate"
                                                                      href="{{ route('categories.index') }}">Earbud
                                                                      Headphones</a>
                                                              </li>
                                                              <li class="pt-1 d-flex w-100">
                                                                  <a class="p-0 nav-link animate-underline animate-target d-inline fw-normal text-truncate"
                                                                      href="{{ route('categories.index') }}">Over-Ear
                                                                      Headphones</a>
                                                              </li>
                                                              <li class="pt-1 d-flex w-100">
                                                                  <a class="p-0 nav-link animate-underline animate-target d-inline fw-normal text-truncate"
                                                                      href="{{ route('categories.index') }}">On-Ear
                                                                      Headphones</a>
                                                              </li>
                                                              <li class="pt-1 d-flex w-100">
                                                                  <a class="p-0 nav-link animate-underline animate-target d-inline fw-normal text-truncate"
                                                                      href="{{ route('categories.index') }}">Bluetooth
                                                                      Headphones</a>
                                                              </li>
                                                              <li class="pt-1 d-flex w-100">
                                                                  <a class="p-0 nav-link animate-underline animate-target d-inline fw-normal text-truncate"
                                                                      href="{{ route('categories.index') }}">Sports
                                                                      &amp; Fitness</a>
                                                              </li>
                                                              <li class="pt-1 d-flex w-100">
                                                                  <a class="p-0 nav-link animate-underline animate-target d-inline fw-normal text-truncate"
                                                                      href="{{ route('categories.index') }}">Noise-Cancelling</a>
                                                              </li>
                                                          </ul>
                                                          <div class="pt-4 d-flex w-100">
                                                              <a class="animate-underline animate-target d-inline h6 text-dark-emphasis text-decoration-none text-truncate"
                                                                  href="{{ route('categories.index') }}">Accessories</a>
                                                          </div>
                                                          <ul class="gap-2 nav flex-column mt-n2">
                                                              <li class="pt-1 d-flex w-100">
                                                                  <a class="p-0 nav-link animate-underline animate-target d-inline fw-normal text-truncate"
                                                                      href="{{ route('categories.index') }}">Cases
                                                                      &amp; Sleeves</a>
                                                              </li>
                                                              <li class="pt-1 d-flex w-100">
                                                                  <a class="p-0 nav-link animate-underline animate-target d-inline fw-normal text-truncate"
                                                                      href="{{ route('categories.index') }}">Cables
                                                                      &amp; Cords</a>
                                                              </li>
                                                              <li class="pt-1 d-flex w-100">
                                                                  <a class="p-0 nav-link animate-underline animate-target d-inline fw-normal text-truncate"
                                                                      href="{{ route('categories.index') }}">Ear
                                                                      Pads</a>
                                                              </li>
                                                              <li class="pt-1 d-flex w-100">
                                                                  <a class="p-0 nav-link animate-underline animate-target d-inline fw-normal text-truncate"
                                                                      href="{{ route('categories.index') }}">Repair
                                                                      Kits</a>
                                                              </li>
                                                              <li class="pt-1 d-flex w-100">
                                                                  <a class="p-0 nav-link animate-underline animate-target d-inline fw-normal text-truncate"
                                                                      href="{{ route('categories.index') }}">Cleaning
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
                                                                      href="{{ route('categories.index') }}">Shop
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
                                                      href="{{ route('categories.index') }}">
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
                                                                  href="{{ route('categories.index') }}">Wearable
                                                                  Gadgets</a>
                                                          </div>
                                                          <ul class="gap-2 nav flex-column mt-n2">
                                                              <li class="pt-1 d-flex w-100">
                                                                  <a class="p-0 nav-link animate-underline animate-target d-inline fw-normal text-truncate"
                                                                      href="{{ route('categories.index') }}">Smartwatches</a>
                                                              </li>
                                                              <li class="pt-1 d-flex w-100">
                                                                  <a class="p-0 nav-link animate-underline animate-target d-inline fw-normal text-truncate"
                                                                      href="{{ route('categories.index') }}">Fitness
                                                                      Trackers</a>
                                                              </li>
                                                              <li class="pt-1 d-flex w-100">
                                                                  <a class="p-0 nav-link animate-underline animate-target d-inline fw-normal text-truncate"
                                                                      href="{{ route('categories.index') }}">Smart
                                                                      Glasses</a>
                                                              </li>
                                                              <li class="pt-1 d-flex w-100">
                                                                  <a class="p-0 nav-link animate-underline animate-target d-inline fw-normal text-truncate"
                                                                      href="{{ route('categories.index') }}">Rings</a>
                                                              </li>
                                                              <li class="pt-1 d-flex w-100">
                                                                  <a class="p-0 nav-link animate-underline animate-target d-inline fw-normal text-truncate"
                                                                      href="{{ route('categories.index') }}">Virtual
                                                                      Reality</a>
                                                              </li>
                                                              <li class="pt-1 d-flex w-100">
                                                                  <a class="p-0 nav-link animate-underline animate-target d-inline fw-normal text-truncate"
                                                                      href="{{ route('categories.index') }}">Clips,
                                                                      Arm &amp; Wristbands</a>
                                                              </li>
                                                              <li class="pt-1 d-flex w-100">
                                                                  <a class="p-0 nav-link animate-underline animate-target d-inline fw-normal text-truncate"
                                                                      href="{{ route('categories.index') }}">Accessories</a>
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
                                                                      href="{{ route('categories.index') }}">Shop
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
                                                      href="{{ route('categories.index') }}">
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
                                                                  href="{{ route('categories.index') }}">Powerbanks</a>
                                                          </div>
                                                          <ul class="gap-2 nav flex-column mt-n2">
                                                              <li class="pt-1 d-flex w-100">
                                                                  <a class="p-0 nav-link animate-underline animate-target d-inline fw-normal text-truncate"
                                                                      href="{{ route('categories.index') }}">Fast
                                                                      Charging</a>
                                                              </li>
                                                              <li class="pt-1 d-flex w-100">
                                                                  <a class="p-0 nav-link animate-underline animate-target d-inline fw-normal text-truncate"
                                                                      href="{{ route('categories.index') }}">Built In
                                                                      Cable</a>
                                                              </li>
                                                              <li class="pt-1 d-flex w-100">
                                                                  <a class="p-0 nav-link animate-underline animate-target d-inline fw-normal text-truncate"
                                                                      href="{{ route('categories.index') }}">Built In
                                                                      Wall Plug</a>
                                                              </li>
                                                              <li class="pt-1 d-flex w-100">
                                                                  <a class="p-0 nav-link animate-underline animate-target d-inline fw-normal text-truncate"
                                                                      href="{{ route('categories.index') }}">LED
                                                                      Indicator Lights</a>
                                                              </li>
                                                              <li class="pt-1 d-flex w-100">
                                                                  <a class="p-0 nav-link animate-underline animate-target d-inline fw-normal text-truncate"
                                                                      href="{{ route('categories.index') }}">Pocket
                                                                      Size</a>
                                                              </li>
                                                              <li class="pt-1 d-flex w-100">
                                                                  <a class="p-0 nav-link animate-underline animate-target d-inline fw-normal text-truncate"
                                                                      href="{{ route('categories.index') }}">Wireless
                                                                      Charging</a>
                                                              </li>
                                                              <li class="pt-1 d-flex w-100">
                                                                  <a class="p-0 nav-link animate-underline animate-target d-inline fw-normal text-truncate"
                                                                      href="{{ route('categories.index') }}">Short
                                                                      Circuit Protection</a>
                                                              </li>
                                                              <li class="pt-1 d-flex w-100">
                                                                  <a class="p-0 nav-link animate-underline animate-target d-inline fw-normal text-truncate"
                                                                      href="{{ route('categories.index') }}">Scratch
                                                                      Resistant</a>
                                                              </li>
                                                              <li class="pt-1 d-flex w-100">
                                                                  <a class="p-0 nav-link animate-underline animate-target d-inline fw-normal text-truncate"
                                                                      href="{{ route('categories.index') }}">Flashlight</a>
                                                              </li>
                                                              <li class="pt-1 d-flex w-100">
                                                                  <a class="p-0 nav-link animate-underline animate-target d-inline fw-normal text-truncate"
                                                                      href="{{ route('categories.index') }}">Lightweight</a>
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
                                                                      href="{{ route('categories.index') }}">Shop
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
                                                      href="{{ route('categories.index') }}">
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
                                                                  href="{{ route('categories.index') }}">Data
                                                                  Storage</a>
                                                          </div>
                                                          <ul class="gap-2 nav flex-column mt-n2">
                                                              <li class="pt-1 d-flex w-100">
                                                                  <a class="p-0 nav-link animate-underline animate-target d-inline fw-normal text-truncate"
                                                                      href="{{ route('categories.index') }}">External
                                                                      Hard Drives</a>
                                                              </li>
                                                              <li class="pt-1 d-flex w-100">
                                                                  <a class="p-0 nav-link animate-underline animate-target d-inline fw-normal text-truncate"
                                                                      href="{{ route('categories.index') }}">External
                                                                      SSD</a>
                                                              </li>
                                                              <li class="pt-1 d-flex w-100">
                                                                  <a class="p-0 nav-link animate-underline animate-target d-inline fw-normal text-truncate"
                                                                      href="{{ route('categories.index') }}">External
                                                                      Zip Drives</a>
                                                              </li>
                                                              <li class="pt-1 d-flex w-100">
                                                                  <a class="p-0 nav-link animate-underline animate-target d-inline fw-normal text-truncate"
                                                                      href="{{ route('categories.index') }}">Floppy
                                                                      &amp; Tape Drives</a>
                                                              </li>
                                                              <li class="pt-1 d-flex w-100">
                                                                  <a class="p-0 nav-link animate-underline animate-target d-inline fw-normal text-truncate"
                                                                      href="{{ route('categories.index') }}">Internal
                                                                      Hard Drives</a>
                                                              </li>
                                                              <li class="pt-1 d-flex w-100">
                                                                  <a class="p-0 nav-link animate-underline animate-target d-inline fw-normal text-truncate"
                                                                      href="{{ route('categories.index') }}">Internal
                                                                      SSD</a>
                                                              </li>
                                                              <li class="pt-1 d-flex w-100">
                                                                  <a class="p-0 nav-link animate-underline animate-target d-inline fw-normal text-truncate"
                                                                      href="{{ route('categories.index') }}">Network
                                                                      Attached Storage</a>
                                                              </li>
                                                              <li class="pt-1 d-flex w-100">
                                                                  <a class="p-0 nav-link animate-underline animate-target d-inline fw-normal text-truncate"
                                                                      href="{{ route('categories.index') }}">USB
                                                                      Flash
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
                                                                      href="{{ route('categories.index') }}">Shop
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
                                                      href="{{ route('categories.index') }}">
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
                                                                  href="{{ route('categories.index') }}">Games &amp;
                                                                  Hardware</a>
                                                          </div>
                                                          <ul class="gap-2 nav flex-column mt-n2">
                                                              <li class="pt-1 d-flex w-100">
                                                                  <a class="p-0 nav-link animate-underline animate-target d-inline fw-normal text-truncate"
                                                                      href="{{ route('categories.index') }}">Video
                                                                      Games</a>
                                                              </li>
                                                              <li class="pt-1 d-flex w-100">
                                                                  <a class="p-0 nav-link animate-underline animate-target d-inline fw-normal text-truncate"
                                                                      href="{{ route('categories.index') }}">PlayStation
                                                                      5</a>
                                                              </li>
                                                              <li class="pt-1 d-flex w-100">
                                                                  <a class="p-0 nav-link animate-underline animate-target d-inline fw-normal text-truncate"
                                                                      href="{{ route('categories.index') }}">PlayStation
                                                                      4</a>
                                                              </li>
                                                              <li class="pt-1 d-flex w-100">
                                                                  <a class="p-0 nav-link animate-underline animate-target d-inline fw-normal text-truncate"
                                                                      href="{{ route('categories.index') }}">Xbox
                                                                      Series X</a>
                                                              </li>
                                                              <li class="pt-1 d-flex w-100">
                                                                  <a class="p-0 nav-link animate-underline animate-target d-inline fw-normal text-truncate"
                                                                      href="{{ route('categories.index') }}">Xbox
                                                                      Series S</a>
                                                              </li>
                                                              <li class="pt-1 d-flex w-100">
                                                                  <a class="p-0 nav-link animate-underline animate-target d-inline fw-normal text-truncate"
                                                                      href="{{ route('categories.index') }}">Nintendo
                                                                      Switch</a>
                                                              </li>
                                                              <li class="pt-1 d-flex w-100">
                                                                  <a class="p-0 nav-link animate-underline animate-target d-inline fw-normal text-truncate"
                                                                      href="{{ route('categories.index') }}">Gaming
                                                                      PC</a>
                                                              </li>
                                                              <li class="pt-1 d-flex w-100">
                                                                  <a class="p-0 nav-link animate-underline animate-target d-inline fw-normal text-truncate"
                                                                      href="{{ route('categories.index') }}">Gaming
                                                                      Laptops</a>
                                                              </li>
                                                              <li class="pt-1 d-flex w-100">
                                                                  <a class="p-0 nav-link animate-underline animate-target d-inline fw-normal text-truncate"
                                                                      href="{{ route('categories.index') }}">Wii
                                                                      U</a>
                                                              </li>
                                                              <li class="pt-1 d-flex w-100">
                                                                  <a class="p-0 nav-link animate-underline animate-target d-inline fw-normal text-truncate"
                                                                      href="{{ route('categories.index') }}">Wii</a>
                                                              </li>
                                                              <li class="pt-1 d-flex w-100">
                                                                  <a class="p-0 nav-link animate-underline animate-target d-inline fw-normal text-truncate"
                                                                      href="{{ route('categories.index') }}">Nintendo
                                                                      3DS</a>
                                                              </li>
                                                              <li class="pt-1 d-flex w-100">
                                                                  <a class="p-0 nav-link animate-underline animate-target d-inline fw-normal text-truncate"
                                                                      href="{{ route('categories.index') }}">Nintendo
                                                                      2DS</a>
                                                              </li>
                                                              <li class="pt-1 d-flex w-100">
                                                                  <a class="p-0 nav-link animate-underline animate-target d-inline fw-normal text-truncate"
                                                                      href="{{ route('categories.index') }}">Nintendo
                                                                      DS</a>
                                                              </li>
                                                              <li class="pt-1 d-flex w-100">
                                                                  <a class="p-0 nav-link animate-underline animate-target d-inline fw-normal text-truncate"
                                                                      href="{{ route('categories.index') }}">Wii</a>
                                                              </li>
                                                          </ul>
                                                      </div>
                                                      <div style="min-width: 194px">
                                                          <ul class="gap-2 mt-2 nav flex-column mt-lg-0">
                                                              <li class="pt-1 d-flex w-100">
                                                                  <a class="p-0 nav-link animate-underline animate-target d-inline fw-normal text-truncate"
                                                                      href="{{ route('categories.index') }}">Mac</a>
                                                              </li>
                                                              <li class="pt-1 d-flex w-100">
                                                                  <a class="p-0 nav-link animate-underline animate-target d-inline fw-normal text-truncate"
                                                                      href="{{ route('categories.index') }}">PlayStation
                                                                      Vita</a>
                                                              </li>
                                                              <li class="pt-1 d-flex w-100">
                                                                  <a class="p-0 nav-link animate-underline animate-target d-inline fw-normal text-truncate"
                                                                      href="{{ route('categories.index') }}">Sony
                                                                      PSP</a>
                                                              </li>
                                                              <li class="pt-1 d-flex w-100">
                                                                  <a class="p-0 nav-link animate-underline animate-target d-inline fw-normal text-truncate"
                                                                      href="{{ route('categories.index') }}">Retro
                                                                      Gaming</a>
                                                              </li>
                                                              <li class="pt-1 d-flex w-100">
                                                                  <a class="p-0 nav-link animate-underline animate-target d-inline fw-normal text-truncate"
                                                                      href="{{ route('categories.index') }}">Microconsoles</a>
                                                              </li>
                                                              <li class="pt-1 d-flex w-100">
                                                                  <a class="p-0 nav-link animate-underline animate-target d-inline fw-normal text-truncate"
                                                                      href="{{ route('categories.index') }}">Controllers</a>
                                                              </li>
                                                              <li class="pt-1 d-flex w-100">
                                                                  <a class="p-0 nav-link animate-underline animate-target d-inline fw-normal text-truncate"
                                                                      href="{{ route('categories.index') }}">Accessories</a>
                                                              </li>
                                                              <li class="pt-1 d-flex w-100">
                                                                  <a class="p-0 nav-link animate-underline animate-target d-inline fw-normal text-truncate"
                                                                      href="{{ route('categories.index') }}">Digital
                                                                      Games Screens</a>
                                                              </li>
                                                              <li class="pt-1 d-flex w-100">
                                                                  <a class="p-0 nav-link animate-underline animate-target d-inline fw-normal text-truncate"
                                                                      href="{{ route('categories.index') }}">Game
                                                                      Pass</a>
                                                              </li>
                                                              <li class="pt-1 d-flex w-100">
                                                                  <a class="p-0 nav-link animate-underline animate-target d-inline fw-normal text-truncate"
                                                                      href="{{ route('categories.index') }}">PlayStation
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
                                                                      href="{{ route('categories.index') }}">Shop
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
                                      <a class="nav-link dropdown-toggle active" aria-current="page"
                                          href="#" role="button" data-bs-toggle="dropdown"
                                          data-bs-trigger="hover" aria-expanded="false">Home</a>
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
                                              <a class="dropdown-item dropdown-toggle" href="#!"
                                                  role="button" data-bs-toggle="dropdown" data-bs-trigger="hover"
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
                                                  role="button" data-bs-toggle="dropdown" data-bs-trigger="hover"
                                                  aria-expanded="false">About</a>
                                              <ul class="dropdown-menu">
                                                  <li><a class="dropdown-item" href="about-v1.html">About v.1</a>
                                                  </li>
                                                  <li><a class="dropdown-item" href="about-v2.html">About v.2</a>
                                                  </li>
                                              </ul>
                                          </li>
                                          <li class="dropend">
                                              <a class="dropdown-item dropdown-toggle" href="#!"
                                                  role="button" data-bs-toggle="dropdown" data-bs-trigger="hover"
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
                                              <a class="dropdown-item dropdown-toggle" href="#!"
                                                  role="button" data-bs-toggle="dropdown" data-bs-trigger="hover"
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
                                              <a class="dropdown-item dropdown-toggle" href="#!"
                                                  role="button" data-bs-toggle="dropdown" data-bs-trigger="hover"
                                                  aria-expanded="false">Help Center</a>
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
                                                  role="button" data-bs-toggle="dropdown" data-bs-trigger="hover"
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
                                          data-bs-toggle="dropdown" data-bs-trigger="hover"
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

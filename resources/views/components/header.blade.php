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

                          @include('components.navbar')
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

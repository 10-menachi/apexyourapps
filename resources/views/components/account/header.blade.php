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

                                    <!-- Mega menu -->
                                    <ul class="py-1 dropdown-menu w-100 rounded-top-0 rounded-bottom-4 p-lg-1"
                                        style="--cz-dropdown-spacer: 0; --cz-dropdown-item-padding-y: .625rem; --cz-dropdown-item-spacer: 0">
                                        <li class="pt-2 d-lg-none">
                                            <a class="dropdown-item fw-medium" href="{{ route('categories') }}">
                                                <i class="ci-grid fs-xl opacity-60 pe-1 me-2"></i>
                                                All Categories
                                                <i class="ci-chevron-right fs-base ms-auto me-n1"></i>
                                            </a>
                                        </li>
                                        <li class="dropend position-static">
                                            <div class="pt-2 pb-1 rounded position-relative px-lg-2"
                                                data-bs-toggle="dropdown" data-bs-trigger="hover">
                                                <a class="dropdown-item fw-medium stretched-link d-none d-lg-flex"
                                                    href="{{ route('categories') }}">
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
                                                                href="{{ route('categories') }}">Computers</a>
                                                        </div>
                                                        <ul class="gap-2 nav flex-column mt-n2">
                                                            <li class="pt-1 d-flex w-100">
                                                                <a class="p-0 nav-link animate-underline animate-target d-inline fw-normal text-truncate"
                                                                    href="{{ route('categories') }}">Laptops
                                                                    &amp; Tablets</a>
                                                            </li>
                                                            <li class="pt-1 d-flex w-100">
                                                                <a class="p-0 nav-link animate-underline animate-target d-inline fw-normal text-truncate"
                                                                    href="{{ route('categories') }}">Desktop
                                                                    Computers</a>
                                                            </li>
                                                            <li class="pt-1 d-flex w-100">
                                                                <a class="p-0 nav-link animate-underline animate-target d-inline fw-normal text-truncate"
                                                                    href="{{ route('categories') }}">External
                                                                    Components</a>
                                                            </li>
                                                            <li class="pt-1 d-flex w-100">
                                                                <a class="p-0 nav-link animate-underline animate-target d-inline fw-normal text-truncate"
                                                                    href="{{ route('categories') }}">Interal
                                                                    Components</a>
                                                            </li>
                                                            <li class="pt-1 d-flex w-100">
                                                                <a class="p-0 nav-link animate-underline animate-target d-inline fw-normal text-truncate"
                                                                    href="{{ route('categories') }}">Networking
                                                                    Products (NAS)</a>
                                                            </li>
                                                            <li class="pt-1 d-flex w-100">
                                                                <a class="p-0 nav-link animate-underline animate-target d-inline fw-normal text-truncate"
                                                                    href="{{ route('categories') }}">Single
                                                                    Board Computers</a>
                                                            </li>
                                                            <li class="pt-1 d-flex w-100">
                                                                <a class="p-0 nav-link animate-underline animate-target d-inline fw-normal text-truncate"
                                                                    href="{{ route('categories') }}">Desktop
                                                                    Barebones</a>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                    <div style="min-width: 194px">
                                                        <div class="d-flex w-100">
                                                            <a class="animate-underline animate-target d-inline h6 text-dark-emphasis text-decoration-none text-truncate"
                                                                href="{{ route('categories') }}">Accessories</a>
                                                        </div>
                                                        <ul class="gap-2 nav flex-column mt-n2">
                                                            <li class="pt-1 d-flex w-100">
                                                                <a class="p-0 nav-link animate-underline animate-target d-inline fw-normal text-truncate"
                                                                    href="{{ route('categories') }}">Monitors</a>
                                                            </li>
                                                            <li class="pt-1 d-flex w-100">
                                                                <a class="p-0 nav-link animate-underline animate-target d-inline fw-normal text-truncate"
                                                                    href="{{ route('categories') }}">Bags,
                                                                    Cases &amp; Sleeves</a>
                                                            </li>
                                                            <li class="pt-1 d-flex w-100">
                                                                <a class="p-0 nav-link animate-underline animate-target d-inline fw-normal text-truncate"
                                                                    href="{{ route('categories') }}">Batteries</a>
                                                            </li>
                                                            <li class="pt-1 d-flex w-100">
                                                                <a class="p-0 nav-link animate-underline animate-target d-inline fw-normal text-truncate"
                                                                    href="{{ route('categories') }}">Charges
                                                                    &amp; Adapters</a>
                                                            </li>
                                                            <li class="pt-1 d-flex w-100">
                                                                <a class="p-0 nav-link animate-underline animate-target d-inline fw-normal text-truncate"
                                                                    href="{{ route('categories') }}">Cooling
                                                                    Pads</a>
                                                            </li>
                                                            <li class="pt-1 d-flex w-100">
                                                                <a class="p-0 nav-link animate-underline animate-target d-inline fw-normal text-truncate"
                                                                    href="{{ route('categories') }}">Mounts</a>
                                                            </li>
                                                            <li class="pt-1 d-flex w-100">
                                                                <a class="p-0 nav-link animate-underline animate-target d-inline fw-normal text-truncate"
                                                                    href="{{ route('categories') }}">Replacement
                                                                    Screens</a>
                                                            </li>
                                                            <li class="pt-1 d-flex w-100">
                                                                <a class="p-0 nav-link animate-underline animate-target d-inline fw-normal text-truncate"
                                                                    href="{{ route('categories') }}">Security
                                                                    Locks</a>
                                                            </li>
                                                            <li class="pt-1 d-flex w-100">
                                                                <a class="p-0 nav-link animate-underline animate-target d-inline fw-normal text-truncate"
                                                                    href="{{ route('categories') }}">Stands</a>
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
                                                                    href="{{ route('categories') }}">Shop
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
                                                    href="{{ route('categories') }}">
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
                                                                href="{{ route('categories') }}">Smartphones</a>
                                                        </div>
                                                        <ul class="gap-2 nav flex-column mt-n2">
                                                            <li class="pt-1 d-flex w-100">
                                                                <a class="p-0 nav-link animate-underline animate-target d-inline fw-normal text-truncate"
                                                                    href="{{ route('categories') }}">Apple
                                                                    iPhone</a>
                                                            </li>
                                                            <li class="pt-1 d-flex w-100">
                                                                <a class="p-0 nav-link animate-underline animate-target d-inline fw-normal text-truncate"
                                                                    href="{{ route('categories') }}">Google
                                                                    Pixel</a>
                                                            </li>
                                                            <li class="pt-1 d-flex w-100">
                                                                <a class="p-0 nav-link animate-underline animate-target d-inline fw-normal text-truncate"
                                                                    href="{{ route('categories') }}">Android
                                                                    Smartphones</a>
                                                            </li>
                                                            <li class="pt-1 d-flex w-100">
                                                                <a class="p-0 nav-link animate-underline animate-target d-inline fw-normal text-truncate"
                                                                    href="{{ route('categories') }}">Phablets</a>
                                                            </li>
                                                        </ul>
                                                        <div class="pt-4 d-flex w-100">
                                                            <a class="animate-underline animate-target d-inline h6 text-dark-emphasis text-decoration-none text-truncate"
                                                                href="{{ route('categories') }}">Tablets</a>
                                                        </div>
                                                        <ul class="gap-2 nav flex-column mt-n2">
                                                            <li class="pt-1 d-flex w-100">
                                                                <a class="p-0 nav-link animate-underline animate-target d-inline fw-normal text-truncate"
                                                                    href="{{ route('categories') }}">Apple
                                                                    iPad</a>
                                                            </li>
                                                            <li class="pt-1 d-flex w-100">
                                                                <a class="p-0 nav-link animate-underline animate-target d-inline fw-normal text-truncate"
                                                                    href="{{ route('categories') }}">Android
                                                                    Tablets</a>
                                                            </li>
                                                            <li class="pt-1 d-flex w-100">
                                                                <a class="p-0 nav-link animate-underline animate-target d-inline fw-normal text-truncate"
                                                                    href="{{ route('categories') }}">Tablets
                                                                    with Keyboard</a>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                    <div style="min-width: 194px">
                                                        <div class="d-flex w-100">
                                                            <a class="animate-underline animate-target d-inline h6 text-dark-emphasis text-decoration-none text-truncate"
                                                                href="{{ route('categories') }}">Accessories</a>
                                                        </div>
                                                        <ul class="gap-2 nav flex-column mt-n2">
                                                            <li class="pt-1 d-flex w-100">
                                                                <a class="p-0 nav-link animate-underline animate-target d-inline fw-normal text-truncate"
                                                                    href="{{ route('categories') }}">Accessory
                                                                    Kits</a>
                                                            </li>
                                                            <li class="pt-1 d-flex w-100">
                                                                <a class="p-0 nav-link animate-underline animate-target d-inline fw-normal text-truncate"
                                                                    href="{{ route('categories') }}">Batteries
                                                                    &amp; Battery Packs</a>
                                                            </li>
                                                            <li class="pt-1 d-flex w-100">
                                                                <a class="p-0 nav-link animate-underline animate-target d-inline fw-normal text-truncate"
                                                                    href="{{ route('categories') }}">Bags &amp;
                                                                    Cases</a>
                                                            </li>
                                                            <li class="pt-1 d-flex w-100">
                                                                <a class="p-0 nav-link animate-underline animate-target d-inline fw-normal text-truncate"
                                                                    href="{{ route('categories') }}">Cables</a>
                                                            </li>
                                                            <li class="pt-1 d-flex w-100">
                                                                <a class="p-0 nav-link animate-underline animate-target d-inline fw-normal text-truncate"
                                                                    href="{{ route('categories') }}">Car
                                                                    Accessories</a>
                                                            </li>
                                                            <li class="pt-1 d-flex w-100">
                                                                <a class="p-0 nav-link animate-underline animate-target d-inline fw-normal text-truncate"
                                                                    href="{{ route('categories') }}">Charges
                                                                    &amp; Power Adapters</a>
                                                            </li>
                                                            <li class="pt-1 d-flex w-100">
                                                                <a class="p-0 nav-link animate-underline animate-target d-inline fw-normal text-truncate"
                                                                    href="{{ route('categories') }}">FM
                                                                    Transmitters</a>
                                                            </li>
                                                            <li class="pt-1 d-flex w-100">
                                                                <a class="p-0 nav-link animate-underline animate-target d-inline fw-normal text-truncate"
                                                                    href="{{ route('categories') }}">Lens
                                                                    Attachments</a>
                                                            </li>
                                                            <li class="pt-1 d-flex w-100">
                                                                <a class="p-0 nav-link animate-underline animate-target d-inline fw-normal text-truncate"
                                                                    href="{{ route('categories') }}">Mounts
                                                                    &amp; Standsv</a>
                                                            </li>
                                                            <li class="pt-1 d-flex w-100">
                                                                <a class="p-0 nav-link animate-underline animate-target d-inline fw-normal text-truncate"
                                                                    href="{{ route('categories') }}">Repair
                                                                    Kits</a>
                                                            </li>
                                                            <li class="pt-1 d-flex w-100">
                                                                <a class="p-0 nav-link animate-underline animate-target d-inline fw-normal text-truncate"
                                                                    href="{{ route('categories') }}">Replacement
                                                                    Parts</a>
                                                            </li>
                                                            <li class="pt-1 d-flex w-100">
                                                                <a class="p-0 nav-link animate-underline animate-target d-inline fw-normal text-truncate"
                                                                    href="{{ route('categories') }}">Styluses</a>
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
                                                                    href="{{ route('categories') }}">Shop
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
                                                    href="{{ route('categories') }}">
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
                                                                href="{{ route('categories') }}">TV, Video
                                                                &amp; Audio</a>
                                                        </div>
                                                        <ul class="gap-2 nav flex-column mt-n2">
                                                            <li class="pt-1 d-flex w-100">
                                                                <a class="p-0 nav-link animate-underline animate-target d-inline fw-normal text-truncate"
                                                                    href="{{ route('categories') }}">TV
                                                                    Stes</a>
                                                            </li>
                                                            <li class="pt-1 d-flex w-100">
                                                                <a class="p-0 nav-link animate-underline animate-target d-inline fw-normal text-truncate"
                                                                    href="{{ route('categories') }}">Home
                                                                    Theater Systems</a>
                                                            </li>
                                                            <li class="pt-1 d-flex w-100">
                                                                <a class="p-0 nav-link animate-underline animate-target d-inline fw-normal text-truncate"
                                                                    href="{{ route('categories') }}">DVD
                                                                    Players &amp; Recorders</a>
                                                            </li>
                                                            <li class="pt-1 d-flex w-100">
                                                                <a class="p-0 nav-link animate-underline animate-target d-inline fw-normal text-truncate"
                                                                    href="{{ route('categories') }}">Blue-ray
                                                                    Players &amp; Recorders</a>
                                                            </li>
                                                            <li class="pt-1 d-flex w-100">
                                                                <a class="p-0 nav-link animate-underline animate-target d-inline fw-normal text-truncate"
                                                                    href="{{ route('categories') }}">HD DVD
                                                                    Players &amp; Recorders</a>
                                                            </li>
                                                            <li class="pt-1 d-flex w-100">
                                                                <a class="p-0 nav-link animate-underline animate-target d-inline fw-normal text-truncate"
                                                                    href="{{ route('categories') }}">DVD-VCR
                                                                    Combos</a>
                                                            </li>
                                                            <li class="pt-1 d-flex w-100">
                                                                <a class="p-0 nav-link animate-underline animate-target d-inline fw-normal text-truncate"
                                                                    href="{{ route('categories') }}">DTV
                                                                    Converters</a>
                                                            </li>
                                                            <li class="pt-1 d-flex w-100">
                                                                <a class="p-0 nav-link animate-underline animate-target d-inline fw-normal text-truncate"
                                                                    href="{{ route('categories') }}">AV
                                                                    Receivers</a>
                                                            </li>
                                                            <li class="pt-1 d-flex w-100">
                                                                <a class="p-0 nav-link animate-underline animate-target d-inline fw-normal text-truncate"
                                                                    href="{{ route('categories') }}">AV
                                                                    Amplifiers</a>
                                                            </li>
                                                            <li class="pt-1 d-flex w-100">
                                                                <a class="p-0 nav-link animate-underline animate-target d-inline fw-normal text-truncate"
                                                                    href="{{ route('categories') }}">Projectors</a>
                                                            </li>
                                                            <li class="pt-1 d-flex w-100">
                                                                <a class="p-0 nav-link animate-underline animate-target d-inline fw-normal text-truncate"
                                                                    href="{{ route('categories') }}">Projection
                                                                    Screens</a>
                                                            </li>
                                                            <li class="pt-1 d-flex w-100">
                                                                <a class="p-0 nav-link animate-underline animate-target d-inline fw-normal text-truncate"
                                                                    href="{{ route('categories') }}">Satelite
                                                                    Television</a>
                                                            </li>
                                                            <li class="pt-1 d-flex w-100">
                                                                <a class="p-0 nav-link animate-underline animate-target d-inline fw-normal text-truncate"
                                                                    href="{{ route('categories') }}">TV-DTD
                                                                    Combos</a>
                                                            </li>
                                                            <li class="pt-1 d-flex w-100">
                                                                <a class="p-0 nav-link animate-underline animate-target d-inline fw-normal text-truncate"
                                                                    href="{{ route('categories') }}">Sound
                                                                    Systems</a>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                    <div style="min-width: 194px">
                                                        <ul class="gap-2 mt-2 nav flex-column mt-lg-0">
                                                            <li class="pt-1 d-flex w-100">
                                                                <a class="p-0 nav-link animate-underline animate-target d-inline fw-normal text-truncate"
                                                                    href="{{ route('categories') }}">Home
                                                                    Cinema Systems</a>
                                                            </li>
                                                            <li class="pt-1 d-flex w-100">
                                                                <a class="p-0 nav-link animate-underline animate-target d-inline fw-normal text-truncate"
                                                                    href="{{ route('categories') }}">Streaming
                                                                    Media Players</a>
                                                            </li>
                                                            <li class="pt-1 d-flex w-100">
                                                                <a class="p-0 nav-link animate-underline animate-target d-inline fw-normal text-truncate"
                                                                    href="{{ route('categories') }}">VCRs</a>
                                                            </li>
                                                            <li class="pt-1 d-flex w-100">
                                                                <a class="p-0 nav-link animate-underline animate-target d-inline fw-normal text-truncate"
                                                                    href="{{ route('categories') }}">Video
                                                                    Glasses</a>
                                                            </li>
                                                            <li class="pt-1 d-flex w-100">
                                                                <a class="p-0 nav-link animate-underline animate-target d-inline fw-normal text-truncate"
                                                                    href="{{ route('categories') }}">Lens
                                                                    Attachments</a>
                                                            </li>
                                                            <li class="pt-1 d-flex w-100">
                                                                <a class="p-0 nav-link animate-underline animate-target d-inline fw-normal text-truncate"
                                                                    href="{{ route('categories') }}">Subwoofers</a>
                                                            </li>
                                                            <li class="pt-1 d-flex w-100">
                                                                <a class="p-0 nav-link animate-underline animate-target d-inline fw-normal text-truncate"
                                                                    href="{{ route('categories') }}">Sound
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
                                                                    href="{{ route('categories') }}">Shop
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
                                                    href="{{ route('categories') }}">
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
                                                                href="{{ route('categories') }}">Speakers</a>
                                                        </div>
                                                        <ul class="gap-2 nav flex-column mt-n2">
                                                            <li class="pt-1 d-flex w-100">
                                                                <a class="p-0 nav-link animate-underline animate-target d-inline fw-normal text-truncate"
                                                                    href="{{ route('categories') }}">Smart
                                                                    Speakers</a>
                                                            </li>
                                                            <li class="pt-1 d-flex w-100">
                                                                <a class="p-0 nav-link animate-underline animate-target d-inline fw-normal text-truncate"
                                                                    href="{{ route('categories') }}">Bluetooth
                                                                    Speakers</a>
                                                            </li>
                                                            <li class="pt-1 d-flex w-100">
                                                                <a class="p-0 nav-link animate-underline animate-target d-inline fw-normal text-truncate"
                                                                    href="{{ route('categories') }}">Bookshelf
                                                                    Speakers</a>
                                                            </li>
                                                            <li class="pt-1 d-flex w-100">
                                                                <a class="p-0 nav-link animate-underline animate-target d-inline fw-normal text-truncate"
                                                                    href="{{ route('categories') }}">Ceiling
                                                                    &amp; In-Wall Speakers</a>
                                                            </li>
                                                            <li class="pt-1 d-flex w-100">
                                                                <a class="p-0 nav-link animate-underline animate-target d-inline fw-normal text-truncate"
                                                                    href="{{ route('categories') }}">Center-Channel
                                                                    Speakers</a>
                                                            </li>
                                                            <li class="pt-1 d-flex w-100">
                                                                <a class="p-0 nav-link animate-underline animate-target d-inline fw-normal text-truncate"
                                                                    href="{{ route('categories') }}">Floorstanding
                                                                    Speakers</a>
                                                            </li>
                                                            <li class="pt-1 d-flex w-100">
                                                                <a class="p-0 nav-link animate-underline animate-target d-inline fw-normal text-truncate"
                                                                    href="{{ route('categories') }}">Outdoor
                                                                    Speakers</a>
                                                            </li>
                                                            <li class="pt-1 d-flex w-100">
                                                                <a class="p-0 nav-link animate-underline animate-target d-inline fw-normal text-truncate"
                                                                    href="{{ route('categories') }}">Satellite
                                                                    Speakers</a>
                                                            </li>
                                                            <li class="pt-1 d-flex w-100">
                                                                <a class="p-0 nav-link animate-underline animate-target d-inline fw-normal text-truncate"
                                                                    href="{{ route('categories') }}">Sound
                                                                    Bars</a>
                                                            </li>
                                                            <li class="pt-1 d-flex w-100">
                                                                <a class="p-0 nav-link animate-underline animate-target d-inline fw-normal text-truncate"
                                                                    href="{{ route('categories') }}">Surround
                                                                    Sound Systems</a>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                    <div style="min-width: 194px">
                                                        <div class="d-flex w-100">
                                                            <a class="animate-underline animate-target d-inline h6 text-dark-emphasis text-decoration-none text-truncate"
                                                                href="{{ route('categories') }}">Home Audio</a>
                                                        </div>
                                                        <ul class="gap-2 nav flex-column mt-n2">
                                                            <li class="pt-1 d-flex w-100">
                                                                <a class="p-0 nav-link animate-underline animate-target d-inline fw-normal text-truncate"
                                                                    href="{{ route('categories') }}">Home
                                                                    Theater</a>
                                                            </li>
                                                            <li class="pt-1 d-flex w-100">
                                                                <a class="p-0 nav-link animate-underline animate-target d-inline fw-normal text-truncate"
                                                                    href="{{ route('categories') }}">Wireless
                                                                    &amp; Streaming Audio</a>
                                                            </li>
                                                            <li class="pt-1 d-flex w-100">
                                                                <a class="p-0 nav-link animate-underline animate-target d-inline fw-normal text-truncate"
                                                                    href="{{ route('categories') }}">Stereo
                                                                    System Components</a>
                                                            </li>
                                                            <li class="pt-1 d-flex w-100">
                                                                <a class="p-0 nav-link animate-underline animate-target d-inline fw-normal text-truncate"
                                                                    href="{{ route('categories') }}">Compact
                                                                    Radios &amp; Stereos</a>
                                                            </li>
                                                            <li class="pt-1 d-flex w-100">
                                                                <a class="p-0 nav-link animate-underline animate-target d-inline fw-normal text-truncate"
                                                                    href="{{ route('categories') }}">Home Audio
                                                                    Accessories</a>
                                                            </li>
                                                            <li class="pt-1 d-flex w-100">
                                                                <a class="p-0 nav-link animate-underline animate-target d-inline fw-normal text-truncate"
                                                                    href="{{ route('categories') }}">Subwoofers</a>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                    <div class="d-none d-lg-block">
                                                        <div class="d-none d-xl-block" style="width: 284px"></div>
                                                        <div class="d-xl-none" style="width: 240px"></div>
                                                        <div
                                                            class="px-3 py-4 position-relative d-flex flex-column justify-content-center h-100 bg-body-secondary rounded-5">
                                                            <div class="px-2 text-center">
                                                                <i class="mb-3 ci-google fs-2 text-dark-emphasis"></i>
                                                                <div class="mb-2 fs-sm text-light-emphasis">Deal of
                                                                    the week</div>
                                                                <div class="mb-4 h2">Nest Audio</div>
                                                            </div>
                                                            <img src="assets/img/mega-menu/electronics/04.png"
                                                                width="252" alt="Nest Audio">
                                                            <div class="mt-4 text-center">
                                                                <a class="btn btn-sm btn-primary stretched-link"
                                                                    href="{{ route('categories') }}">Shop
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
                                                    href="{{ route('categories') }}">
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
                                                                href="{{ route('categories') }}">Cameras &amp;
                                                                Lenses</a>
                                                        </div>
                                                        <ul class="gap-2 nav flex-column mt-n2">
                                                            <li class="pt-1 d-flex w-100">
                                                                <a class="p-0 nav-link animate-underline animate-target d-inline fw-normal text-truncate"
                                                                    href="{{ route('categories') }}">Point
                                                                    &amp; Shoot Cameras</a>
                                                            </li>
                                                            <li class="pt-1 d-flex w-100">
                                                                <a class="p-0 nav-link animate-underline animate-target d-inline fw-normal text-truncate"
                                                                    href="{{ route('categories') }}">DSLR
                                                                    Cameras</a>
                                                            </li>
                                                            <li class="pt-1 d-flex w-100">
                                                                <a class="p-0 nav-link animate-underline animate-target d-inline fw-normal text-truncate"
                                                                    href="{{ route('categories') }}">Mirrorless
                                                                    Cameras</a>
                                                            </li>
                                                            <li class="pt-1 d-flex w-100">
                                                                <a class="p-0 nav-link animate-underline animate-target d-inline fw-normal text-truncate"
                                                                    href="{{ route('categories') }}">Body
                                                                    Mounted Cameras</a>
                                                            </li>
                                                            <li class="pt-1 d-flex w-100">
                                                                <a class="p-0 nav-link animate-underline animate-target d-inline fw-normal text-truncate"
                                                                    href="{{ route('categories') }}">Camcorders</a>
                                                            </li>
                                                            <li class="pt-1 d-flex w-100">
                                                                <a class="p-0 nav-link animate-underline animate-target d-inline fw-normal text-truncate"
                                                                    href="{{ route('categories') }}">Camcorder
                                                                    Lenses</a>
                                                            </li>
                                                            <li class="pt-1 d-flex w-100">
                                                                <a class="p-0 nav-link animate-underline animate-target d-inline fw-normal text-truncate"
                                                                    href="{{ route('categories') }}">Camera
                                                                    Lenses</a>
                                                            </li>
                                                            <li class="pt-1 d-flex w-100">
                                                                <a class="p-0 nav-link animate-underline animate-target d-inline fw-normal text-truncate"
                                                                    href="{{ route('categories') }}">Macro
                                                                    &amp; Ringlight Flashes</a>
                                                            </li>
                                                            <li class="pt-1 d-flex w-100">
                                                                <a class="p-0 nav-link animate-underline animate-target d-inline fw-normal text-truncate"
                                                                    href="{{ route('categories') }}">Shoe
                                                                    Mount Flashes</a>
                                                            </li>
                                                            <li class="pt-1 d-flex w-100">
                                                                <a class="p-0 nav-link animate-underline animate-target d-inline fw-normal text-truncate"
                                                                    href="{{ route('categories') }}">Tripods
                                                                    &amp; Monopods</a>
                                                            </li>
                                                            <li class="pt-1 d-flex w-100">
                                                                <a class="p-0 nav-link animate-underline animate-target d-inline fw-normal text-truncate"
                                                                    href="{{ route('categories') }}">Video
                                                                    Studio</a>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                    <div style="min-width: 194px">
                                                        <div class="d-flex w-100">
                                                            <a class="animate-underline animate-target d-inline h6 text-dark-emphasis text-decoration-none text-truncate"
                                                                href="{{ route('categories') }}">Accessories</a>
                                                        </div>
                                                        <ul class="gap-2 nav flex-column mt-n2">
                                                            <li class="pt-1 d-flex w-100">
                                                                <a class="p-0 nav-link animate-underline animate-target d-inline fw-normal text-truncate"
                                                                    href="{{ route('categories') }}">Bags
                                                                    &amp; Cases</a>
                                                            </li>
                                                            <li class="pt-1 d-flex w-100">
                                                                <a class="p-0 nav-link animate-underline animate-target d-inline fw-normal text-truncate"
                                                                    href="{{ route('categories') }}">Binoculars
                                                                    &amp; Scopes</a>
                                                            </li>
                                                            <li class="pt-1 d-flex w-100">
                                                                <a class="p-0 nav-link animate-underline animate-target d-inline fw-normal text-truncate"
                                                                    href="{{ route('categories') }}">Batteries
                                                                    &amp; Chargers</a>
                                                            </li>
                                                            <li class="pt-1 d-flex w-100">
                                                                <a class="p-0 nav-link animate-underline animate-target d-inline fw-normal text-truncate"
                                                                    href="{{ route('categories') }}">Cables
                                                                    &amp; Cords</a>
                                                            </li>
                                                            <li class="pt-1 d-flex w-100">
                                                                <a class="p-0 nav-link animate-underline animate-target d-inline fw-normal text-truncate"
                                                                    href="{{ route('categories') }}">Camcorder
                                                                    Accessories</a>
                                                            </li>
                                                            <li class="pt-1 d-flex w-100">
                                                                <a class="p-0 nav-link animate-underline animate-target d-inline fw-normal text-truncate"
                                                                    href="{{ route('categories') }}">Cleaning
                                                                    Equipment</a>
                                                            </li>
                                                            <li class="pt-1 d-flex w-100">
                                                                <a class="p-0 nav-link animate-underline animate-target d-inline fw-normal text-truncate"
                                                                    href="{{ route('categories') }}">Protector
                                                                    Foils</a>
                                                            </li>
                                                            <li class="pt-1 d-flex w-100">
                                                                <a class="p-0 nav-link animate-underline animate-target d-inline fw-normal text-truncate"
                                                                    href="{{ route('categories') }}">Filters
                                                                    &amp; Accessories</a>
                                                            </li>
                                                            <li class="pt-1 d-flex w-100">
                                                                <a class="p-0 nav-link animate-underline animate-target d-inline fw-normal text-truncate"
                                                                    href="{{ route('categories') }}">Remote
                                                                    Controls</a>
                                                            </li>
                                                            <li class="pt-1 d-flex w-100">
                                                                <a class="p-0 nav-link animate-underline animate-target d-inline fw-normal text-truncate"
                                                                    href="{{ route('categories') }}">Rain
                                                                    Covers</a>
                                                            </li>
                                                            <li class="pt-1 d-flex w-100">
                                                                <a class="p-0 nav-link animate-underline animate-target d-inline fw-normal text-truncate"
                                                                    href="{{ route('categories') }}">Viewfinders</a>
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
                                                                    href="{{ route('categories') }}">Shop
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
                                                    href="{{ route('categories') }}">
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
                                                                href="{{ route('categories') }}">By type</a>
                                                        </div>
                                                        <ul class="gap-2 nav flex-column mt-n2">
                                                            <li class="pt-1 d-flex w-100">
                                                                <a class="p-0 nav-link animate-underline animate-target d-inline fw-normal text-truncate"
                                                                    href="{{ route('categories') }}">All-in-One</a>
                                                            </li>
                                                            <li class="pt-1 d-flex w-100">
                                                                <a class="p-0 nav-link animate-underline animate-target d-inline fw-normal text-truncate"
                                                                    href="{{ route('categories') }}">Copying</a>
                                                            </li>
                                                            <li class="pt-1 d-flex w-100">
                                                                <a class="p-0 nav-link animate-underline animate-target d-inline fw-normal text-truncate"
                                                                    href="{{ route('categories') }}">Faxing</a>
                                                            </li>
                                                            <li class="pt-1 d-flex w-100">
                                                                <a class="p-0 nav-link animate-underline animate-target d-inline fw-normal text-truncate"
                                                                    href="{{ route('categories') }}">Photo
                                                                    Printing</a>
                                                            </li>
                                                            <li class="pt-1 d-flex w-100">
                                                                <a class="p-0 nav-link animate-underline animate-target d-inline fw-normal text-truncate"
                                                                    href="{{ route('categories') }}">Printing
                                                                    Only</a>
                                                            </li>
                                                            <li class="pt-1 d-flex w-100">
                                                                <a class="p-0 nav-link animate-underline animate-target d-inline fw-normal text-truncate"
                                                                    href="{{ route('categories') }}">Scanning</a>
                                                            </li>
                                                        </ul>
                                                        <div class="pt-4 d-flex w-100">
                                                            <a class="animate-underline animate-target d-inline h6 text-dark-emphasis text-decoration-none text-truncate"
                                                                href="{{ route('categories') }}">Scanners</a>
                                                        </div>
                                                        <ul class="gap-2 nav flex-column mt-n2">
                                                            <li class="pt-1 d-flex w-100">
                                                                <a class="p-0 nav-link animate-underline animate-target d-inline fw-normal text-truncate"
                                                                    href="{{ route('categories') }}">Business
                                                                    Card Scanners</a>
                                                            </li>
                                                            <li class="pt-1 d-flex w-100">
                                                                <a class="p-0 nav-link animate-underline animate-target d-inline fw-normal text-truncate"
                                                                    href="{{ route('categories') }}">Document
                                                                    Scanners</a>
                                                            </li>
                                                            <li class="pt-1 d-flex w-100">
                                                                <a class="p-0 nav-link animate-underline animate-target d-inline fw-normal text-truncate"
                                                                    href="{{ route('categories') }}">Flatbed
                                                                    &amp; Photo Scanners</a>
                                                            </li>
                                                            <li class="pt-1 d-flex w-100">
                                                                <a class="p-0 nav-link animate-underline animate-target d-inline fw-normal text-truncate"
                                                                    href="{{ route('categories') }}">Slide
                                                                    &amp; Negative Scanners</a>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                    <div style="min-width: 194px">
                                                        <div class="d-flex w-100">
                                                            <a class="animate-underline animate-target d-inline h6 text-dark-emphasis text-decoration-none text-truncate"
                                                                href="{{ route('categories') }}">Printers</a>
                                                        </div>
                                                        <ul class="gap-2 nav flex-column mt-n2">
                                                            <li class="pt-1 d-flex w-100">
                                                                <a class="p-0 nav-link animate-underline animate-target d-inline fw-normal text-truncate"
                                                                    href="{{ route('categories') }}">Dot
                                                                    Matrix Printers</a>
                                                            </li>
                                                            <li class="pt-1 d-flex w-100">
                                                                <a class="p-0 nav-link animate-underline animate-target d-inline fw-normal text-truncate"
                                                                    href="{{ route('categories') }}">Inkjet
                                                                    Printers</a>
                                                            </li>
                                                            <li class="pt-1 d-flex w-100">
                                                                <a class="p-0 nav-link animate-underline animate-target d-inline fw-normal text-truncate"
                                                                    href="{{ route('categories') }}">Label
                                                                    Printers</a>
                                                            </li>
                                                            <li class="pt-1 d-flex w-100">
                                                                <a class="p-0 nav-link animate-underline animate-target d-inline fw-normal text-truncate"
                                                                    href="{{ route('categories') }}">Laser
                                                                    Printers</a>
                                                            </li>
                                                            <li class="pt-1 d-flex w-100">
                                                                <a class="p-0 nav-link animate-underline animate-target d-inline fw-normal text-truncate"
                                                                    href="{{ route('categories') }}">Photo
                                                                    Printers</a>
                                                            </li>
                                                            <li class="pt-1 d-flex w-100">
                                                                <a class="p-0 nav-link animate-underline animate-target d-inline fw-normal text-truncate"
                                                                    href="{{ route('categories') }}">Wide
                                                                    Format Printers</a>
                                                            </li>
                                                            <li class="pt-1 d-flex w-100">
                                                                <a class="p-0 nav-link animate-underline animate-target d-inline fw-normal text-truncate"
                                                                    href="{{ route('categories') }}">Plotter
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
                                                                    href="{{ route('categories') }}">Shop
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
                                                    href="{{ route('categories') }}">
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
                                                                href="{{ route('categories') }}">Charging
                                                                Stations</a>
                                                        </div>
                                                        <ul class="gap-2 nav flex-column mt-n2">
                                                            <li class="pt-1 d-flex w-100">
                                                                <a class="p-0 nav-link animate-underline animate-target d-inline fw-normal text-truncate"
                                                                    href="{{ route('categories') }}">Portable
                                                                    Power Stations</a>
                                                            </li>
                                                            <li class="pt-1 d-flex w-100">
                                                                <a class="p-0 nav-link animate-underline animate-target d-inline fw-normal text-truncate"
                                                                    href="{{ route('categories') }}">Inverter
                                                                    Power Stations</a>
                                                            </li>
                                                            <li class="pt-1 d-flex w-100">
                                                                <a class="p-0 nav-link animate-underline animate-target d-inline fw-normal text-truncate"
                                                                    href="{{ route('categories') }}">Outdoor
                                                                    Generators</a>
                                                            </li>
                                                            <li class="pt-1 d-flex w-100">
                                                                <a class="p-0 nav-link animate-underline animate-target d-inline fw-normal text-truncate"
                                                                    href="{{ route('categories') }}">Gasoline
                                                                    Generators</a>
                                                            </li>
                                                            <li class="pt-1 d-flex w-100">
                                                                <a class="p-0 nav-link animate-underline animate-target d-inline fw-normal text-truncate"
                                                                    href="{{ route('categories') }}">Cell
                                                                    Phone Chargers</a>
                                                            </li>
                                                            <li class="pt-1 d-flex w-100">
                                                                <a class="p-0 nav-link animate-underline animate-target d-inline fw-normal text-truncate"
                                                                    href="{{ route('categories') }}">Power
                                                                    Strips</a>
                                                            </li>
                                                            <li class="pt-1 d-flex w-100">
                                                                <a class="p-0 nav-link animate-underline animate-target d-inline fw-normal text-truncate"
                                                                    href="{{ route('categories') }}">Wall
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
                                                                    href="{{ route('categories') }}">Shop
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
                                                    href="{{ route('categories') }}">
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
                                                                href="{{ route('categories') }}">Headphones</a>
                                                        </div>
                                                        <ul class="gap-2 nav flex-column mt-n2">
                                                            <li class="pt-1 d-flex w-100">
                                                                <a class="p-0 nav-link animate-underline animate-target d-inline fw-normal text-truncate"
                                                                    href="{{ route('categories') }}">Earbud
                                                                    Headphones</a>
                                                            </li>
                                                            <li class="pt-1 d-flex w-100">
                                                                <a class="p-0 nav-link animate-underline animate-target d-inline fw-normal text-truncate"
                                                                    href="{{ route('categories') }}">Over-Ear
                                                                    Headphones</a>
                                                            </li>
                                                            <li class="pt-1 d-flex w-100">
                                                                <a class="p-0 nav-link animate-underline animate-target d-inline fw-normal text-truncate"
                                                                    href="{{ route('categories') }}">On-Ear
                                                                    Headphones</a>
                                                            </li>
                                                            <li class="pt-1 d-flex w-100">
                                                                <a class="p-0 nav-link animate-underline animate-target d-inline fw-normal text-truncate"
                                                                    href="{{ route('categories') }}">Bluetooth
                                                                    Headphones</a>
                                                            </li>
                                                            <li class="pt-1 d-flex w-100">
                                                                <a class="p-0 nav-link animate-underline animate-target d-inline fw-normal text-truncate"
                                                                    href="{{ route('categories') }}">Sports
                                                                    &amp; Fitness</a>
                                                            </li>
                                                            <li class="pt-1 d-flex w-100">
                                                                <a class="p-0 nav-link animate-underline animate-target d-inline fw-normal text-truncate"
                                                                    href="{{ route('categories') }}">Noise-Cancelling</a>
                                                            </li>
                                                        </ul>
                                                        <div class="pt-4 d-flex w-100">
                                                            <a class="animate-underline animate-target d-inline h6 text-dark-emphasis text-decoration-none text-truncate"
                                                                href="{{ route('categories') }}">Accessories</a>
                                                        </div>
                                                        <ul class="gap-2 nav flex-column mt-n2">
                                                            <li class="pt-1 d-flex w-100">
                                                                <a class="p-0 nav-link animate-underline animate-target d-inline fw-normal text-truncate"
                                                                    href="{{ route('categories') }}">Cases
                                                                    &amp; Sleeves</a>
                                                            </li>
                                                            <li class="pt-1 d-flex w-100">
                                                                <a class="p-0 nav-link animate-underline animate-target d-inline fw-normal text-truncate"
                                                                    href="{{ route('categories') }}">Cables
                                                                    &amp; Cords</a>
                                                            </li>
                                                            <li class="pt-1 d-flex w-100">
                                                                <a class="p-0 nav-link animate-underline animate-target d-inline fw-normal text-truncate"
                                                                    href="{{ route('categories') }}">Ear
                                                                    Pads</a>
                                                            </li>
                                                            <li class="pt-1 d-flex w-100">
                                                                <a class="p-0 nav-link animate-underline animate-target d-inline fw-normal text-truncate"
                                                                    href="{{ route('categories') }}">Repair
                                                                    Kits</a>
                                                            </li>
                                                            <li class="pt-1 d-flex w-100">
                                                                <a class="p-0 nav-link animate-underline animate-target d-inline fw-normal text-truncate"
                                                                    href="{{ route('categories') }}">Cleaning
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
                                                                    href="{{ route('categories') }}">Shop
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
                                                    href="{{ route('categories') }}">
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
                                                                href="{{ route('categories') }}">Wearable
                                                                Gadgets</a>
                                                        </div>
                                                        <ul class="gap-2 nav flex-column mt-n2">
                                                            <li class="pt-1 d-flex w-100">
                                                                <a class="p-0 nav-link animate-underline animate-target d-inline fw-normal text-truncate"
                                                                    href="{{ route('categories') }}">Smartwatches</a>
                                                            </li>
                                                            <li class="pt-1 d-flex w-100">
                                                                <a class="p-0 nav-link animate-underline animate-target d-inline fw-normal text-truncate"
                                                                    href="{{ route('categories') }}">Fitness
                                                                    Trackers</a>
                                                            </li>
                                                            <li class="pt-1 d-flex w-100">
                                                                <a class="p-0 nav-link animate-underline animate-target d-inline fw-normal text-truncate"
                                                                    href="{{ route('categories') }}">Smart
                                                                    Glasses</a>
                                                            </li>
                                                            <li class="pt-1 d-flex w-100">
                                                                <a class="p-0 nav-link animate-underline animate-target d-inline fw-normal text-truncate"
                                                                    href="{{ route('categories') }}">Rings</a>
                                                            </li>
                                                            <li class="pt-1 d-flex w-100">
                                                                <a class="p-0 nav-link animate-underline animate-target d-inline fw-normal text-truncate"
                                                                    href="{{ route('categories') }}">Virtual
                                                                    Reality</a>
                                                            </li>
                                                            <li class="pt-1 d-flex w-100">
                                                                <a class="p-0 nav-link animate-underline animate-target d-inline fw-normal text-truncate"
                                                                    href="{{ route('categories') }}">Clips,
                                                                    Arm &amp; Wristbands</a>
                                                            </li>
                                                            <li class="pt-1 d-flex w-100">
                                                                <a class="p-0 nav-link animate-underline animate-target d-inline fw-normal text-truncate"
                                                                    href="{{ route('categories') }}">Accessories</a>
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
                                                                <i class="mb-3 ci-google fs-2 text-dark-emphasis"></i>
                                                                <div class="mb-2 fs-sm text-light-emphasis">Deal
                                                                    of the week</div>
                                                                <div class="mb-4 h2">Pixel Watch</div>
                                                            </div>
                                                            <img src="assets/img/mega-menu/electronics/09.png"
                                                                width="252" alt="Pixel Watch">
                                                            <div class="mt-4 text-center">
                                                                <a class="btn btn-sm btn-primary stretched-link"
                                                                    href="{{ route('categories') }}">Shop
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
                                                    href="{{ route('categories') }}">
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
                                                                href="{{ route('categories') }}">Powerbanks</a>
                                                        </div>
                                                        <ul class="gap-2 nav flex-column mt-n2">
                                                            <li class="pt-1 d-flex w-100">
                                                                <a class="p-0 nav-link animate-underline animate-target d-inline fw-normal text-truncate"
                                                                    href="{{ route('categories') }}">Fast
                                                                    Charging</a>
                                                            </li>
                                                            <li class="pt-1 d-flex w-100">
                                                                <a class="p-0 nav-link animate-underline animate-target d-inline fw-normal text-truncate"
                                                                    href="{{ route('categories') }}">Built In
                                                                    Cable</a>
                                                            </li>
                                                            <li class="pt-1 d-flex w-100">
                                                                <a class="p-0 nav-link animate-underline animate-target d-inline fw-normal text-truncate"
                                                                    href="{{ route('categories') }}">Built In
                                                                    Wall Plug</a>
                                                            </li>
                                                            <li class="pt-1 d-flex w-100">
                                                                <a class="p-0 nav-link animate-underline animate-target d-inline fw-normal text-truncate"
                                                                    href="{{ route('categories') }}">LED
                                                                    Indicator Lights</a>
                                                            </li>
                                                            <li class="pt-1 d-flex w-100">
                                                                <a class="p-0 nav-link animate-underline animate-target d-inline fw-normal text-truncate"
                                                                    href="{{ route('categories') }}">Pocket
                                                                    Size</a>
                                                            </li>
                                                            <li class="pt-1 d-flex w-100">
                                                                <a class="p-0 nav-link animate-underline animate-target d-inline fw-normal text-truncate"
                                                                    href="{{ route('categories') }}">Wireless
                                                                    Charging</a>
                                                            </li>
                                                            <li class="pt-1 d-flex w-100">
                                                                <a class="p-0 nav-link animate-underline animate-target d-inline fw-normal text-truncate"
                                                                    href="{{ route('categories') }}">Short
                                                                    Circuit Protection</a>
                                                            </li>
                                                            <li class="pt-1 d-flex w-100">
                                                                <a class="p-0 nav-link animate-underline animate-target d-inline fw-normal text-truncate"
                                                                    href="{{ route('categories') }}">Scratch
                                                                    Resistant</a>
                                                            </li>
                                                            <li class="pt-1 d-flex w-100">
                                                                <a class="p-0 nav-link animate-underline animate-target d-inline fw-normal text-truncate"
                                                                    href="{{ route('categories') }}">Flashlight</a>
                                                            </li>
                                                            <li class="pt-1 d-flex w-100">
                                                                <a class="p-0 nav-link animate-underline animate-target d-inline fw-normal text-truncate"
                                                                    href="{{ route('categories') }}">Lightweight</a>
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
                                                                    href="{{ route('categories') }}">Shop
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
                                                    href="{{ route('categories') }}">
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
                                                                href="{{ route('categories') }}">Data
                                                                Storage</a>
                                                        </div>
                                                        <ul class="gap-2 nav flex-column mt-n2">
                                                            <li class="pt-1 d-flex w-100">
                                                                <a class="p-0 nav-link animate-underline animate-target d-inline fw-normal text-truncate"
                                                                    href="{{ route('categories') }}">External
                                                                    Hard Drives</a>
                                                            </li>
                                                            <li class="pt-1 d-flex w-100">
                                                                <a class="p-0 nav-link animate-underline animate-target d-inline fw-normal text-truncate"
                                                                    href="{{ route('categories') }}">External
                                                                    SSD</a>
                                                            </li>
                                                            <li class="pt-1 d-flex w-100">
                                                                <a class="p-0 nav-link animate-underline animate-target d-inline fw-normal text-truncate"
                                                                    href="{{ route('categories') }}">External
                                                                    Zip Drives</a>
                                                            </li>
                                                            <li class="pt-1 d-flex w-100">
                                                                <a class="p-0 nav-link animate-underline animate-target d-inline fw-normal text-truncate"
                                                                    href="{{ route('categories') }}">Floppy
                                                                    &amp; Tape Drives</a>
                                                            </li>
                                                            <li class="pt-1 d-flex w-100">
                                                                <a class="p-0 nav-link animate-underline animate-target d-inline fw-normal text-truncate"
                                                                    href="{{ route('categories') }}">Internal
                                                                    Hard Drives</a>
                                                            </li>
                                                            <li class="pt-1 d-flex w-100">
                                                                <a class="p-0 nav-link animate-underline animate-target d-inline fw-normal text-truncate"
                                                                    href="{{ route('categories') }}">Internal
                                                                    SSD</a>
                                                            </li>
                                                            <li class="pt-1 d-flex w-100">
                                                                <a class="p-0 nav-link animate-underline animate-target d-inline fw-normal text-truncate"
                                                                    href="{{ route('categories') }}">Network
                                                                    Attached Storage</a>
                                                            </li>
                                                            <li class="pt-1 d-flex w-100">
                                                                <a class="p-0 nav-link animate-underline animate-target d-inline fw-normal text-truncate"
                                                                    href="{{ route('categories') }}">USB Flash
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
                                                                    href="{{ route('categories') }}">Shop
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
                                                    href="{{ route('categories') }}">
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
                                                                href="{{ route('categories') }}">Games &amp;
                                                                Hardware</a>
                                                        </div>
                                                        <ul class="gap-2 nav flex-column mt-n2">
                                                            <li class="pt-1 d-flex w-100">
                                                                <a class="p-0 nav-link animate-underline animate-target d-inline fw-normal text-truncate"
                                                                    href="{{ route('categories') }}">Video
                                                                    Games</a>
                                                            </li>
                                                            <li class="pt-1 d-flex w-100">
                                                                <a class="p-0 nav-link animate-underline animate-target d-inline fw-normal text-truncate"
                                                                    href="{{ route('categories') }}">PlayStation
                                                                    5</a>
                                                            </li>
                                                            <li class="pt-1 d-flex w-100">
                                                                <a class="p-0 nav-link animate-underline animate-target d-inline fw-normal text-truncate"
                                                                    href="{{ route('categories') }}">PlayStation
                                                                    4</a>
                                                            </li>
                                                            <li class="pt-1 d-flex w-100">
                                                                <a class="p-0 nav-link animate-underline animate-target d-inline fw-normal text-truncate"
                                                                    href="{{ route('categories') }}">Xbox
                                                                    Series X</a>
                                                            </li>
                                                            <li class="pt-1 d-flex w-100">
                                                                <a class="p-0 nav-link animate-underline animate-target d-inline fw-normal text-truncate"
                                                                    href="{{ route('categories') }}">Xbox
                                                                    Series S</a>
                                                            </li>
                                                            <li class="pt-1 d-flex w-100">
                                                                <a class="p-0 nav-link animate-underline animate-target d-inline fw-normal text-truncate"
                                                                    href="{{ route('categories') }}">Nintendo
                                                                    Switch</a>
                                                            </li>
                                                            <li class="pt-1 d-flex w-100">
                                                                <a class="p-0 nav-link animate-underline animate-target d-inline fw-normal text-truncate"
                                                                    href="{{ route('categories') }}">Gaming
                                                                    PC</a>
                                                            </li>
                                                            <li class="pt-1 d-flex w-100">
                                                                <a class="p-0 nav-link animate-underline animate-target d-inline fw-normal text-truncate"
                                                                    href="{{ route('categories') }}">Gaming
                                                                    Laptops</a>
                                                            </li>
                                                            <li class="pt-1 d-flex w-100">
                                                                <a class="p-0 nav-link animate-underline animate-target d-inline fw-normal text-truncate"
                                                                    href="{{ route('categories') }}">Wii U</a>
                                                            </li>
                                                            <li class="pt-1 d-flex w-100">
                                                                <a class="p-0 nav-link animate-underline animate-target d-inline fw-normal text-truncate"
                                                                    href="{{ route('categories') }}">Wii</a>
                                                            </li>
                                                            <li class="pt-1 d-flex w-100">
                                                                <a class="p-0 nav-link animate-underline animate-target d-inline fw-normal text-truncate"
                                                                    href="{{ route('categories') }}">Nintendo
                                                                    3DS</a>
                                                            </li>
                                                            <li class="pt-1 d-flex w-100">
                                                                <a class="p-0 nav-link animate-underline animate-target d-inline fw-normal text-truncate"
                                                                    href="{{ route('categories') }}">Nintendo
                                                                    2DS</a>
                                                            </li>
                                                            <li class="pt-1 d-flex w-100">
                                                                <a class="p-0 nav-link animate-underline animate-target d-inline fw-normal text-truncate"
                                                                    href="{{ route('categories') }}">Nintendo
                                                                    DS</a>
                                                            </li>
                                                            <li class="pt-1 d-flex w-100">
                                                                <a class="p-0 nav-link animate-underline animate-target d-inline fw-normal text-truncate"
                                                                    href="{{ route('categories') }}">Wii</a>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                    <div style="min-width: 194px">
                                                        <ul class="gap-2 mt-2 nav flex-column mt-lg-0">
                                                            <li class="pt-1 d-flex w-100">
                                                                <a class="p-0 nav-link animate-underline animate-target d-inline fw-normal text-truncate"
                                                                    href="{{ route('categories') }}">Mac</a>
                                                            </li>
                                                            <li class="pt-1 d-flex w-100">
                                                                <a class="p-0 nav-link animate-underline animate-target d-inline fw-normal text-truncate"
                                                                    href="{{ route('categories') }}">PlayStation
                                                                    Vita</a>
                                                            </li>
                                                            <li class="pt-1 d-flex w-100">
                                                                <a class="p-0 nav-link animate-underline animate-target d-inline fw-normal text-truncate"
                                                                    href="{{ route('categories') }}">Sony
                                                                    PSP</a>
                                                            </li>
                                                            <li class="pt-1 d-flex w-100">
                                                                <a class="p-0 nav-link animate-underline animate-target d-inline fw-normal text-truncate"
                                                                    href="{{ route('categories') }}">Retro
                                                                    Gaming</a>
                                                            </li>
                                                            <li class="pt-1 d-flex w-100">
                                                                <a class="p-0 nav-link animate-underline animate-target d-inline fw-normal text-truncate"
                                                                    href="{{ route('categories') }}">Microconsoles</a>
                                                            </li>
                                                            <li class="pt-1 d-flex w-100">
                                                                <a class="p-0 nav-link animate-underline animate-target d-inline fw-normal text-truncate"
                                                                    href="{{ route('categories') }}">Controllers</a>
                                                            </li>
                                                            <li class="pt-1 d-flex w-100">
                                                                <a class="p-0 nav-link animate-underline animate-target d-inline fw-normal text-truncate"
                                                                    href="{{ route('categories') }}">Accessories</a>
                                                            </li>
                                                            <li class="pt-1 d-flex w-100">
                                                                <a class="p-0 nav-link animate-underline animate-target d-inline fw-normal text-truncate"
                                                                    href="{{ route('categories') }}">Digital
                                                                    Games Screens</a>
                                                            </li>
                                                            <li class="pt-1 d-flex w-100">
                                                                <a class="p-0 nav-link animate-underline animate-target d-inline fw-normal text-truncate"
                                                                    href="{{ route('categories') }}">Game
                                                                    Pass</a>
                                                            </li>
                                                            <li class="pt-1 d-flex w-100">
                                                                <a class="p-0 nav-link animate-underline animate-target d-inline fw-normal text-truncate"
                                                                    href="{{ route('categories') }}">PlayStation
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
                                                                    href="{{ route('categories') }}">Shop
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
                        <div class="pt-3 col-lg-9 d-lg-flex pt-lg-0 ps-lg-0">
                            <ul class="navbar-nav position-relative">
                                <li class="nav-item dropdown me-lg-n1 me-xl-0">
                                    <a class="nav-link dropdown-toggle" href="#" role="button"
                                        data-bs-toggle="dropdown" data-bs-trigger="hover"
                                        aria-expanded="false">Home</a>
                                    <ul class="dropdown-menu">
                                        <li class="px-2 hover-effect-opacity mx-n2">
                                            <a class="mb-0 dropdown-item d-block"
                                                href="{{ route('homepage.view') }}">
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

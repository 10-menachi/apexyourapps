@extends('layouts.account')

@section('title', 'Products')

@section('content')
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
                        data-bs-toggle="collapse" data-bs-target="#offers" aria-expanded="false" aria-controls="offers">
                        <span class="d-inline-flex ci-percent fs-lg text-danger rounded-circle me-2"></span>
                        <span class="me-2">See latest offers</span>
                    </button>
                </div>
                <div class="accordion-collapse collapse d-md-block" id="offers" aria-labelledby="offersHeading">
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
                                <div class="position-relative z-1 w-100 align-self-end order-sm-1" style="max-width: 416px">
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
                                <a class="position-relative z-1 d-block w-100" href="shop-product-general-electronics.html">
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
                                            <span class="animate-target text-truncate me-3">Wearable Electronics</span>
                                            <span class="text-body-secondary fs-xs ms-auto">142</span>
                                        </a>
                                    </li>
                                    <li class="pt-2 mt-1 nav d-block">
                                        <a class="p-0 nav-link animate-underline fw-normal" href="#!">
                                            <span class="animate-target text-truncate me-3">Computers &amp; Laptops</span>
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
                                            <input type="number" class="form-control form-icon-start" min="0"
                                                data-range-slider-min="">
                                        </div>
                                        <i class="mx-2 ci-minus text-body-emphasis"></i>
                                        <div class="position-relative w-50">
                                            <i
                                                class="ci-dollar-sign position-absolute top-50 start-0 translate-middle-y ms-3"></i>
                                            <input type="number" class="form-control form-icon-start" min="0"
                                                data-range-slider-max="">
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
                                            <label for="asus" class="form-check-label text-body-emphasis">Asus</label>
                                        </div>
                                        <span class="text-body-secondary fs-xs">310</span>
                                    </div>
                                    <div class="d-flex align-items-center justify-content-between">
                                        <div class="form-check">
                                            <input type="checkbox" class="form-check-input" id="bao">
                                            <label for="bao" class="form-check-label text-body-emphasis">Bang &amp;
                                                Olufsen</label>
                                        </div>
                                        <span class="text-body-secondary fs-xs">47</span>
                                    </div>
                                    <div class="d-flex align-items-center justify-content-between">
                                        <div class="form-check">
                                            <input type="checkbox" class="form-check-input" id="bosh">
                                            <label for="bosh" class="form-check-label text-body-emphasis">Bosh</label>
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
                                            <label for="dell" class="form-check-label text-body-emphasis">Dell</label>
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
                                                    <span class="animate-target me-2" data-label-collapsed="Show all"
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
                                            <label for="tb-2" class="form-check-label text-body-emphasis">2 TB</label>
                                        </div>
                                        <span class="text-body-secondary fs-xs">13</span>
                                    </div>
                                    <div class="d-flex align-items-center justify-content-between">
                                        <div class="form-check">
                                            <input type="checkbox" class="form-check-input" id="tb-1">
                                            <label for="tb-1" class="form-check-label text-body-emphasis">1 TB</label>
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
                                            <label for="gb-64" class="form-check-label text-body-emphasis">64 GB or
                                                less</label>
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
                                    <div class="top-0 mt-3 opacity-0 position-absolute end-0 z-2 hover-effect-target me-3">
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
                                            data-bs-toggle="dropdown" aria-expanded="false" aria-label="More actions">
                                            <i class="ci-more-vertical fs-lg"></i>
                                        </button>
                                        <ul class="p-2 dropdown-menu dropdown-menu-end fs-xs" style="min-width: auto">
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
                                            <span class="text-dark-emphasis fs-xs fw-medium text-end">OLED 1440x1600</span>
                                        </li>
                                        <li class="d-flex align-items-center">
                                            <span class="fs-xs">Graphics:</span>
                                            <span
                                                class="px-1 mx-2 mt-2 border-dashed d-block flex-grow-1 border-bottom"></span>
                                            <span class="text-dark-emphasis fs-xs fw-medium text-end">Adreno 540</span>
                                        </li>
                                        <li class="d-flex align-items-center">
                                            <span class="fs-xs">Sound:</span>
                                            <span
                                                class="px-1 mx-2 mt-2 border-dashed d-block flex-grow-1 border-bottom"></span>
                                            <span class="text-dark-emphasis fs-xs fw-medium text-end">2x3.5mm jack</span>
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
                                    <div class="top-0 mt-3 opacity-0 position-absolute end-0 z-2 hover-effect-target me-3">
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
                                            data-bs-toggle="dropdown" aria-expanded="false" aria-label="More actions">
                                            <i class="ci-more-vertical fs-lg"></i>
                                        </button>
                                        <ul class="p-2 dropdown-menu dropdown-menu-end fs-xs" style="min-width: auto">
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
                                            <span class="text-dark-emphasis fs-xs fw-medium text-end">A15 Bionic</span>
                                        </li>
                                        <li class="d-flex align-items-center">
                                            <span class="fs-xs">Camera:</span>
                                            <span
                                                class="px-1 mx-2 mt-2 border-dashed d-block flex-grow-1 border-bottom"></span>
                                            <span class="text-dark-emphasis fs-xs fw-medium text-end">12 + 12 MP</span>
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
                                    <div class="top-0 mt-3 opacity-0 position-absolute end-0 z-2 hover-effect-target me-3">
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
                                            data-bs-toggle="dropdown" aria-expanded="false" aria-label="More actions">
                                            <i class="ci-more-vertical fs-lg"></i>
                                        </button>
                                        <ul class="p-2 dropdown-menu dropdown-menu-end fs-xs" style="min-width: auto">
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
                                            <span class="text-dark-emphasis fs-xs fw-medium text-end">37.0 grams</span>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>

                        <!-- Item -->
                        <div class="col">
                            <div class="rounded product-card animate-underline hover-effect-opacity bg-body">
                                <div class="posittion-relative">
                                    <div class="top-0 mt-3 opacity-0 position-absolute end-0 z-2 hover-effect-target me-3">
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
                                            data-bs-toggle="dropdown" aria-expanded="false" aria-label="More actions">
                                            <i class="ci-more-vertical fs-lg"></i>
                                        </button>
                                        <ul class="p-2 dropdown-menu dropdown-menu-end fs-xs" style="min-width: auto">
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
                                            <span class="text-dark-emphasis fs-xs fw-medium text-end">12 MP Wide</span>
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
                                    <div class="top-0 mt-3 opacity-0 position-absolute end-0 z-2 hover-effect-target me-3">
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
                                            data-bs-toggle="dropdown" aria-expanded="false" aria-label="More actions">
                                            <i class="ci-more-vertical fs-lg"></i>
                                        </button>
                                        <ul class="p-2 dropdown-menu dropdown-menu-end fs-xs" style="min-width: auto">
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
                                            <span class="text-dark-emphasis fs-xs fw-medium text-end">Touch control</span>
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
                                            <span class="text-dark-emphasis fs-xs fw-medium text-end">50.8 grams</span>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>

                        <!-- Item -->
                        <div class="col">
                            <div class="rounded product-card animate-underline hover-effect-opacity bg-body">
                                <div class="position-relative">
                                    <div class="top-0 mt-3 opacity-0 position-absolute end-0 z-2 hover-effect-target me-3">
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
                                            data-bs-toggle="dropdown" aria-expanded="false" aria-label="More actions">
                                            <i class="ci-more-vertical fs-lg"></i>
                                        </button>
                                        <ul class="p-2 dropdown-menu dropdown-menu-end fs-xs" style="min-width: auto">
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
                                            <span class="text-dark-emphasis fs-xs fw-medium text-end">8 GB unified</span>
                                        </li>
                                        <li class="d-flex align-items-center">
                                            <span class="fs-xs">Storage:</span>
                                            <span
                                                class="px-1 mx-2 mt-2 border-dashed d-block flex-grow-1 border-bottom"></span>
                                            <span class="text-dark-emphasis fs-xs fw-medium text-end">256 GB SSD</span>
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
                                    <h3 class="pb-2 mb-1 text-uppercase fw-bold ps-xxl-3">Seasonal weekly sale 2024</h3>
                                    <p class="mb-0 text-body-emphasis ps-xxl-3">Use code <span
                                            class="px-2 py-1 bg-white d-inline-block fw-semibold text-dark rounded-pill">Sale
                                            2024</span> to get best offer</p>
                                </div>
                            </div>
                            <div class="col-md-6 d-flex justify-content-center justify-content-md-end">
                                <div class="me-3 me-lg-4 me-xxl-5">
                                    <img src="assets/img/shop/electronics/banners/iphone-2.png" class="d-block rtl-flip"
                                        width="335" alt="Camera">
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="row row-cols-2 row-cols-md-3 g-4">

                        <!-- Item -->
                        <div class="col">
                            <div class="rounded product-card animate-underline hover-effect-opacity bg-body">
                                <div class="position-relative">
                                    <div class="top-0 mt-3 opacity-0 position-absolute end-0 z-2 hover-effect-target me-3">
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
                                            data-bs-toggle="dropdown" aria-expanded="false" aria-label="More actions">
                                            <i class="ci-more-vertical fs-lg"></i>
                                        </button>
                                        <ul class="p-2 dropdown-menu dropdown-menu-end fs-xs" style="min-width: auto">
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
                                    <div class="top-0 mt-3 opacity-0 position-absolute end-0 z-2 hover-effect-target me-3">
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
                                            data-bs-toggle="dropdown" aria-expanded="false" aria-label="More actions">
                                            <i class="ci-more-vertical fs-lg"></i>
                                        </button>
                                        <ul class="p-2 dropdown-menu dropdown-menu-end fs-xs" style="min-width: auto">
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
                                            <span class="text-dark-emphasis fs-xs fw-medium text-end">12 MP Wide</span>
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
                                            data-bs-toggle="dropdown" aria-expanded="false" aria-label="More actions">
                                            <i class="ci-more-vertical fs-lg"></i>
                                        </button>
                                        <ul class="p-2 dropdown-menu dropdown-menu-end fs-xs" style="min-width: auto">
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
                                            data-bs-toggle="dropdown" aria-expanded="false" aria-label="More actions">
                                            <i class="ci-more-vertical fs-lg"></i>
                                        </button>
                                        <ul class="p-2 dropdown-menu dropdown-menu-end fs-xs" style="min-width: auto">
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
                                            <span class="text-dark-emphasis fs-xs fw-medium text-end">A15 Bionic</span>
                                        </li>
                                        <li class="d-flex align-items-center">
                                            <span class="fs-xs">Camera:</span>
                                            <span
                                                class="px-1 mx-2 mt-2 border-dashed d-block flex-grow-1 border-bottom"></span>
                                            <span class="text-dark-emphasis fs-xs fw-medium text-end">12 + 12 MP</span>
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
                                            data-bs-toggle="dropdown" aria-expanded="false" aria-label="More actions">
                                            <i class="ci-more-vertical fs-lg"></i>
                                        </button>
                                        <ul class="p-2 dropdown-menu dropdown-menu-end fs-xs" style="min-width: auto">
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
                                            <img src="assets/img/shop/electronics/08.png" alt="Bluetooth Headphones">
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
                                            data-bs-toggle="dropdown" aria-expanded="false" aria-label="More actions">
                                            <i class="ci-more-vertical fs-lg"></i>
                                        </button>
                                        <ul class="p-2 dropdown-menu dropdown-menu-end fs-xs" style="min-width: auto">
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
                                            data-bs-toggle="dropdown" aria-expanded="false" aria-label="More actions">
                                            <i class="ci-more-vertical fs-lg"></i>
                                        </button>
                                        <ul class="p-2 dropdown-menu dropdown-menu-end fs-xs" style="min-width: auto">
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
                                            data-bs-toggle="dropdown" aria-expanded="false" aria-label="More actions">
                                            <i class="ci-more-vertical fs-lg"></i>
                                        </button>
                                        <ul class="p-2 dropdown-menu dropdown-menu-end fs-xs" style="min-width: auto">
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
                                            <span class="text-dark-emphasis fs-xs fw-medium text-end">37.0 grams</span>
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
                        <p class="pb-2 text-body pb-ms-3">Receive our latest updates about our products &amp; promotions
                        </p>
                        <form class="pb-1 mb-4 d-flex needs-validation pb-sm-2 pb-md-3 pb-lg-0 mb-lg-5" novalidate="">
                            <div class="position-relative w-100 me-2">
                                <input type="email" class="form-control form-control-lg" placeholder="Your email"
                                    required="">
                            </div>
                            <button type="submit" class="btn btn-lg btn-primary">Subscribe</button>
                        </form>
                        <div class="gap-3 d-flex">
                            <a class="btn btn-icon btn-secondary rounded-circle" href="#!"
                                aria-label="Instagram">
                                <i class="ci-instagram fs-base"></i>
                            </a>
                            <a class="btn btn-icon btn-secondary rounded-circle" href="#!" aria-label="Facebook">
                                <i class="ci-facebook fs-base"></i>
                            </a>
                            <a class="btn btn-icon btn-secondary rounded-circle" href="#!" aria-label="YouTube">
                                <i class="ci-youtube fs-base"></i>
                            </a>
                            <a class="btn btn-icon btn-secondary rounded-circle" href="#!" aria-label="Telegram">
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
                                    <a class="p-0 nav-link fs-sm hover-effect-underline stretched-link" href="#!">5
                                        New Cool Gadgets You Must See on Apex - Cheap Budget</a>
                                </div>
                            </li>
                            <li class="nav flex-nowrap align-items-center position-relative">
                                <img src="assets/img/home/electronics/vlog/02.jpg" class="rounded" width="140"
                                    alt="Video cover">
                                <div class="ps-3">
                                    <div class="mb-2 fs-xs text-body-secondary lh-sm">10:20</div>
                                    <a class="p-0 nav-link fs-sm hover-effect-underline stretched-link" href="#!">5
                                        Super Useful Gadgets on Apex You Must Have in 2023</a>
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
@endsection

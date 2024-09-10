@extends('layouts.account')

@section('title', 'Wishlist')

@section('content')
    <main class="content-wrapper">
        <div class="container py-5 mt-n2 mt-sm-0">
            <div class="row pt-md-2 pt-lg-3 pb-sm-2 pb-md-3 pb-lg-4 pb-xl-5">

                @include('components.account.sidebar')

                <div class="col-lg-9">
                    <div class="ps-lg-3 ps-xl-0">

                        <!-- Page title + Add list button-->
                        <div class="pb-3 mb-1 d-flex align-items-center justify-content-between mb-sm-2 mb-md-3">
                            <h1 class="mb-0 h2 me-3">Wishlist</h1>
                            <div class="nav">
                                <a class="px-0 py-1 nav-link animate-underline py-ms-2" href="#wishlistModal"
                                    data-bs-toggle="modal">
                                    <i class="ci-plus fs-base me-1"></i>
                                    <span class="animate-target">Add wishlist</span>
                                </a>
                            </div>
                        </div>

                        <!-- Wishlist selector -->
                        <div class="pb-4 mb-3 border-bottom">
                            <div class="row align-items-center justify-content-between">
                                <div class="mb-3 col-sm-7 col-md-8 col-xxl-9 d-flex align-items-center mb-sm-0">
                                    <h5 class="mb-0 me-2">Interesting offers</h5>
                                    <div class="dropdown ms-auto ms-sm-0">
                                        <button type="button" class="border-0 btn btn-icon btn-ghost btn-secondary"
                                            id="wishlist-selector" data-bs-toggle="dropdown" data-bs-auto-close="outside"
                                            aria-haspopup="true" aria-expanded="false" aria-label="Select wishlist">
                                            <i class="ci-more-vertical fs-xl"></i>
                                        </button>
                                        <div class="dropdown-menu dropdown-menu-end">
                                            <div class="gap-1 mb-2 d-flex flex-column">
                                                <div class="form-check">
                                                    <input type="radio" class="form-check-input" id="wishlist-1"
                                                        name="wishlist" checked="">
                                                    <label for="wishlist-1" class="form-check-label text-body">Interesting
                                                        offers</label>
                                                </div>
                                                <div class="form-check">
                                                    <input type="radio" class="form-check-input" id="wishlist-2"
                                                        name="wishlist">
                                                    <label for="wishlist-2" class="form-check-label text-body">Top picks
                                                        collection</label>
                                                </div>
                                                <div class="form-check">
                                                    <input type="radio" class="form-check-input" id="wishlist-3"
                                                        name="wishlist">
                                                    <label for="wishlist-3" class="form-check-label text-body">Family
                                                        stuff</label>
                                                </div>
                                                <div class="form-check">
                                                    <input type="radio" class="form-check-input" id="wishlist-4"
                                                        name="wishlist">
                                                    <label for="wishlist-4" class="form-check-label text-body">My
                                                        must-haves</label>
                                                </div>
                                                <div class="form-check">
                                                    <input type="radio" class="form-check-input" id="wishlist-5"
                                                        name="wishlist">
                                                    <label for="wishlist-5" class="form-check-label text-body">For my
                                                        husband</label>
                                                </div>
                                            </div>
                                            <button type="button" class="btn btn-sm btn-dark w-100"
                                                onclick="document.getElementById('wishlist-selector').click()">Select
                                                wishlist</button>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-5 col-md-4 col-xxl-3">
                                    <select class="form-select" data-select="{&quot;removeItemButton&quot;: false}"
                                        aria-label="Wishlist sorting">
                                        <option value="date">By date added</option>
                                        <option value="price-ascend">By price ascending</option>
                                        <option value="price-descend">By price descending</option>
                                        <option value="rating">By rating</option>
                                    </select>
                                </div>
                            </div>
                        </div>

                        <!-- Master checkbox + Action buttons -->
                        <div class="mb-4 nav align-items-center">
                            <div class="py-2 form-checkl nav-link animate-underline fs-lg ps-0 pe-2 mt-n1 me-4"
                                data-master-checkbox="{&quot;container&quot;: &quot;#wishlistSelection&quot;, &quot;label&quot;: &quot;Select all&quot;, &quot;labelChecked&quot;: &quot;Unselect all&quot;, &quot;showOnCheck&quot;: &quot;#action-buttons&quot;}">
                                <input type="checkbox" class="form-check-input" id="wishlist-master" checked="">
                                <label for="wishlist-master" class="mt-1 form-check-label animate-target ms-2">Unselect
                                    all</label>
                            </div>
                            <div class="flex-wrap d-flex" id="action-buttons">
                                <a class="px-0 py-2 nav-link animate-underline pe-sm-2 me-4" href="#!">
                                    <i class="ci-shopping-cart fs-base me-2"></i>
                                    <span class="animate-target d-none d-md-inline">Add to cart</span>
                                </a>
                                <a class="px-0 py-2 nav-link animate-underline pe-sm-2 me-4" href="#!">
                                    <i class="ci-repeat fs-base me-2"></i>
                                    <span class="animate-target d-none d-md-inline">Relocate</span>
                                </a>
                                <a class="px-0 py-2 nav-link animate-underline" href="#!">
                                    <i class="ci-trash fs-base me-1"></i>
                                    <span class="animate-target d-none d-md-inline">Remove selected</span>
                                </a>
                            </div>
                        </div>


                        <!-- Wishlist items (Grid) -->
                        <div class="row row-cols-2 row-cols-md-3 g-4" id="wishlistSelection">

                            <!-- Item -->
                            <div class="col">
                                <div class="rounded product-card animate-underline hover-effect-opacity bg-body">
                                    <div class="position-relative">
                                        <div class="top-0 pt-1 mt-2 position-absolute end-0 z-1 pe-1 me-2">
                                            <div class="form-check fs-lg">
                                                <input type="checkbox" class="form-check-input select-card-check"
                                                    checked="">
                                            </div>
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
                                </div>
                            </div>

                            <!-- Item -->
                            <div class="col">
                                <div class="rounded product-card animate-underline hover-effect-opacity bg-body">
                                    <div class="position-relative">
                                        <div class="top-0 pt-1 mt-2 position-absolute end-0 z-1 pe-1 me-2">
                                            <div class="form-check fs-lg">
                                                <input type="checkbox" class="form-check-input select-card-check"
                                                    checked="">
                                            </div>
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
                                </div>
                            </div>

                            <!-- Item -->
                            <div class="col">
                                <div class="rounded product-card animate-underline hover-effect-opacity bg-body">
                                    <div class="position-relative">
                                        <div class="top-0 pt-1 mt-2 position-absolute end-0 z-1 pe-1 me-2">
                                            <div class="form-check fs-lg">
                                                <input type="checkbox" class="form-check-input select-card-check">
                                            </div>
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
                                </div>
                            </div>

                            <!-- Item -->
                            <div class="col">
                                <div class="rounded product-card animate-underline hover-effect-opacity bg-body">
                                    <div class="posittion-relative">
                                        <div class="top-0 pt-1 mt-2 position-absolute end-0 z-1 pe-1 me-2">
                                            <div class="form-check fs-lg">
                                                <input type="checkbox" class="form-check-input select-card-check">
                                            </div>
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
                                </div>
                            </div>

                            <!-- Item -->
                            <div class="col">
                                <div class="rounded product-card animate-underline hover-effect-opacity bg-body">
                                    <div class="position-relative">
                                        <div class="top-0 pt-1 mt-2 position-absolute end-0 z-1 pe-1 me-2">
                                            <div class="form-check fs-lg">
                                                <input type="checkbox" class="form-check-input select-card-check">
                                            </div>
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
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>

    @include('components.account.footer')

@endsection

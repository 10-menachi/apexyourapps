@extends('layouts.app')

@section('title', 'Categories')

@section('content')
    <main class="content-wrapper">
        <h1 class="container h3 mb-sm-4">Shop categories</h1>
        <section class="container mb-4">
            <div class="overflow-auto" data-simplebar="" data-simplebar-auto-hide="false">
                <div class="row row-cols-6 g-0" style="min-width: 960px">
                    <div class="col">
                        <a class="px-2 py-3 d-flex justify-content-center px-xl-3" href="shop-catalog-electronics.html">
                            <div class="ratio" style="max-width: 164px; --cz-aspect-ratio: calc(80 / 164 * 100%)">
                                <img src="assets/img/shop/electronics/brands/apple-light-mode.svg" class="d-none-dark"
                                    alt="Apple">
                                <img src="assets/img/shop/electronics/brands/apple-dark-mode.svg"
                                    class="d-none d-block-dark" alt="Apple">
                            </div>
                        </a>
                    </div>
                    <div class="col">
                        <a class="px-2 py-3 d-flex justify-content-center px-xl-3" href="shop-catalog-electronics.html">
                            <img src="assets/img/shop/electronics/brands/motorola-light-mode.svg" class="d-none-dark"
                                alt="Motorola">
                            <img src="assets/img/shop/electronics/brands/motorola-dark-mode.svg" class="d-none d-block-dark"
                                alt="Motorola">
                        </a>
                    </div>
                    <div class="col">
                        <a class="px-2 py-3 d-flex justify-content-center px-xl-3" href="shop-catalog-electronics.html">
                            <img src="assets/img/shop/electronics/brands/xiaomi-light-mode.svg" class="d-none-dark"
                                alt="Xiaomi">
                            <img src="assets/img/shop/electronics/brands/xiaomi-dark-mode.svg" class="d-none d-block-dark"
                                alt="Xiaomi">
                        </a>
                    </div>
                    <div class="col">
                        <a class="px-2 py-3 d-flex justify-content-center px-xl-3" href="shop-catalog-electronics.html">
                            <img src="assets/img/shop/electronics/brands/canon-light-mode.svg" class="d-none-dark"
                                alt="Canon">
                            <img src="assets/img/shop/electronics/brands/canon-dark-mode.svg" class="d-none d-block-dark"
                                alt="Canon">
                        </a>
                    </div>
                    <div class="col">
                        <a class="px-2 py-3 d-flex justify-content-center px-xl-3" href="shop-catalog-electronics.html">
                            <img src="assets/img/shop/electronics/brands/samsung-light-mode.svg" class="d-none-dark"
                                alt="Samsung">
                            <img src="assets/img/shop/electronics/brands/samsung-dark-mode.svg" class="d-none d-block-dark"
                                alt="Samsung">
                        </a>
                    </div>
                    <div class="col">
                        <a class="px-2 py-3 d-flex justify-content-center px-xl-3" href="shop-catalog-electronics.html">
                            <img src="assets/img/shop/electronics/brands/sony-light-mode.svg" class="d-none-dark"
                                alt="Sony">
                            <img src="assets/img/shop/electronics/brands/sony-dark-mode.svg" class="d-none d-block-dark"
                                alt="Sony">
                        </a>
                    </div>
                </div>
            </div>
        </section>


        <!-- Category cards -->
        <section class="container">
            <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 row-cols-lg-4 gy-5">

                <!-- Category -->
                <div class="col">
                    <div class="hover-effect-scale">
                        <a class="p-4 mb-4 rounded d-block bg-body-tertiary" href="shop-catalog-electronics.html">
                            <div class="ratio" style="--cz-aspect-ratio: calc(184 / 258 * 100%)">
                                <img src="assets/img/shop/electronics/categories/01.png" class="hover-effect-target"
                                    alt="Smartphones">
                            </div>
                        </a>
                        <h2 class="pb-2 mb-1 h6 d-flex w-100">
                            <a class="animate-underline animate-target d-inline text-truncate"
                                href="shop-catalog-electronics.html">Smartphones</a>
                        </h2>
                        <ul class="gap-2 nav flex-column mt-n1">
                            <li class="pt-1 d-flex w-100">
                                <a class="p-0 nav-link animate-underline animate-target d-inline fw-normal text-truncate"
                                    href="shop-catalog-electronics.html">Apple iPhone</a>
                            </li>
                            <li class="pt-1 d-flex w-100">
                                <a class="p-0 nav-link animate-underline animate-target d-inline fw-normal text-truncate"
                                    href="shop-catalog-electronics.html">Samsung</a>
                            </li>
                            <li class="pt-1 d-flex w-100">
                                <a class="p-0 nav-link animate-underline animate-target d-inline fw-normal text-truncate"
                                    href="shop-catalog-electronics.html">Xiaomi</a>
                            </li>
                            <li class="pt-1 d-flex w-100">
                                <a class="p-0 nav-link animate-underline animate-target d-inline fw-normal text-truncate"
                                    href="shop-catalog-electronics.html">Nokia</a>
                            </li>
                            <li class="pt-1 d-flex w-100">
                                <a class="p-0 nav-link animate-underline animate-target d-inline fw-normal text-truncate"
                                    href="shop-catalog-electronics.html">Meizu</a>
                            </li>
                        </ul>
                    </div>
                </div>

                <!-- Category -->
                <div class="col">
                    <div class="hover-effect-scale">
                        <a class="p-4 mb-4 rounded d-block bg-body-tertiary" href="shop-catalog-electronics.html">
                            <div class="ratio" style="--cz-aspect-ratio: calc(184 / 258 * 100%)">
                                <img src="assets/img/shop/electronics/categories/02.png" class="hover-effect-target"
                                    alt="Powerbank">
                            </div>
                        </a>
                        <h2 class="pb-2 mb-1 h6 d-flex w-100">
                            <a class="animate-underline animate-target d-inline text-truncate"
                                href="shop-catalog-electronics.html">Accessories</a>
                        </h2>
                        <ul class="gap-2 nav flex-column mt-n1">
                            <li class="pt-1 d-flex w-100">
                                <a class="p-0 nav-link animate-underline animate-target d-inline fw-normal text-truncate"
                                    href="shop-catalog-electronics.html">Accessory Kits</a>
                            </li>
                            <li class="pt-1 d-flex w-100">
                                <a class="p-0 nav-link animate-underline animate-target d-inline fw-normal text-truncate"
                                    href="shop-catalog-electronics.html">Batteries &amp; Battery Packs</a>
                            </li>
                            <li class="pt-1 d-flex w-100">
                                <a class="p-0 nav-link animate-underline animate-target d-inline fw-normal text-truncate"
                                    href="shop-catalog-electronics.html">Cables</a>
                            </li>
                            <li class="pt-1 d-flex w-100">
                                <a class="p-0 nav-link animate-underline animate-target d-inline fw-normal text-truncate"
                                    href="shop-catalog-electronics.html">Car Accessories</a>
                            </li>
                            <li class="pt-1 d-flex w-100">
                                <a class="p-0 nav-link animate-underline animate-target d-inline fw-normal text-truncate"
                                    href="shop-catalog-electronics.html">Charges &amp; Power Adapters</a>
                            </li>
                            <li class="pt-1 d-flex w-100">
                                <a class="p-0 nav-link animate-underline animate-target d-inline fw-normal text-truncate"
                                    href="shop-catalog-electronics.html">FM Transmitters</a>
                            </li>
                        </ul>
                    </div>
                </div>

                <!-- Category -->
                <div class="col">
                    <div class="hover-effect-scale">
                        <a class="p-4 mb-4 rounded d-block bg-body-tertiary" href="shop-catalog-electronics.html">
                            <div class="ratio" style="--cz-aspect-ratio: calc(184 / 258 * 100%)">
                                <img src="assets/img/shop/electronics/categories/03.png" class="hover-effect-target"
                                    alt="Tablets">
                            </div>
                        </a>
                        <h2 class="pb-2 mb-1 h6 d-flex w-100">
                            <a class="animate-underline animate-target d-inline text-truncate"
                                href="shop-catalog-electronics.html">Tablets</a>
                        </h2>
                        <ul class="gap-2 nav flex-column mt-n1">
                            <li class="pt-1 d-flex w-100">
                                <a class="p-0 nav-link animate-underline animate-target d-inline fw-normal text-truncate"
                                    href="shop-catalog-electronics.html">Apple iPad</a>
                            </li>
                            <li class="pt-1 d-flex w-100">
                                <a class="p-0 nav-link animate-underline animate-target d-inline fw-normal text-truncate"
                                    href="shop-catalog-electronics.html">Android Tablets</a>
                            </li>
                            <li class="pt-1 d-flex w-100">
                                <a class="p-0 nav-link animate-underline animate-target d-inline fw-normal text-truncate"
                                    href="shop-catalog-electronics.html">Samsung</a>
                            </li>
                            <li class="pt-1 d-flex w-100">
                                <a class="p-0 nav-link animate-underline animate-target d-inline fw-normal text-truncate"
                                    href="shop-catalog-electronics.html">Xiaomi</a>
                            </li>
                            <li class="pt-1 d-flex w-100">
                                <a class="p-0 nav-link animate-underline animate-target d-inline fw-normal text-truncate"
                                    href="shop-catalog-electronics.html">Lenovo</a>
                            </li>
                        </ul>
                    </div>
                </div>

                <!-- Category -->
                <div class="col">
                    <div class="hover-effect-scale">
                        <a class="p-4 mb-4 rounded d-block bg-body-tertiary" href="shop-catalog-electronics.html">
                            <div class="ratio" style="--cz-aspect-ratio: calc(184 / 258 * 100%)">
                                <img src="assets/img/shop/electronics/categories/04.png" class="hover-effect-target"
                                    alt="Wearable Electronics">
                            </div>
                        </a>
                        <h2 class="pb-2 mb-1 h6 d-flex w-100">
                            <a class="animate-underline animate-target d-inline text-truncate"
                                href="shop-catalog-electronics.html">Wearable Electronics</a>
                        </h2>
                        <ul class="gap-2 nav flex-column mt-n1">
                            <li class="pt-1 d-flex w-100">
                                <a class="p-0 nav-link animate-underline animate-target d-inline fw-normal text-truncate"
                                    href="shop-catalog-electronics.html">Smart Watches</a>
                            </li>
                            <li class="pt-1 d-flex w-100">
                                <a class="p-0 nav-link animate-underline animate-target d-inline fw-normal text-truncate"
                                    href="shop-catalog-electronics.html">Fitness Trackers</a>
                            </li>
                            <li class="pt-1 d-flex w-100">
                                <a class="p-0 nav-link animate-underline animate-target d-inline fw-normal text-truncate"
                                    href="shop-catalog-electronics.html">Smart Glasses</a>
                            </li>
                            <li class="pt-1 d-flex w-100">
                                <a class="p-0 nav-link animate-underline animate-target d-inline fw-normal text-truncate"
                                    href="shop-catalog-electronics.html">E-books</a>
                            </li>
                            <li class="pt-1 d-flex w-100">
                                <a class="p-0 nav-link animate-underline animate-target d-inline fw-normal text-truncate"
                                    href="shop-catalog-electronics.html">Clips, Arm &amp; Wristbands</a>
                            </li>
                            <li class="pt-1 d-flex w-100">
                                <a class="p-0 nav-link animate-underline animate-target d-inline fw-normal text-truncate"
                                    href="shop-catalog-electronics.html">Voice Recorders</a>
                            </li>
                        </ul>
                    </div>
                </div>

                <!-- Category -->
                <div class="col">
                    <div class="hover-effect-scale">
                        <a class="p-4 mb-4 rounded d-block bg-body-tertiary" href="shop-catalog-electronics.html">
                            <div class="ratio" style="--cz-aspect-ratio: calc(184 / 258 * 100%)">
                                <img src="assets/img/shop/electronics/categories/05.png" class="hover-effect-target"
                                    alt="Computers">
                            </div>
                        </a>
                        <h2 class="pb-2 mb-1 h6 d-flex w-100">
                            <a class="animate-underline animate-target d-inline text-truncate"
                                href="shop-catalog-electronics.html">Computers &amp; Laptops</a>
                        </h2>
                        <ul class="gap-2 nav flex-column mt-n1">
                            <li class="pt-1 d-flex w-100">
                                <a class="p-0 nav-link animate-underline animate-target d-inline fw-normal text-truncate"
                                    href="shop-catalog-electronics.html">Asus</a>
                            </li>
                            <li class="pt-1 d-flex w-100">
                                <a class="p-0 nav-link animate-underline animate-target d-inline fw-normal text-truncate"
                                    href="shop-catalog-electronics.html">Acer</a>
                            </li>
                            <li class="pt-1 d-flex w-100">
                                <a class="p-0 nav-link animate-underline animate-target d-inline fw-normal text-truncate"
                                    href="shop-catalog-electronics.html">HP (Hewlett Packard)</a>
                            </li>
                            <li class="pt-1 d-flex w-100">
                                <a class="p-0 nav-link animate-underline animate-target d-inline fw-normal text-truncate"
                                    href="shop-catalog-electronics.html">Lenovo</a>
                            </li>
                            <li class="pt-1 d-flex w-100">
                                <a class="p-0 nav-link animate-underline animate-target d-inline fw-normal text-truncate"
                                    href="shop-catalog-electronics.html">Apple MacBook</a>
                            </li>
                        </ul>
                    </div>
                </div>

                <!-- Category -->
                <div class="col">
                    <div class="hover-effect-scale">
                        <a class="p-4 mb-4 rounded d-block bg-body-tertiary" href="shop-catalog-electronics.html">
                            <div class="ratio" style="--cz-aspect-ratio: calc(184 / 258 * 100%)">
                                <img src="assets/img/shop/electronics/categories/06.png" class="hover-effect-target"
                                    alt="Cameras">
                            </div>
                        </a>
                        <h2 class="pb-2 mb-1 h6 d-flex w-100">
                            <a class="animate-underline animate-target d-inline text-truncate"
                                href="shop-catalog-electronics.html">Cameras, Photo &amp; Video</a>
                        </h2>
                        <ul class="gap-2 nav flex-column mt-n1">
                            <li class="pt-1 d-flex w-100">
                                <a class="p-0 nav-link animate-underline animate-target d-inline fw-normal text-truncate"
                                    href="shop-catalog-electronics.html">Photo Cameras</a>
                            </li>
                            <li class="pt-1 d-flex w-100">
                                <a class="p-0 nav-link animate-underline animate-target d-inline fw-normal text-truncate"
                                    href="shop-catalog-electronics.html">Video Cameras</a>
                            </li>
                            <li class="pt-1 d-flex w-100">
                                <a class="p-0 nav-link animate-underline animate-target d-inline fw-normal text-truncate"
                                    href="shop-catalog-electronics.html">Action Cameras</a>
                            </li>
                            <li class="pt-1 d-flex w-100">
                                <a class="p-0 nav-link animate-underline animate-target d-inline fw-normal text-truncate"
                                    href="shop-catalog-electronics.html">Camcorders</a>
                            </li>
                            <li class="pt-1 d-flex w-100">
                                <a class="p-0 nav-link animate-underline animate-target d-inline fw-normal text-truncate"
                                    href="shop-catalog-electronics.html">Studio Equipment</a>
                            </li>
                            <li class="pt-1 d-flex w-100">
                                <a class="p-0 nav-link animate-underline animate-target d-inline fw-normal text-truncate"
                                    href="shop-catalog-electronics.html">Tripods</a>
                            </li>
                            <li class="pt-1 d-flex w-100">
                                <a class="p-0 nav-link animate-underline animate-target d-inline fw-normal text-truncate"
                                    href="shop-catalog-electronics.html">Bags and Covers</a>
                            </li>
                        </ul>
                    </div>
                </div>

                <!-- Category -->
                <div class="col">
                    <div class="hover-effect-scale">
                        <a class="p-4 mb-4 rounded d-block bg-body-tertiary" href="shop-catalog-electronics.html">
                            <div class="ratio" style="--cz-aspect-ratio: calc(184 / 258 * 100%)">
                                <img src="assets/img/shop/electronics/categories/07.png" class="hover-effect-target"
                                    alt="Headphones">
                            </div>
                        </a>
                        <h2 class="pb-2 mb-1 h6 d-flex w-100">
                            <a class="animate-underline animate-target d-inline text-truncate"
                                href="shop-catalog-electronics.html">Headphones</a>
                        </h2>
                        <ul class="gap-2 nav flex-column mt-n1">
                            <li class="pt-1 d-flex w-100">
                                <a class="p-0 nav-link animate-underline animate-target d-inline fw-normal text-truncate"
                                    href="shop-catalog-electronics.html">Apple</a>
                            </li>
                            <li class="pt-1 d-flex w-100">
                                <a class="p-0 nav-link animate-underline animate-target d-inline fw-normal text-truncate"
                                    href="shop-catalog-electronics.html">Defunc</a>
                            </li>
                            <li class="pt-1 d-flex w-100">
                                <a class="p-0 nav-link animate-underline animate-target d-inline fw-normal text-truncate"
                                    href="shop-catalog-electronics.html">HyperX</a>
                            </li>
                            <li class="pt-1 d-flex w-100">
                                <a class="p-0 nav-link animate-underline animate-target d-inline fw-normal text-truncate"
                                    href="shop-catalog-electronics.html">JBL</a>
                            </li>
                            <li class="pt-1 d-flex w-100">
                                <a class="p-0 nav-link animate-underline animate-target d-inline fw-normal text-truncate"
                                    href="shop-catalog-electronics.html">Logitech</a>
                            </li>
                            <li class="pt-1 d-flex w-100">
                                <a class="p-0 nav-link animate-underline animate-target d-inline fw-normal text-truncate"
                                    href="shop-catalog-electronics.html">Panasonic</a>
                            </li>
                        </ul>
                    </div>
                </div>

                <!-- Category -->
                <div class="col">
                    <div class="hover-effect-scale">
                        <a class="p-4 mb-4 rounded d-block bg-body-tertiary" href="shop-catalog-electronics.html">
                            <div class="ratio" style="--cz-aspect-ratio: calc(184 / 258 * 100%)">
                                <img src="assets/img/shop/electronics/categories/08.png" class="hover-effect-target"
                                    alt="Video Games">
                            </div>
                        </a>
                        <h2 class="pb-2 mb-1 h6 d-flex w-100">
                            <a class="animate-underline animate-target d-inline text-truncate"
                                href="shop-catalog-electronics.html">Video Games</a>
                        </h2>
                        <ul class="gap-2 nav flex-column mt-n1">
                            <li class="pt-1 d-flex w-100">
                                <a class="p-0 nav-link animate-underline animate-target d-inline fw-normal text-truncate"
                                    href="shop-catalog-electronics.html">PlayStation 5</a>
                            </li>
                            <li class="pt-1 d-flex w-100">
                                <a class="p-0 nav-link animate-underline animate-target d-inline fw-normal text-truncate"
                                    href="shop-catalog-electronics.html">PlayStation Controllers</a>
                            </li>
                            <li class="pt-1 d-flex w-100">
                                <a class="p-0 nav-link animate-underline animate-target d-inline fw-normal text-truncate"
                                    href="shop-catalog-electronics.html">PlayStation Games</a>
                            </li>
                            <li class="pt-1 d-flex w-100">
                                <a class="p-0 nav-link animate-underline animate-target d-inline fw-normal text-truncate"
                                    href="shop-catalog-electronics.html">Gaming PCs</a>
                            </li>
                            <li class="pt-1 d-flex w-100">
                                <a class="p-0 nav-link animate-underline animate-target d-inline fw-normal text-truncate"
                                    href="shop-catalog-electronics.html">Nintendo Switch</a>
                            </li>
                            <li class="pt-1 d-flex w-100">
                                <a class="p-0 nav-link animate-underline animate-target d-inline fw-normal text-truncate"
                                    href="shop-catalog-electronics.html">Xbox Series X/S</a>
                            </li>
                            <li class="pt-1 d-flex w-100">
                                <a class="p-0 nav-link animate-underline animate-target d-inline fw-normal text-truncate"
                                    href="shop-catalog-electronics.html">Gaming Peripherals</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </section>


        <!-- Banners -->
        <section class="container pt-5 pb-4 mb-3">
            <div class="row g-3 g-lg-4">
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
                            <div class="ratio rtl-flip" style="--cz-aspect-ratio: calc(159 / 525 * 100%)">
                                <img src="assets/img/shop/electronics/banners/ipad.png" width="525" alt="iPad">
                            </div>
                        </a>
                    </div>
                </div>
            </div>
        </section>


        <!-- Trending products (Grid) -->
        <section class="container pb-5 mb-sm-2 mb-md-3 mb-lg-4 mb-xl-5">
            <div class="row row-cols-2 row-cols-md-3 row-cols-lg-4 g-4">

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
                                    <span class="px-1 mx-2 mt-2 border-dashed d-block flex-grow-1 border-bottom"></span>
                                    <span class="text-dark-emphasis fs-xs fw-medium text-end">OLED 1440x1600</span>
                                </li>
                                <li class="d-flex align-items-center">
                                    <span class="fs-xs">Graphics:</span>
                                    <span class="px-1 mx-2 mt-2 border-dashed d-block flex-grow-1 border-bottom"></span>
                                    <span class="text-dark-emphasis fs-xs fw-medium text-end">Adreno 540</span>
                                </li>
                                <li class="d-flex align-items-center">
                                    <span class="fs-xs">Sound:</span>
                                    <span class="px-1 mx-2 mt-2 border-dashed d-block flex-grow-1 border-bottom"></span>
                                    <span class="text-dark-emphasis fs-xs fw-medium text-end">2x3.5mm jack</span>
                                </li>
                                <li class="d-flex align-items-center">
                                    <span class="fs-xs">Input:</span>
                                    <span class="px-1 mx-2 mt-2 border-dashed d-block flex-grow-1 border-bottom"></span>
                                    <span class="text-dark-emphasis fs-xs fw-medium text-end">4 built-in cameras</span>
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
                                    <span class="px-1 mx-2 mt-2 border-dashed d-block flex-grow-1 border-bottom"></span>
                                    <span class="text-dark-emphasis fs-xs fw-medium text-end">6.1" XDR</span>
                                </li>
                                <li class="d-flex align-items-center">
                                    <span class="fs-xs">Capacity:</span>
                                    <span class="px-1 mx-2 mt-2 border-dashed d-block flex-grow-1 border-bottom"></span>
                                    <span class="text-dark-emphasis fs-xs fw-medium text-end">128 GB</span>
                                </li>
                                <li class="d-flex align-items-center">
                                    <span class="fs-xs">Chip:</span>
                                    <span class="px-1 mx-2 mt-2 border-dashed d-block flex-grow-1 border-bottom"></span>
                                    <span class="text-dark-emphasis fs-xs fw-medium text-end">A15 Bionic</span>
                                </li>
                                <li class="d-flex align-items-center">
                                    <span class="fs-xs">Camera:</span>
                                    <span class="px-1 mx-2 mt-2 border-dashed d-block flex-grow-1 border-bottom"></span>
                                    <span class="text-dark-emphasis fs-xs fw-medium text-end">12 + 12 MP</span>
                                </li>
                                <li class="d-flex align-items-center">
                                    <span class="fs-xs">Weight:</span>
                                    <span class="px-1 mx-2 mt-2 border-dashed d-block flex-grow-1 border-bottom"></span>
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
                                    <span class="px-1 mx-2 mt-2 border-dashed d-block flex-grow-1 border-bottom"></span>
                                    <span class="text-dark-emphasis fs-xs fw-medium text-end">45mm OLED</span>
                                </li>
                                <li class="d-flex align-items-center">
                                    <span class="fs-xs">Chip:</span>
                                    <span class="px-1 mx-2 mt-2 border-dashed d-block flex-grow-1 border-bottom"></span>
                                    <span class="text-dark-emphasis fs-xs fw-medium text-end">64-bit Dual-core</span>
                                </li>
                                <li class="d-flex align-items-center">
                                    <span class="fs-xs">Connectivity:</span>
                                    <span class="px-1 mx-2 mt-2 border-dashed d-block flex-grow-1 border-bottom"></span>
                                    <span class="text-dark-emphasis fs-xs fw-medium text-end">Wi-Fi, Bluetooth</span>
                                </li>
                                <li class="d-flex align-items-center">
                                    <span class="fs-xs">Power:</span>
                                    <span class="px-1 mx-2 mt-2 border-dashed d-block flex-grow-1 border-bottom"></span>
                                    <span class="text-dark-emphasis fs-xs fw-medium text-end">Lithium-ion battery</span>
                                </li>
                                <li class="d-flex align-items-center">
                                    <span class="fs-xs">Weight:</span>
                                    <span class="px-1 mx-2 mt-2 border-dashed d-block flex-grow-1 border-bottom"></span>
                                    <span class="text-dark-emphasis fs-xs fw-medium text-end">37.0 grams</span>
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
                                    <span class="px-1 mx-2 mt-2 border-dashed d-block flex-grow-1 border-bottom"></span>
                                    <span class="text-dark-emphasis fs-xs fw-medium text-end">Apple M2</span>
                                </li>
                                <li class="d-flex align-items-center">
                                    <span class="fs-xs">Memory:</span>
                                    <span class="px-1 mx-2 mt-2 border-dashed d-block flex-grow-1 border-bottom"></span>
                                    <span class="text-dark-emphasis fs-xs fw-medium text-end">8 GB unified</span>
                                </li>
                                <li class="d-flex align-items-center">
                                    <span class="fs-xs">Storage:</span>
                                    <span class="px-1 mx-2 mt-2 border-dashed d-block flex-grow-1 border-bottom"></span>
                                    <span class="text-dark-emphasis fs-xs fw-medium text-end">256 GB SSD</span>
                                </li>
                                <li class="d-flex align-items-center">
                                    <span class="fs-xs">Display:</span>
                                    <span class="px-1 mx-2 mt-2 border-dashed d-block flex-grow-1 border-bottom"></span>
                                    <span class="text-dark-emphasis fs-xs fw-medium text-end">13.3-inch Retina</span>
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
                                    <span class="px-1 mx-2 mt-2 border-dashed d-block flex-grow-1 border-bottom"></span>
                                    <span class="text-dark-emphasis fs-xs fw-medium text-end">10.9" LED</span>
                                </li>
                                <li class="d-flex align-items-center">
                                    <span class="fs-xs">Capacity:</span>
                                    <span class="px-1 mx-2 mt-2 border-dashed d-block flex-grow-1 border-bottom"></span>
                                    <span class="text-dark-emphasis fs-xs fw-medium text-end">64 GB</span>
                                </li>
                                <li class="d-flex align-items-center">
                                    <span class="fs-xs">Chip:</span>
                                    <span class="px-1 mx-2 mt-2 border-dashed d-block flex-grow-1 border-bottom"></span>
                                    <span class="text-dark-emphasis fs-xs fw-medium text-end">Apple M1</span>
                                </li>
                                <li class="d-flex align-items-center">
                                    <span class="fs-xs">Camera:</span>
                                    <span class="px-1 mx-2 mt-2 border-dashed d-block flex-grow-1 border-bottom"></span>
                                    <span class="text-dark-emphasis fs-xs fw-medium text-end">12 MP Wide</span>
                                </li>
                                <li class="d-flex align-items-center">
                                    <span class="fs-xs">Weight:</span>
                                    <span class="px-1 mx-2 mt-2 border-dashed d-block flex-grow-1 border-bottom"></span>
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
                                    <span class="px-1 mx-2 mt-2 border-dashed d-block flex-grow-1 border-bottom"></span>
                                    <span class="text-dark-emphasis fs-xs fw-medium text-end">Noise Cancellation</span>
                                </li>
                                <li class="d-flex align-items-center">
                                    <span class="fs-xs">Sensors:</span>
                                    <span class="px-1 mx-2 mt-2 border-dashed d-block flex-grow-1 border-bottom"></span>
                                    <span class="text-dark-emphasis fs-xs fw-medium text-end">Touch control</span>
                                </li>
                                <li class="d-flex align-items-center">
                                    <span class="fs-xs">Chip:</span>
                                    <span class="px-1 mx-2 mt-2 border-dashed d-block flex-grow-1 border-bottom"></span>
                                    <span class="text-dark-emphasis fs-xs fw-medium text-end">Apple H2</span>
                                </li>
                                <li class="d-flex align-items-center">
                                    <span class="fs-xs">Weight:</span>
                                    <span class="px-1 mx-2 mt-2 border-dashed d-block flex-grow-1 border-bottom"></span>
                                    <span class="text-dark-emphasis fs-xs fw-medium text-end">50.8 grams</span>
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
                                    <span class="px-1 mx-2 mt-2 border-dashed d-block flex-grow-1 border-bottom"></span>
                                    <span class="text-dark-emphasis fs-xs fw-medium text-end">11" LED</span>
                                </li>
                                <li class="d-flex align-items-center">
                                    <span class="fs-xs">Capacity:</span>
                                    <span class="px-1 mx-2 mt-2 border-dashed d-block flex-grow-1 border-bottom"></span>
                                    <span class="text-dark-emphasis fs-xs fw-medium text-end">128 GB</span>
                                </li>
                                <li class="d-flex align-items-center">
                                    <span class="fs-xs">Chip:</span>
                                    <span class="px-1 mx-2 mt-2 border-dashed d-block flex-grow-1 border-bottom"></span>
                                    <span class="text-dark-emphasis fs-xs fw-medium text-end">Apple M1</span>
                                </li>
                                <li class="d-flex align-items-center">
                                    <span class="fs-xs">Camera:</span>
                                    <span class="px-1 mx-2 mt-2 border-dashed d-block flex-grow-1 border-bottom"></span>
                                    <span class="text-dark-emphasis fs-xs fw-medium text-end">12 MP Wide</span>
                                </li>
                                <li class="d-flex align-items-center">
                                    <span class="fs-xs">Weight:</span>
                                    <span class="px-1 mx-2 mt-2 border-dashed d-block flex-grow-1 border-bottom"></span>
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
                                    <span class="px-1 mx-2 mt-2 border-dashed d-block flex-grow-1 border-bottom"></span>
                                    <span class="text-dark-emphasis fs-xs fw-medium text-end">Noise Cancellation</span>
                                </li>
                                <li class="d-flex align-items-center">
                                    <span class="fs-xs">Connectivity:</span>
                                    <span class="px-1 mx-2 mt-2 border-dashed d-block flex-grow-1 border-bottom"></span>
                                    <span class="text-dark-emphasis fs-xs fw-medium text-end">Bluetooth, 3.5mm jack</span>
                                </li>
                                <li class="d-flex align-items-center">
                                    <span class="fs-xs">Material:</span>
                                    <span class="px-1 mx-2 mt-2 border-dashed d-block flex-grow-1 border-bottom"></span>
                                    <span class="text-dark-emphasis fs-xs fw-medium text-end">Leather, Plastic</span>
                                </li>
                                <li class="d-flex align-items-center">
                                    <span class="fs-xs">Weight:</span>
                                    <span class="px-1 mx-2 mt-2 border-dashed d-block flex-grow-1 border-bottom"></span>
                                    <span class="text-dark-emphasis fs-xs fw-medium text-end">185 grams</span>
                                </li>
                            </ul>
                        </div>
                    </div>
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
                            <a class="btn btn-icon btn-secondary rounded-circle" href="#!" aria-label="Instagram">
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
                                        New Cool Gadgets You Must See on Cartzilla - Cheap Budget</a>
                                </div>
                            </li>
                            <li class="nav flex-nowrap align-items-center position-relative">
                                <img src="assets/img/home/electronics/vlog/02.jpg" class="rounded" width="140"
                                    alt="Video cover">
                                <div class="ps-3">
                                    <div class="mb-2 fs-xs text-body-secondary lh-sm">10:20</div>
                                    <a class="p-0 nav-link fs-sm hover-effect-underline stretched-link" href="#!">5
                                        Super Useful Gadgets on Cartzilla You Must Have in 2023</a>
                                </div>
                            </li>
                            <li class="nav flex-nowrap align-items-center position-relative">
                                <img src="assets/img/home/electronics/vlog/03.jpg" class="rounded" width="140"
                                    alt="Video cover">
                                <div class="ps-3">
                                    <div class="mb-2 fs-xs text-body-secondary lh-sm">8:40</div>
                                    <a class="p-0 nav-link fs-sm hover-effect-underline stretched-link"
                                        href="#!">Top 5 New Amazing Gadgets on Cartzilla You Must See</a>
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

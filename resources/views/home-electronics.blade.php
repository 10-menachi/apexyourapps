@extends('layouts.app')

@section('title', 'Home')
@section('content')

    <!-- Page content -->

    <main class="content-wrapper">
        <!-- Hero slider -->
        <section class="container pt-4">
            <div class="row">
                <div class="col-lg-9 offset-lg-3">
                    <div class="position-relative">
                        <span class="top-0 position-absolute start-0 w-100 h-100 rounded-5 d-none-dark rtl-flip"
                            style="background: linear-gradient(90deg, #accbee 0%, #e7f0fd 100%)"></span>
                        <span class="top-0 position-absolute start-0 w-100 h-100 rounded-5 d-none d-block-dark rtl-flip"
                            style="background: linear-gradient(90deg, #1b273a 0%, #1f2632 100%)"></span>
                        <div class="row justify-content-center position-relative z-2">
                            <div class="col-xl-5 col-xxl-4 offset-xxl-1 d-flex align-items-center mt-xl-n3">

                                <!-- Text content master slider -->
                                <div class="px-5 swiper pe-xl-0 ps-xxl-0 me-xl-n5"
                                    data-swiper="{
                    &quot;spaceBetween&quot;: 64,
                    &quot;loop&quot;: true,
                    &quot;speed&quot;: 400,
                    &quot;controlSlider&quot;: &quot;#sliderImages&quot;,
                    &quot;autoplay&quot;: {
                      &quot;delay&quot;: 5500,
                      &quot;disableOnInteraction&quot;: false
                    },
                    &quot;scrollbar&quot;: {
                      &quot;el&quot;: &quot;.swiper-scrollbar&quot;
                    }
                  }">
                                    <div class="swiper-wrapper">
                                        <div class="pt-5 text-center swiper-slide text-xl-start py-xl-5">
                                            <p class="text-body">Feel the real quality sound</p>
                                            <h2 class="pb-2 display-4 pb-xl-4">Headphones ProMax</h2>
                                            <a class="btn btn-lg btn-primary" href="shop-product-general-electronics.html">
                                                Shop now
                                                <i class="ci-arrow-up-right fs-lg ms-2 me-n1"></i>
                                            </a>
                                        </div>
                                        <div class="pt-5 text-center swiper-slide text-xl-start py-xl-5">
                                            <p class="text-body">Deal of the week</p>
                                            <h2 class="pb-2 display-4 pb-xl-4">Powerful iPad Pro M2</h2>
                                            <a class="btn btn-lg btn-primary" href="shop-product-general-electronics.html">
                                                Shop now
                                                <i class="ci-arrow-up-right fs-lg ms-2 me-n1"></i>
                                            </a>
                                        </div>
                                        <div class="pt-5 text-center swiper-slide text-xl-start py-xl-5">
                                            <p class="text-body">Virtual reality glasses</p>
                                            <h2 class="pb-2 display-4 pb-xl-4">Experience New Reality</h2>
                                            <a class="btn btn-lg btn-primary" href="#">
                                                Shop now
                                                <i class="ci-arrow-up-right fs-lg ms-2 me-n1"></i>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="col-9 col-sm-7 col-md-6 col-lg-5 col-xl-7">

                                <!-- Binded images (controlled slider) -->
                                <div class="swiper user-select-none" id="sliderImages"
                                    data-swiper="{
                    &quot;allowTouchMove&quot;: false,
                    &quot;loop&quot;: true,
                    &quot;effect&quot;: &quot;fade&quot;,
                    &quot;fadeEffect&quot;: {
                      &quot;crossFade&quot;: true
                    }
                  }">
                                    <div class="swiper-wrapper">
                                        <div class="swiper-slide d-flex justify-content-end">
                                            <div class="ratio rtl-flip"
                                                style="max-width: 495px; --cz-aspect-ratio: calc(537 / 495 * 100%)">
                                                <img src="assets/img/home/electronics/hero-slider/01.png" alt="Image">
                                            </div>
                                        </div>
                                        <div class="swiper-slide d-flex justify-content-end">
                                            <div class="ratio rtl-flip"
                                                style="max-width: 495px; --cz-aspect-ratio: calc(537 / 495 * 100%)">
                                                <img src="assets/img/home/electronics/hero-slider/02.png" alt="Image">
                                            </div>
                                        </div>
                                        <div class="swiper-slide d-flex justify-content-end">
                                            <div class="ratio rtl-flip"
                                                style="max-width: 495px; --cz-aspect-ratio: calc(537 / 495 * 100%)">
                                                <img src="assets/img/home/electronics/hero-slider/03.png" alt="Image">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Scrollbar -->
                        <div class="row justify-content-center" data-bs-theme="dark">
                            <div class="col-xxl-10">
                                <div class="mx-5 position-relative mx-xxl-0">
                                    <div class="mb-4 swiper-scrollbar"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>


        <!-- Features -->
        <section class="container pt-5 mt-1 mt-sm-3 mt-lg-4">
            <div class="row row-cols-2 row-cols-md-4 g-4">

                <!-- Item -->
                <div class="col">
                    <div class="d-flex flex-column flex-xxl-row align-items-center">
                        <div class="p-4 mb-3 d-flex text-dark-emphasis bg-body-tertiary rounded-circle mb-xxl-0">
                            <i class="ci-delivery fs-2 m-xxl-1"></i>
                        </div>
                        <div class="text-center text-xxl-start ps-xxl-3">
                            <h3 class="mb-1 h6">Free Shipping &amp; Returns</h3>
                            <p class="mb-0 fs-sm">For all orders over $199.00</p>
                        </div>
                    </div>
                </div>

                <!-- Item -->
                <div class="col">
                    <div class="d-flex flex-column flex-xxl-row align-items-center">
                        <div class="p-4 mb-3 d-flex text-dark-emphasis bg-body-tertiary rounded-circle mb-xxl-0">
                            <i class="ci-credit-card fs-2 m-xxl-1"></i>
                        </div>
                        <div class="text-center text-xxl-start ps-xxl-3">
                            <h3 class="mb-1 h6">Secure Payment</h3>
                            <p class="mb-0 fs-sm">We ensure secure payment</p>
                        </div>
                    </div>
                </div>

                <!-- Item -->
                <div class="col">
                    <div class="d-flex flex-column flex-xxl-row align-items-center">
                        <div class="p-4 mb-3 d-flex text-dark-emphasis bg-body-tertiary rounded-circle mb-xxl-0">
                            <i class="ci-refresh-cw fs-2 m-xxl-1"></i>
                        </div>
                        <div class="text-center text-xxl-start ps-xxl-3">
                            <h3 class="mb-1 h6">Money Back Guarantee</h3>
                            <p class="mb-0 fs-sm">Returning money 30 days</p>
                        </div>
                    </div>
                </div>

                <!-- Item -->
                <div class="col">
                    <div class="d-flex flex-column flex-xxl-row align-items-center">
                        <div class="p-4 mb-3 d-flex text-dark-emphasis bg-body-tertiary rounded-circle mb-xxl-0">
                            <i class="ci-chat fs-2 m-xxl-1"></i>
                        </div>
                        <div class="text-center text-xxl-start ps-xxl-3">
                            <h3 class="mb-1 h6">24/7 Customer Support</h3>
                            <p class="mb-0 fs-sm">Friendly customer support</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>


        <!-- New arrivals (List) -->
        <section class="container pt-5 mt-1 mt-sm-2 mt-md-3 mt-lg-4">
            <h2 class="pb-2 h3 pb-sm-3">Products</h2>
            <div class="row">

                <!-- Banner -->
                <div class="col-lg-4" data-bs-theme="dark">
                    <div class="px-4 pt-4 pb-5 overflow-hidden text-center d-flex flex-column align-items-center justify-content-end h-100 rounded-5 px-lg-3"
                        style="background: #1d2c41 url(assets/img/home/electronics/banner/background.jpg) center/cover no-repeat">
                        <div class="ratio animate-up-down position-relative z-2 me-lg-4"
                            style="max-width: 320px; margin-bottom: -19%; --cz-aspect-ratio: calc(690 / 640 * 100%)">
                            <img src="assets/img/home/electronics/banner/laptop.png" alt="Laptop">
                        </div>
                        <h3 class="mb-2 display-2">MacBook</h3>
                        <p class="mb-4 text-body fw-medium">Be Pro Anywhere</p>
                        <a class="btn btn-sm btn-primary" href="#!">
                            From $1,199
                            <i class="ci-arrow-up-right fs-base ms-1 me-n1"></i>
                        </a>
                    </div>
                </div>

                <!-- Product list -->
                <div class="gap-3 pt-4 col-sm-6 col-lg-4 d-flex flex-column py-lg-4">
                    @foreach ($products as $product)
                        <div class="position-relative animate-underline d-flex align-items-center ps-xl-3">
                            <div class="flex-shrink-0 ratio ratio-1x1" style="width: 110px">
                                <img src="{{ Storage::url($product->image) }}" alt="{{ $product->name }}">
                            </div>
                            <div class="min-w-0 w-100 ps-2 ps-sm-3">
                                <div class="gap-2 mb-2 d-flex align-items-center">
                                    <div class="gap-1 d-flex fs-xs">
                                        @for ($i = 0; $i < 5; $i++)
                                            <i class="ci-star-filled text-warning"></i>
                                        @endfor
                                    </div>
                                    <span class="text-body-tertiary fs-xs">{{ $product->reviews_count }}</span>
                                </div>
                                <h4 class="mb-2">
                                    <a class="stretched-link d-block fs-sm fw-medium text-truncate"
                                        href="{{ route('product.show', $product->id) }}">
                                        <span class="animate-target">{{ $product->name }}</span>
                                    </a>
                                </h4>
                                <div class="mb-0 h5">${{ number_format($product->price, 2) }}</div>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>

        </section>


        <!-- Trending products (Grid) -->
        <section class="container pt-5 mt-2 mt-sm-3 mt-lg-4">

            <!-- Heading -->
            <div class="pb-3 d-flex align-items-center justify-content-between border-bottom pb-md-4">
                <h2 class="mb-0 h3">New Products</h2>
                <div class="nav ms-3">
                    <a class="px-0 py-2 nav-link animate-underline" href="#">
                        <span class="animate-target">View all</span>
                        <i class="ci-chevron-right fs-base ms-1"></i>
                    </a>
                </div>
            </div>

            <!-- Product grid -->
            <div class="pt-4 row row-cols-2 row-cols-md-3 row-cols-lg-4 g-4">

                @foreach ($products as $product)
                    @if ($product->created_at > now()->subDays(3))
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
                                            <img src="{{ Storage::url($product->image) }}" alt="VR Glasses">
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
                                            <span class="animate-target">{{ $product->name }}</span>
                                        </a>
                                    </h3>
                                    <div class="d-flex align-items-center justify-content-between">
                                        <div class="mb-0 h5 lh-1">KES {{ $product->price }}<del
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
                                    {{ $product->description }}
                                </div>
                            </div>
                        </div>
                    @endif
                @endforeach

            </div>
        </section>


        <!-- Sale Banner (CTA) -->
        <section class="container pt-5 mt-sm-2 mt-md-3 mt-lg-4">
            <div class="row g-0">
                <div class="col-md-3 mb-n4 mb-md-0">
                    <div class="py-5 position-relative d-flex flex-column align-items-center justify-content-center h-100">
                        <div class="top-0 position-absolute start-0 w-100 h-100 d-none d-md-block">
                            <span class="top-0 position-absolute start-0 w-100 h-100 rounded-5 d-none-dark"
                                style="background-color: #accbee"></span>
                            <span class="top-0 position-absolute start-0 w-100 h-100 rounded-5 d-none d-block-dark"
                                style="background-color: #1b273a"></span>
                        </div>
                        <div class="top-0 position-absolute start-0 w-100 h-100 d-md-none">
                            <span class="top-0 position-absolute start-0 w-100 h-100 rounded-top-5 d-none-dark"
                                style="background: linear-gradient(90deg, #accbee 0%, #e7f0fd 100%)"></span>
                            <span class="top-0 position-absolute start-0 w-100 h-100 rounded-top-5 d-none d-block-dark"
                                style="background: linear-gradient(90deg, #1b273a 0%, #1f2632 100%)"></span>
                        </div>
                        <div class="mb-0 position-relative z-1 display-1 text-dark-emphasis text-nowrap">
                            20
                            <span class="d-inline-block ms-n2">
                                <span class="d-block fs-1">%</span>
                                <span class="d-block fs-5">OFF</span>
                            </span>
                        </div>
                    </div>
                </div>
                <div class="col-md-9 position-relative">
                    <div class="top-0 overflow-hidden position-absolute start-0 h-100 rounded-pill z-2 d-none d-md-block"
                        style="color: var(--cz-body-bg); margin-left: -2px">
                        <svg width="4" height="436" viewBox="0 0 4 436" xmlns="http://www.w3.org/2000/svg">
                            <path d="M2 0L1.99998 436" stroke="currentColor" stroke-width="3" stroke-dasharray="8 12"
                                stroke-linecap="round"></path>
                        </svg>
                    </div>
                    <div class="position-relative">
                        <span class="top-0 position-absolute start-0 w-100 h-100 rounded-5 d-none-dark rtl-flip"
                            style="background: linear-gradient(90deg, #accbee 0%, #e7f0fd 100%)"></span>
                        <span class="top-0 position-absolute start-0 w-100 h-100 rounded-5 d-none d-block-dark rtl-flip"
                            style="background: linear-gradient(90deg, #1b273a 0%, #1f2632 100%)"></span>
                        <div class="row align-items-center position-relative z-2">
                            <div class="mb-3 col-md-6 mb-md-0">
                                <div class="px-4 text-center text-md-start py-md-5 ps-md-5 pe-md-0 me-md-n5">
                                    <h3 class="pb-2 mb-1 text-uppercase fw-bold ps-xxl-3">Seasonal weekly sale 2024</h3>
                                    <p class="mb-0 text-body-emphasis ps-xxl-3">Use code <span
                                            class="px-2 py-1 bg-white d-inline-block fw-semibold text-dark rounded-pill">Sale
                                            2024</span> to get best offer</p>
                                </div>
                            </div>
                            <div class="pb-5 col-md-6 d-flex justify-content-center justify-content-md-end pb-md-0">
                                <div class="me-xxl-4">
                                    <img src="assets/img/home/electronics/banner/camera.png" class="d-block rtl-flip"
                                        width="420" alt="Camera">
                                    <div class="d-none d-lg-block" style="margin-bottom: -9%"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="d-none d-lg-block" style="padding-bottom: 3%"></div>
        </section>

        <!-- Brands -->
        <section class="container pt-4 pb-5 mb-2 pt-md-5 mt-sm-2 mb-sm-3 mb-md-4 mb-lg-5">
            <div class="row row-cols-2 row-cols-sm-3 row-cols-md-4 row-cols-lg-6 g-3 g-md-4 g-lg-3 g-xl-4">
                <div class="col">
                    <a class="p-3 btn btn-outline-secondary w-100 rounded-4" href="#">
                        <img src="assets/img/shop/electronics/brands/apple-light-mode.svg" class="d-none-dark"
                            alt="Apple">
                        <img src="assets/img/shop/electronics/brands/apple-dark-mode.svg" class="d-none d-block-dark"
                            alt="Apple">
                    </a>
                </div>
                <div class="col">
                    <a class="p-3 btn btn-outline-secondary w-100 rounded-4" href="#">
                        <img src="assets/img/shop/electronics/brands/motorola-light-mode.svg" class="d-none-dark"
                            alt="Apple">
                        <img src="assets/img/shop/electronics/brands/motorola-dark-mode.svg" class="d-none d-block-dark"
                            alt="Apple">
                    </a>
                </div>
                <div class="col">
                    <a class="p-3 btn btn-outline-secondary w-100 rounded-4" href="#">
                        <img src="assets/img/shop/electronics/brands/canon-light-mode.svg" class="d-none-dark"
                            alt="Apple">
                        <img src="assets/img/shop/electronics/brands/canon-dark-mode.svg" class="d-none d-block-dark"
                            alt="Apple">
                    </a>
                </div>
                <div class="col">
                    <a class="p-3 btn btn-outline-secondary w-100 rounded-4" href="#">
                        <img src="assets/img/shop/electronics/brands/samsung-light-mode.svg" class="d-none-dark"
                            alt="Apple">
                        <img src="assets/img/shop/electronics/brands/samsung-dark-mode.svg" class="d-none d-block-dark"
                            alt="Apple">
                    </a>
                </div>
                <div class="col">
                    <a class="p-3 btn btn-outline-secondary w-100 rounded-4" href="#">
                        <img src="assets/img/shop/electronics/brands/sony-light-mode.svg" class="d-none-dark"
                            alt="Apple">
                        <img src="assets/img/shop/electronics/brands/sony-dark-mode.svg" class="d-none d-block-dark"
                            alt="Apple">
                    </a>
                </div>
                <div class="col">
                    <a class="p-3 btn btn-outline-secondary w-100 h-100 rounded-4" href="#">
                        All brands
                        <i class="ci-plus-circle fs-base ms-2"></i>
                    </a>
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
                                    <a class="p-0 nav-link fs-sm hover-effect-underline stretched-link" href="#!">Top
                                        5 New Amazing Gadgets on Apex You Must See</a>
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

<section class="container pt-5 mt-2 mt-sm-3 mt-lg-4">

    <!-- Heading + Countdown -->
    <div class="pb-3 d-flex align-items-start align-items-md-center justify-content-between border-bottom pb-md-4">
        <div class="d-md-flex align-items-center">
            <h2 class="h3 pe-3 me-3 mb-md-0">Special offers for you</h2>

            <!-- Replace "demoDate" inside data-countdown-date attribute with the real date, ex: "10/15/2025 12:00:00" -->
            <div class="d-flex align-items-center" data-countdown-date="demoDate">
                <div class="px-2 btn btn-primary pe-none">
                    <span data-days=""></span>
                    <span>d</span>
                </div>
                <div class="mx-2 animate-blinking text-body-tertiary fs-lg fw-medium">:</div>
                <div class="px-2 btn btn-primary pe-none">
                    <span data-hours=""></span>
                    <span>h</span>
                </div>
                <div class="mx-2 animate-blinking text-body-tertiary fs-lg fw-medium">:</div>
                <div class="px-2 btn btn-primary pe-none">
                    <span data-minutes=""></span>
                    <span>m</span>
                </div>
            </div>
        </div>
        <div class="nav ms-3">
            <a class="px-0 py-2 nav-link animate-underline" href="shop-catalog-electronics.html">
                <span class="animate-target text-nowrap">View all</span>
                <i class="ci-chevron-right fs-base ms-1"></i>
            </a>
        </div>
    </div>

    <!-- Product carousel -->
    <div class="position-relative mx-md-1">

        <!-- External slider prev/next buttons visible on screens > 500px wide (sm breakpoint) -->
        <button type="button"
            class="offers-prev btn btn-icon btn-outline-secondary bg-body rounded-circle animate-slide-start position-absolute top-50 start-0 z-2 translate-middle-y ms-n1 d-none d-sm-inline-flex"
            aria-label="Prev">
            <i class="ci-chevron-left fs-lg animate-target"></i>
        </button>
        <button type="button"
            class="offers-next btn btn-icon btn-outline-secondary bg-body rounded-circle animate-slide-end position-absolute top-50 end-0 z-2 translate-middle-y me-n1 d-none d-sm-inline-flex"
            aria-label="Next">
            <i class="ci-chevron-right fs-lg animate-target"></i>
        </button>

        <!-- Slider -->
        <div class="py-4 swiper px-sm-3"
            data-swiper="{
    &quot;slidesPerView&quot;: 2,
    &quot;spaceBetween&quot;: 24,
    &quot;loop&quot;: true,
    &quot;navigation&quot;: {
      &quot;prevEl&quot;: &quot;.offers-prev&quot;,
      &quot;nextEl&quot;: &quot;.offers-next&quot;
    },
    &quot;breakpoints&quot;: {
      &quot;768&quot;: {
        &quot;slidesPerView&quot;: 3
      },
      &quot;992&quot;: {
        &quot;slidesPerView&quot;: 4
      }
    }
  }">
            <div class="swiper-wrapper">

                <!-- Item -->
                <div class="swiper-slide">
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
                                    <i class="ci-star-half text-warning"></i>
                                </div>
                                <span class="text-body-tertiary fs-xs">(14)</span>
                            </div>
                            <h3 class="pb-1 mb-2">
                                <a class="d-block fs-sm fw-medium text-truncate"
                                    href="shop-product-general-electronics.html">
                                    <span class="animate-target">Xiaomi Wireless Buds Pro</span>
                                </a>
                            </h3>
                            <div class="pb-2 mb-1 d-flex align-items-center justify-content-between">
                                <div class="mb-0 h5 lh-1">$129.99 <del
                                        class="text-body-tertiary fs-sm fw-normal">$156.00</del></div>
                                <button type="button"
                                    class="product-card-button btn btn-icon btn-secondary animate-slide-end ms-2"
                                    aria-label="Add to Cart">
                                    <i class="ci-shopping-cart fs-base animate-target"></i>
                                </button>
                            </div>
                            <div class="mb-2 progress" role="progressbar" aria-label="Available in stock"
                                aria-valuenow="25" aria-valuemin="0" aria-valuemax="100" style="height: 4px">
                                <div class="progress-bar rounded-pill" style="width: 25%"></div>
                            </div>
                            <div class="text-body-secondary fs-sm">Available: <span
                                    class="text-dark-emphasis fw-medium">112</span></div>
                        </div>
                    </div>
                </div>

                <!-- Item -->
                <div class="swiper-slide">
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
                                <span class="text-body-tertiary fs-xs">(138)</span>
                            </div>
                            <h3 class="pb-1 mb-2">
                                <a class="d-block fs-sm fw-medium text-truncate"
                                    href="shop-product-general-electronics.html">
                                    <span class="animate-target">Smart Watch Series 7, White</span>
                                </a>
                            </h3>
                            <div class="pb-2 mb-1 d-flex align-items-center justify-content-between">
                                <div class="mb-0 h5 lh-1">$429.00 <del
                                        class="text-body-tertiary fs-sm fw-normal">$486.00</del></div>
                                <button type="button"
                                    class="product-card-button btn btn-icon btn-secondary animate-slide-end ms-2"
                                    aria-label="Add to Cart">
                                    <i class="ci-shopping-cart fs-base animate-target"></i>
                                </button>
                            </div>
                            <div class="mb-2 progress" role="progressbar" aria-label="Available in stock"
                                aria-valuenow="50" aria-valuemin="0" aria-valuemax="100" style="height: 4px">
                                <div class="progress-bar rounded-pill" style="width: 50%"></div>
                            </div>
                            <div class="text-body-secondary fs-sm">Available: <span
                                    class="text-dark-emphasis fw-medium">45</span></div>
                        </div>
                    </div>
                </div>

                <!-- Item -->
                <div class="swiper-slide">
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
                                    <i class="opacity-75 ci-star text-body-tertiary"></i>
                                </div>
                                <span class="text-body-tertiary fs-xs">(64)</span>
                            </div>
                            <h3 class="pb-1 mb-2">
                                <a class="d-block fs-sm fw-medium text-truncate"
                                    href="shop-product-general-electronics.html">
                                    <span class="animate-target">VRB01 Camera Nikon Max</span>
                                </a>
                            </h3>
                            <div class="pb-2 mb-1 d-flex align-items-center justify-content-between">
                                <div class="mb-0 h5 lh-1">$652.00 <del
                                        class="text-body-tertiary fs-sm fw-normal">$785.00</del></div>
                                <button type="button"
                                    class="product-card-button btn btn-icon btn-secondary animate-slide-end ms-2"
                                    aria-label="Add to Cart">
                                    <i class="ci-shopping-cart fs-base animate-target"></i>
                                </button>
                            </div>
                            <div class="mb-2 progress" role="progressbar" aria-label="Available in stock"
                                aria-valuenow="75" aria-valuemin="0" aria-valuemax="100" style="height: 4px">
                                <div class="progress-bar rounded-pill" style="width: 75%"></div>
                            </div>
                            <div class="text-body-secondary fs-sm">Available: <span
                                    class="text-dark-emphasis fw-medium">13</span></div>
                        </div>
                    </div>
                </div>

                <!-- Item -->
                <div class="swiper-slide">
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
                                    <i class="ci-star-half text-warning"></i>
                                    <i class="opacity-75 ci-star text-body-tertiary"></i>
                                </div>
                                <span class="text-body-tertiary fs-xs">(51)</span>
                            </div>
                            <h3 class="pb-1 mb-2">
                                <a class="d-block fs-sm fw-medium text-truncate"
                                    href="shop-product-general-electronics.html">
                                    <span class="animate-target">Apple iPhone 14 128GB Blue</span>
                                </a>
                            </h3>
                            <div class="pb-2 mb-1 d-flex align-items-center justify-content-between">
                                <div class="mb-0 h5 lh-1">$652.00 <del
                                        class="text-body-tertiary fs-sm fw-normal">$785.00</del></div>
                                <button type="button"
                                    class="product-card-button btn btn-icon btn-secondary animate-slide-end ms-2"
                                    aria-label="Add to Cart">
                                    <i class="ci-shopping-cart fs-base animate-target"></i>
                                </button>
                            </div>
                            <div class="mb-2 progress" role="progressbar" aria-label="Available in stock"
                                aria-valuenow="25" aria-valuemin="0" aria-valuemax="100" style="height: 4px">
                                <div class="progress-bar rounded-pill" style="width: 25%"></div>
                            </div>
                            <div class="text-body-secondary fs-sm">Available: <span
                                    class="text-dark-emphasis fw-medium">7</span></div>
                        </div>
                    </div>
                </div>

                <!-- Item -->
                <div class="swiper-slide">
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
                                    <i class="ci-star-half text-warning"></i>
                                </div>
                                <span class="text-body-tertiary fs-xs">(19)</span>
                            </div>
                            <h3 class="pb-1 mb-2">
                                <a class="d-block fs-sm fw-medium text-truncate"
                                    href="shop-product-general-electronics.html">
                                    <span class="animate-target">VRB01 Virtual Reality Glasses</span>
                                </a>
                            </h3>
                            <div class="pb-2 mb-1 d-flex align-items-center justify-content-between">
                                <div class="mb-0 h5 lh-1">$340.99 <del
                                        class="text-body-tertiary fs-sm fw-normal">$430.00</del></div>
                                <button type="button"
                                    class="product-card-button btn btn-icon btn-secondary animate-slide-end ms-2"
                                    aria-label="Add to Cart">
                                    <i class="ci-shopping-cart fs-base animate-target"></i>
                                </button>
                            </div>
                            <div class="mb-2 progress" role="progressbar" aria-label="Available in stock"
                                aria-valuenow="33" aria-valuemin="0" aria-valuemax="100" style="height: 4px">
                                <div class="progress-bar rounded-pill" style="width: 33%"></div>
                            </div>
                            <div class="text-body-secondary fs-sm">Available: <span
                                    class="text-dark-emphasis fw-medium">16</span></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- External slider prev/next buttons visible on screens < 500px wide (sm breakpoint) -->
        <div class="gap-2 pb-1 mb-3 d-flex justify-content-center mt-n2 d-sm-none">
            <button type="button"
                class="offers-prev btn btn-icon btn-outline-secondary bg-body rounded-circle animate-slide-start me-1"
                aria-label="Prev">
                <i class="ci-chevron-left fs-lg animate-target"></i>
            </button>
            <button type="button"
                class="offers-next btn btn-icon btn-outline-secondary bg-body rounded-circle animate-slide-end"
                aria-label="Next">
                <i class="ci-chevron-right fs-lg animate-target"></i>
            </button>
        </div>
    </div>
</section>

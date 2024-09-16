<!-- Shopping cart offcanvas -->
<div class="offcanvas offcanvas-end pb-sm-2 px-sm-2" id="shoppingCart" tabindex="-1" aria-labelledby="shoppingCartLabel"
    style="width: 500px">

    <!-- Header -->
    <div class="py-3 offcanvas-header flex-column align-items-start pt-lg-4">
        <div class="mb-3 d-flex align-items-center justify-content-between w-100 mb-lg-4">
            <h4 class="offcanvas-title" id="shoppingCartLabel">Shopping cart</h4>
            <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
        </div>
        <p class="fs-sm">Buy <span class="text-dark-emphasis fw-semibold">$183</span> more to get <span
                class="text-dark-emphasis fw-semibold">Free Shipping</span></p>
        <div class="progress w-100" role="progressbar" aria-label="Free shipping progress" aria-valuenow="75"
            aria-valuemin="0" aria-valuemax="100" style="height: 4px">
            <div class="progress-bar bg-warning rounded-pill" style="width: 75%"></div>
        </div>
    </div>

    <!-- Items -->
    <div class="gap-4 pt-2 offcanvas-body d-flex flex-column">

        <!-- Item -->
        <div class="d-flex align-items-center">
            <a class="flex-shrink-0" href="shop-product-general-electronics.html">
                <img src="assets/img/shop/electronics/thumbs/08.png" width="110" alt="iPhone 14">
            </a>
            <div class="min-w-0 w-100 ps-2 ps-sm-3">
                <h5 class="mb-2 d-flex animate-underline">
                    <a class="d-block fs-sm fw-medium text-truncate animate-target"
                        href="shop-product-general-electronics.html">Apple iPhone 14 128GB White</a>
                </h5>
                <div class="pb-1 mb-2 h6">$899.00</div>
                <div class="d-flex align-items-center justify-content-between">
                    <div class="count-input rounded-2">
                        <button type="button" class="btn btn-icon btn-sm" data-decrement=""
                            aria-label="Decrement quantity">
                            <i class="ci-minus"></i>
                        </button>
                        <input type="number" class="form-control form-control-sm" value="1" readonly="">
                        <button type="button" class="btn btn-icon btn-sm" data-increment=""
                            aria-label="Increment quantity">
                            <i class="ci-plus"></i>
                        </button>
                    </div>
                    <button type="button" class="btn-close fs-sm" data-bs-toggle="tooltip"
                        data-bs-custom-class="tooltip-sm" data-bs-title="Remove" aria-label="Remove from cart"></button>
                </div>
            </div>
        </div>

        <!-- Item -->
        <div class="d-flex align-items-center">
            <a class="flex-shrink-0 position-relative" href="shop-product-general-electronics.html">
                <span class="top-0 badge text-bg-danger position-absolute start-0">-10%</span>
                <img src="assets/img/shop/electronics/thumbs/09.png" width="110" alt="iPad Pro">
            </a>
            <div class="min-w-0 w-100 ps-2 ps-sm-3">
                <h5 class="mb-2 d-flex animate-underline">
                    <a class="d-block fs-sm fw-medium text-truncate animate-target"
                        href="shop-product-general-electronics.html">Tablet Apple iPad Pro M2</a>
                </h5>
                <div class="pb-1 mb-2 h6">$989.00 <del class="text-body-tertiary fs-xs fw-normal">$1,099.00</del>
                </div>
                <div class="d-flex align-items-center justify-content-between">
                    <div class="count-input rounded-2">
                        <button type="button" class="btn btn-icon btn-sm" data-decrement=""
                            aria-label="Decrement quantity">
                            <i class="ci-minus"></i>
                        </button>
                        <input type="number" class="form-control form-control-sm" value="1" readonly="">
                        <button type="button" class="btn btn-icon btn-sm" data-increment=""
                            aria-label="Increment quantity">
                            <i class="ci-plus"></i>
                        </button>
                    </div>
                    <button type="button" class="btn-close fs-sm" data-bs-toggle="tooltip"
                        data-bs-custom-class="tooltip-sm" data-bs-title="Remove" aria-label="Remove from cart"></button>
                </div>
            </div>
        </div>

        <!-- Item -->
        <div class="d-flex align-items-center">
            <a class="flex-shrink-0" href="shop-product-general-electronics.html">
                <img src="assets/img/shop/electronics/thumbs/01.png" width="110" alt="Smart Watch">
            </a>
            <div class="min-w-0 w-100 ps-2 ps-sm-3">
                <h5 class="mb-2 d-flex animate-underline">
                    <a class="d-block fs-sm fw-medium text-truncate animate-target"
                        href="shop-product-general-electronics.html">Smart Watch Series 7, White</a>
                </h5>
                <div class="pb-1 mb-2 h6">$429.00</div>
                <div class="d-flex align-items-center justify-content-between">
                    <div class="count-input rounded-2">
                        <button type="button" class="btn btn-icon btn-sm" data-decrement=""
                            aria-label="Decrement quantity">
                            <i class="ci-minus"></i>
                        </button>
                        <input type="number" class="form-control form-control-sm" value="1" readonly="">
                        <button type="button" class="btn btn-icon btn-sm" data-increment=""
                            aria-label="Increment quantity">
                            <i class="ci-plus"></i>
                        </button>
                    </div>
                    <button type="button" class="btn-close fs-sm" data-bs-toggle="tooltip"
                        data-bs-custom-class="tooltip-sm" data-bs-title="Remove"
                        aria-label="Remove from cart"></button>
                </div>
            </div>
        </div>
    </div>

    <!-- Footer -->
    <div class="offcanvas-header flex-column align-items-start">
        <div class="mb-3 d-flex align-items-center justify-content-between w-100 mb-md-4">
            <span class="text-light-emphasis">Subtotal:</span>
            <span class="mb-0 h6">$2,317.00</span>
        </div>
        <div class="gap-3 d-flex w-100">
            <a class="btn btn-lg btn-secondary w-100" href="checkout-v1-cart.html">View cart</a>
            <a class="btn btn-lg btn-primary w-100" href="checkout-v1-delivery-1.html">Checkout</a>
        </div>
    </div>
</div>

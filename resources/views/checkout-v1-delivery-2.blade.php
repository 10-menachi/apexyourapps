@extends('layouts.app')

@section('title', 'Delivery')
@section('content')

    <!-- Page content -->
    <main class="content-wrapper">
        <div class="container py-5">
            <div class="row pt-1 pt-sm-3 pt-lg-4 pb-2 pb-md-3 pb-lg-4 pb-xl-5">

                <!-- Delivery info (Step 1) -->
                <div class="col-lg-8 col-xl-7 mb-5 mb-lg-0">
                    <div class="d-flex flex-column gap-5 pe-lg-4 pe-xl-0">
                        <div class="d-flex align-items-start">
                            <div class="d-flex align-items-center justify-content-center bg-primary text-white rounded-circle fs-sm fw-semibold lh-1 flex-shrink-0" style="width: 2rem; height: 2rem; margin-top: -.125rem">1</div>
                            <div class="flex-grow-0 flex-shrink-0 ps-3 ps-md-4" style="width: calc(100% - 2rem)">
                                <h1 class="h5 mb-md-4">Delivery information</h1>
                                <div class="ms-n5 ms-sm-0">
                                    <p class="fs-sm mb-2">Add your Postcode to see the delivery and collection options available in your area.</p>
                                    <p class="fs-sm mb-4">
                                        <span class="text-dark-emphasis fw-semibold me-1">15006</span>
                                        <a class="text-body" href="checkout-v1-delivery-1.html">Edit</a>
                                    </p>
                                    <h3 class="h6 border-bottom pb-4 mb-0">Choose shipping method</h3>
                                    <div class="mb-lg-4" id="shippingMethod" role="list">

                                        <!-- Courier delivery option -->
                                        <div class="border-bottom">
                                            <div class="form-check mb-0" role="listitem" data-bs-toggle="collapse" data-bs-target="#courier" aria-expanded="true" aria-controls="courier">
                                                <label class="form-check-label d-flex align-items-center text-dark-emphasis fw-semibold py-4">
                            <input type="radio" class="form-check-input fs-base me-2 me-sm-3" name="payment-method" checked="">
                            Courier delivery
                            <span class="fw-normal ms-auto">$16.50</span>
                          </label>
                                            </div>
                                            <div class="collapse show" id="courier" data-bs-parent="#shippingMethod">
                                                <div class="pb-4 ps-3 ms-2 ms-sm-3">
                                                    <p class="fs-sm">Choose a courier delivery time convenient for you:</p>
                                                    <div class="d-flex justify-content-start">
                                                        <button type="button" class="btn btn-icon btn-sm btn-outline-secodary ms-n2" id="courierTimePrev" aria-label="Prev">
                                <i class="ci-chevron-left fs-lg"></i>
                              </button>
                                                        <div class="swiper swiper-load pt-2" data-swiper="{
                                &quot;slidesPerView&quot;: 2,
                                &quot;spaceBetween&quot;: 12,
                                &quot;navigation&quot;: {
                                  &quot;prevEl&quot;: &quot;#courierTimePrev&quot;,
                                  &quot;nextEl&quot;: &quot;#courierTimeNext&quot;
                                },
                                &quot;breakpoints&quot;: {
                                  &quot;600&quot;: {
                                    &quot;slidesPerView&quot;: 3,
                                    &quot;spaceBetween&quot;: 16
                                  },
                                  &quot;768&quot;: {
                                    &quot;slidesPerView&quot;: 4,
                                    &quot;spaceBetween&quot;: 16
                                  },
                                  &quot;991&quot;: {
                                    &quot;slidesPerView&quot;: 3,
                                    &quot;spaceBetween&quot;: 16
                                  },
                                  &quot;1100&quot;: {
                                    &quot;slidesPerView&quot;: 4,
                                    &quot;spaceBetween&quot;: 12
                                  },
                                  &quot;1250&quot;: {
                                    &quot;slidesPerView&quot;: 4,
                                    &quot;spaceBetween&quot;: 24
                                  }
                                }
                              }">
                                                            <div class="swiper-wrapper">
                                                                <div class="swiper-slide text-center">
                                                                    <div class="h6 fs-sm pb-2 mb-0">Monday, 13</div>
                                                                    <div class="py-1 my-1">
                                                                        <input type="radio" class="btn-check" name="courier-time" id="c-mon-1" checked="">
                                                                        <label for="c-mon-1" class="btn btn-outline-secondary w-100 rounded-pill">12:00 - 15:00</label>
                                                                    </div>
                                                                    <div class="py-1 my-1">
                                                                        <input type="radio" class="btn-check" name="courier-time" id="c-mon-2">
                                                                        <label for="c-mon-2" class="btn btn-outline-secondary w-100 rounded-pill">17:00 - 20:00</label>
                                                                    </div>
                                                                </div>
                                                                <div class="swiper-slide text-center">
                                                                    <div class="h6 fs-sm pb-2 mb-0">Tuesday, 14</div>
                                                                    <div class="py-1 my-1">
                                                                        <input type="radio" class="btn-check" name="courier-time" id="c-tue-1">
                                                                        <label for="c-tue-1" class="btn btn-outline-secondary w-100 rounded-pill">09:00 - 12:00</label>
                                                                    </div>
                                                                    <div class="py-1 my-1">
                                                                        <input type="radio" class="btn-check" name="courier-time" id="c-tue-2">
                                                                        <label for="c-tue-2" class="btn btn-outline-secondary w-100 rounded-pill">14:00 - 19:00</label>
                                                                    </div>
                                                                </div>
                                                                <div class="swiper-slide text-center">
                                                                    <div class="h6 fs-sm pb-2 mb-0">Wednesday, 15</div>
                                                                    <div class="py-1 my-1">
                                                                        <input type="radio" class="btn-check" name="courier-time" id="c-wed-1">
                                                                        <label for="c-wed-1" class="btn btn-outline-secondary w-100 rounded-pill">09:00 - 12:00</label>
                                                                    </div>
                                                                    <div class="py-1 my-1">
                                                                        <input type="radio" class="btn-check" name="courier-time" id="c-wed-2">
                                                                        <label for="c-wed-2" class="btn btn-outline-secondary w-100 rounded-pill">14:00 - 19:00</label>
                                                                    </div>
                                                                </div>
                                                                <div class="swiper-slide text-center">
                                                                    <div class="h6 fs-sm pb-2 mb-0">Thursday, 16</div>
                                                                    <div class="py-1 my-1">
                                                                        <input type="radio" class="btn-check" name="courier-time" id="c-thu-1">
                                                                        <label for="c-thu-1" class="btn btn-outline-secondary w-100 rounded-pill">12:00 - 15:00</label>
                                                                    </div>
                                                                    <div class="py-1 my-1">
                                                                        <input type="radio" class="btn-check" name="courier-time" id="c-thu-2">
                                                                        <label for="c-thu-2" class="btn btn-outline-secondary w-100 rounded-pill">17:00 - 20:00</label>
                                                                    </div>
                                                                </div>
                                                                <div class="swiper-slide text-center">
                                                                    <div class="h6 fs-sm pb-2 mb-0">Friday, 17</div>
                                                                    <div class="py-1 my-1">
                                                                        <input type="radio" class="btn-check" name="courier-time" id="c-fri-1">
                                                                        <label for="c-fri-1" class="btn btn-outline-secondary w-100 rounded-pill">09:00 - 12:00</label>
                                                                    </div>
                                                                    <div class="py-1 my-1">
                                                                        <input type="radio" class="btn-check" name="courier-time" id="c-fri-2">
                                                                        <label for="c-fri-2" class="btn btn-outline-secondary w-100 rounded-pill">14:00 - 19:00</label>
                                                                    </div>
                                                                </div>
                                                                <div class="swiper-slide text-center">
                                                                    <div class="h6 fs-sm pb-2 mb-0">Saturday, 18</div>
                                                                    <div class="py-1 my-1">
                                                                        <input type="radio" class="btn-check" name="courier-time" id="c-sat-1">
                                                                        <label for="c-sat-1" class="btn btn-outline-secondary w-100 rounded-pill">09:00 - 11:00</label>
                                                                    </div>
                                                                    <div class="py-1 my-1">
                                                                        <input type="radio" class="btn-check" name="courier-time" id="c-sat-2">
                                                                        <label for="c-sat-2" class="btn btn-outline-secondary w-100 rounded-pill">13:00 - 15:00</label>
                                                                    </div>
                                                                </div>
                                                                <div class="swiper-slide text-center">
                                                                    <div class="h6 fs-sm pb-2 mb-0">Sunday, 19</div>
                                                                    <div class="py-1 my-1">
                                                                        <input type="radio" class="btn-check" name="courier-time" id="c-sun-1">
                                                                        <label for="c-sun-1" class="btn btn-outline-secondary w-100 rounded-pill">09:00 - 11:00</label>
                                                                    </div>
                                                                    <div class="py-1 my-1">
                                                                        <input type="radio" class="btn-check" name="courier-time" id="c-sun-2">
                                                                        <label for="c-sun-2" class="btn btn-outline-secondary w-100 rounded-pill">13:00 - 15:00</label>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <button type="button" class="btn btn-icon btn-sm btn-outline-secodary me-n2" id="courierTimeNext" aria-label="Next">
                                <i class="ci-chevron-right fs-lg"></i>
                              </button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <!-- Pickup from store option -->
                                        <div class="border-bottom">
                                            <div class="form-check mb-0" role="listitem" data-bs-toggle="collapse" data-bs-target="#pickup" aria-expanded="false" aria-controls="pickup">
                                                <label class="form-check-label d-flex align-items-center text-dark-emphasis fw-semibold py-4">
                            <input type="radio" class="form-check-input fs-base me-2 me-sm-3" name="payment-method">
                            Pickup from store
                            <span class="fw-normal ms-auto">Free</span>
                          </label>
                                            </div>
                                            <div class="collapse" id="pickup" data-bs-parent="#shippingMethod">
                                                <div class="pb-4 ps-3 ms-2 ms-sm-3">
                                                    <p class="fs-sm mb-2">Choose a store nearby:</p>
                                                    <div class="w-100 mb-4" style="max-width: 300px">
                                                        <select class="form-select" data-select="{
                                &quot;removeItemButton&quot;: false,
                                &quot;choices&quot;: [
                                  {
                                    &quot;value&quot;: &quot;Cartzilla Supercenter&quot;,
                                    &quot;label&quot;: &quot;<span class=\&quot;text-dark-emphasis fw-medium\&quot;>Cartzilla Supercenter</span>&quot;,
                                    &quot;customProperties&quot;: {
                                      &quot;address&quot;: &quot;<span class=\&quot;d-block text-body-secondary fs-xs fw-normal\&quot;>755 Riverpoint Ct, West Sacramento</span>&quot;,
                                      &quot;selected&quot;: &quot;<span class=\&quot;text-dark-emphasis fw-medium\&quot;>Cartzilla Supercenter</span>&quot;
                                    }
                                  },
                                  {
                                    &quot;value&quot;: &quot;Cartzilla Electronics&quot;,
                                    &quot;label&quot;: &quot;<span class=\&quot;text-dark-emphasis fw-medium\&quot;>Cartzilla Electronics</span>&quot;,
                                    &quot;customProperties&quot;: {
                                      &quot;address&quot;: &quot;<span class=\&quot;d-block text-body-secondary fs-xs fw-normal\&quot;>8270 Delta Shores Cir S, Sacramento</span>&quot;,
                                      &quot;selected&quot;: &quot;<span class=\&quot;text-dark-emphasis fw-medium\&quot;>Cartzilla Electronics</span>&quot;
                                    }
                                  },
                                  {
                                    &quot;value&quot;: &quot;Cartzilla Great Mall&quot;,
                                    &quot;label&quot;: &quot;<span class=\&quot;text-dark-emphasis fw-medium\&quot;>Cartzilla Great Mall</span>&quot;,
                                    &quot;customProperties&quot;: {
                                      &quot;address&quot;: &quot;<span class=\&quot;d-block text-body-secondary fs-xs fw-normal\&quot;>10655 Folsom Blvd, Sacramento</span>&quot;,
                                      &quot;selected&quot;: &quot;<span class=\&quot;text-dark-emphasis fw-medium\&quot;>Cartzilla Great Mall</span>&quot;
                                    }
                                  }
                                ]
                              }" data-select-template="true"></select>
                                                    </div>
                                                    <p class="fs-sm">Choose a pickup time convenient for you:</p>
                                                    <div class="d-flex justify-content-start">
                                                        <button type="button" class="btn btn-icon btn-sm btn-outline-secodary ms-n2" id="pickupTimePrev" aria-label="Prev">
                                <i class="ci-chevron-left fs-lg"></i>
                              </button>
                                                        <div class="swiper swiper-load pt-2" data-swiper="{
                                &quot;slidesPerView&quot;: 2,
                                &quot;spaceBetween&quot;: 12,
                                &quot;navigation&quot;: {
                                  &quot;prevEl&quot;: &quot;#pickupTimePrev&quot;,
                                  &quot;nextEl&quot;: &quot;#pickupTimeNext&quot;
                                },
                                &quot;breakpoints&quot;: {
                                  &quot;600&quot;: {
                                    &quot;slidesPerView&quot;: 3,
                                    &quot;spaceBetween&quot;: 16
                                  },
                                  &quot;768&quot;: {
                                    &quot;slidesPerView&quot;: 4,
                                    &quot;spaceBetween&quot;: 16
                                  },
                                  &quot;991&quot;: {
                                    &quot;slidesPerView&quot;: 3,
                                    &quot;spaceBetween&quot;: 16
                                  },
                                  &quot;1100&quot;: {
                                    &quot;slidesPerView&quot;: 4,
                                    &quot;spaceBetween&quot;: 12
                                  },
                                  &quot;1250&quot;: {
                                    &quot;slidesPerView&quot;: 4,
                                    &quot;spaceBetween&quot;: 24
                                  }
                                }
                              }">
                                                            <div class="swiper-wrapper">
                                                                <div class="swiper-slide text-center">
                                                                    <div class="h6 fs-sm pb-2 mb-0">Monday, 13</div>
                                                                    <div class="py-1 my-1">
                                                                        <input type="radio" class="btn-check" name="pickup-time" id="p-mon-1" checked="">
                                                                        <label for="p-mon-1" class="btn btn-outline-secondary w-100 rounded-pill">12:00 - 15:00</label>
                                                                    </div>
                                                                    <div class="py-1 my-1">
                                                                        <input type="radio" class="btn-check" name="pickup-time" id="p-mon-2">
                                                                        <label for="p-mon-2" class="btn btn-outline-secondary w-100 rounded-pill">17:00 - 20:00</label>
                                                                    </div>
                                                                </div>
                                                                <div class="swiper-slide text-center">
                                                                    <div class="h6 fs-sm pb-2 mb-0">Tuesday, 14</div>
                                                                    <div class="py-1 my-1">
                                                                        <input type="radio" class="btn-check" name="pickup-time" id="p-tue-1">
                                                                        <label for="p-tue-1" class="btn btn-outline-secondary w-100 rounded-pill">09:00 - 12:00</label>
                                                                    </div>
                                                                    <div class="py-1 my-1">
                                                                        <input type="radio" class="btn-check" name="pickup-time" id="p-tue-2">
                                                                        <label for="p-tue-2" class="btn btn-outline-secondary w-100 rounded-pill">14:00 - 19:00</label>
                                                                    </div>
                                                                </div>
                                                                <div class="swiper-slide text-center">
                                                                    <div class="h6 fs-sm pb-2 mb-0">Wednesday, 15</div>
                                                                    <div class="py-1 my-1">
                                                                        <input type="radio" class="btn-check" name="pickup-time" id="p-wed-1">
                                                                        <label for="p-wed-1" class="btn btn-outline-secondary w-100 rounded-pill">09:00 - 12:00</label>
                                                                    </div>
                                                                    <div class="py-1 my-1">
                                                                        <input type="radio" class="btn-check" name="pickup-time" id="p-wed-2">
                                                                        <label for="p-wed-2" class="btn btn-outline-secondary w-100 rounded-pill">14:00 - 19:00</label>
                                                                    </div>
                                                                </div>
                                                                <div class="swiper-slide text-center">
                                                                    <div class="h6 fs-sm pb-2 mb-0">Thursday, 16</div>
                                                                    <div class="py-1 my-1">
                                                                        <input type="radio" class="btn-check" name="pickup-time" id="p-thu-1">
                                                                        <label for="p-thu-1" class="btn btn-outline-secondary w-100 rounded-pill">12:00 - 15:00</label>
                                                                    </div>
                                                                    <div class="py-1 my-1">
                                                                        <input type="radio" class="btn-check" name="pickup-time" id="p-thu-2">
                                                                        <label for="p-thu-2" class="btn btn-outline-secondary w-100 rounded-pill">17:00 - 20:00</label>
                                                                    </div>
                                                                </div>
                                                                <div class="swiper-slide text-center">
                                                                    <div class="h6 fs-sm pb-2 mb-0">Friday, 17</div>
                                                                    <div class="py-1 my-1">
                                                                        <input type="radio" class="btn-check" name="pickup-time" id="p-fri-1">
                                                                        <label for="p-fri-1" class="btn btn-outline-secondary w-100 rounded-pill">09:00 - 12:00</label>
                                                                    </div>
                                                                    <div class="py-1 my-1">
                                                                        <input type="radio" class="btn-check" name="pickup-time" id="p-fri-2">
                                                                        <label for="p-fri-2" class="btn btn-outline-secondary w-100 rounded-pill">14:00 - 19:00</label>
                                                                    </div>
                                                                </div>
                                                                <div class="swiper-slide text-center">
                                                                    <div class="h6 fs-sm pb-2 mb-0">Saturday, 18</div>
                                                                    <div class="py-1 my-1">
                                                                        <input type="radio" class="btn-check" name="pickup-time" id="p-sat-1">
                                                                        <label for="p-sat-1" class="btn btn-outline-secondary w-100 rounded-pill">09:00 - 11:00</label>
                                                                    </div>
                                                                    <div class="py-1 my-1">
                                                                        <input type="radio" class="btn-check" name="pickup-time" id="p-sat-2">
                                                                        <label for="p-sat-2" class="btn btn-outline-secondary w-100 rounded-pill">13:00 - 15:00</label>
                                                                    </div>
                                                                </div>
                                                                <div class="swiper-slide text-center">
                                                                    <div class="h6 fs-sm pb-2 mb-0">Sunday, 19</div>
                                                                    <div class="py-1 my-1">
                                                                        <input type="radio" class="btn-check" name="pickup-time" id="p-sun-1">
                                                                        <label for="p-sun-1" class="btn btn-outline-secondary w-100 rounded-pill">09:00 - 11:00</label>
                                                                    </div>
                                                                    <div class="py-1 my-1">
                                                                        <input type="radio" class="btn-check" name="pickup-time" id="p-sun-2">
                                                                        <label for="p-sun-2" class="btn btn-outline-secondary w-100 rounded-pill">13:00 - 15:00</label>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <button type="button" class="btn btn-icon btn-sm btn-outline-secodary me-n2" id="pickupTimeNext" aria-label="Next">
                                <i class="ci-chevron-right fs-lg"></i>
                              </button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <!-- Local shipping option -->
                                        <div class="border-bottom">
                                            <div class="form-check mb-0" role="listitem" data-bs-toggle="collapse" data-bs-target="#shipping" aria-expanded="false" aria-controls="shipping">
                                                <label class="form-check-label d-flex align-items-center text-dark-emphasis fw-semibold py-4">
                            <input type="radio" class="form-check-input fs-base me-2 me-sm-3" name="payment-method">
                            Local shipping
                            <span class="fw-normal ms-auto">$23.40</span>
                          </label>
                                            </div>
                                            <div class="collapse" id="shipping" data-bs-parent="#shippingMethod">
                                                <div class="pb-4 ps-3 ms-2 ms-sm-3">
                                                    <div class="alert d-flex align-items-center alert-info mb-3" role="alert">
                                                        <i class="ci-info fs-lg me-2"></i>
                                                        <div class="fs-sm">Local shipping can take up to <span class="text-info-emphasis fw-semibold">5</span> business days.</div>
                                                    </div>
                                                    <p class="fs-sm mb-0">Estimated date of delivery - <span class="text-body-emphasis fw-medium">March 15, 2024</span></p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <a class="btn btn-lg btn-primary w-100 d-none d-lg-flex" href="checkout-v1-shipping.html">
                      Continue
                      <i class="ci-chevron-right fs-lg ms-1 me-n1"></i>
                    </a>
                                </div>
                            </div>
                        </div>

                        <!-- Shipping address -->
                        <div class="d-flex align-items-start">
                            <div class="d-flex align-items-center justify-content-center bg-body-secondary text-body-secondary rounded-circle fs-sm fw-semibold lh-1 flex-shrink-0" style="width: 2rem; height: 2rem; margin-top: -.125rem">2</div>
                            <h2 class="h5 text-body-secondary ps-3 ps-md-4 mb-0">Shipping address</h2>
                        </div>

                        <!-- Payment -->
                        <div class="d-flex align-items-start">
                            <div class="d-flex align-items-center justify-content-center bg-body-secondary text-body-secondary rounded-circle fs-sm fw-semibold lh-1 flex-shrink-0" style="width: 2rem; height: 2rem; margin-top: -.125rem">3</div>
                            <h2 class="h5 text-body-secondary ps-3 ps-md-4 mb-0">Payment</h2>
                        </div>
                    </div>
                </div>


                <!-- Order summary (sticky sidebar) -->
                <aside class="col-lg-4 offset-xl-1" style="margin-top: -100px">
                    <div class="position-sticky top-0" style="padding-top: 100px">
                        <div class="bg-body-tertiary rounded-5 p-4 mb-3">
                            <div class="p-sm-2 p-lg-0 p-xl-2">
                                <div class="border-bottom pb-4 mb-4">
                                    <div class="d-flex align-items-center justify-content-between mb-4">
                                        <h5 class="mb-0">Order summary</h5>
                                        <div class="nav">
                                            <a class="nav-link text-decoration-underline p-0" href="checkout-v1-cart.html">Edit</a>
                                        </div>
                                    </div>
                                    <a class="d-flex align-items-center gap-2 text-decoration-none" href="#orderPreview" data-bs-toggle="offcanvas">
                                        <div class="ratio ratio-1x1" style="max-width: 64px">
                                            <img src="assets/img/shop/electronics/thumbs/08.png" class="d-block p-1" alt="iPhone">
                                        </div>
                                        <div class="ratio ratio-1x1" style="max-width: 64px">
                                            <img src="assets/img/shop/electronics/thumbs/09.png" class="d-block p-1" alt="iPad Pro">
                                        </div>
                                        <div class="ratio ratio-1x1" style="max-width: 64px">
                                            <img src="assets/img/shop/electronics/thumbs/01.png" class="d-block p-1" alt="Smart Watch">
                                        </div>
                                        <i class="ci-chevron-right text-body fs-xl p-0 ms-auto"></i>
                                    </a>
                                </div>
                                <ul class="list-unstyled fs-sm gap-3 mb-0">
                                    <li class="d-flex justify-content-between">
                                        Subtotal (3 items):
                                        <span class="text-dark-emphasis fw-medium">$2,427.00</span>
                                    </li>
                                    <li class="d-flex justify-content-between">
                                        Saving:
                                        <span class="text-danger fw-medium">-$110.00</span>
                                    </li>
                                    <li class="d-flex justify-content-between">
                                        Tax collected:
                                        <span class="text-dark-emphasis fw-medium">$73.40</span>
                                    </li>
                                    <li class="d-flex justify-content-between">
                                        Shipping:
                                        <span class="text-dark-emphasis fw-medium">$16.50</span>
                                    </li>
                                </ul>
                                <div class="border-top pt-4 mt-4">
                                    <div class="d-flex justify-content-between mb-3">
                                        <span class="fs-sm">Estimated total:</span>
                                        <span class="h5 mb-0">$2,406.90</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="bg-body-tertiary rounded-5 p-4">
                            <div class="d-flex align-items-center px-sm-2 px-lg-0 px-xl-2">
                                <svg class="text-warning flex-shrink-0" xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"><path d="M1.333 9.667H7.5V16h-5c-.64 0-1.167-.527-1.167-1.167V9.667zm13.334 0v5.167c0 .64-.527 1.167-1.167 1.167h-5V9.667h6.167zM0 5.833V7.5c0 .64.527 1.167 1.167 1.167h.167H7.5v-1-3H1.167C.527 4.667 0 5.193 0 5.833zm14.833-1.166H8.5v3 1h6.167.167C15.473 8.667 16 8.14 16 7.5V5.833c0-.64-.527-1.167-1.167-1.167z"></path><path d="M8 5.363a.5.5 0 0 1-.495-.573C7.752 3.123 9.054-.03 12.219-.03c1.807.001 2.447.977 2.447 1.813 0 1.486-2.069 3.58-6.667 3.58zM12.219.971c-2.388 0-3.295 2.27-3.595 3.377 1.884-.088 3.072-.565 3.756-.971.949-.563 1.287-1.193 1.287-1.595 0-.599-.747-.811-1.447-.811z"></path><path d="M8.001 5.363c-4.598 0-6.667-2.094-6.667-3.58 0-.836.641-1.812 2.448-1.812 3.165 0 4.467 3.153 4.713 4.819a.5.5 0 0 1-.495.573zM3.782.971c-.7 0-1.448.213-1.448.812 0 .851 1.489 2.403 5.042 2.566C7.076 3.241 6.169.971 3.782.971z"></path></svg>
                                <div class="text-dark-emphasis fs-sm ps-2 ms-1">Congratulations! You have earned <span class="fw-semibold">240 bonuses</span></div>
                            </div>
                        </div>
                    </div>
                </aside>
            </div>
        </div>
    </main>
@endsection
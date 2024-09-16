@extends('layouts.app')

@section('title', 'Blogs')
@section('content')

    <!-- Page content -->
    <main class="content-wrapper">

        <!-- Breadcrumb -->
        <nav class="container pt-3 my-3 my-md-4" aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="home-electronics.html">Home</a></li>
                <li class="breadcrumb-item active" aria-current="page">Blog</li>
            </ol>
        </nav>


        <!-- Page title -->
        <h1 class="h3 container mb-4">Our blog</h1>


        <!-- Featured posts -->
        <section class="container pb-5">
            <div class="row gy-5 pb-5">

                <!-- Article -->
                <article class="col-md-6 col-lg-7">
                    <a class="ratio d-flex hover-effect-scale rounded-4 overflow-hidden" href="blog-single-v1.html" style="--cz-aspect-ratio: calc(484 / 746 * 100%)">
              <img src="assets/img/blog/grid/v1/01.jpg" class="hover-effect-target" alt="Image">
            </a>
                    <div class="pt-4">
                        <div class="nav align-items-center gap-2 pb-2 mt-n1 mb-1">
                            <a class="nav-link text-body fs-xs text-uppercase p-0" href="#!">Gadget reviews</a>
                            <hr class="vr my-1 mx-1">
                            <span class="text-body-tertiary fs-xs">October 13, 2024</span>
                        </div>
                        <h3 class="h5 mb-0">
                            <a class="hover-effect-underline" href="blog-single-v1.html">Discover how to maximize your productivity with these essential tech gadgets designed for the modern home office</a>
                        </h3>
                    </div>
                </article>

                <!-- Side list -->
                <div class="col-md-6 col-lg-5 d-flex flex-column align-content-between gap-4">

                    <!-- Article -->
                    <article class="hover-effect-scale position-relative d-flex align-items-center ps-xl-4 mb-xl-1">
                        <div class="w-100 pe-3 pe-sm-4 pe-lg-3 pe-xl-4">
                            <div class="text-body-tertiary fs-xs pb-2 mb-1">October 10, 2024</div>
                            <h3 class="h6 mb-2">
                                <a class="hover-effect-underline stretched-link" href="blog-single-v1.html">Digital digest: News and views on the latest electronic products</a>
                            </h3>
                        </div>
                        <div class="ratio w-100 rounded overflow-hidden" style="max-width: 196px; --cz-aspect-ratio: calc(140 / 196 * 100%)">
                            <img src="assets/img/blog/grid/v1/02.jpg" class="hover-effect-target" alt="Image">
                        </div>
                    </article>

                    <!-- Article -->
                    <article class="hover-effect-scale position-relative d-flex align-items-center ps-xl-4 mb-xl-1">
                        <div class="w-100 pe-3 pe-sm-4 pe-lg-3 pe-xl-4">
                            <div class="text-body-tertiary fs-xs pb-2 mb-1">September 29, 2024</div>
                            <h3 class="h6 mb-2">
                                <a class="hover-effect-underline stretched-link" href="blog-single-v1.html">Embracing connections: How modern technology bridges gaps and builds communities</a>
                            </h3>
                        </div>
                        <div class="ratio w-100 rounded overflow-hidden" style="max-width: 196px; --cz-aspect-ratio: calc(140 / 196 * 100%)">
                            <img src="assets/img/blog/grid/v1/03.jpg" class="hover-effect-target" alt="Image">
                        </div>
                    </article>

                    <!-- Article -->
                    <article class="hover-effect-scale position-relative d-flex align-items-center ps-xl-4 mb-xl-1">
                        <div class="w-100 pe-3 pe-sm-4 pe-lg-3 pe-xl-4">
                            <div class="text-body-tertiary fs-xs pb-2 mb-1">September 17, 2024</div>
                            <h3 class="h6 mb-2">
                                <a class="hover-effect-underline stretched-link" href="blog-single-v1.html">Transform your home into a smart hub with the latest IoT</a>
                            </h3>
                        </div>
                        <div class="ratio w-100 rounded overflow-hidden" style="max-width: 196px; --cz-aspect-ratio: calc(140 / 196 * 100%)">
                            <img src="assets/img/blog/grid/v1/04.jpg" class="hover-effect-target" alt="Image">
                        </div>
                    </article>
                </div>
            </div>
            <hr class="my-0 my-md-2 my-lg-4">
        </section>


        <!-- Posts grid + Sidebar -->
        <section class="container pb-5 mb-2 mb-md-3 mb-lg-4 mb-xl-5">
            <div class="row">

                <!-- Posts grid -->
                <div class="col-lg-8">
                    <div class="row row-cols-1 row-cols-sm-2 gy-5">

                        <!-- Article -->
                        <article class="col">
                            <a class="ratio d-flex hover-effect-scale rounded overflow-hidden" href="blog-single-v1.html" style="--cz-aspect-ratio: calc(305 / 416 * 100%)">
                  <img src="assets/img/blog/grid/v1/05.jpg" class="hover-effect-target" alt="Image">
                </a>
                            <div class="pt-4">
                                <div class="nav align-items-center gap-2 pb-2 mt-n1 mb-1">
                                    <a class="nav-link text-body fs-xs text-uppercase p-0" href="#!">Tech tips</a>
                                    <hr class="vr my-1 mx-1">
                                    <span class="text-body-tertiary fs-xs">September 11, 2024</span>
                                </div>
                                <h3 class="h5 mb-0">
                                    <a class="hover-effect-underline" href="blog-single-v1.html">Optimizing your workspace: The guide to an efficient and minimalist desk setup</a>
                                </h3>
                            </div>
                        </article>

                        <!-- Article -->
                        <article class="col">
                            <a class="ratio d-flex hover-effect-scale rounded overflow-hidden" href="blog-single-v1.html" style="--cz-aspect-ratio: calc(305 / 416 * 100%)">
                  <img src="assets/img/blog/grid/v1/06.jpg" class="hover-effect-target" alt="Image">
                </a>
                            <div class="pt-4">
                                <div class="nav align-items-center gap-2 pb-2 mt-n1 mb-1">
                                    <a class="nav-link text-body fs-xs text-uppercase p-0" href="#!">Industry trends</a>
                                    <hr class="vr my-1 mx-1">
                                    <span class="text-body-tertiary fs-xs">September 5, 2024</span>
                                </div>
                                <h3 class="h5 mb-0">
                                    <a class="hover-effect-underline" href="blog-single-v1.html">Exploring the skies: The rise of drone photography and videography</a>
                                </h3>
                            </div>
                        </article>

                        <!-- Article -->
                        <article class="col">
                            <a class="ratio d-flex hover-effect-scale rounded overflow-hidden" href="blog-single-v1.html" style="--cz-aspect-ratio: calc(305 / 416 * 100%)">
                  <img src="assets/img/blog/grid/v1/07.jpg" class="hover-effect-target" alt="Image">
                </a>
                            <div class="pt-4">
                                <div class="nav align-items-center gap-2 pb-2 mt-n1 mb-1">
                                    <a class="nav-link text-body fs-xs text-uppercase p-0" href="#!">IoT</a>
                                    <hr class="vr my-1 mx-1">
                                    <span class="text-body-tertiary fs-xs">August 23, 2024</span>
                                </div>
                                <h3 class="h5 mb-0">
                                    <a class="hover-effect-underline" href="blog-single-v1.html">Connecting the dots: How IoT technology is transforming everyday life</a>
                                </h3>
                            </div>
                        </article>

                        <!-- Article -->
                        <article class="col">
                            <a class="ratio d-flex hover-effect-scale rounded overflow-hidden" href="blog-single-v1.html" style="--cz-aspect-ratio: calc(305 / 416 * 100%)">
                  <img src="assets/img/blog/grid/v1/08.jpg" class="hover-effect-target" alt="Image">
                </a>
                            <div class="pt-4">
                                <div class="nav align-items-center gap-2 pb-2 mt-n1 mb-1">
                                    <a class="nav-link text-body fs-xs text-uppercase p-0" href="#!">Buying guides</a>
                                    <hr class="vr my-1 mx-1">
                                    <span class="text-body-tertiary fs-xs">August 18, 2024</span>
                                </div>
                                <h3 class="h5 mb-0">
                                    <a class="hover-effect-underline" href="blog-single-v1.html">How to find the best deals and make secure transactions online</a>
                                </h3>
                            </div>
                        </article>

                        <!-- Article -->
                        <article class="col">
                            <a class="ratio d-flex hover-effect-scale rounded overflow-hidden" href="blog-single-v1.html" style="--cz-aspect-ratio: calc(305 / 416 * 100%)">
                  <img src="assets/img/blog/grid/v1/09.jpg" class="hover-effect-target" alt="Image">
                </a>
                            <div class="pt-4">
                                <div class="nav align-items-center gap-2 pb-2 mt-n1 mb-1">
                                    <a class="nav-link text-body fs-xs text-uppercase p-0" href="#!">Gadget reviews</a>
                                    <hr class="vr my-1 mx-1">
                                    <span class="text-body-tertiary fs-xs">August 9, 2024</span>
                                </div>
                                <h3 class="h5 mb-0">
                                    <a class="hover-effect-underline" href="blog-single-v1.html">Top 10 electric kitchen appliances for modern homes</a>
                                </h3>
                            </div>
                        </article>

                        <!-- Article -->
                        <article class="col">
                            <a class="ratio d-flex hover-effect-scale rounded overflow-hidden" href="blog-single-v1.html" style="--cz-aspect-ratio: calc(305 / 416 * 100%)">
                  <img src="assets/img/blog/grid/v1/10.jpg" class="hover-effect-target" alt="Image">
                </a>
                            <div class="pt-4">
                                <div class="nav align-items-center gap-2 pb-2 mt-n1 mb-1">
                                    <a class="nav-link text-body fs-xs text-uppercase p-0" href="#!">Gaming</a>
                                    <hr class="vr my-1 mx-1">
                                    <span class="text-body-tertiary fs-xs">July 27, 2024</span>
                                </div>
                                <h3 class="h5 mb-0">
                                    <a class="hover-effect-underline" href="blog-single-v1.html">Immersive worlds: A dive into the latest VR gear and experiences</a>
                                </h3>
                            </div>
                        </article>
                    </div>


                    <!-- Contributors' posts slider -->
                    <div class="py-5 my-1 my-sm-2 my-md-3 my-lg-4 my-xl-5">
                        <div class="d-flex align-items-center justify-content-between mb-4">
                            <h2 class="h3 mb-0">Charitable contributions</h2>
                            <div class="d-flex gap-2">
                                <button type="button" id="prev-post" class="btn btn-prev btn-icon btn-outline-secondary rounded-circle animate-slide-start me-1" aria-label="Prev">
                    <i class="ci-chevron-left fs-lg animate-target"></i>
                  </button>
                                <button type="button" id="next-post" class="btn btn-next btn-icon btn-outline-secondary rounded-circle animate-slide-end" aria-label="Next">
                    <i class="ci-chevron-right fs-lg animate-target"></i>
                  </button>
                            </div>
                        </div>
                        <div class="row row-cols-1 row-cols-md-2 g-0 overflow-hidden rounded-5">

                            <!-- Binded images (controlled slider) -->
                            <div class="col order-md-2 user-select-none">
                                <div class="swiper h-100" id="images" data-swiper="{
                    &quot;allowTouchMove&quot;: false,
                    &quot;loop&quot;: true,
                    &quot;effect&quot;: &quot;fade&quot;
                  }">
                                    <div class="swiper-wrapper">
                                        <div class="swiper-slide">
                                            <div class="ratio ratio-16x9"></div>
                                            <img src="assets/img/blog/grid/v1/slider01.jpg" class="position-absolute top-0 start-0 w-100 h-100 object-fit-cover" alt="Image">
                                        </div>
                                        <div class="swiper-slide">
                                            <div class="ratio ratio-16x9"></div>
                                            <img src="assets/img/blog/grid/v1/slider02.jpg" class="position-absolute top-0 start-0 w-100 h-100 object-fit-cover" alt="Image">
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!-- Text slider -->
                            <div class="col bg-dark order-md-1 py-5 px-4 px-sm-5" data-bs-theme="dark">
                                <div class="swiper py-sm-2 py-md-3 my-xl-2 my-xxl-3" data-swiper="{
                    &quot;spaceBetween&quot;: 40,
                    &quot;loop&quot;: true,
                    &quot;speed&quot;: 400,
                    &quot;controlSlider&quot;: &quot;#images&quot;,
                    &quot;navigation&quot;: {
                      &quot;prevEl&quot;: &quot;#prev-post&quot;,
                      &quot;nextEl&quot;: &quot;#next-post&quot;
                    }
                  }">
                                    <div class="swiper-wrapper">
                                        <div class="swiper-slide">
                                            <h3 class="h5">The role of philanthropy in building a better world</h3>
                                            <p class="text-body fs-sm pb-4">Charitable contributions are a vital aspect of building a better world. These contributions come in various forms, including monetary donations, volunteering time, providing expertise...</p>
                                            <a class="btn btn-outline-light" href="blog-single-v1.html">Read more</a>
                                        </div>
                                        <div class="swiper-slide">
                                            <h3 class="h5">Supporting communities through charitable giving</h3>
                                            <p class="text-body fs-sm pb-4">Join us on a journey of generosity as we spotlight the transformative power of charitable contributions. In this section, we celebrate the stories of impact made possible by your...</p>
                                            <a class="btn btn-outline-light" href="blog-single-v1.html">Read more</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>


                    <!-- Posts grid -->
                    <div class="row row-cols-1 row-cols-sm-2 gy-5 pb-2 pb-sm-0">

                        <!-- Article -->
                        <article class="col">
                            <a class="ratio d-flex hover-effect-scale rounded overflow-hidden" href="blog-single-v1.html" style="--cz-aspect-ratio: calc(305 / 416 * 100%)">
                  <img src="assets/img/blog/grid/v1/11.jpg" class="hover-effect-target" alt="Image">
                </a>
                            <div class="pt-4">
                                <div class="nav align-items-center gap-2 pb-2 mt-n1 mb-1">
                                    <a class="nav-link text-body fs-xs text-uppercase p-0" href="#!">Tech news</a>
                                    <hr class="vr my-1 mx-1">
                                    <span class="text-body-tertiary fs-xs">July 16, 2024</span>
                                </div>
                                <h3 class="h5 mb-0">
                                    <a class="hover-effect-underline" href="blog-single-v1.html">Tap, pay, and go: Simplifying transactions with mobile payment solutions</a>
                                </h3>
                            </div>
                        </article>

                        <!-- Article -->
                        <article class="col">
                            <a class="ratio d-flex hover-effect-scale rounded overflow-hidden" href="blog-single-v1.html" style="--cz-aspect-ratio: calc(305 / 416 * 100%)">
                  <img src="assets/img/blog/grid/v1/12.jpg" class="hover-effect-target" alt="Image">
                </a>
                            <div class="pt-4">
                                <div class="nav align-items-center gap-2 pb-2 mt-n1 mb-1">
                                    <a class="nav-link text-body fs-xs text-uppercase p-0" href="#!">Industry trends</a>
                                    <hr class="vr my-1 mx-1">
                                    <span class="text-body-tertiary fs-xs">July 8, 2024</span>
                                </div>
                                <h3 class="h5 mb-0">
                                    <a class="hover-effect-underline" href="blog-single-v1.html">The biggest prospects for the smartphone electronics industry</a>
                                </h3>
                            </div>
                        </article>

                        <!-- Article -->
                        <article class="col">
                            <a class="ratio d-flex hover-effect-scale rounded overflow-hidden" href="blog-single-v1.html" style="--cz-aspect-ratio: calc(305 / 416 * 100%)">
                  <img src="assets/img/blog/grid/v1/13.jpg" class="hover-effect-target" alt="Image">
                </a>
                            <div class="pt-4">
                                <div class="nav align-items-center gap-2 pb-2 mt-n1 mb-1">
                                    <a class="nav-link text-body fs-xs text-uppercase p-0" href="#!">Product reviews</a>
                                    <hr class="vr my-1 mx-1">
                                    <span class="text-body-tertiary fs-xs">June 27, 2024</span>
                                </div>
                                <h3 class="h5 mb-0">
                                    <a class="hover-effect-underline" href="blog-single-v1.html">Future engineers start young: A review of the latest robotic kit for kids</a>
                                </h3>
                            </div>
                        </article>

                        <!-- Article -->
                        <article class="col">
                            <a class="ratio d-flex hover-effect-scale rounded overflow-hidden" href="blog-single-v1.html" style="--cz-aspect-ratio: calc(305 / 416 * 100%)">
                  <img src="assets/img/blog/grid/v1/14.jpg" class="hover-effect-target" alt="Image">
                </a>
                            <div class="pt-4">
                                <div class="nav align-items-center gap-2 pb-2 mt-n1 mb-1">
                                    <a class="nav-link text-body fs-xs text-uppercase p-0" href="#!">Buying guides</a>
                                    <hr class="vr my-1 mx-1">
                                    <span class="text-body-tertiary fs-xs">June 19, 2024</span>
                                </div>
                                <h3 class="h5 mb-0">
                                    <a class="hover-effect-underline" href="blog-single-v1.html">A detailed guide to the latest smartphones on the market</a>
                                </h3>
                            </div>
                        </article>
                    </div>
                    <hr class="mt-4 mt-sm-5">

                    <!-- Pagination -->
                    <nav aria-label="Blog pages">
                        <ul class="pagination pagination-lg">
                            <li class="page-item active" aria-current="page">
                                <span class="page-link">
                    1
                    <span class="visually-hidden">(current)</span>
                                </span>
                            </li>
                            <li class="page-item">
                                <a class="page-link" href="#">2</a>
                            </li>
                            <li class="page-item">
                                <a class="page-link" href="#">3</a>
                            </li>
                            <li class="page-item">
                                <a class="page-link" href="#">4</a>
                            </li>
                            <li class="page-item">
                                <a class="page-link" href="#">5</a>
                            </li>
                        </ul>
                    </nav>
                </div>


                <!-- Sticky sidebar that turns into offcanvas on screens < 992px wide (lg breakpoint) -->
                <aside class="col-lg-4 col-xl-3 offset-xl-1" style="margin-top: -115px">
                    <div class="offcanvas-lg offcanvas-end sticky-lg-top ps-lg-4 ps-xl-0" id="blogSidebar">
                        <div class="d-none d-lg-block" style="height: 115px"></div>
                        <div class="offcanvas-header py-3">
                            <h5 class="offcanvas-title">Sidebar</h5>
                            <button type="button" class="btn-close" data-bs-dismiss="offcanvas" data-bs-target="#blogSidebar" aria-label="Close"></button>
                        </div>
                        <div class="offcanvas-body d-block pt-2 py-lg-0">
                            <h4 class="h6 mb-4">Blog categories</h4>
                            <div class="d-flex flex-wrap gap-3">
                                <a class="btn btn-outline-secondary px-3" href="#!">Gadget reviews</a>
                                <a class="btn btn-outline-secondary px-3" href="#!">Tech news</a>
                                <a class="btn btn-outline-secondary px-3" href="#!">Industry trends</a>
                                <a class="btn btn-outline-secondary px-3" href="#!">Buying guides</a>
                                <a class="btn btn-outline-secondary px-3" href="#!">Tech tips</a>
                                <a class="btn btn-outline-secondary px-3" href="#!">Gaming</a>
                                <a class="btn btn-outline-secondary px-3" href="#!">IoT</a>
                            </div>
                            <h4 class="h6 pt-5 mb-0">Trending posts</h4>
                            <article class="hover-effect-scale position-relative d-flex align-items-center border-bottom py-4">
                                <div class="w-100 pe-3">
                                    <h3 class="h6 lh-base fs-sm mb-0">
                                        <a class="hover-effect-underline stretched-link" href="blog-single-v1.html">The role of philanthropy in building a better world</a>
                                    </h3>
                                </div>
                                <div class="ratio w-100" style="max-width: 86px; --cz-aspect-ratio: calc(64 / 86 * 100%)">
                                    <img src="assets/img/blog/grid/v1/th01.jpg" class="rounded-2" alt="Image">
                                </div>
                            </article>
                            <article class="hover-effect-scale position-relative d-flex align-items-center border-bottom py-4">
                                <div class="w-100 pe-3">
                                    <h3 class="h6 lh-base fs-sm mb-0">
                                        <a class="hover-effect-underline stretched-link" href="blog-single-v1.html">The biggest prospects for the smart home electronics industry</a>
                                    </h3>
                                </div>
                                <div class="ratio w-100" style="max-width: 86px; --cz-aspect-ratio: calc(64 / 86 * 100%)">
                                    <img src="assets/img/blog/grid/v1/th02.jpg" class="rounded-2" alt="Image">
                                </div>
                            </article>
                            <article class="hover-effect-scale position-relative d-flex align-items-center py-4">
                                <div class="w-100 pe-3">
                                    <h3 class="h6 lh-base fs-sm mb-0">
                                        <a class="hover-effect-underline stretched-link" href="blog-single-v1.html">Behind-the-scenes stories from the world of iPhones</a>
                                    </h3>
                                </div>
                                <div class="ratio w-100" style="max-width: 86px; --cz-aspect-ratio: calc(64 / 86 * 100%)">
                                    <img src="assets/img/blog/grid/v1/th03.jpg" class="rounded-2" alt="Image">
                                </div>
                            </article>
                            <h4 class="h6 pt-4">Follow us</h4>
                            <div class="d-flex gap-2 pb-2">
                                <a class="btn btn-icon fs-base btn-outline-secondary border-0" href="#!" data-bs-toggle="tooltip" data-bs-template="<div class=&quot;tooltip fs-xs mb-n2&quot; role=&quot;tooltip&quot;><div class=&quot;tooltip-inner bg-transparent text-body p-0&quot;></div></div>"
                                    title="Instagram" aria-label="Follow us on Instagram">
                    <i class="ci-instagram"></i>
                  </a>
                                <a class="btn btn-icon fs-base btn-outline-secondary border-0" href="#!" data-bs-toggle="tooltip" data-bs-template="<div class=&quot;tooltip fs-xs mb-n2&quot; role=&quot;tooltip&quot;><div class=&quot;tooltip-inner bg-transparent text-body p-0&quot;></div></div>"
                                    title="X (Twitter)" aria-label="Follow us on X">
                    <i class="ci-x"></i>
                  </a>
                                <a class="btn btn-icon fs-base btn-outline-secondary border-0" href="#!" data-bs-toggle="tooltip" data-bs-template="<div class=&quot;tooltip fs-xs mb-n2&quot; role=&quot;tooltip&quot;><div class=&quot;tooltip-inner bg-transparent text-body p-0&quot;></div></div>"
                                    title="Facebook" aria-label="Follow us on Facebook">
                    <i class="ci-facebook"></i>
                  </a>
                                <a class="btn btn-icon fs-base btn-outline-secondary border-0" href="#!" data-bs-toggle="tooltip" data-bs-template="<div class=&quot;tooltip fs-xs mb-n2&quot; role=&quot;tooltip&quot;><div class=&quot;tooltip-inner bg-transparent text-body p-0&quot;></div></div>"
                                    title="Telegram" aria-label="Follow us on Telegram">
                    <i class="ci-telegram"></i>
                  </a>
                            </div>
                        </div>
                    </div>
                </aside>
            </div>
        </section>


        <!-- Video reviews -->
        <section class="container pb-5 mb-1 mb-sm-2 mb-md-3 mb-lg-4 mb-xl-5">

            <!-- Heading -->
            <div class="d-flex align-items-center justify-content-between pb-2 pb-sm-3 mb-3">
                <h2 class="h3 mb-0">Video reviews</h2>
                <div class="nav ms-3">
                    <a class="nav-link animate-underline px-0 py-2" href="#!">
              <span class="animate-target">View all</span>
              <i class="ci-chevron-right fs-base ms-1"></i>
            </a>
                </div>
            </div>

            <!-- Video cards that turn into slider on screens < 992px wide (lg breakpoint) -->
            <div class="swiper" data-swiper="{
          &quot;slidesPerView&quot;: 1,
          &quot;spaceBetween&quot;: 24,
          &quot;pagination&quot;: {
            &quot;el&quot;: &quot;.swiper-pagination&quot;,
            &quot;clickable&quot;: true
          },
          &quot;breakpoints&quot;: {
            &quot;500&quot;: {
              &quot;slidesPerView&quot;: 2
            },
            &quot;768&quot;: {
              &quot;slidesPerView&quot;: 3
            },
            &quot;992&quot;: {
              &quot;slidesPerView&quot;: 4
            }
          }
        }">
                <div class="swiper-wrapper">

                    <!-- Article -->
                    <article class="swiper-slide hover-effect-scale">
                        <div class="ratio rounded overflow-hidden" style="--cz-aspect-ratio: calc(200 / 306 * 100%)">
                            <div class="btn btn-icon btn-light position-absolute top-50 start-50 translate-middle z-2 rounded-circle pe-none">
                                <i class="ci-play fs-base"></i>
                            </div>
                            <img src="assets/img/blog/grid/v1/video01.jpg" class="hover-effect-target" alt="Image">
                        </div>
                        <div class="pt-3 mt-1">
                            <div class="text-body-tertiary fs-xs mb-2">06:12</div>
                            <h3 class="h6 mb-0">
                                <a class="hover-effect-underline stretched-link" href="#!">A comprehensive review of the latest kitchen blenders on the market</a>
                            </h3>
                        </div>
                    </article>

                    <!-- Article -->
                    <article class="swiper-slide hover-effect-scale">
                        <div class="ratio rounded overflow-hidden" style="--cz-aspect-ratio: calc(200 / 306 * 100%)">
                            <div class="btn btn-icon btn-light position-absolute top-50 start-50 translate-middle z-2 rounded-circle pe-none">
                                <i class="ci-play fs-base"></i>
                            </div>
                            <img src="assets/img/blog/grid/v1/video04.jpg" class="hover-effect-target" alt="Image">
                        </div>
                        <div class="pt-3 mt-1">
                            <div class="text-body-tertiary fs-xs mb-2">10:08</div>
                            <h3 class="h6 mb-0">
                                <a class="hover-effect-underline stretched-link" href="#!">Behind-the-scenes stories from the world of iPhones</a>
                            </h3>
                        </div>
                    </article>

                    <!-- Article -->
                    <article class="swiper-slide hover-effect-scale">
                        <div class="ratio rounded overflow-hidden" style="--cz-aspect-ratio: calc(200 / 306 * 100%)">
                            <div class="btn btn-icon btn-light position-absolute top-50 start-50 translate-middle z-2 rounded-circle pe-none">
                                <i class="ci-play fs-base"></i>
                            </div>
                            <img src="assets/img/blog/grid/v1/video02.jpg" class="hover-effect-target" alt="Image">
                        </div>
                        <div class="pt-3 mt-1">
                            <div class="text-body-tertiary fs-xs mb-2">04:56</div>
                            <h3 class="h6 mb-0">
                                <a class="hover-effect-underline stretched-link" href="#!">Exploring the latest best smartwatch features for busy professionals</a>
                            </h3>
                        </div>
                    </article>

                    <!-- Article -->
                    <article class="swiper-slide hover-effect-scale">
                        <div class="ratio rounded overflow-hidden" style="--cz-aspect-ratio: calc(200 / 306 * 100%)">
                            <div class="btn btn-icon btn-light position-absolute top-50 start-50 translate-middle z-2 rounded-circle pe-none">
                                <i class="ci-play fs-base"></i>
                            </div>
                            <img src="assets/img/blog/grid/v1/video03.jpg" class="hover-effect-target" alt="Image">
                        </div>
                        <div class="pt-3 mt-1">
                            <div class="text-body-tertiary fs-xs mb-2">03:27</div>
                            <h3 class="h6 mb-0">
                                <a class="hover-effect-underline stretched-link" href="#!">Taking to the skies with the latest compact drone technology</a>
                            </h3>
                        </div>
                    </article>
                </div>

                <!-- Pagination (Bullets) -->
                <div class="swiper-pagination position-static mt-4"></div>
            </div>
        </section>
    </main>
@endsection
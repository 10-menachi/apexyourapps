<!DOCTYPE html>
<html lang="en" data-bs-theme="light" data-pwa="true">

<head>
    <meta charset="utf-8">

    <!-- Viewport -->
    <meta name="viewport"
        content="width=device-width, initial-scale=1, minimum-scale=1, maximum-scale=1, viewport-fit=cover">

    <!-- SEO Meta Tags -->
    <title>Cartzilla | Account - Sign Up</title>
    <meta name="description" content="Cartzilla - Multipurpose Bootstrap E-Commerce HTML Template">
    <meta name="keywords"
        content="online shop, e-commerce, online store, market, multipurpose, product landing, cart, checkout, ui kit, light and dark mode, bootstrap, html5, css3, javascript, gallery, slider, mobile, pwa">
    <meta name="author" content="Createx Studio">

    <!-- Webmanifest + Favicon / App icons -->
    <meta name="apple-mobile-web-app-capable" content="yes">
    <meta name="apple-mobile-web-app-status-bar-style" content="black">
    <link rel="manifest" href="/manifest.json">
    <link rel="icon" type="image/png" href="assets/app-icons/icon-32x32.png" sizes="32x32">
    <link rel="apple-touch-icon" href="assets/app-icons/icon-180x180.png">

    <!-- Theme switcher (color modes) -->
    <script src="assets/js/theme-switcher.js"></script>

    <!-- Preloaded local web font (Inter) -->
    <link rel="preload" href="assets/fonts/inter-variable-latin.woff2" as="font" type="font/woff2" crossorigin="">

    <!-- Font icons -->
    <link rel="preload" href="assets/icons/cartzilla-icons.woff2" as="font" type="font/woff2" crossorigin="">
    <link rel="stylesheet" href="assets/icons/cartzilla-icons.min.css">

    <!-- Bootstrap + Theme styles -->
    <link rel="preload" href="assets/css/theme.min.css" as="style">
    <link rel="preload" href="assets/css/theme.rtl.min.css" as="style">
    <link rel="stylesheet" href="assets/css/theme.min.css" id="theme-styles">

    <!-- Customizer -->
    <script src="assets/js/customizer.min.js"></script>
</head>


<!-- Body -->

<body>


    <!-- Page content -->
    <main class="px-3 mx-auto content-wrapper w-100 ps-lg-5 pe-lg-4" style="max-width: 1920px">
        <div class="d-lg-flex">

            <!-- Login form + Footer -->
            <div class="py-4 mx-auto d-flex flex-column min-vh-100 w-100 me-lg-5" style="max-width: 416px">

                <!-- Logo -->
                <header class="px-0 pb-4 mb-2 navbar mt-n2 mt-sm-0 mb-md-3 mb-lg-4">
                    <a href="index.html" class="pt-0 navbar-brand">
                        <span class="flex-shrink-0 d-flex text-primary me-2">
                            <svg xmlns="http://www.w3.org/2000/svg" width="36" height="36">
                                <path
                                    d="M36 18.01c0 8.097-5.355 14.949-12.705 17.2a18.12 18.12 0 0 1-5.315.79C9.622 36 2.608 30.313.573 22.611.257 21.407.059 20.162 0 18.879v-1.758c.02-.395.059-.79.099-1.185.099-.908.277-1.817.514-2.686C2.687 5.628 9.682 0 18 0c5.572 0 10.551 2.528 13.871 6.517 1.502 1.797 2.648 3.91 3.359 6.201.494 1.659.771 3.436.771 5.292z"
                                    fill="currentColor"></path>
                                <g fill="#fff">
                                    <path
                                        d="M17.466 21.624c-.514 0-.988-.316-1.146-.829-.198-.632.138-1.303.771-1.501l7.666-2.469-1.205-8.254-13.317 4.621a1.19 1.19 0 0 1-1.521-.75 1.19 1.19 0 0 1 .751-1.521l13.89-4.818c.553-.197 1.166-.138 1.64.158a1.82 1.82 0 0 1 .85 1.284l1.344 9.183c.138.987-.494 1.994-1.482 2.33l-7.864 2.528-.375.04zm7.31.138c-.178-.632-.85-1.007-1.482-.81l-5.177 1.58c-2.331.79-3.28.02-3.418-.099l-6.56-8.412a4.25 4.25 0 0 0-4.406-1.758l-3.122.987c-.237.889-.415 1.777-.514 2.686l4.228-1.363a1.84 1.84 0 0 1 1.857.81l6.659 8.551c.751.948 2.015 1.323 3.359 1.323.909 0 1.857-.178 2.687-.474l5.078-1.54c.632-.178 1.008-.829.81-1.481z">
                                    </path>
                                    <use href="#czlogo"></use>
                                    <use href="#czlogo" x="8.516" y="-2.172"></use>
                                </g>
                                <defs>
                                    <path id="czlogo"
                                        d="M18.689 28.654a1.94 1.94 0 0 1-1.936 1.935 1.94 1.94 0 0 1-1.936-1.935 1.94 1.94 0 0 1 1.936-1.935 1.94 1.94 0 0 1 1.936 1.935z">
                                    </path>
                                </defs>
                            </svg>
                        </span>
                        Cartzilla
                    </a>
                </header>

                <h1 class="mt-auto h2">Create an account</h1>
                <div class="mb-3 nav fs-sm mb-lg-4">
                    I already have an account
                    <a class="p-0 nav-link text-decoration-underline ms-2" href="account-signin.html">Sign in</a>
                </div>
                <div class="mb-4 nav fs-sm d-lg-none">
                    <span class="me-2">Uncertain about creating an account?</span>
                    <a class="p-0 nav-link text-decoration-underline" href="#benefits" data-bs-toggle="offcanvas"
                        aria-controls="benefits">Explore the Benefits</a>
                </div>

                <!-- Form -->
                <form class="needs-validation" novalidate="">
                    <div class="mb-4 position-relative">
                        <label for="register-email" class="form-label">Email</label>
                        <input type="email" class="form-control form-control-lg" id="register-email" required="">
                        <div class="py-0 bg-transparent invalid-tooltip">Enter a valid email address!</div>
                    </div>
                    <div class="mb-4">
                        <label for="register-password" class="form-label">Password</label>
                        <div class="password-toggle">
                            <input type="password" class="form-control form-control-lg" id="register-password"
                                minlength="8" placeholder="Minimum 8 characters" required="">
                            <div class="py-0 bg-transparent invalid-tooltip">Password does not meet the required
                                criteria!</div>
                            <label class="password-toggle-button fs-lg" aria-label="Show/hide password">
                                <input type="checkbox" class="btn-check">
                            </label>
                        </div>
                    </div>
                    <div class="gap-2 mb-4 d-flex flex-column">
                        <div class="form-check">
                            <input type="checkbox" class="form-check-input" id="save-pass">
                            <label for="save-pass" class="form-check-label">Save the password</label>
                        </div>
                        <div class="form-check">
                            <input type="checkbox" class="form-check-input" id="privacy" required="">
                            <label for="privacy" class="form-check-label">I have read and accept the <a
                                    class="text-dark-emphasis" href="#!">Privacy Policy</a></label>
                        </div>
                    </div>
                    <button type="submit" class="btn btn-lg btn-primary w-100">
                        Create an account
                        <i class="ci-chevron-right fs-lg ms-1 me-n1"></i>
                    </button>
                </form>

                <!-- Divider -->
                <div class="my-4 d-flex align-items-center">
                    <hr class="m-0 w-100">
                    <span class="mx-4 text-body-emphasis fw-medium text-nowrap">or continue with</span>
                    <hr class="m-0 w-100">
                </div>

                <!-- Social login -->
                <div class="gap-3 pb-4 mb-3 d-flex flex-column flex-sm-row mb-lg-4">
                    <button type="button" class="px-2 btn btn-lg btn-outline-secondary w-100">
                        <i class="ci-google ms-1 me-1"></i>
                        Google
                    </button>
                    <button type="button" class="px-2 btn btn-lg btn-outline-secondary w-100">
                        <i class="ci-facebook ms-1 me-1"></i>
                        Facebook
                    </button>
                    <button type="button" class="px-2 btn btn-lg btn-outline-secondary w-100">
                        <i class="ci-apple ms-1 me-1"></i>
                        Apple
                    </button>
                </div>

                <!-- Footer -->
                <footer class="mt-auto">
                    <div class="mb-4 nav">
                        <a class="p-0 nav-link text-decoration-underline" href="help-topics-v1.html">Need help?</a>
                    </div>
                    <p class="mb-0 fs-xs">
                        © All rights reserved. Made by <span class="animate-underline"><a
                                class="animate-target text-dark-emphasis text-decoration-none"
                                href="https://createx.studio/" target="_blank" rel="noreferrer">Createx
                                Studio</a></span>
                    </p>
                </footer>
            </div>


            <!-- Benefits section that turns into offcanvas on screens < 992px wide (lg breakpoint) -->
            <div class="offcanvas-lg offcanvas-end w-100 py-lg-4 ms-auto" id="benefits" style="max-width: 1034px">
                <div class="p-3 offcanvas-header justify-content-end position-relative z-2">
                    <button type="button"
                        class="bg-transparent btn btn-icon btn-outline-dark text-dark border-dark rounded-circle d-none-dark"
                        data-bs-dismiss="offcanvas" data-bs-target="#benefits" aria-label="Close">
                        <i class="ci-close fs-lg"></i>
                    </button>
                    <button type="button"
                        class="bg-transparent btn btn-icon btn-outline-dark text-light border-light rounded-circle d-none d-inline-flex-dark"
                        data-bs-dismiss="offcanvas" data-bs-target="#benefits" aria-label="Close">
                        <i class="ci-close fs-lg"></i>
                    </button>
                </div>
                <div class="top-0 position-absolute start-0 w-100 h-100 d-lg-none">
                    <span class="top-0 position-absolute start-0 w-100 h-100 d-none-dark"
                        style="background: linear-gradient(-90deg, #accbee 0%, #e7f0fd 100%)"></span>
                    <span class="top-0 position-absolute start-0 w-100 h-100 d-none d-block-dark"
                        style="background: linear-gradient(-90deg, #1b273a 0%, #1f2632 100%)"></span>
                </div>
                <div
                    class="px-3 pt-2 offcanvas-body position-relative z-2 d-lg-flex flex-column align-items-center justify-content-center h-100 p-lg-0">
                    <div class="top-0 position-absolute start-0 w-100 h-100 d-none d-lg-block">
                        <span class="top-0 position-absolute start-0 w-100 h-100 rounded-5 d-none-dark"
                            style="background: linear-gradient(-90deg, #accbee 0%, #e7f0fd 100%)"></span>
                        <span class="top-0 position-absolute start-0 w-100 h-100 rounded-5 d-none d-block-dark"
                            style="background: linear-gradient(-90deg, #1b273a 0%, #1f2632 100%)"></span>
                    </div>
                    <div class="text-center position-relative z-2 w-100 px-md-2 p-lg-5">
                        <h2 class="pb-3 h4">Cartzilla account benefits</h2>
                        <div class="mx-auto" style="max-width: 790px">
                            <div class="row row-cols-1 row-cols-sm-2 g-3 g-md-4 g-lg-3 g-xl-4">
                                <div class="col">
                                    <div class="bg-transparent border-0 card h-100">
                                        <span
                                            class="top-0 bg-white bg-opacity-25 border border-white border-opacity-50 position-absolute start-0 w-100 h-100 rounded-4 d-none-dark"></span>
                                        <span
                                            class="top-0 bg-white border position-absolute start-0 w-100 h-100 rounded-4 d-none d-block-dark"
                                            style="--cz-bg-opacity: .05"></span>
                                        <div class="card-body position-relative z-2">
                                            <div class="p-3 d-inline-flex position-relative text-info">
                                                <span
                                                    class="top-0 bg-white position-absolute start-0 w-100 h-100 rounded-pill d-none-dark"></span>
                                                <span
                                                    class="top-0 position-absolute start-0 w-100 h-100 bg-body-secondary rounded-pill d-none d-block-dark"></span>
                                                <i class="m-1 ci-mail position-relative z-2 fs-4"></i>
                                            </div>
                                            <h3 class="pt-2 my-2 h6">Subscribe to your favorite products</h3>
                                        </div>
                                    </div>
                                </div>
                                <div class="col">
                                    <div class="bg-transparent border-0 card h-100">
                                        <span
                                            class="top-0 bg-white bg-opacity-25 border border-white border-opacity-50 position-absolute start-0 w-100 h-100 rounded-4 d-none-dark"></span>
                                        <span
                                            class="top-0 bg-white border position-absolute start-0 w-100 h-100 rounded-4 d-none d-block-dark"
                                            style="--cz-bg-opacity: .05"></span>
                                        <div class="card-body position-relative z-2">
                                            <div class="p-3 d-inline-flex position-relative text-info">
                                                <span
                                                    class="top-0 bg-white position-absolute start-0 w-100 h-100 rounded-pill d-none-dark"></span>
                                                <span
                                                    class="top-0 position-absolute start-0 w-100 h-100 bg-body-secondary rounded-pill d-none d-block-dark"></span>
                                                <i class="m-1 ci-settings position-relative z-2 fs-4"></i>
                                            </div>
                                            <h3 class="pt-2 my-2 h6">View and manage your orders and wishlist</h3>
                                        </div>
                                    </div>
                                </div>
                                <div class="col">
                                    <div class="bg-transparent border-0 card h-100">
                                        <span
                                            class="top-0 bg-white bg-opacity-25 border border-white border-opacity-50 position-absolute start-0 w-100 h-100 rounded-4 d-none-dark"></span>
                                        <span
                                            class="top-0 bg-white border position-absolute start-0 w-100 h-100 rounded-4 d-none d-block-dark"
                                            style="--cz-bg-opacity: .05"></span>
                                        <div class="card-body position-relative z-2">
                                            <div class="p-3 d-inline-flex position-relative text-info">
                                                <span
                                                    class="top-0 bg-white position-absolute start-0 w-100 h-100 rounded-pill d-none-dark"></span>
                                                <span
                                                    class="top-0 position-absolute start-0 w-100 h-100 bg-body-secondary rounded-pill d-none d-block-dark"></span>
                                                <i class="m-1 ci-gift position-relative z-2 fs-4"></i>
                                            </div>
                                            <h3 class="pt-2 my-2 h6">Earn rewards for future purchases</h3>
                                        </div>
                                    </div>
                                </div>
                                <div class="col">
                                    <div class="bg-transparent border-0 card h-100">
                                        <span
                                            class="top-0 bg-white bg-opacity-25 border border-white border-opacity-50 position-absolute start-0 w-100 h-100 rounded-4 d-none-dark"></span>
                                        <span
                                            class="top-0 bg-white border position-absolute start-0 w-100 h-100 rounded-4 d-none d-block-dark"
                                            style="--cz-bg-opacity: .05"></span>
                                        <div class="card-body position-relative z-2">
                                            <div class="p-3 d-inline-flex position-relative text-info">
                                                <span
                                                    class="top-0 bg-white position-absolute start-0 w-100 h-100 rounded-pill d-none-dark"></span>
                                                <span
                                                    class="top-0 position-absolute start-0 w-100 h-100 bg-body-secondary rounded-pill d-none d-block-dark"></span>
                                                <i class="m-1 ci-percent position-relative z-2 fs-4"></i>
                                            </div>
                                            <h3 class="pt-2 my-2 h6">Receive exclusive offers and discounts</h3>
                                        </div>
                                    </div>
                                </div>
                                <div class="col">
                                    <div class="bg-transparent border-0 card h-100">
                                        <span
                                            class="top-0 bg-white bg-opacity-25 border border-white border-opacity-50 position-absolute start-0 w-100 h-100 rounded-4 d-none-dark"></span>
                                        <span
                                            class="top-0 bg-white border position-absolute start-0 w-100 h-100 rounded-4 d-none d-block-dark"
                                            style="--cz-bg-opacity: .05"></span>
                                        <div class="card-body position-relative z-2">
                                            <div class="p-3 d-inline-flex position-relative text-info">
                                                <span
                                                    class="top-0 bg-white position-absolute start-0 w-100 h-100 rounded-pill d-none-dark"></span>
                                                <span
                                                    class="top-0 position-absolute start-0 w-100 h-100 bg-body-secondary rounded-pill d-none d-block-dark"></span>
                                                <i class="m-1 ci-heart position-relative z-2 fs-4"></i>
                                            </div>
                                            <h3 class="pt-2 my-2 h6">Create multiple wishlists</h3>
                                        </div>
                                    </div>
                                </div>
                                <div class="col">
                                    <div class="bg-transparent border-0 card h-100">
                                        <span
                                            class="top-0 bg-white bg-opacity-25 border border-white border-opacity-50 position-absolute start-0 w-100 h-100 rounded-4 d-none-dark"></span>
                                        <span
                                            class="top-0 bg-white border position-absolute start-0 w-100 h-100 rounded-4 d-none d-block-dark"
                                            style="--cz-bg-opacity: .05"></span>
                                        <div class="card-body position-relative z-2">
                                            <div class="p-3 d-inline-flex position-relative text-info">
                                                <span
                                                    class="top-0 bg-white position-absolute start-0 w-100 h-100 rounded-pill d-none-dark"></span>
                                                <span
                                                    class="top-0 position-absolute start-0 w-100 h-100 bg-body-secondary rounded-pill d-none d-block-dark"></span>
                                                <i class="m-1 ci-pie-chart position-relative z-2 fs-4"></i>
                                            </div>
                                            <h3 class="pt-2 my-2 h6">Pay for purchases by installments</h3>
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


    <!-- Bootstrap + Theme scripts -->
    <script src="assets/js/theme.min.js"></script>


</body>

</html>

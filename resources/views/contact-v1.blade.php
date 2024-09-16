@extends('layouts.app')

@section('title', 'Contact US')
@section('content')
    <!-- Page content -->
    <main class="content-wrapper">


        <!-- Page title -->
        <section class="position-relative bg-body-tertiary py-4">
            <img src="assets/img/contact/title-bg.png"
                class="position-absolute top-0 start-0 w-100 h-100 object-fit-cover rtl-flip" alt="Background image">
            <div class="container position-relative z-2 py-4 py-md-5 my-lg-3 my-xl-4 my-xxl-5">
                <div class="row pt-lg-2 pb-2 pb-sm-3 pb-lg-4">
                    <div class="col-9 col-md-8 col-lg-6">
                        <h1 class="display-4 mb-lg-4">Contact us</h1>
                        <p class="mb-0">Feel free to contact us and we will be happy to help you!</p>
                    </div>
                </div>
            </div>
        </section>


        <!-- Contact details -->
        <section class="container pt-5 mt-2 mt-sm-3 mt-lg-4 mt-xl-5 mb-n3">
            <div class="row row-cols-1 row-cols-sm-2 row-cols-lg-4 g-4 pt-lg-2 pt-xl-0">

                <!-- Location -->
                <div class="col">
                    <div class="d-flex align-items-center">
                        <i class="ci-map-pin fs-lg text-dark-emphasis"></i>
                        <h3 class="h6 ps-2 ms-1 mb-0">Store location</h3>
                    </div>
                    <hr class="text-dark-emphasis opacity-50 my-3 my-md-4">
                    <ul class="list-unstyled">
                        <li>New York 11741, USA</li>
                        <li>396 Lillian Bolavandy, Holbrook</li>
                    </ul>
                </div>

                <!-- Phones -->
                <div class="col">
                    <div class="d-flex align-items-center">
                        <i class="ci-phone-outgoing fs-lg text-dark-emphasis"></i>
                        <h3 class="h6 ps-2 ms-1 mb-0">Call us directly</h3>
                    </div>
                    <hr class="text-dark-emphasis opacity-50 my-3 my-md-4">
                    <ul class="list-unstyled">
                        <li>Customers: 1 50 537 53 082</li>
                        <li>Franchise: 1 50 537 53 000</li>
                    </ul>
                </div>

                <!-- Emails -->
                <div class="col">
                    <div class="d-flex align-items-center">
                        <i class="ci-mail fs-lg text-dark-emphasis"></i>
                        <h3 class="h6 ps-2 ms-1 mb-0">Send a message</h3>
                    </div>
                    <hr class="text-dark-emphasis opacity-50 my-3 my-md-4">
                    <ul class="list-unstyled">
                        <li>Customers: help@Apex.com</li>
                        <li>Franchise: franchise@catzilla.com</li>
                    </ul>
                </div>

                <!-- Working hours -->
                <div class="col">
                    <div class="d-flex align-items-center">
                        <i class="ci-clock fs-lg text-dark-emphasis"></i>
                        <h3 class="h6 ps-2 ms-1 mb-0">Working hours</h3>
                    </div>
                    <hr class="text-dark-emphasis opacity-50 my-3 my-md-4">
                    <ul class="list-unstyled">
                        <li>Mon - Fri 8:00 - 18:00</li>
                        <li>Sut - Sun 10:00 - 16:00</li>
                    </ul>
                </div>
            </div>
        </section>


        <!-- Support / Help center -->
        <section class="container py-5 my-2 my-sm-3 my-lg-4 my-xl-5">
            <div class="d-sm-flex align-items-center justify-content-between py-xxl-3">
                <div class="mb-4 mb-sm-0 me-sm-4">
                    <h2 class="h3">Looking for support?</h2>
                    <p class="mb-0">We might already have what you're looking for. See our FAQs or head to our dedicated
                        Help Center.</p>
                </div>
                <a class="btn btn-lg btn-outline-dark" href="#!">Help center</a>
            </div>
        </section>


        <!-- Map -->
        <section class="position-relative bg-body-tertiary">
            <a class="position-absolute top-50 start-50 translate-middle z-2 mt-lg-n4"
                href="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d30908.594922615324!2d-73.07331970206108!3d40.788157341303005!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x89e8483b8bffed93%3A0x53467ceb834b7397!2s396%20Lillian%20Blvd%2C%20Holbrook%2C%20NY%2011741%2C%20USA!5e0!3m2!1sen!2s!4v1706086459668!5m2!1sen!2"
                style="width: 50px" data-bs-toggle="popover" data-bs-placement="top" data-bs-trigger="hover"
                data-bs-content="Click to view the map" data-glightbox="width: 100vw; height: 100vh;" data-gallery="map"
                aria-label="Toggle map">
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 42.5 54.6">
                    <path
                        d="M42.5 19.2C42.5 8.1 33.2-.7 22 0 12.4.7 4.7 8.5 4.2 18c-.2 2.7.3 5.3 1.1 7.7h0s3.4 10.4 17.4 25c.4.4 1 .4 1.4 0 13.6-13.3 17.4-25 17.4-25h0c.6-2 1-4.2 1-6.5z"
                        fill="#ffffff"></path>
                    <g fill="#222934">
                        <path
                            d="M20.4 31.8c-4.5 0-8.1-3.6-8.1-8.1s3.6-8.1 8.1-8.1 8.1 3.6 8.1 8.1-3.7 8.1-8.1 8.1zm0-14.2a6.06 6.06 0 0 0-6.1 6.1 6.06 6.06 0 0 0 6.1 6.1c3.3 0 6.1-2.7 6.1-6.1s-2.8-6.1-6.1-6.1z">
                        </path>
                        <circle cx="20.4" cy="23.7" r="3"></circle>
                        <path
                            d="M20.4 54.5c-.6 0-1.1-.2-1.4-.6C5 39.3 1.5 29 1.4 28.5a21.92 21.92 0 0 1-1.2-8c.6-10.1 8.6-18.3 18.7-19C24.6 1.1 30 3 34.1 6.9c4.1 3.8 6.4 9.2 6.4 14.8 0 2.4-.4 4.7-1.2 6.9-.1.5-4 12-17.6 25.3-.3.4-.8.6-1.3.6zm-17-26.2c.8 2 4.9 11.6 17 24.2 13.2-13 17-24.5 17.1-24.6.7-2 1.1-4.1 1.1-6.3 0-5-2.1-9.9-5.8-13.3-3.7-3.5-8.6-5.2-13.7-4.8-9.1.6-16.4 8-16.9 17.1-.1 2.5.2 5 1.1 7.3l.1.4z">
                        </path>
                    </g>
                </svg>
            </a>
            <img src="assets/img/contact/map.jpg" class="position-absolute top-0 start-0 w-100 h-100 object-fit-cover"
                alt="Map">
            <div class="d-none d-xxl-block" style="height: 600px"></div>
            <div class="d-none d-xl-block d-xxl-none" style="height: 500px"></div>
            <div class="d-none d-lg-block d-xl-none" style="height: 420px"></div>
            <div class="d-none d-md-block d-lg-none" style="height: 350px"></div>
            <div class="d-md-none" style="height: 300px"></div>
            <span class="position-absolute top-0 start-0 z-1 w-100 h-100 bg-body opacity-25"></span>
        </section>


        <!-- FAQ accordion -->
        <section class="container pt-5 mt-2 mt-sm-3 mt-lg-4 mt-xl-5">
            <h2 class="text-center pt-xxl-3 pb-lg-2 pb-xl-3">Popular questions</h2>
            <div class="row justify-content-center">
                <div class="col-md-10 col-lg-9 col-xl-8">

                    <!-- Accordion -->
                    <div class="accordion accordion-alt-icon" id="faq">

                        <!-- Question -->
                        <div class="accordion-item">
                            <h3 class="accordion-header" id="faqHeading-1">
                                <button type="button" class="accordion-button hover-effect-underline collapsed"
                                    data-bs-toggle="collapse" data-bs-target="#faqCollapse-1" aria-expanded="false"
                                    aria-controls="faqCollapse-1">
                                    <span class="me-2">How long will delivery take?</span>
                                </button>
                            </h3>
                            <div class="accordion-collapse collapse" id="faqCollapse-1" aria-labelledby="faqHeading-1"
                                data-bs-parent="#faq">
                                <div class="accordion-body">Delivery times vary based on your location and the chosen
                                    shipping method. Generally, our standard delivery takes up to 5 days, while our Express
                                    Delivery ensures your order reaches you within 1 day. Please note that these
                                    times may be subject to occasional variations due to unforeseen circumstances, but we do
                                    our best to meet these estimates.</div>
                            </div>
                        </div>

                        <!-- Question -->
                        <div class="accordion-item">
                            <h3 class="accordion-header" id="faqHeading-2">
                                <button type="button" class="accordion-button hover-effect-underline collapsed"
                                    data-bs-toggle="collapse" data-bs-target="#faqCollapse-2" aria-expanded="false"
                                    aria-controls="faqCollapse-2">
                                    <span class="me-2">What payment methods do you accept?</span>
                                </button>
                            </h3>
                            <div class="accordion-collapse collapse" id="faqCollapse-2" aria-labelledby="faqHeading-2"
                                data-bs-parent="#faq">
                                <div class="accordion-body">We offer a range of secure payment options to provide you with
                                    flexibility and convenience. Accepted methods include major credit/debit cards, PayPal,
                                    and other secure online payment gateways. You can find the complete
                                    list of accepted payment methods during the checkout process.</div>
                            </div>
                        </div>

                        <!-- Question -->
                        <div class="accordion-item">
                            <h3 class="accordion-header" id="faqHeading-3">
                                <button type="button" class="accordion-button hover-effect-underline collapsed"
                                    data-bs-toggle="collapse" data-bs-target="#faqCollapse-3" aria-expanded="false"
                                    aria-controls="faqCollapse-3">
                                    <span class="me-2">Do you ship internationally?</span>
                                </button>
                            </h3>
                            <div class="accordion-collapse collapse" id="faqCollapse-3" aria-labelledby="faqHeading-3"
                                data-bs-parent="#faq">
                                <div class="accordion-body">Yes, we proudly offer international shipping to cater to our
                                    global customer base. Shipping costs and delivery times will be automatically calculated
                                    at the checkout based on your selected destination. Please note that
                                    any customs duties or taxes applicable in your country are the responsibility of the
                                    customer.</div>
                            </div>
                        </div>

                        <!-- Question -->
                        <div class="accordion-item">
                            <h3 class="accordion-header" id="faqHeading-4">
                                <button type="button" class="accordion-button hover-effect-underline collapsed"
                                    data-bs-toggle="collapse" data-bs-target="#faqCollapse-4" aria-expanded="false"
                                    aria-controls="faqCollapse-4">
                                    <span class="me-2">Do I need an account to place an order?</span>
                                </button>
                            </h3>
                            <div class="accordion-collapse collapse" id="faqCollapse-4" aria-labelledby="faqHeading-4"
                                data-bs-parent="#faq">
                                <div class="accordion-body">While you can place an order as a guest, creating an account
                                    comes with added benefits. By having an account, you can easily track your orders,
                                    manage your preferences, and enjoy a quicker checkout process for future purchases.
                                    It also allows us to provide you with personalized recommendations and exclusive offers.
                                </div>
                            </div>
                        </div>

                        <!-- Question -->
                        <div class="accordion-item">
                            <h3 class="accordion-header" id="faqHeading-5">
                                <button type="button" class="accordion-button hover-effect-underline collapsed"
                                    data-bs-toggle="collapse" data-bs-target="#faqCollapse-5" aria-expanded="false"
                                    aria-controls="faqCollapse-5">
                                    <span class="me-2">How can I track my order?</span>
                                </button>
                            </h3>
                            <div class="accordion-collapse collapse" id="faqCollapse-5" aria-labelledby="faqHeading-5"
                                data-bs-parent="#faq">
                                <div class="accordion-body">Once your order is dispatched, you will receive a confirmation
                                    email containing a unique tracking number. You can use this tracking number on our
                                    website to monitor the real-time status of your shipment. Additionally, logging
                                    into your account will grant you access to a comprehensive order history, including
                                    tracking information.</div>
                            </div>
                        </div>

                        <!-- Question -->
                        <div class="accordion-item">
                            <h3 class="accordion-header" id="faqHeading-6">
                                <button type="button" class="accordion-button hover-effect-underline collapsed"
                                    data-bs-toggle="collapse" data-bs-target="#faqCollapse-6" aria-expanded="false"
                                    aria-controls="faqCollapse-6">
                                    <span class="me-2">What are the product refund conditions?</span>
                                </button>
                            </h3>
                            <div class="accordion-collapse collapse" id="faqCollapse-6" aria-labelledby="faqHeading-6"
                                data-bs-parent="#faq">
                                <div class="accordion-body">Our refund policy is designed to ensure customer satisfaction.
                                    Details can be found in our [refund policy page](insert link). In essence, we accept
                                    returns within [insert number] days of receiving the product, provided
                                    it is in its original condition with all tags and packaging intact. Refunds are
                                    processed promptly once the returned item is inspected and approved.</div>
                            </div>
                        </div>

                        <!-- Question -->
                        <div class="accordion-item">
                            <h3 class="accordion-header" id="faqHeading-7">
                                <button type="button" class="accordion-button hover-effect-underline collapsed"
                                    data-bs-toggle="collapse" data-bs-target="#faqCollapse-7" aria-expanded="false"
                                    aria-controls="faqCollapse-7">
                                    <span class="me-2">Do I need to create an account to shop with you?</span>
                                </button>
                            </h3>
                            <div class="accordion-collapse collapse" id="faqCollapse-7" aria-labelledby="faqHeading-7"
                                data-bs-parent="#faq">
                                <div class="accordion-body">While guest checkout is available for your convenience,
                                    creating an account enhances your overall shopping experience. With an account, you can
                                    easily track your order status, save multiple shipping addresses, and enjoy
                                    a streamlined checkout process. Moreover, account holders receive early access to
                                    promotions and exclusive offers. Signing up is quick and hassle-free!</div>
                            </div>
                        </div>

                        <!-- Question -->
                        <div class="accordion-item">
                            <h3 class="accordion-header" id="faqHeading-8">
                                <button type="button" class="accordion-button hover-effect-underline collapsed"
                                    data-bs-toggle="collapse" data-bs-target="#faqCollapse-8" aria-expanded="false"
                                    aria-controls="faqCollapse-8">
                                    <span class="me-2">Is there a minimum order value for free shipping?</span>
                                </button>
                            </h3>
                            <div class="accordion-collapse collapse" id="faqCollapse-8" aria-labelledby="faqHeading-8"
                                data-bs-parent="#faq">
                                <div class="accordion-body">Yes, we offer free shipping on orders exceeding $250. Orders
                                    below this threshold are subject to standard shipping fees, which will be displayed
                                    during the checkout process.</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>


        <!-- Instagram feed -->
        <section class="container pt-5 mt-2 mt-sm-3 mt-lg-4 mt-xl-5">
            <div class="text-center pt-xxl-3 pb-2 pb-md-3">
                <h2 class="pb-2 mb-1">
                    <span class="animate-underline">
                        <a class="animate-target text-dark-emphasis text-decoration-none" href="#!">#Apex</a>
                    </span>
                </h2>
                <p>Find more inspiration on our Instagram</p>
            </div>
            <div class="overflow-x-auto pb-3 mb-n3" data-simplebar="">
                <div class="d-flex gap-2 gap-md-3 gap-lg-4" style="min-width: 700px">
                    <a class="hover-effect-scale hover-effect-opacity position-relative w-100 overflow-hidden"
                        href="#!">
                        <span
                            class="hover-effect-target position-absolute top-0 start-0 w-100 h-100 bg-black bg-opacity-25 opacity-0 z-1"></span>
                        <i
                            class="ci-instagram hover-effect-target fs-4 text-white position-absolute top-50 start-50 translate-middle opacity-0 z-2"></i>
                        <div class="hover-effect-target ratio ratio-1x1">
                            <img src="assets/img/instagram/01.jpg" alt="Instagram image">
                        </div>
                    </a>
                    <a class="hover-effect-scale hover-effect-opacity position-relative w-100 overflow-hidden"
                        href="#!">
                        <span
                            class="hover-effect-target position-absolute top-0 start-0 w-100 h-100 bg-black bg-opacity-25 opacity-0 z-1"></span>
                        <i
                            class="ci-instagram hover-effect-target fs-4 text-white position-absolute top-50 start-50 translate-middle opacity-0 z-2"></i>
                        <div class="hover-effect-target ratio ratio-1x1">
                            <img src="assets/img/instagram/02.jpg" alt="Instagram image">
                        </div>
                    </a>
                    <a class="hover-effect-scale hover-effect-opacity position-relative w-100 overflow-hidden"
                        href="#!">
                        <span
                            class="hover-effect-target position-absolute top-0 start-0 w-100 h-100 bg-black bg-opacity-25 opacity-0 z-1"></span>
                        <i
                            class="ci-instagram hover-effect-target fs-4 text-white position-absolute top-50 start-50 translate-middle opacity-0 z-2"></i>
                        <div class="hover-effect-target ratio ratio-1x1">
                            <img src="assets/img/instagram/03.jpg" alt="Instagram image">
                        </div>
                    </a>
                    <a class="hover-effect-scale hover-effect-opacity position-relative w-100 overflow-hidden"
                        href="#!">
                        <span
                            class="hover-effect-target position-absolute top-0 start-0 w-100 h-100 bg-black bg-opacity-25 opacity-0 z-1"></span>
                        <i
                            class="ci-instagram hover-effect-target fs-4 text-white position-absolute top-50 start-50 translate-middle opacity-0 z-2"></i>
                        <div class="hover-effect-target ratio ratio-1x1">
                            <img src="assets/img/instagram/04.jpg" alt="Instagram image">
                        </div>
                    </a>
                    <a class="hover-effect-scale hover-effect-opacity position-relative w-100 overflow-hidden"
                        href="#!">
                        <span
                            class="hover-effect-target position-absolute top-0 start-0 w-100 h-100 bg-black bg-opacity-25 opacity-0 z-1"></span>
                        <i
                            class="ci-instagram hover-effect-target fs-4 text-white position-absolute top-50 start-50 translate-middle opacity-0 z-2"></i>
                        <div class="hover-effect-target ratio ratio-1x1">
                            <img src="assets/img/instagram/05.jpg" alt="Instagram image">
                        </div>
                    </a>
                </div>
            </div>
        </section>
    </main>
@endsection

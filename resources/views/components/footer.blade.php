 <!-- Page footer -->
 <footer class="footer position-relative bg-dark">
     <span class="top-0 position-absolute start-0 w-100 h-100 bg-body d-none d-block-dark"></span>
     <div class="container position-relative z-1 pt-sm-2 pt-md-3 pt-lg-4" data-bs-theme="dark">

         <!-- Columns with links that are turned into accordion on screens < 500px wide (sm breakpoint) -->
         <div class="py-5 accordion" id="footerLinks">
             <div class="row">
                 <div class="pb-3 col-md-4 d-sm-flex flex-md-column align-items-center align-items-md-start mb-sm-4">
                     <h4 class="mb-sm-0 mb-md-4 me-4">
                         <a class="text-dark-emphasis text-decoration-none" href="{{ route('homepage.view') }}">Apex</a>
                     </h4>
                     <p class="text-body fs-sm text-sm-end text-md-start mb-sm-0 mb-md-3 ms-0 ms-sm-auto ms-md-0 me-4">
                         Got questions? Contact us 24/7</p>
                     <div class="dropdown" style="max-width: 250px">
                         <button type="button"
                             class="btn btn-light dropdown-toggle justify-content-between w-100 d-none-dark"
                             data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                             Help and consultation
                         </button>
                         <button type="button"
                             class="btn btn-secondary dropdown-toggle justify-content-between w-100 d-none d-flex-dark"
                             data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                             Help and consultation
                         </button>
                         <ul class="dropdown-menu">
                             <li><a class="dropdown-item" href="#!">Help center &amp; FAQ</a></li>
                             <li><a class="dropdown-item" href="#!">Support chat</a></li>
                             <li><a class="dropdown-item" href="#!">Open support ticket</a></li>
                             <li><a class="dropdown-item" href="#!">Call center</a></li>
                         </ul>
                     </div>
                 </div>
                 <div class="col-md-8">
                     <div class="row row-cols-1 row-cols-sm-3 gx-3 gx-md-4">
                         <div class="border-0 accordion-item col">
                             <h6 class="accordion-header" id="companyHeading">
                                 <span class="text-dark-emphasis d-none d-sm-block">Company</span>
                                 <button type="button" class="py-3 accordion-button collapsed d-sm-none"
                                     data-bs-toggle="collapse" data-bs-target="#companyLinks" aria-expanded="false"
                                     aria-controls="companyLinks">Company</button>
                             </h6>
                             <div class="accordion-collapse collapse d-sm-block" id="companyLinks"
                                 aria-labelledby="companyHeading" data-bs-parent="#footerLinks">
                                 <ul class="gap-2 pb-3 mb-1 nav flex-column pt-sm-3 mt-n1">
                                     <li class="pt-1 d-flex w-100">
                                         <a class="p-0 nav-link animate-underline animate-target d-inline fw-normal text-truncate"
                                             href="#!">About company</a>
                                     </li>
                                     <li class="pt-1 d-flex w-100">
                                         <a class="p-0 nav-link animate-underline animate-target d-inline fw-normal text-truncate"
                                             href="#!">Our team</a>
                                     </li>
                                     <li class="pt-1 d-flex w-100">
                                         <a class="p-0 nav-link animate-underline animate-target d-inline fw-normal text-truncate"
                                             href="#!">Careers</a>
                                     </li>
                                     <li class="pt-1 d-flex w-100">
                                         <a class="p-0 nav-link animate-underline animate-target d-inline fw-normal text-truncate"
                                             href="#!">Contact us</a>
                                     </li>
                                     <li class="pt-1 d-flex w-100">
                                         <a class="p-0 nav-link animate-underline animate-target d-inline fw-normal text-truncate"
                                             href="#!">News</a>
                                     </li>
                                 </ul>
                             </div>
                             <hr class="my-0 d-sm-none">
                         </div>
                         <div class="border-0 accordion-item col">
                             <h6 class="accordion-header" id="accountHeading">
                                 <span class="text-dark-emphasis d-none d-sm-block">Account</span>
                                 <button type="button" class="py-3 accordion-button collapsed d-sm-none"
                                     data-bs-toggle="collapse" data-bs-target="#accountLinks" aria-expanded="false"
                                     aria-controls="accountLinks">Account</button>
                             </h6>
                             <div class="accordion-collapse collapse d-sm-block" id="accountLinks"
                                 aria-labelledby="accountHeading" data-bs-parent="#footerLinks">
                                 <ul class="gap-2 pb-3 mb-1 nav flex-column pt-sm-3 mt-n1">
                                     <li class="pt-1 d-flex w-100">
                                         <a class="p-0 nav-link animate-underline animate-target d-inline fw-normal text-truncate"
                                             href="#!">Your account</a>
                                     </li>
                                     <li class="pt-1 d-flex w-100">
                                         <a class="p-0 nav-link animate-underline animate-target d-inline fw-normal text-truncate"
                                             href="#!">Shipping rates &amp; policies</a>
                                     </li>
                                     <li class="pt-1 d-flex w-100">
                                         <a class="p-0 nav-link animate-underline animate-target d-inline fw-normal text-truncate"
                                             href="#!">Refunds &amp; replacements</a>
                                     </li>
                                     <li class="pt-1 d-flex w-100">
                                         <a class="p-0 nav-link animate-underline animate-target d-inline fw-normal text-truncate"
                                             href="#!">Delivery info</a>
                                     </li>
                                     <li class="pt-1 d-flex w-100">
                                         <a class="p-0 nav-link animate-underline animate-target d-inline fw-normal text-truncate"
                                             href="#!">Order tracking</a>
                                     </li>
                                     <li class="pt-1 d-flex w-100">
                                         <a class="p-0 nav-link animate-underline animate-target d-inline fw-normal text-truncate"
                                             href="#!">Taxes &amp; fees</a>
                                     </li>
                                 </ul>
                             </div>
                             <hr class="my-0 d-sm-none">
                         </div>
                         <div class="border-0 accordion-item col">
                             <h6 class="accordion-header" id="customerHeading">
                                 <span class="text-dark-emphasis d-none d-sm-block">Customer service</span>
                                 <button type="button" class="py-3 accordion-button collapsed d-sm-none"
                                     data-bs-toggle="collapse" data-bs-target="#customerLinks" aria-expanded="false"
                                     aria-controls="customerLinks">Customer
                                     service</button>
                             </h6>
                             <div class="accordion-collapse collapse d-sm-block" id="customerLinks"
                                 aria-labelledby="customerHeading" data-bs-parent="#footerLinks">
                                 <ul class="gap-2 pb-3 mb-1 nav flex-column pt-sm-3 mt-n1">
                                     <li class="pt-1 d-flex w-100">
                                         <a class="p-0 nav-link animate-underline animate-target d-inline fw-normal text-truncate"
                                             href="#!">Payment methods</a>
                                     </li>
                                     <li class="pt-1 d-flex w-100">
                                         <a class="p-0 nav-link animate-underline animate-target d-inline fw-normal text-truncate"
                                             href="#!">Money back guarantee</a>
                                     </li>
                                     <li class="pt-1 d-flex w-100">
                                         <a class="p-0 nav-link animate-underline animate-target d-inline fw-normal text-truncate"
                                             href="#!">Product returns</a>
                                     </li>
                                     <li class="pt-1 d-flex w-100">
                                         <a class="p-0 nav-link animate-underline animate-target d-inline fw-normal text-truncate"
                                             href="#!">Support center</a>
                                     </li>
                                     <li class="pt-1 d-flex w-100">
                                         <a class="p-0 nav-link animate-underline animate-target d-inline fw-normal text-truncate"
                                             href="#!">Shipping</a>
                                     </li>
                                     <li class="pt-1 d-flex w-100">
                                         <a class="p-0 nav-link animate-underline animate-target d-inline fw-normal text-truncate"
                                             href="#!">Terms &amp; conditions</a>
                                     </li>
                                 </ul>
                             </div>
                             <hr class="my-0 d-sm-none">
                         </div>
                     </div>
                 </div>
             </div>
         </div>

         <!-- Category / tag links -->
         <div class="gap-3 pb-3 mb-4 d-flex flex-column pb-md-4 pb-lg-5 mt-n2 mt-sm-n4 mt-lg-0">
             <ul class="gap-2 nav align-items-center text-body-tertiary">
                 <li class="animate-underline">
                     <a class="p-0 nav-link fw-normal animate-target" href="#!">Computers</a>
                 </li>
                 <li class="px-1">/</li>
                 <li class="animate-underline">
                     <a class="p-0 nav-link fw-normal animate-target" href="#!">Smartphones</a>
                 </li>
                 <li class="px-1">/</li>
                 <li class="animate-underline">
                     <a class="p-0 nav-link fw-normal animate-target" href="#!">TV, Video</a>
                 </li>
                 <li class="px-1">/</li>
                 <li class="animate-underline">
                     <a class="p-0 nav-link fw-normal animate-target" href="#!">Speakers</a>
                 </li>
                 <li class="px-1">/</li>
                 <li class="animate-underline">
                     <a class="p-0 nav-link fw-normal animate-target" href="#!">Cameras</a>
                 </li>
                 <li class="px-1">/</li>
                 <li class="animate-underline">
                     <a class="p-0 nav-link fw-normal animate-target" href="#!">Printers</a>
                 </li>
                 <li class="px-1">/</li>
                 <li class="animate-underline">
                     <a class="p-0 nav-link fw-normal animate-target" href="#!">Video Games</a>
                 </li>
                 <li class="px-1">/</li>
                 <li class="animate-underline">
                     <a class="p-0 nav-link fw-normal animate-target" href="#!">Headphones</a>
                 </li>
                 <li class="px-1">/</li>
                 <li class="animate-underline">
                     <a class="p-0 nav-link fw-normal animate-target" href="#!">Wearable</a>
                 </li>
                 <li class="px-1">/</li>
                 <li class="animate-underline">
                     <a class="p-0 nav-link fw-normal animate-target" href="#!">HDD/SSD</a>
                 </li>
                 <li class="px-1">/</li>
                 <li class="animate-underline">
                     <a class="p-0 nav-link fw-normal animate-target" href="#!">Smart Home</a>
                 </li>
                 <li class="px-1">/</li>
                 <li class="animate-underline">
                     <a class="p-0 nav-link fw-normal animate-target" href="#!">Apple Devices</a>
                 </li>
                 <li class="px-1">/</li>
                 <li class="animate-underline">
                     <a class="p-0 nav-link fw-normal animate-target" href="#!">Tablets</a>
                 </li>
             </ul>
             <ul class="gap-2 nav align-items-center text-body-tertiary">
                 <li class="animate-underline">
                     <a class="p-0 nav-link fw-normal animate-target" href="#!">Monitors</a>
                 </li>
                 <li class="px-1">/</li>
                 <li class="animate-underline">
                     <a class="p-0 nav-link fw-normal animate-target" href="#!">Scanners</a>
                 </li>
                 <li class="px-1">/</li>
                 <li class="animate-underline">
                     <a class="p-0 nav-link fw-normal animate-target" href="#!">Servers</a>
                 </li>
                 <li class="px-1">/</li>
                 <li class="animate-underline">
                     <a class="p-0 nav-link fw-normal animate-target" href="#!">Heating and Cooling</a>
                 </li>
                 <li class="px-1">/</li>
                 <li class="animate-underline">
                     <a class="p-0 nav-link fw-normal animate-target" href="#!">E-readers</a>
                 </li>
                 <li class="px-1">/</li>
                 <li class="animate-underline">
                     <a class="p-0 nav-link fw-normal animate-target" href="#!">Data Storage</a>
                 </li>
                 <li class="px-1">/</li>
                 <li class="animate-underline">
                     <a class="p-0 nav-link fw-normal animate-target" href="#!">Networking</a>
                 </li>
                 <li class="px-1">/</li>
                 <li class="animate-underline">
                     <a class="p-0 nav-link fw-normal animate-target" href="#!">Power Strips</a>
                 </li>
                 <li class="px-1">/</li>
                 <li class="animate-underline">
                     <a class="p-0 nav-link fw-normal animate-target" href="#!">Plugs and Outlets</a>
                 </li>
                 <li class="px-1">/</li>
                 <li class="animate-underline">
                     <a class="p-0 nav-link fw-normal animate-target" href="#!">Detectors and Sensors</a>
                 </li>
                 <li class="px-1">/</li>
                 <li class="animate-underline">
                     <a class="p-0 nav-link fw-normal animate-target" href="#!">Accessories</a>
                 </li>
             </ul>
         </div>

         <!-- Copyright + Payment methods -->
         <div class="py-4 d-md-flex align-items-center border-top">
             <div
                 class="gap-2 mb-4 d-flex gap-sm-3 justify-content-center align-items-center ms-md-auto mb-md-0 order-md-2">
                 <div>
                     <img src="assets/img/payment-methods/visa-dark-mode.svg" alt="Visa">
                 </div>
                 <div>
                     <img src="assets/img/payment-methods/mastercard.svg" alt="Mastercard">
                 </div>
                 <div>
                     <img src="assets/img/payment-methods/paypal-dark-mode.svg" alt="PayPal">
                 </div>
                 <div>
                     <img src="assets/img/payment-methods/google-pay-dark-mode.svg" alt="Google Pay">
                 </div>
                 <div>
                     <img width="58" height="40" src="assets/img/payment-methods/mpesa-logo.png"
                         alt="Mpesa Payment">
                 </div>
                 <div>
                     <img src="assets/img/payment-methods/apple-pay-dark-mode.svg" alt="Apple Pay">
                 </div>
             </div>
             <p class="mb-0 text-center text-body fs-xs text-md-start me-4 order-md-1">©{{ date('Y') }} All rights
                 reserved. Developed & Design
                 by <span class="animate-underline"><a
                         class="animate-target text-dark-emphasis fw-medium text-decoration-none"
                         href="https://yourapps.co.ke/" target="_blank" rel="noreferrer">Your Apps Limited
                     </a></span>
             </p>

         </div>
     </div>
 </footer>

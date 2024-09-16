@extends('layouts.app')

@section('title', 'Your Account Info')
@section('content')
    <!-- Page content -->
    <main class="content-wrapper">
        <div class="container py-5 mt-n2 mt-sm-0">
            <div class="row pt-md-2 pt-lg-3 pb-sm-2 pb-md-3 pb-lg-4 pb-xl-5">


                <!-- Sidebar navigation that turns into offcanvas on screens < 992px wide (lg breakpoint) -->
                <aside class="col-lg-3">
                    <div class="offcanvas-lg offcanvas-start pe-lg-0 pe-xl-4" id="accountSidebar">

                        <!-- Header -->
                        <div class="py-3 offcanvas-header d-lg-block p-lg-0">
                            <div class="d-flex align-items-center">
                                <div class="flex-shrink-0 mb-0 h5 d-flex justify-content-center align-items-center text-primary bg-primary-subtle lh-1 rounded-circle" style="width: 3rem; height: 3rem">S</div>
                                <div class="min-w-0 ps-3">
                                    <h5 class="mb-1 h6">Susan Gardner</h5>
                                    <div class="min-w-0 nav flex-nowrap text-nowrap">
                                        <a class="p-0 nav-link animate-underline text-body" href="#bonusesModal" data-bs-toggle="modal">
                        <svg class="flex-shrink-0 text-warning me-2" xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"><path d="M1.333 9.667H7.5V16h-5c-.64 0-1.167-.527-1.167-1.167V9.667zm13.334 0v5.167c0 .64-.527 1.167-1.167 1.167h-5V9.667h6.167zM0 5.833V7.5c0 .64.527 1.167 1.167 1.167h.167H7.5v-1-3H1.167C.527 4.667 0 5.193 0 5.833zm14.833-1.166H8.5v3 1h6.167.167C15.473 8.667 16 8.14 16 7.5V5.833c0-.64-.527-1.167-1.167-1.167z"></path><path d="M8 5.363a.5.5 0 0 1-.495-.573C7.752 3.123 9.054-.03 12.219-.03c1.807.001 2.447.977 2.447 1.813 0 1.486-2.069 3.58-6.667 3.58zM12.219.971c-2.388 0-3.295 2.27-3.595 3.377 1.884-.088 3.072-.565 3.756-.971.949-.563 1.287-1.193 1.287-1.595 0-.599-.747-.811-1.447-.811z"></path><path d="M8.001 5.363c-4.598 0-6.667-2.094-6.667-3.58 0-.836.641-1.812 2.448-1.812 3.165 0 4.467 3.153 4.713 4.819a.5.5 0 0 1-.495.573zM3.782.971c-.7 0-1.448.213-1.448.812 0 .851 1.489 2.403 5.042 2.566C7.076 3.241 6.169.971 3.782.971z"></path></svg>
                        <span class="animate-target me-1">100 bonuses</span>
                        <span class="text-body fw-normal text-truncate">available</span>
                      </a>
                                    </div>
                                </div>
                            </div>
                            <button type="button" class="btn-close d-lg-none" data-bs-dismiss="offcanvas" data-bs-target="#accountSidebar" aria-label="Close"></button>
                        </div>

                        <!-- Body (Navigation) -->
                        <div class="pt-2 offcanvas-body d-block pt-lg-4 pb-lg-0">
                            <nav class="list-group list-group-borderless">
                                <a class="list-group-item list-group-item-action d-flex align-items-center" href="account-orders.html">
                    <i class="opacity-75 ci-shopping-bag fs-base me-2"></i>
                    Orders
                    <span class="badge bg-primary rounded-pill ms-auto">1</span>
                  </a>
                                <a class="list-group-item list-group-item-action d-flex align-items-center" href="account-wishlist.html">
                    <i class="opacity-75 ci-heart fs-base me-2"></i>
                    Wishlist
                  </a>
                                <a class="list-group-item list-group-item-action d-flex align-items-center" href="account-payment.html">
                    <i class="opacity-75 ci-credit-card fs-base me-2"></i>
                    Payment methods
                  </a>
                                <a class="list-group-item list-group-item-action d-flex align-items-center" href="account-reviews.html">
                    <i class="opacity-75 ci-star fs-base me-2"></i>
                    My reviews
                  </a>
                            </nav>
                            <h6 class="pt-4 ps-2 ms-1">Manage account</h6>
                            <nav class="list-group list-group-borderless">
                                <a class="list-group-item list-group-item-action d-flex align-items-center pe-none active" href="account-info.html">
                    <i class="opacity-75 ci-user fs-base me-2"></i>
                    Personal info
                  </a>
                                <a class="list-group-item list-group-item-action d-flex align-items-center" href="account-addresses.html">
                    <i class="opacity-75 ci-map-pin fs-base me-2"></i>
                    Addresses
                  </a>
                                <a class="list-group-item list-group-item-action d-flex align-items-center" href="account-notifications.html">
                    <i class="mt-1 opacity-75 ci-bell fs-base me-2"></i>
                    Notifications
                  </a>
                            </nav>
                            <h6 class="pt-4 ps-2 ms-1">Customer service</h6>
                            <nav class="list-group list-group-borderless">
                                <a class="list-group-item list-group-item-action d-flex align-items-center" href="help-topics-v1.html">
                    <i class="opacity-75 ci-help-circle fs-base me-2"></i>
                    Help center
                  </a>
                                <a class="list-group-item list-group-item-action d-flex align-items-center" href="terms-and-conditions.html">
                    <i class="opacity-75 ci-info fs-base me-2"></i>
                    Terms and conditions
                  </a>
                            </nav>
                            <nav class="pt-3 list-group list-group-borderless">
                                <a class="list-group-item list-group-item-action d-flex align-items-center" href="account-signin.html">
                    <i class="opacity-75 ci-log-out fs-base me-2"></i>
                    Log out
                  </a>
                            </nav>
                        </div>
                    </div>
                </aside>


                <!-- Personal info content -->
                <div class="col-lg-9">
                    <div class="ps-lg-3 ps-xl-0">

                        <!-- Page title -->
                        <h1 class="mb-1 h2 mb-sm-2">Personal info</h1>

                        <!-- Basic info -->
                        <div class="py-4 border-bottom">
                            <div class="pb-1 mb-3 nav flex-nowrap align-items-center justify-content-between">
                                <h2 class="mb-0 h6">Basic info</h2>
                                <a class="p-0 nav-link hiding-collapse-toggle text-decoration-underline collapsed" href=".basic-info" data-bs-toggle="collapse" aria-expanded="false" aria-controls="basicInfoPreview basicInfoEdit">Edit</a>
                            </div>
                            <div class="collapse basic-info show" id="basicInfoPreview">
                                <ul class="m-0 list-unstyled fs-sm">
                                    <li>Susan Gardner</li>
                                    <li>May 12, 1996</li>
                                    <li>English</li>
                                </ul>
                            </div>
                            <div class="collapse basic-info" id="basicInfoEdit">
                                <form class="row g-3 g-sm-4 needs-validation" novalidate="">
                                    <div class="col-sm-6">
                                        <label for="fn" class="form-label">First name</label>
                                        <div class="position-relative">
                                            <input type="text" class="form-control" id="fn" value="Susan" required="">
                                            <div class="invalid-feedback">Please enter your first name!</div>
                                        </div>
                                    </div>
                                    <div class="col-sm-6">
                                        <label for="ln" class="form-label">Last name</label>
                                        <div class="position-relative">
                                            <input type="text" class="form-control" id="ln" value="Gardner" required="">
                                            <div class="invalid-feedback">Please enter your last name!</div>
                                        </div>
                                    </div>
                                    <div class="col-sm-6">
                                        <label for="birthdate" class="form-label">Date of birth</label>
                                        <div class="position-relative">
                                            <input type="text" class="form-control form-icon-end" id="birthdate" data-datepicker="{
                          &quot;dateFormat&quot;: &quot;F j, Y&quot;,
                          &quot;defaultDate&quot;: &quot;May 15, 1996&quot;
                        }" placeholder="Choose date">
                                            <i class="ci-calendar position-absolute top-50 end-0 translate-middle-y me-3"></i>
                                        </div>
                                    </div>
                                    <div class="col-sm-6">
                                        <label class="form-label">Language</label>
                                        <select class="form-select" data-select="{
                        &quot;placeholderValue&quot;: &quot;Select language&quot;,
                        &quot;choices&quot;: [
                          {
                            &quot;value&quot;: &quot;&quot;,
                            &quot;label&quot;: &quot;Select language&quot;,
                            &quot;placeholder&quot;: true
                          },
                          {
                            &quot;value&quot;: &quot;English&quot;,
                            &quot;label&quot;: &quot;<div class=\&quot;d-flex align-items-center\&quot;><img src=\&quot;assets/img/flags/en-us.png\&quot; class=\&quot;flex-shrink-0 me-2\&quot; width=\&quot;20\&quot; alt=\&quot;English\&quot;> English</div>&quot;,
                            &quot;selected&quot;: true
                          },
                          {
                            &quot;value&quot;: &quot;Français&quot;,
                            &quot;label&quot;: &quot;<div class=\&quot;d-flex align-items-center\&quot;><img src=\&quot;assets/img/flags/fr.png\&quot; class=\&quot;flex-shrink-0 me-2\&quot; width=\&quot;20\&quot; alt=\&quot;Français\&quot;> Français</div>&quot;
                          },
                          {
                            &quot;value&quot;: &quot;Deutsch&quot;,
                            &quot;label&quot;: &quot;<div class=\&quot;d-flex align-items-center\&quot;><img src=\&quot;assets/img/flags/de.png\&quot; class=\&quot;flex-shrink-0 me-2\&quot; width=\&quot;20\&quot; alt=\&quot;Deutsch\&quot;> Deutsch</div>&quot;
                          },
                          {
                            &quot;value&quot;: &quot;Italiano&quot;,
                            &quot;label&quot;: &quot;<div class=\&quot;d-flex align-items-center\&quot;><img src=\&quot;assets/img/flags/it.png\&quot; class=\&quot;flex-shrink-0 me-2\&quot; width=\&quot;20\&quot; alt=\&quot;Italiano\&quot;> Italiano</div>&quot;
                          }
                        ]
                      }" data-select-template="true"></select>
                                    </div>
                                    <div class="col-12">
                                        <div class="gap-3 pt-2 d-flex pt-sm-0">
                                            <button type="submit" class="btn btn-primary">Save changes</button>
                                            <button type="button" class="btn btn-secondary" data-bs-toggle="collapse" data-bs-target=".basic-info" aria-expanded="true" aria-controls="basicInfoPreview basicInfoEdit">Close</button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>

                        <!-- Contact -->
                        <div class="py-4 border-bottom">
                            <div class="pb-1 mb-3 nav flex-nowrap align-items-center justify-content-between">
                                <div class="gap-3 d-flex align-items-center me-4">
                                    <h2 class="mb-0 h6">Contact</h2>
                                </div>
                                <a class="p-0 nav-link hiding-collapse-toggle text-decoration-underline collapsed" href=".contact-info" data-bs-toggle="collapse" aria-expanded="false" aria-controls="contactInfoPreview contactInfoEdit">Edit</a>
                            </div>
                            <div class="collapse contact-info show" id="contactInfoPreview">
                                <ul class="m-0 list-unstyled fs-sm">
                                    <li class="mb-1">susan.gardner@email.com</li>
                                    <li>+1 (805) 348 95 72 <span class="text-success ms-1">Verified</span></li>
                                </ul>
                            </div>
                            <div class="collapse contact-info" id="contactInfoEdit">
                                <form class="row g-3 g-sm-4 needs-validation" novalidate="">
                                    <div class="col-sm-6">
                                        <label for="email" class="form-label">Email address</label>
                                        <div class="position-relative">
                                            <input type="email" class="form-control" id="email" value="susan.gardner@email.com" required="">
                                            <div class="invalid-feedback">Please enter a valid email address!</div>
                                        </div>
                                    </div>
                                    <div class="col-sm-6">
                                        <label for="phone" class="form-label">Phone number</label>
                                        <div class="position-relative">
                                            <input type="text" class="form-control" id="phone" data-input-format="{&quot;numericOnly&quot;: true, &quot;delimiters&quot;: [&quot;+1 (&quot;, &quot;)&quot;, &quot; &quot;], &quot;blocks&quot;: [0, 3, 0, 3, 2, 2]}" placeholder="+1 (___) ___ __ __" value="+1 (805) 348 95 72"
                                                required="">
                                            <div class="invalid-feedback">Please enter your phone number!</div>
                                        </div>
                                    </div>
                                    <div class="col-12">
                                        <div class="gap-3 pt-2 d-flex pt-sm-0">
                                            <button type="submit" class="btn btn-primary">Save changes</button>
                                            <button type="button" class="btn btn-secondary" data-bs-toggle="collapse" data-bs-target=".contact-info" aria-expanded="true" aria-controls="contactInfoPreview contactInfoEdit">Close</button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>

                        <!-- Password -->
                        <div class="py-4 border-bottom">
                            <div class="pb-1 mb-3 nav flex-nowrap align-items-center justify-content-between">
                                <div class="gap-3 d-flex align-items-center me-4">
                                    <h2 class="mb-0 h6">Password</h2>
                                </div>
                                <a class="p-0 nav-link hiding-collapse-toggle text-decoration-underline collapsed" href=".password-change" data-bs-toggle="collapse" aria-expanded="false" aria-controls="passChangePreview passChangeEdit">Edit</a>
                            </div>
                            <div class="collapse password-change show" id="passChangePreview">
                                <ul class="m-0 list-unstyled fs-sm">
                                    <li>**************</li>
                                </ul>
                            </div>
                            <div class="collapse password-change" id="passChangeEdit">
                                <form class="row g-3 g-sm-4 needs-validation" novalidate="">
                                    <div class="col-sm-6">
                                        <label for="current-password" class="form-label">Current password</label>
                                        <div class="password-toggle">
                                            <input type="password" class="form-control" id="current-password" placeholder="Enter your current password" required="">
                                            <label class="password-toggle-button" aria-label="Show/hide password">
                          <input type="checkbox" class="btn-check">
                        </label>
                                        </div>
                                    </div>
                                    <div class="col-sm-6">
                                        <label for="new-password" class="form-label">New password</label>
                                        <div class="password-toggle">
                                            <input type="password" class="form-control" id="new-password" placeholder="Create new password" required="">
                                            <label class="password-toggle-button" aria-label="Show/hide password">
                          <input type="checkbox" class="btn-check">
                        </label>
                                        </div>
                                    </div>
                                    <div class="col-12">
                                        <div class="gap-3 pt-2 d-flex pt-sm-0">
                                            <button type="submit" class="btn btn-primary">Save changes</button>
                                            <button type="button" class="btn btn-secondary" data-bs-toggle="collapse" data-bs-target=".password-change" aria-expanded="true" aria-controls="passChangePreview passChangeEdit">Close</button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>

                        <!-- Delete account -->
                        <div class="pt-3 mt-2 mt-sm-3">
                            <h2 class="h6">Delete account</h2>
                            <p class="fs-sm">When you delete your account, your public profile will be deactivated immediately. If you change your mind before the 14 days are up, sign in with your email and password, and we'll send you a link to reactivate your account.</p>
                            <a class="text-danger fs-sm fw-medium" href="#!">Delete account</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>
@endsection

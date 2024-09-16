<aside class="col-lg-3">
    <div class="offcanvas-lg offcanvas-start pe-lg-0 pe-xl-4" id="accountSidebar">
        <div class="py-3 offcanvas-header d-lg-block p-lg-0">
            <div class="d-flex align-items-center">
                <div class="flex-shrink-0 mb-0 h5 d-flex justify-content-center align-items-center text-primary bg-primary-subtle lh-1 rounded-circle"
                    style="width: 3rem; height: 3rem">{{ Auth::user()->name[0] }}</div>
                <div class="min-w-0 ps-3">
                    <h5 class="mb-1 h6"> {{ Auth::user()->name }}</h5>
                    <div class="min-w-0 nav flex-nowrap text-nowrap">
                        <a class="p-0 nav-link animate-underline text-body" href="#bonusesModal" data-bs-toggle="modal">
                            <svg class="flex-shrink-0 text-warning me-2" xmlns="http://www.w3.org/2000/svg"
                                width="16" height="16" fill="currentColor">
                                <path
                                    d="M1.333 9.667H7.5V16h-5c-.64 0-1.167-.527-1.167-1.167V9.667zm13.334 0v5.167c0 .64-.527 1.167-1.167 1.167h-5V9.667h6.167zM0 5.833V7.5c0 .64.527 1.167 1.167 1.167h.167H7.5v-1-3H1.167C.527 4.667 0 5.193 0 5.833zm14.833-1.166H8.5v3 1h6.167.167C15.473 8.667 16 8.14 16 7.5V5.833c0-.64-.527-1.167-1.167-1.167z">
                                </path>
                                <path
                                    d="M8 5.363a.5.5 0 0 1-.495-.573C7.752 3.123 9.054-.03 12.219-.03c1.807.001 2.447.977 2.447 1.813 0 1.486-2.069 3.58-6.667 3.58zM12.219.971c-2.388 0-3.295 2.27-3.595 3.377 1.884-.088 3.072-.565 3.756-.971.949-.563 1.287-1.193 1.287-1.595 0-.599-.747-.811-1.447-.811z">
                                </path>
                                <path
                                    d="M8.001 5.363c-4.598 0-6.667-2.094-6.667-3.58 0-.836.641-1.812 2.448-1.812 3.165 0 4.467 3.153 4.713 4.819a.5.5 0 0 1-.495.573zM3.782.971c-.7 0-1.448.213-1.448.812 0 .851 1.489 2.403 5.042 2.566C7.076 3.241 6.169.971 3.782.971z">
                                </path>
                            </svg>
                            <span class="animate-target me-1">100 bonuses</span>
                            <span class="text-body fw-normal text-truncate">available</span>
                        </a>
                    </div>
                </div>
            </div>
            <button type="button" class="btn-close d-lg-none" data-bs-dismiss="offcanvas"
                data-bs-target="#accountSidebar" aria-label="Close"></button>
        </div>
        <div class="pt-2 offcanvas-body d-block pt-lg-4 pb-lg-0">
            <nav class="list-group list-group-borderless">
                <a class="list-group-item list-group-item-action d-flex align-items-center {{ Route::currentRouteName() == 'orders' ? 'active' : '' }}"
                    href="{{ route('orders') }}">
                    <i class="opacity-75 ci-shopping-bag fs-base me-2"></i>
                    Orders
                    <span class="badge bg-primary rounded-pill ms-auto">1</span>
                </a>
                <a class="list-group-item list-group-item-action d-flex align-items-center {{ Route::currentRouteName() == 'favorites' ? 'active' : '' }}"
                    href="{{ route('favorites') }}">
                    <i class="opacity-75 ci-heart fs-base me-2"></i>
                    Wishlist
                </a>
                <a class="list-group-item list-group-item-action d-flex align-items-center {{ Route::currentRouteName() == 'payment-methods' ? 'active' : '' }}"
                    href="{{ route('payment-methods') }}">
                    <i class="opacity-75 ci-credit-card fs-base me-2"></i>
                    Payment methods
                </a>
                <a class="list-group-item list-group-item-action d-flex align-items-center {{ Route::currentRouteName() == 'reviews' ? 'active' : '' }}"
                    href="{{ route('reviews') }}">
                    <i class="opacity-75 ci-star fs-base me-2"></i>
                    My reviews
                </a>
            </nav>
            <h6 class="pt-4 ps-2 ms-1">Manage account</h6>
            <nav class="list-group list-group-borderless">
                <a class="list-group-item list-group-item-action d-flex align-items-center {{ Route::currentRouteName() == 'profile.edit' ? 'active' : '' }}"
                    href="{{ route('profile.edit') }}">
                    <i class="opacity-75 ci-user fs-base me-2"></i>
                    Personal info
                </a>
                <a class="list-group-item list-group-item-action d-flex align-items-center {{ Route::currentRouteName() == 'addresses' ? 'active' : '' }}"
                    href="{{ route('addresses.index') }}">
                    <i class="opacity-75 ci-map-pin fs-base me-2"></i>
                    Addresses
                </a>
                <a class="list-group-item list-group-item-action d-flex align-items-center {{ Route::currentRouteName() == 'notifications' ? 'active' : '' }}"
                    href="{{ route('notifications') }}">
                    <i class="mt-1 opacity-75 ci-bell fs-base me-2"></i>
                    Notifications
                </a>
            </nav>
            <h6 class="pt-4 ps-2 ms-1">Customer service</h6>
            <nav class="list-group list-group-borderless">
                <a class="list-group-item list-group-item-action d-flex align-items-center {{ Route::currentRouteName() == 'help' ? 'active' : '' }}"
                    href="{{ route('help') }}">
                    <i class="opacity-75 ci-help-circle fs-base me-2"></i>
                    Help center
                </a>
                <a class="list-group-item list-group-item-action d-flex align-items-center {{ Route::currentRouteName() == 'terms-conditions' ? 'active' : '' }}"
                    href="{{ route('terms-conditions') }}">
                    <i class="opacity-75 ci-info fs-base me-2"></i>
                    Terms and conditions
                </a>
            </nav>
            <nav class="pt-3 list-group list-group-borderless">
                <form action="{{ route('logout') }}" method="POST">
                    @csrf
                    <button type="submit" class="list-group-item list-group-item-action d-flex align-items-center">
                        <i class="opacity-75 ci-log-out fs-base me-2"></i>
                        Log out
                    </button>
                </form>
            </nav>
        </div>
    </div>
</aside>

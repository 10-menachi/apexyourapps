<div class="pt-2 offcanvas-body d-block pt-lg-4 pb-lg-0">
    <nav class="list-group list-group-borderless">
        <a class="list-group-item list-group-item-action d-flex align-items-center" href="{{ route('orders') }}">
            <i class="opacity-75 ci-shopping-bag fs-base me-2"></i>
            Orders
            <span class="badge bg-primary rounded-pill ms-auto">1</span>
        </a>
        <a class="list-group-item list-group-item-action d-flex align-items-center" href="{{ route('favorites') }}">
            <i class="opacity-75 ci-heart fs-base me-2"></i>
            Wishlist
        </a>
        <a class="list-group-item list-group-item-action d-flex align-items-center"
            href="{{ route('payment-methods') }}">
            <i class="opacity-75 ci-credit-card fs-base me-2"></i>
            Payment methods
        </a>
        <a class="list-group-item list-group-item-action d-flex align-items-center" href="{{ route('reviews') }}">
            <i class="opacity-75 ci-star fs-base me-2"></i>
            My reviews
        </a>
    </nav>
    <h6 class="pt-4 ps-2 ms-1">Manage account</h6>
    <nav class="list-group list-group-borderless">
        <a class="list-group-item list-group-item-action d-flex align-items-center pe-none active"
            href="{{ route('profile.edit') }}">
            <i class="opacity-75 ci-user fs-base me-2"></i>
            Personal info
        </a>
        <a class="list-group-item list-group-item-action d-flex align-items-center" href="{{ route('addresses') }}">
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
        <a class="list-group-item list-group-item-action d-flex align-items-center" href="{{ route('help') }}">
            <i class="opacity-75 ci-help-circle fs-base me-2"></i>
            Help center
        </a>
        <a class="list-group-item list-group-item-action d-flex align-items-center"
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

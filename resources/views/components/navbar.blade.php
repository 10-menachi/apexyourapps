 <div class="pt-3 col-lg-9 d-lg-flex pt-lg-0 ps-lg-0">
     <ul class="navbar-nav position-relative">
         <li class="nav-item me-lg-n1 me-xl-0">
             <a class="nav-link active" href="{{ route('homepage.view') }}">Home</a>
         </li>
         <li class="nav-item dropdown position-static me-lg-n1 me-xl-0">
             <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown"
                 data-bs-trigger="hover" aria-expanded="false">Shop</a>
             <div class="p-4 dropdown-menu rounded-4">
                 <div class="gap-4 d-flex flex-column flex-lg-row">
                     <div style="min-width: 190px">
                         <ul class="gap-2 mt-0 nav flex-column">
                             <li class="pt-1 d-flex w-100">
                                 <a class="p-0 nav-link animate-underline animate-target d-inline fw-normal text-truncate"
                                     href="{{ route('categories.index') }}">Categories</a>
                             </li>
                             <li class="pt-1 d-flex w-100">
                                 <a class="p-0 nav-link animate-underline animate-target d-inline fw-normal text-truncate"
                                     href="{{ route('products.index') }}">Products</a>
                             </li>
                             <li class="pt-1 d-flex w-100">
                                 <a class="p-0 nav-link animate-underline animate-target d-inline fw-normal text-truncate"
                                     href="{{ route('reviews') }}">Reviews</a>
                             </li>
                         </ul>
                     </div>
                 </div>
             </div>
         </li>
         <li class="nav-item dropdown me-lg-n1 me-xl-0">
             <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown"
                 data-bs-trigger="hover" data-bs-auto-close="outside" aria-expanded="false">Account</a>
             <ul class="dropdown-menu">
                 <li><a class="dropdown-item" href="{{ route('orders') }}">Orders
                         History</a></li>
                 <li><a class="dropdown-item" href="{{ route('favorites') }}">Wishlist</a>
                 </li>
                 <li><a class="dropdown-item" href="{{ route('payment-methods') }}">Payment
                         Methods</a></li>
                 <li><a class="dropdown-item" href="{{ route('reviews') }}">My Reviews</a>
                 </li>
                 <li><a class="dropdown-item" href="{{ route('profile.edit') }}">Personal Info</a>
                 </li>
                 <li><a class="dropdown-item" href="{{ route('addresses.index') }}">Addresses</a>
                 </li>
                 <li><a class="dropdown-item" href="{{ route('notifications') }}">Notifications</a></li>
             </ul>
         </li>
     </ul>
     <hr class="my-3 d-lg-none">
     <ul class="navbar-nav ms-auto">
         <li class="nav-item dropdown me-lg-n2 me-xl-n1">
             <a class="px-3 nav-link dropdown-toggle fs-sm" href="#!" role="button" data-bs-toggle="dropdown"
                 data-bs-trigger="hover" aria-expanded="false">Eng</a>
             <ul class="dropdown-menu fs-sm" style="--cz-dropdown-min-width: 7.5rem; --cz-dropdown-spacer: .25rem">
                 <li><a class="dropdown-item" href="#!">Français</a></li>
                 <li><a class="dropdown-item" href="#!">Deutsch</a></li>
                 <li><a class="dropdown-item" href="#!">Italiano</a></li>
             </ul>
         </li>
         <li class="nav-item dropdown me-lg-n1">
             <a class="px-3 nav-link dropdown-toggle fs-sm" href="#!" role="button" data-bs-toggle="dropdown"
                 data-bs-trigger="hover" aria-expanded="false">USD ($)</a>
             <ul class="dropdown-menu dropdown-menu-end fs-sm"
                 style="--cz-dropdown-min-width: 7rem; --cz-dropdown-spacer: .25rem">
                 <li><a class="dropdown-item" href="#!">€ EUR</a></li>
                 <li><a class="dropdown-item" href="#!">£ UKP</a></li>
                 <li><a class="dropdown-item" href="#!">¥ JPY</a></li>
             </ul>
         </li>
     </ul>
 </div>

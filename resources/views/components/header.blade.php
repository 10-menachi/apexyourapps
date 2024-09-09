<header class="py-4 bg-white shadow-sm">
    <div class="container flex items-center justify-between">
        <a href="{{ route('welcome') }}">
            <img src="{{ asset('logo.png') }}" alt="Logo" class="w-32">
        </a>

        <div class="relative flex w-full max-w-xl">
            <span class="absolute text-lg text-gray-400 left-4 top-3">
                <i class="fa-solid fa-magnifying-glass"></i>
            </span>
            <input type="text" name="search" id="search"
                class="hidden w-full py-3 pl-12 pr-3 border border-r-0 border-primary rounded-l-md focus:outline-none md:flex"
                placeholder="search">
            <button
                class="flex items-center justify-center px-8 text-white transition border bg-primary border-primary rounded-r-md hover:bg-transparent hover:text-primary ">Search</button>
        </div>

        <div class="flex items-center space-x-4">
            <a href="{{ route('favorites') }}" class="relative text-center text-gray-700 transition hover:text-primary">
                <div class="text-2xl">
                    <i class="fa-regular fa-heart"></i>
                </div>
                <div class="text-xs leading-3">Wishlist</div>
                <div
                    class="absolute right-0 flex items-center justify-center w-5 h-5 text-xs text-white rounded-full -top-1 bg-primary">
                    8</div>
            </a>
            <a href="{{ route('cart') }}" class="relative text-center text-gray-700 transition hover:text-primary">
                <div class="text-2xl">
                    <i class="fa-solid fa-bag-shopping"></i>
                </div>
                <div class="text-xs leading-3">Cart</div>
                <div
                    class="absolute flex items-center justify-center w-5 h-5 text-xs text-white rounded-full -right-3 -top-1 bg-primary">
                    2</div>
            </a>
            @if (Auth::check())
                <a href="{{ route('profile.edit') }}"
                    class="relative text-center text-gray-700 transition hover:text-primary">
                    <div class="text-2xl">
                        <i class="fa-regular fa-user"></i>
                    </div>
                    <div class="text-xs leading-3">Account</div>
                </a>
            @endif
        </div>
    </div>
</header>

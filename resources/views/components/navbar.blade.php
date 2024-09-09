<nav class="bg-gray-800">
    <div class="container flex">
        <div class="relative items-center hidden px-8 py-4 cursor-pointer bg-primary md:flex group">
            <span class="text-white">
                <i class="fa-solid fa-bars"></i>
            </span>
            <span class="hidden ml-2 text-white capitalize">All Categories</span>
            <div
                class="absolute left-0 invisible w-full py-3 transition duration-300 bg-white divide-y divide-gray-300 shadow-md opacity-0 top-full divide-dashed group-hover:opacity-100 group-hover:visible">
                <a href="#" class="flex items-center px-6 py-3 transition hover:bg-gray-100">
                    <img src="assets/images/icons/sofa.svg" alt="sofa" class="object-contain w-5 h-5">
                    <span class="ml-6 text-sm text-gray-600">Sofa</span>
                </a>
                <a href="#" class="flex items-center px-6 py-3 transition hover:bg-gray-100">
                    <img src="assets/images/icons/terrace.svg" alt="terrace" class="object-contain w-5 h-5">
                    <span class="ml-6 text-sm text-gray-600">Terarce</span>
                </a>
                <a href="#" class="flex items-center px-6 py-3 transition hover:bg-gray-100">
                    <img src="assets/images/icons/bed.svg" alt="bed" class="object-contain w-5 h-5">
                    <span class="ml-6 text-sm text-gray-600">Bed</span>
                </a>
                <a href="#" class="flex items-center px-6 py-3 transition hover:bg-gray-100">
                    <img src="assets/images/icons/office.svg" alt="office" class="object-contain w-5 h-5">
                    <span class="ml-6 text-sm text-gray-600">office</span>
                </a>
                <a href="#" class="flex items-center px-6 py-3 transition hover:bg-gray-100">
                    <img src="assets/images/icons/outdoor-cafe.svg" alt="outdoor" class="object-contain w-5 h-5">
                    <span class="ml-6 text-sm text-gray-600">Outdoor</span>
                </a>
                <a href="#" class="flex items-center px-6 py-3 transition hover:bg-gray-100">
                    <img src="assets/images/icons/bed-2.svg" alt="Mattress" class="object-contain w-5 h-5">
                    <span class="ml-6 text-sm text-gray-600">Mattress</span>
                </a>
            </div>
        </div>

        <div class="flex items-center justify-between flex-grow py-5 md:pl-12">
            <div class="flex items-center space-x-6 capitalize">
                <a href="{{ route('welcome') }}" class="text-gray-200 transition hover:text-white">Home</a>
                <a href="{{ route('shop') }}" class="text-gray-200 transition hover:text-white">Shop</a>
                <a href="{{ route('about') }}" class="text-gray-200 transition hover:text-white">About us</a>
                <a href="{{ route('contact') }}" class="text-gray-200 transition hover:text-white">Contact us</a>
            </div>
            @if (!Auth::check())
                <a href="{{ route('login') }}" class="text-gray-200 transition hover:text-white">Login</a>
            @endif
        </div>
    </div>
</nav>

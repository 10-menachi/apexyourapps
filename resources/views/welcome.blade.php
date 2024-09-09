@include('components.header')
@include('components.navbar')
@include('components.banner')
@include('components.features')

<!-- categories -->
<div class="container py-16">
    <h2 class="mb-6 text-2xl font-medium text-gray-800 uppercase">shop by category</h2>
    <div class="grid grid-cols-3 gap-3">
        <div class="relative overflow-hidden rounded-sm group">
            <img src="assets/images/category/category-1.jpg" alt="category 1" class="w-full">
            <a href="#"
                class="absolute inset-0 flex items-center justify-center text-xl font-medium text-white transition bg-black bg-opacity-40 font-roboto group-hover:bg-opacity-60">Bedroom</a>
        </div>
        <div class="relative overflow-hidden rounded-sm group">
            <img src="assets/images/category/category-2.jpg" alt="category 1" class="w-full">
            <a href="#"
                class="absolute inset-0 flex items-center justify-center text-xl font-medium text-white transition bg-black bg-opacity-40 font-roboto group-hover:bg-opacity-60">Mattrass</a>
        </div>
        <div class="relative overflow-hidden rounded-sm group">
            <img src="assets/images/category/category-3.jpg" alt="category 1" class="w-full">
            <a href="#"
                class="absolute inset-0 flex items-center justify-center text-xl font-medium text-white transition bg-black bg-opacity-40 font-roboto group-hover:bg-opacity-60">Outdoor
            </a>
        </div>
        <div class="relative overflow-hidden rounded-sm group">
            <img src="assets/images/category/category-4.jpg" alt="category 1" class="w-full">
            <a href="#"
                class="absolute inset-0 flex items-center justify-center text-xl font-medium text-white transition bg-black bg-opacity-40 font-roboto group-hover:bg-opacity-60">Sofa</a>
        </div>
        <div class="relative overflow-hidden rounded-sm group">
            <img src="assets/images/category/category-5.jpg" alt="category 1" class="w-full">
            <a href="#"
                class="absolute inset-0 flex items-center justify-center text-xl font-medium text-white transition bg-black bg-opacity-40 font-roboto group-hover:bg-opacity-60">Living
                Room</a>
        </div>
        <div class="relative overflow-hidden rounded-sm group">
            <img src="assets/images/category/category-6.jpg" alt="category 1" class="w-full">
            <a href="#"
                class="absolute inset-0 flex items-center justify-center text-xl font-medium text-white transition bg-black bg-opacity-40 font-roboto group-hover:bg-opacity-60">Kitchen</a>
        </div>
    </div>
</div>
<!-- ./categories -->

<!-- new arrival -->
<div class="container pb-16">
    <h2 class="mb-6 text-2xl font-medium text-gray-800 uppercase">top new arrival</h2>
    <div class="grid grid-cols-1 gap-6 md:grid-cols-4">
        <div class="overflow-hidden bg-white rounded shadow group">
            <div class="relative">
                <img src="assets/images/products/product1.jpg" alt="product 1" class="w-full">
                <div
                    class="absolute inset-0 flex items-center justify-center gap-2 transition bg-black opacity-0 bg-opacity-40 group-hover:opacity-100">
                    <a href="#"
                        class="flex items-center justify-center h-8 text-lg text-white transition rounded-full w-9 bg-primary hover:bg-gray-800"
                        title="view product">
                        <i class="fa-solid fa-magnifying-glass"></i>
                    </a>
                    <a href="#"
                        class="flex items-center justify-center h-8 text-lg text-white transition rounded-full w-9 bg-primary hover:bg-gray-800"
                        title="add to wishlist">
                        <i class="fa-solid fa-heart"></i>
                    </a>
                </div>
            </div>
            <div class="px-4 pt-4 pb-3">
                <a href="#">
                    <h4 class="mb-2 text-xl font-medium text-gray-800 uppercase transition hover:text-primary">
                        Guyer
                        Chair</h4>
                </a>
                <div class="flex items-baseline mb-1 space-x-2">
                    <p class="text-xl font-semibold text-primary">$45.00</p>
                    <p class="text-sm text-gray-400 line-through">$55.90</p>
                </div>
                <div class="flex items-center">
                    <div class="flex gap-1 text-sm text-yellow-400">
                        <span><i class="fa-solid fa-star"></i></span>
                        <span><i class="fa-solid fa-star"></i></span>
                        <span><i class="fa-solid fa-star"></i></span>
                        <span><i class="fa-solid fa-star"></i></span>
                        <span><i class="fa-solid fa-star"></i></span>
                    </div>
                    <div class="ml-3 text-xs text-gray-500">(150)</div>
                </div>
            </div>
            <a href="#"
                class="block w-full py-1 text-center text-white transition border rounded-b bg-primary border-primary hover:bg-transparent hover:text-primary">Add
                to cart</a>
        </div>
        <div class="overflow-hidden bg-white rounded shadow group">
            <div class="relative">
                <img src="assets/images/products/product4.jpg" alt="product 1" class="w-full">
                <div
                    class="absolute inset-0 flex items-center justify-center gap-2 transition bg-black opacity-0 bg-opacity-40 group-hover:opacity-100">
                    <a href="#"
                        class="flex items-center justify-center h-8 text-lg text-white transition rounded-full w-9 bg-primary hover:bg-gray-800"
                        title="view product">
                        <i class="fa-solid fa-magnifying-glass"></i>
                    </a>
                    <a href="#"
                        class="flex items-center justify-center h-8 text-lg text-white transition rounded-full w-9 bg-primary hover:bg-gray-800"
                        title="add to wishlist">
                        <i class="fa-solid fa-heart"></i>
                    </a>
                </div>
            </div>
            <div class="px-4 pt-4 pb-3">
                <a href="#">
                    <h4 class="mb-2 text-xl font-medium text-gray-800 uppercase transition hover:text-primary">Bed
                        King Size</h4>
                </a>
                <div class="flex items-baseline mb-1 space-x-2">
                    <p class="text-xl font-semibold text-primary">$45.00</p>
                    <p class="text-sm text-gray-400 line-through">$55.90</p>
                </div>
                <div class="flex items-center">
                    <div class="flex gap-1 text-sm text-yellow-400">
                        <span><i class="fa-solid fa-star"></i></span>
                        <span><i class="fa-solid fa-star"></i></span>
                        <span><i class="fa-solid fa-star"></i></span>
                        <span><i class="fa-solid fa-star"></i></span>
                        <span><i class="fa-solid fa-star"></i></span>
                    </div>
                    <div class="ml-3 text-xs text-gray-500">(150)</div>
                </div>
            </div>
            <a href="#"
                class="block w-full py-1 text-center text-white transition border rounded-b bg-primary border-primary hover:bg-transparent hover:text-primary">Add
                to cart</a>
        </div>
        <div class="overflow-hidden bg-white rounded shadow group">
            <div class="relative">
                <img src="assets/images/products/product2.jpg" alt="product 1" class="w-full">
                <div
                    class="absolute inset-0 flex items-center justify-center gap-2 transition bg-black opacity-0 bg-opacity-40 group-hover:opacity-100">
                    <a href="#"
                        class="flex items-center justify-center h-8 text-lg text-white transition rounded-full w-9 bg-primary hover:bg-gray-800"
                        title="view product">
                        <i class="fa-solid fa-magnifying-glass"></i>
                    </a>
                    <a href="#"
                        class="flex items-center justify-center h-8 text-lg text-white transition rounded-full w-9 bg-primary hover:bg-gray-800"
                        title="add to wishlist">
                        <i class="fa-solid fa-heart"></i>
                    </a>
                </div>
            </div>
            <div class="px-4 pt-4 pb-3">
                <a href="#">
                    <h4 class="mb-2 text-xl font-medium text-gray-800 uppercase transition hover:text-primary">
                        Couple Sofa</h4>
                </a>
                <div class="flex items-baseline mb-1 space-x-2">
                    <p class="text-xl font-semibold text-primary">$45.00</p>
                    <p class="text-sm text-gray-400 line-through">$55.90</p>
                </div>
                <div class="flex items-center">
                    <div class="flex gap-1 text-sm text-yellow-400">
                        <span><i class="fa-solid fa-star"></i></span>
                        <span><i class="fa-solid fa-star"></i></span>
                        <span><i class="fa-solid fa-star"></i></span>
                        <span><i class="fa-solid fa-star"></i></span>
                        <span><i class="fa-solid fa-star"></i></span>
                    </div>
                    <div class="ml-3 text-xs text-gray-500">(150)</div>
                </div>
            </div>
            <a href="#"
                class="block w-full py-1 text-center text-white transition border rounded-b bg-primary border-primary hover:bg-transparent hover:text-primary">Add
                to cart</a>
        </div>
        <div class="overflow-hidden bg-white rounded shadow group">
            <div class="relative">
                <img src="assets/images/products/product3.jpg" alt="product 1" class="w-full">
                <div
                    class="absolute inset-0 flex items-center justify-center gap-2 transition bg-black opacity-0 bg-opacity-40 group-hover:opacity-100">
                    <a href="#"
                        class="flex items-center justify-center h-8 text-lg text-white transition rounded-full w-9 bg-primary hover:bg-gray-800"
                        title="view product">
                        <i class="fa-solid fa-magnifying-glass"></i>
                    </a>
                    <a href="#"
                        class="flex items-center justify-center h-8 text-lg text-white transition rounded-full w-9 bg-primary hover:bg-gray-800"
                        title="add to wishlist">
                        <i class="fa-solid fa-heart"></i>
                    </a>
                </div>
            </div>
            <div class="px-4 pt-4 pb-3">
                <a href="#">
                    <h4 class="mb-2 text-xl font-medium text-gray-800 uppercase transition hover:text-primary">
                        Mattrass X</h4>
                </a>
                <div class="flex items-baseline mb-1 space-x-2">
                    <p class="text-xl font-semibold text-primary">$45.00</p>
                    <p class="text-sm text-gray-400 line-through">$55.90</p>
                </div>
                <div class="flex items-center">
                    <div class="flex gap-1 text-sm text-yellow-400">
                        <span><i class="fa-solid fa-star"></i></span>
                        <span><i class="fa-solid fa-star"></i></span>
                        <span><i class="fa-solid fa-star"></i></span>
                        <span><i class="fa-solid fa-star"></i></span>
                        <span><i class="fa-solid fa-star"></i></span>
                    </div>
                    <div class="ml-3 text-xs text-gray-500">(150)</div>
                </div>
            </div>
            <a href="#"
                class="block w-full py-1 text-center text-white transition border rounded-b bg-primary border-primary hover:bg-transparent hover:text-primary">Add
                to cart</a>
        </div>
    </div>
</div>
<!-- ./new arrival -->

<!-- ads -->
<div class="container pb-16">
    <a href="#">
        <img src="assets/images/offer.jpg" alt="ads" class="w-full">
    </a>
</div>
<!-- ./ads -->

<!-- product -->
<div class="container pb-16">
    <h2 class="mb-6 text-2xl font-medium text-gray-800 uppercase">recomended for you</h2>
    <div class="grid grid-cols-2 gap-6 md:grid-cols-4">
        <div class="overflow-hidden bg-white rounded shadow group">
            <div class="relative">
                <img src="assets/images/products/product1.jpg" alt="product 1" class="w-full">
                <div
                    class="absolute inset-0 flex items-center justify-center gap-2 transition bg-black opacity-0 bg-opacity-40 group-hover:opacity-100">
                    <a href="#"
                        class="flex items-center justify-center h-8 text-lg text-white transition rounded-full w-9 bg-primary hover:bg-gray-800"
                        title="view product">
                        <i class="fa-solid fa-magnifying-glass"></i>
                    </a>
                    <a href="#"
                        class="flex items-center justify-center h-8 text-lg text-white transition rounded-full w-9 bg-primary hover:bg-gray-800"
                        title="add to wishlist">
                        <i class="fa-solid fa-heart"></i>
                    </a>
                </div>
            </div>
            <div class="px-4 pt-4 pb-3">
                <a href="#">
                    <h4 class="mb-2 text-xl font-medium text-gray-800 uppercase transition hover:text-primary">
                        Guyer
                        Chair</h4>
                </a>
                <div class="flex items-baseline mb-1 space-x-2">
                    <p class="text-xl font-semibold text-primary">$45.00</p>
                    <p class="text-sm text-gray-400 line-through">$55.90</p>
                </div>
                <div class="flex items-center">
                    <div class="flex gap-1 text-sm text-yellow-400">
                        <span><i class="fa-solid fa-star"></i></span>
                        <span><i class="fa-solid fa-star"></i></span>
                        <span><i class="fa-solid fa-star"></i></span>
                        <span><i class="fa-solid fa-star"></i></span>
                        <span><i class="fa-solid fa-star"></i></span>
                    </div>
                    <div class="ml-3 text-xs text-gray-500">(150)</div>
                </div>
            </div>
            <a href="#"
                class="block w-full py-1 text-center text-white transition border rounded-b bg-primary border-primary hover:bg-transparent hover:text-primary">Add
                to cart</a>
        </div>
        <div class="overflow-hidden bg-white rounded shadow group">
            <div class="relative">
                <img src="assets/images/products/product4.jpg" alt="product 1" class="w-full">
                <div
                    class="absolute inset-0 flex items-center justify-center gap-2 transition bg-black opacity-0 bg-opacity-40 group-hover:opacity-100">
                    <a href="#"
                        class="flex items-center justify-center h-8 text-lg text-white transition rounded-full w-9 bg-primary hover:bg-gray-800"
                        title="view product">
                        <i class="fa-solid fa-magnifying-glass"></i>
                    </a>
                    <a href="#"
                        class="flex items-center justify-center h-8 text-lg text-white transition rounded-full w-9 bg-primary hover:bg-gray-800"
                        title="add to wishlist">
                        <i class="fa-solid fa-heart"></i>
                    </a>
                </div>
            </div>
            <div class="px-4 pt-4 pb-3">
                <a href="#">
                    <h4 class="mb-2 text-xl font-medium text-gray-800 uppercase transition hover:text-primary">Bed
                        King Size</h4>
                </a>
                <div class="flex items-baseline mb-1 space-x-2">
                    <p class="text-xl font-semibold text-primary">$45.00</p>
                    <p class="text-sm text-gray-400 line-through">$55.90</p>
                </div>
                <div class="flex items-center">
                    <div class="flex gap-1 text-sm text-yellow-400">
                        <span><i class="fa-solid fa-star"></i></span>
                        <span><i class="fa-solid fa-star"></i></span>
                        <span><i class="fa-solid fa-star"></i></span>
                        <span><i class="fa-solid fa-star"></i></span>
                        <span><i class="fa-solid fa-star"></i></span>
                    </div>
                    <div class="ml-3 text-xs text-gray-500">(150)</div>
                </div>
            </div>
            <a href="#"
                class="block w-full py-1 text-center text-white transition border rounded-b bg-primary border-primary hover:bg-transparent hover:text-primary">Add
                to cart</a>
        </div>
        <div class="overflow-hidden bg-white rounded shadow group">
            <div class="relative">
                <img src="assets/images/products/product2.jpg" alt="product 1" class="w-full">
                <div
                    class="absolute inset-0 flex items-center justify-center gap-2 transition bg-black opacity-0 bg-opacity-40 group-hover:opacity-100">
                    <a href="#"
                        class="flex items-center justify-center h-8 text-lg text-white transition rounded-full w-9 bg-primary hover:bg-gray-800"
                        title="view product">
                        <i class="fa-solid fa-magnifying-glass"></i>
                    </a>
                    <a href="#"
                        class="flex items-center justify-center h-8 text-lg text-white transition rounded-full w-9 bg-primary hover:bg-gray-800"
                        title="add to wishlist">
                        <i class="fa-solid fa-heart"></i>
                    </a>
                </div>
            </div>
            <div class="px-4 pt-4 pb-3">
                <a href="#">
                    <h4 class="mb-2 text-xl font-medium text-gray-800 uppercase transition hover:text-primary">
                        Couple Sofa</h4>
                </a>
                <div class="flex items-baseline mb-1 space-x-2">
                    <p class="text-xl font-semibold text-primary">$45.00</p>
                    <p class="text-sm text-gray-400 line-through">$55.90</p>
                </div>
                <div class="flex items-center">
                    <div class="flex gap-1 text-sm text-yellow-400">
                        <span><i class="fa-solid fa-star"></i></span>
                        <span><i class="fa-solid fa-star"></i></span>
                        <span><i class="fa-solid fa-star"></i></span>
                        <span><i class="fa-solid fa-star"></i></span>
                        <span><i class="fa-solid fa-star"></i></span>
                    </div>
                    <div class="ml-3 text-xs text-gray-500">(150)</div>
                </div>
            </div>
            <a href="#"
                class="block w-full py-1 text-center text-white transition border rounded-b bg-primary border-primary hover:bg-transparent hover:text-primary">Add
                to cart</a>
        </div>
        <div class="overflow-hidden bg-white rounded shadow group">
            <div class="relative">
                <img src="assets/images/products/product3.jpg" alt="product 1" class="w-full">
                <div
                    class="absolute inset-0 flex items-center justify-center gap-2 transition bg-black opacity-0 bg-opacity-40 group-hover:opacity-100">
                    <a href="#"
                        class="flex items-center justify-center h-8 text-lg text-white transition rounded-full w-9 bg-primary hover:bg-gray-800"
                        title="view product">
                        <i class="fa-solid fa-magnifying-glass"></i>
                    </a>
                    <a href="#"
                        class="flex items-center justify-center h-8 text-lg text-white transition rounded-full w-9 bg-primary hover:bg-gray-800"
                        title="add to wishlist">
                        <i class="fa-solid fa-heart"></i>
                    </a>
                </div>
            </div>
            <div class="px-4 pt-4 pb-3">
                <a href="#">
                    <h4 class="mb-2 text-xl font-medium text-gray-800 uppercase transition hover:text-primary">
                        Mattrass X</h4>
                </a>
                <div class="flex items-baseline mb-1 space-x-2">
                    <p class="text-xl font-semibold text-primary">$45.00</p>
                    <p class="text-sm text-gray-400 line-through">$55.90</p>
                </div>
                <div class="flex items-center">
                    <div class="flex gap-1 text-sm text-yellow-400">
                        <span><i class="fa-solid fa-star"></i></span>
                        <span><i class="fa-solid fa-star"></i></span>
                        <span><i class="fa-solid fa-star"></i></span>
                        <span><i class="fa-solid fa-star"></i></span>
                        <span><i class="fa-solid fa-star"></i></span>
                    </div>
                    <div class="ml-3 text-xs text-gray-500">(150)</div>
                </div>
            </div>
            <a href="#"
                class="block w-full py-1 text-center text-white transition border rounded-b bg-primary border-primary hover:bg-transparent hover:text-primary">Add
                to cart</a>
        </div>
        <div class="overflow-hidden bg-white rounded shadow group">
            <div class="relative">
                <img src="assets/images/products/product1.jpg" alt="product 1" class="w-full">
                <div
                    class="absolute inset-0 flex items-center justify-center gap-2 transition bg-black opacity-0 bg-opacity-40 group-hover:opacity-100">
                    <a href="#"
                        class="flex items-center justify-center h-8 text-lg text-white transition rounded-full w-9 bg-primary hover:bg-gray-800"
                        title="view product">
                        <i class="fa-solid fa-magnifying-glass"></i>
                    </a>
                    <a href="#"
                        class="flex items-center justify-center h-8 text-lg text-white transition rounded-full w-9 bg-primary hover:bg-gray-800"
                        title="add to wishlist">
                        <i class="fa-solid fa-heart"></i>
                    </a>
                </div>
            </div>
            <div class="px-4 pt-4 pb-3">
                <a href="#">
                    <h4 class="mb-2 text-xl font-medium text-gray-800 uppercase transition hover:text-primary">
                        Guyer
                        Chair</h4>
                </a>
                <div class="flex items-baseline mb-1 space-x-2">
                    <p class="text-xl font-semibold text-primary">$45.00</p>
                    <p class="text-sm text-gray-400 line-through">$55.90</p>
                </div>
                <div class="flex items-center">
                    <div class="flex gap-1 text-sm text-yellow-400">
                        <span><i class="fa-solid fa-star"></i></span>
                        <span><i class="fa-solid fa-star"></i></span>
                        <span><i class="fa-solid fa-star"></i></span>
                        <span><i class="fa-solid fa-star"></i></span>
                        <span><i class="fa-solid fa-star"></i></span>
                    </div>
                    <div class="ml-3 text-xs text-gray-500">(150)</div>
                </div>
            </div>
            <a href="#"
                class="block w-full py-1 text-center text-white transition border rounded-b bg-primary border-primary hover:bg-transparent hover:text-primary">Add
                to cart</a>
        </div>
        <div class="overflow-hidden bg-white rounded shadow group">
            <div class="relative">
                <img src="assets/images/products/product4.jpg" alt="product 1" class="w-full">
                <div
                    class="absolute inset-0 flex items-center justify-center gap-2 transition bg-black opacity-0 bg-opacity-40 group-hover:opacity-100">
                    <a href="#"
                        class="flex items-center justify-center h-8 text-lg text-white transition rounded-full w-9 bg-primary hover:bg-gray-800"
                        title="view product">
                        <i class="fa-solid fa-magnifying-glass"></i>
                    </a>
                    <a href="#"
                        class="flex items-center justify-center h-8 text-lg text-white transition rounded-full w-9 bg-primary hover:bg-gray-800"
                        title="add to wishlist">
                        <i class="fa-solid fa-heart"></i>
                    </a>
                </div>
            </div>
            <div class="px-4 pt-4 pb-3">
                <a href="#">
                    <h4 class="mb-2 text-xl font-medium text-gray-800 uppercase transition hover:text-primary">Bed
                        King Size</h4>
                </a>
                <div class="flex items-baseline mb-1 space-x-2">
                    <p class="text-xl font-semibold text-primary">$45.00</p>
                    <p class="text-sm text-gray-400 line-through">$55.90</p>
                </div>
                <div class="flex items-center">
                    <div class="flex gap-1 text-sm text-yellow-400">
                        <span><i class="fa-solid fa-star"></i></span>
                        <span><i class="fa-solid fa-star"></i></span>
                        <span><i class="fa-solid fa-star"></i></span>
                        <span><i class="fa-solid fa-star"></i></span>
                        <span><i class="fa-solid fa-star"></i></span>
                    </div>
                    <div class="ml-3 text-xs text-gray-500">(150)</div>
                </div>
            </div>
            <a href="#"
                class="block w-full py-1 text-center text-white transition border rounded-b bg-primary border-primary hover:bg-transparent hover:text-primary">Add
                to cart</a>
        </div>
        <div class="overflow-hidden bg-white rounded shadow group">
            <div class="relative">
                <img src="assets/images/products/product2.jpg" alt="product 1" class="w-full">
                <div
                    class="absolute inset-0 flex items-center justify-center gap-2 transition bg-black opacity-0 bg-opacity-40 group-hover:opacity-100">
                    <a href="#"
                        class="flex items-center justify-center h-8 text-lg text-white transition rounded-full w-9 bg-primary hover:bg-gray-800"
                        title="view product">
                        <i class="fa-solid fa-magnifying-glass"></i>
                    </a>
                    <a href="#"
                        class="flex items-center justify-center h-8 text-lg text-white transition rounded-full w-9 bg-primary hover:bg-gray-800"
                        title="add to wishlist">
                        <i class="fa-solid fa-heart"></i>
                    </a>
                </div>
            </div>
            <div class="px-4 pt-4 pb-3">
                <a href="#">
                    <h4 class="mb-2 text-xl font-medium text-gray-800 uppercase transition hover:text-primary">
                        Couple Sofa</h4>
                </a>
                <div class="flex items-baseline mb-1 space-x-2">
                    <p class="text-xl font-semibold text-primary">$45.00</p>
                    <p class="text-sm text-gray-400 line-through">$55.90</p>
                </div>
                <div class="flex items-center">
                    <div class="flex gap-1 text-sm text-yellow-400">
                        <span><i class="fa-solid fa-star"></i></span>
                        <span><i class="fa-solid fa-star"></i></span>
                        <span><i class="fa-solid fa-star"></i></span>
                        <span><i class="fa-solid fa-star"></i></span>
                        <span><i class="fa-solid fa-star"></i></span>
                    </div>
                    <div class="ml-3 text-xs text-gray-500">(150)</div>
                </div>
            </div>
            <a href="#"
                class="block w-full py-1 text-center text-white transition border rounded-b bg-primary border-primary hover:bg-transparent hover:text-primary">Add
                to cart</a>
        </div>
        <div class="overflow-hidden bg-white rounded shadow group">
            <div class="relative">
                <img src="assets/images/products/product3.jpg" alt="product 1" class="w-full">
                <div
                    class="absolute inset-0 flex items-center justify-center gap-2 transition bg-black opacity-0 bg-opacity-40 group-hover:opacity-100">
                    <a href="#"
                        class="flex items-center justify-center h-8 text-lg text-white transition rounded-full w-9 bg-primary hover:bg-gray-800"
                        title="view product">
                        <i class="fa-solid fa-magnifying-glass"></i>
                    </a>
                    <a href="#"
                        class="flex items-center justify-center h-8 text-lg text-white transition rounded-full w-9 bg-primary hover:bg-gray-800"
                        title="add to wishlist">
                        <i class="fa-solid fa-heart"></i>
                    </a>
                </div>
            </div>
            <div class="px-4 pt-4 pb-3">
                <a href="#">
                    <h4 class="mb-2 text-xl font-medium text-gray-800 uppercase transition hover:text-primary">
                        Mattrass X</h4>
                </a>
                <div class="flex items-baseline mb-1 space-x-2">
                    <p class="text-xl font-semibold text-primary">$45.00</p>
                    <p class="text-sm text-gray-400 line-through">$55.90</p>
                </div>
                <div class="flex items-center">
                    <div class="flex gap-1 text-sm text-yellow-400">
                        <span><i class="fa-solid fa-star"></i></span>
                        <span><i class="fa-solid fa-star"></i></span>
                        <span><i class="fa-solid fa-star"></i></span>
                        <span><i class="fa-solid fa-star"></i></span>
                        <span><i class="fa-solid fa-star"></i></span>
                    </div>
                    <div class="ml-3 text-xs text-gray-500">(150)</div>
                </div>
            </div>
            <a href="#"
                class="block w-full py-1 text-center text-white transition border rounded-b bg-primary border-primary hover:bg-transparent hover:text-primary">Add
                to cart</a>
        </div>
    </div>
</div>
<!-- ./product -->

<!-- footer -->
<footer class="pt-16 pb-12 bg-white border-t border-gray-100">
    <div class="container grid grid-cols-1 ">
        <div class="col-span-1 space-y-4">
            <img src="assets/images/logo.svg" alt="logo" class="w-30">
            <div class="mr-2">
                <p class="text-gray-500">
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Quia, hic?
                </p>
            </div>
            <div class="flex space-x-5">
                <a href="#" class="text-gray-400 hover:text-gray-500"><i
                        class="fa-brands fa-facebook-square"></i></a>
                <a href="#" class="text-gray-400 hover:text-gray-500"><i
                        class="fa-brands fa-instagram-square"></i></a>
                <a href="#" class="text-gray-400 hover:text-gray-500"><i
                        class="fa-brands fa-twitter-square"></i></a>
                <a href="#" class="text-gray-400 hover:text-gray-500">
                    <i class="fa-brands fa-github-square"></i>
                </a>
            </div>
        </div>

        <div class="grid grid-cols-2 col-span-2 gap-4">
            <div class="grid grid-cols-2 gap-4 md:gap-8">
                <div>
                    <h3 class="text-sm font-semibold tracking-wider text-gray-400 uppercase">Solutions</h3>
                    <div class="mt-4 space-y-4">
                        <a href="#" class="block text-base text-gray-500 hover:text-gray-900">Marketing</a>
                        <a href="#" class="block text-base text-gray-500 hover:text-gray-900">Analitycs</a>
                        <a href="#" class="block text-base text-gray-500 hover:text-gray-900">Commerce</a>
                        <a href="#" class="block text-base text-gray-500 hover:text-gray-900">Insights</a>
                    </div>
                </div>

                <div>
                    <h3 class="text-sm font-semibold tracking-wider text-gray-400 uppercase">Support</h3>
                    <div class="mt-4 space-y-4">
                        <a href="#" class="block text-base text-gray-500 hover:text-gray-900">Pricing</a>
                        <!-- <a href="#" class="block text-base text-gray-500 hover:text-gray-900">Documentation</a> -->
                        <a href="#" class="block text-base text-gray-500 hover:text-gray-900">Guides</a>
                        <a href="#" class="block text-base text-gray-500 hover:text-gray-900">API Status</a>
                    </div>
                </div>
            </div>
            <div class="grid grid-cols-2 gap-8">
                <div>
                    <h3 class="text-sm font-semibold tracking-wider text-gray-400 uppercase">Solutions</h3>
                    <div class="mt-4 space-y-4">
                        <a href="#" class="block text-base text-gray-500 hover:text-gray-900">Marketing</a>
                        <a href="#" class="block text-base text-gray-500 hover:text-gray-900">Analitycs</a>
                        <a href="#" class="block text-base text-gray-500 hover:text-gray-900">Commerce</a>
                        <a href="#" class="block text-base text-gray-500 hover:text-gray-900">Insights</a>
                    </div>
                </div>

                <div>
                    <h3 class="text-sm font-semibold tracking-wider text-gray-400 uppercase">Support</h3>
                    <div class="mt-4 space-y-4">
                        <a href="#" class="block text-base text-gray-500 hover:text-gray-900">Pricing</a>
                        <!-- <a href="#" class="block text-base text-gray-500 hover:text-gray-900">Documentation</a> -->
                        <a href="#" class="block text-base text-gray-500 hover:text-gray-900">Guides</a>
                        <a href="#" class="block text-base text-gray-500 hover:text-gray-900">API Status</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</footer>
<!-- ./footer -->

<!-- copyright -->
<div class="py-4 bg-gray-800">
    <div class="container flex items-center justify-between">
        <p class="text-white">&copy; TailCommerce - All Right Reserved</p>
        <div>
            <img src="assets/images/methods.png" alt="methods" class="h-5">
        </div>
    </div>
</div>
<!-- ./copyright -->
</body>

</html>

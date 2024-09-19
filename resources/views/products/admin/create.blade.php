@extends('layouts.admin-app')

@section('title', 'Products')

@section('content')
    <div class="flex-1 ltr:flex rtl:flex-row-reverse">
        <div class="page-wrapper relative ltr:ms-auto rtl:me-auto rtl:ms-0 w-[calc(100%-260px)] px-4 pt-[64px] duration-300">
            <div class="xl:w-full">
                <div class="flex flex-wrap">
                    <div class="flex items-center w-full py-4">
                        <div class="w-full">
                            <div class="">
                                <div class="flex flex-wrap justify-between">
                                    <div class="items-center ">
                                        <h1 class="block text-3xl font-medium dark:text-slate-100">Add Product</h1>
                                        <ol class="flex text-sm list-reset">
                                            <li><a href="#" class="text-gray-500 dark:text-slate-400">Robotech</a>
                                            </li>
                                            <li><span class="mx-2 text-gray-500 dark:text-slate-400">/</span></li>
                                            <li class="text-gray-500 dark:text-slate-400">Admin</li>
                                            <li><span class="mx-2 text-gray-500 dark:text-slate-400">/</span></li>
                                            <li class="text-primary-500 hover:text-primary-600 dark:text-primary-400">Add
                                                Product</li>
                                        </ol>
                                    </div>
                                    <div class="flex items-center">
                                        <div
                                            class="inline-block w-auto px-3 py-1 mt-2 leading-5 bg-transparent border rounded-md today-date lg:mt-0 form-input border-primary-500/60 dark:border-primary-500/60 text-primary-500 focus:outline-none focus:ring-0 placeholder:text-slate-400/70 placeholder:font-normal placeholder:text-sm hover:border-primary-400 focus:border-primary-500 dark:focus:border-primary-500 dark:hover:border-slate-700">
                                            <input type="text"
                                                class="border-0 dash_date focus:border-0 focus:outline-none" readonly
                                                required="">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!--end container-->

            <div class="xl:w-full  min-h-[calc(100vh-138px)] relative pb-14">
                <div
                    class="grid justify-between grid-cols-12 gap-4 sm:grid-cols-12 md:grid-cols-12 lg:grid-cols-12 xl:grid-cols-12">
                    <div class="col-span-12 sm:col-span-12 md:col-span-12 lg:col-span-3 xl:col-span-3">
                        <div class="relative w-full p-4">
                            <label for="" class="text-sm font-medium text-slate-600 dark:text-slate-400">Upload
                                Image</label>
                            <div class="w-full h-56 mx-auto mb-4">
                                <input type="file" class="h-56 filepond" name="filepond"
                                    accept="image/png, image/jpeg, image/gif" />
                            </div>
                            <div class="grid grid-cols-2 gap-2 ">
                                <div class="col-span-1">
                                    <input type="file" class="filepond" />
                                </div>
                                <div class="col-span-1">
                                    <input type="file" class="filepond" />
                                </div>
                            </div>
                        </div>
                        <!--end card-->
                    </div>
                    <!--end col-->
                    <div class="col-span-12 sm:col-span-12 md:col-span-12 lg:col-span-6 xl:col-span-6">
                        <div class="relative w-full mb-4">
                            <div class="flex-auto p-0 md:p-4">
                                <div class="mb-2">
                                    <label for="title"
                                        class="text-sm font-medium text-slate-600 dark:text-slate-400">Title</label>
                                    <input type="title" id="title"
                                        class="w-full px-3 py-2 mt-1 bg-transparent border rounded-md form-input border-slate-300/60 dark:border-slate-700 dark:text-slate-300 focus:outline-none focus:ring-0 placeholder:text-slate-400/70 placeholder:font-normal placeholder:text-sm hover:border-slate-400 focus:border-brand-500 dark:focus:border-brand-500 dark:hover:border-slate-700"
                                        placeholder="Title" required>
                                </div>
                                <div class="mb-2">
                                    <label for="category"
                                        class="text-sm font-medium text-slate-600 dark:text-slate-400">Category</label>
                                    <select id="category"
                                        class="w-full px-3 py-2 mt-1 bg-transparent border rounded-md border-slate-300/60 dark:border-slate-700 dark:text-slate-300 focus:outline-none focus:ring-0 placeholder:text-slate-400/70 placeholder:font-normal placeholder:text-sm hover:border-slate-400 focus:border-primary-500 dark:focus:border-primary-500 dark:hover:border-slate-700">
                                        <option class="dark:text-slate-700">All Category</option>
                                        <option class="dark:text-slate-700">Electronics</option>
                                        <option class="dark:text-slate-700">Furniture</option>
                                        <option class="dark:text-slate-700">Footwear</option>
                                        <option class="dark:text-slate-700">Clothes</option>
                                    </select>
                                </div>
                                <div class="mb-2">
                                    <label for="description"
                                        class="text-sm font-medium text-slate-600 dark:text-slate-400">Description</label>
                                    <textarea id="description" rows="3"
                                        class="w-full px-3 py-1 mt-1 bg-transparent border rounded-md form-input border-slate-300/60 dark:border-slate-700 dark:text-slate-300 focus:outline-none focus:ring-0 placeholder:text-slate-400/70 placeholder:font-normal placeholder:text-sm hover:border-slate-400 focus:border-primary-500 dark:focus:border-primary-500 dark:hover:border-slate-700"
                                        placeholder="Description ..."></textarea>
                                </div>
                                <div class="mb-2">
                                    <div class="grid grid-cols-2 gap-3">
                                        <div class="col-span-1">
                                            <label for="Product-date"
                                                class="text-sm font-medium text-slate-600 dark:text-slate-400">Product
                                                Date</label>
                                            <input type="text" id="Product-date"
                                                class="w-full px-3 py-2 mt-1 bg-transparent border rounded-md form-input border-slate-300/60 dark:border-slate-700 dark:text-slate-300 focus:outline-none focus:ring-0 placeholder:text-slate-400/70 placeholder:font-normal placeholder:text-sm hover:border-slate-400 focus:border-primary-500 dark:focus:border-primary-500 dark:hover:border-slate-700"
                                                name="foo">
                                        </div>
                                        <div class="col-span-1">
                                            <label for="price"
                                                class="text-sm font-medium text-slate-600 dark:text-slate-400">Price</label>
                                            <input type="title" id="price"
                                                class="w-full px-3 py-2 mt-1 bg-transparent border rounded-md form-input border-slate-300/60 dark:border-slate-700 dark:text-slate-300 focus:outline-none focus:ring-0 placeholder:text-slate-400/70 placeholder:font-normal placeholder:text-sm hover:border-slate-400 focus:border-brand-500 dark:focus:border-brand-500 dark:hover:border-slate-700"
                                                placeholder="Price" required>
                                        </div>
                                    </div>
                                </div>
                                <div class="mb-2">
                                    <label for="gender" class="text-sm font-medium text-slate-600 dark:text-slate-400">For
                                        this product</label>
                                    <select id="gender"
                                        class="w-full px-3 py-2 mt-1 bg-transparent border rounded-md border-slate-300/60 dark:border-slate-700 dark:text-slate-300 focus:outline-none focus:ring-0 placeholder:text-slate-400/70 placeholder:font-normal placeholder:text-sm hover:border-slate-400 focus:border-brand-500 dark:focus:border-brand-500 dark:hover:border-slate-700">
                                        <option class="dark:text-slate-700">-- Gender --</option>
                                        <option class="dark:text-slate-700">Male</option>
                                        <option class="dark:text-slate-700">Female</option>
                                        <option class="dark:text-slate-700">Children</option>
                                        <option class="dark:text-slate-700">Other</option>
                                    </select>
                                </div>
                                <div class="mb-2">
                                    <label for="sizing"
                                        class="text-sm font-medium text-slate-600 dark:text-slate-400">Size</label>
                                    <select id="sizing"
                                        class="w-full px-3 py-2 mt-1 bg-transparent border rounded-md form-input border-slate-300/60 dark:border-slate-700 dark:text-slate-300 focus:outline-none focus:ring-0 placeholder:text-slate-400/70 placeholder:font-normal placeholder:text-sm hover:border-slate-400 focus:border-brand-500 dark:focus:border-brand-500 dark:hover:border-slate-700">
                                        <option>Size</option>
                                        <option>SM</option>
                                        <option>MD</option>
                                        <option>LG</option>
                                        <option>XL</option>
                                        <option>XXL</option>
                                    </select>
                                </div>

                                <div class="">
                                    <button
                                        class="px-2 py-2 text-sm text-white border rounded lg:px-4 bg-brand hover:bg-brand-600 border-brand-500">Add
                                        Product</button>
                                    <button
                                        class="px-2 py-2 text-sm font-medium transition bg-transparent border rounded lg:px-4 text-brand hover:bg-brand-500 hover:text-white border-brand">Save
                                        Product</button>
                                </div>
                            </div>
                            <!--end card-body-->
                        </div>
                        <!--end card-->
                    </div>
                    <!--end col-->
                    <div class="col-span-12 sm:col-span-12 md:col-span-12 lg:col-span-3 xl:col-span-3">
                        <div class="relative w-full mb-4">
                            <div class="flex-auto p-0 md:p-4">
                                <div>
                                    <p class="text-base text-slate-700 dark:text-slate-400">Product Image</p>
                                    <img src="assets/images/products/pro-3.png" alt="" class="w-full h-auto">
                                </div>
                                <div class="mb-5">
                                    <p class="text-base text-slate-700 dark:text-slate-400">Product Title</p>
                                    <h4 class="text-xl font-semibold text-slate-700 dark:text-slate-300">Mannat HD, Smart
                                        LED Fire TV</h4>
                                </div>
                                <div class="mb-5">
                                    <p class="text-base text-slate-600 dark:text-slate-400">Description</p>
                                    <h4 class="text-base font-medium text-slate-900 dark:text-slate-300">It is a long
                                        established fact that a reader will be distracted by the readable content of a page
                                        when looking at its layout.</h4>
                                </div>
                                <div class="mb-5">
                                    <p class="text-base text-slate-600 dark:text-slate-400">Pro. Date</p>
                                    <h4 class="text-base font-semibold text-slate-900 dark:text-slate-300">02/05/2023</h4>
                                </div>
                                <div class="mb-5">
                                    <p class="text-base text-slate-600 dark:text-slate-400">For this product</p>
                                    <h4 class="text-base font-semibold text-slate-900 dark:text-slate-300">Other</h4>
                                </div>
                                <div class="mb-5">
                                    <p class="text-base text-slate-600 dark:text-slate-400">Size</p>
                                    <h4 class="text-base font-semibold text-slate-900 dark:text-slate-300">SM, MD, LG, XL
                                    </h4>
                                </div>
                            </div>
                            <!--end card-body-->
                        </div>
                        <!--end card-->
                    </div>
                    <!--end col-->
                </div>
                <!--end grid-->
                <!-- footer -->
                <div
                    class="absolute bottom-0 -left-4 -right-4 block print:hidden border-t p-4 h-[52px] dark:border-slate-700/40">
                    <div class="container">
                        <!-- Footer Start -->
                        <footer
                            class="font-medium text-center bg-transparent footer text-slate-600 dark:text-slate-400 md:text-left ">
                            &copy;
                            <script>
                                var year = new Date();
                                document.write(year.getFullYear());
                            </script>
                            Robotech
                            <span class="hidden float-right text-slate-600 dark:text-slate-400 md:inline-block">Crafted
                                with <i class="text-red-500 ti ti-heart"></i> by
                                Mannatthemes</span>
                        </footer>
                        <!-- end Footer -->
                    </div>
                </div>


            </div><!--end container-->
        </div><!--end page-wrapper-->
    </div>
@endsection

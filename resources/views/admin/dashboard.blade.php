@extends('layouts.admin-app')

@section('title', 'Admin Panel Dashboard')
@section('content')

    <div class="flex-1 p-5 ltr:flex rtl:flex-row-reverse">
        <div class="page-wrapper relative ltr:ml-auto rtl:mr-auto rtl:ml-0 w-[calc(100%-260px)] px-4 pt-[64px] duration-300">
            <div class="xl:w-full  min-h-[calc(100vh-138px)] relative pb-14">
                <div class="grid grid-cols-12 gap-4 sm:grid-cols-12 md:grid-cols-12 lg:grid-cols-12 xl:grid-cols-12">
                    <div class="col-span-12 sm:col-span-6 md:col-span-6 lg:col-span-3 xl:col-span-3">
                        <div
                            class="relative w-full mb-4 bg-white rounded-md shadow-sm dark:shadow-slate-700/10 dark:bg-gray-900">
                            <div class="flex-auto p-4">
                                <div class="flex justify-between xl:gap-x-2 items-cente">
                                    <div class="self-center">
                                        <p class="text-lg font-semibold text-gray-800 uppercase dark:text-slate-400">
                                            Total Products</p>
                                        <h3 class="my-4 font-semibold text-[30px] dark:text-slate-200">
                                            {{ count($products) }}</h3>
                                    </div>
                                    <div class="self-center">
                                        <i data-lucide="shopping-cart" class="w-16 h-16 stroke-primary-500/30"></i>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-span-12 sm:col-span-12 md:col-span-6 lg:col-span-3 xl:col-span-3">
                        <div
                            class="relative w-full mb-4 bg-white rounded-md shadow-sm dark:shadow-slate-700/10 dark:bg-gray-900">
                            <div class="flex-auto p-4">
                                <div class="flex justify-between xl:gap-x-2 items-cente">
                                    <div class="self-center">
                                        <p class="font-semibold text-gray-800 uppercase dark:text-slate-400">Customers</p>
                                        <h3 class="my-4 font-semibold text-[30px] dark:text-slate-200">
                                            {{ count($customers) }}</h3>
                                    </div>
                                    <div class="self-center">
                                        <i data-lucide="users" class="w-16 h-16 stroke-green/30"></i>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-span-12 sm:col-span-12 md:col-span-6 lg:col-span-3 xl:col-span-3">
                        <div
                            class="relative w-full mb-4 bg-white rounded-md shadow-sm dark:shadow-slate-700/10 dark:bg-gray-900">
                            <div class="flex-auto p-4">
                                <div class="flex justify-between xl:gap-x-2 items-cente">
                                    <div class="self-center">
                                        <p class="font-semibold text-gray-800 uppercase dark:text-slate-400">Categories</p>
                                        <h3 class="my-4 font-semibold text-[30px] dark:text-slate-200">
                                            {{ count($categories) }}</h3>
                                    </div>
                                    <div class="self-center">
                                        <i data-lucide="gem" class="w-16 h-16 stroke-yellow-500/30"></i>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-span-12 sm:col-span-12 md:col-span-6 lg:col-span-3 xl:col-span-3">
                        <div
                            class="bg-[#1b1b22] shadow-sm dark:shadow-slate-700/10 dark:bg-gray-900  rounded-md w-full relative mb-4">
                            <div class="flex-auto p-4">
                                <div class="flex justify-between xl:gap-x-2 items-cente">
                                    <div class="self-center">
                                        <p class="font-semibold text-gray-300 uppercase dark:text-slate-400">Revenue</p>
                                        <h3 class="my-4 font-semibold text-[30px] text-slate-200">KES {{ $revenue }}
                                        </h3>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="grid grid-cols-12 gap-4 sm:grid-cols-12 md:grid-cols-12 lg:grid-cols-12 xl:grid-cols-12">
                    <div class="col-span-12 sm:col-span-12 md:col-span-6 lg:col-span-4 xl:col-span-4">
                        <div class="relative w-full mb-4">
                            <div class="flex-auto p-4">
                                <div class="grid grid-cols-12 gap-4">
                                    <div class="col-span-12 sm:col-span-4">
                                        <img src="admin-assets/images/widgets/user.png" alt=""
                                            class="w-full h-auto">
                                    </div>
                                    <div class="self-center col-span-12 sm:col-span-8">
                                        <h4 class="self-center flex-1 mb-2 text-xl font-medium md:mb-0 dark:text-slate-400">
                                            A Guide to Analyze and Optimize Your Online Business</h4>
                                    </div>
                                </div>

                                <div class="my-3 border-b border-dashed border-slate-300 dark:border-slate-700/40">
                                </div>
                                <div class="grid grid-cols-12 gap-4 mb-8">
                                    <div class="col-span-12 sm:col-span-6">
                                        <div id="email_report" class="-mb-4 apex-charts"></div>
                                    </div><!--end col-->
                                    <div class="self-center col-span-12 sm:col-span-6">
                                        <ol class="mb-3 list-none list-inside">
                                            <li class="mb-1 text-sm text-slate-700 dark:text-slate-400"><i
                                                    class="icofont-ui-play me-2 text-brand-500"></i> Tablet</li>
                                            <li class="mb-1 text-sm text-slate-700 dark:text-slate-400"><i
                                                    class="text-yellow-400 icofont-ui-play me-2"></i> Desktop</li>
                                            <li class="mb-1 text-sm text-slate-700 dark:text-slate-400"><i
                                                    class="icofont-ui-play me-2 text-[#13939c]"></i> Moble</li>
                                        </ol>
                                        <button type="button"
                                            class="inline-block px-3 py-1 text-sm font-medium bg-transparent border rounded shadow-sm dark:shadow-slate-700/10 focus:outline-none text-slate-600 hover:bg-brand-500 hover:text-white border-slate-300 dark:bg-transparent dark:text-slate-400 dark:hover:text-white dark:border-gray-700 dark:hover:bg-brand-500">View
                                            Details <i class="mdi mdi-arrow-right"></i></button>
                                    </div><!--end col-->
                                </div><!--end grid-->
                                <h6
                                    class="px-2 py-3 mt-3 font-medium text-center border border-dashed rounded-md shadow-sm bg-brand-400/5 dark:shadow-slate-700/10 dark:text-brand-300 border-brand dark:bg-slate-700/40 text-brand-500">
                                    <i class="self-center mr-1 text-lg ti ti-calendar"></i>
                                    01 January 2023 to 31 December 2024
                                </h6>
                            </div><!--end card-body-->
                        </div><!--end card-->
                    </div><!--end col-->
                    <div class="col-span-12 sm:col-span-12 md:col-span-6 lg:col-span-8 xl:col-span-8">
                        <div class="relative w-full mb-4">
                            <div
                                class="px-4 py-3 border-b border-dashed border-slate-200 dark:border-slate-700 dark:text-slate-300/70">
                                <div class="flex-none md:flex">
                                    <h4 class="self-center flex-1 mb-2 font-medium md:mb-0 text-xxl">Sales Report</h4>
                                    <div class="inline-block dropdown">
                                        <button data-fc-autoclose="both" data-fc-type="dropdown"
                                            class="px-3 py-1 text-xs font-medium text-gray-500 bg-white border border-gray-200 rounded dropdown-toggle focus:outline-none hover:bg-gray-50 hover:text-slate-800 focus:z-10 dark:bg-gray-800 dark:text-gray-400 dark:border-gray-600 dark:hover:text-white dark:hover:bg-gray-700"
                                            type="button">
                                            This Month
                                            <i class="ml-2 text-xs fas fa-chevron-down"></i>
                                        </button>
                                        <!-- Dropdown menu -->
                                        <div
                                            class="right-auto z-10 hidden bg-white divide-y divide-gray-100 rounded shadow md:right-0 w-28 dark:bg-gray-700">
                                            <ul class="py-1 text-sm text-gray-700 dark:text-gray-200"
                                                aria-labelledby="dropdownDefault">
                                                <li>
                                                    <a href="#"
                                                        class="block px-4 py-2 hover:bg-gray-50 dark:hover:bg-gray-600 dark:hover:text-white">Today</a>
                                                </li>
                                                <li>
                                                    <a href="#"
                                                        class="block px-4 py-2 hover:bg-gray-50 dark:hover:bg-gray-600 dark:hover:text-white">Last
                                                        Week</a>
                                                </li>
                                                <li>
                                                    <a href="#"
                                                        class="block px-4 py-2 hover:bg-gray-50 dark:hover:bg-gray-600 dark:hover:text-white">Last
                                                        Month</a>
                                                </li>
                                                <li>
                                                    <a href="#"
                                                        class="block px-4 py-2 hover:bg-gray-50 dark:hover:bg-gray-600 dark:hover:text-white">This
                                                        Year</a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="flex-auto p-4">
                                <div id="crm-dash" class="mt-5 apex-charts"></div>
                            </div><!--end card-body-->
                        </div> <!--end inner-grid-->
                    </div><!--end col-->


                </div> <!--end grid-->
                <div class="grid grid-cols-12 gap-4 mb-4 sm:grid-cols-12 md:grid-cols-12 lg:grid-cols-12 xl:grid-cols-12">
                    <div class="col-span-12 sm:col-span-12 md:col-span-12 lg:col-span-6 xl:col-span-6 ">
                        <div
                            class="relative w-full bg-white rounded-md shadow-sm dark:shadow-slate-700/10 dark:bg-gray-900">
                            <div
                                class="px-4 py-4 border-b border-dashed border-slate-200 dark:border-slate-700 dark:text-slate-300/70">
                                <h4 class="self-center flex-1 mb-2 font-medium md:mb-0 text-xxl">Earnings Reports</h4>
                                <p class="text-sm text-slate-400">Earnings Reports Last Week <span
                                        class="focus:outline-none text-[11px] bg-brand-500/10 text-brand-500 dark:text-brand-300 rounded font-medium py-[2px] px-2">$18532</span>
                                </p>
                            </div><!--end header-title-->
                            <div class="grid grid-cols-1 p-4">
                                <div class="sm:-mx-6 lg:-mx-8">
                                    <div class="relative block w-full overflow-x-auto sm:px-6 lg:px-8">
                                        <table class="w-full">
                                            <thead class="bg-brand-400/10 dark:bg-slate-700/20">
                                                <tr>
                                                    <th scope="col"
                                                        class="p-3 text-base font-medium tracking-wider text-gray-700 uppercase text-start dark:text-gray-400">
                                                        Date
                                                    </th>
                                                    <th scope="col"
                                                        class="p-3 text-base font-medium tracking-wider text-gray-700 uppercase text-start dark:text-gray-400">
                                                        Item Count
                                                    </th>
                                                    <th scope="col"
                                                        class="p-3 text-base font-medium tracking-wider text-gray-700 uppercase text-start dark:text-gray-400">
                                                        Tex
                                                    </th>
                                                    <th scope="col"
                                                        class="p-3 text-base font-medium tracking-wider text-gray-700 uppercase text-start dark:text-gray-400">
                                                        Earnings
                                                    </th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <!-- 1 -->
                                                <tr
                                                    class="bg-white border-b border-dashed dark:bg-gray-900 dark:border-gray-700/40">
                                                    <td
                                                        class="p-3 text-base text-gray-600 whitespace-nowrap dark:text-gray-400">
                                                        01 January
                                                    </td>
                                                    <td
                                                        class="p-3 text-base text-gray-500 whitespace-nowrap dark:text-gray-400">
                                                        50
                                                    </td>
                                                    <td
                                                        class="p-3 text-base text-gray-500 whitespace-nowrap dark:text-gray-400">
                                                        <span class="text-red-500">$70</span>
                                                    </td>
                                                    <td
                                                        class="p-3 text-base text-gray-700 whitespace-nowrap dark:text-gray-400">
                                                        <span class="font-semibold">$15,000</span>
                                                    </td>
                                                </tr>
                                                <!-- 2 -->
                                                <tr
                                                    class="bg-white border-b border-dashed dark:bg-gray-900 dark:border-gray-700/40">
                                                    <td
                                                        class="p-3 text-base text-gray-600 whitespace-nowrap dark:text-gray-400">
                                                        02 January
                                                    </td>
                                                    <td
                                                        class="p-3 text-base text-gray-500 whitespace-nowrap dark:text-gray-400">
                                                        25
                                                    </td>
                                                    <td
                                                        class="p-3 text-base text-gray-500 whitespace-nowrap dark:text-gray-400">
                                                        <span class="text-slate-100">-</span>
                                                    </td>
                                                    <td
                                                        class="p-3 text-base text-gray-700 whitespace-nowrap dark:text-gray-400">
                                                        <span class="font-semibold">$15,000</span>
                                                    </td>
                                                </tr>
                                                <!-- 3 -->
                                                <tr
                                                    class="bg-white border-b border-dashed dark:bg-gray-900 dark:border-gray-700/40">
                                                    <td
                                                        class="p-3 text-base text-gray-600 whitespace-nowrap dark:text-gray-400">
                                                        03 January
                                                    </td>
                                                    <td
                                                        class="p-3 text-base text-gray-500 whitespace-nowrap dark:text-gray-400">
                                                        65
                                                    </td>
                                                    <td
                                                        class="p-3 text-base text-gray-500 whitespace-nowrap dark:text-gray-400">
                                                        <span class="text-red-500">$115</span>
                                                    </td>
                                                    <td
                                                        class="p-3 text-base text-gray-700 whitespace-nowrap dark:text-gray-400">
                                                        <span class="font-semibold">$35,000</span>
                                                    </td>
                                                </tr>
                                                <!-- 4 -->
                                                <tr
                                                    class="bg-white border-b border-dashed dark:bg-gray-900 dark:border-gray-700/40">
                                                    <td
                                                        class="p-3 text-base text-gray-600 whitespace-nowrap dark:text-gray-400">
                                                        04 January
                                                    </td>
                                                    <td
                                                        class="p-3 text-base text-gray-500 whitespace-nowrap dark:text-gray-400">
                                                        20
                                                    </td>
                                                    <td
                                                        class="p-3 text-base text-gray-500 whitespace-nowrap dark:text-gray-400">
                                                        <span class="text-slate-500">-</span>
                                                    </td>
                                                    <td
                                                        class="p-3 text-base text-gray-700 whitespace-nowrap dark:text-gray-400">
                                                        <span class="font-semibold">$8,500</span>
                                                    </td>
                                                </tr>
                                                <!-- 5 -->
                                                <tr
                                                    class="bg-white border-b border-dashed dark:bg-gray-900 dark:border-gray-700/40">
                                                    <td
                                                        class="p-3 text-base text-gray-600 whitespace-nowrap dark:text-gray-400">
                                                        05 January
                                                    </td>
                                                    <td
                                                        class="p-3 text-base text-gray-500 whitespace-nowrap dark:text-gray-400">
                                                        20
                                                    </td>
                                                    <td
                                                        class="p-3 text-base text-gray-500 whitespace-nowrap dark:text-gray-400">
                                                        <span class="text-slate-500">-</span>
                                                    </td>
                                                    <td
                                                        class="p-3 text-base text-gray-700 whitespace-nowrap dark:text-gray-400">
                                                        <span class="font-semibold">$8,500</span>
                                                    </td>
                                                </tr>
                                                <!-- 6 -->
                                                <tr class="bg-white dark:bg-gray-900">
                                                    <td
                                                        class="p-3 text-base text-gray-600 whitespace-nowrap dark:text-gray-400">
                                                        06 January
                                                    </td>
                                                    <td
                                                        class="p-3 text-base text-gray-500 whitespace-nowrap dark:text-gray-400">
                                                        40
                                                    </td>
                                                    <td
                                                        class="p-3 text-base text-gray-500 whitespace-nowrap dark:text-gray-400">
                                                        <span class="text-red-500">$60</span>
                                                    </td>
                                                    <td
                                                        class="p-3 text-base text-gray-700 whitespace-nowrap dark:text-gray-400">
                                                        <span class="font-semibold">$12,000</span>
                                                    </td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div><!--end card-body-->
                        </div> <!--end card-->
                    </div><!--end col-->
                    <div class="col-span-12 sm:col-span-12 md:col-span-12 lg:col-span-6 xl:col-span-6 ">
                        <div
                            class="relative w-full bg-white rounded-md shadow-sm dark:shadow-slate-700/10 dark:bg-gray-900">
                            <div
                                class="px-4 py-4 border-b border-dashed border-slate-200 dark:border-slate-700 dark:text-slate-300/70">
                                <h4 class="self-center flex-1 mb-2 font-medium md:mb-0 text-xxl">Most Populer Products
                                </h4>
                                <p class="text-sm text-slate-400">New Products Last Week <span
                                        class="focus:outline-none text-[11px] bg-brand-500/10 text-brand-500 dark:text-brand-300 rounded font-medium py-[2px] px-2">5</span>
                                </p>
                            </div><!--end header-title-->
                            <div class="grid grid-cols-1 p-4">
                                <div class="sm:-mx-6 lg:-mx-8">
                                    <div class="relative block w-full overflow-x-auto sm:px-6 lg:px-8">
                                        <table class="w-full">
                                            <thead class="bg-brand-400/10 dark:bg-slate-700/20">
                                                <tr>
                                                    <th scope="col"
                                                        class="p-3 text-base font-medium tracking-wider text-gray-700 uppercase text-start dark:text-gray-400">
                                                        Product
                                                    </th>
                                                    <th scope="col"
                                                        class="p-3 text-base font-medium tracking-wider text-gray-700 uppercase text-start dark:text-gray-400">
                                                        Price
                                                    </th>
                                                    <th scope="col"
                                                        class="p-3 text-base font-medium tracking-wider text-gray-700 uppercase text-start dark:text-gray-400">
                                                        Sell
                                                    </th>
                                                    <th scope="col"
                                                        class="p-3 text-base font-medium tracking-wider text-gray-700 uppercase text-start dark:text-gray-400">
                                                        Status
                                                    </th>
                                                    <th scope="col"
                                                        class="p-3 text-base font-medium tracking-wider text-gray-700 uppercase text-start dark:text-gray-400">
                                                        Action
                                                    </th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <!-- 1 -->
                                                <tr
                                                    class="bg-white border-b border-dashed dark:bg-gray-900 dark:border-gray-700/40">
                                                    <td
                                                        class="p-3 text-base font-medium whitespace-nowrap dark:text-white">
                                                        <img src="admin-assets/images/products/01.png" alt=""
                                                            class="inline-block h-10 me-2">Robotech Camera EDM 5D(White)
                                                    </td>
                                                    <td
                                                        class="p-3 text-base text-gray-500 whitespace-nowrap dark:text-gray-400">
                                                        $50 <del class="text-gray-400">$90</del>
                                                    </td>
                                                    <td
                                                        class="p-3 text-base text-gray-500 whitespace-nowrap dark:text-gray-400">
                                                        450<small class="text-gray-400">(500)</small>
                                                    </td>
                                                    <td
                                                        class="p-3 text-base text-gray-500 whitespace-nowrap dark:text-gray-400">
                                                        <span
                                                            class="focus:outline-none text-[12px] bg-green-600/10 text-green-700 dark:text-green-600 rounded font-medium py-1 px-2">Stock</span>
                                                    </td>
                                                    <td
                                                        class="p-3 text-base text-gray-500 whitespace-nowrap dark:text-gray-400">
                                                        <a href="#"><i
                                                                class="text-lg text-gray-500 icofont-ui-edit dark:text-gray-400"></i></a>
                                                        <a href="#"><i
                                                                class="text-lg text-red-500 icofont-ui-delete dark:text-red-400"></i></a>
                                                    </td>
                                                </tr>
                                                <!-- 2 -->
                                                <tr
                                                    class="bg-white border-b border-dashed dark:bg-gray-900 dark:border-gray-700/40">
                                                    <td
                                                        class="p-3 text-base font-medium whitespace-nowrap dark:text-white">
                                                        <img src="admin-assets/images/products/03.png" alt=""
                                                            class="inline-block h-10 me-2">Robotech VR 5D (Black)
                                                    </td>
                                                    <td
                                                        class="p-3 text-base text-gray-500 whitespace-nowrap dark:text-gray-400">
                                                        $39 <del class="text-gray-400">$99</del>
                                                    </td>
                                                    <td
                                                        class="p-3 text-base text-gray-500 whitespace-nowrap dark:text-gray-400">
                                                        700<small class="text-gray-400">(700)</small>
                                                    </td>
                                                    <td
                                                        class="p-3 text-base text-gray-500 whitespace-nowrap dark:text-gray-400">
                                                        <span
                                                            class="focus:outline-none text-[12px] bg-red-500/10 text-red-700 dark:text-red-400 rounded font-medium py-1 px-2">Sold</span>
                                                    </td>
                                                    <td
                                                        class="p-3 text-base text-gray-500 whitespace-nowrap dark:text-gray-400">
                                                        <a href="#"><i
                                                                class="text-lg text-gray-500 icofont-ui-edit dark:text-gray-400"></i></a>
                                                        <a href="#"><i
                                                                class="text-lg text-red-500 icofont-ui-delete dark:text-red-400"></i></a>
                                                    </td>
                                                </tr>
                                                <!-- 3 -->
                                                <tr
                                                    class="bg-white border-b border-dashed dark:bg-gray-900 dark:border-gray-700/40">
                                                    <td
                                                        class="p-3 text-base font-medium whitespace-nowrap dark:text-white">
                                                        <img src="admin-assets/images/products/02.png" alt=""
                                                            class="inline-block h-10 me-2">Robotech Shoes Max-Zon
                                                    </td>
                                                    <td
                                                        class="p-3 text-base text-gray-500 whitespace-nowrap dark:text-gray-400">
                                                        $49 <del class="text-gray-400">$88</del>
                                                    </td>
                                                    <td
                                                        class="p-3 text-base text-gray-500 whitespace-nowrap dark:text-gray-400">
                                                        850<small class="text-gray-400">(900)</small>
                                                    </td>
                                                    <td
                                                        class="p-3 text-base text-gray-500 whitespace-nowrap dark:text-gray-400">
                                                        <span
                                                            class="focus:outline-none text-[12px] bg-green-600/10 text-green-700 dark:text-green-600 rounded font-medium py-1 px-2">Stock</span>
                                                    </td>
                                                    <td
                                                        class="p-3 text-base text-gray-500 whitespace-nowrap dark:text-gray-400">
                                                        <a href="#"><i
                                                                class="text-lg text-gray-500 icofont-ui-edit dark:text-gray-400"></i></a>
                                                        <a href="#"><i
                                                                class="text-lg text-red-500 icofont-ui-delete dark:text-red-400"></i></a>
                                                    </td>
                                                </tr>
                                                <!-- 4 -->
                                                <tr
                                                    class="bg-white border-b border-dashed dark:bg-gray-900 dark:border-gray-700/40">
                                                    <td
                                                        class="p-3 text-base font-medium whitespace-nowrap dark:text-white">
                                                        <img src="admin-assets/images/products/04.png" alt=""
                                                            class="inline-block h-10 me-2">Robotech Mask N99 [ISI]
                                                    </td>
                                                    <td
                                                        class="p-3 text-base text-gray-500 whitespace-nowrap dark:text-gray-400">
                                                        $5 <del class="text-gray-400">$9</del>
                                                    </td>
                                                    <td
                                                        class="p-3 text-base text-gray-500 whitespace-nowrap dark:text-gray-400">
                                                        1850<small class="text-gray-400">(2000)</small>
                                                    </td>
                                                    <td
                                                        class="p-3 text-base text-gray-500 whitespace-nowrap dark:text-gray-400">
                                                        <span
                                                            class="focus:outline-none text-[12px] bg-green-600/10 text-green-700 dark:text-green-600 rounded font-medium py-1 px-2">Stock</span>
                                                    </td>
                                                    <td
                                                        class="p-3 text-base text-gray-500 whitespace-nowrap dark:text-gray-400">
                                                        <a href="#"><i
                                                                class="text-lg text-gray-500 icofont-ui-edit dark:text-gray-400"></i></a>
                                                        <a href="#"><i
                                                                class="text-lg text-red-500 icofont-ui-delete dark:text-red-400"></i></a>
                                                    </td>
                                                </tr>
                                                <!-- 5 -->
                                                <tr class="bg-white dark:bg-gray-900">
                                                    <td
                                                        class="p-3 text-base font-medium whitespace-nowrap dark:text-white">
                                                        <img src="admin-assets/images/products/01.png" alt=""
                                                            class="inline-block h-10 me-2">Robotech Camera EDM 5D(White)
                                                    </td>
                                                    <td
                                                        class="p-3 text-base text-gray-500 whitespace-nowrap dark:text-gray-400">
                                                        $50 <del class="text-gray-400">$90</del>
                                                    </td>
                                                    <td
                                                        class="p-3 text-base text-gray-500 whitespace-nowrap dark:text-gray-400">
                                                        450<small class="text-gray-400">(500)</small>
                                                    </td>
                                                    <td
                                                        class="p-3 text-base text-gray-500 whitespace-nowrap dark:text-gray-400">
                                                        <span
                                                            class="focus:outline-none text-[12px] bg-red-500/10 text-red-700 dark:text-red-400 rounded font-medium py-1 px-2">Sold</span>
                                                    </td>
                                                    <td
                                                        class="p-3 text-base text-gray-500 whitespace-nowrap dark:text-gray-400">
                                                        <a href="#"><i
                                                                class="text-lg text-gray-500 icofont-ui-edit dark:text-gray-400"></i></a>
                                                        <a href="#"><i
                                                                class="text-lg text-red-500 icofont-ui-delete dark:text-red-400"></i></a>
                                                    </td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div><!--end card-body-->
                        </div> <!--end card-->
                    </div><!--end col-->
                </div><!--end inner-grid-->
            @endsection

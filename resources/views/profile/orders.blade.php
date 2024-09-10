@extends('layouts.account')

@section('title', 'Orders')

@section('content')
    <main class="content-wrapper">
        <div class="container py-5 mt-n2 mt-sm-0">
            <div class="row pt-md-2 pt-lg-3 pb-sm-2 pb-md-3 pb-lg-4 pb-xl-5">
                @include('components.account.sidebar')
                <div class="col-lg-9">
                    <div class="ps-lg-3 ps-xl-0">
                        <div class="pb-3 row align-items-center pb-md-4 mb-md-1 mb-lg-2">
                            <div class="mb-3 col-md-4 col-xl-6 mb-md-0">
                                <h1 class="mb-0 h2 me-3">Orders</h1>
                            </div>
                            <div class="col-md-8 col-xl-6">
                                <div class="row row-cols-1 row-cols-sm-2 g-3 g-xxl-4">
                                    <div class="col">
                                        <select class="form-select"
                                            data-select="{
                      &quot;placeholderValue&quot;: &quot;Select status&quot;,
                      &quot;choices&quot;: [
                        {
                          &quot;value&quot;: &quot;&quot;,
                          &quot;label&quot;: &quot;Select status&quot;,
                          &quot;placeholder&quot;: true
                        },
                        {
                          &quot;value&quot;: &quot;inprogress&quot;,
                          &quot;label&quot;: &quot;<div class=\&quot;d-flex align-items-center\&quot;><span class=\&quot;bg-info rounded-circle p-1 me-2\&quot;></span>In progress</div>&quot;
                        },
                        {
                          &quot;value&quot;: &quot;delivered&quot;,
                          &quot;label&quot;: &quot;<div class=\&quot;d-flex align-items-center\&quot;><span class=\&quot;bg-success rounded-circle p-1 me-2\&quot;></span>Delivered</div>&quot;
                        },
                        {
                          &quot;value&quot;: &quot;canceled&quot;,
                          &quot;label&quot;: &quot;<div class=\&quot;d-flex align-items-center\&quot;><span class=\&quot;bg-danger rounded-circle p-1 me-2\&quot;></span>Canceled</div>&quot;
                        },
                        {
                          &quot;value&quot;: &quot;delayed&quot;,
                          &quot;label&quot;: &quot;<div class=\&quot;d-flex align-items-center\&quot;><span class=\&quot;bg-warning rounded-circle p-1 me-2\&quot;></span>Delayed</div>&quot;
                        }
                      ]
                    }"
                                            data-select-template="true" aria-label="Status sorting"></select>
                                    </div>
                                    <div class="col">
                                        <select class="form-select" data-select="{&quot;removeItemButton&quot;: false}"
                                            aria-label="Timeframe sorting">
                                            <option value="all-time">For all time</option>
                                            <option value="last-year">For last year</option>
                                            <option value="last-3-months">For last 3 months</option>
                                            <option value="last-30-days">For last 30 days</option>
                                            <option value="last-week">For last week</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                        </div>


                        <!-- Sortable orders table -->
                        <div
                            data-filter-list="{&quot;listClass&quot;: &quot;orders-list&quot;, &quot;sortClass&quot;: &quot;orders-sort&quot;, &quot;valueNames&quot;: [&quot;date&quot;, &quot;total&quot;]}">
                            <table class="table align-middle fs-sm text-nowrap">
                                <thead>
                                    <tr>
                                        <th scope="col" class="py-3 ps-0">
                                            <span class="text-body fw-normal">Order <span
                                                    class="d-none d-md-inline">#</span></span>
                                        </th>
                                        <th scope="col" class="py-3 d-none d-md-table-cell">
                                            <button type="button" class="p-0 btn orders-sort fw-normal text-body"
                                                data-sort="date">Order date</button>
                                        </th>
                                        <th scope="col" class="py-3 d-none d-md-table-cell">
                                            <span class="text-body fw-normal">Status</span>
                                        </th>
                                        <th scope="col" class="py-3 d-none d-md-table-cell">
                                            <button type="button" class="p-0 btn orders-sort fw-normal text-body"
                                                data-sort="total">Total</button>
                                        </th>
                                        <th scope="col" class="py-3">&nbsp;</th>
                                    </tr>
                                </thead>
                                <tbody class="text-body-emphasis orders-list">

                                    <!-- Item -->
                                    <tr>
                                        <td class="pt-2 pb-3 fw-medium py-md-2 ps-0">
                                            <a class="py-2 d-inline-block animate-underline text-body-emphasis text-decoration-none"
                                                href="#orderDetails" data-bs-toggle="offcanvas" aria-controls="orderDetails"
                                                aria-label="Show order details">
                                                <span class="animate-target">78A6431D409</span>
                                            </a>
                                            <ul class="m-0 list-unstyled fw-normal text-body d-md-none">
                                                <li>Feb 6, 2025</li>
                                                <li class="d-flex align-items-center">
                                                    <span class="p-1 bg-info rounded-circle me-2"></span>
                                                    In progress
                                                </li>
                                                <li class="fw-medium text-body-emphasis">$2,105.90</li>
                                            </ul>
                                        </td>
                                        <td class="py-3 fw-medium d-none d-md-table-cell">
                                            Feb 6, 2025
                                            <span class="date d-none">25-02-06</span>
                                        </td>
                                        <td class="py-3 fw-medium d-none d-md-table-cell">
                                            <span class="d-flex align-items-center">
                                                <span class="p-1 bg-info rounded-circle me-2"></span>
                                                In progress
                                            </span>
                                        </td>
                                        <td class="py-3 fw-medium d-none d-md-table-cell">
                                            $2,105.90
                                            <span class="total d-none">210590</span>
                                        </td>
                                        <td class="py-3 pe-0">
                                            <span
                                                class="gap-1 d-flex align-items-center justify-content-end position-relative gap-sm-2 ms-n2 ms-sm-0">
                                                <span><img src="assets/img/shop/electronics/thumbs/20.png" width="64"
                                                        alt="Thumbnail"></span>
                                                <span><img src="assets/img/shop/electronics/thumbs/16.png" width="64"
                                                        alt="Thumbnail"></span>
                                                <span><img src="assets/img/shop/electronics/thumbs/15.png" width="64"
                                                        alt="Thumbnail"></span>
                                                <a class="border-0 btn btn-icon btn-ghost btn-secondary stretched-link"
                                                    href="#orderDetails" data-bs-toggle="offcanvas"
                                                    aria-controls="orderDetails" aria-label="Show order details">
                                                    <i class="ci-chevron-right fs-lg"></i>
                                                </a>
                                            </span>
                                        </td>
                                    </tr>

                                    <!-- Item -->
                                    <tr>
                                        <td class="pt-2 pb-3 fw-medium py-md-2 ps-0">
                                            <a class="py-2 d-inline-block animate-underline text-body-emphasis text-decoration-none"
                                                href="#orderDetails" data-bs-toggle="offcanvas" aria-controls="orderDetails"
                                                aria-label="Show order details">
                                                <span class="animate-target">47H76G09F33</span>
                                            </a>
                                            <ul class="m-0 list-unstyled fw-normal text-body d-md-none">
                                                <li>Dec 12, 2024</li>
                                                <li class="d-flex align-items-center">
                                                    <span class="p-1 bg-success rounded-circle me-2"></span>
                                                    Delivered
                                                </li>
                                                <li class="fw-medium text-body-emphasis">$360.75</li>
                                            </ul>
                                        </td>
                                        <td class="py-3 fw-medium d-none d-md-table-cell">
                                            Dec 12, 2024
                                            <span class="date d-none">24-12-12</span>
                                        </td>
                                        <td class="py-3 fw-medium d-none d-md-table-cell">
                                            <span class="d-flex align-items-center">
                                                <span class="p-1 bg-success rounded-circle me-2"></span>
                                                Delivered
                                            </span>
                                        </td>
                                        <td class="py-3 fw-medium d-none d-md-table-cell">
                                            $360.75
                                            <span class="total d-none">36075</span>
                                        </td>
                                        <td class="py-3 pe-0">
                                            <span
                                                class="gap-1 d-flex align-items-center justify-content-end position-relative gap-sm-2 ms-n2 ms-sm-0">
                                                <span><img src="assets/img/shop/electronics/thumbs/14.png" width="64"
                                                        alt="Thumbnail"></span>
                                                <a class="border-0 btn btn-icon btn-ghost btn-secondary stretched-link"
                                                    href="#orderDetails" data-bs-toggle="offcanvas"
                                                    aria-controls="orderDetails" aria-label="Show order details">
                                                    <i class="ci-chevron-right fs-lg"></i>
                                                </a>
                                            </span>
                                        </td>
                                    </tr>

                                    <!-- Item -->
                                    <tr>
                                        <td class="pt-2 pb-3 fw-medium py-md-2 ps-0">
                                            <a class="py-2 d-inline-block animate-underline text-body-emphasis text-decoration-none"
                                                href="#orderDetails" data-bs-toggle="offcanvas"
                                                aria-controls="orderDetails" aria-label="Show order details">
                                                <span class="animate-target">502TR872W2</span>
                                            </a>
                                            <ul class="m-0 list-unstyled fw-normal text-body d-md-none">
                                                <li>Nov 7, 2024</li>
                                                <li class="d-flex align-items-center">
                                                    <span class="p-1 bg-success rounded-circle me-2"></span>
                                                    Delivered
                                                </li>
                                                <li class="fw-medium text-body-emphasis">$4,268.00</li>
                                            </ul>
                                        </td>
                                        <td class="py-3 fw-medium d-none d-md-table-cell">
                                            Nov 7, 2024
                                            <span class="date d-none">24-11-07</span>
                                        </td>
                                        <td class="py-3 fw-medium d-none d-md-table-cell">
                                            <span class="d-flex align-items-center">
                                                <span class="p-1 bg-success rounded-circle me-2"></span>
                                                Delivered
                                            </span>
                                        </td>
                                        <td class="py-3 fw-medium d-none d-md-table-cell">
                                            $4,268.00
                                            <span class="total d-none">426800</span>
                                        </td>
                                        <td class="py-3 pe-0">
                                            <span
                                                class="gap-1 d-flex align-items-center justify-content-end position-relative gap-sm-2 ms-n2 ms-sm-0">
                                                <span><img src="assets/img/shop/electronics/thumbs/12.png" width="64"
                                                        alt="Thumbnail"></span>
                                                <span><img src="assets/img/shop/electronics/thumbs/13.png" width="64"
                                                        alt="Thumbnail"></span>
                                                <span><img src="assets/img/shop/electronics/thumbs/18.png" width="64"
                                                        alt="Thumbnail"></span>
                                                <span class="fw-medium me-1">+3</span>
                                                <a class="border-0 btn btn-icon btn-ghost btn-secondary stretched-link"
                                                    href="#orderDetails" data-bs-toggle="offcanvas"
                                                    aria-controls="orderDetails" aria-label="Show order details">
                                                    <i class="ci-chevron-right fs-lg"></i>
                                                </a>
                                            </span>
                                        </td>
                                    </tr>

                                    <!-- Item -->
                                    <tr>
                                        <td class="pt-2 pb-3 fw-medium py-md-2 ps-0">
                                            <a class="py-2 d-inline-block animate-underline text-body-emphasis text-decoration-none"
                                                href="#orderDetails" data-bs-toggle="offcanvas"
                                                aria-controls="orderDetails" aria-label="Show order details">
                                                <span class="animate-target">34VB5540K83</span>
                                            </a>
                                            <ul class="m-0 list-unstyled fw-normal text-body d-md-none">
                                                <li>Sep 15, 2024</li>
                                                <li class="d-flex align-items-center">
                                                    <span class="p-1 bg-danger rounded-circle me-2"></span>
                                                    Canceled
                                                </li>
                                                <li class="fw-medium text-body-emphasis">$987.50</li>
                                            </ul>
                                        </td>
                                        <td class="py-3 fw-medium d-none d-md-table-cell">
                                            Sep 15, 2024
                                            <span class="date d-none">24-09-15</span>
                                        </td>
                                        <td class="py-3 fw-medium d-none d-md-table-cell">
                                            <span class="d-flex align-items-center">
                                                <span class="p-1 bg-danger rounded-circle me-2"></span>
                                                Canceled
                                            </span>
                                        </td>
                                        <td class="py-3 fw-medium d-none d-md-table-cell">
                                            $987.50
                                            <span class="total d-none">98750</span>
                                        </td>
                                        <td class="py-3 pe-0">
                                            <span
                                                class="gap-1 d-flex align-items-center justify-content-end position-relative gap-sm-2 ms-n2 ms-sm-0">
                                                <span><img src="assets/img/shop/electronics/thumbs/21.png" width="64"
                                                        alt="Thumbnail"></span>
                                                <span><img src="assets/img/shop/electronics/thumbs/11.png" width="64"
                                                        alt="Thumbnail"></span>
                                                <a class="border-0 btn btn-icon btn-ghost btn-secondary stretched-link"
                                                    href="#orderDetails" data-bs-toggle="offcanvas"
                                                    aria-controls="orderDetails" aria-label="Show order details">
                                                    <i class="ci-chevron-right fs-lg"></i>
                                                </a>
                                            </span>
                                        </td>
                                    </tr>

                                    <!-- Item -->
                                    <tr>
                                        <td class="pt-2 pb-3 fw-medium py-md-2 ps-0">
                                            <a class="py-2 d-inline-block animate-underline text-body-emphasis text-decoration-none"
                                                href="#orderDetails" data-bs-toggle="offcanvas"
                                                aria-controls="orderDetails" aria-label="Show order details">
                                                <span class="animate-target">112P45A90V2</span>
                                            </a>
                                            <ul class="m-0 list-unstyled fw-normal text-body d-md-none">
                                                <li>May 12, 2024</li>
                                                <li class="d-flex align-items-center">
                                                    <span class="p-1 bg-success rounded-circle me-2"></span>
                                                    Delivered
                                                </li>
                                                <li class="fw-medium text-body-emphasis">$53.00</li>
                                            </ul>
                                        </td>
                                        <td class="py-3 fw-medium d-none d-md-table-cell">
                                            May 12, 2024
                                            <span class="date d-none">24-05-12</span>
                                        </td>
                                        <td class="py-3 fw-medium d-none d-md-table-cell">
                                            <span class="d-flex align-items-center">
                                                <span class="p-1 bg-success rounded-circle me-2"></span>
                                                Delivered
                                            </span>
                                        </td>
                                        <td class="py-3 fw-medium d-none d-md-table-cell">
                                            $53.00
                                            <span class="total d-none">5300</span>
                                        </td>
                                        <td class="py-3 pe-0">
                                            <span
                                                class="gap-1 d-flex align-items-center justify-content-end position-relative gap-sm-2 ms-n2 ms-sm-0">
                                                <span><img src="assets/img/shop/electronics/thumbs/17.png" width="64"
                                                        alt="Thumbnail"></span>
                                                <a class="border-0 btn btn-icon btn-ghost btn-secondary stretched-link"
                                                    href="#orderDetails" data-bs-toggle="offcanvas"
                                                    aria-controls="orderDetails" aria-label="Show order details">
                                                    <i class="ci-chevron-right fs-lg"></i>
                                                </a>
                                            </span>
                                        </td>
                                    </tr>

                                    <!-- Item -->
                                    <tr>
                                        <td class="pt-2 pb-3 fw-medium py-md-2 ps-0">
                                            <a class="py-2 d-inline-block animate-underline text-body-emphasis text-decoration-none"
                                                href="#orderDetails" data-bs-toggle="offcanvas"
                                                aria-controls="orderDetails" aria-label="Show order details">
                                                <span class="animate-target">28BA67U0981</span>
                                            </a>
                                            <ul class="m-0 list-unstyled fw-normal text-body d-md-none">
                                                <li>Apr 20, 2024</li>
                                                <li class="d-flex align-items-center">
                                                    <span class="p-1 bg-danger rounded-circle me-2"></span>
                                                    Canceled
                                                </li>
                                                <li class="fw-medium text-body-emphasis">$1,029.50</li>
                                            </ul>
                                        </td>
                                        <td class="py-3 fw-medium d-none d-md-table-cell">
                                            Apr 20, 2024
                                            <span class="date d-none">24-04-20</span>
                                        </td>
                                        <td class="py-3 fw-medium d-none d-md-table-cell">
                                            <span class="d-flex align-items-center">
                                                <span class="p-1 bg-danger rounded-circle me-2"></span>
                                                Canceled
                                            </span>
                                        </td>
                                        <td class="py-3 fw-medium d-none d-md-table-cell">
                                            $1,029.50
                                            <span class="total d-none">102950</span>
                                        </td>
                                        <td class="py-3 pe-0">
                                            <span
                                                class="gap-1 d-flex align-items-center justify-content-end position-relative gap-sm-2 ms-n2 ms-sm-0">
                                                <span><img src="assets/img/shop/electronics/thumbs/19.png" width="64"
                                                        alt="Thumbnail"></span>
                                                <span><img src="assets/img/shop/electronics/thumbs/22.png" width="64"
                                                        alt="Thumbnail"></span>
                                                <a class="border-0 btn btn-icon btn-ghost btn-secondary stretched-link"
                                                    href="#orderDetails" data-bs-toggle="offcanvas"
                                                    aria-controls="orderDetails" aria-label="Show order details">
                                                    <i class="ci-chevron-right fs-lg"></i>
                                                </a>
                                            </span>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>


                        <!-- Pagination -->
                        <nav class="pt-3 pb-2 mt-2 pb-sm-0 mt-md-3" aria-label="Page navigation example">
                            <ul class="pagination">
                                <li class="page-item active" aria-current="page">
                                    <span class="page-link">
                                        1
                                        <span class="visually-hidden">(current)</span>
                                    </span>
                                </li>
                                <li class="page-item">
                                    <a class="page-link" href="#">2</a>
                                </li>
                                <li class="page-item">
                                    <a class="page-link" href="#">3</a>
                                </li>
                                <li class="page-item">
                                    <a class="page-link" href="#">4</a>
                                </li>
                            </ul>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
    </main>

    @include('components.account.footer')

@endsection

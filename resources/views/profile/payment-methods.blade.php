@extends('layouts.account')

@section('title', 'Payment methods')

@section('content')
    <main class="content-wrapper">
        <div class="container py-5 mt-n2 mt-sm-0">
            <div class="row pt-md-2 pt-lg-3 pb-sm-2 pb-md-3 pb-lg-4 pb-xl-5">
                @include('components.account.sidebar')
                <div class="col-lg-9">
                    <div class="ps-lg-3 ps-xl-0">

                        <!-- Page title -->
                        <h1 class="pb-2 h2 pb-md-3">Payment methods</h1>

                        <!-- Payment methods (Grid) -->
                        <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 g-3 g-md-4 g-lg-3 g-xl-4">
                            <div class="col">
                                <div class="card h-100">
                                    <div class="pb-3 card-body">
                                        <div class="mb-4 d-flex align-items-start justify-content-between">
                                            <img src="assets/img/payment-methods/mastercard.svg" class="m-n3"
                                                width="100" alt="Mastercard">
                                            <span class="badge text-bg-info rounded-pill">Primary</span>
                                        </div>
                                        <div class="mb-1 h6">**** **** **** 8341</div>
                                        <div class="text-danger fs-xs">Expired 05/24</div>
                                    </div>
                                    <div class="gap-3 pt-0 pb-4 bg-transparent border-0 card-footer d-flex">
                                        <button type="button" class="btn btn-sm btn-outline-secondary">Edit</button>
                                        <button type="button" class="btn btn-sm btn-outline-secondary">Remove</button>
                                    </div>
                                </div>
                            </div>
                            <div class="col">
                                <div class="card h-100">
                                    <div class="pb-3 card-body">
                                        <div class="mb-4 d-flex align-items-start justify-content-between">
                                            <img src="assets/img/payment-methods/visa-light-mode.svg"
                                                class="d-none-dark m-n3" width="100" alt="Visa">
                                            <img src="assets/img/payment-methods/visa-dark-mode.svg"
                                                class="d-none d-block-dark m-n3" width="100" alt="Visa">
                                            <div class="nav animate-underline">
                                                <a class="p-0 nav-link animate-target fs-xs" href="#!">Set as
                                                    primary</a>
                                            </div>
                                        </div>
                                        <div class="mb-1 h6">**** **** **** 1276</div>
                                        <div class="text-body fs-xs">Expiration 01/27</div>
                                    </div>
                                    <div class="gap-3 pt-0 pb-4 bg-transparent border-0 card-footer d-flex">
                                        <button type="button" class="btn btn-sm btn-outline-secondary">Edit</button>
                                        <button type="button" class="btn btn-sm btn-outline-secondary">Remove</button>
                                    </div>
                                </div>
                            </div>
                            <div class="col">
                                <div class="border-0 card h-100">
                                    <span
                                        class="top-0 border border-opacity-25 border-dashed rounded position-absolute start-0 w-100 h-100 border-secondary d-none-dark"></span>
                                    <span
                                        class="top-0 border border-opacity-25 border-dashed rounded position-absolute start-0 w-100 h-100 border-light d-none d-block-dark"></span>
                                    <div
                                        class="py-5 card-body position-relative z-2 nav align-items-center justify-content-center">
                                        <a class="min-w-0 px-0 nav-link animate-underline stretched-link fs-base"
                                            href="#addPaymentModal" data-bs-toggle="modal">
                                            <i class="ci-plus fs-lg ms-n2 me-2"></i>
                                            <span class="animate-target text-truncate">Add payment method</span>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>

    @include('components.account.footer')

@endsection

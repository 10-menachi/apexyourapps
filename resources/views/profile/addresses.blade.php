@extends('layouts.account')

@section('title', 'Addresses')

@section('content')
    <main class="content-wrapper">
        <div class="container py-5 mt-n2 mt-sm-0">
            <div class="row pt-md-2 pt-lg-3 pb-sm-2 pb-md-3 pb-lg-4 pb-xl-5">
                @include('components.account.sidebar')
                <div class="col-lg-9">
                    <div class="ps-lg-3 ps-xl-0">

                        <h1 class="mb-1 h2 mb-sm-2">Addresses</h1>

                        @foreach ($addresses as $address)
                            @include('components.account.address')
                        @endforeach

                        <div class="pt-4 nav">
                            <a class="px-0 nav-link animate-underline fs-base" href="#newAddressModal" data-bs-toggle="modal">
                                <i class="ci-plus fs-lg ms-n1 me-2"></i>
                                <span class="animate-target">Add address</span>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>

    @include('components.account.footer')
@endsection

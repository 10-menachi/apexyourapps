@extends('layouts.app')

@section('title', 'Home')
@section('content')
    <main class="content-wrapper">

        @include('components.banner')

        @include('components.features')

        @include('components.new-arrivals')

        @include('components.trending')

        @include('components.sale-banner')

        @include('components.special-offers')

        @include('components.brands')

        @include('components.contact')

    </main>
@endsection

@extends('layouts.admin-app')

@section('title', 'Admin Panel')
@section('content')

    <div class="container">
        <div class="page-inner">

            @include('admin.components.admin-header')

            @include('admin.components.admin-stats', ['statuses' => $statuses])

            @include('admin.components.user-geolocations')


            <div class="row">

                @include('admin.components.new-customers')

                @include('admin.components.transactional-history')
            </div>
        </div>
    </div>

@endsection

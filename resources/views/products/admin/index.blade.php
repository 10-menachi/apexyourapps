@extends('layouts.admin-app')

@section('title', 'Products')

@section('content')




    <div class="container">
        <div class="page-inner">
            <div class="page-header">
                <h3 class="fw-bold mb-3">My Products</h3>
                <ul class="breadcrumbs mb-3">
                    <li class="nav-home">
                        <a href="{{ route('admin.homepage.view') }}">
                            <i class="icon-home"></i>
                        </a>
                    </li>
                    <li class="separator">
                        <i class="icon-arrow-right"></i>
                    </li>
                    <li class="nav-item">
                        <a href="{{ route('admin.product.create') }}">Add New</a>
                    </li>
                    <li class="separator">
                        <i class="icon-arrow-right"></i>
                    </li>
                    <li class="nav-item">
                        <a href="{{ route('admin.product.index') }}">Products</a>
                    </li>
                </ul>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-header">
                            <h4 class="card-title">All Apex Products</h4>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table id="basic-datatables" class="display table table-striped table-hover">
                                    <thead>

                                        <tr>
                                            <th>Category</th>
                                            <th>Sub Category</th>
                                            <th>Name</th>
                                            <th>Description</th>
                                            <th>Price</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tfoot>
                                        <tr>
                                            <th>Category</th>
                                            <th>Sub Category</th>
                                            <th>Name</th>
                                            <th>Description</th>
                                            <th>Price</th>
                                            <th>Action</th>
                                        </tr>
                                    </tfoot>
                                    <tbody>
                                    <tbody>
                                        @foreach ($products as $product)
                                            <tr>
                                                <td> {{ $product->subcategory->category->name }}</td>
                                                <td>{{ $product->subcategory->name }}</td>
                                                <td>{{ $product->name }}</td>
                                                <td>{{ $product->description }}</td>
                                                <td>{{ $product->price }}</td>
                                                <td> {{-- <a href="#"><i class="icofont-ui-edit text-lg text-gray-500 dark:text-gray-400"></i></a>
                                                                    <a href="#"><i class="icofont-ui-delete text-lg text-red-500 dark:text-red-400"></i></a>
                                                                       --}}
                                                    <a href="{{ route('admin.product.edit', $product->id) }}"
                                                        class="text-blue-500 hover:underline">
                                                        <i class="fas fa-edit"></i>
                                                    </a>
                                                    <form action="{{ route('admin.product.destroy', $product->id) }}"
                                                        method="POST" class="inline">
                                                        @csrf
                                                        @method('DELETE')
                                                        <button type="submit" class="text-red-500 hover:underline">
                                                            <i class="fas fa-trash"></i>
                                                        </button>
                                                    </form>
                                                </td>
                                            </tr>
                                        @endforeach
                                    </tbody>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection

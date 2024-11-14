@extends('layouts.admin-app')

@section('title', 'Products')

@section('content')
    <div class="container">
        <div class="page-inner">
            <div class="page-header">
                <h1 class="mb-3 fw-bold">Products</h1>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-header">
                            <div class="d-flex align-items-center">
                                <h4 class="card-title">Products</h4>
                                <a href="{{ route('admin.product.create') }}" id="add-product-link"
                                    class="btn btn-primary btn-round ms-auto"><i class="fa fa-plus"></i> Add Product</a>

                            </div>
                        </div>
                        <div class="card-body">


                            <div class="table-responsive">
                                <table id="basic-datatables" class="table display table-striped table-hover">
                                    <thead>
                                        <tr>
                                            <th>Name</th>
                                            <th>Price</th>
                                            <th>Description</th>
                                            <th style="width: 10%">Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($products as $product)
                                            <tr>
                                                <td>{{ $product->name }}</td>
                                                <td>KES {{ $product->price }}</td>
                                                <td>{!! $product->description !!}</td>
                                                <td>
                                                    <div class="form-button-action">
                                                    
                                                        <a href="{{ route('admin.product.edit', $product->id) }}"
                                                            class="#">
                                                            <i class="fa fa-edit"></i>
                                                        </a>

                                                        <!-- Delete Button -->
                                                        <button type="button" data-bs-toggle="modal"
                                                            data-bs-target="#deleteProductModal{{ $product->id }}"
                                                            class="btn btn-link btn-danger">
                                                            <i class="fa fa-times"></i>
                                                        </button>
                                                    </div>
                                                </td>
                                            </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>




    <!-- Delete Product Modal -->
    <div class="modal fade" id="deleteProductModal{{ $product->id }}" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="border-0 modal-header">
                    <h5 class="modal-title">Delete Product</h5>
                    <button type="button" class="close" data-bs-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <p>Are you sure you want to delete the product
                        "{{ $product->name }}"?</p>
                </div>
                <div class="border-0 modal-footer">
                    <form action="{{ route('admin.product.destroy', $product->id) }}" method="POST">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger">Delete</button>
                    </form>
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>
                </div>
            </div>
        </div>
    </div>

@endsection

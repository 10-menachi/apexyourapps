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
                                <button class="btn btn-primary btn-round ms-auto" data-bs-toggle="modal"
                                    data-bs-target="#addProductModal">
                                    <i class="fa fa-plus"></i>
                                    Add Product
                                </button>
                            </div>
                        </div>
                        <div class="card-body">

                            <!-- Add Product Modal -->
                            <div class="modal fade" id="addProductModal" tabindex="-1" role="dialog" aria-hidden="true">
                                <div class="modal-dialog" role="document">
                                    <div class="modal-content">
                                        <div class="border-0 modal-header">
                                            <h5 class="modal-title fw-mediumbold">Add Product</h5>
                                            <button type="button" class="close" data-bs-dismiss="modal"
                                                aria-label="Close">
                                                <span aria-hidden="true">&times;</span>
                                            </button>
                                        </div>
                                        <div class="modal-body">
                                            <p class="small">Add a new product</p>
                                            <form action="{{ route('admin.product.store') }}" method="POST"
                                                enctype="multipart/form-data">
                                                @csrf
                                                <div class="row">
                                                    <div class="col-sm-6">
                                                        <div class="form-group form-group-default">
                                                            <label>Name</label>
                                                            <input id="name" name="name" type="text"
                                                                class="form-control" placeholder="Name" required />
                                                        </div>
                                                    </div>
                                                    <div class="col-sm-6">
                                                        <div class="form-group form-group-default">
                                                            <label>Price</label>
                                                            <input id="price" name="price" type="number"
                                                                class="form-control" placeholder="Price" required />
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <div class="form-group form-group-default">
                                                            <label>Description</label>
                                                            <input id="description" name="description" type="text"
                                                                class="form-control" placeholder="Description" />
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <div class="form-group form-group-default">
                                                            <label>Image</label>
                                                            <input id="image" name="image" type="file"
                                                                class="form-control" />
                                                        </div>
                                                    </div>
                                                    <div class="col-sm-6">
                                                        <div class="form-group form-group-default">
                                                            <label for="category">Category</label>
                                                            <select id="category" name="category_id" class="form-control"
                                                                required>
                                                                <option value="">Select Category</option>
                                                                @foreach ($categories as $category)
                                                                    <option value="{{ $category->id }}">
                                                                        {{ $category->name }}</option>
                                                                @endforeach
                                                            </select>
                                                        </div>
                                                    </div>
                                                    <div class="col-sm-6">
                                                        <div class="form-group form-group-default">
                                                            <label for="subcategory">Sub Category</label>
                                                            <select id="subcategory" name="subcategory_id"
                                                                class="form-control" required>
                                                                <option value="">Select Sub Category</option>
                                                                <!-- Subcategories will be populated based on selected category -->
                                                            </select>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="border-0 modal-footer">
                                                    <button type="submit" class="btn btn-primary">Add</button>
                                                    <button type="button" class="btn btn-danger"
                                                        data-bs-dismiss="modal">Close</button>
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>

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
                                                        <button type="button" data-bs-toggle="modal"
                                                            data-bs-target="#editProductModal{{ $product->id }}"
                                                            class="btn btn-link btn-primary btn-lg">
                                                            <i class="fa fa-edit"></i>
                                                        </button>

                                                        <!-- Edit Product Modal -->
                                                        <div class="modal fade" id="editProductModal{{ $product->id }}"
                                                            tabindex="-1" role="dialog" aria-hidden="true">
                                                            <div class="modal-dialog" role="document">
                                                                <div class="modal-content">
                                                                    <div class="border-0 modal-header">
                                                                        <h5 class="modal-title fw-mediumbold">Edit
                                                                            {{ $product->name }}</h5>
                                                                        <button type="button" class="close"
                                                                            data-bs-dismiss="modal" aria-label="Close">
                                                                            <span aria-hidden="true">&times;</span>
                                                                        </button>
                                                                    </div>
                                                                    <div class="modal-body">
                                                                        <p class="small">Edit {{ $product->name }}</p>
                                                                        <form
                                                                            action="{{ route('admin.product.update', $product->id) }}"
                                                                            method="POST" enctype="multipart/form-data">
                                                                            @csrf
                                                                            @method('PUT')
                                                                            <div class="row">
                                                                                <div class="col-sm-12">
                                                                                    <div
                                                                                        class="form-group form-group-default">
                                                                                        <label>Name</label>
                                                                                        <input id="name"
                                                                                            name="name" type="text"
                                                                                            class="form-control"
                                                                                            placeholder="Name" required
                                                                                            value="{{ old('name', $product->name) }}" />
                                                                                    </div>
                                                                                </div>
                                                                                <div class="col-md-6 pe-0">
                                                                                    <div
                                                                                        class="form-group form-group-default">
                                                                                        <label>Description</label>
                                                                                        <input id="description"
                                                                                            name="description"
                                                                                            type="text"
                                                                                            class="form-control"
                                                                                            placeholder="Description"
                                                                                            value="{{ old('description', $product->description) }}" />
                                                                                    </div>
                                                                                </div>
                                                                                <div class="col-md-6">
                                                                                    <div
                                                                                        class="form-group form-group-default">
                                                                                        <label>Image</label>
                                                                                        <input id="image"
                                                                                            name="image" type="file"
                                                                                            class="form-control" />
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                            <div class="border-0 modal-footer">
                                                                                <button type="submit"
                                                                                    class="btn btn-primary">Update</button>
                                                                                <button type="button"
                                                                                    class="btn btn-danger"
                                                                                    data-bs-dismiss="modal">Close</button>
                                                                            </div>
                                                                        </form>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>

                                                        <!-- Delete Button -->
                                                        <button type="button" data-bs-toggle="modal"
                                                            data-bs-target="#deleteProductModal{{ $product->id }}"
                                                            class="btn btn-link btn-danger">
                                                            <i class="fa fa-times"></i>
                                                        </button>

                                                        <!-- Delete Product Modal -->
                                                        <div class="modal fade"
                                                            id="deleteProductModal{{ $product->id }}" tabindex="-1"
                                                            role="dialog" aria-hidden="true">
                                                            <div class="modal-dialog" role="document">
                                                                <div class="modal-content">
                                                                    <div class="border-0 modal-header">
                                                                        <h5 class="modal-title">Delete Product</h5>
                                                                        <button type="button" class="close"
                                                                            data-bs-dismiss="modal" aria-label="Close">
                                                                            <span aria-hidden="true">&times;</span>
                                                                        </button>
                                                                    </div>
                                                                    <div class="modal-body">
                                                                        <p>Are you sure you want to delete the product
                                                                            "{{ $product->name }}"?</p>
                                                                    </div>
                                                                    <div class="border-0 modal-footer">
                                                                        <form
                                                                            action="{{ route('admin.product.destroy', $product->id) }}"
                                                                            method="POST">
                                                                            @csrf
                                                                            @method('DELETE')
                                                                            <button type="submit"
                                                                                class="btn btn-danger">Delete</button>
                                                                        </form>
                                                                        <button type="button" class="btn btn-secondary"
                                                                            data-bs-dismiss="modal">Cancel</button>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
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

    <script>
        document.addEventListener('DOMContentLoaded', function() {
            console.log('Document Ready');

            const categorySelect = document.getElementById('category');
            const subcategorySelect = document.getElementById('subcategory');

            categorySelect.addEventListener('change', function() {
                console.log('Category Changed');
                const categoryId = this.value;

                if (categoryId) {
                    fetch('/api/cat/' + categoryId)
                        .then(response => {
                            if (!response.ok) {
                                throw new Error('Network response was not ok: ' + response.statusText);
                            }
                            return response.json();
                        })
                        .then(data => {
                            // Clear existing options
                            subcategorySelect.innerHTML = '';
                            // Add default option
                            subcategorySelect.appendChild(new Option('Select Sub Category', ''));

                            // Populate subcategory options
                            data.forEach(item => {
                                const option = new Option(item.name, item.id);
                                subcategorySelect.appendChild(option);
                            });
                        })
                        .catch(error => {
                            console.error('Fetch error:', error);
                        });
                } else {
                    // Clear subcategory if no category is selected
                    subcategorySelect.innerHTML = '';
                    subcategorySelect.appendChild(new Option('Select Sub Category', ''));
                }
            });
        });
    </script>

@endsection

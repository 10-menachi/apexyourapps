@extends('layouts.admin-app')

@section('title', 'Create Product')

@section('content')

    <div class="container">
        <div class="page-inner">
            <div class="page-header">
                <h3 class="fw-bold mb-3">New Product</h3>
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
                        <a href="{{ route('admin.product.index') }}">Products</a>
                    </li>
                    <li class="separator">
                        <i class="icon-arrow-right"></i>
                    </li>
                    <li class="nav-item">
                        <a href="#">Add New Product HERE</a>
                    </li>
                </ul>
            </div>

            <div class="row">
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-header">
                            <div class="card-title">Product Create Form</div>
                        </div>
                        <form action="{{ route('admin.product.store') }}" method="POST" enctype="multipart/form-data">
                            @csrf <!-- Add CSRF token for form security -->
                            <div class="card-body">
                                <div class="row">
                                    <!-- Product Name -->
                                    <div class="col-md-6 col-lg-4">
                                        <div class="form-group">
                                            <label for="productName">Product Name</label>
                                            <input type="text" class="form-control" id="productName" name="name"
                                                placeholder="Enter Product Name" required />
                                        </div>
                                    </div>

                                    <!-- Product Description -->
                                    <div class="col-md-6 col-lg-4">
                                        <div class="form-group">
                                            <label for="productDescription">Product Description</label>
                                            <input type="text" class="form-control" id="productDescription"
                                                name="description" placeholder="Enter Product Description" required />
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="card-body">
                                <div class="row">
                                    <!-- Category Selection -->
                                    <div class="col-md-6 col-lg-4">
                                        <div class="form-group form-group-default">
                                            <label for="categories">Select Category</label>
                                            <select class="form-select" id="categories" name="category_id" required>
                                                <option value="">Select Category</option>
                                                @foreach ($categories as $category)
                                                    <option value="{{ $category->id }}">{{ $category->name }}</option>
                                                @endforeach
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-md-6 col-lg-4">
                                        <div class="form-floating form-floating-custom mb-3">
                                            <select class="form-select" id="subcategories" name="subcategory_id" required>
                                                <option value="">Select Subcategory</option>
                                            </select>
                                            <label for="selectFloatingLabel">Select Subcategory</label>
                                        </div>
                                    </div>                                   
                                </div>
                            </div>
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-md-6 col-lg-4">
                                        <div class="form-group">
                                            <label for="productAvatar">Product Avatar</label>
                                            <input type="file" class="form-control-file" id="productAvatar"
                                                name="avatar" required />
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="card-action">
                                <button type="submit" class="btn btn-success">Submit</button>
                                
                        <a href="{{ route('admin.product.index') }}" class="btn btn-danger">Cancel</a>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const categoryInput = document.getElementById('categories');
            categoryInput.addEventListener('change', async (e) => {
                try {
                    const response = await fetch(`/api/cat/${e.target.value}`);
                    if (!response.ok) {
                        throw new Error('Network response was not ok');
                    }
                    const data = await response.json();

                    // Populate subcategories based on the response data
                    const subcategorySelect = document.getElementById('subcategories');
                    subcategorySelect.innerHTML =
                        '<option value="">Select Subcategory</option>'; // Clear existing options
                    data.forEach(subcategory => {
                        const option = document.createElement('option');
                        option.value = subcategory.id;
                        option.textContent = subcategory.name;
                        subcategorySelect.appendChild(option);
                    });
                } catch (error) {
                    console.error('There was a problem with the fetch operation:', error);
                }
            });
        });
    </script>
@endsection

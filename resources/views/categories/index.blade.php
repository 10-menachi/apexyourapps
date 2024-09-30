@extends('layouts.admin-app')

@section('title', 'Categories')

@section('content')
    <div class="container">
        <div class="page-inner">
            <div class="page-header">
                <h3 class="mb-3 fw-bold">Categories</h3>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-header">
                            <div class="d-flex align-items-center">
                                <h4 class="card-title">Categories</h4>
                                <button class="btn btn-primary btn-round ms-auto" data-bs-toggle="modal"
                                    data-bs-target="#addCategoryModal">
                                    <i class="fa fa-plus"></i>
                                    Add Category
                                </button>
                            </div>
                        </div>
                        <div class="card-body">
                            <!-- Add Category Modal -->
                            <div class="modal fade" id="addCategoryModal" tabindex="-1" role="dialog" aria-hidden="true">
                                <div class="modal-dialog" role="document">
                                    <div class="modal-content">
                                        <div class="border-0 modal-header">
                                            <h5 class="modal-title">
                                                <span class="fw-mediumbold">Add Category</span>
                                            </h5>
                                            <button type="button" class="close" data-bs-dismiss="modal"
                                                aria-label="Close">
                                                <span aria-hidden="true">&times;</span>
                                            </button>
                                        </div>
                                        <div class="modal-body">
                                            <p class="small">Add a new category for our products</p>
                                            <form action="{{ route('admin.categories.store') }}" method="POST"
                                                enctype="multipart/form-data">
                                                @csrf
                                                <div class="row">
                                                    <div class="col-sm-12">
                                                        <div class="form-group form-group-default">
                                                            <label>Name</label>
                                                            <input id="name" name="name" type="text"
                                                                class="form-control" placeholder="Name" required />
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6 pe-0">
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

                            <div class="table-responsive">
                                <table id="add-row" class="table display table-striped table-hover">
                                    <thead>
                                        <tr>
                                            <th>Name</th>
                                            <th>Slug</th>
                                            <th>Description</th>
                                            <th style="width: 10%">Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($categories as $category)
                                            <tr>
                                                <td>{{ $category->name }}</td>
                                                <td>{{ $category->slug }}</td>
                                                <td>{!! $category->description !!}</td>
                                                <td>
                                                    <div class="form-button-action">
                                                        <button type="button" data-bs-toggle="modal"
                                                            data-bs-target="#editCategoryModal{{ $category->id }}"
                                                            class="btn btn-link btn-primary btn-lg">
                                                            <i class="fa fa-edit"></i>
                                                        </button>

                                                        <!-- Edit Category Modal -->
                                                        <div class="modal fade" id="editCategoryModal{{ $category->id }}"
                                                            tabindex="-1" role="dialog" aria-hidden="true">
                                                            <div class="modal-dialog" role="document">
                                                                <div class="modal-content">
                                                                    <div class="border-0 modal-header">
                                                                        <h5 class="modal-title">
                                                                            <span class="fw-mediumbold">Edit
                                                                                {{ $category->name }}</span>
                                                                        </h5>
                                                                        <button type="button" class="close"
                                                                            data-bs-dismiss="modal" aria-label="Close">
                                                                            <span aria-hidden="true">&times;</span>
                                                                        </button>
                                                                    </div>
                                                                    <div class="modal-body">
                                                                        <p class="small">Edit {{ $category->name }}</p>
                                                                        <form
                                                                            action="{{ route('admin.categories.update', $category->id) }}"
                                                                            method="POST" enctype="multipart/form-data">
                                                                            @csrf
                                                                            @method('PUT')
                                                                            <div class="row">
                                                                                <div class="col-sm-12">
                                                                                    <div
                                                                                        class="form-group form-group-default">
                                                                                        <label>Name</label>
                                                                                        <input id="name" name="name"
                                                                                            type="text"
                                                                                            class="form-control"
                                                                                            placeholder="Name" required
                                                                                            value="{{ old('name', $category->name) }}" />
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
                                                                                            value="{{ old('description', $category->description) }}" />
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
                                                                    </div>
                                                                    <div class="border-0 modal-footer">
                                                                        <button type="submit"
                                                                            class="btn btn-primary">Update</button>
                                                                        <button type="button" class="btn btn-danger"
                                                                            data-bs-dismiss="modal">Close</button>
                                                                    </div>
                                                                    </form>
                                                                </div>
                                                            </div>
                                                        </div>

                                                        <!-- Delete Button -->
                                                        <button type="button" data-bs-toggle="modal"
                                                            data-bs-target="#deleteCategoryModal{{ $category->id }}"
                                                            class="btn btn-link btn-danger">
                                                            <i class="fa fa-times"></i>
                                                        </button>

                                                        <!-- Delete Category Modal -->
                                                        <div class="modal fade"
                                                            id="deleteCategoryModal{{ $category->id }}" tabindex="-1"
                                                            role="dialog" aria-hidden="true">
                                                            <div class="modal-dialog" role="document">
                                                                <div class="modal-content">
                                                                    <div class="border-0 modal-header">
                                                                        <h5 class="modal-title">Delete Category</h5>
                                                                        <button type="button" class="close"
                                                                            data-bs-dismiss="modal" aria-label="Close">
                                                                            <span aria-hidden="true">&times;</span>
                                                                        </button>
                                                                    </div>
                                                                    <div class="modal-body">
                                                                        <p>Are you sure you want to delete the category
                                                                            "{{ $category->name }}"?</p>
                                                                    </div>
                                                                    <div class="border-0 modal-footer">
                                                                        <form
                                                                            action="{{ route('admin.categories.destroy', $category->id) }}"
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
@endsection

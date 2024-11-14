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
                        <a href="#">Add New Product Stock</a>
                    </li>
                </ul>
            </div>

            <div class="row">
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-header">
                            <div class="card-title">Add New Product</div>
                        </div>
                        <form action="{{ route('admin.product.store') }}" method="POST" enctype="multipart/form-data">
                            @csrf <!-- CSRF token for form security -->
                            <div class="card-body">
                                <div class="row">
                                    <!-- Product Name -->
                                    <div class="col-md-6 col-lg-4">
                                        <div class="form-group form-group-default">
                                            <label for="productName">Product Name</label>
                                            <input type="text" class="form-control" id="productName" name="name"
                                                placeholder="Enter Product Name" value="{{ old('name') }}" required />
                                            <!-- Error message -->
                                            @error('name')
                                                <div class="text-danger">{{ $message }}</div>
                                            @enderror
                                        </div>
                                    </div>
                                    <!-- Product Description -->
                                    <div class="col-md-6 col-lg-4">
                                        <div class="form-group form-group-default">
                                            <label for="productDescription">Product Description</label>
                                            <textarea id="description" name="description" class="form-control" value="{{ old('description') }}"
                                                placeholder="Description"></textarea>
                                            @error('description')
                                                <div class="text-danger">{{ $message }}</div>
                                            @enderror

                                        </div>
                                    </div>
                                    <!-- Product Name -->
                                    <div class="col-md-6 col-lg-4">
                                        <div class="form-group form-group-default">
                                            <label for="productSKU">Product SKU</label>
                                            <input id="sku" name="sku" type="text" value="{{ old('sku') }}"
                                                class="form-control" placeholder="SKU" />
                                            @error('sku')
                                                <div class="text-danger">{{ $message }}</div>
                                            @enderror
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
                                            <select id="category" name="category_id" class="form-control" required>
                                                <option value="">Select Category</option>
                                                @foreach ($categories as $category)
                                                    <option value="{{ $category->id }}"
                                                        {{ old('category_id') == $category->id ? 'selected' : '' }}>
                                                        {{ $category->name }}
                                                    </option>
                                                @endforeach
                                            </select>
                                            @error('category_id')
                                                <div class="text-danger">{{ $message }}</div>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="col-md-6 col-lg-4">
                                        <div class="form-floating form-floating-custom mb-3">
                                            <select id="subcategory" name="subcategory_id"
                                                value="{{ old('subcategory_id') }}" class="form-control" required>
                                                <option value="">Select Sub Category</option>
                                                <!-- Subcategories will be populated based on selected category -->
                                            </select>
                                            @error('subcategory_id')
                                                <div class="text-danger">{{ $message }}</div>
                                            @enderror
                                            <label for="selectFloatingLabel">Select Subcategory</label>
                                        </div>
                                    </div>

                                    <!-- Product Featured Yes or no -->
                                    <div class="col-md-6 col-lg-4">
                                        <div class="form-group form-group-default">
                                            <label for="featured">Product Featured</label>
                                            <select id="featured" name="featured" class="form-control" required>
                                                <option value="">Is Product Featured</option>
                                                <option value="1" {{ old('featured') == '1' ? 'selected' : '' }}>Yes
                                                </option>
                                                <option value="0" {{ old('featured') == '0' ? 'selected' : '' }}>No
                                                </option>
                                            </select>
                                            @error('featured')
                                                <div class="text-danger">{{ $message }}</div>
                                            @enderror
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-md-6 col-lg-4">
                                        <div class="form-group form-group-default">
                                            <label for="productAvatar">Product Main Avatar</label>
                                            <input id="image1" name="product_main_avatar" type="file"
                                                class="form-control" onchange="previewImage(event,'imagePreview1')" />
                                            @error('product_main_avatar')
                                                <div class="text-danger">{{ $message }}</div>
                                            @enderror
                                            <img id="imagePreview1" src="" alt="Image Preview 1"
                                                style="display:none; max-width: 30%; height: auto; margin-top: 10px;" />

                                        </div>
                                    </div>
                                    <div class="col-md-6 col-lg-4">
                                        <div class="form-group form-group-default">
                                            <label for="categories">Select A Tag <i class="text-success">(
                                                    Optional !)
                                                </i></label>
                                            <select id="tags" name="tag_id" class="form-control" required>
                                                <option value="">Select Tag</option>
                                                @foreach ($tags as $tag)
                                                    <option value="{{ $tag->id }}"
                                                        {{ old('tag_id') == $tag->id ? 'selected' : '' }}>
                                                        {{ $tag->name }}
                                                    </option>
                                                @endforeach
                                            </select>
                                            @error('tag_id')
                                                <div class="text-danger">{{ $message }}</div>
                                            @enderror

                                        </div>
                                    </div>
                                    <!-- Product Qr Code -->
                                    <div class="col-md-6 col-lg-4">
                                        <div class="form-group form-group-default">
                                            <label for="productqrcode">Product Qr Code</label>
                                            <input id="qr_code" name="qr_code" type="text" class="form-control"
                                                placeholder="QR Code" />
                                            @error('qr_code')
                                                <div class="text-danger">{{ $message }}</div>
                                            @enderror
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="card-body">
                                <div class="row">
                                    <!-- Product warranty -->
                                    <div class="col-md-6 col-lg-4">
                                        <div class="form-group form-group-default">
                                            <label for="productqrcode">Product Warranty <i class="text-info">( 1 Year,6 Month)</i> </label>
                                            <input id="warranty" name="warranty" type="text" class="form-control"
                                                placeholder="Product warranty" />
                                            @error('warranty')
                                                <div class="text-danger">{{ $message }}</div>
                                            @enderror
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <hr>
                            <h5 class="text-primary p-4">Product Details
                            </h5>
                            <!-- General Specs -->
                            <h6 class="text-info p-4">General Specs</h6>
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-md-6 col-lg-4">
                                        <div class="form-group form-group-default">
                                            <label for="model">Model</label>
                                            <input type="text" name="product_details[General_specs][Model]"
                                                class="form-control"
                                                value="{{ old('product_details.General_specs.Model') }}"
                                                placeholder="e.g., iPhone 14 Plus" />
                                            <!-- Show error message for product_details.General_specs.Model -->
                                            @error('product_details.General_specs.Model')
                                                <div class="text-danger">{{ $message }}</div>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="col-md-6 col-lg-4">
                                        <div class="form-group form-group-default">
                                            <label for="manufacturer">Manufacturer</label>
                                            <input type="text" name="product_details[General_specs][Manufacturer]"
                                                class="form-control"
                                                value="{{ old('product_details.General_specs.Manufacturer') }}"
                                                placeholder="e.g., Apple Inc." />
                                            <!-- Show error message for product_details.General_specs.Model -->
                                            @error('product_details.General_specs.Manufacturer')
                                                <div class="text-danger">{{ $message }}</div>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="col-md-6 col-lg-4">
                                        <div class="form-group form-group-default">
                                            <label for="finish">Finish</label>
                                            <input type="text" name="product_details[General_specs][Finish]"
                                                class="form-control"
                                                value="{{ old('product_details.General_specs.Finish') }}"
                                                placeholder="e.g., Ceramic, Glass, Aluminium" />
                                            @error('product_details.General_specs.Finish')
                                                <div class="text-danger">{{ $message }}</div>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="col-md-6 col-lg-4">
                                        <div class="form-group form-group-default">
                                            <label for="capacity">Capacity</label>
                                            <input type="text" name="product_details[General_specs][Capacity]"
                                                class="form-control"
                                                value="{{ old('product_details.General_specs.Capacity') }}"
                                                placeholder="e.g., 128GB" />

                                            @error('product_details.General_specs.Capacity')
                                                <div class="text-danger">{{ $message }}</div>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="col-md-6 col-lg-4">
                                        <div class="form-group form-group-default">
                                            <label for="chip">Chip</label>
                                            <input type="text" name="product_details[General_specs][Chip]"
                                                class="form-control"
                                                value="{{ old('product_details.General_specs.Chip') }}"
                                                placeholder="e.g., A15 Bionic chip" />
                                            @error('product_details.General_specs.Chip')
                                                <div class="text-danger">{{ $message }}</div>
                                            @enderror
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- Display Specs -->
                            <h6 class="text-info p-4">Display</h6>
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-md-6 col-lg-4">
                                        <div class="form-group form-group-default">
                                            <label for="diagonal">Diagonal</label>
                                            <input type="text" name="product_details[Display][Diagonal]"
                                                class="form-control"
                                                value="{{ old('product_details.Display.Diagonal') }}"
                                                placeholder="e.g., 6.1"" />

                                            @error('product_details.Display.Diagonal')
                                                <div class="text-danger">{{ $message }}</div>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="col-md-6 col-lg-4">
                                        <div class="form-group form-group-default">
                                            <label for="screen_type">Screen Type</label>
                                            <input type="text" name="product_details[Display][Screen_type]"
                                                class="form-control"
                                                value="{{ old('product_details.Display.Screen_type') }}"
                                                placeholder="e.g., Super Retina XDR" />

                                            @error('product_details.Display.Screen_type')
                                                <div class="text-danger">{{ $message }}</div>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="col-md-6 col-lg-4">
                                        <div class="form-group form-group-default">
                                            <label for="resolution">Resolution</label>
                                            <input type="text" name="product_details[Display][Resolution]"
                                                class="form-control"
                                                value="{{ old('product_details.Display.Resolution') }}"
                                                placeholder="e.g., 2778x1284px" />

                                            @error('product_details.Display.Resolution')
                                                <div class="text-danger">{{ $message }}</div>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="col-md-6 col-lg-4">
                                        <div class="form-group form-group-default">
                                            <label for="refresh_rate">Refresh Rate</label>
                                            <input type="text" name="product_details[Display][Refresh_rate]"
                                                class="form-control"
                                                value="{{ old('product_details.Display.Refresh_rate') }}"
                                                placeholder="e.g., 120 Hz" />

                                            @error('product_details.Display.Refresh_rate')
                                                <div class="text-danger">{{ $message }}</div>
                                            @enderror
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- Camera Specs -->
                            <h6 class="text-info p-4">Camera</h6>
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-md-6 col-lg-4">
                                        <div class="form-group form-group-default">
                                            <label for="front_camera">Front Camera</label>
                                            <input type="text" name="product_details[Camera][Front_camera]"
                                                class="form-control"
                                                value="{{ old('product_details.Camera.Front_camera') }}"
                                                placeholder="e.g., 12MP" />


                                            @error('product_details.Camera.Front_camera')
                                                <div class="text-danger">{{ $message }}</div>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="col-md-6 col-lg-4">
                                        <div class="form-group form-group-default">
                                            <label for="main_camera">Main Camera</label>
                                            <input type="text" name="product_details[Camera][Main_camera]"
                                                class="form-control"
                                                value="{{ old('product_details.Camera.Main_camera') }}"
                                                placeholder="e.g., 12MP Ultra Wide" />

                                            @error('product_details.Camera.Main_camera')
                                                <div class="text-danger">{{ $message }}</div>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="col-md-6 col-lg-4">
                                        <div class="form-group form-group-default">
                                            <label for="zoom">Zoom</label>
                                            <input type="text" name="product_details[Camera][Zoom]"
                                                class="form-control" value="{{ old('product_details.Camera.Zoom') }}"
                                                placeholder="e.g., 2x optical, 5x digital" />

                                            @error('product_details.Camera.Zoom')
                                                <div class="text-danger">{{ $message }}</div>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="col-md-6 col-lg-4">
                                        <div class="form-group form-group-default">
                                            <label for="video">Video</label>
                                            <input type="text" name="product_details[Camera][Video]"
                                                class="form-control" value="{{ old('product_details.Camera.Video') }}"
                                                placeholder="e.g., 4K video recording" />

                                            @error('product_details.Camera.Video')
                                                <div class="text-danger">{{ $message }}</div>
                                            @enderror
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- Power and Battery -->
                            <h6 class="text-info p-4">Power and Battery</h6>
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-md-6 col-lg-4">
                                        <div class="form-group form-group-default">
                                            <label for="fast_charging">Fast Charging</label>
                                            <input type="text" name="product_details[Power_and_Battery][Fast_charging]"
                                                class="form-control"
                                                value="{{ old('product_details.Power_and_Battery.Fast_charging') }}"
                                                placeholder="e.g., Yes" />

                                            @error('product_details.Power_and_Battery.Fast_charging')
                                                <div class="text-danger">{{ $message }}</div>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="col-md-6 col-lg-4">
                                        <div class="form-group form-group-default">
                                            <label for="wireless_charging">Wireless Charging</label>
                                            <input type="text"
                                                name="product_details[Power_and_Battery][Wireless_charging]"
                                                class="form-control"
                                                value="{{ old('product_details.Power_and_Battery.Wireless_charging') }}"
                                                placeholder="e.g., Yes" />

                                            @error('product_details.Power_and_Battery.Front_camera')
                                                <div class="text-danger">{{ $message }}</div>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="col-md-6 col-lg-4">
                                        <div class="form-group form-group-default">
                                            <label for="charging_power">Charging Power</label>
                                            <input type="text"
                                                name="product_details[Power_and_Battery][Charging_power]"
                                                class="form-control"
                                                value="{{ old('product_details.Power_and_Battery.Charging_power') }}"
                                                placeholder="e.g., up to 15W" />

                                            @error('product_details.Power_and_Battery.Charging_power')
                                                <div class="text-danger">{{ $message }}</div>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="col-md-6 col-lg-4">
                                        <div class="form-group form-group-default">
                                            <label for="video_playback">Video Playback</label>
                                            <input type="text"
                                                name="product_details[Power_and_Battery][Video_playback]"
                                                class="form-control"
                                                value="{{ old('product_details.Power_and_Battery.Video_playback') }}"
                                                placeholder="e.g., Up to 26 hours" />

                                            @error('product_details.Power_and_Battery.Video_playback')
                                                <div class="text-danger">{{ $message }}</div>
                                            @enderror

                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- Size and Weight -->
                            <h6 class="text-info p-4">Size and Weight</h6>
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-md-6 col-lg-4">
                                        <div class="form-group form-group-default">
                                            <label for="height">Height</label>
                                            <input type="text" name="product_details[Size_and_Weight][Height]"
                                                class="form-control"
                                                value="{{ old('product_details.Size_and_Weight.Height') }}"
                                                placeholder="e.g., 160.8 mm" />

                                            @error('product_details.Size_and_Weight.Height')
                                                <div class="text-danger">{{ $message }}</div>
                                            @enderror

                                        </div>
                                    </div>
                                    <div class="col-md-6 col-lg-4">
                                        <div class="form-group form-group-default">
                                            <label for="width">Width</label>
                                            <input type="text" name="product_details[Size_and_Weight][Width]"
                                                class="form-control"
                                                value="{{ old('product_details.Size_and_Weight.Width') }}"
                                                placeholder="e.g., 78.1 mm" />

                                            @error('product_details.Size_and_Weight.Width')
                                                <div class="text-danger">{{ $message }}</div>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="col-md-6 col-lg-4">
                                        <div class="form-group form-group-default">
                                            <label for="weight">Weight</label>
                                            <input type="text" name="product_details[Size_and_Weight][Weight]"
                                                class="form-control"
                                                value="{{ old('product_details.Size_and_Weight.Weight') }}"
                                                placeholder="e.g., 203 grams" />


                                            @error('product_details.Size_and_Weight.Weight')
                                                <div class="text-danger">{{ $message }}</div>
                                            @enderror
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <h3 class="text-primary p-4">Product Variants</h3>
                            <div class="card-body">
                                <!-- Wrapper for dynamically added variant rows -->
                                <div id="variant-wrapper">
                                    <div class="row variant-row">
                                        <div class="col-md-6 col-lg-4">
                                            <div class="form-group form-group-default">
                                                <label>Model:</label>
                                                <select name="variants[0][product_model_id]" class="form-control"
                                                    required>
                                                    <option value="">Select Model</option>
                                                    @foreach ($models as $model)
                                                        <option value="{{ $model->id }}"
                                                            @if (old('variants.0.product_model_id') == $model->id) selected @endif>
                                                            {{ $model->name }}
                                                        </option>
                                                    @endforeach
                                                </select>
                                                @error('variants.0.product_model_id')
                                                    <div class="text-danger">{{ $message }}</div>
                                                @enderror
                                            </div>
                                        </div>
                                        <div class="col-md-6 col-lg-4">
                                            <div class="form-group form-group-default">
                                                <label>Color:</label>
                                                <select name="variants[0][product_color_id]" class="form-control"
                                                    required>
                                                    <option value="">Select Color</option>
                                                    @foreach ($colors as $color)
                                                        <option value="{{ $color->id }}"
                                                            @if (old('variants.0.product_color_id') == $color->id) selected @endif>
                                                            {{ $color->name }}
                                                        </option>
                                                    @endforeach
                                                </select>
                                                @error('variants.0.product_color_id')
                                                    <div class="text-danger">{{ $message }}</div>
                                                @enderror
                                            </div>
                                        </div>
                                        <div class="col-md-6 col-lg-4">
                                            <div class="form-group form-group-default">
                                                <label>Price:</label>
                                                <input type="number" name="variants[0][specific_price]" step="0.01"
                                                    placeholder="e.g., 999.99" class="form-control"
                                                    value="{{ old('variants.0.specific_price') }}" required>
                                                @error('variants.0.specific_price')
                                                    <div class="text-danger">{{ $message }}</div>
                                                @enderror
                                            </div>
                                        </div>
                                        <div class="col-md-6 col-lg-4">
                                            <div class="form-group form-group-default">
                                                <label for="productQuantity">Opening Product Stock</label>
                                                <input id="opening_stock_quantity"
                                                    value="{{ old('opening_stock_quantity') }}"
                                                    name="variants[0][opening_stock_quantity]" type="number"
                                                    class="form-control" placeholder="Opening Stock Quantity" required />
                                                @error('variants.0.opening_stock_quantity')
                                                    <div class="text-danger">{{ $message }}</div>
                                                @enderror
                                            </div>
                                        </div>
                                        <div class="col-md-6 col-lg-4">
                                            <button type="button" class="btn btn-danger"
                                                onclick="removeVariant(this)">Remove</button>
                                        </div>
                                    </div>
                                </div>

                                <button type="button" class="btn btn-success mt-2" onclick="addVariant()">Add Another
                                    Variant</button>
                            </div>

                            <hr>
                            <h6 class="text-primary p-4">Product Avatars' for product Details Preview
                                <i class="text-success">
                                    (Optional!)
                                </i>
                            </h6>
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-md-6 col-lg-4">
                                        <div class="form-group form-group-default">
                                            <label for="productAvatar2">Product Avatar 2 <i
                                                    class="text-success">(Optional!)</i></label>
                                            <input id="image2" name="product_main_avatar_2" type="file"
                                                class="form-control" onchange="previewImage(event, 'imagePreview2')" />
                                            @error('product_main_avatar_2')
                                                <div class="text-danger">{{ $message }}</div>
                                            @enderror
                                            <img id="imagePreview2" src="" alt="Image Preview 2"
                                                style="display:none; max-width: 30%; height: auto; margin-top: 10px;" />
                                        </div>
                                    </div>
                                    <div class="col-md-6 col-lg-4">
                                        <div class="form-group form-group-default">
                                            <label for="productAvatar3">Product Avatar 3 <i
                                                    class="text-success">(Optional!)</i></label>
                                            <input id="image3" name="product_main_avatar_3" type="file"
                                                class="form-control" onchange="previewImage(event, 'imagePreview3')" />
                                            @error('product_main_avatar_3')
                                                <div class="text-danger">{{ $message }}</div>
                                            @enderror
                                            <img id="imagePreview3" src="" alt="Image Preview 3"
                                                style="display:none; max-width: 30%; height: auto; margin-top: 10px;" />
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="card-body">
                                <div class="row">
                                    <div class="col-md-6 col-lg-4">
                                        <div class="form-group form-group-default">
                                            <label for="productAvatar4">Product Avatar 4 <i
                                                    class="text-success">(Optional!)</i></label>
                                            <input id="image4" name="product_main_avatar_4" type="file"
                                                class="form-control" onchange="previewImage(event, 'imagePreview4')" />
                                            @error('product_main_avatar_4')
                                                <div class="text-danger">{{ $message }}</div>
                                            @enderror
                                            <img id="imagePreview4" src="" alt="Image Preview 4"
                                                style="display:none; max-width: 30%; height: auto; margin-top: 10px;" />
                                        </div>
                                    </div>
                                    <div class="col-md-6 col-lg-4">
                                        <div class="form-group form-group-default">
                                            <label for="productAvatar5">Product Avatar 5 <i
                                                    class="text-success">(Optional!)</i></label>
                                            <input id="image5" name="product_main_avatar_5" type="file"
                                                class="form-control" onchange="previewImage(event, 'imagePreview5')" />
                                            @error('product_main_avatar_5')
                                                <div class="text-danger">{{ $message }}</div>
                                            @enderror
                                            <img id="imagePreview5" src="" alt="Image Preview 5"
                                                style="display:none; max-width: 30%; height: auto; margin-top: 10px;" />
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="card-body">
                                <div class="row">
                                    <div class="col-md-6 col-lg-4">
                                        <div class="form-group form-group-default">
                                            <label for="productAvatar6">Product Avatar 6 <i
                                                    class="text-success">(Optional!)</i></label>
                                            <input id="image6" name="product_main_avatar_6" type="file"
                                                class="form-control" onchange="previewImage(event, 'imagePreview6')" />
                                            @error('product_main_avatar_6')
                                                <div class="text-danger">{{ $message }}</div>
                                            @enderror
                                            <img id="imagePreview6" src="" alt="Image Preview 6"
                                                style="display:none; max-width: 30%; height: auto; margin-top: 10px;" />
                                        </div>
                                    </div>
                                    <div class="col-md-6 col-lg-4">
                                        <div class="form-group form-group-default">
                                            <label for="productAvatar7">Product Avatar 7 <i
                                                    class="text-success">(Optional!)</i></label>
                                            <input id="image7" name="product_main_avatar_7" type="file"
                                                class="form-control" onchange="previewImage(event, 'imagePreview7')" />
                                            @error('product_main_avatar_7')
                                                <div class="text-danger">{{ $message }}</div>
                                            @enderror
                                            <img id="imagePreview7" src="" alt="Image Preview 7"
                                                style="display:none; max-width: 30%; height: auto; margin-top: 10px;" />
                                        </div>
                                    </div>
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



        <script>
            let variantIndex = 1; // Start from 1 since the first row is at index 0.

            // Models and colors from Laravel blade
            const models = @json($models);
            const colors = @json($colors);

            function addVariant() {
                const wrapper = document.getElementById('variant-wrapper');
                const newVariant = document.createElement('div');
                newVariant.classList.add('row', 'variant-row', 'mt-2');

                // Generate HTML dynamically without Blade-specific directives
                newVariant.innerHTML = `
            <div class="col-md-6 col-lg-4">
                <div class="form-group form-group-default">
                    <label>Model:</label>
                    <select name="variants[${variantIndex}][product_model_id]" class="form-control" required>
                        <option value="">Select Model</option>
                        ${models.map(model => `
                                            <option value="${model.id}">${model.name}</option>
                                        `).join('')}
                    </select>
                </div>
            </div>
            <div class="col-md-6 col-lg-4">
                <div class="form-group form-group-default">
                    <label>Color:</label>
                    <select name="variants[${variantIndex}][product_color_id]" class="form-control" required>
                        <option value="">Select Color</option>
                        ${colors.map(color => `
                                            <option value="${color.id}">${color.name}</option>
                                        `).join('')}
                    </select>
                </div>
            </div>
            <div class="col-md-6 col-lg-4">
                <div class="form-group form-group-default">
                    <label>Price:</label>
                    <input type="number" name="variants[${variantIndex}][specific_price]" step="0.01" placeholder="e.g., 999.99" class="form-control" required>
                </div>
            </div>
            <div class="col-md-6 col-lg-4">
                <div class="form-group form-group-default">
                    <label for="productQuantity">Opening Product Stock</label>
                    <input id="opening_stock_quantity" name="variants[${variantIndex}][opening_stock_quantity]" type="number" class="form-control" placeholder="Opening Stock Quantity" required />
                </div>
            </div>
            <div class="col-md-6 col-lg-4">
                <button type="button" class="btn btn-danger" onclick="removeVariant(this)">Remove</button>
            </div>
        `;

                // Append the new variant to the wrapper
                wrapper.appendChild(newVariant);

                // Increment the variant index for the next variant
                variantIndex++;
            }

            // Function to remove a variant row
            function removeVariant(element) {
                element.closest('.variant-row').remove();
            }
        </script>


    @endsection

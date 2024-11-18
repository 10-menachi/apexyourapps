@extends('layouts.admin-app')

@section('title', 'Product Details')

@section('content')
    <div class="container">
        <div class="page-inner">
            <div class="page-header">
                <h3 class="fw-bold mb-3">Product Details</h3>
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
                        <a href="{{ route('admin.product.index') }}">Product Details</a>
                    </li>
                    <li class="separator">
                        <i class="icon-arrow-right"></i>
                    </li>
                    <li class="nav-item">
                        <a href="#">Product Details</a>
                    </li>
                </ul>
            </div>

            <div class="col-md-12">
                <div class="row">
                    <div class="card-body">
                        <div class="row">
                            <!-- Product Name -->
                            <div class="col-md-6 col-lg-4">
                                <div class="form-group-default">
                                    <label for="productName">Product Name</label>
                                    {{ $product->name }}

                                </div>
                            </div>

                            <!-- Product Qr Code -->
                            <div class="col-md-6 col-lg-4">
                                <div class="form-group-default">
                                    <label for="productqrcode">Product Qr Code</label>

                                    {{ $product->qr_code }}

                                </div>
                            </div>
                            <!-- Product SKU -->
                            <div class="col-md-6 col-lg-4">
                                <div class="form-group-default">
                                    <label for="productSKU">Product SKU</label>
                                    {{ $product->sku }}
                                </div>
                            </div>
                        </div>
                        <div class="card-body">
                            <div class="row">

                                <!-- Category Selection -->
                                <div class="col-md-6 col-lg-4">
                                    <div class="form-group-default">
                                        <label for="categories">Select Category</label>

                                        {{ $product->subcategory->category->name }}

                                    </div>
                                </div>

                                <!-- Category Selection -->
                                <div class="col-md-6 col-lg-4">
                                    <div class="form-group-default">
                                        <label for="categories">Sub Category</label>

                                        {{ $product->subcategory->name }}

                                    </div>
                                </div>





                                <!-- Product Featured Yes or no -->
                                <div class="col-md-6 col-lg-4">
                                    <div class="form-group-default">
                                        <label for="featured">Product Featured</label>
                                        {{ $product->featured }} Yes
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="card-body">
                            <div class="row">
                                <div class="col-md-6 col-lg-4">
                                    <div class="form-group-default">
                                        <label for="productAvatar">Product Main Avatar</label>
                                        <img id="imagePreview1" src="{{ asset('storage/' . $product->main_avatar) }}"
                                            alt="Product Main Avatar Image Preview"
                                            style="max-width: 30%; height: auto; margin-top: 10px;" />

                                    </div>
                                </div>

                                <!-- Product Description -->
                                <div class="col-md-6 col-lg-4">
                                    <div class="form-group-default">
                                        <label for="productDescription">Product
                                            Description</label>{{ $product->description }}
                                    </div>
                                </div>
                                <div class="col-md-6 col-lg-4">
                                    <div class="form-group-default">
                                        <label for="categories">Select A Tag
                                            </i></label>

                                        {{ $product->tags->name ?? '' }}

                                    </div>
                                </div>



                            </div>
                        </div>
                        <div class="card-body">
                            <div class="row">
                                <!-- Product warranty -->
                                <div class="col-md-6 col-lg-4">
                                    <div class="form-group-default">
                                        <label for="productqrcode">Product Warranty</label>
                                        {{ $product->warranty }}
                                    </div>
                                </div>
                            </div>
                        </div>
                        <hr>
                        <h5 class="text-primary p-4">Product Details
                        </h5>
                        <!-- General Specs -->

                        @php
                            // Retrieve all ProductDetails for General_specs category
                            $generalSpecs = $product->details->where('category', 'General_specs');

                            // Retrieve specific keys (e.g., Model, Manufacturer, etc.)
                            $generalSpecsModel = $generalSpecs->where('key', 'Model')->first();
                            $generalSpecsManufacturer = $generalSpecs->where('key', 'Manufacturer')->first();
                            $generalSpecsFinish = $generalSpecs->where('key', 'Finish')->first();
                            $generalSpecsCapacity = $generalSpecs->where('key', 'Capacity')->first();
                            $generalSpecsChip = $generalSpecs->where('key', 'Chip')->first();
                        @endphp


                        <h6 class="text-info p-4">General Specs</h6>
                        <div class="card-body">
                            <div class="row">
                                <div class="col-md-6 col-lg-4">
                                    <div class="form-group-default">
                                        <label for="model">Model</label>
                                        {{ $generalSpecsModel ? $generalSpecsModel->value : '' }}
                                    </div>
                                </div>
                                <div class="col-md-6 col-lg-4">
                                    <div class="form-group-default">
                                        <label for="manufacturer">Manufacturer</label>

                                        {{ $generalSpecsManufacturer ? $generalSpecsManufacturer->value : '' }}

                                    </div>
                                </div>
                                <div class="col-md-6 col-lg-4">
                                    <div class="form-group-default">
                                        <label for="finish">Finish</label>
                                        {{ $generalSpecsFinish ? $generalSpecsFinish->value : '' }}
                                    </div>
                                </div>
                                <div class="col-md-6 col-lg-4">
                                    <div class="form-group-default">
                                        <label for="capacity">Capacity</label>

                                        {{ $generalSpecsCapacity ? $generalSpecsCapacity->value : '' }}
                                    </div>
                                </div>
                                <div class="col-md-6 col-lg-4">
                                    <div class="form-group-default">
                                        <label for="chip">Chip</label>

                                        {{ $generalSpecsChip ? $generalSpecsChip->value : '' }}
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- Display Specs -->

                        @php
                            // Retrieve all ProductDetails for Display category
                            $displaySpecs = $product->details->where('category', 'Display');

                            // Retrieve specific keys (e.g., Model, Manufacturer, etc.)
                            $displaySpecsDiagonal = $displaySpecs->where('key', 'Diagonal')->first();
                            $generalSpecsScreenType = $displaySpecs->where('key', 'Screen_type')->first();
                            $generalSpecsResolution = $displaySpecs->where('key', 'Resolution')->first();
                            $generalSpecsRefreshRate = $displaySpecs->where('key', 'Refresh_rate')->first();
                        @endphp

                        <h6 class="text-info p-4">Display</h6>
                        <div class="card-body">
                            <div class="row">
                                <div class="col-md-6 col-lg-4">
                                    <div class="form-group-default">
                                        <label for="diagonal">Diagonal</label>

                                        {{ $displaySpecsDiagonal ? $displaySpecsDiagonal->value : '' }}

                                    </div>
                                </div>
                                <div class="col-md-6 col-lg-4">
                                    <div class="form-group-default">
                                        <label for="screen_type">Screen Type</label>

                                        {{ $generalSpecsScreenType ? $generalSpecsScreenType->value : '' }}

                                    </div>
                                </div>
                                <div class="col-md-6 col-lg-4">
                                    <div class="form-group-default">
                                        <label for="resolution">Resolution</label>

                                        {{ $generalSpecsResolution ? $generalSpecsResolution->value : '' }}

                                    </div>
                                </div>
                                <div class="col-md-6 col-lg-4">
                                    <div class="form-group-default">
                                        <label for="refresh_rate">Refresh Rate</label>
                                        {{ $generalSpecsRefreshRate ? $generalSpecsRefreshRate->value : '' }}

                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- Camera Specs -->


                        @php
                            // Retrieve all ProductDetails for Camera Specs category
                            $cameraSpecs = $product->details->where('category', 'Camera');

                            // Retrieve specific keys (e.g., Model, Manufacturer, etc.)
                            $cameraSpecsFrontCamera = $cameraSpecs->where('key', 'Front_camera')->first();
                            $cameraSpecsScreenMainCamera = $cameraSpecs->where('key', 'Main_camera')->first();
                            $cameraSpecsZoom = $cameraSpecs->where('key', 'Zoom')->first();
                            $cameraSpecsVideo = $cameraSpecs->where('key', 'Video')->first();
                        @endphp

                        <h6 class="text-info p-4">Camera</h6>
                        <div class="card-body">
                            <div class="row">
                                <div class="col-md-6 col-lg-4">
                                    <div class="form-group-default">
                                        <label for="front_camera">Front Camera</label>

                                        {{ $cameraSpecsFrontCamera ? $cameraSpecsFrontCamera->value : '' }}

                                    </div>
                                </div>
                                <div class="col-md-6 col-lg-4">
                                    <div class="form-group-default">
                                        <label for="main_camera">Main Camera</label>

                                        {{ $cameraSpecsScreenMainCamera ? $cameraSpecsScreenMainCamera->value : '' }}

                                    </div>
                                </div>
                                <div class="col-md-6 col-lg-4">
                                    <div class="form-group-default">
                                        <label for="zoom">Zoom</label>

                                        {{ $cameraSpecsZoom ? $cameraSpecsZoom->value : '' }}

                                    </div>
                                </div>
                                <div class="col-md-6 col-lg-4">
                                    <div class="form-group-default">
                                        <label for="video">Video</label>

                                        {{ $cameraSpecsVideo ? $cameraSpecsVideo->value : '' }}

                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- Power and Battery -->

                        @php
                            // Retrieve all ProductDetails for Camera Specs category
                            $powerandBatterySpecs = $product->details->where('category', 'Power_and_Battery');

                            // Retrieve specific keys (e.g., Model, Manufacturer, etc.)
                            $powerandBatteryFastCharging = $powerandBatterySpecs
                                ->where('key', 'Fast_charging')
                                ->first();
                            $powerandBatteryWirelessCharging = $powerandBatterySpecs
                                ->where('key', 'Wireless_charging')
                                ->first();
                            $powerandBatteryChargingPower = $powerandBatterySpecs
                                ->where('key', 'Charging_power')
                                ->first();
                            $powerandBatteryVideoPlayback = $powerandBatterySpecs
                                ->where('key', 'Video_playback')
                                ->first();
                        @endphp

                        <h6 class="text-info p-4">Power and Battery</h6>
                        <div class="card-body">
                            <div class="row">
                                <div class="col-md-6 col-lg-4">
                                    <div class="form-group-default">
                                        <label for="fast_charging">Fast Charging</label>

                                        {{ $powerandBatteryFastCharging ? $powerandBatteryFastCharging->value : '' }}

                                    </div>
                                </div>
                                <div class="col-md-6 col-lg-4">
                                    <div class="form-group-default">
                                        <label for="wireless_charging">Wireless Charging</label>

                                        {{ $powerandBatteryWirelessCharging ? $powerandBatteryWirelessCharging->value : '' }}

                                    </div>
                                </div>
                                <div class="col-md-6 col-lg-4">
                                    <div class="form-group-default">
                                        <label for="charging_power">Charging Power</label>


                                        {{ $powerandBatteryChargingPower ? $powerandBatteryChargingPower->value : '' }}

                                    </div>
                                </div>
                                <div class="col-md-6 col-lg-4">
                                    <div class="form-group-default">
                                        <label for="video_playback">Video Playback</label>

                                        {{ $powerandBatteryVideoPlayback ? $powerandBatteryVideoPlayback->value : '' }}


                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- Size and Weight -->

                        @php
                            // Retrieve all ProductDetails for Camera Specs category
                            $sizeandWeightSpecs = $product->details->where('category', 'Size_and_Weight');

                            // Retrieve specific keys (e.g., Model, Manufacturer, etc.)
                            $sizeandWeight_Height = $sizeandWeightSpecs->where('key', 'Height')->first();
                            $sizeandWeight_Width = $sizeandWeightSpecs->where('key', 'Width')->first();
                            $sizeandWeight_Weight = $sizeandWeightSpecs->where('key', 'Weight')->first();

                        @endphp
                        <h6 class="text-info p-4">Size and Weight</h6>
                        <div class="card-body">
                            <div class="row">
                                <div class="col-md-6 col-lg-4">
                                    <div class="form-group-default">
                                        <label for="height">Height</label>

                                        {{ $sizeandWeight_Height ? $sizeandWeight_Height->value : '' }}

                                    </div>
                                </div>
                                <div class="col-md-6 col-lg-4">
                                    <div class="form-group-default">
                                        <label for="width">Width</label>

                                        {{ $sizeandWeight_Width ? $sizeandWeight_Width->value : '' }}


                                    </div>
                                </div>
                                <div class="col-md-6 col-lg-4">
                                    <div class="form-group-default">
                                        <label for="weight">Weight</label>

                                        {{ $sizeandWeight_Weight ? $sizeandWeight_Weight->value : '' }}

                                    </div>
                                </div>
                            </div>
                        </div>
                        <h3 class="text-primary p-4">Product Variants</h3>
                        <div class="card-body">
                            <!-- Wrapper for dynamically added variant rows -->
                            <div id="variant-wrapper">
                                <!-- Pre-populate variants from the database -->
                                @foreach ($product->variants as $index => $variant)
                                    <div class="row variant-row mt-2">
                                        <div class="col-md-6 col-lg-4">
                                            <div class="form-group-default">
                                                <label>Model:</label>
                                                {{ json_decode($variant->model)->name }}
                                            </div>
                                        </div>
                                        <div class="col-md-6 col-lg-4">
                                            <div class="form-group-default">
                                                <label>Color:</label>
                                                {{ json_decode($variant->color)->name }}
                                            </div>
                                        </div>
                                        <div class="col-md-6 col-lg-4">
                                            <div class="form-group-default">
                                                <label>Specific Price:</label>
                                                Kes. <span>{{ $variant->specific_price }}</span>
                                            </div>
                                        </div>
                                        <div class="col-md-6 col-lg-4">
                                            <div class="form-group-default">
                                                <label for="productQuantity">Opening Product Stock:</label>
                                                {{ $variant->opening_stock_quantity }} Items
                                            </div>
                                        </div>
                                    </div>
                                @endforeach
                            </div>

                        </div>

                        <hr>
                        <h6 class="text-primary p-4">Product Avatars for Product Details Preview

                        </h6>
                        <div class="card-body">
                            <div class="row">
                                <div class="col-md-6 col-lg-4">
                                    <div class="form-group-default">
                                        <label for="productAvatar2">
                                            roduct Avatar 2 </label>

                                        <img id="imagePreview2"
                                            src="{{ $product->avatar_2 ? asset('storage/' . $product->avatar_2) : '' }}"
                                            alt="Image Preview 2"
                                            style="display: {{ $product->avatar_2 ? 'block' : 'none' }}; max-width: 30%; height: auto; margin-top: 10px;" />
                                    </div>
                                </div>
                                <div class="col-md-6 col-lg-4">
                                    <div class="form-group-default">
                                        <label for="productAvatar3">Product Avatar 3</label>


                                        <img id="imagePreview3"
                                            src="{{ $product->avatar_3 ? asset('storage/' . $product->avatar_3) : '' }}"
                                            alt="Image Preview 3"
                                            style="display: {{ $product->avatar_3 ? 'block' : 'none' }}; max-width: 30%; height: auto; margin-top: 10px;" />
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="card-body">
                            <div class="row">
                                <div class="col-md-6 col-lg-4">
                                    <div class="form-group-default">
                                        <label for="productAvatar4">Product Avatar 4 </label>


                                        <img id="imagePreview4"
                                            src="{{ $product->avatar_4 ? asset('storage/' . $product->avatar_4) : '' }}"
                                            alt="Image Preview 4"
                                            style="display: {{ $product->avatar_4 ? 'block' : 'none' }}; max-width: 30%; height: auto; margin-top: 10px;" />
                                    </div>
                                </div>
                                <div class="col-md-6 col-lg-4">
                                    <div class="form-group-default">
                                        <label for="productAvatar5">Product Avatar 5 </label>

                                        <img id="imagePreview5"
                                            src="{{ $product->avatar_5 ? asset('storage/' . $product->avatar_5) : '' }}"
                                            alt="Image Preview 5"
                                            style="display: {{ $product->avatar_5 ? 'block' : 'none' }}; max-width: 30%; height: auto; margin-top: 10px;" />
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="card-body">
                            <div class="row">
                                <div class="col-md-6 col-lg-4">
                                    <div class="form-group-default">
                                        <label for="productAvatar6">Product Avatar 6 </label>


                                        <img id="imagePreview6"
                                            src="{{ $product->avatar_6 ? asset('storage/' . $product->avatar_6) : '' }}"
                                            alt="Image Preview 6"
                                            style="display: {{ $product->avatar_6 ? 'block' : 'none' }}; max-width: 30%; height: auto; margin-top: 10px;" />
                                    </div>
                                </div>
                                <div class="col-md-6 col-lg-4">
                                    <div class="form-group-default">
                                        <label for="productAvatar7">Product Avatar 7 </label>


                                        <img id="imagePreview7"
                                            src="{{ $product->avatar_7 ? asset('storage/' . $product->avatar_7) : '' }}"
                                            alt="Image Preview 7"
                                            style="display: {{ $product->avatar_7 ? 'block' : 'none' }}; max-width: 30%; height: auto; margin-top: 10px;" />
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    @endsection

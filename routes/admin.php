<?php

use App\Http\Middleware\CheckAdmin;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\OrderController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\CustomerController;
use App\Http\Controllers\PurchaseController;
use App\Http\Controllers\SubCategoryController;
use App\Http\Controllers\CustomerServiceController;


Route::get('admin', [AdminController::class, 'index'])->name('admin.homepage.view')->middleware(['auth', 'verified', CheckAdmin::class]);


/*************************************************************
 * 
 * 
 * Super Admin of the system
 * 
 * 
 * 
 */

Route::middleware(['auth', 'verified', CheckAdmin::class])->group(function () {
    Route::get('admin/product', [ProductController::class, 'adminIndex'])->name('admin.product.index');

    // Show the form for creating a new product.
    Route::get('admin/product/create', [ProductController::class, 'create'])->name('admin.product.create');

    // Store a newly created product in storage.
    Route::post('admin/product', [ProductController::class, 'store'])->name('admin.product.store');

    // Display the specified product.
    Route::get('admin/product/{product}', [ProductController::class, 'adminShow'])->name('admin.product.show');

    // Show the form for editing the specified product.
    Route::get('admin/product/{product}/edit', [ProductController::class, 'edit'])->name('admin.product.edit');

    // Update the specified product in storage.
    Route::put('admin/product/{product}', [ProductController::class, 'update'])->name('admin.product.update');

    // Remove the specified product from storage.
    Route::delete('admin/product/{product}', [ProductController::class, 'destroy'])->name('admin.product.destroy');
    // Route::resource('admin/categories', CategoryController::class)->middleware(['auth', 'verified', CheckAdmin::class]);

    //Categories Routes 
    // Categories Routes with middleware

    // Display a listing of the categories.
    Route::get('admin/categories', [CategoryController::class, 'index'])->name('admin.categories.index');

    // Show the form for creating a new category.
    Route::get('admin/categories/create', [CategoryController::class, 'create'])->name('admin.categories.create');

    // Store a newly created category in storage.
    Route::post('admin/categories', [CategoryController::class, 'store'])->name('admin.categories.store');

    // Display the specified category.
    Route::get('admin/categories/{category}', [CategoryController::class, 'adminShow'])->name('admin.categories.show');

    // Show the form for editing the specified category.
    Route::get('admin/categories/{category}/edit', [CategoryController::class, 'edit'])->name('admin.categories.edit');

    // Update the specified category in storage.
    Route::put('admin/categories/{category}', [CategoryController::class, 'update'])->name('admin.categories.update');

    // Remove the specified category from storage.
    Route::delete('admin/categories/{category}', [CategoryController::class, 'destroy'])->name('admin.categories.destroy');


    // Route::resource('admin/subcategories', SubCategoryController::class)->middleware(['auth', 'verified', CheckAdmin::class]);

    //Sub categories Routes function () {

    // Display a listing of the subcategories.
    Route::get('admin/subcategories', [SubCategoryController::class, 'adminIndex'])->name('admin.subcategories.index');

    // Show the form for creating a new subcategory.
    Route::get('admin/subcategories/create', [SubCategoryController::class, 'create'])->name('admin.subcategories.create');

    // Store a newly created subcategory in storage.
    Route::post('admin/subcategories', [SubCategoryController::class, 'store'])->name('admin.subcategories.store');

    // Display the specified subcategory.
    Route::get('admin/subcategories/{subcategory}', [SubCategoryController::class, 'adminShow'])->name('admin.subcategories.show');

    // Show the form for editing the specified subcategory.
    Route::get('admin/subcategories/{subcategory}/edit', [SubCategoryController::class, 'edit'])->name('admin.subcategories.edit');

    // Update the specified subcategory in storage.
    Route::put('admin/subcategories/{subcategory}', [SubCategoryController::class, 'update'])->name('admin.subcategories.update');

    // Remove the specified subcategory from storage.
    Route::delete('admin/subcategories/{subcategory}', [SubCategoryController::class, 'destroy'])->name('admin.subcategories.destroy');





    // Display a listing of the customer services for the admin.
    Route::get('admin/customer-services', [CustomerServiceController::class, 'adminIndex'])->name('admin.customer-services.index');

    // Show the form for creating a new customer service.
    Route::get('admin/customer-services/create', [CustomerServiceController::class, 'create'])->name('admin.customer-services.create');

    // Store a newly created customer service in storage.
    Route::post('admin/customer-services', [CustomerServiceController::class, 'store'])->name('admin.customer-services.store');

    // Display the specified customer service for the admin.
    Route::get('admin/customer-services/{customerService}', [CustomerServiceController::class, 'adminShow'])->name('admin.customer-services.show');

    // Show the form for editing the specified customer service.
    Route::get('admin/customer-services/{customerService}/edit', [CustomerServiceController::class, 'edit'])->name('admin.customer-services.edit');

    // Update the specified customer service in storage.
    Route::put('admin/customer-services/{customerService}', [CustomerServiceController::class, 'update'])->name('admin.customer-services.update');

    // Remove the specified customer service from storage.
    Route::delete('admin/customer-services/{customerService}', [CustomerServiceController::class, 'destroy'])->name('admin.customer-services.destroy');

    // Display all orders (Admin)
    Route::get('admin/orders', [OrderController::class, 'index'])->name('admin.orders.index');

    Route::get('admin/orders/reports', [OrderController::class, 'index'])->name('admin.orders.reports');

    // Show form to create a new order (Customer)
    Route::get('orders/create', [OrderController::class, 'create'])->name('admin.orders.create');

    // Store a new order (Customer)
    Route::post('orders', [OrderController::class, 'store'])->name('admin.orders.store');

    // Display specific order details (Customer and Admin)
    Route::get('orders/{order}', [OrderController::class, 'show'])->name('admin.orders.show');

    // Show form for editing an order (Admin)
    Route::get('admin/orders/{order}/edit', [OrderController::class, 'edit'])->name('admin.orders.edit');

    // Update specific order (Admin)
    Route::put('admin/orders/{order}', [OrderController::class, 'update'])->name('admin.orders.update');

    // Delete specific order (Admin)
    Route::delete('admin/orders/{order}', [OrderController::class, 'destroy'])->name('admin.orders.destroy');


    Route::get('purchases', [PurchaseController::class, 'index'])->name('admin.purchases.index');

    Route::get('purchases/create', [PurchaseController::class, 'create'])->name('admin.purchases.create');

    Route::post('purchases', [PurchaseController::class, 'store'])->name('admin.purchases.store');

    Route::get('purchases/{purchase}', [PurchaseController::class, 'show'])->name('admin.purchases.show');

    Route::get('purchases/{purchase}/edit', [PurchaseController::class, 'edit'])->name('admin.purchases.edit');

    Route::put('purchases/{purchase}', [PurchaseController::class, 'update'])->name('admin.purchases.update');

    Route::delete('purchases/{purchase}', [PurchaseController::class, 'destroy'])->name('admin.purchases.destroy');
});
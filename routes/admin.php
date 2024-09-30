<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\SubCategoryController;
use App\Http\Middleware\CheckAdmin;
use Illuminate\Support\Facades\Route;


Route::get('admin', [AdminController::class, 'index'])->name('admin.homepage.view')->middleware(['auth', 'verified', CheckAdmin::class]);


// Route::resource('admin/categories', CategoryController::class)->middleware(['auth', 'verified', CheckAdmin::class]);

//Categories Routes 
// Categories Routes with middleware
Route::middleware(['auth', 'verified', CheckAdmin::class])->group(function () {

    // Display a listing of the categories.
    Route::get('admin/categories', [CategoryController::class, 'adminIndex'])->name('admin.categories.index');

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
});



// Route::resource('admin/subcategories', SubCategoryController::class)->middleware(['auth', 'verified', CheckAdmin::class]);

//Sub categories Routes 


Route::middleware(['auth', 'verified', CheckAdmin::class])->group(function () {

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
});
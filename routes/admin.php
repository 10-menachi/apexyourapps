<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\CustomerController;
use App\Http\Controllers\SubCategoryController;
use App\Http\Middleware\CheckAdmin;
use Illuminate\Support\Facades\Route;


Route::get('admin/categories', [CategoryController::class, 'index'])->middleware(['auth', 'verified', CheckAdmin::class])->name('admin.categories');
Route::post('admin/categories/store', [CategoryController::class, 'store'])->middleware(['auth', 'verified', CheckAdmin::class])->name('admin.categories.store');
Route::get('admin/categories/{category}/edit', [CategoryController::class, 'edit'])->middleware(['auth', 'verified', CheckAdmin::class])->name('admin.categories.edit');
Route::put('admin/categories/{category}', [CategoryController::class, 'update'])->middleware(['auth', 'verified', CheckAdmin::class])->name('admin.categories.update');
Route::delete('admin/categories/{category}', [CategoryController::class, 'destroy'])->middleware(['auth', 'verified', CheckAdmin::class])->name('admin.categories.destroy');


Route::resource('subcategories', SubCategoryController::class)->middleware(['auth', 'verified', CheckAdmin::class]);


Route::get('admin', [AdminController::class, 'index'])->middleware(['auth', 'verified', CheckAdmin::class])->name('admin.dashboard');
Route::get('customer', [CustomerController::class, 'index'])->middleware(['auth', 'verified', CheckAdmin::class])->name('customer.index');
Route::get('customer/create', [CustomerController::class, 'create'])->middleware(['auth', 'verified', CheckAdmin::class])->name('customer.create');

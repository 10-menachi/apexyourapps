<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\SubCategoryController;
use App\Http\Middleware\CheckAdmin;
use Illuminate\Support\Facades\Route;


Route::get('admin', [AdminController::class, 'index'])->name('admin.homepage.view')->middleware(['auth', 'verified', CheckAdmin::class]);
Route::resource('categories', CategoryController::class)->middleware(['auth', 'verified', CheckAdmin::class]);
Route::resource('subcategories', SubCategoryController::class)->middleware(['auth', 'verified', CheckAdmin::class]);


Route::get('admin/index2', [AdminController::class, 'indexTwo']);
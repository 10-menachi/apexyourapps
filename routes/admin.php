<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\SubCategoryController;
use App\Http\Middleware\CheckAdmin;
use Illuminate\Support\Facades\Route;

Route::resource('admin', AdminController::class)->middleware(['auth', 'verified', CheckAdmin::class]);
Route::resource('categories', CategoryController::class)->middleware(['auth', 'verified', CheckAdmin::class]);
Route::resource('subcategories', SubCategoryController::class)->middleware(['auth', 'verified', CheckAdmin::class]);

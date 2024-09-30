<?php

use App\Models\Category;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\CategoryController;

Route::get('cart', function () {
    return view('cart');
})->name('cart');

Route::get('shop', function () {
    return view('shop');
})->name('shop');

Route::get('about', function () {
    return view('about');
})->name('about');

Route::get('contact', function () {
    return view('contact');
})->name('contact');

// Route::resource('product', ProductController::class);

//Product Controller Routes 
/*************************************************************
 * 
 * 
 * Customer  and guests user of the system
 * 
 * 
 */

Route::get('product', [ProductController::class, 'index'])->name('product.index');

// Display the specified product.
Route::get('product/{product}', [ProductController::class, 'show'])->name('product.show');

/*************************************************************
 * 
 * 
 * Super Admin of the system
 * 
 * 
 * 
 */
Route::get('admin/product', [ProductController::class, 'adminIndex'])->name('admin.product.store');

// Show the form for creating a new product.
Route::get('admin/product/create', [ProductController::class, 'create'])->name('admin.product.store');

// Store a newly created product in storage.
Route::post('admin/product', [ProductController::class, 'store'])->name('admin.product.store');

// Display the specified product.
Route::get('admin/product/{product}', [ProductController::class, 'adminShow'])->name('admin.product.show');

// Show the form for editing the specified product.
Route::get('admin/product/{product}/edit', [ProductController::class, 'edit'])->name('admin.product.store');

// Update the specified product in storage.
Route::put('admin/product/{product}', [ProductController::class, 'update'])->name('admin.product.update');

// Remove the specified product from storage.
Route::delete('admin/product/{product}', [ProductController::class, 'destroy'])->name('admin.product.destroy');




Route::get('privacy-policy', function () {
    return view('privacy-policy');
})->name('privacy-policy');

Route::get('/dashboard', function () {
    $categories = Category::all();
    return view('home-electronics', compact('categories'));
})->name('dashboard');

require __DIR__ . '/auth.php';
require __DIR__ . '/account.php';
require __DIR__ . '/admin.php';


Route::get('/', [HomeController::class, 'index'])->name('homepage.view');
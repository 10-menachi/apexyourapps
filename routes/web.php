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

Route::resource('product', ProductController::class);

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

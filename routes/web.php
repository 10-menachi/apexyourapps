<?php

use App\Http\Controllers\CategoriesController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;

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

Route::resource('categories', CategoriesController::class);

Route::get('privacy-policy', function () {
    return view('privacy-policy');
})->name('privacy-policy');

Route::get('/dashboard', function () {
    return redirect()->route('homepage.view');
})->name('dashboard');

require __DIR__ . '/auth.php';
require __DIR__ . '/account.php';


Route::get('/', [HomeController::class, 'index'])->name('homepage.view');

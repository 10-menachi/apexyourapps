<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProfileController;

Route::get('favorites', function () {
    return view('favorites');
})->name('favorites');

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

Route::get('orders', function () {
    return view('orders');
})->name('orders');

Route::get('categories', function () {
    return view('categories');
})->name('categories');

Route::get('privacy-policy', function () {
    return view('privacy-policy');
})->name('privacy-policy');

Route::get('/dashboard', function () {
    return view('home-electronics');
})->name('dashboard');

Route::get('/payment-methods', function () {
    return view('payment-methods');
})->name('payment-methods');

Route::get('/reviews', function () {
    return view('reviews');
})->name('reviews');

Route::get('/addresses', function () {
    return view('addresses');
})->name('addresses');

Route::get('/notifications', function () {
    return view('notifications');
})->name('notifications');

Route::get('/help', function () {
    return view('help');
})->name('help');

Route::get('/terms-conditions', function () {
    return view('terms-conditions');
})->name('terms-conditions');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__ . '/auth.php';


Route::get('/', [HomeController::class, 'index'])->name('homepage.view');

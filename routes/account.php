<?php

use App\Http\Controllers\AddressesController;
use App\Http\Controllers\ProfileController;
use App\Models\Category;
use Illuminate\Support\Facades\Route;

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
    Route::get('orders', function () {
        $categories = Category::all();
        return view('profile.orders', compact('categories'));
    })->name('orders');

    Route::get('favorites', function () {
        $categories = Category::all();
        return view('profile.favorites', compact('categories'));
    })->name('favorites');

    Route::get('/payment-methods', function () {
        return view('profile.payment-methods');
    })->name('payment-methods');

    Route::get('/reviews', function () {
        return view('profile.reviews');
    })->name('reviews');

    Route::resource('/addresses', AddressesController::class);

    Route::get('/notifications', function () {
        return view('profile.notifications');
    })->name('notifications');

    Route::get('/help', function () {
        return view('profile.help');
    })->name('help');

    Route::get('/terms-conditions', function () {
        return view('profile.terms-conditions');
    })->name('terms-conditions');
});

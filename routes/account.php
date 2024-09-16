<?php

use App\Http\Controllers\AddressesController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
    Route::get('orders', function () {
        return view('profile.orders');
    })->name('orders');

    Route::get('favorites', function () {
        return view('profile.favorites');
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

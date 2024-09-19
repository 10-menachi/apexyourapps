<?php

use App\Http\Controllers\AdminController;
use App\Http\Middleware\CheckAdmin;
use Illuminate\Support\Facades\Route;

Route::resource('admin', AdminController::class)->middleware(['auth', 'verified', CheckAdmin::class]);

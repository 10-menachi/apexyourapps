<?php

use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');

Route::get('/cat/{id}', function ($id) {
    $category = Category::findOrFail($id);
    return response()->json($category->subcategories);
});

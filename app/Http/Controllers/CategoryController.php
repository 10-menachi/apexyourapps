<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Str;

class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $categories = Category::all();

        return view('categories.index', compact('categories'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        try {

            $data = $request->all();

            $validator = Validator::make($data, [
                'name' => 'required|string|max:255',
                'description' => 'required|string',
                'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg,webp|max:2048',
            ]);

            if ($validator->fails()) {
                Log::info('STORE CATEGORY VALIDATION FAILED');
                Log::error($validator->errors());
                return back()->withErrors($validator)->withInput();
            }

            $slug = Str::slug($data['name']);

            $image = $request->file('image');

            $image_name = $slug . '.' . $image->extension();

            $image->move(public_path('images/categories'), $image_name);

            Category::create([
                'name' => $data['name'],
                'slug' => $slug,
                'description' => $data['description'],
                'image' => $image_name,
            ]);

            return back()->with('success', 'Category created successfully');
        } catch (Exception $e) {
            Log::info('STORE CATEGORY EXCEPTION');
            Log::error($e);
            return back()->with('error', 'Error creating category');
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(Category $category)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Category $category)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Category $category)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Category $category)
    {
        //
    }
}

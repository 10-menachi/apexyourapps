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

            Log::info('STORE CATEGORY REQUEST DATA');
            Log::info($data);

            $validator = Validator::make($data, [
                'name' => 'required|string|max:255',
                'description' => 'required|string',
                'image' => 'required|image|max:2048',
            ]);

            if ($validator->fails()) {
                Log::info('STORE CATEGORY VALIDATION FAILED');
                Log::error($validator->errors());
                return back()->withErrors($validator)->withInput();
            }

            $slug = Str::slug($data['name']);

            $image = $request->file('image');

            $image_name = $slug . '.' . $image->extension();

            // Store the image in the storage/app/public/images/categories directory
            $image->storeAs('images/categories', $image_name, 'public');

            // Update the image path to be the public URL
            $image_path = 'storage/images/categories/' . $image_name;

            Category::create([
                'name' => $data['name'],
                'slug' => $slug,
                'description' => $data['description'],
                'image' => $image_path,  // Save the path to the database
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
     * Update the specified resource in storage.
     */
    public function update(Request $request, Category $category)
    {
        try {
            $data = $request->all();

            // Update category information except the image
            $category->update([
                'name' => $data['name'],
                'description' => $data['description'],
            ]);

            // Check if there's a new image uploaded
            if ($request->hasFile('image')) {
                $image = $request->file('image');
                $image_name = $category->slug . '.' . $image->extension();

                // Store the image in the storage/app/public/images/categories directory
                $image->storeAs('images/categories', $image_name, 'public');

                // Update the image path to be the public URL
                $image_path = 'storage/images/categories/' . $image_name;

                // Update the category with the new image path
                $category->update([
                    'image' => $image_path,
                ]);
            }

            return back()->with('success', 'Category updated successfully');
        } catch (Exception $e) {
            Log::info('UPDATE CATEGORY EXCEPTION');
            Log::error($e);
            return back()->with('error', 'Error updating category');
        }
    }


    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Category $category)
    {
        try {
            $category->delete();
            return back()->with('success', 'Category deleted successfully');
        } catch (Exception $e) {
            Log::info('DELETE CATEGORY EXCEPTION');
            Log::error($e);
            return back()->with('error', 'Error deleting category');
        }
    }
}

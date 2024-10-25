<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Product;
use App\Models\SubCategory;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Validator;

class ProductController extends Controller
{

    /*************************************************************
     * 
     * Customer and guests user of the system
     * 
     *************************************************************/

    // Display a listing of the products.
    public function index()
    {
        $products = Product::all();
        return view('products.index', compact('products'));
    }

    // Display the specified product.
    public function show($id)
    {
        $product = Product::findOrFail($id);
        return view('products.show', compact('product'));
    }

    /*************************************************************
     * 
     * Super Admin of the system
     * 
     *************************************************************/

    // Display a listing of the products for the admin.
    public function adminIndex()
    {
        $products = Product::all();
        $categories = Category::all();
        $subcategories = SubCategory::all();
        if (Auth::user()->role == 'admin') {
            return view('products.admin.index', compact('products', 'categories', 'subcategories'));
        }
        return view('product.index', compact('products', 'categories'));
    }

    // Show the form for creating a new product.
    public function create()
    {
        try {
            if (Auth::user()->role == 'admin') {
                $categories = Category::all();
                $subcategories = SubCategory::all();
                return view('products.admin.create', compact('categories', 'subcategories'));
            } else {
                return redirect()->back()->with('error', 'Unauthorized');
            }
        } catch (Exception $e) {
            return redirect()->route('product.index');
        }
    }

    // Store a newly created product in storage.
    public function store(Request $request)
    {
        try {
            $data = $request->all();
            Log::info('PRODUCT DATA');
            Log::info($data);

            $validator = Validator::make($data, [
                'category_id' => 'required|integer|exists:product_categories,id',
                'subcategory_id' => 'required|integer|exists:sub_categories,id',
                'name' => 'required|string|max:255',
                'price' => 'required|numeric',
                'description' => 'required|string',
                'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg,webp|max:2048',
            ]);

            if ($validator->fails()) {
                Log::error('VALIDATION ERROR');
                Log::error($validator->errors());
                return redirect()->back()->withErrors($validator)->withInput();
            }

            $name = $request->name;

            if ($request->hasFile('image')) {
                $imageFile = $request->file('image');
                $imageExtension = $imageFile->getClientOriginalExtension();
                $imageFileName = "{$name}.{$imageExtension}";
                $imagePath = $imageFile->storeAs('uploads/products/', $imageFileName, 'public');
            }

            Product::create([
                'category_id' => $request->category_id,
                'subcategory_id' => $request->subcategory_id,
                'name' => $request->name,
                'price' => $request->price,
                'description' => $request->description,
                'image' => $imagePath,
            ]);

            return redirect()->route('admin.product.index')->with('success', 'Product created successfully');
        } catch (Exception $e) {
            Log::error('STORE PRODUCT ERROR');
            Log::error($e);
            return redirect()->back()->with('error', 'Something went wrong');
        }
    }

    // Display the specified product for the admin.
    public function adminShow($id)
    {
        $product = Product::findOrFail($id);
        return view('admin.products.show', compact('product'));
    }

    // Show the form for editing the specified product.
    public function edit($id)
    {
        $product = Product::findOrFail($id);
        return view('admin.products.edit', compact('product'));
    }

    // Update the specified product in storage.
    public function update(Request $request, $id)
    {
        $request->validate([
            'name' => 'required',
            'description' => 'required',
            'price' => 'required|numeric',
        ]);

        $product = Product::findOrFail($id);
        $product->name = $request->name;
        $product->description = $request->description;
        $product->price = $request->price;
        $product->save();

        return redirect()->route('admin.product.update', $product->id)->with('success', 'Product updated successfully.');
    }

    // Remove the specified product from storage.
    public function destroy($id)
    {
        $product = Product::findOrFail($id);
        $product->delete();

        return redirect()->route('admin.product.destroy')->with('success', 'Product deleted successfully.');
    }
}

<?php

namespace App\Http\Controllers;

use Exception;
use App\Models\ApexTag;
use App\Models\Product;
use App\Models\Category;
use App\Models\ProductTag;
use App\Models\SubCategory;
use App\Models\ProductColor;
use App\Models\ProductModel;
use Illuminate\Http\Request;
use App\Models\ProductDetail;
use App\Models\ProductVariant;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;
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
        $tags = ApexTag::all();
        if (Auth::user()->role == 'admin') {
            return view('products.admin.index', compact('products', 'categories', 'subcategories', 'tags'));
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
                $tags = ApexTag::all();
                $models = ProductModel::all(); // Fetch all available models
                $colors = ProductColor::all(); // Fetch all available colors
                return view('products.admin.create', compact('categories', 'subcategories', 'tags', 'models', 'colors'));
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
            // Step 1: Validate the request
            $data = $request->all();
            Log::info('PRODUCT DATA Raw From the Form: ', $data);

            $data = $request->all();

            $validator = Validator::make($data, [
                'category_id' => 'required|integer|exists:product_categories,id',
                'subcategory_id' => 'required|integer|exists:sub_categories,id',
                'name' => 'required|string|max:255',
                'warranty' => 'required|string',
                'description' => 'required|string',
                'sku' => 'nullable|string',
                'tag_id' => 'nullable|integer|exists:tags,id',
                'product_details' => 'required|array',
                'product_details.*.*' => 'nullable|string',
                'variants' => 'required|array',
                'variants.*.product_model_id' => 'required|integer|exists:product_models,id',
                'variants.*.product_color_id' => 'required|integer|exists:product_colors,id',
                'variants.*.specific_price' => 'required|numeric',
                'product_main_avatar' => 'required|image|mimes:jpeg,png,jpg,gif,svg,webp|max:2048',
                'product_main_avatar_2' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg,webp|max:2048',
                'product_main_avatar_3' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg,webp|max:2048',
                'product_main_avatar_4' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg,webp|max:2048',
                'product_main_avatar_5' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg,webp|max:2048',
                'product_main_avatar_6' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg,webp|max:2048',
                'product_main_avatar_7' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg,webp|max:2048',
            ]);

            if ($validator->fails()) {
                Log::error('VALIDATION ERROR');
                Log::error($validator->errors());
                // return redirect()->back()->with('error', $validator->errors()->first())->withInput();
                return redirect()->back()->withErrors($validator)->withInput();

            }
            // Step 2: Handle Image Uploads Dynamically (Same as previous)

            $imagePaths = [];
            $avatars = [
                'product_main_avatar',
                'product_main_avatar_2',
                'product_main_avatar_3',
                'product_main_avatar_4',
                'product_main_avatar_5',
                'product_main_avatar_6',
                'product_main_avatar_7'
            ];

            foreach ($avatars as $avatar) {
                if ($request->hasFile($avatar)) {
                    $imageFile = $request->file($avatar);
                    $imageExtension = $imageFile->getClientOriginalExtension();
                    $imageFileName = "{$request->name}_{$avatar}.{$imageExtension}";
                    $storagePath = $imageFile->storeAs("uploads/product_avatars/", $imageFileName, 'public');
                    $publicPath = public_path("uploads/product_avatars/{$imageFileName}");

                    if (!file_exists(public_path("uploads/product_avatars/"))) {
                        mkdir(public_path("uploads/product_avatars/"), 0755, true);
                    }

                    copy(storage_path("app/public/uploads/product_avatars/{$imageFileName}"), $publicPath);
                    $imagePaths[$avatar] = [
                        'storage_path' => $storagePath,
                        'public_path' => "uploads/product_avatars/{$imageFileName}",
                        'url' => asset("uploads/product_avatars/{$imageFileName}")
                    ];
                }
            }

            // Step 3: Store the Product
            $product = Product::create([
                'subcategory_id' => $request->subcategory_id,
                'name' => $request->name,
                'description' => $request->description,
                'price' => $request->price,
                'warranty' => $request->warranty,
                'qr_code' => $request->qr_code,
                'sku' => $request->sku,
                'payment_and_credit' => $request->payment_and_credit,
                'main_avatar' => $imagePaths['product_main_avatar']['public_path'] ?? null,
                'avatar_2' => $imagePaths['product_main_avatar_2']['public_path'] ?? null,
                'avatar_3' => $imagePaths['product_main_avatar_3']['public_path'] ?? null,
                'avatar_4' => $imagePaths['product_main_avatar_4']['public_path'] ?? null,
                'avatar_5' => $imagePaths['product_main_avatar_5']['public_path'] ?? null,
                'avatar_6' => $imagePaths['product_main_avatar_6']['public_path'] ?? null,
                'avatar_7' => $imagePaths['product_main_avatar_7']['public_path'] ?? null,
                'tag_id' => $request->tag_id,
                'featured' => $request->featured,
            ]);

            // Step 4: Store the Product Details
            $productDetails = $request->product_details;
            foreach ($productDetails as $category => $details) {
                foreach ($details as $key => $value) {
                    ProductDetail::create([
                        'product_id' => $product->id,
                        'category' => $category,
                        'key' => $key,
                        'value' => $value,
                    ]);
                }
            }

            // Step 5: Store the Product Variant
            $productVariants = $request->get('variants'); //access 'variants'
            if (is_array($productVariants)) {
                foreach ($productVariants as $variant) {
                    ProductVariant::create([
                        'product_id' => $product->id,
                        'product_model_id' => $variant['product_model_id'],
                        'product_color_id' => $variant['product_color_id'],
                        'specific_price' => $variant['specific_price'],
                        'opening_stock_quantity' => $variant['opening_stock_quantity']
                    ]);
                }
            } else {
                Log::error('Variants data is missing or is not an array');
                // Optionally, handle this case, such as returning a validation error
            }


            // Step 6: Store the Product Tag
            if ($request->has('tag_id')) {
                ProductTag::create([
                    'product_id' => $product->id,
                    'tag_id' => $request->tag_id,
                ]);
            }

            // Step 7: Return Success
            return redirect()->route('admin.product.index')->with('success', 'Product created successfully.');

        } catch (Exception $e) {
            // Log the error
            Log::error('STORE PRODUCT ERROR', ['error' => $e->getMessage()]);
            return redirect()->route('product.index');
        }
    }


    // Display the specified product for the admin.
    public function adminShow($id)
    {
        $product = Product::findOrFail($id);
        return view('admin.products.show', compact('product'));
    }

    // Show the form for editing the specified product.
    public function edit($product)
    {
        Log::info('product being edit is : ');
        Log::info($product);

        try {
            if (Auth::user()->role == 'admin') {
                $product = Product::findOrFail($product);
                $categories = Category::all();
                $subcategories = SubCategory::all();
                $tags = ApexTag::all();
                $models = ProductModel::all(); // Fetch all available models
                $colors = ProductColor::all(); // Fetch all available colors
                return view('products.admin.edit', compact('product', 'categories', 'subcategories', 'tags', 'models', 'colors'));
            } else {
                return redirect()->back()->with('error', 'Unauthorized');
            }
        } catch (Exception $e) {
            // Log the error
            Log::error('EDIT PRODUCT ERROR', ['error' => $e->getMessage()]);
            
            return redirect()->route('admin.product.index');
        }
    }

    // Update the specified product in storage.
    public function update(Request $request, $id)
    {
        try {
            // Step 1: Validate the request
            $data = $request->all();
            Log::info('PRODUCT DATA Raw From the Update Product Form: ', $data);

            $validator = Validator::make($data, [
                'category_id' => 'required|integer|exists:product_categories,id',
                'subcategory_id' => 'required|integer|exists:sub_categories,id',
                'name' => 'required|string|max:255',
                'description' => 'required|string',
                'sku' => 'nullable|string',
                'tag_id' => 'nullable|integer|exists:tags,id',
                'product_details' => 'required|array',
                'product_details.*.*' => 'nullable|string',
                'variants' => 'required|array',
                'variants.*.product_model_id' => 'required|integer|exists:product_models,id',
                'variants.*.product_color_id' => 'required|integer|exists:product_colors,id',
                'variants.*.specific_price' => 'required|numeric',
                'product_main_avatar' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg,webp|max:2048',
                'product_main_avatar_2' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg,webp|max:2048',
                'product_main_avatar_3' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg,webp|max:2048',
                'product_main_avatar_4' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg,webp|max:2048',
                'product_main_avatar_5' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg,webp|max:2048',
                'product_main_avatar_6' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg,webp|max:2048',
                'product_main_avatar_7' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg,webp|max:2048',
            ]);

            if ($validator->fails()) {
                Log::error('VALIDATION ERROR');
                Log::error($validator->errors());
                return redirect()->back()->withErrors($validator)->withInput();
            }

            // Step 2: Find the product
            $product = Product::findOrFail($id);

            // Step 3: Handle Image Uploads Dynamically (Same as previous)
            $imagePaths = [];
            $avatars = [
                'product_main_avatar',
                'product_main_avatar_2',
                'product_main_avatar_3',
                'product_main_avatar_4',
                'product_main_avatar_5',
                'product_main_avatar_6',
                'product_main_avatar_7'
            ];

            foreach ($avatars as $avatar) {
                if ($request->hasFile($avatar)) {
                    $imageFile = $request->file($avatar);
                    $imageExtension = $imageFile->getClientOriginalExtension();
                    $imageFileName = "{$request->name}_{$avatar}.{$imageExtension}";
                    $storagePath = $imageFile->storeAs("uploads/product_avatars/", $imageFileName, 'public');
                    $publicPath = public_path("uploads/product_avatars/{$imageFileName}");

                    if (!file_exists(public_path("uploads/product_avatars/"))) {
                        mkdir(public_path("uploads/product_avatars/"), 0755, true);
                    }

                    copy(storage_path("app/public/uploads/product_avatars/{$imageFileName}"), $publicPath);
                    $imagePaths[$avatar] = [
                        'storage_path' => $storagePath,
                        'public_path' => "uploads/product_avatars/{$imageFileName}",
                        'url' => asset("uploads/product_avatars/{$imageFileName}")
                    ];
                }
            }

            // Step 4: Update the Product
            $product->update([
                'subcategory_id' => $request->subcategory_id,
                'name' => $request->name,
                'description' => $request->description,
                'price' => $request->price,
                'warranty' => $request->warranty,
                'qr_code' => $request->qr_code,
                'sku' => $request->sku,
                'payment_and_credit' => $request->payment_and_credit,
                'main_avatar' => $imagePaths['product_main_avatar']['public_path'] ?? $product->main_avatar,
                'avatar_2' => $imagePaths['product_main_avatar_2']['public_path'] ?? $product->avatar_2,
                'avatar_3' => $imagePaths['product_main_avatar_3']['public_path'] ?? $product->avatar_3,
                'avatar_4' => $imagePaths['product_main_avatar_4']['public_path'] ?? $product->avatar_4,
                'avatar_5' => $imagePaths['product_main_avatar_5']['public_path'] ?? $product->avatar_5,
                'avatar_6' => $imagePaths['product_main_avatar_6']['public_path'] ?? $product->avatar_6,
                'avatar_7' => $imagePaths['product_main_avatar_7']['public_path'] ?? $product->avatar_7,
                'tag_id' => $request->tag_id,
                'featured' => $request->featured,
            ]);

            // Step 5: Update the Product Details
            $productDetails = $request->product_details;
            foreach ($productDetails as $category => $details) {
                foreach ($details as $key => $value) {
                    $productDetail = ProductDetail::where('product_id', $product->id)
                        ->where('category', $category)
                        ->where('key', $key)
                        ->first();

                    if ($productDetail) {
                        $productDetail->update(['value' => $value]);
                    } else {
                        ProductDetail::create([
                            'product_id' => $product->id,
                            'category' => $category,
                            'key' => $key,
                            'value' => $value,
                        ]);
                    }
                }
            }

            // Step 6: Update the Product Variants
            $productVariants = $request->get('variants');
            ProductVariant::where('product_id', $product->id)->delete();

            if (is_array($productVariants)) {
                foreach ($productVariants as $variant) {
                    ProductVariant::create([
                        'product_id' => $product->id,
                        'product_model_id' => $variant['product_model_id'],
                        'product_color_id' => $variant['product_color_id'],
                        'specific_price' => $variant['specific_price'],
                        'opening_stock_quantity' => $variant['opening_stock_quantity']
                    ]);
                }
            } else {
                Log::error('Variants data is missing or is not an array');
            }

            // Step 7: Update the Product Tag
            if ($request->has('tag_id')) {
                $productTag = ProductTag::where('product_id', $product->id)->first();
                if ($productTag) {
                    $productTag->update(['tag_id' => $request->tag_id]);
                } else {
                    ProductTag::create([
                        'product_id' => $product->id,
                        'tag_id' => $request->tag_id,
                    ]);
                }
            }

            // Step 8: Return Success
            return redirect()->route('admin.product.index')->with('success', 'Product updated successfully.');

        } catch (Exception $e) {
            // Log the error
            Log::error('UPDATE PRODUCT ERROR', ['error' => $e->getMessage()]);
            return redirect()->route('product.index');
        }
    }


    // Remove the specified product from storage.
    public function destroy($id)
    {
        $product = Product::findOrFail($id);
        $product->delete();

        return redirect()->route('admin.product.destroy')->with('success', 'Product deleted successfully.');
    }
}
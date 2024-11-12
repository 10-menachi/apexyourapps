<?php
namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Product;
use App\Models\PorductReview;
use App\Models\ProductDetail;


class ProductSeeder extends Seeder
{
    public function run()
    {
        $subcategory_id = 1;

        // Create a sample product
        $product = Product::create([
            'subcategory_id' => $subcategory_id,
            'name' => 'iPhone 13',
            'description' => 'The latest iPhone model with advanced features and improved performance.',
            'price' => 999.99,
            'model' => 'iPhone 13',
            'color' => 'Blue',
            'warranty' => '1 Year',
            'payment_and_credit' => 'Available',
            'image' => 'iphone13.png',
            'featured' => true,
        ]);

        // Adding product General Specs
        ProductDetail::create([
            'product_id' => $product->id,
            'category' => 'General Specs',
            'key' => 'model',
            'value' => 'iPhone 13',
        ]);

        ProductDetail::create([
            'product_id' => $product->id,
            'category' => 'General Specs',
            'key' => 'manufacturer',
            'value' => 'Apple',
        ]);


        ProductDetail::create([
            'product_id' => $product->id,
            'category' => 'General Specs',
            'key' => 'finish',
            'value' => 'Ceramic, Glass, Aluminium',
        ]);

        ProductDetail::create([
            'product_id' => $product->id,
            'category' => 'General Specs',
            'key' => 'Capacity',
            'value' => '128GB',
        ]);


        ProductDetail::create([
            'product_id' => $product->id,
            'category' => 'General Specs',
            'key' => 'Chip',
            'value' => 'A15 Bionic chip',
        ]);



        // Adding product Display
        ProductDetail::create([
            'product_id' => $product->id,
            'category' => 'Display',
            'key' => 'diagonal',
            'value' => '6.1 inches',
        ]);
        ProductDetail::create([
            'product_id' => $product->id,
            'category' => 'Display',
            'key' => 'Screen type',
            'value' => 'Super Retina XDR',
        ]);
        ProductDetail::create([
            'product_id' => $product->id,
            'category' => 'Display',
            'key' => 'Resolution',
            'value' => '778x1284px at 458ppi',
        ]);
        ProductDetail::create([
            'product_id' => $product->id,
            'category' => 'Display',
            'key' => 'Refresh rate',
            'value' => '120 Hz',
        ]);



        // Adding product Power and Battery
        ProductDetail::create([
            'product_id' => $product->id,
            'category' => 'Power and Battery',
            'key' => 'Fast charging:',
            'value' => 'Yes',
        ]);
        ProductDetail::create([
            'product_id' => $product->id,
            'category' => 'Power and Battery',
            'key' => 'Wireless charging',
            'value' => 'Yes',
        ]);
        ProductDetail::create([
            'product_id' => $product->id,
            'category' => 'Power and Battery',
            'key' => 'Charging power',
            'value' => 'up to 15W',
        ]);
        ProductDetail::create([
            'product_id' => $product->id,
            'category' => 'Power and Battery',
            'key' => 'Video playback',
            'value' => 'Up to 26 hours',
        ]);
        ProductDetail::create([
            'product_id' => $product->id,
            'category' => 'Power and Battery',
            'key' => 'Audio playback',
            'value' => 'Up to 100 hours',
        ]);


        // Adding product Size and Weight      
        ProductDetail::create([
            'product_id' => $product->id,
            'category' => 'Size and Weight',
            'key' => 'Height:
',
            'value' => '160.8 mm',
        ]);
        ProductDetail::create([
            'product_id' => $product->id,
            'category' => 'Size and Weight',
            'key' => 'Width',
            'value' => '78.1 mm',
        ]);

        ProductDetail::create([
            'product_id' => $product->id,
            'category' => 'Size and Weight',
            'key' => 'Weight',
            'value' => '203 grams',
        ]);



        // Adding a product review
        PorductReview::create([
            'product_id' => $product->id,
            'rating' => 5,
            'comment' => 'Excellent phone with impressive features!',
            'user_name' => 'Jane Doe',
        ]);

    }
}
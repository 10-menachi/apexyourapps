<?php
namespace Database\Seeders;

use App\Models\Product;
use App\Models\ProductDetail;
use App\Models\ProductReview;
use App\Models\ProductVariant;
use Illuminate\Database\Seeder;
use phpDocumentor\Reflection\Types\Nullable;


class ProductSeeder extends Seeder
{
    public function run()
    {
        $subcategory_id = 1;
        $tag_id = 1;

        // Create a sample product
        $product = Product::create([
            'subcategory_id' => $subcategory_id,
            'name' => 'iPhone 13',
            'description' => 'The latest iPhone model with advanced features and improved performance.',
            'warranty' => '1 Year',
            'payment_and_credit' => 'Available',
            'main_avatar' => 'iphone13.png',
            'qr_code' => 'QWECV#VDIVJEW0IGU9EGOPPDCVH',
            'sku' => 'IP13-128GB-BLK',
            'avatar_2' => 'iphone13_avatar2.png',
            'avatar_3' => 'iphone13_avatar3.png',
            'avatar_4' => 'iphone13_avatar4.png',
            'avatar_5' => 'iphone13_avatar5.png',
            'avatar_6' => 'iphone13_avatar6.png',
            'avatar_7' => 'iphone13_avatar7.png',
            'tag_id' => $tag_id, 
            'featured' => true,            
        ]);

        // Adding product General_Specs
        ProductDetail::create([
            'product_id' => $product->id,
            'category' => 'General_Specs',
            'key' => 'model',
            'value' => 'iPhone 13',
        ]);

        ProductDetail::create([
            'product_id' => $product->id,
            'category' => 'General_Specs',
            'key' => 'manufacturer',
            'value' => 'Apple',
        ]);


        ProductDetail::create([
            'product_id' => $product->id,
            'category' => 'General_Specs',
            'key' => 'finish',
            'value' => 'Ceramic, Glass, Aluminium',
        ]);

        ProductDetail::create([
            'product_id' => $product->id,
            'category' => 'General_Specs',
            'key' => 'Capacity',
            'value' => '128GB',
        ]);


        ProductDetail::create([
            'product_id' => $product->id,
            'category' => 'General_Specs',
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



        // Adding product Power_and_Battery
        ProductDetail::create([
            'product_id' => $product->id,
            'category' => 'Power_and_Battery',
            'key' => 'Fast charging:',
            'value' => 'Yes',
        ]);
        ProductDetail::create([
            'product_id' => $product->id,
            'category' => 'Power_and_Battery',
            'key' => 'Wireless charging',
            'value' => 'Yes',
        ]);
        ProductDetail::create([
            'product_id' => $product->id,
            'category' => 'Power_and_Battery',
            'key' => 'Charging power',
            'value' => 'up to 15W',
        ]);
        ProductDetail::create([
            'product_id' => $product->id,
            'category' => 'Power_and_Battery',
            'key' => 'Video playback',
            'value' => 'Up to 26 hours',
        ]);
        ProductDetail::create([
            'product_id' => $product->id,
            'category' => 'Power_and_Battery',
            'key' => 'Audio playback',
            'value' => 'Up to 100 hours',
        ]);


        // Adding product Size_and_Weight      
        ProductDetail::create([
            'product_id' => $product->id,
            'category' => 'Size_and_Weight',
            'key' => 'Height:
',
            'value' => '160.8 mm',
        ]);
        ProductDetail::create([
            'product_id' => $product->id,
            'category' => 'Size_and_Weight',
            'key' => 'Width',
            'value' => '78.1 mm',
        ]);

        ProductDetail::create([
            'product_id' => $product->id,
            'category' => 'Size_and_Weight',
            'key' => 'Weight',
            'value' => '203 grams',
        ]);



        // Adding a product review
        ProductReview::create([
            'product_id' => $product->id,
            'rating' => 5,
            'comment' => 'Excellent phone with impressive features!',
            'user_name' => 'Jane Doe',
        ]);

        ProductVariant::create([
            'product_id' => $product->id,
            'product_model_id' => 1, // e.g., 128GB
            'product_color_id' => 1, // e.g., Black
            'specific_price' => 123000.00,
            'opening_stock_quantity' => 0, // Default quantity
        ]);

        ProductVariant::create([
            'product_id' => $product->id,
            'product_model_id' => 2, // e.g., 256GB
            'product_color_id' => 2, // e.g., Red
            'specific_price' => 135000.00,
            'opening_stock_quantity' => 40
        ]);

        ProductVariant::create([
            'product_id' => $product->id,
            'product_model_id' => 3, // e.g., 512GB
            'product_color_id' => 3, // e.g., Yellow
            'specific_price' => 149000.00,
            'opening_stock_quantity' => 20
        ]);

        ProductVariant::create([
            'product_id' => $product->id,
            'product_model_id' => 4, // e.g., 1TB
            'product_color_id' => 4, // e.g., Green
            'specific_price' => 170000.00,
            'opening_stock_quantity' => 10
        ]);


    }
}
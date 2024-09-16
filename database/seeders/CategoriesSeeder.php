<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Category;
use App\Models\SubCategory;
use Illuminate\Support\Str;

class CategoriesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $computers = Category::create([
            'name' => 'Computers',
            'slug' => 'computers',
            'description' => 'Computers and accessories',
            'image' => 'computers.png',
        ]);

        $smartphones = Category::create([
            'name' => 'Smartphones & Tablets',
            'slug' => 'smartphones-tablets',
            'description' => 'Smartphones and tablets',
            'image' => 'smartphones-tablets.png',
        ]);

        $video_audio = Category::create([
            'name' => 'TV, Video and Audio',
            'slug' => 'tv-video-audio',
            'description' => 'TV, video and audio',
            'image' => 'tv-video-audio.png',
        ]);

        $cameras_photo_video = Category::create([
            'name' => 'Cameras, Photo and Video',
            'slug' => 'cameras-photo-video',
            'description' => 'Cameras, photo and video',
            'image' => 'cameras-photo-video.png',
        ]);

        $cameras_photo_video_subcategories = [
            'Point & Shoot Cameras',
            'DSLR Cameras',
            'Mirrorless Cameras',
            'Body Mounted Cameras',
            'Camcorders',
            'Camcorder Lenses',
            'Camera Lenses',
            'Macro & Ringlight Flashes',
            'Shoe Mount Flashes',
            'Tripods & Monopods',
            'Video Studio'
        ];

        foreach ($cameras_photo_video_subcategories as $subcategory) {
            SubCategory::create([
                'category_id' => $cameras_photo_video->id,
                'name' => $subcategory,
                'slug' => Str::slug($subcategory),
            ]);
        }

        $printers_ink = Category::create([
            'name' => 'Printers & Ink',
            'slug' => 'printers-ink',
            'description' => 'Printers and ink',
            'image' => 'printers-ink.png',
        ]);

        $printers_ink_subcategories = [
            'All-in-One',
            'Copying',
            'Faxing',
            'Photo Printing',
            'Printing Only',
            'Scanning',
            'Business Card Scanners',
            'Document Scanners',
            'Flatbed & Photo Scanners',
            'Slide & Negative Scanners',
            'Dot Matrix Printers',
            'Inkjet Printers',
            'Label Printers',
            'Laser Printers',
            'Photo Printers',
            'Wide Format Printers',
            'Plotter Printers',
        ];

        foreach ($printers_ink_subcategories as $subcategory) {
            SubCategory::create([
                'category_id' => $printers_ink->id,
                'name' => $subcategory,
                'slug' => Str::slug($subcategory),
            ]);
        }

        $charging_stations = Category::create([
            'name' => 'Charging Stations',
            'slug' => 'charging-stations',
            'description' => 'Charging stations',
            'image' => 'charging-stations.png',
        ]);

        $charging_stations_subcategories = [
            'Portable Power Stations',
            'Inverter Power Stations',
            'Outdoor Generators',
            'Gasoline Generators',
            'Cell Phone Chargers',
            'Power Strips',
            'Wall Chargers',
        ];

        foreach ($charging_stations_subcategories as $subcategory) {
            SubCategory::create([
                'category_id' => $charging_stations->id,
                'name' => $subcategory,
                'slug' => Str::slug($subcategory),
            ]);
        }

        $headphones = Category::create([
            'name' => 'Headphones',
            'slug' => 'headphones',
            'description' => 'Headphones',
            'image' => 'headphones.png',
        ]);

        $headphones_subcategories = [
            'Earbud Headphones',
            'Over-Ear Headphones',
            'On-Ear Headphones',
            'Noise-Canceling Headphones',
            'Bluetooth Headphones',
            'Sports & Fitness Headphones',
        ];

        foreach ($headphones_subcategories as $subcategory) {
            SubCategory::create([
                'category_id' => $headphones->id,
                'name' => $subcategory,
                'slug' => Str::slug($subcategory),
            ]);
        }

        $wearable = Category::create([
            'name' => 'Wearable Electronics',
            'slug' => 'wearable-electronics',
            'description' => 'Wearable electronics',
            'image' => 'wearable.png',
        ]);

        $wearable_subcategories = [
            'Smart Watches',
            'Fitness Trackers',
            'Smart Glasses',
            'Rings',
            'Virtual Reality',
            'Clips, Arm & Wristbands',
        ];

        foreach ($wearable_subcategories as $subcategory) {
            SubCategory::create([
                'category_id' => $wearable->id,
                'name' => $subcategory,
                'slug' => Str::slug($subcategory),
            ]);
        }

        $powerbanks = Category::create([
            'name' => 'Power Banks',
            'slug' => 'power-banks',
            'description' => 'Power Banks',
            'image' => 'power-banks.png',
        ]);

        $powerbanks_subcategories = [
            'Fast Charging',
            'Built In Cable',
            'Built In Wall Plug',
            'LED Indicator Lights',
            'Pocket Size',
            'Wireless Charging',
            'Short Circuit Protection',
            'Scratch Resistant',
            'Flashlight',
            'Lightweight'
        ];

        foreach ($powerbanks_subcategories as $subcategory) {
            SubCategory::create([
                'category_id' => $powerbanks->id,
                'name' => $subcategory,
                'slug' => Str::slug($subcategory),
            ]);
        }

        $data_storage = Category::create([
            'name' => 'Data Storage',
            'slug' => 'data-storage',
            'description' => 'Data Storage Devices',
            'image' => 'data-storage.png',
        ]);

        $data_storage_subcategories = [
            'External Hard Drives',
            'External SSD',
            'External Zip Drives',
            'Floppy & Tape Drives',
            'Internal Hard Drives',
            'Internal SSD',
            'Network Attached Storage',
            'USB Flash Drives',
        ];

        foreach ($data_storage_subcategories as $subcategory) {
            SubCategory::create([
                'category_id' => $data_storage->id,
                'name' => $subcategory,
                'slug' => Str::slug($subcategory),
            ]);
        }

        $video_games = Category::create([
            'name' => 'Video Games',
            'slug' => 'video-games',
            'description' => 'Video Games',
            'image' => 'video-games.png',
        ]);

        $video_games_categories = [
            'Video Games',
            'PlayStation 5',
            'PlayStation 4',
            'Xbox Series X',
            'Xbox Series S',
            'Nintendo Switch',
            'Gaming PC',
            'Gaming Laptops',
            'Wii U',
            'Nintendo 3DS',
            'Nintendo 2DS',
            'Nintendo DS',
            'Wii'
        ];

        foreach ($video_games_categories as $subcategory) {
            SubCategory::create([
                'category_id' => $video_games->id,
                'name' => $subcategory,
                'slug' => Str::slug($subcategory),
            ]);
        }

        /**
         * Subcategories
         */

        SubCategory::create([
            'category_id' => $computers->id,
            'name' => 'Laptops',
            'slug' => 'laptops',
        ]);

        SubCategory::create([
            'category_id' => $computers->id,
            'name' => 'Desktop Computers',
            'slug' => 'desktop-computers',
        ]);

        SubCategory::create([
            'category_id' => $computers->id,
            'name' => 'External Components',
            'slug' => 'external-components',
        ]);

        SubCategory::create([
            'category_id' => $computers->id,
            'name' => 'Internal Components',
            'slug' => 'internal-components',
        ]);

        SubCategory::create([
            'category_id' => $computers->id,
            'name' => 'Networking Products (NAS)',
            'slug' => 'networking-products',
        ]);

        SubCategory::create([
            'category_id' => $computers->id,
            'name' => 'Single Board Computers',
            'slug' => 'single-board-computers',
        ]);

        SubCategory::create([
            'category_id' => $computers->id,
            'name' => 'Desktop Barebones',
            'slug' => 'desktop-barebones',
        ]);

        SubCategory::create([
            'category_id' => $smartphones->id,
            'name' => 'Apple Iphone',
            'slug' => 'apple-iphone',
        ]);

        SubCategory::create([
            'category_id' => $smartphones->id,
            'name' => 'Samsung Galaxy',
            'slug' => 'samsung-galaxy',
        ]);

        SubCategory::create([
            'category_id' => $smartphones->id,
            'name' => 'Huawei',
            'slug' => 'huawei',
        ]);

        SubCategory::create([
            'category_id' => $smartphones->id,
            'name' => 'Xiaomi',
            'slug' => 'xiaomi',
        ]);

        SubCategory::create([
            'category_id' => $smartphones->id,
            'name' => 'OnePlus',
            'slug' => 'oneplus',
        ]);

        SubCategory::create([
            'category_id' => $smartphones->id,
            'name' => 'Google Pixel',
            'slug' => 'google-pixel',
        ]);

        SubCategory::create([
            'category_id' => $smartphones->id,
            'name' => 'Apple IPad',
            'slug' => 'apple-ipad',
        ]);

        SubCategory::create([
            'category_id' => $smartphones->id,
            'name' => 'Android Tablets',
            'slug' => 'android-tablets',
        ]);

        $video_audio_subcategories = [
            'TV Sets',
            'Home Theater Systems',
            'DVD Players & Recorders',
            'Blue-ray Players & Recorders',
            'HD DVD Players & Recorders',
            'DVD-VCR Combos',
            'DTV Converters',
            'AV Receivers',
            'AV Amplifiers',
            'Projectors',
            'Projection Screens',
            'Satellite Television',
            'TV-DVD Combos',
            'Sound Systems',
            'Home Cinema Systems',
            'Streaming Media Players',
            'VCRs',
            'Video Glasses',
            'Lens Attachments',
            'Subwoofers',
            'Sound Boosters'
        ];

        // Loop through each subcategory and create it under the video_audio category
        foreach ($video_audio_subcategories as $subcategory) {
            SubCategory::create([
                'category_id' => $video_audio->id,
                'name' => $subcategory,
                'slug' => Str::slug($subcategory),
            ]);
        }
    }
}

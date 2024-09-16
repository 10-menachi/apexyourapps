<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Category;

class CategoriesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Category::create([
            'name' => 'Computers',
            'slug' => 'computers',
            'description' => 'Computers and accessories',
            'image' => 'computers.jpg',
        ]);

        Category::create([
            'name' => 'Smartphones & Tablets',
            'slug' => 'smartphones-tablets',
            'description' => 'Smartphones and tablets',
            'image' => 'smartphones-tablets.jpg',
        ]);

        Category::create([
            'name' => 'TV, Video and Audio',
            'slug' => 'tv-video-audio',
            'description' => 'TV, video and audio',
            'image' => 'tv-video-audio.jpg',
        ]);

        Category::create([
            'name' => 'Cameras, Photo and Video',
            'slug' => 'cameras-photo-video',
            'description' => 'Cameras, photo and video',
            'image' => 'cameras-photo-video.jpg',
        ]);

        Category::create([
            'name' => 'Printers & Ink',
            'slug' => 'printers-ink',
            'description' => 'Printers and ink',
            'image' => 'printers-ink.jpg',
        ]);

        Category::create([
            'name' => 'Charging Stations',
            'slug' => 'charging-stations',
            'description' => 'Charging stations',
            'image' => 'charging-stations.jpg',
        ]);

        Category::create([
            'name' => 'Headphones',
            'slug' => 'headphones',
            'description' => 'Headphones',
            'image' => 'headphones.jpg',
        ]);

        Category::create([
            'name' => 'Wearable Electronics',
            'slug' => 'wearable-electronics',
            'description' => 'Wearable electronics',
            'image' => 'wearable-electronics.jpg',
        ]);

        Category::create([
            'name' => 'Power Banks',
            'slug' => 'power-banks',
            'description' => 'Power Banks',
            'image' => 'power-banks.jpg',
        ]);

        Category::create([
            'name' => 'HDD & SSD Storage',
            'slug' => 'hdd-ssd-storage',
            'description' => 'HDD & SSD Storage',
            'image' => 'hdd-ssd-storage.jpg',
        ]);

        Category::create([
            'name' => 'Video Games',
            'slug' => 'video-games',
            'description' => 'Video Games',
            'image' => 'video-games.jpg',
        ]);
    }
}

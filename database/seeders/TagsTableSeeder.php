<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use DB;
use Carbon\Carbon;

class TagsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $tags = [
            // General Electronics
            'Electronics', 'Gadgets', 'Technology', 'Tech Deals', 'Latest Electronics', 'Affordable Electronics', 'High-Tech Devices', 'Best Electronics',
            // Computers and Laptops
            'Computers', 'Laptops', 'Desktop Computers', 'Gaming Laptops', 'Business Laptops', 'Student Laptops', 'Touchscreen Laptops', 'Laptop Deals', 'All-in-One Computers', 'Ultrabooks', 'Mini PCs', 'Workstation Computers', 'Computer Accessories',
            // Computer Accessories
            'Keyboards', 'Mechanical Keyboards', 'Wireless Keyboards', 'Gaming Keyboards', 'Mice', 'Wireless Mice', 'Gaming Mice', 'Computer Monitors', 'HD Monitors', '4K Monitors', 'Monitor Stands', 'Docking Stations', 'Cooling Pads', 'Laptop Bags', 'Laptop Chargers', 'Power Adapters', 'USB Hubs', 'SSD', 'Hard Drives', 'External Hard Drives', 'Memory Cards', 'Graphic Cards',
            // Mobile Phones
            'Mobile Phones', 'Smartphones', 'Android Phones', 'iPhones', 'Latest Smartphones', '5G Phones', 'Budget Phones', 'Mid-Range Phones', 'High-End Phones', 'Mobile Accessories', 'Wireless Earbuds', 'Phone Cases', 'Screen Protectors', 'Power Banks', 'Mobile Chargers', 'Fast Chargers', 'USB-C Chargers',
            // CCTV and Surveillance
            'CCTV Cameras', 'Security Cameras', 'Surveillance Cameras', 'Wireless CCTV', 'Indoor Cameras', 'Outdoor Cameras', 'Dome Cameras', 'Bullet Cameras', 'IP Cameras', 'NVR Systems', 'DVR Systems', 'Home Security', 'Office Security', 'Night Vision Cameras', 'Motion Detection Cameras', 'Video Surveillance', 'CCTV Accessories',
            // General Tech Accessories
            'Bluetooth Speakers', 'Headphones', 'Wireless Headphones', 'Gaming Headsets', 'Smartwatches', 'Fitness Trackers', 'Wireless Chargers', 'HDMI Cables', 'USB Cables', 'HDMI Adapters', 'Charging Cables', 'Audio Adapters',
            // Popular Brands
            'Apple', 'Samsung', 'Lenovo', 'Dell', 'HP', 'Acer', 'Asus', 'Xiaomi', 'Huawei', 'Sony', 'Logitech', 'Bose'
        ];

        // Insert tags into the tags table
        foreach ($tags as $tag) {
            DB::table('tags')->insert([
                'name' => $tag,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ]);
        }
    }
}
  
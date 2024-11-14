<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProductColorSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run()
    {
        // Define an array of colors
        $colors = [
            ['name' => 'Yellow'],
            ['name' => 'Black'],
            ['name' => 'Pink'],
            ['name' => 'Green'],
            ['name' => 'Red'],
            ['name' => 'Blue'],
            ['name' => 'White'],
            ['name' => 'Silver']
        ];

        // Insert the colors into the database
        DB::table('product_colors')->insert($colors);
    }
}
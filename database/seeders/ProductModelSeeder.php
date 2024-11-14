<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class ProductModelSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
     public function run()
    {
        $storageOptions = [
            ['name' => '64GB'],
            ['name' => '128GB'],
            ['name' => '256GB'],
            ['name' => '512GB'],
            ['name' => '1TB'],
            ['name' => '2TB'],
            ['name' => '4TB'],
        ];
        // Insert the product_models into the database
        DB::table('product_models')->insert($storageOptions);
    }
}
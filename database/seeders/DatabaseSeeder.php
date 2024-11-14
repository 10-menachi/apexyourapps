<?php

namespace Database\Seeders;


use App\Models\User;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        $this->call([UserSeeder::class,]);
        $this->call([CategoriesSeeder::class,]);
        // ProductSeeders      
        $this->call([TagsTableSeeder::class,]);       
        $this->call([ProductColorSeeder::class,]);
        $this->call([ProductModelSeeder::class,]);
        $this->call([ProductSeeder::class,]);
    }
}
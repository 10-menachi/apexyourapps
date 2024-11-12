<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        User::create([
            'name' => 'Admin',
            'email' => 'admin@yourapps.co.ke',
            'password' => bcrypt('admin@12345'),
            'dob' => '1990-01-01',
            'lang' => 'en',
            'phone' => '254708373982',
            'role' => 'admin'
        ]);
    }
}
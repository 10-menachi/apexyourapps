<?php

namespace Database\Seeders;

use App\Models\Role;
use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
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
            'password' => bcrypt('password'),
            'dob' => '1990-01-01',
            'lang' => 'en',
            'phone' => '254708373982',
            'role' => 'admin'
        ]);
    }
}

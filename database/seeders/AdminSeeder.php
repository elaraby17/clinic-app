<?php

namespace Database\Seeders;

use App\Models\Admin;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class AdminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Admin::create([
            'name' => 'Mohamed Elaraby',
            'email' => 'admin@arab.com',
            'password' => Hash::make('3302856'),
            'image' => 'https://www.pngall.com/wp-content/uploads/5/Profile-PNG-High-Quality-Image.png',
        ]);
    }
}

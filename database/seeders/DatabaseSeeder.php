<?php

namespace Database\Seeders;

use App\Models\User;
use App\Models\Product;
use App\Models\Kategori;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // Seed 10 users
        User::factory(10)->create();

        // Seed 10 products with random users
        Product::factory(10)->create();

        // Seed 10 kategori with random products
        Kategori::factory(10)->create();
    }
}

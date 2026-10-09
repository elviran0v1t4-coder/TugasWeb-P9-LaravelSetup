<?php

namespace Database\Seeders;

use App\Models\Category;
use App\Models\Product;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    public function run(): void
    {
        $categories = [
            ['name' => 'Elektronik', 'description' => 'Produk elektronik'],
            ['name' => 'Fashion', 'description' => 'Produk fashion'],
            ['name' => 'Aksesoris', 'description' => 'Aksesoris'],
            ['name' => 'Rumah Tangga', 'description' => 'Kebutuhan rumah tangga'],
            ['name' => 'Olahraga', 'description' => 'Peralatan olahraga'],
        ];

        foreach ($categories as $category) {
            Category::create($category);
        }

        Product::factory(60)->create();
    }
}
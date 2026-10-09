<?php

namespace Database\Factories;

use App\Models\Category;
use App\Models\Product;
use Illuminate\Database\Eloquent\Factories\Factory;

class ProductFactory extends Factory
{
    protected $model = Product::class;

    public function definition(): array
    {
        return [
            'category_id' => Category::inRandomOrder()->value('id'),
            'name' => fake()->unique()->words(3, true),
            'description' => fake()->sentence(12),
            'price' => fake()->numberBetween(25000, 1500000),
            'stock' => fake()->numberBetween(0, 100),
            'is_active' => fake()->boolean(90),
        ];
    }
}
<?php

namespace Database\Factories;

use App\Domains\Category\Models\Category;
use App\Domains\Post\Models\Post;
use Illuminate\Database\Eloquent\Factories\Factory;

class CategoryFactory extends Factory
{
    protected $model = Category::class;

    public function definition(): array
    {
        return [
            'title' => fake()->title,
        ];
    }
}
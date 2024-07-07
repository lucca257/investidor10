<?php

namespace Database\Factories;

use App\Domains\Category\Models\Category;
use App\Domains\Post\Models\Post;
use Illuminate\Database\Eloquent\Factories\Factory;

class PostFactory extends Factory
{
    protected $model = Post::class;

    public function definition(): array
    {
        return [
            'title' => fake()->name(),
            'body' => fake()->realText(),
        ];
    }

    public function configure(): PostFactory
    {
        return $this->afterCreating(function (Post $post) {
            $category = Category::factory()->create();
            $post->categories()->attach($category);
        });
    }
}

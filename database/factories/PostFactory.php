<?php

namespace Database\Factories;

use App\Models\Post;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Post>
 */
class PostFactory extends Factory
{
    protected $model = Post::class;
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'category_id' => fake()->numberBetween(1,15),
            'title' => fake()->title(),
            'body' => fake()->text(),
            'likes' => fake()->numberBetween(1,30),
            'dislikes' => fake()->numberBetween(1,30)
        ];
    }
}

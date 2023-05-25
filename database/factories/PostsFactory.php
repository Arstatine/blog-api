<?php

namespace Database\Factories;

use App\Models\User;
use App\Models\Categories;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Posts>
 */
class PostsFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
                'user_id' => User::factory(),
                'category_id' => Categories::factory(),
                'post_title' => fake()->sentence(),
                'post_description' => fake()->sentence(),
                'post_content' => fake()->text(),
        ];
    }
}

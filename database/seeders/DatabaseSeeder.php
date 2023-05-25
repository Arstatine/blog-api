<?php

namespace Database\Seeders;

use App\Models\Categories;
use App\Models\Comments;
use App\Models\Likes;
use App\Models\User;
use App\Models\Posts;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        User::factory(10)->create();
        Categories::factory(8)->create();
        for($i = 0; $i < 50; $i++){
            $user = User::inRandomOrder()->first();
            $category = Categories::inRandomOrder()->first();
            
            Posts::factory()->create([
                'category_id' => $category->id,
                'user_id' => $user->id,
            ]);
        }

        for($i = 0; $i < 30; $i++){
            $post = Posts::inRandomOrder()->first();
            $user = User::inRandomOrder()->first();

            Comments::factory()->create([
                'post_id' => $post->id,
                'user_id' => $user->id,
            ]);
        }

        for($i = 0; $i < 100; $i++){
            $post = Posts::inRandomOrder()->first();
            $user = User::inRandomOrder()->first();

            Likes::factory()->create([
                'post_id' => $post->id,
                'user_id' => $user->id,
            ]);
        }
    }
}

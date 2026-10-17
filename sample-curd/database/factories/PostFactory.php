<?php

namespace Database\Factories;

use App\Models\Post;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends Factory<Post>
 */
class PostFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'title'=>fake()->text(15),
            'content'=>fake()->text(200),
            'image' => 'https://img.magnific.com/free-photo/online-message-blog-chat-communication-envelop-graphic-icon-concept_53876-139717.jpg?semt=ais_hybrid&w=740&q=80'
        ];
    }
}

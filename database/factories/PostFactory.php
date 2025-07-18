<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

class PostFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $title = fake()->sentence(rand(5, 10));

        return [
            'title' => rtrim($title, '.'),
            'slug' => Str::slug($title),
            'category' => fake()->randomElement(['Lập trình', 'Thủ thuật', 'Đời sống', 'Công nghệ']),
            'image_url' => 'https://picsum.photos/seed/' . Str::random(5) . '/800/600',
            'intro' => fake()->paragraph(2), // 2 đoạn văn ngắn cho phần giới thiệu
            'content' => fake()->paragraphs(15, true), // 15 đoạn văn cho nội dung
            'tags' => 'laravel, php, web development',
            'published_at' => fake()->dateTimeBetween('-1 year', 'now'), // Ngày đăng ngẫu nhiên
            'created_at' => now(),
            'updated_at' => now(),
        ];
    }
}
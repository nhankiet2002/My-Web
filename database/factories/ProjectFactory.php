<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

class ProjectFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $title = fake()->sentence(rand(3, 6)); // Tạo một câu ngẫu nhiên từ 3-6 từ
        
        return [
            'title' => rtrim($title, '.'), // Bỏ dấu chấm ở cuối câu
            'slug' => Str::slug($title),
            'category' => fake()->randomElement(['Web Application', 'Mobile App', 'Data Analysis', 'UI/UX Design']),
            'image_url' => 'https://picsum.photos/seed/' . Str::random(5) . '/800/600', // Ảnh ngẫu nhiên từ picsum.photos
            'content' => fake()->paragraphs(10, true), // 10 đoạn văn ngẫu nhiên
            'role' => 'Full-stack Developer',
            'duration' => fake()->randomElement(['2 tháng', '3 tháng', '6 tháng']),
            'status' => fake()->randomElement(['Hoàn thành', 'Đang phát triển']),
            'technologies' => 'Laravel, Vue.js, Tailwind CSS, MySQL',
            'demo_url' => '#',
            'source_url' => '#',
            'created_at' => fake()->dateTimeBetween('-1 year', 'now'), // Ngày tạo ngẫu nhiên trong vòng 1 năm qua
            'updated_at' => now(),
        ];
    }
}
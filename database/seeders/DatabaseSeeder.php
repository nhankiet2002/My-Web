<?php

namespace Database\Seeders;

use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Project;
use App\Models\Post;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // Dòng này sẽ thực thi AdminUserSeeder
        $this->call([
            AdminUserSeeder::class,
        ]);
        Project::factory(5)->create(); // Tạo 5 dự án
        Post::factory(5)->create();    // Tạo 5 bài viết
    }
}
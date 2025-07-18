<?php

namespace App\Http\Controllers;

use App\Models\Post;
use App\Models\Project;
use Illuminate\Http\Request;

class PageController extends Controller
{
    /**
     * Hiển thị trang chủ với các dự án và bài viết mới nhất.
     */
    public function home()
    {
        // Lấy 3 dự án mới nhất
        $latestProjects = Project::latest()->take(3)->get();

        // Lấy 3 bài viết mới nhất đã được đăng
        $latestPosts = Post::whereNotNull('published_at')
                            ->latest('published_at')
                            ->take(3)
                            ->get();

        // Trả về view 'pages.home' và truyền 2 biến dữ liệu vào
        return view('pages.home', [
            'latestProjects' => $latestProjects,
            'latestPosts' => $latestPosts,
        ]);
    }
}
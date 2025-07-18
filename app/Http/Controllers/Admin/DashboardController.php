<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Post;
use App\Models\Project;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    /**
     * Hiển thị trang dashboard của admin với các số liệu thống kê.
     */
    public function index()
    {
        // 1. Đếm tổng số lượng
        $projectCount = Project::count();
        $postCount = Post::count();

        // 2. Lấy 5 hoạt động gần đây nhất
        $recentProjects = Project::latest()->take(5)->get();
        $recentPosts = Post::latest()->take(5)->get();

        // 3. Gửi tất cả dữ liệu sang view
        return view('admin.dashboard', compact(
            'projectCount',
            'postCount',
            'recentProjects',
            'recentPosts'
        ));
    }
}
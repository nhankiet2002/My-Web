<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class PublicPostController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $posts = Post::whereNotNull('published_at')->latest('published_at')->paginate(9);
        return view('pages.blog-list', compact('posts'));
    }

    /**
     * Display the specified resource.
     */
    public function show(Post $post)
    {
        // Lấy 3 bài viết gần đây nhất, không bao gồm bài viết hiện tại
        $recentPosts = Post::whereNotNull('published_at')
                            ->where('id', '!=', $post->id) // Loại trừ bài viết đang xem
                            ->latest('published_at')
                            ->take(3)
                            ->get();

        // Lấy danh sách các chuyên mục duy nhất
        $categories = Post::whereNotNull('published_at')
                            ->select('category')
                            ->distinct()
                            ->get()
                            ->pluck('category');

        // Gửi toàn bộ dữ liệu cần thiết sang view
        return view('pages.blog-detail', [
            'post' => $post,
            'recentPosts' => $recentPosts,
            'categories' => $categories,
        ]);
    }
}
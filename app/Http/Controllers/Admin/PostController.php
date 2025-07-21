<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Post;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use CloudinaryLabs\CloudinaryLaravel\Facades\Cloudinary;
use DOMDocument;

class PostController extends Controller
{
    public function index()
    {
        $posts = Post::latest()->paginate(10);
        return view('admin.posts.index', compact('posts'));
    }

    public function create()
    {
        $post = new Post();
        return view('admin.posts.create', compact('post'));
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'title' => 'required|string|max:255|unique:posts',
            'category' => 'required|string',
            'published_at' => 'nullable|date',
            'image_file' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg,webp|max:4096',
            'image_url' => 'nullable|url',
            'intro' => 'required|string|max:500',
            'content' => 'required|string',
            'tags' => 'nullable|string',
        ]);

        $post = new Post($validated);
        $post->slug = Str::slug($validated['title']);
        $post->image_url = $request->input('image_url');

        if ($request->hasFile('image_file')) {
            try {
                $fileName = Str::slug($post->title) . '-' . time();
                $uploadedFileUrl = Cloudinary::upload($request->file('image_file')->getRealPath())
                    ->setFolder('portfolio/blog')
                    ->setPublicId($fileName)
                    ->getSecurePath();
                $post->image_url = $uploadedFileUrl;
            } catch (\Exception $e) {
                return back()->with('error', 'Upload ảnh thumbnail thất bại: ' . $e->getMessage())->withInput();
            }
        }
        
        $post->save();
        return redirect()->route('admin.posts.index')->with('success', 'Bài viết đã được tạo thành công!');
    }

    public function show(Post $post)
    {
        return redirect()->route('admin.posts.edit', $post);
    }

    public function edit(Post $post)
    {
        return view('admin.posts.edit', compact('post'));
    }

    public function update(Request $request, Post $post)
    {
        $validated = $request->validate([
            'title' => 'required|string|max:255|unique:posts,title,' . $post->id,
            'category' => 'required|string',
            'published_at' => 'nullable|date',
            'image_file' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg,webp|max:4096',
            'image_url' => 'nullable|url',
            'intro' => 'required|string|max:500',
            'content' => 'required|string',
            'tags' => 'nullable|string',
        ]);
        
        $post->fill($validated);
        $post->slug = Str::slug($validated['title']);
        $post->image_url = $request->input('image_url');

        if ($request->hasFile('image_file')) {
            try {
                $fileName = Str::slug($post->title) . '-' . time();
                $uploadedFileUrl = Cloudinary::upload($request->file('image_file')->getRealPath())
                    ->setFolder('portfolio/blog')
                    ->setPublicId($fileName)
                    ->getSecurePath();
                $post->image_url = $uploadedFileUrl;
            } catch (\Exception $e) {
                return back()->with('error', 'Upload ảnh thumbnail thất bại: ' . $e->getMessage())->withInput();
            }
        }
        
        $post->save();
        return redirect()->route('admin.posts.index')->with('success', 'Bài viết đã được cập nhật thành công!');
    }

    public function destroy(Post $post)
    {
        $post->delete();
        return redirect()->route('admin.posts.index')->with('success', 'Bài viết đã được xóa thành công!');
    }
}
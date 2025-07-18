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
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $posts = Post::latest()->paginate(10);
        return view('admin.posts.index', compact('posts'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        // Truyền một đối tượng Post rỗng để form _form không bị lỗi
        $post = new Post();
        return view('admin.posts.create', compact('post'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            'title' => 'required|string|max:255|unique:posts',
            'category' => 'required|string',
            'published_at' => 'nullable|date',
            'image_file' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg,webp|max:4096', // Giới hạn 4MB
            'image_url' => 'nullable|url',
            'intro' => 'required|string|max:500',
            'content' => 'required|string',
            'tags' => 'nullable|string',
        ]);

        $post = new Post($validated);
        $post->slug = Str::slug($validated['title']);
        $post->content = $this->processContentImages($request->input('content'), 'blog_content');
        
        // Mặc định, lấy URL từ input text
        $post->image_url = $request->input('image_url');

        // Nếu có file upload, nó sẽ được ưu tiên và ghi đè lên URL trên
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

    /**
     * Display the specified resource.
     */
    public function show(Post $post)
    {
        return redirect()->route('admin.posts.edit', $post);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Post $post)
    {
        return view('admin.posts.edit', compact('post'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Post $post)
    {
        $validated = $request->validate([
            'title' => 'required|string|max:255|unique:posts,title,' . $post->id,
            'category' => 'required|string',
            'published_at' => 'nullable|date',
            'image_file' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg,webp|max:4096', // Giới hạn 4MB
            'image_url' => 'nullable|url',
            'intro' => 'required|string|max:500',
            'content' => 'required|string',
            'tags' => 'nullable|string',
        ]);
        
        // Cập nhật các trường text trước
        $post->fill($validated);
        $post->slug = Str::slug($validated['title']);
        $post->content = $this->processContentImages($request->input('content'), 'blog_content');
        
        // Mặc định, gán lại URL từ input text. Nếu input này trống, nó sẽ là null.
        // Điều này cho phép người dùng xóa ảnh bằng cách xóa trắng ô URL
        $post->image_url = $request->input('image_url');

        // Nếu có file upload MỚI, nó sẽ được ưu tiên và ghi đè
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

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Post $post)
    {
        $post->delete();
        return redirect()->route('admin.posts.index')->with('success', 'Bài viết đã được xóa thành công!');
    }

    /**
     * Process and upload base64 images from content.
     */
    private function processContentImages($content, $folder)
    {
        if (empty($content)) {
            return $content;
        }

        $dom = new DOMDocument();
        libxml_use_internal_errors(true);
        $dom->loadHTML($content, LIBXML_HTML_NOIMPLIED | LIBXML_HTML_NODEFDTD);
        libxml_clear_errors();

        $images = $dom->getElementsByTagName('img');

        foreach ($images as $img) {
            $src = $img->getAttribute('src');

            if (strpos($src, 'data:image/') === 0) {
                try {
                    $cloudUpload = Cloudinary::upload($src, [
                        'folder' => 'portfolio/' . $folder
                    ]);
                    $newSrc = $cloudUpload->getSecurePath();
                    $img->setAttribute('src', $newSrc);
                } catch (\Exception $e) {
                    // Nếu upload thất bại, bỏ qua ảnh này
                }
            }
        }
        return $dom->saveHTML();
    }
}
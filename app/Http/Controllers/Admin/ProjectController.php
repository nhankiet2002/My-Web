<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Project;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use CloudinaryLabs\CloudinaryLaravel\Facades\Cloudinary;

class ProjectController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $projects = Project::latest()->paginate(10);
        return view('admin.projects.index', compact('projects'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $project = new Project();
        return view('admin.projects.create', compact('project'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            'title' => 'required|string|max:255|unique:projects',
            'category' => 'required|string',
            'image_file' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg,webp|max:2048',
            'image_url' => 'nullable|url',
            'content' => 'required|string',
            'role' => 'required|string',
            'duration' => 'required|string',
            'status' => 'required|string',
            'technologies' => 'nullable|string',
            'demo_url' => 'nullable|url',
            'source_url' => 'nullable|url',
        ]);

        $content = $this->processContentImages($request->input('content'), 'project_content');

        $dataToCreate = $validated;
        $dataToCreate['slug'] = Str::slug($validated['title']);
        $dataToCreate['content'] = $content;
        $dataToCreate['image_url'] = $request->input('image_url');

        if ($request->hasFile('image_file')) {
            $fileName = Str::slug($request->title) . '-' . time();
            try {
                $uploadedFileUrl = Cloudinary::upload($request->file('image_file')->getRealPath())
                    ->setFolder('portfolio/projects')
                    ->setPublicId($fileName)
                    ->getSecurePath();
                $dataToCreate['image_url'] = $uploadedFileUrl;
            } catch (\Exception $e) {
                return back()->with('error', 'Upload ảnh thất bại: ' . $e->getMessage())->withInput();
            }
        }

        Project::create($dataToCreate);

        return redirect()->route('admin.projects.index')->with('success', 'Dự án đã được tạo thành công!');
    }
    
    /**
     * Display the specified resource.
     * (Chúng ta không cần trang xem chi tiết trong admin, nên có thể để trống hoặc redirect)
     */
    public function show(Project $project)
    {
        return redirect()->route('admin.projects.edit', $project);
    }


    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Project $project)
    {
        return view('admin.projects.edit', compact('project'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Project $project)
    {
        $validated = $request->validate([
            'title' => 'required|string|max:255|unique:projects,title,' . $project->id,
            'category' => 'required|string',
            'image_file' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg,webp|max:2048',
            'image_url' => 'nullable|url',
            'content' => 'required|string',
            'role' => 'required|string',
            'duration' => 'required|string',
            'status' => 'required|string',
            'technologies' => 'nullable|string',
            'demo_url' => 'nullable|url',
            'source_url' => 'nullable|url',
        ]);
        
        $content = $this->processContentImages($request->input('content'), 'project_content');

        $dataToUpdate = $validated;
        $dataToUpdate['slug'] = Str::slug($validated['title']);
        $dataToUpdate['content'] = $content;
        $dataToUpdate['image_url'] = $request->input('image_url', $project->image_url);

        if ($request->hasFile('image_file')) {
            $fileName = Str::slug($request->title) . '-' . time();
            try {
                $uploadedFileUrl = Cloudinary::upload($request->file('image_file')->getRealPath())
                    ->setFolder('portfolio/projects')
                    ->setPublicId($fileName)
                    ->getSecurePath();
                $dataToUpdate['image_url'] = $uploadedFileUrl;
            } catch (\Exception $e) {
                return back()->with('error', 'Upload ảnh thất bại: ' . $e->getMessage())->withInput();
            }
        }
        
        $project->update($dataToUpdate);

        return redirect()->route('admin.projects.index')->with('success', 'Dự án đã được cập nhật thành công!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Project $project)
    {
        $project->delete();
        return redirect()->route('admin.projects.index')->with('success', 'Dự án đã được xóa thành công!');
    }

    /**
     * Process and upload base64 images from content.
     */
    private function processContentImages($content, $folder)
    {
        if (empty($content)) return $content;
        $dom = new \DOMDocument();
        // Use error supression and clearing to handle malformed HTML from WYSIWYG editors
        libxml_use_internal_errors(true);
        $dom->loadHTML($content, LIBXML_HTML_NOIMPLIED | LIBXML_HTML_NODEFDTD);
        libxml_clear_errors();

        $images = $dom->getElementsByTagName('img');
        foreach ($images as $img) {
            $src = $img->getAttribute('src');
            // Process only base64 encoded images
            if (strpos($src, 'data:image/') === 0) {
                try {
                    $cloudUpload = Cloudinary::upload($src, ['folder' => 'portfolio/' . $folder]);
                    $newSrc = $cloudUpload->getSecurePath();
                    $img->setAttribute('src', $newSrc);
                } catch (\Exception $e) {
                    // If upload fails, we can either remove the image or leave the base64 string.
                    // For now, let's just ignore and continue.
                }
            }
        }
        return $dom->saveHTML();
    }
}
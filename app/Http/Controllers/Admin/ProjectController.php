<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Project;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use CloudinaryLabs\CloudinaryLaravel\Facades\Cloudinary;

class ProjectController extends Controller
{
    public function index()
    {
        $projects = Project::latest()->paginate(10);
        return view('admin.projects.index', compact('projects'));
    }

    public function create()
    {
        $project = new Project();
        return view('admin.projects.create', compact('project'));
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'title' => 'required|string|max:255|unique:projects',
            'category' => 'required|string',
            'image_file' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg,webp|max:4096',
            'image_url' => 'nullable|url',
            'content' => 'required|string',
            'role' => 'required|string',
            'duration' => 'required|string',
            'status' => 'required|string',
            'technologies' => 'nullable|string',
            'demo_url' => 'nullable|url',
            'source_url' => 'nullable|url',
        ]);

        $project = new Project($validated);
        $project->slug = Str::slug($validated['title']);
        $project->content = $request->input('content');
        $project->image_url = $request->input('image_url');

        if ($request->hasFile('image_file')) {
            try {
                $fileName = Str::slug($project->title) . '-' . time();
                $uploadedFileUrl = Cloudinary::upload($request->file('image_file')->getRealPath())
                    ->setFolder('portfolio/projects')
                    ->setPublicId($fileName)
                    ->getSecurePath();
                $project->image_url = $uploadedFileUrl;
            } catch (\Exception $e) {
                return back()->with('error', 'Upload ảnh thất bại: ' . $e->getMessage())->withInput();
            }
        }
        
        $project->save();
        return redirect()->route('admin.projects.index')->with('success', 'Dự án đã được tạo thành công!');
    }
    
    public function show(Project $project)
    {
        return redirect()->route('admin.projects.edit', $project);
    }

    public function edit(Project $project)
    {
        return view('admin.projects.edit', compact('project'));
    }

    public function update(Request $request, Project $project)
    {
        $validated = $request->validate([
            'title' => 'required|string|max:255|unique:projects,title,' . $project->id,
            'category' => 'required|string',
            'image_file' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg,webp|max:4096',
            'image_url' => 'nullable|url',
            'content' => 'required|string',
            'role' => 'required|string',
            'duration' => 'required|string',
            'status' => 'required|string',
            'technologies' => 'nullable|string',
            'demo_url' => 'nullable|url',
            'source_url' => 'nullable|url',
        ]);
        
        $project->fill($validated);
        $project->slug = Str::slug($validated['title']);
        $project->content = $request->input('content');
        $project->image_url = $request->input('image_url');

        if ($request->hasFile('image_file')) {
            try {
                $fileName = Str::slug($project->title) . '-' . time();
                $uploadedFileUrl = Cloudinary::upload($request->file('image_file')->getRealPath())
                    ->setFolder('portfolio/projects')
                    ->setPublicId($fileName)
                    ->getSecurePath();
                $project->image_url = $uploadedFileUrl;
            } catch (\Exception $e) {
                return back()->with('error', 'Upload ảnh thất bại: ' . $e->getMessage())->withInput();
            }
        }
        
        $project->save();
        return redirect()->route('admin.projects.index')->with('success', 'Dự án đã được cập nhật thành công!');
    }

    public function destroy(Project $project)
    {
        $project->delete();
        return redirect()->route('admin.projects.index')->with('success', 'Dự án đã được xóa thành công!');
    }
}
<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Project;

class PublicProjectController extends Controller
{
    /**
     * Hiển thị trang danh sách tất cả dự án (có phân trang).
     */
    public function index()
    {
        $projects = Project::latest()->paginate(6); // Hiển thị 6 dự án mỗi trang

        return view('pages.project-list', compact('projects'));
    }

    /**
     * Hiển thị trang chi tiết của một dự án.
     * Laravel sẽ tự động tìm Project dựa trên 'slug'.
     */
    public function show(Project $project)
    {
        return view('pages.project-detail', compact('project'));
    }
}
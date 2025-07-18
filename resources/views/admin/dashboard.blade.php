@extends('layouts.admin')

@section('title', 'Dashboard')

@section('content')
    <div class="flex justify-between items-center mb-6">
        <h1 class="text-3xl font-bold text-white">Dashboard</h1>
        {{-- 3. LỐI TẮT TRUY CẬP NHANH --}}
        <div class="flex gap-4">
            <a href="{{ route('admin.projects.create') }}" class="btn-secondary px-4 py-2 rounded-lg flex items-center gap-2">
                <i class="fas fa-plus"></i> Tạo Dự án
            </a>
            <a href="{{ route('admin.posts.create') }}" class="btn-primary px-4 py-2 rounded-lg flex items-center gap-2">
                <i class="fas fa-plus"></i> Tạo Bài viết
            </a>
        </div>
    </div>

    <!-- 1. CÁC THẺ THỐNG KÊ -->
    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6 mb-8">
        <div class="gradient-box p-6 rounded-lg">
            <div class="flex items-center">
                <i class="fas fa-project-diagram text-primary text-3xl mr-4"></i>
                <div>
                    <p class="text-gray-400">Tổng số Dự án</p>
                    <p class="text-3xl font-bold text-white">{{ $projectCount }}</p>
                </div>
            </div>
        </div>
        <div class="gradient-box p-6 rounded-lg">
            <div class="flex items-center">
                <i class="fas fa-newspaper text-primary text-3xl mr-4"></i>
                <div>
                    <p class="text-gray-400">Tổng số Bài viết</p>
                    <p class="text-3xl font-bold text-white">{{ $postCount }}</p>
                </div>
            </div>
        </div>
    </div>

    <!-- 2. HOẠT ĐỘNG GẦN ĐÂY -->
    <div class="grid grid-cols-1 lg:grid-cols-2 gap-8">
        {{-- Cột Dự án gần đây --}}
        <div>
            <h2 class="text-xl font-bold text-white mb-4">Dự án gần đây</h2>
            <div class="gradient-box rounded-lg p-6 space-y-4">
                @forelse($recentProjects as $project)
                    <div class="flex justify-between items-center">
                        <div>
                            <a href="{{ route('admin.projects.edit', $project) }}" class="text-white hover:text-primary font-semibold">{{ $project->title }}</a>
                            <p class="text-sm text-gray-400">Tạo lúc: {{ $project->created_at->format('H:i, d/m/Y') }}</p>
                        </div>
                        <a href="{{ route('admin.projects.edit', $project) }}" class="btn-secondary text-xs px-3 py-1 rounded-md">Sửa</a>
                    </div>
                @empty
                    <p class="text-gray-400">Chưa có dự án nào.</p>
                @endforelse
            </div>
        </div>

        {{-- Cột Bài viết gần đây --}}
        <div>
            <h2 class="text-xl font-bold text-white mb-4">Bài viết gần đây</h2>
            <div class="gradient-box rounded-lg p-6 space-y-4">
                @forelse($recentPosts as $post)
                    <div class="flex justify-between items-center">
                        <div>
                            <a href="{{ route('admin.posts.edit', $post) }}" class="text-white hover:text-primary font-semibold">{{ $post->title }}</a>
                            <p class="text-sm text-gray-400">Tạo lúc: {{ $post->created_at->format('H:i, d/m/Y') }}</p>
                        </div>
                        <a href="{{ route('admin.posts.edit', $post) }}" class="btn-secondary text-xs px-3 py-1 rounded-md">Sửa</a>
                    </div>
                @empty
                    <p class="text-gray-400">Chưa có bài viết nào.</p>
                @endforelse
            </div>
        </div>
    </div>
@endsection
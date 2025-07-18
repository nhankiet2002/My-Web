@extends('layouts.admin')
@section('title', 'Quản lý Blog')

@section('content')
<div class="flex justify-between items-center mb-6">
    <h1 class="text-3xl font-bold text-white">Quản lý Blog</h1>
    <a href="{{ route('admin.posts.create') }}" class="btn-primary px-4 py-2 rounded-lg flex items-center gap-2"><i class="fas fa-plus"></i> Tạo Bài viết mới</a>
</div>

@if(session('success'))
    <div class="bg-green-500/20 text-green-300 border border-green-500/30 p-4 rounded-lg mb-6">
        {{ session('success') }}
    </div>
@endif

<div class="gradient-box rounded-lg overflow-hidden">
    <table class="admin-table">
        <thead>
            <tr><th>Tiêu đề</th><th>Ngày đăng</th><th>Hành động</th></tr>
        </thead>
        <tbody>
            @forelse($posts as $post)
                <tr>
                    <td>{{ $post->title }}</td>
                    <td>{{ $post->published_at ? $post->published_at->format('d/m/Y') : 'Chưa đăng' }}</td>
                    <td class="space-x-2">
                        <a href="{{ route('admin.posts.edit', $post) }}" class="btn-secondary px-3 py-1 text-sm rounded-md"><i class="fas fa-edit"></i></a>
                        <form action="{{ route('admin.posts.destroy', $post) }}" method="POST" class="inline-block" onsubmit="return confirm('Bạn có chắc chắn muốn xóa?');">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn-danger px-3 py-1 text-sm rounded-md"><i class="fas fa-trash"></i></button>
                        </form>
                    </td>
                </tr>
            @empty
                <tr><td colspan="3" class="text-center py-8 text-gray-400">Không có bài viết nào.</td></tr>
            @endforelse
        </tbody>
    </table>
</div>
@endsection
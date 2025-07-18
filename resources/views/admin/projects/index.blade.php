@extends('layouts.admin')
@section('title', 'Quản lý Dự án')

@section('content')
<div class="flex justify-between items-center mb-6">
    <h1 class="text-3xl font-bold text-white">Quản lý Dự án</h1>
    <a href="{{ route('admin.projects.create') }}" class="btn-primary px-4 py-2 rounded-lg flex items-center gap-2"><i class="fas fa-plus"></i> Tạo Dự án mới</a>
</div>

@if(session('success'))
    <div class="bg-green-500/20 text-green-300 border border-green-500/30 p-4 rounded-lg mb-6">
        {{ session('success') }}
    </div>
@endif

<div class="gradient-box rounded-lg overflow-hidden">
    <table class="admin-table">
        <thead>
            <tr><th>Tiêu đề</th><th>Loại</th><th>Trạng thái</th><th>Hành động</th></tr>
        </thead>
        <tbody>
            @forelse($projects as $project)
                <tr>
                    <td>{{ $project->title }}</td>
                    <td>{{ $project->category }}</td>
                    <td class="text-green-400">{{ $project->status }}</td>
                    <td class="space-x-2">
                        <a href="{{ route('admin.projects.edit', $project) }}" class="btn-secondary px-3 py-1 text-sm rounded-md"><i class="fas fa-edit"></i></a>
                        <form action="{{ route('admin.projects.destroy', $project) }}" method="POST" class="inline-block" onsubmit="return confirm('Bạn có chắc chắn muốn xóa?');">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn-danger px-3 py-1 text-sm rounded-md"><i class="fas fa-trash"></i></button>
                        </form>
                    </td>
                </tr>
            @empty
                <tr><td colspan="4" class="text-center py-8 text-gray-400">Không có dự án nào.</td></tr>
            @endforelse
        </tbody>
    </table>
</div>
@endsection
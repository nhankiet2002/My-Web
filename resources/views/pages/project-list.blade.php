@extends('layouts.app')

@section('title', 'Tất cả Dự án - Đàm Nhân Kiệt')

@section('content')
<div class="pt-32 pb-24 px-4 sm:px-6 lg:px-8">
    <div class="max-w-7xl mx-auto">
        <!-- Page Header -->
        <div class="text-center mb-16 animate-fade-in">
            <span class="inline-block px-4 py-1.5 rounded-full bg-black/30 border border-gray-800 text-primary font-medium mb-4">
                PORTFOLIO
            </span>
            <h1 class="text-4xl md:text-5xl font-bold text-white mb-6">
                Tất Cả <span class="gradient-text">Dự Án</span>
            </h1>
            <p class="text-xl text-gray-300 max-w-3xl mx-auto">
                Một bộ sưu tập các dự án tôi đã xây dựng, thể hiện kỹ năng, sự sáng tạo và quá trình học hỏi của tôi.
            </p>
        </div>
        
        <!-- Projects Grid -->
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
            @forelse ($projects as $project)
                <a href="{{ route('projects.show', $project->slug) }}" class="block group gradient-box rounded-2xl overflow-hidden feature-card animate-fade-in">
                    <img src="{{ $project->image_url ?? 'https://via.placeholder.com/800x600' }}" alt="{{ $project->title }}" class="w-full h-56 object-cover group-hover:scale-105 transition-transform duration-300">
                    <div class="p-6">
                        <h3 class="text-xl font-bold text-white mb-3 group-hover:text-primary transition-colors">{{ $project->title }}</h3>
                        <p class="text-gray-400 text-sm mb-4">{{ Str::limit(strip_tags($project->content), 120) }}</p>
                        <div class="flex flex-wrap gap-2">
                             @foreach(explode(',', $project->technologies) as $tech)
                                <span class="text-xs bg-primary/10 text-primary px-2 py-1 rounded-full">{{ trim($tech) }}</span>
                            @endforeach
                        </div>
                    </div>
                </a>
            @empty
                <p class="col-span-3 text-center text-gray-400 text-xl">Chưa có dự án nào.</p>
            @endforelse
        </div>

        <!-- Pagination -->
        <div class="mt-16">
            {{ $projects->links() }}
        </div>
    </div>
</div>
@endsection
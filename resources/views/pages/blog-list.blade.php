@extends('layouts.app')

@section('title', 'Danh sách bài viết - Đàm Nhân Kiệt')

@section('content')
<main class="pt-32 pb-24 px-4 sm:px-6 lg:px-8">
    <div class="max-w-7xl mx-auto">
        <!-- Page Header -->
        <div class="text-center mb-16">
            <h1 class="text-4xl md:text-5xl font-bold text-white mb-6">Tất Cả <span class="gradient-text">Bài Viết</span></h1>
        </div>
        
        <!-- Blog Posts Grid -->
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
            @forelse($posts as $post)
                <a href="{{ route('blog.show', $post->slug) }}" class="block group gradient-box rounded-2xl overflow-hidden feature-card">
                    <img src="{{ $post->image_url ?? 'https://via.placeholder.com/800x600' }}" alt="{{ $post->title }}" class="w-full h-56 object-cover group-hover:scale-105 transition-transform duration-300">
                    <div class="p-6">
                        <p class="text-primary text-sm font-medium mb-2">{{ $post->published_at->format('d F, Y') }}</p>
                        <h3 class="text-xl font-bold text-white mb-3 group-hover:text-primary transition-colors">{{ $post->title }}</h3>
                        <p class="text-gray-400 text-sm">{{ $post->intro }}</p>
                    </div>
                </a>
            @empty
                <p class="col-span-3 text-center text-gray-400 text-xl">Chưa có bài viết nào.</p>
            @endforelse
        </div>

        <!-- Pagination -->
        <div class="mt-16">
            {{ $posts->links() }}
        </div>
    </div>
</main>
@endsection
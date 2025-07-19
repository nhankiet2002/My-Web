@extends('layouts.app')

@section('title', $post->title)

@section('content')
<main class="pt-32 pb-24 px-4 sm:px-6 lg:px-8 relative z-10">
    <div class="max-w-7xl mx-auto grid grid-cols-1 lg:grid-cols-3 gap-8 lg:gap-12">
        
        <!-- Article Content -->
        <article class="lg:col-span-2">
            <!-- Post Header -->
            <header class="mb-12">
                <div class="flex items-center gap-4 text-primary font-medium mb-4">
                    <span>{{ $post->category }}</span>
                    <span class="text-gray-500">•</span>
                    <span>{{ $post->published_at->format('d F, Y') }}</span>
                </div>
                <h1 class="text-4xl md:text-5xl font-bold text-white mb-6 leading-tight">
                    <span class="gradient-text">{{ $post->title }}</span>
                </h1>
                <p class="text-xl text-gray-400">{{ $post->intro }}</p>
            </header>

            <!-- Featured Image -->
            <img src="{{ $post->image_url ?? 'https://via.placeholder.com/1200x800' }}" alt="{{ $post->title }}" class="w-full rounded-2xl mb-12 shadow-lg">

            <!-- Post Body -->
            <div class="prose-custom max-w-none">
                {!! \Illuminate\Support\Str::markdown($post->content) !!}
            </div>

            <!-- Tags & Share -->
            <div class="mt-12 border-t border-gray-800 pt-8">
                <div class="flex flex-wrap gap-2">
                    @foreach(explode(',', $post->tags) as $tag)
                        <span class="text-sm bg-gray-800 text-gray-300 px-3 py-1.5 rounded-full">{{ trim($tag) }}</span>
                    @endforeach
                </div>
            </div>
        </article>

        <!-- Sidebar -->
        <aside class="lg:sticky lg:top-24 h-max">
            <div class="space-y-8">
                <!-- Author Widget -->
                <div class="gradient-box p-6 rounded-2xl">
                    <h4 class="text-xl font-bold text-white mb-4">Về Tác Giả</h4>
                    <div class="flex items-center gap-4">
                        <img src="/storage/avatar.jpeg" class="w-16 h-16 rounded-full object-cover border-2 border-primary/30">
                        <div>
                            <h3 class="font-bold text-white">Đàm Nhân Kiệt</h3>
                            <p class="text-sm text-primary">Đa lĩnh vực</p>
                        </div>
                    </div>
                </div>

                <!-- Recent Posts Widget -->
                <div class="gradient-box p-6 rounded-2xl">
                    <h4 class="text-xl font-bold text-white mb-4">Bài Viết Gần Đây</h4>
                    <ul class="space-y-4">
                        {{-- Dữ liệu này cần được truyền từ controller --}}
                        <li><a href="#" class="group flex items-start gap-4"><i class="fas fa-file-alt text-primary mt-1"></i><span class="text-gray-300 group-hover:text-primary">So sánh React và Vue</span></a></li>
                    </ul>
                </div>
            </div>
        </aside>
    </div>
</main>
@endsection
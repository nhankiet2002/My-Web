@extends('layouts.app')

@section('title', $project->title . ' - Đàm Nhân Kiệt')
@section('meta_description', Str::limit(strip_tags($project->content), 155)) {{-- Lấy 155 ký tự đầu tiên từ nội dung làm mô tả --}}
@section('meta_image', $project->image_url)

@section('content')
<main class="pt-32 pb-24 px-4 sm:px-6 lg:px-8 relative z-10">
    <div class="max-w-7xl mx-auto grid grid-cols-1 lg:grid-cols-3 gap-8 lg:gap-12">
        
        <!-- Article Content -->
        <article class="lg:col-span-2">
            <!-- Project Header -->
            <header class="mb-12">
                <div class="flex items-center gap-4 text-primary font-medium mb-4">
                    <span>{{ $project->category }}</span>
                </div>
                <h1 class="text-4xl md:text-5xl font-bold text-white mb-6 leading-tight">
                    <span class="gradient-text">{{ $project->title }}</span>
                </h1>
                <p class="text-xl text-gray-400">
                    {{ Str::limit($project->content, 150) }}
                </p>
            </header>

            <!-- Featured Image -->
            <img src="{{ $project->image_url ?? 'https://via.placeholder.com/1200x800' }}" alt="{{ $project->title }}" class="w-full rounded-2xl mb-12 shadow-lg">

            <!-- Project Body -->
            <div class="prose-custom max-w-none">
                {!! \Illuminate\Support\Str::markdown($project->content) !!}
            </div>
        </article>

        <!-- Sidebar -->
        <aside class="lg:sticky lg:top-24 h-max">
            <div class="gradient-box p-8 rounded-2xl">
                <h3 class="text-2xl font-bold text-white mb-6">Thông Tin Dự Án</h3>
                <div class="space-y-5">
                    <div class="flex justify-between items-center"><span class="font-semibold text-gray-300">Vai trò</span><span class="text-white text-right">{{ $project->role }}</span></div>
                    <div class="flex justify-between items-center"><span class="font-semibold text-gray-300">Thời gian</span><span class="text-white text-right">{{ $project->duration }}</span></div>
                    <div class="flex justify-between items-center"><span class="font-semibold text-gray-300">Trạng thái</span><span class="text-primary font-bold text-right">{{ $project->status }}</span></div>
                    <div class="border-t border-gray-800 my-4"></div>
                    <div>
                         <h4 class="font-semibold text-gray-300 mb-3">Công nghệ sử dụng</h4>
                         <div class="flex flex-wrap gap-2">
                            @foreach(explode(',', $project->technologies) as $tech)
                               <span class="text-sm bg-primary/10 text-primary px-3 py-1.5 rounded-full">{{ trim($tech) }}</span>
                           @endforeach
                         </div>
                    </div>
                </div>
                <div class="mt-8 flex flex-col gap-4">
                    @if($project->demo_url)
                    <a href="{{ $project->demo_url }}" target="_blank" class="btn-primary w-full py-3 rounded-full text-center flex items-center justify-center gap-2">
                        <i class="fas fa-external-link-alt"></i> Xem Live Demo
                    </a>
                    @endif
                    @if($project->source_url)
                    <a href="{{ $project->source_url }}" target="_blank" class="btn-secondary w-full py-3 rounded-full text-center flex items-center justify-center gap-2">
                        <i class="fab fa-github"></i> Xem Source Code
                    </a>
                    @endif
                </div>
            </div>
        </aside>
    </div>
</main>
@endsection
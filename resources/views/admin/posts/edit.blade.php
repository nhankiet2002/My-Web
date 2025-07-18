@extends('layouts.admin')
@section('title', 'Sửa Bài viết')

@section('content')
<h1 class="text-3xl font-bold text-white mb-6">Sửa Bài viết: {{ $post->title }}</h1>
<div class="gradient-box p-8 rounded-lg">
    <form action="{{ route('admin.posts.update', $post) }}" method="POST" enctype="multipart/form-data" class="space-y-6">
        @csrf
        @method('PUT')
        @include('admin.posts._form')
    </form>
</div>
@endsection
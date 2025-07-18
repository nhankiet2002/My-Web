@extends('layouts.admin')
@section('title', 'Tạo Bài viết mới')

@section('content')
<h1 class="text-3xl font-bold text-white mb-6">Tạo Bài viết mới</h1>
<div class="gradient-box p-8 rounded-lg">
    <form action="{{ route('admin.posts.store') }}" method="POST" enctype="multipart/form-data" class="space-y-6">
        @csrf
        @include('admin.posts._form')
    </form>
</div>
@endsection
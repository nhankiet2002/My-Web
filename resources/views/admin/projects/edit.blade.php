@extends('layouts.admin')
@section('title', 'Sửa Dự án')

@section('content')
<h1 class="text-3xl font-bold text-white mb-6">Sửa Dự án: {{ $project->title }}</h1>
<div class="gradient-box p-8 rounded-lg">
    <form action="{{ route('admin.projects.update', $project) }}" method="POST" enctype="multipart/form-data">
        @csrf
        @method('PUT')
        @include('admin.projects._form')
    </form>
</div>
@endsection
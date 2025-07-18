@extends('layouts.admin')
@section('title', 'Tạo Dự án mới')

@section('content')
<h1 class="text-3xl font-bold text-white mb-6">Tạo Dự án mới</h1>
<div class="gradient-box p-8 rounded-lg">
    <form action="{{ route('admin.projects.store') }}" method="POST" enctype="multipart/form-data">
        @csrf
        @include('admin.projects._form')
    </form>
</div>
@endsection
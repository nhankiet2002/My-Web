{{-- resources/views/admin/projects/_form.blade.php --}}

<div class="grid grid-cols-1 lg:grid-cols-3 gap-8">
    {{-- Cột trái --}}
    <div class="lg:col-span-2 space-y-6">
        <div><label class="font-medium">Tiêu đề Dự án</label><input type="text" class="form-input" name="title" value="{{ old('title', $project->title ?? '') }}" required></div>
        <div><label class="font-medium">Loại dự án (Category)</label><input type="text" class="form-input" name="category" value="{{ old('category', $project->category ?? '') }}" required></div>
        <div><label class="font-medium">Ảnh đại diện (File hoặc URL)</label>
            @if(isset($project) && $project->image_url)
                <img src="{{ $project->image_url }}" alt="Current Image" class="w-32 h-auto my-2 rounded-md">
            @endif
            <input type="file" class="form-input" name="image_file">
            <input type="text" class="form-input mt-2" name="image_url" value="{{ old('image_url', $project->image_url ?? '') }}" placeholder="Hoặc dán URL ảnh vào đây">
        </div>
        <div>
            <label class="font-medium" for="content-editor-project">Nội dung chi tiết</label>
            <textarea id="content-editor-project" class="form-input" name="content" rows="12" required>{{ old('content', $project->content ?? '') }}</textarea>
        </div>
    </div>
    {{-- Cột phải --}}
    <div class="lg:col-span-1 space-y-6">
        <div><label class="font-medium">Vai trò</label><input type="text" class="form-input" name="role" value="{{ old('role', $project->role ?? 'Full-stack Developer') }}" required></div>
        <div><label class="font-medium">Thời gian thực hiện</label><input type="text" class="form-input" name="duration" value="{{ old('duration', $project->duration ?? '') }}" placeholder="VD: 3 tháng"></div>
        <div><label class="font-medium">Trạng thái</label>
            <select class="form-select" name="status">
                <option value="Hoàn thành" @selected(old('status', $project->status ?? '') == 'Hoàn thành')>Hoàn thành</option>
                <option value="Đang phát triển" @selected(old('status', $project->status ?? '') == 'Đang phát triển')>Đang phát triển</option>
                <option value="Tạm dừng" @selected(old('status', $project->status ?? '') == 'Tạm dừng')>Tạm dừng</option>
            </select>
        </div>
        <div><label class="font-medium">Công nghệ (cách nhau bởi dấu phẩy)</label><input type="text" class="form-input" name="technologies" value="{{ old('technologies', $project->technologies ?? '') }}"></div>
        <div><label class="font-medium">Link Live Demo</label><input type="url" class="form-input" name="demo_url" value="{{ old('demo_url', $project->demo_url ?? '') }}"></div>
        <div><label class="font-medium">Link Source Code</label><input type="url" class="form-input" name="source_url" value="{{ old('source_url', $project->source_url ?? '') }}"></div>
    </div>
</div>
<div class="flex justify-end gap-4 pt-4 border-t border-gray-700/50 mt-8">
    <a href="{{ route('admin.projects.index') }}" class="btn-secondary px-6 py-2 rounded-lg">Hủy</a>
    <button type="submit" class="btn-primary px-6 py-2 rounded-lg">Lưu Dự án</button>
</div>
{{-- resources/views/admin/posts/_form.blade.php --}}

<div><label class="font-medium">Tiêu đề Bài viết</label><input type="text" class="form-input" name="title" value="{{ old('title', $post->title ?? '') }}" required></div>
<div class="grid grid-cols-1 md:grid-cols-2 gap-6">
    <div><label class="font-medium">Chuyên mục</label><input type="text" class="form-input" name="category" value="{{ old('category', $post->category ?? '') }}" placeholder="VD: Lập trình" required></div>
    <div><label class="font-medium">Ngày đăng</label><input type="date" class="form-input" name="published_at" value="{{ old('published_at', isset($post->published_at) ? $post->published_at->format('Y-m-d') : '') }}"></div>
</div>
<div><label class="font-medium">Ảnh thumbnail (File hoặc URL)</label>
    @if(isset($post) && $post->image_url)
        <img src="{{ $post->image_url }}" alt="Current Image" class="w-48 h-auto my-2 rounded-md">
    @endif
    <input type="file" class="form-input" name="image_file">
    <input type="text" class="form-input mt-2" name="image_url" value="{{ old('image_url', $post->image_url ?? '') }}" placeholder="Hoặc dán URL ảnh vào đây">
</div>
<div><label class="font-medium">Mô tả ngắn (Intro)</label><textarea class="form-input" name="intro" rows="3" required>{{ old('intro', $post->intro ?? '') }}</textarea></div>
<div>
    <label class="font-medium" for="content-editor-post">Nội dung chi tiết</label>
    <textarea id="content-editor-post" class="form-input" name="content" rows="20">{{ old('content', $post->content ?? '') }}</textarea>
</div>
<div><label class="font-medium">Tags (cách nhau bởi dấu phẩy)</label><input type="text" class="form-input" name="tags" value="{{ old('tags', $post->tags ?? '') }}" placeholder="javascript, cleancode, ..."></div>

<div class="flex justify-end gap-4 pt-4 border-t border-gray-700/50 mt-8">
    <a href="{{ route('admin.posts.index') }}" class="btn-secondary px-6 py-2 rounded-lg">Hủy</a>
    <button type="submit" class="btn-primary px-6 py-2 rounded-lg">Lưu Bài viết</button>
</div>


@push('scripts')
<script>
    tinymce.init({
        selector: 'textarea#content-editor-post',
        plugins: 'advlist autolink lists link image charmap preview anchor pagebreak visualblocks code fullscreen insertdatetime media table powerpaste help wordcount',
        toolbar: 'undo redo | blocks | bold italic underline | alignleft aligncenter alignright alignjustify | bullist numlist outdent indent | link image media | code | removeformat | help',
        height: 600,
        content_style: 'body { font-family:Inter,sans-serif; font-size:16px }',
        paste_data_images: true,
        powerpaste_word_import: 'clean',
        powerpaste_html_import: 'clean',
    });
</script>
@endpush
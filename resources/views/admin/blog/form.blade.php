<form action="{{ $action }}" method="POST" enctype="multipart/form-data">
    @csrf
    @if($isEdit)
        @method('PUT')
    @endif

    {{-- Blog Title --}}
    <div class="form-group custom-content-section">
        <label for="title">Title</label>
        <input type="text" class="form-control" id="title" name="title"
               value="{{ old('title', $blog->title ?? '') }}" required>
        @error('title') <small class="text-danger">{{ $message }}</small> @enderror
    </div>

    {{-- Author --}}
    <div class="form-group custom-content-section">
        <label for="author_name">Author</label>
        <input type="text" class="form-control" id="author_name" name="author_name"
               value="{{ old('author_name', $blog->author_name ?? '') }}">
        @error('author_name') <small class="text-danger">{{ $message }}</small> @enderror
    </div>

    {{-- Content --}}
    <div class="form-group custom-content-section">
        <label for="content">Content</label>
        <textarea class="form-control" id="content" name="content" rows="5">{{ old('content', $blog->content ?? '') }}</textarea>
        @error('content') <small class="text-danger">{{ $message }}</small> @enderror
    </div>

    {{-- Thumbnail Image --}}
<div class="form-group">
    <label for="image">Thumbnail Image</label>
    <input type="file" class="form-control" id="image" name="image" onchange="previewSingleImage(this, '#thumbnailPreview')">
    <div id="thumbnailPreview" class="mt-2"></div>
</div>

{{-- Banner Image --}}
<div class="form-group">
    <label for="banner_image">Banner Image</label>
    <input type="file" class="form-control" id="banner_image" name="banner_image" onchange="previewSingleImage(this, '#bannerPreview')">
    <div id="bannerPreview" class="mt-2"></div>
</div>

{{-- Gallery Media --}}
<div class="form-group">
    <label for="media_files">Gallery Media (Images or Videos)</label>
    <input type="file" class="form-control" id="media_files" name="media_files[]" multiple accept="image/*,video/*" onchange="previewMultipleMedia(this, '#galleryPreview')">
    <div id="galleryPreview" class="row mt-2"></div>
</div>

    <button type="submit" class="btn btn-primary mt-3">{{ $isEdit ? 'Update' : 'Create' }} Blog</button>
</form>



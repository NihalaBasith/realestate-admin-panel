<form action="{{ $action }}" method="POST" enctype="multipart/form-data">
    @csrf
    @if($isEdit)
        @method('PUT')
    @endif

    <div class="form-group custom-content-section">
        <label for="page_name">Page Name</label>
        <input type="text" class="form-control" id="page_name" name="page_name"
               value="{{ old('page_name', $page->page_name ?? '') }}" required>
        @error('page_name') <div class="text-danger">{{ $message }}</div> @enderror
    </div>

    <div class="form-group custom-content-section">
        <label for="heading">Heading</label>
        <input type="text" class="form-control" id="heading" name="heading"
               value="{{ old('heading', $page->heading ?? '') }}">
        @error('heading') <div class="text-danger">{{ $message }}</div> @enderror
    </div>

    <div class="form-group custom-content-section">
        <label for="subheading">Subheading</label>
        <input type="text" class="form-control" id="subheading" name="subheading"
               value="{{ old('subheading', $page->subheading ?? '') }}">
        @error('subheading') <div class="text-danger">{{ $message }}</div> @enderror
    </div>

    <div class="form-group custom-content-section">
        <label for="content">Content</label>
        <textarea class="form-control" id="content" name="content">{{ old('content', $page->content ?? '') }}</textarea>
        @error('content') <div class="text-danger">{{ $message }}</div> @enderror
    </div>

    <div class="form-group custom-content-section">
        <label for="banner_image">Banner Image</label>
        <input type="file" class="form-control" id="banner_image" name="banner_image">
        @error('banner_image') <div class="text-danger">{{ $message }}</div> @enderror
    </div>

    <div class="form-group custom-content-section">
        <label for="section2_heading">Section 2 Heading</label>
        <input type="text" class="form-control" id="section2_heading" name="section2_heading"
               value="{{ old('section2_heading', $page->section2_heading ?? '') }}">
        @error('section2_heading') <div class="text-danger">{{ $message }}</div> @enderror
    </div>

    <div class="form-group custom-content-section">
        <label for="section2_subheading">Section 2 Subheading</label>
        <input type="text" class="form-control" id="section2_subheading" name="section2_subheading"
               value="{{ old('section2_subheading', $page->section2_subheading ?? '') }}">
        @error('section2_subheading') <div class="text-danger">{{ $message }}</div> @enderror
    </div>

    <div class="form-group custom-content-section">
        <label for="section2_content">Section 2 Content</label>
        <textarea class="form-control" id="section2_content" name="section2_content">{{ old('section2_content', $page->section2_content ?? '') }}</textarea>
        @error('section2_content') <div class="text-danger">{{ $message }}</div> @enderror
    </div>

    <div class="form-group custom-content-section">
        <label for="section2_image">Section 2 Image</label>
        <input type="file" class="form-control" id="section2_image" name="section2_image">
        @error('section2_image') <div class="text-danger">{{ $message }}</div> @enderror
    </div>

    <div class="custom-content-section">
        <button type="submit" class="btn btn-primary">{{ $isEdit ? 'Update' : 'Save' }} Page</button>
    </div>
</form>

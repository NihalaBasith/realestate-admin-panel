@extends('admin.layout')

@section('content')

    <!-- Create New Page Button -->
    <div class="card" id="card-content">
        <h3>Create New Page</h3>

        <!-- Create Page Form -->
        <form action="" method="POST" enctype="multipart/form-data">
            @csrf

            <div class="form-group">
                <label for="page_name">Page Name</label>
                <input type="text" class="form-control" id="page_name" name="page_name" value="{{ old('page_name') }}" required>
                @error('page_name')
                    <div class="text-danger">{{ $message }}</div>
                @enderror
            </div>

            <div class="form-group">
                <label for="heading">Heading</label>
                <input type="text" class="form-control" id="heading" name="heading" value="{{ old('heading') }}">
                @error('heading')
                    <div class="text-danger">{{ $message }}</div>
                @enderror
            </div>

            <div class="form-group">
                <label for="subheading">Subheading</label>
                <input type="text" class="form-control" id="subheading" name="subheading" value="{{ old('subheading') }}">
                @error('subheading')
                    <div class="text-danger">{{ $message }}</div>
                @enderror
            </div>

            <div class="form-group">
                <label for="content">Content</label>
                <textarea class="form-control" id="content" name="content">{{ old('content') }}</textarea>
                @error('content')
                    <div class="text-danger">{{ $message }}</div>
                @enderror
            </div>

            <div class="form-group">
                <label for="banner_image">Banner Image</label>
                <input type="file" class="form-control" id="banner_image" name="banner_image">
                @error('banner_image')
                    <div class="text-danger">{{ $message }}</div>
                @enderror
            </div>

            <div class="form-group">
                <label for="section2_heading">Section 2 Heading</label>
                <input type="text" class="form-control" id="section2_heading" name="section2_heading" value="{{ old('section2_heading') }}">
                @error('section2_heading')
                    <div class="text-danger">{{ $message }}</div>
                @enderror
            </div>

            <div class="form-group">
                <label for="section2_subheading">Section 2 Subheading</label>
                <input type="text" class="form-control" id="section2_subheading" name="section2_subheading" value="{{ old('section2_subheading') }}">
                @error('section2_subheading')
                    <div class="text-danger">{{ $message }}</div>
                @enderror
            </div>

            <div class="form-group">
            <label for="section2_content">Section 2 Content</label>
            <textarea class="form-control form-control-lg" id="section2_content" name="section2_content">{{ old('section2_content') }}</textarea>
            @error('section2_content')
                <div class="text-danger">{{ $message }}</div>
            @enderror
        </div>

            <div class="form-group">
                <label for="section2_image">Section 2 Image</label>
                <input type="file" class="form-control" id="section2_image" name="section2_image">
                @error('section2_image')
                    <div class="text-danger">{{ $message }}</div>
                @enderror
            </div>

            <button type="submit" class="btn btn-primary">Save Page</button>
        </form>
    </div>

@endsection

@push('scripts')
    <!-- Add CKEditor script here -->
    <script src="https://cdn.ckeditor.com/ckeditor5/36.0.1/classic/ckeditor.js"></script>
    <script>
        ClassicEditor
            .create(document.querySelector('#content'))
            .catch(error => {
                console.error(error);
            });

        ClassicEditor
            .create(document.querySelector('#section2_content'))
            .catch(error => {
                console.error(error);
            });
    </script>
@endpush

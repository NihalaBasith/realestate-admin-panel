@extends('admin.layout')

@section('content')
<div class="card p-4">
    <h3>Edit Blog: {{ $blog->title }}</h3>
    @include('admin.blog.form', [
        'action' => route('admin.blogs.update', $blog),
        'isEdit' => true,
        'blog' => $blog
    ])
</div>
@endsection

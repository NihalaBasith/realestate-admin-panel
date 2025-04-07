@extends('admin.layout')

@section('content')
<div class="card p-4">
    <h3>Create New Blog</h3>
    @include('admin.blog.form', [
        'action' => route('admin.blog.create'),
        'isEdit' => false,
        'blog' => null
    ])
</div>
@endsection


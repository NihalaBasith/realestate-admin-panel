@extends('admin.layout')

@section('content')
    <div class="card" id="card-content">
        <h3>Edit Page</h3>
        @include('admin.page.form', [
            'action' => route('admin.page.update', $page->id),
            'isEdit' => true,
            'page' => $page
        ])
    </div>
@endsection

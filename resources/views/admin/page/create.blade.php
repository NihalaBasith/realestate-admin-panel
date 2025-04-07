@extends('admin.layout')

@section('content')
    <div class="card" id="card-content">
        <h3>Create New Page</h3>
        @include('admin.page.form', [
            'action' => route('admin.pages.create'),
            'isEdit' => false
        ])
    </div>
@endsection

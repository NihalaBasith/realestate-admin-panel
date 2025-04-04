@extends('admin.layout')

@section('content')


        <!-- Add New User Button -->
        <div class="card" id="card-content">
            <a href="{{ route('admin.pages.create') }}" class="btn btn-primary">Add New Page</a>
            <h3>Pages</h3>
            <!-- Users Table -->
            <table class="table">
                <thead>
                    <tr>
                        <th>#</th>
                        <th>Page Name</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody>

                </tbody>
            </table>
        </div>

@endsection
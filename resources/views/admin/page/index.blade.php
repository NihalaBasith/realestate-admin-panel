@extends('admin.layout')

@section('content')


        <!-- Add New User Button -->
        <div class="card" id="card-content">
            <a href="{{ route('admin.register') }}" class="btn btn-primary">Add New Metatag</a>
            <h3>Metatag</h3>
            <!-- Users Table -->
            <table class="table">
                <thead>
                    <tr>
                        <th>#</th>
                        <th>Page Name</th>
                        <th>Meta Title</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody>

                </tbody>
            </table>
        </div>

@endsection
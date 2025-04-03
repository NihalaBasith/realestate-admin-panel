@extends('admin.layout')

@section('content')


        <!-- Add New User Button -->
        <div class="card" id="card-content">
            <a href="{{ route('admin.register') }}" class="btn btn-primary">Add New User</a>
            <h3>Users</h3>
            <!-- Users Table -->
            <table class="table">
                <thead>
                    <tr>
                        <th>#</th>
                        <th>Name</th>
                        <th>Email</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($users as $user)
                        <tr>
                            <td>{{ $loop->iteration }}</td>
                            <td>{{ $user->name }}</td>
                            <td>{{ $user->email }}</td>
                            <td>
                                <!-- Delete Button -->
                                <form action="#" method="POST" style="display:inline;">
                                    @csrf
                                    @method('DELETE')
                                    <button class="btn btn-danger">Delete</button>
                                </form>
                                
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>

@endsection

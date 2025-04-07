@extends('admin.layout')

@section('content')


        <!-- Add New User Button -->
        <div class="card" id="card-content">
           
            <h3>Blogs</h3>
            <a href="{{ route('admin.blog.create') }}" class="btn btn-primary">Add New Blog</a>
            <!-- Users Table -->
            <table class="table">
    <thead>
        <tr>
            <th>#</th>
            <th>Date</th>
            <th>Blog</th>
            <th>Author</th>
            <th>Actions</th>
        </tr>
    </thead>
    <tbody>
        @forelse($blogs as $index => $blog)
            <tr>
                <td>{{ $index + 1 }}</td>
                <td>{{ $blog->title }}</td>
                <td>{{ $blog->title }}</td>
                <td>{{ $blog->title }}</td>
                <td>
                <div class="action-buttons">
    <!-- Edit Icon -->
    <a href="#" class="icon-btn text-warning" title="Edit">
        <i class="fas fa-edit"></i>
    </a>

    <!-- View Icon -->
    <a href="#" class="icon-btn text-info" title="View">
        <i class="fas fa-eye"></i>
    </a>

    <!-- Delete Icon -->
    <form action="#" method="POST" style="display:inline;" onsubmit="return confirm('Are you sure?')">
        @csrf
        @method('DELETE')
        <button type="submit" class="icon-btn text-danger" title="Delete">
            <i class="fas fa-trash-alt"></i>
        </button>
    </form>
</div>


</td>



            </tr>
        @empty
            <tr>
                <td colspan="3">No blogs found.</td>
            </tr>
        @endforelse
    </tbody>
</table>

        </div>

@endsection
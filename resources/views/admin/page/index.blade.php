@extends('admin.layout')

@section('content')


        <!-- Add New User Button -->
        <div class="card" id="card-content">
           
            <h3>Pages</h3>
            <a href="{{ route('admin.pages.create') }}" class="btn btn-primary">Add New Page</a>
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
        @forelse($pages as $index => $page)
            <tr>
                <td>{{ $index + 1 }}</td>
                <td>{{ $page->page_name }}</td>
                <td>
                <div class="action-buttons">
    <!-- Edit Icon -->
    <a href="{{ route('admin.pages.edit', $page->id) }}" class="icon-btn text-warning" title="Edit">
        <i class="fas fa-edit"></i>
    </a>

    <!-- View Icon -->
    <a href="{{ route('admin.pages.view', $page->id) }}" class="icon-btn text-info" title="View">
        <i class="fas fa-eye"></i>
    </a>

    <!-- Delete Icon -->
    <form action="{{ route('admin.pages.delete', $page->id) }}" method="POST" style="display:inline;" onsubmit="return confirm('Are you sure?')">
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
                <td colspan="3">No pages found.</td>
            </tr>
        @endforelse
    </tbody>
</table>

        </div>

@endsection


@extends('admin.layout')

@section('content')
  
        <div class="card" id="card-content">
            <p>Name : {{ $user->name }}</p>
            <p>Email: {{ $user->email }}</p>
        </div>

@endsection

@section('scripts')
    <script src="{{ asset('assets/admin/js/dashboard.js') }}"></script>
@endsection
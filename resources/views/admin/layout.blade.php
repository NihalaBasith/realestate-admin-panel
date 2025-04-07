<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Admin Panel')</title>    
    <link rel="stylesheet" href="{{ asset('assets/admin/css/dashboard.css') }}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
    <!-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet"> -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">


</head>
<body>
<!-- Header with toggle button -->
<div class="header">
    <button class="sidebar-toggle" onclick="toggleSidebar()">☰</button>
    <h1>Dashboard</h1>
</div>

<!-- Sidebar -->
<div class="sidebar" id="sidebar">
    <a href="{{ route('dashboard') }}"><i class="fas fa-home"></i> Dashboard</a>
    <a href="{{ route('admin.users') }}"><i class="fas fa-user"></i> Users</a>
    <a href="{{ route('admin.blogs') }}"><i class="fas fa-blog"></i> Blogs</a>
    <a href="#"><i class="fas fa-project-diagram"></i> Projects</a>
    
    <div class="dropdown-btn" onclick="toggleDropdown(this)">
    <i class="fas fa-file"></i> Pages
</div>
<div class="dropdown">
    <a href="{{ route('admin.pages')}}">All</a>
    <a href="#">Enquiry</a>
    <a href="{{ route('admin.metatag')}}">Metatags</a>
    <a href="#">Seo</a>
</div>


    <form action="{{ route('logout') }}" method="POST" style="display: inline;">
        @csrf
        <button type="submit" class="logout-button">
            <i class="fas fa-sign-out-alt"></i> <span style="margin-left: 10px;">Logout</span>
        </button>
    </form>
</div>


    <div class="main-content">


        <!-- Dynamic Content -->
        <div id="card-content">
            @yield('content')
            @stack('scripts')
        </div>
    </div>

<script src="{{ asset('assets/admin/js/dashboard.js') }}"></script>


</body>




</html>

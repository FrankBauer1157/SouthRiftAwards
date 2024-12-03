<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>South Rift Matatu Awards</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        /* Sidebar for large screens */
        .vertical-menu {
            display: none;
        }
        @media (min-width: 992px) { /* Large screens (≥ 992px) */
            .vertical-menu {
                display: block;
                width: 12%;
                background-color: #f8f9fa;
                padding: 20px;
                border-right: 1px solid #dee2e6;
                height: 100vh;
                position: fixed;
                top: 0;
                left: 0;
            }
            .content {
                margin-left: 220px; /* Adjust content margin when sidebar is visible */
            }
        }
        /* Center the navbar brand */
        .navbar-brand {
            margin: auto;
            text-align: center;
        }
         /* Style for links */
         .vertical-menu a, .offcanvas-body a {
            text-decoration: none;
            color: #000;
            display: block;
            padding: 10px 15px;
            border-bottom: 1px solid #dee2e6;
            transition: background-color 0.3s, color 0.3s;
        }
        .vertical-menu a:last-child, .offcanvas-body a:last-child {
            border-bottom: none;
        }
        .vertical-menu a:hover, .vertical-menu a.active, .offcanvas-body a:hover, .offcanvas-body a.active {
            background-color: #007bff;
            color: #fff;
        }
    </style>
</head>
<body>
    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <h1 class="navbar-brand" href="#">South-Rift Matatu Awards - 2024</h1>
        <!-- Offcanvas toggle button (hidden on large screens) -->
        <button class="navbar-toggler d-lg-none" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasNavbar" aria-controls="offcanvasNavbar">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="offcanvas offcanvas-start d-lg-none" tabindex="-1" id="offcanvasNavbar" aria-labelledby="offcanvasNavbarLabel">
            <div class="offcanvas-header">
                <h5 class="offcanvas-title" id="offcanvasNavbarLabel">Navigation</h5>
                <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
            </div>
            <div class="offcanvas-body">
                <!-- Offcanvas Links -->
                <a href="{{ route('categories.index') }}" class="d-block mb-2">Categories</a>
                <a href="{{ route('categories.create') }}" class="d-block mb-2">Add Category</a>
                <a href="{{ route('nomination.create') }}" class="d-block mb-2">Nominate</a>
                <a href="{{ route('nominations.admin') }}" class="d-block mb-2">Admin View</a>
                <a href="#" class="d-block mb-2">Votes</a>
                <a href="#" class="d-block mb-2">Contestants</a>
                <a href="{{ route('logout') }}" class="d-block mb-2">Logout</a>
            </div>
        </div>
    </nav>

    <!-- Sidebar for Large Screens -->
    <div class="vertical-menu d-none d-lg-block">
        <div class="d-flex py-2">
            <h4>Navigation</h4>
        </div>
        <div class="d-flex flex-column">
            <a href="{{ route('categories.index') }}">Categories</a>
            <a href="{{ route('categories.create') }}">Add Category</a>
            <a href="{{ route('nomination.create') }}">Nominate</a>
            <a href="{{ route('nominations.admin') }}">Admin View</a>
            <a href="#">Votes</a>
            <a href="#">Contestants</a>
            <a href="{{ route('logout') }}">Logout</a>
        </div>
    </div>

    <!-- Page Content -->
    <div class="content">
        @yield('content')
    </div>

    <!-- Scripts -->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.min.js"></script>
</body>
</html>

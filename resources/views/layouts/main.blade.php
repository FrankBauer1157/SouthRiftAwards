<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>South Rift Matatu Awards</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>

    <script src="https://cdn.tailwindcss.com?plugins=forms,typography"></script>
    <script src="https://unpkg.com/unlazy@0.11.3/dist/unlazy.with-hashing.iife.js" defer init></script>
    <script type="text/javascript">
        window.tailwind.config = {
            darkMode: ['class'],
            theme: {
                extend: {
                    colors: {
                        border: 'hsl(var(--border))',
                        input: 'hsl(var(--input))',
                        ring: 'hsl(var(--ring))',
                        background: 'hsl(var(--background))',
                        foreground: 'hsl(var(--foreground))',
                        primary: {
                            DEFAULT: 'hsl(var(--primary))',
                            foreground: 'hsl(var(--primary-foreground))'
                        },
                        secondary: {
                            DEFAULT: 'hsl(var(--secondary))',
                            foreground: 'hsl(var(--secondary-foreground))'
                        },
                        destructive: {
                            DEFAULT: 'hsl(var(--destructive))',
                            foreground: 'hsl(var(--destructive-foreground))'
                        },
                        muted: {
                            DEFAULT: 'hsl(var(--muted))',
                            foreground: 'hsl(var(--muted-foreground))'
                        },
                        accent: {
                            DEFAULT: 'hsl(var(--accent))',
                            foreground: 'hsl(var(--accent-foreground))'
                        },
                        popover: {
                            DEFAULT: 'hsl(var(--popover))',
                            foreground: 'hsl(var(--popover-foreground))'
                        },
                        card: {
                            DEFAULT: 'hsl(var(--card))',
                            foreground: 'hsl(var(--card-foreground))'
                        },
                    },
                }
            }
        }
    </script>
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

		<style type="text/tailwindcss">
			@layer base {
				:root {
					--background: 0 0% 100%;
--foreground: 240 10% 3.9%;
--card: 0 0% 100%;
--card-foreground: 240 10% 3.9%;
--popover: 0 0% 100%;
--popover-foreground: 240 10% 3.9%;
--primary: 240 5.9% 10%;
--primary-foreground: 0 0% 98%;
--secondary: 240 4.8% 95.9%;
--secondary-foreground: 240 5.9% 10%;
--muted: 240 4.8% 95.9%;
--muted-foreground: 240 3.8% 46.1%;
--accent: 240 4.8% 95.9%;
--accent-foreground: 240 5.9% 10%;
--destructive: 0 84.2% 60.2%;
--destructive-foreground: 0 0% 98%;
--border: 240 5.9% 90%;
--input: 240 5.9% 90%;
--ring: 240 5.9% 10%;
--radius: 0.5rem;
				}
				.dark {
					--background: 240 10% 3.9%;
--foreground: 0 0% 98%;
--card: 240 10% 3.9%;
--card-foreground: 0 0% 98%;
--popover: 240 10% 3.9%;
--popover-foreground: 0 0% 98%;
--primary: 0 0% 98%;
--primary-foreground: 240 5.9% 10%;
--secondary: 240 3.7% 15.9%;
--secondary-foreground: 0 0% 98%;
--muted: 240 3.7% 15.9%;
--muted-foreground: 240 5% 64.9%;
--accent: 240 3.7% 15.9%;
--accent-foreground: 0 0% 98%;
--destructive: 0 62.8% 30.6%;
--destructive-foreground: 0 0% 98%;
--border: 240 3.7% 15.9%;
--input: 240 3.7% 15.9%;
--ring: 240 4.9% 83.9%;
				}
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
                <a href="{{ route('categories.index') }}" class="mb-2 d-block">Categories</a>
                <a href="{{ route('categories.create') }}" class="mb-2 d-block">Add Category</a>
                <a href="{{ route('nomination.create') }}" class="mb-2 d-block">Nominate</a>
                <a href="{{ route('nominations.admin') }}" class="mb-2 d-block">Admin View</a>
                <a href="#" class="mb-2 d-block">Votes</a>
                <a href="#" class="mb-2 d-block">Contestants</a>
                <a href="{{ route('logout') }}" class="mb-2 d-block">Logout</a>
            </div>
        </div>
    </nav>

    <!-- Sidebar for Large Screens -->
    <div class="vertical-menu d-none d-lg-block">
        <div class="py-2 d-flex">
            <h4>Navigation</h4>
        </div>
        <div class="d-flex flex-column">
            <a href="{{ route('categories.index') }}">Categories</a>
            <a href="{{ route('categories.create') }}">Add Category</a>
            <a href="{{ route('nomination.create') }}">Nominate</a>
            <a href="{{ route('nominations.admin') }}">Admin View</a>
            {{-- <a href="{{ route('nominations.votes') }}">Live Voting</a> --}}
            <a href="{{ route('vote.index') }}">Votes</a>
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

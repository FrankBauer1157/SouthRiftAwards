<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    {{-- //meta tags for SEO and social media integration --}}
    <meta name="description" content="South Rift Matatu Awards is a prestigious event held annually in Kenya, featuring innovative and inspiring projects that showcase the talents, safety and creativity of South Rift residents.">
    <meta name="keywords" content="South Rift, Rift-Valley, Kenya, Matatu Awards, projects, innovative, creativity, talent">
    <meta property="og:title" content="South Rift Matatu Awards">
    <meta property="og:description" content="South Rift Matatu Awards is a prestigious event held annually in Bomet, Kenya, featuring innovative and inspiring projects that showcase the talents and creativity of South Rift residents.">

    <title>South Rift Matatu Awards</title>
    <link rel="shortcut icon" href="{{ asset('favicon.ico') }}">
    <link rel="apple-touch-icon" sizes="180x180" href="{{ asset('apple-touch-icon.png') }}">
    <link rel="icon" type="image/png" sizes="32x32" href="{{ asset('favicon-32x32.png') }}">
    <link rel="icon" type="image/png" sizes="16x16" href="{{ asset('favicon-16x16.png') }}">
    <link rel="manifest" href="{{ asset('manifest.json') }}">
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            background-color: #f8f9fa;
        }
        .sidebar {
            height: 100vh;
            width: 250px;
            position: fixed;
            background-color: #343a40;
            color: white;
            padding-top: 20px;
        }
        .sidebar h3 {
            text-align: center;
            margin-bottom: 30px;
        }
        .sidebar a {
            color: white;
            text-decoration: none;
            display: block;
            padding: 10px 20px;
            border-radius: 5px;
        }
        .sidebar a:hover {
            background-color: #495057;
        }
        /* .content {
            margin-left: 260px;
            padding: 20px;
        } */
    </style>
</head>
 <body>
    <!-- Vertical Sidebar Menu -->


    <!-- Main Content -->
    <div class="content">
        @yield('content') <!-- Content will be injected here -->
    </div>

    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>

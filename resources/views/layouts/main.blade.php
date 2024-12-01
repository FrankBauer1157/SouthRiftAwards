<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>South Rift Matatu Awards</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        .vertical-menu {
            width: 200px;
            background-color: #f8f9fa;
            padding: 20px;
            border-right: 1px solid #dee2e6;
            height: 100vh;
            position: fixed;
        }
        .vertical-menu a {
            text-decoration: none;
            color: #000;
            display: block;
            padding: 10px 15px;
            border-radius: 5px;
            margin-bottom: 10px;
            transition: background-color 0.3s;
        }
        .vertical-menu a:hover {
            background-color: #007bff;
            color: #fff;
        }
        .content {
            margin-left: 220px;
            padding: 20px;
        }
    </style>
</head>
<body>
    <div class="vertical-menu">
        <h4>Navigation</h4>
        <a href="{{ route('categories.index') }}">Categories</a>
        <a href="{{ route('categories.create') }}">Add Category</a>
        <a href="{{ route('nomination.create') }}">Nominate</a>
        <a href="{{ route('nominations.admin') }}">Admin View</a>
        <a href="#">Votes</a>
        <a href="#">Contestants</a>
        <a href="{{ route('logout') }}">Logout</a>
    </div>
    <div class="content">
        @yield('content')
    </div>
</body>
</html>

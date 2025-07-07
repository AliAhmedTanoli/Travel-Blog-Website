<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>My Favorite Travel Destinations</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            font-family: Arial, sans-serif;
            padding: 20px;
        }
        .content {
            max-width: 800px;
            margin: auto;
        }
        h1, h2, h3 {
            color: #2c3e50;
            margin-top: 20px;
            margin-bottom: 15px;
            padding-top: 10px;
            padding-bottom: 10px
        }
        .simple-card {
            border: 1px solid #ccc;
            padding: 10px;
            margin-bottom: 15px;
            border-radius: 5px;
        }
        .form-group {
            margin-bottom: 10px;
        }
    </style>
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-dark bg-primary">
    <div class="container">
        <a class="navbar-brand" href="/">Travel Blog</a>
        <ul class="navbar-nav">
            <li class="nav-item"><a class="nav-link text-white" href="/">Home</a></li>
            <li class="nav-item"><a class="nav-link text-white" href="/blog">Blog</a></li>
            <li class="nav-item"><a class="nav-link text-white" href="/contact">Contact</a></li>
        </ul>
    </div>
</nav>


    <div class="content">
        @yield('content')
    </div>
</body>
</html>

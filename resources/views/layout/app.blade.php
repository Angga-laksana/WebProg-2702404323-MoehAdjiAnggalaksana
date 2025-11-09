<!doctype html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>EduFun</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">
  <style>
    body { padding-top: 70px; }
    .post-excerpt { white-space: pre-line; }
    .hero { background: #f5f5f8; padding: 40px 0; margin-bottom: 30px; }
  </style>
</head>
<body>
<nav class="navbar navbar-expand-lg navbar-light bg-white fixed-top shadow-sm">
  <div class="container">
    <a class="navbar-brand fw-bold" href="{{ route('home') }}">EduFun</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#nav">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="nav">
      <ul class="navbar-nav ms-auto">
        <li class="nav-item"><a class="nav-link" href="{{ route('home') }}">Home</a></li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown">Category</a>
          <ul class="dropdown-menu">
            @foreach(App\Models\Category::all() as $cat)
              <li><a class="dropdown-item" href="{{ route('category.show', $cat->slug) }}">{{ $cat->name }}</a></li>
            @endforeach
          </ul>
        </li>
        <li class="nav-item"><a class="nav-link" href="{{ route('writers.index') }}">Writers</a></li>
        <li class="nav-item"><a class="nav-link" href="{{ route('about') }}">About Us</a></li>
      </ul>
    </div>
  </div>
</nav>

<main class="container">
  @yield('content')
</main>

<footer class="bg-light text-center py-4 mt-5">
  <div class="container">
    <small>@ EduFun 2024 | Web Programming | Your Name | Your NIM</small>
  </div>
</footer>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
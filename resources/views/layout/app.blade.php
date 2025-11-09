<!doctype html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>EduFun</title>
  @include('layout.bootstrap')
  <style>
    body { padding-top: 70px; }
    .post-excerpt { white-space: pre-line; }
    .hero { background: #f5f5f8; padding: 40px 0; margin-bottom: 30px; }
  </style>
</head>
<body>
@include('layout.header')

<main class="container">
  @yield('content')
</main>

@include('layout.footer')

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
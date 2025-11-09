<nav class="navbar navbar-expand-lg site-navbar">
  <div class="container-fluid">
    <a class="navbar-brand px-auto" href="#">
        <img height="47" width="128" src="{{ asset('img/Logo.png') }}" alt="">
    </a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>

    <!-- custom styles for active / spacing / bg / shadow -->
    <style>
      .site-navbar { background: #fff; box-shadow: 0 6px 18px rgba(0,0,0,0.08); }
      .site-navbar .container-fluid { padding-left: 1.5rem; padding-right: 1.5rem; }

      .navbar .nav-link { color: #1e1e1e; padding: .25rem .75rem; font-weight: 700; }
      .navbar .nav-link.active {
        color: #0d6efd;
        text-decoration: underline;
        text-decoration-thickness: 2px;
        text-underline-offset: 4px;
      }
      .navbar .navbar-nav { gap: 1.25rem; }
    </style>

    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav ms-auto mb-2 mb-lg-0 align-items-center">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="#">Home</a>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="categoryDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Category
          </a>
          <ul class="dropdown-menu" aria-labelledby="categoryDropdown">
            <li><a class="dropdown-item" href="#">Data Science</a></li>
            <li><a class="dropdown-item" href="#">Network Security</a></li>
          </ul>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Writers</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">About Us</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Popular</a>
        </li>
      </ul>
    </div>
  </div>
</nav>
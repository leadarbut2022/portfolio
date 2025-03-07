<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>@yield('title', 'My Portfolio')</title>
  <!-- Bootstrap CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" />
  <!-- FontAwesome -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" />
  <!-- Animate.css -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css" />
  @yield('styles')
  <style>
    /* أسلوب عام للـ body */
    body {
      margin: 0;
      overflow-x: hidden;
      font-family: 'Roboto', sans-serif;
      background: linear-gradient(135deg, #1a1a2e, #16213e, #0f3460, #53354a);
      color: #fff;
    }
    /* تنسيق المحتوى تحت الناف بار */
    .content {
      margin-top: 80px;
    }
    /* تخصيص تأثيرات الناف بار */
    .navbar .nav-link {
      transition: background-color 0.3s ease, color 0.3s ease;
      position: relative;
    }
    .navbar .nav-link:hover {
      background-color: #00ff00; /* لون عند المرور */
      color: #000; /* لون النص عند المرور */
      border-radius: 5px;
    }
    /* تمييز العنصر النشط */
    .navbar .nav-link.active {
      background-color: #00ff00; /* نفس لون hover للعناصر النشطة */
      color: #000;
      border-radius: 5px;
    }
    /* تأثير إضافي للناف بار نفسه */
    .navbar {
      transition: background-color 0.3s ease;
    }
  </style>
</head>
<body>
  <!-- Navbar -->
  <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top animate__animated animate__fadeInDown">
    <div class="container">
      <a class="navbar-brand" href="{{ route('home') }}">My Portfolio</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
              aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav ms-auto">
          <li class="nav-item">
            <a class="nav-link {{ Request::routeIs('home') ? 'active' : '' }}" href="{{ route('home') }}">Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link {{ Request::routeIs('projects') ? 'active' : '' }}" href="{{ route('projects') }}">Projects</a>
          </li>
          <li class="nav-item">
            <a class="nav-link {{ Request::routeIs('experience') ? 'active' : '' }}" href="{{ route('experience') }}">Experience</a>
          </li>
          <li class="nav-item">
            <a class="nav-link {{ Request::routeIs('about') ? 'active' : '' }}" href="{{ route('about') }}">About Me</a>
          </li>
          <li class="nav-item">
            <a class="nav-link {{ Request::routeIs('contact') ? 'active' : '' }}" href="{{ route('contact') }}">Contact</a>
          </li>
        </ul>
      </div>
    </div>
  </nav>

  <!-- المحتوى -->
  <div class="content">
    @yield('admin')
  </div>

  <!-- Bootstrap Bundle -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"></script>
  @yield('scripts')
</body>
</html>

<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>@yield('title', 'Restaurantly')</title>
  <meta name="description" content="@yield('description', 'Premium restaurant template')">
  <meta name="keywords" content="restaurant, food, dining">

  <!-- Favicons -->
  <link href="{{ asset('admin/assets/img/favicon.png') }}" rel="icon">
  <link href="{{ asset('admin/assets/img/apple-touch-icon.png') }}" rel="apple-touch-icon">

  <!-- Fonts -->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,300;0,400;0,600;0,700;1,400&family=Playfair+Display:wght@400;500;600;700&family=Roboto:wght@300;400;500;700&display=swap" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="{{ asset('admin/vendor/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">
  <link href="{{ asset('admin/vendor/bootstrap-icons/bootstrap-icons.css') }}" rel="stylesheet">
  <link href="{{ asset('admin/vendor/aos/aos.css') }}" rel="stylesheet">
  <link href="{{ asset('admin/vendor/glightbox/css/glightbox.min.css') }}" rel="stylesheet">
  <link href="{{ asset('admin/vendor/swiper/swiper-bundle.min.css') }}" rel="stylesheet">

  <!-- Main CSS File -->
  <link href="{{ asset('admin/css/main.css') }}" rel="stylesheet">
</head>

<body class="index-page">
  <header id="header" class="header fixed-top">
    <div class="topbar d-flex align-items-center">
      <div class="container d-flex justify-content-center justify-content-md-between">
        <div class="contact-info d-flex align-items-center">
          <i class="bi bi-envelope d-flex align-items-center"><a href="mailto:contact@example.com">contact@example.com</a></i>
          <i class="bi bi-phone d-flex align-items-center ms-4"><span>+1 5589 55488 55</span></i>
        </div>
        <div class="languages d-none d-md-flex align-items-center">
          <ul>
            <li>En</li>
            <li><a href="#">De</a></li>
          </ul>
        </div>
      </div>
    </div><!-- End Top Bar -->

    <div class="branding d-flex align-items-center">
      <div class="container position-relative d-flex align-items-center justify-content-between">
        <a href="{{ url('/') }}" class="logo d-flex align-items-center me-auto me-xl-0">
          <h1 class="sitename">Kidang Restaurantly</h1>
        </a>

        <nav id="navmenu" class="navmenu">
          <ul>
            <li><a href="#hero" class="{{ request()->is('/') ? 'active' : '' }}">Home</a></li>
            <li><a href="{{route('about')}}>About</a></li>
            <li><a href="{{route('menu')}}">Menu</a></li>
            <li><a href="#specials">Specials</a></li>
            <li><a href="#events">Events</a></li>
            <li><a href="{{route('chef')}}">Chefs</a></li>
            <li><a href="{{route('gallery')}}">Gallery</a></li>
            <li class="dropdown">
              <a href="#"><span>Dropdown</span> <i class="bi bi-chevron-down"></i></a>
              <ul>
                <li><a href="#">Dropdown 1</a></li>
                <li class="dropdown">
                  <a href="#"><span>Deep Dropdown</span> <i class="bi bi-chevron-down"></i></a>
                  <ul>
                    <li><a href="#">Deep Dropdown 1</a></li>
                    <li><a href="#">Deep Dropdown 2</a></li>
                    <li><a href="#">Deep Dropdown 3</a></li>
                    <li><a href="#">Deep Dropdown 4</a></li>
                    <li><a href="#">Deep Dropdown 5</a></li>
                  </ul>
                </li>
                <li><a href="#">Dropdown 2</a></li>
                <li><a href="#">Dropdown 3</a></li>
                <li><a href="#">Dropdown 4</a></li>
              </ul>
            </li>
            <li><a href="#contact">Contact</a></li>
          </ul>
          <i class="mobile-nav-toggle d-xl-none bi bi-list"></i>
        </nav>

        <a class="btn-book-a-table d-none d-xl-block" href="#book-a-table">Book a Table</a>
      </div>
    </div>
  </header>

  <main id="main">
    @yield('content')
  </main>

  <!-- Vendor JS Files -->
  <script src="{{ asset('admin/vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
  <script src="{{ asset('admin/vendor/aos/aos.js') }}"></script>
  <script src="{{ asset('admin/vendor/glightbox/js/glightbox.min.js') }}"></script>
  <script src="{{ asset('admin/vendor/swiper/swiper-bundle.min.js') }}"></script>
  
  <!-- Main JS File -->
  <script src="{{ asset('admin/js/main.js') }}"></script>
</body>
</html>
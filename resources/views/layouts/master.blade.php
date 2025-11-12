<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>@yield('title', 'EduFun')</title>
  @include('layouts.bootstrap')
  <style>
    html, body {
      height: 100%;
      margin: 0;
      display: flex;
      flex-direction: column;
      background-color: #f8f9fa;
      font-family: 'Poppins', sans-serif;
    }

    /* Navbar */
    .navbar {
      background-color: #fff;
      box-shadow: 0 2px 8px rgba(0,0,0,0.05);
    }
    .navbar-brand {
      font-weight: 700;
      color: #000 !important;
    }
    .nav-link {
      color: #000 !important;
      font-weight: 600;
      margin: 0 8px;
    }
    .nav-link:hover, .nav-link.active {
      color: #4a61ff !important;
    }

    /* Konten utama */
    main {
      flex: 1; /* konten isi ruang di tengah */
      padding-bottom: 20px;
    }

    /* Footer selalu di bawah */
    footer {
      background-color: #0b1b3f;
      color: #fff;
      padding: 15px 0;
      text-align: center;
      font-size: 14px;
      margin-top: auto; /* dorong ke bawah */
    }

    footer a {
      color: #ffffff;
      text-decoration: none;
    }

    footer a:hover {
      text-decoration: underline;
    }
  </style>
</head>
<body>
  {{-- Navbar --}}
  @include('layouts.header')

  {{-- Konten utama --}}
  <main class="container mt-4">
    @yield('content')
  </main>

  {{-- Footer --}}
  @include('layouts.footer')

</body>
</html>

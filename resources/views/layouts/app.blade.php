{{-- resources/views/layouts/app.blade.php --}}
<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>@yield('title', 'Mi Aplicación')</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
  <style>
    body { background: #f7f7f7; }
    .navbar-brand { font-weight: 600; }
    main { padding: 2rem 1rem; }
    footer { padding: 1rem 0; text-align: center; font-size: 0.9rem; color: #666; }
  </style>
</head>
<body>
  <nav class="navbar navbar-expand-lg navbar-light bg-white shadow-sm">
    <div class="container">
      <a class="navbar-brand" href="#">MiApp</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
          data-bs-target="#navMenu" aria-controls="navMenu" aria-expanded="false" aria-label="Abrir navegación">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navMenu">
        <ul class="navbar-nav ms-auto">
          <li class="nav-item">
            <a class="nav-link {{ request()->is('/') ? 'active' : '' }}" href="/">Opción 1</a>
          </li>
          <li class="nav-item">
            <a class="nav-link {{ request()->is('suma') ? 'active' : '' }}" href="/suma">Opción 2</a>
          </li>
          <li class="nav-item">
            <a class="nav-link {{ request()->is('productos*') ? 'active' : '' }}" href="/productos">Opción 3</a>
          </li>
        </ul>
      </div>
    </div>
  </nav>

  <main class="container">
    @yield('content')
  </main>

  <footer>
    &copy; {{ date('Y') }} MiApp. Todos los derechos reservados.
  </footer>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-cE1H0F+6X5g1J0ZK1vVgY3GfJDbC0u2/2aUdzUnQ1j7iBL+T/3HhFcxQVJYb7ijp" crossorigin="anonymous"></script>
</body>
</html>

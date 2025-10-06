<!doctype html>
<html lang="es">
<head>
  <meta charset="utf-8">
  <title>@yield('title','Estudiantes')</title>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="https://cdn.jsdelivr.net/npm/@picocss/pico@2/css/pico.min.css" rel="stylesheet">
</head>
<body>
<main class="container">
  <nav>
    <ul><li><strong>CRUD Estudiantes</strong></li></ul>
    <ul><li><a href="{{ route('estudiantes.index') }}">Listado</a></li></ul>
  </nav>

  @if(session('ok')) <article role="status">{{ session('ok') }}</article> @endif
  @yield('content')
</main>
</body>
</html>
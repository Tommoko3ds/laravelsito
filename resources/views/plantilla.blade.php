<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <main>
        @yield('titulo')
      <h1 >fdsfdff</h1>
</main>
@yield('contenido')
BIENVENIDOS
<a href="{{ route('alumnos') }}">Ver Alumnos</a>
<footer>
    @yield('footer')
    FOOTER ESTO ES EL FOOTEER
</footer>
</body>
</html>
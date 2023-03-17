<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    @yield('head')

    <title>@yield('titulo')</title>
</head>

<body>
    @include('partials.header')
    @yield('contenido')
    @include('partials.footer')
</body>

</html>

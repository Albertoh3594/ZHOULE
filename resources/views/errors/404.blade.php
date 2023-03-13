<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>404 ERROR</title>

    <!-- Google font -->
    <link href="https://fonts.googleapis.com/css?family=Montserrat:700,900" rel="stylesheet">

    <!-- CSS -->
    <link rel="stylesheet" href="{{ asset('css/errores.css') }}">

</head>

<body>

    <div id="main-error">
        <div class="container-error">
            <div class="content-error">
                <h1>404</h1>
                <h2>Pagina no encontrada</h2>
            </div>
            <a href="{{route('index')}}">Home</a>
        </div>
    </div>

</body>
</html>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie}=edge">
    <link rel="stylesheet" href="{{asset('css/css1.css')}}">
    <title>Menu</title>
</head>
<body>
<nav>
    <ul>
        <li><a href="{{Route('/')}}">Inicio</a></li>
        <li><a href="{{Route('servicios')}}">Servicios</a></li>
        <li><a href="{{Route('productos')}}">Productos</a></li>
        <li><a href="{{Route('contacto')}}">Contacto</a></li>
    </ul>
</nav>
</body>
</html>
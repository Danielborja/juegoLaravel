<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Login</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />

        <!-- Styles -->
        
    </head>
    <body class="antialiased">

        <h1>Bienvenido al sistema de control </h1>
    <ul>
        <li><a href="{{ route('login') }}">Login</a></li>
        {{-- <li><a href="{{ route('register') }}">Registrarse como paciente o doctor</a></li> --}}
    </ul>

    </body>
</html>

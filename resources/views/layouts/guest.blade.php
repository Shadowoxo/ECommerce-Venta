<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>@yield('title', 'Tienda - Invitado')</title>
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
</head>
<body>

    
    @include('layouts.navigation-guest')

    <main class="container mt-4">
        @yield('content')
    </main>

</body>
</html>

<!-- resources/views/layouts/GuestLayout.php -->

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Tienda - Invitado</title>
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
</head>
<body>
    <nav>
        <ul>
            <li><a href="{{ route('products.index') }}">Productos</a></li>
            <li><a href="{{ route('login') }}">Iniciar sesión</a></li>
            <li><a href="{{ route('register') }}">Registrarse</a></li>
        </ul>
    </nav>

    <main>
        @yield('content')
    </main>
</body>
</html>

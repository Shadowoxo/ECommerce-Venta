<!-- resources/views/layouts/AppLayout.php -->

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Panel - Tienda</title>
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
</head>
<body>
    <nav>
        <ul>
            <li><a href="{{ route('products.index') }}">Productos</a></li>
            <li><a href="{{ route('cart.index') }}">Carrito</a></li>
            @auth
                @if(auth()->user()->isAdmin())
                    <li><a href="{{ route('products.create') }}">Crear Producto</a></li>
                @endif
                <li><a href="{{ route('profile.edit') }}">Perfil</a></li>
                <li>
                    <form method="POST" action="{{ route('logout') }}">
                        @csrf
                        <button type="submit">Cerrar sesión</button>
                    </form>
                </li>
            @endauth
        </ul>
    </nav>

    <main>
        @if (session('success'))
            <div class="alert alert-success">{{ session('success') }}</div>
        @endif

        @yield('content')
    </main>
</body>
</html>

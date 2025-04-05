<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>@yield('title', 'Tienda en Línea')</title>
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <script defer src="https://unpkg.com/alpinejs@3.x.x/dist/cdn.min.js"></script>

</head>
<body>

    {{-- Navegación para usuarios autenticados --}}
    @auth
        @include('layouts.navigation')
    @else
        @include('layouts.navigation-guest')
    @endauth

    <main class="container mt-4">
        {{-- Mensaje de éxito --}}
        @if(session('success'))
            <div class="alert alert-success">
                {{ session('success') }}
            </div>
        @endif

        {{-- Contenido dinámico de cada vista --}}
        @yield('content')
    </main>

</body>
</html>

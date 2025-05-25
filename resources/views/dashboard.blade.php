<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Mi Tienda')</title>

    {{-- Archivos CSS y JS con Vite --}}
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="bg-white dark:bg-gray-900 text-gray-900 dark:text-white">

    {{-- Contenido de la vista hija --}}
    <main class="min-h-screen">
        @yield('content')
    </main>

</body>
</html>

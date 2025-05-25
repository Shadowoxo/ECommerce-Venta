@extends('layouts.app')

@section('title', 'Bienvenido a nuestra tienda')


@section('content')
    <div class="hero min-h-screen bg-gradient-to-r from-sky-100 via-sky-200 to-sky-300 dark:from-neutral dark:via-neutral-700 dark:to-neutral-800">
        <div class="hero-content flex-col md:flex-row-reverse items-center gap-10">
            <img src="{{ asset('img/carrito-ecommerce.jpg') }}"
                 alt="Ecommerce online"
                 class="shadow-xl border-2 border-gray-100 dark:border-neutral-700 rounded-3xl max-w-[280px] sm:max-w-[350px] lg:max-w-[450px]" />

            <div class="max-w-3xl">
                <h1 class="text-5xl font-extrabold text-gray-800 dark:text-white leading-tight">
                    Todo lo que necesitas en un solo lugar
                </h1>
                <p class="py-6 text-lg text-gray-600 dark:text-gray-300">
                    Explora nuestra tienda en línea y encuentra productos de calidad al mejor precio. Compra desde casa con total seguridad y confianza.
                </p>
                <a href="{{ route('register') }}"
                   class="bg-blue-500 hover:bg-blue-600 text-white px-6 py-3 rounded-xl text-sm font-semibold transition duration-300 shadow-lg">
                    Crea tu cuenta y empieza a comprar
                </a>
            </div>
        </div>
    </div>

    <div class="h-auto py-10 bg-white dark:bg-neutral flex items-center justify-center dark:text-gray-100">
        <div class="container mx-auto">
            <div class="flex justify-center">
                <div class="w-4/5 md:w-3/5 text-center">
                    <h2 class="text-4xl font-bold">¡Disfruta una nueva experiencia de compra!</h2>
                    <p class="mt-3 text-gray-600 dark:text-gray-300">
                        Carrito inteligente, productos personalizados y un proceso de compra rápido y seguro.
                    </p>
                </div>
            </div>
        </div>
    </div>
@endsection

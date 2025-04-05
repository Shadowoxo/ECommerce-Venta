@extends('layouts.app')

@section('title', 'Compra Exitosa')

@section('content')
<div class="flex items-center justify-center min-h-[70vh] px-4">
    <div class="bg-white dark:bg-gray-800 shadow-lg rounded-lg p-10 text-center max-w-lg w-full animate-fade-in">
        <div class="flex justify-center mb-6">
            <div class="bg-green-100 dark:bg-green-700 text-green-600 dark:text-white p-4 rounded-full">
                <svg class="w-8 h-8" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M5 13l4 4L19 7" />
                </svg>
            </div>
        </div>

        <h1 class="text-2xl md:text-3xl font-bold text-gray-900 dark:text-white mb-2">
            ✅ ¡Gracias por tu compra!
        </h1>

        <p class="text-gray-600 dark:text-gray-300 mb-6">
            Tu pedido ha sido procesado correctamente. Te enviaremos una notificación con los detalles.
        </p>

        <a href="{{ route('products.index') }}"
           class="inline-block bg-pink-500 hover:bg-pink-600 text-white px-6 py-3 rounded-lg font-semibold transition transform hover:-translate-y-1 hover:shadow-lg">
            🛍️ Volver a la tienda
        </a>
    </div>
</div>

<!-- Animación Fade-In -->
<style>
    .animate-fade-in {
        animation: fadeIn 0.6s ease-out forwards;
        opacity: 0;
    }
    @keyframes fadeIn {
        to {
            opacity: 1;
        }
    }
</style>
@endsection

@extends('layouts.app')

@section('title', 'Editar Producto')

@section('content')
<div class="max-w-4xl mx-auto bg-white p-8 rounded-xl shadow-md mt-6">
    <h1 class="text-3xl font-bold mb-6 text-gray-800 text-center">Editar producto</h1>

    <form action="{{ route('products.update', $product) }}" method="POST" enctype="multipart/form-data" class="space-y-6">
        @csrf
        @method('PUT')

        <div>
            <label class="block text-sm font-medium text-gray-700">Nombre</label>
            <input type="text" name="name" value="{{ $product->name }}" required
                class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:ring-indigo-500 focus:border-indigo-500">
        </div>

        <div>
            <label class="block text-sm font-medium text-gray-700">Descripción</label>
            <textarea name="description" rows="4"
                class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:ring-indigo-500 focus:border-indigo-500">{{ $product->description }}</textarea>
        </div>

        <div>
            <label class="block text-sm font-medium text-gray-700">Precio ($)</label>
            <input type="number" step="0.01" name="price" value="{{ $product->price }}" required
                class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:ring-indigo-500 focus:border-indigo-500">
        </div>

        <div>
            <label class="block text-sm font-medium text-gray-700">Categoría</label>
            <input type="text" name="category" value="{{ $product->category }}"
                class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:ring-indigo-500 focus:border-indigo-500">
        </div>

        <div>
            <label class="block text-sm font-medium text-gray-700">Etiquetas</label>
            <input type="text" name="tags" value="{{ $product->tags }}"
                class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:ring-indigo-500 focus:border-indigo-500"
                placeholder="Ej: nuevo, oferta, popular">
        </div>

        @if($product->image)
        <div>
            <label class="block text-sm font-medium text-gray-700">Imagen actual</label>
            <img src="{{ asset('storage/' . $product->image) }}" class="w-40 h-auto mt-2 rounded shadow">
        </div>
        @endif

        <div>
            <label class="block text-sm font-medium text-gray-700">Cambiar imagen</label>
            <input type="file" name="image"
                class="mt-1 block w-full text-sm text-gray-500 file:mr-4 file:py-2 file:px-4 file:rounded-md file:border-0 file:text-sm file:font-semibold file:bg-indigo-50 file:text-indigo-700 hover:file:bg-indigo-100">
        </div>

        <div class="text-center">
            <button type="submit"
                class="bg-indigo-600 hover:bg-indigo-700 text-white font-semibold py-2 px-6 rounded-lg transition duration-300">
                Actualizar producto
            </button>
        </div>
    </form>
</div>
@endsection

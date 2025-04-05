@extends('layouts.app')

@section('title', 'Lista de Productos')

@section('content')
<div class="container mx-auto px-4 py-8">
    <h1 class="text-3xl font-bold text-center mb-8 text-gray-800 dark:text-white">Productos en la Tienda</h1>

   
    <form action="{{ route('products.index') }}" method="GET" class="mb-8 max-w-md mx-auto">
        <div class="flex items-center gap-2">
            <input type="text" name="search" value="{{ request('search') }}" placeholder="Buscar productos..." class="w-full px-4 py-2 rounded border dark:bg-gray-700 dark:text-white">
            <button type="submit" class="px-4 py-2 bg-pink-500 text-white rounded hover:bg-pink-600 transition">Buscar</button>
        </div>
    </form>

    @if($products->isEmpty())
        <p class="text-center text-gray-500 dark:text-gray-300">No hay productos disponibles.</p>
    @else
        <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-6">
            @foreach($products as $product)
                <div class="bg-white dark:bg-gray-800 rounded-xl shadow-md hover:shadow-lg transition p-4 flex flex-col justify-between">
               
                    <h3 class="text-xl font-semibold text-gray-900 dark:text-white mb-2">{{ $product->name }}</h3>

                   
                    @if($product->image && file_exists(public_path('storage/' . $product->image)))
                        <img src="{{ asset('storage/' . $product->image) }}" alt="Imagen del producto" class="w-full h-48 object-cover rounded mb-4">
                    @else
                        <img src="{{ asset('img/default-product.png') }}" alt="Sin imagen" class="w-full h-48 object-cover rounded mb-4">
                    @endif

               
                    <p class="text-sm text-gray-700 dark:text-gray-300 mb-1">{{ $product->description }}</p>
                    <p class="text-sm text-gray-700 dark:text-gray-300"><strong>Precio:</strong> ${{ number_format($product->price, 2) }}</p>
                    <p class="text-sm text-gray-700 dark:text-gray-300"><strong>Categoría:</strong> {{ $product->category }}</p>
                    <p class="text-sm text-gray-700 dark:text-gray-300"><strong>Etiquetas:</strong> {{ $product->tags }}</p>

                   
                    <form action="{{ route('cart.add', $product->id) }}" method="POST" class="mt-4">
                        @csrf
                        <div class="flex items-center gap-2">
                            <input type="number" name="quantity" value="1" min="1" class="w-16 px-2 py-1 rounded border dark:bg-gray-700 dark:text-white">
                            <button type="submit" class="px-4 py-2 bg-green-500 text-white rounded hover:bg-green-600 transition">Agregar al carrito</button>
                        </div>
                    </form>

                  
                    @if(auth()->check() && auth()->user()->is_admin)
                        <div class="mt-4 flex justify-between text-sm">
                            <a href="{{ route('products.edit', $product) }}" class="text-blue-500 hover:underline">Editar</a>
                            <form action="{{ route('products.destroy', $product) }}" method="POST" onsubmit="return confirm('¿Seguro que deseas eliminar este producto?')">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="text-red-500 hover:underline">Eliminar</button>
                            </form>
                        </div>
                    @endif
                </div>
            @endforeach
        </div>


        <div class="mt-6 flex justify-center">
            {{ $products->links() }}
        </div>
    @endif
</div>
@endsection

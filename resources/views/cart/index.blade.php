@extends('layouts.app')

@section('title', 'Carrito de Compras')

@section('content')
<div class="max-w-6xl mx-auto px-4 py-10">
    <h1 class="text-3xl font-bold text-center text-gray-900 dark:text-white mb-8">
        🛒 Carrito de Compras
    </h1>

    @if($cartItems->isEmpty())
        <div class="text-center text-gray-500 dark:text-gray-400 text-lg">
            Tu carrito está vacío. <br>
            <a href="{{ route('products.index') }}" class="text-pink-500 hover:underline font-medium">Ver productos</a>
        </div>
    @else
    
        <div class="overflow-x-auto bg-white dark:bg-gray-800 shadow-md rounded-lg">
            <table class="min-w-full divide-y divide-gray-200 dark:divide-gray-700 text-sm text-gray-800 dark:text-gray-100">
                <thead class="bg-gray-100 dark:bg-gray-700 uppercase text-xs font-medium">
                    <tr>
                        <th class="px-4 py-3 text-left">Producto</th>
                        <th class="px-4 py-3 text-center">Cantidad</th>
                        <th class="px-4 py-3 text-center">Precio</th>
                        <th class="px-4 py-3 text-center">Subtotal</th>
                        <th class="px-4 py-3 text-center">Acción</th>
                    </tr>
                </thead>
                <tbody class="divide-y divide-gray-100 dark:divide-gray-700">
                    @foreach($cartItems as $item)
                        <tr class="hover:bg-gray-50 dark:hover:bg-gray-700 transition">
                            <td class="flex items-center gap-4 px-4 py-4">
                                @if($item->product->image)
                                    <img src="{{ asset('storage/' . $item->product->image) }}" alt="Imagen" class="w-10.3 h-10.4 object-cover rounded shadow-sm">
                                @endif
                                <span class="font-semibold">{{ $item->product->name }}</span>
                            </td>
                            <td class="px-4 py-4 text-center">{{ $item->quantity }}</td>
                            <td class="px-4 py-4 text-center">${{ number_format($item->product->price, 2) }}</td>
                            <td class="px-4 py-4 text-center text-green-500 font-semibold">${{ number_format($item->subtotal, 2) }}</td>
                            <td class="px-4 py-4 text-center">
                                <form action="{{ route('cart.remove', $item->id) }}" method="POST" onsubmit="return confirm('¿Eliminar este producto del carrito?')">
                                    @csrf
                                    @method('DELETE')
                                    <button class="text-red-500 hover:underline font-medium">Eliminar</button>
                                </form>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>


        <div class="flex flex-col md:flex-row justify-between items-center mt-6 gap-4">
            <h2 class="text-xl font-bold text-gray-900 dark:text-white">
                Total: <span class="text-blue-600">${{ number_format($total, 2) }}</span>
            </h2>
            <form action="{{ route('checkout.process') }}" method="POST">
                @csrf
                <button type="submit"
                        class="bg-pink-500 hover:bg-pink-600 text-white font-semibold px-6 py-2 rounded-lg shadow transition hover:-translate-y-1 hover:shadow-lg">
                    Finalizar compra
                </button>
            </form>
        </div>
    @endif
</div>
@endsection


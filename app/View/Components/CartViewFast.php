<!-- resources/views/cart/index.blade.php -->

@extends('layouts.AppLayout')

@section('content')
    <h1>Tu Carrito</h1>

    @if($cartItems->isEmpty())
        <p>No tienes productos en tu carrito.</p>
    @else
        <table>
            <thead>
                <tr>
                    <th>Producto</th>
                    <th>Cantidad</th>
                    <th>Precio Unitario</th>
                    <th>Subtotal</th>
                    <th>Acciones</th>
                </tr>
            </thead>
            <tbody>
                @foreach($cartItems as $item)
                    <tr>
                        <td>{{ $item->product->name }}</td>
                        <td>{{ $item->quantity }}</td>
                        <td>${{ number_format($item->product->price, 2) }}</td>
                        <td>${{ number_format($item->subtotal, 2) }}</td>
                        <td>
                            <form action="{{ route('cart.remove', $item->id) }}" method="POST">
                                @csrf
                                @method('DELETE')
                                <button type="submit">Eliminar</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>

        <h3>Total: ${{ number_format($total, 2) }}</h3>

        <form action="{{ route('checkout.process') }}" method="POST">
            @csrf
            <button type="submit">Finalizar compra</button>
        </form>
    @endif
@endsection

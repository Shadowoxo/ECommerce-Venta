<?php

namespace App\Http\Controllers;

use App\Models\Cart;
use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class CartController extends Controller
{
    // Mostrar productos en el carrito
    public function index()
    {
        $cartItems = Auth::user()->cart()->with('product')->get();
        $total = $cartItems->sum(fn($item) => $item->quantity * $item->product->price);

        return view('cart.index', compact('cartItems', 'total'));
    }

    // Agregar producto al carrito
    public function add(Request $request, Product $product)
    {
        $validated = $request->validate([
            'quantity' => 'required|integer|min:1'
        ]);

        $cartItem = Cart::updateOrCreate(
            ['user_id' => Auth::id(), 'product_id' => $product->id],
            ['quantity' => \DB::raw("quantity + {$validated['quantity']}")]
        );

        return redirect()->route('cart.index')->with('success', 'Producto agregado al carrito');
    }

    // Eliminar producto del carrito
    public function remove($id)
    {
        $item = Cart::findOrFail($id);
        if ($item->user_id === Auth::id()) {
            $item->delete();
        }

        return redirect()->route('cart.index')->with('success', 'Producto eliminado del carrito');
    }

    // Checkout simulado
    public function checkout()
    {
        // Aquí podrías guardar una orden real si tuvieras lógica para eso
        Auth::user()->cart()->delete(); // Vacía el carrito
        return redirect()->route('checkout.success');
    }
}

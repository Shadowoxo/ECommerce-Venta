<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class ProductController extends Controller
{
   
    public function index(Request $request)
    {
        $query = Product::query();

       
        if ($request->filled('search')) {
            $query->where(function ($q) use ($request) {
                $q->where('name', 'like', '%' . $request->search . '%')
                  ->orWhere('description', 'like', '%' . $request->search . '%');
            });
        }

       
        if ($request->filled('min_price')) {
            $query->where('price', '>=', $request->min_price);
        }

        if ($request->filled('max_price')) {
            $query->where('price', '<=', $request->max_price);
        }

      
        if ($request->filled('categories')) {
            $query->whereIn('category', $request->categories);
        }

        
        if ($request->filled('tags')) {
            $query->where(function ($q) use ($request) {
                foreach ($request->tags as $tag) {
                    $q->orWhere('tags', 'like', "%$tag%");
                }
            });
        }

        
        $products = $query->paginate(12)->withQueryString();

        return view('products.index', compact('products'));
    }

    
    public function create()
    {
        return view('products.create');
    }

    
    public function store(Request $request)
    {
        $data = $request->validate([
            'name'        => 'required|string|max:255',
            'description' => 'nullable|string',
            'price'       => 'required|numeric|min:0',
            'category'    => 'nullable|string|max:100',
            'tags'        => 'nullable|string',
            'image'       => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);

        if ($request->hasFile('image')) {
            $path = $request->file('image')->store('products', 'public');
            $data['image'] = $path;
        }

        Product::create($data);

        return redirect()->route('products.index')->with('success', 'Producto creado correctamente.');
    }

   
    public function show(Product $product)
    {
        return view('products.show', compact('product'));
    }

   
    public function edit(Product $product)
    {
        return view('products.edit', compact('product'));
    }

   
    public function update(Request $request, Product $product)
    {
        $data = $request->validate([
            'name'        => 'required|string|max:255',
            'description' => 'nullable|string',
            'price'       => 'required|numeric|min:0',
            'category'    => 'nullable|string|max:100',
            'tags'        => 'nullable|string',
            'image'       => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);

        if ($request->hasFile('image')) {
            if ($product->image) {
                Storage::disk('public')->delete($product->image);
            }

            $path = $request->file('image')->store('products', 'public');
            $data['image'] = $path;
        }

        $product->update($data);

        return redirect()->route('products.index')->with('success', 'Producto actualizado correctamente.');
    }

    
    public function destroy(Product $product)
    {
        if ($product->image) {
            Storage::disk('public')->delete($product->image);
        }

        $product->delete();

        return redirect()->route('products.index')->with('success', 'Producto eliminado correctamente.');
    }
}

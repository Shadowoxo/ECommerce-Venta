<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Product;

class ProductSeeder extends Seeder
{
  
    public function run(): void
    {
        $products = [
            [
                'name' => 'Audífonos Bluetooth',
                'description' => 'Audífonos inalámbricos con cancelación de ruido.',
                'price' => 499.99,
                'image' => 'https://via.placeholder.com/300x300.png?text=Audifonos',
                'category' => 'electronica',
                'tags' => 'nuevo, oferta',
            ],
            [
                'name' => 'Camiseta Negra',
                'description' => 'Camiseta básica 100% algodón.',
                'price' => 199.99,
                'image' => 'https://via.placeholder.com/300x300.png?text=Camiseta',
                'category' => 'ropa',
                'tags' => 'ropa, oferta',
            ],
            [
                'name' => 'Licuadora de Alta Potencia',
                'description' => 'Ideal para smoothies y sopas.',
                'price' => 699.00,
                'image' => 'https://via.placeholder.com/300x300.png?text=Licuadora',
                'category' => 'hogar',
                'tags' => 'nuevo',
            ],
            [
                'name' => 'Zapatos Deportivos',
                'description' => 'Perfectos para correr y caminar.',
                'price' => 899.50,
                'image' => 'https://via.placeholder.com/300x300.png?text=Zapatos',
                'category' => 'deportes',
                'tags' => 'nuevo, destacado',
            ],
            [
                'name' => 'Smartwatch Fitness',
                'description' => 'Mide tu actividad diaria y notificaciones.',
                'price' => 1499.90,
                'image' => 'https://via.placeholder.com/300x300.png?text=Smartwatch',
                'category' => 'electronica',
                'tags' => 'nuevo',
            ],
            [
                'name' => 'Set de Vasos de Vidrio',
                'description' => 'Juego de 6 vasos resistentes.',
                'price' => 299.00,
                'image' => 'https://via.placeholder.com/300x300.png?text=Vasos',
                'category' => 'hogar',
                'tags' => 'hogar, limitado',
            ],
            [
                'name' => 'Mochila Escolar',
                'description' => 'Amplio espacio y diseño ergonómico.',
                'price' => 350.00,
                'image' => 'https://via.placeholder.com/300x300.png?text=Mochila',
                'category' => 'otro',
                'tags' => 'oferta',
            ],
            [
                'name' => 'Jersey Deportivo',
                'description' => 'Para entrenamientos o uso casual.',
                'price' => 299.00,
                'image' => 'https://via.placeholder.com/300x300.png?text=Jersey',
                'category' => 'deportes',
                'tags' => 'deportes, nuevo',
            ],
        ];

        foreach ($products as $product) {
            Product::create($product);
        }
    }
}

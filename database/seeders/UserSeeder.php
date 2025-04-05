<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Crea usuarios por defecto para el sistema.
     */
    public function run(): void
    {
        // Usuario administrador
        User::create([
            'name' => 'Admin',
            'email' => 'admin@tienda.com',
            'password' => Hash::make('admin123'),
            'is_admin' => true,
        ]);

        // Usuario cliente
        User::create([
            'name' => 'Cliente',
            'email' => 'cliente@tienda.com',
            'password' => Hash::make('cliente123'),
            'is_admin' => false,
        ]);
    }
}

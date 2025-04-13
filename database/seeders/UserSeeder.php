<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    
    public function run(): void
    {
      
        User::create([
            'name' => 'Admin Uno',
            'email' => 'admin1@tienda.com',
            'password' => Hash::make('admin123'),
            'is_admin' => true,
        ]);

        User::create([
            'name' => 'Admin Dos',
            'email' => 'admin2@tienda.com',
            'password' => Hash::make('admin123'),
            'is_admin' => true,
        ]);

     
        User::create([
            'name' => 'Cliente Uno',
            'email' => 'cliente1@tienda.com',
            'password' => Hash::make('cl13nt3004@'),
            'is_admin' => false,
        ]);

        User::create([
            'name' => 'Cliente Dos',
            'email' => 'cliente2@tienda.com',
            'password' => Hash::make('cl13nt3004@'),
            'is_admin' => false,
        ]);

        User::create([
            'name' => 'Cliente Tres',
            'email' => 'cliente3@tienda.com',
            'password' => Hash::make('cl13nt3004@'),
            'is_admin' => false,
        ]);

        User::create([
            'name' => 'Cliente Cuatro',
            'email' => 'cliente4@tienda.com',
            'password' => Hash::make('cl13nt3004@'),
            'is_admin' => false,
        ]);
    }
}

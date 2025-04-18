<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Ejecuta los seeders del sistema.
     */
    public function run(): void
    {
        // Llama al seeder de usuarios
        $this->call(UserSeeder::class);
    }
}

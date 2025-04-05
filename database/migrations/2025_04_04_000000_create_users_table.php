<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Ejecuta la migración.
     */
    public function up(): void
    {
        Schema::create('users', function (Blueprint $table) {
            $table->id();

            // ✅ Rol administrativo (true = admin, false = cliente)
            $table->boolean('is_admin')->default(false);

            // 🧍 Información del usuario
            $table->string('name');
            $table->string('email')->unique();
            $table->timestamp('email_verified_at')->nullable();
            $table->string('password')->nullable();

            // 🔗 Campos para autenticación por redes sociales (opcional)
            $table->string('provider')->nullable();        // Ej. "google", "facebook"
            $table->string('provider_id')->nullable();     // ID del proveedor
            $table->string('provider_token')->nullable();  // Token de acceso del proveedor

            $table->rememberToken(); // Para "recordarme" al iniciar sesión
            $table->timestamps();    // created_at y updated_at
        });
    }

    /**
     * Revierte la migración.
     */
    public function down(): void
    {
        Schema::dropIfExists('users');
    }
};

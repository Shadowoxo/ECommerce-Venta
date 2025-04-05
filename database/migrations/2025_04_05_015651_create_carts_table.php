<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Ejecuta la migración para crear la tabla carts.
     */
    public function up()
    {
        Schema::create('carts', function (Blueprint $table) {
            $table->id();

            // Relación con usuario (cliente)
            $table->foreignId('user_id')->constrained()->onDelete('cascade');

            // Relación con el producto agregado al carrito
            $table->foreignId('product_id')->constrained()->onDelete('cascade');

            // Cantidad del producto
            $table->integer('quantity')->default(1);

            $table->timestamps();
        });
    }

    /**
     * Revierte la migración.
     */
    public function down()
    {
        Schema::dropIfExists('carts');
    }
};

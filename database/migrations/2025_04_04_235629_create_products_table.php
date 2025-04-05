<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProductsTable extends Migration
{
    public function up()
    {
        Schema::create('products', function (Blueprint $table) {
            $table->id();

            $table->string('name');                       // Nombre del producto
            $table->text('description')->nullable();     // Descripción del producto
            $table->decimal('price', 8, 2);              // Precio
            $table->string('category')->nullable();      // ✅ Nueva columna: Categoría
            $table->string('tags')->nullable();          // ✅ Nueva columna: Etiquetas
            $table->string('image')->nullable();         // Imagen del producto

            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('products');
    }
}

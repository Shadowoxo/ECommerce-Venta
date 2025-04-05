<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
  
    public function up()
    {
        Schema::create('compras', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('id_usuario')->nullable()->index('id_usuario');
            $table->unsignedBigInteger('id_curso')->nullable()->index('id_curso');
            $table->timestamps();
        });
    }

   
    public function down()
    {
        Schema::dropIfExists('compras');
    }
};

<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateFotoProductosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('fotoProductos', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('IdProducto');
            $table->string('Nombre');
            $table->string('Titulo');
            $table->string('TextoAlterno');
            $table->timestamps();

            $table->foreign('IdProducto')->references('id')->on('productos');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('fotoProductos');
    }
}

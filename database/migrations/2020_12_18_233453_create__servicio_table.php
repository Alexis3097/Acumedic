<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateServicioTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('Servicio', function (Blueprint $table) {
            $table->id();
            $table->string('Nombre');
            $table->string('DescripcionCorta');
            $table->string('DescripcionLarga');
            $table->string('Logo');
            $table->string('TextoLogo');
            $table->string('Imagen');
            $table->string('TextoImagen');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('Servicio');
    }
}

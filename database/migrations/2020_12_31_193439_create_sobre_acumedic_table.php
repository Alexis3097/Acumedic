<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSobreAcumedicTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('SobreAcumedic', function (Blueprint $table) {
            $table->id();
            $table->string('Titulo1');
            $table->text('Informacion1');
            $table->string('Titulo2')->nullable();
            $table->text('Informacion2')->nullable();
            $table->string('Titulo3')->nullable();
            $table->text('Informacion3')->nullable();
            $table->string('Foto');
            $table->string('TituloImagen');
            $table->string('TextoAlterno');
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
        Schema::dropIfExists('SobreAcumedic');
    }
}

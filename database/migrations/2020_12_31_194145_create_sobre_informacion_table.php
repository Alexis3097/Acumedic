<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSobreInformacionTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('Informacion', function (Blueprint $table) {
            $table->id();
            $table->string('Titulo1');
            $table->text('Informacion1');
            $table->string('Titulo2');
            $table->text('Informacion2');
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
        Schema::dropIfExists('Informacion');
    }
}

<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDetalleAntecedenteTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('DetalleAntecedente', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('IdTipoAntecedente');
            $table->string('Nombre');
            $table->string('Descripcion');
            $table->softDeletes();
            $table->timestamps();

            $table->foreign('IdTipoAntecedente')->references('id')->on('TipoAntecedente');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('DetalleAntecedente');
    }
}

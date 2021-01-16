<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSolicitudCitasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('SolicitudCitas', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('IdEstatusSolicitud');
            $table->string('NombreCompleto');
            $table->string('Correo');
            $table->string('Ciudad');
            $table->string('Telefono');
            $table->timestamps();
            $table->foreign('IdEstatusSolicitud')->references('id')->on('EstatusSolicitud');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('SolicitudCitas');
    }
}

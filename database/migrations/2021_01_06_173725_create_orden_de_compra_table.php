<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateOrdenDeCompraTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('OrdenDeCompra', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('IdProducto');
            $table->unsignedBigInteger('IdDireccion');
            $table->unsignedBigInteger('IdEstatusSolicitud');
            $table->string('NombreCompleto');
            $table->string('Correo');
            $table->string('Telefono');
            $table->Integer('Cantidad');
            $table->float('Total');
            $table->timestamps();

            $table->foreign('IdProducto')->references('id')->on('productos');
            $table->foreign('IdDireccion')->references('id')->on('Direccion');
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
        Schema::dropIfExists('OrdenDeCompra');
    }
}

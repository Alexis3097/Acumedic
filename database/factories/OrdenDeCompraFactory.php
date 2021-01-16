<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Models\Producto;
use App\Models\Direccion;
use App\Models\OrdenDeCompra;
use Faker\Generator as Faker;

$factory->define(OrdenDeCompra::class, function (Faker $faker) {
    return [
        'IdProducto'  => function () {
            return factory(Producto::class)->create();
        },
        'IdDireccion' => function () {
            return factory(Direccion::class)->create();
        },
        'IdEstatusSolicitud'=> 1,
        'NombreCompleto' => $faker->name,
        'Correo' => $faker->unique()->safeEmail,
        'Telefono'=> $faker->phoneNumber,
        'Cantidad'=> 1,
        'Total'=> 100,
    ];
});

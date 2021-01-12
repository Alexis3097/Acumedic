<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Models\Producto;
use Faker\Generator as Faker;

$factory->define(Producto::class, function (Faker $faker) {
    return [
        'Nombre' => $faker->name,
        'PrecioCompra' => 50,
        'PrecioPublico' => 100,
        'Estrellas' => 5,
        'DescripcionCorta' => $faker->name,
        'DescripcionLarga' => $faker->text,
        'CodigoBarra' => '001',
    ];
});

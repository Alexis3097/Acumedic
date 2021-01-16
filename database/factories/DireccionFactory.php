<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Models\Direccion;
use Faker\Generator as Faker;

$factory->define(Direccion::class, function (Faker $faker) {
    return [
        'Estado' => $faker->Address,
        'Municipio' => $faker->Address,
        'Colonia' => $faker->Address,
        'Calle' => $faker->Address,
        'NoExterior' => $faker->Address,
        'NoInterior' => $faker->Address,
        'Calle1' => $faker->Address,
        'Calle2' => $faker->Address,
    ];
});

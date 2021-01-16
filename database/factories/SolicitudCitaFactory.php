<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use Faker\Generator as Faker;
use App\Models\SolicitudCitas;

$factory->define(SolicitudCitas::class, function (Faker $faker) {
    return [
        'IdEstatusSolicitud' => 1,
        'NombreCompleto' => $faker->name,
        'Correo' => $faker->unique()->safeEmail,
        'Ciudad' =>  $faker->address,
        'Telefono' =>  $faker->PhoneNumber,
    ];
});

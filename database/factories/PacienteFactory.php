<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Models\Paciente;
use Faker\Generator as Faker;

$factory->define(Paciente::class, function (Faker $faker) {
        return [
            'IdSexo' => 1,
            'Nombre'=> $faker->name,
            'ApellidoPaterno' => $faker->name,
            'ApellidoMaterno' => $faker->name,
            'FechaNacimiento'=> $faker->date($format = 'Y-m-d', $max = 'now'),
            'Telefono' => $faker->phoneNumber,
            'LugarOrigen'=> 'Conocida',
            'Correo'=> $faker->unique()->safeEmail,
            'TipoSangre' => 'A+',
        ];
});

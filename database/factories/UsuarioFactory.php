<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\User;
use Faker\Generator as Faker;
use Illuminate\Support\Facades\Hash;

$factory->define(User::class, function (Faker $faker) {
    return [
        'IdSexo' => 1,
        'name'=> $faker->name,
        'ApellidoPaterno' => $faker->name,
        'ApellidoMaterno' => $faker->name,
        'FechaNacimiento'=> $faker->date($format = 'Y-m-d', $max = 'now'),
        'Telefono' => $faker->phoneNumber,
        'email'=> $faker->unique()->safeEmail,
        'password'=> Hash::make('admin'),
    ];
});

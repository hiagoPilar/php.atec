<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Membro;
use Faker\Generator as Faker;

$factory->define(Membro::class, function (Faker $faker) {
    return [
        'nome' => $faker->name,
        'n_matricula' => $faker->unique()->numberBetween(1, 1000),
        'aniversario' => $faker->date(),
        'mensalidade' => $faker->boolean(50),
    ];
});

<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Livro;
use Faker\Generator as Faker;

$factory->define(Livro::class, function (Faker $faker) {
    return [
        'titulo' => $faker->sentence(3),
        'autor' => $faker->name,
        'ano_publicacao' => $faker->year
    ];
});

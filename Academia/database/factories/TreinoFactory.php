<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Treino;
use Faker\Generator as Faker;
use App\Membro;

$factory->define(Treino::class, function (Faker $faker) {
    return [
        'id_membro' => function(){
            return factory(Membro::class)->create()->id;
        },
        'tipo' => $faker->randomElement(['superior', 'inferior', 'cardio']),
        'data' => $faker->dateTimeBetween('now', '+1 year'),
        'duracao' => $faker->numberBetween(30, 90),
        'notas' => $faker->text(150),

    ];
});

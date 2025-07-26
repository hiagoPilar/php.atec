<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Assinatura;
use Faker\Generator as Faker;
use App\Membro;

$factory->define(Assinatura::class, function (Faker $faker) {
    return [
        'id_membro' => function(){
            return factory(Membro::class)->create()->id;
        },
        'tipo' => $faker->randomElement(['basico', 'custom', 'premium']),
        'data_inicio' => $faker->dateTimeBetween('-1 year', 'now'),
        'data_fim' => $faker->dateTimeBetween('now', '+1 year'),
        'ativo' => $faker->boolean(50),


    ];
});

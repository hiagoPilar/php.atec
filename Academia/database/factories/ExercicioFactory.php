<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Exercicio;
use Faker\Generator as Faker;
use App\Equipamento;

$factory->define(Exercicio::class, function (Faker $faker) {
    return [
        'id_equipamento' => function(){
            return factory(Equipamento::class)->create()->id;
        },
        'tipo' => $faker->randomElement(['supino', 'rosca', 'agachamento', 'testa', 'remada', 'corrida']),
        'descricao' => $faker->text(150),
        
    ];
});

<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Equipamento;
use Faker\Generator as Faker;

$factory->define(Equipamento::class, function (Faker $faker) {
    return [
        'nome' => $faker->randomElement(['cadeira_ext', 'alteres', 'barra', 'polia', 'esteira']),
        
    ];

    
   
});

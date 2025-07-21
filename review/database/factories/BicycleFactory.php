<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Bicycle;
use App\User;
use Faker\Generator as Faker;

$factory->define(Bicycle::class, function (Faker $faker) {
    
    
    return [
        
        'user_id' => function(){return User::inRandomOrder()->first()->id;},
        'brand' => $faker->randomElement(['Caloi', 'Monark', 'Track', 'Giant']),
        'color' => $faker->safeColorName,
        'price' => $faker->randomFloat(2, 500, 5000),
    ];
});

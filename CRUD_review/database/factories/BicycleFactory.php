<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Bicycle;
use Faker\Generator as Faker;

$factory->define(Bicycle::class, function (Faker $faker) {
    return [
        'brand' => $faker->randomElement(['Monark', 'Caloi', 'Adventure']),
        'model' => $faker->randonElement(['A25', 'A15', 'A45']),
        'color' => $faker->hexColor();
        'price' => $faker->randomFloat(2, 10, 1000),
        'user_id' => function(){
            return factory(User::class)->create()->id;
        }

    ];
});

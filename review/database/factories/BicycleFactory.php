<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Bicycle;
use Faker\Generator as Faker;

$factory->define(Bicycle::class, function (Faker $faker) {
    return [
        
        'user_id' => factory(App\User::class)->create()->id,
        'brand' => $faker->word,
        'model' => $faker->word,
        'color' => $faker->safeColorName,
        'price' => $faker->numberBetween(100, 5000)
    ];
});

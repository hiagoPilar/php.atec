<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Bicycle;
use App\User;
use Faker\Generator as Faker;

$factory->define(Bicycle::class, function (Faker $faker) {
    return [
        'brand' => $this->faker->randomElement(['Trek', 'Specialized', 'Giant', 'Cannondale', 'Scott']),
        'model' => $this->faker->word() . ' ' . $this->faker->randomNumber(3),
        'color' => $this->faker->colorName(),
        'price' => $this->faker->randomFloat(2, 100, 5000),
        'user_id' => User::inRandomOrder()->first()->id,
    ];
});

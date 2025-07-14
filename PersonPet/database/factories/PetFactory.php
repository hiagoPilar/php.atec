<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Pet;
use Faker\Generator as Faker;

$factory->define(Pet::class, function (Faker $faker) {
    return [
        'name' => $faker->word,
        'color' => $faker->safeColorName,
        'birthdate' => $faker->dateTimeBetween('-10 years', 'now')->format('Y-m-d'),
        'created_at' => now(),
        'updated_at' => now(),
        'people_id' => $faker->numberBetween(1, 100) // Assuming there are 100 people created
        // --- IGNORE ---
    ];
});

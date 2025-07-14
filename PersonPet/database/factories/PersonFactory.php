<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Person;
use Faker\Generator as Faker;

$factory->define(Person::class, function (Faker $faker) {
    return [
        'name' => $faker->name,
        'birthdate' => $faker->dateTimeBetween('-50 years', '-10 years')->format('Y-m-d'),
        'email' => $faker->unique()->safeEmail,
        'created_at' => now(),
        'updated_at' => now()
    ];
});

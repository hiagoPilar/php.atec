<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\User;
use App\Country; 
use Faker\Generator as Faker;
use Illuminate\Support\Str;

/*
|--------------------------------------------------------------------------
| Model Factories
|--------------------------------------------------------------------------
|
| This directory should contain each of the model factory definitions for
| your application. Factories provide a convenient way to generate new
| model instances for testing / seeding your application's database.
|
*/

$factory->define(User::class, function (Faker $faker) {
    
    $nameParts = explode(' ', $faker->name);

    $firstName = array_shift($nameParts);

    $lastName = implode(' ', $nameParts);
    
    return [

        'first_name' => $firstName,
        'last_name' => $lastName,
        'birthdate' => $faker->dateTimeBetween('-30 years', '-18 years'),
        'country_id' => function () {
            return Country::inRandomOrder()->first()->id;
        },
    ];
});

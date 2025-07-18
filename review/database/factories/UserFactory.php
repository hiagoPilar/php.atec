<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\User;
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
    return [

        'country_id' => factory(App\Country::class)->create()->id,

        'first_name' => $faker->name,
        'last_name' => $faker->name,
        'birthdate' => $faker->dateTimeBetween('-30 years', '-18 years'),
    ];
});

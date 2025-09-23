<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Person;
use Faker\Generator as Faker;

$factory->define(Person::class, function (Faker $faker) {
    return [
        'name' => $faker->name,
        'birthdate' => $faker->date(),
        'email' => $faker->unique()->safeEmail,
        'address_id' => function (){
            return factory(App\Address::class)->create()->id();
        }
    ];
});

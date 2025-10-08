<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Address;
use Faker\Generator as Faker;

$factory->define(Address::class, function (Faker $faker) {
    return [
        'street' => $faker->streetAddress,
        'city' => $faker->city,
        'state' => $faker->state,
        'zip_code' => $faker->postcode,
    ];
});

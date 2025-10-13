<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Teacher;
use App\School;
use Faker\Generator as Faker;

$factory->define(Teacher::class, function (Faker $faker) {
    return [
        'school_id' => School::inRandomOrder()->first()->id ?? factory(Scholl::class)->create()->id,
        'first_name' => $faker->firstName,
        'last_name' => $faker->lastName,
        'hire_date' => $faker->date(),
    ];
});

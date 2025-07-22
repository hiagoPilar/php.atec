<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Car;
use App\Brand;
use Faker\Generator as Faker;

$factory->define(Car::class, function (Faker $faker) {
    return [
        
        'brand_id' => function(){
            return Brand::inRandomOrder()->first()->id;
        },
        'registration' => $faker->unique()->regexify('[A-Z]{3}-[0-9]{4}'),
        'year_of_manufacture' => $faker->dateTimeBetween('-1950 years', '-2025 years'),
        'color' => $faker->safeColorName
    ];
});

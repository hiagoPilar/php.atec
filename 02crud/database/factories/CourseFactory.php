<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Course;
use App\Teacher;
use Faker\Generator as Faker;

$factory->define(Course::class, function (Faker $faker) {
    return [
        'teacher_id' => Teacher::inRandomOrder()->first()->id ?? factory(Teacher::class)->create()->id,
        'title' => $faker->sentence(3),
        'category' => $faker->randomElement(['Matematica', 'Ciencias', 'Fisica', 'Biologia']),
        'price' => $faker->randomFloat(2, 50, 300),
    ];
});

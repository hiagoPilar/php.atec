<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Product;
use App\Project;
use App\Category;
use Faker\Generator as Faker;

$factory->define(Product::class, function (Faker $faker) {
    return [
        'name' => $faker->words(2, true),
        'details' => $faker->paragraph(3),
        'category_id' => Category::inRandomOrder()->first()->id,
        'project_id' => Project::inRandomOrder()->first()->id,
    ];
});
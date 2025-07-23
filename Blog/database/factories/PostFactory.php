<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Post;
use App\Autor;
use App\Categoria;
use Faker\Generator as Faker;

$factory->define(Post::class, function (Faker $faker) {
    return [
        'titulo' => $faker->word,
        'conteudo' => $faker->sentence,
        'autor_id' => function (){
            return Autor::inRandomOrder()->first()->id;
        },
        'categoria_id' => function(){
            return Categoria::inRandomOrder()->first()->id;
        },
        'publicado_em' => $faker->dateTimeBetween('-1 year', 'now'),
    ];
});


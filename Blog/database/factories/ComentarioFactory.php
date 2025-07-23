<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Comentario;
use App\Post;
use Faker\Generator as Faker;

$factory->define(Comentario::class, function (Faker $faker) {
    return [
        'post_id' => function(){
            return Post::inRandomOrder()->first()->id;
        },
        'nome_autor' => $faker->word,
        'email_autor' => $faker->safeEmail,
        'conteudo' => $faker->paragraph,
        'aprovado' => $faker->boolean(70),
    ];
});

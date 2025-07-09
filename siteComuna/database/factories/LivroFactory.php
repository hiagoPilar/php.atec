<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Livros;
use App\User;
use App\Categoria;
use Faker\Generator as Faker;
use Illuminate\Support\Str;

$factory->define(Livros::class, function (Faker $faker) {
    
    // Garante que exista pelo menos 1 usuário e 1 categoria
    $user = User::firstOrCreate(
        ['email' => 'admin@example.com'],
        [
            'name' => 'Admin',
            'password' => bcrypt('password')
        ]
    );

    $categoria = Categoria::firstOrCreate(
        ['nome' => 'Geral'],
        ['descricao' => 'Categoria padrão']
    );
    
    $titulo = $faker->unique()->sentence(3);
    return [
        'titulo' => $titulo,
        'autor' => $faker->name,
        'slug' => Str::slug($titulo),
        'capa' => $faker->imageUrl(640, 480, 'abstract', true, 'Faker'),
        'id_user' => $user->id,
        'id_categoria' => $categoria->id

    ];
});

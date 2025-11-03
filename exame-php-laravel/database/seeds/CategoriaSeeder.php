<?php

use Illuminate\Database\Seeder;

class CategoriaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
         public function run()
    {
        $categories = [
            ['name' => 'Quarto'],
            ['name' => 'Sala'],
            ['name' => 'Cozinha'],
            ['name' => 'Casa de Banho'],
        ];

        foreach ($categorias as $categoria) {
            Categoria::create($categoria);
        }
    }
    }
}

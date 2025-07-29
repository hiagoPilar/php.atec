<?php

use Illuminate\Database\Seeder;
use App\Categorie;

class CategorieSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        

        $categories = [
        ['name' => 'Quarto'],
        ['name' => 'Sala'],
        ['name' => 'Cozinha'],
        ['name' => 'Casa de Banho']
        ];

        foreach ($categories as $categoryData){
            Categorie::create($categoryData);
        };
        

    }
}

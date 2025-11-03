<?php

use App\Category;
use Illuminate\Database\Seeder;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $categories = ['Quarto', 'Sala', 'Cozinha', 'Casa de Banho'];

        foreach ($categories as $category) {
            Category::create(['name' => $category]);
        }
    }
}

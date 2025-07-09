<?php

use Illuminate\Database\Seeder;
use App\Livros;

class LivrosSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(Livros::class, 20)->create();
    }
}

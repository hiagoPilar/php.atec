<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // $this->call(UsersTableSeeder::class);
        $this->call(AutorSeeder::class, 20);
        $this->call(CategoriaSeeder::class, 5);
        $this->call(PostSeeder::class, 50);
        $this->call(ComentarioSeeder::class, 100);
    }
}

<?php

use App\Bicycle;
use App\User;
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
        // 1. Seed dos países PRIMEIRO
        $this->call(CountrySeeder::class);

        // 2. Aguardar um pouco para garantir que os países foram criados
        sleep(1);

        // 3. Criar 100 users (cada um com country_id)
        factory(User::class, 100)->create();

        // 4. Criar 200 bicycles (2 por user)
        User::all()->each(function ($user) {
            factory(Bicycle::class, 2)->create(['user_id' => $user->id]);
        });
    }
}

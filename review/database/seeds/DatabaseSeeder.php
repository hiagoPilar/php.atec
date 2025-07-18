<?php

use App\User;
use Illuminate\Database\Seeder;
use App\Country;
use App\Bicycle;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call(User::class);
        $this->call(Country::class);
        $this->call(Bicycle::class);

        //cria os paises
        $this->call(CountrySeeder::class);

        //chama os users
        $this->call(UserSeeder::class);

    }
}

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
        $this->call(CountrySeeder::class);

        $this->call(BicycleSeeder::class);
        
        $this->call(UserSeeder::class);
        
    }
}

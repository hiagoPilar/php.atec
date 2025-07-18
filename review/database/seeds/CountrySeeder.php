<?php

use Illuminate\Database\Seeder;
use App\Country;

class CountrySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $countries = [
            ['name' => 'Portugal'],
            ['name' => 'Espanha'], 
            ['name' => 'França'],
            ['name' => 'Polônia']
        ];

        // Usa firstOrCreate para evitar duplicatas
        foreach ($countries as $country) {
            Country::firstOrCreate($country);
        }
    }
}

<?php

use App\Country;
use Illuminate\Database\Seeder;

class CountrySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('countries')->delete();

        $countries = [
            ['name' => 'Portugal'],
            ['name' => 'Espanha'],
            ['name' => 'França'],
            ['name' => 'Polónia']
        ];

        foreach ($countries as $country){
            Country::create($country);
        }
    }
}

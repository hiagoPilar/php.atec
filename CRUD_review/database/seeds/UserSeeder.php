<?php

use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(User::class, 100)->create([
            'country_id' => function (){
                return factory(Country::class)->create()->id;
            }

        ]),
    }
}

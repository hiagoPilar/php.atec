<?php

use Illuminate\Database\Seeder;

class BicycleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(Bicycle::class, 200)->create([
            'user_id' => function(){
                return factory(User::class)->create(2)->id;
            }
        ]);
    }
}

<?php

use App\Bicycle;
use Illuminate\Database\Seeder;
use App\User;

class BicycleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //para cada user, cria 2 bicycle
        User::all()->each(function ($user) {
        factory(Bicycle::class, 2)->create(['user_id' => $user->id]); // 2 bikes por user
    });
    }
}

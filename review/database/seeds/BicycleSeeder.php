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
        $users = User::all(); //obtem todos os users

        //para cada user, cria 2 bicycle
        $users->each(function ($user){
            factory(Bicycle::class, 2)->create([
                'user_id' => $user->id //associa ao user atual
            ]);
        });
    }
    
}

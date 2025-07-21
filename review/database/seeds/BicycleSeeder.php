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
        
       
        
        factory(Bicycle::class, 200)->create();
        
        $users = User::all(); //obtem todos os users

        //para cada user, cria 2 bicycle
        foreach($users as $user){
            $user->bicycles()->createMany(
                factory(Bicycle::class, 2)->make()->toArray()
            );
        }
    }
    
}

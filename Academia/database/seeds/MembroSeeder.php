<?php

use Illuminate\Database\Seeder;
use App\Membro;
use App\Assinatura;

class MembroSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        
        //cria 30 membros cada um com sua assinatura
        factory(Membro::class, 30)->create()->each(function($membro){
            //criar uma assinatura para cada membro
            $membro->assinatura()->save(factory(Assinatura::class)->create());
        });

        // Ou alternativa mais explícita:
        /*
        factory(Membro::class, 30)->create()->each(function ($membro) {
            factory(Assinatura::class)->create([
                'id_membro' => $membro->id
            ]);
        });
        */
    }
}

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
        
        // Cria 30 membros cada um com sua assinatura
        factory(Membro::class, 30)->create()->each(function($membro) {
            // Cria e associa a assinatura ao membro corretamente
            $membro->assinatura()->create([
                'tipo' => 'basico', // ou use valores do seu ENUM
                'data_inicio' => now(),
                'data_fim' => now()->addYear(),
                'ativo' => true
            ]);
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

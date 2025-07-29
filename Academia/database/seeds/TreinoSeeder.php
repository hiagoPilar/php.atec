<?php

use Illuminate\Database\Seeder;
use App\Membro;
use App\Treino;
use Random\RandomException;

class TreinoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //verifica e cria membros se preciso
        if(Membro::count() === 0){
            $this->command->info('Nenhum membro');

            factory(Membro::class, 10)->create();
        }

        //obten membros sem treino
        $membrosSemTreino = Membro::doesntHave('treinos')->get(); 

        if($membrosSemTreino->isEmpty()){
            $this->command->info('Todos os membros possuem treino');
            return;
        }


        // Obter membros existentes
        $membros = Membro::all();
        
        // Criar treinos para cada membro
        $membros->each(function ($membro) {

            $tiposDisponiveis = ['superior', 'inferior', 'cardio'];
            $tipoSelecionado = $tiposDisponiveis[array_rand($tiposDisponiveis)];

            $membro->treinos()->create([
                'id_membro' => $membro->id_membro,
                'tipo' => $tipoSelecionado,
                'data' => now()->addDays(rand(1, 30)), // Data entre 1 e 30 dias no futuro
                'duracao' => rand(30, 90) . 'minutos', // Corrigido de random() para rand()
                'notas' => 'Treino gerado automaticamente'
            ]);
        });

        /*
        //cria treino para cada membro
        $membrosSemTreino->each(function($membro){
            
            $tipos = ['superior', 'inferior', 'cardio'];
            
            factory(Treino::class)->create([
               'id_membro' => $membro->id_membro,
                'tipo' => $tipos[array_rand($tipos)],
                'data' => now()->addDays(rand(1, 30)), // Data entre 1 e 30 dias no futuro
                'duracao' => rand(30, 90) . ' minutos', // Corrigido de random() para rand()
                'notas' => 'Treino gerado automaticamente' // Adicionado valor para notas

            ]);
        });
        */
    }
}

<?php

use Illuminate\Database\Seeder;
use App\Membro;
use App\Assinatura;

class AssinaturaSeeder extends Seeder
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
            $this-> command->info('Nenhum membro');
            factory(Membro::class, 10)->create();
        }

        //obtem usuarios sem assinatura
        $membrosSemAssinatura = Membro::doesntHave('assinatura')->get();
        
        if($membrosSemAssinatura->isEmpty()){
            $this->command->info('Todos os membros com assinatura');
            return;
        }

        $this->command->info("Criando perfis para {$membrosSemAssinatura->count()} usuarios...");

        
        //cria uma assinatura para cada usuarios
        $membrosSemAssinatura->each(function($membro){
            
            $tipos = ['basic', 'custom', 'premium'];
            
            factory(Assinatura::class)->create([
                'id_membro' => $membro->id_membro,
                'tipo' => $tipos[array_rand($tipos)],
                'data_inicio' => now()->subDays(rand(1, 30)), // Início entre 1 e 30 dias atrás
                'data_fim' => now()->addMonths(rand(1, 12)), // Fim entre 1 e 12 meses no futuro
                'ativo' => rand(0, 1) // 50% de chance de estar ativo
            ]);
        });
        
    }
}

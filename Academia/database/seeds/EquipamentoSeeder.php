<?php

use Illuminate\Database\Seeder;
use App\Equipamento;
use App\Exercicio;

class EquipamentoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Primeiro cria 5 equipamentos automaticamente
        $equipamentos = factory(Equipamento::class, 5)->create();

        // Depois cria 15 exercícios associando a equipamentos existentes
        factory(Exercicio::class, 15)->create([
            'id_equipamento' => function () use ($equipamentos) {
                return $equipamentos->random()->id;
            }
        ]);

    }
}

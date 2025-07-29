<?php

use Illuminate\Database\Seeder;
use App\Exercicio;

class ExercicioSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Tipos de exercícios que queremos criar
        $tiposExercicios = [
            'supino', 'rosca', 'agachamento', 'testa', 'remada', 'corrida'
        ];

        // Para cada tipo, cria um exercício (e automaticamente um equipamento)
        foreach ($tiposExercicios as $tipo) {
            factory(Exercicio::class)->create([
                'tipo' => $tipo,
            ]);
        }
    }
}



<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // $this->call(UsersTableSeeder::class);

        // Desabilita as foreign keys para evitar erros
        DB::statement('SET FOREIGN_KEY_CHECKS=0;');
        
        // Limpa todas as tabelas
        App\Membro::truncate();
        App\Assinatura::truncate();
        App\Treino::truncate();
        App\Equipamento::truncate();
        App\Exercicio::truncate();
        DB::table('treinos_exercicios')->truncate();
        
        // Habilita as foreign keys novamente
        DB::statement('SET FOREIGN_KEY_CHECKS=1;');

        $this->call(MembroSeeder::class);
        $this->call(AssinaturaSeeder::class);
        $this->call(TreinoSeeder::class);
        $this->call(EquipamentoSeeder::class);
        $this->call(ExercicioSeeder::class);
    }
}

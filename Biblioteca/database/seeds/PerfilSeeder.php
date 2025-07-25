<?php

use Illuminate\Database\Seeder;
use App\Perfil;
use App\Usuario;

class PerfilSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Verifica e cria usuários se necessário
        if (Usuario::count() === 0) {
            $this->command->info('Nenhum usuário encontrado. Criando 10 usuários...');
            factory(Usuario::class, 10)->create();  // ← Formato Laravel 7
        }

        // Obtém usuários sem perfil
        $usuariosSemPerfil = Usuario::doesntHave('perfil')->get();

        if ($usuariosSemPerfil->isEmpty()) {
            $this->command->info('Todos os usuários já possuem perfis');
            return;
        }

        $this->command->info("Criando perfis para {$usuariosSemPerfil->count()} usuários...");

        // Cria um perfil para cada usuário
        $usuariosSemPerfil->each(function ($usuario) {
            factory(Perfil::class)->create([  // ← Formato Laravel 7
                'usuario_id' => $usuario->id,
                'endereco' => 'Endereço do ' . $usuario->nome,
                'telefone' => '(11) 9' . rand(1000, 9999) . '-' . rand(1000, 9999)
            ]);
        });

        $this->command->info('Perfis criados com sucesso!');
    }
}


<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use App\Usuario;
use App\Perfil;
use App\Categoria;
use App\Livro;
use App\Comentario;

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
        App\Usuario::truncate();
        App\Perfil::truncate();
        App\Livro::truncate();
        App\Comentario::truncate();
        App\Categoria::truncate();
        DB::table('categoria_livro')->truncate();
        
        // Habilita as foreign keys novamente
        DB::statement('SET FOREIGN_KEY_CHECKS=1;');

        $this->call(CategoriaSeeder::class);
        $this->call(UsuarioSeeder::class);
        $this->call(PerfilSeeder::class);
        $this->call(LivroSeeder::class);
        $this->call(ComentarioSeeder::class);

    }
}

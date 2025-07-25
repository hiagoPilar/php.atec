<?php

use Illuminate\Database\Seeder;
use App\Livro;
use App\Categoria;
use App\Comentario;
use App\Usuario;

class LivroSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    /*public function run()
    {
        
        // 1. Primeiro verifique/crie categorias se necessário
        if (Categoria::count() === 0) {
            $this->command->info('Nenhuma categoria encontrada, criando 5 categorias...');
            factory(Categoria::class, 5)->create();
        }
        
        factory(Livro::class, 20)->create();
        
        $livros = Livro::all();

        // Busca as categorias já criadas pelo CategoriaSeeder
        $categorias = Categoria::all();
        
        // Busca os comentários já criados pelo ComentarioSeeder
        $comentarios = Comentario::all();
        
        // Busca os usuários já criados pelo UsuarioSeeder
        $usuarios = Usuario::all();

        $livros->each(function($livro) use ($categorias, $comentarios, $usuarios) {
            // Associa categorias
            if($categorias->isNotEmpty()) {
                $livro->categorias()->attach(
                    $categorias->random(rand(1, 3))->pluck('id')->toArray()
                );
            }

            // Associa alguns comentários ao livro
            $comentarios->random(rand(1, 5))->each(function($comentario) use ($livro, $usuarios) {
                $comentario->usuario()->associate($usuarios->random());
                $livro->comentarios()->save($comentario);
            });
        });
    }*/
    public function run()
    {
        // 1. Verifica/Cria categorias se necessário
        if (Categoria::count() === 0) {
            $this->command->info('Nenhuma categoria encontrada, criando 5 categorias...');
            factory(Categoria::class, 5)->create();
        }

        // 2. Cria livros
        $livros = factory(Livro::class, 20)->create();
        $categorias = Categoria::all();
        
        
        // 3. Obtém comentários e usuários (se existirem)
        $comentarios = Comentario::whereNull('livro_id')->get();
        $usuarios = Usuario::all();

        $livros->each(function($livro) use ($categorias, $comentarios, $usuarios) {
            // Associação segura de categorias
            if($categorias->isNotEmpty()) {
                $qtdCategorias = Categoria::all();
                $qtdCategorias = rand(1, min(3, $categorias->count()));
                $livro->categorias()->attach(
                    $categorias->random($qtdCategorias)->pluck('id')
                    // Removi ->toArray() pois o attach() aceita Collection
                );
            }

            
            // Associação segura de comentários
            if($comentarios->isNotEmpty() && $usuarios->isNotEmpty()) {
                $qtdComentarios = $comentarios->whereNull('livro_id');
                $qtdComentarios = rand(3, min(5, $comentarios->count()));
                $comentarios->random($qtdComentarios)->each(function($comentario) use ($livro, $usuarios) {
                    $comentario->update([
                        'livro_id' => $livro->id,
                        'usuario_id' => $usuarios->random()->id
                    ]);
                });
            }
            


        });

        $this->command->info('Seeders de livros e relações concluídos!');
    }
   
}




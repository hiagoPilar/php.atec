<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAssinaturasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('assinaturas', function (Blueprint $table) {
            $table->id();
             // Cria a coluna E a foreign key de uma vez (maneira moderna Laravel 7+)
            $table->foreignId('id_membro')
              ->constrained('membros')  // Nome da tabela referenciada
              ->onDelete('cascade');   // Remove assinatura se membro for excluído

            $table->enum('tipo', ['basico', 'custom', 'premium']);
            $table->date('data_inicio');
            $table->date('data_fim');
            $table->boolean('ativo')->default(true);

            
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('assinaturas');
    }
}

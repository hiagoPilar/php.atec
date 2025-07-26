<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateExerciciosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('exercicios', function (Blueprint $table) {
            $table->id();

            $table->foreignId('id_equipamento')
              ->constrained('equipamentos') // Nome da tabela
              ->onDelete('cascade'); // Remove exercícios se equipamento for excluído

            
            $table->enum('tipo', ['supino', 'rosca', 'agachamento', 'testa', 'remada', 'corrida']);
            $table->string('descricao');

           
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
        Schema::dropIfExists('exercicios');
    }
}

<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTreinosExerciciosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('treinos_exercicios', function (Blueprint $table) {
            
            
            // Crie as colunas primeiro (sem ser foreign key ainda)
            $table->unsignedBigInteger('id_exercicio');
            $table->unsignedBigInteger('id_treino');
            
            // Definir as chaves estrangeiras EXPLICITAMENTE
            $table->foreign('id_exercicio')
                ->references('id')
                ->on('exercicios')  // Nome correto da tabela
                ->onDelete('cascade');
            
            $table->foreign('id_treino')
                ->references('id')
                ->on('treinos')     // Nome correto da tabela
                ->onDelete('cascade');
            
            // Definir chave primária composta
            $table->primary(['id_exercicio', 'id_treino']);
            
            // Tipos mais adequados para sets e repetições
            $table->unsignedTinyInteger('sets'); // Números pequenos (0-255)
            $table->unsignedSmallInteger('repeticoes'); // Números médios (0-65535)
            
           

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
        Schema::dropIfExists('treinos_exercicios');
    }
}

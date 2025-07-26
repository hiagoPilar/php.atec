<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTreinosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('treinos', function (Blueprint $table) {
            $table->id();
            
            $table->foreignId('id_membro')
              ->constrained('membros') // Nome da tabela referenciada
              ->onDelete('cascade');   // Remove treinos se membro for excluído
            $table->enum('tipo', ['superior', 'inferior', 'cardio' ]);
            $table->date('data');
            $table->time('duracao');
            $table->string('notas');

            
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
        Schema::dropIfExists('treinos');
    }
}

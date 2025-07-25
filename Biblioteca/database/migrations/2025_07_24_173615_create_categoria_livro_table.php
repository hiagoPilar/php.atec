<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCategoriaLivroTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('categoria_livro', function (Blueprint $table) {
            $table->foreignId('livro_id')->constrained()->onDelete('cascade');
            $table->foreignId('categoria_id')->constrained()->onDelete('cascade');
            $table->primary(['livro_id', 'categoria_id']);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('categoria_livro');
    }
}

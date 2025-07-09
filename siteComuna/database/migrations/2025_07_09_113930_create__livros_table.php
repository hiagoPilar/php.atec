<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateLivrosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('_livros', function (Blueprint $table) {
            $table->id();
            
            $table->string('titulo');
            $table->string('autor');
            $table->string('slug')->unique();
            $table->string('capa')->nullable();
            $table->foreignId('id_user')->constrained('users');
            $table->foreignId('id_categoria')->constrained('categorias');

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
        Schema::dropIfExists('_livros');
    }
}

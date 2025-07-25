<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Livro extends Model
{
    protected $fillable = [
        'titulo', 'autor', 'ano_publicacao'
    ];

    public function comentarios(){
        return $this->hasMany(Comentario::class);
    }

    public function categorias(){
        return $this->belongsToMany(Categoria::class, 'categoria_livro');
    }
}

<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Categoria extends Model
{
    protected $fillable = [
        'nome'
    ];

    public function livros(){
        return $this->belongsToMany(Livro::class, 'categoria_livro');
    }

}

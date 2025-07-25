<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Comentario extends Model
{
    protected $fillable = [
        'livro_id', 'usuario_id',
        'texto'
    ];

    public function livro(){
        return $this->belongsTo(Livro::class);
    }

    public function usuario(){
        return $this->belongsTo(Usuario::class);
    }
}

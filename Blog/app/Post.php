<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    protected $fillable = [
        'titulo', 'conteudo',
        'autor_id', 'categoria_id',
        'publicado_em'
    ];

    public function autor(){
        return $this->belongsTo(Autor::class);
    }

    public function post(){
        return $this->belongsTo(Post::class);
    }

    public function comentarios(){
        return $this->hasMany(Comentario::class);
    }
}


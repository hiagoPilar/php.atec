<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Comentario extends Model
{
    protected $fillable = [
        'post_id', 'nome_autor',
        'email_autor', 'conteudo',
        'aprovacao'
    ];

    public function post(){
        return $this->belongsTo(Post::class);
    }
}

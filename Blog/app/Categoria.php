<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Categoria extends Model
{
    protected $fillable = [
        'nome', 'descricao'
    ];

    public function posts(){
        return $this->hasMany(Post::class);
    }
}

<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Usuario extends Model
{
    protected $fillable = [
        'nome', 'email'
    ];

    public function comentarios(){
        return $this->hasMany(Comentario::class);
    }

    public function perfil(){
        return $this->hasOne(Perfil::class);
    }
}



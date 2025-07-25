<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Perfil extends Model
{
    protected $fillable = [
        'usuario_id', 'endereco',
        'telefone'
    ];

    public function usuario(){
        return $this->hasOne(Usuario::class);
    }
}

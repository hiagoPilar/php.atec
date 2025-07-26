<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Membro extends Model
{
    
    protected $table = 'membros';
    
    protected $fillable = [
        'nome', 'n_matricula',
        'aniversario', 'mensalidade'
    ];

    public function assinatura(){
        return $this->hasOne(Assinatura::class, 'id_membro');
    }

    public function treinos (){
        return $this->hasMany(Treino::class);
    }
    
}

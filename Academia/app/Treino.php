<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Treino extends Model
{
    protected $table = 'treinos';

    
    protected $fillable = [
        'id_membro', 'tipo',
        'data', 'duracao', 'notas'
    ];

    public function membro(){
        return $this->belongsTo(Membro::class, 'id_membro');
    }
}

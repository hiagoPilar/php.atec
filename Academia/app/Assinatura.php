<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Assinatura extends Model
{
    
    protected $table = 'assinaturas';

    protected $fillable = [
        'id_membro', 'tipo', 
        'data_inicio', 'data_fim',
        'ativo'
    ];

    public function membro(){
        return $this->belongsTo(Membro::class, 'id_membro');
    }

    
}


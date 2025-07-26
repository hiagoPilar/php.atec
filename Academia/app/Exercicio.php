<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Exercicio extends Model
{
    protected $table = 'exercicios';

    
    protected $fillable = [
        'id_equipamento', 'tipo',
        'descricao'
    ];

    public function equipamentos(){
        return $this->belongsToMany(Equipamento::class);
    }
}

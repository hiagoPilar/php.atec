<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Equipamento extends Model
{
    
    protected $table = 'equipamentos';

    protected $fillable = [
        'nome'
    ];

    public function exercicios(){
        return $this->belongsToMany(Exercicio::class);
    }
}

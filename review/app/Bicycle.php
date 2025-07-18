<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Bicycle extends Model
{
    protected $fillable = [
        'user_id', 'brand', 'model', 
        'color', 'price'
    ];

    // Relação: Uma bicicleta pertence a um usuário
    public function user(){
        return $this->belongTo(User::class);
    }
}

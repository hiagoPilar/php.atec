<?php

namespace App;
use App\Users;

use Illuminate\Database\Eloquent\Model;

class Country extends Model
{
    protected $table = 'countries'; // Força o nome da tabela
    protected $fillable = ['name'];
    
    // Caso esteja usando outro banco de dados
    protected $connection = 'mysql'; 

    //um pais tem muitos usuarios
    public function users(){
         return $this->hasMany(User::class, 'country_id');
    }
}

<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Categorie extends Model
{
    protected $fillable = [
        'name'
    ];

    public function products(){
        return $this->haMany(Product::class, 'id_categories');
    }
    
}

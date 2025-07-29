<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $fillable = [
        'name', 'details',
        'project_id', 'categorie_id'
    ];

    public function project(){
        return $this->belongsTo(Project::class);
    }

    public function categorie(){
        return $this->belongsTo(Categorie::class, 'categorie_id');
    }
    
}

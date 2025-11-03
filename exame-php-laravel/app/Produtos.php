<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Produtos extends Model
{
    protected $fillable = ['name', 'details', 'category_id', 'project_id'];

    public function category()
    {
        return $this->belongsTo(Categoria::class);
    }

    public function project()
    {
        return $this->belongsTo(Projetos::class);
    }
}

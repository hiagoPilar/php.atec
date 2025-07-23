<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Autor extends Model
{
    protected $fillable = [
        'nome', 'email'
    ];

    public function posts(){
        return $this->hasMany(Post::class);
    }
}

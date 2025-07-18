<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Country extends Model
{
    protected $fillable = ['name'];

    //um pais tem muitos usuarios
    public function users(){
        return $this->hasMany(User::class);
    }
}

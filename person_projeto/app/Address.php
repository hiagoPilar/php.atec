<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Address extends Model
{
    protected $fillable = [
        'street',
        'city',
        'country',
        'postal_code'
    ];

    public function people(){
        return $this->hasMany(Person::class);
    }
}

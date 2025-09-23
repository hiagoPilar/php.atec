<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Person extends Model
{
    protected $fillable = [
        'name',
        'bithdate',
        'email',
        'address_id'
    ];

    protected $dates = ['birthdate'];

    public function address(){
        return $this->belongsTo(Address::class);
    }

}

<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Car extends Model
{
    protected $fillable = [
        'brand_id', 'registration',
        'year_of_manufacture', 'color'
    ];

    public function brand(){
        return $this->belongsTo(Brand::class);
    }
}

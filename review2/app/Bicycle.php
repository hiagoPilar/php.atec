<?php

namespace App;
use App\User;

use Illuminate\Database\Eloquent\Model;

class Bicycle extends Model
{
    protected $fillable = [
        'user_id', 'brand', 
        'color', 'price'
    ];

    public function user(){
        return $this->belongsTo(User::class);
    }
}

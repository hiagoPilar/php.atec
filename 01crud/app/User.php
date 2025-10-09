<?php

namespace App;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;


class User extends Authenticatable
{
    use Notifiable;


    protected $fillable = [
        'name',
        'email',
        'password',
        'country_id' // ← ADICIONAR
    ];

    // Relação com Country
    public function country()
    {
        return $this->belongsTo(Country::class);
    }

    // Relação com Bicycles
    public function bicycles()
    {
        return $this->hasMany(Bicycle::class);
    }
}

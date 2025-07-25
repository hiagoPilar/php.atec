<?php

namespace App;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use App\Country;
use App\Bicycle;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'first_name', 'last_name', 
        'birth_date', 'country_id'
    ];

    // Relação: Um usuário pertence a um país
    public function country()
    {
        return $this->belongsTo('App\Country');
        // Isso significa que cada User pertence a um Pais
        // A tabela users precisa ter um campo 'country_name'
    }

    // Relação: Um usuário tem muitas bicicletas
    public function bicycles()
    {
        return $this->hasMany('App\Bicycle');
        
    }

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];
}

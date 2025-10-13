<?php

namespace App;
use App\Course;
use App\School;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Teacher extends Model
{
    use SoftDeletes;

    protected $fillable = ['school_id', 'first_name', 'last_name', 'hire_date'];

    //relations N:1
    public function school(){
        return $this->belongsTo(School::class);
    }

    //relations 1:N
    public function courses(){
        return $this->hasMany(Course::class);
    }

}

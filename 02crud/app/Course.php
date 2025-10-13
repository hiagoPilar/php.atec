<?php

namespace App;
use App\Teacher;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Course extends Model
{
    use SoftDeletes;

    protected $fillable = ['teacher_id', 'title', 'category', 'price'];

    //relations N:1
    public function teacher(){
        return $this->belongsTo(Teacher::class);
    }
}

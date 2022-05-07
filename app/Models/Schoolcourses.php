<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Schoolcourses extends Model
{
    use HasFactory;

    public function Studentcourses()
    {
        return $this->hasMany(Studentcourses::class,'course_id','id');
    }
    public function Toturials()
    {
        return $this->hasMany(Toturials::class,'course_id','id');
    }

}

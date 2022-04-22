<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Toturials extends Model
{
    use HasFactory;

    public function Schoolcourses()
    {
        return $this->belongsTo(Schoolcourses::class,'course_id','id');
    }
    public function Level()
    {
        return $this->belongsTo(Level::class,'level_id','lid');
    }
    public function Semester()
    {
        return $this->belongsTo(Semester::class,'semester_id','semesertid');
    }
}

<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Studentcourses extends Model
{
    use HasFactory;
    public function User()
    {
        return $this->belongsTo(User::class,'user_id','id');
    }
    public function Student()
    {
        return $this->hasMany(Student::class,'student_id','id');
    }
    public function Schoolcourses()
    {
        return $this->belongsTo(Schoolcourses::class,'course_id','id');
    }
    public function Level()
    {
        return $this->belongsTo(Level::class,'level_id','id');
    }
    public function Semester()
    {
        return $this->belongsTo(Semester::class,'semester_id','semesertid');
    }
}

<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    use HasFactory;
    public function User()
    {
        return $this->belongsTo(User::class,'user_id','id');
    }
    public function Studentcourses()
    {
        return $this->belongsTo(Studentcourses::class,'student_id','id');
    }


}

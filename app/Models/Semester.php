<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Semester extends Model
{
    use HasFactory;
    public function Toturials()
    {
        return $this->hasMany(Toturials::class,'semester_id','semesertid');
    }
    public function Studentcourses()
    {
        # code...
        return $this->hasMany(Studentcourses::class,'semester_id','semesertid');
    }
}

<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Schoolcourses extends Model
{
    use HasFactory;

    public function Studentcourses()
    {
        return $this->belongsTo(Studentcourses::class,'cours_id','id');
    }
    public function Toturials()
    {
        return $this->belongsTo(Toturials::class,'cours_id','id');
    }

}

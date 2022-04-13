<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Toturials extends Model
{
    use HasFactory;

    public function Schoolcourses()
    {
        return $this->belongsTo(Schoolcourses::class,'cours_id','id');
    }
    public function Level()
    {
        return $this->belongsTo(Level::class,'level_id','lid');
    }

}

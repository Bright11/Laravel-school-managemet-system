<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Level extends Model
{
    use HasFactory;
    public function Studentcourses()
    {
        return $this->belongsTo(Studentcourses::class,'level_id','lid');
    }
    public function Toturials()
    {
        return $this->belongsTo(Toturials::class,'level_id','lid');
    }
}

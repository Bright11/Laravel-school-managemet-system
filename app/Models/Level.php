<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Level extends Model
{
    use HasFactory;
    public function Studentcourses()
    {
        return $this->hasMany(Studentcourses::class,'level_id','id');
    }
    public function Toturials()
    {
        return $this->hasMany(Toturials::class,'level_id','level_id');
    }
}

<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Teacher extends Model
{
    use HasFactory;
    public function User()
    {
        return $this->belongsTo(User::class,'user_id','id');
    }
    public function Teachercourses()
    {
        return $this->belongsTo(Teachercourses::class,'user_id','id');
    }
}

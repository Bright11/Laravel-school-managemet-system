<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Teachercourses extends Model
{
    use HasFactory;
    public function Teacher()
    {
        return $this->belongsTo(Teacher::class,'user_code','user_code');
    }
}

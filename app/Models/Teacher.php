<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Teacher extends Model
{
    use HasFactory;
    protected $fillable=[
        'admin_id',
        'teacher_id',
        'user_code',
        'full_name',
        'teacher_email',
        'teacher_number',
        'qualification',
        'country',
        'address',
        'teacher_dob',
        'description'
    ];
    public function User()
    {
        return $this->belongsTo(User::class,'teacher_id','id');
    }
    public function Teachercourses()
    {
        return $this->belongsTo(Teachercourses::class,'user_id','id');
    }
}

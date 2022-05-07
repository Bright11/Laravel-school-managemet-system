<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    use HasFactory;
    protected $fillable = [
        'full_name',
        'student_email',
        'student_number',
        'qualification',
        'country',
        'address',
        'student_dob',
        'admin_id',
        'student_id',
        'user_code'
    ];
    public function User()
    {
        return $this->belongsTo(User::class,'student_id','id');
        // return $this->belongsTo(User::class,'student_id','id');
    }
    public function Studentcourses()
    {
        return $this->belongsTo(Studentcourses::class,'student_id','id');
    }


}

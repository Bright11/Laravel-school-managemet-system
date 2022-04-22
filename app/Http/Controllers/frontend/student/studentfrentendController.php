<?php

namespace App\Http\Controllers\frontend\student;

use App\Http\Controllers\admin\school\schoolController;
use App\Models\Student;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Hostel;
use App\Models\Schoolcourses;
use App\Models\Studentcourses;
use App\Models\Toturials;
use App\Models\User;
use Illuminate\Support\Facades\Session;

class studentfrentendController extends Controller
{
    //
public function myprofile()
{
    return view('student.myprofile');
}
    public function mycourses()
    {
        $u=Session::get('user')['id'];

        $student=Student::where('user_id',$u)->get();
        //$student->id;
       // return $student;
       // $studentcourse=Studentcourses::where('student_id',$u)->get();
        $studentcourse=Studentcourses::where('student_id',$u)->ORDERBY('id')->get();
        //$studentcourse=Schoolcourses::all();
       //
        return view('student.mycourses',['student'=>$student,'studentcourse'=>$studentcourse]);
    }

public function studentgo_cours($id,$level_id)
{
     $tutorial=Toturials::where('course_id',$id)->Where('level_id',$level_id)->get();
    //$tutorial=Toturials::with('Level')->where('toturials.course_id',$id)->where('toturials.level_id',$lid)->get();
    return view('student.studentgo_cours',['tutorial'=>$tutorial]);
}

public function student_watch($id)
{
    $studentwatch=Toturials::find($id);
    //return $id;
    return view('student.student_watch',['studentwatch'=>$studentwatch]);
}

public function readpdf($id)
{
    //return $id;
    $read=Toturials::find($id);
    return view('student.readpdf',['read'=>$read]);
}

public function student_hostel()
{
    $hostel=Hostel::all();
    return view('student.student_hostel',['hostel'=>$hostel]);
}

public function view_hostel($id)
{
    $hostel=Hostel::find($id);
    return view('student.view_hostel',['hostel'=>$hostel]);
}
}

<?php

namespace App\Http\Controllers\admin\teachers;

use App\Models\User;
use App\Models\Teacher;
use Illuminate\Http\Request;
use App\Models\Schoolcourses;
use App\Models\Teachercourses;
use App\Http\Controllers\Controller;
use App\Models\Student;
use App\Models\Studentcourses;
use App\Models\Toturials;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;

class tearchersController extends Controller
{
    //
    public function addteachertodb(Request $req)
    {
        $req->validate([
            'full_name'=>'required',
            'teacher_email'=>'required',
            'teacher_email'=>'unique:teachers',
            'teacher_number'=>'required',
            'teacher_number'=>'unique:teachers',
            'confirm_p'=>'required_with:password|same:password|min:5',
        ]);
        $staff=Session::get('user')['id'];
        $check=User::where('email',$req->teacher_email)->where('name',$req->full_name)->first();
        if($check){
           $teacher_id= $check->id;

            $code = (time() + rand(1, 10));
            $teacher=new Teacher;
            $teacher->user_id=$staff;
            $teacher->teacher_id=$teacher_id;
            $teacher->full_name=$req->full_name;
            $teacher->teacher_email=$req->teacher_email;
            $teacher->teacher_number=$req->teacher_number;
            $teacher->qualification=$req->qualification;
            $teacher->country=$req->country;
            $teacher->address=$req->address;
            $teacher->teacher_dob=$req->teacher_dob;
           $teacher->user_code=$code;
           $teacher->description=$req->description;
            $file=$req->file('profil_p');
            $extention = $file->getClientOriginalExtension();
            $filename=time().'.'.$extention;
            $file->move('teacherp/',$filename);
            $teacher->profil_p=$filename;
            $teacher->save();

            if($teacher){
                return redirect('view_teachers')->with('status','Success');
            }else{
                return redirect()->back()->with('status','Not fully completed, contact admin');
            }
    }else{
        return redirect()->back()->with('status','Name or email does not exists on registration table');
    }
    }

    public function view_teachers()
    {
        $viewteach=Teacher::all();
        return view('admin.view_teachers',['viewteach'=>$viewteach]);
    }

    public function teacherscourses($id)
    {
        $findt=Teacher::find($id);
        $tc=Schoolcourses::all();

        return view('admin.teacherscourses',['findt'=>$findt,'tc'=>$tc]);
    }

    public function addteachercourstodb(Request $req,$id)
    {

        $tcours=new Teachercourses;
        $check=Teachercourses::where('cours_name',$req->cours_name)->where('user_code',$req->user_code)->exists();
        if($check)
        {
            return redirect()->back()->with('status','This teacher is already having this cours');
        }else{
        $user=Session::get('user')['id'];
        $tcours->user_id=$user;
        $tcours->cours_name=$req->cours_name;
        $tcours->user_code=$req->user_code;
        $tcours->teacher_id=$req->teacher_id;
        $tcours->user_id=$id;
        $tcours->save();
        return redirect('view_teachers')->with('status','Added');
        }

    }

    public function view_teachers_info($id)
    {
        $teachinfo=Teacher::with('User')->where('id', $id)->get();
        $teachinfon=Teacher::find($id);
        $teachc=Teachercourses::where('teacher_id', $id)->get();
        return view('admin.view_teachers_info',['teachinfo'=>$teachinfo,'teachc'=>$teachc,'teachinfon'=>$teachinfon]);
    }

    public function view_mytutorial()
    {
        # code...
        $loginid=Session::get('user')['id'];

      /*
         $mytstudent=DB::table('studentcourses')
       ->join('students','students.id','=','studentcourses.student_id')
       ->join('schoolcourses','schoolcourses.id','=','studentcourses.cours_id')
       ->join('toturials','toturials.teacher_id','=','studentcourses.user_id')
       ->where('studentcourses.user_id','=',$loginid)->get();
      */
     // $mytutorial=Toturials::where('teacher_id',$loginid)->get();
     $mytutorial=Schoolcourses::where('user_id',$loginid)->get();
        return view('admin.view_mytutorial',['mytutorial'=>$mytutorial]);
    }
}

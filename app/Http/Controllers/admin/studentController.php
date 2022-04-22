<?php

namespace App\Http\Controllers\admin;

use App\Models\User;
use App\Models\Level;
use App\Models\Student;
use App\Models\Semester;
use Illuminate\Http\Request;
use App\Models\Schoolcourses;
use App\Models\Studentcourses;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;

class studentController extends Controller
{
    //
    public function addstudenttodb(Request $req)
    {
        $req->validate([
            'full_name'=>'required',
            'student_email'=>'required',
            'student_email'=>'unique:students',
            'student_number'=>'required',
            'student_number'=>'unique:students',
        ]);
        $staff=Session::get('user')['id'];
        $check=User::where('email',$req->student_email)->where('name',$req->full_name)->first();

       if($check){
         $student_id=$check->id;
         $user_code=$check->user_code;
         $student=new Student;
         $student->full_name=$req->full_name;
         $student->student_email=$req->student_email;
         $student->student_number=$req->student_number;
         $student->qualification=$req->qualification;
         $student->country=$req->country;
         $student->address=$req->address;
         $student->student_id=$student_id;
         $student->user_code=$user_code;
         $student->user_id=$staff;
         $student->student_dob=$req->student_dob;
       //  $student->user_code=$code;
         $file=$req->file('profil_p');
         $extention = $file->getClientOriginalExtension();
         $filename=time().'.'.$extention;
         $file->move('studentp/',$filename);
         $student->profil_p=$filename;
         $student->save();
                 if($student){
                     return redirect('viewstudents')->with('status','Success');
                 }else{
                     return redirect()->back()>with('name',$req->full_name)->with('email',$req->student_email)->with('status','Not fund, you can do it manually');
                 }

       }else{
        return redirect()->back()->with('name',$req->full_name)->with('email',$req->student_email);
       }

    }

    public function viewstudents()
    {
        $student=Student::all();
        return view('admin.viewstudents',['student'=>$student]);
    }

    public function student_courses($id)
    {
        //return $id;
        $student=Student::where('user_id',$id)->first();
       // $student=Student::find($id);
        // return $u->full_name;
        $sc=Schoolcourses::all();
        $level=Level::all();
        $semester=Semester::all();
        return view('admin.student_courses',['semester'=>$semester,'student'=>$student,'level'=>$level,'sc'=>$sc]);
    }

    public function addstudentcourstodb(Request $req, $id)
    {
       //return $id;
        $user=Session::get('user')['id'];
       $addstudentc=new Studentcourses;
       $checks= Studentcourses::where('student_id', $id)->where('cours_id',$req->cours_id)->exists();
       if($checks)
       {
        return redirect()->back()->with('status','Error, This cours has already been added');
       }else{
        $addstudentc->user_id=$user;
        $addstudentc->student_id=$id;
       //$addstudentc->user_code=$req->user_code;
       $addstudentc->cours_id=$req->cours_id;
       $addstudentc->semester_id=$req->semester_id;
       $addstudentc->level_id=$req->level_id;
       $addstudentc->save();
       return redirect('viewstudents')->with('status','success');
       }



    }
}

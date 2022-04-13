<?php

namespace App\Http\Controllers\admin\teachers;

use App\Models\User;
use App\Models\Teacher;
use Illuminate\Http\Request;
use App\Models\Schoolcourses;
use App\Models\Teachercourses;
use App\Http\Controllers\Controller;
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
            'email'=>'unique:users',
            'password'=>'required',
            'teacher_number'=>'required',
            'teacher_number'=>'unique:teachers',
            'confirm_p'=>'required_with:password|same:password|min:5',
        ]);

        $code = (time() + rand(1, 10));
      # return $code;
        $user= new User;
        $user->name=$req->full_name;
        $user->email=$req->teacher_email;
        $user->password=Hash::make($req->password);
        $user->user_code=$code;
        $user->reset_p_code=$code;
        $user->save();
        if($user){
            $newuser=User::where('user_code',$user->user_code=$code)->first();
            $uid= $newuser->id;
            $teacher=new Teacher;
            $teacher->user_id=$uid;
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
            {

            if($teacher){
                return redirect('view_teachers')->with('status','Success');
            }else{
                return redirect()->back()->with('status','Not fully completed, contact admin');
            }
           }

        }else{
            return redirect()->back()->with('status','Error tring to validate your details, try again');
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
}

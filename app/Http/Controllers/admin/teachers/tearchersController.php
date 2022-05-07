<?php

namespace App\Http\Controllers\admin\teachers;

use App\Models\User;
use App\Models\Student;
use App\Models\Teacher;
use App\Models\Toturials;
use Illuminate\Http\Request;
use App\Models\Schoolcourses;
use App\Models\Studentcourses;
use App\Models\Teachercourses;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;
use Symfony\Component\Console\Input\Input;

class tearchersController extends Controller
{
    //
    public function teacher_profile()
    {
        # code...
        $user=Session::get('user')['id'];
        $check=Teacher::where('teacher_id',$user)->first();

        return view('admin.tearchersprofile.teacher_profile',['check'=>$check]);
    }
    public function editeteachertodb(Request $req,$id)
    {
        $check=User::where('id',$id)->first();

        if($check){
            $teacher=Teacher::where('teacher_id',$id)->first();
            $teacher->full_name=$req->full_name;
            $teacher->teacher_number=$req->teacher_number;
           $teacher->description=$req->description;
           if($req->hasFile('profil_p'))
           {
            $file=$req->file('profil_p');
            $extention = $file->getClientOriginalExtension();
            $filename=time().'.'.$extention;
            $file->move('teacherp/',$filename);
            $teacher->profil_p=$filename;
        }
            $teacher->update();
            if($teacher){
                $updateuser=User::where('id',$id)->first();
                $updateuser->name=$req->full_name;
                $updateuser->number=$req->teacher_number;
                $updateuser->description=$req->description;
                $updateuser->update();
                if($updateuser){
                    return redirect('teacher_profile')->with('status','Success');
                }else{
                    return redirect()->back()->with('status','Not updated');
                }
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

        public function view_new_teachers()
        {
            # code...
            $users=User::where('position','teacher')->where('complete','not yet')->get();

            return view('admin.view_new_teachers',['users'=>$users]);
        }
        public function teacherscompleteregister(Request $req)
        {
            # code...
            $teacher=new Teacher;
            $chechu=User::where('email',$req->teacher_email)->where('user_code',$req->user_code)->first();

            $checht=Teacher::where('teacher_email',$req->teacher_email)->where('user_code',$req->user_code)->first();
            if($checht){
                return redirect()->back()->with('status','Error');
            }else{
                if($chechu)
                {
                    $user=Session::get('user')['id'];
                    $code = +(time() + rand(1, 5));
                    $teacher->admin_id=$user;
                    $teacher->full_name=$chechu->name;
                    $teacher->position=$chechu->position;
                    $teacher->teacher_id=$chechu->id;
                     $teacher->teacher_email=$chechu->email;
                     $teacher->teacher_number=$chechu->number;
                     $teacher->qualification=$chechu->qualification;
                     $teacher->country=$chechu->country;
                     $teacher->address=$chechu->address;
                     $teacher->teacher_dob=$chechu->dob;
                    $teacher->user_code=$code;
                    $teacher->description=$chechu->description;
                    $teacher->save();
                    if($teacher){
                    $userupdate=User::where('email',$req->teacher_email)->where('user_code',$req->user_code)->first();
                    $userupdate->user_code=$code;
                    $userupdate->reset_p_code=$code;
                    $userupdate->complete='completed';
                    $userupdate->update();
                        return redirect('view_teachers')->with('status','Success');
                    }
                }else{
                    return redirect()->back()->with('status','Error');
                }
            }

        }
    public function teacherscourses($id)
    {
        $findt=Teacher::find($id);
        $tc=Schoolcourses::all();

        return view('admin.teacherscourses',['findt'=>$findt,'tc'=>$tc]);
    }

    public function addteachercourstodb(Request $req,$id)
    {
        //return 'oh';

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

       // $teachinfo=Teacher::where('id', $id)->get();
        $teachinfon=Teacher::find($id);

        return view('admin.view_teachers_info',['teachinfon'=>$teachinfon]);
    }

    public function view_mytutorial()
    {
        # code...
        $loginid=Session::get('user')['id'];

     $mytutorial=Toturials::where('teacher_id',$loginid)->get();
        return view('admin.tearchersprofile.view_mytutorial',['mytutorial'=>$mytutorial]);
    }

    public function tearchinfo()
    {
        # code...
        $user=Session::get('user')['id'];
        $tearch=Teacher::where('teacher_id',$user)->get();
        return view('admin.tearchersprofile.tearchinfo',['tearch'=>$tearch]);
    }
}

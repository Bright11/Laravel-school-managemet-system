<?php

namespace App\Http\Controllers\admin\school;

use App\Models\Level;
use App\Models\Semester;
use App\Models\Classrooms;
use Illuminate\Http\Request;
use App\Models\Schoolcourses;
use App\Http\Controllers\Controller;
use App\Models\Toturials;
use Illuminate\Support\Facades\Session;

class schoolController extends Controller
{
    //

    public function addschoolcourstodb(Request $req)
    {
       $validate= $req->validate([
            'cours_name'=>'required',
            'cours_name'=>'unique:schoolcourses'
        ]);
        $schoolcours=new Schoolcourses;
        $user=Session::get('user')['id'];
        $schoolcours->user_id=$user;
        $schoolcours->cours_name=$req->cours_name;
        $schoolcours->cours_description=$req->cours_description;
        $file=$req->file('cours_img');
        $extention = $file->getClientOriginalExtension();
        $filename=time().'.'.$extention;
        $file->move('courses/',$filename);
        $schoolcours->cours_img=$filename;
        $schoolcours->save();

        return redirect('view_school_courses')->with('status','Success');
    }

    public function addsemester()
    {
        return view('admin.addsemester');
    }

    public function addsemestertodb(Request $req)
    {

        $semester=new Semester;
        $check= Semester::where('semester',$req->semester)->exists();
        $mycount= Semester::count();
        if($check)
        {
            return redirect()->back()->with('status','Semester already exists.');
        }else{
            if($mycount==3){
                return redirect('view_semester')->with('status','Semester is only 3 which is completed.');
            }else{
                $user=Session::get('user')['id'];
                $semester->user_id=$user;
                $semester->semester=$req->semester;
                $semester->save();
                return redirect('view_semester')->with('status','Success');
            }
        }

    }

    public function view_semester()
    {
        $semester= Semester::all();

        return view('admin.view_semester',['semester'=>$semester]);
    }

    public function addclassroomtodb(Request $req)
    {
        $classroom=new Classrooms;
        $user=Session::get('user')['id'];
        $classroom->user_id=$user;
        $classroom->room_name=$req->room_name;
        $classroom->room_location=$req->room_location;
        $classroom->room_capacity=$req->room_capacity;
        $classroom->room_description=$req->room_description;
        $file=$req->file('room_img');
        $extention = $file->getClientOriginalExtension();
        $filename=time().'.'.$extention;
        $file->move('classroom/',$filename);
        $classroom->room_img=$filename;
        $classroom->save();
        return redirect('view_classroom')->with('status','success');
    }

    public function view_level()
    {
        $level=Level::all();
        return view('admin.view_level',['level'=>$level]);
    }

    public function addlevel()
    {
        return view('admin.addlevel');
    }

    public function addleveltodb(Request $req)
    {
        $validate=$req->validate([
            'level'=>'required',
            'level'=>'unique:levels'
        ]);
        $level=new Level;
        $levelcount=Level::count();
        if($levelcount==3)
        {
            return redirect('view_level')->with('status','You cannot add more than 3 Levels');
        }else{
            $user=Session::get('user')['id'];
            $level->user_id=$user;
            $level->level=$req->level;
            $level->save();
            return redirect('view_level');
        }

    }
    public function view_tutorial()
    {
        $tutorial=Toturials::all();
        return view('admin.view_tutorial',['tutorial'=>$tutorial]);
    }


    public function tutorials()
    {
        $course=Schoolcourses::all();
        $l=Level::all();
        $sm=Semester::all();
        return view('admin.tutorials',['sm'=>$sm,'course'=>$course,'l'=>$l]);
    }


    public function tutorialtodb(Request $req)
    {

        $validate=$req->validate([
            'picture' => 'required|image|mimes:jpeg,png,jpg',
            'notes' => "mimes:pdf",
            'video' => 'mimes:mp4,mov,ogg,qt',
            'course_id'=>'required',
            'level_id'=>'required',
            'subject'=>'required',
            //'semester_id'=>'required'
        ]);

        $user=Session::get('user')['id'];

       $tuc=new Toturials;
       $tuc->teacher_id=$user;
       $tuc->course_id=$req->course_id;
       $tuc->subject=$req->subject;
       $tuc->level_id=$req->level_id;
       $tuc->semester_id=$req->semester_id;
       $tuc->description=$req->description;
       $file=$req->file('picture');
        $extention = $file->getClientOriginalExtension();
        $filename=time().'.'.$extention;
        $file->move('tutorial/',$filename);
        $tuc->picture=$filename;
        if ($req->hasFile('video')){
        $file=$req->file('video');
        $extention = $file->getClientOriginalExtension();
        $filename=time().'.'.$extention;
        $file->move('tutorialvideo/',$filename);
        $tuc->video=$filename;
        }
        if ($req->hasFile('notes')){
        $file=$req->file('notes');
        $extention = $file->getClientOriginalExtension();
        $filename=time().'.'.$extention;
        $file->move('tutorialpdf/',$filename);
        $tuc->notes=$filename;
        }

       $tuc->save();
       return redirect('view_tutorial');

    }
}


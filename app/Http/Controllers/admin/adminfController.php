<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\Classrooms;
use App\Models\Schoolcourses;
use App\Models\Student;
use App\Models\Teacher;
use Illuminate\Http\Request;

class adminfController extends Controller
{
    //
    public function indexadmin()
    {
        $countteacher=Teacher::count();
        $studentc=Student::count();
        return view('admin.indexadmin',['countteacher'=>$countteacher,
    'studentc'=>$studentc]);
    }

    public function viewstudents()
    {
        return view('admin.viewstudents');
    }

    public function student_registration()
    {
        return view('admin.student_registration');
    }

    public function teachers_registration()
    {
        return view('admin.teachers_registration');
    }

    public function school_courses()
    {
        return view('admin.school_courses');
    }

    public function classrooms()
    {
        return view('admin.classrooms');
    }

    public function view_classroom()
    {
        $classroom=Classrooms::all();
        return view('admin.view_classroom',['classroom'=>$classroom]);
    }

    public function view_school_courses()
    {
        $courses = Schoolcourses::all();
        return view('admin.view_school_courses',['courses'=>$courses]);
    }
    public function staf_registration()
    {
        # code...
        return view('admin.staf_registration');
    }
}

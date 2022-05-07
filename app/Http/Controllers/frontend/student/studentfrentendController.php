<?php

namespace App\Http\Controllers\frontend\student;

use App\Http\Controllers\admin\school\schoolController;
use App\Models\Student;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Hostel;
use App\Models\Payment;
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
        $u = Session::get('user')['id'];

        $student = Student::where('student_id', $u)->get();

        $studentcourse = Studentcourses::where('student_id', $u)->ORDERBY('id')->get();

        //
        return view('student.mycourses', ['student' => $student, 'studentcourse' => $studentcourse]);
    }

    public function studentgo_cours($id, $level_id, $semesters_id)
    {
        //return $semesters_id;

        $user = Session::get('user')['id'];
        $checkpay = Payment::where('course_id', $id)->where('ownner_id', $user)->first();
        if($checkpay){


        $studentsemesterend = date("Y-m-d", strtotime(date(
            "Y-m-d",
            strtotime($checkpay->paid_date)
        ) . "+ 67 days"));

        if (date('Y-m-d') > $studentsemesterend) {
            $suspenduser = User::where('id', $user)->first();
            $suspenduser->status = "is good to learn today";
            $suspenduser->update();
            if ($suspenduser) {
                return redirect('/')->with('status', 'contact school admin');
            }
        }
        $tutorial = Toturials::where('course_id', $id)->Where('level_id', $level_id)->where('semester_id', $semesters_id)->get();
        if ($checkpay) {
            return view('student.studentgo_cours', ['tutorial' => $tutorial]);
        } else {

            $studentcoursepay = Schoolcourses::find($id);
            return view('frontend.payment.course_paynow', ['studentcoursepay' => $studentcoursepay]);
        }
    }else{
        $studentcoursepay = Schoolcourses::find($id);
        return view('frontend.payment.course_paynow', ['studentcoursepay' => $studentcoursepay]);
    }
}

    public function student_watch($id)
    {
        $studentwatch = Toturials::find($id);
        //return $id;
        return view('student.student_watch', ['studentwatch' => $studentwatch]);
    }

    public function readpdf($id)
    {
        //return $id;
        $read = Toturials::find($id);
        return view('student.readpdf', ['read' => $read]);
    }

    public function student_hostel()
    {
        $hostel = Hostel::all();
        return view('student.student_hostel', ['hostel' => $hostel]);
    }

    public function view_hostel($id)
    {
        $hostel = Hostel::find($id);
        return view('student.view_hostel', ['hostel' => $hostel]);
    }
}

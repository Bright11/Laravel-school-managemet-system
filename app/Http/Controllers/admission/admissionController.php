<?php

namespace App\Http\Controllers\admission;

use App\Http\Controllers\Controller;
use App\Models\Admission;
use Illuminate\Http\Request;

class admissionController extends Controller
{
    //
    public function admisionform()
    {
        # code...
        return view('frontend.admisionform');
    }

    public function addadmisiontodb(Request $req)
    {
        # code...
        $req->validate([
            'email'=>'required',
            'email'=>'unique:admissions'
        ]);

        $admision=new Admission;
        $admisioncod = (time() + rand(1, 5));
        $userip=request()->ip();
        $admision->f_name=$req->f_name;
        $admision->l_name=$req->l_name;
        $admision->email=$req->email;
        $admision->school_name=$req->school_name;
        $admision->country=$req->country;
        $admision->number=$req->number;
        $admision->qualification=$req->qualification;
        $admision->city=$req->city;
        $admision->user_infor=$req->user_infor;
        $admision->user_ip=$userip;//change later
        $admision->addmissioncode=$admisioncod;
        $admision->save();
        return redirect('student_admission')->with('status','Success');
    }

    public function student_admission()
    {
        # code...
        $applied=Admission::all();
        return view('admin.student_admission',['applied'=>$applied]);

    }
}

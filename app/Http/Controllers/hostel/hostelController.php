<?php

namespace App\Http\Controllers\hostel;

use App\Http\Controllers\Controller;
use App\Models\Hostel;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class hostelController extends Controller
{
    //
    public function student_hostel_register()
    {
        return view('admin.student_hostel_register');
    }

    public function hosteltodb(Request $req)
    {
        $hostel=new Hostel;
        $user=Session::get('user')['id'];
        $hostel->user_id=$user;
        $hostel->location=$req->location;
        $hostel->room_number=$req->room_number;
        $hostel->description=$req->description;
        $hostel->price=$req->price;
        $file=$req->file('room_image');
        $extention = $file->getClientOriginalExtension();
        $filename=time().'.'.$extention;
        $file->move('hostel/',$filename);
        $hostel->room_image=$filename;
        $hostel->save();
        return redirect('view_admin_hostel')->with('status','Success');
    }

    public function view_admin_hostel()
    {
        $hostel=Hostel::all();
        return view('admin.view_admin_hostel',['hostel'=>$hostel]);
    }
}

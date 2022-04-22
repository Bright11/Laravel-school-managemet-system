<?php

namespace App\Http\Controllers\staf;

use App\Models\Staf;
use App\Models\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Session;

class stafController extends Controller
{
    //
    public function addstaftodb(Request $req)
    {
        # code...
        $staff=Session::get('user')['id'];
        $check=User::where('email',$req->staf_email)->where('name',$req->staf_name)->first();
        if($check){

        $staf=new Staf;
        $staf->user_id=$staff;
       $staf->staf_name=$req->staf_name;
       $staf->staf_id=$check->id;
        $staf->staf_position=$req->staf_position;
        $staf->staf_quote=$req->staf_quote;
        $staf->staf_email=$req->staf_email;
        $staf->staf_number=$req->staf_number;
        $staf->qualification=$req->qualification;
        $staf->address=$req->address;
        $staf->country=$req->country;
        $staf->Staf_dob=$req->Staf_dob;
        $file=$req->file('profil_p');
         $extention = $file->getClientOriginalExtension();
         $filename=time().'.'.$extention;
         $file->move('staf/',$filename);
         $staf->profil_p=$filename;
        $staf->save();

        return redirect('view_users')->with('status','Success');
    }
    else{
        return redirect()->back()->with('status','Not fully completed, contact admin');
    }
}
}

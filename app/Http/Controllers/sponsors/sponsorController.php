<?php

namespace App\Http\Controllers\sponsors;

use App\Models\Sponsors;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Session;

class sponsorController extends Controller
{
    //
    public function view_sponsors()
    {
        # code...
        $sponsor=Sponsors::all();
        return view('admin.view_sponsors',['sponsor'=>$sponsor]);
    }

    public function sponsors()
    {
        # code...
        return view('admin.sponsors');
    }

    public function addsponsortodb(Request $req)
    {
        # code...
        $user=Session::get('user')['id'];
        $addsponsor=new Sponsors;
        $addsponsor->admin_id=$user;
        $addsponsor->company_name=$req->company_name;
        $file = $req->file('company_logo');
        $extention = $file->getClientOriginalExtension();
        $filename = time() . '.' . $extention;
        $file->move('sponsorimg/', $filename);
        $addsponsor->company_logo = $filename;
        $addsponsor->save();
        return redirect('view_sponsors')->with('status','Success');
    }
}

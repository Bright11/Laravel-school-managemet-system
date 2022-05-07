<?php

namespace App\Http\Controllers\annoucement;

use App\Models\announcement;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Session;

class annuoucementController extends Controller
{
    //
    public function view_annoucement()
    {
        # code...
        $announce=announcement::all();
        return view('admin.view_annoucement',['announce'=>$announce]);
    }
    public function annoucement()
    {
        # code...
        return view('admin.annoucement');
    }
    public function addannoucementtodb(Request $req)
    {
        # code...
        $user=Session::get('user')['id'];
        $addannouce=new announcement;
        $addannouce->admin_id=$user;
        $addannouce->title=$req->title;
        $addannouce->detals=$req->detals;
        $addannouce->save();
        return redirect('view_annoucement')->with('status','Success');
    }

    public function announcementdetils($id)
    {
        # code...
        $announcedetail=announcement::find($id);
        return view('frontend.announcementdetils',['announcedetail'=>$announcedetail]);
    }
}

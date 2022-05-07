<?php

namespace App\Http\Controllers\online;

use App\Models\Toturials;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Mypaidvideo;
use App\Models\onlinecours;
use App\Models\Schoolcourses;
use Illuminate\Support\Facades\Session;

class onlineController extends Controller
{
    //
    public function buy_courses()
    {
        # code...
        $buy = onlinecours::all();
        return view('frontend.online-videos.buy_courses', ['buy' => $buy]);
    }

    public function addonline_course()
    {
        # code...
        $course = Schoolcourses::all();
        return view('frontend.online-videos.addonline_course', ['course' => $course]);
    }

    public function onlinetutorialtodb(Request $req)
    {

        # code...
        $code = (time() + rand(1, 10));
        $buyingcode = (time() + rand(1, 5));
        $user = Session::get('user')['id'];
        $online = new onlinecours;
        $online->video_name = $req->video_name;
        $online->video_description = $req->video_description;
        $online->video_price = $req->video_price;
        $online->cart_id = $req->cart_id;
        $online->user_id = $user;
        $file = $req->file('video_img');
        $extention = $file->getClientOriginalExtension();
        $filename = time() . '.' . $extention;
        $file->move('onlineimg/', $filename);
        $online->video_img = $filename;

        $file = $req->file('video');
        $extention = $file->getClientOriginalExtension();
        $filename = time() . '.' . $extention;
        $file->move('onlinevideo/', $filename);
        $online->video = $filename;

        if ($req->hasfile('notes')) {
            $file = $req->file('notes');
            $extention = $file->getClientOriginalExtension();
            $filename = time() . '.' . $extention;
            $file->move('onlinenote/', $filename);
            $online->notes = $filename;
        }
        $online->video_share = $code;
        $online->buyingcode = $buyingcode;
        $online->save();

        return redirect('my_video_tutorial')->with('status', 'Success');
    }

    public function my_video_tutorial()
    {
        # code...
        $user = Session::get('user')['id'];
        $myonlinevideos = onlinecours::where('user_id', $user)->get();
        return view('frontend.online-videos.my_video_tutorial', ['myonlinevideos' => $myonlinevideos]);
    }

    public function view_onlinecours($id,$ownner_id)
    {
        //return $ownner_id;
        # code...
        $onlinedetail = onlinecours::find($id);
        $checkpay=Mypaidvideo::where('owner_id',$ownner_id)->first();

        return view('frontend.online-videos.view_onlinecours', ['checkpay'=>$checkpay,'onlinedetail' => $onlinedetail]);
    }
//onlin course start learning after payment

public function startlearningonline($id,$ownner_id)
{
    # code...  $onlinedetail
    $checkpay=Mypaidvideo::where('owner_id',$ownner_id)->first();
    if($checkpay){
        $startlearning=onlinecours::find($id);
    return view('frontend.online-videos.startlearningonline',['startlearning'=>$startlearning]);

    }else{
        return redirect()->back();
    }
    }

public function my_paid_video_tutorial()
{
    # code...
    $user=Session::get('user')['id'];
    $mypaidv=Mypaidvideo::where('owner_id',$user)->get();
    return view('frontend.online-videos.my_paid_video_tutorial',['mypaidv'=>$mypaidv]);
}
    public function deite($id)
    {
        # code...
        $dete = onlinecours::find($id);
        $dete->Video_name;
        dd($dete);
        return $id;
    }
}

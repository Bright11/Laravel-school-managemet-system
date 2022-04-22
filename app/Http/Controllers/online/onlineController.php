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
        $buy=onlinecours::all();
        return view('frontend.online-videos.buy_courses',['buy'=>$buy]);
    }

    public function addonline_course()
    {
        # code...
        $course=Schoolcourses::all();
        return view('frontend.online-videos.addonline_course',['course'=>$course]);
    }

    public function onlinetutorialtodb(Request $req)
    {

        # code...
        $code = (time() + rand(1, 10));
        $buyingcode = (time() + rand(1, 5));
        $user=Session::get('user')['id'];
        $online=new onlinecours;
        $online->video_name=$req->video_name;
        $online->video_description=$req->video_description;
        $online->video_price=$req->video_price;
        $online->cart_id=$req->cart_id;
        $online->user_id=$user;
        $file=$req->file('video_img');
        $extention = $file->getClientOriginalExtension();
        $filename=time().'.'.$extention;
        $file->move('onlineimg/',$filename);
        $online->video_img=$filename;

        $file=$req->file('video');
        $extention = $file->getClientOriginalExtension();
        $filename=time().'.'.$extention;
        $file->move('onlinevideo/',$filename);
        $online->video=$filename;

        if($req->hasfile('notes')){
        $file=$req->file('notes');
        $extention = $file->getClientOriginalExtension();
        $filename=time().'.'.$extention;
        $file->move('onlinenote/',$filename);
        $online->notes=$filename;
       }
        $online->video_share=$code;
        $online->buyingcode=$buyingcode;
        $online->save();

        return 'ok';
    }

    public function my_video_tutorial()
    {
        # code...
        $user=Session::get('user')['id'];
        $myonlinevideos=onlinecours::where('user_id',$user)->get();
        return view('frontend.online-videos.my_video_tutorial',['myonlinevideos'=>$myonlinevideos]);
    }

    public function view_onlinecours($id)
    {
        # code...
        $onlinedetail=onlinecours::find($id);
        //$onlinedetail=onlinecours::where('id',$id)->get();
        return view('frontend.online-videos.view_onlinecours',['onlinedetail'=>$onlinedetail]);
    }

    public function successpay($buyingcode,$id,$price,Request $req)
    {
        # code...
        $checkpay=onlinecours::where('buyingcode',$buyingcode)->where('id',$id)->where('Video_price',$price)->first();
        if($checkpay){

            $mypaidvideos=new Mypaidvideo();
            $user=Session::get('user')['id'];
            $mypaidvideos->user_id=$user;
            $mypaidvideos->owner_id=$checkpay->user_id;
            $mypaidvideos->video_id=$checkpay->id;
            $mypaidvideos->video=$checkpay->Video;
            $mypaidvideos->paid_amaunt=$checkpay->Video_price;
            $mypaidvideos->save();
            return 'save';
        }else{
            return 'not true';
        }
        return $price;
        return $buyingcode;
        return $id;
    }


public function deite($id)
{
    # code...
    $dete=onlinecours::find($id);
    $dete->Video_name;
    dd($dete);
    return $id;
}
}

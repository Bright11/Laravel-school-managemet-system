<?php

namespace App\Http\Controllers;

use App\Models\Hostel;
use App\Models\Payment;
use App\Models\Mypaidvideo;
use App\Models\onlinecours;
use Illuminate\Http\Request;
use App\Models\Hostelpayment;
use App\Models\Schoolcourses;
use Illuminate\Support\Facades\Date;
use Illuminate\Support\Facades\Session;

class paymentController extends Controller
{
    //

//PAYMENT OF COURSES
    public function successpaypal(Request $req,$course_id,$user,$price)
    {
        # code...
        //chikasonbusiness@gmail.com
        //password= myfather

        //PAYMENT OF COURSES
        $d=date("Y-m-d");
        //return $d;
        $userpay=new Payment;
        $user=Session::get('user')['id'];
        $checkuserpay=Schoolcourses::where('id',$course_id)->first();
        if($checkuserpay)
        {
            $userpay->ownner_id=$user;
            $userpay->payment_id=$req->PayerID;
            $userpay->course_id=$course_id;
            $userpay->amount_paid=$price;
            $userpay->status="paid";
            $userpay->paid_date=$d;
            $userpay->save();
            if($userpay)
            {
                return redirect('mycourses')->with('status','Success enjoy you learning');
            }else{
                return redirect('mycourses')->with('status','Error Contact school authorities');
            }
        }
    }
//PAYMENT OF HOSTELS
public function hostel_payment(Request $req,$id)
{
    # code...
    $hostelsale=Hostel::find($id);
    return view('frontend.payment.hostel_payment',['hostelsale'=>$hostelsale]);
}

public function success_hostelpaypal(Request $req,$hoste_id,$user,$hostelnumber)
{
    //return $hostelnumber;
    # code...
    $hostelpayment=new Hostelpayment;
    $hostelpayment->hoste_id=$hoste_id;
    $hostelpayment->user_id=$user;
    $hostelpayment->room_number=$hostelnumber;
    $hostelpayment->save();
    if($hostelpayment){
       $upadehostelid=Hostel::where('id',$hoste_id)->first();
       $upadehostelid->status='Already booked.';
       $upadehostelid->update();
       if($upadehostelid){
        $hostel=Hostel::find($hoste_id);
        $messeg='Your hostel has been preserved please go to the campuse for
                final proccessing! thank you.';
                Session::flash('messeg', $messeg);
                return view('student.view_hostel',['hostel'=>$hostel,'messeg'=>$messeg]);
       }else{
        return view('student.view_hostel');
       }
    }
   else{
    return view('student.view_hostel');
   }
}
public function onlinetutorialpayment($id)
{
    # code...
    $onlinedetail=onlinecours::find($id);

    return view('frontend.payment.onlinetutorialpayment',['onlinedetail'=>$onlinedetail]);
}
public function onlinetutorialpaymentcompelete($buyingcode, $id, $price, Request $req)
{
    //return $req->PayerID;
    # code...
    //return $price;
    $checkpay = onlinecours::where('buyingcode', $buyingcode)->where('id', $id)->where('Video_price', $price)->first();
    if ($checkpay) {
        //return $id;
        $mypaidvideos = new Mypaidvideo();
        $user = Session::get('user')['id'];
        $mypaidvideos->user_id = $user;
        $mypaidvideos->owner_id = $checkpay->user_id;
        $mypaidvideos->Video_name = $checkpay->Video_name;
        $mypaidvideos->Video_img=$checkpay->Video_img;
        $mypaidvideos->status='pending';
        $mypaidvideos->PayerID=$req->PayerID;
        $mypaidvideos->video_id = $checkpay->id;
        $mypaidvideos->video = $checkpay->Video;
        $mypaidvideos->paid_amaunt = $checkpay->Video_price;
        $mypaidvideos->save();
        if($mypaidvideos){
            $code = (time() + rand(1, 10));
            $updateonlinecourse=onlinecours::where('id',$id)->where('buyingcode',$buyingcode)->first();
            $updateonlinecourse->buyingcode=$code;
            $updateonlinecourse->update();
            if($updateonlinecourse){
                $startlearning=onlinecours::find($id);
                return view('frontend.online-videos.startlearningonline',['startlearning'=>$startlearning]);
            }else{
            $onlinedetail = onlinecours::find($id);
           // $checkpay=Mypaidvideo::where('owner_id',$checkpay->user_id)->first();
            return view('frontend.online-videos.view_onlinecours', ['checkpay'=>$checkpay,'onlinedetail' => $onlinedetail]);
        }
        }
    } else {
        $onlinedetail = onlinecours::find($id);
        //$checkpay=Mypaidvideo::where('owner_id',$checkpay->user_id)->first();
        return view('frontend.online-videos.view_onlinecours', ['checkpay'=>$checkpay,'onlinedetail' => $onlinedetail]);
    }
    return $price;
    return $buyingcode;
    return $id;
}

}

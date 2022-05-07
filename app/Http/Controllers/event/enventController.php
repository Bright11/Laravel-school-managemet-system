<?php

namespace App\Http\Controllers\event;

use App\Http\Controllers\Controller;
use App\Models\Schoolevent;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class enventController extends Controller
{
    //

    public function view_school_event()
    {
        $event=Schoolevent::all();
        return view('admin.view_school_event',['event'=>$event]);
    }

    public function insert_event()
    {
        return view('admin.insert_event');
    }

    public function inserteventtodb(Request $req)
    {
        $insertvent=new Schoolevent;
        $adminid=Session::get('user')['id'];
        $insertvent->admin_id=$adminid;
        $insertvent->event_name=$req->event_name;
        $insertvent->event_location=$req->event_location;
        $insertvent->event_date=$req->event_date;
        $insertvent->event_time=$req->event_time;
        $insertvent->event_description=$req->event_description;
        $file=$req->file('event_img');
        $extention = $file->getClientOriginalExtension();
        $filename=time().'.'.$extention;
        $file->move('eventimg/',$filename);
        $insertvent->event_img=$filename;
        $insertvent->save();
        return redirect('view_school_event')->with('status','Success');
    }

public function eventdetils($id)
{
    # code...
    $newevent=Schoolevent::find($id);
    //return $eventdetails;
    return view('frontend.eventdetils',['newevent'=>$newevent]);
}
}

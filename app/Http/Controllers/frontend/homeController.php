<?php

namespace App\Http\Controllers\frontend;

use App\Http\Controllers\Controller;
use App\Models\announcement;
use App\Models\Schoolevent;
use App\Models\Sponsors;
use App\Models\Teacher;
use Illuminate\Http\Request;

class homeController extends Controller
{
    //
    public function home()
    {
        $sponsors=Sponsors::get()->take(4);
        $annouc=announcement::orderBy('id','desc')->take(4)->get();
        $event=Schoolevent::orderBy('id', 'desc')->take(6)->get();
        $eventsidebar=Schoolevent::orderBy('id', 'desc')->take(4)->get();
        $teachers=Teacher::orderBy('id', 'desc')->take(4)->get();
        return view('frontend.home',['annouc'=>$annouc,'eventsidebar'=>$eventsidebar,'sponsors'=>$sponsors,'event'=>$event,'teachers'=>$teachers]);
    }

    public function lecturer()
    {
        $lecturer=Teacher::all();
        return view('frontend.lecturer',['lecturer'=>$lecturer]);
    }
}

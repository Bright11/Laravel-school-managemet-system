<?php

namespace App\Http\Controllers\frontend;

use App\Http\Controllers\Controller;
use App\Models\Schoolevent;
use App\Models\Teacher;
use Illuminate\Http\Request;

class homeController extends Controller
{
    //
    public function home()
    {
        $event=Schoolevent::orderBy('id', 'desc')->take(4)->get();
        $teachers=Teacher::orderBy('id', 'desc')->take(4)->get();
        return view('frontend.home',['event'=>$event,'teachers'=>$teachers]);
    }

    public function lecturer()
    {
        $lecturer=Teacher::all();
        return view('frontend.lecturer',['lecturer'=>$lecturer]);
    }
}

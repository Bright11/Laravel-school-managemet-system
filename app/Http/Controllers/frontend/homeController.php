<?php

namespace App\Http\Controllers\frontend;

use App\Http\Controllers\Controller;
use App\Models\Schoolevent;
use Illuminate\Http\Request;

class homeController extends Controller
{
    //
    public function home()
    {
        $event=Schoolevent::all();
        return view('frontend.home',['event'=>$event]);
    }
}

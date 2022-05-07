<?php

namespace App\Http\Controllers\imports;

use App\Models\User;
use Illuminate\Support\Str;
use App\Imports\UsersImport;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use App\Imports\StudentsImport;
use App\Imports\TeachersImport;
use Maatwebsite\Excel\Facades\Excel;

class excelimportController extends Controller
{
    //
    public function registerwithexcel(Request $req)
    {
        $req->validate([
            'usersnew'=>'required|mimes:xlsx'
        ]);
        try {
            $check=  Excel::import(new UsersImport(),$req->file('usersnew'));
        if($check){
           // $last = DB::table('users')->latest()->first();
           return redirect()->back()->with('status','Success');

            //return redirect()->back()->with('status','Error, an error occor during registration');
        }
        } catch (\Maatwebsite\Excel\Validators\ValidationException $e) {
             $failures = $e->failures();
             //dd($failures);
             return redirect()->back()->with('import_error',$failures);
        }

        # code...

    }

    public function studentwithexcel(Request $req)
    {
        $req->validate([
            'usersnew'=>'required|mimes:xlsx'
        ]);
        try {
        # code...
        $check=  Excel::import(new StudentsImport(),$req->file('usersnew'));
        if($check){
            return redirect('viewstudents')->with('status','Success');
        }else{
            return redirect()->back()->with('status','Error');
        }
    } catch (\Maatwebsite\Excel\Validators\ValidationException $e) {
        $failures = $e->failures();
        //dd($failures);
        return redirect()->back()->with('import_error',$failures);
   }

    }

    public function teacherexceltodb(Request $req)
    {
        # code...
        $req->validate([
            'usersnew'=>'required|mimes:xlsx'
        ]);
        try {
        $check=  Excel::import(new TeachersImport(),$req->file('usersnew'));
        if($check){
            return redirect('view_teachers')->with('status','Success');
        }else{
            return redirect()->back()->with('status','Error');
        }
    } catch (\Maatwebsite\Excel\Validators\ValidationException $e) {
        $failures = $e->failures();
        //dd($failures);
        return redirect()->back()->with('import_error',$failures);
   }

    }
}

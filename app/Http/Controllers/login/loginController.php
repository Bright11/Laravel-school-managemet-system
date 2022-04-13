<?php

namespace App\Http\Controllers\login;

use App\Models\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;

class loginController extends Controller
{
    //

    public function login()
    {
        return view('login.login');
    }

    public function logintodb(Request $req)
    {
        $user=User::where(['email'=>$req->email])->first();
        //$role=User::where(['email'=>$req->email,'role','admin' ])->exists();

        $role=User::where(['role'=>'admin'])->where(['email'=>$req->email])->first();

            if(!$role ||!Hash::check($req->password,$user->password))
            {
             if(!$user ||!Hash::check($req->password,$user->password)) {
                return redirect()->back()->with('status','incorrect user name or password');

             }else{
                 //user
                 //return 'user';
                 $req->session()->put('user',$user);
                 return redirect('/')->with('status','you have successfully login');
             }
            }else{
                //admin
               // return 'admin';
               $req->session()->put('user',$user);
               return redirect('indexadmin')->with('status','you have successfully login');
            }
    }
    public function logout()
    {
        Session::forget('user');
        return redirect('/');
    }
}

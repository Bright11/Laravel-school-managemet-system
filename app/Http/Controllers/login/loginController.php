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
    public function registration()
    {
        # code...

        return view('admin.registration');
    }
    public function view_users()
    {
        # code...
        $users=User::all();
        //dd($users);

        return view('admin.view_users',['users'=>$users]);
    }

    public function registerdb(Request $req)
    {

        # code...
        $req->validate([
            'full_name'=>'required',
            'student_email'=>'required',
            'email'=>'unique:users',
            'password'=>'required',
            'position'=>'required',
            'confirm_p'=>'required_with:password|same:password|min:5',
        ]);

        //$data = ["name" => $req->full_name, "email" => $req->student_email,];
        $code = (time() + rand(1, 10));
        $user= new User;
        if($req->position=='admin')
        {
            $user->role=$req->position;
        }
        $user->name=$req->full_name;
        $user->email=$req->student_email;
        $user->password=Hash::make($req->password);
        $user->user_code=$code;
        $user->position=$req->position;
        $user->reset_p_code=$code;
        $user->save();
        $checkid=User::where('email',$req->student_email)->first();
        if($checkid){
            $ownnerid=$checkid->id;
            //return $myid;
        if($req->position=='student')
        {
            return redirect('student_registration')->with('name',$req->full_name)->with('email',$req->student_email)->with('ownnerid',$ownnerid);
        }elseif($req->position=='teacher')
        {
            return redirect('teachers_registration')->with('name',$req->full_name)->with('email',$req->student_email)->with('ownnerid',$ownnerid);
        }elseif($req->position=='staf')
        {
            return redirect('staf_registration')->with('name',$req->full_name)->with('email',$req->student_email)->with('ownnerid',$ownnerid);
        }//staf
        elseif($req->position=='admin')
        {
            return redirect('view_users')->with('status','Success');
        }
        return redirect()->back()->with('name',$req->full_name)->with('email',$req->student_email)->with('ownnerid',$ownnerid);
       // return view('admin.student_registration',['name'=>$req->full_name,'email'=>$req->student_email]);
    }
}

    public function login()
    {
        return view('login.login');
    }

    public function logintodb(Request $req)
    {
        $checkaccount=User::where(['email'=>$req->email])->where('status','pending')->first();
        if($checkaccount){
            return redirect()->back()->with('status','Account has been suspended, pleace contact school admin');
        }else{
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

       $req->session()->put('user',$user);
      return redirect('indexadmin')->with('status','you have successfully login');
    }
}
}
    public function logout()
    {
        Session::forget('user');
        return redirect('/');
    }
}

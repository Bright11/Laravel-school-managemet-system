<?php

namespace App\Imports;

use App\Models\User;
use App\Models\Teacher;
use Illuminate\Support\Facades\Session;
use Maatwebsite\Excel\Concerns\Importable;
use Maatwebsite\Excel\Concerns\ToModel;
use Maatwebsite\Excel\Concerns\WithHeadingRow;
use Maatwebsite\Excel\Concerns\WithValidation;

class TeachersImport implements ToModel,WithHeadingRow,WithValidation
{
    use Importable;
    /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */
    public function model(array $row)
    {
        $user= User::where('name',$row['name'])->where('email',$row['email'])->first();
        $user_id=Session::get('user')['id'];
        $check= User::where('email'< $row['email'])->first();

        return new Teacher([
            //
            'admin_id'=>$user_id ?? NULL,
            'user_code'=>$user->user_code,
            'teacher_id'=>$user->id ?? NULL,
            'user_code'=>$user->user_code,
            'full_name' => $row['name'],
            'teacher_email'=> $row['email'],
            'teacher_number'=>$row['number'],
            'qualification'=>$row['qualification'],
            'country'=>$row['country'],
            'address'=>$row['address'],
            'teacher_dob'=>$row['teacher_dob'],
            'description'=>$row['description'],
        ]);

    }
    public function rules(): array
    {
        return [
//'teacher_email' => 'required|email|unique:teachers',
        ];
    }
}

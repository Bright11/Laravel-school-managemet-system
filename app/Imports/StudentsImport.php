<?php

namespace App\Imports;

use App\Models\Student;
use App\Models\User;
use Illuminate\Support\Facades\Session;
use Maatwebsite\Excel\Concerns\Importable;
use Maatwebsite\Excel\Concerns\ToModel;
use Maatwebsite\Excel\Concerns\WithHeadingRow;
use Maatwebsite\Excel\Concerns\WithValidation;

class StudentsImport implements ToModel,WithHeadingRow,WithValidation
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
        return new Student([
            //
            'admin_id'=>$user_id ?? NULL,
            'user_code'=>$user->user_code,
            'student_id'=>$user->id ?? NULL,
            'full_name' => $row['name'],
            'student_email'=> $row['email'],
            'student_number'=> $row['number'],
            'qualification'=> $row['qualification'],
            'country'=> $row['country'],
            'address'=> $row['address'],
            'student_dob'=> $row['student_dob'],
        ]);
    }

    public function rules(): array
    {
        return [
            'student_email'=>'required|email|',
            'student_email'=>'unique:students'
        ];
    }
}

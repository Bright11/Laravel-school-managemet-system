<?php

namespace App\Imports;

use App\Models\User;
use Illuminate\Support\Str;
//use illuminate\Validation\Rule;
use Illuminate\Support\Facades\Hash;
use Maatwebsite\Excel\Concerns\ToModel;
//use phpDocumentor\Reflection\Types\Null_;
use Maatwebsite\Excel\Concerns\Importable;
use Maatwebsite\Excel\Concerns\WithHeadingRow;
use Maatwebsite\Excel\Concerns\WithValidation;

class UsersImport implements ToModel,WithValidation,WithHeadingRow
{
    use Importable;
    /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */
    public function model(array $row)
    {

       // $code2 = (time() + rand(1, 5));
       // $ch = (time() + rand(1, 10));
        //$code2 = Str::random(5);
       // $ch=Str::random(10);
        return new User([
            //
            'name' => $row['name'],
            'email'=> $row['email'],
           // 'reset_p_code'=>$ch++,
           // 'user_code'=>$code2++,
            'password'=>Hash::make($row['number']),
            'position'=>$row['position'],
            'number'=>$row['number'],
            'qualification'=>$row['qualification'],
            'country'=>$row['country'],
            'address'=>$row['address'],
            'dob'=>$row['dob'],
            'description'=>$row['description']

        ]);
    }
    public function rules(): array
    {
        return [
            'email' => 'required|email|unique:users',
            'name'=>'required',
            'number'=>'required',
            'position'=>'required',
            'country'=>'required',
            'address'=>'required',
            'dob'=>'required',
            'qualification'=>'required',
            'description'=>'required',
        ];
    }

}

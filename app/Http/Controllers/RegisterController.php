<?php

namespace App\Http\Controllers;
use App\Models\UserModel;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
class RegisterController extends Controller
{
    public function index(Request $request)
    {
        // return view('index');
        // dd($request->all());
        $check_data_exist_r_not = UserModel::where('email','=',$request->email)->first();
        if(empty($check_data_exist_r_not))
        {
            $save_data = DB::table('user')->insert(
                [
                    'name'=>$request->name,
                    'email'=>$request->email,
                    'password'=>$request->password
                ]
            );

            if($save_data)
            {
                echo "Data inserted";
            }
            else
            {
                echo "Data inserted";
            }
        }
        else
        {
            echo "User already exist!";
        }
    }
}

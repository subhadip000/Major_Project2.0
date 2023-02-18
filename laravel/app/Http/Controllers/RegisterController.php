<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class RegisterController extends Controller
{
    public function Register(Request $request)
    {
        $UserFullname = $request->fullName;
        $email = $request->email;
        $Password = $request->password;

        // $response = "INSERT INTO  tbl_userdetails (`user_name`, `user_email`, `ua_pass`) VALUES ('$UserFullname ','$email', '$Password');";
        $response = DB::select("CALL sp_getUserDetails('$email','$Password');");
        $res_arr_length = count($response);

        if ($res_arr_length > 0) {
            return view('login')->with("message", "'Email already exist'");
        } else {
            $response = DB::insert("INSERT INTO tbl_userdetails (user_name, user_email, ua_pass) VALUES ('$UserFullname', '$email', '$Password')");

            // $_SESSION['user_name'] = $UserFullname;
            return view('dashboard');
        }
        return view('register')->with("message", "'Register Successfull'");
    }
}

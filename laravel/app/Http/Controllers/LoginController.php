<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class LoginController extends Controller
{
    public function Login(Request $request)
    {
        // session_start();
        $USEREMAIL = $request->user_email;
        $PASSWORD = $request->password;

        $response = Http::post('http://127.0.0.1:80/api/login', [
            "user_email" => $USEREMAIL,
            "password" => $PASSWORD
        ]);


        $res=json_decode($response);

        if ($res) {
            // session(["email"=>$res[0]->email]);
            return view('dashboard');
        } else {
            return view('login')->with("message", "'Invalid Email or Passsword'");
        }
    }
}

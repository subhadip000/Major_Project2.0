<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class customerReisterController extends Controller
{
    public function registerCustomer(Request $req){
        $userName = $req->user_name;
        $userEmail = $req->user_email;
        $userPhone = $req->user_phone;
        $userAddress = $req->user_address;

        $response = Http::post('http://127.0.0.1:80/api/regCustomer',[
            "user_name" => $userName,
            "user_email" => $userEmail,
            "user_phone" => $userPhone,
            "user_address" => $userAddress
        ]);

        return view('dashboard');
    }
}

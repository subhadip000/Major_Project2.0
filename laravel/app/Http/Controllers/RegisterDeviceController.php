<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Illuminate\Support\Facades\Http;
 

class RegisterDeviceController extends Controller
{
    public function RegisterDevice(Request $request)
    {
        $deviceName = $request->device_name;
        $deviceCode = $request->device_code;
        $batchNo = $request->batch_no;
        $current_date = date('Y-m-d');

        $response = Http::post('http://127.0.0.1:80/api/regDevice',[
            "device_name"=>$deviceName,
            "device_code"=>$deviceCode,
            "batch_no"=>$batchNo,
            "created_on"=>$current_date
        ]);

        if(json_decode($response)){
            return view('dashboard');
            
        }
        else{
            return view('deviceRegForm')->with("message", "'Device already exist!'");
        }

        
    }
}

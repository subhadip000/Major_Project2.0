<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class sensorRegisterController extends Controller
{
    public function registerSensor(Request $req){
        $sensorType = $req->sensor_type;
        $sensorName = $req->sensor_name;
        $current_date = date('Y-m-d');

        $response = Http::post('http://127.0.0.1:80/api/regSensor',[
            "sensor_type" => $sensorType,
            "sensor_name" => $sensorName,
            "created_on" => $current_date
        ]);

        return view('dashboard');
    }
}

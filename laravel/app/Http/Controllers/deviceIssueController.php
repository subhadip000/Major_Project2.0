<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class deviceIssueController extends Controller
{
    public function IssueDevice(Request $req){
        $deviceId = $req->device_id;
        $customerId = $req->customer_id;
        $current_date = date('Y-m-d');

        $response = Http::post('http://127.0.0.1:80/api/issuedevice',[
            "device_id" => $deviceId,
            "customer_id" => $customerId,
            "current_date" => $current_date
        ]);

        return view('dashboard');
    }
}

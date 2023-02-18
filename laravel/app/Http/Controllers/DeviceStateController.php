<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class DeviceStateController extends Controller
{
    public function DeviceState(Request $request){
        $d_id = $request->device_id;
        $d_temp = $request->device_temp;
        $d_hue = $request->device_hue;

        $curl = curl_init();
        
        curl_setopt_array($curl, array(
          CURLOPT_URL => 'http://127.0.0.1:80/api/submitDeviceStat?device_id=5&device_temp=20&device_hue=30',
          CURLOPT_RETURNTRANSFER => true,
          CURLOPT_ENCODING => '',
          CURLOPT_MAXREDIRS => 10,
          CURLOPT_TIMEOUT => 0,
          CURLOPT_FOLLOWLOCATION => true,
          CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
          CURLOPT_CUSTOMREQUEST => 'POST',
        ));
        
        $response = curl_exec($curl);
        
        curl_close($curl);
        echo $response;
            
      }
    }
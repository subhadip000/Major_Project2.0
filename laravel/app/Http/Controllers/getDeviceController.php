<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class getDeviceController extends Controller
{
    public function getDevice($id){

        $res = array();
        
        if($id==0){
            $res = DB::select("SELECT * FROM  device_master;");
        }else{
            $res = DB::select("SELECT * FROM  device_master WHERE device_id='$id';");
        }

        if(count($res)>0){
            return response()->json($res);
        }
        else{
            echo "No data found";
        }
    }
}

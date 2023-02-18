<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\DeviceStateController;
use App\Http\Controllers\RegisterDeviceController;
use App\Http\Controllers\sensorRegisterController;
use App\Http\Controllers\customerReisterController;
use App\Http\Controllers\deviceIssueController;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('home');
});
Route::get('/login', function () {
    return view('login')->with("message","");
});
Route::get('/dashboard', function () {
    return view('dashboard');
});
Route::get('/table', function () {
    return view('table');
});
Route::get('/deviceRegForm', function () {
    return view('deviceRegForm')->with("message","");
});
Route::get('/deviceIssueForm', function () {
    return view('deviceIssueForm');
});
Route::get('/sensorRegForm', function () {
    return view('sensorRegForm');
});
Route::get('/entryCustomer', function () {
    return view('entryCustomer');
});
Route::post('/login',[LoginController::class,'Login']);

Route::post('/register',[RegisterController::class,'Register']);

Route::get('/register', function () {
    return view('register')->with("message","");
});
Route::post('/deviceRegForm',[RegisterDeviceController::class,'RegisterDevice']);
Route::post('/sensorRegForm',[sensorRegisterController::class,'registerSensor']);
Route::post('/entryCustomer',[customerReisterController::class,'registerCustomer']);
Route::post('/deviceIssueForm',[deviceIssueController::class,'IssueDevice']);

Route::get('/device-state-reg', function () {
    return view('DeviceRegForm');
});
Route::post('/device-state',[DeviceStateController::class,'DeviceState']);
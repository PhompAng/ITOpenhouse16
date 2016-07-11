<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('countdown');
});

/*---Test---*/
Route::get('/test', function (){
    return view('soon', ["title" => ""]);
});

Route::any('/register/{any}', function () {
    return view('soon', ["title" => ""]);
});
//
////Guest Register
//Route::get('/register/guest',[
//    'as' => 'createRegisterGuest',
//    'uses' => 'Guest\RegisterController@createGuestRegister'
//]);
//Route::post('/register/guest',[
//    'as' => 'storeRegisterGuest',
//    'uses' => 'Guest\RegisterController@storeGuestRegister'
//]);
//
//Route::get('/register/guest_student',[
//    'as' => 'createGuestStudentRegister',
//    'uses' => 'Guest\RegisterController@createGuestStudentRegister'
//]);
//Route::post('/register/guest_student',[
//    'as' => 'storeGuestStudentRegister',
//    'uses' => 'Guest\RegisterController@storeGuestStudentRegister'
//]);
//
//Route::get('/register/guest_school',[
//    'as' => 'createGuestSchoolRegister',
//    'uses' => 'Guest\RegisterController@createGuestSchoolRegister'
//]);
//Route::post('/register/guest_school',[
//    'as' => 'storeGuestSchoolRegister',
//    'uses' => 'Guest\RegisterController@storeGuestSchoolRegister'
//]);

//Route Resource Competition
Route::resource('/register/competition/itquiz', 'Competition\ITQuizController');
Route::resource('/register/competition/esport', 'Competition\ESportController');
Route::resource('/register/competition/pitching', 'Competition\ITPitchingController');
Route::resource('/register/competition/network', 'Competition\NetworkController');
Route::resource('/register/competition/php', 'Competition\PhpJavaScriptController');

Route::get('/form', function () {
    return view('form');
});


Route::get('/main', function () {
    return view('main.main', ["title" => ""]);
});

Route::get('/register/check/{type}/{remember?}', 'Competition\CheckController@getCheck');

Route::get('/schedule', function () {
    return view('main.schedule', ["title" => "กำหนดการและกิจกรรม | "]);
});

Route::get('/route/car', function () {
    return view('main.route.car', ["title" => "การเดินทางโดยรถยนต์ | "]);
});
Route::get('/route/bus', function () {
    return view('main.route.bus', ["title" => "การเดินทางโดยรถประจำทาง | "]);
});
Route::get('/route/train', function () {
    return view('main.route.train', ["title" => "การเดินทางโดยรถไฟ/รถไฟฟ้า | "]);
});

Route::get('/contact', function () {
    return view('main.contact', ["title" => "ติดต่อสอบถาม | "]);
});

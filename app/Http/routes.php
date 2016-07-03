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
    return view('register.competition.esport.begin');
});

//Guest Register
Route::get('/register/guest',[
    'as' => 'createRegisterGuest',
    'uses' => 'Guest\RegisterController@createGuestRegister'
]);

Route::post('/register/guest',[
    'as' => 'storeRegisterGuest',
    'uses' => 'Guest\RegisterController@storeGuestRegister'
]);

Route::get('/register/guest_student',[
    'as' => 'createGuestStudentRegister',
    'uses' => 'Guest\RegisterController@createGuestStudentRegister'
]);

Route::post('/register/guest_student',[
    'as' => 'storeGuestStudentRegister',
    'uses' => 'Guest\RegisterController@storeGuestStudentRegister'
]);

Route::get('/register/guest_school',[
    'as' => 'createGuestSchoolRegister',
    'uses' => 'Guest\RegisterController@createGuestSchoolRegister'
]);

Route::post('/register/guest_school',[
    'as' => 'storeGuestSchoolRegister',
    'uses' => 'Guest\RegisterController@storeGuestSchoolRegister'
]);

//Route::get('/register/competition/itquiz', function (){
//    return view('register.competition.quiz.create');
//});

//Route Resource Competition
Route::resource('/register/competition/itquiz', 'Competition\ITQuizController');
Route::resource('/register/competition/esport', 'Competition\ESportController');
Route::resource('/register/competition/pitching', 'Competition\ITPitchingController');
Route::resource('/register/competition/network', 'Competition\NetworkController');
Route::resource('/register/competition/php', 'Competition\PhpJavaScriptController');

//Route::get('/register/competition/network', function (){
//    return view('register.competition.network.create');
//});
//Route::get('/register/competition/php', function (){
//    return view('register.competition.php.create');
//});
//Route::get('/register/competition/pitching', function (){
//    return view('register.competition.pitching.create');
//});
//Route::get('/register/competition/esport', function (){
//    return view('register.competition.esport.create');
//});

Route::get('/form', function () {
    return view('form');
});

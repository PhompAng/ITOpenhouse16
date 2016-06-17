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

Route::get('/', function () {
    return view('countdown');
});

/*---Test---*/
Route::get('/test', function (){
    return view('register.guest.create');
});

//Register
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

Route::get('/form', function () {
    return view('form');
});

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

use App\Http\Controllers\FormController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('new.main', ["title" => ""]);
});

Route::resource('/form', 'FormController');

/*---Test---*/
//Route::get('/test', function (){
//    return view('soon', ["title" => ""]);
//});

//Route::any('/register/{any}', function () {
//    return view('soon', ["title" => ""]);
//});

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

//Route Resource Competition
Route::resource('/register/competition/itquiz', 'Competition\ITQuizController');
Route::resource('/register/competition/esport', 'Competition\ESportController');
Route::resource('/register/competition/pitching', 'Competition\ITPitchingController');
Route::resource('/register/competition/network', 'Competition\NetworkController');
Route::resource('/register/competition/php', 'Competition\PhpJavaScriptController');
//
//Route::get('/form', function () {
//    return view('form');
//});
//
//
//Route::get('/main', function () {
//    return view('main.main', ["title" => ""]);
//});

Route::get('/register/check/{type}/{remember?}', [
    'as' => 'registerCheck',
    'uses' => 'Competition\CheckController@getCheck']);

Route::get('/approved/{type}', [
    'as' => 'approvedTeam',
    'uses' => 'Competition\CheckController@approved'
]);

Route::get('/schedule', function () {
    return view('new.schedule', ["title" => "กำหนดการและกิจกรรม | "]);
});

Route::get('/route', function () {
    return view('new.route', ["title" => "การเดินทาง | "]);
});

//Route::get('/route/car', function () {
//    return view('main.route.car', ["title" => "การเดินทางโดยรถยนต์ | "]);
//});
//Route::get('/route/bus', function () {
//    return view('main.route.bus', ["title" => "การเดินทางโดยรถประจำทาง | "]);
//});
//Route::get('/route/train', function () {
//    return view('main.route.train', ["title" => "การเดินทางโดยรถไฟ/รถไฟฟ้า | "]);
//});

Route::get('/contact', function () {
    return view('new.contact', ["title" => "ติดต่อสอบถาม | "]);
});

// Authentication Routes...
Route::get('/backend/login', 'Backend\AuthController@showLoginForm');
Route::post('/backend/login', 'Backend\AuthController@login');
Route::get('/backend/logout', 'Backend\AuthController@logout');
//
//// Registration Routes...
//Route::get('/backend/register', 'Backend\AuthController@showRegistrationForm');
//Route::post('/backend/register', 'Backend\AuthController@register');
//
//// Password Reset Routes...
//Route::get('/backend/password/reset/{token?}', 'Backend\PasswordController@showResetForm');
//Route::post('/backend/password/email', 'Backend\PasswordController@sendResetLinkEmail');
//Route::post('/backend/password/reset', 'Backend\PasswordController@reset');

Route::group(['middleware' => 'uac'], function () {
    Route::get('/backend', function () {
        return view('backend.main');
    });
    Route::get('/backend/register/common/excel', [
        'as' => 'commonExcel',
        'uses' => 'Backend\RegisterCommonController@excel'
    ]);
    Route::get('/backend/register/school/excel', [
        'as' => 'schoolExcel',
        'uses' => 'Backend\RegisterSchoolController@excel'
    ]);
    Route::get('/backend/register/student/excel', [
        'as' => 'studentExcel',
        'uses' => 'Backend\RegisterStudentController@excel'
    ]);
    Route::resource('/backend/register/common', 'Backend\RegisterCommonController');
    Route::resource('/backend/register/school', 'Backend\RegisterSchoolController');
    Route::resource('/backend/register/student', 'Backend\RegisterStudentController');
    Route::controller('/backend/register', 'Backend\RegisterController');
    Route::resource('/backend/user', 'Backend\UserController');
    Route::get('/backend/competition/esport/excel', [
        'as' => 'esportExcel',
        'uses' => 'Backend\EsportController@excel'
    ]);
    Route::get('/backend/competition/php/excel', [
        'as' => 'phpExcel',
        'uses' => 'Backend\PhpController@excel'
    ]);
    Route::get('/backend/competition/quiz/excel', [
        'as' => 'quizExcel',
        'uses' => 'Backend\ITQuizController@excel'
    ]);
    Route::get('/backend/competition/network/excel', [
        'as' => 'networkExcel',
        'uses' => 'Backend\NetworkController@excel'
    ]);
    Route::get('/backend/competition/pitching/excel', [
        'as' => 'pitchingExcel',
        'uses' => 'Backend\ITPitchingController@excel'
    ]);
    Route::resource('/backend/competition/esport', 'Backend\EsportController');
    Route::resource('/backend/competition/pitching', 'Backend\ITPitchingController');
    Route::resource('/backend/competition/network', 'Backend\NetworkController');
    Route::resource('/backend/competition/php', 'Backend\PhpController');
    Route::resource('/backend/competition/quiz', 'Backend\ITQuizController');
    Route::post('/backend/competition/{type}/{id}/change', [
        'as' => 'competitionConfirmChange',
        'uses' => 'Competition\CheckController@change']);
    Route::get('/backend/competition/pitching/{id}/bizcanvas', [
        'as' => 'getBizcanvas',
        'uses' => 'Competition\ITPitchingController@getBizcanvas'
    ]);
    Route::get('/backend/competition/pitching/{id}/storyboard', [
        'as' => 'getStoryboard',
        'uses' => 'Competition\ITPitchingController@getStoryboard'
    ]);
});

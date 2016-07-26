<?php

namespace App\Http\Controllers\Backend;

use App\Models\Guest;
use App\Models\GuestSchool;
use App\Models\GuestStudent;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests;

class RegisterController extends Controller
{
    public function getCommon() {
        $datas = Guest::all();
        return view('backend.register.common.list', ['datas' => $datas]);
    }

    public function getStudent() {
        $datas = GuestStudent::all();
        return view('backend.register.student.list', ['datas' => $datas]);
    }
    public function getSchool() {
        $datas = GuestSchool::all();
        return view('backend.register.school.list', ['datas' => $datas]);
    }
}

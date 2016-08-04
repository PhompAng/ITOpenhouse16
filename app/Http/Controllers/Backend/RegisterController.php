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
    public function getIndex() {
        $guest = Guest::all()->toArray();
        $guestStudent = GuestStudent::all()->toArray();
        $guestSchool = GuestSchool::all()->toArray();
        $datas = array_merge($guest, $guestSchool, $guestStudent);
        return view('backend.register.index', ['datas' => $datas]);
    }

    public function postCheckin(Request $request, $id) {
        dd("test");
    }

    public function postGift(Request $request, $id) {
        dd("gift");
    }
}

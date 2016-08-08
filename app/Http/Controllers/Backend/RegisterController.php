<?php

namespace App\Http\Controllers\Backend;

use App\Models\Guest;
use App\Models\GuestSchool;
use App\Models\GuestStudent;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests;
use Carbon;

class RegisterController extends Controller
{
    public function getIndex() {
        $guest = Guest::all()->toArray();
        $guestStudent = GuestStudent::all()->toArray();
        $guestSchool = GuestSchool::all()->toArray();
        $datas = array_merge($guest, $guestSchool, $guestStudent);
        return view('backend.register.index', ['datas' => $datas]);
    }

    public function postCheckin(Request $request, $code) {
        $type = substr($code, 0, 1);
        $id = (int) substr($code, 1);

        switch ($type) {
            case 1:
                $guest = Guest::find($id);
                break;
            case 2:
                $guest = GuestStudent::find($id);
                break;
            case 3:
                $guest = GuestSchool::find($id);
                break;
            default:
                dd("fuck you");
        }
        if (isset($guest)) {
            $guest->confirm = Carbon\Carbon::now();
            $guest->save();
        }
        return redirect('/backend/register');

    }

    public function postGift(Request $request, $code) {
        $type = substr($code, 0, 1);
        $id = (int) substr($code, 1);

        switch ($type) {
            case 1:
                $guest = Guest::find($id);
                break;
            case 2:
                $guest = GuestStudent::find($id);
                break;
            case 3:
                $guest = GuestSchool::find($id);
                break;
            default:
                dd("fuck you");
        }
        if (isset($guest)) {
            if ($guest->gift == null) {
                $guest->gift = Carbon\Carbon::now();
                $guest->save();
            } else {
                dd("fuck");
            }
        }
        return redirect('/backend/register');
    }
}

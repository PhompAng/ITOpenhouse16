<?php

namespace App\Http\Controllers\Backend;

use App\Models\Guest;
use App\Http\Controllers\Controller;
use App\Http\Requests;

class RegisterCommonController extends Controller
{
    public function index() {
        $datas = Guest::all();
        return view('backend.register.common.list', ['datas' => $datas]);
    }

    public function show($id) {
        return view('backend.register.common.show', ['data' => Guest::find($id)]);
    }
}

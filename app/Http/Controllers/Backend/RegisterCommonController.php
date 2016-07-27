<?php

namespace App\Http\Controllers\Backend;

use App\Models\Guest;
use App\Http\Controllers\Controller;
use App\Http\Requests;
use Maatwebsite\Excel\Facades\Excel;

class RegisterCommonController extends Controller
{
    public function index() {
        $datas = Guest::all();
        return view('backend.register.common.list', ['datas' => $datas]);
    }

    public function show($id) {
        return view('backend.register.common.show', ['data' => Guest::find($id)]);
    }

    public function excel() {
        return Excel::create('common_guest_export_' . time(), function($excel)
        {
            $excel->sheet('Sheet', function($sheet)
            {
                $datas = Guest::all();
                $sheet->loadView('backend.register.common.excel', ['datas' => $datas]);
            });
        })->download('xls');
    }
}

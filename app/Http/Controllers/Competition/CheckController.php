<?php

namespace App\Http\Controllers\Competition;

use App\Models\ESport;
use App\Models\ITQuiz;
use App\Models\Network;
use App\Models\Php;
use App\Models\Pitching;
use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class CheckController extends Controller
{
    public function getCheck($type=null, $remember=null) {
        if (is_null($remember) || is_null($type)) {
            return redirect('/');
        }
        $team = null;
        switch ($type) {
            case 1:
                $team = ESport::where('remember', $remember)->first();
                break;
            case 2:
                $team = ITQuiz::where('remember', $remember)->first();
                break;
            case 3:
                $team = Network::where('remember', $remember)->first();
                break;
            case 4:
                $team = Php::where('remember', $remember)->first();
                break;
            case 5:
                $team = Pitching::where('remember', $remember)->first();
                break;
            default:
                return redirect('/');
        }
        return view('register.competition.check', ["team" => $team]);
    }
}
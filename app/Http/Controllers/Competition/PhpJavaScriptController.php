<?php

namespace App\Http\Controllers\Competition;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests;
use Illuminate\Support\Facades\Validator;
use App\Models\Php;

class PhpJavaScriptController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('new.competition.php.begin', ["title" => "การแข่งขันพัฒนาเว็บไซต์ | IT Ladkrabang Open House 2016"]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return redirect("/");
//        return view('new.competition.php.create', ["title" => "การแข่งขันพัฒนาเว็บไซต์ | IT Ladkrabang Open House 2016"]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
//    public function store(Request $request)
//    {
//        $inputs = $request->all();
//
//        $rules = [
//            'team_name'             => 'required',
//            'name.*'				=> 'required',
//            'surname.*'             => 'required',
//            'email.*'               => 'required|email',
//            'school'				=> 'required',
//            'school_addr'			=> 'required',
//            'school_province'		=> 'required',
//            'teacher_prefix'        => 'required',
//            'teacher_name'		    => 'required',
//            'teacher_surname'		=> 'required',
//            'teacher_email'         => 'required|email',
//            'teacher_phone'			=> 'required|regex:/^0[0-9]{1,2}[0-9]{7}$/'
//        ];
//
//        $messages = [
//            'team_name.required'             =>  'กรุณากรอก  ชื่อทีม',
//            'name.*.required'                =>  'กรุณากรอก  ชื่อสมาชิก',
//            'surname.*.required'             =>  'กรุณากรอก  นามสกุลของสมาชิก',
//            'email.*.required'               =>  'กรุณากรอก  อีเมลของสมาชิก',
//            'school.required'                =>  'กรุณากรอก  ชื่อโรงเรียน',
//            'school_addr.required'           =>  'กรุณากรอก  ที่อยู่โรงเรียน',
//            'school_province.required'       =>  'กรุณากรอก  จังหวัด',
//            'teacher_prefix.required'        =>  'กรุณากรอก  คำนำหน้าชื่ออาจารย์ผู้ควบคุมทีม',
//            'teacher_name.required'          =>  'กรุณากรอก  ชื่ออาจารย์ผู้ควบคุมทีม',
//            'teacher_surname.required'       =>  'กรุณากรอก  นามสกุลอาจารย์ผู้ควบคุมทีม',
//            'teacher_phone.required'         =>  'กรุณากรอก  เบอร์โทรศัพท์อาจารย์ผู้ควบคุมทีม',
//            'teacher_email.required'            =>  'กรุณากรอก  อีเมลอาจารย์ผู้ควบคุมทีม',
//            'email.*.email'                  =>  'รูปแบบ  อีเมลสมาชิก ไม่ถูกต้อง',
//            'teacher_email.email'            =>  'รูปแบบ  อีเมลอาจารย์ผู้ควบคุมทีม ไม่ถูกต้อง',
//            'teacher_phone.regex'            =>  'รูปแบบ  เบอร์โทรศัพท์อาจารย์ผู้ควบคุมทีม ไม่ถูกต้อง'
//        ];
//
//        $validator = Validator::make($inputs, $rules, $messages);
//        if($validator->fails()){
//            return redirect('/register/competition/php/create')->with(["title" => "การแข่งขันพัฒนาเว็บไซต์ | IT Ladkrabang Open House 2016"])->withInput()->withErrors($validator);
//        }
//
//        $php = new Php();
//        $php->fill($request->all());
//
//        $members = [];
//        for ($i = 0; $i < 2; $i++){
//            $member['prefix'] = $inputs['prefix'][$i];
//            $member['name'] = $inputs['name'][$i];
//            $member['surname'] = $inputs['surname'][$i];
//            $member['class'] = $inputs['class'][$i];
//            $member['email'] = $inputs['email'][$i];
//            $members[] = $member;
//        }
//
//        $php->member = json_encode($members, JSON_UNESCAPED_UNICODE);
//
//        $remember = md5(time() . str_random(100));
//        $php->remember = $remember;
//        $php->save();
//
//        //for convert to PDF
//        $data = $request->all();
//        //return view('register.competition.php.pdf2', ['data' => $data]);
//
//        $competition = 'พัฒนาเว็บไซต์ด้วย PHP และ JavaScript';
//        $team = $request->input('team_name');
//
//        $storePath = public_path() . "/pdf/" . $remember .".pdf";
//        $pdf = \PDF::loadView('register.competition.php.pdf', ["data" => $data]);
//        $pdf->save($storePath);
//
//        $accounts = $members;
//        //add teacher to accounts for send mail
//        $account['name'] = $request->input('teacher_name');
//        $account['email'] = $request->input('teacher_email');
//        $accounts[] = $account;
//
//        MailController::sendCompetitionMail($competition, $team, $accounts, $remember, 4);
//
//        return view('register.competition.php.pdf2', ['data' => $data]);
//        //return view('register.competition.php.create', ['success' => 1, "title" => "การแข่งขันพัฒนาเว็บไซต์ | IT Ladkrabang Open House 2016"]);
//    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}

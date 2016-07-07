<?php

namespace App\Http\Controllers\Competition;

use App\Models\Network;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests;
use Illuminate\Support\Facades\Validator;

class NetworkController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('register.competition.network.begin');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('register.competition.network.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $inputs = $request->all();

        $rules = [
            'team_name'             => 'required',
            'rank'             => 'required|integer|between:1,100',
            'name.*'				=> 'required',
            'surname.*'             => 'required',
            'email.*'               => 'required|email',
            'phone.*'               => 'required|regex:/^0[0-9]{1,2}[0-9]{7}$/',
            'school'				=> 'required',
            'school_addr'			=> 'required',
            'school_province'		=> 'required',
            'teacher_prefix'        => 'required',
            'teacher_name'		    => 'required',
            'teacher_surname'		=> 'required',
            'teacher_email'         => 'required|email',
            'teacher_phone'			=> 'required|regex:/^0[0-9]{1,2}[0-9]{7}$/'
        ];

        $messages = [
            'team_name.required'             =>  'กรุณากรอก  ชื่อทีม',
            'rank.required'             =>  'กรุณากรอก  อันดับของทีม',
            'name.*.required'                =>  'กรุณากรอก  ชื่อสมาชิก',
            'surname.*.required'             =>  'กรุณากรอก  นามสกุลของสมาชิก',
            'email.*.required'               =>  'กรุณากรอก  อีเมลของสมาชิก',
            'phone.*.required'               =>  'กรุณากรอก  เบอร์โทรศัพท์ของสมาชิก',
            'school.required'                =>  'กรุณากรอก  ชื่อโรงเรียน',
            'school_addr.required'           =>  'กรุณากรอก  ที่อยู่โรงเรียน',
            'school_province.required'       =>  'กรุณากรอก  จังหวัด',
            'teacher_prefix.required'        =>  'กรุณากรอก  คำนำหน้าชื่ออาจารย์ผู้ควบคุมทีม',
            'teacher_name.required'          =>  'กรุณากรอก  ชื่ออาจารย์ผู้ควบคุมทีม',
            'teacher_surname.required'       =>  'กรุณากรอก  นามสกุลอาจารย์ผู้ควบคุมทีม',
            'teacher_phone.required'         =>  'กรุณากรอก  เบอร์โทรศัพท์อาจารย์ผู้ควบคุมทีม',
            'teacher_email.required'         =>  'กรุณากรอก  อีเมลอาจารย์ผู้ควบคุมทีม',
            'team_rank.integer'              =>  'รูปแบบ  อันดับทีม ไม่ถูกต้อง',
            'team_rank.between'              =>  'อันดับทีมต้องอยู่ระหว่าง 1 ถึง 100',
            'email.*.email'                  =>  'รูปแบบ  อีเมลสมาชิก ไม่ถูกต้อง',
            'phone.*.regex'                  =>  'รูปแบบ  เบอร์โทรศัพท์สมาชิก ไม่ถูกต้อง',
            'teacher_email.email'            =>  'รูปแบบ  อีเมลอาจารย์ผู้ควบคุมทีม ไม่ถูกต้อง',
            'teacher_phone.regex'            =>  'รูปแบบ  เบอร์โทรศัพท์อาจารย์ผู้ควบคุมทีม ไม่ถูกต้อง'
        ];

        $validator = Validator::make($inputs, $rules, $messages);
        if($validator->fails()){
            return redirect('/register/competition/network/create')->withInput()->withErrors($validator);
        }

        $network = new Network();
        $network->fill($request->all());

        $members = [];
        for ($i = 0; $i < 2; $i++){
            $member['prefix'] = $inputs['prefix'][$i];
            $member['name'] = $inputs['name'][$i];
            $member['surname'] = $inputs['surname'][$i];
            $member['class'] = $inputs['class'][$i];
            $member['email'] = $inputs['email'][$i];
            $member['phone'] = $inputs['phone'][$i];
            $members[] = $member;
        }

        $network->member = json_encode($members, JSON_UNESCAPED_UNICODE);
        $network->save();

        $competition = 'ความปลอดภัยของระบบคอมพิวเตอร์';
        $team = $request->input('team_name');

        $accounts = $members;
        //add teacher to accounts for send mail
        $account['name'] = $request->input('teacher_name');
        $account['email'] = $request->input('teacher_email');
        $accounts[] = $account;

        MailController::sendCompetitionMail($competition, $team, $accounts);

        return view('register.competition.network.create', ['success' => 1]);
    }

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

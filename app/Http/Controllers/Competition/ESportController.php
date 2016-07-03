<?php

namespace App\Http\Controllers\Competition;

use App\Models\ESport;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests;
use Illuminate\Support\Facades\Validator;

class ESportController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('register.competition.esport.begin');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('register.competition.esport.create');
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
            'team_fb'			    => 'required',
            'name.*'				=> 'required',
            'surname.*'             => 'required',
            'steam.*'               => 'required',
            'facebook.*'            => 'required',
            'phone.*'               => 'required|regex:/^0[0-9]{1,2}[0-9]{7}$/',
            'subPhone.*'            => 'regex:/^0[0-9]{1,2}[0-9]{7}$/',
            'school'				=> 'required',
            'school_addr'			=> 'required',
            'school_province'		=> 'required',
            'teacher_prefix'        => 'required',
            'teacher_name'		    => 'required',
            'teacher_surname'		=> 'required',
            'teacher_phone'			=> 'required|regex:/^0[0-9]{1,2}[0-9]{7}$/'
        ];

        $messages = [
            'team_name.required'             =>  'กรุณากรอก  ชื่อทีม',
            'team_fb.required'               =>  'กรุณากรอก  facebook ที่สามารถติดต่อทีม',
            'name.*.required'                =>  'กรุณากรอก  ชื่อสมาชิก',
            'surname.*.required'             =>  'กรุณากรอก  นามสกุลของสมาชิก',
            'steam.*.required'               =>  'กรุณากรอก  steam ของสมาชิก',
            'facebook.*.required'            =>  'กรุณากรอก  facebook ของสมาชิก',
            'phone.*.required'               =>  'กรุณากรอก  เบอร์โทรศัพท์ของสมาชิก',
            'school.required'                =>  'กรุณากรอก  ชื่อโรงเรียน',
            'school_addr.required'           =>  'กรุณากรอก  ที่อยู่โรงเรียน',
            'school_province.required'       =>  'กรุณากรอก  จังหวัด',
            'teacher_prefix.required'        =>  'กรุณากรอก  คำนำหน้าชื่ออาจารย์ผู้ควบคุมทีม',
            'teacher_name.required'          =>  'กรุณากรอก  ชื่ออาจารย์ผู้ควบคุมทีม',
            'teacher_surname.required'       =>  'กรุณากรอก  นามสกุลอาจารย์ผู้ควบคุมทีม',
            'teacher_phone.required'         =>  'กรุณากรอก  เบอร์โทรศัพท์อาจารย์ผู้ควบคุมทีม',
            'phone.*.regex'                  =>  'รูปแบบ  เบอร์โทรศัพท์สมาชิก ไม่ถูกต้อง',
            'subPhone.*.regex'               =>  'รูปแบบ  เบอร์โทรศัพท์ตัวสำรอง ไม่ถูกต้อง',
            'teacher_phone.regex'            =>  'รูปแบบ  เบอร์โทรศัพท์อาจารย์ผู้ควบคุมทีม ไม่ถูกต้อง'
        ];

        $validator = Validator::make($inputs, $rules, $messages);
        if($validator->fails()){
            return redirect('/register/competition/esport/create')->withInput()->withErrors($validator);
        }

        $esport = new ESport();
        $esport->fill($request->all());

        $members = [];
        for ($i = 0; $i < 5; $i++){
            $member['prefix'] = $inputs['prefix'][$i];
            $member['name'] = $inputs['name'][$i];
            $member['surname'] = $inputs['surname'][$i];
            $member['steam'] = $inputs['steam'][$i];
            $member['facebook'] = $inputs['facebook'][$i];
            $member['phone'] = $inputs['phone'][$i];
            $members[] = $member;
        }

        if ($inputs['subName'][0] != "" || $inputs['subName'][1] != "") {
            for ($i = 0; $i < 2; $i++){
                if ($inputs['subName'][$i] == "") continue;
                $member['prefix'] = $inputs['subPrefix'][$i];
                $member['name'] = $inputs['subName'][$i];
                $member['surname'] = $inputs['subSurname'][$i];
                $member['steam'] = $inputs['subSteam'][$i];
                $member['facebook'] = $inputs['subFacebook'][$i];
                $member['phone'] = $inputs['subPhone'][$i];
                $members[] = $member;
            }
        }

        $json = json_encode($members, JSON_UNESCAPED_UNICODE);
        $esport->member = $json;
        $esport->save();

        return view('register.competition.esport.create', ['success' => 1]);
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

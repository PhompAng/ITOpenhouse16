<?php

namespace App\Http\Controllers\Competition;

use App\Models\Pitching;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests;
use Illuminate\Support\Facades\Validator;

class ITPitchingController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('register.competition.pitching.begin');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('register.competition.pitching.create');
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

        dd($request->files);

        $rules = [
            'team_name'             => 'required',
            'name.*'				=> 'required',
            'surname.*'             => 'required',
            'school'				=> 'required',
            'teacher_prefix'        => 'required',
            'teacher_name'		    => 'required',
            'teacher_surname'		=> 'required',
            'teacher_phone'			=> 'required|regex:/^0[0-9]{1,2}[0-9]{7}$/',
            'idea'			        => 'required',
            'idea_desc'			    => 'required',
            'bizcanvas'			    => 'required|size:10000|mimes:pdf',
            'storyboard'			=> 'required|size:10000|mimes:pdf'
        ];

        $messages = [
            'team_name.required'             =>  'กรุณากรอก  ชื่อทีม',
            'name.*.required'                =>  'กรุณากรอก  ชื่อสมาชิก',
            'surname.*.required'             =>  'กรุณากรอก  นามสกุลของสมาชิก',
            'school.required'                =>  'กรุณากรอก  ชื่อโรงเรียน',
            'teacher_prefix.required'        =>  'กรุณากรอก  คำนำหน้าชื่ออาจารย์ผู้ควบคุมทีม',
            'teacher_name.required'          =>  'กรุณากรอก  ชื่ออาจารย์ผู้ควบคุมทีม',
            'teacher_surname.required'       =>  'กรุณากรอก  นามสกุลอาจารย์ผู้ควบคุมทีม',
            'teacher_phone.required'         =>  'กรุณากรอก  เบอร์โทรศัพท์อาจารย์ผู้ควบคุมทีม',
            'idea.required'                  =>  'กรุณากรอก  ชื่อแนวคิด',
            'idea_desc.required'             =>  'กรุณากรอก  รายละเอียดแนวคิด',
            'bizcanvas.required'             =>  'กรุณาอัปโหลด  Business Concept',
            'storyboard.required'            =>  'กรุณาอัปโหลด  Storyboard',
            'teacher_phone.regex'            =>  'รูปแบบ  เบอร์โทรศัพท์อาจารย์ผู้ควบคุมทีม ไม่ถูกต้อง',
            'bizcanvas.size'                  =>  'ขนาดไฟล์ Business Concept ต้องไม่เกิน 10 MB',
            'storyboard.size'                  =>  'ขนาดไฟล์ Storyboard ต้องไม่เกิน 10 MB',
            'bizcanvas.mimes'               => 'ไฟล์ Business Concept ต้องเป็น PDF เท่านั้น',
            'storyboard.mimes'               => 'ไฟล์ Storyboard ต้องเป็น PDF เท่านั้น'
        ];

        $validator = Validator::make($inputs, $rules, $messages);
        if($validator->fails()){
            return redirect('/register/competition/pitching/create')->withInput()->withErrors($validator);
        }

        $pitching = new Pitching();
        $pitching->fill($request->all());

        $members = [];
        for ($i = 0; $i < 3; $i++){
            $member['prefix'] = $inputs['prefix'][$i];
            $member['name'] = $inputs['name'][$i];
            $member['surname'] = $inputs['surname'][$i];
            $member['class'] = $inputs['class'][$i];
            $members[] = $member;
        }

        $pitching->member = json_encode($members, JSON_UNESCAPED_UNICODE);
        $pitching->save();

        return view('register.competition.pitching.create', ['success' => 1]);
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

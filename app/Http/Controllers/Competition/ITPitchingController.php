<?php

namespace App\Http\Controllers\Competition;

use App\Models\Pitching;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\File;

class ITPitchingController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('register.competition.pitching.begin', ["title" => "การแข่งขันการนำเสนอแผนธุรกิจ | IT Ladkrabang Open House 2016"]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('register.competition.pitching.create', ["title" => "การแข่งขันการนำเสนอแผนธุรกิจ | IT Ladkrabang Open House 2016"]);
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
            'name.*'				=> 'required',
            'surname.*'             => 'required',
            'school'				=> 'required',
            'teacher_prefix'        => 'required',
            'teacher_name'		    => 'required',
            'teacher_surname'		=> 'required',
            'teacher_phone'			=> 'required|regex:/^0[0-9]{1,2}[0-9]{7}$/',
            'teacher_email'         => 'required|email',
            'idea'			        => 'required',
            'idea_desc'			    => 'required',
            'bizcanvas'			    => 'required|max:10000000|mimes:pdf',
            'storyboard'			=> 'required|max:10000000|mimes:pdf'
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
            'teacher_email.required'            =>  'กรุณากรอก  อีเมลอาจารย์ผู้ควบคุมทีม',
            'idea.required'                  =>  'กรุณากรอก  ชื่อแนวคิด',
            'idea_desc.required'             =>  'กรุณากรอก  รายละเอียดแนวคิด',
            'bizcanvas.required'             =>  'กรุณาอัปโหลด  Business Concept',
            'storyboard.required'            =>  'กรุณาอัปโหลด  Storyboard',
            'teacher_phone.regex'            =>  'รูปแบบ  เบอร์โทรศัพท์อาจารย์ผู้ควบคุมทีม ไม่ถูกต้อง',
            'bizcanvas.max'                  =>  'ขนาดไฟล์ Business Concept ต้องไม่เกิน 10 MB',
            'storyboard.max'                  =>  'ขนาดไฟล์ Storyboard ต้องไม่เกิน 10 MB',
            'bizcanvas.mimes'               => 'ไฟล์ Business Concept ต้องเป็น PDF เท่านั้น',
            'storyboard.mimes'               => 'ไฟล์ Storyboard ต้องเป็น PDF เท่านั้น'
        ];

        $validator = Validator::make($inputs, $rules, $messages);
        if($validator->fails()){
            return redirect('/register/competition/pitching/create')->with(["title" => "การแข่งขันการนำเสนอแผนธุรกิจ | IT Ladkrabang Open House 2016"])->withInput()->withErrors($validator);
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

        $bizcanvas = $request->file('bizcanvas');
        $filename = $inputs["team_name"] . "_bizcanvas_" . str_random(10);
        Storage::disk('local')->put($filename.'.pdf',  File::get($bizcanvas));
        $pitching->bizcanvas = $filename;
        $storyboard = $request->file('storyboard');
        $filename = $inputs["team_name"] . "_storyboard_" . str_random(10);
        Storage::disk('local')->put($filename.'.pdf', File::get($storyboard));
        $pitching->storyboard = $filename;

        $remember = md5(time() . str_random(100));
        $pitching->remember = $remember;
        $pitching->save();

        $competition = 'การนำเสนอแผนธุรกิจ (IT Pitching)';
        $team = $request->input('team_name');

        $account['name'] = $request->input('teacher_name');
        $account['email'] = $request->input('teacher_email');
        $accounts[] = $account;

        MailController::sendCompetitionMail($competition, $team, $accounts);

        return view('register.competition.pitching.create', ['success' => 1, "title" => "การแข่งขันการนำเสนอแผนธุรกิจ | IT Ladkrabang Open House 2016"]);
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

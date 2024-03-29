<?php

namespace App\Http\Controllers\Backend;

use App\Models\Pitching;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests;
use Illuminate\Support\Facades\Validator;
use Maatwebsite\Excel\Facades\Excel;

class ITPitchingController extends Controller
{
    public function index() {
        $datas = Pitching::all();
        return view('backend.competition.list', ['datas' => $datas, 'type' => 5, 'typeText' => 'pitching']);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $data = Pitching::find($id);
        return view('backend.competition.show', ['data' => $data, 'typeName' => 'pitching']);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $pitching = Pitching::find($id);
        $pitching->prefix = array_column($pitching->member, 'prefix');
        $pitching->name = array_column($pitching->member, 'name');
        $pitching->surname = array_column($pitching->member, 'surname');
        $pitching->class = array_column($pitching->member, 'class');
        return view('backend.competition.pitching_edit', ['data' => $pitching]);
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
        $pitching = Pitching::find($id);

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
            'idea_desc'			    => 'required'
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
            'teacher_email.required'         =>  'กรุณากรอก  อีเมลอาจารย์ผู้ควบคุมทีม',
            'idea.required'                  =>  'กรุณากรอก  ชื่อแนวคิด',
            'idea_desc.required'             =>  'กรุณากรอก  รายละเอียดแนวคิด',
            'teacher_phone.regex'            =>  'รูปแบบ  เบอร์โทรศัพท์อาจารย์ผู้ควบคุมทีม ไม่ถูกต้อง',
            'teacher_email.email'            =>  'รูปแบบ  อีเมลอาจารย์ผู้ควบคุมทีม ไม่ถูกต้อง'
        ];

        $validator = Validator::make($inputs, $rules, $messages);
        if($validator->fails()){
            return redirect('/backend/competition/pitching/'.$id."/edit")->with(['data' => $inputs])->withErrors($validator);
        }

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

        return redirect('/backend/competition/pitching/'.$id);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Pitching::find($id)->delete();
        return redirect('/backend/competition/pitching');
    }

    public function excel() {
        return Excel::create('pitching_competition_export_' . time(), function($excel)
        {
            $excel->sheet('Sheet', function($sheet)
            {
                $datas = Pitching::all();
                $sheet->loadView('register.competition.pitching.excel', ['datas' => $datas]);
            });
        })->download('xls');
    }
}

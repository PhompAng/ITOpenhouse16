<?php

namespace App\Http\Controllers\Guest;
use App\Http\Controllers\Controller;
use App\Models\Guest, App\Models\GuestStudent, App\Models\GuestSchool;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class RegisterController extends  Controller{

    public function createGuestRegister(){
        return view('register.guest.create');
    }

    public function createGuestStudentRegister(){
        return view('register.guest_student.create');
    }

    public function createGuestSchoolRegister(){
        return view('register.guest_school.create');
    }

    public function storeGuestRegister(Request $request){

        $inputs = $request->all();

        $rules = [

            'prefix'                => 'required',
            'name'					=> 'required',
            'surname'				=> 'required',
            'gender'				=> 'required|in:M,F,U',
            'age'					=> 'required|integer|between:1,100',
            'career'				=> 'required',
            'province'				=> 'required',
            'email'					=> 'required|email',
            'phone'					=> 'required|regex:/^0[0-9]{1,2}[0-9]{7}$/',
        ];

        $messages = [
            'prefix.required'		=> 'กรุณากรอก คำนำหน้าชื่อ',
            'name.required'			=> 'กรุณากรอก ชื่อ',
            'surname.required'		=> 'กรุณากรอก นามสกุล',
            'gender.required'		=> 'กรุณาเลือก เพศ>',
            'gender.in'				=> 'เพศที่เลือกไม่ถูกต้อง',
            'age.required'			=> 'กรุณากรอก อายุ',
            'age.integer'			=> 'รูปแบบอายุไม่ถูกต้อง',
            'age.between'			=> 'อายุต้องอยู่ระหว่าง 1 ถึง 100',

            'career.required'		=> 'กรุณากรอก อาชีพ',

            'province.required'		=> 'กรุณากรอก จังหวัด',
            'email.required'		=> 'กรุณากรอก อีเมลล์',
            'email.email'			=> 'รูปแบบอีเมลล์ไม่ถูกต้อง',
            'phone.required'		=> 'กรุณากรอกเบอร์โทรศัพท์',
            'phone.regex'			=> 'รูปแบบเบอร์โทรศัพท์ไม่ถูกต้อง'
        ];

        $validator = Validator::make($inputs, $rules, $messages);
        if($validator->fails()){
            return redirect('/register/guest')->withInput()->withErrors($validator);
        }

        $guest = new Guest();
        $guest->fill($request->all());
        $guest->facebook = empty($request->facebook)? null:$request->facebook;
        $guest->twitter = empty($request->twitter)? null:$request->twitter;
        $guest->save();

        return view('register.guest.create', ['success' => 1]);
    }

    public function storeGuestStudentRegister(Request $request)
    {
        $inputs = $request->all();

        $rules = [
            'prefix'				=> 'required',
            'name'					=> 'required',
            'surname'				=> 'required',
            'gender'				=> 'required|in:M,F,U',
            'age'					=> 'required|integer|between:1,100',

            'major'					=> 'required',
            'branch'				=> 'required',
            'degree'				=> 'required',

            'province'				=> 'required',
            'email'					=> 'required|email',
            'phone'					=> 'required|regex:/^0[0-9]{1,2}[0-9]{7}$/',
        ];

        $messages = [
            'prefix.required'		=> 'กรุณากรอก คำนำหน้าชื่อ',
            'name.required'			=> 'กรุณากรอก ชื่อ',
            'surname.required'		=> 'กรุณากรอก นามสกุล',
            'gender.required'		=> 'กรุณาเลือก เพศ',
            'gender.in'				=> 'เพศ ที่เลือกไม่ถูกต้อง',
            'age.required'			=> 'กรุณากรอก อายุ',
            'age.integer'			=> 'รูปแบบอายุไม่ถูกต้อง',
            'age.between'			=> 'อายุต้องอยู่ระหว่าง 1 ถึง 100',

            'major.required'		=> 'กรุณาเลือกระดับการศึกษา',
            'branch.required'		=> 'กรุณากรอก แผนการเรียน/สาขาวิชา',
            'degree.required'		=> 'กรุณากรอก ชั้นปี',

            'province.required'		=> 'กรุณากรอก จังหวัด',
            'email.required'		=> 'กรุณากรอก อีเมลล์',
            'email.email'			=> 'รูปแบบอีเมลล์ไม่ถูกต้อง',
            'phone.required'		=> 'กรุณา กรอกเบอร์โทรศัพท์',
            'phone.regex'			=> 'รูปแบบเบอร์โทรศัพท์ไม่ถูกต้อง',
        ];

        $validator = Validator::make($inputs, $rules, $messages);
        if($validator->fails()){
            return redirect('/register/guest_student')->withInput()->withErrors($validator);
        }

        $guestStudent = new GuestStudent();
        $guestStudent->fill($request->all());
        $guestStudent->facebook = empty($request->facebook)? null:$request->facebook;
        $guestStudent->twitter = empty($request->twitter)? null:$request->twitter;
        $guestStudent->save();

        return view('register.guest_student.create', ['success' => 1]);
    }


    public function storeGuestSchoolRegister(Request $request){

        $inputs = $request->all();

        $rules = [

            'prefix'				=> 'required',
            'name'					=> 'required',
            'surname'				=> 'required',
            'gender'				=> 'required|in:M,F,U',
            'age'					=> 'required|integer|between:1,100',

            'school'				=> 'required',
            'follower'				=> 'required|integer',

            'province'				=> 'required',
            'email'					=> 'required|email',
            'phone'					=> 'required|regex:/^0[0-9]{1,2}[0-9]{7}$/',
        ];

        $messages = [

            'prefix.required'		=> 'กรุณากรอก คำนำหน้าชื่อ',
            'name.required'			=> 'กรุณากรอก ชื่อ',
            'surname.required'		=> 'กรุณากรอก นามสกุล',
            'gender.required'		=> 'กรุณาเลือก เพศ',
            'gender.in'				=> 'เพศ ที่เลือกไม่ถูกต้อง',
            'age.required'			=> 'กรุณากรอก อายุ',
            'age.integer'			=> 'รูปแบบอายุไม่ถูกต้อง',
            'age.between'			=> 'อายุ ต้องอยู่ระหว่าง 1 ถึง 100',

            'school.required'		=> 'กรุณากรอก ชื่อโรงเรียน>',
            'follower.required'		=> 'กรุณากรอก จำนวนนักเรียนที่มาชมงาน',
            'follower.integer'		=> 'รูปแบบจำนวนนักเรียนที่มาชมงานไม่ถูกต้อง',

            'province.required'		=> 'กรุณากรอก จังหวัด',
            'email.required'		=> 'กรุณากรอก อีเมลล์',
            'email.email'			=> 'รูปแบบอีเมลล์ไม่ถูกต้อง',
            'phone.required'		=> 'กรุณากรอก เบอร์โทรศัพท์',
            'phone.regex'			=> 'รูปแบบเบอร์โทรศัพท์ไม่ถูกต้อง',
        ];

        $validator = Validator::make($inputs, $rules, $messages);
        if($validator->fails()){
            return redirect('/register/guest_school')->withInput()->withErrors($validator);
        }

        $guestSchool = new GuestSchool();
        $guestSchool->fill($request->all());
        $guestSchool->facebook = empty($request->facebook)? null:$request->facebook;
        $guestSchool->twitter = empty($request->twitter)? null:$request->twitter;
        $guestSchool->save();

        return view('register.guest_school.create', ['success' => 1]);

    }
}

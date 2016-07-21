<!DOCTYPE html>
<html lang="en">
<head>
    <title>ผลการสมัคร IT Ladkrabang Open House 2016</title>

    <!--Bootstrap-->
    <link href="{{URL::asset('assets/css/bootstrap.min.css')}}" rel="stylesheet">
    <link rel="stylesheet" href="{{ URL::asset('assets/css/style.css') }}">
    <link rel="stylesheet" href="{{ URL::asset('assets/css/main.css') }}">
    <link href="{{URL::asset('assets/css/pdf.css')}}" rel="stylesheet">
</head>
<body>
<div class="logo">
    <img src="{{ URL::asset('assets/image/color.png') }}">
    <h1><b>ผลการสมัครลงทะเบียนเข้าชมงานสำหรับโรงเรียน</b></h1>
</div>
{{--{{dd($data['name'][0])}}--}}
<div class="section">
    <div class="col-md-8 col-md-offset-2">
        <div class="alert alert-success" role="alert">
            ลงทะเบียนสำเร็จ ขอบคุณที่สนใจเข้าร่วมงานของเรา
        </div>
        <h2>ข้อมูลส่วนตัว</h2>
        <div class="row">
            <div class="col-md-6 col-xs-12">
                <div class="row">
                    <div class="col-xs-5">
                        <div class="form-group">
                            <label>คำนำหน้าชื่อ</label>
                            <input type="text" class="form-control" value="{{$data["prefix"]}}" disabled>
                        </div>
                    </div>
                    <div class="col-xs-7">
                        <div class="form-group">
                            <label>ชื่อ</label>
                            <input type="text" class="form-control" name="name" disabled value="{{ $data['name'] }}">
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-xs-12">
                <div class="form-group">
                    <label>นามสกุล</label>
                    <input type="text" class="form-control" name="surname" disabled value="{{ $data['surname'] }}">
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-6 col-xs-12">
                <div class="form-group">
                    <label >เพศ</label><br>
                    <label class="radio-inline">
                        <input type="radio" name="gender" value="M" disabled {{ $data['gender'] == 'M' ? "checked":"" }}> ชาย
                    </label>
                    <label class="radio-inline">
                        <input type="radio" name="gender" value="F" disabled {{ $data['gender'] == 'F' ? "checked":"" }}> หญิง
                    </label>
                    <label class="radio-inline">
                        <input type="radio" name="gender" value="U" disabled {{ $data['gender'] == 'U' ? "checked":"" }}> ไม่ระบุ
                    </label>
                </div>
            </div>
            <div class="col-md-6 col-xs-12">
                <div class="form-group">
                    <label>อายุ</label>
                    <input type="number" class="form-control" name="age" disabled value="{{ $data['age'] }}">
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-6 col-xs-12">
                <div class="form-group">
                    <label>โรงเรียน</label>
                    <input type="text" class="form-control" name="school" disabled value="{{ $data['school'] }}">
                </div>
            </div>
            <div class="col-md-6 col-xs-12">
                <div class="form-group">
                    <label>จังหวัด</label>
                    <input type="text" class="form-control" name="province" disabled value="{{ $data['province'] }}">
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-6 col-xs-12">
                <div class="form-group">
                    <label>จำนวนนักเรียนที่มาเข้าชมงาน</label>
                    <input type="number" class="form-control" name="follower" disabled value="{{ $data['follower'] }}">
                </div>
            </div>
        </div>
        {{--end ข้อมูลส่วนตัว--}}

        {{--ช่องทางการติดต่อ--}}
        <h2>ช่องทางการติดต่อ</h2>
        <div class="row">
            <div class="col-md-6 col-xs-12">
                <div class="form-group">
                    <label>เบอร์โทรศัพท์</label>
                    <input type="text" class="form-control" name="phone" disabled value="{{ $data['phone'] }}">
                </div>
            </div>
            <div class="col-md-6 col-xs-12">
                <div class="form-group">
                    <label>อีเมล</label>
                    <input type="text" class="form-control" name="email" disabled value="{{ $data['email'] }}">
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-6 col-xs-12">
                <div class="form-group">
                    <label>Facebook</label>
                    <input type="text" class="form-control" name="facebook" value="{{ $data['facebook'] }}" disabled>
                </div>
            </div>
            <div class="col-md-6 col-xs-12">
                <div class="form-group">
                    <label>Twitter</label>
                    <input type="text" class="form-control" name="twitter" value="{{ $data['twitter'] }}" disabled>
                </div>
            </div>
        </div>
        {{--end ช่องทางการติดต่อ--}}

        {{--รับข่าวสาร--}}
        <h2>ข่าวสารจาก IT Ladkrabang Open House</h2>
        <div class="row">
            <div class="col-md-12 col-xs-12">
                <div class="form-group">
                    <div class="checkbox">
                        <label>
                            <input type="checkbox" name="news" value="1" {{ isset($data['news']) ? "checked":"" }} disabled>ฉันต้องการรับข้อมูลข่าวสารจากทีมงาน IT Ladkrabang Open House
                        </label>
                    </div>
                </div>
            </div>
        </div>

        <a href="{{URL('/')}}" class="btn btn-success btn-block  btn-lg">กลับหน้าหลัก</a>
    </div>
</div>

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
    <h1><b>ผลการสมัครการแข่งขันตอบคำถามด้านเทคโนโลยีสารสนเทศ</b></h1>
</div>
{{--{{dd($data['name'][0])}}--}}
<div class="section">
    <div class="col-md-8 col-md-offset-2">
        <div class="alert alert-success" role="alert">
            บันทึกข้อมูลสำเร็จ ระบบได้ส่งรายละเอียดการสมัครไปทางอีเมลเรียบร้อยแล้ว หากไม่พบอีเมล กรุณาตรวจสอบใน Spam หรือ Junk Box
        </div>
        <h2>ทีม</h2>
        <div class="row">
            <div class="col-md-6 col-xs-12">
                <label for="teamName">ชื่อทีม</label>
                <input disabled type="text" class="form-control" value="{{$data['team_name']}}">
            </div>
        </div>

        <h2>สมาชิก</h2>
        @for($i=0;$i<count($data['name']);$i++)
            <h3>สมาชิก {{$i+1}}</h3>
            <div class="row">
                <div class="col-md-6 col-xs-12">
                    <div class="row">
                        <div class="col-xs-5">
                            <div class="form-group">
                                <label>คำนำหน้าชื่อ</label>
                                <input disabled type="text" class="form-control" value="{{$data['prefix'][$i]}}">
                            </div>
                        </div>
                        <div class="col-xs-7">
                            <div class="form-group">
                                <label>ชื่อ</label>
                                <input disabled type="text" class="form-control" value="{{$data['name'][$i]}}">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-xs-12">
                    <div class="form-group">
                        <label>นามสกุล</label>
                        <input disabled type="text" class="form-control" value="{{$data['surname'][$i]}}">
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-4 col-xs-6">
                    <div class="form-group">
                        <label>ระดับการศึกษา</label>
                        @if($data['class'][$i] == 0)
                            <input disabled type="text" class="form-control" value="ปวช.">
                        @else
                            <input disabled type="text" class="form-control" value="ม. {{$data['class'][$i]}}">
                        @endif

                    </div>
                </div>
                <div class="col-md-8 col-xs-6">
                    <div class="form-group">
                        <label>อีเมล</label>
                        <input disabled type="text" class="form-control" value="{{$data['email'][$i]}}">
                    </div>
                </div>
            </div>
        @endfor

        <h2>สถานศึกษา</h2>
        <div class="row">
            <div class="col-md-6 col-xs-6">
                <div class="form-group">
                    <label>โรงเรียน</label>
                    <input disabled type="text" class="form-control" value ="{{$data['school']}}">
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-6 col-xs-12">
                <div class="form-group">
                    <label>ที่อยู่</label>
                    <input disabled type="text" class="form-control" value="{{$data['school_addr']}}">
                </div>
            </div>
            <div class="col-md-6 col-xs-12">
                <div class="form-group">
                    <label>จังหวัด</label>
                    <input disabled type="text" class="form-control" value="{{$data['school_province']}}">
                </div>
            </div>
        </div>

        <h2>อาจารย์ผู้ควบคุมทีม</h2>
        <div class="row">
            <div class="col-md-2 col-xs-4">
                <div class="form-group">
                    <label>คำนำหน้าชื่อ</label>
                    <input disabled type="text" class="form-control" value="{{$data['teacher_prefix']}}">
                </div>
            </div>
            <div class="col-md-5 col-xs-8">
                <div class="form-group">
                    <label>ชื่อ</label>
                    <input disabled type="text" class="form-control" value="{{$data['teacher_name']}}">
                </div>
            </div>
            <div class="col-md-5 col-xs-12">
                <div class="form-group">
                    <label for="teacherSurname">นามสกุล</label>
                    <input disabled type="text" class="form-control" value="{{$data['teacher_surname']}}">
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-6 col-xs-12">
                <div class="form-group">
                    <label for="teacherPhone">เบอร์โทร</label>
                    <input disabled type="text" class="form-control" value="{{$data['teacher_phone']}}">
                </div>
            </div>
            <div class="col-md-6 col-xs-12">
                <div class="form-group">
                    <label for="teacher_email">อีเมล</label>
                    <input disabled type="text" class="form-control" value="{{$data['teacher_email']}}">
                </div>
            </div>
        </div>
        <a href="{{URL('/')}}" class="btn btn-success btn-block  btn-lg">กลับหน้าหลัก</a>

    </div>
</div>

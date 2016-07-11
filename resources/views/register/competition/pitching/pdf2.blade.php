<!DOCTYPE html>
<html lang="en">
<head>
    <title>ใบสมัคร IT Ladkrabang Open House 2016</title>

    <!--Bootstrap-->
    <link href="{{URL::asset('assets/css/bootstrap.min.css')}}" rel="stylesheet">
    <link rel="stylesheet" href="{{ URL::asset('assets/css/style.css') }}">
    <link rel="stylesheet" href="{{ URL::asset('assets/css/main.css') }}">
    <link href="{{URL::asset('assets/css/pdf.css')}}" rel="stylesheet">
</head>
<body>
<div class="logo">
    <img src="{{ URL::asset('assets/image/color.png') }}">
    <h1><b>ใบสมัครการแข่งขันการนำเสนอแผนธุรกิจ (IT Pitching)</b></h1>
</div>
{{--{{dd($data['name'][0])}}--}}
<div class="section">
    <div class="col-md-8 col-md-offset-2">
        <h2>ทีม</h2>
        <div class="row">
            <div class="col-md-6 col-xs-12">
                <label>ชื่อทีม</label>
                <input type="text" class="form-control" value="{{$data['team_name']}}">
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
                                <input type="text" class="form-control" value="{{$data['prefix'][$i]}}">
                            </div>
                        </div>
                        <div class="col-xs-7">
                            <div class="form-group">
                                <label>ชื่อ</label>
                                <input type="text" class="form-control" value="{{$data['name'][$i]}}">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-xs-12">
                    <div class="form-group">
                        <label>นามสกุล</label>
                        <input type="text" class="form-control" value="{{$data['surname'][$i]}}">
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-6 col-xs-6">
                    <div class="form-group">
                        <label>ระดับการศึกษา</label>
                        @if($data['class'][$i] == 0)
                            <input type="text" class="form-control" value="ปวช.">
                        @else
                            <input type="text" class="form-control" value="ม. {{$data['class'][$i]}}">
                        @endif

                    </div>
                </div>
            </div>
        @endfor

        <h2>สถานศึกษา</h2>
        <div class="row">
            <div class="col-md-6 col-xs-6">
                <div class="form-group">
                    <label>โรงเรียน</label>
                    <input type="text" class="form-control" value ="{{$data['school']}}">
                </div>
            </div>
        </div>

        <h2>อาจารย์ผู้ควบคุมทีม</h2>
        <div class="row">
            <div class="col-md-2 col-xs-4">
                <div class="form-group">
                    <label>คำนำหน้าชื่อ</label>
                    <input type="text" class="form-control" value="{{$data['teacher_prefix']}}">
                </div>
            </div>
            <div class="col-md-5 col-xs-8">
                <div class="form-group">
                    <label>ชื่อ</label>
                    <input type="text" class="form-control" value="{{$data['teacher_name']}}">
                </div>
            </div>
            <div class="col-md-5 col-xs-12">
                <div class="form-group">
                    <label for="teacherSurname">นามสกุล</label>
                    <input type="text" class="form-control" value="{{$data['teacher_surname']}}">
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-6 col-xs-12">
                <div class="form-group">
                    <label for="teacherPhone">เบอร์โทร</label>
                    <input type="text" class="form-control" value="{{$data['teacher_phone']}}">
                </div>
            </div>
            <div class="col-md-6 col-xs-12">
                <div class="form-group">
                    <label for="teacher_email">อีเมล</label>
                    <input type="text" class="form-control" value="{{$data['teacher_email']}}">
                </div>
            </div>
        </div>


        {{--rule--}}
        <div class="row">
            <p>
                <br>ทางโรงเรียน อาจารย์ผู้ควบคุมทีม และนักเรียนที่เข้าร่วมการแข่งขัน ได้อ่านและยอมรับในกฎกติกาการแข่งขันตอบปัญหาแล้ว และยินดีปฏิบัติตามกฎกติกาดังกล่าวทุกประการ
            </p>
        </div>
        <div class="col-md-offset-8 col-md-4 sign">
            <p>
                <br><br>ลงชื่ออาจารย์ผู้ควบคุมทีม<br><br>
                .......................................................<br>
                (......................................................)<br>
                วันที่............เดือน.......................พ.ศ............
            </p>
        </div>
    </div>
</div>
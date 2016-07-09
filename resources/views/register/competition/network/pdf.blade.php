<!DOCTYPE html>
<html lang="en">
<head>
    <title>ใบสมัคร IT Ladkrabang Open House 2016</title>

    <!--Bootstrap-->
    <link href="{{URL::asset('assets/css/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{URL::asset('assets/css/pdf.css')}}" rel="stylesheet">
</head>
<body>
    <div class="logo">
        <img src="{{ URL::asset('assets/image/color.png') }}">
        <h1><b>ใบสมัครการแข่งขันความปลอดภัยของระบบคอมพิวเตอร์</b></h1>
    </div>
    <div class="section">
        <div class="col-md-8 col-md-offset-2">
            <div class="row">
                <h2>ทีม</h2>
                <table class="table">
                    <tbody>
                        <tr>
                            <th width="15%">ชื่อทีม</th>
                            <td width="35%">{{$data['team_name']}}</td>
                            <th width="15%">อันดับทีม</th>
                            <td width="35%">{{$data['rank']}}</td>
                        </tr>
                    </tbody>
                </table>
            </div>
            <div class="row">
                <h2>สมาชิก</h2>
                @for($i=0;$i<count($data['name']);$i++)
                    <h3><b>สมาชิกที่ {{$i+1}}</b></h3>
                    <table class="table">
                        <tbody>
                        <tr>
                            <th width="15%">ชื่อ</th>
                            <td width="35%">{{$data['prefix'][$i]}} {{$data['name'][$i]}}</td>
                            <th width="15%">นามสกุล</th>
                            <td width="35%">{{$data['surname'][$i]}}</td>
                        </tr>
                        <tr>
                            <th>ระดับการศึกษา</th>
                            <td>@if($data['class'][$i] == 0)
                                    ปวช.
                                @else
                                    ม. {{$data['class'][$i]}}
                                @endif</td>
                            <th>เบอร์โทรศัพท์</th>
                            <td>{{$data['phone'][$i]}}</td>
                            {{--<th>อีเมล</th>--}}
                            {{--<td>{{$data['email'][$i]}}</td>--}}
                        </tr>
                        </tbody>
                    </table>
                @endfor
            </div>
            <div class="row">
                <h2>สถานศึกษา</h2>
                <table class="table">
                    <tbody>
                    <tr>
                        <th>สถานศึกษา</th>
                        <td colspan="3">{{$data['school']}}</td>
                    </tr>
                    <tr>
                        <th width="15%">ที่อยู่</th>
                        <td width="35%">{{$data['school_addr']}}</td>
                        <th width="15%">จังหวัด</th>
                        <td width="35%">{{$data['school_province']}}</td>
                    </tr>
                    </tbody>
                </table>
            </div>
            <div class="row">
                <h2>อาจารย์ผู้ควบคุมทีม</h2>
                <table class="table">
                    <tbody>
                    <tr>
                        <th width="15%">ชื่อ</th>
                        <td width="35%">{{$data['teacher_prefix']}} {{$data['teacher_name']}}</td>
                        <th width="15%">นามสกุล</th>
                        <td width="35%">{{$data['teacher_surname']}}</td>
                    </tr>
                    <tr>
                        <th>อีเมล</th>
                        <td>{{$data['teacher_email']}}</td>
                        <th>เบอร์โทรศัพท์</th>
                        <td>{{$data['teacher_phone']}}</td>
                    </tr>
                    </tbody>
                </table>
            </div>
            {{--rule--}}
            <div class="row">
                <p>
                    ทางโรงเรียน อาจารย์ผู้ควบคุมทีม และนักเรียนที่เข้าร่วมการแข่งขัน ได้อ่านและยอมรับในกฎกติกาการแข่งขันตอบปัญหาแล้ว และยินดีปฏิบัติตามกฎกติกาดังกล่าวทุกประการ
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

</body>

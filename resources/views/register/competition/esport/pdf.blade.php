<!DOCTYPE html>
<html lang="en">
<head>
    <title>ใบสมัคร IT Ladkrabang Open House 2016</title>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <!--Bootstrap-->
    <link href="http://openhouse.it.kmitl.ac.th/2016/assets/css/bootstrap.min.css" rel="stylesheet">
    <link href="http://openhouse.it.kmitl.ac.th/2016/assets/css/pdf.css" rel="stylesheet">
</head>
<body>
    <div class="logo">
        <img src="http://openhouse.it.kmitl.ac.th/2016/assets/image/color.png">
        <h1><b>ใบสมัครการแข่งขันกีฬาอิเล็กทรอนิกส์ (E-Sports)</b></h1>
    </div>
    {{--{{dd($data['name'][0])}}--}}
    <div class="section">
        <div class="col-md-8 col-md-offset-2">
            <div class="row">
                <h2>ทีม</h2>
                <table class="table">
                    <tbody>
                        <tr>
                            <th width="15%">ชื่อทีม</th>
                            <td width="35%">{{$data['team_name']}}</td>
                        </tr>
                        <tr>
                            <th>เฟซบุ๊คที่สะดวกในการติดต่อทีม</th>
                            <td>{{$data['team_fb']}}</td>
                        </tr>
                    </tbody>
                </table>
            </div>
            <div class="row">
                <h2>สมาชิก</h2>
                    @for($i=0 ; $i< count($data['name']); $i++)
                        <h3><b>สมาชิกที่{{$i+1}}</b></h3>
                        <table class="table">
                            <tbody>
                                <tr>
                                    <th width="15%">ชื่อ</th>
                                    <td width="35%">{{$data['prefix'][$i]}} {{$data['name'][$i]}}</td>
                                    <th width="15%">นามสกุล</th>
                                    <td width="35%">{{$data['surname'][$i]}}</td>
                                </tr>
                                <tr>
                                    <th>Steam</th>
                                    <td>{{$data['steam'][$i]}}</td>
                                </tr>
                            </tbody>
                        </table>
                        <table class="table">
                            <tbody>
                                <tr>
                                    <th>Facebook</th>
                                    <td>{{$data['facebook'][$i]}}</td>
                                </tr>
                                <tr>
                                    <th>เบอร์โทรศัพท์</th>
                                    <td>{{$data['phone'][$i]}}</td>
                                </tr>
                            </tbody>
                        </table>
                    @endfor
                <h2>สำรอง</h2>
                @for($i=0 ; $i< count($data['subName']); $i++)
                    <h3><b>สำรองที่ {{$i+1}}</b></h3>
                    <table class="table">
                        <tbody>
                        <tr>
                            <th width="15%">ชื่อ</th>
                            <td width="35%">{{$data['subPrefix'][$i] }} {{$data['subName'][$i]}}</td>
                            <th width="15%">นามสกุล</th>
                            <td width="35%">{{$data['subSurname'][$i]}}</td>
                        </tr>
                        <tr>
                            <th>Steam</th>
                            <td>{{$data['subSteam'][$i]}}</td>
                        </tr>
                        </tbody>
                    </table>
                    <table class="table">
                        <tbody>
                        <tr>
                            <th>Facebook</th>
                            <td>{{$data['subFacebook'][$i]}}</td>
                        </tr>
                        <tr>
                            <th>เบอร์โทรศัพท์</th>
                            <td>{{$data['subPhone'][$i]}}</td>
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
                        <td width="35%">{{$data['teacher_prefix']}}{{$data['teacher_name']}}</td>
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

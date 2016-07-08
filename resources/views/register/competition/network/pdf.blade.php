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
                            <td width="35%">team_name</td>
                            <th width="15%">อันดับทีม</th>
                            <td width="35%">1</td>
                        </tr>
                    </tbody>
                </table>
            </div>
            <div class="row">
                <h2>สมาชิก</h2>
                    {{--Loop--}}
                        <h3><b>สมาชิกที่ ?</b></h3>
                        <table class="table">
                            <tbody>
                                <tr>
                                    <th width="15%">ชื่อ</th>
                                    <td width="35%">prefix+name</td>
                                    <th width="15%">นามสกุล</th>
                                    <td width="35%">surname</td>
                                </tr>
                                <tr>
                                    <th>ระดับการศึกษา</th>
                                    <td colspan="3">class</td>
                                </tr>
                                <tr>
                                    <th>อีเมล</th>
                                    <td>email</td>
                                    <th>เบอร์โทรศัพท์</th>
                                    <td>085xxxxxxx</td>
                                </tr>

                            </tbody>
                        </table>
                    {{--Loop--}}
            </div>
            <div class="row">
                <h2>โรงเรียน</h2>
                <table class="table">
                    <tbody>
                    <tr>
                        <th>โรงเรียน</th>
                        <td colspan="3">school</td>
                    </tr>
                    <tr>
                        <th width="15%">ที่อยู่</th>
                        <td width="35%">school_addr</td>
                        <th width="15%">จังหวัด</th>
                        <td width="35%">school_province</td>
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
                        <td width="35%">teacher_name</td>
                        <th width="15%">นามสกุล</th>
                        <td width="35%">teacher_surname</td>
                    </tr>
                    <tr>
                        <th>อีเมล</th>
                        <td>teacher_email</td>
                        <th>เบอร์โทรศัพท์</th>
                        <td>085xxxxxxx</td>
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
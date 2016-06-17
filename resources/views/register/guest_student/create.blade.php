@extends('register.regis_page')
@section('regisForm')
<section>
    <div class="container">
        <div class="row">
            <center><h1>ลงทะเบียนเข้าชมงานสำหรับนักเรียน/นักศึกษา</h1></center><br>
            <div class="col-xs-12 col-md-8 col-md-offset-2">
                @if (count($errors) > 0)
                    <div class="alert alert-danger" role="alert">
                        <ul>
                            @foreach ($errors->all() as $error)
                                <li>{{$error}}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif
                @if(isset($success))
                    <div class="alert alert-success" role="alert">
                        ลงทะเบียนสำเร็จ ขอบคุณที่สนใจเข้าร่วมงานของเรา
                    </div>
                @endif
                <form action="{{url('/register/guest_student')}}" method="post">
                    {!! csrf_field() !!}
                    {{--ข้อมูลส่วนตัว--}}
                    <div class="row">
                        <h3>ข้อมูลส่วนตัว</h3>
                    </div>
                    <div class="row">
                        <div class="col-md-6 col-xs-12">
                            <div class="row">
                                <div class="col-xs-4">
                                    <div class="form-group">
                                        <label>คำนำหน้าชื่อ</label>
                                        <select class="form-control" name="prefix" required>
                                            <option value="นาย">นาย</option>
                                            <option value="นาง">นาง</option>
                                            <option value="นางสาว">นางสาว</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-xs-8">
                                    <div class="form-group">
                                        <label>ชื่อ</label>
                                        <input type="text" class="form-control" placeholder="ไอที" name="name" required>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 col-xs-12">
                            <div class="form-group">
                                <label>นามสกุล</label>
                                <input type="text" class="form-control" placeholder="ลาดกระบัง" name="surname" required>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-4 col-xs-6">
                            <div class="form-group">
                                <label >เพศ</label><br>
                                <label class="radio-inline">
                                    <input type="radio" name="gender" value="M" required> ชาย
                                </label>
                                <label class="radio-inline">
                                    <input type="radio" name="gender" value="F" required> หญิง
                                </label>
                                <label class="radio-inline">
                                    <input type="radio" name="gender" value="U" required> ไม่ระบุ
                                </label>
                            </div>
                        </div>
                        <div class="col-md-2 col-xs-6">
                            <div class="form-group">
                                <label>อายุ</label>
                                <input type="number" class="form-control" placeholder="100" name="age" required>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-4 col-xs-12">
                            <div class="form-group">
                                <label>ระดับการศึกษา</label>
                                <select class="form-control" name="major" required>
                                    <option value="ประถมศึกษา">ประถมศึกษา</option>
                                    <option value="มัธยมศึกษาตอนต้น">มัธยมศึกษาตอนต้น</option>
                                    <option value="มัธยมศึกษาตอนปลาย" selected="selected">มัธยมศึกษาตอนปลาย</option>
                                    <option value="อาชีวศึกษา">อาชีวศึกษา</option>
                                    <option value="ปริญญาตรี">ปริญญาตรี</option>
                                    <option value="ปริญญาโท">ปริญญาโท</option>
                                    <option value="ปริญญาเอก">ปริญญาเอก</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-md-4 col-xs-6">
                            <div class="form-group">
                                <label>แผนการเรียน</label>
                                <input type="text" class="form-control" placeholder="e.g. วิทย์-คณิต, ศิลป์-คำนวณ " name="branch" required>
                            </div>
                        </div>
                        <div class="col-md-2 col-xs-6">
                            <div class="form-group">
                                <label>ชั้นปี</label>
                                <input type="text" class="form-control" placeholder="e.g. ม.6" name="degree" required>
                            </div>
                        </div>
                        <div class="col-md-6 col-xs-12">
                            <div class="form-group">
                                <label>จังหวัด</label>
                                <input type="text" class="form-control" placeholder="e.g. กรุงเทพฯ" name="province" required>
                            </div>
                        </div>
                    </div>
                    {{--end ข้อมูลส่วนตัว--}}

                    {{--ช่องทางการติดต่อ--}}
                    <div class="row">
                        <h3>ช่องทางการติดต่อ</h3>
                    </div>
                    <div class="row">
                        <div class="col-md-6 col-xs-12">
                            <div class="form-group">
                                <label>เบอร์โทรศัพท์</label>
                                <input type="text" class="form-control" placeholder="e.g. 080-808-xxxx" name="phone" required>
                            </div>
                        </div>
                        <div class="col-md-6 col-xs-12">
                            <div class="form-group">
                                <label>e-mail</label>
                                <input type="text" class="form-control" placeholder="e.g. openhouse@it.kmitl.ac.th" name="email" required>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6 col-xs-12">
                            <div class="form-group">
                                <label>Facebook</label>
                                <input type="text" class="form-control" placeholder="e.g. fb.com/ITLadkrabangOpenhouse" name="facebook">
                            </div>
                        </div>
                        <div class="col-md-6 col-xs-12">
                            <div class="form-group">
                                <label>Twitter</label>
                                <input type="text" class="form-control" placeholder="e.g. twitter.com/@ITKMITL" name="twitter">
                            </div>
                        </div>
                    </div>
                    {{--end ช่องทางการติดต่อ--}}

                    {{--รับข่าวสาร--}}
                    <div class="row">
                        <h3>ข่าวสารจาก IT Ladkrabang Open House</h3>
                    </div>
                    <div class="row">
                        <div class="col-md-12 col-xs-12">
                            <div class="form-group">
                                <div class="checkbox">
                                    <label>
                                        <input type="checkbox" name="news" value="1">ฉันต้องการรับข้อมูลข่าวสารจากทีมงาน IT Ladkrabang Open House
                                    </label>
                                </div>
                            </div>
                        </div>
                    </div>
                    {{--end รับข่าวสาร--}}
                    <div class="row">
                        <div class="col-md-6 col-md-offset-3 col-xs-12">
                            <button type="submit" class="btn btn-info btn-block" >ลงทะเบียน</button><br>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</section>
@endsection
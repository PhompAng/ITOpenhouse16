@extends('register.regis_page')
@section('regisForm')
    <div class="container regis">
        <section class="regis-header">
            <h1 class="text-center">ลงทะเบียนการแข่งขัน PHP</h1>
            <h2 class="text-center"><small>วันที่ 26 สิงหาคม 2559</small></h2>
        </section>
        <section class="regis-error">
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
        </section>
        <section class="regis-form">
            <form action="{{url('/register/guest_student')}}" method="post">
                {!! csrf_field() !!}
                {{--ทีม--}}
                <h3>ชื่อทีม</h3>
                <div class="row">
                    <div class="col-md-6 col-xs-12">
                        <label for="teamName">ชื่อทีม</label>
                        <input type="text" class="form-control" placeholder="teamName" name="teamName" required>
                    </div>
                </div>
                {{--สมาชิก--}}
                <h3>สมาชิก</h3>
                <h4>สมาชิก 1</h4>
                <div class="row">
                    <div class="col-md-6 col-xs-12">
                        <div class="row">
                            <div class="col-xs-5">
                                <div class="form-group">
                                    <label>คำนำหน้าชื่อ</label>
                                    <select class="form-control" name="prefix" required>
                                        <option value="นาย" {{  (old('prefix') == "นาย" ? "selected":"") }}>นาย</option>
                                        <option value="นาง" {{ (old('prefix') == "นาง" ? "selected":"") }}>นาง</option>
                                        <option value="นางสาว" {{ (old('prefix') == "นางสาว" ? "selected":"") }}>นางสาว</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-xs-7">
                                <div class="form-group">
                                    <label>ชื่อ</label>
                                    <input type="text" class="form-control" placeholder="ไอที" name="name" required value="{{ old('name') }}">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-xs-12">
                        <div class="form-group">
                            <label>นามสกุล</label>
                            <input type="text" class="form-control" placeholder="ลาดกระบัง" name="surname" required value="{{ old('surname') }}">
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-4 col-xs-6">
                        <div class="form-group">
                            <label>ระดับการศึกษา</label>
                            <select class="form-control" name="class" required>
                                <option value="4">ม. 4</option>
                                <option value="5">ม. 5</option>
                                <option value="6" selected="selected">ม. 6</option>
                                <option value="0">ปวช.</option>
                            </select>
                        </div>
                    </div>
                    <div class="col-md-8 col-xs-6">
                        <div class="form-group">
                            <label>อีเมล</label>
                            <input type="text" class="form-control" placeholder="e.g. openhouse@it.kmitl.ac.th" name="email" required value="{{ old('email') }}">
                        </div>
                    </div>
                </div>
                <h4>สมาชิก 2</h4>
                <div class="row">
                    <div class="col-md-6 col-xs-12">
                        <div class="row">
                            <div class="col-xs-5">
                                <div class="form-group">
                                    <label>คำนำหน้าชื่อ</label>
                                    <select class="form-control" name="prefix" required>
                                        <option value="นาย" {{  (old('prefix') == "นาย" ? "selected":"") }}>นาย</option>
                                        <option value="นาง" {{ (old('prefix') == "นาง" ? "selected":"") }}>นาง</option>
                                        <option value="นางสาว" {{ (old('prefix') == "นางสาว" ? "selected":"") }}>นางสาว</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-xs-7">
                                <div class="form-group">
                                    <label>ชื่อ</label>
                                    <input type="text" class="form-control" placeholder="ไอที" name="name" required value="{{ old('name') }}">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-xs-12">
                        <div class="form-group">
                            <label>นามสกุล</label>
                            <input type="text" class="form-control" placeholder="ลาดกระบัง" name="surname" required value="{{ old('surname') }}">
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-4 col-xs-6">
                        <div class="form-group">
                            <label>ระดับการศึกษา</label>
                            <select class="form-control" name="class" required>
                                <option value="4">ม. 4</option>
                                <option value="5">ม. 5</option>
                                <option value="6" selected="selected">ม. 6</option>
                                <option value="0">ปวช.</option>
                            </select>
                        </div>
                    </div>
                    <div class="col-md-8 col-xs-6">
                        <div class="form-group">
                            <label>อีเมล</label>
                            <input type="text" class="form-control" placeholder="e.g. openhouse@it.kmitl.ac.th" name="email" required value="{{ old('email') }}">
                        </div>
                    </div>
                </div>
                {{--end ข้อมูลส่วนตัว--}}

                {{--สถานศึกษา--}}
                <h3>School</h3>
                <div class="row">
                    <div class="col-md-6 col-xs-6">
                        <div class="form-group">
                            <label for="school">โรงเรียน</label>
                            <input type="text" class="form-control" placeholder="School" name="school" required>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-6 col-xs-12">
                        <div class="form-group">
                            <label for="schoolAddr">ที่อยู่</label>
                            <input type="text" class="form-control" placeholder="schoolAddr">
                        </div>
                    </div>
                    <div class="col-md-6 col-xs-12">
                        <div class="form-group">
                            <label for="schoolProvince">จังหวัด</label>
                            <input type="text" class="form-control" placeholder="schoolProvince" name="schoolProvince" required>
                        </div>
                    </div>
                </div>

                {{--อาจารย์--}}
                <h3>Teacher</h3>
                <div class="row">
                    <div class="col-md-2 col-xs-4">
                        <div class="form-group">
                            <label>คำนำหน้าชื่อ</label>
                            <input type="text" class="form-control" placeholder="prefix" name="teacherPrefix" required>
                        </div>
                    </div>
                    <div class="col-md-5 col-xs-8">
                        <div class="form-group">
                            <label for="teacherName">ชื่อ</label>
                            <input type="text" class="form-control" placeholder="teacherName" name="teacherName" required>
                        </div>
                    </div>
                    <div class="col-md-5 col-xs-12">
                        <div class="form-group">
                            <label for="teacherSurname">นามสกุล</label>
                            <input type="text" class="form-control" placeholder="teacherSurname" name="teacherSurname" required>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-6 col-xs-12">
                        <div class="form-group">
                            <label for="teacherEmail">อีเมล</label>
                            <input type="text" class="form-control" placeholder="teacherEmail" name="teacherSurname" required>
                        </div>
                    </div>
                    <div class="col-md-6 col-xs-12">
                        <div class="form-group">
                            <label for="teacherPhone">เบอร์โทร</label>
                            <input type="text" class="form-control" placeholder="teacherPhone" name="teacherPhone" required>
                        </div>
                    </div>
                </div>
                <button type="submit" class="btn btn-primary btn-block regis-btn">ลงทะเบียน</button>
            </form>
        </section>
    </div>
@endsection

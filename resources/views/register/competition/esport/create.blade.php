@extends('register.regis_page')
@section('regisForm')
    <div class="container regis">
        <section class="regis-header">
            <h1 class="text-center">ลงทะเบียนการแข่งขัน E-Sports</h1>
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
            <form action="{{url('/register/competition/esport/create')}}" method="post">
                {!! csrf_field() !!}
                {{--ทีม--}}
                <h3>ชื่อทีม</h3>
                <div class="row">
                    <div class="col-md-6 col-xs-12">
                        <label for="teamName">ชื่อทีม</label>
                        <input type="text" class="form-control" placeholder="teamName" name="team_name" required>
                    </div>
                    <div class="col-md-6 col-xs-12">
                        <label for="teamFb">teamFb</label>
                        <input type="text" class="form-control" placeholder="teamFb" name="team_fb" required>
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
                                    <select class="form-control" name="prefix[]" required>
                                        <option value="นาย" {{  (old('prefix') == "นาย" ? "selected":"") }}>นาย</option>
                                        <option value="นาง" {{ (old('prefix') == "นาง" ? "selected":"") }}>นาง</option>
                                        <option value="นางสาว" {{ (old('prefix') == "นางสาว" ? "selected":"") }}>นางสาว</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-xs-7">
                                <div class="form-group">
                                    <label>ชื่อ</label>
                                    <input type="text" class="form-control" placeholder="ไอที" name="name[]" required value="{{ old('name') }}">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-xs-12">
                        <div class="form-group">
                            <label>นามสกุล</label>
                            <input type="text" class="form-control" placeholder="ลาดกระบัง" name="surname[]" required value="{{ old('surname') }}">
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-6 col-xs-12">
                        <div class="form-group">
                            <label>Steam</label>
                            <input type="text" class="form-control" placeholder="steam" name="steam[]" required value="{{ old('steam') }}">
                        </div>
                    </div>
                    <div class="col-md-6 col-xs-12">
                        <div class="form-group">
                            <label>facebook</label>
                            <input type="text" class="form-control" placeholder="e.g. fb.com/ITLadkrabangOpenhouse" name="facebook[]" required value="{{ old('facebook') }}">
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-6 col-xs-12">
                        <div class="form-group">
                            <label for="phone">เบอร์โทรศัพท์</label>
                            <input type="text" class="form-control" placeholder="phone" name="phone[]" required>
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
                                    <select class="form-control" name="prefix[]" required>
                                        <option value="นาย" {{  (old('prefix') == "นาย" ? "selected":"") }}>นาย</option>
                                        <option value="นาง" {{ (old('prefix') == "นาง" ? "selected":"") }}>นาง</option>
                                        <option value="นางสาว" {{ (old('prefix') == "นางสาว" ? "selected":"") }}>นางสาว</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-xs-7">
                                <div class="form-group">
                                    <label>ชื่อ</label>
                                    <input type="text" class="form-control" placeholder="ไอที" name="name[]" required value="{{ old('name') }}">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-xs-12">
                        <div class="form-group">
                            <label>นามสกุล</label>
                            <input type="text" class="form-control" placeholder="ลาดกระบัง" name="surname[]" required value="{{ old('surname') }}">
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-6 col-xs-12">
                        <div class="form-group">
                            <label>Steam</label>
                            <input type="text" class="form-control" placeholder="steam" name="steam[]" required value="{{ old('steam') }}">
                        </div>
                    </div>
                    <div class="col-md-6 col-xs-12">
                        <div class="form-group">
                            <label>facebook</label>
                            <input type="text" class="form-control" placeholder="e.g. fb.com/ITLadkrabangOpenhouse" name="facebook[]" required value="{{ old('facebook') }}">
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-6 col-xs-12">
                        <div class="form-group">
                            <label for="phone">เบอร์โทรศัพท์</label>
                            <input type="text" class="form-control" placeholder="phone" name="phone[]" required>
                        </div>
                    </div>
                </div>
                <h4>สมาชิก 3</h4>
                <div class="row">
                    <div class="col-md-6 col-xs-12">
                        <div class="row">
                            <div class="col-xs-5">
                                <div class="form-group">
                                    <label>คำนำหน้าชื่อ</label>
                                    <select class="form-control" name="prefix[]" required>
                                        <option value="นาย" {{  (old('prefix') == "นาย" ? "selected":"") }}>นาย</option>
                                        <option value="นาง" {{ (old('prefix') == "นาง" ? "selected":"") }}>นาง</option>
                                        <option value="นางสาว" {{ (old('prefix') == "นางสาว" ? "selected":"") }}>นางสาว</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-xs-7">
                                <div class="form-group">
                                    <label>ชื่อ</label>
                                    <input type="text" class="form-control" placeholder="ไอที" name="name[]" required value="{{ old('name') }}">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-xs-12">
                        <div class="form-group">
                            <label>นามสกุล</label>
                            <input type="text" class="form-control" placeholder="ลาดกระบัง" name="surname[]" required value="{{ old('surname') }}">
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-6 col-xs-12">
                        <div class="form-group">
                            <label>Steam</label>
                            <input type="text" class="form-control" placeholder="steam" name="steam[]" required value="{{ old('steam') }}">
                        </div>
                    </div>
                    <div class="col-md-6 col-xs-12">
                        <div class="form-group">
                            <label>facebook</label>
                            <input type="text" class="form-control" placeholder="e.g. fb.com/ITLadkrabangOpenhouse" name="facebook[]" required value="{{ old('facebook') }}">
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-6 col-xs-12">
                        <div class="form-group">
                            <label for="phone">เบอร์โทรศัพท์</label>
                            <input type="text" class="form-control" placeholder="phone" name="phone[]" required>
                        </div>
                    </div>
                </div>
                <h4>สมาชิก 4</h4>
                <div class="row">
                    <div class="col-md-6 col-xs-12">
                        <div class="row">
                            <div class="col-xs-5">
                                <div class="form-group">
                                    <label>คำนำหน้าชื่อ</label>
                                    <select class="form-control" name="prefix[]" required>
                                        <option value="นาย" {{  (old('prefix') == "นาย" ? "selected":"") }}>นาย</option>
                                        <option value="นาง" {{ (old('prefix') == "นาง" ? "selected":"") }}>นาง</option>
                                        <option value="นางสาว" {{ (old('prefix') == "นางสาว" ? "selected":"") }}>นางสาว</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-xs-7">
                                <div class="form-group">
                                    <label>ชื่อ</label>
                                    <input type="text" class="form-control" placeholder="ไอที" name="name[]" required value="{{ old('name') }}">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-xs-12">
                        <div class="form-group">
                            <label>นามสกุล</label>
                            <input type="text" class="form-control" placeholder="ลาดกระบัง" name="surname[]" required value="{{ old('surname') }}">
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-6 col-xs-12">
                        <div class="form-group">
                            <label>Steam</label>
                            <input type="text" class="form-control" placeholder="steam" name="steam[]" required value="{{ old('steam') }}">
                        </div>
                    </div>
                    <div class="col-md-6 col-xs-12">
                        <div class="form-group">
                            <label>facebook</label>
                            <input type="text" class="form-control" placeholder="e.g. fb.com/ITLadkrabangOpenhouse" name="facebook[]" required value="{{ old('facebook') }}">
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-6 col-xs-12">
                        <div class="form-group">
                            <label for="phone">เบอร์โทรศัพท์</label>
                            <input type="text" class="form-control" placeholder="phone" name="phone[]" required>
                        </div>
                    </div>
                </div>
                <h4>สมาชิก 5</h4>
                <div class="row">
                    <div class="col-md-6 col-xs-12">
                        <div class="row">
                            <div class="col-xs-5">
                                <div class="form-group">
                                    <label>คำนำหน้าชื่อ</label>
                                    <select class="form-control" name="prefix[]" required>
                                        <option value="นาย" {{  (old('prefix') == "นาย" ? "selected":"") }}>นาย</option>
                                        <option value="นาง" {{ (old('prefix') == "นาง" ? "selected":"") }}>นาง</option>
                                        <option value="นางสาว" {{ (old('prefix') == "นางสาว" ? "selected":"") }}>นางสาว</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-xs-7">
                                <div class="form-group">
                                    <label>ชื่อ</label>
                                    <input type="text" class="form-control" placeholder="ไอที" name="name[]" required value="{{ old('name') }}">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-xs-12">
                        <div class="form-group">
                            <label>นามสกุล</label>
                            <input type="text" class="form-control" placeholder="ลาดกระบัง" name="surname[]" required value="{{ old('surname') }}">
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-6 col-xs-12">
                        <div class="form-group">
                            <label>Steam</label>
                            <input type="text" class="form-control" placeholder="steam" name="steam[]" required value="{{ old('steam') }}">
                        </div>
                    </div>
                    <div class="col-md-6 col-xs-12">
                        <div class="form-group">
                            <label>facebook</label>
                            <input type="text" class="form-control" placeholder="e.g. fb.com/ITLadkrabangOpenhouse" name="facebook[]" required value="{{ old('facebook') }}">
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-6 col-xs-12">
                        <div class="form-group">
                            <label for="phone">เบอร์โทรศัพท์</label>
                            <input type="text" class="form-control" placeholder="phone" name="phone[]" required>
                        </div>
                    </div>
                </div>
                <h4>สำรอง 1</h4>
                <div class="row">
                    <div class="col-md-6 col-xs-12">
                        <div class="row">
                            <div class="col-xs-5">
                                <div class="form-group">
                                    <label>คำนำหน้าชื่อ</label>
                                    <select class="form-control" name="prefix[]" required>
                                        <option value="นาย" {{  (old('prefix') == "นาย" ? "selected":"") }}>นาย</option>
                                        <option value="นาง" {{ (old('prefix') == "นาง" ? "selected":"") }}>นาง</option>
                                        <option value="นางสาว" {{ (old('prefix') == "นางสาว" ? "selected":"") }}>นางสาว</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-xs-7">
                                <div class="form-group">
                                    <label>ชื่อ</label>
                                    <input type="text" class="form-control" placeholder="ไอที" name="name[]" required value="{{ old('name') }}">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-xs-12">
                        <div class="form-group">
                            <label>นามสกุล</label>
                            <input type="text" class="form-control" placeholder="ลาดกระบัง" name="surname[]" required value="{{ old('surname') }}">
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-6 col-xs-12">
                        <div class="form-group">
                            <label>Steam</label>
                            <input type="text" class="form-control" placeholder="steam" name="steam[]" required value="{{ old('steam') }}">
                        </div>
                    </div>
                    <div class="col-md-6 col-xs-12">
                        <div class="form-group">
                            <label>facebook</label>
                            <input type="text" class="form-control" placeholder="e.g. fb.com/ITLadkrabangOpenhouse" name="facebook[]" required value="{{ old('facebook') }}">
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-6 col-xs-12">
                        <div class="form-group">
                            <label for="phone">เบอร์โทรศัพท์</label>
                            <input type="text" class="form-control" placeholder="phone" name="phone[]" required>
                        </div>
                    </div>
                </div>
                <h4>สำรอง 2</h4>
                <div class="row">
                    <div class="col-md-6 col-xs-12">
                        <div class="row">
                            <div class="col-xs-5">
                                <div class="form-group">
                                    <label>คำนำหน้าชื่อ</label>
                                    <select class="form-control" name="prefix[]" required>
                                        <option value="นาย" {{  (old('prefix') == "นาย" ? "selected":"") }}>นาย</option>
                                        <option value="นาง" {{ (old('prefix') == "นาง" ? "selected":"") }}>นาง</option>
                                        <option value="นางสาว" {{ (old('prefix') == "นางสาว" ? "selected":"") }}>นางสาว</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-xs-7">
                                <div class="form-group">
                                    <label>ชื่อ</label>
                                    <input type="text" class="form-control" placeholder="ไอที" name="name[]" required value="{{ old('name') }}">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-xs-12">
                        <div class="form-group">
                            <label>นามสกุล</label>
                            <input type="text" class="form-control" placeholder="ลาดกระบัง" name="surname[]" required value="{{ old('surname') }}">
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-6 col-xs-12">
                        <div class="form-group">
                            <label>Steam</label>
                            <input type="text" class="form-control" placeholder="steam" name="steam[]" required value="{{ old('steam') }}">
                        </div>
                    </div>
                    <div class="col-md-6 col-xs-12">
                        <div class="form-group">
                            <label>facebook</label>
                            <input type="text" class="form-control" placeholder="e.g. fb.com/ITLadkrabangOpenhouse" name="facebook[]" required value="{{ old('facebook') }}">
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-6 col-xs-12">
                        <div class="form-group">
                            <label for="phone">เบอร์โทรศัพท์</label>
                            <input type="text" class="form-control" placeholder="phone" name="phone[]" value ="{{old('phone')}}" required>
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
                            <input type="text" class="form-control" placeholder="School" name="school" value ="{{old('school')}}" required>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-6 col-xs-12">
                        <div class="form-group">
                            <label for="schoolAddr">ที่อยู่</label>
                            <input type="text" class="form-control" placeholder="schoolAddr" name = "school_addr" value="{{old('school_addr')}}">
                        </div>
                    </div>
                    <div class="col-md-6 col-xs-12">
                        <div class="form-group">
                            <label for="schoolProvince">จังหวัด</label>
                            <input type="text" class="form-control" placeholder="schoolProvince" name="school_province" value="{{old('school_province')}}" required>
                        </div>
                    </div>
                </div>

                {{--อาจารย์--}}
                <h3>Teacher</h3>
                <div class="row">
                    <div class="col-md-2 col-xs-4">
                        <div class="form-group">
                            <label>คำนำหน้าชื่อ</label>
                            <input type="text" class="form-control" placeholder="prefix" name="teacher_prefix" value="{{old('prefix')}}" required>
                        </div>
                    </div>
                    <div class="col-md-5 col-xs-8">
                        <div class="form-group">
                            <label for="teacherName">ชื่อ</label>
                            <input type="text" class="form-control" placeholder="teacherName" name="teacher_name" value="{{old('teacher_name')}}" required>
                        </div>
                    </div>
                    <div class="col-md-5 col-xs-12">
                        <div class="form-group">
                            <label for="teacherSurname">นามสกุล</label>
                            <input type="text" class="form-control" placeholder="teacherSurname" name="teacher_surname" value="{{old('teacher_surname')}}" required>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-6 col-xs-12">
                        <div class="form-group">
                            <label for="teacherPhone">เบอร์โทร</label>
                            <input type="text" class="form-control" placeholder="teacherPhone" name="teacher_phone" value="{{old('teacher_phone')}}" required>
                        </div>
                    </div>
                </div>
                <button type="submit" class="btn btn-primary btn-block regis-btn">ลงทะเบียน</button>
            </form>
        </section>
    </div>
@endsection

@extends('new.index')
@section('content')
    <div class="paper">
        <div class="container">
            <h1 class="light text-center">ลงทะเบียนเข้าชมงานสำหรับโรงเรียน</h1>
            <hr>
            <form action="{{url('/register/guest_school')}}" method="post">
                {!! csrf_field() !!}
                {{--ข้อมูลส่วนตัว--}}
                <h3>ข้อมูลส่วนตัว</h3>
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
                    <div class="col-md-6 col-xs-12">
                        <div class="form-group">
                            <label >เพศ</label><br>
                            <label class="radio-inline">
                                <input type="radio" name="gender" value="M" required {{ old('gender') == 'M' ? "checked":"" }}> ชาย
                            </label>
                            <label class="radio-inline">
                                <input type="radio" name="gender" value="F" required {{ old('gender') == 'F' ? "checked":"" }}> หญิง
                            </label>
                            <label class="radio-inline">
                                <input type="radio" name="gender" value="U" required {{ old('gender') == 'U' ? "checked":"" }}> ไม่ระบุ
                            </label>
                        </div>
                    </div>
                    <div class="col-md-6 col-xs-12">
                        <div class="form-group">
                            <label>อายุ</label>
                            <input type="number" class="form-control" placeholder="100" name="age" required value="{{ old('age') }}">
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-6 col-xs-12">
                        <div class="form-group">
                            <label>โรงเรียน</label>
                            <input type="text" class="form-control" placeholder="ชื่อโรงเรียน" name="school" required value="{{ old('school') }}">
                        </div>
                    </div>
                    <div class="col-md-6 col-xs-12">
                        <div class="form-group">
                            <label>จังหวัด</label>
                            <input type="text" class="form-control" placeholder="e.g. กรุงเทพฯ" name="province" required value="{{ old('province') }}">
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-6 col-xs-12">
                        <div class="form-group">
                            <label>จำนวนนักเรียนที่มาเข้าชมงาน</label>
                            <input type="number" class="form-control" placeholder="e.g. 1000000" name="follower" required value="{{ old('follower') }}">
                        </div>
                    </div>
                </div>
                {{--end ข้อมูลส่วนตัว--}}

                {{--ช่องทางการติดต่อ--}}
                <h3>ช่องทางการติดต่อ</h3>
                <div class="row">
                    <div class="col-md-6 col-xs-12">
                        <div class="form-group">
                            <label>เบอร์โทรศัพท์</label>
                            <input type="text" class="form-control" placeholder="e.g. 080808xxxx" name="phone" required value="{{ old('phone') }}">
                        </div>
                    </div>
                    <div class="col-md-6 col-xs-12">
                        <div class="form-group">
                            <label>อีเมล</label>
                            <input type="text" class="form-control" placeholder="e.g. openhouse@it.kmitl.ac.th" name="email" required value="{{ old('email') }}">
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-6 col-xs-12">
                        <div class="form-group">
                            <label>Facebook</label>
                            <input type="text" class="form-control" placeholder="e.g. fb.com/ITLadkrabangOpenhouse" name="facebook" value="{{ old('facebook') }}">
                        </div>
                    </div>
                    <div class="col-md-6 col-xs-12">
                        <div class="form-group">
                            <label>Twitter</label>
                            <input type="text" class="form-control" placeholder="e.g. twitter.com/@ITKMITL" name="twitter" value="{{ old('twitter') }}">
                        </div>
                    </div>
                </div>
                {{--end ช่องทางการติดต่อ--}}

                {{--รับข่าวสาร--}}
                <h3>ข่าวสารจาก IT Ladkrabang Open House</h3>
                <div class="row">
                    <div class="col-md-12 col-xs-12">
                        <div class="form-group">
                            <div class="checkbox">
                                <label>
                                    <input type="checkbox" name="news" value="1" {{ old('news')=="1" ? "checked":"" }}>ฉันต้องการรับข้อมูลข่าวสารจากทีมงาน IT Ladkrabang Open House
                                </label>
                            </div>
                        </div>
                    </div>
                </div>
                {{--end รับข่าวสาร--}}
                <div class="text-center">
                    <button type="submit" class="btn btn-primary btn-lg">ลงทะเบียน</button>
                </div>
            </form>
        </div>
    </div>
@endsection

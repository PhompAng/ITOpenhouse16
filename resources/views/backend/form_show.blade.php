@extends('backend.index')
@section('content')
    <h3>ข้อมูลทั่วไป</h3>
    <div class="row">
        <div class="col-md-6 col-xs-12">
            <div class="form-group">
                <label for="status">สถานะของท่าน</label>
                <select class="form-control" name="status" id="status" disabled>
                    <option value="1" {{$data['status'] == 1 ? "selected":""}}>นักเรียนชั้นมัธยมศึกษาปีที่ 1</option>
                    <option value="2" {{$data['status'] == 2 ? "selected":""}}>นักเรียนชั้นมัธยมศึกษาปีที่ 2</option>
                    <option value="3" {{$data['status'] == 3 ? "selected":""}}>นักเรียนชั้นมัธยมศึกษาปีที่ 3</option>
                    <option value="4" {{$data['status'] == 4 ? "selected":""}}>นักเรียนชั้นมัธยมศึกษาปีที่ 4</option>
                    <option value="5" {{$data['status'] == 5 ? "selected":""}}>นักเรียนชั้นมัธยมศึกษาปีที่ 5</option>
                    <option value="6" {{$data['status'] == 6 ? "selected":""}}>นักเรียนชั้นมัธยมศึกษาปีที่ 6</option>
                    <option value="11" {{$data['status'] == 11 ? "selected":""}}>นักศึกษาชั้นปีที่ 1</option>
                    <option value="12" {{$data['status'] == 12 ? "selected":""}}>นักศึกษาชั้นปีที่ 2</option>
                    <option value="13" {{$data['status'] == 13 ? "selected":""}}>นักศึกษาชั้นปีที่ 3</option>
                    <option value="14" {{$data['status'] == 14 ? "selected":""}}>นักศึกษาชั้นปีที่ 4</option>
                    <option value="21" {{$data['status'] == 21 ? "selected":""}}>ครู-อาจารย์</option>
                    <option value="31" {{$data['status'] == 31 ? "selected":""}}>ผู้ปกครอง</option>
                    <option value="0" {{$data['status'] == 0 ? "selected":""}}>บุคคลทั่วไป (ระบุ)</option>
                </select>
            </div>
        </div>
        <div class="col-md-6 col-xs-12">
            <div class="form-group">
                <label for="status_des">&nbsp;</label>
                <input class="form-control" id="status_des" type="text" name="status_des" value="{{$data['status_des']}}" disabled>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-xs-12">
            <label for="know">ท่านทราบข่าวสารการจัดงาน “IT Ladkrabang Open House  2016” จาก</label>
            <div class="row">
                <div class="col-md-6 col-xs-12">
                    <div class="form-group">
                        <select name="know" id="know" class="form-control" disabled>
                            <option value="1" {{$data['know'] == 1 ? "selected":""}}>เว็บไซต์คณะฯ</option>
                            <option value="2" {{$data['know'] == 2 ? "selected":""}}>Facebook</option>
                            <option value="3" {{$data['know'] == 3 ? "selected":""}}>Twitter</option>
                            <option value="4" {{$data['know'] == 4 ? "selected":""}}>อีเมล</option>
                            <option value="5" {{$data['know'] == 5 ? "selected":""}}>โปสเตอร์</option>
                            <option value="6" {{$data['know'] == 6 ? "selected":""}}>แผ่นพับ</option>
                            <option value="7" {{$data['know'] == 7 ? "selected":""}}>หนังสือเชิญเข้าร่วมงาน</option>
                            <option value="8" {{$data['know'] == 8 ? "selected":""}}>หนังสือประชาสัมพันธ์ของโรงเรียน</option>
                            <option value="9" {{$data['know'] == 9 ? "selected":""}}>เว็บไซต์อื่น (ระบุ)</option>
                            <option value="0" {{$data['know'] == 0 ? "selected":""}}>อื่น ๆ (ระบุ)</option>
                        </select>
                    </div>
                </div>
                <div class="col-md-6 col-xs-12">
                    <div class="form-group">
                        <input class="form-control" id="know_des" type="text" name="know_des" value="{{$data['know_des']}}" disabled>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-xs-12">
            <div class="form-group">
                <label for="reason[]">เหตุผลที่ท่านเข้าร่วมงาน “IT Ladkrabang Open House 2016” (สามารถตอบได้มากกว่า 1 ข้อ)</label>
                <br>
                <input type="checkbox" disabled name="reason[]" value=1 {{in_array(1, $data['reason']) ? "checked":""}}>
                เพื่อต้องการทราบเกี่ยวกับข้อมูลของหลักสูตรของคณะเทคโนโลยีสารสนเทศ
                <br>
                <input type="checkbox" disabled name="reason[]" value=2 {{in_array(2, $data['reason']) ? "checked":""}}>
                เพื่อเข้าร่วมแข่งขันกิจกรรมทางวิชาการ
                <br>
                <input type="checkbox" disabled name="reason[]" value=3 {{in_array(3, $data['reason']) ? "checked":""}}>
                เพื่อต้องการทราบเกี่ยวกับแนวทางการศึกษาต่อและการประกอบอาชีพด้านเทคโนโลยีสารสนเทศ
                <br><input type="checkbox" disabled name="reason[]" value=4 {{in_array(4, $data['reason']) ? "checked":""}}>
                เพื่อชมนิทรรศการผลงานทางวิชาการของของนักศึกษาและอาจารย์คณะเทคโนโลยีสารสนเทศ
                <br><input type="checkbox" disabled name="reason[]" value=5 {{in_array(5, $data['reason']) ? "checked":""}}>
                เพื่อเยี่ยมชมห้องบรรยาย  ห้องปฏิบัติการคอมพิวเตอร์  สภาพแวดล้อม  และสิ่งอำนวยความสะดวกต่างๆ ภายในคณะ
                <br><input type="checkbox" disabled name="reason[]" value=6 {{in_array(6, $data['reason']) ? "checked":""}}>
                เพื่อเข้าร่วมฟังการเสวนาหัวข้อ “เรียน IT สายไหน ก้าวไกลในยุคหน้า”
                <br><input type="checkbox" disabled name="reason[]" value=7 {{in_array(7, $data['reason']) ? "checked":""}}>
                เพื่อเข้าร่วมฟังการเสวนาหัวข้อ  “How to be net-Idol สุขภาพดีไอทีช่วยได้”
                <br><input type="checkbox" disabled name="reason[]" value=8 {{in_array(8, $data['reason']) ? "checked":""}}>
                เพื่อเข้าร่วมกิจกรรม IT Career Workshop
                <br><input type="checkbox" disabled name="reason[]" value=9 {{in_array(9, $data['reason']) ? "checked":""}}>
                เพื่อเข้าร่วมกิจกรรม Workshop จากบริษัท Microsoft ประเทศไทย
                <br><input type="checkbox" disabled name="reason[]" value=10 {{in_array(10, $data['reason']) ? "checked":""}}>
                เพื่อเข้าร่วมกิจกรรม  สัมมนาเตรียมความพร้อมสู่ไอทีลาดกระบัง “ToBeIT@KMITL”
                <br>
                <div class="row form-inline">
                    <div class="col-md-6 col-xs-12">
                        <input type="checkbox" disabled name="reason[]" value=11 {{in_array(11, $data['reason']) ? "checked":""}}>
                        อื่น ๆ (ระบุ)
                        <input class="form-control" id="reason_des" type="text" name="reason_des" value="{{$data['reason_des']}}" disabled>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-xs-12">
            <div class="form-group">
                <label for="interest">กรณีเป็นนักเรียน  ท่านสนใจศึกษาต่อที่คณะเทคโนโลยีสารสนเทศ สถาบันเทคโนโลยีพระจอมเกล้าเจ้าคุณทหารลาดกระบังหรือไม่</label>
                <div class="row">
                    <div class="col-md-6 col-xs-12">
                        <select class="form-control" name="interest" id="interest" disabled>
                            <option value="1" {{$data['interest']==1 ? "selected":"" }}>สนใจ เนื่องจาก</option>
                            <option value="2" {{$data['interest']==2 ? "selected":"" }}>ไม่สนใจ เนื่องจากต้องการศึกษาต่อในสาขาวิชาด้านอื่น (ไม่ใช่ไอที)</option>
                            <option value="0" {{$data['interest']==0 ? "selected":"" }}>ไม่สนใจ เนื่องจากต้องการศึกษาต่อหลักสูตรด้านคอมพิวเตอร์ที่อื่น (โปรดระบุ)</option>
                        </select>
                    </div>
                    <div class="col-md-6 col-xs-12">
                        <div class="form-group">
                            <input class="form-control" id="interest_des" value="{{$data['interest_des']}}" type="text" name="interest_des" disabled>
                        </div>
                    </div>
                    <div class="col-xs-12">
                        <div class="row">
                            <div class="col-xs-12 col-md-6">
                                <div class="form-group">
                                    <label for="interest_fac">คณะ/หลักสูตร</label>
                                    <input class="form-control" id="interest_fac" value="{{$data['interest_fac']}}" name="interest_fac" type="text" disabled>
                                </div>
                            </div>
                            <div class="col-xs-12 col-md-6">
                                <div class="form-group">
                                    <label for="">สถาบัน/มหาวิทยาลัย</label>
                                    <input class="form-control" id="interest_uni" value="{{$data['interest_uni']}}" name="interest_uni" type="text" disabled>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-xs-12">
            <div class="row">
                <div class="col-xs-12">
                    <div class="form-group">
                        <label for="news">ท่านต้องการทราบข้อมูลเพิ่มเติมเกี่ยวกับหลักสูตรของคณะฯ และการรับสมัครนักศึกษาหรือไม่</label>
                        <select name="news" id="news" class="form-control" disabled>
                            <option value="1" {{$data['news'] == 1 ? "selected":""}}>ต้องการ (ระบุ)</option>
                            <option value="0" {{$data['news'] == 0 ? "selected":""}}>ไม่ต้องการ</option>
                        </select>
                    </div>
                </div>
                <div class="col-xs-12">
                    <div class="row">
                        <div class="col-xs-12 col-md-6">
                            <div class="form-group">
                                <label for="news_addr">ที่อยู่</label>
                                <input class="form-control" id="news_addr" value="{{$data['news_addr']}}" name="news_addr" type="text" disabled>
                            </div>
                        </div>
                        <div class="col-xs-12 col-md-6">
                            <div class="form-group">
                                <label for="news_email">อีเมล</label>
                                <input class="form-control" id="news_email" value="{{$data['news_email']}}" name="news_email" type="text" disabled>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-xs-12">
            <div class="form-group">
                <label for=activity">ท่านชอบกิจกรรมใดมากที่สุด 3 ลำดับแรก (เรียงลำดับ โดยชอบมากที่สุด เป็น 1 และ 2, 3 ตามลำดับ) </label>
                <div class="row">
                    <div class="col-xs-9">
                        <div class="form-group">
                            แนะแนวการศึกษาและอาชีพ
                        </div>
                    </div>
                    <div class="col-xs-1">
                        <div class="form-group"><input type="radio" name="a1" disabled {{$data['activity'][1-1] == 0 ? "checked":""}} value="0">1</div>
                    </div>
                    <div class="col-xs-1">
                        <div class="form-group"><input type="radio" name="a2" disabled {{$data['activity'][2-1] == 0 ? "checked":""}} value="0">2</div>
                    </div>
                    <div class="col-xs-1">
                        <div class="form-group"><input type="radio" name="a3" disabled {{$data['activity'][3-1] == 0 ? "checked":""}} value="0">3</div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-xs-9">
                        <div class="form-group">
                            การแสดงนิทรรศการทางวิชาการ
                        </div>
                    </div>
                    <div class="col-xs-1">
                        <div class="form-group"><input type="radio" name="a1" disabled {{$data['activity'][1-1] == 1 ? "checked":""}} value="1">1</div>
                    </div>
                    <div class="col-xs-1">
                        <div class="form-group"><input type="radio" name="a2" disabled {{$data['activity'][2-1] == 1 ? "checked":""}} value="1">2</div>
                    </div>
                    <div class="col-xs-1">
                        <div class="form-group"><input type="radio" name="a3" disabled {{$data['activity'][3-1] == 1 ? "checked":""}} value="1">3</div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-xs-9">
                        <div class="form-group">
                            การแข่งขันทางวิชาการ
                        </div>
                    </div>
                    <div class="col-xs-1">
                        <div class="form-group"><input type="radio" name="a1" disabled {{$data['activity'][1-1] == 2 ? "checked":""}} value="2">1</div>
                    </div>
                    <div class="col-xs-1">
                        <div class="form-group"><input type="radio" name="a2" disabled {{$data['activity'][2-1] == 2 ? "checked":""}} value="2">2</div>
                    </div>
                    <div class="col-xs-1">
                        <div class="form-group"><input type="radio" name="a3" disabled {{$data['activity'][3-1] == 2 ? "checked":""}} value="2">3</div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-xs-9">
                        <div class="form-group">
                            กิจกรรม IT Career Workshop
                        </div>
                    </div>
                    <div class="col-xs-1">
                        <div class="form-group"><input type="radio" name="a1" disabled {{$data['activity'][1-1] == 3 ? "checked":""}} value="3">1</div>
                    </div>
                    <div class="col-xs-1">
                        <div class="form-group"><input type="radio" name="a2" disabled {{$data['activity'][2-1] == 3 ? "checked":""}} value="3">2</div>
                    </div>
                    <div class="col-xs-1">
                        <div class="form-group"><input type="radio" name="a3" disabled {{$data['activity'][3-1] == 3 ? "checked":""}} value="3">3</div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-xs-9">
                        <div class="form-group">
                            การเสวนาหัวข้อ “เรียน IT สายไหน ก้าวไกลในยุคหน้า”
                        </div>
                    </div>
                    <div class="col-xs-1">
                        <div class="form-group"><input type="radio" name="a1" disabled {{$data['activity'][1-1] == 4 ? "checked":""}} value="4">1</div>
                    </div>
                    <div class="col-xs-1">
                        <div class="form-group"><input type="radio" name="a2" disabled {{$data['activity'][2-1] == 4 ? "checked":""}} value="4">2</div>
                    </div>
                    <div class="col-xs-1">
                        <div class="form-group"><input type="radio" name="a3" disabled {{$data['activity'][3-1] == 4 ? "checked":""}} value="4">3</div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-xs-9">
                        <div class="form-group">
                            การเสวนาหัวข้อ  “How to be net-Idol สุขภาพดีไอทีช่วยได้”
                        </div>
                    </div>
                    <div class="col-xs-1">
                        <div class="form-group"><input type="radio" name="a1" disabled {{$data['activity'][1-1] == 5 ? "checked":""}} value="5">1</div>
                    </div>
                    <div class="col-xs-1">
                        <div class="form-group"><input type="radio" name="a2" disabled {{$data['activity'][2-1] == 5 ? "checked":""}} value="5">2</div>
                    </div>
                    <div class="col-xs-1">
                        <div class="form-group"><input type="radio" name="a3" disabled {{$data['activity'][3-1] == 5 ? "checked":""}} value="5">3</div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-xs-9">
                        <div class="form-group">
                            กิจกรรม Workshop จาก บริษัท Microsoft ประเทศไทย
                        </div>
                    </div>
                    <div class="col-xs-1">
                        <div class="form-group"><input type="radio" name="a1" disabled {{$data['activity'][1-1] == 6 ? "checked":""}} value="6">1</div>
                    </div>
                    <div class="col-xs-1">
                        <div class="form-group"><input type="radio" name="a2" disabled {{$data['activity'][2-1] == 6 ? "checked":""}} value="6">2</div>
                    </div>
                    <div class="col-xs-1">
                        <div class="form-group"><input type="radio" name="a3" disabled {{$data['activity'][3-1] == 6 ? "checked":""}} value="6">3</div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-xs-9">
                        <div class="form-group">
                            สัมมนาเตรียมความพร้อมสู่ไอทีลาดกระบัง “ToBeIT@KMITL”
                        </div>
                    </div>
                    <div class="col-xs-1">
                        <div class="form-group"><input type="radio" name="a1" disabled {{$data['activity'][1-1] == 7 ? "checked":""}} value="7">1</div>
                    </div>
                    <div class="col-xs-1">
                        <div class="form-group"><input type="radio" name="a2" disabled {{$data['activity'][2-1] == 7 ? "checked":""}} value="7">2</div>
                    </div>
                    <div class="col-xs-1">
                        <div class="form-group"><input type="radio" name="a3" disabled {{$data['activity'][3-1] == 7 ? "checked":""}} value="7">3</div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-xs-9">
                        <div class="form-group">
                            การเสวนาเรื่อง “ความสำคัญของ IT ในวงการธุรกิจ”
                        </div>
                    </div>
                    <div class="col-xs-1">
                        <div class="form-group"><input type="radio" name="a1" disabled {{$data['activity'][1-1] == 8 ? "checked":""}} value="8">1</div>
                    </div>
                    <div class="col-xs-1">
                        <div class="form-group"><input type="radio" name="a2" disabled {{$data['activity'][2-1] == 8 ? "checked":""}} value="8">2</div>
                    </div>
                    <div class="col-xs-1">
                        <div class="form-group"><input type="radio" name="a3" disabled {{$data['activity'][3-1] == 8 ? "checked":""}} value="8">3</div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-xs-9">
                        <div class="form-group">
                            การเสวนาเรื่อง “ลักษณะงาน IT ในวงการธุรกิจ”
                        </div>
                    </div>
                    <div class="col-xs-1">
                        <div class="form-group"><input type="radio" name="a1" disabled {{$data['activity'][1-1] == 9 ? "checked":""}} value="9">1</div>
                    </div>
                    <div class="col-xs-1">
                        <div class="form-group"><input type="radio" name="a2" disabled {{$data['activity'][2-1] == 9 ? "checked":""}} value="9">2</div>
                    </div>
                    <div class="col-xs-1">
                        <div class="form-group"><input type="radio" name="a3" disabled {{$data['activity'][3-1] == 9 ? "checked":""}} value="9">3</div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-xs-9">
                        <div class="form-group">
                            กิจกรรมชุมนุมของนักศึกษา
                        </div>
                    </div>
                    <div class="col-xs-1">
                        <div class="form-group"><input type="radio" name="a1" disabled {{$data['activity'][1-1] == 10 ? "checked":""}} value="10">1</div>
                    </div>
                    <div class="col-xs-1">
                        <div class="form-group"><input type="radio" name="a2" disabled {{$data['activity'][2-1] == 10 ? "checked":""}} value="10">2</div>
                    </div>
                    <div class="col-xs-1">
                        <div class="form-group"><input type="radio" name="a3" disabled {{$data['activity'][3-1] == 10 ? "checked":""}} value="10">3</div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-xs-9">
                        <div class="form-group">
                            กิจกรรมนำทัวร์คณะ
                        </div>
                    </div>
                    <div class="col-xs-1">
                        <div class="form-group"><input type="radio" name="a1" disabled {{$data['activity'][1-1] == 11 ? "checked":""}} value="11">1</div>
                    </div>
                    <div class="col-xs-1">
                        <div class="form-group"><input type="radio" name="a2" disabled {{$data['activity'][2-1] == 11 ? "checked":""}} value="11">2</div>
                    </div>
                    <div class="col-xs-1">
                        <div class="form-group"><input type="radio" name="a3" disabled {{$data['activity'][3-1] == 11 ? "checked":""}} value="11">3</div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-xs-9">
                        <div class="form-group">
                            การโชว์บูธของบริษัทต่างๆ
                        </div>
                    </div>
                    <div class="col-xs-1">
                        <div class="form-group"><input type="radio" name="a1" disabled {{$data['activity'][1-1] == 12 ? "checked":""}} value="12">1</div>
                    </div>
                    <div class="col-xs-1">
                        <div class="form-group"><input type="radio" name="a2" disabled {{$data['activity'][2-1] == 12 ? "checked":""}} value="12">2</div>
                    </div>
                    <div class="col-xs-1">
                        <div class="form-group"><input type="radio" name="a3" disabled {{$data['activity'][3-1] == 12 ? "checked":""}} value="12">3</div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <h3>แบบสอบถามเกี่ยวกับความคิดเห็นต่อการจัดงาน “IT Ladkrabang Open House 2016”</h3>
    <div class="row">
        <div class="col-xs-12">
            <table class="table table-bordered">
                <thead>
                <tr>
                    <th rowspan="2" class="text-center">รายการ</th>
                    <th colspan="6" class="text-center">ระดับความพึงพอใจ</th>
                </tr>
                <tr>
                    <th class="text-center">มากที่สุด <br>(5)</th>
                    <th class="text-center">มาก (4)</th>
                    <th class="text-center">ปานกลาง <br>(3)</th>
                    <th class="text-center">น้อย (2)</th>
                    <th class="text-center">น้อยที่สุด <br>(1)</th>
                    <th class="text-center">ไม่มีความคิดเห็น</th>
                </tr>
                </thead>
                <tbody>
                <tr>
                    <td>1. ความชัดเจนของข้อมูลประชาสัมพันธ์</td>
                    <td>
                        <input type="radio" name="t2" {{$data['t2'] == 5 ? "checked":""}} value="5" disabled>
                    </td>
                    <td>
                        <input type="radio" name="t2" {{$data['t2'] == 4 ? "checked":""}} value="4" disabled>
                    </td>
                    <td>
                        <input type="radio" name="t2" {{$data['t2'] == 3 ? "checked":""}} value="3" disabled>
                    </td>
                    <td>
                        <input type="radio" name="t2" {{$data['t2'] == 2 ? "checked":""}} value="2" disabled>
                    </td>
                    <td>
                        <input type="radio" name="t2" {{$data['t2'] == 1 ? "checked":""}} value="1" disabled>
                    </td>
                    <td>
                        <input type="radio" name="t2" {{$data['t2'] == 0 ? "checked":""}} value="0" disabled>
                    </td>
                </tr>
                <tr>
                    <td>2. สื่อประชาสัมพันธ์ที่ได้รับมีความน่าสนใจ สามารถดึงดูดให้เข้าร่วมงาน</td>
                    <td>
                        <input type="radio" name="t4" {{$data['t4'] == 5 ? "checked":""}} value="5" disabled>
                    </td>
                    <td>
                        <input type="radio" name="t4" {{$data['t4'] == 4 ? "checked":""}} value="4" disabled>
                    </td>
                    <td>
                        <input type="radio" name="t4" {{$data['t4'] == 3 ? "checked":""}} value="3" disabled>
                    </td>
                    <td>
                        <input type="radio" name="t4" {{$data['t4'] == 2 ? "checked":""}} value="2" disabled>
                    </td>
                    <td>
                        <input type="radio" name="t4" {{$data['t4'] == 1 ? "checked":""}} value="1" disabled>
                    </td>
                    <td>
                        <input type="radio" name="t4" {{$data['t4'] == 0 ? "checked":""}} value="0" disabled>
                    </td>
                </tr>
                <tr>
                    <td>3. การตอบข้อซักถามเกี่ยวกับงานมีความชัดเจนและตรงประเด็น</td>
                    <td>
                        <input type="radio" name="t5" {{$data['t5'] == 5 ? "checked":""}} value="5" disabled>
                    </td>
                    <td>
                        <input type="radio" name="t5" {{$data['t5'] == 4 ? "checked":""}} value="4" disabled>
                    </td>
                    <td>
                        <input type="radio" name="t5" {{$data['t5'] == 3 ? "checked":""}} value="3" disabled>
                    </td>
                    <td>
                        <input type="radio" name="t5" {{$data['t5'] == 2 ? "checked":""}} value="2" disabled>
                    </td>
                    <td>
                        <input type="radio" name="t5" {{$data['t5'] == 1 ? "checked":""}} value="1" disabled>
                    </td>
                    <td>
                        <input type="radio" name="t5" {{$data['t5'] == 0 ? "checked":""}} value="0" disabled>
                    </td>
                </tr>
                <tr>
                    <td>4.  ความเหมาะสมของช่วงเวลาการประชาสัมพันธ์</td>
                    <td>
                        <input type="radio" name="t6" {{$data['t6'] == 5 ? "checked":""}} value="5" disabled>
                    </td>
                    <td>
                        <input type="radio" name="t6" {{$data['t6'] == 4 ? "checked":""}} value="4" disabled>
                    </td>
                    <td>
                        <input type="radio" name="t6" {{$data['t6'] == 3 ? "checked":""}} value="3" disabled>
                    </td>
                    <td>
                        <input type="radio" name="t6" {{$data['t6'] == 2 ? "checked":""}} value="2" disabled>
                    </td>
                    <td>
                        <input type="radio" name="t6" {{$data['t6'] == 1 ? "checked":""}} value="1" disabled>
                    </td>
                    <td>
                        <input type="radio" name="t6" {{$data['t6'] == 0 ? "checked":""}} value="0" disabled>
                    </td>
                </tr>
                <tr>
                    <td>
                        <ul>
                            <li>ด้านการประสานงานของเจ้าหน้าที่</li>
                        </ul>
                        1. ติดต่อประสานงานได้ง่ายและสะดวก
                    </td>
                    <td>
                        <br><input type="radio" name="t7" {{$data['t7'] == 5 ? "checked":""}} value="5" disabled>
                    </td>
                    <td>
                        <br><input type="radio" name="t7" {{$data['t7'] == 4 ? "checked":""}} value="4" disabled>
                    </td>
                    <td>
                        <br><input type="radio" name="t7" {{$data['t7'] == 3 ? "checked":""}} value="3" disabled>
                    </td>
                    <td>
                        <br><input type="radio" name="t7" {{$data['t7'] == 2 ? "checked":""}} value="2" disabled>
                    </td>
                    <td>
                        <br><input type="radio" name="t7" {{$data['t7'] == 1 ? "checked":""}} value="1" disabled>
                    </td>
                    <td>
                        <br><input type="radio" name="t7" {{$data['t7'] == 0 ? "checked":""}} value="0" disabled>
                    </td>
                </tr>
                <tr>
                    <td>2. การตรงต่อเวลาของเจ้าหน้าที่</td>
                    <td>
                        <input type="radio" name="t8" {{$data['t8'] == 5 ? "checked":""}} value="5" disabled>
                    </td>
                    <td>
                        <input type="radio" name="t8" {{$data['t8'] == 4 ? "checked":""}} value="4" disabled>
                    </td>
                    <td>
                        <input type="radio" name="t8" {{$data['t8'] == 3 ? "checked":""}} value="3" disabled>
                    </td>
                    <td>
                        <input type="radio" name="t8" {{$data['t8'] == 2 ? "checked":""}} value="2" disabled>
                    </td>
                    <td>
                        <input type="radio" name="t8" {{$data['t8'] == 1 ? "checked":""}} value="1" disabled>
                    </td>
                    <td>
                        <input type="radio" name="t8" {{$data['t8'] == 0 ? "checked":""}} value="0" disabled>
                    </td>
                </tr>
                <tr>
                    <td>3. ปฏิบัติงานด้วยความกระตือรือร้นและเต็มใจให้บริการ</td>
                    <td>
                        <input type="radio" name="t9" {{$data['t9'] == 5 ? "checked":""}} value="5" disabled>
                    </td>
                    <td>
                        <input type="radio" name="t9" {{$data['t9'] == 4 ? "checked":""}} value="4" disabled>
                    </td>
                    <td>
                        <input type="radio" name="t9" {{$data['t9'] == 3 ? "checked":""}} value="3" disabled>
                    </td>
                    <td>
                        <input type="radio" name="t9" {{$data['t9'] == 2 ? "checked":""}} value="2" disabled>
                    </td>
                    <td>
                        <input type="radio" name="t9" {{$data['t9'] == 1 ? "checked":""}} value="1" disabled>
                    </td>
                    <td>
                        <input type="radio" name="t9" {{$data['t9'] == 0 ? "checked":""}} value="0" disabled>
                    </td>
                </tr>
                <tr>
                    <td>4. การใช้กิริยา วาจา สุภาพ เหมาะสม </td>
                    <td>
                        <input type="radio" name="t10" {{$data['t10'] == 5 ? "checked":""}} value="5" disabled>
                    </td>
                    <td>
                        <input type="radio" name="t10" {{$data['t10'] == 4 ? "checked":""}} value="4" disabled>
                    </td>
                    <td>
                        <input type="radio" name="t10" {{$data['t10'] == 3 ? "checked":""}} value="3" disabled>
                    </td>
                    <td>
                        <input type="radio" name="t10" {{$data['t10'] == 2 ? "checked":""}} value="2" disabled>
                    </td>
                    <td>
                        <input type="radio" name="t10" {{$data['t10'] == 1 ? "checked":""}} value="1" disabled>
                    </td>
                    <td>
                        <input type="radio" name="t10" {{$data['t10'] == 0 ? "checked":""}} value="0" disabled>
                    </td>
                </tr>
                <tr>
                    <td>5. มีมนุษยสัมพันธ์ที่ดี มีความเป็นมิตรภาพ</td>
                    <td>
                        <input type="radio" name="t11" {{$data['t11'] == 5 ? "checked":""}} value="5" disabled>
                    </td>
                    <td>
                        <input type="radio" name="t11" {{$data['t11'] == 4 ? "checked":""}} value="4" disabled>
                    </td>
                    <td>
                        <input type="radio" name="t11" {{$data['t11'] == 3 ? "checked":""}} value="3" disabled>
                    </td>
                    <td>
                        <input type="radio" name="t11" {{$data['t11'] == 2 ? "checked":""}} value="2" disabled>
                    </td>
                    <td>
                        <input type="radio" name="t11" {{$data['t11'] == 1 ? "checked":""}} value="1" disabled>
                    </td>
                    <td>
                        <input type="radio" name="t11" {{$data['t11'] == 0 ? "checked":""}} value="0" disabled>
                    </td>
                </tr>
                <tr>
                    <td>6. ความสามารถในการตอบข้อซักถามในระหว่างงาน</td>
                    <td>
                        <input type="radio" name="t12" {{$data['t12'] == 5 ? "checked":""}} value="5" disabled>
                    </td>
                    <td>
                        <input type="radio" name="t12" {{$data['t12'] == 4 ? "checked":""}} value="4" disabled>
                    </td>
                    <td>
                        <input type="radio" name="t12" {{$data['t12'] == 3 ? "checked":""}} value="3" disabled>
                    </td>
                    <td>
                        <input type="radio" name="t12" {{$data['t12'] == 2 ? "checked":""}} value="2" disabled>
                    </td>
                    <td>
                        <input type="radio" name="t12" {{$data['t12'] == 1 ? "checked":""}} value="1" disabled>
                    </td>
                    <td>
                        <input type="radio" name="t12" {{$data['t12'] == 0 ? "checked":""}} value="0" disabled>
                    </td>
                </tr>
                <tr>
                    <td>
                        <ul><li>ด้านสิ่งอำนวยความสะดวก</li></ul>
                        1. ทำเลที่ตั้งของสถานที่จัดงานมีความเหมาะสม
                    </td>
                    <td>
                        <br>
                        <input type="radio" name="t13" {{$data['t13'] == 5 ? "checked":""}} value="5" disabled>
                    </td>
                    <td>
                        <br>
                        <input type="radio" name="t13" {{$data['t13'] == 4 ? "checked":""}} value="4" disabled>
                    </td>
                    <td>
                        <br>
                        <input type="radio" name="t13" {{$data['t13'] == 3 ? "checked":""}} value="3" disabled>
                    </td>
                    <td>
                        <br>
                        <input type="radio" name="t13" {{$data['t13'] == 2 ? "checked":""}} value="2" disabled>
                    </td>
                    <td>
                        <br>
                        <input type="radio" name="t13" {{$data['t13'] == 1 ? "checked":""}} value="1" disabled>
                    </td>
                    <td>
                        <br>
                        <input type="radio" name="t13" {{$data['t13'] == 0 ? "checked":""}} value="0" disabled>
                    </td>
                </tr>
                <tr>
                    <td>2. ห้องบรรยายมีความเหมาะสมและทันสมัย</td>
                    <td>
                        <input type="radio" name="t14" {{$data['t14'] == 5 ? "checked":""}} value="5" disabled>
                    </td>
                    <td>
                        <input type="radio" name="t14" {{$data['t14'] == 4 ? "checked":""}} value="4" disabled>
                    </td>
                    <td>
                        <input type="radio" name="t14" {{$data['t14'] == 3 ? "checked":""}} value="3" disabled>
                    </td>
                    <td>
                        <input type="radio" name="t14" {{$data['t14'] == 2 ? "checked":""}} value="2" disabled>
                    </td>
                    <td>
                        <input type="radio" name="t14" {{$data['t14'] == 1 ? "checked":""}} value="1" disabled>
                    </td>
                    <td>
                        <input type="radio" name="t14" {{$data['t14'] == 0 ? "checked":""}} value="0" disabled>
                    </td>
                </tr>
                <tr>
                    <td>3. ห้องปฏิบัติการคอมพิวเตอร์มีความเหมาะสมและทันสมัย</td>
                    <td>
                        <input type="radio" name="t15" {{$data['t15'] == 5 ? "checked":""}} value="5" disabled>
                    </td>
                    <td>
                        <input type="radio" name="t15" {{$data['t15'] == 4 ? "checked":""}} value="4" disabled>
                    </td>
                    <td>
                        <input type="radio" name="t15" {{$data['t15'] == 3 ? "checked":""}} value="3" disabled>
                    </td>
                    <td>
                        <input type="radio" name="t15" {{$data['t15'] == 2 ? "checked":""}} value="2" disabled>
                    </td>
                    <td>
                        <input type="radio" name="t15" {{$data['t15'] == 1 ? "checked":""}} value="1" disabled>
                    </td>
                    <td>
                        <input type="radio" name="t15" {{$data['t15'] == 0 ? "checked":""}} value="0" disabled>
                    </td>
                </tr>
                <tr>
                    <td>4. ห้องประชุมมีความเหมาะสม</td>
                    <td>
                        <input type="radio" name="t16" {{$data['t16'] == 5 ? "checked":""}} value="5" disabled>
                    </td>
                    <td>
                        <input type="radio" name="t16" {{$data['t16'] == 4 ? "checked":""}} value="4" disabled>
                    </td>
                    <td>
                        <input type="radio" name="t16" {{$data['t16'] == 3 ? "checked":""}} value="3" disabled>
                    </td>
                    <td>
                        <input type="radio" name="t16" {{$data['t16'] == 2 ? "checked":""}} value="2" disabled>
                    </td>
                    <td>
                        <input type="radio" name="t16" {{$data['t16'] == 1 ? "checked":""}} value="1" disabled>
                    </td>
                    <td>
                        <input type="radio" name="t16" {{$data['t16'] == 0 ? "checked":""}} value="0" disabled>
                    </td>
                </tr>
                <tr>
                    <td>5. สนับสนุนให้มีการจัดงาน IT Ladkrabang Open House ในครั้งต่อไป</td>
                    <td>
                        <input type="radio" name="t17" {{$data['t17'] == 5 ? "checked":""}} value="5" disabled>
                    </td>
                    <td>
                        <input type="radio" name="t17" {{$data['t17'] == 4 ? "checked":""}} value="4" disabled>
                    </td>
                    <td>
                        <input type="radio" name="t17" {{$data['t17'] == 3 ? "checked":""}} value="3" disabled>
                    </td>
                    <td>
                        <input type="radio" name="t17" {{$data['t17'] == 2 ? "checked":""}} value="2" disabled>
                    </td>
                    <td>
                        <input type="radio" name="t17" {{$data['t17'] == 1 ? "checked":""}} value="1" disabled>
                    </td>
                    <td>
                        <input type="radio" name="t17" {{$data['t17'] == 0 ? "checked":""}} value="0" disabled>
                    </td>
                </tr>
                <tr>
                    <td><strong>ความเหมาะสมของนิทรรศการแสดงผลงานทางวิชาการของนักศึกษา</strong></td>
                    <td>
                        <input type="radio" name="t18" {{$data['t18'] == 5 ? "checked":""}} value="5" disabled>
                    </td>
                    <td>
                        <input type="radio" name="t18" {{$data['t18'] == 4 ? "checked":""}} value="4" disabled>
                    </td>
                    <td>
                        <input type="radio" name="t18" {{$data['t18'] == 3 ? "checked":""}} value="3" disabled>
                    </td>
                    <td>
                        <input type="radio" name="t18" {{$data['t18'] == 2 ? "checked":""}} value="2" disabled>
                    </td>
                    <td>
                        <input type="radio" name="t18" {{$data['t18'] == 1 ? "checked":""}} value="1" disabled>
                    </td>
                    <td>
                        <input type="radio" name="t18" {{$data['t18'] == 0 ? "checked":""}} value="0" disabled>
                    </td>
                </tr>
                <tr>
                    <td><strong>ความเหมาะสมของกิจกรรมการแข่งขันทางวิชาการ</strong></td>
                    <td>
                        <input type="radio" name="t19" {{$data['t19'] == 5 ? "checked":""}} value="5" disabled>
                    </td>
                    <td>
                        <input type="radio" name="t19" {{$data['t19'] == 4 ? "checked":""}} value="4" disabled>
                    </td>
                    <td>
                        <input type="radio" name="t19" {{$data['t19'] == 3 ? "checked":""}} value="3" disabled>
                    </td>
                    <td>
                        <input type="radio" name="t19" {{$data['t19'] == 2 ? "checked":""}} value="2" disabled>
                    </td>
                    <td>
                        <input type="radio" name="t19" {{$data['t19'] == 1 ? "checked":""}} value="1" disabled>
                    </td>
                    <td>
                        <input type="radio" name="t19" {{$data['t19'] == 0 ? "checked":""}} value="0" disabled>
                    </td>
                </tr>
                <tr>
                    <td><strong>วิทยากรโดยรวมมีคุณภาพในการส่งเสริมสร้างความรู้ (กิจกรรม workshop)</strong></td>
                    <td>
                        <input type="radio" name="t20" {{$data['t20'] == 5 ? "checked":""}} value="5" disabled>
                    </td>
                    <td>
                        <input type="radio" name="t20" {{$data['t20'] == 4 ? "checked":""}} value="4" disabled>
                    </td>
                    <td>
                        <input type="radio" name="t20" {{$data['t20'] == 3 ? "checked":""}} value="3" disabled>
                    </td>
                    <td>
                        <input type="radio" name="t20" {{$data['t20'] == 2 ? "checked":""}} value="2" disabled>
                    </td>
                    <td>
                        <input type="radio" name="t20" {{$data['t20'] == 1 ? "checked":""}} value="1" disabled>
                    </td>
                    <td>
                        <input type="radio" name="t20" {{$data['t20'] == 0 ? "checked":""}} value="0" disabled>
                    </td>
                </tr>
                <tr>
                    <td><strong>เวลาในการจัดงานมีความเหมาะสม</strong></td>
                    <td>
                        <input type="radio" name="t21" {{$data['t21'] == 5 ? "checked":""}} value="5" disabled>
                    </td>
                    <td>
                        <input type="radio" name="t21" {{$data['t21'] == 4 ? "checked":""}} value="4" disabled>
                    </td>
                    <td>
                        <input type="radio" name="t21" {{$data['t21'] == 3 ? "checked":""}} value="3" disabled>
                    </td>
                    <td>
                        <input type="radio" name="t21" {{$data['t21'] == 2 ? "checked":""}} value="2" disabled>
                    </td>
                    <td>
                        <input type="radio" name="t21" {{$data['t21'] == 1 ? "checked":""}} value="1" disabled>
                    </td>
                    <td>
                        <input type="radio" name="t21" {{$data['t21'] == 0 ? "checked":""}} value="0" disabled>
                    </td>
                </tr>
                <tr>
                    <td><strong>ความพึงพอใจโดยรวมของการจัดงานครั้งนี้</strong></td>
                    <td>
                        <input type="radio" name="t22" {{$data['t22'] == 5 ? "checked":""}} value="5" disabled>
                    </td>
                    <td>
                        <input type="radio" name="t22" {{$data['t22'] == 4 ? "checked":""}} value="4" disabled>
                    </td>
                    <td>
                        <input type="radio" name="t22" {{$data['t22'] == 3 ? "checked":""}} value="3" disabled>
                    </td>
                    <td>
                        <input type="radio" name="t22" {{$data['t22'] == 2 ? "checked":""}} value="2" disabled>
                    </td>
                    <td>
                        <input type="radio" name="t22" {{$data['t22'] == 1 ? "checked":""}} value="1" disabled>
                    </td>
                    <td>
                        <input type="radio" name="t22" {{$data['t22'] == 0 ? "checked":""}} value="0" disabled>
                    </td>
                </tr>

                </tbody>
            </table>
        </div>
    </div>

    <h3>ความคิดเห็น / ข้อเสนอแนะอื่นๆ</h3>
    <div class="row">
        <div class="col-xs-12">
            <div class="form-group">
                <textarea name="comment" class="form-control" id="comment" cols="30" disabled rows="10">{{$data['comment']}}</textarea>
            </div>
        </div>
    </div>
@endsection

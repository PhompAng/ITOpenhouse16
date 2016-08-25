@extends('new.index')
@section('content')
    <div class="paper">
        <div class="container">
            <h1 class="light text-center">แบบสอบถาม</h1>
            <h2 class="light text-center">เพื่อสำรวจความคิดเห็นของผู้เข้าร่วมงาน “IT Ladkrabang Open House 2016”</h2>
            <hr>
            <form action="{{URL('/form')}}" method="post">
                {!! csrf_field() !!}

                <h3>คำชี้แจง</h3>
                <ul>
                    <li>การจัดทำแบบสอบถามนี้ เพื่อนำผลการสำรวจมาใช้ในการพัฒนา และปรับปรุง  การจัดงานของคณะในครั้งต่อไป</li>
                    <li>ผู้ตอบแบบสอบถามคือ นักเรียน, อาจารย์แนะแนว, คณะครู – อาจารย์ และบุคคลทั่วไปที่เข้าร่วมงาน</li>
                    <li>โปรดทำเครื่องหมาย ✓ ในช่องระดับความคิดเห็นของแต่ละรายการที่ตรงกับความคิดเห็นของท่านมากที่สุด</li>
                </ul>

                <h3>ข้อมูลทั่วไป</h3>
                <div class="row">
                    <div class="col-md-6 col-xs-12">
                        <div class="form-group">
                            <label for="status">สถานะของท่าน</label>
                            <select class="form-control" name="status" id="status" required>
                                <option value="1">นักเรียนชั้นมัธยมศึกษาปีที่ 1</option>
                                <option value="2">นักเรียนชั้นมัธยมศึกษาปีที่ 2</option>
                                <option value="3">นักเรียนชั้นมัธยมศึกษาปีที่ 3</option>
                                <option value="4">นักเรียนชั้นมัธยมศึกษาปีที่ 4</option>
                                <option value="5">นักเรียนชั้นมัธยมศึกษาปีที่ 5</option>
                                <option value="6">นักเรียนชั้นมัธยมศึกษาปีที่ 6</option>
                                <option value="11">นักศึกษาชั้นปีที่ 1</option>
                                <option value="12">นักศึกษาชั้นปีที่ 2</option>
                                <option value="13">นักศึกษาชั้นปีที่ 3</option>
                                <option value="14">นักศึกษาชั้นปีที่ 4</option>
                                <option value="21">ครู-อาจารย์</option>
                                <option value="31">ผู้ปกครอง</option>
                                <option value="0">บุคคลทั่วไป (ระบุ)</option>
                            </select>
                        </div>
                    </div>
                    <div class="col-md-6 col-xs-12">
                        <div class="form-group">
                            <label for="status_des">&nbsp;</label>
                            <input class="form-control" id="status_des" type="text" name="status_des" disabled>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-xs-12">
                        <div class="form-group">
                            <label for="know">ท่านทราบข่าวสารการจัดงาน “IT Ladkrabang Open House  2016” จาก</label>
                            <br>
                            <input type="checkbox" name="know[]" value="1">
                            เว็บไซต์คณะฯ<br>
                            <input type="checkbox" name="know[]" value="2">
                            Facebook<br>
                            <input type="checkbox" name="know[]" value="3">
                            Twitter<br>
                            <input type="checkbox" name="know[]" value="4">
                            อีเมล<br>
                            <input type="checkbox" name="know[]" value="5">
                            โปสเตอร์<br>
                            <input type="checkbox" name="know[]" value="6">
                            แผ่นพับ<br>
                            <input type="checkbox" name="know[]" value="7">
                            หนังสือเชิญเข้าร่วมงาน<br>
                            <input type="checkbox" name="know[]" value="8">
                            หนังสือประชาสัมพันธ์ของโรงเรียน<br>
                            <div class="row form-inline">
                                <div class="col-md-6 col-xs-12">
                                    <input type="checkbox" name="know[]" value="9">
                                    เว็บไซต์อื่น (ระบุ)
                                    <input class="form-control" id="know_web" type="text" name="know_web" disabled>
                                </div>
                            </div>
                            <div class="row form-inline">
                                <div class="col-md-6 col-xs-12">
                                    <input type="checkbox" name="know[]" value="0">
                                    อื่น ๆ (ระบุ)
                                    <input class="form-control" id="know_des" type="text" name="know_des" disabled>
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
                            <input type="checkbox" name="reason[]" value=1>
                            เพื่อต้องการทราบเกี่ยวกับข้อมูลของหลักสูตรของคณะเทคโนโลยีสารสนเทศ
                            <br>
                            <input type="checkbox" name="reason[]" value=2>
                            เพื่อเข้าร่วมแข่งขันกิจกรรมทางวิชาการ
                            <br>
                            <input type="checkbox" name="reason[]" value=3>
                            เพื่อต้องการทราบเกี่ยวกับแนวทางการศึกษาต่อและการประกอบอาชีพด้านเทคโนโลยีสารสนเทศ
                            <br><input type="checkbox" name="reason[]" value=4>
                            เพื่อชมนิทรรศการผลงานทางวิชาการของของนักศึกษาและอาจารย์คณะเทคโนโลยีสารสนเทศ
                            <br><input type="checkbox" name="reason[]" value=5>
                            เพื่อเยี่ยมชมห้องบรรยาย  ห้องปฏิบัติการคอมพิวเตอร์  สภาพแวดล้อม  และสิ่งอำนวยความสะดวกต่างๆ ภายในคณะ
                            <br><input type="checkbox" name="reason[]" value=6>
                            เพื่อเข้าร่วมฟังการเสวนาหัวข้อ “เรียน IT สายไหน ก้าวไกลในยุคหน้า”
                            <br><input type="checkbox" name="reason[]" value=7>
                            เพื่อเข้าร่วมฟังการเสวนาหัวข้อ  “How to be net-Idol สุขภาพดีไอทีช่วยได้”
                            <br><input type="checkbox" name="reason[]" value=8>
                            เพื่อเข้าร่วมกิจกรรม IT Career Workshop
                            <br><input type="checkbox" name="reason[]" value=9>
                            เพื่อเข้าร่วมกิจกรรม Workshop จากบริษัท Microsoft ประเทศไทย
                            <br><input type="checkbox" name="reason[]" value=10>
                            เพื่อเข้าร่วมกิจกรรม  สัมมนาเตรียมความพร้อมสู่ไอทีลาดกระบัง “ToBeIT@KMITL”
                            <br>
                            <div class="row form-inline">
                                <div class="col-md-6 col-xs-12">
                                    <input type="checkbox" name="reason[]" value=11>
                                    อื่น ๆ (ระบุ)
                                    <input class="form-control" id="reason_des" type="text" name="reason_des" disabled>
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
                                    <select class="form-control" name="interest" id="interest" >
                                        <option value="1">สนใจ เนื่องจาก</option>
                                        <option value="2">ไม่สนใจ เนื่องจากต้องการศึกษาต่อในสาขาวิชาด้านอื่น (ไม่ใช่ไอที)</option>
                                        <option value="0">ไม่สนใจ เนื่องจากต้องการศึกษาต่อหลักสูตรด้านคอมพิวเตอร์ที่อื่น (โปรดระบุ)</option>
                                    </select>
                                </div>
                                <div class="col-md-6 col-xs-12">
                                    <div class="form-group">
                                        <input class="form-control" id="interest_des" type="text" name="interest_des">
                                    </div>
                                </div>
                                <div class="col-xs-12">
                                    <div class="row">
                                        <div class="col-xs-12 col-md-6">
                                            <div class="form-group">
                                                <label for="interest_fac">คณะ/หลักสูตร</label>
                                                <input class="form-control" id="interest_fac" name="interest_fac" type="text">
                                            </div>
                                        </div>
                                        <div class="col-xs-12 col-md-6">
                                            <div class="form-group">
                                                <label for="">สถาบัน/มหาวิทยาลัย</label>
                                                <input class="form-control" id="interest_uni" name="interest_uni" type="text" disabled>
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
                                    <select name="news" id="news" class="form-control">
                                        <option value="1">ต้องการ (ระบุ)</option>
                                        <option value="0">ไม่ต้องการ</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-xs-12">
                                <div class="row">
                                    <div class="col-xs-12 col-md-6">
                                        <div class="form-group">
                                            <label for="news_addr">ที่อยู่</label>
                                            <input class="form-control" id="news_addr" name="news_addr" type="text" required>
                                        </div>
                                    </div>
                                    <div class="col-xs-12 col-md-6">
                                        <div class="form-group">
                                            <label for="news_email">อีเมล</label>
                                            <input class="form-control" id="news_email" name="news_email" type="email" required>
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
                                    <div class="form-group"><input type="radio" name="a1" value="0">1</div>
                                </div>
                                <div class="col-xs-1">
                                    <div class="form-group"><input type="radio" name="a2" value="0">2</div>
                                </div>
                                <div class="col-xs-1">
                                    <div class="form-group"><input type="radio" name="a3" value="0">3</div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-xs-9">
                                    <div class="form-group">
                                        การแสดงนิทรรศการทางวิชาการ
                                    </div>
                                </div>
                                <div class="col-xs-1">
                                    <div class="form-group"><input type="radio" name="a1" value="1">1</div>
                                </div>
                                <div class="col-xs-1">
                                    <div class="form-group"><input type="radio" name="a2" value="1">2</div>
                                </div>
                                <div class="col-xs-1">
                                    <div class="form-group"><input type="radio" name="a3" value="1">3</div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-xs-9">
                                    <div class="form-group">
                                        การแข่งขันทางวิชาการ
                                    </div>
                                </div>
                                <div class="col-xs-1">
                                    <div class="form-group"><input type="radio" name="a1" value="2">1</div>
                                </div>
                                <div class="col-xs-1">
                                    <div class="form-group"><input type="radio" name="a2" value="2">2</div>
                                </div>
                                <div class="col-xs-1">
                                    <div class="form-group"><input type="radio" name="a3" value="2">3</div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-xs-9">
                                    <div class="form-group">
                                        กิจกรรม IT Career Workshop
                                    </div>
                                </div>
                                <div class="col-xs-1">
                                    <div class="form-group"><input type="radio" name="a1" value="3">1</div>
                                </div>
                                <div class="col-xs-1">
                                    <div class="form-group"><input type="radio" name="a2" value="3">2</div>
                                </div>
                                <div class="col-xs-1">
                                    <div class="form-group"><input type="radio" name="a3" value="3">3</div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-xs-9">
                                    <div class="form-group">
                                        การเสวนาหัวข้อ “เรียน IT สายไหน ก้าวไกลในยุคหน้า”
                                    </div>
                                </div>
                                <div class="col-xs-1">
                                    <div class="form-group"><input type="radio" name="a1" value="4">1</div>
                                </div>
                                <div class="col-xs-1">
                                    <div class="form-group"><input type="radio" name="a2" value="4">2</div>
                                </div>
                                <div class="col-xs-1">
                                    <div class="form-group"><input type="radio" name="a3" value="4">3</div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-xs-9">
                                    <div class="form-group">
                                        การเสวนาหัวข้อ  “How to be net-Idol สุขภาพดีไอทีช่วยได้”
                                    </div>
                                </div>
                                <div class="col-xs-1">
                                    <div class="form-group"><input type="radio" name="a1" value="5">1</div>
                                </div>
                                <div class="col-xs-1">
                                    <div class="form-group"><input type="radio" name="a2" value="5">2</div>
                                </div>
                                <div class="col-xs-1">
                                    <div class="form-group"><input type="radio" name="a3" value="5">3</div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-xs-9">
                                    <div class="form-group">
                                        กิจกรรม Workshop จาก บริษัท Microsoft ประเทศไทย
                                    </div>
                                </div>
                                <div class="col-xs-1">
                                    <div class="form-group"><input type="radio" name="a1" value="6">1</div>
                                </div>
                                <div class="col-xs-1">
                                    <div class="form-group"><input type="radio" name="a2" value="6">2</div>
                                </div>
                                <div class="col-xs-1">
                                    <div class="form-group"><input type="radio" name="a3" value="6">3</div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-xs-9">
                                    <div class="form-group">
                                        สัมมนาเตรียมความพร้อมสู่ไอทีลาดกระบัง “ToBeIT@KMITL”
                                    </div>
                                </div>
                                <div class="col-xs-1">
                                    <div class="form-group"><input type="radio" name="a1" value="7">1</div>
                                </div>
                                <div class="col-xs-1">
                                    <div class="form-group"><input type="radio" name="a2" value="7">2</div>
                                </div>
                                <div class="col-xs-1">
                                    <div class="form-group"><input type="radio" name="a3" value="7">3</div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-xs-9">
                                    <div class="form-group">
                                        การเสวนาเรื่อง “ความสำคัญของ IT ในวงการธุรกิจ”
                                    </div>
                                </div>
                                <div class="col-xs-1">
                                    <div class="form-group"><input type="radio" name="a1" value="8">1</div>
                                </div>
                                <div class="col-xs-1">
                                    <div class="form-group"><input type="radio" name="a2" value="8">2</div>
                                </div>
                                <div class="col-xs-1">
                                    <div class="form-group"><input type="radio" name="a3" value="8">3</div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-xs-9">
                                    <div class="form-group">
                                        การเสวนาเรื่อง “ลักษณะงาน IT ในวงการธุรกิจ”
                                    </div>
                                </div>
                                <div class="col-xs-1">
                                    <div class="form-group"><input type="radio" name="a1" value="9">1</div>
                                </div>
                                <div class="col-xs-1">
                                    <div class="form-group"><input type="radio" name="a2" value="9">2</div>
                                </div>
                                <div class="col-xs-1">
                                    <div class="form-group"><input type="radio" name="a3" value="9">3</div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-xs-9">
                                    <div class="form-group">
                                        กิจกรรมชุมนุมของนักศึกษา
                                    </div>
                                </div>
                                <div class="col-xs-1">
                                    <div class="form-group"><input type="radio" name="a1" value="10">1</div>
                                </div>
                                <div class="col-xs-1">
                                    <div class="form-group"><input type="radio" name="a2" value="10">2</div>
                                </div>
                                <div class="col-xs-1">
                                    <div class="form-group"><input type="radio" name="a3" value="10">3</div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-xs-9">
                                    <div class="form-group">
                                        กิจกรรมนำทัวร์คณะ
                                    </div>
                                </div>
                                <div class="col-xs-1">
                                    <div class="form-group"><input type="radio" name="a1" value="11">1</div>
                                </div>
                                <div class="col-xs-1">
                                    <div class="form-group"><input type="radio" name="a2" value="11">2</div>
                                </div>
                                <div class="col-xs-1">
                                    <div class="form-group"><input type="radio" name="a3" value="11">3</div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-xs-9">
                                    <div class="form-group">
                                        การโชว์บูธของบริษัทต่างๆ
                                    </div>
                                </div>
                                <div class="col-xs-1">
                                    <div class="form-group"><input type="radio" name="a1" value="12">1</div>
                                </div>
                                <div class="col-xs-1">
                                    <div class="form-group"><input type="radio" name="a2" value="12">2</div>
                                </div>
                                <div class="col-xs-1">
                                    <div class="form-group"><input type="radio" name="a3" value="12">3</div>
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
                                <td>
                                    <ul>
                                        <li>ด้านการประชาสัมพันธ์</li>
                                    </ul>
                                    1. ความชัดเจนของข้อมูลประชาสัมพันธ์
                                </td>
                                <td>
                                    <input type="radio" name="t2" value="5" required>
                                </td>
                                <td>
                                    <input type="radio" name="t2" value="4" required>
                                </td>
                                <td>
                                    <input type="radio" name="t2" value="3" required>
                                </td>
                                <td>
                                    <input type="radio" name="t2" value="2" required>
                                </td>
                                <td>
                                    <input type="radio" name="t2" value="1" required>
                                </td>
                                <td>
                                    <input type="radio" name="t2" value="0" required>
                                </td>
                            </tr>
                            <tr>
                                <td>2. สื่อประชาสัมพันธ์ที่ได้รับมีความน่าสนใจ สามารถดึงดูดให้เข้าร่วมงาน</td>
                                <td>
                                    <input type="radio" name="t4" value="5" required>
                                </td>
                                <td>
                                    <input type="radio" name="t4" value="4" required>
                                </td>
                                <td>
                                    <input type="radio" name="t4" value="3" required>
                                </td>
                                <td>
                                    <input type="radio" name="t4" value="2" required>
                                </td>
                                <td>
                                    <input type="radio" name="t4" value="1" required>
                                </td>
                                <td>
                                    <input type="radio" name="t4" value="0" required>
                                </td>
                            </tr>
                            <tr>
                                <td>3. การตอบข้อซักถามเกี่ยวกับงานมีความชัดเจนและตรงประเด็น</td>
                                <td>
                                    <input type="radio" name="t5" value="5" required>
                                </td>
                                <td>
                                    <input type="radio" name="t5" value="4" required>
                                </td>
                                <td>
                                    <input type="radio" name="t5" value="3" required>
                                </td>
                                <td>
                                    <input type="radio" name="t5" value="2" required>
                                </td>
                                <td>
                                    <input type="radio" name="t5" value="1" required>
                                </td>
                                <td>
                                    <input type="radio" name="t5" value="0" required>
                                </td>
                            </tr>
                            <tr>
                                <td>4.  ความเหมาะสมของช่วงเวลาการประชาสัมพันธ์</td>
                                <td>
                                    <input type="radio" name="t6" value="5" required>
                                </td>
                                <td>
                                    <input type="radio" name="t6" value="4" required>
                                </td>
                                <td>
                                    <input type="radio" name="t6" value="3" required>
                                </td>
                                <td>
                                    <input type="radio" name="t6" value="2" required>
                                </td>
                                <td>
                                    <input type="radio" name="t6" value="1" required>
                                </td>
                                <td>
                                    <input type="radio" name="t6" value="0" required>
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
                                    <br><input type="radio" name="t7" value="5" required>
                                </td>
                                <td>
                                    <br><input type="radio" name="t7" value="4" required>
                                </td>
                                <td>
                                    <br><input type="radio" name="t7" value="3" required>
                                </td>
                                <td>
                                    <br><input type="radio" name="t7" value="2" required>
                                </td>
                                <td>
                                    <br><input type="radio" name="t7" value="1" required>
                                </td>
                                <td>
                                    <br><input type="radio" name="t7" value="0" required>
                                </td>
                            </tr>
                            <tr>
                                <td>2. การตรงต่อเวลาของเจ้าหน้าที่</td>
                                <td>
                                    <input type="radio" name="t8" value="5" required>
                                </td>
                                <td>
                                    <input type="radio" name="t8" value="4" required>
                                </td>
                                <td>
                                    <input type="radio" name="t8" value="3" required>
                                </td>
                                <td>
                                    <input type="radio" name="t8" value="2" required>
                                </td>
                                <td>
                                    <input type="radio" name="t8" value="1" required>
                                </td>
                                <td>
                                    <input type="radio" name="t8" value="0" required>
                                </td>
                            </tr>
                            <tr>
                                <td>3. ปฏิบัติงานด้วยความกระตือรือร้นและเต็มใจให้บริการ</td>
                                <td>
                                    <input type="radio" name="t9" value="5" required>
                                </td>
                                <td>
                                    <input type="radio" name="t9" value="4" required>
                                </td>
                                <td>
                                    <input type="radio" name="t9" value="3" required>
                                </td>
                                <td>
                                    <input type="radio" name="t9" value="2" required>
                                </td>
                                <td>
                                    <input type="radio" name="t9" value="1" required>
                                </td>
                                <td>
                                    <input type="radio" name="t9" value="0" required>
                                </td>
                            </tr>
                            <tr>
                                <td>4. การใช้กิริยา วาจา สุภาพ เหมาะสม </td>
                                <td>
                                    <input type="radio" name="t10" value="5" required>
                                </td>
                                <td>
                                    <input type="radio" name="t10" value="4" required>
                                </td>
                                <td>
                                    <input type="radio" name="t10" value="3" required>
                                </td>
                                <td>
                                    <input type="radio" name="t10" value="2" required>
                                </td>
                                <td>
                                    <input type="radio" name="t10" value="1" required>
                                </td>
                                <td>
                                    <input type="radio" name="t10" value="0" required>
                                </td>
                            </tr>
                            <tr>
                                <td>5. มีมนุษยสัมพันธ์ที่ดี มีความเป็นมิตรภาพ</td>
                                <td>
                                    <input type="radio" name="t11" value="5" required>
                                </td>
                                <td>
                                    <input type="radio" name="t11" value="4" required>
                                </td>
                                <td>
                                    <input type="radio" name="t11" value="3" required>
                                </td>
                                <td>
                                    <input type="radio" name="t11" value="2" required>
                                </td>
                                <td>
                                    <input type="radio" name="t11" value="1" required>
                                </td>
                                <td>
                                    <input type="radio" name="t11" value="0" required>
                                </td>
                            </tr>
                            <tr>
                                <td>6. ความสามารถในการตอบข้อซักถามในระหว่างงาน</td>
                                <td>
                                    <input type="radio" name="t12" value="5" required>
                                </td>
                                <td>
                                    <input type="radio" name="t12" value="4" required>
                                </td>
                                <td>
                                    <input type="radio" name="t12" value="3" required>
                                </td>
                                <td>
                                    <input type="radio" name="t12" value="2" required>
                                </td>
                                <td>
                                    <input type="radio" name="t12" value="1" required>
                                </td>
                                <td>
                                    <input type="radio" name="t12" value="0" required>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <ul><li>ด้านสิ่งอำนวยความสะดวก</li></ul>
                                    1. ทำเลที่ตั้งของสถานที่จัดงานมีความเหมาะสม
                                </td>
                                <td>
                                    <br>
                                    <input type="radio" name="t13" value="5" required>
                                </td>
                                <td>
                                    <br>
                                    <input type="radio" name="t13" value="4" required>
                                </td>
                                <td>
                                    <br>
                                    <input type="radio" name="t13" value="3" required>
                                </td>
                                <td>
                                    <br>
                                    <input type="radio" name="t13" value="2" required>
                                </td>
                                <td>
                                    <br>
                                    <input type="radio" name="t13" value="1" required>
                                </td>
                                <td>
                                    <br>
                                    <input type="radio" name="t13" value="0" required>
                                </td>
                            </tr>
                            <tr>
                                <td>2. ห้องบรรยายมีความเหมาะสมและทันสมัย</td>
                                <td>
                                    <input type="radio" name="t14" value="5" required>
                                </td>
                                <td>
                                    <input type="radio" name="t14" value="4" required>
                                </td>
                                <td>
                                    <input type="radio" name="t14" value="3" required>
                                </td>
                                <td>
                                    <input type="radio" name="t14" value="2" required>
                                </td>
                                <td>
                                    <input type="radio" name="t14" value="1" required>
                                </td>
                                <td>
                                    <input type="radio" name="t14" value="0" required>
                                </td>
                            </tr>
                            <tr>
                                <td>3. ห้องปฏิบัติการคอมพิวเตอร์มีความเหมาะสมและทันสมัย</td>
                                <td>
                                    <input type="radio" name="t15" value="5" required>
                                </td>
                                <td>
                                    <input type="radio" name="t15" value="4" required>
                                </td>
                                <td>
                                    <input type="radio" name="t15" value="3" required>
                                </td>
                                <td>
                                    <input type="radio" name="t15" value="2" required>
                                </td>
                                <td>
                                    <input type="radio" name="t15" value="1" required>
                                </td>
                                <td>
                                    <input type="radio" name="t15" value="0" required>
                                </td>
                            </tr>
                            <tr>
                                <td>4. ห้องประชุมมีความเหมาะสม</td>
                                <td>
                                    <input type="radio" name="t16" value="5" required>
                                </td>
                                <td>
                                    <input type="radio" name="t16" value="4" required>
                                </td>
                                <td>
                                    <input type="radio" name="t16" value="3" required>
                                </td>
                                <td>
                                    <input type="radio" name="t16" value="2" required>
                                </td>
                                <td>
                                    <input type="radio" name="t16" value="1" required>
                                </td>
                                <td>
                                    <input type="radio" name="t16" value="0" required>
                                </td>
                            </tr>
                            <tr>
                                <td>5. สนับสนุนให้มีการจัดงาน IT Ladkrabang Open House ในครั้งต่อไป</td>
                                <td>
                                    <input type="radio" name="t17" value="5" required>
                                </td>
                                <td>
                                    <input type="radio" name="t17" value="4" required>
                                </td>
                                <td>
                                    <input type="radio" name="t17" value="3" required>
                                </td>
                                <td>
                                    <input type="radio" name="t17" value="2" required>
                                </td>
                                <td>
                                    <input type="radio" name="t17" value="1" required>
                                </td>
                                <td>
                                    <input type="radio" name="t17" value="0" required>
                                </td>
                            </tr>
                            <tr>
                                <td><strong>ความเหมาะสมของนิทรรศการแสดงผลงานทางวิชาการของนักศึกษา</strong></td>
                                <td>
                                    <input type="radio" name="t18" value="5" required>
                                </td>
                                <td>
                                    <input type="radio" name="t18" value="4" required>
                                </td>
                                <td>
                                    <input type="radio" name="t18" value="3" required>
                                </td>
                                <td>
                                    <input type="radio" name="t18" value="2" required>
                                </td>
                                <td>
                                    <input type="radio" name="t18" value="1" required>
                                </td>
                                <td>
                                    <input type="radio" name="t18" value="0" required>
                                </td>
                            </tr>
                            <tr>
                                <td><strong>ความเหมาะสมของกิจกรรมการแข่งขันทางวิชาการ</strong></td>
                                <td>
                                    <input type="radio" name="t19" value="5" required>
                                </td>
                                <td>
                                    <input type="radio" name="t19" value="4" required>
                                </td>
                                <td>
                                    <input type="radio" name="t19" value="3" required>
                                </td>
                                <td>
                                    <input type="radio" name="t19" value="2" required>
                                </td>
                                <td>
                                    <input type="radio" name="t19" value="1" required>
                                </td>
                                <td>
                                    <input type="radio" name="t19" value="0" required>
                                </td>
                            </tr>
                            <tr>
                                <td><strong>วิทยากรโดยรวมมีคุณภาพในการส่งเสริมสร้างความรู้ (กิจกรรม workshop)</strong></td>
                                <td>
                                    <input type="radio" name="t20" value="5" required>
                                </td>
                                <td>
                                    <input type="radio" name="t20" value="4" required>
                                </td>
                                <td>
                                    <input type="radio" name="t20" value="3" required>
                                </td>
                                <td>
                                    <input type="radio" name="t20" value="2" required>
                                </td>
                                <td>
                                    <input type="radio" name="t20" value="1" required>
                                </td>
                                <td>
                                    <input type="radio" name="t20" value="0" required>
                                </td>
                            </tr>
                            <tr>
                                <td><strong>เวลาในการจัดงานมีความเหมาะสม</strong></td>
                                <td>
                                    <input type="radio" name="t21" value="5" required>
                                </td>
                                <td>
                                    <input type="radio" name="t21" value="4" required>
                                </td>
                                <td>
                                    <input type="radio" name="t21" value="3" required>
                                </td>
                                <td>
                                    <input type="radio" name="t21" value="2" required>
                                </td>
                                <td>
                                    <input type="radio" name="t21" value="1" required>
                                </td>
                                <td>
                                    <input type="radio" name="t21" value="0" required>
                                </td>
                            </tr>
                            <tr>
                                <td><strong>ความพึงพอใจโดยรวมของการจัดงานครั้งนี้</strong></td>
                                <td>
                                    <input type="radio" name="t22" value="5" required>
                                </td>
                                <td>
                                    <input type="radio" name="t22" value="4" required>
                                </td>
                                <td>
                                    <input type="radio" name="t22" value="3" required>
                                </td>
                                <td>
                                    <input type="radio" name="t22" value="2" required>
                                </td>
                                <td>
                                    <input type="radio" name="t22" value="1" required>
                                </td>
                                <td>
                                    <input type="radio" name="t22" value="0" required>
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
                            <textarea name="comment" class="form-control" id="comment" cols="30" rows="10"></textarea>
                        </div>
                    </div>
                </div>

                <div class="text-center">
                    <button type="submit" class="btn btn-primary btn-lg">Submit</button>
                </div>

            </form>
        </div>
    </div>
@endsection
@section('script')
    <script>
        $("#status").change(function() {
            if ($("#status").val() == 0) {
                $("#status_des").attr("disabled", false);
            } else {
                $("#status_des").val("");
                $("#status_des").attr("disabled", true);
            }
        });
        $('input[name^="know"]').change(function() {
            var checkboxValues = [];
            $('input[name^="know"]:checked').map(function() {
                checkboxValues.push($(this).val());
            });
            if ($.inArray("9", checkboxValues) != -1) {
                $("#know_web").attr("disabled", false);
            } else {
                $("#know_web").val("");
                $("#know_web").attr("disabled", true);
            }
            if ($.inArray("0", checkboxValues) != -1) {
                $("#know_des").attr("disabled", false);
            } else {
                $("#know_des").val("");
                $("#know_des").attr("disabled", true);
            }
        });
        $('input[name^="reason"]').change(function() {
            var checkboxValues = [];
            $('input[name^="reason"]:checked').map(function() {
                checkboxValues.push($(this).val());
            });
            if ($.inArray("11", checkboxValues) != -1) {
                $("#reason_des").attr("disabled", false);
            } else {
                $("#reason_des").val("");
                $("#reason_des").attr("disabled", true);
            }
        });
        $("#interest").change(function() {
            if ($("#interest").val() == 1) {
                $("#interest_des").attr("disabled", false);
                $("#interest_fac").attr("disabled", false);
                $("#interest_uni").val("");
                $("#interest_uni").attr("disabled", true);
            } else if ($("#interest").val() == 0) {
                $("#interest_des").val("");
                $("#interest_des").attr("disabled", true);
                $("#interest_fac").attr("disabled", false);
                $("#interest_uni").attr("disabled", false);
            } else {
                $("#interest_des").val("");
                $("#interest_fac").val("");
                $("#interest_uni").val("");
                $("#interest_des").attr("disabled", true);
                $("#interest_fac").attr("disabled", true);
                $("#interest_uni").attr("disabled", true);
            }
        });
        $("#news").change(function () {
            if ($("#news").val() == 0) {
                $("#news_addr").val("");
                $("#news_email").val("");
                $("#news_addr").attr("disabled", true);
                $("#news_email").attr("disabled", true);
            } else {
                $("#news_addr").attr("disabled", false);
                $("#news_email").attr("disabled", false);
            }
        });
    </script>
@endsection

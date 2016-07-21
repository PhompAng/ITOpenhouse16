@extends('main.index')
@section('main')
    <div class="container main">
        <div class="title">
            <h1>การเดินทางโดยรถไฟ/รถไฟฟ้า</h1>
        </div>
        <div class="content">
            <h2>แผนที่คณะเทคโนโลยีสารสนเทศ</h2>
            <div class="embed-responsive embed-responsive-16by9">
                <iframe width="425" height="350" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="https://www.openstreetmap.org/export/embed.html?bbox=100.78014135360718%2C13.72955708320629%2C100.78256607055663%2C13.732087077791387&amp;layer=mapnik" style="border: 1px solid black"></iframe><br/><small><a href="http://www.openstreetmap.org/#map=19/13.73082/100.78135">View Larger Map</a></small>
            </div>
            <br>
            <dl>
                <dt>ทางรถไฟฟ้า</dt>
                <dd>รถไฟฟ้าสายท่าอากาศยานสุวรรณภูมิจากสถานีพญาไท (SA City Line) ผ่านสถานีราชปรารภ มักกะสัน รามคำแหง หัวหมาก บ้านทับช้าง ใช้เวลาประมาณ 30 นาที ค่าโดยสาร 15-45 บาท ลงที่สถานีลาดกระบัง แล้วต่อรถไฟที่สถานีรถไฟลาดกระบัง<br>
                    ข้อมูลเพิ่มเติม : <a href="http://airportraillink.railway.co.th/" target="_blank">http://airportraillink.railway.co.th</a></dd>
                <dd>&nbsp;</dd>
                <dt>ทางรถไฟ</dt>
                <dd>สายตะวันออก จาก สถานีกรุงเทพฯ (หัวลำโพง) อุรุพงษ์ พญาไท มักกะสัน คลองตัน หัวหมาก บ้านทับช้าง ลงที่ป้าย หยุดรถไฟพระจอมเกล้าหรือสถานีหัวตะเข้ แนะนำให้มาขบวน 275 และ 283 ออกจากหัวลำโพง 05.55 น. และ 06.55 น. ตามลำดับ (ตรวจสอบตารางการเดินรถไฟสายตะวันออก <a href="http://portal.rotfaithai.com/download/schedules/HTML/east_go.html" target="_blank">เที่ยวไป</a>, <a href="http://portal.rotfaithai.com/download/schedules/HTML/east_back.html" target="_blank">เที่ยวกลับ</a>)<br>
                    <br>
                    สายชานเมือง (รังสิต-หัวตะเข้) สถานีต้นทางรังสิต ผ่านเส้นทางดอนเมือง ตลาดใหม่ดอนเมือง การเคหะกม.19 หลักสี่ ทุ่งสองห้อง นิคมรถไฟกม.11 บางซื่อ สามเสน มักกะสัน อโศก คลองตัน สุขุมวิท 71 หัวหมาก บ้านทับช้าง ซอยวัดลานบุญ ปลายทางป้ายหยุดรถไฟพระจอมเกล้า หรือสถานีหัวตะเข้ รถขบวนนี้ออกจากรังสิตเวลา 05.35 น. ถึงหัวตะเข้เวลา 07.40 น. โดยประมาณ (รถขบวนนี้ไม่เข้าหัวลำโพง)<br>
                    หมายเหตุ : รถขบวนนี้ไม่มีวิ่งในวันเสาร์-อาทิตย์ และวันหยุดราชการ</dd>
            </dl>
        </div>
    </div>

    <script>
        document.body.style.backgroundImage = "none";
        document.body.style.backgroundColor = "#91A8d0";
    </script>
@endsection

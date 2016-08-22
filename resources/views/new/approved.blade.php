@extends('new.index')
@section('content')
    <div class="paper">
        <div class="container">
            <h1 class="light text-center">ประกาศรายชื่อผู้มีสิทธิ์เข้าร่วมการแข่งขันทางวิชาการ</h1>
            <h2 class="light text-center">{{$type}}</h2>
            <hr>
            <table class="table">
                <thead>
                    <tr>
                        <th>ชื่อทีม</th>
                        <th>ชื่อสถานศึกษา</th>
                        <th>จังหวัด</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($datas as $data)
                        <tr>
                            <td>{{$data['team_name']}}</td>
                            <td>{{$data['school']}}</td>
                            <td>{{$data['school_province']}}</td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
            @if($type == "การแข่งขันการนำเสนอแนวคิดโครงงานไอที")
            <h2>ข้อแนะนำสำหรับวันนำเสนอ</h2>
            <h3>การนำเสนอ</h3>
            <ul>
                <li>กรุณามาพร้อมกันไม่เกินเวลา 9.00 น. ของวันที่ 26 สิงหาคม 2559 โดยโต้ะลงทะเบียนจะเปิดเวลา 8.30 น. ที่หน้าห้อง 224 อาคารคณะเทคโนโลยีสารสนเทศ สถานบันเทคโนโลยีพระจอมเกล้าเจ้าคุณทหารลาดกระบัง
                </li>
                <li>ลำดับของการนำเสนอจะประกาศเวลา 9.00 น.</li>
                <li>เวลาการนำเสนอกลุ่มละไม่เกิน 18 นาที <strong>(กรุณารักษาเวลาอย่างเคร่งครัด)</strong> </li>
                <li>หลังจากนำเสนอจบคณะกรรมการจะถามเป็นเวลากลุ่มละ 7 นาที</li>
                <li>รวมเวลากลุ่มละประมาณ 25 นาที</li>
            </ul>
            <h3>หัวข้อสำคัญที่ควรนำเสนอ</h3>
            <ul>
                <li>ความเป็นมาและความสำคัญ – ปัญหาที่คุณสนใจคืออะไร สภาพปัจจุบันไม่ดีอย่างไร พร้อมทั้งอธิบายถึงความสำคัญของปัญหา</li>
                <li>วัตถุประสงค์ของโครงงาน – อธิบายวัตถุประสงค์ของโครงงานว่าจะเข้ามาช่วยแก้ปัญหาได้อย่างไร</li>
                <li>ประโยชน์ที่คาดว่าผู้ใช้งานจะได้รับ</li>
                <li>ขอบเขตของโครงงาน – กำหนดขอบเขตของโครงงานให้จำเพาะเจาะจง ว่าสิ่งใดที่เกี่ยวข้องและสิ่งใดที่ไม่เกี่ยวข้อง ทำอะไรได้บ้างและไม่สามารถทำอะไรได้บ้าง</li>
                <li>Business model canvas</li>
                <li>เทคโนโลยีที่เกี่ยวข้อง – การที่จะทำให้โครงงานนี้ประสบความสำเร็จได้จะต้องใช้ทฤษฎี แนวคิดทางเทคโนโลยี เทคโนโลยี เทคนิคอะไรบ้าง หรืออาจจะต้องใช้ฮาร์ดแวร์หรือซอร์ฟแวร์ประเภทไหนที่จำเป็นสำหรับการทำงานของผลิตภัณฑ์ที่นำเสนอ</li>
                <li>Demo หรือ prototype หรือ วิดีโอแนะนำผลิตภัณฑ์ หรืออะไรก็ได้แล้วแต่ความคิดสร้างสรรค์ของแต่ละกลุ่ม (optional)</li>
            </ul>
            <h3>คำถามที่น่าสนใจ</h3>
            <ol>
                <li>
                    วัตถุประสงค์ของการแข่งขันนำเสนอแนวคิดโครงงาน IT คืออะไร?
                    <br>
                    <strong>ตอบ</strong> ทางคณะต้องการจำลองเหตุการณ์ เหมือนคุณและเพื่อนๆ มีไอเดียดีๆ ซึ่งมีการนำเทคโนโลยีสารสนเทศ (IT) ที่ใช้กันในชีวิตประจำวันมาสร้างสินค้าหรือบริการใหม่ๆ และอยากจะตั้งบริษัท IT startup และต้องหาเงินทุนโดยการนำไอเดียของคุณมานำเสนอให้คณะกรรมการ (คณาจารย์ผู้ทรงคุณวุฒิของคณะเทคโนโลยีสารสนเทศ, สถาบันเทคโนโลยีพระจอมเกล้าเจ้าคุณทหารลาดกระบัง) อยากที่จะลงทุนกับกับไอเดียของคุณ
                </li>
                <li>
                    ฉันจำเป็นจะต้องเขียนเว็บไซต์ แอปพลิเคชัน หรือสร้างสิ่งประดิษฐ์ออกมาจนสมบูรณ์ เพื่อนำมานำเสนอหรือไม่?
                    <br>
                    <strong>ตอบ</strong> ไม่จำเป็นครับ คณะกรรมการจะเน้นไปที่ 4 ด้านด้วยกัน <strong>(1) ความน่าสนใจของแนวคิด (2) ความเป็นไปได้ในด้านการทำรายได้ และ (3) ความเป็นไปได้ในเชิงเทคโนโลยี (4) บุคลิกลักษณะและความสามารถของตัวผู้นำเสนอ (ทุกคนในทีมควรจะนำเสนอ)</strong>  เป็นหลัก การมีชิ้นงานมานำเสนอนั้น <strong>ไม่มีความจำเป็น</strong>แต่อย่างใด (ในรอบนำเสนอนี้ผู้เข้าแข่งขัน<strong>ไม่จำเป็น</strong> จะต้องมีผลงานมานำเสนอ แต่ถ้ามีแบบจำลอง หรือ prototype ในกรณีที่เป็นสิ่งประดิษฐ์ หรือ mockup design ของหน้าจอที่สำคัญๆ ในกรณีที่เป็นซอฟต์แวร์  สามารถนำมาใช้ประกอบการนำเสนอผลงานได้ ซึ่งจะได้รับการพิจารณาเป็นพิเศษจากทางคณะกรรมการ)

                </li>
            </ol>
            @endif
        </div>
    </div>
@endsection

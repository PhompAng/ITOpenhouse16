@extends('register.regis_page')
@section('regisForm')
    <div class="container regis">
        <section class="regis-header">
            <h1 class="text-center">การแข่งขันกีฬาอิเล็กทรอนิกส์ (E-Sports)</h1>
            <h1 class="text-center">IT LADKRABANG OPENHOUSE 2016</h1>
            <h2 class="text-center"><small>คณะเทคโนโลยีสารสนเทศ สถาบันเทคโนโลยีพระจอมเกล้าเจ้าคุณทหารลาดกระบัง</small></h2>
            <h2 class="text-center"><small>วันที่ 26 สิงหาคม 2559</small></h2>
        </section>
        <section class="regis-form">
            <h3>วัตถุประสงค์</h3>
            <ul>
                <li>เพื่อให้ผู้เข้าแข่งขันได้มีโอกาสแสดงความสามารถในกีฬา E-sport</li>
                <li>เพื่อเป็นการฝีกการทำงานร่วมกันเป็นทีม</li>
                <li>เพื่อสร้างแรงบันดาลใจให้ผู้เข้าชมอยากทำการพัฒนาและมีส่วนร่วมในการเล่นเกมให้เกิดประโยชน์</li>
            </ul>

            <h3>การสมัครเข้าแข่งขัน</h3>
            <ul>
                <li>ผู้สมัครจะต้องเป็นนักเรียนที่กำลังศึกษาอยู่ในระดับชั้นมัธยมศึกษาตอนปลายเพื่อเป็นตัวแทนจากโรงเรียน
                    ในการเข้าแข่งขัน</li>
                <li>การแข่งขันจะเป็นการแข่งขันในรูปแบบทีม <strong> ทีมละ 7 คน (ตัวจริง 5 คน ตัวสำรอง 2 คน)</strong> ส่งได้โรงเรียนละ 2 ทีม</li>
                <li>ผู้เข้าร่วมการแข่งขันจะต้องกดเข้ากลุ่ม <a href="https://www.facebook.com/groups/302350780107914/">FB:IT@KMITL OPENHOUSE2016 Dota2 Tournament </a>เพื่อ
                    รับทราบข้อมูลที่จำเป็นและสายการแข่งขัน</li>
                <li>กรอกรายละเอียดใน <a href="http://openhouse.it.kmitl.ac.th/2016/register/competition/esport">openhouse.it.kmitl.ac.th/2016/register/competition/esport</a> ให้ครบถ้วน จากนั้นให้ Print ใบสมัครแข่งขัน ลงลายมือชื่อรับรองจากอาจารย์ผู้ควบคุม</li>
                ( รับเฉพาะใบสมัครที่กรอกข้อมูลและ Print จากระบบเท่านั้น หากนอกเหนือจากนี้จะถือว่าการสมัครแข่งขันไม่สมบูรณ์ ) แล้วส่งใบสมัครมาทาง<u>ช่องทางใดช่องทางหนึ่ง</u>ต่อไปนี้</li>
                </li>
                <ul>
                    <li>1. ทางโทรสารหมายเลข 0-2723-4946</li>
                    <li>2. ทางอีเมล ที่ <a href="mailto:http://openhouse@it.kmitl.ac.th">openhouse@it.kmitl.ac.th</a></li>
                </ul>
                <li>ชื่อไฟล์ ZIP ใช้ว่า “เอกสารสมัครแข่งขัน E-Sports (ชื่อย่อย รร. ภาษาไทย)/(ชื่อ Team)”</li>
                <li>เริ่มรับสมัครตั้งแต่วันที่ 11 กรกฎาคม 2559 ถึงวันที่ 1 สิงหาคม 2559</li>
                <li>หากกรอกข้อมูลในใบสมัครไม่ครบถ้วน หรือไม่มีการแนบเอกสารสมัครส่งมา ทางกรรมการ การแข่งขันขอ
                    <strong>ตัดสิทธิการเข้าร่วมการแข่งขัน</strong>ของทีมที่ไม่ทำตามเงื่อนไขการสมัคร <br>
                    โดยไม่ต้องแจ้งล่วงหน้า
            </ul>

            <h3>รูปแบบและกติกาการเข้าแข่งขัน</h3>
            <ul>
                <li>แข่งขันเกม DOTA2 โหมดที่ใช้แข่งขัน:CAPTAIN MODE เวอร์ชั่นที่ใช้แข่ง: Tournament</li>
                <li>เป็นการแข่งขันแบบ single elimination (แพ้ตกรอบ)</li>
                <li>ทุกรอบเป็นการแข่งแบบ Best of One(เกมเดียว) ส่วนรอบชิงจะเป็น Best of Three(สองในสาม)</li>
                <li>การกดหยุดเกม: สามารถกดหยุดเกมได้ฝั่งละ 3 ครั้ง ครั้งละไม่เกิน 5 นาที</li>
                <li>ทีมที่ชนะจะต้องส่งผลการแข่งขันก่อนเวลา 7:00 น. ของวันถัดไป<strong>หากไม่มีการนำผลการแข่งขันมาส่ง
                    ภายในเวลาที่กำหนดจะปรับแพ้ทั้งสองทีม</strong></li>
                <li>จะมีการอัพเดทตารางการแข่งขันตอน 12:00 น.</li>
                <li>ภายในห้องแข่งขันจะมีได้แค่ผู้เล่นทั้งหมด 10 คนและกรรมการเท่านั้น (ห้ามมี Coachอยู่ในห้องแข่ง)</li>
                <li>ทั้งสองทีมนัดเวลาแข่งขันกันเอง หากนัดเวลาแข่งขันไม่ลงตัวให้ใช้เวลา 20:30 น. เป็นเวลาหลัก</li>
            </ul>

            <h3>ข้อห้าม</h3>
            <ul>
                <li>ห้ามไม่ให้มีการใช้ข้อผิดพลาดของเกม(Bug) ในการแข่งขัน</li>
                <li>ห้ามมีCoach อยู่ในห้องแข่งขัน</li>
                <li>ห้ามพิมพ์คำหยาบคายหรือคำที่มีความหมายถากถางที่ไม่แสดงถึงความมีน้ำใจนักกีฬาในการแข่งขัน
                    หากพบ<strong>ปรับแพ้ทันที</strong></li>
                <li>ห้ามตั้งชื่อไม่สุภาพใข้คำหยาบคายหรือคำด่าทั้งภาษาไทยหรืออังกฤษ หากพบ<strong>ปรับแพ้ทันที</strong></li>
                <li>ห้ามปรับแต่งภาพผลการแข่งขัน หากพบ<strong>ปรับแพ้ทันที</strong></li>
            </ul>

            <h3>การประท้วงการแข่งขัน</h3>
            <ul>
                <li>ต้องทำก่อนเริ่มการแข่งขัน (ถ้าเริ่มเกมไปแล้วจะไม่สามารถประท้วงในภายหลังได้)</li>
            </ul>

            <h3>วันเวลาและสถานที่จัดการแข่งขัน</h3>
            <ul>
                <li>ประกาศสายการแข่งภายในวันที่ 6 สิงหาคม 2559</li>
                <li>เริ่มการแข่งขันตั้งแต่วันที่ 8 สิงหาคม 2559 เวลา 20:30 น.</li>
                <li>เป็นการแข่งขันออนไลน์จนกว่าจะถึงรอบชิงชนะเลิศ</li>
                <li>รอบชิงชนะเลิศการแข่งขันจะจัดขึ้นวันที่ 26 สิงหาคม 2559 ตั้งแต่เวลา 9:00 น. จนถึงเวลา 13:00 น.</li>
                <li>รอบชิงชนะเลิศจะมาแข่งขันที่คณะเทคโนโลยีสารสนเทศ สถาบันเทคโนโลยีพระจอมเกล้าเจ้าคุณทหารลาดกระบัง</li>
                <li><strong>ในวันแข่งขันผู้เข้าแข่งขันจะต้องแต่งกายชุดนักเรียนตามรูปแบบของโรงเรียนให้ถูกระเบียบพร้อมทั้ง
                    นำบัตรประจำตัวนักเรียนมาด้วย</strong></li>
                <li>การมอบของรางวัลจะมอบในวันที่ 26 สิงหาคม 2559 เวลา 16:00 น.</li>
            </ul>

            <h3>รางวัล</h3>
            <ul>
                <li>รางวัลชนะเลิศ</li>
                <ul>
                    <li>ได้รับใบประกาศนียบัตร ทุนการศีกษา ทีมละ 4,000 บาท</li>
                </ul>
                <li>รางวัลรองชนะเลิศ</li>
                <ul>
                    <li>ได้รับใบประกาศนียบัตร ทุนการศึกษา ทีมละ 2,000 บาท</li>
                </ul>
            </ul>

            <h3>หมายเหตุ</h3>
            <strong>***การตัดสินของกรรมการถือเป็นที่สิ้นสุดและทางกรรมการสามารถเปลี่ยนกติกาการแข่งขันได้ตามความเหมาะสมโดยไม่ต้องแจ้งล่วงหน้า</strong>
            <br><br>
            <a href="{{URL::to('/register/competition/esport/create')}}" class="btn btn-primary btn-block regis-btn">สมัครเข้าแข่งขัน</a>
        </section>
    </div>
@endsection

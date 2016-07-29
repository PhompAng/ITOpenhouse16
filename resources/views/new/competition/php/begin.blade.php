@extends('new.index')
@section('content')
    <div class="paper">
        <div class="container">
            <h1 class="light text-center">การแข่งขันพัฒนาเว็บไซต์ด้วย PHP และ JavaScript</h1>
            <hr>
            <h3>วัตถุประสงค์</h3>
            <ul>
                <li>เพื่อสนับสนุน - ส่งเสริมเยาวชนให้มีความรู้ความสามารถในการพัฒนาเว็บไซต์และทักษะการเขียนโปรแกรมด้วยภาษา PHP</li>
                <li>เพื่อเป็นการเผยแพร่การใช้ภาษา PHP ซึ่งเป็นโอเพนซอร์สไปใช้งานให้มากขึ้น</li>
            </ul>
            <h3>การเข้าแข่งขัน</h3>
            <ul>
                <li>ผู้สมัครต้องเป็นนักเรียนระดับชั้นมัธยมศึกษาตอนปลาย และเป็นตัวแทนจากโรงเรียนส่งเข้าแข่งขัน</li>
                <li>สมัครเป็นทีม <strong class="red">ทีมละไม่เกิน 2 คน</strong> โดยแต่ละโรงเรียนสามารถเสนอทีมเข้าแข่งขันได้ 1 ทีมเท่านั้น</li>
                <li>รับสมัครผู้เข้าแข่งขันจำนวน 10 ทีม โดยให้สิทธิ์ผู้สมัครตามลำดับก่อนหลังของการสมัคร</li>
                <li>หากมีผู้สมัครเข้าร่วมการแข่งขันเป็นจำนวนมาก สิทธิ์ในการเข้าร่วมการแข่งขันจะพิจารณาจากลำดับของทีมที่ส่งเข้ามา โดยทีมแรกของแต่ละโรงเรียนจะได้รับการพิจารณาก่อนและ<strong class="red">หากมีที่นั่งเหลือ</strong>ก็จะพิจารณาทีมในลำดับต่อไปของแต่ละโรงเรียน</li>
                <li>กรอกข้อมูลลงใน <a href="http://openhouse.it.kmitl.ac.th/2016/register/competition/php">http://openhouse.it.kmitl.ac.th/2016/register/competition/php</a> ให้ครบถ้วนและถูกต้องจากนั้นให้ปริ๊นท์ใบสมัครการแข่งขันพร้อมลงลายมือชื่อรับรองจากอาจารย์ผู้ควบคุมทีม (<strong class="red">รับเฉพาะใบสมัครที่กรอกข้อมูลและปริ๊นท์จากระบบเท่านั้น หากนอกเหนือจากนี้จะถือว่าการสมัครแข่งขันไม่สมบูรณ์</strong>) แล้วส่งใบสมัครมาทาง<strong class="red">ช่องทางใดช่องทางหนึ่ง</strong>ดังต่อไปนี้</li>
                <ul>
                    <li>ทางโทรสารหมายเลข 0-2723- 4946</li>
                    <li>ทางอีเมลที่ <a href="mailto:openhouse@it.kmitl.ac.th">openhouse@it.kmitl.ac.th</a></li>
                </ul>
                <li>รับสมัครตั้งแต่วันที่ 11 กรกฎาคม – 8 สิงหาคม 2559</li>
                <li>คณะกรรมการประกาศรายชื่อทีมเข้าแข่งขันวันศุกร์ที่ 19 สิงหาคม 2559 ทางเว็บไซต์ <a href="http://openhouse.it.kmitl.ac.th">http://openhouse.it.kmitl.ac.th</a></li>
            </ul>
            <h3>รูปแบบและกติกาการแข่งขัน</h3>
            <ul>
                <li>เวลาที่ใช้ในการ<strong class="red">แข่งขัน 3 ชั่วโมง</strong> (09:00 – 12:00 น.)</li>
                <li>ฮาร์ดแวร์และซอฟต์แวร์ที่ใช้ในการแข่งขัน ผู้จัดการแข่งขันจัดเตรียมไว้ให้ดังนี้</li>
                <ul>
                    <li>ฮาร์ดแวร์</li>
                    <ul>
                        <li>PC: Windows 7 Professional</li>
                    </ul>
                    <li>ซอฟต์แวร์</li>
                    <ul>
                        <li>Adobe Dreamweaver</li>
                        <li>Adobe Photoshop</li>
                        <li>Adobe Flash</li>
                        <li>Notepad++</li>
                        <li>EditPlus</li>
                        <li>Visual Studio Code</li>
                        <li>Sublime Text</li>
                        <li>Atom</li>
                        <li>XAMPP 5.6.21 (Apache, MySQL, PHP, phpMyAdmin)</li>
                        <li>Framework : jQuery 1.12.4, jQuery UI 1.11.4 (All Components), Bootstrap 3.3.6</li>
                        <li>PHP Document (HTML Help file)</li>
                    </ul>
                </ul>
                <li>ให้ผู้แข่งขันพัฒนาเว็บไซต์ด้วยภาษา PHP ให้มีรายละเอียดตามที่โจทย์กำหนดและต้องสามารถรับข้อมูลจากผู้ใช้งานได้จริง มีการออกแบบและเชื่อมต่อกับฐานข้อมูลรวมถึงออกแบบหน้าตาของเว็บไซต์ให้มีความสวยงามและเหมาะสม</li>
                <li>สามารถใช้ JavaScript และ AJAX ได้</li>
                <li>ผู้แข่งขันสามารถเพิ่มเติมเนื้อหาที่เหมาะสมนอกเหนือจากที่โจทย์ต้องการได้ตามสมควร</li>
                <li>ให้ผู้เข้าแข่งขัน <strong class="red">จัดทำเอกสาร</strong> สำหรับอธิบายผลงานของตนเอง (<strong class="red">ภายในเวลาที่ทำการแข่งขัน</strong>)</li>
                <li>อนุญาตให้ผู้เข้าแข่งขันนำหนังสือ หรือตำราต่างๆ ที่เกี่ยวข้องเข้าในสถานที่แข่งขันได้</li>
                <li><strong class="red">ไม่อนุญาต</strong>ให้นำโค้ดสำเร็จรูป เครื่องมือใดๆ หรือโปรแกรมอื่นๆ รวมถึงอุปกรณ์จัดเก็บข้อมูลต่างๆ เช่น แฟลชไดรฟ์, ฮาร์ดดิสก์, iPod, เมมโมรีการ์ด,โทรศัพท์มือถือหรือแท็บเล็ตเข้าในสถานที่แข่งขัน</li>
                <li><strong class="red">ไม่อนุญาต</strong>ให้ทำการเชื่อมต่ออินเทอร์เน็ตหรือใช้อินเทอร์เน็ตระหว่างการแข่งขัน</li>
                <li>ขณะทำการแข่งขัน <strong class="red">ไม่อนุญาต</strong>ให้ผู้เข้าแข่งขันออกนอกสถานที่แข่งขัน หากมีความจำเป็นให้คณะกรรมการพิจารณาอนุญาตเป็นรายๆ ไป</li>
                <li>การตัดสินผลงาน จะให้ผู้เข้าแข่งขันนำเสนอผลงานของตนเองต่อคณะกรรมการ และผู้เข้าแข่งขันทีมอื่น โดย<strong class="red">ให้เวลาทีมละ 5 – 10 นาที</strong></li>
                <li><strong class="red">***หากพบว่ามีการกระทำทุจริตหรือการกระทำอันไม่เป็นไปตามกติกาที่กำหนดไว้ ผู้แข่งขันนั้นจะถูกตัดสิทธิ์และออกจากการแข่งขันทันที</strong></li>
                <li><strong class="red">ผลการตัดสินของคณะกรรมการจัดการแข่งขันถือเป็นที่สิ้นสุด</strong></li>
            </ul>
            <h3>วันเวลาและสถานที่จัดการแข่งขัน</h3>
            <ul>
                <li>การแข่งขันจะจัดขึ้นในวันศุกร์ที่ 26 สิงหาคม 2559 ตั้งแต่เวลา 9.00 น. เป็นต้นไป</li>
                <li>ผู้เข้าแข่งขันจะต้องมารายงานตัว ณ จุดลงทะเบียน<strong class="red">ก่อนเวลาแข่งขัน 30 นาที</strong></li>
                <li>สถานที่จัดการแข่งขัน</li>
                <ul>
                    <li>ห้องปฏิบัติการคอมพิวเตอร์ 207 ชั้น 2 อาคารเรียนรวมและปฏิบัติการ คณะเทคโนโลยีสารสนเทศ สถาบันเทคโนโลยีพระจอมเกล้าเจ้าคุณทหารลาดกระบัง</li>
                </ul>
                <li>หลังแข่งขันเสร็จจะมีการนำเสนอผลงานและตัดสิน ณ ห้องที่ทำการแข่งขันตั้งแต่เวลา 13.30 น. ขอให้ผู้แข่งขันมารอนำเสนอผลงานก่อนเริ่มการตัดสิน 15 นาที</li>
                <li><strong class="red">ในวันแข่งขัน ผู้เข้าแข่งขันจะต้องแต่งกายชุดนักเรียนตามรูปแบบของโรงเรียนให้ถูกระเบียบ พร้อมทั้งนำบัตรประจำตัวนักเรียนมาด้วย</strong></li>
                <li>ประกาศผลการแข่งขันและมอบรางวัลเวลาประมาณ 16.00 น. ของวันที่ทำการแข่งขัน</li>
            </ul>
            <div class="text-center"><a href="{{URL::to('/register/competition/php/create')}}" class="btn btn-primary btn-lg">สมัครแข่งขัน</a></div>
        </div>
    </div>
@endsection

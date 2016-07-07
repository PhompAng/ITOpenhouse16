@extends('register.regis_page')
@section('regisForm')
    <div class="container regis">
        <section class="regis-header">
            <h1 class="text-center">การแข่งขันความปลอดภัยของระบบคอมพิวเตอร์</h1>
            <h1 class="text-center">IT LADKRABANG OPENHOUSE 2016</h1>
            <h2 class="text-center"><small>คณะเทคโนโลยีสารสนเทศ สถาบันเทคโนโลยีพระจอมเกล้าเจ้าคุณทหารลาดกระบัง</small></h2>
            <h2 class="text-center"><small>วันที่ 26 สิงหาคม 2559</small></h2>
        </section>
        <section class="regis-form">
            <h3>วัตถุประสงค์</h3>
            <ul>
                <li>เพื่อสนับสนุนและส่งเสริมเยาวชนให้มีความรู้ ความสามารถ และรู้ทันภัยคุกคามในอินเทอร์เน็ต
                    และในระบบคอมพิวเตอร์</li>
                <li>เพื่อให้เยาวชนสามารถนำความรู้ไปใช้ให้เกิดประโยชน์ในด้านการป้องกันตนเองและผู้อื่นจากภัย
                    คุกคามในอินเทอร์เน็ตและในระบบคอมพิวเตอร์ได้</li>
                <li>เพื่อเสริมสร้างจริยธรรมในการนำความรู้ไปใช้ในทางที่ถูกต้อง</li>
            </ul>

            <h3>การสมัครเข้าแข่งขัน</h3>
            <ul>
                <li>ผู้สมัครต้องเป็นนักเรียนที่กำลังศึกษาอยู่ในระดับชั้นมัธยมศึกษาตอนปลายเพื่อเป็นตัวแทนจากโรงเรียนในการเข้าแข่งขัน</li>
                <li>การแข่งขันจะแข่งขันในรูปแบบทีม <strong>ทีมละ 2 คน</strong> แต่ละโรงเรียนส่งได้ไม่เกิน 2 ทีม</li>
                <li>ในการแข่งขันจะจำกัดจำนวนทีมไว้ที่ 15 ทีม</li>
                <li>หากผู้สมัครเข้าร่วมแข่งขันเป็นจำนวนมาก สิทธิ์ในการเข้าร่วมแข่งขันจะพิจารณาจากการตอบคำถามในการกรอกใบสมัคร</li>
                <li>เมื่อผู้เข้าแข่งขันเข้าไปทำโจทย์ตามที่ให้มาดังนี <a href="https://52.77.254.254">https://52.77.254.254</a> เมื่อถึงวันที่ 5 สิงหาคม 2559
                    แล้ว ให้บอกชื่อทีม และระบุด้วยว่าอยู่ในอันดับที่เท่าใด <br>แต่ในกรณีที่ทำเสร็จครบทุกข้อก่อนกำหนด
                    สามารถส่งใบสมัครได้ทันทีโดยที่ไม่ต้องรอให้ถึงวันที่ 5 สิงหาคม พร้อมทั้งระบุชื่อทีมมาในคำตอบนี้ด้วย</li>
                <li>กรอกรายละเอียดใน <a href="#">https://openhouse.it.kmitl.ac.th/register/competition/network/</a> ให้ครบถ้วน
                    และตอบคำถามให้ครบถ้วน จากนั้นให้ Print ใบสมัครแข่งขัน <br> ลงลายมือชื่อรับรองจากอาจารย์ผู้ควบคุม
                    (<strong>รับเฉพาะใบสมัครที่กรอกข้อมูลผ่านทางเว็บและเอกสารที่ Print จากระบบเท่านั้น</strong>
                    <br>หากนอกเหนือจากนี้ถือว่าการสมัครการแข่งขันนั้นไม่สมบูรณ์) <strong>สามารถส่งใบสมัครช่องทางใดช่องทางหนึ่ง
                    ต่อไปนี้</strong></li>
                    <ul>
                        <li>ทางโทรสารหมายเลข 0-2723-4946</li>
                        <li>ทางอีเมล ที่ <a href="mailto:openhouse@it.kmitl.ac.th">openhouse@it.kmitl.ac.th</a></li>
                    </ul>
                <li><strong>รับสมัครตั้งแต่วันจันทร์ที่ 11 กรกฏาคม 2559 ถึงวันจันทร์ที่ 8 สิงหาคม 2559 โดย
                    ยึดตามวันที่ใบสมัคร</strong></li>
                <li>คณะกรรมการจะประกาศรายชื่อทีมมีสิทธิ์เข้าแข่งขันในวันจันทร์ที่15 สิงหาคม
                    2559 ทางเว็บ <a href="http://openhouse.it.kmitl.ac.th">http://openhouse.it.kmitl.ac.th</a></li>
            </ul>

            <h3>รูปแบบและกติกาการเข้าแข่งขัน</h3>
            <ul>
                <li>รูปแบบการแข่งขันจะเป็นการหาช่องโหว่ของระบบเพื่อแก้ปัญหาภายในเวลาที่กำหนดให้</li>
                <li>การคิดคะแนนในแต่ละข้อจะแบ่งตามความยากของข้อนั้นๆ ข้อที่มีความยากมากจะได้คะแนนมากกว่า
                    ข้อที่มีความยากน้อยลงมา</li>
                <li>ในการคิดคะแนนของการแข่งขัน ผู้เข้าแข่งขันทุกทีมจะต้องส่งคำตอบที่ได้เพื่อยืนยันความถูกต้องกับระบบตรวจสอบและหากคำตอบถูกจะได้คะแนนตามที่กำหนดไว้ของข้อในนั้นๆ</li>
                <li>เนื้อหาของการแข่งขัน
                    <ul>
                        <li>ความปลอดภัยของเว็บไซต์(web security)</li>
                        <li>วิทยาการเข้ารหัสลับเบื้องต้น (Basic Cryptography)</li>
                        <li>ทักษะการเขียนโปรแกรม(Programming Skill)</li>
                        <li>ความปลอดภัยของระบบเครือข่าย (Network Security)</li>
                    </ul>
                <li>เวลาการแข่งขันทั้งหมด 3 ชั่วโมง</li>
                <li>ในการแข่งขันนั้นจะมีคอมพิวเตอร์ให้ผู้เข้าแข่งขันใช้ 1 เครื่องต่อทีม ซึ่งจะใช้ระบบปฏิบัติการ Ubuntu
                    เวอร์ชัน 16.04และ windows 7 ที่ติดตั้งเครื่องมือในการพัฒนาโปรแกรม<br>
                    และปลั๊กอินที่จำเป็นต่อการแก้โจทย์ปัญหา</li>
                <li><strong>ไม่อนุญาตให้ผู้เข้าร่วมแข่งขันใช้อินเทอร์เน็ตระหว่างการแข่งขัน รวมไปถึงเครื่องสื่อสาร และอุปกรณ์อิเล็กทรอนิกส์ทุกชนิด</strong></li>
                <li>อนุญาตให้ผู้เข้าแข่งขันใช้หนังสือ หรือคู่มือต่างๆ เข้ามาในบริเวณสถานที่จัดการแข่งขัน</li>
                <strong>***หากพบความพยายามในการทุจริตในการแข่งขันไม่ว่ากรณีใดๆจะถูกตัดสิทธิ์จากการแข่งขันทันที ผลการตัดสินของคณะกรรมการจัดการแข่งขันถือเป็นที่สิ้นสุด</strong>
            </ul>

            <h3>วันเวลาและสถานที่จัดการแข่งขัน</h3>
            <ul>
                <li>การแข่งขันจัดขึ้นวันที่ 26 สิงหาคม 2559 ตั้งแต่เวลา 9.00 น. จนถึงเวลา 12.30 น.</li>
                <li>ผู้เข้าแข่งขันต้องมารายงานตัว ณ จุดลงทะเบียน<strong>ก่อนเวลา 30 นาที</strong></li>
                <li>สถานที่จัดการแข่งขัน</li>
                    <ul>
                        <li>ห้องปฏิบัติการคอมพิวเตอร์ 203 ชั้น 2 อาคารเรียนรวมและปฏิบัตการ<br>
                            คณะเทคโนโลยีสารสนเทศ สถาบันเทคโนโลยีพระจอมเกล้าเจ้าคุณทหารลาดกระบัง</li>
                    </ul>
                <li><strong>ในวันแข่งขัน ผู้เข้าแข่งขันจะต้องแต่งกายชุดนักเรียนตามรูปแบบของโรงเรียนให้ถูกระเบียบ
                        พร้อมทั้งนําบัตรประจําตัวนักเรียนมาด้วย</strong></li>
                <li>ประกาศผลการเข้าแข่งขันและมอบรางวัลในเวลา 16.00 น. ของวันที่ทำการแข่งขัน</li>
            </ul>
            <a href="{{URL::to('/register/competition/network/create')}}" class="btn btn-primary btn-block regis-btn">สมัครเข้าแข่งขัน</a>
        </section>
    </div>
@endsection

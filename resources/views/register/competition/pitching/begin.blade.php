@extends('register.regis_page')
@section('regisForm')
    <div class="container regis">
        <section class="regis-header">
            <h1 class="text-center">กิจกรรมการแข่งขันทางวิชาการ IT LADKRABANG OPENHOUSE 2016</h1>
            <h2 class="text-center"><small>คณะเทคโนโลยีสารสนเทศ สถาบันเทคโนโลยีพระจอมเกล้าเจ้าคุณทหารลาดกระบัง</small></h2>
            <h2 class="text-center"><small>วันที่ 26 สิงหาคม 2559</small></h2>
            <h2 class="text-center"><small><u>รายละเอียดการแข่งขันการนำเสนอแผนธุรกิจ (IT Pitching)</u></small></h2>
        </section>
        <section class="regis-form">
            <h3>วัตถุประสงค์</h3>
            <ul>
                <li>เพื่อสนับสนุน - ส่งเสริมเยาวชนให้มีความรู้ความสามารถในการพัฒนาเว็บไซต์และทักษะการเขียนโปรแกรมด้วยภาษา PHP</li>
                <li>เพื่อเป็นการเผยแพร่การใช้ภาษา PHP ซึ่งเป็น Open source ไปใช้งานให้มากขึ้น</li>
            </ul>

            //TODO

            <a href="{{URL::to('/register/competition/pitching/create')}}" class="btn btn-primary btn-block regis-btn">สมัครเข้าแข่งขัน</a>
        </section>
    </div>
@endsection

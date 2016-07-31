@extends('new.index')
@section('content')
    <div class="jumbotron">
        <div class="text-center"><img src="{{URL::asset('assets/new/img/hero.svg')}}" class="jumbologo"/></div>
        <h3 class="text-center light">26 สิงหาคม 2559<br/>เวลา 09.00 - 16.30 น.</h3>
        <div class="jumbobuttons">
            <div class="btn-group">
                <button type="button" class="btn btn-jumbo btn-lg dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">ลงทะเบียนเข้าชม</button>
                <ul class="dropdown-menu">
                    <li><a href="{{URL('/register/guest_student')}}">นักเรียน/นักศึกษา</a></li>
                    <li><a href="{{URL('/register/guest_school')}}">โรงเรียน</a></li>
                    <li><a href="{{URL('/register/guest')}}">บุคคลทั่วไป</a></li>
                </ul>
            </div>
            <a class="btn btn-jumbo btn-lg" href="#competition">สมัครแข่งขัน</a>
        </div>
    </div>
    <div class="bluesec">
        <div class="container">
            <div class="highlight-reel">
                <div id="highlight" class="owl-carousel owl-theme">
                    <img src="{{URL::asset('assets/new/img/highlight-1.jpg')}}" alt="highlight"/>
                    <img src="{{URL::asset('assets/new/img/highlight-2.jpg')}}" alt="highlight"/>
                    <img src="{{URL::asset('assets/new/img/highlight-3.jpg')}}" alt="highlight"/>
                    <img src="{{URL::asset('assets/new/img/highlight-4.jpg')}}" alt="highlight"/>
                </div>
            </div>
            <h1 class="text-center">เลือกเรียน เปลี่ยนชีวิต</h1>
            <div class="row highlight-textbox">
                <div class="col-sm-12 col-md-8 col-md-offset-2">
                    <p class="text-center">สัมผัสเส้นทางการศึกษาทางด้านไอทีในทุกแง่มุม เปิดตัวหลักสูตรใหม่ ป.ตรี บรรยายพิเศษจากเน็ตไอดอลและกูรูไอทีจากเว็บไซต์เด็กดี ร่วมสนุกและลุ้นไปกับเกมการแข่งขันมากมาย สร้างแรงบันดาลใจไปกับนิทรรศการผลงานสุดเจ๋งของนักศึกษา ทดลองเรียนจริง และอีกมากมาย</p>
                </div>
            </div>
            <div class="text-center">
                <a class="btn btn-highlight btn-lg" href="{{URL('/schedule')}}">กำหนดการ</a>
            </div>
        </div>
    </div>
    <!-- Learn -->
    <div class="learn">
        <div class="container">
            <h1 class="text-center">การศึกษาต่อ</h1>
            <div class="row">
                <div class="col-md-6 col-xs-12">
                    <div class="well well-lg">
                        <div class="row">
                            <div class="hidden-xs col-sm-3">
                                <img src="{{URL::asset('assets/new/img/learn-1.jpg')}}" class="img-responsive img-circle" />
                            </div>
                            <div class="col-xs-12 col-sm-9">
                                <h3>To Be IT@KMITL</h3>
                                <p>เตรียมความพร้อมสู่ไอทีลาดกระบัง</p>
                                <button type="button" class="btn btn-learn" data-toggle="modal" data-target="#learn1">รายละเอียด</button>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-xs-12">
                    <div class="well well-lg">
                        <div class="row">
                            <div class="hidden-xs col-sm-3">
                                <img src="{{URL::asset('assets/new/img/learn-2.jpg')}}" class="img-responsive img-circle" />
                            </div>
                            <div class="col-xs-12 col-sm-9">
                                <h3>การแสดงนิทรรศการทางวิชาการ</h3>
                                <p>ผลงานนักศึกษาและคณาจารย์</p>
                                <button type="button" class="btn btn-learn" data-toggle="modal" data-target="#learn2">รายละเอียด</button>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-xs-12">
                    <div class="well well-lg">
                        <div class="row">
                            <div class="hidden-xs col-sm-3">
                                <img src="{{URL::asset('assets/new/img/learn-3.jpg')}}" class="img-responsive img-circle" />
                            </div>
                            <div class="col-xs-12 col-sm-9">
                                <h3>ทัวร์คณะ</h3>
                                <p>นำชมคณะไอทีลาดกระบัง</p>
                                <button type="button" class="btn btn-learn" data-toggle="modal" data-target="#learn3">รายละเอียด</button>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-xs-12">
                    <div class="well well-lg">
                        <div class="row">
                            <div class="hidden-xs col-sm-3">
                                <img src="{{URL::asset('assets/new/img/learn-4.jpg')}}" class="img-responsive img-circle" />
                            </div>
                            <div class="col-xs-12 col-sm-9">
                                <h3>แนะนำหลักสูตรไอทีลาดกระบัง</h3>
                                <p>หลักสูตรทางด้านคอมพิวเตอร์</p>
                                <button type="button" class="btn btn-learn" data-toggle="modal" data-target="#learn4">รายละเอียด</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="itcamp text-center">
        <video poster="{{URL::asset('assets/new/img/itcamp.jpg')}}" autoplay="autoplay" loop="loop">
            <source src="{{URL::asset('assets/new/img/itcamp.mp4')}}" type="video/mp4" />
        </video>
    </div>
    <!-- Competitions -->
    <div id="competition" class="orangesec">
        <div class="container">
            <div class="row">
                <div class="col-xs-12 col-sm-6 col-md-4">
                    <div class="activity-box activity-box--white">
                        <h1>การแข่งขัน</h1>
                        <h4 class="light">IT Open House 2016</h4>
                        <h4 class="light">26 สิงหาคม 2559</h4>
                    </div>
                </div>
                <div class="col-xs-12 col-sm-6 col-md-4">
                    <div class="activity-box activity-box--transparent activity-1">
                        <h1>E-Sports</h1>
                        <p>แข่งขันเกม DOTA2 ในโหมด CAPTAIN เวอร์ชันที่ใช้แข่งคือ Tournament, การแข่งขันเป็นแบบแพ้ตกรอบ</p>
                        <a class="btn btn-activity" href="{{URL('/register/competition/esport')}}" role="button">รายละเอียด</a>
                    </div>
                </div>
                <div class="col-xs-12 col-sm-6 col-md-4">
                    <div class="activity-box activity-box--transparent  activity-2">
                        <h1>พัฒนาเว็บไซต์</h1>
                        <p>แข่งขันพัฒนาเว็บไซต์ด้วย PHP, JavaScript, AJAX, Bootstrap และฐานข้อมูล ภายในเวลาสามชั่วโมง</p>
                        <a class="btn btn-activity" href="{{URL('/register/competition/php')}}" role="button">รายละเอียด</a>
                    </div>
                </div>
                <div class="col-xs-12 col-sm-6 col-md-4">
                    <div class="activity-box activity-box--transparent  activity-3">
                        <h1>ตอบปัญหา</h1>
                        <p>แข่งขันตอบปัญหาในแวดวงไอที ทั้งบุคคล หน่วยงาน พื้นฐานการพัฒนาโปรแกรม คณิตศาสตร์มัธยมปลาย สมาร์ทโฟนและ IoT</p>
                        <a class="btn btn-activity" href="{{URL('/register/competition/itquiz')}}" role="button">รายละเอียด</a>
                    </div>
                </div>
                <div class="col-xs-12 col-sm-6 col-md-4">
                    <div class="activity-box activity-box--transparent  activity-4">
                        <h1>ความปลอดภัยระบบ</h1>
                        <p>แข่งขันหาช่องโหว่ของระบบ เช่น ความปลอดภัยเว็บไซต์ เครือข่าย การเข้ารหัสลับเบื้องต้น</p>
                        <a class="btn btn-activity" href="{{URL('/register/competition/network')}}" role="button">รายละเอียด</a>
                    </div>
                </div>
                <div class="col-xs-12 col-sm-6 col-md-4">
                    <div class="activity-box activity-box--transparent  activity-5">
                        <h1>นำเสนอแผนธุรกิจ</h1>
                        <p>แข่งขันสร้างสรรค์และนำเสนอนวัตกรรมใหม่ๆ ที่มีการนำเทคโนโลยีสารสนเทศมาใช้</p>
                        <a class="btn btn-activity" href="{{URL('/register/competition/pitching')}}" role="button">รายละเอียด</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="workshopsec">
        <div class="container">
            <h1 class="text-center">เวิร์กชอป</h1>
            <div class="row">
                <div class="col-xs-12 col-sm-6 col-md-3">
                    <div class="imgcontainer">
                        <a data-toggle="modal" data-target="#workshop1">
                            <img src="{{URL::asset('assets/new/img/ws-business.jpg')}}" class="img-responsive"/>
                        </a>
                    </div>
                </div>
                <div class="col-xs-12 col-sm-6 col-md-3">
                    <div class="imgcontainer">
                        <a data-toggle="modal" data-target="#workshop2">
                            <img src="{{URL::asset('assets/new/img/ws-media.jpg')}}" class="img-responsive"/>
                        </a>
                    </div>
                </div>
                <div class="col-xs-12 col-sm-6 col-md-3">
                    <div class="imgcontainer">
                        <a data-toggle="modal" data-target="#workshop3">
                            <img src="{{URL::asset('assets/new/img/ws-network.jpg')}}" class="img-responsive"/>
                        </a>
                    </div>
                </div>
                <div class="col-xs-12 col-sm-6 col-md-3">
                    <div class="imgcontainer">
                        <a data-toggle="modal" data-target="#workshop4">
                            <img src="{{URL::asset('assets/new/img/ws-software.jpg')}}" class="img-responsive"/>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Clubs -->
    <div class="clubsec">
        <div class="container">
            <h1 class="text-center">กิจกรรมชุมนุมของนักศึกษา</h1>
            <div id="clubsec" class="owl-carousel owl-theme">
                <div class="clubbox">
                    <div class="clubbox-in">
                        <img src="{{URL::asset('assets/new/img/club-thumbs/club-1.png')}}" />
                        <div class="clubbox-text">
                            <h3>ชุมนุม IT Forge</h3>
                            <p>IT นั้นย่อมาจาก Information Technology แปลว่า เทคโนโลยีสารสนเทศ ส่วน Forge...</p>
                            <button type="button" class="btn btn-primary btn-block" data-toggle="modal" data-target="#clubone">อ่านต่อ</button>
                        </div>
                    </div>
                </div>
                <div class="clubbox">
                    <div class="clubbox-in">
                        <img src="{{URL::asset('assets/new/img/club-thumbs/club-2.jpg')}}" />
                        <div class="clubbox-text">
                            <h3>ชุมนุมวิจัยอนิเมและหมากกระดาน</h3>
                            <p>สมัยนี้ อนิเมชั่นหรือการ์ตูนต่างๆเป็นสื่อที่อยู่ใกล้ตัว และเป็นที่รู้จัก</p>
                            <button type="button" class="btn btn-primary btn-block" data-toggle="modal" data-target="#clubtwo">อ่านต่อ</button>
                        </div>
                    </div>
                </div>
                <div class="clubbox">
                    <div class="clubbox-in">
                        <img src="{{URL::asset('assets/new/img/club-thumbs/club-3.jpg')}}" />
                        <div class="clubbox-text">
                            <h3>ชุมนุม AGAPAE'</h3>
                            <p>สันทนาการคืออะไร? น้องๆหลายคนอาจจะสงสัยว่า "สันทนาการ" คืออะไร...</p>
                            <button type="button" class="btn btn-primary btn-block" data-toggle="modal" data-target="#clubthree">อ่านต่อ</button>
                        </div>
                    </div>
                </div>
                <div class="clubbox">
                    <div class="clubbox-in">
                        <img src="{{URL::asset('assets/new/img/club-thumbs/club-4.jpg')}}" />
                        <div class="clubbox-text">
                            <h3>ชุมนุม FOTO+ MAG</h3>
                            <p>ในโอกาสพิเศษต่างๆ ไม่ว่าจะเป็นงานนิทรรศการ งานวิชาการ งานกีฬา หรืองาน...</p>
                            <button type="button" class="btn btn-primary btn-block" data-toggle="modal" data-target="#clubfour">อ่านต่อ</button>
                        </div>
                    </div>
                </div>
                <div class="clubbox">
                    <div class="clubbox-in">
                        <img src="{{URL::asset('assets/new/img/club-thumbs/club-5.jpg')}}" />
                        <div class="clubbox-text">
                            <h3>ชุมนุม Inphonic</h3>
                            <p>น้องๆหลายคนเมื่อได้ยินชื่อชุมนุม Inphonic อาจจะงงกันว่าคือชุมนุมอะไร ซึ่งจริงๆแล...</p>
                            <button type="button" class="btn btn-primary btn-block" data-toggle="modal" data-target="#clubfive">อ่านต่อ</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Event Carousel -->
    <div class="eventcarousel">
        <h1 class="light visible-xs">บรรยากาศ<br/><b>ภายในงาน</b></h1>
        <h1 class="light hidden-xs"><b>บรรยากาศ</b>ภายในงาน</h1>
        <div class="container">
            <div class="row">
                <div class="col-xs-12">
                    <div id="lastyear" class="owl-carousel owl-theme">
                        <img src="{{URL::asset('assets/new/img/jumbo-1.jpg')}}" class="img-responsive" alt="pic" />
                        <img src="{{URL::asset('assets/new/img/jumbo-2.jpg')}}" class="img-responsive" alt="pic" />
                        <img src="{{URL::asset('assets/new/img/jumbo-3.jpg')}}" class="img-responsive" alt="pic" />
                        <img src="{{URL::asset('assets/new/img/jumbo-4.jpg')}}" class="img-responsive" alt="pic" />
                        <img src="{{URL::asset('assets/new/img/jumbo-5.jpg')}}" class="img-responsive" alt="pic" />
                        <img src="{{URL::asset('assets/new/img/jumbo-6.jpg')}}" class="img-responsive" alt="pic" />
                        <img src="{{URL::asset('assets/new/img/jumbo-7.jpg')}}" class="img-responsive" alt="pic" />
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!----- Modals for Clubs ------>
    <!-- Club: IT Forge -->
    <div id="clubone" class="modal fade" role="dialog">
      
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                    <h1 class="modal-title light text-center">ชุมนุม IT Forge</h1>
                </div>
                <div class="modal-body">
                    <div class="text-center">
                        <img src="{{URL::asset('assets/new/img/itforge.png')}}" class="itforge"/>
                    </div>
                    <hr>
                    <p>IT นั้นย่อมาจาก Information Technology แปลว่า เทคโนโลยีสารสนเทศ ส่วน Forge นั้นแปลว่า การตีเหล็ก หรือ โรงตีเหล็ก เพราะฉะนั้นเมื่อนำสองคำนี้มารวมกันจะหมายถึง การตีความรู้ทางด้านเทคโนโลยีสารสนเทศให้กล้าแข็งขึ้น หรือ หมายถึงสถานที่สำหรับการพัฒนาความรู้ทางด้านเทคโนโลยี</p>
                    <div class="imggroup">
                        <img src="{{URL::asset('assets/new/img/club-large/club-1-1.jpg')}}" class="img-responsive"/>
                    </div>
                    <p>ITForge เป็นชุมนุมด้าน IT ของคณะเทคโนโลยีสารสนเทศ เป็นแหล่งรวมนักศึกษาที่มีความสนใจในการพัฒนา หรือ นำเทคโนโลยีมาสร้างสรรค์ในสิ่งที่มีความสนใจร่วมกัน เช่น การพัฒนาเกม การพัฒนาแอพลิเคชั่น ฯลฯ นอกจากนี้ยังรวมไปถึงการถ่ายทอดความรู้ภายในคณะ เช่นการแลกเปลี่ยนประสบการณ์ ความรู้ระหว่างรุ่นพี่-รุ่นน้อง และการถ่ายทอดความรู้สู่ภายนอก เช่น การจัดกิจกรรมหรือการจัด Workshop เผยแพร่ความรู้ด้านเทคโนโลยีทั้งหมดเพื่อตอบโจทย์ของชุมนุม คือการสร้างแหล่งรวมนักศึกษาที่พร้อมจะนำความรู้ด้าน IT มาสร้างสรรค์สิ่งดีๆ สร้างประโยชน์ให้กับตนเองและสังคม
                    </p>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal">ปิดหน้าต่าง</button>
                </div>
            </div>
        </div>
    </div>
    
    <!-- Club: Anime -->
    <div id="clubtwo" class="modal fade" role="dialog">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                    <h1 class="modal-title light text-center">ชุมนุมวิจัยอนิเมและหมากกระดาน</h1>
                </div>
                <div class="modal-body">
                    <div class="row">
                        <div class="imggroup">
                            <div class="row rownominus">
                                <div class="col-xs-12 col-md-6">
                                    <img src="{{URL::asset('assets/new/img/club-large/club-2-1.jpg')}}" class="img-responsive" />
                                </div>
                                <div class="col-xs-12 col-md-6">
                                    <img src="{{URL::asset('assets/new/img/club-large/club-2-2.jpg')}}" class="img-responsive" />
                                </div>
                            </div>
                        </div>
                        <div class="col-xs-12">
                            <p>สมัยนี้ อนิเมชั่นหรือการ์ตูนต่างๆเป็นสื่อที่อยู่ใกล้ตัว และเป็นที่รู้จักมากขึ้น ซึ่งบางเรื่องนั้นได้มีการสอดแทรกสาระเนื้อหาที่น่าสนใจ หรือมีการละเล่นต่างๆ ที่หลายๆ คนเคยเล่น แต่ห่างเหินไปเพราะเทคโนโลยีต่างๆ เริ่มมีเกมมาแทนที่ ชุมนุมเราจึงจัดตั้งขึ้นเพื่อวิเคราะห์สาระ แนวคิด และข้อคิด ที่มีอยู่ในอนิเมชันเหล่านั้น รวมไปถึงลักษณะต่างๆ ของอนิเมชั่น และยังนำเกมกระดาน และการละเล่นต่างๆ ที่อยู่ในอนิเมมาฝึกเล่น และเรียนรู้ความแตกต่าง และเพื่อสร้างความสนุกสนาน และความสามัคคีในหมู่คณะอีกด้วย มาสนุกสนานกับอนิเมชัน และเกมกระดานกันเถอะครับ</p>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal">ปิดหน้าต่าง</button>
                </div>
            </div>
        </div>
    </div>
    <!-- Club: AGAPE -->
    <div id="clubthree" class="modal fade" role="dialog">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                    <h1 class="modal-title light text-center">ชุมนุม AGAPE'</h1>
                </div>
                <div class="modal-body">
                    <div class="row">
                        <div class="imggroup">
                            <div class="row rownominus">
                                <div class="col-xs-12 col-md-6">
                                    <img src="{{URL::asset('assets/new/img/club-large/club-3-1.jpg')}}" class="img-responsive" />
                                </div>
                                <div class="col-xs-12 col-md-6">
                                    <img src="{{URL::asset('assets/new/img/club-large/club-3-3.jpg')}}" class="img-responsive" />
                                </div>
                            </div>
                        </div>
                        <div class="col-xs-12">
                            <p>สันทนาการคืออะไร? น้องๆหลายคนอาจจะสงสัยว่า "สันทนาการ" คืออะไร แต่บางคนก็อาจจะรู้จักคุ้นเคยกันบ้างแล้ว เพราะเคยเข้าค่ายที่ทางมหาวิทยาลัยจัดขึ้นให้น้องๆ ม.ปลาย "สันทนาการ" คือกลุ่มคนที่มารวมตัวกันทำกิจกรรมเพื่อสร้างความสุข ความสนุกสนาน ความครื้นเครง สร้างเสียงหัวเราะที่ไม่ขาดสาย สร้างรอยยิ้มให้กับน้องๆ และคอยเทคแคร์ ดูแลเอาใจใส่น้องๆด้วยความจริงใจ</p>
                            <p>AGAPE' คืออะไร? "AGAPE" นั้นมีหลายความหมาย ความหมายแรก แปลว่า "อาการอ้าปากค้าง" (ฮามากจนหุบปากไม่ลง 555+) ส่วนอีกความหมายซึ่งเป็นที่นิยมมากกว่า แปลว่า "ความรักอันบริสุทธิ์จากพระเจ้า" เป็นความรักโดยแท้จริง เพราะพวกเราชาว "AGAPE" จะมอบความรักให้กับน้องๆโดยไม่หวังสิ่งใดตอบแทน :') Open house นี้ เตรียมตัวไว้ให้ดี เพราะพี่ๆพกความสนุกสนานมาให้น้องๆ ได้เก็บกลับบ้านกันแน่นอน</p>
                        </div>
                        <div class="col-xs-12">
                            <div class="imggroup">
                                <img src="{{URL::asset('assets/new/img/club-large/club-3-2.jpg')}}" class="img-responsive" />
                            </div>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal">ปิดหน้าต่าง</button>
                </div>
            </div>
        </div>
    </div>
    <!-- Club: FOTO -->
    <div id="clubfour" class="modal fade" role="dialog">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                    <h1 class="modal-title light text-center">ชุมนุม FOTO+ MAG</h1>
                </div>
                <div class="modal-body">
                    <div class="row">
                        <div class="col-xs-12">
                            <p>ในโอกาสพิเศษต่างๆ ไม่ว่าจะเป็นงานนิทรรศการ งานวิชาการ งานกีฬา หรืองานพิธีสำคัญ น้องๆจะได้เห็นบุคคลกลุ่มหนึ่ง อาจจะเป็นกลุ่มเล็ก ๆ แต่มีความสำคัญไม่น้อยเลยทีเดียว พวกเขามีอุปกรณ์สำคัญอย่าง กล้องถ่ายภาพ เป็นอุปกรณ์คู่ใจที่ติดตัวไว้ตลอดเวลา พวกเขามีหน้าที่ในการเก็บภาพบรรยากาศ เหตุการณ์ต่างๆ รอยยิ้ม เสียงหัวเราะ หรือความประทับใจที่เกิดขึ้น ออกมาเป็นภาพถ่าย หรืออาจจะเป็นภาพเคลื่อนไหว พวกเขาก็คือ ช่างภาพ นั่นเอง</p>
                        </div>
                        <div class="imggroup nobottommargin">
                            <div class="row rownominus">
                                <div class="col-xs-12 col-md-4">
                                    <img src="{{URL::asset('assets/new/img/club-large/club-4-2.jpg')}}" class="club img-responsive" />
                                </div>
                                <div class="hidden-xs hidden-sm col-md-4">
                                    <img src="{{URL::asset('assets/new/img/club-large/club-4-3.jpg')}}" class="club img-responsive" />
                                </div>
                                <div class="col-xs-12 col-md-4">
                                    <img src="{{URL::asset('assets/new/img/club-large/club-4-1.jpg')}}" class="club img-responsive" />
                                </div>
                            </div>
                        </div>
                        <div class="col-xs-12">
                            <h3>ชุมนุม FOTO+ MAG คืออะไร?</h3>
                            <p>เป็นชุมนุมของผู้ที่สนใจ หรือรักในการถ่ายภาพ ทางชุมนุมไม่จำกัดว่าสมาชิกของชุมนุมจะต้องมีกล้องถ่ายภาพทุกคน ใครไม่มีกล้องก็สามารถที่จะร่วมกิจกรรมของชุมนุมได้ โดยกิจกรรมของชุมนุม จะจัดขึ้นเรื่อยๆ ตลอดปีการศึกษา</p>
                            <h3>ชุมนุม FOTO+ MAG ทำอะไรบ้าง?</h3>
                            <p>หลักๆคงหนีไม่พ้นการถ่ายภาพ แต่ชุมนุมของเราไม่ใช่เพียงแค่ถ่ายภาพบรรยากาศในงาน หรือโอกาสสำคัญต่าง ๆ เท่านั้น แต่ยังมีกิจกรรมเพิ่มเติมที่จัดให้กับสมาชิกชุมนุม เพื่อเสริมสร้างทักษะในการถ่ายภาพอีกด้วย เช่น Workshop การถ่ายภาพ และแต่งภาพ โดยพี่ๆชุมนุมที่มีความรู้ ความสามารถในด้านนี้ นอกเหนือจากนี้ ยังมีกิจกรรมดีๆ อย่างเช่น จัดทริปถ่ายภาพนอกสถานที่ และกิจกรรมอื่นๆ ตลอดปีการศึกษา   สำหรับน้องๆ ที่รักในการถ่ายภาพ สนใจในเทคโนโลยีเกี่ยวกับภาพถ่าย ในวันงาน จะมีการจัดแสดงนิทรรศการภาพถ่าย เป็นผลงานของนักศึกษาที่เป็นสมาชิกของชุมนุม น้องๆที่สนใจ สามารถที่จะมาเยี่ยมชม พูดคุย แลกเปลี่ยนความคิดเห็นกันได้ ที่ห้อง M16 นะคะ</p>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal">ปิดหน้าต่าง</button>
                </div>
            </div>
        </div>
    </div>
    <!-- Club: Inphonic -->
    <div id="clubfive" class="modal fade" role="dialog">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                    <h1 class="modal-title light text-center">ชุมนุม Inphonic</h1>
                </div>
                <div class="modal-body">
                    <div class="row">
                        <div class="imggroup">
                            <div class="row rownominus">
                                <div class="col-xs-12 col-md-6">
                                    <img src="{{URL::asset('assets/new/img/club-large/club-5-1.jpg')}}" class="club img-responsive"/>
                                </div>
                                <div class="col-xs-12 col-md-6">
                                    <img src="{{URL::asset('assets/new/img/club-large/club-5-2.jpg')}}" class="club img-responsive"/>
                                </div>
                            </div>
                        </div>
                        <div class="col-xs-12">
                            <p>น้องๆหลายคนเมื่อได้ยินชื่อชุมนุม Inphonic อาจจะงงกันว่าคือชุมนุมอะไร ซึ่งจริงๆแล้ว Inphonic นั้นเป็นการรวมคำว่า "Information Technology(IT)" และ "Symphonic" เข้าด้วยกัน หรือพูดง่ายๆก็คือชุมนุมดนตรีของคณะ IT เรานี่เอง ชุมนุม Inphonic นั้นจัดตั้งขึ้นเพื่อเป็นการรวมตัวผู้ชื่นชอบในดนตรีของคณะไอที ซึ่งไม่ว่าใครจะมีฝีมือระดับเทพหรือเพิ่งหัดเล่นก็สามารถเข้าร่วมชุมนุมได้ ขอ เชิญชวนน้องๆผู้ชื่นชอบและหลงไหลในเสียงดนตรีมารับชมรับฟังการแสดงดนตรีจาก พี่ๆไอทีลาดกระบังได้ภายในงาน Open House รับประกันความมันส์ตลอดงาน !!!</p>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal">ปิดหน้าต่าง</button>
                </div>
            </div>
        </div>
    </div>
    <!-- Modals for Learn -->
    <!-- Learn: To be IT -->
    <div id="learn1" class="modal fade" role="dialog">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                    <h1 class="light text-center">To Be IT@KMITL</h1>
                </div>
                <div class="modal-body">
                    <h3>เตรียมความพร้อมสู่ไอทีลาดกระบัง</h3>
                    <p>สัมมนาเตรียมความพร้อมสู่ไอทีลาดกระบัง “ToBeIT@KMITL”   <br/>เพื่อการเตรียมสอบเข้าคณะเทคโนโลยีสารสนเทศ สถาบันเทคโนโลยีพระจอมเกล้าเจ้าคุณทหารลาดกระบัง, การปรับตัวในการเรียนมหาวิทยาลัย  และไขข้อข้องใจกับพี่ๆ นักศึกษาไอทีลาดกระบังทุกชั้นปี</p>
                    <div class="alert alert-info text-center">
                        ผู้ที่สนใจสามารถเข้าชมได้ในวันศุกร์ที่ 26 สิงหาคม 2559 บริเวณด้านหน้าห้องประชุม Auditorium อาคารคณะเทคโนโลยีสารสนเทศ
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal">ปิดหน้าต่าง</button>
                </div>
            </div>
        </div>
    </div>
    <!-- Learn: Exhibition -->
    <div id="learn2" class="modal fade" role="dialog">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                    <h1 class="light text-center">การแสดงนิทรรศการทางวิชาการ</h1>
                </div>
                <div class="modal-body">
                    <h3>ผลงานนักศึกษาและคณาจารย์</h3>
                    <p>คณะเทคโนโลยีสารสนเทศ สถาบันเทคโนโลยีพระจอมเกล้าเจ้าคุณทหารลาดกระบัง ได้มีการนำผลงานต่างๆ ของนักศึกษาระดับปริญญาตรี, ปริญญาโท และ ปริญญาเอก รวมทั้งงานวิจัยของอาจารย์ในคณะฯ มาจัดแสดงให้ผู้ที่สนใจได้ชมและศึกษา บริเวณโถงชั้นล่างอาคารคณะฯ</p>
                    <p>ทุกท่านจะได้รับทั้งความรู้ในเชิงวิชาการจากทั้งจากผลงานของนักศึกษา, งานวิจัยภายในคณะ รวมถึงผู้สนับสนุนต่างๆ ที่จะนำเทคโนโลยีและนวัตกรรมใหม่ๆ ผู้เข้าร่วมงานทุกท่าน ได้สัมผัสกันอย่างใกล้ชิด</p>
                    <div class="alert alert-info text-center">
                        ผู้ที่สนใจสามารถเข้าชมได้ในวันศุกร์ที่ 26 สิงหาคม 2559 บริเวณโถงชั้นล่างของอาคารคณะฯ ตลอดทั้งวัน
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal">ปิดหน้าต่าง</button>
                </div>
            </div>
        </div>
    </div>
    <!-- Learn: Tour -->
    <div id="learn3" class="modal fade" role="dialog">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                    <h1 class="light text-center">ทัวร์คณะ</h1>
                </div>
                <div class="modal-body">
                    <h3>นำชมคณะไอทีลาดกระบัง</h3>
                    <p>ทัวร์ที่จะพาทุกท่านไป เยี่ยมชมสถานที่จริง ไม่ว่าจะเป็น ห้องเรียน, ห้องปฏิบัติการ (Lab), ห้องเซิร์ฟเวอร์, ชุมนุมของนักศึกษา และสิ่งอำนวยความสะดวกต่างๆ ภายในคณะเทคโนโลยีสารสนเทศ แบบทุกซอกทุกมุม โดยทางคณะได้มีการจัดทีมนำชมสถานที่ซึ่งมีนักศึกษาเป็นวิทยากรนำชมสถานที่ และแบ่งออกเป็นรอบ รอบละ 10 - 15 นาที</p>
                    <div class="alert alert-info text-center">
                        ผู้ที่สนใจสามารถเข้าชมได้ในวันศุกร์ที่ 26 สิงหาคม 2559 บริเวณโถงชั้นล่างของอาคารคณะฯ ตลอดทั้งวัน
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-default" data-dismiss="modal">ปิดหน้าต่าง</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Learn: Study -->
    <div id="learn4" class="modal fade" role="dialog">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                    <h1 class="light text-center">แนะนำหลักสูตรไอทีลาดกระบัง</h1>
                </div>
                <div class="modal-body">
                    <h3>หลักสูตรทางด้านคอมพิวเตอร์</h3>
                    <p>การบรรยาย "แนะแนวอาชีพและการศึกษาต่อด้านคอมพิวเตอร์และเทคโนโลยีสารสนเทศ" เชิญพบปะพูดคุยกับอาจารย์และนักศึกษาของคณะเทคโนโลยีสารสนเทศ สถาบันเทคโนโลยีพระจอมเกล้าเจ้าคุณทหารลาดกระบัง ในหัวข้อข้อความแตกต่างของหลักสูตรระหว่างสาขาวิชาวิทยาการคอมพิวเตอร์, วิศวกรรมคอมพิวเตอร์, วิศวกรรมสารสนเทศ และ เทคโนโลยีสารสนเทศ พร้อมทั้งเปิดโอกาสให้ผู้ร่วมงานสอบถามข้อมูลต่างๆ ของหลักสูตรในคณะเทคโนโลยีสารสนเทศ</p>
                    <div class="alert alert-info text-center">
                        ผู้ที่สนใจสามารถเข้าชมได้ในวันศุกร์ที่ 26 สิงหาคม 2559 บริเวณด้านหน้าห้องประชุม Auditorium อาคารคณะเทคโนโลยีสารสนเทศ
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal">ปิดหน้าต่าง</button>
                </div>
            </div>
        </div>
    </div>
        <!-- workshop: BI -->
    <div id="workshop1" class="modal fade" role="dialog">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                    <h1 class="light text-center">ชื่อกิจกรรม: ล้วงลึกเรื่องลับ ๆ กับ Facebook </h1>
                </div>
                <div class="modal-body">
                    <h3>รายละเอียด:</h3>
                    <ul>
                        <li>แนะนำเกี่ยวกับ Graph API ของ Facebook และให้ผู้เข้าร่วมกิจกรรมได้ทดลอง (15 นาที)</li>
                        <ul>
                            <li>โพสต์สถานะและอัพโหลดรูปภาพโดยผ่าน Facebook Graph API</li>
                            <li>ดึงข้อมูลจำนวน Like และ จำนวนโพสต์พร้อมทั้งวัน-เวลาที่ได้ทำการโพสต์ภายใน 1 เดือนที่ผ่านมา</li>
                            <li>เลือกเพจดังๆ ที่เป็นสาธารณะแล้วลองเขียน query ผ่าน Facebook Graph API เข้าไปดูข้อมูลการโพสต์ 1 เดือนย้อนหลัง มาวิเคราะห์ว่าเพจนั้นๆ มีการโพสต์วันไหนบ่อยที่สุด (จันทร์ – ศุกร์)</li>
                        </ul>
                    </ul>
                    <ul>
                        <li>ทางทีมจะเตรียมทำ Facebook App ไว้ 20 แอพ (10 นาที)</li>
                        <ul>
                            <li>อธิบายหลักการ วิธีการสร้างแอพบนเฟซบุ๊ก</li>
                            <li>ให้ผู้เข้าร่วมได้ลองเขียนแอพเฟซบุ๊กของตัวเอง โดยอาจจะเป็นการทำนายโชคชะตาจากวันเกิดที่ดึงจากบัญชีเฟซบุ๊กของผู้เข้าร่วมกิจกรรม</li>
                            <li>ดึง เพื่อน ที่ดวงสมพงษ์กับเรา</li>
                        </ul>
                    </ul>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal">ปิดหน้าต่าง</button>
                </div>
            </div>
        </div>
    </div>
    <!-- workshop: MMD -->
    <div id="workshop2" class="modal fade" role="dialog">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                    <h1 class="light text-center">ชื่อกิจกรรม: ส่องขุมทรัพย์กับ Cardboard </h1>
                </div>
                <div class="modal-body">
                    <h3>รายละเอียด:</h3>
                    <p>ผู้เข้าร่วมเวิร์กชอปนี้จะได้เรียนรู้และเข้าใจถึงแขนงวิชาสื่อประสมและเกมภายในเวลา 30 นาที ผ่านการปฏิบัติจริงเพื่อพัฒนาแอปพลิเคชันบนโทรศัพท์มือถือโดยใช้เทคโนโลยี Virtual Reality โดยผู้เข้าร่วมเวิร์กชอปจะได้ลองสร้างแอปพลิเคชันในทุกขั้นตอนเพื่อเรียนรู้ว่าแขนงวิชานี้มีการเรียนการสอนทั้งส่วน Content Creation และ Multimedia Programming</p>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal">ปิดหน้าต่าง</button>
                </div>
            </div>
        </div>
    </div>
    <!-- workshop: NW -->
    <div id="workshop3" class="modal fade" role="dialog">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                    <h1 class="light text-center">ชื่อกิจกรรม: สืบเจาะเคาะจากเน็ต </h1>
                </div>
                <div class="modal-body">
                    <h3>เป้าหมาย:</h3>
                    <ul>
                        <li>ให้นักเรียนได้เรียนรู้การตรวจสอบการทำงานของระบบเครือข่ายไร้สายโดยใช้โปรแกรม Wireshark</li>
                    </ul>
                    <h3>รายละเอียด:</h3>
                    <p>ในเวิร์กชอปจะอิงกับโปรแกรม Fing (บนโทรศัพท์มือถือที่ใช้ระบบปฏิบัติการณ์เป็นแอนดรอยด์หรือ iOS) ซึ่งเป็นโปรแกรมที่ใช้ตรวจสอบว่ามีอุปกรณ์ใดบ้างที่เชื่อมต่อกับ Access Point ที่ใช้งานอยู่</p>
                    <ol>
                        <li>ทำการสาธิตว่าตัวโปรแกรม Fing ทำงานอย่างไร</li>
                        <li>แนะนำหลักการทำงานของโปรแกรม Wireshark</li>
                        <li>ให้ทดลองใช้โปรแกรม Wireshark  และแนะนำวิธีในการวิเคราะห์ผล  โดยผลที่ได้จะเทียบเท่ากับการใช้งานโปรแกรม Fing</li>
                    </ol>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal">ปิดหน้าต่าง</button>
                </div>
            </div>
        </div>
    </div>
    <!------ workshop : softend ---->
    <div id="workshop4" class="modal fade" role="dialog">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                    <h1 class="light text-center">ชื่อกิจกรรม: ใส่กึ๋นให้เลโก้ </h1>
                </div>
                <div class="modal-body">
                    <h3>รายละเอียด:</h3>
                    <ul>
                        <li>กิจกรรมนี้<strong class="red">มีดีอะไร</strong></li>
                            <ul>
                                <li>มีหุ่นยนต์อีทีให้เรียนรู้ สัมผัส และทดลองเล่น</li>
                                <li>มีโปรแกรมภาษาจาวาให้ได้เรียนรู้และทดลองเขียนโปรแกรมได้จริง</li>
                                <li>มีการทดลองเขียนโปรแกรมเพื่อสั่งการและควบคุมหุ่นยนต์อีทีให้ทำงานตามพันธกิจที่กำหนดได้ด้วยภาษาจาวา</li>
                            </ul>
                        <li><strong class="red">ทำอะไร</strong>บ้างในกิจกรรมนี้</li>
                            <p>
                            ในเวิร์คชอปนี้ น้อง ๆ จะได้เรียนรู้โครงสร้างโปรแกรมภาษาจาวาในเบื้องต้น รวมทั้งการเขียนโปรแกรมภาษาจาวาในการควบคุมการทำงานของอุปกรณ์เซ็นเซอร์ (Sensor) และแอคทูเอเตอร์ (Actuator) ต่าง ๆ เพื่อให้สามารถตรวจจับข้อมูล และแสดงผลการขับเคลื่อนในรูปแบบต่าง ๆ ได้
น้อง ๆ จะได้รู้จักโครงสร้างของหุ่นยนต์อีที ที่สร้างจากชุดอุปกรณ์ Lego Mindstorms NXT ซึ่งประกอบด้วยเอ็มพียู (MPU) เซ็นเซอร์แสง (Light sensor) เซ็นเซอร์เสียง (Sound sensor) เซ็นเซอร์สัมผัส (Touch sensor) เซ็นเซอร์อัลตราโซนิค (Ultrasonic sensor) และมอร์เตอร์ (Motor) ที่สามารถนำมาสร้างเป็นหุ่นยนต์ในรูปแบบต่าง ๆ ได้ตามที่ต้องการ
นอกจากนี้ น้อง ๆ ยังจะได้ทดลองเขียนโปรแกรมภาษาจาวา ในการควบคุมสั่งการหุ่นยนต์อีทีที่สร้างขึ้น เพื่อให้สามารถตรวจจับข้อมูลในรูปแบบต่าง ๆ จากสภาพแวดล้อม แล้วนำมาประมวลผลและดำเนินการตามพันธกิจ (Mission) ที่กำหนด            </p>
                        <li>เข้ากิจกรรมนี้แล้ว<strong class="red">ได้อะไร</strong></li>
                            <ul>
                                <li>เรียนรู้และทดลองระบบฝังตัวสำเร็จรูปโดยใช้ ET Robot</li>
                                <li>เรียนรู้องค์ประกอบทางฮาร์ดแวร์ ประกอบด้วย Controller (MPU ของระบบ) อุปกรณ์เซ็นเซอร์ (Sensor) และอุปกรณ์ต่อพ่วงชนิดต่างๆ</li>
                                <li>สามารถเชื่อมต่ออุปกรณ์และควบคุมฮาร์ดแวร์เพื่อพัฒนาเป็นแอปพลิเคชั่นสำหรับระบบฝังตัวด้วย ET Robot ได้</li>
                                <li>ความสนุกสนานเพลิดเพลินในการเรียนรู้ ได้ทดลองสัมผัส และสามารถทำได้จริงด้วยตัวเอง</li>
                            </ul>
                    </ul>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal">ปิดหน้าต่าง</button>
                </div>
            </div>
        </div>
    </div>
@endsection
@section('script')
    <script type="text/javascript">
        $(document).ready(function() {
            $("#lastyear").owlCarousel({
                items:2,
                autoPlay:2000
            });
            $("#highlight").owlCarousel({
                items:4,
                autoPlay:2000
            });
            $('#clubsec').owlCarousel({
                items:4
            })
        });
    </script>
@endsection

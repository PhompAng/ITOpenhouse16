<header>
    <nav class="navbar-default navbar-fixed-top">
        <div class="container">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#nav">
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="{{URL('/')}}"><img src="{{URL::asset('assets/new/img/nav-logo.svg')}}"/></a>
            </div>
            <div class="collapse navbar-collapse" id="nav">
                <ul class="nav navbar-nav ">
                    <li><a href="{{URL('/')}}">หน้าหลัก</a></li>
                    <li><a href="{{URL('/schedule')}}">กำหนดการ</a></li>
                    <li class="dropdown">
                        <a class="dropdown-toggle" data-toggle="dropdown" href="#">การแข่งขัน <span class="caret"></span></a>
                        <ul class="dropdown-menu">
                            <li><a href="{{URL('/register/competition/esport')}}">การแข่งกีฬาอิเล็กทรอนิกส์</a></li>
                            <li><a href="{{URL('/register/competition/php')}}">การแข่งพัฒนาเว็บไซต์</a></li>
                            <li><a href="{{URL('/register/competition/itquiz')}}">การแข่งตอบปัญหา</a></li>
                            <li><a href="{{URL('/register/competition/network')}}">การแข่งความปลอดภัยของระบบคอมพิวเตอร์</a></li>
                            <li><a href="{{URL('/register/competition/pitching')}}">การแข่งนำเสนอแผนธุรกิจ</a></li>
                        </ul>
                    </li>
                    <li><a href="{{URL('/route')}}">การเดินทาง</a></li>
                    <li><a href="{{URL('/contact')}}">ติดต่อ</a></li>
                </ul>
            </div>
        </div>
    </nav>
</header>

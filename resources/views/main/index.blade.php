<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>{{ $title }}IT Ladkrabang Open House 2016</title>

    <!--Bootstrap-->
    <link href="{{URL::asset('assets/css/bootstrap.min.css')}}" rel="stylesheet">
    <link rel="stylesheet" href="{{ URL::asset('assets/css/main.css') }}">
    <link rel="stylesheet" href="{{ URL::asset('assets/css/font-awesome.min.css') }}">
    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>
<body class="regis-body">
<nav class="navbar navbar-default navbar-fixed-top" role="navigation">
    <div class="container shadow">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#main-nav">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="/">
                <img src="{{ URL::asset('assets/image/color.png') }}" class="logo">
            </a>
        </div>
        <div class="collapse navbar-collapse" id="main-nav">
            <ul class="nav navbar-nav">
                <li>
                    <a href="{{URL('/')}}">หน้าแรก</a>
                </li>
                <li>
                    <a href="{{URL('/schedule')}}">กำหนดการและกิจกรรม</a>
                </li>
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                        การแข่งขัน <span class="caret"></span>
                    </a>
                    <ul class="dropdown-menu" role="menu">
                        <li>
                            <a href="{{URL('/register/competition/esport')}}">

                                การแข่งขันกีฬาอิเล็กทรอนิกส์
                            </a>
                        </li>
                        <li>
                            <a href="{{URL('/register/competition/itquiz')}}">

                                การแข่งขันตอบปัญหา
                            </a>
                        </li>
                        <li>
                            <a href="{{URL('/register/competition/php')}}">

                                การแข่งขันพัฒนาเว็บไซต์
                            </a>
                        </li>
                        <li>
                            <a href="{{URL('/register/competition/network')}}">

                                การแข่งขันความปลอดภัยของระบบคอมพิวเตอร์
                            </a>
                        </li>
                        <li>
                            <a href="{{URL('/register/competition/pitching')}}">

                                การแข่งขันการนำเสนอแผนธุรกิจ
                            </a>
                        </li>
                    </ul>
                </li>
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                        การเดินทาง <span class="caret"></span>
                    </a>
                    <ul class="dropdown-menu" role="menu">
                        <li>
                            <a href="{{URL('/route/car')}}">

                                การเดินทางโดยรถยนต์
                            </a>
                        </li>
                        <li>
                            <a href="{{URL('/route/bus')}}">

                                การเดินทางโดยรถประจำทาง
                            </a>
                        </li>
                        <li>
                            <a href="{{URL('/route/train')}}">

                                การเดินทางโดยรถไฟ/รถไฟฟ้า
                            </a>
                        </li>
                    </ul>
                </li>
                <li>
                    <a href="{{URL('/contact')}}">ติดต่อสอบถาม</a>
                </li>
            </ul>
        </div><!-- /.navbar-collapse -->
    </div><!-- /.container-fluid -->
</nav>

@yield('main')

<footer>
    <div class="container footer shadow --invert">
        <div class="credit-container">
            <span>Faculty of Information Technology at KMITL © 2016</span>
            <span class="pull-right">
                Open House 2011 | 2012 | 2013 | 2014 | 2016 Developers
                <a href="#" class="back-to-top">
                    <i class="fa fa-chevron-up"></i>
                </a>
            </span>
        </div>
    </div>
</footer>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
<script src="{{URL::asset('assets/js/bootstrap.min.js')}}"></script>
</body>
</html>

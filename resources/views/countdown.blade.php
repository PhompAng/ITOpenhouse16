<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
        <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
        <meta name="description" content="เปิดบ้านไอทีลาดกระบัง เลือกเรียนเปลี่ยนอนาคต">
        <meta property="og:image" content="{{ URL::asset('assets/image/ogimage.jpg') }}" />
        <title>IT Ladkrabang Open House 2016</title>

        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.97.6/css/materialize.min.css">

        <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
          <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
          <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
        <![endif]-->

        <style type="text/css">
            @font-face {
                font-family: 'Cloud';
                font-weight: normal;
                src: url({{ URL::asset('assets/fonts/Cloud-Light.otf') }});
            }
            @font-face {
                font-family: 'Cloud';
                font-weight: bold;
                src: url({{ URL::asset('assets/fonts/Cloud-Bold.otf') }});
            }
            .clearfix:after {
                content: ".";
                display: block;
                clear: both;
                visibility: hidden;
                line-height: 0;
                height: 0;
            }

            .clearfix {
                zoom: 1;
            }

            body {
                background: #fcfcfc;
                margin-top: 65px;
            }
            h1 {
                /*font-family: "Raleway", sans-serif; */
                font-size: 5em;
                color: #78909c;
                line-height: 120%;
            }
            .logo {
                margin: 0 auto;
                width: 70%;
            }
            .date {
                font-family: 'Cloud', sans-serif;
                font-size: 3em;
                margin: 0.5em;
            }
            .dropdown-button {
                margin: 0 20px;
                margin-bottom: 20px;
            }
            svg {
                width: 180px;
                height: 100px;
            }
            .number > svg {
                width: auto;
            }
            .aaa-logo {
                text-align: center;
                margin-bottom: 20px;
            }
            .aaa-logo > img {
                display: inline-block;
                margin: 20px 20px;
                width: 120px;
            }

            /* Small Devices, Tablets */
            @media only screen and (max-width : 768px) {
                h1 {
                    font-size: 4em;
                }
                svg {
                    width: 120px;
                    height: 60px;
                }
                .logo {
                    width: 50%;
                }
            }

            /* Extra Small Devices, Phones */
            @media only screen and (max-width : 480px) {
                h1 {
                    font-size: 3em;
                }
                svg {
                    width: 70px;
                    height: 40px;
                }
                .dropdown-content li>a, .dropdown-content li>span {
                    font-size: 11px;
                }
                .date {
                    font-size: 2em;
                }
                .aaa-logo > img {
                    display: inline-block;
                    margin: 20px 20px;
                    width: 80px;
                }
            }

            /* Custom, iPhone Retina */
            @media only screen and (max-width : 320px) {
                h1 {
                    font-size: 2.5em;
                }
                svg {
                    width: 60px;
                    height: 25px;
                }
                .dropdown-content li>a, .dropdown-content li>span {
                    font-size: 10px;
                }
                .date {
                    font-size: 20px;
                }
                .aaa-logo > img {
                    display: inline-block;
                    margin: 10px 10px;
                    width: 60px;
                }
            }

            .webkit {
                background: linear-gradient(270deg, #78909c, #8BA7B5);
                background-size: 400% 400%;
                -webkit-background-clip: text;

                /* Animate Background Image */

                -webkit-text-fill-color: transparent;
                -webkit-animation: aitf 10s ease infinite;

                /* Activate hardware acceleration for smoother animations */

                -webkit-transform: translate3d(0,0,0);
                -webkit-backface-visibility: hidden;

            }
            @-webkit-keyframes aitf {
                0%{background-position:0% 50%}
                50%{background-position:100% 50%}
                100%{background-position:0% 50%}
            }

            .time_block {
                display: inline-block;
            }

            path {
                stroke: #26a69a;
                fill: none;
                stroke-dasharray: 0, 0;
                stroke-width: 4;
                animation: dash 7s linear;
            }

            @keyframes dash {
                from{
                    stroke-dasharray: 105, 16;
                }
                to {
                    stroke-dasharray: 0, 0;
                    stroke-dashoffset: 1000;
                }
            }

            .wrapper {
                width: 100%;
                text-align: center;
            }

            .wrapper2 {
                margin-left:auto;
                margin-right:auto;
            }
        </style>
    </head>
    <body>
        <div class="wrapper">
            <div class="wrapper2">
                <img src="{{ URL::asset('assets/image/color.svg') }}" class="logo">
                <p class="date center">26 สิงหาคม 2559</p>
                <div id="countdownHolder1">
                    <!-- holder for countdown -->
                </div>
                <a class='dropdown-button btn btn-large' href='#' data-activates='dropdown1' data-constrainwidth="false" >ลงทะเบียนเข้าชมงาน</a>
                <ul id='dropdown1' class='dropdown-content'>
                    <li><a href="{{URL('/register/guest')}}">ลงทะเบียนของบุคคลทั่วไป</a></li>
                    <li><a href="{{URL('/register/guest_student')}}">ลงทะเบียนของนักเรียน/นักศึกษา</a></li>
                    <li><a href="{{URL('/register/guest_school')}}">ลงทะเบียนของโรงเรียน</a></li>
                </ul>
                <a class='dropdown-button btn btn-large' href='#' data-activates='dropdown2' data-constrainwidth="false">ลงทะเบียนแข่งขัน</a>
                <ul id='dropdown2' class='dropdown-content'>
                    <li><a href="{{URL('/register/competition/esport')}}">การแข่งขันกีฬาอิเล็กทรอนิกส์</a></li>
                    <li><a href="{{URL('/register/competition/network')}}">การแข่งขันความปลอดภัยของระบบคอมพิวเตอร์</a></li>
                    <li><a href="{{URL('/register/competition/php')}}">การแข่งขันพัฒนาเว็บไซต์</a></li>
                    <li><a href="{{URL('/register/competition/pitching')}}">การแข่งขันการนำเสนอแผนธุรกิจ</a></li>
                    <li><a href="{{URL('/register/competition/itquiz')}}">การแข่งขันตอบคำถามด้านเทคโนโลยีสารสนเทศ</a></li>
                </ul>
            </div>
        </div>

        <div class="container">
            <div class="aaa-logo clearfix">
                <img class="img-responsive" src="{{URL::asset('assets/image/aaa/bks.svg')}}" alt="">
                <img class="img-responsive" src="{{URL::asset('assets/image/aaa/vmware.svg')}}" alt="">
                <img class="img-responsive" src="{{URL::asset('assets/image/aaa/camphub.svg')}}" alt="">
                <img class="img-responsive" src="{{URL::asset('assets/image/aaa/dekd.svg')}}" alt="">
                <img class="img-responsive" src="{{URL::asset('assets/image/aaa/dtac.svg')}}" alt="">
                <img class="img-responsive" src="{{URL::asset('assets/image/aaa/greensyn.svg')}}" alt="">
                <img class="img-responsive" src="{{URL::asset('assets/image/aaa/lactasoy.svg')}}" alt="">
                <img class="img-responsive" src="{{URL::asset('assets/image/aaa/osot.svg')}}" alt="">
                <img class="img-responsive" src="{{URL::asset('assets/image/aaa/panda.svg')}}" alt="">
                <img class="img-responsive" src="{{URL::asset('assets/image/aaa/samart.svg')}}" alt="">

            </div>
        </div>


        <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.97.6/js/materialize.min.js"></script>
        <script src="{{ URL::asset('assets/js/raphael.js') }}"></script>
        <script src="{{ URL::asset('assets/js/helvetica.js') }}"></script>
        <script src="{{ URL::asset('assets/js/countdown.js') }}"></script>

        <script class="source" type="text/javascript">
            var vw = 500;
            if ($(window).width() <= 480) {
                vw = $(window).width()*0.4;
            } else if ($(window).width() <= 768){
                vw = 300;
            }
            var countdown1 = new Countdown({
                holder_id: "countdownHolder1",
                holder_width: vw,
                end_work: (new Date(2016, 7, 26)).getTime()
            });
        </script>
    </body>
</html>

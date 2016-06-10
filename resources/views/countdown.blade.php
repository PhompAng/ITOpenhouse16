<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
        <meta name="description" content="Page Description">
        <meta name="author" content="Pichai Sivawat">
        <title>IT Ladkrabang Open House 2016</title>

        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.97.6/css/materialize.min.css">

        <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
          <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
          <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
        <![endif]-->

        <style type="text/css">
            @import url(https://fonts.googleapis.com/css?family=Raleway:400,300,200);
            @import url(https://fonts.googleapis.com/css?family=Open+Sans:300);
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
            }

            h1 {
                font-family: "Raleway", sans-serif;
                font-size: 5em;

                background: linear-gradient(270deg, #78909c, #9DBCCC);
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

            svg {
                width: 180px;
                height: 100px;
            }

            .time_block {
                display: inline-block;
            }

            path {
                stroke: #78909c;
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
                position: fixed;
                display: table;
                table-layout: fixed;
                width: 100%;
                min-height: 100%;
                display: table;
                text-align: center;
            }

            .wrapper2 {
                position: relative;
                display: table-cell;
                vertical-align: middle;
            }
            .number {
                font-size: 7em;
                font-weight: 400;
                vertical-align: bottom;
                color: #78909c;
                font-family: "Open Sans", sans-serif;
            }
        </style>
    </head>
    <body>
        <div class="wrapper">
            <div class="wrapper2">
                <h1>IT Openhouse 2016</h1>
                <div id="countdownHolder1">
                    <!-- holder for countdown -->
                </div>
                <a class='dropdown-button btn btn-large' href='#' data-activates='dropdown1'>ลงทะเบียนเข้าชมงาน</a>
                <ul id='dropdown1' class='dropdown-content'>
                    <li><a href="#!">ลงทะเบียนของบุคคลทั่วไป</a></li>
                    <li><a href="#!">ลงทะเบียนของนักเรียน/นักศึกษา</a></li>
                    <li><a href="#!">ลงทะเบียนของโรงเรียน</a></li>
                </ul>
            </div>
        </div>


        <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.97.6/js/materialize.min.js"></script>
        <script src="{{ URL::asset('assets/js/raphael.js') }}"></script>
        <script src="{{ URL::asset('assets/js/helvetica.js') }}"></script>
        <script src="{{ URL::asset('assets/js/countdown.js') }}"></script>

        <script class="source" type="text/javascript">
            var countdown1 = new Countdown({
                holder_id: "countdownHolder1",
                holder_width: 500,
                end_work: (new Date(2016, 7, 26)).getTime()
            });
        </script>
    </body>
</html>

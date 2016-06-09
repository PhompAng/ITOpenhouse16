<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
        <meta name="description" content="Page Description">
        <meta name="author" content="Pichai Sivawat">
        <title>Page Title</title>

        <!-- Bootstrap -->
        <link href="css/bootstrap.min.css" rel="stylesheet">

        <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
          <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
          <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
        <![endif]-->

        <style type="text/css">
            @import url(http://fonts.googleapis.com/css?family=Open+Sans:300,400);
            body {
                background: #363f48;
                color: white;
                font: normal 12px 'Open Sans', sans-serif;
                margin-top: 20px;
            }
            ul.countdown {
                list-style: none;
                margin: 75px 0;
                padding: 0;
                display: block;
                text-align: center;
            }
            ul.countdown li {
                display: inline-block;
            }
            ul.countdown li span {
                font-size: 80px;
                font-weight: 300;
                line-height: 80px;
            }
            ul.countdown li.seperator {
                font-size: 80px;
                line-height: 70px;
                vertical-align: top;
            }
            ul.countdown li p {
                color: #a7abb1;
                font-size: 14px;
            }
            a {
                color: #76949F;
                text-decoration: none;
            }
            a:hover {
                text-decoration: underline;
            }
        </style>
    </head>
    <body>
        <ul class="countdown">
            <li>
                <span class="days">00</span>
                <p class="days_ref">days</p>
            </li>
            <li class="seperator">.</li>
            <li>
                <span class="hours">00</span>
                <p class="hours_ref">hours</p>
            </li>
            <li class="seperator">:</li>
            <li>
                <span class="minutes">00</span>
                <p class="minutes_ref">minutes</p>
            </li>
            <li class="seperator">:</li>
            <li>
                <span class="seconds">00</span>
                <p class="seconds_ref">seconds</p>
            </li>
        </ul>

        <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
        <script src="{{ URL::asset('assets/js/jquery.downCount.js') }}"></script>
        <!-- Include all compiled plugins (below), or include individual files as needed -->
        <script src="js/bootstrap.min.js"></script>

        <script class="source" type="text/javascript">
            $('.countdown').downCount({
                /* MM/DD/YY */
                date: '10/21/2016 12:00:00',
                offset: +7
            }, function () {
                alert('WOOT WOOT, done!');
            });
        </script>
    </body>
</html>

<!DOCTYPE html>
<html lang="th">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
    <!-- The above 3 meta tags *must* come first in the head -->
    <meta property="og:image" content="{{ URL::asset('assets/image/ogimage.jpg') }}" />
    <meta name="theme-color" content="#0bace1">
    <title>{{ $title }}IT Ladkrabang Open House 2016</title>
    <link rel="stylesheet" href="{{URL::asset('assets/new/css/owl.carousel.css')}}" media="none" onload="if(media!='all')media='all'">
    <link rel="stylesheet" href="{{URL::asset('assets/new/css/owl.theme.css')}}" media="none" onload="if(media!='all')media='all'">
    <link href="{{URL::asset('assets/new/css/bootstrap.css')}}" rel="stylesheet">
    <link rel="stylesheet" href="{{ URL::asset('assets/css/font-awesome.min.css') }}">
    <link rel="icon" type="image/png" href="{{URL::asset('assets/new/img/favicon.png')}}" />
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
    <style>
        body {background: #e3e3e3;}
        .rownominus {margin-left: 0;margin-right: 0;}
        .aaa-logo > img {
            display: inline-block;
            width: 120px;
            margin: 20px 20px;
        }
        @media only screen and (max-width : 768px) {
            .aaa-logo > img {
                display: inline-block;
                margin: 20px 10px;
                width: 120px;
            }
        }
        @media only screen and (max-width : 480px) {
            .aaa-logo > img {
                display: inline-block;
                margin: 20px 10px;
                width: 80px;
            }
        }
        @media only screen and (max-width : 320px) {
            .aaa-logo > img {
                display: inline-block;
                margin: 10px 10px;
                width: 80px;
            }
        }
    </style>
</head>
<body>
@include('new.header')
@yield('content')
@include('new.sponsor')
<!-- FOOTER is here -->
@include('new.footer')
<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
<script src="{{URL::asset('assets/new/js/jquery-1.11.1.min.js')}}"></script>
<!-- Include all compiled plugins (below), or include individual files as needed -->
<script src="{{URL::asset('assets/new/js/bootstrap.min.js')}}"></script>
<script src="{{URL::asset('assets/new/js/owl.carousel.min.js')}}"></script>
@yield('script')
</body>
</html>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

</head>
<body>
    <h1>การแข่งขัน {{$competition}}  | IT Ladkrabang Open House 2016</h1>
    <strong>สวัสดี คุณ{{$account['name']}}</strong>
    <p>
        เราได้รับข้อมูลการลงทะเบียนเข้าแข่งขัน <strong>{{$competition}}</strong> ของทีม <strong>{{$team}}</strong> เรียบร้อยแล้ว<br>
        {{-- คุณสามารถดาวน์โหลดใบสมัครการแข่งขันได้ที่ <a href="{{ route('download', $filename) }}">{{ route('download', $filename) }}</a> --}}
        และติดตามสถานะของการสมัครได้ที่ <a href="{{ URL::to("/register/check/") . "/" . $type . "/" . $remember}}">{{ URL::to("/register/check/") . "/" . $type . "/" . $remember}}</a>
        สามารถติดตามการแข่งขันได้ที่ <a href="https://openhouse.it.kmitl.ac.th/">https://openhouse.it.kmitl.ac.th/</a>
    </p>
    <p>
        ขอบคุณที่ให้ความสนใจเข้าร่วมการแข่งขันของเรา
    </p>
</body>

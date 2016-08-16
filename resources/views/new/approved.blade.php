@extends('new.index')
@section('content')
    <div class="paper">
        <div class="container">
            <h1 class="light text-center">ประกาศรายชื่อผู้มีสิทธิ์เข้าร่วมการแข่งขันทางวิชาการ</h1>
            <h2 class="light text-center">{{$type}}</h2>
            <hr>
            <table class="table">
                <thead>
                    <tr>
                        <th>ชื่อทีม</th>
                        <th>ชื่อสถานศึกษา</th>
                        <th>จังหวัด</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($datas as $data)
                        <tr>
                            <td>{{$data['team_name']}}</td>
                            <td>{{$data['school']}}</td>
                            <td>{{$data['school_province']}}</td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
@endsection

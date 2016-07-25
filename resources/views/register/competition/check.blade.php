@extends('new.index')
@section('content')
    <div class="paper">
        <div class="container">
            <h1 class="light text-center">สถานะลงทะเบียนการแข่งขัน</h1>
            <hr>
            <div class="check">
                <section class="check-header">
                    <div class="row">
                        <div class="col-xs-12">
                            <h1 class="text-center">{{ $team->team_name }}</h1>
                        </div>
                    </div>
                </section>
                <section class="check-result">
                    <div class="row">
                        <div class="col-xs-12 col-md-6 text-center" style="margin-bottom: 50px">
                            <i class="fa fa-database" aria-hidden="true" style="font-size:  72px; margin-bottom: 30px;"></i>
                            <p>บันทึกข้อมูล</p>
                            <h4><span class="label label-{{ $team->confirm >= 0 ? "success":"danger" }}">{{ $team->confirm >= 0 ? "Success":"Unsuccess" }}</span></h4>
                        </div>
                        <div class="col-xs-12 col-md-6 text-center">
                            <i class="fa fa-file" aria-hidden="true" style="font-size:  72px; margin-bottom: 30px;"></i>
                            <p>ใบสมัครการแข่งขัน</p>
                            <h4><span class="label label-{{ $team->confirm == 1 ? "success":"danger" }}">{{ $team->confirm == 1 ? "Success":"Unsuccess" }}</span></h4>
                        </div>
                    </div>
                </section>
            </div>
        </div>
    </div>

    <script>
        document.body.style.backgroundImage = "none";
        document.body.style.backgroundColor = "#91A8d0";
    </script>

@endsection

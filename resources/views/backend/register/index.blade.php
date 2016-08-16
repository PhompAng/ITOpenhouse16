@extends('backend.index')
@section('content')
    <div id="guest">
        <div class="row">
            <div class="col-xs-12 col-md-6">
                <div class="input-group">
                    <input class="search form-control" placeholder="Search" />
                    <div class="input-group-addon"><i class="fa fa-search" aria-hidden="true"></i></div>
                </div>
            </div>
        </div>
        <table class="table table-hover table-nowrap table-responsive">
            <thead>
            <th class="sort" data-sort="id">id <i class="fa fa-sort" aria-hidden="true"></i></th>
            <th class="sort" data-sort="name">name <i class="fa fa-sort" aria-hidden="true"></i></th>
            <th class="sort" data-sort="code">type <i class="fa fa-sort" aria-hidden="true"></i></th>
            <th class="sort" data-sort="code">code <i class="fa fa-sort" aria-hidden="true"></i></th>
            <th class="sort" data-sort="confirm">confirm <i class="fa fa-sort" aria-hidden="true"></i></th>
            <th class="sort" data-sort="gift">gift <i class="fa fa-sort" aria-hidden="true"></i></th>
            <th class="sort" data-sort="created_at">created_at <i class="fa fa-sort" aria-hidden="true"></i></th>
            <th>Checkin</th>
            <th>Gift</th>
            </thead>
            <tbody class="list">
            @foreach($datas as $data)
                <tr>
                    <td class="id">{{$data['id']}}</td>
                    <td class="name">{{$data['prefix'] . $data['name'] . ' ' . $data['surname']}}</td>
                    <td class="type">
                        @if($data['type'] == 1)
                            บุคคลทั่วไป
                        @elseif($data['type']==2)
                            นักเรียน/นักศึกษา
                        @else
                            โรงเรียน
                        @endif
                    </td>
                    <td class="code">{{$data['code']}}</td>
                    <td class="confirm">
                        @if($data['confirm'] != null)
                            <i class="fa fa-circle text-success"></i> {{$data['confirm']}}
                        @else
                            <i class="fa fa-circle text-muted"></i> ไม่ได้เข้าชมงาน
                        @endif
                    </td>
                    <td class="gift">
                        @if($data['gift'] != null)
                            <i class="fa fa-circle text-success"></i> {{$data['gift']}}
                        @else
                            <i class="fa fa-circle text-muted"></i> ไม่ได้รับของที่ระลึก
                        @endif
                    </td>
                    <td class="created_at">{{$data['created_at']}}</td>
                    <td>
                        <form action="{{url('/backend/register/checkin', $data['code'])}}" method="post">
                            {!! csrf_field() !!}
                            <button type="submit" class="btn btn-primary btn-sm" data-toggle="tooltip" title="Checkin" {{$data['confirm'] != null ? 'disabled':''}}><i class="fa fa-map-marker"></i> Checkin</button>
                        </form>
                    </td>
                    <td>
                        <form action="{{url('/backend/register/gift', $data['code'])}}" method="post">
                            {!! csrf_field() !!}
                            <button type="submit" class="btn btn-info btn-sm" data-toggle="tooltip" title="Gift" {{$data['gift'] != null || $data['confirm'] == null ? 'disabled':''}}><i class="fa fa-gift"></i> Gift</button>
                        </form>
                    </td>
                </tr>
            @endforeach
            </tbody>
        </table>
        <p class="total"><strong>Total:</strong> {{sizeof($datas)}}</p>
        <a href="{{URL::route('commonExcel')}}" class="btn btn-primary" disabled>Export</a>
    </div>
@endsection
@section('script')
    <script>
        var options = {
            valueNames: [ 'id', 'name', 'type', 'code', 'confirm', 'gift', 'created_at' ]
        };

        var guestList = new List('guest', options);

        $("th.sort").click(function () {
            var thClass = $(this).attr('class').split(" ");
            if (thClass[1] == "asc") {
                $(this).find(':first-child').removeClass("fa-sort").removeClass('fa-sort-desc').addClass("fa-sort-asc");
            } else {
                $(this).find(':first-child').removeClass("fa-sort").removeClass('fa-sort-asc').addClass("fa-sort-desc");
            }
        });
    </script>
@endsection

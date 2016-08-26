@extends('backend.index')
@section('content')
    <div id="form">
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
            <tr>
                <th class="sort" data-sort="id">id <i class="fa fa-sort" aria-hidden="true"></i></th>
                <th class="sort" data-sort="status">status <i class="fa fa-sort" aria-hidden="true"></i></th>
                <th class="sort" data-sort="code">code <i class="fa fa-sort" aria-hidden="true"></i></th>
                <th class="sort" data-sort="created_at">created_at <i class="fa fa-sort" aria-hidden="true"></i></th>
                <th>gift</th>
                <th>action</th>
            </tr>
            </thead>
            <tbody class="list">
                @foreach($datas as $data)
                    <tr>
                        <td class="id">{{$data['id']}}</td>
                        <td class="status">
                            @if($data['status'] == 0)
                                {{$data['status_des']}}
                            @elseif($data['status'] < 10)
                                นักเรียนชั้นมัธยมศึกษาปีที่ {{$data['status']}}
                            @elseif($data['status'] < 20)
                                นักศึกษาชั้นปีที่ {{substr($data['status'], 1)}}
                            @elseif($data['status'] < 30)
                                ครู-อาจารย์
                            @else
                                ผู้ปกครอง
                            @endif
                        </td>
                        <td class="code">{{$data['code']}}</td>
                        <td class="created_at">{{$data['created_at']}}</td>
                        <td>
                            <form action="{{URL::route('postFormGift', $data['id'])}}" method="post">
                                {!! csrf_field() !!}
                                @if($data['gift'] == null)
                                    <button type="submit" class="btn btn-info btn-sm" data-toggle="tooltip" title="Gift"><i class="fa fa-gift"></i> Gift</button>
                                @else
                                    <button type="submit" class="btn btn-danger btn-sm" data-toggle="tooltip" title="Undo"><i class="fa fa-times"></i> Undo</button>
                                @endif
                            </form>
                        </td>
                        <td>
                            <form action="{{URL::route('backend.form.destroy', $data->id)}}" method="post">
                                {!! csrf_field() !!}
                                {!! method_field('DELETE') !!}
                                <a href="{{URL::route('backend.form.show', $data->id)}}" class="btn btn-default btn-xs" data-toggle="tooltip"  title="View"><i class="fa fa-eye" aria-hidden="true"></i></a>
                                <button type="submit" class="btn btn-danger btn-xs" data-toggle="tooltip" title="Delete"><i class="fa fa-times"></i></button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
        <ul class="pagination"></ul>
    </div>
@endsection
@section('script')
    <script type="text/javascript" src="{{URL::asset('assets/js/list.pagination.min.js')}}"></script>
    <script>
        var options = {
            valueNames: [ 'id', 'status', 'code', 'created_at' ],
            page: 13,
            plugins: [ ListPagination({
                innerWindow: 5,
                outerWindow: 2
            }) ]
        };

        var formList = new List('form', options);

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

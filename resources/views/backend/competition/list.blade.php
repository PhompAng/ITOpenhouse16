@extends('backend.index')
@section('content')
    <div id="teams">
        <div class="input-group">
            <input class="search form-control" placeholder="Search" />
            <div class="input-group-addon"><i class="fa fa-search" aria-hidden="true"></i></div>
        </div>
        <table class="table table-hover">
            <thead>
                <th class="sort" data-sort="id">id <i class="fa fa-sort" aria-hidden="true"></i></th>
                <th class="sort" data-sort="team_name">team_name <i class="fa fa-sort" aria-hidden="true"></i></th>
                <th>member</th>
                <th class="sort" data-sort="school">School <i class="fa fa-sort" aria-hidden="true"></i></th>
                <th class="sort" data-sort="confirm">confirm <i class="fa fa-sort" aria-hidden="true"></i></th>
                <th class="sort" data-sort="created_at">created_at <i class="fa fa-sort" aria-hidden="true"></i></th>
                <th>action</th>
            </thead>
            <tbody class="list">
            @foreach($datas as $data)
                <tr>
                    <td class="id">{{$data->id}}</td>
                    <td class="team_name">{{$data->team_name}}</td>
                    <td class="member">
                        <i class="fa fa-graduation-cap" aria-hidden="true"></i> {{ $data->teacher_prefix . $data->teacher_name . " " . $data->teacher_surname }}<br>
                        @foreach($data->member as $member)
                            {{$member["prefix"] . $member["name"] . " " . $member["surname"]}}<br>
                        @endforeach
                    </td>
                    <td class="school">{{$data->school}}</td>
                    <td class="confirm">
                        <form action="{{URL::route('competitionConfirmChange', [$typeText, $data->id])}}" method="post">
                            {!! csrf_field() !!}
                            <select name="confirm" class="confirmOption">
                                <option value="0" {{$data->confirm == 0 ? "selected":""}}>ยังไม่ได้ส่ง</option>
                                <option value="1" {{$data->confirm == 1 ? "selected":""}}>เรียบร้อย</option>
                                <option value="-1" {{$data->confirm == -1 ? "selected":""}}>ลงทะเบียนซ้ำ</option>
                            </select>
                        </form>
                    </td>
                    <td class="created_at">{{$data->created_at}}</td>
                    <td>
                        <a href="{{URL::route('registerCheck', [$type, $data->remember])}}" class="btn btn-default btn-xs" data-toggle="tooltip"  title="Status"><i class="fa fa-circle-o" aria-hidden="true"></i></a>
                        <a href="{{ URL::asset("pdf/" . $data->remember.".pdf") }}" class="btn btn-default btn-xs" data-toggle="tooltip"  title="Download"><i class="fa fa-download" aria-hidden="true"></i></a>
                        <a href="{{URL::route('backend.competition.'.$typeText.'.show', $data->id)}}" class="btn btn-default btn-xs" data-toggle="tooltip"  title="View"><i class="fa fa-eye" aria-hidden="true"></i></a>
                        <a href="{{URL::route('backend.competition.'.$typeText.'.edit', $data->id)}}" class="btn btn-default btn-xs" data-toggle="tooltip"  title="Edit"><i class="fa fa-pencil-square-o" aria-hidden="true"></i></a>
                    </td>
                </tr>
            @endforeach
            </tbody>
        </table>
    </div>
@endsection
@section('script')
    <script>
        var options = {
            valueNames: [ 'id', 'team_name', 'member', 'school', 'confirm', 'created_at' ]
        };

        var teamList = new List('teams', options);

        $("th.sort").click(function () {
            var thClass = $(this).attr('class').split(" ");
            if (thClass[1] == "asc") {
                $(this).find(':first-child').removeClass("fa-sort").removeClass('fa-sort-desc').addClass("fa-sort-asc");
            } else {
                $(this).find(':first-child').removeClass("fa-sort").removeClass('fa-sort-asc').addClass("fa-sort-desc");
            }
        });

        $(".confirmOption").change(function (e) {
            //console.log($(this.form).attr('action'));
            //this.form.submit();
            var url = $(this.form).attr('action');
            var confirm = $(this).val();
            //console.log($(this).serialize());
            $.ajaxSetup({
                headers: {
                    'X-CSRF-Token': $('input[name="_token"]').val()
                }
            });
            $.ajax({
                type: "POST",
                url: url,
                data: $(this).serialize(),
                dataType: 'json',
                done: function (data) {
                    alert(data);
                },
                fail: function (jqXHR, textStatus) {
                    alert(textStatus);
                }
            });
        });
    </script>
@endsection

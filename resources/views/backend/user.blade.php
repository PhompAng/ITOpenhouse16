@extends('backend.index')
@section('content')
    <table class="table table-nowrap">
        <thead>
            <th>id</th>
            <th>name</th>
            <th>register</th>
            <th>esport</th>
            <th>pitching</th>
            <th>quiz</th>
            <th>network</th>
            <th>php</th>
            <th>user</th>
            <th>form</th>
            <th>created_at</th>
        </thead>
        <tbody>
            @foreach($users as $user)
                <tr>
                    <td>{{$user->id}}</td>
                    <td>{{$user->name}}</td>
                    {{--*/ $uac = str_pad(strrev((string)decbin($user->uac)),8,"0")/*--}}
                    @for($i=0;$i<8;$i++)
                        @if($uac[$i])
                            <td>
                                <span class="text-success">
                                    <i class="fa fa-check-circle" aria-hidden="true"></i>
                                </span>
                            </td>
                        @else
                            <td>
                                <span class="text-danger">
                                    <i class="fa fa-times-circle" aria-hidden="true"></i>
                                </span>
                            </td>
                        @endif
                    @endfor
                    <td>{{$user->created_at}}</td>
                </tr>
            @endforeach
        </tbody>
    </table>
@endsection

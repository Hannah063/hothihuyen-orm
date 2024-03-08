@extends('layouts.client')
@section('title')
    {{$title}}
@endsection

@section('content')
    <h1>{{$title}}</h1>
    <a href="{{route('users.add')}}" class="btn btn-primary">Thêm người dùng</a>
    <hr />
    <table class="table table-bordered">
        <thead>
            <tr>
                <th width = '5%'>STT</th>
                <th>Tên</th>
                <th>Email</th>
                <th width='15%'>Thời gian</th>
            </tr>
        </thead>
        <tbody>
            @if (!empty($usersList))
                @foreach ($usersList as $key => $item)
                    <tr>
                        <td>{{$key+1}}</td>
                        <td>{{$item->fullname}}</td>
                        <td>{{$item->email}}</td>
                        <td>{{$item->create_at}}</td>
                    </tr>
                @endforeach
            @else
                <tr>
                    <td colspan="4">Không có người dùng</td>
                </tr>
            @endif
        </tbody>
    </table>
@endsection
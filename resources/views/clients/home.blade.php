@extends('layouts.client')
@section('title')
    {{$title}}
@endsection

@section('sidebar')
    @parent
    <h3>Home Sidebar</h3>
@endsection

@section('content')
    <h1>Trang chủ</h1>
    @datetime('2021-12-15 15:00:30')
    @include('clients.contents.slide')
    @include('clients.contents.about')
    @datetime('2021-11-10 00:30:30')
@endsection

@section('css')

@endsection

@section('js')

@endsection
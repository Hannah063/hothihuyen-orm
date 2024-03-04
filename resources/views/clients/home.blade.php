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
    @include('clients.contents.slide')
    @include('clients.contents.about')

    @env('production')
        <p>Môi trường Production</p>
    @elseenv('test')
    <p>Môi trường Test</p>
    @else 
    <p>Môi trường dev</p>
    @endenv
@endsection

@section('css')

@endsection

@section('js')

@endsection
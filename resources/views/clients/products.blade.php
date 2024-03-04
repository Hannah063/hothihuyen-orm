@extends('layouts.client')
@section('title')
    {{$title}}
@endsection

{{-- @section('sidebar')
    @parent
    <h3>Products Sidebar</h3>
@endsection --}}

@section('content')
    <h1>SẢN PHẨM</h1>
    <x-package-alert></x-package-alert>
    @push('scripts')
        <script>
            console.log('Push lần 2');
        </script>
    @endpush
@endsection

@section('css')

@endsection

@section('js')

@endsection

@prepend('scripts')
    <script>
        console.log('Push lần 1');
    </script>
@endprepend
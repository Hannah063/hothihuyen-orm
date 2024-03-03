{{-- <h1>Trang chủ Unicode</h1>
<!-- <h2>{{$welcome}}</h2> -->
<!-- <h2><?php
    echo request()->keyword;
    ?></h2> -->
<!-- <h2>{{request()->keyword}}</h2> -->
<h2>{{!empty(request()->keyword)?request()->keyword:'Không có gì'}}</h2>
<div class="container">
    {!! !empty($content)?$content:false !!}
</div>

<hr>
{{-- <!-- @for ($i = 1; $i<=10; $i++)
<p>Phần tử thứ: {{$i}}</p>
@endfor -->

<!-- @while ($index<=10)
<p>Phần tử thứ: {{$index}}</p>
@php
    $index++;
@endphp
@endwhile --> --}}

{{-- <!-- @foreach ($dataArr as $key => $item)
<p>Phần tử: {{$item}} - {{$key}}</p>
@endforeach --> --}}

{{-- @forelse ($dataArr as $item)
<p>Phần tử: {{$item}}</p>
@empty
<p>Không có phần tử nào</p>
@endforelse --}}

{{-- @if ($number>=10)
    <p>Đây là giá trị hợp lệ</p>
@else
<p>Giá trị không hợp lệ</p>
@endif --}}

{{-- @if ($number < 0)
    <p>Số âm</p>
@elseif ($number >= 0 && $number < 5)
    <p>Số siêu nhỏ</p>
@elseif ($number >= 5 && $number < 10)
    <p>Số trung bình</p>
@else
    <p>Số lớn</p>
@endif --}}

{{-- @switch($number)
    @case(1)
    @case(3)
    @case(5)
        <p>Số thứ nhất</p>
        @break
    @case(2)
        <p>Số thứ hai</p>
        @break
    @default
        <p>Số còn lại</p>
@endswitch --}}
{{-- 
@for ($i = 1; $i <= 10; $i++)
    @if ($i==5)
        @continue
    @endif
    <p>Phần tử thứ: {{$i}}</p>   
@endfor --}}



{{-- @php
    $number = 5;
    if ($number >= 10) {
        $total = $number + 20;
    } else {
        $total = $number + 10;
    }
    
@endphp

<h3>Kết quả {{$number}} - {{$total}}</h3> --}}
{{-- @php
    $total = 0;
@endphp
@for ($i = 0; $i < 10; $i++)
@php
    $total += $i;
@endphp
    <p>Phần tử: {{$i}}</p>
@endfor
<h3>Tổng: {{$total}}</h3> --}}
{{-- <hr>
<?php
//for ($i=0; $i < 10; $i++) { 
    //echo '<p>Phần tử: '.$i.'</p>';
//}
?> --}}
{{-- 
@php
    // for ($i=0; $i < 10; $i++) { 
    //     echo '<p>Phần tử: '.$i.'</p>';
    // }
@endphp --}}

{{-- @verbatim
<div class="container">
    Hello, {{className}}
</div>
<script>
    Hello, @{{name}}
    Hi, {{age}}
</script>
@endverbatim --}}
{{-- @php
   // $message = 'Đặt hàng thành công';
@endphp
@include('parts.notice')  --}}

@extends('layouts.client')
@section('title')
    {{$title}}
@endsection

@section('sidebar')
    {{-- @parent --}}
    <h3>Home Sidebar</h3>
@endsection

@section('content')
    <h1>TRANG CHỦ</h1>
    <button type="button" class="show">Show</button>
@endsection

@section('css')
    <style>
        header{
            background: blue;
            color: #fff;
        }
    </style>
@endsection

@section('js')
    <script>
        document.querySelector('.show').onclick = function(){
            alert('Thành công');
        }
    </script>
@endsection
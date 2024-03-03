<h1>Trang chủ Unicode</h1>
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

@for ($i = 1; $i <= 10; $i++)
    @if ($i==5)
        @continue
    @endif
    <p>Phần tử thứ: {{$i}}</p>   
@endfor


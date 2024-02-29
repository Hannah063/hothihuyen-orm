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
<!-- @for ($i = 1; $i<=10; $i++)
<p>Phần tử thứ: {{$i}}</p>
@endfor -->

<!-- @while ($index<=10)
<p>Phần tử thứ: {{$index}}</p>
@php
    $index++;
@endphp
@endwhile -->

@foreach ($dataArr as $item)
<p>Phần tử: {{$item}} - {{$key}}</p>
@endforeach
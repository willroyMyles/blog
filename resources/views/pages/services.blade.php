
@extends('layouts.app')

@section('content')
<h1>welcome to blog/ {{$title}}</h1>
<p>this is the blog application from the artisanians</p> 

@if(count($services) > 0)
<ul class="list-group">
    @foreach ($services as $item)
        <li class="list-group-item">{{$item}}</li>
    @endforeach
</ul>
@endif
@endsection
  


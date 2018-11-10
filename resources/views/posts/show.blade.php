@extends('layouts.app')

@section('content')

<a href="/posts" class="btn btn-dark btn-sm">go back</a><br>
<br>

<h3>{{$post->title}}</h1><br>
<img style="width: 30%" src="/storage/cover_images/{{$post->cover_image}}" alt=""><br><br>

<div>
    {!!$post->body!!}
</div>
<hr> 
<small>Written on {{$post->created_at}} by {{$post->user->name}}</small>
<hr>
    @if(!Auth::guest())
        @if(Auth::user()->id == $post->user->id)
            <a href="/posts/{{$post->id}}/edit" class="btn btn-dark">Edit</a>
            {!!Form::open(['action' => ['PostController@destroy', $post->id], 'method'=> 'POST','class'=> 'pull-right mr-auto' ])!!}
            {!!Form::hidden('_method', 'DELETE')!!}
            {!!Form::submit('Delete', ['class'=> 'btn btn-danger float-right'])!!}
            {{-- {!!Form::button('Edit', ['class'=>'btn btn-dark float-right', 'href'=> '/posts/{{$post->id}}/edit'])!!} --}}
            {!!Form::close()!!}
        @endif
    @endif
@endsection
@extends('layouts.app')

@section('content')

<a href="/posts" class="btn btn-default">go back</a>
<h3>{{$post->title}}</h1>

<div>
    {!!$post->body!!}
</div>
<hr> 
<small>Written on {{$post->created_at}}</small>
<hr>
<a href="/posts/{{$post->id}}/edit">Edit</a>

{!!Form::open(['action' => ['PostController@destroy', $post->id], 'method'=> 'POST','class'=> 'pull-right mr-auto' ])!!}

{!!Form::hidden('_method', 'DELETE')!!}
{!!Form::submit('Delete', ['class'=> 'btn btn-danger float-right'])!!}
{!!Form::close()!!}
@endsection
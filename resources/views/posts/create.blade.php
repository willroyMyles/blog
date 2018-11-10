@extends('layouts.app')

@section('content')
<h1>{{$title}} </h1>

{!! Form::open(['action' => 'PostController@store', 'method' => 'POST', 'enctype' => 'multipart/form-data']) !!}
<div class="form-group">
    {{Form::label('title', 'Title')}}
    {{Form::text('title', '', ['class' => 'form-control', 'placeholder'=> 'title'])}}
</div>
<div class="form-group">
    {{Form::label('body', 'Body')}}
    {{Form::textarea('body', '', ['id'=> 'article-ckeditor', 'class' => 'form-control', 'placeholder'=> 'Type here to begin...'])}}
</div>
<div class="form-group">
    {{Form::file('cover_image')}}
</div>
    {{Form::submit('Submit',['class' => 'btn btn-primary'])}}
{!! Form::close() !!}



@endsection
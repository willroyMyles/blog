@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Dashboard</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                    <a href="/posts/create" class="btn btn-primary"> create post </a><br> 
                    <br>
                    @if(count($posts) > 0)
                    <h3>Your blog posts</h3>
                    <table class="table table-striped table-condensed">
                        <tr>
                            <th>Title</th>
                            <th>Created date</th>
                            <th>Action</th>
                            <th></th>
                        </tr>
                        <br>
                        @foreach($posts as $post)
                        <tr>
                        <td><h4>{{$post->title}}</h4></td>
                        <td><small>{{$post->created_at}}</small></td>
                        <td><a href="/post/{{$post->id}}/edit" class="btn btn-warning">Edit</a></td>
                            <td>{!!Form::open(['action' => ['PostController@destroy', $post->id], 'method'=> 'POST','class'=> 'pull-right mr-auto' ])!!}

                                {!!Form::hidden('_method', 'DELETE')!!}
                                {!!Form::submit('Delete', ['class'=> 'btn btn-danger float-right'])!!}
                                {!!Form::close()!!}</td>
                        </tr>
                        @endforeach
                    </table>
                    @else
                <h3>{{Auth::user()->name}} has no posts</h3>
                    @endif
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

@extends('layouts.app')

@section('content')
<div class="container">
<a href="/posts" class="btn btn-default">Go Back</a>
<h1>{{$post->title}}</h1>

    <div>
            {!!$post->body!!}
        
    </div>
    <hr>
    <small>written on:  {{$post->created_at}} by {{$post->user->name}}
        <hr>
    @if(!Auth::guest())
    @if(Auth::user()->id == $post->user_id)
    <a href="/posts/{{$post->id}}/edit" class="btn btn-default">Edit</a>

    {!! Form::open(['action' => ['PostsController@destroy', $post->id], 'method' => 'POST', 'class' => 'pull-right']) !!}
 
    {{Form::hidden('_method', 'DELETE')}}
    {{Form::submit('Delete', ['class' => 'btn btn-danger'])}} 
   
{!! Form::close() !!}
@endif
@endif
</div>
@endsection
@extends('layouts.app')

@section('content')

	<h1>{{$post->title}}</h1>
	<img style="width: 100%" src="/storage/cover_images/{{$post->cover_image}}">
	<div class="mt-5">{!! $post->content !!}</div>
	<hr>
	<small>Written on {{$post->created_at}} by <strong>{{$post->user->name}}</strong></small><br>
	
	@if(!Auth::guest() && Auth::user()->id == $post->user_id)
		<a href="/posts/{{$post->id}}/edit" class="btn btn-primary">Edit</a>

		{!! Form::open(['action' => ['PostController@destroy', $post->id], 'method' => 'POST', 'class' => 'float-right']) !!}

		{{ Form::hidden('_method', 'DELETE') }}
		{{ Form::submit('Delete', ['class' => 'btn btn-danger']) }}

		{!! Form::close() !!}
	@endif
	<hr>
	<a href="/posts" class="btn btn-primary">Go back</a>

@endsection
@extends('layouts.app')

@section('content')
<h1>Edit post</h1>

{!! Form::open(['action' => ['PostController@update', $post->id], 'method' => 'POST', 'enctype' => 'multipart/form-data']) !!}
	<div class="form-group">
		{{ Form::label('title', 'Title') }}
		{{ Form::text('title', $post->title, ['class' => 'form-control', 'placeholder' => 'Title']) }}
	</div>
	<div class="form-group">
		{{ Form::label('content', 'Content') }}
		{{ Form::textarea('content', $post->content, ['id' => 'article-ckeditor' ,'class' => 'form-control', 'placeholder' => 'Content']) }}
	</div>
	<div class="form-group">
		{{ Form::file('cover_image') }}
	</div>
	{{ Form::hidden('_method', 'PUT') }}
	{{ Form::submit('Submit', ['class' => 'btn btn-primary']) }}
{!! Form::close() !!}
@endsection
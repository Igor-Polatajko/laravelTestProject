@extends('layouts.app')



@section('content')
<h1>Posts:</h1>

	@if(count($posts) > 0)
		@foreach($posts as $post)
			<div class="well">
				<div class="row">
					<div class="col-md-4 col-sm-4">
						<img style="max-width: 100%; max-height: 100%" src="storage/cover_images/{{$post->cover_image}}">
					</div>
					<div class="col-md-8 col-sm-8">
						<h3><a href="/posts/{{$post->id}}">{{$post->title}}</a></h3>
						<small>Writen on {{$post->created_at}} by <strong>{{$post->user->name}}</strong></small>
					</div>			
				</div>


				
			</div>
		@endforeach
		{{$posts->links()}}
	@else
		<h3>There are no posts here</h3>
	@endif
@endsection
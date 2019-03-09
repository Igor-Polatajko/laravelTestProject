@extends('layouts.app')

@section('content')
	<h1>Services</h1>
	<h3>Services we provide:</h3>

	@if(!empty($services))
		<ul>
			@foreach($services as $service)
			<li><h4>{{$service}}</h4></li>
			@endforeach
		</ul>
	@endif

@endsection

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

                  <a class="btn btn-primary mt-3" href="/posts/create">Create post</a>

                    <h2 class="mt-5">Your posts:</h2>

                    @if(count($posts) > 0) 
                        <table class="table table-striped">
                            <tr>
                                <th><h5>Title</h5></th>
                                <th></th>
                                <th></th>
                            </tr> 
                            @foreach($posts as $post)
                            <tr>
                                <td><h5>{{$post->title}}</h5></td>
                                <td><h5><a class="btn btn-primary" href="posts/{{$post->id}}/edit">Edit</a></h5></td>
                                <td>
                                    <h5>
                                    {!! Form::open(['action' => ['PostController@destroy', $post->id], 'method' => 'POST', 'class' => 'float-right']) !!}
                                    {{ Form::hidden('_method', 'DELETE') }}
                                    {{ Form::submit('Delete', ['class' => 'btn btn-danger']) }}
                                    {!! Form::close() !!}
                                    </h5>
                                </td>
                            </tr>
                            @endforeach
                        </table>
                    @else
                        <h3 class="mt-3">You don't have any post now!</h3>
                    @endif


                </div>
            </div>
        </div>
    </div>
</div>
@endsection

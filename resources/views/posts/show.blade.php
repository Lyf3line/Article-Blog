@extends('layouts.app')

@section('content')
	<a href="/posts" class="btn btn-default">Go Back</a>
	<br>
	<h1>{{$post->title}}</h1>
	<small>Written on {{$post->created_at}}</small>
	<br><br>
	<div>
		{{$post->body}}
	</div>
@endsection
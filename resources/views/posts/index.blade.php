@extends('layouts.app')

@section('content')
	<h1>Posts</h1>
	<br>
	@if(count($posts) >= 1)
		@foreach($posts as $post)
			<div class="breadcrumb">
				<h4><a href="/posts/{{$post->id}}">{{$post->title}}</a></h4>
				<small style="margin-left: 10px;">Written on {{$post->created_at}}</small>
			</div>
		@endforeach
		{{-- $posts->links() --}}
	@else
		<p>No posts found</p>
	@endif
@endsection
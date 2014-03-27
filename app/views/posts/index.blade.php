@extends('layouts.master')

@section('content')

 <div class="blog-header">
    <h1 class="blog-title">Welcome to my Blog!</h1>
    <p class="lead blog-description"><em><strong>The Blog site of Sharon Ranels</em></strong></p>
  </div>

	@foreach ($posts as $post)
	<div>
		<h2><a href="{{{ action( 'PostsController@show', $post->id) }}}">{{{ $post->title }}}</a></h2>
		<p>{{{ Str::words($post->body, 8) }}}</p>
		<p>{{{ $post->created_at }}}</p>
	</div>
	@endforeach

@stop
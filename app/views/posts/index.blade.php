@extends('layouts.master')

@section('content')

<div class="blog-header">
	<h1 class="blog-title">List of all blogs</h1>
	<p class="lead blog-description"><em><strong>The Blog site of Sharon Ranels</em></strong></p>
</div>

<p><a href="{{{ action( 'PostsController@create') }}}">Create new blog</a></p>

@foreach ($posts as $post)
	<div>
		<h2><a href="{{{ action( 'PostsController@show', $post->id) }}}">{{{ $post->title }}}</a></h2>
		<p>{{{ Str::words($post->body, 8) }}}</p>
		<p>{{{ $post->created_at->format('l, F jS Y @ h:i:s A') }}}</p>
		<hr class="line">
	</div>

@endforeach

{{ $posts->links() }}

@stop
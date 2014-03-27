@extends('layouts.master')

@section('content')

<p><a href="{{{ action( 'PostsController@update') }}}">Edit post</a></p>

	<div>
		<h2>{{{ $post->title }}}</h2>
		<p>{{{ $post->body }}}</p>
		<p>{{{ $post->created_at }}}</p>
	</div>

	<p><a href="{{{ action( 'PostsController@index') }}}">Return to posts listing</a></p>

@stop

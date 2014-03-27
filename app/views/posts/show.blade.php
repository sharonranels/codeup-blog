@extends('layouts.master')

@section('content')



<div>
		<h2>{{{ $post->title }}}</h2>
		<p>{{{ $post->body }}}</p>
		<p>{{{ $post->created_at }}}</p>
	</div>

	<p><a href="{{{ action( 'PostsController@index') }}}">Return to posts listing</a></p>

@stop

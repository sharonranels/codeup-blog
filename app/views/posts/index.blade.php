@extends('layouts.master')

@section('content')

	@foreach ($posts as $post)
	<div>
		<h2>{{{ $post->title }}}</h2>
		<p>{{{ $post->title }}}</p>
		<p>{{{ $post->created_at }}}</p>
	</div>
	@endforeach

@stop
@extends('layouts.master')

@section('content')

<a href="#" id="btnDeletePost">Delete post</a> |
<a href="{{{ action('PostsController@edit', $post->id) }}}">Edit post</a>



	<div>
		<h2>{{{ $post->title }}}</h2>
		<p>{{{ $post->body }}}</p>
		<p>{{{ $post->created_at->setTimezone('America/Chicago')->format('l, F jS Y @ h:i:s A') }}}</p>
	</div>

	<p><a href="{{{ action( 'PostsController@index') }}}">Return to posts listing</a></p>

	{{ Form::open(array('action' => array('PostsController@destroy', $post->id), 'method' => 'delete', 'id' => 'formDeletePost')) }}
	{{ Form::close() }}

@stop

@section('bottom-script')

<script>

$('#btnDeletePost').on('click', function (e) {
	e.preventDefault();
	if (confirm('Are you sure you want to delete this post?')) {
		$('#formDeletePost').submit();
	}
});


</script>

@stop

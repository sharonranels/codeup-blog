@extends('layouts.master')

@section('content')

<p><a href="{{{ action( 'PostsController@index') }}}">Return to posts listing</a></p>

@if ($user_rights == true)
<a href="#" id="btnDeletePost">Delete post</a> |
<a href="{{{ action('PostsController@edit', $post->id) }}}">Edit post</a>
@endif


	<div>
		<h2>{{{ $post->title }}}</h2>
		<p>By: {{{ ucfirst($post->user->first_name) . " " . ucfirst(substr($post->user->last_name, 0, 1)) . "."}}}</p>
		<p>{{{ $post->body }}}</p>
		<p>{{{ $post->created_at->format('l, F jS Y @ h:i:s A') }}}</p>
		<img src="{{{ $post->post_image }}}">
	</div>


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

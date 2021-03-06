@extends('layouts.master')

@section('top-script')
<link rel="stylesheet" href="/css/home_style_sheet.css">
@stop

@section('content')

<div class="blog-header">
	<h1 style="color: white;"class="blog-title">Sharon Ranels</h1>
	<p style="color: #A59E9E;" class="lead blog-description"><em><strong>Welcome to my Blog!</em></strong></p>
</div>
    
{{ Form::open(array('action' => array('PostsController@index'), 'method' => 'GET', 'class'=>'form-search')) }}
    <div class="input-prepend">
		<button type="submit" class="btn"><a href="{{{ action( 'PostsController@create') }}}" class="blk-font">Create new blog</a></button> OR 
        <button type="submit" class="btn">Search for key word(s):</button>
        <input type="text" class="top-pad bottom-margin span2 search-query" name="search">
    </div>
{{ Form::close()}}

<h4 class="white-font top-pad" color:"white">Click a blog title to see more details</h4>
<h4 class="white-font top-pad" color:"white">You can write your own blog by signing in or registering to this site</h4>

<table class="table show-border">
	<tr style="border: solid grey 3px;">
		<th>Title</th>
		<th>By</th>
		<th>Date</th>
		<th>Blog</th>
		<th>Image</th>
	</tr>
	@foreach ($posts as $post)
		<tr style="border: solid grey 3px;">
			<td style="width: 175px;" id="hover-color"><a href="{{{ action( 'PostsController@show', $post->id) }}}"><strong>{{{ $post->title }}}</strong></a></td>
			<td style="width: 175px;">{{{ ucfirst($post->user->first_name) . " " . ucfirst(substr($post->user->last_name, 0, 1)) . "."}}}</td>
			<td>{{{ $post->created_at->format('n/j/y') }}}</td>
			<td>{{ Str::words($post->body, 30) }}</td>
			<td><img class="blog-image" src="{{{ $post->post_image }}}"></td>
		</tr>
	@endforeach
</table>



{{ $posts->appends(array('search' => Input::get('search')))->links() }}


@stop
@extends('layouts.master')

@section('top-script')
<link rel="stylesheet" href="/css/home_style_sheet.css">
@stop

@section('content')

<div class="blog-header">
	<h1 class="blog-title">Sharon Ranels</h1>
	<p class="lead blog-description"><em><strong>Welcome to my Blog!</em></strong></p>
</div>
    
{{ Form::open(array('action' => array('PostsController@index'), 'method' => 'GET', 'class'=>'form-search')) }}
    <div class="input-prepend">
		<button type="submit" class="btn"><a href="{{{ action( 'PostsController@create') }}}" class="blk-font">Create new blog</button><br>
        <button type="submit" class="btn">Search for key word(s):</button>
        <input type="text" class="top-pad bottom-margin span2 search-query" name="search">
    </div>
{{ Form::close()}}

<p class="white-font" color:"white"><em>Click a blog title to see more details</em></p>

<table class="table show-border">
	<tr>
		<th>Title</th>
		<th>Date</th>
		<th>Blog</th>
		<th>Image</th>
	</tr>
	@foreach ($posts as $post)
		<tr>
			<td id="hover-color"><a href="{{{ action( 'PostsController@show', $post->id) }}}">{{{ $post->title }}}</a></td>
			<td>{{{ $post->created_at->format('l, F jS Y') }}}</td>
			<td>{{ Str::words($post->body, 30) }}</td>
			<td><img class="blog-image" src="{{{ $post->post_image }}}"></td>
		</tr>
	@endforeach
</table>



{{ $posts->appends(array('search' => Input::get('search')))->links() }}


@stop
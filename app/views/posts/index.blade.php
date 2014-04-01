@extends('layouts.master')

@section('content')

<div class="blog-header">
	<h1 class="blog-title">List of all blogs</h1>
	<p class="lead blog-description"><em><strong>The Blog site of Sharon Ranels</em></strong></p>
</div>

<hr class="line">

<p><a href="{{{ action( 'PostsController@create') }}}">Create new blog</a></p>

<hr class="line">
    
{{ Form::open(array('action' => array('PostsController@index'), 'method' => 'GET', 'class'=>'form-search')) }}
    <div class="input-prepend">
        <button type="submit" class="btn">Search for key word(s):</button>
        <input type="text" class="span2 search-query" name="search">

    </div>
{{ Form::close()}}

<hr class="line">

@foreach ($posts as $post)
	<div>
		<h2><a href="{{{ action( 'PostsController@show', $post->id) }}}">{{{ $post->title }}}</a></h2>
		<p>By: {{{ $post->user->email }}}</p>
		<p>{{{ Str::words($post->body, 40) }}}</p>
		<p>{{{ $post->created_at->format('l, F jS Y @ h:i:s A') }}}</p>
	</div>

@endforeach

{{ $posts->appends(array('search' => Input::get('search')))->links() }}

<hr class="line">

@stop
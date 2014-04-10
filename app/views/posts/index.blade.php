@extends('layouts.master')

@section('top-script')
<link rel="stylesheet" href="/css/home_style_sheet.css">
@stop

@section('content')

<div class="blog-header">
	<h1 class="blog-title">Sharon Ranels</h1>
	<p class="lead blog-description"><em><strong>Welcome to my Blog!</em></strong></p>
</div>

<hr class="line">

<p><a href="{{{ action( 'PostsController@create') }}}">Create new blog</a></p>

<hr class="line">
    
{{ Form::open(array('action' => array('PostsController@index'), 'method' => 'GET', 'class'=>'form-search')) }}
    <div class="input-prepend">
        <button type="submit" class="btn">Search for key word(s) or name(s):</button>
        <input type="text" class="span2 search-query" name="search">

    </div>
{{ Form::close()}}

<hr class="line">

@foreach ($posts as $post)
	<div>
		<h2><a href="{{{ action( 'PostsController@show', $post->id) }}}">{{{ $post->title }}}</a></h2>
		<p>By: {{{ ucfirst($post->user->first_name) . " " . ucfirst(substr($post->user->last_name, 0, 1)) . "."}}}</p>
		<p>{{ Str::words($post->body, 40) }}</p>
		<p>{{{ $post->created_at->format('l, F jS Y @ h:i:s A') }}}</p>
		<img class="blog-image" src="{{{ $post->post_image }}}">
		<hr class="line">
	</div>

@endforeach

{{ $posts->appends(array('search' => Input::get('search')))->links() }}


@stop
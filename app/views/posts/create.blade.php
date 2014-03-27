@extends('layouts.master')

@section('content')

 <div class="blog-header">
    <h1 class="blog-title">Welcome to my Blog!</h1>
    <p class="lead blog-description"><em><strong>The Blog site of Sharon Ranels</em></strong></p>
  </div>


<div class="blog-post">
	<form class="form-horizontal" role="form" action="{{{ action('PostsController@store') }}}" method="post">
	  <div class="form-group">
	    <label for="title" class="col-sm-2 control-label">Title</label>
	    <div class="col-sm-10">
	      <input type="text" class="form-control" id="title" name="title" placeholder="Title" value="{{{ Input::old('title') }}}"><br>
		<!-- Validate errors -->
		{{ $errors->has('title') ? $errors->first('title', '<p><span class="help-block">:message</span></p>') : ''}}
	    
	    </div>
	  </div>
	  <div class="form-group">
	    <label for="body" class="col-sm-2 control-label">Body</label>
	    <div class="col-sm-10">
	      <textarea name="body" class="form-control" rows="5">{{{ Input::old('body') }}}</textarea><br>
		<!-- Validate errors -->
		{{ $errors->has('body') ? $errors->first('body', '<p><span class="help-block">:message</span></p>') : ''}}

	    </div>
	  </div>
	  <div class="form-group">
	    <div class="col-sm-offset-2 col-sm-10">
	      <button type="submit" class="btn btn-default">Create Post</button>
	    </div>
	  </div>
	</form>
</div>


<p><a href="{{{ action( 'PostsController@index') }}}">View all posts</a></p>


@stop
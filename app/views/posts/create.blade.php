@extends('layouts.master')

@section('content')

<div class="blog-header">
	<h1 class="blog-title">Add a new blog</h1>
	<p class="lead blog-description"><em><strong>The Blog site of Sharon Ranels</em></strong></p>
</div>


<div class="blog-post">
	{{ Form::open(array('action' => 'PostsController@store', "class"=>"form-horizontal", 'files' => true)) }}

 	<div class="form-group {{ $errors->has('title') ? "has-error" : '' }}">
    	<label for="title" class="col-sm-2 control-label">Title</label>
	   	<div class="col-sm-10">
			{{ Form::text('title', null, array('class' => 'form-control', 'id' => 'title', 'placeholder' => 'Title')) }}
			{{ $errors->has('title') ? $errors->first('title', '<p><span class="help-block">:message</span></p>') : ''}}
	    </div>
  	</div>
  
  	<div class="form-group {{ $errors->has('body') ? "has-error" : '' }}">
    	<label for="body" class="col-sm-2 control-label">Body</label>
	    <div class="col-sm-10">
	    {{Form::textarea('body', null, array('class' => 'form-control')) }}
		{{ $errors->has('body') ? $errors->first('body', '<p><span class="help-block">:message</span></p>') : ''}}
	    </div>
	</div>
	
	<div class="btn btn-default btn-file">
		<div input type="file">Browse</div>
		{{Form::file('image')}}
	</div>

	  <div class="form-group">
	    <div class="col-sm-offset-2 col-sm-10">
	      <button type="submit" class="btn btn-default">Create Post</button>
	    </div>
	  </div>
	{{ Form::close() }}
</div>


<p><a href="{{{ action( 'PostsController@index') }}}">View all posts</a></p>


@stop
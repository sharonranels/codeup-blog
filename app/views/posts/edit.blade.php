@extends('layouts.master')

@section('content')

 <div class="blog-header">
    <h1 class="blog-title">Edit Post</h1>
    <p class="lead blog-description"><em><strong>The Blog site of Sharon Ranels</em></strong></p>
  </div>


<div class="blog-post">
	{{ Form::model($post, array('action' => array('PostsController@update', $post->id), 'method' => 'PUT', 'files' => true, 'class'=>'form-horizontal')) }}

	  <div class="form-group {{ $errors->has('title') ? "has-error" : '' }}">
	    <label for="title" class="col-sm-2 control-label">Title</label>
	    <div class="col-sm-10">
		{{ Form::text('title', null, array('class' => 'form-control', 'id' => 'title', 'placeholder' => 'Title')) }}
		{{ $errors->has('title') ? $errors->first('title', '<p><span class="help-block">:message</span></p>') : ''}}
	    
	    </div>
	  </div>
	  <div class="form-group {{ $errors->has('title') ? "has-error" : '' }}">
	    <label for="body" class="col-sm-2 control-label">Body</label>
	    <div class="col-sm-10">
	    {{Form::textarea('body', null, array('class' => 'form-control')) }}
		{{ $errors->has('body') ? $errors->first('body', '<p><span class="help-block">:message</span></p>') : ''}}
	    </div>
	  </div>

	<span class="btn btn-default btn-file">
    	Browse <input type="file" id="image" name="image">
	</span>

	  <div class="form-group">
	    <div class="col-sm-offset-2 col-sm-10">
	      <button type="submit" class="btn btn-default">Submit Changes</button>
	    </div>
	  </div>
	{{ Form::close() }}
</div>


<p><a href="{{{ action( 'PostsController@index') }}}">View all posts</a></p>


@stop
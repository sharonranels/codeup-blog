@extends('layouts.master')

@section('top-script')
<link rel="stylesheet" href="/css/home_style_sheet.css">
@stop

@section('content')

<div class="blog-header">
	<h1 class="blog-title">Sharon Ranels</h1>
	<span class="lead blog-description"><em><strong>Add a new Blog</em></strong></p>
</div>

<p><a href="{{{ action( 'PostsController@index') }}}"><em>Click here to return to list of all posts<em></a></p>

<div class="blog-post">
	{{ Form::open(array('action' => 'PostsController@store', "class"=>"form-horizontal", 'files' => true)) }}

 	<div class="form-group {{ $errors->has('title') ? "has-error" : '' }}">
	   	<div class="col-sm-4">
			{{ Form::text('title', null, array('class' => 'form-control blog-font', 'id' => 'title', 'placeholder' => 'Enter Blog Title Here')) }}
			{{ $errors->has('title') ? $errors->first('title', '<p><span class="help-block">:message</span></p>') : ''}}
	    </div>
  	</div>
  
  	<div class="form-group {{ $errors->has('body') ? "has-error" : '' }}">
	    <div class="col-sm-8">
	    {{Form::textarea('body', null, array('class' => 'form-control blog-font', 'placeholder' => 'Enter Blog Content Here')) }}
		{{ $errors->has('body') ? $errors->first('body', '<p><span class="help-block">:message</span></p>') : ''}}
	    </div>
	</div>

	<div class="btn btn-default btn-file bottom-margin">
		<div input type="file"><strong>Click to upload a file</strong></div>
		{{Form::file('image')}}
	</div>

	<div class="form-group submit-format">
	    <div class="col-sm-2 col-sm-10">
	      <button type="submit" class="btn btn-default">Create Post</button>
	    </div>
	</div>
	
	{{ Form::close() }}

</div>




@stop

@extends('layouts.master')

@section('top-script')
<link rel="stylesheet" href="/css/home_style_sheet.css">
@stop

@section('content')


	{{ Form::open(array('action' => 'HomeController@doLogin', "class"=>"form-signin")) }}
	    
	    <h2 class="form-signin-heading">Please sign in</h2>

		{{ Form::label('email', 'Email Address') }}
		{{ Form::text('email', null, array('class' => 'form-control')) }}
	    
	    {{ Form::label('password', 'Password') }}
		{{ Form::password('password', array('class' => 'form-control')) }}

		<!-- {{ Form::label('remember', 'Remember Me') }}
		{{ Form::checkbox('remember', 'remember-me', true); }}
 -->
		{{ Form::submit('Sign in', array('class' => 'btn btn-lg btn-primary btn-block submit-btn'))}}

	{{ Form::close() }}

@stop



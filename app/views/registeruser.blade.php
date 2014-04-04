@extends('layouts.master')

@section('content')


	{{ Form::open(array('action' => 'UserController@createUser', "class"=>"form-signin")) }}
	    
	    <h2 class="form-signin-heading">Please create an account</h2>

		{{ Form::label('email', 'Email Address') }}
		{{ Form::text('email', null, array('class' => 'form-control')) }}
	    
	    {{ Form::label('password', 'Password') }}
		{{ Form::password('password', array('class' => 'form-control')) }}
		
		{{ Form::label('first_name', 'First Name') }}
		{{ Form::text('first_name', array('class' => 'form-control')) }}

		{{ Form::label('last_name', 'Last Name') }}
		{{ Form::text('last_name', array('class' => 'form-control')) }}

		<!-- {{ Form::label('remember', 'Remember Me') }}
		{{ Form::checkbox('remember', 'remember-me', true); }}
 -->
		{{ Form::submit('Create new account', array('class' => 'btn btn-lg btn-primary btn-block'))}}

	{{ Form::close() }}

@stop



@extends('layouts.master')

@section('top-script')
<link rel="stylesheet" href="/css/home_style_sheet.css">
@stop


@section('content')



	{{ Form::open(array('action' => 'UserController@store', "class"=>"form-signin")) }}

	    <h2 class="form-signin-heading width">Please create an account</h2>

		{{ Form::label('email', 'Email Address') }}
		{{ Form::text('email', null, array('class' => 'form-control width')) }}
		
		{{ Form::label('first_name', 'First Name') }}
		{{ Form::text('first_name', null, array('class' => 'form-control width')) }}

		{{ Form::label('last_name', 'Last Name') }}
		{{ Form::text('last_name', null, array('class' => 'form-control width')) }}

		{{ Form::label('password', 'Password') }}
		{{ Form::password('password', array('class' => 'form-control width')) }}


		{{ Form::label('password', 'Confirm password') }}
		{{ Form::password('password_confirm', array('class' => 'form-control width')) }}

		{{ Form::submit('Create new account', array('class' => 'btn btn-lg btn-primary btn-block submit-btn bottom-margin top-pad submit-color  width'))}}

		<button type="submit" class="btn top-pad submit-color"><a href="{{{ action('PostsController@index') }}}"class"blk-font">Cancel</button></p>

	{{ Form::close() }}

@stop



@extends('layouts.master')

@section('top-script')
<link rel="stylesheet" href="/css/home_style_sheet.css">
@stop


@section('content')



	{{ Form::open(array('action' => 'UserController@store', "class"=>"form-signin signin")) }}

	    <h2 style="color: white;" class="form-signin-heading width">Please create an account</h2>

		{{ Form::text('email', null, array('class' => 'form-control width bottom-margin', 'placeholder' => 'Email')) }}
		
		{{ Form::text('first_name', null, array('class' => 'form-control width bottom-margin', 'placeholder' => 'First Name')) }}

		{{ Form::text('last_name', null, array('class' => 'form-control width bottom-margin', 'placeholder' => 'Last Name')) }}

		{{ Form::password('password', array('class' => 'form-control width bottom-margin', 'placeholder' => 'Password')) }}

		{{ Form::password('password_confirm', array('class' => 'form-control width', 'placeholder' => 'Confirm Password')) }}

		{{ Form::submit('Create new account', array('class' => 'btn btn-lg btn-primary btn-block submit-btn bottom-margin top-pad submit-color', 'style' => 'color: black;'))}}

		<button type="submit" class="btn top-pad submit-color"><a href="{{{ action('PostsController@index') }}}"class"blk-font">Cancel</button></p>

	{{ Form::close() }}

@stop



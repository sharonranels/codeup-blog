@extends('layouts.master')

@section('content')
<div class="container">
	<h1>List of Users</h1>

	<table class="table table-hover">
		<tr>
			<td><strong>Email</strong></td>
			<td><strong>First Name</strong></td>
			<td><strong>Last Name</strong></td>
			<td><strong>Admin?</strong></td>
			<td><strong>Action</strong></td>
		</tr>

		
		@foreach ($users as $user)
		<tr>
			<td> {{{ $user->email }}} </td>
			<td>{{{ $user->first_name . " " . $user->last_name }}} </td>
			<td> {{{ $user->last_name }}} </td>
			<td> {{{ $user->admin}}} </td>
			<td>
				<a href="{{{ action('UsersController@edit', $user->id) }}}">| Edit | </a>
				<a href="#" class="btnDeleteUser" data-userid="{{{ $user->id }}}"> Delete | </a>
			</td>
		</tr>
		@endforeach
	</table>
</div>

{{ Form::open(array('method' => 'delete', 'id' => 'formDeleteUser')) }}
{{ Form::close() }}

<script>
	$('.btnDeleteUser').on('click', function (e) {
		e.preventDefault();
		if(confirm('Are you sure you want to delete this user?')) {
			$("#formDeleteUser").attr('action', '/user/' + $(this).data('userid'))
			$('#formDeleteUser').submit();
		}
	});
</script>
@stop
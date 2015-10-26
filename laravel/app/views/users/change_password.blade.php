@extends('layout')
@section('title') Change Password @stop
@section('content')
<div class="content">
	<div class="container-fluid">
		@foreach( $errors->all() as $error )
		<div class="alert alert-danger">
			{{ $error }}
		</div>
		@endforeach
		{{ Form::open(['route' => 'change_password', 'files' => 'true']) }}
		<div class="form-group">
			<label for="password">Your New Password</label>
			{{ Form::input('password', 'password', Input::get('password'), [
				'class' => 'form-control',
				'placeholder' => 'Your new password',
				'id' => 'password',
				'tabindex' => 1
			]); }}
		</div>
		<div class="form-group">
			<label for="password_confirmation">Confirm Your New Password</label>
			{{ Form::input('password', 'password_confirmation', Input::get('password_confirmation'), [
				'class' => 'form-control',
				'placeholder' => 'Confirm your new password',
				'id' => 'password_confirmation',
				'tabindex' => 2
			]); }}
		</div>
		<button type="submit" tabindex=3 class="btn btn-primary">Save to Profile</button>
		{{ Form::close() }}
	</div>
</div>
@stop

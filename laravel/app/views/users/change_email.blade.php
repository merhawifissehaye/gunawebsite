@extends('layout')
@section('title') Edit Profile @stop
@section('content')
<div class="content">
	<div class="container-fluid">
		@foreach( $errors->all() as $error )
		<div class="alert alert-danger">
			{{ $error }}
		</div>
		@endforeach
		{{ Form::open(['route' => 'change_email', 'files' => 'true']) }}
		<div class="form-group">
			<label for="email">Your New Email</label>
			{{ Form::input('email', 'email', Input::get('email'), [
				'class' => 'form-control',
				'placeholder' => 'Your new email',
				'id' => 'email',
				'tabindex' => 1
			]); }}
		</div>
		<button type="submit" tabindex=3 class="btn btn-primary">Save to Profile</button>
		{{ Form::close() }}
	</div>
</div>
@stop

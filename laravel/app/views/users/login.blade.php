@extends('layout')
@section('title') Login @stop
@section('content')
<div class="content">
	<div class="container-fluid">
		@foreach( $errors->all() as $error )
		<div class="alert alert-danger">
		{{$error}}
		</div>
		@endforeach
		{{ Form::open(['route' => 'login']) }}
		<div class="form-group">
			<label for="title">Email Address</label>
			{{ Form::text('email', Input::get('email'), [
				'class' => 'form-control',
				'placeholder' => 'Your email address',
				'id' => 'email',
				'tabindex' => 1
			]); }}
		</div>
		<div class="form-group">
			<label for="password">Password</label>
			{{ Form::input('password', 'password', Input::get('password'), [
				'class' => 'form-control',
				'placeholder' => 'Your Password',
				'id' => 'password',
				'tabindex' => 2
			]); }}
		</div>
		<button type="submit" tabindex=3 class="btn btn-primary">Login</button>
		{{ Form::close() }}
	</div>
</div>
@stop

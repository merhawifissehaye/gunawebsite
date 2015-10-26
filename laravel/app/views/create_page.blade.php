@extends('layout')
@section('title') Creating New Page @stop
@section('content')
<div style="background: #fff; padding: 20px;">

	@if( Session::get('message') )
	<p class="alert alert-success">{{Session::get('message')}}</p>
	@endif
	@foreach( $errors->all() as $error )
	<p class="alert alert-danger">{{$error}}</p>
	@endforeach
	<form method="post" action="">
		<div class="form-group">
			<label for="title">Title</label>
			<input type="text" name="title" id="title" class="form-control" placeholder="Title">
		</div>
		<div class="form-group">
			<label for="type">Type</label>
			<select name="type" id="type" class="form-control">
				<option value="list">List</option>
				<option value="gallery">Gallery</option>
			</select>
		</div>
		<div class="form-group">
			<label for="description">Description</label>
			<textarea class="form-control" name="description" id="description" placeholder="Description"></textarea>
		</div>
		<button type="submit" class="btn btn-primary">Create</button>

	</form>
</div>
@stop
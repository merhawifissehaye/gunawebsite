@extends('layout')
@section('title') Edit Title @stop
@section('content')
<div class="content">
	<div class="container-fluid">
		{{ Form::open(['route' => ['list_edit_title', $page->id]]) }}
		<div class="form-group">
			<label for="title">Title</label>
			{{ Form::text('title', Input::get('title'), [
				'class' => 'form-control',
				'placeholder' => 'Title',
				'id' => 'title',
				'tabindex' => 1
			]); }}
		</div>
		<button type="submit" tabindex=2 class="btn btn-primary">Save Title</button>
		<a href="{{URL::route('list', $page->id)}}" tabindex=3 class="btn btn-danger">Cancel &amp; Exit</a>
		{{ Form::close() }}
	</div>
</div>
@stop

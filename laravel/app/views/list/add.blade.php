@extends('layout')
@section('title') Edit Title @stop
@section('content')
<div class="content">
	<div class="container-fluid">
		{{ Form::open(['route' => ['list_add', $page->id]]) }}
		<div class="form-group">
			<label for="title">List Block Title</label>
			{{ Form::text('title', Input::get('title'), [
				'class' => 'form-control',
				'placeholder' => 'Title of the block',
				'id' => 'title',
				'tabindex' => 1
			]); }}
		</div>
		<div class="form-group">
			<label for="summernote">List Block Content</label>
			{{ Form::textarea('content', Input::get('content'), [
				'class' => 'form-control',
				'placeholder' => 'Content of the block',
				'id' => 'summernote',
				'tabindex' => 2
			]); }}
		</div>
		<button type="submit" tabindex=3 class="btn btn-primary">Save Block</button>
		<a href="{{URL::route('list', $page->id)}}" tabindex=4 class="btn btn-danger">Cancel &amp; Exit</a>
		{{ Form::close() }}
	</div>
</div>
@stop

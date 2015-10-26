@extends('layout')
@section('title') Add Gallery Block @stop
@section('content')
<div class="content">
	<div class="container-fluid">
		{{ Form::model( $page, ['route' => ['gallery_edit', $page->id]]) }}
		<div class="form-group">
			<label for="title">Page Title</label>
			{{ Form::text('title', Input::get('title'), [
				'class' => 'form-control',
				'placeholder' => 'Title of the page',
				'id' => 'title',
				'tabindex' => 1
			]); }}
		</div>
		<div class="form-group">
			<label for="summernote">Description</label>
			{{ Form::textarea('description', Input::get('description'), [
				'class' => 'form-control',
				'placeholder' => 'Description of the Page',
				'id' => 'summernote',
				'tabindex' => 2
			]); }}
		</div>
		<button type="submit" tabindex=3 class="btn btn-primary">Save Page Details</button>
		{{ Form::close() }}
	</div>
</div>
@stop

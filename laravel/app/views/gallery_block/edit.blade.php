@extends('layout')
@section('title') Add Gallery Block @stop
@section('content')
<div class="content">
	<div class="container-fluid">
		{{ Form::model( $gallery_block, ['route' => ['gallery_block_edit', $gallery_block->id], 'files' => 'true']) }}
		<div class="form-group">
			<label for="title">Gallery Block Title</label>
			{{ Form::text('title', Input::get('title'), [
				'class' => 'form-control',
				'placeholder' => 'Title of the block',
				'id' => 'title',
				'tabindex' => 1
			]); }}
		</div>
		<div class="form-group">
			<label for="summernote">Gallery Block Content</label>
			{{ Form::textarea('content', Input::get('content'), [
				'class' => 'form-control',
				'placeholder' => 'Content of the block',
				'id' => 'summernote',
				'tabindex' => 2
			]); }}
		</div>
		<button type="submit" tabindex=3 class="btn btn-primary">Save Block</button>
		<a href="{{URL::route('gallery', $gallery_block->page()->firstOrFail()->id)}}" tabindex=4 class="btn btn-danger">Cancel &amp; Exit</a>
		{{ Form::close() }}
	</div>
</div>
@stop

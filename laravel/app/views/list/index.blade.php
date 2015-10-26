@extends('layout')
@section('title') {{$page->title}} @stop
@section('content')
<div class="content">
	<div class="col-lg-12 row">
    	<h1 class="page-header col-lg-11 col-md-11">
        	{{ $page->title }}
			@if( Auth::check() && Auth::user()->permitted($page->id))
			<a href="/list/{{$page->id}}/edit/title" class="label label-primary pull-right">Edit Page Title</a>
			@endif
    	</h1>
	</div>
	@foreach( $list_blocks as $list_block )
	<div class="col-lg-12 col-md-12">
		<div class="panel panel-default">
			<div class="panel-heading">
    			<h4><i class="fa fa-fw fa-globe"></i> {{$list_block->title}}
				@if( Auth::check() && Auth::user()->permitted($page->id))
				<a href="/list_block/{{$list_block->id}}/edit" class="label label-primary badge pull-right">Edit Block</a>
				@endif
				</h4>
			</div>
			<div class="panel-body">
				{{ $list_block->content }}
			</div>
		</div>
	</div>
	@endforeach
	@if( Auth::check() && Auth::user()->permitted( $page->id ))
	<div class="col-lg-12 col-md-12"><a href="/list/{{$page->id}}/add" class="btn btn-primary">Add More</a></div><br><br>
	@endif
</div>
@stop

@extends('layout')

@section('title') Gallery @stop

@section('content')
    <!-- Page Content -->
    <div class="container">

        <!-- Marketing Icons Section -->
        <div class="col-lg-12">
            <h1 class="page-header">
                {{$page->title}} 
				@if( Auth::check() && Auth::user()->permitted($page->id) )
				<a href="{{URL::route('gallery_edit', $page->id)}}" class="btn btn-primary">Edit Title</a>
				@endif
            </h1>
			@if($page->description)
			<p>{{$page->description}}
			@if( Auth::check() && Auth::user()->permitted($page->id))
			<a href="{{URL::route('gallery_edit', $page->id)}}" class="btn btn-primary">Edit Description</a>
			@endif
			</p>
			@endif
        </div>
		<?php $counter = 0; ?>
		@foreach( $gallery_blocks as $gallery_block )
			@if( $counter % 3 == 0 )
			<div class="row">
			@endif
        	<div class="col-lg-4 col-md-4">
            	<div class="panel panel-default">
                   <div class="panel-heading">
                   	<h4>{{$gallery_block->title}}
						@if( Auth::check() && Auth::user()->permitted($page->id))
						<a href="{{URL::route('gallery_block_edit', $gallery_block->id)}}"> <span class="badge pull-right">Edit Block</span></a>
						@endif
					</h4>
                   </div>
                   <div class="panel-body">
					{{$gallery_block->content}}
                   </div>
            	</div>
        	</div>
			<!-- If counter % 3 is 2, three items has been shown in a row and the opening div with class row has to be closed here. -->
			@if( $counter % 3 == 2 )
			</div>
			@endif
		<!-- Incremenent the counter -->
		<?php $counter++; ?>
		@endforeach
		<!-- If the foreach ends before three items are shown in the opened div with class row, close the div here. The previous increment statement $count++ has effect on the right hand side expression, 0.  -->
		@if( $counter % 3 != 0 )
		</div>
		@endif
		@if( Auth::check() && Auth::user()->permitted( $page->id ))
		<a href="{{URL::route('gallery_add', $page->id)}}" class="btn btn-primary">Add Block</a>
		@endif
        <!-- /.row -->
@stop

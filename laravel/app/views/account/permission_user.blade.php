@extends('layout')
@section('content')
<div class="container">
	<form method="post" action="{{URL::to('/permissions/'.$user->id)}}">
		<button type="submit" class="btn btn-primary">Save Permissions</button>
		<a href="{{URL::to('/permissions')}}" class="btn btn-danger">Cancel</a>
		@foreach( Page::all() as $page )
		<ul class="list-group">
			<li class="list-group-item">
				<input type="checkbox" name="pages[]" value="{{$page->id}}" id="{{$page->id}}" @if($user->permitted($page->id)) checked @endif> 
				<label for="{{$page->id}}">{{$page->title}}</label></li>
		</ul>
		@endforeach
	</form>
</div>
@stop

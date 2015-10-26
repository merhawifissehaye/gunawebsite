@extends('layout')
@section('content')
<div class="container">
	@if( Session::get('message') )
	<p class="alert alert-info">{{Session::get('message')}}</p>
	@endif
	@foreach( User::all() as $user )
	<div class="alert alert-info">
		<a href="{{URL::to('/permissions/'.$user->id)}}" class="text-success">{{$user->email}}</a>
	</div>
	@endforeach
</div>
@stop

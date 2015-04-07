@extends('layout.main')

@section('content')
	@if(Auth::check())
	
		<p>Wellcome, {{ Auth::user()->email }}.</p>
	@else
		<p>You are not signed in.</p>

	@endif
@stop
@extends('layout.layout')
@section('content')
@include('layout.header')
<style type="text/css">
	#content{
		margin-top: 100px;
		color: white;
	}
</style>
<div id="content" class="container">
<!-- 	@foreach($venues as $venue)
	<li>{{$venue->name}}</li>
	@endforeach -->
</div>
@endsection
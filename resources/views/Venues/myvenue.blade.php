@extends('layouts.app')
@section('content')
<div class="container">
	<div class="col-md-4" style="padding: 3em;">
		<h3>Venue Requests</h3>
		@foreach($events as $event)
			<div class="card text-white bg-primary mb-3" style="width: 20rem; margin: 1em; height: 130px">
			  <div class="card-body">
			    <h4 class="card-title">{{$event->event_type}} for  {{$event->user->name}}</h4>
			    <p class="card-text">All venues in the system</p>
			    button
			  </div>
			</div>
		@endforeach
	</div>
</div>
@endsection
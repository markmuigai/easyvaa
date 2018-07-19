@extends('layouts.app')
@section('content')

<div class="container" style="padding:2em;">
	<div class="row justify-content-center">
		<div col-md-4>
			<div class="card text-white bg-primary mb-3"  style="width: 20rem; margin: 1em; height: 130px">
			  <div class="card-body" >
			    <a class="text-white" href="/admin/allvenues"><h3 class="card-title">Venues: {{$venues->count()}}</h3></a><span class="float-right"></span>
			    <p class="card-text">All venues in the system</p>
			  </div>
			</div>
		</div>
		<div col-md-4>
			<div class="card text-white bg-primary mb-3" style="width: 20rem; margin: 1em; height: 130px">
			  <div class="card-body" >
			    <a class="text-white" href="/admin/allevents"><h3 class="card-title">Events: {{$events->count()}}</h3></a><span class="float-right"></span>
			    <p class="card-text">All events in the system</p>
			  </div>
			</div>
		</div>
		<div col-md-4>
			<div class="card text-white bg-primary mb-3" style="width: 20rem; margin: 1em; height: 130px">
			  <div class="card-body" >
			    <a class="text-white" href="/admin/allusers"><h3 class="card-title">Users: {{$users->count()}}</h3></a><span class="float-right"></span>
			    <p class="card-text">All users in the system</p>
			  </div>
			</div>
		</div>
	</div>
	<div class="row justify-content-center">
		<div class="col-md-6">
			<ul class="list-group">
				<b>Venues Activity Feed:</b>
				@foreach($venues as $venue)
				<li class="list-group-item"><b>{{$venue->user->name}}</b> created venue <b>{{$venue->venue_name}}</b> on {{$venue->created_at->toDayDateTimeString()}}</li>
				@endforeach
			</ul>
		</div>
		<div class="col-md-6">
			<ul class="list-group">
				<b>Events Activity Feed:</b>
				@foreach($events as $event)
				<li class="list-group-item"><b>{{$event->user->name}}</b> requested venue </b> at {{$event->created_at->toDayDateTimeString()}}</li>
				@endforeach
			</ul>
		</div>
	</div>
	<div class="row justify-content-center">
		<div class="col-md-6">
			<ul class="list-group">
				<b>Payments Activity Feed:</b>
				@foreach($payments as $payment)
				<li class="list-group-item"><b>{{$event->user->name}}</b> Payed <b>{{$event->quote->payment->amount}}</b> on {{$venue->created_at->toDayDateTimeString()}}</li>
				@endforeach
			</ul>
		</div>
		<div class="col-md-6">
<!-- 			<ul class="list-group">
				<b>Events Activity Feed:</b>
				@foreach($events as $event)
				<li class="list-group-item"><b>{{$event->user->name}}</b> requested venue </b> at {{$event->created_at->toDayDateTimeString()}}</li>
				@endforeach
			</ul> -->
		</div>
	</div>
</div>


@endsection
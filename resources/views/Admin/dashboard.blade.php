@extends('layouts.app')
@section('content')

<div class="container" style="padding:2em;">
	<div class="row justify-content-center">
		<div col-md-4>
			<div class="card text-white bg-primary mb-3"  style="width: 20rem; margin: 1em; height: 130px">
			  <div class="card-body" >
			    <a class="text-white" href="/admin/allvenues"><h3 class="card-title">Venues</h3></a><span class="float-right">{{$venues->count()}}</span>
			    <p class="card-text">All venues in the system</p>
			  </div>
			</div>
		</div>
		<div col-md-4>
			<div class="card text-white bg-primary mb-3" style="width: 20rem; margin: 1em; height: 130px">
			  <div class="card-body">
			    <h3 class="card-title">Events <span class="float-right">{{$events->count()}}</span></h3>
			    <p class="card-text">Venue requests posted by users for events.</p>
			  </div>
			</div>
		</div>
		<div col-md-4>
			<div class="card text-white bg-primary mb-3" style="width: 20rem; margin: 1em; height: 130px">
			  <div class="card-body">
			    <h3 class="card-title">Users <span class="float-right">{{$users->count()}}</span></h3>
			    <p class="card-text">View details for users of the system</p>
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
</div>


@endsection
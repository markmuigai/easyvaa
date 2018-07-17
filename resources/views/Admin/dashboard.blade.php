@extends('layouts.app')
@section('content')

@if(Auth::id()!= 1)
	<div class="container text-center" style="padding: 5em">
		<h3>You do not have admin access</h3>
	</div>
@else
<div class="container" style="padding:2em;">
	<div class="row justify-content-center">
		<div col-md-4>
			<div class="card text-white bg-primary mb-3" style="width: 20rem; margin: 1em; height: 130px">
			  <div class="card-body">
			    <h4 class="card-title">Venues</h4>
			    <p class="card-text">All venues in the system</p>
			    button
			  </div>
			</div>
		</div>
		<div col-md-4>
			<div class="card text-white bg-primary mb-3" style="width: 20rem; margin: 1em; height: 130px">
			  <div class="card-body">
			    <h4 class="card-title">Events</h4>
			    <p class="card-text">Venue requests posted by users for events.</p>
			  </div>
			</div>
		</div>
		<div col-md-4>
			<div class="card text-white bg-primary mb-3" style="width: 20rem; margin: 1em; height: 130px">
			  <div class="card-body">
			    <h4 class="card-title">Users</h4>
			    <p class="card-text">View details for users of the system</p>
			  </div>
			</div>
		</div>
	</div>
</div>
@endif

@endsection
@extends('layouts.app')
@section('content')
<div class="container-fluid" style="padding: 1em">
	<div class="row justify-content-center">
		<div class="col-md-8" style="padding: 1em">
			@if($quotes->count() != "0")
			<h3>{{$event->event_type}} for {{$event->head_count}} people</h3>
			<div>
				<h3>Quotation from venue owner: {{$event->venue->user->name}}</h3>
				<div class="card" style="width: 20rem;">
				  <div class="card-body">
				    <h4 class="card-title" >Quotation for your {{$event->event_type}} at <br><span class="text-primary">{{$event->venue->venue_name}}</span></h4>
				    <h6 class="card-subtitle mb-2 text-muted">From Owner: {{$event->venue->user->name}}</h6>
				    
				    <p>{{$event->quote->deposit}}Ksh</p>
				    <a href="#" class="card-link">Review event</a>
				    <a href="#" class="card-link">Proceed to payment</a>
				  </div>
				</div>
			</div>
			@else
				<div class="container text-center" style="padding: 5em">
					<h3>You have not received a quote from {{$event->venue->user->name}}</h3>
				</div>
			@endif
		</div>
	</div>
</div>
@endsection
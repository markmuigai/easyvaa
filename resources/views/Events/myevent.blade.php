@extends('layouts.app')
@section('content')
if
<div class="container-fluid" style="padding: 1em">
	<div class="row justify-content-center">
		<div class="col-md-8" style="padding: 1em">
			<h3>{{$event->event_type}} for {{$event->head_count}} people</h3>
			<div>
				<h3>Quotation from venue owner: {{$event->venue->user->name}}</h3>
				<div class="card" style="width: 20rem;">
				  <div class="card-body">
				    <h4 class="card-title">Quotation for your {{$event->event_type}} on {{$event->date}}</h4>
				    <h6 class="card-subtitle mb-2 text-muted">From Owner: {{$event->venue->user->name}}</h6>
				    <p class="card-text">{{$event->venue->fee_info}}</p>
				    <a href="#" class="card-link">Review event</a>
				    <a href="#" class="card-link">Proceed to payment</a>
				  </div>
				</div>
			</div>
		</div>
	</div>
</div>
@endsection
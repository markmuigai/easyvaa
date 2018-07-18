@extends('layouts.app')
@section('content')
<div class="container" style="padding: 2em;">
	<div class="row bg-white" style="border-radius: 10px; border: 1px solid blue;" >
		<div class="col-md-6 " style="padding: 2em; border-right: 1px solid blue;">
			@if($quotes->count() != "0")				  
		    <h4>Quotation for your {{$event->event_type}} at <br><span class="text-primary">{{$event->venue->venue_name}}</span></h4>
		    <h6 class="mb-2 text-muted">From Owner: {{$event->venue->user->name}}</h6>
		    <p>Deposit:{{$event->quote->deposit}}Ksh</p>
		    <p>{{$event->quote->basePrice}}Ksh per person for {{$event->head_count}} people</p>
		    <p>Additional Cost: {{$event->quote->additionalCost}}</p>
		    <p>Total Price: {{$event->quote->totalPrice}}Ksh</p>
		    <a href="#" >Review event</a>
		</div>
		<div class="col-md-6" style="padding: 2em">
			<h3>Payment </h3>
			<form method="POST" action="/quotes/{{$event->quote->id}}">
				{{csrf_field()}}
				<div class="form-group">
					<input style="margin-bottom: 1em;" type="text" name="amount" class="form-control" placeholder="Amount">
					<button class="btn btn-primary">Submit</button><br><br>
					<a href="/myevents/{{$event->id}}/{{$event->quote->id}}">Check Payment</a>
				</div>
			</form>
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
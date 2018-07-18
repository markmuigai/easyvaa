@extends('layouts.app')
@section('content')


<div class="container" style="padding: 3em">
	<div class="row justify-content-center">
		<div class="col-md-8" style="border-radius: 10px; background-color: white; padding: 30px; height: 650px">
			<form method="POST" action="/myvenue/{{$event->venue->id}}/{{$event->id}}">
				{{csrf_field()}}
				<p>
					<h4>Fee info in site</h4>
					{{$event->venue->fee_info}}
					<h4>Head count: {{$event->head_count}}</h4>
					<h4>Time of Day: {{$event->date}}</h4>
					<h4>Venyu's Price Estimate: price pax times headcount</h4>
				</p>
				<div style="padding-right:30em" class="form-group">
					<input style="" type="text" name="deposit" class="form-control" placeholder="Deposit">
				</div>
				<div style="padding-right:30em" class="form-group">
					<input style="" type="text" name="basePrice" class="form-control" placeholder="Base Price">
				</div>
				<div style="padding-right:30em" class="form-group">
					<input style="" type="text" name="additionalCost" class="form-control" placeholder="Additional Cost">
				</div>
				<button class="btn btn-primary align-self-end">Send Quote</button>
			</form>
		</div>
	</div>	
</div>

@endsection

<!-- (venueprice * headcount) + additional Charge1 + AdditionalCharge2 -->
@extends('layouts.app')
@section('content')
<div class="container bg-white" style="margin-top: 3em; padding: 2em;">
	<h3>My payment Status for venue {{$event->venue->venue_name}}</h3>
	<p>Venue Cost: {{$event->quote->totalPrice}} Ksh as per received quote</p>
	<p>Paid Amount: {{$mypayment->amount}} Ksh</p>
	@if($mypayment->amount != $event->quote->totalPrice)
		<p>Incomplete Payment</p>
		<p>Balance = {{$event->quote->totalPrice - $mypayment->amount}} Ksh</p>
	@else
		<span class="badge badge-success">Complete Payment</span>
	@endif
</div>
@endsection
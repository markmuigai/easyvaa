@extends('layouts.app')
@section('content')
@if($mypayments->count() == '0')
<div class="container text-center" style="padding: 5em">
	<h3>You have not made any payments</h3>
</div>
@endif


@foreach (array_chunk($mypayments->all(), 3) as $paymentRow)
<div class="container">	
    <div class="row">
        @foreach ($paymentRow as $payment)
         <div class="col-md-4 events">
				<div class="card text-white bg-primary mb-3" style="height: 7rem; margin:1em;"> 
			  <div class="card-body">
			    <h4 class="card-title"><a class="text-white" href="/mypayments/{{$payment->id}}"> Payment of {{$payment->amount}} made for venue {{$payment->created_at->diffForHumans()}} </a></h4>
			  </div>
				</div>
		 </div>
        @endforeach
    </div>
</div>
@endforeach
@endsection
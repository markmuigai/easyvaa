@extends('layouts.app')
@section('content')
@foreach (array_chunk($events->all(), 3) as $eventRow)
<div class="container">	
    <div class="row">
        @foreach ($eventRow as $event)
         <div class="col-md-4 events">
				<div class="card text-white bg-primary mb-3" style="height: 10rem; margin:1em;"> 
			  <div class="card-body">
			    <h4 class="card-title"><a class="text-white" href="/myevents/{{$event->id}}">{{$event->event_type}} for  {{$event->user->name}}</a></h4>
			    <p class="card-text">{{$event->created_at->diffForHumans()}}</p>
			  </div>
				</div>
		 </div>
        @endforeach
    </div>
</div>
@endforeach
@endsection
@extends('layouts.app')
@section('content')
@foreach (array_chunk($events->all(), 3) as $eventRow)
<div class="container">	
    <div class="row">
        @foreach ($eventRow as $event)
         <div class="col-md-4 venues">
				<div class="card" style="height: 25rem; margin:1em;"> 
				  <div class="card-body">
				    <h4 class="card-title"><a href="/venues/{{$event->id}}" class="panel-heading btn-block">{{$event->user->name}}</a></h4>
				    <p class="card-text">{{$event->event_type}} {{$event->date}} {{$event->headcount}}</p>

				  </div>
				</div>
		 </div>
        @endforeach
    </div>
</div>
@endforeach
@endsection
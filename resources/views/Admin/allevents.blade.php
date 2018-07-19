@extends('layouts.app')
@section('content')
<div class="row justify-content-center">
<div class="container" style="margin: 3em; background-color: white; border-radius: 5px" >
	
	<table class="table table-hover">
  <thead>
    <tr>
      <th>Event ID</th>
      <th>Event Owner</th>
      <th>Number of People</th>
      <th>Time</th>
      <th>Message</th>
    </tr>
  </thead>
  <tbody>
  	@foreach($events as $event)
    <tr>
      <th scope="row">{{$event->id}}</th>
      <td>{{$event->user->name}}</td>
      <td>{{$event->head_count}}</td>
      <td>{{$event->date}}</td>
      <td>{{$event->message}}</td>
    </tr>
    @endforeach
  </tbody>
</table>
</div>
</div>
    <div class="row justify-content-center">
    	{{ $events->links() }}
    </div>
@endsection
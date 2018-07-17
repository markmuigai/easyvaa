@extends('layouts.app')
@section('content')
<div class="row justify-content-center">
<div class="container" style="margin: 3em; background-color: white; border-radius: 5px" >
	
	<table class="table table-hover">
  <thead>
    <tr>
      <th>Venue ID</th>
      <th>Venue Name</th>
      <th>Venue Owner</th>
      <th>Venue Location</th>
      <th>Contact</th>
    </tr>
  </thead>
  <tbody>
  	@foreach($venues as $venue)
    <tr>
      <th scope="row">{{$venue->id}}</th>
      <td>{{$venue->venue_name}}</td>
      <td>{{$venue->user->name}}</td>
      <td>{{$venue->city}}, {{$venue->address}}</td>
      <td>{{$venue->contact}}</td>
    </tr>
    @endforeach
  </tbody>
</table>
</div>
</div>
    <div class="row justify-content-center">
    	{{ $venues->links() }}
    </div>
@endsection
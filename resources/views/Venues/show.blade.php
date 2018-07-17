@extends('layouts.app')

@section('content')

<div class="container-fluid myvenue" style="padding: 3em;" >
	<div class="row" style="">
		<div class="col-md-8" style="padding: 3em; padding-top: 0px;">
			<div class="row" style="border-bottom: 1px solid black; padding-bottom: 2em">
				<h1>{{$venue->name}}</h1> <br>
				<ul class="list-inline">
					<b>Categories:</b>
					@foreach($venue->categories as $category)
					<li class="list-inline-item">{{$category->name}} >> </li>
					@endforeach
				</ul>
				<p>{{$venue->city}} {{$venue->address}}</p><br>
				<p class="lead">{{$venue->description}}</p><br>
				<span>{{$venue->contact}}</span>
			</div>
			<div class="row">
				<div class="col-md-5" style="padding: 2em; padding-left: 0px;">
					<img height="200px" width="300px" src="{{$venue->image}}">
				</div>
				<div class="col-md-7" style="padding: 2em; padding-left: 0px;">
					<p>{{$venue->basic_info}}</p>	
				</div>
			</div>
			<div class="row">
				<div class="col-md-5" style="padding: 2em; padding-left: 0px;">
					<img height="200px" width="300px" src="{{$venue->second_image}}">
				</div>
				<br><br>
				<div class="col-md-7">
				<ul class="list-group">
					<h3>Features</h3>
					@foreach($venue->Features as $feature)
					<li class="list-group-item">{{$feature->name}}</li>
					@endforeach
				</ul>
				</div>
				<br>
				<h3>Booking info</h3><br>
				<p>{{$venue->booking_info}}</p>
				</div>
		</div>
		<div class="col-md-4 eventform" style="border-width: 3px; background-color: white; padding: 30px; height: 400px">
			<h2>Get a quote</h2>
			<form method="POST" action="/venues/{{ $venue->id }}/events">
				{{csrf_field()}}
				<div class="form-group">
					<input style="" type="text" name="event_type" class="form-control" placeholder="Event Type">
				</div>
				<div class="form-group">
					<input type="text" id="datepicker" name="date" class="form-control" placeholder="Event Date: (dd/mm/yyyy)">
				</div>
				<div class="form-group">
					<input type="text" name="head_count" class="form-control" placeholder="Number of People">
				</div>
				<div class="form-group">
					<input type="text" name="message" class="form-control" placeholder="Message">
				</div>
				<button type="submit" class="btn btn-primary">Submit</button>
			</form>
			@include('layouts.errors')
		</div>
</div>
</div>
@endsection
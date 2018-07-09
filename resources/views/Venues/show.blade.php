@extends('layouts.app')

@section('content')
		<div class="container myvenue">
		<div class="row">
			<div class="col-md-8">
				<h1>{{$venue->venue_name}}</h1> <br>
				<p>{{$venue->city}} {{$venue->address}}</p>
			</div>

			<div class="col-md-4" style="border-width: 3px; background-color: white; padding: 30px;">
				<h2>Get a quote</h2>
				<form method="POST" action="/venues/{{ $venue->id }}/events">
					{{csrf_field()}}
					<div class="form-group">
						<input type="text" name="event_type" class="form-control" placeholder="Event Type">
					</div>
					<button type="submit" class="btn btn-primary">Submit</button>
				</form>
				@include('layouts.errors')
			</div>
		</div>
		</div>
@endsection
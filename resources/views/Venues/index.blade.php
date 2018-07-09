@extends('layouts.app')

@section('content')
	<div class="container myvenues text-center">
		<div class="row">
			<div class="col-md-6 text-center">
				@foreach($venues as $venue)

				<center>
				<div class="card" style="width: 20rem; margin:1em;">
				  <img class="card-img-top" height="100px" width="100px" src='{{ asset(	"/$venue->imageUrl") }}' alt="Venue Image">
				  <div class="card-body">
				    <h4 class="card-title"><a href="/venues/{{$venue->id}}" class="panel-heading btn-block">{{$venue->venue_name}}</a></h4>
				    <p class="card-text">{{$venue->description}}</p>
				    <a href="#" class="btn btn-primary">Check Out</a>
				  </div>
				</div>
				</center>
				@endforeach
				<div class="container text-center">
				{{ $venues->links() }}
				</div>
			</div>
			<div class="col-md-6 text-center">
				Map goes here
			</div>
		</div>
	</div>

@endsection

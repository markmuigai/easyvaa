@extends('layouts.app')
@section('content')
@foreach (array_chunk($venues->all(), 3) as $venueRow)
<div class="container">	
    <div class="row">
        @foreach ($venueRow as $venue)
         <div class="col-md-4 venues">
				<div class="card" style="height: 30rem; margin:1em;">
				  <img class="card-img-top" height="200px" width="100px" src="{{$venue->image}}" style="" alt="Venue Image">
				  <div class="card-body">
				    <h4 class="card-title"><a href="/myvenue/{{$venue->id}}" class="panel-heading btn-block">{{$venue->venue_name}}</a></h4>
				    <p class="card-text">{{$venue->address}} {{$venue->city}}</p>
				    @foreach($venue->categories as $category)
					<span class="badge badge-primary">{{$category->name}}</span>
					@endforeach <br>
					<div style="margin: 1em" class="btn-group" role="group" aria-label="Basic example">
					  <!-- <button type="button" class="btn btn-warning">Edit</button> -->
					  <a href='/myvenues/{{$venue->id}}/edit' type="button" class="btn btn-warning">Edit</a>
					  <a href='/myvenues/{{$venue->id}}/destroy' type="button" class="btn btn-warning">Delete</a>
					  <!-- <button type="button" class="btn btn-danger">Delete</button> -->
					</div>
				  </div>
				</div>
		 </div>
        @endforeach        
    </div>
</div>
@endforeach
    <div class="row justify-content-center">
    	{{ $venues->links() }}
    </div>


@endsection

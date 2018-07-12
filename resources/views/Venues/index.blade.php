@extends('layouts.app')
@section('content')
@foreach (array_chunk($venues->all(), 3) as $venueRow)
<div class="container">	
    <div class="row">
        @foreach ($venueRow as $venue)
         <div class="col-md-4 venues">
				<div class="card" style="height: 25rem; margin:1em;"> 
				  <img class="card-img-top" height="200px" width="100px" src="{{ asset('images/' . $venue->image) }}" alt="Venue Image">
				  <div class="card-body">
				    <h4 class="card-title"><a href="/venues/{{$venue->id}}" class="panel-heading btn-block">{{$venue->venue_name}}</a></h4>
				    <p class="card-text">{{$venue->address}} {{$venue->city}}</p>
				    @foreach($venue->categories as $category)
						<span class="badge badge-primary">{{$category->name}}</span>
					@endforeach
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

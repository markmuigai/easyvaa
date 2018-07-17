@extends('layouts.app')
@section('content')

<div class="container-fluid" style="margin: 2em">
	<div class="row">
		<div class="col-md-2" style="background-color: white; margin-top: 1em; margin-bottom: 1em; border-radius: 5px; padding: 3em">
			<h3>Filter Venues</h3>
			@foreach($categories as $category)
			<form method="POST" action="/filters">
				{{csrf_field()}}
				<div class="form-check">
				  <label class="form-check-label">
				    <input class="form-check-input" type="checkbox" id="inlineCheckbox1" name="mycategories[]" value="{{$category->id}}"> {{$category->name}}
				  </label>
				</div>
				@endforeach
				<br>
				<button class="btn btn-primary">Filter</button>
			</form>
		</div>
		<div class="col-md-10">
			@foreach (array_chunk($venues->all(), 3) as $venueRow)
			<div class="container">	
			    <div class="row">
			        @foreach ($venueRow as $venue)
			         <div class="col-md-4 venues">
							<div class="card" style="height: 25rem; margin:1em;"> 
							  <img class="card-img-top" height="200px" width="100px" src="{{$venue->image}}" alt="Venue Image">
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
		</div>
</div>	
</div>


    <div class="row justify-content-center">
    	{{ $venues->links() }}
    </div>


@endsection
<!--  -->
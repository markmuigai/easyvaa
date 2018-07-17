@extends('layouts.app')
@section('content')
@foreach (array_chunk($venues->all(), 3) as $venueRow)
<div class="container">	
    <div class="row">
        @foreach ($venueRow as $venue)
         <div class="col-md-4 venues">
				<div class="card" style="height: 28rem; margin:1em;">
				  <img class="card-img-top" height="200px" width="100px" src="{{$venue->image}}" style="" alt="Venue Image">
				  <div class="card-body">
				    <h4 class="card-title"><a href='/myvenues/{{$venue->id}}/edit' class="panel-heading btn-block">Edit: {{$venue->venue_name}}</a></h4>
				    <h5><a href="/myvenue/{{$venue->id}}">Venue Requests</a></h5>
				    <p class="card-text">{{$venue->address}} {{$venue->city}}</p>
				    @foreach($venue->categories as $category)
					<span class="badge badge-primary">{{$category->name}}</span>
					@endforeach <br><br>
						<form action="/myvenues/destroy/{{$venue->id}}" method="POST">
						    {{ csrf_field() }}
						    {{ method_field('DELETE') }}
						    <button type="button" class="btn btn-danger" style="margin-left: 1em">Delete</button>
						</form>
					  
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

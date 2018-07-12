@extends('layouts.app')

@section('content')
<!-- 	<div class="container myvenues text-center">
		<div class="row">
			<div class="col-md-6 text-center">
				@foreach($venues as $venue)

				<center>
				</center>
				@endforeach
				<div class="container text-center">
				
				</div>
			</div>
			<div class="col-md-6 text-center">
				Map goes here
			</div>
		</div>
	</div> -->
@foreach (array_chunk($venues->all(), 3) as $venueRow)
<div class="container">	
    <div class="row">
        @foreach ($venueRow as $venue)
         <div class="col-md-4 venues">
				<div class="card" style="height: 20rem; margin:1em;">
				  <img class="card-img-top" height="100px" width="100px" src='{{ asset(	"image/$venue->images[1]") }}' style="background-image: url(//i1.wp.com/www.venuefinderafrica.com/wp-content/uploads/2018/05/Jadav-Gardens_Wedding-Venue_Tigoni-Limuru_Kenya_VFA_1.jpg?fit=450%2C338&ssl=1);" alt="Venue Image">
				  <div class="card-body">
				    <h4 class="card-title"><a href="/venues/{{$venue->id}}" class="panel-heading btn-block">{{$venue->venue_name}}</a></h4>
				    <p class="card-text" style="font-size: 14px">{{$venue->description}}</p>
				    <a href="#" class="btn btn-primary">Check Out</a>
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

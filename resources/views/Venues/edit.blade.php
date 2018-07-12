@extends('layouts.app')
@section('content')
	<div class="container">
		<div class="row justify-content-center" style=" margin: 2em">
			<div class="col-md-8 venueform" style="background-color: white; border-radius: 4px; padding: 3em;">
				<div class="panel panel-default">
					<div class="panel-heading"><h3>Upload a venue</h3></div>
					<!-- Display Validation Errors -->
					@include('layouts.errors')
					<form method="POST" action="{{ url('venues/'.$venue->id) }}" style="padding: 20px 50px;">
						{{csrf_field()}}
						{{method_field('PUT')}}
						<div class="form-group">
							<label>Venue Name</label>
							<input type="text" class="form-control" name="venue_name" value="{{$venue->venue_name}}">
						</div>
						<div class="form-group">
							<label>Description</label>
							<textarea type="text" name="description" class="form-control" value="{{$venue->description}}"></textarea> 
						</div>
						<div class="form-group">
						  <label>Upload Image</label>
						  <input type="file" class="form-control-file" name="imageUrl" id="imageUrl">
						</div>
						<button type="submit" class="btn btn-primary">Submit</button>
					</form>
				</div>
			</div>
		</div>
	</div>
@endsection
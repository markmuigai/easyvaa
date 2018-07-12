@extends('layouts.app')
@section('content')
	<div class="container">
		<div class="row justify-content-center" style=" margin: 2em">
			<div class="col-md-8 venueform" style="background-color: white; border-radius: 4px; padding: 3em;">
				<div class="panel panel-default">
					<div class="panel-heading"><h3>Upload a venue</h3></div>
					<!-- Display Validation Errors -->
					@include('layouts.errors')
					<form method="POST" action="{{ url('myvenues/'.$venue->id) }}" style="padding: 20px 50px;">
						{{csrf_field()}}
						{{method_field('PUT')}}
						<div class="form-group">
							<label>Venue Name</label>
							<input type="text" class="form-control" name="venue_name" value="{{$venue->venue_name}}">
						</div>
						
						@foreach($categories as $category)
							<div class="form-check">
							  <label class="form-check-label">
							    <input class="form-check-input" type="checkbox" id="inlineCheckbox1" name="mycategories[]" value="{{$category->id}}"> {{$category->name}}
							  </label>
							</div>
						@endforeach
						<br>
						<div class="form-group">
							<label>Description</label>
							<textarea rows ="5" type="text" name="description" class="form-control">{{$venue->description}}</textarea> 
						</div>
						<div class="form-group">
							<label>Basic Information</label>
							<textarea rows ="5" type="text" name="basic_info" class="form-control" >{{$venue->basic_info}}</textarea> 
						</div>
						@foreach($features as $feature)
							<div class="form-check">
							  <label class="form-check-label">
							    <input class="form-check-input" type="checkbox" id="inlineCheckbox1" name="myfeatures[]" value="{{$feature->id}}"> {{$feature->name}}
							  </label>
							</div>
						@endforeach <br>
						<div class="form-group">
						  <label>Upload First Image</label>
						  <!-- <input type="file" class="form-control-file" name="imageUrl"> -->
						  <input type="file" class="form-control" name="image" placeholder="address" multiple>
						</div>
						<div class="form-group">
						  <label>Upload Second Image</label>
						  <!-- <input type="file" class="form-control-file" name="imageUrl"> -->
						  <input type="file" class="form-control" name="second_image" placeholder="address" multiple>
						</div>
						<div class="form-group">
						  <label>Upload Third Image</label>
						  <!-- <input type="file" class="form-control-file" name="imageUrl"> -->
						  <input type="file" class="form-control" name="third_image" placeholder="address" multiple>
						</div>
						<div class="form-group">
							<label>Fee Information</label>
							<textarea rows ="5" type="text" name="fee_info" class="form-control" value="{{$venue->fee_info}}">{{$venue->fee_info}}</textarea> 
						</div>
						<div class="form-group">
							<label>Booking Information</label>
							<textarea rows ="5" type="text" name="booking_info" class="form-control" value="">{{$venue->booking_info}}</textarea> 
						</div>
						<button type="submit" class="btn btn-primary">Submit</button>
					</form>
				</div>
			</div>
		</div>
	</div>
@endsection
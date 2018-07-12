@extends('layouts.app')
@section('content')
	<div class="container-fluid" style="padding: 3em">
		<div class="row justify-content-center">
			<div class="col-md-8 venueform" style="background-color: white; padding: 2em;">
				<div class="panel panel-default" style="">
					<div class="panel-heading display-5"><h4>Step 1 ></h4></div>
					<!-- Display Validation Errors -->
					@include('layouts.errors')
					<form method="POST" action="/venues" enctype="multipart/form-data" style="padding: 20px 50px;">
					{{csrf_field()}}
						<div class="form-group">
							<input type="text" class="form-control" name="venue_name" placeholder="Venue Name">
						</div>
						<div class="form-group">
							<label>Description</label>
							<textarea type="text" name="description" class="form-control"></textarea> 
						</div>
						<div class="form-group">
							<label>Basic Information</label>
							<textarea type="text" name="basic_info" class="form-control"></textarea> 
						</div>
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
							<textarea type="text" name="fee_info" class="form-control"></textarea> 
						</div>
						<div class="form-group">
							<label>Booking Information</label>
							<textarea type="text" name="fee_info" class="form-control"></textarea> 
						</div>
						<button type="submit" class="btn btn-primary">Submit</button>
					</form>
				</div>
			</div>
		</div>
	</div>
@endsection
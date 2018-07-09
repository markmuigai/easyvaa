@extends('layouts.app')
@section('content')
	<div class="container">
		<div class="row justify-content-center">
			<div class="col-md-8 venueform">
				<div class="panel panel-default">
					<div class="panel-heading display-5">Upload a venue</div>
					<!-- Display Validation Errors -->
					@include('layouts.errors')
					<form method="POST" action="/venues" enctype="multipart/form-data" style="padding: 20px 50px;">
						{{csrf_field()}}
						<div class="form-group">
							<label>Venue Name</label>
							<input type="text" class="form-control" name="venue_name">
						</div>
						<div class="form-group">
							<label>Description</label>
							<textarea type="text" name="description" class="form-control"></textarea> 
						</div>
						<div class="form-group">
						  <label>Upload Image</label>
						  <input type="file" class="form-control-file" name="imageUrl">
						</div>
						<button type="submit" class="btn btn-primary">Submit</button>
					</form>
				</div>
			</div>
		</div>
	</div>
@endsection
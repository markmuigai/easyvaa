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
							<label>Categories</label>
								<div class="form-check form-check-inline">
								  <label class="form-check-label">
								    <input class="form-check-input" type="checkbox" id="inlineCheckbox1" name="category"> 1
								  </label>
								</div>
								<div class="form-check form-check-inline">
								  <label class="form-check-label">
								    <input class="form-check-input" type="checkbox" id="inlineCheckbox2" name="category"> 2
								  </label>
								</div>
								<div class="form-check form-check-inline disabled">
								  <label class="form-check-label">
								    <input class="form-check-input" type="checkbox" id="inlineCheckbox3" name="category" disabled> 3
								  </label>
								</div>
						</div>
						<div class="form-group">
							<label>Description</label>
							<textarea type="text" name="description" class="form-control"></textarea> 
						</div>
						<div class="form-group">
						  <label>Upload Images</label>
						  <!-- <input type="file" class="form-control-file" name="imageUrl"> -->
						  <input required type="file" class="form-control" name="images[]" placeholder="address" multiple>
						</div>
						<button type="submit" class="btn btn-primary">Submit</button>
					</form>
				</div>
			</div>
		</div>
	</div>
@endsection
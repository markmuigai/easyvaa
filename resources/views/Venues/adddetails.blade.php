@extends('layouts.app')
@section('content')
<div class="container">
<div class="col-md-6" style="background-color: white; padding: 2em; border-radius: 4px;">
	<form method="POST" action="">
		{{csrf_field()}}
		<div class="form-group">
		@foreach($categories as $category)
			<div class="form-check">
			  <label class="form-check-label">
			    <input class="form-check-input" type="checkbox" id="inlineCheckbox1" name="mycategories[]" value="{{$category->id}}"> {{$category->name}}
			  </label>
			</div>
		@endforeach
		</div>
		<div class="form-group">
		@foreach($features as $feature)
			<div class="form-check">
			  <label class="form-check-label">
			    <input class="form-check-input" type="checkbox" id="inlineCheckbox1" name="myfeatures[]" value="{{$feature->id}}"> {{$feature->name}}
			  </label>
			</div>
		@endforeach
		</div>
		<button class="btn btn-primary">Submit</button>
	</form>	
</div>
</div>


@endsection
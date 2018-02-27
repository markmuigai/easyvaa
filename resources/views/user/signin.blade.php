@extends('layout.layout')
@section('content')
@include('layout.header')
<style type="text/css">
	#signup{
		background-color: #3a4246;
		margin-top: 100px;
	}

	#signup{
		background-color: white;
		padding: 30px;
		width: 550px;
		height: 500px;

	}

	#signup .form-group{
		padding: 10px;
	}


</style>
<div id="signup" class="container">
	<center>
	Not a member yet?<br>
	<a href="#">Create free account</a><br>
	<h1><b>WELCOME BACK</b></h1><br>
	Please login below <br>
	</center>
	<form>
		<div class="form-group">
			<label for="email">Email address</label>
			<input type="email" class="form-control" id="email" name="email">
		</div>
		<div class="form-group">
			<label for="pwd">Password:</label>
			<input type="Password" class="form-control" id="pwd" name="Password">
		</div>
		<div class="form-check">
			<label class="form-check-label">
				<input type="checkbox" class="form-check-input" name="remember">
				Remember me
			</label>
		</div>
		<center>
		<button type="submit" class="btn btn-primary">SIGN IN</button>
		</center>
	</form>
</div>
@endsection
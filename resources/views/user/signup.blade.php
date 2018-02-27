@extends('layout.layout')
@section('content')
<style type="text/css">
	#signin{
		background-color: #3a4246;
		margin-top: 100px;		
	}

	#signin{
		background-color: white;
		padding: 30px;
		width: 550px;
		margin-bottom: 50px;
	}

	#signin .form-group{
		padding: 10px;
	}
</style>
@include('layout.header')
<div id="signin" class="container">
	<center>
		Have an account already? <a href='/signin'>Sign In</a><br>
		<h1><b>NEW TO VENYU?</b></h1><br>
		Please sign up below <br>
	</center>
	<form>
		<div class="form-group">
			<label for="fname">First Name</label>
			<input type="text" class="form-control" id="fname" name="fname">
		</div>
		<div class="form-group">
			<label for="lname">Last Name</label>
			<input type="text" class="form-control" id="lname" name="lname">
		</div>
		<div class="form-group">
			<label for="email">Email address</label>
			<input type="email" class="form-control" id="email" name="email">
		</div>
		<div class="form-group">
			<label for="pwd">Create password:</label>
			<input type="Password" class="form-control" id="pwd" name="Password">
		</div>
		<div class="form-group">
			<label for="pwd">Repeat Password:</label>
			<input type="Password" class="form-control" id="pwd" name="Password">
		</div>
		<center>
		<button type="submit" class="btn btn-primary">SIGN UP</button>
		</center>
	</form>
</div>
@endsection

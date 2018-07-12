<form action="/features" method="POST" style="padding: 0px;">
	{{csrf_field()}}
	<input style="width: 170px;" type="text" name="name" placeholder="Enter New Feature" class="form-control"><br>
	<button class="btn btn-primary">Add</button>
</div>
</form>
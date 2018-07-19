@extends('layouts.app')
@section('content')
<div class="row justify-content-center">
<div class="container" style="margin: 3em; background-color: white; border-radius: 5px" >
	
	<table class="table table-hover">
  <thead>
    <tr>
      <th>User ID</th>
      <th>User Name</th>
      <th>Email</th>
    </tr>
  </thead>
  <tbody>
  	@foreach($users as $user)
    <tr>
      <th scope="row">{{$user->id}}</th>
      <td>{{$user->name}}</td>  
      <td>{{$user->email}}</td>
    </tr>
    @endforeach
  </tbody>
</table>
</div>
</div>
    <div class="row justify-content-center">
    	{{ $users->links() }}
    </div>
@endsection
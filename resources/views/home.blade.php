@extends('layouts.app')

@section('content')
  <div class="jumbotron text-center landingpage" style="margin-top: 0px;">
    <h1 class="display-3">venyu</h1> 
    <p class="lead">FInd the right venue for your event now</p> 
    <div class="row justify-content-center">
    <form class="form-inline">
    <input type="email" class="form-control" size="50" placeholder="Email Address">
    <button type="button" class="btn btn-danger">Search</button>
    </form>
    </div>
  </div>
    <div class="container-fluid instructions">
      <h3 class="text-center">
         How to Search for a Venue 
      </h3>
      <div class="container">
          <div class="row">
              <div class="col-md-4 text-center">
                <i class="fas fa-seach"></i>
                <h4 >Browse</h3>
                  Search using detailed filters to find a venue
              </div>
              <div class="col-md-4 text-center">
                <i></i>
                <h4>Connect</h3>
                  Communicate insantly with venues on our easy to use platform
              </div>
              <div class="col-md-4 text-center">
                <i></i>
                <h4>Book</h3>
                  Secure a location and host your unforgettable event
              </div>
          </div>
      </div>
  </div>
@endsection
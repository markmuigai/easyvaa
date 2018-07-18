@extends('layouts.app')
@section('content')

  <div class="jumbotron text-center text-white landingpage " style="margin-top: 0px; margin-bottom: 0px;">
    <h1 class="display-3">venyu</h1> 
    <p class="lead">FInd the right venue for your event now</p> 
    <div class="row justify-content-center">
    </div>
  </div>
    <div style="padding-top: 1em; padding-bottom: 2em;" class="container-fluid instructions bg-white">
      <h3 style=" padding-bottom: 1em; " class="text-center">
         How to Search for a Venue 
      </h3>
      <div class="container">
          <div class="row">
              <div class="col-md-4 text-center">
                <span style="padding: 1em" class="text-primary">
                  <i  class="fas fa-search fa-5x"></i>
                </span>
                <h4 style="padding-top: 1em;">Browse</h3>
                  Search using detailed filters to find a venue
              </div>
              <div class="col-md-4 text-center">
                <span style="padding: 10px" class="text-primary">
                  <i class="fas fa-comments fa-5x"></i>
                </span>
                <h4 style="padding-top: 1em;">Connect</h3>
                  Communicate insantly with venues on our easy to use platform
              </div>
              <div class="col-md-4 text-center">
                <span style="padding: 10px" class="text-primary">
                  <i class="fas fa-calendar-alt fa-5x"></i>
                </span>
                <h4 style="padding-top: 1em;">Book</h3>
                  Secure a location and host your unforgettable event
              </div>
          </div>
      </div>
  </div>
  <div class="container">
    <div></div>
  </div>
@endsection

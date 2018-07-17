@extends('layouts.app')
@section('content')
<div class="container-fluid" style="padding: 1em">
	<div class="row justify-content-center">
		<div class="col-md-8" style="padding: 1em">
			<h3>{{$event->event_type}} for {{$event->head_count}} people</h3>
		</div>
	</div>
</div>
@endsection

@extends('layout')
@section('content')
<div class="card">
  <div class="card-header">Event Page</div>
  <div class="card-body">
  <a href="{{ url('faculty/event/') }}" title="View Event"><button class="btn btn-info btn-sm"><i class="fa fa-eye" aria-hidden="true"></i>Back</button></a>
        <div class="card-body">
        <h5 class="card-title">Event Name : {{ $events->name }}</h5>
        
  </div>
  
  <a href="{{ url('faculty/event/' . $events->id . '/attendance/scan') }}" title="View Subject"><button class="btn btn-info btn-sm"><i class="fa fa-eye" aria-hidden="true"></i> Scan Attendance</button></a>
      
    </hr>
  
  </div>
</div>
@stop
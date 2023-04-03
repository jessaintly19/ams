
@extends('layout')
@section('content')
<div class="card">
  <div class="card-header">Subject Page</div>
  <div class="card-body">
  <a href="{{ url('/subject/') }}" title="View Subject"><button class="btn btn-info btn-sm"><i class="fa fa-eye" aria-hidden="true"></i>Back</button></a>
        <div class="card-body">
        <h5 class="card-title">Subject : {{ $subjects->subject }}</h5>
        <h6 class="card-title">Subject Code : {{ $subjects->code }}</h6>
        <p class="card-text">Section : {{ $subjects->section }}</p>
        <p class="card-text">Room : {{ $subjects->room }}</p>
  </div>
  <a href="{{ url('faculty/subject/' . $events->id . '/attendance/scan') }}" title="View Subject"><button class="btn btn-info btn-sm"><i class="fa fa-eye" aria-hidden="true"></i> Scan Attendance</button></a>
      
    </hr>
  
  </div>
</div>
@stop

@extends('layout')
@section('content')
<div class="card">
  <div class="card-header">Create Event</div>
  <div class="card-body">
  <a href="{{ url('faculty/event/') }}" title="View Event"><button class="btn btn-info btn-sm"><i class="fa fa-eye" aria-hidden="true"></i>Back</button></a>
      <form action="{{ url('faculty/event') }}" method="post">
        {!! csrf_field() !!}
        <label>Event</label></br>
        <input type="text" name="name" id="name" class="form-control"></br>
        <!-- <label>Subject Code</label></br>
        <input type="text" name="code" id="code" class="form-control"></br>
        <label>Section</label></br>
        <input type="text" name="section" id="section" class="form-control"></br> -->
        <input type="submit" value="Save" class="btn btn-success"></br>
    </form>
  
  </div>  
</div>
@stop
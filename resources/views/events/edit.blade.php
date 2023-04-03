@extends('layout')
@section('content')
<div class="card">
  <div class="card-header">Edit Event Information</div>
  <div class="card-body">
  <a href="{{ url('faculty/event/') }}" title="View Event"><button class="btn btn-info btn-sm"><i class="fa fa-eye" aria-hidden="true"></i>Back</button></a><br><br>
      <form action="{{ url('faculty/event/' .$events->id) }}" method="post">
        {!! csrf_field() !!}
        @method("PATCH")
        <input type="hidden" name="id" id="id" value="{{$events->id}}" id="id" />
        <label>Event Name</label></br>
        <input type="text" name="name" id="name" value="{{$events->name}}" class="form-control"></br>
        
        <input type="submit" value="Update" class="btn btn-success"></br>
    </form> 
  </div>
</div>
@stop
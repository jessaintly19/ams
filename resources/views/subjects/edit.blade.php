@extends('layout')
@section('content')
<div class="card">
  <div class="card-header">Edit Class Information</div>
  <div class="card-body">
  <a href="{{ url('/subject/') }}" title="View Subject"><button class="btn btn-info btn-sm"><i class="fa fa-eye" aria-hidden="true"></i>Back</button></a><br><br>
      <form action="{{ url('subject/' .$subjects->id) }}" method="post">
        {!! csrf_field() !!}
        @method("PATCH")
        <input type="hidden" name="id" id="id" value="{{$subjects->id}}" id="id" />
        <label>Subject</label></br>
        <input type="text" name="subject" id="subject" value="{{$subjects->subject}}" class="form-control"></br>
        <label>Subject Code</label></br>
        <input type="text" name="code" id="code" value="{{$subjects->code}}" class="form-control"></br>
        <label>Section</label></br>
        <input type="text" name="section" id="section" value="{{$subjects->section}}" class="form-control"></br>
        <input type="submit" value="Update" class="btn btn-success"></br>
    </form>
  
  </div>
</div>
@stop
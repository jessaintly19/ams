
@extends('layout')
@section('content')
<div class="card">
  <div class="card-header">Subject Page</div>
  <div class="card-body">
  <a href="{{ url('/subject/') }}" title="View Subject"><button class="btn btn-info btn-sm"><i class="fa fa-eye" aria-hidden="true"></i>Back</button></a>
      <form action="{{ url('subject') }}" method="post">
        {!! csrf_field() !!}
        <label>Subject</label></br>
        <input type="text" name="subject" id="subject" class="form-control"></br>
        <label>Subject Code</label></br>
        <input type="text" name="code" id="code" class="form-control"></br>
        <label>Section</label></br>
        <input type="text" name="section" id="section" class="form-control"></br>
        <input type="submit" value="Save" class="btn btn-success"></br>
    </form>
  
  </div>
</div>
@stop
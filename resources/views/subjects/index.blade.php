@extends('layouts.app')
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-9">
                <div class="card">
                    <div class="card-body">
                        <a href="{{ url('/subject/create') }}" class="btn btn-success btn-sm" title="Add New Subject">
                            <i class="fa fa-plus" aria-hidden="true"></i> Add New
                        </a>
                        <br/>
                        <br/>         
                                @foreach($subjects as $item)
                                <div class="card border-primary mb-3" style="max-width: 50rem;">
                                <div class="card-header">{{ $item->code }}</div>
                                    <div class="card-body">
                                        <h4 class="card-title">{{ $item->subject }}</h4>
                                        <h6 class="card-title">{{ $item->section }}</h6>
                                        <p class="card-text">
                                        <a href="{{ url('/subject/' . $item->id) }}" title="View Subject"><button class="btn btn-info btn-sm"><i class="fa fa-eye" aria-hidden="true"></i> View</button></a>
                                            <a href="{{ url('/subject/' . $item->id . '/edit') }}" title="Edit Subject"><button class="btn btn-primary btn-sm"><i class="fa fa-pencil-square-o" aria-hidden="true"></i> Edit</button></a>
                                            <form method="POST" action="{{ url('/subject' . '/' . $item->id) }}" accept-charset="UTF-8" style="display:inline">
                                                {{ method_field('DELETE') }}
                                                {{ csrf_field() }}
                                                <button type="submit" class="btn btn-danger">Delete</button>
                                                <!-- <button type="submit" class="btn btn-danger btn-sm" title="Delete Subject" onclick="return confirm(&quot;Confirm delete?&quot;)"><i class="fa fa-trash-o" aria-hidden="true"></i> Delete</button> -->
                                            </form>
                                        </p>
                                    </div>
                                </div>
                                @endforeach
                        
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
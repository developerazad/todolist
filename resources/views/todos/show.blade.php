@extends('layouts.app')

@section('content')

    <a href="{{ url('/') }}" class="btn btn-default">Back</a>
    <h2>{{ $todo->text }}</h2>
    <div class="label label-danger">{{ $todo->due }}</div>
    <hr>
    <p>{{ $todo->body }}</p>
    <br>
    <a href="{{ url('/todo/'.$todo->id.'/edit') }}" class="btn btn-default">Edit</a>

    {{ Form::open(['action' => ['TodosController@destroy',$todo->id],'method'=>'POST','class'=>'pull-right']) }}
        {{ Form::hidden('_method','DELETE') }}
        {{ Form::bsSubmit('Delete', ['class' => 'btn btn-danger']) }}
    {{ Form::close() }}

@endsection
@extends('layouts.app')

@section('content')
    <a href="{{ url('/todo/'.$todo->id) }}" class="btn btn-default">Back</a>
    <h2>Edit Todo:</h2>

    {{ Form::open(array('action' => ['TodosController@update',$todo->id],'method' => 'POST')) }}

    {{ Form::bsText('text',$todo->text) }}
    {{ Form::bsTextArea('body',$todo->body) }}
    {{ Form::bsText('due',$todo->due) }}
    {{ Form::hidden('_method','PUT') }}
    {{ Form::bsSubmit('Submit') }}

    {{ Form::close() }}
    <br>

@endsection
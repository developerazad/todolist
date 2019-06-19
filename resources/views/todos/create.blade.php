@extends('layouts.app')

@section('content')
    <h2>Create Todo:</h2>

    {{ Form::open(array('action' => 'TodosController@store','method' => 'POST')) }}

        {{ Form::bsText('text') }}
        {{ Form::bsTextArea('body') }}
        {{ Form::bsText('due') }}
        {{ Form::bsSubmit('Submit') }}


    {{ Form::close() }}
@endsection
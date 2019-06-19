@extends('layouts.app')

@section('content')

    <a href="{{ url('/') }}" class="btn btn-default">Back</a>
    <h2>{{ $todo->text }}</h2>
    <div class="label label-danger">{{ $todo->due }}</div>
    <hr>
    <p>{{ $todo->body }}</p>
    <br>
    <a href="{{ url('/todo/'.$todo->id.'/edit') }}" class="btn btn-default">Edit</a>

@endsection
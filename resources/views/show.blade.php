@extends('layouts.app');

@section('content')
    <a href="/" class="btn btn-info mt-2">Go Back</a>
    <h1>{{$todo->title}}</h1>
    <div class="label label-danger">{{$todo->due}}</div>
    <hr>
    <p>{{$todo->content}}</p>
    <a href="/todo/{{$todo->id}}/edit" class="btn btn-info mt-2">Edit</a>

@endsection
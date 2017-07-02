@extends('layouts.default')
@section('content')
  <div class="jumbotron">
    <h1>hello everyone</h1>
    <p class="lead">
      everything starts with so sad
    </p>
    <p>
      <a class="btn btn-lg btn-success" href="{{ route('signup') }}" role="button">register now</a>
    </p>
  </div>
@stop

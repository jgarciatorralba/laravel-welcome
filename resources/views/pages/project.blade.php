@extends('layouts.app')

@section('content')
  <div class="wrapper d-flex justify-content-center align-items-center align-self-center flex-nowrap">
    <div class="jumbotron my-0 mx-3">
      <h1 class="my-3">Welcome to the project "{{ config('app.name') }}"</h1>
      <p>This is a Laravel application build as a demo to get to know the framework for the first time</p>
      <p class="text-center"><a class="btn btn-primary btn-lg" href="/" role="button">Back</a></p>
    </div>
  </div>
@endsection

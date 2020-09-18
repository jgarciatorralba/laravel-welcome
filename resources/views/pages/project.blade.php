@extends('layouts.app')

@section('content')
  <div class="wrapper d-flex justify-content-center align-items-center align-self-center flex-nowrap">
    <div class="jumbotron my-0 mx-3">
      <h1 class="my-3 text-center">Welcome to the project "{{ config('app.name') }}!"</h1>
      <p class="text-center">This is a Laravel application built as a demo to get to know the framework.</p>
      <p class="text-center"><a class="btn btn-primary btn-lg" href="/" role="button">Back</a></p>
    </div>
  </div>
@endsection

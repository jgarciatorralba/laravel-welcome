@extends('layouts.app')

@section('content')
  <div class="d-flex justify-content-center align-items-center align-self-center flex-nowrap m-5 p-3">
    <div class="container col-6">
      <h1 class="text-center my-3">
        Contact Form
      </h1>
      <form method="POST" action="/contact" id="contentForm" autocomplete="off">
        @csrf
        <div class="form-group">
          <input class="form-control" type="text" name="first-name" id="first-name" placeholder="First Name">
        </div>
        <div class="form-group">
          <input class="form-control" type="text" name="last-name" id="last-name" placeholder="Last Name">
        </div>
        <div class="form-group">
          <input class="form-control" type="email" name="email" id="email" placeholder="Valid email address">
        </div>
        <div class="form-group">
          <input class="form-control" type="number" name="age" id="age" placeholder="Age">
        </div>
        <div class="form-group">
          <textarea class="form-control" name="body" id="body" cols="30" rows="10" form="contentForm" placeholder="Subject (min. 55 characters)"></textarea>
        </div>
        <div class="text-center">
          <button type="submit" class="btn btn-primary btn-lg">Submit</button>
          <a class="btn btn-secondary btn-lg ml-1" href="/" role="button">Back</a>
        </div>
      </form>
    </div>
  </div>
@endsection
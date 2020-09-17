@extends('layouts.app')

@section('content')
  @if (isset($confirmation))
    <div class="container alert alert-success">
      <p class="my-0">{{$confirmation}}</p>
    </div>
  @endif

  <div class="d-flex justify-content-center align-items-center align-self-center flex-nowrap mb-5 pb-3">
    <div class="container col-6">
      <h1 class="text-center my-3">
        Contact Form
      </h1>
      <form method="POST" action="/contact" id="contactForm" autocomplete="off">
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
          <textarea class="form-control" name="subject" id="subject" cols="30" rows="10" form="contactForm" placeholder="Subject (min. 55 characters)"></textarea>
        </div>
        <div class="mb-3">
          <button type="submit" class="btn btn-primary">Submit</button>
          <a class="btn btn-secondary ml-1" href="/" role="button">Back</a>
        </div>
      </form>
    </div>
  </div>
@endsection
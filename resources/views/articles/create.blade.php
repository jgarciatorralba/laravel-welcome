@extends('layouts.app')

@section('content')
  <div class="d-flex justify-content-center align-items-center align-self-center flex-nowrap mb-5 pb-3">
    <div class="container col-6">
      <h1 class="text-center my-3">
        Create Article
      </h1>
      <form method="POST" action="/create" id="createForm" autocomplete="off">

      </form>
    </div>
  </div>
@endsection
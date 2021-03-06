@extends('layouts.app')

@section('content')
  <div class="container text-center mb-5">
    <div class="container chart-container d-flex justify-content-center align-items-center border bg-white">
      <p id="fallback-text">Your stats will be displayed here.</p>
      <canvas class="d-none" id="myChart" width="600" height="300">
      </canvas>
    </div>
    <a id="stats-btn" class="btn btn-primary mt-3">
      <svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-bar-chart-line-fill" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
        <path fill-rule="evenodd" d="M11 2a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1v12h.5a.5.5 0 0 1 0 1H.5a.5.5 0 0 1 0-1H1v-3a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1v3h1V7a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1v7h1V2z"/>
      </svg>
      Show stats
    </a>
  </div>
@endsection
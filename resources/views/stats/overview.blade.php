

@extends('layouts.app')

@section('content')
  <div class="container d-flex justify-content-center align-items-center">
    <?php
      echo json_encode($visits);
    ?>
    <canvas id="myChart" width="600" height="300">
      <p>Hello Fallback World</p>
    </canvas>
  </div>
@endsection
@extends('layouts.app')

@section('content')
<div class="container mb-5">
  <div class="card">
    <div class="card-header">
      <h1 class="card-title my-3">{{$article->title}}</h1>
      <h3 class="card-subtitle text-muted my-2">{{$article->summary}}</h3>
    </div>
    <div class="card-body">
      <div class="mb-3 card-text">
        {{$article->content}}
      </div>
      <hr class="my-0">
      <div class="mt-3">
        <small>
          <p class="mb-1">Written on {{$article->created_at}}</p>
          <p class="mb-3">Last modified on {{$article->updated_at}}</p>
        </small>
      </div>
      <hr class="my-0">
      <div class="mt-3">
        <a class="btn btn-primary" href="/articles/{{$article->slug}}/edit">
          Edit
        </a>
        <form class="d-inline" action="/articles/{{$article->id}}" method="POST">
          <input type="hidden" name="_method" value="DELETE">
          <input type="hidden" name="_token" value="{{ csrf_token() }}">
          <input type="submit" value="Delete" class="btn btn-secondary">
        </form>
      </div>
    </div>
  </div>
</div>
@endsection

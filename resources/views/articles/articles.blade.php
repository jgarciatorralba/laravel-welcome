@extends('layouts.app')

@section('content')
<div class="container">
  <h1>Articles</h1>
  @if (count($articles) > 0)
    @foreach ($articles as $article)
      <div class="card my-3">
        <div class="card-header">
          <h4 class="my-0">
            <a class="text-decoration-none my-0" href="/articles/{{$article->slug}}">
              {{$article->title}}
            </a>
          </h4>
        </div>
        <div class="card-body">
          <p class="card-text">{{$article->summary}}</p>
          <small>Written on {{$article->created_at}}</small>
        </div>
      </div>
    @endforeach
  @else
    <p>No articles found</p>
  @endif
</div>
@endsection
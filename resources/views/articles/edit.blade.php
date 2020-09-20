@extends('layouts.app')

@section('content')
  <div class="d-flex justify-content-center align-items-center align-self-center flex-nowrap mb-5 pb-3">
    <div class="container col-6">
      <h1 class="text-center my-3">
        Edit Article
      </h1>

      {!! Form::open(['action' => ['ArticlesController@update', $article->slug], 'method' => 'POST', 'autocomplete' => 'off']) !!}
        <div class="form-group">
          {{Form::label('title', 'Title')}}
          {{Form::text('title', $article->title, ['class' => 'form-control', 'placeholder' => 'Title'])}}
        </div>
        <div class="form-group">
          {{Form::label('summary', 'Summary')}}
          {{Form::text('summary', $article->summary, ['class' => 'form-control', 'placeholder' => 'Summary'])}}
        </div>
        <div class="form-group">
          {{Form::label('content', 'Content')}}
          {{Form::textarea('content', $article->content, ['class' => 'form-control', 'placeholder' => 'Content'])}}
        </div>
        {{Form::hidden('_method', 'PUT')}}
        {{Form::submit('Submit', ['class' => 'btn btn-primary'])}}
      {!! Form::close() !!}
    </div>
  </div>
@endsection
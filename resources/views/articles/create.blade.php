@extends('layouts.ckeditor')

@section('content')
  <div class="d-flex justify-content-center align-items-center align-self-center flex-nowrap mb-5 pb-3">
    <div class="container col-6">
      <h1 class="text-center my-3">
        Create Article
      </h1>

      {!! Form::open(['action' => 'ArticlesController@store', 'method' => 'POST', 'autocomplete' => 'off']) !!}
        <div class="form-group">
          {{Form::label('title', 'Title')}}
          {{Form::text('title', '', ['class' => 'form-control', 'placeholder' => 'Title'])}}
        </div>
        <div class="form-group">
          {{Form::label('summary', 'Summary')}}
          {{Form::text('summary', '', ['class' => 'form-control', 'placeholder' => 'Summary'])}}
        </div>
        <div class="form-group">
          {{Form::label('content', 'Content')}}
          {{Form::textarea('content', '', ['id' => 'article-ckeditor', 'class' => 'form-control', 'placeholder' => 'Content'])}}
        </div>
        {{Form::submit('Submit', ['class' => 'btn btn-primary'])}}
      {!! Form::close() !!}
    </div>
  </div>
@endsection
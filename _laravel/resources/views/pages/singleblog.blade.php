@extends('layouts.main')

@section('content')

<div class="container">
  <div class="row">
  <img src="{{$post->img_url}}" alt="">

  <h1> {{$post->title}}</h1>
  <div class="body">
    {{$post->body}}
  </div>

  </div>
</div>

@endsection

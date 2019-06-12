@extends('layouts.main')

@section('content')
<h1>This is News page</h1>
@endsection

@section('other-content')
  @if (true)
    <h3>This is true</h3>
    @else 
    <h4>This is false</h4>
  @endif
@endsection
